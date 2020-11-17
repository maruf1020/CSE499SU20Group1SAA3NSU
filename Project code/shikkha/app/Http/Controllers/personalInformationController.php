<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\personalInfo;
use App\user;

class personalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $personal_id=Auth::user()->personal_id;
    $user=user::where('personal_id',$personal_id)->get();
    // $user=user::all();
    // dd($personalInfo);
    return view('dashboard.admin.admin-personal-information',[
      'user'=>$user,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,personalInfo $personal_infomation)
    {
      $data=request()->validate([
        'phone'=>'required',
        'area'=>'required',
      ]);
      $data1=request()->validate([
        'name'=>'required',
        'email'=>'required',
      ]);
      

      $personal_infomation->update($data);
      // session()->flash('msg','Category Updated Successfully');
      return redirect(route('personal-infomation.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
