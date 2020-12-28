<?php

namespace App\Http\Controllers\faculty;

use App\course;
use App\faculty;
use App\Http\Controllers\Controller;
use App\quiz;
use App\sectionDetail;
use App\session;
use App\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Support\Facades\DB;

class assignExamController extends Controller
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

        $sectionDetail=sectionDetail::where('faculty_id', $facultyId)
            ->where('session_id', $session_id->id)
            ->orderByDesc('id')->get()->unique('course_id');

        $tasks=task::where('institution_id',$institutionId)
            ->where('session_id', $session_id->id)
            ->orderByDesc('id')->get();

//        $sectionDetail=DB::table('section_details')
//            ->where([
//                ['faculty_id','=' , $facultyId],
//                ['session_id','=' ,$session_id->id]
//            ])->orderByDesc('id')
//            ->selectRaw('distinct course_id')
//            ->get();

//            dd($sectionDetail);


        $quiz=quiz::where('institution_id',$institutionId)->get();
        return view('dashboard.faculty.faculty-assign-task',[
            'sectionDetail'=>$sectionDetail,
            'quiz'=>$quiz,
            'facultyId'=>$facultyId,
            'tasks'=>$tasks,

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
        // Getting institution id
        $id=Auth::user();
        $user_id=Auth::user()->id;

        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id; // faculty_id paisi
        $session_id=session::where('institution_id',$institutionId)->where('status',1)->first();
        $session_id=$session_id->id; // session_id paisi

        $data= request()->validate([
            'quiz_id'=>'required',
            'course_id'=>'required',
            'section_id'=>'required',
            'start'=>'required',
            'end'=>'required',
            'marks'=>'required',


        ]);
        $data['faculty_id']=$facultyId;
        $data['institution_id']=$institutionId;
        $data['session_id']=$session_id;


        task::create($data);
        session()->flash('msg','Task Created Successfully');
        return redirect(route('assign-work.index'));

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
    public function update(Request $request,task $assign_work)
    {



        $data= request()->validate([
            'quiz_id'=>'required',
            'course_id'=>'required',
            'section_id'=>'required',
            'start'=>'required',
            'end'=>'required',
            'marks'=>'required',

        ]);



        $assign_work->update($data);
        return Response::json($assign_work);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $assign_work)
    {
        $assign_work->delete();
    }
}
