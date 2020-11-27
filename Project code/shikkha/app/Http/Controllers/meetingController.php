<?php

namespace App\Http\Controllers;
use App\institution;
use App\meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class meetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $meetings= meeting::all();
       $institutions= institution::all();
       $role=Auth::user()->role;
       if ($role==3) {
         $id=Auth::user()->id;

         $institution= institution::find($id);

         $meeting= meeting::where('institution_id',$institution->id)->get();

         return view('dashboard.institution.join-meeting',[
             'meeting'=>$meeting,
         ]);
       }
       else{
         return view('dashboard.admin.admin-meeting',[
             'meetings'=>$meetings,
             'institutions'=>$institutions,
         ]);
       }

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
        $name=$request->name;

        $str =$name;
        $new_str = str_replace(' ', '-', $str);



      $data= request()->validate([
        'name'=>'required|unique:institutions',
        'start_time'=>'required',
        'end_time'=>'required',
        'date'=>'required',
        'institution_id'=>'required',

      ]);
      $data['slug']=$new_str;

      meeting::create($data);
      session()->flash('msg','Meeting Created Successfully');
      return redirect(route('meeting.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(meeting $meeting)
    {
        $meeting->delete();
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
    public function update(Request $request, meeting $meeting)
    {

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
    public function status(meeting $meeting)
    {
      dd('hello');
      $data['status']=1;
    $meeting->update($data);
    }
}
