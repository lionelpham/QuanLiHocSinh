<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
  public function __construct()
  {
      $this->middleware(['auth']);
  }
  public function index() {
      // $homepage = Homepage::all()->first();
      return view('homepage.index')->with([
          'url'       =>  'homepage'
          // 'homepage'  =>  $homepage
      ]);
  }
}
