<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\StationsModel;
use \App\Models\DataModel;
use \App\Models\PositionsModel;
use CodeIgniter\I18n\Time;

class Map extends ResourceController
{
	protected $stationsModel, $dataModel, $positionsModel;

	public function __construct()
	{
		$this->stationsModel = new StationsModel();
		$this->dataModel = new DataModel();
		$this->positionsModel = new PositionsModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$a = $this->request->getVar('date');
		$b = date_create($a);
		$date = date_format($b, 'd/m/Y');

		if ($a) {
			$result = $this->dataModel->where('date', $date)->getData();
		} else {
			$result = $this->dataModel->getData();
		}

		$data = [
			'title' => 'Map',
			'stations' => json_encode($this->stationsModel->getStations()),
			'data' => json_encode($result),
			'positions' => $this->positionsModel->getPositions(),
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
		//
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
			'position_id' => 'required',
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

			$date = $column[0];
			$position_id = $column[1];
			$lat = $column[2];
			$lng = $column[3];
			$amplitude = $column[4];

			$row = [
				'date' => $date,
				'position_id' => $position_id,
				'lat' => $lat,
				'lng' => $lng,
				'amplitude' => $amplitude,
				'created_at' => Time::now(),
				'updated_at' => Time::now(),

			];

			array_push($data, $row);
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
}
