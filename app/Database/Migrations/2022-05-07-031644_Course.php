<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'partial_grade1' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'partial_grade2' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'partial_grade3' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'partial_grade4' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true,
            ],
            'student_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'subject_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
        ]);
        $this->forge->addKey('course_id', true);
        $this->forge->createTable('courses');
        $this->forge->addForeignKey('student_id', 'students', 'id');
        $this->forge->addForeignKey('subject_id', 'subjects', 'id');

    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}
