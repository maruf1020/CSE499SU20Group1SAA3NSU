<?php

namespace App\Http\Controllers\institution;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\faculty;
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
      $faculties=faculty::orderBy('id', 'desc')->paginate(15);
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
        'dob'=>'required', 
        'photo'=>'nullable',       
      ]);
      
      $id=Auth::user()->id;
      $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
      $institutionId = $verifiyInstiution->institution->id;



      $data['institution_id']=$institutionId;
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
