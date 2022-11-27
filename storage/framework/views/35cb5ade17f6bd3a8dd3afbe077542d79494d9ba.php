

<?php $__env->startSection('content'); ?>
<div class="container">
<h1>dashboard</h1>
<form action="<?php echo e(route('logout')); ?>" method="post">
    <?php echo csrf_field(); ?>
<button type="submit" class="btn btn-primary">Logout</button>
</form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\media2\resources\views/dashboard.blade.php ENDPATH**/ ?>