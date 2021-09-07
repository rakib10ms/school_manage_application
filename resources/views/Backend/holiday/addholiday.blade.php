@extends('layout.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7">
<div class="p-5">
                            <div class="text-center">
                              <!--   @if($errors->any())
                                   <ul class="alert alert-danger">
                                      @foreach ($errors->all() as $error)
                                           <li >{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                @endif  -->
                                

                                <h1 class="h4 text-gray-900 mb-4">Add Holidays Form</h1>
                            </div>
                            <form class="user" action="{{route('holiday.store')}}" method="POST">
                                @include('backend.layouts.message')

                            	@csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Holiday Tittle" name="tittle">
                                    </div>
                                
                                </div>

                          

                                 
                                <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <textarea class="form-control form-control-user" rows="5" id="exampleInputPassword" placeholder="textarea" name="description">
                                        </textarea>
                                    </div>
                                  <!--   <div class="col-sm-12 my-3">
                                        <input type="textarea" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div> -->
                                </div>

                                  <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user form-control-sm-singledatepicker" id="exampleFirstName" placeholder="Holiday Date" name="date">
                                    </div>
                                
                                </div>



                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save Changes
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                       
                        </div>
                    </div>
                </div>
            </div>
@endsection