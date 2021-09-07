<?php $__env->startSection('content'); ?>


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

                                        <?php $__currentLoopData = $allUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                        <tr>
                                            <td><?php echo e($key+1); ?> </td>
                                            <td><?php echo e($user->name); ?> </td>
                                            <td><?php echo e($user->email); ?> </td>
                                            <td><?php echo e($user->phone); ?> </td>
                                            <td><?php echo e($user->role_id); ?> </td>
                                            <td>
                                               <?php if(is_null($user->usertype)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->usertype); ?>  
                                             <?php endif; ?>    

                                            </td>
                                            <td>

                                            <?php if(is_null($user->address)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->address); ?>  
                                             <?php endif; ?>                 

                                            </td>
                                            <td>  <?php if(is_null($user->gender)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->gender); ?>  
                                             <?php endif; ?>    
                                         </td>
                                            <td> 
                                                <?php if(is_null($user->image)): ?>
                                            Null
                                              <?php else: ?> 
                                              <img src="<?php echo e(url('/public/upload/user_images/'.$user->image)); ?>"  height="45px" width="55px"> 
                                             
                                             <?php endif; ?>    

                                            </td>
                                            <td> 
                                      <?php if(is_null($user->fname)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->fname); ?>  
                                             <?php endif; ?>    
                                            </td>
                                            <td> 
                                                <?php if(is_null($user->mname)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->mname); ?>  
                                             <?php endif; ?>   
                                              </td>
                                            <td> 
                                             <?php if(is_null($user->f_occupation)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->f_occupation); ?>  
                                             <?php endif; ?>    </td>
                                            <td> 
                                                <?php if(is_null($user->m_occupation)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->m_occupation); ?>  
                                             <?php endif; ?> 
                                         </td>
                                            <td><?php if(is_null($user->religion)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->religion); ?>  
                                             <?php endif; ?> </td>
                                            <td><?php if(is_null($user->id_no)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->id_no); ?>  
                                             <?php endif; ?> </td>
                                            <td> <?php if(is_null($user->dob)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->dob); ?>  
                                             <?php endif; ?> </td>
                                            <td><?php if(is_null($user->code)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->code); ?>  
                                             <?php endif; ?>  </td>
                                            <td><?php if(is_null($user->is_active)): ?>
                                            Null
                                              <?php else: ?> 
                                             <?php echo e($user->is_active); ?>  
                                             <?php endif; ?> </td>
                                            <td><?php echo e($user->created_at); ?> </td>
                                            <td><?php echo e($user->updated_at); ?> </td>

                                    
                                           
                                               <td>
                                                
                                                <a title="Edit" class="btn btn-sm btn-primary" href=""><i class="fa fa-edit"></i></a>
                                               <!--  <a title="Promotion" class="btn btn-sm btn-success" href=""><i class="fa fa-check"></i></a> -->
                                              
                                                <a  title="Details" class="btn btn-sm btn-info" href=""><i class="fa fa-trash"></i></a>




                                            </td>
                                           
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>



                                </table>

                            </div>
                        </div>



                    </section>

                </div>
           


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/user/index.blade.php ENDPATH**/ ?>