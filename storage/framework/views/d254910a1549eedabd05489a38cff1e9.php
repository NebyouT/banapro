
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(get_option('general')['favicon'] ?? 'assets/images/logo/favicon.png')); ?>">
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
<!-- Fontawesome -->
<link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/jquery-confirm/jquery-confirm.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote-lite.css')); ?>">
<!-- Lily -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/lity.css')); ?>">
<!-- Style -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo e(time()); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>?v=<?php echo e(time()); ?>">
<!-- Toaster -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.min.css')); ?>">
<?php echo $__env->yieldPushContent('css'); ?>

<?php if(app()->getLocale() == 'ar'): ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/arabic.css')); ?>?v=<?php echo e(time()); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.rtl.min.css')); ?>">
<?php endif; ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/partials/css.blade.php ENDPATH**/ ?>