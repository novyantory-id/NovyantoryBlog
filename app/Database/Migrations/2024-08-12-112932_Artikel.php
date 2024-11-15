<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
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
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'kategori_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'judul_artikel' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'keyword' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug_artikel' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar_artikel' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'isi' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('kategori_id', 'kategori', 'id');
        $this->forge->createTable('artikel');
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
