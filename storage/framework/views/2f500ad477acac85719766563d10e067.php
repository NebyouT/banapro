<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox">
            <label class="table-custom-checkbox">
                <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item" value="<?php echo e($message->id); ?>" data-url="<?php echo e(route('admin.messages.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
        </td>
        <td><?php echo e($loop->index + 1); ?></td>
        <td><?php echo e($message->name); ?></td>
        <td><?php echo e($message->phone); ?></td>
        <td><?php echo e($message->email); ?></td>
        <td><?php echo e($message->company_name); ?></td>
        <td><?php echo e($message->message); ?></td>
        <td>
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('messages-delete')): ?>
                        <li>
                            <a href="<?php echo e(route('admin.messages.destroy', $message->id)); ?>" class="confirm-action"
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
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/messages/datas.blade.php ENDPATH**/ ?>