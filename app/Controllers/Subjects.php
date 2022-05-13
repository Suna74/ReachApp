<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Subject;

class Subjects extends BaseController
{
    public function index()
    {
        $subject = new Subject();
        $data['subjects'] = $subject->orderBy('subject_id', 'ASC')->findAll();
        return view('subjects/index', $data);
    }

    public function create()
    {
        return view('subjects/create');
    }

    public function save()
    {
        $subject = new Subject();

        $validate = $this->validate([
            'subjectName' => 'required',
        ]);
        if (!$validate) {
            $session = session();
            $session->setFlashdata('msg', '* You need to enter the subject name to continue');
            return redirect()->back()->withInput();
        }

        $data = [
            'subject_name' => $this->request->getVar('subjectName'),
        ];
        $subject->insert($data);

        return $this->response->redirect(base_url('subjects/index'));
    }

    public function edit($id = null)
    {
        $subject = new Subject();
        $data['subject'] = $subject->where('subject_id', $id)->first();
        return view('subjects/update', $data);
    }

    public function update($subjectId = null)
    {
        $subject = new Subject();
        $data = [
            'subject_name' => $this->request->getVar('subjectName'),
        ];
        $id = $subjectId;

        $validate = $this->validate([
            'subjectName' => 'required',
        ]);
        if (!$validate) {
            $session = session();
            $session->setFlashdata('msg', '* You need to fill the field to change the subject name');
            return redirect()->back()->withInput();
        }

        $subject->update($id, $data);

        return $this->response->redirect(base_url('subjects'));
    }

    public function delete($id = null)
    {
        $subject = new Subject();
        $subject->where('subject_id', $id)->delete($id);
        return $this->response->redirect(base_url('subjects'));
    }
}
