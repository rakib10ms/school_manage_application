<?php

namespace App\Http\Controllers\Backend\Leave;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\leave;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $leaves=Leave::all();
        // dd($holidays);
        return view('backend.leaves.leaveview',compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leaves.addleave');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $validator = Validator::make($request->all(), [
        //     'tittle'=>'required|unique:holidays,tittle',
        //     'date'=>'required|unique:holidays,date',
        // ]);

     $this->validate($request,[


            'name'=>'required|unique:leaves,name',
        ]);

         Leave::create($request->all());

        return redirect()->route('leave.index')
            ->with('success', 'data inserted successfully.');
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

        $editLeave=Leave::find($id);
        return view('backend.leaves.editleave',compact('editLeave'));
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
        
           $leave=Leave::find($id);
           $leave->name=$request->name;
          
           $leave->save();
           return redirect()->route('leave.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $leave= Leave::find($id);
          $leave->delete();

        session()->flash('success', 'Data has deleted Successfully');
        return redirect()->route('leave.index');
        // return redirect()->route('holiday.index');
}
}
