<?php $__env->startSection('content'); ?>


   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Leave Section</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Holiday Section</li>
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
                                <h3>Leave Purpose Lists

                                     
                                    <a class="btn btn-success float-right btn-sm" href="<?php echo e(route('add.leave')); ?>"><i class="fa fa-plus-circle"></i> Add Leave Purpose field</a>
                                    
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover" style="width: 100%;">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Tittle</th>                                      
                                        
                                        <th>Action</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>1 </td>
                                            <td> <?php echo e($leave->name); ?></td>
                                           
                                               <td>
                                                
                                                <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('leave.edit',$leave->id)); ?>"><i class="fa fa-edit"></i></a>
                                               <!--  <a title="Promotion" class="btn btn-sm btn-success" href=""><i class="fa fa-check"></i></a> -->
                                              
                                                <a  title="Details" class="btn btn-sm btn-info" href="<?php echo e(route('leave.delete',$leave->id)); ?>"><i class="fa fa-trash"></i></a>




                                            </td>
                                           
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/leaves/leaveview.blade.php ENDPATH**/ ?>