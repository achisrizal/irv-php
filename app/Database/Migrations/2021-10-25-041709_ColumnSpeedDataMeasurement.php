<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ColumnSpeedDataMeasurement extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_measurement', [
            'speed' => [
                'type' => 'float',
                'constraint' => '5,2',
                'after' => 'lng',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_measurement', 'speed');
    }
}
