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
			'user_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
			],
			'date' => [
				'type' => 'date',
			],
			'type' => [
				'type' => 'varchar',
				'constraint' => 100,
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
		$this->forge->addKey(['user_id']);
		$this->forge->addForeignKey('user_id', 'users', 'id', false, 'CASCADE');
		$this->forge->createTable('dates', true);
	}

	public function down()
	{
		$this->forge->dropTable('dates', true);
	}
}
