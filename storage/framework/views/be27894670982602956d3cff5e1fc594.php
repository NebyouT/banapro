

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys ">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Staff List')); ?></h4>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-create')): ?>
                            <a href="<?php echo e(route('admin.users.create')); ?>" class="theme-btn print-btn text-light">
                                <i class="far fa-plus" aria-hidden="true"></i>
                                <?php echo e(__('Add New Staff')); ?>

                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="table-top-form p-16-0">
                        <form action="<?php echo e(route('admin.users.filter')); ?>" method="post" class="filter-form"
                            table="#users-data">
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
                                    <input class="form-control" type="text" name="search"
                                        placeholder="<?php echo e(__('Search...')); ?>" value="<?php echo e(request('search')); ?>">
                                    <span class="position-absolute">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.582 14.582L18.332 18.332" stroke="#4D4D4D" stroke-width="1.25"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M16.668 9.16797C16.668 5.02584 13.3101 1.66797 9.16797 1.66797C5.02584 1.66797 1.66797 5.02584 1.66797 9.16797C1.66797 13.3101 5.02584 16.668 9.16797 16.668C13.3101 16.668 16.668 13.3101 16.668 9.16797Z"
                                                stroke="#4D4D4D" stroke-width="1.25" stroke-linejoin="round" />
                                        </svg>

                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="responsive-table m-0">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="d-flex align-items-center gap-1">
                                            <label class="table-custom-checkbox">
                                                <input type="checkbox" class="table-hidden-checkbox selectAllCheckbox ">
                                                <span class="table-custom-checkmark custom-checkmark"></span>
                                            </label>
                                            <i class="fal fa-trash-alt delete-selected"></i>
                                        </div>
                                    </th>
                                    <th><?php echo e(__('SL')); ?>.</th>
                                    <th class="text-start"><?php echo e(__('Name')); ?></th>
                                    <th class="text-start"><?php echo e(__('Phone')); ?></th>
                                    <th class="text-start"><?php echo e(__('User Email')); ?></th>
                                    <th class="text-start"><?php echo e(__('User Role')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody id="users-data" class="searchResults">
                                <?php echo $__env->make('admin.users.datas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <?php echo e($users->links('vendor.pagination.bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade p-0" id="User-view">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5"><?php echo e(__('View')); ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body order-form-section">
                    <div class="costing-list">
                        <ul>
                            <li><span><?php echo e(__('Name')); ?></span> <span>:</span> <span id="staff_view_name"></span></li>
                            <li><span><?php echo e(__('Phone')); ?></span> <span>:</span> <span id="staff_view_phone_number"></span>
                            </li>

                            <li><span><?php echo e(__('Email')); ?></span> <span>:</span> <span id="staff_view_email_number"></span>
                            </li>

                            <li><span><?php echo e(__('Role')); ?></span> <span>:</span> <span id="staff_view_role"></span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('admin.components.multi-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/users/index.blade.php ENDPATH**/ ?>