

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Addons List')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Addons List')); ?></h4>
                        <a type="button" href="#addon-modal" data-bs-toggle="modal" class="add-order-btn rounded-2 active" class="btn btn-primary">
                            <i class="fas fa-plus-circle me-1"></i> <?php echo e(__('Install / Update Addon')); ?>

                        </a>
                    </div>
                </div>

                <div class="responsive-table mt-3">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th><?php echo e(__('SL')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Version')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                            </tr>
                        </thead>
                        <tbody id="addon-data" class="searchResults">
                            <?php echo $__env->make('admin.addons.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<div class="modal modal-md fade" id="addon-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Install / Update Addon')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.addons.store')); ?>" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload">
                    <?php echo csrf_field(); ?>

                    <div>
                        <label><?php echo e(__('Enter purchase code')); ?></label>
                        <input type="text" name="purchase_code" class="form-control" placeholder="<?php echo e(__('Enter addon purchase code')); ?>" required>
                    </div>

                    <div class="mt-3">
                        <label><?php echo e(__('Upload addons zip file')); ?></label>
                        <input type="file" name="file" class="form-control" accept="file/*" required>
                    </div>

                    <div class="col-lg-12">
                        <div class="button-group text-center mt-5">
                            <button type="reset" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></button>
                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Install')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/addons/index.blade.php ENDPATH**/ ?>