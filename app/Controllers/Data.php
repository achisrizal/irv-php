<?php

namespace App\Controllers;

use \App\Models\DataModel;
use \App\Models\DatesModel;
use \App\Models\AdminuserModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\RESTful\ResourceController;

class Data extends ResourceController
{
	protected $dataModel, $datesModel, $adminuserModel;

	public function __construct()
	{
		$this->dataModel = new DataModel();
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
		if (in_groups('user')) {
			$user_id = $this->adminuserModel->getAdmin(user_id())['admin_user_id'];
		} else {
			$user_id = user_id();
		}

		$data = [
			'title' => 'Data on Map',
			'datesAnalysis' => $this->datesModel->countDatesAnalysis($user_id),
			'datesMeasurement' => $this->datesModel->countDatesMeasurement($user_id),
			'validation' => \Config\Services::validation(),
		];

		return view('user/data/index', $data);
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
			'title' => 'Upload Data',
			'validation' => \Config\Services::validation(),
		];

		return view('user/data/new', $data);
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
		$user_id = $this->request->getVar('user_id');

		$date_id = $this->datesModel->searchDateAnalysis($date, $user_id);

		if ($date_id == []) {
			$data = [
				'user_id' => user_id(),
				'date' => $date,
				'type' => 'Analysis',
			];

			$this->datesModel->save($data);

			$date_id = $this->datesModel->searchDateAnalysis($date, $user_id);
		}

		$builder = $this->dataModel->builder();

		$data = [];

		while (!feof($file)) {
			$column = fgetcsv($file, 0, ",");

			$lat = round($column[0] ?? '', 4);
			$lng = round($column[1] ?? '', 4);
			$speed = round($column[2] ?? '', 2);
			$amplitude_y = round($column[3] ?? '', 2);
			$amplitude_z = round($column[4] ?? '', 2);
			$p_per_q = round($column[5] ?? '', 2);

			$row = [
				'user_id' => user_id(),
				'date_id' => $date_id->id,
				'position_id' => $position_id,
				'lat' => $lat,
				'lng' => $lng,
				'speed' => $speed,
				'amplitude_y' => $amplitude_y,
				'amplitude_z' => $amplitude_z,
				'p_per_q' => $p_per_q,
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
		$this->datesModel->delete($id);

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->to('/data');
	}

	public function upload()
	{
		$data = [
			'title' => 'Upload Data',
			'validation' => \Config\Services::validation(),
		];

		return view('user/data/new', $data);
	}
}
