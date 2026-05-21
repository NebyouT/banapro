<!-- create free account Modal Start -->
<div class="modal fade" id="createFreeAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body create-account-body  pt-0">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="create-account-logo" src="<?php echo e(asset(get_option('general')['common_header_logo'] ?? 'assets/img/icon/1.svg')); ?>" alt="">
                </div>
                <h4 class="text-center"><?php echo e(__('Create an Free Account!')); ?></h4>
                <p class="text-center"><?php echo e(__('Hey, Enter Your details to get Sign Up to your account')); ?></p>

                <form action="<?php echo e(route('register')); ?>" method="post" class="sign_up_form">
                    <?php echo csrf_field(); ?>

                    <div class="">
                        <div class="mt-2 ">
                            <label class="custom-label"><?php echo e(__('Email')); ?></label>
                            <input type="email" placeholder="<?php echo e(__('Enter Email Address')); ?>" class="form-control" name="email" />
                        </div>
                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Password')); ?></label>
                            <input type="hidden" value="" id="plan_id" name="plan_id">
                            <input type="password" placeholder="<?php echo e(__('Enter Password')); ?>" class="form-control" name="password" />
                        </div>
                    </div>
                    <button type="submit" class="submit-btn btn btn-primary text-white mt-4 btn-outline-danger" type="submit">
                        <?php echo e(__('Sign Up')); ?>

                    </button>
                </form>

                <?php if(moduleCheck('SocialLoginAddon')): ?>
                <div class="d-flex align-items-center ">
                    <hr class="flex-grow-1 border-1 border-secondary-subtle" />
                    <span class="px-3 text-muted">Or Continue with</span>
                    <hr class="flex-grow-1 border-1 border-secondary-subtle" />
                </div>

                <div class="social-login my-3">
                    <div class=" d-flex align-items-center justify-content-center">
                        <a href="<?php echo e(url('login/twitter')); ?>" class="login-social x-login w-100 text-center">
                            <img src="<?php echo e('assets/img/icon/X.jpg'); ?>" alt="Not found">
                            Log in with X
                        </a>
                    </div>
                    <div class=" d-flex align-items-center justify-content-center">
                        <a href="" class="login-social google-login w-100 text-center">
                            <img src="<?php echo e('assets/img/icon/google.svg'); ?>" alt="">
                            Log in with Google
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <p class="text-center m-2  have-account">Already have an Account? <a href="<?php echo e(route('login')); ?>">Log In</a></p>
            </div>
        </div>
    </div>
</div>
<!-- create free account Modal end -->

<!--Verify Modal Start -->
<div class="modal fade" id="verifymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content verify-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body verify-modal-body  text-center">

                <h4 class="mb-0"><?php echo e(__('Email Verification')); ?></h4>
                <p class="des p-8-0 pb-3"><?php echo e(__('we sent an OTP in your email address')); ?> <br>
                    <span id="dynamicEmail"></span>
                </p>
                <form action="<?php echo e(route('otp-submit')); ?>" method="post" class="verify_form">
                    <?php echo csrf_field(); ?>
                    <div class="code-input pin-container">
                        <input class="pin-input otp-input" id="pin-1" type="number" name="otp[]" maxlength="1">
                        <input class="pin-input otp-input" id="pin-2" type="number" name="otp[]" maxlength="1">
                        <input class="pin-input otp-input" id="pin-3" type="number" name="otp[]" maxlength="1">
                        <input class="pin-input otp-input" id="pin-4" type="number" name="otp[]" maxlength="1">
                        <input class="pin-input otp-input" id="pin-5" type="number" name="otp[]" maxlength="1">
                        <input class="pin-input otp-input" id="pin-6" type="number" name="otp[]" maxlength="1">
                    </div>

                    <p class="des p-24-0 pt-2">
                        <?php echo e(__('Code send in')); ?> <span id="countdown" class="countdown"></span>
                        <span class="reset text-primary cursor-pointer" id="otp-resend" data-route="<?php echo e(route('otp-resend')); ?>"><?php echo e(__('Resend code')); ?></span>
                    </p>
                    <button class="verify-btn btn btn-outline-danger submit-btn"><?php echo e(__('Verify')); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Verify Modal end -->

<!-- setup profile Modal Start -->
<div class="modal fade" id="setupAccountModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body setup-account-body  pt-0">
                <h4 class="text-center mb-3"><?php echo e(__('Setup Your Profile')); ?></h4>
                <form action="<?php echo e(route('business-setup')); ?>" method="post" class="business_setup_form">
                    <?php echo csrf_field(); ?>

                    <div class="">
                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Company/Business Name')); ?> <span class="text-danger">*</span></label>
                            <input type="text" placeholder="<?php echo e(__('Enter company/business name')); ?>" class="form-control" name="companyName" required />
                        </div>

                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Business Category')); ?></label>
                            <select class="form-control business-categories" name="business_category_id">
                                <option value=""><?php echo e(__('Select a category')); ?></option>
                            </select>
                        </div>

                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Opening Balance')); ?></label>
                            <input type="number" step="any" placeholder="<?php echo e(__('Ex: $500')); ?>" class="form-control" name="shopOpeningBalance" />
                        </div>

                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Phone')); ?></label>
                            <input type="text" placeholder="<?php echo e(__('Enter phone number')); ?>" class="form-control" name="phoneNumber" />
                        </div>

                        <div class="mt-2">
                            <label class="custom-label"><?php echo e(__('Company Address')); ?></label>
                            <textarea placeholder="<?php echo e(__('Enter company address')); ?>" class="form-control" name="address"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn btn btn-primary text-white mt-4  btn-outline-danger" type="submit">
                        <?php echo e(__('Continue')); ?>

                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- setup profile Modal end -->

<!-- success Modal Start -->
<div class="modal fade" id="successModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body success-modal-body text-center">
                <img src="<?php echo e(asset(get_option('general')['common_header_logo'] ?? 'assets/img/icon/1.svg')); ?>" alt="">
                <h4><?php echo e(__('Successfully!')); ?></h4>
                <p><?php echo e(__('Congratulations, Your account has been')); ?> <br> <?php echo e(__('successfully created')); ?></p>
                <a href="<?php echo e(get_option('general')['app_link'] ?? ''); ?>" target="_blank" class="cancel-btn btn btn-outline-danger"><?php echo e(__('Download Apk')); ?></a>
            </div>
        </div>
    </div>
</div>
<!--success Modal end -->
<?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/web/components/signup.blade.php ENDPATH**/ ?>