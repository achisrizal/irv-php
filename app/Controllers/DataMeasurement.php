<?php

namespace App\Controllers;

use App\Models\DatameasurementModel;
use App\Models\DatesModel;
use App\Models\GraphqlModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\RESTful\ResourceController;

class DataMeasurement extends ResourceController
{
	protected $graphqlModel, $token, $data_measurement, $datesModel, $timezone = 'UTC';

	public function __construct()
	{
		$this->graphqlModel = new GraphqlModel();
		$this->data_measurement = new DatameasurementModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
		$this->datesModel = new DatesModel();
	}

	public function index()
	{
		$query1 = 'query{
			devices {
			  id
			  nodes{
				id
			  }
			}
		}';

		$gateways = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$gatewaysLength = count($gateways['devices']);

		for ($i = 0; $i < $gatewaysLength; $i++) {
			$gatewayId = $gateways['devices'][$i]['id'];

			$nodesLength = count($gateways['devices'][$i]['nodes']);

			for ($j = 0; $j < $nodesLength; $j++) {
				$nodeId = $gateways['devices'][$i]['nodes'][$j]['id'];

				$startDate = Time::parse('- 1 minute', $this->timezone)->toDateTimeString();
				$endDate = Time::now($this->timezone)->toDateTimeString();
				$date = Time::now()->toDateString();

				// startDate: "2021-08-26 05:19:00"
				// endDate: "2021-08-26 05:20:00"

				// startDate: "' . $startDate . '"
				// endDate: "' . $endDate . '"

				$query2 = 'query {
					vibrations(
						find: {
						deviceId: "' . $gatewayId . '"
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
							z
							y
							x
						}
					}
				}';

				$measurement = $this->graphqlModel->graphqlQuery($query2, $this->token);

				if ($measurement['vibrations'] != null) {
					$date_id = $this->datesModel->searchDateMeasurement($date);

					if ($date_id == []) {
						$data = [
							// 'user_id' => user_id(),
							'date' => $date,
							'type' => 'Measurement',
						];

						$this->datesModel->save($data);

						$date_id = $this->datesModel->searchDateMeasurement($date);
					}

					$measurementLength = count($measurement['vibrations']);

					for ($k = 0; $k < $measurementLength; $k++) {
						$recordedAt = Time::createFromTimestamp($measurement['vibrations'][$k]['recordedAt'], 'UTC');
						$lat = $measurement['vibrations'][$k]['location']['latitude'];
						$lng = $measurement['vibrations'][$k]['location']['longitude'];
						$amplitude_z = $measurement['vibrations'][$k]['data']['z'][0];
						$amplitude_y = $measurement['vibrations'][$k]['data']['y'][0];
						$amplitude_x = $measurement['vibrations'][$k]['data']['x'][0];

						$data = [
							'date_id' => intval($date_id->id),
							'lat' => $lat,
							'lng' => $lng,
							'amplitude_z' => $amplitude_z,
							'amplitude_y' => $amplitude_y,
							'amplitude_x' => $amplitude_x,
							'recorded_at' => $recordedAt,
						];

						$this->data_measurement->save($data);
					}
				}
			}
		}
	}
}
