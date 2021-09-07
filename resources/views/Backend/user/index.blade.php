@extends('layout.main')

@section('content')


   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->

                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-success text-white" href=""> <i class="fa fa-plus-circle"></i> Add User </a>
                                <h3>All users

                                     
                                    <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-plus-circle"></i> View PDF</a>
                                    
                                </h3>

                            </div>
                            <div class="card-body">
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12" style="overflow-x: scroll";>

                                <table id="example3" class="table table-bordered table-hover" style="width: 100%;
                                overflow-x:scroll;">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>                                      
                                        <th>Email</th>                                      
                                        <th>phone</th>                                      
                                        <th>User Role</th>                                      
                                        <th>User Type</th>                                      
                                        <th>Address</th>                                      
                                        <th>Gender</th>                                      
                                        <th>Image</th>                                      
                                        <th>First-name</th>                                      
                                        <th>Last-name</th>                                      
                                        <th>Father Occupation</th>                                      
                                        <th>Mother Occupation</th>                                      
                                        <th>Religion</th>                                      
                                        <th>Id-no</th>                                      
                                        <th>Dob</th>                                      
                                        <th>Code</th>                                                 
                                        <th>IsActive</th>                                      
                                        <th>Created At</th>                                      
                                        <th>Updated At</th>                                          
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($allUsers as $key=>$user)
                               
                                        <tr>
                                            <td>{{$key+1}} </td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->email}} </td>
                                            <td>{{$user->phone}} </td>
                                            <td>{{$user->role_id}} </td>
                                            <td>
                                               @if(is_null($user->usertype))
                                            Null
                                              @else 
                                             {{$user->usertype}}  
                                             @endif    

                                            </td>
                                            <td>

                                            @if(is_null($user->address))
                                            Null
                                              @else 
                                             {{$user->address}}  
                                             @endif                 

                                            </td>
                                            <td>  @if(is_null($user->gender))
                                            Null
                                              @else 
                                             {{$user->gender}}  
                                             @endif    
                                         </td>
                                            <td> 
                                                @if(is_null($user->image))
                                            Null
                                              @else 
                                              <img src="{{ url('/public/upload/user_images/'.$user->image) }}"  height="45px" width="55px"> 
                                             
                                             @endif    

                                            </td>
                                            <td> 
                                      @if(is_null($user->fname))
                                            Null
                                              @else 
                                             {{$user->fname}}  
                                             @endif    
                                            </td>
                                            <td> 
                                                @if(is_null($user->mname))
                                            Null
                                              @else 
                                             {{$user->mname}}  
                                             @endif   
                                              </td>
                                            <td> 
                                             @if(is_null($user->f_occupation))
                                            Null
                                              @else 
                                             {{$user->f_occupation}}  
                                             @endif    </td>
                                            <td> 
                                                @if(is_null($user->m_occupation))
                                            Null
                                              @else 
                                             {{$user->m_occupation}}  
                                             @endif 
                                         </td>
                                            <td>@if(is_null($user->religion))
                                            Null
                                              @else 
                                             {{$user->religion}}  
                                             @endif </td>
                                            <td>@if(is_null($user->id_no))
                                            Null
                                              @else 
                                             {{$user->id_no}}  
                                             @endif </td>
                                            <td> @if(is_null($user->dob))
                                            Null
                                              @else 
                                             {{$user->dob}}  
                                             @endif </td>
                                            <td>@if(is_null($user->code))
                                            Null
                                              @else 
                                             {{$user->code}}  
                                             @endif  </td>
                                            <td>@if(is_null($user->is_active))
                                            Null
                                              @else 
                                             {{$user->is_active}}  
                                             @endif </td>
                                            <td>{{$user->created_at}} </td>
                                            <td>{{$user->updated_at}} </td>

                                    
                                           
                                               <td>
                                                
                                                <a title="Edit" class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                                               <!--  <a title="Promotion" class="btn btn-sm btn-success" href=""><i class="fa fa-check"></i></a> -->
                                              
                                                <a  title="Details" class="btn btn-sm btn-info" href=""><i class="fa fa-trash"></i></a>




                                            </td>
                                           
                                        </tr>
                                @endforeach

                                    </tbody>



                                </table>

                            </div>
                        </div>



                    </section>

                </div>
           


@endsection