<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupsSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'superadmin',
				'description' => 'Super Administrator',
			],
			[
				'name' => 'admin',
				'description' => 'Administrator',
			],
			[
				'name' => 'user',
				'description' => 'User',
			],
		];

		// Simple Queries
		// $this->db->query("INSERT INTO auth_groups (username, email) VALUES(:username:, :email:)", $data);

		// Using Query Builder
		// $this->db->table('auth_groups')->insert($data);

		$this->db->table('auth_groups')->insertBatch($data);
	}
}
