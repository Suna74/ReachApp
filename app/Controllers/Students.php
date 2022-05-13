<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class Students extends BaseController
{
    public function index()
    {
        $student = new Student();
        $data['students'] = $student->orderBy('student_id','ASC')->findAll();
        return view('students/index',$data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function save()
    {
        $student= new Student();

        $validate = $this->validate([
            'studentName'=>'required',
            'firstLastname'=>'required',
            'studentEmail'=>'required',
            'studentPhone'=>'required|numeric|exact_length[10]',
        ]);
        if(!$validate){
            $session = session();
            $session->setFlashdata('msg','* Please fill all the required fields');
            return redirect()->back()->withInput();
        }

        $data=[
            'student_name'=>$this->request->getVar('studentName'),
            'student_first_last_name'=>$this->request->getVar('firstLastname'),
            'student_second_last_name'=>$this->request->getVar('secondLastname'),
            'student_email'=>$this->request->getVar('studentEmail'),
            'student_phone'=>$this->request->getVar('studentPhone'),
        ];
        $student->insert($data);

        return $this->response->redirect(base_url('students'));
    }

    public function edit($id = null)
    {
        $student = new Student();
        $data['student']=$student->where('student_id',$id)->first();
        return view('students/update', $data);
    }

    public function update($studentId = null)
    {
        $student = new Student();
        $data = [
            'student_name' => $this->request->getVar('studentName'),
            'student_first_last_name' => $this->request->getVar('firstLastname'),
            'student_second_last_name' => $this->request->getVar('secondLastname'),
            'student_email' => $this->request->getVar('studentEmail'),
            'student_phone' => $this->request->getVar('studentPhone'),
        ];
        $id= $studentId;

        $validate = $this->validate([
            'studentName' => 'required',
            'firstLastname' => 'required',
            'studentEmail' => 'required',
            'studentPhone' => 'required|numeric|exact_length[10]',
        ]);
        if (!$validate) {
            $session = session();
            $session->setFlashdata('msg', '* Please fill all the required fields');
            return redirect()->back()->withInput();
        }

        $student->update($id,$data);

        return $this->response->redirect(base_url('students'));
    }

    public function delete($id=null)
    {
        $student = new Student();
        $student->where('student_id',$id)->delete($id);
        echo "borrado";
        return $this->response->redirect(base_url('students'));
        //
    }
}
