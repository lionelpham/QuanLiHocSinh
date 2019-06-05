<?php

namespace App\Http\Controllers;

use App\grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addGrade()
    {
        return view('Grade.addGrade')->with([
            'url' => 'add-grade'
        ]);
    }
    public function listGrade()
    {
        return view('Grade.listGrade')->with([
            'url' => 'list-grade'
        ]);
    }
}
