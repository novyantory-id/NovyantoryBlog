<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtikelTag extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'artikel_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'tag_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addForeignKey('artikel_id', 'artikel', 'id');
        $this->forge->addForeignKey('tag_id', 'tags', 'id');
        $this->forge->createTable('artikel_tag');
    }

    public function down()
    {
        $this->forge->dropTable('artikel_tag');
    }
}
