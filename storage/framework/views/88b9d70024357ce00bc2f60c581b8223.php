

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

    <?php if(auth()->user()->hasPermission('dashboard.read')): ?>
    <div class="container-fluid m-h-100">
        <?php if(env('DEMO_MODE')): ?>
        <div class="alert alert-dismissible fade show text-center mb-3 text-white" role="alert" style="background: linear-gradient(270deg, #ff7db8 0%, #ee2a7b 100%)">
            <b class="text-light">Note:</b> This is a demo account — data resets every hour for this account only. Some of module are disabled in this account, to get full access please please create your own account.
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <div class="row gpt-dashboard-chart mb-30">
            <div class="col-md-12 col-lg-12 col-xl-8">

                <div class="business-stat-container mb-4">
                    <div class="business-stat">
                        <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title" ><?php echo e(__('Total Sales')); ?></p>
                                    <h4 class="bus-stat-count" id="total_sales"></h4>
                                </div>
                                <div class="custom-image-bg color-1">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame1.svg')); ?>" alt="" >
                                </div>

                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2" >
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_sales"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?> </span> </p>
                            </div>
                        </div>

                        <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Total Purchase')); ?></p>
                                    <h4 class="bus-stat-count" id="total_purchase"></h4>
                                </div>
                                <div class="custom-image-bg color-2">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame2.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2">
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_purchase"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?> </span> </p>
                            </div>
                        </div>

                            <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Total Income')); ?></p>
                                    <h4 class="bus-stat-count" id="total_income"></h4>
                                </div>
                                <div class="custom-image-bg color-3">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame3.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2">
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowLoss.svg')); ?>" alt="">
                               <span class="profit" id="this_month_total_income"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?> </span> </p>
                            </div>
                        </div>

                            <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Total Expense')); ?></p>
                                    <h4 class="bus-stat-count" id="total_expense"></h4>
                                </div>
                                <div class="custom-image-bg color-4">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame4.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2">
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_expense"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?></span> </p>
                            </div>
                        </div>
                        

                            <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Total Customer')); ?></p>
                                    <h4 class="bus-stat-count" id="total_customer"></h4>
                                </div>
                                <div class="custom-image-bg color-5">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame5.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2" >
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_customer"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?></span> </p>
                            </div>
                        </div>
                        <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Total Supplier')); ?></p>
                                    <h4 class="bus-stat-count" id="total_supplier"></h4>
                                </div>
                                <div class="custom-image-bg color-6">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame6.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2" >
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_supplier"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?></span> </p>
                            </div>
                        </div>

                        <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Sales Returns')); ?></p>
                                    <h4 class="bus-stat-count" id="total_sales_return"></h4>
                                </div>
                                <div class="custom-image-bg color-7">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame7.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2" >
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_sale_return"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?></span> </p>
                            </div>
                        </div>

                        <div class="business-content">
                            <div class="d-flex justify-content-between pt-2 pb-1 px-2 gap-1">
                                <div class="d-flex flex-column">
                                    <p class="bus-stat-title"><?php echo e(__('Purchase Returns')); ?></p>
                                    <h4 class="bus-stat-count" id="total_purchase_return"></h4>
                                </div>
                                <div class="custom-image-bg color-8">
                                    <img src="<?php echo e(asset('assets/images/dashboard/Frame8.svg')); ?>" alt="">
                                </div>
                            </div>
                            <div class="bus-profit d-flex items-start justify-between gap-1 px-2 pt-2" >
                                <img src="<?php echo e(asset('assets/images/dashboard/arrowProfit.svg')); ?>"
                                    alt="">
                               <span class="profit" id="this_month_total_purchase_return"></span> <span class="bus-stat-title"><?php echo e(__('This Month')); ?></span> </p>
                            </div>
                        </div>

                  </div>
                </div>

                

                <div class="card new-card dashboard-card border-0 p-0 mt-2">
                    <div class="dashboard-chart">
                        <h4><?php echo e(__('Revenue Statistic')); ?></h4>
                        <div class="gpt-up-down-arrow position-relative">
                            <select class="form-control revenue-year">
                                <?php for($i = date('Y'); $i >= 2022; $i--): ?>
                                    <option <?php if($i == date('Y')): echo 'selected'; endif; ?> value="<?php echo e($i); ?>"><?php echo e($i); ?>

                                    </option>
                                <?php endfor; ?>
                            </select>
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class=" d-flex align-items-center justify-content-center gap-3 pb-2">
                            <div class="d-flex align-items-center gap-1">
                                <div class="profit-bulet"></div>
                                <p><?php echo e(__('Profit')); ?>: <strong class="profit-value"></strong></p>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <div class="loss-bulet"></div>
                                <p><?php echo e(__('Loss')); ?>: <strong class="loss-value"></strong></p>
                            </div>
                        </div>
                        <div class="content">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="row mx-auto gap-3">
                    <div class="dashborad-table-container col-lg-8 col-xl-12 mb-1 p-0 m-0 left-margin-top">
                        <div class="dashboard-table-header">
                            <h3><?php echo e(__('Low Stock')); ?></h3>
                             <a href="<?php echo e(route('business.stocks.index', ['alert_qty' => true])); ?>"><?php echo e(__('View All')); ?><i class="fas fa-chevron-right"></i></a>
                        </div>
                        <table class="table dashboard-table-content">
                            <thead class="thead-light business-thead">
                                <tr>
                                    <th scope="col"><?php echo e(__('SL')); ?></th>
                                    <th scope="col"><?php echo e(__('Name')); ?></th>
                                    <th scope="col" class="text-center"><?php echo e(__('Alert Qty')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($stock->productName); ?></td>
                                        <?php if($stock->stocks_sum_product_stock <= $stock->alert_qty): ?>
                                            <td class="text-danger text-center"><?php echo e($stock->stocks_sum_product_stock ?? 0); ?></td>
                                        <?php else: ?>
                                            <td class="text-success text-center"><?php echo e($stock->stocks_sum_product_stock ?? 0); ?></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    
                        <div class="card new-card sms-report border-0 p-0 mt-2 col-lg-4 col-xl-12 right-margin-top">
                        <div class="dashboard-chart">
                            <h4><?php echo e(__('Overall Reports')); ?></h4>
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
                            <div class="overallContent row">
                                <div class="col-lg-7">
                                    <canvas id="Overallreports"></canvas>
                                </div>
                                <div class="col-lg-5 overall-level-container">
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="purchase-bulet"></div>
                                        <p><?php echo e(__('Purchase')); ?>: <strong id="overall_purchase"></strong></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="sales-bulet"></div>
                                        <p><?php echo e(__('Sales')); ?>: <strong id="overall_sale"></strong></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                    <div class="income-bulet"></div>
                                    <p><?php echo e(__('Income')); ?>: <strong id="overall_income"></strong></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                    <div class="expense-bulet"></div>
                                    <p><?php echo e(__('Expense')); ?>: <strong id="overall_expense"></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" tab-table-container">
            <div class="custom-tabs">
                <button class="tab-item active" onclick="showTab('sales')"><?php echo e(__('Recent Sales')); ?></button>
                <button class="tab-item" onclick="showTab('purchase')"><?php echo e(__('Recent Purchase')); ?></button>
            </div>
            <div id="sales" class="tab-content dashboard-tab active">
                <div class="table-container">
                    <table class="table dashboard-table-content">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-start"  scope="col"><?php echo e(__('Date')); ?></th>
                                <th class="text-center"  scope="col"><?php echo e(__('Invoice')); ?></th>
                                <th class="text-center"  scope="col"><?php echo e(__('Customer')); ?></th>
                                <th class="text-center"  scope="col"><?php echo e(__('Total')); ?></th>
                                <th class="text-center"  scope="col"><?php echo e(__('Paid')); ?></th>
                                <th class="text-center pr-3" scope="col"><?php echo e(__('Due')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-start"><?php echo e(formatted_date($sale->created_at)); ?></td>
                                    <td class="text-center"><?php echo e($sale->invoiceNumber); ?></td>
                                    <td class="text-center"><?php echo e($sale->party->name ?? ''); ?></td>
                                    <td class="text-center"><?php echo e(currency_format($sale->totalAmount, currency: business_currency())); ?></td>
                                    <td class="text-center"><?php echo e(currency_format($sale->paidAmount, currency: business_currency())); ?></td>
                                    <td class="text-center pr-3"><?php echo e(currency_format($sale->dueAmount, currency: business_currency())); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="purchase" class="tab-content dashboard-tab">
                <div class="table-container">
                    <table class="table dashboard-table-content">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-start" scope="col"><?php echo e(__("Date")); ?></th>
                                <th class="text-center" scope="col"><?php echo e(__("Invoice")); ?></th>
                                <th class="text-center" scope="col"><?php echo e(__("Customer")); ?></th>
                                <th class="text-center" scope="col"><?php echo e(__("Total")); ?></th>
                                <th class="text-center" scope="col"><?php echo e(__("Paid")); ?></th>
                                <th class="text-center pr-3" scope="col"><?php echo e(__("Due")); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-start"><?php echo e(formatted_date($purchase->created_at)); ?></td>
                                    <td class="text-center"><?php echo e($purchase->invoiceNumber); ?></td>
                                    <td class="text-center"><?php echo e($purchase->party->name ?? ''); ?></td>
                                    <td class="text-center"><?php echo e(currency_format($purchase->totalAmount, currency: business_currency())); ?></td>
                                    <td class="text-center"><?php echo e(currency_format($purchase->paidAmount, currency: business_currency())); ?></td>
                                    <td class="text-center pr-3"><?php echo e(currency_format($purchase->dueAmount, currency: business_currency())); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
        $currency = business_currency();
    ?>
    
    <input type="hidden" id="currency_symbol" value="<?php echo e($currency->symbol); ?>">
    <input type="hidden" id="currency_position" value="<?php echo e($currency->position); ?>">
    <input type="hidden" id="currency_code" value="<?php echo e($currency->code); ?>">

    <input type="hidden" value="<?php echo e(route('business.dashboard.data')); ?>" id="get-dashboard">
    <input type="hidden" value="<?php echo e(route('business.dashboard.overall-report')); ?>" id="get-overall-report">
    <input type="hidden" value="<?php echo e(route('business.dashboard.revenue')); ?>" id="revenue-statistic">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/custom/business-dashboard.js')); ?>?v=<?php echo e(time()); ?>"></script>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('layouts.business.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/Modules/Business/resources/views/dashboard/index.blade.php ENDPATH**/ ?>