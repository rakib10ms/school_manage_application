<?php $__env->startSection('content'); ?>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Marks Edit</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Marks Edit</li>
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
                                <h3>Search Criteria</h3>

                            </div><!-- /.card-header -->

                            <div class="card-body">

                                <form method="post" action="<?php echo e(route('marks.update')); ?>" id="myForm">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">

                                        <div class="col-md-3">
                                            <label>Year <font style="color: red">*</font></label>
                                            <select name="year_id" id="year_id" class="form-control form-control-sm">
                                                <option value="">Select Year</option>
                                                <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($year->id); ?>"><?php echo e($year->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>

                                        <div class="col-md-3">
                                            <label>Class <font style="color: red">*</font></label>
                                            <select name="class_id" id="class_id" class="form-control form-control-sm">
                                                <option value="">Select Class</option>
                                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cls->id); ?>"><?php echo e($cls->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label>Subject</label>
                                            <select name="assign_subject_id" id="assign_subject_id" class="form-control form-control-sm">
                                                <option value="">Select Subject</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Exam Type </label>
                                            <select name="exam_type_id" id="exam_type_id" class="form-control form-control-sm">
                                                <option value="">Select Exam Type</option>
                                                <?php $__currentLoopData = $exam_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?> </option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                            </select>

                                        </div>
                                        <div class="form-group col-md-3" style="padding-top:29px;">

                                            <a id="search"class="btn btn-primary btn-sm" name="search">Search</a>
                                        </div>

                                    </div><br/>
                                    <div class="row d-none" id="marks-entry">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped dt-responsive" style="width: 100%">
                                                <thead>
                                                <tr>
                                                    <th>ID No</th>
                                                    <th>Student Name</th>
                                                    <th>Father's Name</th>
                                                    <th>Marks</th>
                                                </tr>
                                                </thead>
                                                <tbody id="marks-entry-tr"></tbody>

                                            </table>
                                            
                                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                                           


                                        </div>

                                    </div>


                                </form>


                            </div>
                            <!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>




    <script type="text/javascript">
        $(document).on('click','#search',function () {

            var year_id=$('#year_id').val();
            var class_id=$('#class_id').val();
            var assign_subject_id=$('#assign_subject_id').val();
            var exam_type_id=$('#exam_type_id').val();
            $('.notifyjs-corner').html('');
            if(year_id==''){
                $.notify("Year required",{globalPosition:'top-right',className:'error'});
                return false;
            }
            if(class_id=='') {
                $.notify("Class required", {globalPosition: 'top-right', className: 'error'});
                return false;
            }
            if(assign_subject_id=='') {
                $.notify("Subject required", {globalPosition: 'top-right', className: 'error'});
                return false;
            }
            if(exam_type_id=='') {
                $.notify("Exam Type required", {globalPosition: 'top-right', className: 'error'});
                return false;
            }
            $.ajax({
                url:"<?php echo e(route('get-student-marks')); ?>",
                type:"GET",
                data:{'year_id':year_id,'class_id':class_id,'assign_subject_id':assign_subject_id,'exam_type_id':exam_type_id},
                success:function (data){
                    $('#marks-entry').removeClass('d-none');
                    var html='';
                    $.each(data,function (key,v) {
                        html+=
                            '<tr>'+
                            '<td>'+ v.student.id_no+'<input type="hidden" name="student_id[]"value=" '+v.student_id+' "> <input type="hidden" name="id_no[]"value=" '+v.student.id_no+' "></td>'+
                            '<td>'+ v.student.name+ '</td>'+
                            '<td>'+ v.student.fname+ '</td>'+
                            '<td><input type="text" class="form-control form-control-sm" name="marks[]" value="'+v.marks +'"> </td>'+
                            '</tr>';

                    });

                    html=$('#marks-entry-tr').html(html);
                }
            });

        });

    </script>


    <script type="text/javascript">
        $(function () {
            $(document).on('change','#class_id',function () {
                var class_id=$('#class_id').val();

                $.ajax({
                    url:"<?php echo e(route('get-subject')); ?>",
                    type:"GET",
                    data:{class_id:class_id},
                    success :function (data) {
                        var html='<option value="">Select Subject</option>';

                        $.each(data,function (key,v) {
                            html +='<option value ="'+v.id+'">'+v.subject.name+'</option>';

                        });
                        $('#assign_subject_id').html(html);
                    }

                });

            });
        });

    </script>



    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {

                    "marks[]": {
                        required: true

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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/marks/marks-edit.blade.php ENDPATH**/ ?>