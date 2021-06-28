<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'admin' => [
				'type' => 'varchar',
				'constraint' => 30,
				'null' => true,
			],
			'user_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
			],
		]);

		$this->forge->addKey(['admin', 'user_id']);
		$this->forge->addForeignKey('admin', 'users', 'username', false, 'CASCADE');
		$this->forge->addForeignKey('user_id', 'users', 'id', false, 'CASCADE');
		$this->forge->createTable('admin_user', true);
	}

	public function down()
	{
		$this->forge->dropTable('admin_user', true);
	}
}
