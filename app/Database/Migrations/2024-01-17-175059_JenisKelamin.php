<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisKelamin extends Migration
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
            'jumlah_laki_laki' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'jumlah_perempuan' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jenis_kelamin');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_kelamin');
    }
}
