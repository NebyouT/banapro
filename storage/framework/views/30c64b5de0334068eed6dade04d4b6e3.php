<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox text-start">
            <label class="table-custom-checkbox">
                <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item"
                    value="<?php echo e($banner->id); ?>" data-url="<?php echo e(route('admin.banners.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
        </td>

        <td><?php echo e($banners->perPage() * ($banners->currentPage() - 1) + $loop->iteration); ?></td>
        <td>
            <img class="table-img" height="35px" src="<?php echo e(asset($banner->imageUrl ?? '')); ?>" alt="imageUrl">
        </td>
        <td class="text-center">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banners-update')): ?>
                <label class="switch">
                    <input type="checkbox" <?php echo e($banner->status == 1 ? 'checked' : ''); ?> class="status"
                        data-url="<?php echo e(route('admin.banners.status', $banner->id)); ?>">
                    <span class="slider round"></span>
                </label>
            <?php else: ?>
                <div class="badge bg-<?php echo e($banner->status == 1 ? 'success' : 'danger'); ?>">
                    <?php echo e($banner->status == 1 ? 'Active' : 'Deactive'); ?>

                </div>
            <?php endif; ?>
        </td>
        <td>
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banners-update')): ?>
                        <li>
                            <a href="#edit-banner-modal" class="edit-banner-btn" data-bs-toggle="modal"
                                data-url="<?php echo e(route('admin.banners.update', $banner->id)); ?>"
                                data-image="<?php echo e(asset($banner->imageUrl)); ?>" data-status="<?php echo e($banner->status); ?>">
                                <i class="fal fa-edit"></i>
                                <?php echo e(__('Edit')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banners-delete')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.banners.destroy', $banner->id)); ?>" class="confirm-action"
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
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/banners/search.blade.php ENDPATH**/ ?>