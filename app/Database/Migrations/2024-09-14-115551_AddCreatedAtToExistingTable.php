<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToExistingTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('artikel', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('artikel', 'created_at');
    }
}
