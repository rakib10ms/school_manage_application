<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Contact::all();
        return view('backend.contact.contactview',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact.addcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     $this->validate($request,[


            'name'=>'required|unique:contacts,name',
            'email'=>'required|required:contacts,email',
            'phone'=>'required|required:phone,phone',
            // 'email'=>'required|required:contacts,email',
        ]);
      Contact::create($request->all());

        return redirect()->route('contact')
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
         $value=Contact::find($id);

        return view('backend.contact.editcontact',compact('value'));
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
          
           $contact=Contact::find($id);
           $contact->name=$request->name;
           $contact->email=$request->email;
           $contact->phone=$request->phone;
           $contact->message=$request->message;
           $contact->save();
           return redirect()->route('contact');
                // session()->flash('success',' assign_subject update success');


             }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
          $contact->delete();
        return redirect()->route('contact');
                // session()->flash('success',' assign_subject update success');


    }
}
