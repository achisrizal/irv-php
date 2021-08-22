<?php

namespace App\Models;

use CodeIgniter\Model;

class DatameasurementModel extends Model
{
	protected $table = 'data_measurement';
	protected $useTimestamps = true;
	protected $allowedFields = ['user_id', 'date_id', 'position_id', 'station_start_id', 'station_end_id', 'lat', 'lng', 'amplitude_z', 'amplitude_y', 'amplitude_x'];

	public function getFilter($date)
	{
		$builder = $this->table('data');
		$builder->select('data_measurement.id as datameasurementid, lat, lng, amplitude_z, date')
			->join('dates', 'dates.id = data_measurement.date_id')
			->where('date =', $date);

		$query = $builder->get()->getResultArray();

		return $query;
	}
}
