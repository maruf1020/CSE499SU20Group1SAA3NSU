<?php

namespace App\Http\Controllers\faculty;

use App\comment;
use App\faculty;
use App\Http\Controllers\Controller;
use App\post;
use App\resource;
use App\sectionDetail;
use App\session;
use App\verifiyInstiution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class streamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Getting institutio id
        $id=Auth::user();
        $user_id=Auth::user()->id;

        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id;
        // faculty_id paisi

        $session=session::where('institution_id',$institutionId)->where('status', 1)->first();
        $sectionDetail=sectionDetail::where('faculty_id', $facultyId)->where('session_id', $session->id)->orderByDesc('id')->get();


        return view('dashboard.faculty.faculty-stream',[
            'sectionDetail'=>$sectionDetail
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
    public function show(sectionDetail $faculty_stream)
    {
        // Getting institution id
        $id=Auth::user();
        $user_id=Auth::user()->id;

        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id;
        // faculty_id paisi

        $session=session::where('institution_id',$institutionId)->where('status', 1)->first();
        $sectionDetail=sectionDetail::where('faculty_id', $facultyId)
            ->where('session_id', $session->id)
            ->where('id', $faculty_stream->id)->orderByDesc('id')->first();
//        dd($sectionDetail);
        $post=post::orderByDesc('id')->get();

        return view('dashboard.faculty.faculty-stream-home',[
            'sectionDetail'=>$sectionDetail,
            'post'=>$post,
        ]);
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
