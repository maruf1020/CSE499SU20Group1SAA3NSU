<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institution;

class institutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instiutions=institution::all();
        // dd($instiutions);
        return view('dashboard.admin.admin-institutions',[
          'instiutions'=>$instiutions,
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
        'name'=>'required|unique:institutions',
        'ein'=>'required',
      ]);
      institution::create($data);
      // session()->flash('msg','Category Created Successfully');
      return redirect(route('institution.index'));
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
    public function edit(institution $institution)
    {
        return view('dashboard.admin.admin-institutions-edit')->with('institution', $institution);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,institution $institution)
    {
      $data= request()->validate([
        'name'=>'required|unique:institutions',
        'ein'=>'required',
      ]);
      // dd($data);
      $institution->update($data);
      // session()->flash('msg','Category Updated Successfully');
      return redirect(route('institution.index'));
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
