<?php

namespace App\Http\Controllers\faculty;

use App\faculty;
use App\Http\Controllers\Controller;
use App\verifiyInstiution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class courseListController extends Controller
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

         $sections = DB::table('sections')
            ->join('section_details', 'section_details.section_id', '=', 'sections.id')
            ->join('faculties', 'faculties.id', '=', 'section_details.faculty_id')
            ->join('courses', 'courses.id', '=', 'sections.course_id')
            ->where('sections.institution_id', '=', $institutionId)
            ->where('faculties.id', '=', $facultyId)
            ->get();

        return view('dashboard.faculty.faculty-assigned-course',[
            'sections'=>$sections,
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
