<?php

namespace App\Http\Controllers;

use App\account;
use App\roles;
use App\teacher;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class AccountController extends Controller
{
    protected function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public function addAccount()
    {
        $roles = roles::all();
        return view('Account.addAcc')->with([
            'url' => 'add-account',
            'roles' => $roles
        ]);
    }
    public function newAccount(Request $req){
        $teacherNew = new teacher;
        $accountNew = new User();

        $teacherNew->name_teacher = $req->name_teacher;
        $teacherNew->sexual = $req->optionsRadios;
        $teacherNew->dob = $req->dob;
        $teacherNew->address = $req->address;
        $teacherNew->email = $req->email;
        $teacherNew->phone_number = $req->phone;
        $teacherNew->maRole = $req->select_role;
        $teacherNew->save();

        $accountNew->name = $req->username;
        $accountNew->maGV = $teacherNew->id;
        $accountNew->email = $req->email;
        $accountNew->password = bcrypt($req->password);
        if (!$this->isValidEmail($req->email)) {
            return redirect('/list-account')->with('danger_message', 'Email is invalid');
        } else {
            $userEmail = User::where('email', $req->email)->first();
            if ($userEmail) return redirect('/list-account')->with('danger_message', 'Email is already used');
        }
        $accountNew->save();

        return redirect('list-account')->with('success_message','Thêm cán bộ thành công');
    }
    public function updateAccount($id,Request $req){
        $teacherNew = teacher::find($id);


        $teacherNew->name_teacher = $req->name_teacher;
        $teacherNew->sexual = $req->optionsRadios;
        $teacherNew->dob = $req->dob;
        $teacherNew->address = $req->address;
        $teacherNew->email = $req->email;
        $teacherNew->phone_number = $req->phone;
        $teacherNew->maRole = $req->select_role;
        $teacherNew->save();
        return redirect('list-account')->with('success_message','Thêm cán bộ thành công');
        
    }
    public function listAccount()
    {
        $accountNew = User::all()->where('maGV','<>',NULL);
        return view('Account.listAcc')->with([
            'url' => 'list-account',
            'listAccount' => $accountNew,

        ]);
    }
    public function editAccount($id){
        $teacher = teacher::find($id);
        $account = User::where('maGV',$id)->first();
        $roles = roles::all();
        // $user = Auth::user();
        // print_r($user->password);
        // return;
        return view('Account.editAcc')->with([
            'url' => 'edit-account',
            'teacher' => $teacher,
            // 'account'=> $account,
            'roles' => $roles
        ]);
    }
    public function deleteAccount($id){
        $teacher = teacher::find($id);
        $account = User::where('maGV',$id)->first();
        $account->delete();
        // $accountNew = User::find(1)->where('maGV','==',$id)->teacher();
        // $accountNew->delete();
        $teacher->delete();
        return redirect('list-account')->with(
            'success_message',
            "Xóa thành công"
        );
    }
}
