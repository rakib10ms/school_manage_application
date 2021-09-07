@extends('layout.main')

@section('content')
<div class="container ">

          <div class="card">
              <div class="card-header">
                <div class="col-md-9">
                  <h3 class="text-center py-1 mx-3"> Edit Account Other Costs 
                  </div>

                       
                    <!--   <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-plus-circle"></i> Add Account cost</a> -->
                      
                  </h3>

              </div><!-- /.card-header -->
              <div class="card-body">


  <form class="" id="other_costs" action="{{route('othercosts.update',$editcosts->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row has-success">
      <label for="" class="col-sm-2 col-form-label">Amount</label>
      <div class="col-sm-10 col-md-6">
        <input type="text" class="form-control form-control-success" name="amount" value="{{$editcosts->amount}}" />
      </div>
    </div>

        <div class="form-group row has-success">
		      <label for="" class="col-sm-2 col-form-label">Description</label>
		      <div class="col-sm-10 col-md-6">
		         <div class="form-group">
		        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$editcosts->description}}</textarea>
		  </div>
		      </div>
    </div>



     <div class="form-group row has-success">
     		  <label for="" class="col-sm-2 col-form-label">Image</label>
       <div class="col-sm-10 col-md-6">
			  <div class="form-group">

             @if (File::exists(public_path("upload/cost_images/".$editcosts->image)))
            <img src="{{ asset('/public/upload/cost_images/' .$editcosts->image) }}" height="45px" width="55px" class="my-2" />
          @else 
              <h6> No image Choosen </h6>
          @endif

			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
			  </div>
			   </div>
			</div>


    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Date</label>
      <div class="col-sm-10 col-md-6">
        <input type="date" class="form-control" name="date" value="{{$editcosts->date}}"/>
      </div>
    </div>


 
    <div class="row">
      <div class="offset-sm-2 col-sm-10">
 <button type="submit" class="btn btn-info">Primary</button>   
  </div>
    </div>
  </form>
</div>
</div>
</div>
</div>


@endsection