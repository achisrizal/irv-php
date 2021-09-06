<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gateways extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],
			'gateway' => [
				'type' => 'varchar',
				'constraint' => 100,
			],

		]);

		$this->forge->addKey(['user_id']);
		$this->forge->addForeignKey('user_id', 'users', 'id', false, 'CASCADE');
		$this->forge->createTable('gateways', true);
	}

	public function down()
	{
		$this->forge->dropTable('gateways', true);
	}
}
