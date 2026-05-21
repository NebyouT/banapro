

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Notifications List')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys ">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Notifications List')); ?></h4>
                    </div>
                    <div class="table-top-form p-16-0">
                    </div>
                </div>

                <div class="responsibe-table m-0">
                    <table class="table" id="erp-table">
                        <thead>
                            <tr>
                                <th><?php echo app('translator')->get('SL.'); ?></th>
                                <th><?php echo app('translator')->get('Message'); ?></th>
                                <th><?php echo app('translator')->get('Created At'); ?></th>
                                <th><?php echo app('translator')->get('Read At'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="notifications-data" class="searchResults">
                            <?php echo $__env->make('admin.notifications.datas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('admin.components.multi-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/notifications/index.blade.php ENDPATH**/ ?>