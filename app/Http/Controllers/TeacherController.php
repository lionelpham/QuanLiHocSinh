<?php

namespace App\Http\Controllers;

use App\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacher()
    {
        return view('Teacher.addTeacher')->with([
            'url' => 'add-teacher'
        ]);
    }
    public function listTeacher()
    {
        return view('Teacher.listTeacher')->with([
            'url' => 'list-teacher'
        ]);
    }
}
