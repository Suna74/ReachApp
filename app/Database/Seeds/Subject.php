<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Subject extends Seeder
{
    public function run()
    {
        $subject1 = [
            'subject_name' => 'Tópicos avanzados de Programación'
        ];

        $subject2 = [
            'subject_name' => 'Arquitectura de Software'
        ];

        $subject3 = [
            'subject_name' => 'Fundamentos de Base de Datos'
        ];

        // Using Query Builder
        $this->db->table('subjects')->insert($subject1);
        $this->db->table('subjects')->insert($subject2);
        $this->db->table('subjects')->insert($subject3);
    }
}

