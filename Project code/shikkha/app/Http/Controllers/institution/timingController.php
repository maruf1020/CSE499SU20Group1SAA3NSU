<?php

namespace App\Http\Controllers\institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\timing;
use Response;
use App\institution;
use App\verifiyInstiution;

class timingController extends Controller
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

        $timings=timing::where('institution_id',$institutionId)->orderByDesc('id')->get();
        return view('dashboard.institution.institution-timing',[
            'timings'=>$timings,
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
            'start'=>'required',
            'end'=>'required',

        ]);

        $id=Auth::user()->id;
        $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
        $institutionId = $verifiyInstiution->institution->id;



        $data['institution_id']=$institutionId;
        // $data['user_id']=$id;
        timing::create($data);

        session()->flash('msg','Class time Created Successfully');
        return redirect(route('timing.index'));
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
    public function update(Request $request, timing $timing)
    {
        $data= request()->validate([
            'start'=>'required',
            'end'=>'required',

        ]);
        // dd($data);
        $timing->update($data);

        return Response::json($timing);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(timing $timing)
    {
        $timing->delete();
    }
}
