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

	public function countDates()
	{
		$builder = $this->table('dates');
		$builder->select('dates.id as datesid, date, count(date_id) as total')
			->join('data', 'data.date_id = dates.id')
			->groupBy('date')
			->orderBy('date', 'desc');

		$query = $builder->get()->getResultArray();

		return $query;
	}

	public function getDateFirst()
	{
		$builder = $this->table('dates');
		$builder->select('date');
		$query = $builder->get()->getFirstRow('array');

		return $query;
	}
}
