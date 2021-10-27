<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Entities\User;
use \Myth\Auth\Config\Auth;
use \App\Models\UsersModel;

class Profile extends ResourceController
{
	protected $userModel, $config, $usersModel, $user;

	public function __construct()
	{
		$this->userModel = new UserModel();
		$this->config = new Auth();
		$this->usersModel = new UsersModel();
		$this->user = new User();
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

	public function password()
	{
		$data = [
			'title' => 'Profile - Change Password',
			'validation' => \Config\Services::validation(),
		];

		return view('user/profile/password', $data);
	}

	public function changePassword($id = null)
	{
		if (!$this->validate([
			'pass_old' => 'required',
			'pass_new' => 'required|min_length[3]',
			'pass_confirm' => 'required|matches[pass_new]',
		])) {
			return redirect()->back()->withInput();
		}

		$pass_old = $this->request->getVar('pass_old');
		$pass_new = $this->request->getVar('pass_new');
		$user_id = $this->request->getVar('user_id');
		$user_pass = $this->request->getVar('user_pass');

		$hashOptions = [
			'cost' => $this->config->hashCost
		];

		if (password_verify(
			base64_encode(
				hash('sha384', $pass_old, true)
			),
			$user_pass
		) == false) {
			session()->setFlashdata('message', 'Wrong old password!');
			return redirect()->back()->withInput();
		} else {
			if ($pass_old == $pass_new) {
				session()->setFlashdata('message', 'New password cannot be the same as old password!');
				return redirect()->back()->withInput();
			} else {
				$password_hash = password_hash(
					base64_encode(
						hash('sha384', $pass_new, true)
					),
					$this->config->hashAlgorithm,
					$hashOptions
				);

				$data = [
					'password_hash' => $password_hash,
				];

				$this->usersModel->update($user_id, $data);
				session()->setFlashdata('message', 'Password Changed');

				return redirect()->to('/profile');
			}
		}

		// session()->setFlashdata('message', 'Data created successfully');
	}
}
