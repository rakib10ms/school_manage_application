
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"></button>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>



<?php if(Session::has('success')): ?>

    <div class="alert alert-success">

        <p> <?php echo e(Session::get('success')); ?></p>
    </div>

<?php endif; ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/layouts/message.blade.php ENDPATH**/ ?>