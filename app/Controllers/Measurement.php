<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GraphqlModel;
use App\Models\DatameasurementModel;
use CodeIgniter\I18n\Time;

class Measurement extends ResourceController
{
	protected $graphqlModel, $token, $data_measurement;

	public function __construct()
	{
		$this->graphqlModel = new GraphqlModel();
		$this->data_measurement = new DatameasurementModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
	}

	public function index()
	{
		$query1 = 'query {
			devices {
				id
				name
				battery
			}
		}';

		$devices = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$data = [
			'title' => 'Measurement',
			'validation' => \Config\Services::validation(),
			'devices' => $devices['devices'],
		];

		return view('user/measurement/index', $data);
	}

	public function show($id = null)
	{
		$query1 = 'query {
			devices {
				id
				name
				battery
			}
		}';

		$devices = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$query2 = 'query {
			device(id: "' . $id . '") {
				id
				name
				signal
				battery
				temperature
				nodes {
					id
					key
				}
			}
		}';

		$gateway = $this->graphqlModel->graphqlQuery($query2, $this->token);

		$data = [
			'title' => 'Measurement',
			'validation' => \Config\Services::validation(),
			'devices' => $devices['devices'],
			'gateway' => $gateway['device'],
			'token' => $this->token,
		];

		return view('user/measurement/show', $data);
	}
}
