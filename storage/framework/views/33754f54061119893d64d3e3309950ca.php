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
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/subscribers/datas.blade.php ENDPATH**/ ?>