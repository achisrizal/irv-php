<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Entities\User;
use \Myth\Auth\Config\Auth;


class Profile extends ResourceController
{
	protected $userModel, $config;

	public function __construct()
	{
		$this->userModel = new UserModel();
		$this->config = new Auth();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$data = [
			'title' => 'Profile',
		];

		return view('user/profile/index', $data);
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
		$data = [
			'title' => 'Profile - Change Password',
			'validation' => \Config\Services::validation(),
			'profile' => $this->stationsModel->getStations($id),
		];

		return view('user/profile/index', $data);
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
