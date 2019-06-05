<?php

namespace App\Http\Controllers;

use App\semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function addSemester()
    {
        return view('Semester.addSemester')->with([
            'url' => 'add-semester'
        ]);
    }
    public function listSemester()
    {
        return view('Semester.listSemester')->with([
            'url' => 'list-semester'
        ]);
    }
}
