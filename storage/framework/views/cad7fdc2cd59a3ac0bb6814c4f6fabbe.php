<script src="<?php echo e(asset('assets/web/js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/lity.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/type.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/custom/notification.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/validation-setup/validation-setup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/jquery-confirm/jquery-confirm.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/custom/form.js')); ?>?v=<?php echo e(time()); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-ajax.js')); ?>?v=<?php echo e(time()); ?>"></script>
<script src="<?php echo e(asset('assets/web/js/custom.js')); ?>?v=<?php echo e(time()); ?>"></script>
<script src="<?php echo e(asset('assets/js/auth.js')); ?>?v=<?php echo e(time()); ?>"></script>

<?php echo $__env->yieldPushContent('js'); ?>

<?php if(Session::has('message')): ?>
    <script>
        toastr.success( "<?php echo e(Session::get('message')); ?>");
    </script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <script>
        toastr.error( "<?php echo e(Session::get('error')); ?>");
    </script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
    <script>
        toastr.warning( "<?php echo e(Session::get('warning')); ?>");
    </script>
<?php endif; ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/web/partials/script.blade.php ENDPATH**/ ?>