<?php $__env->startSection('title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="footer">
        <div class="footer-logo w-100 mx-4">
            <img src="<?php echo e(asset(get_option('general')['login_page_logo'] ?? '')); ?>" alt="">
        </div>
        <div class="mybazar-login-section">
            <div class="mybazar-login-avatar">
                <img src="<?php echo e(asset(get_option('general')['login_page_image'] ?? 'assets/images/login/login.png')); ?>"
                    alt="">
            </div>
            <div class="mybazar-login-wrapper">
                <div class="login-wrapper">
                    <div class="login-body w-100">
                        <h2><?php echo e(__('Welcome to')); ?><span><?php echo e(__(env('APP_NAME'))); ?></span></h2>
                        <h6><?php echo e(__('Welcome back, Please login in to your account')); ?></h6>
                        <form method="POST" action="<?php echo e(route('login')); ?>" class="login_form">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <span><img src="<?php echo e(asset('assets/images/icons/user.png')); ?>" alt="img"></span>
                                <input type="email" name="email" class="form-control email"
                                    placeholder="<?php echo e(__('Enter your Email')); ?>">
                            </div>

                            <div class="input-group">
                                <span><img src="<?php echo e(asset('assets/images/icons/lock.png')); ?>" alt="img"></span>
                                <span class="hide-pass">
                                    <img src="<?php echo e(asset('assets/images/icons/Hide.svg')); ?>" alt="img">
                                    <img src="<?php echo e(asset('assets/images/icons/show.svg')); ?>" alt="img">
                                </span>
                                <input type="password" name="password" class="form-control password"
                                    placeholder="<?php echo e(__('Password')); ?>">
                            </div>

                            <div class="mt-lg-3 mb-0 forget-password">
                                <label class="custom-control-label">
                                    <input type="checkbox" name="remember" class="custom-control-input">
                                    <span><?php echo e(__('Remember me')); ?></span>
                                </label>
                                <a href="<?php echo e(route('password.request')); ?>"><?php echo e('Forgot Password?'); ?></a>
                            </div>

                            <button type="submit" class="btn login-btn submit-btn"><?php echo e(__('Log In')); ?></button>

                            <div class="row d-flex flex-wrap mt-2 justify-content-between">
                                <div class="col">
                                    <a href="<?php echo e(route('home')); ?>"><?php echo e(__('Back to Home')); ?></a>
                                </div>
                                <div class="col text-end">
                                    <a class="text-primary" href="<?php echo e(route('plan.index')); ?>"><?php echo e(__('Create an account.')); ?></a>
                                </div>
                            </div>
                        </form>

                        <?php if(moduleCheck('SocialLoginAddon')): ?>
                        <div class="d-flex align-items-center mt-3 ">
                            <hr class="flex-grow-1 border-1 border-secondary-subtle" />
                            <span class="px-3 text-muted">Or Continue with</span>
                            <hr class="flex-grow-1 border-1 border-secondary-subtle" />
                        </div>

                        <div class="social-login mt-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="<?php echo e(url('login/twitter')); ?>" class="login-social w-100 text-center">
                                    <img src="<?php echo e('assets/img/icon/X.jpg'); ?>" alt="Not found">
                                    Log in with X
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="<?php echo e(url('login/google')); ?>" class="login-social w-100 text-center">
                                    <img src="<?php echo e('assets/img/icon/google.svg'); ?>" alt="Not found">
                                    Log in with Google
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" data-model="Login" id="auth">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <?php echo $__env->make('web.components.signup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/auth.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/auth/login.blade.php ENDPATH**/ ?>