<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GraphqlModel;
use App\Models\DatameasurementModel;
use App\Models\PositionsModel;
use CodeIgniter\I18n\Time;

class Measurement extends ResourceController
{
	protected $graphqlModel, $laod, $token, $status, $datameasurementModel, $positionsModel;

	public function __construct()
	{
		$this->positionsModel = new PositionsModel();
		$this->graphqlModel = new GraphqlModel();
		$this->datameasurementModel = new DatameasurementModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
	}

	public function index()
	{
		$query1 = 'query {
			gateways {
				id
				name
				battery
			}
		}';

		$gateways = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$data = [
			'title' => 'Measurement',
			'validation' => \Config\Services::validation(),
			'gateways' => $gateways['gateways'],
		];

		echo view('user/measurement/index', $data);
	}

	public function show($id = null)
	{
		if ($this->request->getVar('status') == null) {
			$this->status = 'stop';
		} else {
			$this->status = $this->request->getVar('status');
		}

		$query1 = 'query {
			gateways {
				id
				name
				battery
			}
		}';

		$gateways = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$query2 = 'query{
			gateway(where: {gatewayId: "' . $id . '"}){
				id
				name
				signal
				battery
				temperature
				speed
				location{
					latitude
					longitude
				}
				nodes {
					id
					key
					threshold
					position{
						trainComponent
						fr
						lr
					}
				}
			}
		}';

		$gateway = $this->graphqlModel->graphqlQuery($query2, $this->token);

		// $nodeLength = count($gateway['gateway']['nodes']);

		// for ($i = 0; $i < $nodeLength; $i++) {
		// 	$nodePosition = $gateway['gateway']['nodes'][$i]['position'];

		// 	$position = $nodePosition['trainComponent'] . ' ' . $nodePosition['fr'] . ' ' . $nodePosition['lr'];

		// 	$position_id = $this->positionsModel->getPositionMeasurement($position);

		// 	$checked[] = ($position_id['id']);
		// }

		$date = Time::now()->toDateString();

		$result = $this->datameasurementModel->getDataToday($date, user_id());

		// set_time_limit(60);
		// ini_set('memory_limit', '-1');

		$data = [
			'title' => 'Measurement',
			'validation' => \Config\Services::validation(),
			'gateways' => $gateways['gateways'],
			'gateway' => $gateway['gateway'],
			'token' => $this->token,
			'data' => json_encode($result),
			'status' => $this->status,
		];

		return view('user/measurement/show', $data);
	}
}
