<?php

namespace App\Http\Controllers\faculty;

use App\comment;
use App\faculty;
use App\Http\Controllers\Controller;
use App\post;
use App\resource;
use App\sectionDetail;
use App\session;
use App\quiz;
use App\student;
use App\verifiyInstiution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class createQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Getting institution id
        $id=Auth::user();
        $user_id=Auth::user()->id;

        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id; // faculty_id paisi
        $session_id=session::where('institution_id',$institutionId)->where('status',1)->first();
        // session_id paisi


//        $quiz=quiz::where('institution_id',$institutionId)->where('faculty_id',$facultyId);
        $quiz=quiz::where('institution_id',$institutionId)->where('faculty_id',$facultyId)->get()->unique('exam_name');
        return view('dashboard.faculty.faculty-all-question',[
            'quiz'=>$quiz
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.faculty.faculty-create-question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Getting institution id
          $id=Auth::user();
          $user_id=Auth::user()->id;

          $institutionId = $id->personal_info->institution_id;
          $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
          $facultyId=$faculties->id;
          // faculty_id paisi


          $data= request()->validate([
            'exam_name'=>'required',
            'q_name'=>'required',
            'q_answer'=>'required',
            'q_option'=>'required',
            'random'=>'required',
          ]);
          $data['institution_id']=$institutionId;
          $data['faculty_id']=$facultyId;
          $q_answer=$data['q_answer'];
          $data['q_answer']=implode(",",$q_answer);
          $q_option=$data['q_option'];
          $data['q_option']=implode(",",$q_option);

              // dd($data);
          quiz::create($data);

          session()->flash('msg','Exam Created Successfully');
          return Response::json($data);


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
