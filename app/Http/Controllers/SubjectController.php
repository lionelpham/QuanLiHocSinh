<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function addSubject()
    {
        return view('Subject.addSubject')->with([
            'url' => 'add-subject'
        ]);
    }
    public function listSubject()
    {
        return view('Subject.listSubject')->with([
            'url' => 'list-subject'
        ]);
    }
}
