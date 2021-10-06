<?php

namespace App\Controllers;

use App\Models\DatameasurementModel;
use App\Models\DatesModel;
use App\Models\GatewaysModel;
use App\Models\GraphqlModel;
use App\Models\PositionsModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\RESTful\ResourceController;

class DataMeasurement extends ResourceController
{
	protected $graphqlModel, $token, $data_measurement, $datesModel, $gatewaysModel, $positionsModel, $timezone = 'UTC';

	public function __construct()
	{
		$this->graphqlModel = new GraphqlModel();
		$this->data_measurement = new DatameasurementModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
		$this->datesModel = new DatesModel();
		$this->gatewaysModel = new GatewaysModel();
		$this->positionsModel = new PositionsModel();
	}

	public function index()
	{
		$query1 = 'query{
			gateways{
			  id
			  nodes{
				id
			  }
			}
		}';

		$gateways = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$gatewaysLength = count($gateways['gateways']);

		for ($i = 0; $i < $gatewaysLength; $i++) {
			$gatewayId = $gateways['gateways'][$i]['id'];

			$gatewayUser = $this->gatewaysModel->getUserId($gatewayId);

			if ($gatewayUser != null) {
				$user_id = $gatewayUser['user_id'];
			} else {
				$user_id = null;
			}

			$nodesLength = count($gateways['gateways'][$i]['nodes']);

			for ($j = 0; $j < $nodesLength; $j++) {
				$nodeId = $gateways['gateways'][$i]['nodes'][$j]['id'];

				$startDate = Time::now($this->timezone)->toDateTimeString();
				$endDate = Time::parse('+ 1 minute', $this->timezone)->toDateTimeString();
				$date = Time::now()->toDateString();

				// startDate: "' . $startDate . '"
				// endDate: "' . $endDate . '"

				// startDate: "2021-10-06T00:00:00"
				// endDate: "2021-10-06T00:00:00"

				$query2 = 'query {
					vibrations(
						where: {
						gatewayId: "' . $gatewayId . '"
						nodeIds: ["' . $nodeId . '"]
						startDate: "' . $startDate . '"
						endDate: "' . $endDate . '"
						}
					) {
						recordedAt
						location{
							latitude
							longitude
						}
						data {
							x
							y
							z
							nodePosition{
								trainComponent
								fr
								lr
							}
						}
					}
				}';

				$measurement = $this->graphqlModel->graphqlQuery($query2, $this->token);

				if ($measurement['vibrations'] != null) {
					$date_id = $this->datesModel->searchDateMeasurement($date, $user_id);

					if ($date_id == []) {
						$data = [
							'user_id' => $user_id,
							'date' => $date,
							'type' => 'Measurement',
						];

						$this->datesModel->save($data);

						$date_id = $this->datesModel->searchDateMeasurement($date, $user_id);
					}

					$measurementLength = count($measurement['vibrations']);

					for ($k = 0; $k < $measurementLength; $k++) {
						$lat = $measurement['vibrations'][$k]['location']['latitude'];
						$lng = $measurement['vibrations'][$k]['location']['longitude'];
						$amplitude_z = $measurement['vibrations'][$k]['data']['x'][0];
						$amplitude_y = $measurement['vibrations'][$k]['data']['y'][0];
						$amplitude_x = $measurement['vibrations'][$k]['data']['z'][0];
						$recorded_at = date('Y-m-d H:i:s', $measurement['vibrations'][$k]['recordedAt']);

						$nodePosition = $measurement['vibrations'][$k]['data']['nodePosition'];

						$position = $nodePosition['trainComponent'] . ' ' . $nodePosition['fr'] . ' ' . $nodePosition['lr'];

						$position_id = $this->positionsModel->getPositionMeasurement($position);

						$data = [
							'user_id' => $user_id,
							'date_id' => intval($date_id->id),
							'position_id' => $position_id['id'],
							'lat' => $lat,
							'lng' => $lng,
							'amplitude_x' => $amplitude_x,
							'amplitude_y' => $amplitude_y,
							'amplitude_z' => $amplitude_z,
							'recorded_at' => $recorded_at,
						];

						$this->data_measurement->save($data);
					}
				}
			}
		}
	}
}
