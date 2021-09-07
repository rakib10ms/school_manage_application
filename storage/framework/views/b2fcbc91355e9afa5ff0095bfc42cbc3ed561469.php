 <?php $__env->startSection('content'); ?>



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Students</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>
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
                                <h3>Student List
                                     
                                    <a class="btn btn-success float-right btn-sm" href="<?php echo e(route('students.registration.add')); ?>"><i class="fa fa-plus-circle"></i> Add Student</a>
                                   
                                </h3>

                            </div><!-- /.card-header -->

                            <div class="card-body">

                                <form method="get" action="<?php echo e(route('students.year.class.wise')); ?>" id="myForm">
                                    <div class="form-row">

                                        <div class="col-md-4">
                                            <label>Year <font style="color: red">*</font></label>
                                            <select name="year_id" class="form-control form-control-sm">
                                                <option value="">Select Year</option>
                                                <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($year->id); ?>"<?php echo e((@$year_id==$year->id)?"selected":""); ?>><?php echo e($year->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Class <font style="color: red">*</font></label>
                                            <select name="class_id" class="form-control form-control-sm">
                                                <option value="">Select Class</option>
                                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cls->id); ?>"<?php echo e((@$class_id==$cls->id)?"selected":""); ?>><?php echo e($cls->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>
                                        <div class="col-md-4" style="padding-top:29px;">

                                            <button type="submit"class="btn btn-primary btn-sm" name="search">Search</button>
                                        </div>

                                    </div>


                                </form>

                            </div>
                            <div class="card-body">
                                <?php if(!@$search): ?>

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th width="7%">SL</th>
                                        <th>Name</th>
                                        <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        
                                        <th>Code</th>
                                       
                                         
                                        <th width="14%">Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($value['student']['name']); ?></td>
                                            <td><?php echo e($value['student']['id_no']); ?></td>
                                            <td><?php echo e(($value->roll)); ?></td>
                                            <td><?php echo e($value['year']['name']); ?></td>
                                            <td><?php echo e($value['student_class']['name']); ?></td>

                                            <td>
                                                <img  src="<?php echo e((!empty($value['student']['image']))?url('public/upload/student_images/'.$value['student']['image']):url('upload/no_img.png')); ?>" style="width:70px;height:80px;border:1px solid#000;">

                                            </td>
                                           
                                                <td><?php echo e($value['student']['code']); ?></td>
                                            

                                            <td>
                                                
                                                <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('students.registration.edit',$value->student_id)); ?>"><i class="fa fa-edit"></i></a>
                                                <a title="Promotion" class="btn btn-sm btn-success" href="<?php echo e(route('students.registration.promotion',$value->student_id)); ?>"><i class="fa fa-check"></i></a>
                                              
                                                <a target="_blank" title="Details" class="btn btn-sm btn-info" href="<?php echo e(route('students.registration.details',$value->student_id)); ?>"><i class="fa fa-eye"></i></a>



                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </tbody>



                                </table>
                                    <?php else: ?>
                                    <table id="example1" class="table table-bordered table-hover">

                                        <thead>
                                        <tr>
                                            <th width="7%">SL</th>
                                            <th>Name</th>
                                            <th>ID NO</th>
                                            <th>Roll</th>
                                            <th>Year</th>
                                            <th>Class</th>
                                            <th>Image</th>
                                            <?php if(Auth::user()->role=="Admin"): ?>
                                                <th>Code</th>
                                            <?php endif; ?>

                                            <th width="14%">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key+1); ?></td>
                                                <td><?php echo e($value['student']['name']); ?></td>
                                                <td><?php echo e($value['student']['id_no']); ?></td>
                                                <td><?php echo e(($value->roll)); ?></td>
                                                <td><?php echo e($value['year']['name']); ?></td>
                                                <td><?php echo e($value['student_class']['name']); ?></td>

                                                <td>
                                                    <img  src="<?php echo e((!empty($value['student']['image']))?url('upload/student_images/'.$value['student']['image']):url('upload/no_img.png')); ?>" style="width:70px;height:80px;border:1px solid#000;">

                                                </td>
                                                <?php if(Auth::user()->role=="Admin"): ?>
                                                    <td><?php echo e($value['student']['code']); ?></td>
                                                <?php endif; ?>
                                                <td><?php echo e(($value->class_id)); ?></td>
                                                <td><?php echo e(($value->year_id)); ?></td>

                                                <td>
                                                    <a title="Edit" class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                                                    <a title="Promotion" class="btn btn-sm btn-success" href=""><i class="fa fa-check"></i></a>
                                                    <a target="_blank" title="Details" class="btn btn-sm btn-info" href=""><i class="fa fa-eye"></i></a>



                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>



                                    </table>
                                <?php endif; ?>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {

                    "year_id": {
                        required: true,

                    },
                    "class_id": {
                        required: true,

                    }
                },

                messages: {


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/student/student_reg/view-student.blade.php ENDPATH**/ ?>