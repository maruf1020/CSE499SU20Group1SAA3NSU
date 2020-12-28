<?php

namespace App\Http\Controllers;

use App\faculty;
use App\post;
use App\resource;
use App\session;
use App\student;
use App\verifiyInstiution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
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
        if($id->role==2) {
            $institutionId = $id->personal_info->institution_id;
            $faculties = faculty::where('institution_id', $institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
            $facultyId = $faculties->id;
            $session_id = session::where('institution_id', $institutionId)->first();
            $session_id = $session_id->id;
            // faculty_id paisi
            //post table data inserting
            $data = request()->validate([
                'description' => 'required',
                'section_id' => 'required',

            ]);
            $data['author'] = $id->name;

            $data1 = request()->validate([
                'file_name' => 'nullable',
                'section_id' => 'required',
                'course_id' => 'required',

            ]);


            //sending file to resources table
            if ($request->hasfile('file_name')) {


                $file = $request->file('file_name');
                $extension = $file->getClientOriginalExtension();  //11 getting image extension
                $randomDigit = random_int(0, 999999999);
                $filename = $randomDigit + time() . '.' . $extension;
                $file->move('upload/resource/', $filename);
//        $highlights->image = $filename;
                $data1['file_name'] = $filename;
            }

            $random = uniqid();

            if ($request->hasfile('file_name')) {
                $file = $request->file('file_name')->getClientOriginalName();
                $data1['original_file_name'] = $file;
                $file1 = $request->file('file_name')->getClientOriginalExtension();
                $data1['extension'] = $file1;
                $data1['faculty_id'] = $facultyId;
                $data1['institution_id'] = $institutionId;
                $data1['session_id'] = $session_id;
                $data1['is_public'] = 0;
                $data1['random'] = $random;
                resource::create($data1);
            }

            $data['random'] = $random;

            post::create($data);


            session()->flash('msg', 'Post Added Successfully');

            $resource = resource::where('random', $random)->first();
            $post = post::where('random', $random)->first();
            $post['resource_id'] = $resource->id;
            $post->update();
            return back();

        }
        elseif ($id->role==1){

            $institutionId = $id->personal_info->institution_id;

            $student=student::where('institution_id',$institutionId)->where('user_id', $user_id)->orderByDesc('id')->first();
            $studentsId=$student->id;
            // student_id paisi

            $session=session::where('institution_id',$institutionId)->where('status', 1)->first();

            //post table data inserting
            $data = request()->validate([
                'description' => 'required',
                'section_id' => 'required',

            ]);
            $data['author'] = $id->name;

            $data1 = request()->validate([
                'file_name' => 'nullable',
                'section_id' => 'required',
                'course_id' => 'required',

            ]);


            //sending file to resources table
            if ($request->hasfile('file_name')) {


                $file = $request->file('file_name');
                $extension = $file->getClientOriginalExtension();  //11 getting image extension
                $randomDigit = random_int(0, 999999999);
                $filename = $randomDigit + time() . '.' . $extension;
                $file->move('upload/resource/', $filename);
//        $highlights->image = $filename;
                $data1['file_name'] = $filename;
            }

            $random = uniqid();

            if ($request->hasfile('file_name')) {
                $file = $request->file('file_name')->getClientOriginalName();
                $data1['original_file_name'] = $file;
                $file1 = $request->file('file_name')->getClientOriginalExtension();
                $data1['extension'] = $file1;
                $data1['faculty_id'] = $studentsId;
                $data1['institution_id'] = $institutionId;
                $data1['session_id'] = $session->id;
                $data1['is_public'] = 0;
                $data1['random'] = $random;
                resource::create($data1);
            }

            $data['random'] = $random;

            post::create($data);


            session()->flash('msg', 'Post Added Successfully');

            $resource = resource::where('random', $random)->first();
            $post = post::where('random', $random)->first();
            $post['resource_id'] = $resource->id;
            $post->update();
            return back();

        }
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
    public function destroy(post $post)
    {
        $post->delete();
        $post->resource->delete();
        return  back();
    }
}
