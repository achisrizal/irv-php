<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ColumnSpeedData extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data', [
            'speed' => [
                'type' => 'float',
                'constraint' => '5,2',
                'after' => 'lng',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data', 'speed');
    }
}
