<!DOCTYPE html>
<?php if(app()->getLocale() == 'ar'): ?>
<html lang="ar" dir="rtl">
<?php else: ?>
<html lang="en" dir="auto">
<?php endif; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="<?php echo e(__('IE=edge')); ?>">
    <meta name="viewport" content="<?php echo e(__('width=device-width, initial-scale=1.0')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?> <?php echo e(get_option('general')['title'] ?? config('app.name')); ?></title>
    <?php echo $__env->make('layouts.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

<!-- Side Bar Start -->
<?php echo $__env->make('layouts.partials.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Side Bar End -->
<div class="section-container">
    <!-- header start -->
    <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header end -->
    <!-- erp-state-overview-section start -->
    <div class="min-100-vh">
        <?php echo $__env->yieldContent('main_content'); ?>
    </div>
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- erp-state-overview-section end -->
    <?php echo $__env->yieldPushContent('modal'); ?>
</div>

<?php echo $__env->make('layouts.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/master.blade.php ENDPATH**/ ?>