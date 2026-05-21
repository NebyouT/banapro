<?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox">
            <label class="table-custom-checkbox">
                <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item"
                    value="<?php echo e($business->id); ?>" data-url="<?php echo e(route('admin.business.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
        </td>
        <td><?php echo e($loop->index + 1); ?> <i class="<?php echo e(request('id') == $business->id ? 'fas fa-bell text-red' : ''); ?>"></i></td>
        <td><?php echo e($business->companyName); ?></td>
        <td><?php echo e($business->category->name ?? ''); ?></td>
        <td><?php echo e($business->phoneNumber); ?></td>
        <td><?php echo e($business->email); ?></td>
        <td><?php echo e($business->enrolled_plan->plan->subscriptionName ?? ''); ?></td>
        <td><?php echo e(formatted_date($business->subscriptionDate)); ?></td>
        <td><?php echo e(formatted_date($business->will_expire)); ?></td>

        <td class="text-center">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business-update')): ?>
                <label class="switch">
                    <input type="checkbox" <?php echo e($business->status == 1 ? 'checked' : ''); ?> class="status" data-url="<?php echo e(route('admin.business.status', $business->id)); ?>">
                    <span class="slider round"></span>
                </label>
            <?php endif; ?>
        </td>

        <td class="d-print-none">
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#business-upgrade-modal" class="view-btn business-upgrade-plan" data-bs-toggle="modal"
                            data-id="<?php echo e($business->id); ?>" data-name="<?php echo e($business->companyName); ?>"
                            data-url="<?php echo e(route('admin.business.upgrade.plan', $business->id)); ?>">
                            <i class="fas fa-paper-plane"></i>
                            <?php echo e(__('Upgrade Plan')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="#business-view-modal" class="view-btn business-view" data-bs-toggle="modal"
                            data-image="<?php echo e(asset($business->pictureUrl ?? 'assets/img/default-shop.svg')); ?>"
                            data-name="<?php echo e($business->companyName); ?>" data-address="<?php echo e($business->address); ?>"
                            data-category="<?php echo e($business->category->name ?? ''); ?>"
                            data-phone="<?php echo e($business->phoneNumber); ?>"
                            data-package="<?php echo e($business->enrolled_plan->plan->subscriptionName ?? ''); ?>"
                            data-last_enroll="<?php echo e(formatted_date($business->subscriptionDate)); ?>"
                            data-expired_date="<?php echo e(formatted_date($business->will_expire)); ?>"
                            data-created_date="<?php echo e(formatted_date($business->created_at)); ?>">
                            <i class="fal fa-eye"></i>
                            <?php echo e(__('View')); ?>

                        </a>

                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.business.edit', $business->id)); ?>" class="">
                            <i class="fal fa-edit"></i>
                            <?php echo e(__('Edit')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.business.destroy', $business->id)); ?>" class="confirm-action"
                            data-method="DELETE">
                            <i class="fal fa-trash-alt"></i>
                            <?php echo e(__('Delete')); ?>

                        </a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/business/datas.blade.php ENDPATH**/ ?>