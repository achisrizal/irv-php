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
		$users = $this->manageadminModel->getUsers();

		$data = [
			'title' => 'Administrator',
			'users' => $users,
			'validation' => \Config\Services::validation(),
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
		$data = [
			'title' => 'Administrator - Detail',
			'users' => $this->manageadminModel->getUsers($id),
		];

		if (empty($data['users'])) {
			return redirect()->to('/manage-admin');
		}

		return view('user/manageadmin/show', $data);
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

	public function delete($userid = null)
	{
		$this->manageadminModel->delete($userid);

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->to('/manage-admin');
	}
}
