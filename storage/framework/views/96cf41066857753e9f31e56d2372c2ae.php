<!DOCTYPE html>
<?php if(app()->getLocale() == 'ar'): ?>
<html lang="ar" dir="rtl">
<?php else: ?>
<html lang="en" dir="auto">
<?php endif; ?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> |
        <?php endif; ?> <?php echo e(get_option('general')['title'] ?? config('app.name')); ?>

    </title>
    <?php echo $__env->make('layouts.web.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php if(request()->is('/')): ?>
        <?php echo $__env->make('layouts.web.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.web.partials.common_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('main_content'); ?>

    <?php echo $__env->make('layouts.web.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <input type="hidden" id="payment_success" value="<?php echo e(session('payment_success')); ?>">

    <?php echo $__env->make('layouts.web.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/web/master.blade.php ENDPATH**/ ?>