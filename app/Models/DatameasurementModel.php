<?php

namespace App\Models;

use CodeIgniter\Model;

class DatameasurementModel extends Model
{
	protected $table = 'data_measurement';
	protected $useTimestamps = true;
	protected $allowedFields = ['user_id', 'date_id', 'position_id', 'station_start_id', 'station_end_id', 'lat', 'lng', 'amplitude_z', 'amplitude_y', 'amplitude_x', 'recorded_at'];

	public function getFilter($user_id, $start, $end, $checked)
	{
		$builder = $this->table('data_measurement');
		$builder->select('data_measurement.id as dataid, lat, lng, amplitude_z, date, name')
			->join('dates', 'dates.id = data_measurement.date_id')
			->join('positions', 'positions.id = data_measurement.position_id')
			->where('data_measurement.user_id', $user_id)
			->where('dates.user_id', $user_id)
			->where('date >=', $start)
			->where('date <=', $end)
			->wherein('position_id', $checked);

		$query = $builder->get()->getResultArray();

		return $query;
	}

	public function getDataToday($date, $user_id)
	{
		$builder = $this->table('data_measurement');
		$builder->select('data_measurement.id as dataid, lat, lng, amplitude_z, date, name')
			->join('dates', 'dates.id = data_measurement.date_id')
			->join('positions', 'positions.id = data_measurement.position_id')
			->where('data_measurement.user_id', $user_id)
			->where('dates.user_id', $user_id)
			->where('date', $date);

		$query = $builder->get()->getResultArray();

		return $query;
	}
}
