

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Add New Staff')); ?></h4>
                        <div>
                            <a href="<?php echo e(route('admin.users.index')); ?>" class="theme-btn print-btn text-light active">
                                <i class="fas fa-list me-1"></i>
                                <?php echo e(__('View List')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="tab-content order-summary-tab p-3">
                        <div class="tab-pane fade show active" id="add-new-user">
                            <div class="order-form-section">
                                <form action="<?php echo e(route('admin.users.store')); ?>" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload">
                                    <?php echo csrf_field(); ?>

                                    <div class="add-suplier-modal-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 mt-3">
                                                <label><?php echo e(__('Full Name')); ?></label>
                                                <input type="text" name="name" required class="form-control" placeholder="<?php echo e(__('Enter Name')); ?>" >
                                            </div>

                                            <div class="col-lg-6 mt-3">
                                                <label><?php echo e(__('Email')); ?></label>
                                                <input type="text" name="email" required class="form-control" placeholder="<?php echo e(__('Enter Email Address')); ?>" >
                                            </div>

                                            <div class="col-lg-6 mt-2">
                                                <label><?php echo e(__('Phone')); ?></label>
                                                <input type="text" name="phone" class="form-control" placeholder="<?php echo e(__('Enter Phone Number')); ?>" >
                                            </div>

                                            <div class="col-lg-6 mt-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <label class="img-label"><?php echo e(__('Image')); ?></label>
                                                        <input type="file" accept="image/*" name="image" class="form-control file-input-change" data-id="image">
                                                    </div>
                                                    <div class="col-2 align-self-center mt-3">
                                                        <img src="<?php echo e(asset('assets/images/icons/upload.png')); ?>" id="image" class="table-img">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mt-2">
                                                <label><?php echo e(__('Role')); ?></label>
                                                <div class="gpt-up-down-arrow position-relative">
                                                    <select name="role" required class="select-2 form-control w-100" >
                                                        <option value=""> <?php echo e(__('Select a role')); ?></option>
                                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($role->name); ?>" <?php if(request('users') == $role->name): echo 'selected'; endif; ?>> <?php echo e(ucfirst($role->name)); ?> </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mt-2">
                                                <label><?php echo e(__('Password')); ?></label>
                                                <input type="password" name="password" required class="form-control" placeholder="<?php echo e(__('Enter Password')); ?>">
                                            </div>

                                            <div class="col-lg-6 mt-2">
                                                <label><?php echo e(__('Confirm password')); ?></label>
                                                <input type="password" name="password_confirmation" required class="form-control" placeholder="<?php echo e(__('Enter Confirm password')); ?>">
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="button-group text-center mt-5">
                                                    <a href="" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></a>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/users/create.blade.php ENDPATH**/ ?>