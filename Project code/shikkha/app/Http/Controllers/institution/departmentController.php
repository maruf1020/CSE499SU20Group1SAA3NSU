<?php

namespace App\Http\Controllers\institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\department;
use Response;
use App\institution;
use App\verifiyInstiution;

class departmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $departments=department::orderByDesc('id')->get();
      return view('dashboard.institution.institution-department',[
        'departments'=>$departments,
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
        'name'=>'required|unique:departments',
      ]);

      $id=Auth::user()->id;
      $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
      $institutionId = $verifiyInstiution->institution->id;



      $data['institution_id']=$institutionId;
      // $data['user_id']=$id;
      department::create($data);

      session()->flash('msg','Departments Created Successfully');
      return redirect(route('department.index'));
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
    public function update(Request $request,department $department)
    {
      $data= request()->validate([
        'name'=>'required',
      ]);
      // dd($data);
      $department->update($data);

      return Response::json($department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $department)
    {
          $department->delete();
    }
}
