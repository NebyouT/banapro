
<footer class="footer-section py-3">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-lg-5">
                <a href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(asset($general->value['footer_logo'] ?? '')); ?>" alt="footer-logo" class="footer-logo" />
                </a>
                <p class="mt-3 footer-details">
                    <?php echo e($page_data['headings']['footer_short_title'] ?? ''); ?>

                </p>

                <div class="banner-scan">
                    <?php if(!empty($page_data['footer_scanner_image'])): ?>
                    <img src="<?php echo e(asset($page_data['footer_scanner_image'] ?? '')); ?>" alt="" class="w-20" />
                    <p>
                        <?php echo e($page_data['headings']['footer_scanner_title'] ?? ''); ?>

                    </p>
                    <?php endif; ?>
                </div>

                <div class="footer-play-store mt-3 mb-3">
                    <?php if(!empty($page_data['footer_google_app_image'])): ?>
                        <a href="<?php echo e($page_data['headings']['footer_google_play_app_link'] ?? ''); ?>" target="_blank">
                            <img src="<?php echo e(asset($page_data['footer_google_app_image'])); ?>" alt="Google Play App" />
                        </a>
                    <?php endif; ?>

                    <?php if(!empty($page_data['footer_apple_app_image'])): ?>
                        <a href="<?php echo e($page_data['headings']['footer_apple_app_link'] ?? ''); ?>" target="_blank">
                            <img src="<?php echo e(asset($page_data['footer_apple_app_image'])); ?>" alt="Apple App Store" />
                        </a>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-md-6 col-lg-4">
                <h6 class="mb-4 mt-4 mt-md-0 text-white"><?php echo e($page_data['headings']['middle_footer_title'] ?? ''); ?></h6>
                <ul class="d-flex gap-60">
                    <div class="first-list d-flex flex-column gap-3">
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_one'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_one'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_two'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_two'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_three'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_three'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_four'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_four'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_five'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_five'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['right_footer_link_six'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['right_footer_six'] ?? ''); ?></a>
                        </li>
                    </div>

                    <div class="second-list d-flex flex-column gap-3">
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_one'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_one'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_two'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_two'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_three'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_three'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_four'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_four'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_five'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_five'] ?? ''); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo e($page_data['headings']['middle_footer_link_six'] ?? ''); ?>" target="_blank"><?php echo e($page_data['headings']['middle_footer_six'] ?? ''); ?></a>
                        </li>

                    </div>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="mb-4 text-white"><?php echo e($page_data['headings']['right_footer_title'] ?? ''); ?></h6>
                <ul class="d-flex flex-column gap-3">
                    <li>
                        <a href="<?php echo e(url($page_data['headings']['left_footer_link_one'] ?? '')); ?>" target="_blank"><?php echo e($page_data['headings']['left_footer_one'] ?? ''); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(url($page_data['headings']['left_footer_link_two'] ?? '')); ?>" target="_blank"><?php echo e($page_data['headings']['left_footer_two'] ?? ''); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(url($page_data['headings']['left_footer_link_three'] ?? '')); ?>" target="_blank"><?php echo e($page_data['headings']['left_footer_three'] ?? ''); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(url($page_data['headings']['left_footer_link_four'] ?? '')); ?>" target="_blank"><?php echo e($page_data['headings']['left_footer_four'] ?? ''); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e(url($page_data['headings']['left_footer_link_five'] ?? '')); ?>" target="_blank"><?php echo e($page_data['headings']['left_footer_five'] ?? ''); ?></a>
                    </li>
                </ul>

                <ul class="social-link">
                    <?php $__currentLoopData = $page_data['headings']['footer_socials_links'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $footer_socials_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(url($footer_socials_link)); ?>" target="_blank">
                                <img src="<?php echo e(asset($page_data['footer_socials_icons'][$key] ?? 'assets/img/demo-img.png')); ?>" alt="icon">
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>


            </div>
        </div>
        <hr class="custom-clr-white" />
        <div class="text-center">
            <p class="text-white mb-0"><?php echo e($general->value['copy_right'] ?? ''); ?></p>
        </div>
    </div>
</footer>

<input type="hidden" id="get-business-categories" value="<?php echo e(route('get-business-categories')); ?>">
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/web/partials/footer.blade.php ENDPATH**/ ?>