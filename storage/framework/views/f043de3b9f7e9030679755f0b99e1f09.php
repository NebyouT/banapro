<nav class="side-bar">
    <div class="side-bar-logo">
        <a href="<?php echo e(route('business.dashboard.index')); ?>">
            <img src="<?php echo e(asset(get_option('general')['admin_logo'] ?? 'assets/images/logo/backend_logo.png')); ?>" alt="Logo">
        </a>
        <button class="close-btn"><i class="fal fa-times"></i></button>
    </div>
    <div class="side-bar-manu">
        <ul>
            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'dashboard.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.dashboard.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.dashboard.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/dashborad.svg')); ?>">
                    </span>
                    <?php echo e(__('Dashboard')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['sales.read', 'sales.create'])): ?>
            <li class="dropdown <?php echo e(Request::routeIs('business.sales.index', 'business.sales.create', 'business.sales.edit', 'business.sale-returns.create', 'business.sale-returns.index','business.sales.inventory') ? 'active' : ''); ?>">
                <a href="#">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/sales.svg')); ?>">
                    </span>
                    <?php echo e(__('Sales')); ?></a>
                <ul>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'sales.create')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.sales.create') ? 'active' : ''); ?>" href="<?php echo e(route('business.sales.create')); ?>">
                            <?php echo e(__('POS')); ?>

                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'inventory.create')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.sales.inventory') ? 'active' : ''); ?>" href="<?php echo e(route('business.sales.inventory')); ?>">
                            <?php echo e(__('Inventory')); ?>

                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'sales.read')): ?>
                    <li><a class="<?php echo e(Request::routeIs('business.sales.index', 'business.sale-returns.create') ? 'active' : ''); ?>" href="<?php echo e(route('business.sales.index')); ?>"><?php echo e(__('Sales List')); ?></a></li>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'sale-returns.read')): ?>
                    <li><a class="<?php echo e(Request::routeIs('business.sale-returns.index') ? 'active' : ''); ?>" href="<?php echo e(route('business.sale-returns.index')); ?>"><?php echo e(__('Sales Return')); ?></a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['purchases.read', 'purchase-returns.read'])): ?>
                <li class="dropdown <?php echo e(Request::routeIs('business.purchases.index', 'business.purchases.create', 'business.purchases.edit', 'business.purchase-returns.create', 'business.purchase-returns.index') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/Purchase.svg')); ?>">
                        </span>
                        <?php echo e(__('Purchases')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'purchases.create')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.purchases.create') ? 'active' : ''); ?>" href="<?php echo e(route('business.purchases.create')); ?>"><?php echo e(__('Add Purchase')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'purchases.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.purchases.index',  'business.purchase-returns.create') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.purchases.index')); ?>"><?php echo e(__('Purchase List')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'purchase-returns.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.purchase-returns.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.purchase-returns.index')); ?>"><?php echo e(__('Returns List')); ?></a></li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['products.read', 'bulk-uploads.read', 'categories.read', 'brands.read', 'units.read', 'product-models.read'])): ?>
                <li class="dropdown <?php echo e(Request::routeIs('business.products.index', 'business.products.create', 'business.products.edit', 'business.products.expired', 'business.categories.index', 'business.brands.index', 'business.units.index', 'business.barcodes.index', 'business.bulk-uploads.index', 'business.variations.index', 'business.product-models.index','business.racks.index', 'business.shelfs.index') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/product.svg')); ?>">

                        </span>
                        <?php echo e(__('Products')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'products.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.products.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.products.index')); ?>"><?php echo e(__('All Product')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'products.create')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.products.create') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.products.create')); ?>"><?php echo e(__('Add Product')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'products-expired.read')): ?>
                         <li><a class="<?php echo e(Request::routeIs('business.products.expired') ? 'active' : ''); ?>"
                               href="<?php echo e(route('business.products.expired')); ?>"><?php echo e(__('Expired Products')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'barcodes.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.barcodes.index') ? 'active' : ''); ?>"
                               href="<?php echo e(route('business.barcodes.index')); ?>"><?php echo e(__('Print Labels')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'bulk-uploads.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.bulk-uploads.index') ? 'active' : ''); ?>"
                               href="<?php echo e(route('business.bulk-uploads.index')); ?>"><?php echo e(__('Bulk Upload')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'categories.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.categories.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.categories.index')); ?>"><?php echo e(__('Category')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'brands.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.brands.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.brands.index')); ?>"><?php echo e(__('Brand')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'units.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.units.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.units.index')); ?>"><?php echo e(__('Unit')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'product-models.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.product-models.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.product-models.index')); ?>"><?php echo e(__('Model')); ?></a>
                        </li>
                        <?php endif; ?>
                        

                       <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'racks.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.racks.index') ? 'active' : ''); ?>" href="<?php echo e(route('business.racks.index')); ?>"><?php echo e(__('Racks')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'shelfs.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.shelfs.index') ? 'active' : ''); ?>" href="<?php echo e(route('business.shelfs.index')); ?>"><?php echo e(__('Shelfs')); ?></a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </li>
            <?php endif; ?>

            <?php if(moduleCheck('WarehouseAddon')): ?>
             <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'warehouses.read')): ?>
                <li class="dropdown <?php echo e(Request::routeIs('warehouse.warehouses.index','warehouse.warehouses.product') ? 'active' : ''); ?>">
                    <a class="position-relative" href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/hrm.svg')); ?>">
                        </span>
                        <?php echo e(__('Warehouse')); ?>

                        <?php if(env('DEMO_MODE')): ?>
                         <sup class="badge bg-warning position-absolute side-bar-addon">Add-On</sup>
                        <?php endif; ?>
                    </a>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'warehouses.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('warehouse.warehouses.index') ? 'active' : ''); ?>" href="<?php echo e(route('warehouse.warehouses.index')); ?>"><?php echo e(__('Warehouse')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'warehouses.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('warehouse.warehouses.product') ? 'active' : ''); ?>" href="<?php echo e(route('warehouse.warehouses.product')); ?>"><?php echo e(__('Products')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>

                </li>
             <?php endif; ?>
            <?php endif; ?>

            <?php if((moduleCheck('MultiBranchAddon') && ((plan_data()['allow_multibranch'] ?? false)) || moduleCheck('WarehouseAddon'))): ?>
           <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'transfers.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.transfers.index','business.transfers.create','business.transfers.edit') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.transfers.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/transfer.svg')); ?>">
                    </span>
                    <?php echo e(__('Transfer')); ?>

                </a>
            </li>
            <?php endif; ?>
            <?php endif; ?>

            <?php if(moduleCheck('MultiBranchAddon') && (plan_data()['allow_multibranch'] ?? false)): ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'branches.read')): ?>
            <li class="dropdown <?php echo e(Request::routeIs('multibranch.branches.index', 'multibranch.branches.overview', 'business.roles.index', 'business.roles.edit', 'business.roles.create') ? 'active' : ''); ?>">
                <a href="#">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/branch.svg')); ?>">
                    </span>
                    <?php echo e(__('Branch')); ?>

                    <?php if(env('DEMO_MODE')): ?>
                    <sup class="badge bg-warning position-absolute side-bar-addon-2">Add-On</sup>
                    <?php endif; ?>
                </a>
                <ul>
                    <li>
                        <a class="<?php echo e(Request::routeIs('multibranch.branches.overview') ? 'active' : ''); ?>" href="<?php echo e(route('multibranch.branches.overview')); ?>"><?php echo e(__('Overview')); ?></a>
                    </li>
                    <li>
                        <a class="<?php echo e(Request::routeIs('multibranch.branches.index') ? 'active' : ''); ?>" href="<?php echo e(route('multibranch.branches.index')); ?>"><?php echo e(__('Branch List')); ?></a>
                    </li>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.roles.index', 'business.roles.edit', 'business.roles.create') ? 'active' : ''); ?>" href="<?php echo e(route('business.roles.index')); ?>"><?php echo e(__('Role & permissions')); ?></a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['stocks.read', 'expired-products.read'])): ?>
            <li class="dropdown <?php echo e(Request::routeIs('business.stocks.index','business.expired-products.index') ? 'active' : ''); ?>">
                <a href="#">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/stocklist.svg')); ?>">
                    </span>
                    <?php echo e(__('Stock List')); ?>

                </a>
                <ul>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'stocks.read')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.stocks.index') && !request('alert_qty')  ? 'active' : ''); ?>" href="<?php echo e(route('business.stocks.index')); ?>"><?php echo e(__('All Stock')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'stocks.read')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.stocks.index') && request('alert_qty') ? 'active' : ''); ?>" href="<?php echo e(route('business.stocks.index', ['alert_qty' => true])); ?>"><?php echo e(__('Low Stock')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'expired-products.read')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.expired-products.index') ? 'active' : ''); ?>" href="<?php echo e(route('business.expired-products.index')); ?>"><?php echo e(__('Expired Products')); ?></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['parties.read', 'parties.create'])): ?>
            <li class="dropdown <?php echo e((Request::routeIs('business.parties.index') && request('type') == 'Customer') || (Request::routeIs('business.parties.create') && request('type') == 'Customer') || (Request::routeIs('business.parties.edit') && request('type') == 'Customer') ? 'active' : ''); ?>">
                <a href="#">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/customer.svg')); ?>">

                    </span>
                    <?php echo e(__('Customers')); ?>

                </a>
                <ul>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'parties.read')): ?>
                    <li><a class="<?php echo e(Request::routeIs('business.parties.index') && request('type') == 'Customer' ? 'active' : ''); ?>" href="<?php echo e(route('business.parties.index', ['type' => 'Customer'])); ?>"><?php echo e(__('All Customers')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'parties.create')): ?>
                    <li><a class="<?php echo e(Request::routeIs('business.parties.create') && request('type') == 'Customer' ? 'active' : ''); ?>" href="<?php echo e(route('business.parties.create', ['type' => 'Customer'])); ?>"><?php echo e(__('Add Customer')); ?></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['parties.read', 'parties.create'])): ?>
            <li class="dropdown <?php echo e((Request::routeIs('business.parties.index') && request('type') == 'Supplier') || (Request::routeIs('business.parties.create') && request('type') == 'Supplier') || (Request::routeIs('business.parties.edit') && request('type') == 'Supplier') ? 'active' : ''); ?>">
                <a href="#">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/supplier.svg')); ?>">

                    </span>
                    <?php echo e(__('Suppliers')); ?>

                </a>
                <ul>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'parties.read')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.parties.index') && request('type') == 'Supplier' ? 'active' : ''); ?>" href="<?php echo e(route('business.parties.index', ['type' => 'Supplier'])); ?>"><?php echo e(__('All Suppliers')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'parties.create')): ?>
                    <li>
                        <a class="<?php echo e(Request::routeIs('business.parties.create') && request('type') == 'Supplier' ? 'active' : ''); ?>" href="<?php echo e(route('business.parties.create', ['type' => 'Supplier'])); ?>"><?php echo e(__('Add Supplier')); ?></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['incomes.read', 'income-categories.read'])): ?>
                <li
                    class="dropdown <?php echo e(Request::routeIs('business.incomes.index', 'business.income-categories.index') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/income.svg')); ?>">
                        </span>
                        <?php echo e(__('Incomes')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'incomes.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.incomes.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.incomes.index')); ?>"><?php echo e(__('Income')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'income-categories.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.income-categories.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.income-categories.index')); ?>"><?php echo e(__('Income Category')); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['expenses.read', 'expense-categories.read'])): ?>
                <li
                    class="dropdown <?php echo e(Request::routeIs('business.expense-categories.index', 'business.expenses.index') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/expenses.svg')); ?>">
                        </span>
                        <?php echo e(__('Expenses')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'expenses.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.expenses.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.expenses.index')); ?>"><?php echo e(__('Expense')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'expense-categories.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.expense-categories.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.expense-categories.index')); ?>"><?php echo e(__('Expense Category')); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'vats.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.vats.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.vats.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/subscription.svg')); ?>">
                    </span>
                    <?php echo e(__('Tax Setting')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'dues.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.dues.index', 'business.collect.dues') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.dues.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/duelist.svg')); ?>">
                    </span>
                    <?php echo e(__('Due List')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'dues.read')): ?>
            <li class="<?php echo e((Request::routeIs('business.party.dues') && request('type') == 'Customer') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.party.dues', ['type' => 'Customer'])); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/customer-due.svg')); ?>">
                    </span>
                    <?php echo e(__('Customer Due')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'dues.read')): ?>
            <li class="<?php echo e((Request::routeIs('business.party.dues') && request('type') == 'Supplier') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.party.dues', ['type' => 'Supplier'])); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/supplier-due.svg')); ?>">
                    </span>
                    <?php echo e(__('Supplier Due')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'subscriptions.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.subscriptions.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.subscriptions.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <img src="<?php echo e(asset('assets/images/sidebar/subscription.svg')); ?>">
                    </span>
                    <?php echo e(__('Subscriptions')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'loss-profits.read')): ?>
                <li class="<?php echo e(Request::routeIs('business.loss-profits.index') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('business.loss-profits.index')); ?>" class="active">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/loss-profit.svg')); ?>">

                        </span>
                        <?php echo e(__('Profit & Loss List')); ?>

                    </a>
                </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'payment-types.read')): ?>
                <li class="<?php echo e(Request::routeIs('business.payment-types.index') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('business.payment-types.index')); ?>" class="active">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/payment-type.svg')); ?>">
                        </span>
                        <?php echo e(__('Payment Type')); ?>

                    </a>
                </li>
            <?php endif; ?>

            <?php if(moduleCheck('HrmAddon')): ?>
              <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['department.read', 'designations.read', 'shifts.read', 'employees.read', 'leave-types.read', 'leaves.read', 'holidays.read', 'attendances.read', 'payrolls.read', 'attendance-reports.read', 'payroll-reports.read', 'leave-reports.read'])): ?>
                <li class="dropdown <?php echo e(Request::routeIs('hrm.department.index', 'hrm.designations.index', 'hrm.shifts.index', 'hrm.employees.index', 'hrm.employees.create', 'hrm.employees.edit', 'hrm.leave-types.index', 'hrm.leaves.index', 'hrm.holidays.index', 'hrm.attendances.index', 'hrm.payrolls.index', 'hrm.attendance-reports.index','hrm.leave-reports.index','hrm.payroll-reports.index') ? 'active' : ''); ?>">
                    <a class="position-relative" href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/hrm.svg')); ?>">
                        </span>
                        <?php echo e(__('HRM')); ?>

                        <?php if(env('DEMO_MODE')): ?>
                        <sup class="badge bg-warning position-absolute side-bar-addon-3">Add-On</sup>
                        <?php endif; ?>
                    </a>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'department.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.department.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.department.index')); ?>"><?php echo e(__('Department')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'designations.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.designations.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.designations.index')); ?>"><?php echo e(__('Designation')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'shifts.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.shifts.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.shifts.index')); ?>"><?php echo e(__('Shift')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'employees.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.employees.index', 'hrm.employees.create', 'hrm.employees.edit') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.employees.index')); ?>"><?php echo e(__('Employee')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['leave-types.read', 'leaves.read'])): ?>
                    <ul>
                        <li class="dropdown <?php echo e(Request::routeIs('hrm.leave-types.index', 'hrm.leaves.index') ? 'active' : ''); ?>">
                            <a href=""><?php echo e(__('Leave Request')); ?></a>
                            <ul>
                                <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'leave-types.read')): ?>
                                <li>
                                    <a class="<?php echo e(Request::routeIs('hrm.leave-types.index') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('hrm.leave-types.index')); ?>"><?php echo e(__('Leave Type')); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'leaves.read')): ?>
                                <li>
                                    <a class="<?php echo e(Request::routeIs('hrm.leaves.index') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('hrm.leaves.index')); ?>"><?php echo e(__('Leave')); ?></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'holidays.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.holidays.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.holidays.index')); ?>"><?php echo e(__('Holiday')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'attendances.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.attendances.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.attendances.index')); ?>"><?php echo e(__('Attendance')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'payrolls.read')): ?>
                    <ul>
                        <li>
                            <a class="<?php echo e(Request::routeIs('hrm.payrolls.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('hrm.payrolls.index')); ?>"><?php echo e(__('Payroll')); ?></a>
                        </li>
                    </ul>
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['attendance-reports.read', 'payroll-reports.read', 'leave-reports.read'])): ?>
                    <ul>
                        <li class="dropdown <?php echo e(Request::routeIs('hrm.attendance-reports.index', 'hrm.payroll-reports.index','hrm.leave-reports.index') ? 'active' : ''); ?>">
                            <a href=""><?php echo e(__('Reports')); ?></a>
                            <ul>
                                <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'attendance-reports.read')): ?>
                                <li>
                                    <a class="<?php echo e(Request::routeIs('hrm.attendance-reports.index') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('hrm.attendance-reports.index')); ?>"><?php echo e(__('Attendance')); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'payroll-reports.read')): ?>
                                <li>
                                    <a class="<?php echo e(Request::routeIs('hrm.payroll-reports.index') ? 'active' : ''); ?>"
                                        href="<?php echo e(route('hrm.payroll-reports.index')); ?>"><?php echo e(__('Payroll')); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'leave-reports.read')): ?>
                                <li>
                                    <a class="<?php echo e(Request::routeIs('hrm.leave-reports.index') ? 'active' : ''); ?>" href="<?php echo e(route('hrm.leave-reports.index')); ?>"><?php echo e(__('Leave')); ?></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['sale-reports.read', 'sale-return-reports.read', 'purchase-reports.read', 'purchase-return-reports.read', 'vat-reports.read', 'income-reports.read', 'expense-reports.read', 'loss-profits-details.read', 'stock-reports.read', 'due-reports.read', 'supplier-due-reports.read', 'loss-profit-reports.read', 'transaction-history-reports.read', 'subscription-reports.read', 'expired-product-reports.read'])): ?>
                <li class="dropdown <?php echo e(Request::routeIs('business.income-reports.index', 'business.expense-reports.index', 'business.stock-reports.index', 'business.loss-profit-reports.index', 'business.sale-reports.index', 'business.purchase-reports.index', 'business.due-reports.index', 'business.sale-return-reports.index', 'business.purchase-return-reports.index', 'business.supplier-due-reports.index', 'business.transaction-history-reports.index', 'business.subscription-reports.index', 'business.expired-product-reports.index','business.vat-reports.index', 'business.loss-profit-reports.details') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/Report.svg')); ?>">

                        </span>
                        <?php echo e(__('Reports')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'sale-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.sale-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.sale-reports.index')); ?>"><?php echo e(__('Sale')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'sale-return-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.sale-return-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.sale-return-reports.index')); ?>"><?php echo e(__('Sale Return')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'purchase-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.purchase-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.purchase-reports.index')); ?>"><?php echo e(__('Purchase')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'purchase-return-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.purchase-return-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.purchase-return-reports.index')); ?>"><?php echo e(__('Purchase Return')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'vat-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.vat-reports.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('business.vat-reports.index')); ?>"><?php echo e(__('Tax Report')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'income-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.income-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.income-reports.index')); ?>"><?php echo e(__('Income')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'expense-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.expense-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.expense-reports.index')); ?>"><?php echo e(__('Expense')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'loss-profits-details.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.loss-profit-reports.details') ? 'active' : ''); ?>"
                               href="<?php echo e(route('business.loss-profit-reports.details')); ?>"><?php echo e(__('Loss/Profit Details')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'stock-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.stock-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.stock-reports.index')); ?>"><?php echo e(__('Current Stock')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'due-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.due-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.due-reports.index')); ?>"><?php echo e(__('Customer Due')); ?></a></li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'supplier-due-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.supplier-due-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.supplier-due-reports.index')); ?>"><?php echo e(__('Supplier Due')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'loss-profit-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.loss-profit-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.loss-profit-reports.index')); ?>"><?php echo e(__('Loss & Profit')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'transaction-history-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.transaction-history-reports.index') ? 'active' : ''); ?>"
                                href="<?php echo e(route('business.transaction-history-reports.index')); ?>"><?php echo e(__('Transaction')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'subscription-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.subscription-reports.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('business.subscription-reports.index')); ?>"><?php echo e(__('Subscription Report')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'expired-product-reports.read')): ?>
                        <li><a class="<?php echo e(Request::routeIs('business.expired-product-reports.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('business.expired-product-reports.index')); ?>"><?php echo e(__('Expired Product')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php
                            $custom_report_modules = [];
                            if (class_exists(\Modules\CustomReportsAddon\App\Models\CustomReport::class)) {
                                $custom_report_modules = \Modules\CustomReportsAddon\App\Models\CustomReport::where('business_id', auth()->user()->business_id)
                                    ->where('status', 1)
                                    ->get();
                            }
                        ?>
                        <?php if(moduleCheck('CustomReportsAddon') && !empty($custom_report_modules)): ?>
                            <?php $__currentLoopData = $custom_report_modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom_report_module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="<?php echo e($custom_report_module->slug == request()->route('slug') ? 'active' : ''); ?>" href="<?php echo e(route('business.custom-reports.show', $custom_report_module->slug)); ?>">
                                        <?php echo e($custom_report_module->name); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if(moduleCheck('CustomReportsAddon')): ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['custom-reports.read', 'custom-reports.create'])): ?>
                <li class="dropdown <?php echo e(Request::routeIs('business.custom-reports.index', 'business.custom-reports.create') ? 'active' : ''); ?>">
                    <a href="#">
                        <span class="sidebar-icon">
                            <img src="<?php echo e(asset('assets/images/sidebar/Report.svg')); ?>">
                        </span>
                        <?php echo e(__('Custom Reports')); ?></a>
                    <ul>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'custom-reports.create')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.custom-reports.create') ? 'active' : ''); ?>" href="<?php echo e(route('business.custom-reports.create')); ?>"><?php echo e(__('Add New')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'custom-reports.read')): ?>
                        <li>
                            <a class="<?php echo e(Request::routeIs('business.custom-reports.index') ? 'active' : ''); ?>" href="<?php echo e(route('business.custom-reports.index')); ?>"><?php echo e(__('View List')); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php endif; ?>

            <?php if(moduleCheck('CustomDomainAddon')): ?>
             <?php if (\Illuminate\Support\Facades\Blade::check('usercanany', ['domains.read', 'domains.read'])): ?>
                <li class="<?php echo e(Request::routeIs('business.domains.index') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('business.domains.index')); ?>" class="active">
                        <span class="sidebar-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.0343 6.47825H17.183C15.8567 3.78589 13.1445 2.04377 10.1354 1.98438H9.87802C6.8689 2.04377 4.15674 3.76609 2.83035 6.47825H1.97909C1.306 6.47825 0.771484 7.01277 0.771484 7.68586V12.2985C0.771484 12.9716 1.306 13.5061 1.97909 13.5061H2.83035C4.15674 16.1985 6.8689 17.9406 9.87802 18H10.1552C13.1643 17.9406 15.8765 16.2183 17.2028 13.5061H18.0541C18.7272 13.5061 19.2617 12.9716 19.2617 12.2985V7.70566C19.2617 7.03256 18.7074 6.49805 18.0343 6.47825ZM6.45317 6.47825C7.10647 4.35999 8.31407 2.93462 9.66026 2.71686V6.47825H6.45317ZM10.3531 2.71686C11.6795 2.93462 12.8871 4.35999 13.5602 6.47825H10.3531V2.71686ZM14.2729 6.47825C13.8572 5.05288 13.2237 3.88487 12.4516 3.11279C14.1195 3.69185 15.5746 4.91925 16.411 6.47825H14.2729ZM7.56179 3.11279C6.78972 3.88487 6.15622 5.05288 5.74049 6.47825H3.58263C4.45369 4.9143 5.85927 3.7265 7.56179 3.11279ZM3.58263 13.5061H5.72069C6.13642 14.9513 6.76992 16.0995 7.542 16.8716C5.85927 16.2777 4.45369 15.0899 3.58263 13.5061ZM10.3531 17.2873V13.5259H13.5602C12.8871 15.6442 11.6795 17.0696 10.3531 17.2873ZM9.66026 17.2873C8.33387 17.0696 7.12626 15.6442 6.45317 13.5259H9.66026V17.2873ZM16.1536 13.9219C15.2677 15.2779 13.9562 16.3717 12.412 16.8914C13.1841 16.1193 13.8176 14.9513 14.2333 13.5259H16.3714C16.3714 13.5259 16.2476 13.7734 16.1536 13.9219ZM18.5688 12.2985C18.5688 12.5757 18.3313 12.8132 18.0541 12.8132H1.95929C1.68214 12.8132 1.44458 12.5757 1.44458 12.2985V7.70566C1.44458 7.4285 1.68214 7.19094 1.95929 7.19094H18.0541C18.3313 7.19094 18.5688 7.4285 18.5688 7.70566V12.2985Z" fill="white"/>
                                <path d="M6.65198 8.47784C6.47381 8.39865 6.27584 8.47784 6.19665 8.65601L5.44437 10.2793L4.92966 8.97276C4.87027 8.83418 4.75149 8.75499 4.61291 8.75499C4.47433 8.75499 4.33575 8.83418 4.29616 8.97276L3.78144 10.2793L3.04896 8.65601C2.96977 8.47784 2.7718 8.39865 2.59363 8.47784C2.41546 8.55703 2.33627 8.75499 2.41546 8.93317L3.48449 11.3088C3.54388 11.4276 3.66266 11.5068 3.80124 11.5068C3.93982 11.5068 4.0586 11.4078 4.11799 11.289L4.61291 10.0418L5.10783 11.289C5.16722 11.4276 5.286 11.5068 5.42458 11.5068C5.56316 11.5068 5.68194 11.4276 5.74133 11.3088L6.81035 8.93317C6.88954 8.77479 6.83015 8.55703 6.65198 8.47784ZM12.0565 8.47784C11.8783 8.39865 11.6804 8.47784 11.6012 8.65601L10.8687 10.2793L10.354 8.97276C10.2946 8.83418 10.1758 8.75499 10.0372 8.75499C9.89866 8.75499 9.76008 8.83418 9.72049 8.97276L9.20577 10.2793L8.47329 8.65601C8.3941 8.47784 8.19613 8.39865 8.01796 8.47784C7.83979 8.55703 7.7606 8.75499 7.83979 8.93317L8.90882 11.3088C8.96821 11.4276 9.08699 11.5068 9.22557 11.5068C9.36414 11.5068 9.48292 11.4078 9.54232 11.289L10.0372 10.0418L10.5322 11.289C10.5915 11.4276 10.7103 11.5068 10.8489 11.5068C10.9875 11.5068 11.1063 11.4276 11.1657 11.3088L12.2347 8.93317C12.3139 8.77479 12.2347 8.55703 12.0565 8.47784ZM17.4808 8.47784C17.3027 8.39865 17.1047 8.47784 17.0255 8.65601L16.293 10.2793L15.7783 8.97276C15.7189 8.83418 15.6001 8.75499 15.4616 8.75499C15.323 8.75499 15.1844 8.83418 15.1448 8.97276L14.6301 10.2793L13.8976 8.65601C13.8184 8.47784 13.6205 8.39865 13.4423 8.47784C13.2641 8.55703 13.1849 8.75499 13.2641 8.93317L14.3331 11.3088C14.3925 11.4276 14.5113 11.5068 14.6499 11.5068C14.7885 11.5068 14.9073 11.4078 14.9666 11.289L15.4616 10.0418L15.9565 11.289C16.0159 11.4276 16.1347 11.5068 16.2732 11.5068C16.4118 11.5068 16.5306 11.4276 16.59 11.3088L17.659 8.93317C17.7382 8.77479 17.659 8.55703 17.4808 8.47784Z" fill="white"/>
                            </svg>
                        </span>
                        <?php echo e(__('My Domains')); ?>

                    </a>
                </li>
             <?php endif; ?>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'manage-settings.read')): ?>
            <li class="<?php echo e(Request::routeIs('business.manage-settings.index', 'business.currencies.index', 'business.currencies.create', 'business.currencies.edit', 'business.notifications.index','business.settings.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('business.manage-settings.index')); ?>" class="active">
                    <span class="sidebar-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 6.24997C7.93205 6.24997 6.25005 7.93197 6.25005 9.99997C6.25005 12.068 7.93205 13.75 10 13.75C12.068 13.75 13.75 12.068 13.75 9.99997C13.75 7.93197 12.068 6.24997 10 6.24997ZM10 12.25C8.75905 12.25 7.75005 11.241 7.75005 9.99997C7.75005 8.75897 8.75905 7.74997 10 7.74997C11.241 7.74997 12.25 8.75897 12.25 9.99997C12.25 11.241 11.241 12.25 10 12.25ZM19.2081 11.953C18.5141 11.551 18.082 10.803 18.081 9.99997C18.08 9.19897 18.5091 8.45198 19.2121 8.04498C19.7271 7.74598 19.9031 7.08296 19.6051 6.56696L17.9331 3.68097C17.6351 3.16597 16.972 2.98898 16.456 3.28598C15.757 3.68898 14.8881 3.68898 14.1871 3.28198C13.4961 2.88098 13.0661 2.13598 13.0661 1.33698C13.0661 0.737975 12.578 0.250977 11.979 0.250977H8.02403C7.42403 0.250977 6.93706 0.737975 6.93706 1.33698C6.93706 2.13598 6.50704 2.88097 5.81404 3.28397C5.11504 3.68897 4.24705 3.68996 3.54805 3.28696C3.03105 2.98896 2.36906 3.16698 2.07106 3.68198L0.397049 6.57098C0.0990486 7.08598 0.276035 7.74796 0.796035 8.04996C1.48904 8.45096 1.92105 9.19796 1.92305 9.99896C1.92505 10.801 1.49504 11.55 0.793045 11.957C0.543045 12.102 0.363047 12.335 0.289047 12.615C0.215047 12.894 0.253056 13.185 0.398056 13.436L2.06905 16.32C2.36705 16.836 3.03005 17.015 3.54805 16.716C4.24705 16.313 5.11405 16.314 5.80305 16.713L5.80504 16.714C5.80804 16.716 5.81105 16.718 5.81505 16.72C6.50605 17.121 6.93504 17.866 6.93404 18.666C6.93404 19.265 7.42103 19.752 8.02003 19.752H11.979C12.578 19.752 13.065 19.265 13.065 18.667C13.065 17.867 13.495 17.122 14.189 16.719C14.887 16.314 15.755 16.312 16.455 16.716C16.971 17.014 17.6331 16.837 17.9321 16.322L19.606 13.433C19.903 12.916 19.7261 12.253 19.2081 11.953ZM16.831 15.227C15.741 14.752 14.476 14.817 13.434 15.42C12.401 16.019 11.7191 17.078 11.5871 18.25H8.41005C8.28005 17.078 7.59603 16.017 6.56303 15.419C5.52303 14.816 4.25605 14.752 3.16905 15.227L1.89305 13.024C2.84805 12.321 3.42504 11.193 3.42104 9.99298C3.41804 8.80098 2.84204 7.68097 1.89204 6.97797L3.16905 4.77396C4.25705 5.24796 5.52405 5.18396 6.56605 4.57996C7.59805 3.98196 8.28003 2.92198 8.41203 1.75098H11.5871C11.7181 2.92298 12.4011 3.98197 13.4361 4.58197C14.475 5.18497 15.742 5.24896 16.831 4.77496L18.108 6.97797C17.155 7.67997 16.579 8.80597 16.581 10.004C16.582 11.198 17.1581 12.32 18.1091 13.025L16.831 15.227Z" fill="white" />
                        </svg>
                    </span>
                    <?php echo e(__('Settings')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'download-apk.read')): ?>
            <li>
                <a href="<?php echo e(get_option('general')['app_link'] ?? ''); ?>" target="_blank" class="active">
                    <span class="sidebar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7 .1 5.4 .2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z" />
                        </svg>
                    </span>
                    <?php echo e(__('Download Apk')); ?>

                </a>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'subscriptions.read')): ?>
            <li>
                <div class="sub-plan">
                    <img src="<?php echo e(asset('assets/images/sidebar/plan-icon.svg')); ?>">
                </div>
            </li>
            <?php endif; ?>

            <?php if (\Illuminate\Support\Facades\Blade::check('usercan', 'subscriptions.read')): ?>
            <li>
                <div class="lg-sub-plan">
                    <div id="sidebar_plan" class=" sidebar-free-plan d-flex align-items-center justify-content-between p-3 flex-column">
                        <div class="text-center">
                            <?php if(plan_data() ?? false): ?>

                                <h3>
                                    <?php echo e(plan_data()['plan']['subscriptionName'] ?? ''); ?>

                                </h3>
                                <h5>
                                    <?php echo e(__('Expired')); ?>: <?php echo e(formatted_date(plan_data()['will_expire'] ?? '')); ?>

                                </h5>
                                <?php else: ?>
                                <h3><?php echo e(__('No Active Plan')); ?></h3>
                                <h5><?php echo e(__('Please subscribe to a plan')); ?></h5>
                            <?php endif; ?>

                        </div>
                        <a href="<?php echo e(route('business.subscriptions.index')); ?>" class="btn upgrate-btn fw-bold"><?php echo e(__('Upgrade Now')); ?></a>
                    </div>
                </div>
            </li>
            <?php endif; ?>

        </ul>
    </div>
</nav>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/business/partials/side-bar.blade.php ENDPATH**/ ?>