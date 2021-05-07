<?php

namespace App\Controllers;

use \App\Models\DataModel;
use \App\Models\DatesModel;

use CodeIgniter\RESTful\ResourceController;

class Data extends ResourceController
{
	protected $dataModel, $datesModel;

	public function __construct()
	{
		$this->dataModel = new DataModel();
		$this->datesModel = new DatesModel();
	}
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$data = [
			'title' => 'Data on Map',
			'dates' => $this->datesModel->countDates(),
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
		//
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		//
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
}
