<?php

namespace App\Controllers;

class Measurement extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Measurement',
			'validation' => \Config\Services::validation(),
		];

		return view('user/measurement', $data);
	}
}
