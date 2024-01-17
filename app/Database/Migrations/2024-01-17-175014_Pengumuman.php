<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengumuman extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'user' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'artikel' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pengumuman');
    }

    public function down()
    {
        $this->forge->dropTable('pengumuman');
    }
}
