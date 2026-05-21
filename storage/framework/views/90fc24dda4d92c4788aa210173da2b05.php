

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Edit Currency')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="order-form-section">
        <div class="erp-table-section">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-bodys">
                        <div class="table-header p-16">
                            <h4><?php echo e(__('Edit Currency')); ?></h4>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies-read')): ?>
                                <a href="<?php echo e(route('admin.currencies.index')); ?>"
                                    class="add-order-btn rounded-2 <?php echo e(Route::is('admin.currencies.create') ? 'active' : ''); ?>"><i
                                        class="far fa-list me-1" aria-hidden="true"></i> <?php echo e(__('View List')); ?></a>
                            <?php endif; ?>
                        </div>

                        <form action="<?php echo e(route('admin.currencies.update', $currency->id)); ?>" method="post"
                            enctype="multipart/form-data" class="ajaxform_instant_reload">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <div class="row p-16">
                                <div class="col-lg-6 ">
                                    <label><?php echo e(__('Name')); ?></label>
                                    <input type="text" name="name" value="<?php echo e($currency->name); ?>" required
                                        class="form-control" placeholder="<?php echo e(__('Enter Name')); ?>">
                                </div>
                                <div class="col-lg-6 ">
                                    <label><?php echo e(__('Code')); ?></label>
                                    <input type="text" name="code" value="<?php echo e($currency->code); ?>" required
                                        class="form-control" placeholder="<?php echo e(__('Enter Code')); ?>">
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label><?php echo e(__('Rate')); ?></label>
                                    <input type="number" step="any" name="rate" value="<?php echo e($currency->rate); ?>" required class="form-control"
                                           placeholder="<?php echo e(__('Enter currency rate')); ?>">
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label><?php echo e(__('Symbol')); ?></label>
                                    <input type="text" name="symbol" value="<?php echo e($currency->symbol); ?>"
                                        class="form-control" placeholder="<?php echo e(__('Enter Symbol')); ?>">
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label><?php echo e(__('Position')); ?></label>
                                    <div class="gpt-up-down-arrow position-relative">
                                    <select name="position" class="form-control table-select w-100">
                                        <option value=""><?php echo e(__('Select a position')); ?></option>
                                        <option value="left" <?php if('left' == $currency->position): echo 'selected'; endif; ?>><?php echo e(__('left')); ?></option>
                                        <option value="right" <?php if('right' == $currency->position): echo 'selected'; endif; ?>><?php echo e(__('right')); ?></option>
                                    </select>
                                    <span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-2">
                                    <label><?php echo e(__('Country')); ?></label>
                                    <div class="gpt-up-down-arrow position-relative">
                                    <select name="country_name" class="form-control table-select w-100">
                                        <option value=""><?php echo e(__('Select a Country')); ?></option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country['name']); ?>" <?php if($country['name'] == $currency->country_name ?? ''): echo 'selected'; endif; ?>>
                                                <?php echo e($country['name']); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <span></span>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-2">
                                    <label><?php echo e(__('Status')); ?></label>
                                    <div class="gpt-up-down-arrow position-relative">
                                    <select name="status" required class="form-control table-select w-100">
                                        <option value="1" <?php if($currency->status == 1): echo 'selected'; endif; ?>><?php echo e(__('Active')); ?></option>
                                        <option value="0" <?php if($currency->status == 0): echo 'selected'; endif; ?>><?php echo e(__('Inactive')); ?></option>
                                    </select>
                                    <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="button-group text-center mt-5">
                                        <button type="reset"
                                            class="theme-btn border-btn m-2"><?php echo e(__('Reset')); ?></button>
                                        <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/currencies/edit.blade.php ENDPATH**/ ?>