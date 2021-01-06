<?php

namespace App\Http\Controllers\institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\faculty;
use Response;
use App\institution;
use App\verifiyInstiution;


class facultyController extends Controller
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

      $faculties=faculty::where('institution_id',$institutionId)->orderByDesc('id')->get();
      return view('dashboard.institution.institution-faculty',[
        'faculties'=>$faculties,
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
        'initial'=>'required|unique:faculties',
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
//      dd($data);
      // $data['user_id']=$id;
      faculty::create($data);

      session()->flash('msg','Faculty Created Successfully');
      return redirect(route('faculty.index'));
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
    public function edit(faculty $faculty)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,faculty $faculty)
    {

      $data= request()->validate([
        'name'=>'required',
        'initial'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'user_id'=>'nullable',
        'address'=>'nullable',
        'dob'=>'nullable',
        'photo'=>'nullable',
      ]);
      // dd($data);
      $faculty->update($data);

      return Response::json($faculty);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(faculty $faculty)
    {
        $faculty->delete();
    }
    public function verifiedFaculties()
    {
        $faculties=faculty::where('is_verified',1)->orderByDesc('id')->get();
        return view('dashboard.institution.institution-faculty-verified',[
          'faculties'=>$faculties,
        ]);
        dd($faculties);
    }

}
