<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="<?php echo e(__('IE=edge')); ?>">
    <meta name="viewport" content="<?php echo e(__('width=device-width, initial-scale=1.0')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?><?php echo e(config('app.name')); ?></title>
    <?php echo $__env->make('layouts.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php echo $__env->yieldContent('main_content'); ?>
<?php echo $__env->yieldPushContent('modal'); ?>

<?php echo $__env->make('layouts.auth.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/auth/app.blade.php ENDPATH**/ ?>