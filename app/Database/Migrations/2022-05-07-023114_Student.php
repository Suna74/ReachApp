<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'student_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'student_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'student_first_last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'student_second_last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'student_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'student_phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addKey('student_id', true);
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}
