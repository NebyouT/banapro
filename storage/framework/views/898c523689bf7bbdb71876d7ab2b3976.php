

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Roles')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Roles List')); ?></h4>
                    </div>
                    <div class="row mb-4 p-16">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles-create')): ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 mt-3">
                            <div class="cards shadow border-0 h-100">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="d-flex align-items-end justify-content-center h-100">
                                            <img src="<?php echo e(asset('assets/images/icons/user-roles.svg')); ?>" class="img-fluid mt-2" alt="Image" width="85">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="card-body text-sm-end text-center ps-sm-0 ms-2">
                                            <a href="<?php echo e(route('admin.roles.create')); ?>">
                                                <span class="btn btn-warning btn-custom-warning fw-bold text-uppercase btn-sm mb-1"><?php echo e(__("Add New Role")); ?></span>
                                            </a>
                                            <small class="mb-0 d-block"><?php echo e(__("Add role, if it does not exist")); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 mt-3">
                                <div class="cards shadow border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <span><?php echo e(__("Total :count users", ['count' => $role->users_count])); ?></span>
                                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                                <?php $__currentLoopData = $role->users->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="avatar avatar-sm pull-up">
                                                        <img class="rounded-circle" src="<?php echo e(asset($user->image)); ?>" alt="<?php echo e(ucfirst($user->name)); ?>">
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                            <div class="role-heading">
                                                <h4 class="fw-bolder"><?php echo e(ucfirst($role->name)); ?> <i class="<?php echo e(request('id') == $role->id ? 'fas fa-bell text-red' : ''); ?>"></i></h4>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles-update')): ?>
                                                <a class="primary" href="<?php echo e(route('admin.roles.edit', $role->id)); ?>">
                                                    <small class="fw-bolder"><?php echo e(__("Edit Role")); ?></small>
                                                </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/roles/index.blade.php ENDPATH**/ ?>