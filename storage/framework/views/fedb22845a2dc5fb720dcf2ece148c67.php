<section class="blog-section p-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 pb-4">
                            <div class="blog-shadow rounded-16">
                                <div class="text-center blog-image mb-3">
                                    <img src="<?php echo e(asset($blog->image)); ?>" alt="product-image"
                                        class="w-100 h-100 object-fit-cover rounded-8" />
                                </div>
                                <div class="p-3 pt-0">
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="assets/web/images/icons/clock.svg" alt="" />
                                        <p class="ms-1 mb-0"><?php echo e(formatted_date($blog->updated_at)); ?></p>
                                    </div>
                                    <h6 class="h6-line-clamp"><?php echo e($blog->title); ?></h6>
                                    <p>
                                        <?php echo Str::limit(strip_tags($blog->descriptions), 120); ?>

                                        <?php if(strpos($blog->descriptions, '<img') !== false): ?>
                                            <span class="text-muted"></span>
                                        <?php endif; ?>
                                    </p>

                                    <br>
                                    <a href="<?php echo e(route('blogs.show', $blog->slug)); ?>"
                                        class="custom-clr-primary"><?php echo e($page_data['headings']['blog_btn_text'] ?? ''); ?><span
                                            class="font-monospace">></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-xl-4">
                <?php $__currentLoopData = $recent_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="blog-shadow rounded-16 mb-4">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo e(asset($blog->image)); ?>"
                                class="object-fit-cover rounded-1  home-blog-small-image" alt="..." />
                            <div class="mx-3">
                                <div class="d-flex align-items-center">
                                    <img src="assets/web/images/icons/clock.svg" alt="" />
                                    <p class="ms-1 mb-0"><?php echo e(formatted_date($blog->updated_at)); ?></p>
                                </div>
                                <p class="p-2nd-line-clamp mb-1">
                                    <strong><?php echo e($blog->title); ?></strong>
                                </p>
                                <a href="<?php echo e(route('blogs.show', $blog->slug)); ?>"
                                    class="custom-clr-primary"><?php echo e($page_data['headings']['blog_btn_text'] ?? ''); ?><span
                                        class="font-monospace">></span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/web/components/blog.blade.php ENDPATH**/ ?>