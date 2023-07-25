<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateShahihMuslimTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'kitab'     => ['type' => 'VARCHAR', 'constraint' => 200],
            'arab'      => ['type' => 'TEXT'],
            'terjemah'  => ['type' => 'TEXT'],
        ]);
        $this->forge->createTable('shahih_muslim'); // Nama tabel yang akan dibuat
    }

    public function down()
    {
        $this->forge->dropTable('shahih_muslim'); // Nama tabel yang akan dihapus
    }
}
