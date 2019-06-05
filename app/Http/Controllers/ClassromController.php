<?php

namespace App\Http\Controllers;

use App\classrom;
use Illuminate\Http\Request;

class ClassromController extends Controller
{
    public function addClass()
    {
        return view('Class.addClass')->with([
            'url' => 'add-class'
        ]);
    }
    public function listClass()
    {
        return view('Class.listClass')->with([
            'url' => 'list-class'
        ]);
    }
    public function editClass()
    {
        return view('Class.editClass')->with([
            'url' => 'edit-class/IDCLASS'
        ]);
    }
    public function viewClass()
    {
        return view('Class.viewClass')->with([
            'url' => 'view-class/IDCLASS'
        ]);
    }
    public function scoreboardClass()
    {
        return view('Class.scoreboardClass')->with([
            'url' => 'view-class/IDCLASS/IDSUBJECT'
        ]);
    }
}
