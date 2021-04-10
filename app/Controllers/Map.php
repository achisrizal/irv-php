<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\StationsModel;
use \App\Models\DataModel;
use \App\Models\PositionsModel;
use \App\Models\DatesModel;
use CodeIgniter\I18n\Time;

class Map extends ResourceController
{
	protected $stationsModel, $dataModel, $positionsModel, $datesModel;

	public function __construct()
	{
		$this->stationsModel = new StationsModel();
		$this->dataModel = new DataModel();
		$this->positionsModel = new PositionsModel();
		$this->datesModel = new DatesModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		// $a = $this->request->getVar('datefilter');

		// $b = date_create($a);
		// $date = date_format($b, 'd/m/Y');

		$from = $this->request->getVar('from');
		$to = $this->request->getVar('to');
		// d($from, $to);

		$result = $this->dataModel->getData();

		$data = [
			'title' => 'Map',
			'stations' => json_encode($this->stationsModel->getStations()),
			'data' => json_encode($result),
			'positions' => $this->positionsModel->getPositions(),
			'dates' => json_encode($this->datesModel->getDates()),
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
			'positions' => $this->positionsModel->getPositions(),
			'dates' => $this->datesModel->getDates(),
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
			'date' => 'required',
			'position' => 'required',
			'csv' => 'uploaded[csv]',
		])) {
			return redirect()->back()->withInput();
		}

		$filename = $this->request->getFile('csv');
		$file = fopen($filename, 'r');

		$builder = $this->dataModel->builder();

		$data = [];

		while (!feof($file)) {
			$column = fgetcsv($file, 1000, ",");

			$lat = $column[0] ?? '';
			$lng = $column[1] ?? '';
			$amplitude = $column[2] ?? '';

			$row = [
				'user_id' => $this->request->getVar('user_id'),
				'date_id' => $this->request->getVar('date'),
				'position_id' => $this->request->getVar('position'),
				'lat' => $lat,
				'lng' => $lng,
				'amplitude' => $amplitude,
				'created_at' => Time::now(),
				'updated_at' => Time::now(),
			];
			if ($row['lat'] && $row['lng'] && $row['amplitude'] != '') {
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

	public function createDate()
	{
		if (!$this->validate([
			'date' => 'required|is_unique[dates.date]',
		])) {
			session()->setFlashdata('error', 'Data failed to generate');

			return redirect()->back()->withInput();
		}

		$date = ucwords($this->request->getVar('date'));

		$data = [
			'date' => $date,
		];

		$this->datesModel->save($data);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->back();
	}
}
