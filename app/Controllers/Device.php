<?php

namespace App\Controllers;

class Device extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Device',
		];

		return view('user/device', $data);
	}
}
