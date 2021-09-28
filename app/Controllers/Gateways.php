<?php

namespace App\Controllers;

use App\Models\GatewaysModel;
use CodeIgniter\RESTful\ResourceController;

class Gateways extends ResourceController
{
	protected $gatewaysModel;

	public function __construct()
	{
		$this->gatewaysModel = new GatewaysModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		//
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
		if (!$this->validate([
			'gateway' => 'required|is_unique[gateways.gateway]',
		])) {
			session()->setFlashdata('error', 'Data failed to generate');

			return redirect()->back()->withInput();
		}

		$user_id = $this->request->getVar('user_id');
		$gateway = $this->request->getVar('gateway');

		$data = [
			'user_id' => $user_id,
			'gateway' => $gateway,
		];

		d($data);

		$this->gatewaysModel->save($data);

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
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function deleteData($gateway)
	{
		$this->gatewaysModel->where('gateway', $gateway)->delete();

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->back();
	}
}
