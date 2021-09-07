@extends('layout.main')
@section('content')
 
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Designation</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Designation</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

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
                                <h3>Designation List
                                    
                                    <a class="btn btn-success float-right btn-sm" href="{{route('setups.designation.add')}}"><i class="fa fa-plus-circle"></i> Add Designation</a>
                                    
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover" style="width: 100%">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Designation Name</th>
                                        
                                        <th>Action</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($value->name)}}</td>
                                            
                                            <td class="d-flex">
                                                <div>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('setups.designation.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
                                            </div>

                                      
                                        <form class="" action="{{route('setups.designation.delete',$value->id)}}" method="POST"> 
                                            @csrf

                                           <button type="submit" class="btn btn-danger py-1 px-2 mx-2"> <i class="fa fa-trash"></i></button>

                                        </form>

                                            </td>
                                           

                                        </tr>
                                    @endforeach


                                    </tbody>



                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection