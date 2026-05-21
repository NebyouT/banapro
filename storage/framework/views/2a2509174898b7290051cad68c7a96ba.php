

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Banner')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Advertising List')); ?></h4>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banners-create')): ?>
                            <a type="button" href="#create-banner-modal" data-bs-toggle="modal"
                                class="add-order-btn rounded-2 active" class="btn btn-primary"><i
                                    class="fas fa-plus-circle me-1"></i> <?php echo e(__('Create Banner')); ?></a>
                        <?php endif; ?>
                    </div>

                    <div class="table-top-form p-16-0">
                        <form action="<?php echo e(route('admin.banners.filter')); ?>" method="post" class="filter-form mb-0" table="#banner-data">
                            <?php echo csrf_field(); ?>

                            <div class="table-top-left d-flex gap-3 margin-l-16">
                                <div class="gpt-up-down-arrow position-relative">
                                    <select name="per_page" class="form-control">
                                        <option value="1"><?php echo e(__('Show- 10')); ?></option>
                                        <option value="2"><?php echo e(__('Show- 25')); ?></option>
                                        <option value="3"><?php echo e(__('Show- 50')); ?></option>
                                        <option value="100"><?php echo e(__('Show- 100')); ?></option>
                                    </select>
                                    <span></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="responsive-table m-0">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banners-delete')): ?>
                                    <th>
                                        <div class="d-flex align-items-center gap-1">

                                            <label class="table-custom-checkbox">
                                                <input type="checkbox" class="table-hidden-checkbox selectAllCheckbox">
                                                <span class="table-custom-checkmark custom-checkmark"></span>
                                            </label>
                                            <i class="fal fa-trash-alt delete-selected"></i>
                                        </div>
                                    </th>
                                <?php endif; ?>


                                <th><?php echo e(__('SL')); ?></th>
                                <th><?php echo e(__('Image')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody id="banner-data">
                            <?php echo $__env->make('admin.banners.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <?php echo e($banners->links('vendor.pagination.bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('admin.components.multi-delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>


<div class="modal modal-md fade" id="create-banner-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create Advertising')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.banners.store')); ?>" method="post" enctype="multipart/form-data"
                    class="ajaxform_instant_reload ">
                    <?php echo csrf_field(); ?>

                    <div class="mt-3 position-relative">
                        <label class="upload-img-label"><?php echo e(__('Image')); ?></label>
                        <div class="upload-img-v2">
                            <label class="upload-v4 start-0">
                                <div class="img-wrp">
                                    <img src="<?php echo e(asset('assets/images/icons/upload-icon.svg')); ?>" alt="user"
                                        id="profile-img">
                                </div>
                                <input type="file" name="imageUrl" class="d-none"
                                    onchange="document.getElementById('profile-img').src = window.URL.createObjectURL(this.files[0])"
                                    accept="image/*">
                            </label>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label><?php echo e(__('Status')); ?></label>
                        <div class="form-control d-flex justify-content-between align-items-center radio-switcher">
                            <p class="dynamic-text mb-0"><?php echo e(__('Active')); ?></p>
                            <label class="switch m-0 top-0">
                                <input type="checkbox" name="status" class="change-text" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="button-group text-center mt-5">
                            <button type="reset" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></button>
                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-md fade" id="edit-banner-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Advertising')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data"
                    class="ajaxform_instant_reload edit-imageUrl-form mb-0">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="mt-3">
                        <label></label>
                        <div class="upload-img-v2">
                            <label class="upload-v4">
                                <div class="img-wrp">
                                    <img src="<?php echo e(asset('assets/images/icons/upload-icon.svg')); ?>" alt="user"
                                        id="edit-imageUrl">
                                </div>
                                <input type="file" name="imageUrl" class="d-none"
                                    onchange="document.getElementById('edit-imageUrl').src = window.URL.createObjectURL(this.files[0])"
                                    accept="image/*">
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label><?php echo e(__('Status')); ?></label>
                        <div class="form-control d-flex justify-content-between align-items-center radio-switcher">
                            <p class="dynamic-text"><?php echo e(__('Active')); ?></p>
                            <label class="switch m-0 top-0">
                                <input type="checkbox" name="status" class="change-text edit-status" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="button-group text-center mt-5">
                            <button type="reset" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></button>
                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/banners/index.blade.php ENDPATH**/ ?>