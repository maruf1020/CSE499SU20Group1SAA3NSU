<?php

namespace App\Http\Controllers\institution;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student;
use Response;
use App\institution;
use App\verifiyInstiution;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students=student::orderByDesc('id')->get();
      return view('dashboard.institution.institution-student',[
        'students'=>$students,
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
        'name'=>'required',
        'phone'=>'required|unique:faculties',
        'email'=>'required|unique:faculties',
        'user_id'=>'nullable',
        'address'=>'nullable',
        'dob'=>'nullable',
        'photo'=>'nullable',
      ]);

      $id=Auth::user()->id;
      $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
      $institutionId = $verifiyInstiution->institution->id;



      $data['institution_id']=$institutionId;
      // $data['user_id']=$id;
      student::create($data);

      session()->flash('msg','Student Created Successfully');
      return redirect(route('student.index'));
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
    public function update(Request $request,student $student)
    {
      $data= request()->validate([
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'user_id'=>'nullable',
        'address'=>'nullable',
        'dob'=>'nullable',
        'photo'=>'nullable',
      ]);
      // dd($data);
      $student->update($data);

      return Response::json($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
      $student->delete();
    }
}
