<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NewColumnDataMeasurement extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_measurement', [
            'p_per_q' => [
                'type' => 'float',
                'constraint' => '5,2',
                'after' => 'amplitude_z',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_measurement', 'y_per_z');
    }
}
