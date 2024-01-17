<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perangkat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'url_photo' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('perangkat');
    }

    public function down()
    {
        $this->forge->dropTable('perangkat');
    }
}
