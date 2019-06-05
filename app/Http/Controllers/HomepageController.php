<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        // $homepage = Homepage::all()->first();
        return view('homepage.index')->with([
            'url' => 'homepage'
            // 'homepage'  =>  $homepage
        ]);
    }
    public function profile()
    {
        return view('homepage.profile')->with([
            'url' => 'update-profile'
        ]);
    }
    public function account()
    {
        return view('homepage.account')->with([
            'url' => 'update-account'
        ]);
    }
}
