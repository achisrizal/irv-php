<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\StationsModel;
use CodeIgniter\I18n\Time;

class Stations extends ResourceController
{
	protected $stationsModel;

	public function __construct()
	{
		$this->stationsModel = new StationsModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$this->stationsModel->orderBy('name', 'asc');
		$stations = $this->stationsModel->getStations();

		$data = [
			'title' => 'Railway Station',
			'stations' => $stations,
			'validation' => \Config\Services::validation(),
		];

		return view('user/stations/index', $data);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$data = [
			'title' => 'Railway Station - Detail',
			'stations' => $this->stationsModel->getStations($id),
		];

		if (empty($data['stations'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}

		return view('user/stations/show', $data);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		$data = [
			'title' => 'Railway Station - New',
			'validation' => \Config\Services::validation(),
		];

		return view('user/stations/new', $data);
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		// if (!$this->validate([
		// 	'name' => [
		// 		'rules' => 'required|is_unique[stations.name]',
		// 		'errors' => [
		// 			'required' => 'pesan custom',
		// 		]
		// 	],
		// ])) {
		// 	return redirect()->to('/stations/new')->withInput();
		// }

		if (!$this->validate([
			'name' => 'required|is_unique[stations.name]',
			'lat' => 'required',
			'lng' => 'required',
		])) {
			return redirect()->back()->withInput();
		}

		$slug = url_title($this->request->getVar('name'), '-', true);

		$data = [
			'name' => strtoupper($this->request->getVar('name')),
			'slug' => $slug,
			'lat' => $this->request->getVar('lat'),
			'lng' => $this->request->getVar('lng'),
		];

		$this->stationsModel->save($data);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->to('/stations');
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		$data = [
			'title' => 'Railway Station - Edit',
			'validation' => \Config\Services::validation(),
			'stations' => $this->stationsModel->getStations($id),
		];

		return view('user/stations/edit', $data);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		if (!$this->validate([
			'name' => "required|is_unique[stations.name,name,{name}]",
			'lat' => 'required',
			'lng' => 'required',
		])) {

			return redirect()->back()->withInput();
		}

		$slug = url_title($this->request->getVar('name'), '-', true);

		$data = [
			'name' => strtoupper($this->request->getVar('name')),
			'slug' => $slug,
			'lat' => $this->request->getVar('lat'),
			'lng' => $this->request->getVar('lng'),
		];

		$this->stationsModel->update($id, $data);

		session()->setFlashdata('message', 'Data updated successfully');

		return redirect()->to('/stations');
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$this->stationsModel->delete($id);

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->to('/stations');
	}

	public function upload()
	{
		if (!$this->validate([
			'csv' => 'uploaded[csv]',
		])) {
			return redirect()->back()->withInput();
		}

		$filename = $this->request->getFile('csv');

		$file = fopen($filename, 'r');

		$builder = $this->stationsModel->builder();

		$data = [];

		while (!feof($file)) {
			$column = fgetcsv($file, 1000, ",");

			// dd($column);
			$name = $column[0] ?? '';
			$lat = $column[1] ?? '';
			$lng = $column[2] ?? '';
			$slug = url_title($name, '-', true);

			$row = [
				'name' => $name,
				'slug' => $slug,
				'lat' => $lat,
				'lng' => $lng,
				'created_at' => Time::now(),
				'updated_at' => Time::now(),
			];
			array_push($data, $row);
		}

		$builder->insertBatch($data);

		fclose($file);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->to('/stations');
	}
}


// $validation->setRules(['email' => 'required|valid_email|is_unique[users.email,id,{id}]']);
