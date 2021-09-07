<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Assign Subject</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Assign Subject</li>
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
                                    <h3> Edit Assign Subject
                                        <?php else: ?>
                                            Add Assign Subject
                                        <?php endif; ?>

                                        <a class="btn btn-success float-right btn-sm" href="<?php echo e(route('setups.assign.subject.view')); ?>"><i class="fa fa-list"></i>Assign Subject List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <form method="POST" action="<?php echo e(route('setups.assign.subject.store')); ?>" enctype="multipart/form-data" id="myForm" >
                                    <?php echo csrf_field(); ?>
                                    <div class="add_item">
                                        <div class="form-row">

                                            <div class="form-group row col-md-3">
                                                <label>Class Name</label>

                                                    <select name="class_id"class="form-control">
                                                        <option value="">Select Class</option>
                                                        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($cls->id); ?>"><?php echo e($cls->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>


                                            </div>


                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Subject</label>

                                                <select name="subject_id[]"class="form-control">
                                                    <option value="">Select Subject</option>
                                                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>


                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label>Full Mark</label>

                                                <input type="text" name="full_mark[]"class="form-control">
                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label>Pass Mark</label>

                                                <input type="text" name="pass_mark[]"class="form-control">
                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label>Subjective Mark</label>

                                                <input type="text" name="subjective_mark[]"class="form-control">
                                            </div>



                                            <div class="form-group clo-md-1" style="padding-top:30px;">
                                                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                                </div>
                                            </div>


                                        </div>






                                    <button type="submit" class="btn btn-primary">

                                        <?php echo e((@$editData)?'Update':'Submit'); ?>


                                    </button>



                                </form>







                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label>Subject</label>

                        <select name="subject_id[]"class="form-control">
                            <option value="0">Select Subject</option>
                            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Full Mark</label>

                        <input type="text" name="full_mark[]"class="form-control">
                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Pass Mark</label>

                        <input type="text" name="pass_mark[]"class="form-control">
                    </div>
                    <div class="form-group col-md-2 ">
                        <label>Subjective Mark</label>

                        <input type="text" name="subjective_mark[]"class="form-control">
                    </div>
                    <div class="form-group col-md-1" style="padding-top: 30px">

                        <div class="form-row">

                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>

    

    <script type="text/javascript">


        $(document).ready(function(){

            var counter = 0;
            $(document).on("click",".addeventmore",function(){
                var whole_extra_item_add=$("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click",".removeeventmore",function(event){
                $(this).closest("#delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });


    </script>



    
    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "class_id": {
                        required: true,
                    },
                    "subject_id[]": {
                        required: true,

                    },
                    "full_mark[]": {
                        required: true,

                    },
                    "pass_mark[]": {
                        required: true,

                    },
                    "subjective_mark[]": {
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/setup/assign_subject/add-assign-subject.blade.php ENDPATH**/ ?>