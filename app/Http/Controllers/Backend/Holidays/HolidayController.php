<?php

namespace App\Http\Controllers\Backend\Holidays;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Holiday;
use Illuminate\Support\Facades\Validator;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $holidays=Holiday::all();
        // dd($holidays);
        return view('backend.holiday.holidayview',compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.holiday.addholiday');
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


            'tittle'=>'required|unique:holidays,tittle',
            'date'=>'required|required:holidays,date',
        ]);
         Holiday::create($request->all());

        return redirect()->route('holiday.index')
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

        $editHoliday=Holiday::find($id);
        return view('backend.holiday.editholiday',compact('editHoliday'));
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
        
           $holiday=Holiday::find($id);
           $holiday->tittle=$request->tittle;
           $holiday->description=$request->description;
           $holiday->date=$request->date;
           $holiday->save();
           return redirect()->route('holiday.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $holiday = Holiday::find($id);
          $holiday->delete();

        session()->flash('success', 'Logo has deleted Successfully');
        return redirect()->route('holiday.index');
        // return redirect()->route('holiday.index');
}
}
