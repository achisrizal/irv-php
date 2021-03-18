<?php

namespace App\Controllers;

class Superadmin extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';

		return view('user/dashboard', $data);
	}
}
