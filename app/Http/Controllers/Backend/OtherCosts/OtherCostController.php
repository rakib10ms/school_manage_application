<?php

namespace App\Http\Controllers\Backend\OtherCosts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OtherCost;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\File; 

class OtherCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

              $costs=OtherCost::all();
        // dd($costs);
        return view('backend.othercosts.index',compact('costs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           return view('backend.othercosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

          // dd($request->all());


             $validatedData = $request->validate([
            'amount' => 'required|numeric', 'other_costs',
             'date' => 'required','other_costs',
               'image' => 'image|mimes:jpeg,jpg,png,gif',
            ]);


     $image = $request->file('image');
     $date = $request->input('date');
     $amount = $request->input('amount');
     $description = $request->input('description');






    if($request->file('image')){

                $file=$request->file('image');
                $filename=date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/cost_images'),$filename);
                // $user['image']=$filename;
                $image=$filename;
            
        // $this->save();
      $store= OtherCost::insert(['date'=>$date,'amount'=>$amount,'description'=>$description,'image'=>$image]);


    }
 
        return redirect()->route('othercosts.index')
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
        $editcosts=OtherCost::find($id);
        return view('backend.othercosts.edit',compact('editcosts'));
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
   
      $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
     
    $updateData = OtherCost::find($id);
    // dd($updateData);
       $date = $request->input('date');
     $amount = $request->input('amount');
     $description = $request->input('description');

    
  
    if ($request->hasFile('image')){
    $image_path = public_path("/upload/cost_images/".$updateData->image);
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $costImage = $request->file('image');
    $imgName = $costImage->getClientOriginalName();
    $destinationPath = public_path('/upload/cost_images/');
    $costImage->move($destinationPath, $imgName);

    $updateData->update(['image' => $imgName,'date'=>$date,'amount'=>$amount,'description'=>$description]);

       $updateData->save();

  } 

      $updateData->update(['date'=>$date,'amount'=>$amount,'description'=>$description]);
      
       $updateData->save();


  

   return redirect()->route('othercosts.index');
     


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


     $costsData = OtherCost::find($id);
     // dd($costsData);

      $oldPicture = "/upload/cost_images/".$costsData->image;

           if ( File::exists($oldPicture)) {
            File::delete($oldPicture);
            
                      } 
          $costsData->delete();

        session()->flash('success', 'Data has deleted Successfully');
        return redirect()->route('othercosts.index');



    }
}
