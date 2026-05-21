<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox">
            <label class="table-custom-checkbox">
                <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item" value="<?php echo e($user->id); ?>"
                data-url="<?php echo e(route('admin.users.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
            <i class=""></i>
        </td>
        <td><?php echo e($loop->index + 1); ?></td>
        <td class="text-start"><?php echo e($user->name); ?></td>
        <td class="text-start"><?php echo e($user->phone); ?></td>
        <td class="text-start"><?php echo e($user->email); ?></td>
        <td class="text-start"><?php echo e($user->role); ?></td>
        <td class="d-print-none">
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#User-view" data-bs-toggle="modal" class="staff-view-btn"
                            data-staff-view-name="<?php echo e($user->name ?? 'N/A'); ?>"
                            data-staff-view-phone-number="<?php echo e($user->phone ?? 'N/A'); ?>"
                            data-staff-view-email-number="<?php echo e($user->email ?? 'N/A'); ?>"
                            data-staff-view-role="<?php echo e($user->role ?? 'N/A'); ?>"> <i
                                class="fal fa-eye"></i><?php echo e(__('View')); ?></a></li>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-update')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.users.edit', [$user->id, 'users' => $user->role])); ?>">
                                <i class="fal fa-pencil-alt"></i><?php echo e(__('Edit')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users-delete')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.users.destroy', $user->id)); ?>" class="confirm-action"
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
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/users/datas.blade.php ENDPATH**/ ?>