

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Business List')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="erp-table-section">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-bodys">
                <div class="table-header p-16">
                    <h4><?php echo e(__('Business List')); ?></h4>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business-read')): ?>
                     <a type="button" href="<?php echo e(route('admin.business.create')); ?>" class="add-order-btn rounded-2 <?php echo e(Route::is('admin.business.create') ? 'active' : ''); ?>" class="btn btn-primary" ><i class="fas fa-plus-circle me-1"></i><?php echo e(__('Add new Business')); ?></a>
                    <?php endif; ?>
                </div>
                <div class="table-top-form p-16-0">
                    <form action="<?php echo e(route('admin.business.filter')); ?>" method="post" class="filter-form" table="#business-data">
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
                                <input class="form-control searchInput" type="text" name="search"
                                    placeholder="<?php echo e(__('Search...')); ?>" value="<?php echo e(request('search')); ?>">
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
                        <th>
                            <div class="d-flex align-items-center gap-1">
                                <label class="table-custom-checkbox">
                                    <input type="checkbox" class="table-hidden-checkbox selectAllCheckbox">
                                    <span class="table-custom-checkmark custom-checkmark"></span>
                                </label>
                                <i class="fal fa-trash-alt delete-selected"></i>
                            </div>
                        </th>
                        <th> <?php echo e(__('SL')); ?>. </th>
                        <th> <?php echo e(__('Business Name')); ?> </th>
                        <th> <?php echo e(__('Business Category')); ?> </th>
                        <th> <?php echo e(__('Phone')); ?> </th>
                        <th> <?php echo e(__('Email')); ?> </th>
                        <th> <?php echo e(__('Package')); ?> </th>
                        <th> <?php echo e(__('Last Enroll')); ?> </th>
                        <th> <?php echo e(__('Expired Date')); ?> </th>
                        <th> <?php echo e(__('Status')); ?> </th>
                        <th> <?php echo e(__('Action')); ?> </th>
                    </tr>
                    </thead>
                    <tbody id="business-data" class="searchResults">
                        <?php echo $__env->make('admin.business.datas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                <?php echo e($businesses->links('vendor.pagination.bootstrap-5')); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('admin.components.multi-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <div class="modal modal-md fade" id="business-upgrade-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content b-radious-24">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Upgrade Plan')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload upgradePlan">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>

                        <div class="mt-3">
                            <label><?php echo e(__('Business Name')); ?></label>
                            <input class="form-control" id="business_name" readonly>
                            <input name="business_id" id="business_id" type="hidden">
                        </div>

                        <div class="mt-3">
                            <label for="plan_id"><?php echo e(__('Select A Plan')); ?></label>
                            <div class="gpt-up-down-arrow position-relative">
                            <select name="plan_id" id="plan_id" class="form-control">
                                <option value=""><?php echo e(__('Select One')); ?></option>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option data-price="<?php echo e($plan->offerPrice ?? $plan->subscriptionPrice); ?>" value="<?php echo e($plan->id); ?>"><?php echo e($plan->subscriptionName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span></span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label><?php echo e(__('Price')); ?></label>
                            <input class="form-control plan-price" name="price" type="number" step="any" placeholder="<?php echo e(__('Enter plan price or select a plan')); ?>">
                        </div>

                        <div class="mt-3">
                            <label for="gateway_id"><?php echo e(__('Payment Gateways')); ?></label>
                            <div class="gpt-up-down-arrow position-relative">
                            <select name="gateway_id" id="gateway_id" class="form-control">
                                <option value=""><?php echo e(__('Select A payment gateway')); ?></option>
                                <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($gateway->id); ?>"><?php echo e($gateway->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span></span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label><?php echo e(__('Notes')); ?></label>
                            <textarea name="notes" id="notes" class="form-control" placeholder="<?php echo e(__('Enter notes')); ?>"><?php echo e('Plan subscribed by '. auth()->user()->name); ?></textarea>
                        </div>

                        <div class="col-lg-12">
                            <div class="button-group text-center mt-5">
                                <button type="reset" class="theme-btn border-btn m-2"><?php echo e(__('Reset')); ?></button>
                                <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="business-view-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"><?php echo e(__('Business View')); ?> (<span class="business_name"></span>)</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="personal-info">
                        <div class="row mt-2">
                            <div class="col-12 text-center">
                                <img width="100px" width="100px" class="rounded-circle border-2 shadow" src="" id="image" alt="">
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col-md-4"><p><?php echo e(__('Business Name')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p class="business_name"></p></div>
                        </div>

                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Business Category')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="category"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Phone')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="phone"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Address')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="address"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Package')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="package"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Upgrade Date')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="last_enroll"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Expired Date')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="expired_date"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p><?php echo e(__('Created date')); ?></p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="created_date"></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/custom/custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/business/index.blade.php ENDPATH**/ ?>