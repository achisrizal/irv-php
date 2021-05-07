<?php

namespace App\Controllers;

class Superadmin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'validation' => \Config\Services::validation(),
		];

		return view('user/dashboard', $data);
	}
}
