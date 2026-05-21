<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->index+1); ?></td>
        <td><?php echo e($notification->data['message'] ?? ''); ?></td>
        <td><?php echo e(formatted_date($notification->created_at, 'd M Y - H:i A')); ?></td>
        <td><?php echo e(formatted_date($notification->read_at, 'd M Y - H:i A')); ?></td>
        <td>
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo e(route('admin.notifications.mtView', $notification->id)); ?>"><i class="fas fa-eye"></i> <?php echo app('translator')->get('View'); ?></a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/notifications/datas.blade.php ENDPATH**/ ?>