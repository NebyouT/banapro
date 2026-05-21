<div class="modal fade" id="multi-delete-modal" tabindex="-1" aria-labelledby="multi-delete-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="text-end">
                <button type="button" class="btn-close m-3 mb-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="delete-modal">
                    <h5><?php echo e(__('Are You Sure?')); ?></h5>
                    <p><?php echo e(__("You won't be able to revert this!")); ?></p>
                </div>
                <div class="multiple-button-group">
                    <button class="btn reset-btn" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button class="btn theme-btn multi-delete-btn"><?php echo e(__('Yes, Delete It!')); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/components/multi-delete-modal.blade.php ENDPATH**/ ?>