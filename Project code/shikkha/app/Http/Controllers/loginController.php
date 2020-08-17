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
        return view('dashboard.dashboard');
      }
      elseif ($email==$instructor && $loginPassword==$password) {
        // code...
      }
      elseif ($email==$institution && $loginPassword==$password) {
        // code...
      }
      elseif ($email==$admin && $loginPassword==$password) {
        // code...
      }
      else {
        return back();
      }


    }
}
