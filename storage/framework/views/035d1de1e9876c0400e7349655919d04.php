

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Subscription Plan')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="erp-table-section">
    <div class="container-fluid">
        <div class="card">
            <div class="card-bodys ">
                <div class="table-header p-16">
                    <h4><?php echo e(__('Plan List')); ?></h4>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-create')): ?>
                        <a type="button" href="<?php echo e(route('admin.plans.create')); ?>" class="add-order-btn rounded-2 <?php echo e(Route::is('admin.plans.create') ? 'active' : ''); ?>" class="btn btn-primary" ><i class="fas fa-plus-circle me-1"></i><?php echo e(__('Create Plans')); ?></a>
                    <?php endif; ?>
                </div>
                <div class="table-top-form p-16-0">
                    <form action="<?php echo e(route('admin.plans.filter')); ?>" method="post" class="filter-form" table="#plans-data">
                        <?php echo csrf_field(); ?>

                        <div class="table-top-left d-flex gap-3 margin-l-16">
                            <div class="gpt-up-down-arrow position-relative">
                                <select name="per_page" class="form-control">
                                    <option value="10"><?php echo e(__('Show- 10')); ?></option>
                                    <option value="25"><?php echo e(__('Show- 25')); ?></option>
                                    <option value="50"><?php echo e(__('Show- 50')); ?></option>
                                    <option value="100"><?php echo e(__('Show- 100')); ?></option>
                                </select>
                                <span></span>
                            </div>

                            <div class="table-search position-relative">
                                <input class="form-control searchInput" type="text" name="search" placeholder="<?php echo e(__('Search...')); ?>" value="<?php echo e(request('search')); ?>">
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

            </div>

            <div class="responsive-table m-0">
                <table class="table" id="datatable">
                    <thead>
                    <tr>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-delete')): ?>
                            <th>
                                <div class="d-flex align-items-center gap-3">
                                    <label class="table-custom-checkbox">
                                        <input type="checkbox" class="table-hidden-checkbox selectAllCheckbox">
                                        <span class="table-custom-checkmark custom-checkmark"></span>
                                    </label>
                                    <i class="fal fa-trash-alt delete-selected"></i>
                                </div>
                            </th>
                        <?php endif; ?>
                        <th><?php echo e(__('SL')); ?>.</th>
                        <th class="text-start"><?php echo e(__('Subscription Name')); ?></th>
                        <th><?php echo e(__('Duration')); ?></th>
                        <th><?php echo e(__('Offer Price')); ?></th>
                        <th><?php echo e(__('Subscription Price')); ?></th>
                        <?php if(moduleCheck('MultiBranchAddon')): ?>
                        <th><?php echo e(__('Allow Multibranch')); ?></th>
                        <?php endif; ?>
                        <th><?php echo e(__('Status')); ?></th>
                        <th><?php echo e(__('Action')); ?></th>
                    </tr>
                    </thead>
                    <tbody id="plans-data" class="searchResults">
                        <?php echo $__env->make('admin.plans.datas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                <?php echo e($plans->links('vendor.pagination.bootstrap-5')); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('admin.components.multi-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/custom/custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/plans/index.blade.php ENDPATH**/ ?>