<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Umur extends Migration
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
            'kelompok' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('umur');
    }

    public function down()
    {
        $this->forge->dropTable('umur');
    }
}
