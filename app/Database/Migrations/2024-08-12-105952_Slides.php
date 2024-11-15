<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slides extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_slide' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'gambar_slide' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kutipan_slide' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('slides');
    }

    public function down()
    {
        $this->forge->dropTable('slides');
    }
}
