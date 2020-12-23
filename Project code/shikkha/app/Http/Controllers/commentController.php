<?php

namespace App\Http\Controllers;

use App\comment;
use App\faculty;
use App\post;
use App\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Getting institutio id
        $id=Auth::user();
        $user_id=Auth::user()->id;
        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id;
        $session_id=session::where('institution_id',$institutionId)->first();
        $session_id=$session_id->id;
        // faculty_id paisi
        //post table data inserting
        $data= request()->validate([
            'description'=>'required',
            'post_id'=>'required',

        ]);
        $data['author']=$id->name;
        comment::create($data);
        session()->flash('msg','Comment Added Successfully');
        return  back();
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
    public function update(Request $request, $id)
    {
        //
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
