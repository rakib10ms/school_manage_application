<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-7">
<div class="p-5">
                            <div class="text-center">
                              <!--   <?php if($errors->any()): ?>
                                   <ul class="alert alert-danger">
                                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <li ><?php echo e($error); ?></li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>  -->
                                

                                <h1 class="h4 text-gray-900 mb-4">Add Leave Purpose Form</h1>
                            </div>
                            <form class="user" action="<?php echo e(route('leave.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('backend.layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            	
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/leaves/addleave.blade.php ENDPATH**/ ?>