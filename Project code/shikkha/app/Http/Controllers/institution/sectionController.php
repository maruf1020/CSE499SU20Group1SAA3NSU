<?php

namespace App\Http\Controllers\institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\section;
use App\course;
use App\session;
use App\faculty;
use App\student;
use Illuminate\Support\Facades\DB;
use Response;
use App\institution;
use App\verifiyInstiution;
use App\timing;
use App\sectionDetail;

class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Getting institutio id
        $id=Auth::user()->id;
        $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
        $institutionId = $verifiyInstiution->institution->id;

        $courses=course::where('institution_id',$institutionId)->orderByDesc('id')->get();
        return view('dashboard.institution.institution-section',[
            'courses'=>$courses,
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
        $data= request()->validate([
            'section_number'=>'required',
            'start'=>'nullable',
            'end'=>'nullable',
            'capacity'=>'nullable',
            'session'=>'nullable',
            'course_id'=>'required',

        ]);
        $id=Auth::user()->id;
        $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
        $institutionId = $verifiyInstiution->institution->id;



        $data['institution_id']=$institutionId;
        $random=uniqid();
        $data['random']=$random;

        section::create($data);

        $getsection = section::where('random',$random)->first();
        $section_id=$getsection->id;

        $data1= request()->validate([
            'faculty_id'=>'nullable',
            'student_id'=>'nullable',
            'course_id'=>'required',

        ]);
        $data1['institution_id']=$institutionId;
        $data1['section_id']=$section_id;
        $data1['session_id']=$data['session'];
//        dd($data1['student_id']);
//       $student_id= $data1['student_id'];
//        $count=count($student_id);
        $studentsname = $data1['student_id'];


        foreach ($studentsname as $key =>$value){
            $studentname = $studentsname[$key];
            $data1['student_id']=$studentname;
            sectionDetail::create($data1);
        }




        session()->flash('msg','Section Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $section)
    {

        // Getting institutio id
        $id=Auth::user()->id;
        $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
        $institutionId = $verifiyInstiution->institution->id; //institution id paisi

        $faculties=faculty::where('institution_id',$institutionId)->orderBy('name')->get();
        $timings=timing::where('institution_id',$institutionId)->orderBy('start')->get();
        $session=session::where('institution_id',$institutionId)->where('status',1)->orderBy('name')->get();
        $student=student::where('institution_id',$institutionId)->where('is_verified',1)->orderBy('name')->get();



        $sectionDetail=sectionDetail::where('institution_id',$institutionId)
            ->where('course_id',$section->id)
            ->orderBy('id')->get()->unique('section_id');

//        dd($sectionDetail);
//        $sections = DB::table('sections')
//            ->join('section_details', 'section_details.section_id', '=', 'sections.id')
//            ->join('faculties', 'faculties.id', '=', 'section_details.faculty_id')
//            ->where('sections.institution_id', '=', $institutionId)
//            ->get();

//        dd($sections);



        return view('dashboard.institution.institution-section-inner',[
            'course'=>$section,
            'faculties'=>$faculties,
            'timings'=>$timings,
            'session'=>$session,
            'student'=>$student,
            'sectionDetail'=>$sectionDetail,

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
    public function update(Request $request,section $section)
    {
        $data= request()->validate([
            'section_number'=>'required',
            'start'=>'nullable',
            'end'=>'nullable',
            'capacity'=>'nullable',
            'session'=>'nullable',
            'course_id'=>'required',

        ]);

        //upadte to section details page
        $sectionId=$section->id;
        $getsection = section::where('id',$sectionId)->first();

        $section_id=$getsection->id;

        $data1= request()->validate([
            'faculty_id'=>'nullable',
            'student_id'=>'nullable',

        ]);
        $data1['section_id']=$section_id;
        $sectionDetail=sectionDetail::where('section_id',$section_id)->first();
//        $sectionDetail->faculty_id=$request->faculty_id;
//        $sectionDetail->update();
        $sectionDetail->update($data1);
        $section->update($data);

        return Response::json($section);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(section $section)
    {


        $sectionId=$section->id;

        $getsection = section::where('id',$sectionId)->first();
        $section_id=$getsection->id;

        $sectionDetail=sectionDetail::where('section_id',$section_id)->first();
        $sectionDetail->delete();
        $section->delete();



    }
}
