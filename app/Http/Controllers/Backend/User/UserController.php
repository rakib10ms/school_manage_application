<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function createPDF() {


    //     //    $data ['details']=AssignStudent::with(['student','discount'])->where('student_id',$student_id)->first();
    //     // $pdf = PDF::loadView('backend/student/student_reg/student-details-pdf', $data);
    //     // // $pdf->SetProtection(['copy', 'print'], '', 'pass');
    //     // return $pdf->stream('document.pdf');

    //   // retreive all records from db
    
    //     $allUsers=DB::table('users')->get();
    //     // dd($allUsers);

    //   // view()->share('employee',$allUsers);
    //   $pdf = PDF::loadView('backend.user.index.pdf_view', $allUsers);

    //   // // download PDF file with download method
    //   return $pdf->download('pdf_file.pdf');
    // }

    public function index()
    {
        //
        
        $allUsers=DB::table('users')->get();
        // dd($allUsers);
        return view('backend.user.index',compact('allUsers'));

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
        //
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
