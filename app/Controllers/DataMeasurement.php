<?php

namespace App\Controllers;

use App\Models\DatameasurementModel;
use App\Models\GraphqlModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\RESTful\ResourceController;

class DataMeasurement extends ResourceController
{
	protected $graphqlModel, $token, $data_measurement, $timezone = 'Asia/Jakarta';

	public function __construct()
	{
		$this->graphqlModel = new GraphqlModel();
		$this->data_measurement = new DatameasurementModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
	}

	public function index()
	{

		$this->startDate = Time::now($this->timezone)->toDateTimeString();
		$this->endDate = Time::parse('+ 3 second', $this->timezone)->toDateTimeString();

		$query3 = 'query {
			vibrations(
				find: {
				deviceId: "' . $this->deviceId . '"
				nodeIds: ["' . $this->nodeId . '"]
				startDate: "' . $this->startDate . '"
				endDate: "' . $this->endDate . '"
				}
			) {
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
	}
}
