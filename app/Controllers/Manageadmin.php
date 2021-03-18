<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\ManageadminModel;

class Manageadmin extends ResourceController
{
	protected $manageadminModel;

	public function __construct()
	{
		$this->manageadminModel = new ManageadminModel();
	}
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$this->manageadminModel->orderBy('created_at', 'asc');
		$users = $this->manageadminModel->getUsers();

		$data = [
			'title' => 'Administrator',
			'users' => $users,
		];

		return view('user/manageadmin/index', $data);
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
			'title' => 'Administrator - New',
			'validation' => \Config\Services::validation(),
		];

		return view('user/manageadmin/new', $data);
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
		//
	}
}
