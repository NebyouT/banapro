<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-delete')): ?>
            <td class="w-60 checkbox">
                <label class="table-custom-checkbox">
                    <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item" value="<?php echo e($plan->id); ?>" data-url="<?php echo e(route('admin.plans.delete-all')); ?>">
                    <span class="table-custom-checkmark custom-checkmark"></span>
                </label>
            </td>
        <?php endif; ?>
        <td><?php echo e(($plans->perPage() * ($plans->currentPage() - 1)) + $loop->iteration); ?></td>
        <td  class="text-start"><?php echo e($plan->subscriptionName); ?> </td>
        <td><?php echo e($plan->duration); ?> </td>
        <td class="fw-bold text-dark"><?php echo e($plan->offerPrice ? currency_format($plan->offerPrice) : ''); ?> </td>
        <td class="fw-bold text-dark"><?php echo e(currency_format($plan->subscriptionPrice)); ?> </td>

        <?php if(moduleCheck('MultiBranchAddon')): ?>
        <td>
            <div class="badge bg-<?php echo e($plan->allow_multibranch == 1 ? 'success' : 'danger'); ?>">
                <?php echo e($plan->allow_multibranch == 1 ? 'Yes' : 'No'); ?>

            </div>
        </td>
        <?php endif; ?>

        <td>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-update')): ?>
                <label class="switch">
                    <input type="checkbox" <?php echo e($plan->status == 1 ? 'checked' : ''); ?> class="status" data-url="<?php echo e(route('admin.plans.status', $plan->id)); ?>">
                    <span class="slider round"></span>
                </label>
            <?php endif; ?>
        </td>

        <td>
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-update')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.plans.edit', $plan->id)); ?>" class="">
                                <i class="fal fa-edit"></i>
                                <?php echo e(__('Edit')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('plans-delete')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.plans.destroy', $plan->id)); ?>" class="confirm-action" data-method="DELETE">
                                <i class="fal fa-trash-alt"></i>
                                <?php echo e(__('Delete')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/plans/datas.blade.php ENDPATH**/ ?>