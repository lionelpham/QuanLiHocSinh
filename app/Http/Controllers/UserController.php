<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\User;
use Auth;
use Hash;

class UserController extends Controller
{
    protected function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function login(Request $request) {
        if (!$this->isValidEmail($request->input('email'))) {
            if ($request->email)
                return redirect('/login')->with('error', 'Email is invalid');
            else
                return redirect('/login')->with('error', '');
        }
        $userdata = array(
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        );
        Auth::attempt($userdata);
        $user = Auth::user();

        if (!$user) {
            return redirect('/login')->with('error', 'Invalid Login information');
        }
        return redirect('/homepage')->with('message', 'Welcome');
    }

    public function register(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (!$this->isValidEmail($user->email)) {
            return redirect('/register')->with('error', 'Email is invalid');
        } else {
            $userEmail = User::where('email', $user->email)->first();
            if ($userEmail) return redirect('/register')->with('error', 'Email is already used');
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $userdata = array(
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        );
        Auth::attempt($userdata);
        return redirect('/homepage')->with('message', 'Welcome');
    }

}
