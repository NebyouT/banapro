

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Gateway Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="erp-table-section system-settings">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-bodys mb-4">
                    <div class="tab-content order-summary-tab mt-0">
                        <div class="tab-pane fade active show" id="add-new-petty" role="tabpanel">

                            <div class="table-header">
                                <div class="card-bodys">
                                    <div class="table-header border-0 p-16">
                                        <h4><?php echo e(__('Payment Gateway Settings')); ?></h4>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="order-form-section p-16">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 mb-4">
                                                <ul class="nav nav-pills flex-column flex-column shadow w-280 p-2">
                                                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item">
                                                        <a href="#<?php echo e(str_replace(' ', '-', $gateway->name)); ?>" id="<?php echo e(str_replace(' ', '-', $gateway->name)); ?>-tab4"
                                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                                'add-report-btn nav-link',
                                                                'active' => $loop->first ? true : false,
                                                            ]); ?>"
                                                            data-bs-toggle="tab">
                                                            <?php echo e($gateway->name); ?>

                                                            <?php if(in_array($gateway->name, ['Bkash', 'Cinetpay'])): ?>
                                                            <sup class="badge bg-warning">Add-On</sup>
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8">
                                                <div class="cards border-0 shadow">
                                                    <div class="card-body">
                                                        <div class="tab-content no-padding">
                                                            <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                                    'tab-pane fade',
                                                                    'show active' => $loop->first ? true : false,
                                                                ]); ?>"
                                                                    id="<?php echo e(str_replace(' ', '-', $gateway->name)); ?>">
                                                                    <form action="<?php echo e(route('admin.gateways.update', $gateway->id)); ?>" method="post" class="ajaxform">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('put'); ?>

                                                                        <div class="row">
                                                                            <div class="col-11 align-self-center mb-2">
                                                                                <label class="img-label"><?php echo e(__('GATEWAY IMAGE')); ?></label>
                                                                                <input type="file" name="image" class="form-control">
                                                                            </div>

                                                                            <div class="col-1 align-self-center mb-2">
                                                                                <img src="<?php echo e(asset($gateway->image)); ?>" class="img-fluid" alt="">
                                                                            </div>

                                                                            <div class="col-12 mb-2">
                                                                                <label><?php echo e(__('GATEWAY NAME')); ?></label>
                                                                                <input type="text" name="name" value="<?php echo e($gateway->name); ?>" required class="form-control">
                                                                            </div>

                                                                            <div class="col-12 mb-2">
                                                                                <label><?php echo e(__('Gateway Charge')); ?></label>
                                                                                <input type="number" step="any" name="charge" value="<?php echo e($gateway->charge); ?>" value="<?php echo e($gateway->charge); ?>" class="form-control">
                                                                            </div>

                                                                            <div class="col-12 mb-2">
                                                                                <label><?php echo e(__('Gateway Currency')); ?></label>
                                                                                <div class="gpt-up-down-arrow position-relative">
                                                                                <select class="form-control" required
                                                                                    name="currency_id">
                                                                                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option <?php if($gateway->currency_id == $currency->id): echo 'selected'; endif; ?> value="<?php echo e($currency->id); ?>">
                                                                                            <?php echo e($currency->name); ?>

                                                                                        </option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                                <span></span>
                                                                                </div>
                                                                            </div>

                                                                            <?php if(!$gateway->is_manual): ?>
                                                                                <?php $__currentLoopData = $gateway->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <div class="col-12 mb-2">
                                                                                        <label><?php echo e(strtoupper(str_replace('_', ' ', $key))); ?></label>
                                                                                        <input type="text" name="data[<?php echo e($key); ?>]" value="<?php echo e($data); ?>" required class="form-control">
                                                                                    </div>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                <div class="col-12 mb-2">
                                                                                    <label><?php echo e(__('Gateway Mode')); ?></label>
                                                                                    <div class="gpt-up-down-arrow position-relative">
                                                                                        <select class="form-control" required name="mode">
                                                                                            <option <?php if($gateway->mode == 'Sandbox'): echo 'selected'; endif; ?> value="Sandbox">
                                                                                                <?php echo e(__('Sandbox')); ?>

                                                                                            </option>
                                                                                            <option <?php if($gateway->mode == 'Live'): echo 'selected'; endif; ?> value="Live">
                                                                                                <?php echo e(__('Live')); ?>

                                                                                            </option>
                                                                                        </select>
                                                                                        <span></span>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endif; ?>

                                                                            <div class="col-12 mb-2">
                                                                                <label><?php echo e(__('Status')); ?></label>
                                                                                <div class="gpt-up-down-arrow position-relative">
                                                                                <select class="form-control" required name="status">
                                                                                    <option <?php if($gateway->status == 1): echo 'selected'; endif; ?> value="1"><?php echo e(__('Active')); ?></option>
                                                                                    <option <?php if($gateway->status == 0): echo 'selected'; endif; ?> value="0"><?php echo e(__('Deactive')); ?></option>
                                                                                </select>
                                                                                <span></span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-12 mb-2">
                                                                                <label><?php echo e(__('Is Manual')); ?></label>
                                                                                <div class="gpt-up-down-arrow position-relative">
                                                                                <select class="form-control" required
                                                                                    name="is_manual">
                                                                                    <option <?php if($gateway->is_manual == 1): echo 'selected'; endif; ?> value="1"><?php echo e(__('Yes')); ?></option>
                                                                                    <option <?php if($gateway->is_manual == 0): echo 'selected'; endif; ?> value="0"><?php echo e(__('No')); ?></option>
                                                                                </select>
                                                                                <span></span>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-12 mb-2 <?php echo e($gateway->is_manual ? '' : 'd-none'); ?>">
                                                                                <label><?php echo e(__('Accept Image')); ?></label>
                                                                                <div class="gpt-up-down-arrow position-relative">
                                                                                <select class="form-control" required
                                                                                    name="accept_img">
                                                                                    <option <?php if($gateway->accept_img == 1): echo 'selected'; endif; ?>
                                                                                        value="1"><?php echo e(__('Yes')); ?>

                                                                                    </option>
                                                                                    <option <?php if($gateway->accept_img == 0): echo 'selected'; endif; ?>
                                                                                        value="0"><?php echo e(__('No')); ?>

                                                                                    </option>
                                                                                </select>
                                                                                <span></span>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-12 mb-2 <?php echo e($gateway->is_manual ? '' : 'd-none'); ?>">
                                                                                <div class="manual-rows">
                                                                                    <?php $__currentLoopData = $gateway->manual_data['label'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <div class="row row-items">
                                                                                            <div class="col-sm-5">
                                                                                                <label for=""><?php echo e(__('Label')); ?></label>
                                                                                                <input type="text" name="manual_data[label][]" value="<?php echo e($row); ?>" class="form-control" required placeholder="<?php echo e(__('Enter label name')); ?>">
                                                                                            </div>
                                                                                            <div class="col-sm-5">
                                                                                                <label for=""><?php echo e(__('Select Required/Optionl')); ?></label>
                                                                                                <div class="gpt-up-down-arrow position-relative">
                                                                                                    <select class="form-control"
                                                                                                        required
                                                                                                        name="manual_data[is_required][]">
                                                                                                        <option
                                                                                                            <?php if($gateway->manual_data['is_required'][$key] == 1): echo 'selected'; endif; ?>
                                                                                                            value="1">
                                                                                                            <?php echo e(__('Required')); ?>

                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php if($gateway->manual_data['is_required'][$key] == 0): echo 'selected'; endif; ?>
                                                                                                            value="0">
                                                                                                            <?php echo e(__('Optional')); ?>

                                                                                                        </option>
                                                                                                    </select>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-2 align-self-center mt-3">
                                                                                                <button type="button" class="btn text-danger trash remove-btn-features">
                                                                                                    <i class="fas fa-trash"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12 mt-2">
                                                                                        <a href="javascript:void(0)" class="fw-bold primary add-new-item">
                                                                                            <i class="fas fa-plus-circle"></i>
                                                                                            <?php echo e(__('Add new row')); ?>

                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-12 mb-2">
                                                                                <label for="instructions"><?php echo e(__('INSTRUCTIONS')); ?></label>
                                                                                <textarea name="instructions" id="instructions" class="form-control summernote" placeholder="<?php echo e(__('Enter payment instructions here')); ?>"><?php echo e($gateway->instructions); ?></textarea>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <div class="button-group text-center mt-4">
                                                                                    <button class="theme-btn m-2 submit-btn">
                                                                                        <i class="far fa-save me-1"></i>
                                                                                        <?php echo e(__('Save')); ?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/summernote-lite.js')); ?>"></script>
    <script>
        $('.summernote').summernote({
            height: 150,
        });

        $('.ajaxform_instant_reload').on('submit', function() {
            $('.summernote').each(function() {
                $(this).val($(this).summernote('code'));
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/gateways/index.blade.php ENDPATH**/ ?>