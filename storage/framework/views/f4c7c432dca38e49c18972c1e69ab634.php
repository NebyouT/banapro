<?php $__env->startSection('title'); ?>
    <?php echo e(__('Domains')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Domain List')); ?></h4>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'domains.create')): ?>
                        <a href="#create-domain" class="add-order-btn rounded-2 active" data-bs-toggle="modal"> <i class="fas fa-plus-circle"></i> <?php echo e(__('Add New Domain')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="table-top-form p-16">
                        <form action="<?php echo e(route('business.domains.filter')); ?>" method="post" class="filter-form" table="#domains-data">
                            <?php echo csrf_field(); ?>

                            <div class="table-top-left d-flex gap-3">
                                <div class="gpt-up-down-arrow position-relative d-print-none">
                                    <select name="per_page" class="form-control">
                                        <option value="10"><?php echo e(__('Show- 10')); ?></option>
                                        <option value="25"><?php echo e(__('Show- 25')); ?></option>
                                        <option value="50"><?php echo e(__('Show- 50')); ?></option>
                                        <option value="100"><?php echo e(__('Show- 100')); ?></option>
                                    </select>
                                    <span></span>
                                </div>

                                <div class="table-search position-relative">
                                        <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('Search...')); ?>">
                                        <span class="position-absolute">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.582 14.582L18.332 18.332" stroke="#4D4D4D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.668 9.16797C16.668 5.02584 13.3101 1.66797 9.16797 1.66797C5.02584 1.66797 1.66797 5.02584 1.66797 9.16797C1.66797 13.3101 5.02584 16.668 9.16797 16.668C13.3101 16.668 16.668 13.3101 16.668 9.16797Z" stroke="#4D4D4D" stroke-width="1.25" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="delete-item delete-show d-none delete-popup">
                        <div class="delete-item-show">
                            <p class="fw-bold"><span class="selected-count"></span> <?php echo e(__('row selected')); ?></p>
                            <button data-bs-toggle="modal" class="trigger-modal" data-bs-target="#multi-delete-modal"
                                data-url="<?php echo e(route('business.domains.delete-all')); ?>"><?php echo e(__('Delete')); ?></button>
                        </div>
                    </div>


                    <div class="responsive-table">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'domains.delete')): ?>
                                    <th class="w-60 d-print-none">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="checkbox" class="select-all-delete multi-delete">
                                        </div>
                                    </th>
                                    <?php endif; ?>
                                    <th class="min-w-49 "><?php echo e(__('SL')); ?>.</th>
                                    <th><?php echo e(__('Domain Name')); ?> </th>
                                    <th><?php echo e(__('Is Verified')); ?></th>
                                    <th><?php echo e(__('Has SSL')); ?></th>
                                    <th><?php echo e(__('Added on')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th class="print-d-none"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody id="domains-data">
                                <?php echo $__env->make('customdomainaddon::business.datas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <?php echo e($domains->links('vendor.pagination.bootstrap-5')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('customdomainaddon::business.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('customdomainaddon::component.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('business::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/Modules/CustomDomainAddon/resources/views/business/index.blade.php ENDPATH**/ ?>