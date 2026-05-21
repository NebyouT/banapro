<?php $__env->startSection('title'); ?>
    <?php echo e(__('Add Subscription Plan')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card border-0">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Add new Package')); ?></h4>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-read')): ?>
                            <a href="<?php echo e(route('admin.plans.index')); ?>" class="add-order-btn rounded-2 <?php echo e(Route::is('admin.users.create') ? 'active' : ''); ?>"><i class="far fa-list me-1" aria-hidden="true"></i> <?php echo e(__('Package List')); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="order-form-section  p-16">
                        <form action="<?php echo e(route('admin.plans.store')); ?>" method="POST" class="ajaxform_instant_reload">
                            <?php echo csrf_field(); ?>
                            <div class="add-suplier-modal-wrapper d-block">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Package Name')); ?></label>
                                        <input type="text" name="subscriptionName" required class="form-control" placeholder="<?php echo e(__('Enter Package Name')); ?>">
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Duration in Days')); ?></label>
                                        <input type="number" step="any" name="duration" required class="form-control" placeholder="<?php echo e(__('Enter number')); ?>">
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Offer Price')); ?></label>
                                        <input type="number" step="any" name="offerPrice" class="form-control price" placeholder="<?php echo e(__('Enter Plan Price')); ?>">
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Subscription Price')); ?></label>
                                        <input type="number" step="any" name="subscriptionPrice" required class="form-control discount" placeholder="<?php echo e(__('Enter Subscription Price')); ?>">
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <div class="col-lg-12 my-2">
                                            <label><?php echo e(__('Status')); ?></label>
                                            <div class="form-control d-flex justify-content-between align-items-center radio-switcher">
                                                <p class="dynamic-text">Active</p>
                                                <label class="switch m-0">
                                                    <input type="checkbox" name="status" class="change-text" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if(moduleCheck('MultiBranchAddon')): ?>
                                    <div class="col-lg-6 mb-2">
                                        <div class="col-lg-12 my-2">
                                            <label><?php echo e(__('Multibranch Allowed')); ?></label>
                                            <div class="form-control d-flex justify-content-between align-items-center radio-switcher">
                                                <p class="dynamic-text">Active</p>
                                                <label class="switch m-0">
                                                    <input type="checkbox" name="allow_multibranch" class="change-text" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if(moduleCheck('CustomDomainAddon')): ?>
                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Custom Domain Limit')); ?></label>
                                        <input type="number" min="0" name="addon_domain_limit" class="form-control" placeholder="<?php echo e(__('Enter Custom domain limit')); ?>">
                                    </div>

                                    <div class="col-lg-6 mb-2">
                                        <label><?php echo e(__('Subdomain Limit')); ?></label>
                                        <input type="number" min="0" name="subdomain_limit" class="form-control" placeholder="<?php echo e(__('Enter Subdomain limit')); ?>">
                                    </div>
                                    <?php endif; ?>

                                    <div class="col-lg-6 mt-2">
                                        <label><?php echo e(__('Add New Features')); ?></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control add-feature border-0 bg-transparent" placeholder="<?php echo e(__('Enter features')); ?>">
                                            <button class="feature-btn" id="feature-btn"><?php echo e(__('Save')); ?></button>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row feature-list">
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="button-group text-center mt-5">
                                            <button type="reset" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></button>
                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/custom/custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/plans/create.blade.php ENDPATH**/ ?>