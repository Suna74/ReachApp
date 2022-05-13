<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;

class Courses extends BaseController
{
    public function index()
    {
        $courses = new Course();
        $data['courses'] = $courses->orderBy('course_id', 'ASC')->findAll();

        $students = new Student();
        $data['students'] = $students->orderBy('student_name', 'ASC')->findAll();

        $subjects = new Subject();
        $data['subjects'] = $subjects->orderBy('subject_name', 'ASC')->findAll();

        return view('courses/index', $data);
    }

    public function create()
    {
        $students = new Student();
        $data['students'] = $students->orderBy('student_name', 'ASC')->findAll();

        $subjects = new Subject();
        $data['subjects'] = $subjects->orderBy('subject_name', 'ASC')->findAll();

        return view('courses/create', $data);
    }

    public function save()
    {
        $courses = new Course();

        $validate = $this->validate([
            'studentName' => 'required',
            'subjectName' => 'required',
        ]);
        if (!$validate) {
            $session = session();
            $session->setFlashdata('msg', '* Please fill all the required fields');
            return redirect()->back()->withInput();
        }

        $data = [
            'student_id' => $this->request->getVar('studentName'),
            'subject_id' => $this->request->getVar('subjectName'),

            'partial_grade1' => $this->request->getVar('partial1'),
            'partial_grade2' => $this->request->getVar('partial2'),
            'partial_grade3' => $this->request->getVar('partial3'),
            'partial_grade4' => $this->request->getVar('partial4'),
        ];
        $courses->insert($data);

        return $this->response->redirect(base_url('courses'));
    }

    public function edit($id = null)
    {
        $course = new Course();
        $data['course'] = $course->where('course_id', $id)->first();

        $students = new Student();
        $course = $data['course'];
        $data['student'] = $students->where('student_id', $course['student_id'])->first();

        $subjects = new Subject();
        $data['subject'] = $subjects->where('subject_id', $course['subject_id'])->first();
        return view('courses/update', $data);
    }

    public function update($courseId = null)
    {
        $course = new Course();

        $students = new Student();
        $data['students'] = $students->orderBy('student_name', 'ASC')->findAll();

        $subjects = new Subject();
        $data['subjects'] = $subjects->orderBy('subject_name', 'ASC')->findAll();

        $data = [
            'student_id' => $this->request->getVar('studentName'),
            'subject_id' => $this->request->getVar('subjectName'),
            'partial_grade1' => $this->request->getVar('partial1'),
            'partial_grade2' => $this->request->getVar('partial2'),
            'partial_grade3' => $this->request->getVar('partial3'),
            'partial_grade4' => $this->request->getVar('partial4'),
        ];
        $id = $courseId;

        $validate = $this->validate([
            'studentName' => 'required',
            'subjectName' => 'required',
        ]);
        if (!$validate) {
            $session = session();
            $session->setFlashdata('msg', '* Please fill all the required fields');
            return redirect()->back()->withInput();
        }

        $course->update($id, $data);

        return $this->response->redirect(base_url('courses'));
    }

    public function delete($id = null)
    {
        $courses = new Course();
        $courses->where('course_id', $id)->delete($id);
        return $this->response->redirect(base_url('courses/index'));
    }
}
