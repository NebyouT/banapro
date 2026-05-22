<header class="main-header-section sticky-top">
    <div class="header-wrapper">
        <div class="header-left">
            <div class="sidebar-opner"><i class="fal fa-bars" aria-hidden="true"></i></div>
            <a target="_blank" class="text-custom-primary" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-globe me-1"></i>
                <?php echo e(__('View Website')); ?>

            </a>
        </div>
        <div class="header-middle"></div>
        <div class="header-right">
            <div class="language-change">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo e(asset('flags/' . languages()[app()->getLocale()]['flag'] . '.svg')); ?>" alt="" class="flag-icon me-2">
                        <?php echo e(languages()[app()->getLocale()]['name']); ?>

                    </button>
                    <ul class="dropdown-menu dropdown-menu-scroll">
                        <?php $__currentLoopData = languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="language-li">
                                <a class="dropdown-item" href="<?php echo e(request()->fullUrlWithQuery(['lang' => $key])); ?>">
                                    <img src="<?php echo e(asset('flags/' . $language['flag'] . '.svg')); ?>" alt="" class="flag-icon me-2">
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
            <?php if(auth()->user()->role == 'superadmin'): ?>
            <div class="notifications dropdown">
                <a href="#" class="dropdown-toggleer mt-1 me-3" data-bs-toggle="dropdown">
                    <i><img src="<?php echo e(asset('assets/images/icons/bel.svg')); ?>" alt=""></i>
                    <span class="bg-red"><?php echo e(auth()->user()->unreadNotifications ->count()); ?></span>
                </a>
                <div class="dropdown-menu">
                    <div class="notification-header">
                        <p><?php echo e(__('You Have')); ?> <strong><?php echo e(auth()->user()->unreadNotifications->count()); ?></strong> <?php echo e(__('new Notifications')); ?></p>
                        <a href="<?php echo e(route('admin.notifications.mtReadAll')); ?>" class="text-red"><?php echo e(__('Mark all Read')); ?></a>
                    </div>
                    <ul>
                        <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('admin.notifications.mtView', $notification->id)); ?>">
                                <strong><?php echo e(__($notification->data['message'] ?? '')); ?></strong>
                                <span><?php echo e($notification->created_at->diffForHumans()); ?></span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="notification-footer">
                        <a class="text-red" href="<?php echo e(route('admin.notifications.index')); ?>"><?php echo e(__('View all notifications')); ?></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="profile-info dropdown">
                <a href="#"  data-bs-toggle="dropdown">
                    <img src="<?php echo e(asset(Auth::user()->image ?? 'assets/images/icons/default-user.png')); ?>" alt="Profile">
                </a>
                <ul class="dropdown-menu">
                    <li> <a href="<?php echo e(url('cache-clear')); ?>"> <i class="far fa-undo"></i> <?php echo e(__('Clear cache')); ?></a></li>
                    <li> <a href="<?php echo e(route('admin.profiles.index')); ?>"> <i class="fal fa-user"></i> <?php echo e(__('My Profile')); ?></a></li>
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
    </div>
</header>
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/layouts/partials/header.blade.php ENDPATH**/ ?>