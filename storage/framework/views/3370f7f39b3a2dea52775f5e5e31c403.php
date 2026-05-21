<?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->index + 1); ?> <i class="<?php echo e(request('id') == $subscriber->id ? 'fas fa-bell text-red' : ''); ?>"></i>
        </td>
        <td><?php echo e(formatted_date($subscriber->created_at)); ?></td>
        <td><?php echo e($subscriber->business->companyName ?? 'N/A'); ?></td>
        <td><?php echo e($subscriber->business?->category?->name ?? 'N/A'); ?></td>
        <td><?php echo e($subscriber->plan->subscriptionName ?? 'N/A'); ?></td>
        <td><?php echo e(formatted_date($subscriber->created_at)); ?></td>
        <td><?php echo e($subscriber->created_at ? formatted_date($subscriber->created_at->addDays($subscriber->duration)) : ''); ?></td>
        <td><?php echo e($subscriber->gateway->name ?? 'N/A'); ?></td>
        <td>
            <div class="badge bg-<?php echo e($subscriber->payment_status == 'reject' ? 'danger' : ($subscriber->payment_status == 'unpaid' ? 'warning' : 'primary')); ?>">
                <?php echo e(ucfirst($subscriber->payment_status)); ?>

            </div>
        </td>
        <td>
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">

                    <li>
                        <a href="#subscriber-view-modal" class="view-btn subscriber-view" data-bs-toggle="modal"
                        data-name="<?php echo e($subscriber->business->companyName ?? 'N/A'); ?>"
                        data-image="<?php echo e(asset($subscriber->business->pictureUrl ?? 'assets/img/default-shop.svg')); ?>"
                        data-manul-attachment="<?php echo e(asset($subscriber->notes['attachment'] ?? '')); ?>"
                        data-category="<?php echo e($subscriber->business?->category?->name ?? 'N/A'); ?>"
                            data-package="<?php echo e($subscriber->plan->subscriptionName ?? 'N/A'); ?>"
                            data-gateway="<?php echo e($subscriber->gateway->name ?? 'N/A'); ?>"
                            data-enroll="<?php echo e(formatted_date($subscriber->created_at)); ?>"
                            data-expired="<?php echo e($subscriber->created_at ? formatted_date($subscriber->created_at->addDays($subscriber->duration)) : ''); ?>"
                        >
                            <i class="fal fa-eye"></i>
                            <?php echo e(__('View')); ?>

                        </a>

                    </li>

                    <li>
                        <a target="_blank" href="<?php echo e(route('admin.subscription-orders.invoice', $subscriber->id)); ?>">
                            <img src="<?php echo e(asset('assets/images/icons/Invoic.svg')); ?>" alt="">
                            <?php echo e(__('Invoice')); ?>

                        </a>
                    </li>

                    <?php if($subscriber->payment_status == 'unpaid'): ?>
                    <li>
                        <a href="#approve-modal" class="modal-approve" data-bs-toggle="modal" data-bs-target="#approve-modal" data-url="<?php echo e(route('admin.subscription-orders.paid', $subscriber->id)); ?>">
                            <i class="fal fa-check"></i>
                            <?php echo e(__('Accept')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="#reject-modal" class="modal-reject" data-bs-toggle="modal" data-bs-target="#reject-modal" data-url="<?php echo e(route('admin.subscription-orders.reject', $subscriber->id)); ?>">
                            <i class="fal fa-times"></i>
                            <?php echo e(__('Reject')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </td>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade common-validation-modal" id="reject-modal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5"><?php echo e(__('Why are you reject It?')); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="personal-info">
                    <form action="" method="post" enctype="multipart/form-data"
                        class="add-brand-form pt-0 ajaxform_instant_reload modalRejectForm">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="mt-3">
                                <label class="custom-top-label"><?php echo e(__('Enter Reason')); ?></label>
                               <textarea name="notes" rows="2" class="form-control" placeholder="<?php echo e(__('Enter reason')); ?>"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="button-group text-center mt-5">
                                <a href="" class="theme-btn border-btn m-2"><?php echo e(__('Cancel')); ?></a>
                                <button class="theme-btn m-2 submit-btn"><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/subscribe-order/datas.blade.php ENDPATH**/ ?>