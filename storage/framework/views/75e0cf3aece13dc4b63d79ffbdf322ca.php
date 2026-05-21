<section class="pricing-plan-section plans-list">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php echo e($page_data['headings']['pricing_title'] ?? ''); ?></h2>
            <p class="section-description">
                <?php echo e($page_data['headings']['pricing_description'] ?? ''); ?>

            </p>
            <div class="d-flex align-items-center justify-content-center gap-4">
                <div class="w-100 d-flex flex-column align-items-center">

                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="nav-monthly" role="tabpanel"
                            aria-labelledby="nav-monthly-tab">
                            <div class="row">
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                                        <div class="card">
                                            <div class="card-header py-3 border-0 font-size-update">
                                                <p><?php echo e($plan['subscriptionName'] ?? ''); ?></p>
                                                <h4>
                                                    <?php if(($plan['offerPrice'] && $plan['subscriptionPrice'] !== null) || $plan['offerPrice'] || $plan['subscriptionPrice']): ?>
                                                        <?php if($plan['offerPrice']): ?>
                                                            <?php echo e(currency_format($plan['offerPrice'])); ?>

                                                        <?php else: ?>
                                                            <?php echo e(currency_format($plan['subscriptionPrice'])); ?>

                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if($plan['offerPrice'] || $plan['subscriptionPrice']): ?>
                                                            <?php echo e(currency_format($plan['offerPrice'] ?? $plan['subscriptionPrice'])); ?>

                                                        <?php else: ?>
                                                            <?php echo e(__('Free')); ?>

                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <span class="price-span">/<?php echo e($plan['duration'] . ' Days'); ?></span></small>
                                                </h4>
                                            </div>

                                            <div class="card-body text-start">
                                                <p><?php echo e(__('Features Of Free Plan')); ?> 👇</p>

                                                <ul>
                                                    <?php $__currentLoopData = $plan['features'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <i class="fas <?php echo e(isset($item[1]) ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'); ?> me-1"></i>
                                                        <?php echo e($item[0] ?? ''); ?>

                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if(moduleCheck('MultiBranchAddon')): ?>
                                                        <li><i class="fas <?php echo e($plan->allow_multibranch == 1 ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'); ?> me-1"></i>
                                                            <?php echo e(__('Multi-branch Allowed')); ?>

                                                        </li>
                                                    <?php endif; ?>

                                                    <?php if(moduleCheck('CustomDomainAddon')): ?>
                                                        <li><i class="fas <?php echo e($plan->addon_domain_limit > 0 ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'); ?> me-1"></i>
                                                            <?php echo e($plan->addon_domain_limit > 0 ? __('Addon Limit:') . ' ' . $plan->addon_domain_limit : __('Addon Domain Available?')); ?>

                                                        </li>

                                                        <li><i class="fas <?php echo e($plan->subdomain_limit > 0 ? 'fa-check-circle text-success' : 'fa-times-circle text-danger'); ?> me-1"></i>
                                                            <?php echo e($plan->subdomain_limit > 0 ? __('Subdomain Limit:') . ' ' . $plan->subdomain_limit : __('Subdomain Available?')); ?>

                                                        </li>
                                                    <?php endif; ?>

                                                </ul>

                                                <a class="btn subscribe-plan d-block mt-4 mb-2" data-plan-id="<?php echo e($plan->id); ?>" data-google-url="<?php echo e(url('login/google?plan_id=') . $plan->id); ?>" data-twitter-url="<?php echo e(url('login/twitter?plan_id=') . $plan->id); ?>"><?php echo e(__('Buy Now')); ?></a>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" value="<?php echo e(route('get-business-categories')); ?>" id="get-business-categories">
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/web/components/plan.blade.php ENDPATH**/ ?>