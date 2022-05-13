<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Student extends Seeder
{
    public function run()
    {
        $data = [
            'student_name' => 'Adriana',
            'student_first_last_name'    => 'Santa Cruz',
            'student_second_last_name'    => 'Favela',
            'student_email'    => 'adri@reachmx.com',
            'student_phone'    => '6621123234'
        ];

        // Using Query Builder
        $this->db->table('students')->insert($data);
    }
}
