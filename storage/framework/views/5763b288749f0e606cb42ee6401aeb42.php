<script src="<?php echo e(asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/jquery-confirm/jquery-confirm.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/validation-setup/validation-setup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/custom/notification.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/custom/form.js')); ?>"></script>
<?php echo $__env->yieldPushContent('js'); ?>

<?php if(Session::has('success')): ?>
    <script>
        Notify('success', null, "<?php echo e(Session::get('success')); ?>");
    </script>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <script>
        Notify('error', null, "<?php echo e(Session::get('error')); ?>");
    </script>
<?php endif; ?>
<?php if(Session::has('warning')): ?>
    <script>
        Notify('warning', null, "<?php echo e(Session::get('warning')); ?>");
    </script>
<?php endif; ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/auth/partials/scripts.blade.php ENDPATH**/ ?>