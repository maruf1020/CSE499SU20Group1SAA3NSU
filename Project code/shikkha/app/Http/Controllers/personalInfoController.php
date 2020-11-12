<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalInfo;
use App\user;
use Illuminate\Support\Facades\Auth;

class personalInfoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    	$personal_id=Auth::user()->personal_id;
    // $personalInfo=personalInfo::where('personal_id',$personal_id)->get();
    $personalInfo=personalInfo::all();
    // dd($personalInfo);
    return view('dashboard.admin.admin-personal-information',[
      'personalInfo'=>$personalInfo,
    ]);
  }


}
