<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Designation;
use Auth;
use Illuminate\Database\Eloquent\Model;


class DesignationController extends Controller
{

    public function view(){

       
        $data['allData']=Designation::all();
        // dd($data);


        return view ('backend.setup.designation.view-designation',$data);
        
    }


    public function add(){
        // $access_action = Role_action::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // if($access->manage_setup && $access_action->designation_act){
        return view('backend.setup.designation.add-desgination');
        
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:designations,name',
        ]);

        $data =new Designation();
        $data->name=$request->name;

        $data->save();
        session()->flash('success','Designation update success');
        return redirect()->route('setups.designation.view');
    }

    public function edit($id){
        // $access_action = Role_action::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // if($access->manage_setup && $access_action->designation_act){

        $editData=Designation::find($id);
        // dd($editData);
        return view('backend.setup.designation.edit-designation',compact('editData'));
        // }
        // else{
        //     return redirect('home');
        // }
    }


    public function update(Request $request,$id){

        $data =Designation::find($id);
        $this->validate($request,[

            'name'=>'required|unique:designations,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.designation.view');

    }


    public function delete($id){
       
        $data=Designation::find($id);
        $data->delete();



        session()->flash('success', 'Data has deleted Successfully');
        return redirect()->route('setups.designation.view');
       
    }

}
