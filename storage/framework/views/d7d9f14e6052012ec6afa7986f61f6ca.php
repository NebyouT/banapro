<section class="service-section">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php echo e($page_data['headings']['feature_title'] ?? ''); ?></h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="text-center service-card" style="background: <?php echo e($feature->bg_color); ?>">
                        <div class="image">
                            <img src="<?php echo e(asset($feature->image)); ?>" alt="image" />
                        </div>
                        <div class="service-content">
                            <h6><?php echo e($feature->title); ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/web/components/feature.blade.php ENDPATH**/ ?>