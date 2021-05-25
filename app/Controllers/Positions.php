<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\PositionsModel;

class Positions extends ResourceController
{
	protected $positionsModel;

	public function __construct()
	{
		$this->positionsModel = new PositionsModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$this->positionsModel->orderBy('id', 'asc');
		$positions = $this->positionsModel->getPositions();

		$data = [
			'title' => 'Sensor Positions',
			'positions' => $positions,
			'validation' => \Config\Services::validation(),
		];

		return view('user/positions/index', $data);
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
			'stations' => $this->positionsModel->getPositions($id),

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
		//
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		if (!$this->validate([
			'name' => 'required|is_unique[positions.name]',
		])) {
			session()->setFlashdata('error', 'Data failed to generate');

			return redirect()->back()->withInput();
		}

		$name = ucwords($this->request->getVar('name'));
		$slug = url_title($this->request->getVar('name'), '-', true);

		$data = [
			'name' => $name,
			'slug' => $slug,
		];

		$this->positionsModel->save($data);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->back();
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
			'stations' => $this->positionsModel->getStations($id),
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
			'name' => "required|is_unique[positions.name,name,{slug}]",
		])) {
			session()->setFlashdata('error', 'Data failed to generate');
			return redirect()->back()->withInput();
		}

		$name = ucwords($this->request->getVar('name'));
		$slug = url_title($this->request->getVar('name'), '-', true);

		$data = [
			'name' => $name,
			'slug' => $slug,
		];

		$this->positionsModel->update($id, $data);

		session()->setFlashdata('message', 'Data updated successfully');

		return redirect()->to('/positions');
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$this->positionsModel->delete($id);

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->to('/positions');
	}
}

// $validation->setRules(['email' => 'required|valid_email|is_unique[users.email,id,{id}]']);
