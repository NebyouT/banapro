

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard-read')): ?>
    <div class="container-fluid m-h-100">
        <div class="gpt-dashboard-card counter-grid-6 mb-24">
            <div class="couter-box">
                <div class="icons">
                    <img src="<?php echo e(asset('assets/images/dashboard/01.png')); ?>" alt="">
                </div>
                <div class="content-side">
                    <h5 id="total_businesses">0</h5>
                    <p><?php echo e(__('Total Shop')); ?></p>
                </div>
            </div>
            <div class="couter-box">
                <div class="icons">
                    <img src="<?php echo e(asset('assets/images/dashboard/02.png')); ?>" alt="">
                </div>
                <div class="content-side">
                    <h5 id="expired_businesses">0</h5>
                    <p><?php echo e(__('Expired Businesses')); ?></p>
                </div>
            </div>
            <div class="couter-box">
                <div class="icons">
                    <img src="<?php echo e(asset('assets/images/dashboard/03.png')); ?>" alt="">
                </div>
                <div class="content-side">
                    <h5 id="plan_subscribes">0</h5>
                    <p><?php echo e(__('Plan Subscribes')); ?></p>
                </div>
            </div>
            <div class="couter-box">
                <div class="icons">
                    <img src="<?php echo e(asset('assets/images/dashboard/04.png')); ?>" alt="">
                </div>
                <div class="content-side">
                    <h5 id="business_categories">0</h5>
                    <p><?php echo e(__('Total Categories')); ?></p>
                </div>
            </div>
            <div class="couter-box">
                <div class="icons">
                    <img src="<?php echo e(asset('assets/images/dashboard/05.png')); ?>" alt="">
                </div>
                <div class="content-side">
                    <h5 id="total_plans">0</h5>
                    <p><?php echo e(__('Total Plans')); ?></p>
                </div>
            </div>

        </div>


        <div class="row gpt-dashboard-chart">
            <div class="col-xxl-8 mb-30">
                <div class="card new-card dashboard-card border-0 p-0 h-100">
                    <div class="dashboard-chart-header">
                        <h4><?php echo e(__('Finance Overview')); ?></h4>
                        <div class="gpt-up-down-arrow position-relative">
                            <select class="form-control yearly-statistics">
                                <?php for($i = date('Y'); $i >= 2022; $i--): ?>
                                    <option <?php if($i == date('Y')): echo 'selected'; endif; ?> value="<?php echo e($i); ?>"><?php echo e($i); ?>

                                    </option>
                                <?php endfor; ?>
                            </select>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="content">
                            <div class="income-container">
                                <div class="income-dot"></div>
                                <div>Total Subscription: <span class="income-value"></span></div>
                            </div>
                            <canvas id="monthly-statistics" class="chart-css"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 mb-30">
                <div class="card new-card sms-report border-0 p-0 h-100">
                    <div class="dashboard-chart-header">
                        <h4><?php echo e(__('Subscription Plan')); ?></h4>
                        <div class="gpt-up-down-arrow position-relative">
                            <select class="form-control overview-year">
                                <?php for($i = date('Y'); $i >= 2022; $i--): ?>
                                    <option <?php if($i == date('Y')): echo 'selected'; endif; ?> value="<?php echo e($i); ?>"><?php echo e($i); ?>

                                    </option>
                                <?php endfor; ?>
                            </select>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <canvas id="plans-chart" class="chart-css"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="erp-table-section dashboard">
            <div class="card">
                <div class="card-bodys">
                    <div class="table-header p-16">
                        <h4><?php echo e(__('Recent Register')); ?></h4>
                        <div>
                            <a href="<?php echo e(route('admin.business.index')); ?>" class="add-order-btn rounded-2"><i
                                    class="far fa-list me-1" aria-hidden="true"></i> <?php echo e(__('View All')); ?></a>
                        </div>
                    </div>
                    <div class="erp-box-content">
                        <div class="top-customer-table">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-start"> <?php echo e(__('SL')); ?>. </th>
                                        <th class="text-start"><?php echo e(__('Date & Time')); ?></th>
                                        <th class="text-start"><?php echo e(__('Name')); ?></th>
                                        <th class="text-start"><?php echo e(__('Category')); ?></th>
                                        <th class="text-start"><?php echo e(__('Phone')); ?></th>
                                        <th class="text-center"><?php echo e(__('Subscription Plan')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-start">
                                                <?php echo e($loop->index + 1); ?>

                                            </td>
                                            <td class="text-start">
                                                <?php echo e(formatted_date($business->created_at)); ?>

                                            </td>
                                            <td class="text-start">
                                                <?php echo e($business->companyName); ?>

                                            </td>
                                            <td class="text-start">
                                                <?php echo e($business->category->name); ?>

                                            </td>
                                            <td class="text-start">
                                                <?php echo e($business->phoneNumber); ?>

                                            </td>
                                            <td class="text-center">

                                                <?php if($business->enrolled_plan?->plan?->subscriptionName == 'Free'): ?>
                                                    <span
                                                        class="free-badge"><?php echo e($business->enrolled_plan?->plan?->subscriptionName); ?></span>
                                                <?php elseif($business->enrolled_plan?->plan?->subscriptionName == 'Premium'): ?>
                                                    <span
                                                        class="premium-badge"><?php echo e($business->enrolled_plan?->plan?->subscriptionName); ?></span>
                                                <?php elseif($business->enrolled_plan?->plan?->subscriptionName == 'Standard'): ?>
                                                    <span
                                                        class="standard-badge"><?php echo e($business->enrolled_plan?->plan?->subscriptionName); ?></span>
                                                <?php else: ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php else: ?>
    <div class="container-fluid">
         <div class="empty-screen-container">
            <div class="empty-screen-content">
                <img src="<?php echo e(asset('assets/images/dashboard/empty.svg')); ?>" alt="" srcset="">
                <p>You can not access it!</p>
            </div>
         </div>
    </div>
    <?php endif; ?>

    <?php
        $currency = default_currency();
    ?>
    
    <input type="hidden" id="currency_symbol" value="<?php echo e($currency->symbol); ?>">
    <input type="hidden" id="currency_position" value="<?php echo e($currency->position); ?>">
    <input type="hidden" id="currency_code" value="<?php echo e($currency->code); ?>">

    <input type="hidden" value="<?php echo e(route('admin.dashboard.data')); ?>" id="get-dashboard">
    <input type="hidden" value="<?php echo e(route('admin.dashboard.plans-overview')); ?>" id="get-plans-overview">
    <input type="hidden" value="<?php echo e(route('admin.dashboard.subscriptions')); ?>" id="yearly-subscriptions-url">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/custom/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>