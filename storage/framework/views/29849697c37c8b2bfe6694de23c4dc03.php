<script src="<?php echo e(asset('assets/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/math.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/jquery-confirm/jquery-confirm.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/validation-setup/validation-setup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/custom/notification.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/custom/form.js')); ?>?v=<?php echo e(time()); ?>"></script>

<script src="<?php echo e(asset('assets/js/custom-ajax.js')); ?>?v=<?php echo e(time()); ?>"></script>
<script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom/custom.js')); ?>?v=<?php echo e(time()); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom/tagify.js')); ?>"></script>



<script src="<?php echo e(asset('assets/js/choices.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/custom/custome-dropdown.js')); ?>"></script>


<?php echo $__env->yieldPushContent('js'); ?>

<?php echo $__env->yieldPushContent('modal-view'); ?>


<?php if(Session::has('message')): ?>
    <script>
        toastr.success( "<?php echo e(Session::get('message')); ?>");
    </script>
<?php endif; ?>
<?php if(Session::has('warning')): ?>
    <script>
        toastr.warning( "<?php echo e(Session::get('warning')); ?>");
    </script>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <script>
        toastr.error( "<?php echo e(Session::get('error')); ?>");
    </script>
<?php endif; ?>
<?php if($errors->any()): ?>
<script>
    toastr.warning('Error some occurs!');
</script>
<?php endif; ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/business/partials/script.blade.php ENDPATH**/ ?>