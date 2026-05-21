<?php $__currentLoopData = Module::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <?php
            $name = $module->getName();
        ?>
        <td><?php echo e($loop->iteration); ?></td>
        <td class="text-center"><?php echo e(Str::headline($name)); ?></td>
        <td class="text-center"><?php echo e($module->get('version')); ?></td>
        <td class="text-center">
            <label class="switch">
                <input type="checkbox" <?php echo e($module->isEnabled() ? 'checked' : ''); ?> class="status" data-method="GET" data-url="<?php echo e(route('admin.addons.show', $name)); ?>">
                <span class="slider round"></span>
            </label>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/addons/search.blade.php ENDPATH**/ ?>