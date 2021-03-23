<?php

namespace App\Models;

use CodeIgniter\Model;

class DatesModel extends Model
{
	protected $table = 'dates';
	protected $useTimestamps = true;
	protected $allowedFields = ['date'];

	public function getDates($id = false)
	{
		if ($id == false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
