<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'subject_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'subject_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('subject_id', true);
        $this->forge->createTable('subjects');
    }

    public function down()
    {
        $this->forge->dropTable('subjects');
    }
}
