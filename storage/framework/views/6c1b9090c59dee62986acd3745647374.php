<?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="w-60 checkbox">
            <label class="table-custom-checkbox">
                <input type="checkbox" name="ids[]" class="table-hidden-checkbox checkbox-item" value="<?php echo e($currency->id); ?>" data-url="<?php echo e(route('admin.currencies.delete-all')); ?>">
                <span class="table-custom-checkmark custom-checkmark"></span>
            </label>
            <i></i>
        </td>

        <td><?php echo e($loop->iteration); ?> <i class="<?php echo e(request('id') == $currency->id ? 'fas fa-bell text-red' : ''); ?>"></i>
        </td>
        <td><?php echo e($currency->name); ?></td>
        <td><?php echo e($currency->code); ?></td>
        <td><?php echo e($currency->rate); ?></td>
        <td><?php echo e($currency->symbol); ?></td>
        <td>
            <div class="<?php echo e($currency->status == 1 ? 'badge bg-success' : 'badge bg-danger'); ?>">
                <?php echo e($currency->status == 1 ? 'Active' : 'Inactive'); ?>

            </div>
        </td>
        <td>
            <div class="<?php echo e($currency->is_default == 1 ? 'badge bg-success' : 'badge bg-danger'); ?>">
                <?php echo e($currency->is_default == 1 ? 'Yes' : 'No'); ?>

            </div>
        </td>
        <td class="d-print-none">
            <div class="dropdown table-action">
                <button type="button" data-bs-toggle="dropdown">
                    <i class="far fa-ellipsis-v"></i>
                </button>
                <ul class="dropdown-menu">

                    <?php if($currency->is_default): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies-update')): ?>
                            <li>
                                <a href="<?php echo e(route('admin.currencies.edit', $currency->id)); ?>">
                                    <i class="fal fa-pencil-alt"></i>
                                    <?php echo e(__('Edit')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.currencies.default', ['id' => $currency->id])); ?>">
                                    <i class="fas fa-adjust"></i>
                                    <?php echo e(__('Make Default')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies-update')): ?>
                            <li>
                                <a href="<?php echo e(route('admin.currencies.edit', $currency->id)); ?>">
                                    <i class="fal fa-pencil-alt"></i>
                                    <?php echo e(__('Edit')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.currencies.default', ['id' => $currency->id])); ?>">
                                    <i class="fas fa-adjust"></i>
                                    <?php echo e(__('Make Default')); ?>

                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies-delete')): ?>
                            <li>
                                <a href="<?php echo e(route('admin.currencies.destroy', $currency->id)); ?>" class="confirm-action"
                                    data-method="DELETE">
                                    <i class="fal fa-trash-alt"></i>
                                    <?php echo e(__('Delete')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/currencies/datas.blade.php ENDPATH**/ ?>