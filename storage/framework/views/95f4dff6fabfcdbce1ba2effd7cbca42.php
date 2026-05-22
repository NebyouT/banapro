<?php $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $domain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'domains.delete')): ?>
        <td class="w-60 checkbox d-print-none text-start">
            <input type="checkbox" name="ids[]" class="delete-checkbox-item multi-delete" value="<?php echo e($domain->id); ?>">
        </td>
        <?php endif; ?>
        <td ><?php echo e($loop->index + 1); ?></td>
        <td><?php echo e($domain->domain); ?></td>
        <td>
            <div class="d-flex align-items-center justify-content-center">
                <div class="badge <?php echo e($domain->is_verified == 1 ? ' bg-success' : ' bg-danger'); ?>">
                    <?php echo e($domain->is_verified == 1 ? 'Yes' : 'No'); ?>

                </div>
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center justify-content-center">
                <div class="badge <?php echo e($domain->is_ssl_enabled == 1 ? ' bg-success' : ' bg-danger'); ?>">
                    <?php echo e($domain->is_ssl_enabled == 1 ? 'Yes' : 'No'); ?>

                </div>
            </div>
        </td>
        <td><?php echo e(formatted_date($domain->created_at)); ?></td>

        <td>
            <div class="d-flex align-items-center justify-content-center">
                <?php if($domain->status == 1): ?>
                    <div class="badge bg-success"><?php echo e(__('Active')); ?></div>
                <?php elseif($domain->status == 2): ?>
                    <div class="badge bg-danger"><?php echo e(__('Inactive')); ?></div>
                <?php else: ?>
                    <div class="badge bg-warning"><?php echo e(__('Pending')); ?></div>
                <?php endif; ?>
            </div>
        </td>

        <td class="print-d-none">
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'domains.delete')): ?>
                    <li>
                        <a href="<?php echo e(route('business.domains.destroy', $domain->id)); ?>" class="confirm-action"
                            data-method="DELETE">
                            <i class="fal fa-trash-alt"></i>
                            <?php echo e(__('Delete')); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/Modules/CustomDomainAddon/resources/views/business/datas.blade.php ENDPATH**/ ?>