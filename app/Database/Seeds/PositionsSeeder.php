<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PositionsSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'Boogie Kiri',

			],
			[
				'name' => 'Boogie Kanan',
			],
		];

		// Simple Queries
		// $this->db->query("INSERT INTO auth_groups (username, email) VALUES(:username:, :email:)", $data);

		// Using Query Builder
		// $this->db->table('auth_groups')->insert($data);

		$this->db->table('positions')->insertBatch($data);
	}
}
