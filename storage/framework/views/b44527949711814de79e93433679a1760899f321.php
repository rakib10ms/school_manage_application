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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                <?php if(isset($editData)): ?>
                               <h3> Edit Student
                                    <?php else: ?>
                                    Add Student
                                    <?php endif; ?>

                                    <a class="btn btn-success float-right btn-sm" href="<?php echo e(route('students.registration.view')); ?>"><i class="fa fa-list"></i>Student List</a>
                               </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="<?php echo e((@$editData)?route('students.registration.update',$editData->student_id):route('students.registration.store')); ?>" id="myForm" enctype="multipart/form-data" >
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden"name="id"value="<?php echo e(@$editData->id); ?>">

                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>Student Name  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="<?php echo e(@$editData['student']['name']); ?>" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Father's Name <font style="color: red">*</font></label>
                                            <input type="text" name="fname" value="<?php echo e(@$editData['student']['fname']); ?>" class="form-control form-control-sm"id="fname">

                                        </div>
                                        <div class="col-md-4">
                                        <label>Mother's Name <font style="color: red">*</font></label>
                                        <input type="text" name="mname" value="<?php echo e(@$editData['student']['mname']); ?>" class="form-control form-control-sm"id="mname">

                                    </div>
                                        <div class="col-md-4">
                                            <label>Mobile No <font style="color: red">*</font></label>
                                            <input type="text" name="mobile" value="<?php echo e(@$editData['student']['mobile']); ?>" class="form-control form-control-sm"id="mobile">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Address <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="<?php echo e(@$editData['student']['address']); ?>" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Gender  <font style="color: red">*</font></label>
                                            <select name="gender" class="form-control form-control-sm">
                                                <option value="">Select Gender</option>
                                                <option value="male" <?php echo e((@$editData['student']['gender']=='male')?"selected":''); ?>>Male</option>
                                                <option value="female" <?php echo e((@$editData['student']['gender']=='female')?"selected":''); ?>>Feamle</option>
                                                <option value="other <?php echo e((@$editData['student']['gender']=='other')?"selected":''); ?>">Others</option>
                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Relegious <font style="color: red">*</font></label>
                                            <select name="religion" class="form-control form-control-sm">
                                                <option value="">Select Relegion</option>
                                                <option value="islam" <?php echo e((@$editData['student']['religion']=='islam')?"selected":''); ?>>Islam</option>
                                                <option value="hndu" <?php echo e((@$editData['student']['religion']=='hindu')?"selected":''); ?>>Hindu</option>
                                                <option value="buddist" <?php echo e((@$editData['student']['religion']=='buddist')?"selected":''); ?>>Buddist</option>
                                                <option value="christan"<?php echo e((@$editData['student']['religion']=='christan')?"selected":''); ?>>Christan</option>
                                                <option value="jewes"<?php echo e((@$editData['student']['religion']=='jewes')?"selected":''); ?>>Jewes</option>
                                                <option value="other"<?php echo e((@$editData['student']['religion']=='other')?"selected":''); ?>>Others</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Date of Birth <font style="color: red">*</font></label>
                                            <input type="date" name="dob" value="<?php echo e(@$editData['student']['dob']); ?>" class="form-control form-control-sm singledatepicker" autocomplete="off" id="dob">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Discount <font style="color: red">*</font></label>
                                            <input type="text" name="discount" value="<?php echo e(@$editData['discount']['discount']); ?>" class="form-control form-control-sm" autocomplete="off">

                                        </div>


                                        <div class="col-md-4">
                                            <label>Year <font style="color: red">*</font></label>
                                            <select name="year_id" class="form-control form-control-sm">
                                                <option value="">Select Year</option>
                                                <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($year->id); ?>"<?php echo e((@$editData->year_id==$year->id)?"selected":""); ?>><?php echo e($year->name); ?> </option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Class <font style="color: red">*</font></label>
                                            <select name="class_id" class="form-control form-control-sm">
                                                <option value="">Select Class</option>
                                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cls->id); ?>"<?php echo e((@$editData->class_id==$cls->id)?"selected":""); ?>><?php echo e($cls->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Group</label>
                                            <select name="group_id" class="form-control form-control-sm">
                                                <option value="">Select Group</option>
                                                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($grp->id); ?>" <?php echo e((@$editData->group_id==$cls->id)?"selected":""); ?>><?php echo e($grp->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Shift</label>
                                            <select name="shift_id" class="form-control form-control-sm">
                                                <option value="">Select Group</option>
                                                <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($shift->id); ?>" <?php echo e((@$editData->shift_id==$shift->id)?"selected":""); ?>><?php echo e($shift->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control form-control-sm" id="image">

                                        </div>
                                        <div class="col-md-4">
                                            <img id="showImage" src="<?php echo e((!empty($editData['student']['image']))?url('upload/student_images/'.$editData['student']['image']):url('upload/no_img.png')); ?>" style="width:100px;height:110px;border:1px solid#000;">

                                        </div>



                                    </div>



                                        <div class="form-group col-md-6"style="padding-top:30px;">
                                            <!-- <button type="submit" class="btn btn-primary btn-sm">

                                               <?php echo e((@$editData)?'Update':'Submit'); ?>


                                            </button> -->
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                                        </div>

                                </form>



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
                    "name": {
                        required: true,
                    },
                    "fname": {
                        required: true,
                    },
                    "mname": {
                        required: true,

                    },
                    "mobile": {
                        required: true,

                    },
                    "address": {
                        required: true,

                    },
                    "gender": {
                        required: true,

                    },
                    "religion": {
                        required: true,

                    },
                    "dob": {
                        required: true,

                    },
                    "discount": {
                        required: true,

                    },

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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/student/student_reg/add-student.blade.php ENDPATH**/ ?>