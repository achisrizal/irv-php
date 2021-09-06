<?php

namespace App\Models;

use CodeIgniter\Model;

class DatesModel extends Model
{
	protected $table = 'dates';
	protected $useTimestamps = true;
	protected $allowedFields = ['user_id', 'date', 'type'];

	public function getDates($id = false)
	{
		if ($id == false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}

	public function countDatesAnalysis($user_id)
	{
		$builder = $this->table('dates');
		$builder->select('dates.id as datesid, date, type, count(data.date_id) as total')
			->join('data', 'data.date_id = dates.id')
			->where('dates.user_id', $user_id)
			->where('data.user_id', $user_id)
			->groupBy('date')
			->orderBy('date', 'desc');

		$query = $builder->get()->getResultArray();

		return $query;
	}

	public function countDatesMeasurement($user_id)
	{
		$builder = $this->table('dates');
		$builder->select('dates.id as datesid, date, type, count(data_measurement.date_id) as total')
			->join('data_measurement', 'data_measurement.date_id = dates.id')
			->where('dates.user_id', $user_id)
			->where('data_measurement.user_id', $user_id)
			->groupBy('date')
			->orderBy('date', 'desc');

		$query = $builder->get()->getResultArray();

		return $query;
	}

	public function getDateFirst($user_id)
	{
		$builder = $this->table('dates');
		$builder->select('date')
			->where('dates.user_id', $user_id);

		$query = $builder->get()->getFirstRow();

		return $query;
	}

	public function searchDateAnalysis($date, $user_id)
	{
		$builder = $this->table('dates');
		$builder->select('id')
			->where('dates.user_id', $user_id)
			->where('type', 'Analysis')
			->where('date', $date);

		$query = $builder->get()->getRow();

		return $query;
	}

	public function searchDateMeasurement($date, $user_id)
	{
		$builder = $this->table('dates');
		$builder->select('id')
			->where('dates.user_id', $user_id)
			->where('type', 'Measurement')
			->where('date', $date);

		$query = $builder->get()->getRow();

		return $query;
	}
}
