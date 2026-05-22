<div class="modal fade" id="multi-delete-modal" tabindex="-1" aria-labelledby="multi-delete-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="text-end">
                <button type="button" class="btn-close m-3 mb-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="delete-modal">
                    <h5><?php echo e(__('Are You Sure?')); ?></h5>
                    <p><?php echo e(__("You want to delete everything!")); ?></p>
                </div>
                <div class="multiple-button-group">
                    <button class="btn reset-btn" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <form id="dynamic-delete-form" method="POST" class="ajaxform_instant_reload">
                        <?php echo csrf_field(); ?>
                        <button class="btn theme-btn submit-btn create-all-delete" type="submit"><?php echo e(__('Yes, Delete It!')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/banaeaou/pro.banaeats.com/Modules/CustomDomainAddon/resources/views/component/delete-modal.blade.php ENDPATH**/ ?>