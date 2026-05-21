<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox">
            <label class="table-custom-checkbox">
                <input type="checkbox" class="table-hidden-checkbox checkbox-item" name="ids[]" value="<?php echo e($category->id); ?>" data-url="<?php echo e(route('admin.business-categories.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
        </td>
        <td><?php echo e($loop->index+1); ?></td>
        <td class="text-start"><?php echo e($category->name); ?></td>
        <td class="text-start"><?php echo e($category->description); ?></td>
        <td class="text-center">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business-categories-update')): ?>
                <label class="switch">
                    <input type="checkbox" <?php echo e($category->status == 1 ? 'checked' : ''); ?> class="status" data-url="<?php echo e(route('admin.business-categories.status', $category->id)); ?>">
                    <span class="slider round"></span>
                </label>
            <?php else: ?>
                <div class="badge bg-<?php echo e($category->status == 1 ? 'success' : 'danger'); ?>">
                    <?php echo e($category->status == 1 ? 'Active' : 'Deactive'); ?>

                </div>
            <?php endif; ?>
        </td>
        <td class="d-print-none">
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business-categories-update')): ?>
                        <li><a  href="<?php echo e(route('admin.business-categories.edit', $category->id)); ?>"><i class="fal fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('business-categories-delete')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.business-categories.destroy', $category->id)); ?>" class="confirm-action" data-method="DELETE">
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
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/business-categories/datas.blade.php ENDPATH**/ ?>