<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Galeria de Contatos</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        body {
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <main role="main">
        <?php if (! empty(trim($__env->yieldContent('content')))): ?>
            <?php echo $__env->yieldContent('content'); ?>
        <?php endif; ?>
    </div>
    <script src="{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>