
@extends('layout.main')

@section('content')
 <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center py-3">Account Other Costs Lists

                                     
                                    <a class="btn btn-success float-right btn-sm" href="{{route('othercosts.create')}}"><i class="fa fa-plus-circle"></i> Add Account cost</a>
                                    
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                 @include('backend.layouts.message')

                                <table id="example1" class="table table-bordered table-hover" style="width: 100%;">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Amount</th>
                                        
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($costs as $cost)

                                        <tr class="">
                                            <td>  1 </td>
                                            <td>{{$cost->amount}}</td>
                                        <td>{{$cost->description}}</td>
       
                   <td> <img src="{{ url('/public/upload/cost_images/'.$cost->image) }}" alt="cost_image" height="45px" width="55px"> </td>

                                                   <td>{{$cost->date}}</td>


                                    <td>
                                        
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('othercosts.edit',$cost->id)}}"><i class="fa fa-edit"></i></a>
                                   

                                        <a title="Details" class="btn btn-sm btn-info"  href="{{route('othercosts.delete',$cost->id)}}"><i class="fa fa-trash"></i> </a> 

                                    </td>


                                           
                                        </tr>
                            @endforeach

                                    </tbody>



                                </table>

                            </div>
                        </div>



                    </section>

@endsection