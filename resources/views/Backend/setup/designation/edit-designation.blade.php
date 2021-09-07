@extends('layout.main')
@section('content')
<div class="container ">

          <div class="card">
              <div class="card-header">
                <div class="col-md-9">
                  <h3 class="text-center py-1 mx-3">Add Designation </h3>
                  </div>

                       
                    <!--   <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-plus-circle"></i> Add Account cost</a> -->
                      
                  </h3>

              </div>
              <div class="card-body">

                <form class="" id="add_desgination" action="{{ route('setups.designation.update',$editData->id)}}" method="POST">
                    @csrf
                    <div class="form-group row has-success">
                      <label for="" class="col-sm-2 col-form-label">Add  Name</label>
                      <div class="col-sm-10 col-md-6">
                        <input type="text" class="form-control form-control-success" name="name" value="{{$editData->name}}" />
                      </div>
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
@endsection 