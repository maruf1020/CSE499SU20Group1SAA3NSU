<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{

    public function index(){
      return view('dashboard.login');
    }

    public function loginApproval(){
        $student="student@shikkhaa.com";
        $instructor="instructor@shikkhaa.com";
        $institution="institution@shikkhaa.com";
        $admin="admin@shikkhaa.com";
        $loginPassword=1234;
      $email=request()->username;
      $password=request()->password;
      if ($email==$student && $loginPassword==$password) {
        $user=1;
        session()->put('user',$user);
        return view('dashboard.dashboard');

      }
      elseif ($email==$instructor && $loginPassword==$password) {
        $user=2;
        session()->put('user',$user);
        return view('dashboard.dashboard');
      }
      elseif ($email==$institution && $loginPassword==$password) {
        $user=3;
        session()->put('user',$user);
        return view('dashboard.dashboard');
      }
      elseif ($email==$admin && $loginPassword==$password) {
        $user=4;
        session()->put('user',$user);
        return view('dashboard.dashboard');
      }
      else {
        return back();
      }


    }
}
