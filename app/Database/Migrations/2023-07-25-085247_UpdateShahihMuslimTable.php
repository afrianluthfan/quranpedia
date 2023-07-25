<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateShahihMuslimTable extends Migration
{
    public function up()
    {
        // Add a new column to the 'shahih_muslim' table
        $this->forge->addColumn('shahih_muslim', [
            'new_column' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'after' => 'terjemah' // Set the position of the new column (after the 'terjemah' column)
            ],
        ]);
    }

    public function down()
    {
        // Drop the 'new_column' column if you want to rollback the migration
        $this->forge->dropColumn('shahih_muslim', 'new_column');
    }
}
