<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\quiz;
use App\sectionDetail;
use App\session;
use App\student;
use App\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class studentTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user();
        $institutionId = $id->personal_info->institution_id;

        $student=student::where('institution_id',$institutionId)->where('user_id', $id->id)->orderByDesc('id')->first();
        $studentsId=$student->id;
        // student_id paisi

        $session=session::where('institution_id',$institutionId)->where('status', 1)->first();
        //session paisi



        $sectionDetail = DB::table('section_details')
            ->join('tasks', 'section_details.section_id', '=', 'tasks.section_id')
            ->join('quizzes', 'tasks.quiz_id', '=', 'quizzes.id')
            ->join('courses', 'section_details.course_id', '=', 'courses.id')
//            ->join('sections', 'section_details.section_id', '=', 'sections.id')
            ->where('section_details.student_id', $studentsId)
            ->where('section_details.session_id', $session->id)
            ->get();


//        dd($sectionDetail);





//        dd($sectionDetail[0]->task->start);






        return view('dashboard.student.student-task',[
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
    public function show($id)
    {
        $quiz=quiz::find($id);
        $quiz=quiz::where('random',$quiz->random)->get();

//        dd($quiz);
        return view('dashboard.student.exam',[
            'quiz'=>$quiz
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

    public function question($course_id,$section_id,$quiz_id)
    {



    }
}
