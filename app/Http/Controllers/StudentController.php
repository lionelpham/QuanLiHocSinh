<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('Student.addStudent')->with([
            'url' => 'add-student'
        ]);
    }
    public function listStudent()
    {
        return view('Student.listStudent')->with([
            'url' => 'list-student'
        ]);
    }
    public function editStudent()
    {
        return view('Student.editStudent')->with([
            'url' => 'edit-student/IDSTUDENT'
        ]);
    }
    public function viewStudent()
    {
        return view('Student.viewStudent')->with([
            'url' => 'view-student/IDSTUDENT'
        ]);
    }
}
