<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentClass;
// use App\Role;
// use App\Role_action;
// use App\Role_submenu;
use Auth;
use DB;
// use App\Role_submenu;
class StudentClassController extends Controller
{

    public function view(){
        // echo "string"; exit();
        // $access_submenu = Role_submenu::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // if($access->manage_setup && $access_submenu->student_class){


        $data['allData']=StudentClass::all();


        return view ('backend.setup.student_class.view-class',$data);
        // }
        // else{
        //     return redirect('home');
        // }


    }


   public function add(){
   
  
       

        return view('backend.setup.student_class.add-class');
       
    }

    public function store(Request $request){

        // return $request; exit();
        $this->validate($request,[

            'name'=>'required|unique:student_classes,name',
        ]);

            $data =new StudentClass();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Logo update success');
        return redirect()->route('setups.student.class.view');
    }

    public function edit($id){
        // $access = Role::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // $access_action = Role_action::orderBy('id', 'ASC')->where('id', '=', Auth::user()->role_id)->first();
        // if($access->manage_setup && $access_action->student_class_act){

        $editData=StudentClass::find($id);
        return view('backend.setup.student_class.add-class',compact('editData'));
        // }
        // else{
        //     return redirect('home');
        // }
    }


    public function update(Request $request,$id){

        $data =StudentClass::find($id);
        $this->validate($request,[

            'name'=>'required|unique:student_classes,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('setups.student.class.view');

    }


    public function delete($id){

       
        
        $data=StudentClass::find($id);
        $data->delete();



        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('setups.student.class.view');
       
    }

}
