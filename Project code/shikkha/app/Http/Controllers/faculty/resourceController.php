<?php

namespace App\Http\Controllers\faculty;

use App\faculty;
use App\resource;
use App\Http\Controllers\Controller;
use App\sectionDetail;
use App\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class resourceController extends Controller
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
//        dd($sectionDetail[0]->section);

        return view('dashboard.faculty.faculty-course-resource-home',[
            'sectionDetail'=>$sectionDetail,
            'facultyId'=>$facultyId,
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
        // Getting institutio id
        $id=Auth::user();
        $user_id=Auth::user()->id;

        $institutionId = $id->personal_info->institution_id;
        $faculties=faculty::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
        $facultyId=$faculties->id;
        $session_id=session::where('institution_id',$institutionId)->first();
        $session_id=$session_id->id;
        // faculty_id paisi


        $data= request()->validate([
            'file_name'=>'required',
            'course_id'=>'required',
            'section_id'=>'required',
            'is_public'=>'required',

        ]);
        $data['institution_id']=$institutionId;
        $data['faculty_id']=$facultyId;
        $data['session_id']= $session_id;
        $file = $request->file('file_name')->getClientOriginalName();
        $data['original_file_name']=$file;
        $file1 = $request->file('file_name')->getClientOriginalExtension();
        $data['extension']=$file1;




        if ($request->hasfile('file_name')){
            $file = $request->file('file_name');
            $extension = $file->getClientOriginalExtension();  //11 getting image extension
            $randomDigit = random_int(0,999999999);
            $filename = $randomDigit +  time() . '.' . $extension;
            $file->move('upload/resource/',$filename);
//        $highlights->image = $filename;
            $data['file_name'] = $filename;
        }
        else{
            return $request;
            $highlights->image = 'siam';
            $data['file_name'] = '';
        }

        resource::create($data);

        session()->flash('msg','Resource Created Successfully');
        return redirect(route('resource.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource=resource::where('section_id',$id)->get();
        return view('dashboard.faculty.faculty-course-resource',[
            'resource'=>$resource
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
    public function destroy(resource $resource)
    {
        $resource->delete();
        return back();
    }
    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $fid = $request->get('fid');
        $data = DB::table('section_details')
            ->join('sections', 'sections.id', '=', 'section_details.section_id')
            ->where('section_details.course_id', $value)
            ->where('section_details.faculty_id', $fid)
            ->get()->unique('section_id');

//        foreach ($data as $data){
//            if($data['section_number'])
//        }

        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id.'">'.'Section : '.$row->section_number.'</option>';
        }
        echo $output;
    }

}
