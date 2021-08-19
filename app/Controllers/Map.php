<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\StationsModel;
use \App\Models\DataModel;
use \App\Models\PositionsModel;
use \App\Models\DatesModel;
use CodeIgniter\I18n\Time;
use \App\Models\AdminuserModel;

class Map extends ResourceController
{
	protected $stationsModel, $dataModel, $positionsModel, $datesModel, $adminuserModel;

	public function __construct()
	{
		$this->stationsModel = new StationsModel();
		$this->dataModel = new DataModel();
		$this->positionsModel = new PositionsModel();
		$this->datesModel = new DatesModel();
		$this->adminuserModel = new AdminuserModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		if (!in_groups(['superadmin', 'admin'])) {
			$admin_id = $this->adminuserModel->getAdmin(user_id())->userid;
			$user_id = $admin_id;
		} else {
			$user_id = user_id();
		}

		$stations = $this->stationsModel->getStations();
		$start = $this->request->getVar('start');
		$positions = $this->positionsModel->getPositions();
		$positionsId = $this->positionsModel->getPositionsId();
		$first = $this->datesModel->getDateFirst($user_id);
		$today = Time::createFromDate()->toDateString();
		$checked = [];

		if (isset($_POST['select'])) {
			$checked = $_POST['select'];
		} else {
			foreach ($positionsId as $p) {
				$checked[] = ($p['id']);
			}
		}

		if ($first == null) {
			$result = null;
			$end = $today;
		} else {
			if ($this->request->getVar('start') == null) {
				$start = $first->date;
			} else {
				$start = $this->request->getVar('start');
			}

			if ($this->request->getVar('end') == null) {
				$end = $today;
			} else {
				$end = $this->request->getVar('end');
			}

			$result = $this->dataModel->getFilter($user_id, $start, $end, $checked);
		}

		$features = [];

		foreach ($stations as $s) {
			$features[] = array(
				'title' => $s['name'],
				'type' => 'Feature',
				'properties' => array(
					'time' => Time::now(),
					'popupContent' => $s['name'],
				),
				'geometry' => array(
					'type' => 'Point',
					'coordinates' => array(
						$s['lng'],
						$s['lat'],
					),
				),
			);
		}

		$new_data = array(
			'type' => 'FeatureCollection',
			'features' => $features,
		);

		$final_data = json_encode($new_data, JSON_PRETTY_PRINT);

		$data = [
			'title' => 'Map',
			'stations' => json_encode($stations),
			'geojson' => $final_data,
			'data' => json_encode($result),
			'checked' => $checked,
			'start' => $start,
			'end' => $end,
			'positions' => $positions,
			'dates' => json_encode($this->datesModel->getDates()),
			'validation' => \Config\Services::validation(),
		];

		return view('user/map/index', $data);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		$data = [
			'title' => 'Map - Upload',
			'validation' => \Config\Services::validation(),
		];

		return view('user/map/new', $data);
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		if (!$this->validate([
			'csv' => 'uploaded[csv]',
		])) {
			return redirect()->back()->withInput();
		}

		$filename = $this->request->getFile('csv');
		$path = $filename->getName();
		$name = basename($path, ".csv");
		$file = fopen($filename, 'r');
		$date = substr($name, 0, 10);
		$position_id = substr($name, 11);

		if ($this->validate([
			$date => 'is_unique[dates.date]',
		])) {
			$date_id = $this->datesModel->searchDate($date);
		}

		if ($date_id == []) {
			$data = [
				'user_id' => $this->request->getVar('user_id'),
				'date' => $date,
			];

			$this->datesModel->save($data);

			$date_id = $this->datesModel->searchDate($date);
		}

		$builder = $this->dataModel->builder();

		$data = [];

		while (!feof($file)) {
			$column = fgetcsv($file, 0, ",");

			$lat = $column[0] ?? '';
			$lng = $column[1] ?? '';
			$amplitude_z = $column[2] ?? '';

			$row = [
				'user_id' => $this->request->getVar('user_id'),
				'date_id' => $date_id->id,
				'position_id' => $position_id,
				'lat' => $lat,
				'lng' => $lng,
				'amplitude_z' => $amplitude_z,
				'created_at' => Time::now(),
				'updated_at' => Time::now(),
			];

			if ($row['lat'] != '') {
				array_push($data, $row);
			}
		}

		$builder->insertBatch($data);
		fclose($file);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->to('/map');
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		//
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}

	public function viewDownload()
	{
		$data = [
			'title' => 'Download',
		];

		return view('user/map/download', $data);
	}
}
