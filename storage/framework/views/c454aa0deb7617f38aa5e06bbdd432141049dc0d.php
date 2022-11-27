<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article app</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>
<body>

       
          
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
        </li>
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('login')); ?>" class="p-2 nav-link"><?php echo e(auth()->user()->name); ?></a>
        <?php endif; ?>
        
        <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
        </li>
        <?php endif; ?>
       
      </ul>
    </div>
  </div>
</nav>
</nav>

    <!-- dynamic content -->

    <?php echo $__env->yieldContent('content'); ?>
    
</body>
</html><?php /**PATH C:\laravel\media2\resources\views/layout/app.blade.php ENDPATH**/ ?>