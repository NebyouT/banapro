<!DOCTYPE html>
<?php if(in_array(app()->getLocale(), ['ar', 'arbh', 'eg-ar', 'fa', 'prs', 'ps', 'ur'])): ?>
    <html lang="<?php echo e(app()->getLocale()); ?>" dir="rtl">
    <?php else: ?>
    <html lang="<?php echo e(app()->getLocale()); ?>" dir="auto">
<?php endif; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="<?php echo e(__('IE=edge')); ?>">
    <meta name="viewport" content="<?php echo e(__('width=device-width, initial-scale=1.0')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?> <?php echo e(get_option('general')['title'] ?? config('app.name')); ?></title>
    <?php echo $__env->make('layouts.business.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

<!-- Side Bar Start -->
<?php echo $__env->make('layouts.business.partials.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Side Bar End -->
<div class="section-container">
    <!-- header start -->
    <?php echo $__env->make('layouts.business.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header end -->
    <!-- erp-state-overview-section start -->
    <div class="main-content min-h-100vh">
        <?php echo $__env->yieldContent('main_content'); ?>
    </div>
    <!-- erp-state-overview-section end -->
    <!-- footer start -->
    <?php echo $__env->make('layouts.business.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer end -->
    <?php echo $__env->yieldPushContent('modal'); ?>
</div>

<?php echo $__env->make('layouts.business.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/business/master.blade.php ENDPATH**/ ?>