<?php

namespace App\Controllers;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Course;

class Dashboard extends BaseController
{
    public function index()
    {
        $students = new Student();
        $data['students'] = $students->findAll();

        $subjects = new Subject();
        $data['subjects'] = $subjects->findAll();

        $courses = new Course();
        $data['courses'] = $courses->findAll();
        return view('dashboard/index', $data);
    }
}
