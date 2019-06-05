<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function addAccount()
    {
        return view('Account.addAcc')->with([
            'url' => 'add-account'
        ]);
    }
    public function listAccount()
    {
        return view('Account.listAcc')->with([
            'url' => 'list-account'
        ]);
    }
    public function editAccount()
    {
        return view('Account.editAcc')->with([
            'url' => 'edit-account/IDACCOUNT'
        ]);
    }
}
