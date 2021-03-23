<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dates extends Migration
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
			'date' => [
				'type' => 'date',
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
		$this->forge->createTable('dates', true);
	}

	public function down()
	{
		$this->forge->dropTable('dates', true);
	}
}
