

<?php $__env->startSection('title'); ?>
    <?php echo e(__('General Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('General Settings')); ?></h4>
                    </div>
                    <div class="order-form-section p-16">
                        <form action="<?php echo e(route('admin.settings.update', $general->id)); ?>" method="post"
                            enctype="multipart/form-data" class="ajaxform_instant_reload">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="add-suplier-modal-wrapper d-block">
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <label><?php echo e(__('Title')); ?></label>
                                        <input type="text" name="title" value="<?php echo e($general->value['title'] ?? ''); ?>"
                                            required class="form-control" placeholder="<?php echo e(__('Enter Title')); ?>">
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <label><?php echo e(__('Copy Right')); ?></label>
                                        <input type="text" name="copy_right"
                                            value="<?php echo e($general->value['copy_right'] ?? ''); ?>" required class="form-control"
                                            placeholder="<?php echo e(__('Enter Title')); ?>">
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                        <label><?php echo e(__('Dynamic Text')); ?></label>
                                        <input type="text" name="admin_footer_text"
                                            value="<?php echo e($general->value['admin_footer_text'] ?? ''); ?>" required class="form-control"
                                            placeholder="<?php echo e(__('Enter Text')); ?>">
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                        <label><?php echo e(__('Dynamic Link Text')); ?></label>
                                        <input type="text" name="admin_footer_link_text"
                                            value="<?php echo e($general->value['admin_footer_link_text'] ?? ''); ?>" required class="form-control"
                                            placeholder="<?php echo e(__('Enter Text')); ?>">
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                        <label><?php echo e(__('Dynamic Link')); ?></label>
                                        <input type="text" name="admin_footer_link"
                                            value="<?php echo e($general->value['admin_footer_link'] ?? ''); ?>" required class="form-control"
                                            placeholder="<?php echo e(__('Enter Link')); ?>">
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                        <label><?php echo e(__('App Link')); ?></label>
                                        <input type="url" name="app_link" value="<?php echo e($general->value['app_link'] ?? ''); ?>" class="form-control" placeholder="<?php echo e(__('Enter Link')); ?>">
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Main Header Logo')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['logo'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="logo">
                                                </div>
                                                <input type="file" name="logo" class="d-none" accept="image/*"
                                                    onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Common Header Logo')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['common_header_logo'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="common_header_logo">
                                                </div>
                                                <input type="file" name="common_header_logo" class="d-none"
                                                    accept="image/*"
                                                    onchange="document.getElementById('common_header_logo').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Footer Logo')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['footer_logo'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="footer_logo">
                                                </div>
                                                <input type="file" name="footer_logo" class="d-none"
                                                    accept="image/*"
                                                    onchange="document.getElementById('footer_logo').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Admin Logo')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['admin_logo'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="admin_logo">
                                                </div>
                                                <input type="file" name="admin_logo" class="d-none"
                                                    accept="image/*"
                                                    onchange="document.getElementById('admin_logo').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Favicon')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['favicon'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="favicon">
                                                </div>
                                                <input type="file" name="favicon" class="d-none" accept="image/*"
                                                    onchange="document.getElementById('favicon').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Login Page Logo')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['login_page_logo'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="login_page_logo">
                                                </div>
                                                <input type="file" name="login_page_logo" class="d-none" accept="image/*"
                                                    onchange="document.getElementById('login_page_logo').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 settings-image-upload">
                                        <label class="title"><?php echo e(__('Login Page Image')); ?></label>
                                        <div class="upload-img-v2">
                                            <label class="upload-v4 settings-upload-v4">
                                                <div class="img-wrp">
                                                    <img src="<?php echo e(asset($general->value['login_page_image'] ?? 'assets/images/icons/upload-icon.svg')); ?>"
                                                        alt="user" id="login_page_image">
                                                </div>
                                                <input type="file" name="login_page_image" class="d-none" accept="image/*"
                                                    onchange="document.getElementById('login_page_image').src = window.URL.createObjectURL(this.files[0])"
                                                    class="form-control">
                                            </label>
                                        </div>
                                    </div>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings-update')): ?>
                                        <div class="col-lg-12">
                                            <div class="text-center mt-5">
                                                <button type="submit"
                                                    class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/settings/general.blade.php ENDPATH**/ ?>