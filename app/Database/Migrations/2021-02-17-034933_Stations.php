<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stations extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'varchar',
				'constraint' => 100,
			],
			'slug' => [
				'type' => 'varchar',
				'constraint' => 100,
				'null' => true,
			],
			'lat' => [
				'type' => 'float',
				'constraint' => '10,5',
			],
			'lng' => [
				'type' => 'float',
				'constraint' => '10,5',
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('stations', true);
	}

	public function down()
	{
		$this->forge->dropTable('stations', true);
	}
}
