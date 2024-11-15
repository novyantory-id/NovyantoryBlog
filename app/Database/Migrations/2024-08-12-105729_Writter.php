<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Writter extends Migration
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
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'no_handphone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'bio' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('writter');
    }

    public function down()
    {
        $this->forge->dropTable('writter');
    }
}
