<?php

namespace App\Controllers;

use \App\Models\UsersModel;

class Superadmin extends BaseController
{
	protected $usersModel;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}
	public function index()
	{
		$admin = $this->usersModel->countAdmin();
		$user = $this->usersModel->countUser();

		$data = [
			'title' => 'Dashboard',
			'admin' => $admin,
			'user' => $user,
			'validation' => \Config\Services::validation(),

		];

		return view('user/dashboard', $data);
	}
}
