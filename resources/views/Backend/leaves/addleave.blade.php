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
                                

                                <h1 class="h4 text-gray-900 mb-4">Add Leave Purpose Form</h1>
                            </div>
                            <form class="user" action="{{route('leave.store')}}" method="POST">
                                @csrf
                                @include('backend.layouts.message')

                            	
                                <div class="form-group row">
                                    <div class="col-sm-12 my-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Leave Purpose Tittle" name="name">
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