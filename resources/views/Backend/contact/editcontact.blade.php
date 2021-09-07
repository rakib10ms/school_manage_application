@extends('layout.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7">
<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Form</h1>
                            </div>
                            <form class="user" action="{{route('contact.update',$value->id)}}" method="POST">
                            	@csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name" name="name" value="{{$value->name}}">
                                    </div>
                                   <!--  <div class="col-sm-12 my-3">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" value="{{$value->email}}">
                                </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Phone No" name="phone" value="{{$value->phone}}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <textarea class="form-control form-control-user" rows="5" id="exampleInputPassword" placeholder="textarea" name="message">
                                        	{{$value->message}}
                                        </textarea>
                                    </div>
                                  <!--   <div class="col-sm-12 my-3">
                                        <input type="textarea" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div> -->
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