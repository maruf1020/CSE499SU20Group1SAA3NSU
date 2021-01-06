<?php

namespace App\Http\Controllers\institution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\session;
use Response;
use App\institution;
use App\verifiyInstiution;

class sessionController extends Controller
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

      $session=session::where('stop','')->orderByDesc('id')->get();
      return view('dashboard.institution.institution-session',[
        'session'=>$session,
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
        'start'=>'required',
        'end'=>'required',
        'status'=>'nullable',
      ]);

      $id=Auth::user()->id;
      $verifiyInstiution = verifiyInstiution::where('user_id',$id)->first();
      $institutionId = $verifiyInstiution->institution->id;



      $data['institution_id']=$institutionId;
      // $data['user_id']=$id;
      session::create($data);

      session()->flash('msg','Semsiter Session Created Successfully');
      return redirect(route('session.index'));
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
    public function update(Request $request,session $session)
    {
      $data= request()->validate([
        'name'=>'required',
        'start'=>'required',
        'end'=>'required',
        'status'=>'nullable',
        'stop'=>'nullable',
      ]);
      $stop=$request->stop;
      if($stop==1){
        $data['status']=0;

      }
      // dd($data);
      $session->update($data);

      return Response::json($session);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(session $session)
    {
        $session->delete();
    }
    public function previousSession()
    {
      $session=session::where('stop','1')->orderByDesc('id')->get();
      return view('dashboard.institution.institution-previous-session',[
        'session'=>$session,
      ]);
    }

}
