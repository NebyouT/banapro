<header class="main-header-section sticky-top d-print-none">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="sidebar-opner menu-opener"><i class="fal fa-bars" aria-hidden="true"></i></div>
            <a target="_blank" class="text-custom-primary view-website" href="<?php echo e(route('home')); ?>">
                <?php echo e(__('View Website')); ?>

                <i class="fas fa-chevron-double-right"></i>
            </a>

            <a class="pos-logo" href="javascript:void(0)"><img src="<?php echo e(asset(get_option('general')['common_header_logo'] ?? 'assets/images/logo/backend_logo.png')); ?>" alt="Logo"></a>
        </div>

        <div class=" d-flex align-items-center">
            <?php if(moduleCheck('MultiBranchAddon') && auth()->user()->active_branch_id): ?>
            <?php
                $branch = auth()->user()->active_branch;
            ?>
            <a class="d-flex align-items-center gap-1 main-branch-btn exit-branch-btn" href="javascript:void(0)" data-title="Are you sure you want to exit from <?php echo e($branch->name ?? ''); ?>?" data-exit-url="<?php echo e(route('multibranch.exit-branch', $branch->id ?? null)); ?>">
                <img src="<?php echo e(asset('assets/images/dashboard/main.svg')); ?>" alt="">
                <p>
                    <?php echo e($branch->name ?? ''); ?>

                </p>
            </a>
            <?php endif; ?>
            <div class="language-change">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="<?php echo e(asset('flags/' . languages()[app()->getLocale()]['flag'] . '.svg')); ?>"
                            alt="" class="flag-icon me-2">
                        <?php echo e(languages()[app()->getLocale()]['name']); ?>

                    </button>
                    <ul class="dropdown-menu dropdown-menu-scroll">
                        <?php $__currentLoopData = languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="language-li">
                                <a class="dropdown-item" href="<?php echo e(request()->fullUrlWithQuery(['lang' => $key])); ?>">
                                    <img src="<?php echo e(asset('flags/' . $language['flag'] . '.svg')); ?>" alt=""
                                        class="flag-icon me-2">
                                    <?php echo e($language['name']); ?>

                                </a>
                                <?php if(app()->getLocale() == $key): ?>
                                    <i class="fas fa-check language-check"></i>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="notifications dropdown">
                <a href="#" class="dropdown-toggleer mt-1 me-2" data-bs-toggle="dropdown">
                    <i><img src="<?php echo e(asset('assets/images/icons/bel.svg')); ?>" alt=""></i>
                    <span class="bg-red"><?php echo e(auth()->user()->unreadNotifications->count()); ?></span>
                </a>
                <div class="dropdown-menu notification-container">
                    <div class="notification-header ">
                        <a href="<?php echo e(route('business.notifications.mtReadAll')); ?>"
                            class="text-red"><?php echo e(__('Mark all Read')); ?></a>
                    </div>
                    <ul>
                        <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('business.notifications.mtView', $notification->id)); ?>">
                                    <strong><?php echo e(__($notification->data['message'] ?? '')); ?></strong>
                                    <span><?php echo e($notification->created_at->diffForHumans()); ?></span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="notification-footer">
                        <a class="text-red" href="<?php echo e(route('business.notifications.index')); ?>"><?php echo e(__('View all notifications')); ?></a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="profile-info dropdown">
                    <a href="#" data-bs-toggle="dropdown">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <div class="greet-name">
                                <p class="nav-greeting">Hello🖐</p>
                                <h6 class="nav-name">
                                    <?php echo e(auth()->user()->role == 'staff' ? (optional(auth()->user()->business)->companyName . ' [' . auth()->user()->name . ']')  : optional(auth()->user()->business)->companyName); ?>

                                </h6>
                            </div>
                            <img src="<?php echo e(asset(auth()->user()->image ?? 'assets/images/icons/default-user.png')); ?>" alt="Profile">
                        </div>
                    </a>
                    <div class=" business-profile bg-success">

                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo e(route('business.profiles.index')); ?>"> <i class="fal fa-user"></i>
                                    <?php echo e(__('My Profile')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="logoutButton">
                                    <i class="far fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                                    <form action="<?php echo e(route('logout')); ?>" method="post" id="logoutForm">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-opner menu-openerr"><i class="fal fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</header>

<?php $__env->startPush('modal'); ?>
    <div class="modal fade custom-modal" id="exitModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="<?php echo e(asset('assets/images/dashboard/main2.svg')); ?>" alt="">
                    <h5 class="exit-title">Are you sure you want to exit?</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn-no" data-bs-dismiss="modal">No</button>
                        <a href="javascript:void(0)" class="btn-yes exit-branch">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/business/partials/header.blade.php ENDPATH**/ ?>