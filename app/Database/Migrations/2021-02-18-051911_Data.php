<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
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
			'user_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],
			'date_id' => [
				'type' => 'int',
				'constraint' => 10,
				'unsigned' => true,
				'null' => true,
			],
			'position_id' => [
				'type' => 'int',
				'constraint' => 10,
				'unsigned' => true,
				'null' => true,
			],
			'lat' => [
				'type' => 'float',
				'constraint' => '10,4',
			],
			'lng' => [
				'type' => 'float',
				'constraint' => '10,4',
			],
			'amplitude' => [
				'type' => 'float',
				'constraint' => '5,2',
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
		$this->forge->addKey(['user_id', 'date_id', 'position_id']);
		$this->forge->addForeignKey('user_id', 'users', 'id', false, 'CASCADE');
		$this->forge->addForeignKey('date_id', 'dates', 'id', false, 'CASCADE');
		$this->forge->addForeignKey('position_id', 'positions', 'id', false, 'CASCADE');
		$this->forge->createTable('data', true);
	}

	public function down()
	{
		$this->forge->dropTable('data', true);
	}
}
