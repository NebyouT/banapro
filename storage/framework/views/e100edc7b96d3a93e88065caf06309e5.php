

<?php $__env->startSection('title'); ?>
    <?php echo e(__('System Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>

<div class="erp-table-section system-settings">
    <div class="container-fluid">
        <div class="card ">
            <div class="card-bodys">

        <div class="table-header ">
            <div class="card-bodys">
                <div class="table-header mb-0 border-0 p-16">
                    <h4><?php echo e(__('Note :')); ?> <span class="custom-warning"><?php echo e(__("Don't Use Any Kind Of Space In The Input Fields")); ?></span></h4>
                </div>
            </div>
        </div>

        <div class="order-form-section mt-4 p-16">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="add-new-petty" role="tabpanel">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 mb-3">
                            <div class="cards-header shadow">
                                <div class="card-body">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="#app" id="home-tab4" class="add-report-btn active nav-link" data-bs-toggle="tab"><?php echo e(__('App')); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#Drivers" class="add-report-btn nav-link" data-bs-toggle="tab"><?php echo e(__('Drivers')); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#storage" class="add-report-btn nav-link" data-bs-toggle="tab"><?php echo e(__('Storage Settings')); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#mail-configuration" class="add-report-btn nav-link" data-bs-toggle="tab"><?php echo e(__('Mail Configuration')); ?></a>
                                        </li>
                                        <?php if(moduleCheck('SocialLoginAddon')): ?>
                                        <li class="nav-item">
                                            <a href="#social-login" class="add-report-btn nav-link" data-bs-toggle="tab"><?php echo e(__('Social Login')); ?> <sup class="badge bg-warning">Add-On</sup></a>
                                        </li>
                                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a href="#other" class="add-report-btn nav-link" data-bs-toggle="tab"><?php echo e(__('Others')); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="cards-header shadow">
                                <div class="card-body">
                                    <form action="<?php echo e(route('admin.system-settings.store')); ?>" method="post" class="ajaxform">
                                        <?php echo csrf_field(); ?>

                                        <div class="tab-content no-padding">
                                            <div class="tab-pane fade show active" id="app">
                                                <div class="form-group">
                                                    <label><?php echo e(__('APP_NAME')); ?></label>
                                                    <input type="text" name="APP_NAME" value="<?php echo e(env('APP_NAME') ?? ''); ?>"  required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('APP_KEY')); ?></label>
                                                    <input type="text" name="APP_KEY" value="<?php echo e(env('APP_KEY') ?? ''); ?>" required  class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('APP_DEBUG')); ?></label>
                                                    <div class="gpt-up-down-arrow position-relative">
                                                    <select class="form-control" required name="APP_DEBUG">
                                                        <option value="true" <?php if(env('APP_DEBUG') == true): echo 'selected'; endif; ?>><?php echo e(__('true (Developers Only)')); ?></option>
                                                        <option value="false" <?php if(env('APP_DEBUG') == false): echo 'selected'; endif; ?>><?php echo e(__('false')); ?></option>
                                                    </select>
                                                    <span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('APP_URL')); ?></label>
                                                    <input type="text" name="APP_URL" value="<?php echo e(env('APP_URL') ?? ''); ?>" required class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-group text-center mt-4">
                                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="mail-configuration">
                                                <div class="form-group">
                                                    <label for="QUEUE_MAIL" class="required"><?php echo e(__('QUEUE_MAIL')); ?></label>
                                                    <div class="gpt-up-down-arrow position-relative">
                                                    <select name="QUEUE_MAIL" id="QUEUE_MAIL" class="form-control">
                                                        <option <?php if(env('QUEUE_MAIL') == true): echo 'selected'; endif; ?> value="true"><?php echo e(__('true')); ?></option>
                                                        <option <?php if(env('QUEUE_MAIL') == false): echo 'selected'; endif; ?> value="false"><?php echo e(__('false')); ?></option>
                                                    </select>
                                                    <span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_DRIVER_TYPE')); ?></label>
                                                    <div class="gpt-up-down-arrow position-relative">
                                                        <select name="MAIL_DRIVER_TYPE" class="form-control" id="mail-driver-type-select">
                                                            <option value="MAIL_MAILER" <?php if(env('MAIL_DRIVER_TYPE') == 'MAIL_MAILER' ? 'selected' : ''): echo 'selected'; endif; ?>><?php echo e(__('MAIL MAILER')); ?></option>
                                                            <option value="MAIL_DRIVER" <?php if(env('MAIL_DRIVER_TYPE') == 'MAIL_DRIVER' ? 'selected' : ''): echo 'selected'; endif; ?>><?php echo e(__('MAIL DRIVER')); ?></option>
                                                        </select>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label id="mail-driver-label"><?php echo e(__('MAIL DRIVER')); ?></label>
                                                    <select name="MAIL_DRIVER" class="form-control">
                                                        <option <?php if(env('MAIL_DRIVER') == 'sendmail'): echo 'selected'; endif; ?> value="sendmail"><?php echo e(__('sendmail')); ?></option>
                                                        <option <?php if(env('MAIL_DRIVER') == 'smtp'): echo 'selected'; endif; ?> value="smtp"><?php echo e(__('smtp')); ?></option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_HOST')); ?></label>
                                                    <input type="text"  name="MAIL_HOST" value="<?php echo e(env('MAIL_HOST') ?? ''); ?>" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_PORT')); ?></label>
                                                    <input type="text"  name="MAIL_PORT" value="<?php echo e(env('MAIL_PORT') ?? ''); ?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_USERNAME')); ?></label>
                                                    <input type="text"   name="MAIL_USERNAME" value="<?php echo e(env('MAIL_USERNAME') ?? ''); ?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_PASSWORD')); ?></label>
                                                    <input type="text"   name="MAIL_PASSWORD" value="<?php echo e(env('DEMO_MODE') ? '....' : env('MAIL_PASSWORD')); ?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_ENCRYPTION')); ?></label>
                                                    <input type="text"   name="MAIL_ENCRYPTION" value="<?php echo e(env('MAIL_ENCRYPTION') ?? ''); ?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_FROM_ADDRESS')); ?></label>
                                                    <input type="text"   name="MAIL_FROM_ADDRESS" value="<?php echo e(env('MAIL_FROM_ADDRESS') ?? ''); ?>" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(__('MAIL_FROM_NAME')); ?></label>
                                                    <input type="text"   name="MAIL_FROM_NAME" value="<?php echo e(env('MAIL_FROM_NAME') ?? ''); ?>" class="form-control" >
                                                </div>

                                                <span><?php echo e(__('Note :')); ?> <span class="text-danger"><?php echo e(__('If you are using MAIL QUEUE after Changing The Mail Settings You Need To Restart Your Supervisor From Your Server')); ?></span></span><br>

                                                <span><?php echo e(__('QUEUE COMMAND Path :')); ?> <span class="text-danger"><?php echo e(__('/home/u186958312/domains/maanai.acnoo.com/public_html/maanai')); ?></span></span><br>
                                                <span><?php echo e(__('QUEUE COMMAND :')); ?> <span class="text-danger"><?php echo e(__('php artisan queue:work')); ?></span></span>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-group text-center mt-4">
                                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="Drivers">
                                                <div class="form-group">
                                                    <label for="CACHE_DRIVER"><?php echo e(__('CACHE_DRIVER')); ?></label>
                                                    <div class="gpt-up-down-arrow position-relative">
                                                    <select class="form-control" name="CACHE_DRIVER" required>
                                                        <option value="array" <?php if(env('CACHE_DRIVER') == 'array'): echo 'selected'; endif; ?>><?php echo e(__('Array (Low Performance)')); ?></option>
                                                        <option value="file" <?php if(env('CACHE_DRIVER', 'file') == 'file'): echo 'selected'; endif; ?>><?php echo e(__('File (Good Performance)')); ?></option>
                                                        <option value="memcached" <?php if(env('CACHE_DRIVER') == 'memcached'): echo 'selected'; endif; ?>><?php echo e(__("Memcached (Don't Enable If You Don't Have Memcached Extension)")); ?></option>
                                                        <option value="redis" <?php if(env('CACHE_DRIVER') == 'redis'): echo 'selected'; endif; ?>><?php echo e(__("Redis (Don't Enable If You Don't Have phpredis Extension)")); ?></option>
                                                    </select>
                                                    <span></span>
                                                    </div>

                                                    <small class="text-danger"><?php echo e(__('Recommended')); ?> <strong><?php echo e(__('Memcached or Redis')); ?></strong><?php echo e(__('Cache Driver For Height Performance Application And Optimize Call Database Query')); ?> </small>
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('QUEUE_CONNECTION')); ?></label>
                                                    <input type="text" required="" name="QUEUE_CONNECTION" class="form-control" value="<?php echo e(env('QUEUE_CONNECTION') ?? 'database'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('SESSION_DRIVER')); ?></label>
                                                    <input type="text" required="" name="SESSION_DRIVER" class="form-control" value="<?php echo e(env('SESSION_DRIVER') ?? 'file'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('SESSION_LIFETIME')); ?></label>
                                                    <input type="number" required="" name="SESSION_LIFETIME" class="form-control" value="<?php echo e(env('SESSION_LIFETIME') ?? 200); ?>">
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-group text-center mt-4">
                                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="storage">
                                                <h6><?php echo e(__('Storage Settings')); ?></h6>
                                                <div class="form-group">
                                                    <label><?php echo e(__('Storage Method')); ?></label>
                                                    <div class="gpt-up-down-arrow position-relative">
                                                    <select class="form-control" name="FILESYSTEM_DISK">
                                                        <option <?php if(env('FILESYSTEM_DISK') == 'public'): echo 'selected'; endif; ?> value="public"><?php echo e(__('public (uploads folder)')); ?></option>
                                                        <option <?php if(env('FILESYSTEM_DISK') == 's3'): echo 'selected'; endif; ?> value="s3"><?php echo e(__('AWS S3 Storage Bucket')); ?></option>
                                                        <option <?php if(env('FILESYSTEM_DISK') == 'wasabi'): echo 'selected'; endif; ?> value="wasabi"><?php echo e(__('Wasabi Storage Bucket')); ?></option>
                                                    </select>
                                                    <span></span>
                                                    </div>
                                                </div>

                                                <hr>
                                                <p class="custom-warning"><?php echo e(__('Fill up this credentials if you want to use AWS S3 Storage Bucket')); ?></p>
                                                <div class="form-group">
                                                    <label><?php echo e(__('AWS_ACCESS_KEY_ID')); ?></label>
                                                    <input type="text"  name="AWS_ACCESS_KEY_ID" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('AWS_SECRET_ACCESS_KEY')); ?></label>
                                                    <input type="text"  name="AWS_SECRET_ACCESS_KEY" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('AWS_DEFAULT_REGION')); ?></label>
                                                    <input type="text"  name="AWS_DEFAULT_REGION" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('AWS_BUCKET')); ?></label>
                                                    <input type="text"  name="AWS_BUCKET" class="form-control" value="">
                                                </div>
                                                <hr>
                                                <p class="custom-warning"><?php echo e(__('Fill up this credentials if you want to use Wasabi Storage Bucket')); ?></p>
                                                <div class="form-group">
                                                    <label><?php echo e(__('WAS_ACCESS_KEY_ID')); ?></label>
                                                    <input type="text"  name="WAS_ACCESS_KEY_ID" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('WAS_SECRET_ACCESS_KEY')); ?></label>
                                                    <input type="text"  name="WAS_SECRET_ACCESS_KEY" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('WAS_DEFAULT_REGION')); ?></label>
                                                    <input type="text"  name="WAS_DEFAULT_REGION" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('WAS_BUCKET')); ?></label>
                                                    <input type="text"  name="WAS_BUCKET" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label><?php echo e(__('WAS_ENDPOINT')); ?></label>
                                                    <input type="text"  name="WAS_ENDPOINT" class="form-control" value="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-group text-center mt-4">
                                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if(moduleCheck('SocialLoginAddon')): ?>
                                            <div class="tab-pane fade" id="social-login">
                                                <h5>Google Login Settings</h5>
                                                <div class="form-group">
                                                    <label><?php echo e(__('GOOGLE_CLIENT_ID')); ?></label>
                                                    <input type="text"  name="GOOGLE_CLIENT_ID" class="form-control" value="<?php echo e(env('DEMO_MODE') ? '*************************' : env('GOOGLE_CLIENT_ID')); ?>">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label><?php echo e(__('GOOGLE_CLIENT_SECRET')); ?></label>
                                                    <input type="text"  name="GOOGLE_CLIENT_SECRET" class="form-control" value="<?php echo e(env('DEMO_MODE') ? '*************************' : env('GOOGLE_CLIENT_SECRET')); ?>">
                                                </div>

                                                <hr>

                                                <h5 class="mt-3">X Login Settings</h5>
                                                <div class="form-group">
                                                    <label><?php echo e(__('TWITTER_CLIENT_ID')); ?></label>
                                                    <input type="text" name="TWITTER_CLIENT_ID" class="form-control" value="<?php echo e(env('DEMO_MODE') ? '*************************' : env('TWITTER_CLIENT_ID')); ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(__('TWITTER_CLIENT_SECRET')); ?></label>
                                                    <input type="text"  name="TWITTER_CLIENT_SECRET" class="form-control" value="<?php echo e(env('DEMO_MODE') ? '*************************' : env('TWITTER_CLIENT_SECRET')); ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-group text-center mt-4">
                                                            <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <div class="tab-pane fade" id="other">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label><?php echo e(__('CACHE_LIFETIME')); ?></label>
                                                        <input type="text"  name="CACHE_LIFETIME" class="form-control" value="<?php echo e(env('CACHE_LIFETIME') ?? ''); ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="TIMEZONE"><?php echo e(__('TIMEZONE')); ?></label>
                                                        <div class="gpt-up-down-arrow position-relative">
                                                            <select class="form-control" name="TIMEZONE" id="TIMEZONE" >
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Abidjan'): echo 'selected'; endif; ?> value='Africa/Abidjan'><?php echo e(__('Africa/Abidjan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Accra'): echo 'selected'; endif; ?> value='Africa/Accra'><?php echo e(__('Africa/Accra')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Addis_Ababa'): echo 'selected'; endif; ?> value='Africa/Addis_Ababa'><?php echo e(__('Africa/Addis_Ababa')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Algiers'): echo 'selected'; endif; ?> value='Africa/Algiers'><?php echo e(__('Africa/Algiers')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Asmara'): echo 'selected'; endif; ?> value='Africa/Asmara'><?php echo e(__('Africa/Asmara')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Bamako'): echo 'selected'; endif; ?> value='Africa/Bamako'><?php echo e(__('Africa/Bamako')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Bangui'): echo 'selected'; endif; ?> value='Africa/Bangui'><?php echo e(__('Africa/Bangui')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Banjul'): echo 'selected'; endif; ?> value='Africa/Banjul'><?php echo e(__('Africa/Banjul')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Bissau'): echo 'selected'; endif; ?> value='Africa/Bissau'><?php echo e(__('Africa/Bissau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Blantyre'): echo 'selected'; endif; ?> value='Africa/Blantyre'><?php echo e(__('Africa/Blantyre')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Brazzaville'): echo 'selected'; endif; ?> value='Africa/Brazzaville'><?php echo e(__('Africa/Brazzaville')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Bujumbura'): echo 'selected'; endif; ?> value='Africa/Bujumbura'><?php echo e(__('Africa/Bujumbura')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Cairo'): echo 'selected'; endif; ?> value='Africa/Cairo'><?php echo e(__('Africa/Cairo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Casablanca'): echo 'selected'; endif; ?> value='Africa/Casablanca'><?php echo e(__('Africa/Casablanca')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Ceuta'): echo 'selected'; endif; ?> value='Africa/Ceuta'><?php echo e(__('Africa/Ceuta')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Conakry'): echo 'selected'; endif; ?> value='Africa/Conakry'><?php echo e(__('Africa/Conakry')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Dakar'): echo 'selected'; endif; ?> value='Africa/Dakar'><?php echo e(__('Africa/Dakar')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Dar_es_Salaam'): echo 'selected'; endif; ?> value='Africa/Dar_es_Salaam'><?php echo e(__('Africa/Dar_es_Salaam')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Djibouti'): echo 'selected'; endif; ?> value='Africa/Djibouti'><?php echo e(__('Africa/Djibouti')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Douala'): echo 'selected'; endif; ?> value='Africa/Douala'><?php echo e(__('Africa/Douala')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/El_Aaiun'): echo 'selected'; endif; ?> value='Africa/El_Aaiun'><?php echo e(__('Africa/El_Aaiun')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Freetown'): echo 'selected'; endif; ?> value='Africa/Freetown'><?php echo e(__('Africa/Freetown')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Gaborone'): echo 'selected'; endif; ?> value='Africa/Gaborone'><?php echo e(__('Africa/Gaborone')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Harare'): echo 'selected'; endif; ?> value='Africa/Harare'><?php echo e(__('Africa/Harare')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Johannesburg'): echo 'selected'; endif; ?> value='Africa/Johannesburg'><?php echo e(__('Africa/Johannesburg')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Juba'): echo 'selected'; endif; ?> value='Africa/Juba'><?php echo e(__('Africa/Juba')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Kampala'): echo 'selected'; endif; ?> value='Africa/Kampala'><?php echo e(__('Africa/Kampala')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Khartoum'): echo 'selected'; endif; ?> value='Africa/Khartoum'><?php echo e(__('Africa/Khartoum')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Kigali'): echo 'selected'; endif; ?> value='Africa/Kigali'><?php echo e(__('Africa/Kigali')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Kinshasa'): echo 'selected'; endif; ?> value='Africa/Kinshasa'><?php echo e(__('Africa/Kinshasa')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Lagos'): echo 'selected'; endif; ?> value='Africa/Lagos'><?php echo e(__('Africa/Lagos')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Libreville'): echo 'selected'; endif; ?> value='Africa/Libreville'><?php echo e(__('Africa/Libreville')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Lome'): echo 'selected'; endif; ?> value='Africa/Lome'><?php echo e(__('Africa/Lome')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Luanda'): echo 'selected'; endif; ?> value='Africa/Luanda'><?php echo e(__('Africa/Luanda')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Lubumbashi'): echo 'selected'; endif; ?> value='Africa/Lubumbashi'><?php echo e(__('Africa/Lubumbashi')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Lusaka'): echo 'selected'; endif; ?> value='Africa/Lusaka'><?php echo e(__('Africa/Lusaka')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Malabo'): echo 'selected'; endif; ?> value='Africa/Malabo'><?php echo e(__('Africa/Malabo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Maputo'): echo 'selected'; endif; ?> value='Africa/Maputo'><?php echo e(__('Africa/Maputo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Maseru'): echo 'selected'; endif; ?> value='Africa/Maseru'><?php echo e(__('Africa/Maseru')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Mbabane'): echo 'selected'; endif; ?> value='Africa/Mbabane'><?php echo e(__('Africa/Mbabane')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Mogadishu'): echo 'selected'; endif; ?> value='Africa/Mogadishu'><?php echo e(__('Africa/Mogadishu')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Monrovia'): echo 'selected'; endif; ?> value='Africa/Monrovia'><?php echo e(__('Africa/Monrovia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Nairobi'): echo 'selected'; endif; ?> value='Africa/Nairobi'><?php echo e(__('Africa/Nairobi')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Ndjamena'): echo 'selected'; endif; ?> value='Africa/Ndjamena'><?php echo e(__('Africa/Ndjamena')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Niamey'): echo 'selected'; endif; ?> value='Africa/Niamey'><?php echo e(__('Africa/Niamey')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Nouakchott'): echo 'selected'; endif; ?> value='Africa/Nouakchott'><?php echo e(__('Africa/Nouakchott')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Ouagadougou'): echo 'selected'; endif; ?> value='Africa/Ouagadougou'><?php echo e(__('Africa/Ouagadougou')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Porto-Novo'): echo 'selected'; endif; ?> value='Africa/Porto-Novo'><?php echo e(__('Africa/Porto-Novo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Sao_Tome'): echo 'selected'; endif; ?> value='Africa/Sao_Tome'><?php echo e(__('Africa/Sao_Tome')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Tripoli'): echo 'selected'; endif; ?> value='Africa/Tripoli'><?php echo e(__('Africa/Tripoli')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Tunis'): echo 'selected'; endif; ?> value='Africa/Tunis'><?php echo e(__('Africa/Tunis')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Africa/Windhoek'): echo 'selected'; endif; ?> value='Africa/Windhoek'><?php echo e(__('Africa/Windhoek')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Adak'): echo 'selected'; endif; ?> value='America/Adak'><?php echo e(__('America/Adak')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Anchorage'): echo 'selected'; endif; ?> value='America/Anchorage'><?php echo e(__('America/Anchorage')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Anguilla'): echo 'selected'; endif; ?> value='America/Anguilla'><?php echo e(__('America/Anguilla')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Antigua'): echo 'selected'; endif; ?> value='America/Antigua'><?php echo e(__('America/Antigua')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Araguaina'): echo 'selected'; endif; ?> value='America/Araguaina'><?php echo e(__('America/Araguaina')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Buenos_Aires'): echo 'selected'; endif; ?> value='America/Argentina/Buenos_Aires'><?php echo e(__('America/Argentina/Buenos_Aires')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Catamarca'): echo 'selected'; endif; ?> value='America/Argentina/Catamarca'><?php echo e(__('America/Argentina/Catamarca')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Cordoba'): echo 'selected'; endif; ?> value='America/Argentina/Cordoba'><?php echo e(__('America/Argentina/Cordoba')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Jujuy'): echo 'selected'; endif; ?> value='America/Argentina/Jujuy'><?php echo e(__('America/Argentina/Jujuy')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/La_Rioja'): echo 'selected'; endif; ?> value='America/Argentina/La_Rioja'><?php echo e(__('America/Argentina/La_Rioja')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Mendoza'): echo 'selected'; endif; ?> value='America/Argentina/Mendoza'><?php echo e(__('America/Argentina/Mendoza')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Rio_Gallegos'): echo 'selected'; endif; ?> value='America/Argentina/Rio_Gallegos'><?php echo e(__('America/Argentina/Rio_Gallegos')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Salta'): echo 'selected'; endif; ?> value='America/Argentina/Salta'><?php echo e(__('America/Argentina/Salta')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/San_Juan'): echo 'selected'; endif; ?> value='America/Argentina/San_Juan'><?php echo e(__('America/Argentina/San_Juan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/San_Luis'): echo 'selected'; endif; ?> value='America/Argentina/San_Luis'><?php echo e(__('America/Argentina/San_Luis')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Tucuman'): echo 'selected'; endif; ?> value='America/Argentina/Tucuman'><?php echo e(__('America/Argentina/Tucuman')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Argentina/Ushuaia'): echo 'selected'; endif; ?> value='America/Argentina/Ushuaia'><?php echo e(__('America/Argentina/Ushuaia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Aruba'): echo 'selected'; endif; ?> value='America/Aruba'><?php echo e(__('America/Aruba')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Asuncion'): echo 'selected'; endif; ?> value='America/Asuncion'><?php echo e(__('America/Asuncion')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Atikokan'): echo 'selected'; endif; ?> value='America/Atikokan'><?php echo e(__('America/Atikokan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Bahia'): echo 'selected'; endif; ?> value='America/Bahia'><?php echo e(__('America/Bahia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Bahia_Banderas'): echo 'selected'; endif; ?> value='America/Bahia_Banderas'><?php echo e(__('America/Bahia_Banderas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Barbados'): echo 'selected'; endif; ?> value='America/Barbados'><?php echo e(__('America/Barbados')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Belem'): echo 'selected'; endif; ?> value='America/Belem'><?php echo e(__('America/Belem')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Belize'): echo 'selected'; endif; ?> value='America/Belize'><?php echo e(__('America/Belize')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Blanc-Sablon'): echo 'selected'; endif; ?> value='America/Blanc-Sablon'><?php echo e(__('America/Blanc-Sablon')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Boa_Vista'): echo 'selected'; endif; ?> value='America/Boa_Vista'><?php echo e(__('America/Boa_Vista')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Bogota'): echo 'selected'; endif; ?> value='America/Bogota'><?php echo e(__('America/Bogota')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Boise'): echo 'selected'; endif; ?> value='America/Boise'><?php echo e(__('America/Boise')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Cambridge_Bay'): echo 'selected'; endif; ?> value='America/Cambridge_Bay'><?php echo e(__('America/Cambridge_Bay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Campo_Grande'): echo 'selected'; endif; ?> value='America/Campo_Grande'><?php echo e(__('America/Campo_Grande')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Cancun'): echo 'selected'; endif; ?> value='America/Cancun'><?php echo e(__('America/Cancun')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Caracas'): echo 'selected'; endif; ?> value='America/Caracas'><?php echo e(__('America/Caracas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Cayenne'): echo 'selected'; endif; ?> value='America/Cayenne'><?php echo e(__('America/Cayenne')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Cayman'): echo 'selected'; endif; ?> value='America/Cayman'><?php echo e(__('America/Cayman')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Chicago'): echo 'selected'; endif; ?> value='America/Chicago'><?php echo e(__('America/Chicago')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Chihuahua'): echo 'selected'; endif; ?> value='America/Chihuahua'><?php echo e(__('America/Chihuahua')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Costa_Rica'): echo 'selected'; endif; ?> value='America/Costa_Rica'><?php echo e(__('America/Costa_Rica')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Creston'): echo 'selected'; endif; ?> value='America/Creston'><?php echo e(__('America/Creston')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Cuiaba'): echo 'selected'; endif; ?> value='America/Cuiaba'><?php echo e(__('America/Cuiaba')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Curacao'): echo 'selected'; endif; ?> value='America/Curacao'><?php echo e(__('America/Curacao')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Danmarkshavn'): echo 'selected'; endif; ?> value='America/Danmarkshavn'><?php echo e(__('America/Danmarkshavn')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Dawson'): echo 'selected'; endif; ?> value='America/Dawson'><?php echo e(__('America/Dawson')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Dawson_Creek'): echo 'selected'; endif; ?> value='America/Dawson_Creek'><?php echo e(__('America/Dawson_Creek')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Denver'): echo 'selected'; endif; ?> value='America/Denver'><?php echo e(__('America/Denver')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Detroit'): echo 'selected'; endif; ?> value='America/Detroit'><?php echo e(__('America/Detroit')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Dominica'): echo 'selected'; endif; ?> value='America/Dominica'><?php echo e(__('America/Dominica')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Edmonton'): echo 'selected'; endif; ?> value='America/Edmonton'><?php echo e(__('America/Edmonton')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Eirunepe'): echo 'selected'; endif; ?> value='America/Eirunepe'><?php echo e(__('America/Eirunepe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/El_Salvador'): echo 'selected'; endif; ?> value='America/El_Salvador'><?php echo e(__('America/El_Salvador')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Fort_Nelson'): echo 'selected'; endif; ?> value='America/Fort_Nelson'><?php echo e(__('America/Fort_Nelson')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Fortaleza'): echo 'selected'; endif; ?> value='America/Fortaleza'><?php echo e(__('America/Fortaleza')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Glace_Bay'): echo 'selected'; endif; ?> value='America/Glace_Bay'><?php echo e(__('America/Glace_Bay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Godthab'): echo 'selected'; endif; ?> value='America/Godthab'><?php echo e(__('America/Godthab')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Goose_Bay'): echo 'selected'; endif; ?> value='America/Goose_Bay'><?php echo e(__('America/Goose_Bay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Grand_Turk'): echo 'selected'; endif; ?> value='America/Grand_Turk'><?php echo e(__('America/Grand_Turk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Grenada'): echo 'selected'; endif; ?> value='America/Grenada'><?php echo e(__('America/Grenada')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Guadeloupe'): echo 'selected'; endif; ?> value='America/Guadeloupe'><?php echo e(__('America/Guadeloupe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Guatemala'): echo 'selected'; endif; ?> value='America/Guatemala'><?php echo e(__('America/Guatemala')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Guayaquil'): echo 'selected'; endif; ?> value='America/Guayaquil'><?php echo e(__('America/Guayaquil')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Guyana'): echo 'selected'; endif; ?> value='America/Guyana'><?php echo e(__('America/Guyana')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Halifax'): echo 'selected'; endif; ?> value='America/Halifax'><?php echo e(__('America/Halifax')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Havana'): echo 'selected'; endif; ?> value='America/Havana'><?php echo e(__('America/Havana')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Hermosillo'): echo 'selected'; endif; ?> value='America/Hermosillo'><?php echo e(__('America/Hermosillo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Indianapolis'): echo 'selected'; endif; ?> value='America/Indiana/Indianapolis'><?php echo e(__('America/Indiana/Indianapolis')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Knox'): echo 'selected'; endif; ?> value='America/Indiana/Knox'><?php echo e(__('America/Indiana/Knox')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Marengo'): echo 'selected'; endif; ?> value='America/Indiana/Marengo'><?php echo e(__('America/Indiana/Marengo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Petersburg'): echo 'selected'; endif; ?> value='America/Indiana/Petersburg'><?php echo e(__('America/Indiana/Petersburg')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Tell_City'): echo 'selected'; endif; ?> value='America/Indiana/Tell_City'><?php echo e(__('America/Indiana/Tell_City')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Vevay'): echo 'selected'; endif; ?> value='America/Indiana/Vevay'><?php echo e(__('America/Indiana/Vevay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Vincennes'): echo 'selected'; endif; ?> value='America/Indiana/Vincennes'><?php echo e(__('America/Indiana/Vincennes')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Indiana/Winamac'): echo 'selected'; endif; ?> value='America/Indiana/Winamac'><?php echo e(__('America/Indiana/Winamac')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Inuvik'): echo 'selected'; endif; ?> value='America/Inuvik'><?php echo e(__('America/Inuvik')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Iqaluit'): echo 'selected'; endif; ?> value='America/Iqaluit'><?php echo e(__('America/Iqaluit')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Jamaica'): echo 'selected'; endif; ?> value='America/Jamaica'><?php echo e(__('America/Jamaica')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Juneau'): echo 'selected'; endif; ?> value='America/Juneau'><?php echo e(__('America/Juneau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Kentucky/Louisville'): echo 'selected'; endif; ?> value='America/Kentucky/Louisville'><?php echo e(__('America/Kentucky/Louisville')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Kentucky/Monticello'): echo 'selected'; endif; ?> value='America/Kentucky/Monticello'><?php echo e(__('America/Kentucky/Monticello')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Kralendijk'): echo 'selected'; endif; ?> value='America/Kralendijk'><?php echo e(__('America/Kralendijk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/La_Paz'): echo 'selected'; endif; ?> value='America/La_Paz'><?php echo e(__('America/La_Paz')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Lima'): echo 'selected'; endif; ?> value='America/Lima'><?php echo e(__('America/Lima')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Los_Angeles'): echo 'selected'; endif; ?> value='America/Los_Angeles'><?php echo e(__('America/Los_Angeles')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Lower_Princes'): echo 'selected'; endif; ?> value='America/Lower_Princes'><?php echo e(__('America/Lower_Princes')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Maceio'): echo 'selected'; endif; ?> value='America/Maceio'><?php echo e(__('America/Maceio')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Managua'): echo 'selected'; endif; ?> value='America/Managua'><?php echo e(__('America/Managua')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Manaus'): echo 'selected'; endif; ?> value='America/Manaus'><?php echo e(__('America/Manaus')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Marigot'): echo 'selected'; endif; ?> value='America/Marigot'><?php echo e(__('America/Marigot')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Martinique'): echo 'selected'; endif; ?> value='America/Martinique'><?php echo e(__('America/Martinique')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Matamoros'): echo 'selected'; endif; ?> value='America/Matamoros'><?php echo e(__('America/Matamoros')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Mazatlan'): echo 'selected'; endif; ?> value='America/Mazatlan'><?php echo e(__('America/Mazatlan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Menominee'): echo 'selected'; endif; ?> value='America/Menominee'><?php echo e(__('America/Menominee')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Merida'): echo 'selected'; endif; ?> value='America/Merida'><?php echo e(__('America/Merida')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Metlakatla'): echo 'selected'; endif; ?> value='America/Metlakatla'><?php echo e(__('America/Metlakatla')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Mexico_City'): echo 'selected'; endif; ?> value='America/Mexico_City'><?php echo e(__('America/Mexico_City')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Miquelon'): echo 'selected'; endif; ?> value='America/Miquelon'><?php echo e(__('America/Miquelon')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Moncton'): echo 'selected'; endif; ?> value='America/Moncton'><?php echo e(__('America/Moncton')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Monterrey'): echo 'selected'; endif; ?> value='America/Monterrey'><?php echo e(__('America/Monterrey')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Montevideo'): echo 'selected'; endif; ?> value='America/Montevideo'><?php echo e(__('America/Montevideo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Montserrat'): echo 'selected'; endif; ?> value='America/Montserrat'><?php echo e(__('America/Montserrat')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Nassau'): echo 'selected'; endif; ?> value='America/Nassau'><?php echo e(__('America/Nassau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/New_York'): echo 'selected'; endif; ?> value='America/New_York'><?php echo e(__('America/New_York')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Nipigon'): echo 'selected'; endif; ?> value='America/Nipigon'><?php echo e(__('America/Nipigon')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Nome'): echo 'selected'; endif; ?> value='America/Nome'><?php echo e(__('America/Nome')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Noronha'): echo 'selected'; endif; ?> value='America/Noronha'><?php echo e(__('America/Noronha')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/North_Dakota/Beulah'): echo 'selected'; endif; ?> value='America/North_Dakota/Beulah'><?php echo e(__('America/North_Dakota/Beulah')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/North_Dakota/Center'): echo 'selected'; endif; ?> value='America/North_Dakota/Center'><?php echo e(__('America/North_Dakota/Center')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/North_Dakota/New_Salem'): echo 'selected'; endif; ?> value='America/North_Dakota/New_Salem'><?php echo e(__('America/North_Dakota/New_Salem')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Ojinaga'): echo 'selected'; endif; ?> value='America/Ojinaga'><?php echo e(__('America/Ojinaga')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Panama'): echo 'selected'; endif; ?> value='America/Panama'><?php echo e(__('America/Panama')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Pangnirtung'): echo 'selected'; endif; ?> value='America/Pangnirtung'><?php echo e(__('America/Pangnirtung')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Paramaribo'): echo 'selected'; endif; ?> value='America/Paramaribo'><?php echo e(__('America/Paramaribo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Phoenix'): echo 'selected'; endif; ?> value='America/Phoenix'><?php echo e(__('America/Phoenix')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Port-au-Prince'): echo 'selected'; endif; ?> value='America/Port-au-Prince'><?php echo e(__('America/Port-au-Prince')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Port_of_Spain'): echo 'selected'; endif; ?> value='America/Port_of_Spain'><?php echo e(__('America/Port_of_Spain')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Porto_Velho'): echo 'selected'; endif; ?> value='America/Porto_Velho'><?php echo e(__('America/Porto_Velho')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Puerto_Rico'): echo 'selected'; endif; ?> value='America/Puerto_Rico'><?php echo e(__('America/Puerto_Rico')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Punta_Arenas'): echo 'selected'; endif; ?> value='America/Punta_Arenas'><?php echo e(__('America/Punta_Arenas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Rainy_River'): echo 'selected'; endif; ?> value='America/Rainy_River'><?php echo e(__('America/Rainy_River')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Rankin_Inlet'): echo 'selected'; endif; ?> value='America/Rankin_Inlet'><?php echo e(__('America/Rankin_Inlet')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Recife'): echo 'selected'; endif; ?> value='America/Recife'><?php echo e(__('America/Recife')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Regina'): echo 'selected'; endif; ?> value='America/Regina'><?php echo e(__('America/Regina')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Resolute'): echo 'selected'; endif; ?> value='America/Resolute'><?php echo e(__('America/Resolute')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Rio_Branco'): echo 'selected'; endif; ?> value='America/Rio_Branco'><?php echo e(__('America/Rio_Branco')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Santarem'): echo 'selected'; endif; ?> value='America/Santarem'><?php echo e(__('America/Santarem')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Santiago'): echo 'selected'; endif; ?> value='America/Santiago'><?php echo e(__('America/Santiago')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Santo_Domingo'): echo 'selected'; endif; ?> value='America/Santo_Domingo'><?php echo e(__('America/Santo_Domingo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Sao_Paulo'): echo 'selected'; endif; ?> value='America/Sao_Paulo'><?php echo e(__('America/Sao_Paulo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Scoresbysund'): echo 'selected'; endif; ?> value='America/Scoresbysund'><?php echo e(__('America/Scoresbysund')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Sitka'): echo 'selected'; endif; ?> value='America/Sitka'><?php echo e(__('America/Sitka')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Barthelemy'): echo 'selected'; endif; ?> value='America/St_Barthelemy'><?php echo e(__('America/St_Barthelemy')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Johns'): echo 'selected'; endif; ?> value='America/St_Johns'><?php echo e(__('America/St_Johns')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Kitts'): echo 'selected'; endif; ?> value='America/St_Kitts'><?php echo e(__('America/St_Kitts')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Lucia'): echo 'selected'; endif; ?> value='America/St_Lucia'><?php echo e(__('America/St_Lucia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Thomas'): echo 'selected'; endif; ?> value='America/St_Thomas'><?php echo e(__('America/St_Thomas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/St_Vincent'): echo 'selected'; endif; ?> value='America/St_Vincent'><?php echo e(__('America/St_Vincent')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Swift_Current'): echo 'selected'; endif; ?> value='America/Swift_Current'><?php echo e(__('America/Swift_Current')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Tegucigalpa'): echo 'selected'; endif; ?> value='America/Tegucigalpa'><?php echo e(__('America/Tegucigalpa')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Thule'): echo 'selected'; endif; ?> value='America/Thule'><?php echo e(__('America/Thule')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Thunder_Bay'): echo 'selected'; endif; ?> value='America/Thunder_Bay'><?php echo e(__('America/Thunder_Bay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Tijuana'): echo 'selected'; endif; ?> value='America/Tijuana'><?php echo e(__('America/Tijuana')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Toronto'): echo 'selected'; endif; ?> value='America/Toronto'><?php echo e(__('America/Toronto')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Tortola'): echo 'selected'; endif; ?> value='America/Tortola'><?php echo e(__('America/Tortola')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Vancouver'): echo 'selected'; endif; ?> value='America/Vancouver'><?php echo e(__('America/Vancouver')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Whitehorse'): echo 'selected'; endif; ?> value='America/Whitehorse'><?php echo e(__('America/Whitehorse')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Winnipeg'): echo 'selected'; endif; ?> value='America/Winnipeg'><?php echo e(__('America/Winnipeg')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Yakutat'): echo 'selected'; endif; ?> value='America/Yakutat'><?php echo e(__('America/Yakutat')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'America/Yellowknife'): echo 'selected'; endif; ?> value='America/Yellowknife'><?php echo e(__('America/Yellowknife')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Casey'): echo 'selected'; endif; ?> value='Antarctica/Casey'><?php echo e(__('Antarctica/Casey')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Davis'): echo 'selected'; endif; ?> value='Antarctica/Davis'><?php echo e(__('Antarctica/Davis')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/DumontDUrville'): echo 'selected'; endif; ?> value='Antarctica/DumontDUrville'><?php echo e(__('Antarctica/DumontDUrville')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Macquarie'): echo 'selected'; endif; ?> value='Antarctica/Macquarie'><?php echo e(__('Antarctica/Macquarie')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Mawson'): echo 'selected'; endif; ?> value='Antarctica/Mawson'><?php echo e(__('Antarctica/Mawson')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/McMurdo'): echo 'selected'; endif; ?> value='Antarctica/McMurdo'><?php echo e(__('Antarctica/McMurdo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Palmer'): echo 'selected'; endif; ?> value='Antarctica/Palmer'><?php echo e(__('Antarctica/Palmer')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Rothera'): echo 'selected'; endif; ?> value='Antarctica/Rothera'><?php echo e(__('Antarctica/Rothera')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Syowa'): echo 'selected'; endif; ?> value='Antarctica/Syowa'><?php echo e(__('Antarctica/Syowa')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Troll'): echo 'selected'; endif; ?> value='Antarctica/Troll'><?php echo e(__('Antarctica/Troll')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Antarctica/Vostok'): echo 'selected'; endif; ?> value='Antarctica/Vostok'><?php echo e(__('Antarctica/Vostok')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Arctic/Longyearbyen'): echo 'selected'; endif; ?> value='Arctic/Longyearbyen'><?php echo e(__('Arctic/Longyearbyen')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Aden'): echo 'selected'; endif; ?> value='Asia/Aden'><?php echo e(__('Asia/Aden')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Almaty'): echo 'selected'; endif; ?> value='Asia/Almaty'><?php echo e(__('Asia/Almaty')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Amman'): echo 'selected'; endif; ?> value='Asia/Amman'><?php echo e(__('Asia/Amman')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Anadyr'): echo 'selected'; endif; ?> value='Asia/Anadyr'><?php echo e(__('Asia/Anadyr')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Aqtau'): echo 'selected'; endif; ?> value='Asia/Aqtau'><?php echo e(__('Asia/Aqtau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Aqtobe'): echo 'selected'; endif; ?> value='Asia/Aqtobe'><?php echo e(__('Asia/Aqtobe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Ashgabat'): echo 'selected'; endif; ?> value='Asia/Ashgabat'><?php echo e(__('Asia/Ashgabat')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Atyrau'): echo 'selected'; endif; ?> value='Asia/Atyrau'><?php echo e(__('Asia/Atyrau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Baghdad'): echo 'selected'; endif; ?> value='Asia/Baghdad'><?php echo e(__('Asia/Baghdad')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Bahrain'): echo 'selected'; endif; ?> value='Asia/Bahrain'><?php echo e(__('Asia/Bahrain')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Baku'): echo 'selected'; endif; ?> value='Asia/Baku'><?php echo e(__('Asia/Baku')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Bangkok'): echo 'selected'; endif; ?> value='Asia/Bangkok'><?php echo e(__('Asia/Bangkok')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Barnaul'): echo 'selected'; endif; ?> value='Asia/Barnaul'><?php echo e(__('Asia/Barnaul')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Beirut'): echo 'selected'; endif; ?> value='Asia/Beirut'><?php echo e(__('Asia/Beirut')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Bishkek'): echo 'selected'; endif; ?> value='Asia/Bishkek'><?php echo e(__('Asia/Bishkek')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Brunei'): echo 'selected'; endif; ?> value='Asia/Brunei'><?php echo e(__('Asia/Brunei')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Chita'): echo 'selected'; endif; ?> value='Asia/Chita'><?php echo e(__('Asia/Chita')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Choibalsan'): echo 'selected'; endif; ?> value='Asia/Choibalsan'><?php echo e(__('Asia/Choibalsan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Colombo'): echo 'selected'; endif; ?> value='Asia/Colombo'><?php echo e(__('Asia/Colombo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Damascus'): echo 'selected'; endif; ?> value='Asia/Damascus'><?php echo e(__('Asia/Damascus')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Dhaka'): echo 'selected'; endif; ?> value='Asia/Dhaka'><?php echo e(__('Asia/Dhaka')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Dili'): echo 'selected'; endif; ?> value='Asia/Dili'><?php echo e(__('Asia/Dili')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Dubai'): echo 'selected'; endif; ?> value='Asia/Dubai'><?php echo e(__('Asia/Dubai')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Dushanbe'): echo 'selected'; endif; ?> value='Asia/Dushanbe'><?php echo e(__('Asia/Dushanbe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Famagusta'): echo 'selected'; endif; ?> value='Asia/Famagusta'><?php echo e(__('Asia/Famagusta')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Gaza'): echo 'selected'; endif; ?> value='Asia/Gaza'><?php echo e(__('Asia/Gaza')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Hebron'): echo 'selected'; endif; ?> value='Asia/Hebron'><?php echo e(__('Asia/Hebron')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Ho_Chi_Minh'): echo 'selected'; endif; ?> value='Asia/Ho_Chi_Minh'><?php echo e(__('Asia/Ho_Chi_Minh')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Hong_Kong'): echo 'selected'; endif; ?> value='Asia/Hong_Kong'><?php echo e(__('Asia/Hong_Kong')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Hovd'): echo 'selected'; endif; ?> value='Asia/Hovd'><?php echo e(__('Asia/Hovd')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Irkutsk'): echo 'selected'; endif; ?> value='Asia/Irkutsk'><?php echo e(__('Asia/Irkutsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Jakarta'): echo 'selected'; endif; ?> value='Asia/Jakarta'><?php echo e(__('Asia/Jakarta')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Jayapura'): echo 'selected'; endif; ?> value='Asia/Jayapura'><?php echo e(__('Asia/Jayapura')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Jerusalem'): echo 'selected'; endif; ?> value='Asia/Jerusalem'><?php echo e(__('Asia/Jerusalem')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kabul'): echo 'selected'; endif; ?> value='Asia/Kabul'><?php echo e(__('Asia/Kabul')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kamchatka'): echo 'selected'; endif; ?> value='Asia/Kamchatka'><?php echo e(__('Asia/Kamchatka')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Karachi'): echo 'selected'; endif; ?> value='Asia/Karachi'><?php echo e(__('Asia/Karachi')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kathmandu'): echo 'selected'; endif; ?> value='Asia/Kathmandu'><?php echo e(__('Asia/Kathmandu')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Khandyga'): echo 'selected'; endif; ?> value='Asia/Khandyga'><?php echo e(__('Asia/Khandyga')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kolkata'): echo 'selected'; endif; ?> value='Asia/Kolkata'><?php echo e(__('Asia/Kolkata')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Krasnoyarsk'): echo 'selected'; endif; ?> value='Asia/Krasnoyarsk'><?php echo e(__('Asia/Krasnoyarsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kuala_Lumpur'): echo 'selected'; endif; ?> value='Asia/Kuala_Lumpur'><?php echo e(__('Asia/Kuala_Lumpur')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kuching'): echo 'selected'; endif; ?> value='Asia/Kuching'><?php echo e(__('Asia/Kuching')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Kuwait'): echo 'selected'; endif; ?> value='Asia/Kuwait'><?php echo e(__('Asia/Kuwait')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Macau'): echo 'selected'; endif; ?> value='Asia/Macau'><?php echo e(__('Asia/Macau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Magadan'): echo 'selected'; endif; ?> value='Asia/Magadan'><?php echo e(__('Asia/Magadan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Makassar'): echo 'selected'; endif; ?> value='Asia/Makassar'><?php echo e(__('Asia/Makassar')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Manila'): echo 'selected'; endif; ?> value='Asia/Manila'><?php echo e(__('Asia/Manila')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Muscat'): echo 'selected'; endif; ?> value='Asia/Muscat'><?php echo e(__('Asia/Muscat')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Nicosia'): echo 'selected'; endif; ?> value='Asia/Nicosia'><?php echo e(__('Asia/Nicosia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Novokuznetsk'): echo 'selected'; endif; ?> value='Asia/Novokuznetsk'><?php echo e(__('Asia/Novokuznetsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Novosibirsk'): echo 'selected'; endif; ?> value='Asia/Novosibirsk'><?php echo e(__('Asia/Novosibirsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Omsk'): echo 'selected'; endif; ?> value='Asia/Omsk'><?php echo e(__('Asia/Omsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Oral'): echo 'selected'; endif; ?> value='Asia/Oral'><?php echo e(__('Asia/Oral')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Phnom_Penh'): echo 'selected'; endif; ?> value='Asia/Phnom_Penh'><?php echo e(__('Asia/Phnom_Penh')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Pontianak'): echo 'selected'; endif; ?> value='Asia/Pontianak'><?php echo e(__('Asia/Pontianak')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Pyongyang'): echo 'selected'; endif; ?> value='Asia/Pyongyang'><?php echo e(__('Asia/Pyongyang')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Qatar'): echo 'selected'; endif; ?> value='Asia/Qatar'><?php echo e(__('Asia/Qatar')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Qostanay'): echo 'selected'; endif; ?> value='Asia/Qostanay'><?php echo e(__('Asia/Qostanay')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Qyzylorda'): echo 'selected'; endif; ?> value='Asia/Qyzylorda'><?php echo e(__('Asia/Qyzylorda')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Riyadh'): echo 'selected'; endif; ?> value='Asia/Riyadh'><?php echo e(__('Asia/Riyadh')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Sakhalin'): echo 'selected'; endif; ?> value='Asia/Sakhalin'><?php echo e(__('Asia/Sakhalin')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Samarkand'): echo 'selected'; endif; ?> value='Asia/Samarkand'><?php echo e(__('Asia/Samarkand')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Seoul'): echo 'selected'; endif; ?> value='Asia/Seoul'><?php echo e(__('Asia/Seoul')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Shanghai'): echo 'selected'; endif; ?> value='Asia/Shanghai'><?php echo e(__('Asia/Shanghai')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Singapore'): echo 'selected'; endif; ?> value='Asia/Singapore'><?php echo e(__('Asia/Singapore')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Srednekolymsk'): echo 'selected'; endif; ?> value='Asia/Srednekolymsk'><?php echo e(__('Asia/Srednekolymsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Taipei'): echo 'selected'; endif; ?> value='Asia/Taipei'><?php echo e(__('Asia/Taipei')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Tashkent'): echo 'selected'; endif; ?> value='Asia/Tashkent'><?php echo e(__('Asia/Tashkent')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Tbilisi'): echo 'selected'; endif; ?> value='Asia/Tbilisi'><?php echo e(__('Asia/Tbilisi')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Tehran'): echo 'selected'; endif; ?> value='Asia/Tehran'><?php echo e(__('Asia/Tehran')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Thimphu'): echo 'selected'; endif; ?> value='Asia/Thimphu'><?php echo e(__('Asia/Thimphu')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Tokyo'): echo 'selected'; endif; ?> value='Asia/Tokyo'><?php echo e(__('Asia/Tokyo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Tomsk'): echo 'selected'; endif; ?> value='Asia/Tomsk'><?php echo e(__('Asia/Tomsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Ulaanbaatar'): echo 'selected'; endif; ?> value='Asia/Ulaanbaatar'><?php echo e(__('Asia/Ulaanbaatar')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Urumqi'): echo 'selected'; endif; ?> value='Asia/Urumqi'><?php echo e(__('Asia/Urumqi')); ?></option> <?php if('Asia/Ust-Nera'): echo 'selected'; endif; ?>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Ust-Nera'): echo 'selected'; endif; ?> value='Asia/Ust-Nera'><?php echo e(__('Asia/Ust-Nera')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Vientiane'): echo 'selected'; endif; ?> value='Asia/Vientiane'><?php echo e(__('Asia/Vientiane')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Vladivostok'): echo 'selected'; endif; ?> value='Asia/Vladivostok'><?php echo e(__('Asia/Vladivostok')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Yakutsk'): echo 'selected'; endif; ?> value='Asia/Yakutsk'><?php echo e(__('Asia/Yakutsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Yangon'): echo 'selected'; endif; ?> value='Asia/Yangon'><?php echo e(__('Asia/Yangon')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Yekaterinburg'): echo 'selected'; endif; ?> value='Asia/Yekaterinburg'><?php echo e(__('Asia/Yekaterinburg')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Asia/Yerevan'): echo 'selected'; endif; ?> value='Asia/Yerevan'><?php echo e(__('Asia/Yerevan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Azores'): echo 'selected'; endif; ?> value='Atlantic/Azores'><?php echo e(__('Atlantic/Azores')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Bermuda'): echo 'selected'; endif; ?> value='Atlantic/Bermuda'><?php echo e(__('Atlantic/Bermuda')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Canary'): echo 'selected'; endif; ?> value='Atlantic/Canary'><?php echo e(__('Atlantic/Canary')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Cape_Verde'): echo 'selected'; endif; ?> value='Atlantic/Cape_Verde'><?php echo e(__('Atlantic/Cape_Verde')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Faroe'): echo 'selected'; endif; ?> value='Atlantic/Faroe'><?php echo e(__('Atlantic/Faroe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Madeira'): echo 'selected'; endif; ?> value='Atlantic/Madeira'><?php echo e(__('Atlantic/Madeira')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Reykjavik'): echo 'selected'; endif; ?> value='Atlantic/Reykjavik'><?php echo e(__('Atlantic/Reykjavik')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/South_Georgia'): echo 'selected'; endif; ?> value='Atlantic/South_Georgia'><?php echo e(__('Atlantic/South_Georgia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/St_Helena'): echo 'selected'; endif; ?> value='Atlantic/St_Helena'><?php echo e(__('Atlantic/St_Helena')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Atlantic/Stanley'): echo 'selected'; endif; ?> value='Atlantic/Stanley'><?php echo e(__('Atlantic/Stanley')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Adelaide'): echo 'selected'; endif; ?> value='Australia/Adelaide'><?php echo e(__('Australia/Adelaide')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Brisbane'): echo 'selected'; endif; ?> value='Australia/Brisbane'><?php echo e(__('Australia/Brisbane')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Broken_Hill'): echo 'selected'; endif; ?> value='Australia/Broken_Hill'><?php echo e(__('Australia/Broken_Hill')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Currie'): echo 'selected'; endif; ?> value='Australia/Currie'><?php echo e(__('Australia/Currie')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Darwin'): echo 'selected'; endif; ?> value='Australia/Darwin'><?php echo e(__('Australia/Darwin')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Eucla'): echo 'selected'; endif; ?> value='Australia/Eucla'><?php echo e(__('Australia/Eucla')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Hobart'): echo 'selected'; endif; ?> value='Australia/Hobart'><?php echo e(__('Australia/Hobart')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Lindeman'): echo 'selected'; endif; ?> value='Australia/Lindeman'><?php echo e(__('Australia/Lindeman')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Lord_Howe'): echo 'selected'; endif; ?> value='Australia/Lord_Howe'><?php echo e(__('Australia/Lord_Howe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Melbourne'): echo 'selected'; endif; ?> value='Australia/Melbourne'><?php echo e(__('Australia/Melbourne')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Perth'): echo 'selected'; endif; ?> value='Australia/Perth'><?php echo e(__('Australia/Perth')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Australia/Sydney'): echo 'selected'; endif; ?> value='Australia/Sydney'><?php echo e(__('Australia/Sydney')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Amsterdam'): echo 'selected'; endif; ?> value='Europe/Amsterdam'><?php echo e(__('Europe/Amsterdam')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Andorra'): echo 'selected'; endif; ?> value='Europe/Andorra'><?php echo e(__('Europe/Andorra')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Astrakhan'): echo 'selected'; endif; ?> value='Europe/Astrakhan'><?php echo e(__('Europe/Astrakhan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Athens'): echo 'selected'; endif; ?> value='Europe/Athens'><?php echo e(__('Europe/Athens')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Belgrade'): echo 'selected'; endif; ?> value='Europe/Belgrade'><?php echo e(__('Europe/Belgrade')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Berlin'): echo 'selected'; endif; ?> value='Europe/Berlin'><?php echo e(__('Europe/Berlin')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Bratislava'): echo 'selected'; endif; ?> value='Europe/Bratislava'><?php echo e(__('Europe/Bratislava')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Brussels'): echo 'selected'; endif; ?> value='Europe/Brussels'><?php echo e(__('Europe/Brussels')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Bucharest'): echo 'selected'; endif; ?> value='Europe/Bucharest'><?php echo e(__('Europe/Bucharest')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Budapest'): echo 'selected'; endif; ?> value='Europe/Budapest'><?php echo e(__('Europe/Budapest')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Busingen'): echo 'selected'; endif; ?> value='Europe/Busingen'><?php echo e(__('Europe/Busingen')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Chisinau'): echo 'selected'; endif; ?> value='Europe/Chisinau'><?php echo e(__('Europe/Chisinau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Copenhagen'): echo 'selected'; endif; ?> value='Europe/Copenhagen'><?php echo e(__('Europe/Copenhagen')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Dublin'): echo 'selected'; endif; ?> value='Europe/Dublin'><?php echo e(__('Europe/Dublin')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Gibraltar'): echo 'selected'; endif; ?> value='Europe/Gibraltar'><?php echo e(__('Europe/Gibraltar')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Guernsey'): echo 'selected'; endif; ?> value='Europe/Guernsey'><?php echo e(__('Europe/Guernsey')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Helsinki'): echo 'selected'; endif; ?> value='Europe/Helsinki'><?php echo e(__('Europe/Helsinki')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Isle_of_Man'): echo 'selected'; endif; ?> value='Europe/Isle_of_Man'><?php echo e(__('Europe/Isle_of_Man')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Istanbul'): echo 'selected'; endif; ?> value='Europe/Istanbul'><?php echo e(__('Europe/Istanbul')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Jersey'): echo 'selected'; endif; ?> value='Europe/Jersey'><?php echo e(__('Europe/Jersey')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Kaliningrad'): echo 'selected'; endif; ?> value='Europe/Kaliningrad'><?php echo e(__('Europe/Kaliningrad')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Kiev'): echo 'selected'; endif; ?> value='Europe/Kiev'><?php echo e(__('Europe/Kiev')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Kirov'): echo 'selected'; endif; ?> value='Europe/Kirov'><?php echo e(__('Europe/Kirov')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Lisbon'): echo 'selected'; endif; ?> value='Europe/Lisbon'><?php echo e(__('Europe/Lisbon')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Ljubljana'): echo 'selected'; endif; ?> value='Europe/Ljubljana'><?php echo e(__('Europe/Ljubljana')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/London'): echo 'selected'; endif; ?> value='Europe/London'><?php echo e(__('Europe/London')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Luxembourg'): echo 'selected'; endif; ?> value='Europe/Luxembourg'><?php echo e(__('Europe/Luxembourg')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Madrid'): echo 'selected'; endif; ?> value='Europe/Madrid'><?php echo e(__('Europe/Madrid')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Malta'): echo 'selected'; endif; ?> value='Europe/Malta'><?php echo e(__('Europe/Malta')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Mariehamn'): echo 'selected'; endif; ?> value='Europe/Mariehamn'><?php echo e(__('Europe/Mariehamn')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Minsk'): echo 'selected'; endif; ?> value='Europe/Minsk'><?php echo e(__('Europe/Minsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Monaco'): echo 'selected'; endif; ?> value='Europe/Monaco'><?php echo e(__('Europe/Monaco')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Moscow'): echo 'selected'; endif; ?> value='Europe/Moscow'><?php echo e(__('Europe/Moscow')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Oslo'): echo 'selected'; endif; ?> value='Europe/Oslo'><?php echo e(__('Europe/Oslo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Paris'): echo 'selected'; endif; ?> value='Europe/Paris'><?php echo e(__('Europe/Paris')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Podgorica'): echo 'selected'; endif; ?> value='Europe/Podgorica'><?php echo e(__('Europe/Podgorica')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Prague'): echo 'selected'; endif; ?> value='Europe/Prague'><?php echo e(__('Europe/Prague')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Riga'): echo 'selected'; endif; ?> value='Europe/Riga'><?php echo e(__('Europe/Riga')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Rome'): echo 'selected'; endif; ?> value='Europe/Rome'><?php echo e(__('Europe/Rome')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Samara'): echo 'selected'; endif; ?> value='Europe/Samara'><?php echo e(__('Europe/Samara')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/San_Marino'): echo 'selected'; endif; ?> value='Europe/San_Marino'><?php echo e(__('Europe/San_Marino')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Sarajevo'): echo 'selected'; endif; ?> value='Europe/Sarajevo'><?php echo e(__('Europe/Sarajevo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Saratov'): echo 'selected'; endif; ?> value='Europe/Saratov'><?php echo e(__('Europe/Saratov')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Simferopol'): echo 'selected'; endif; ?> value='Europe/Simferopol'><?php echo e(__('Europe/Simferopol')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Skopje'): echo 'selected'; endif; ?> value='Europe/Skopje'><?php echo e(__('Europe/Skopje')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Sofia'): echo 'selected'; endif; ?> value='Europe/Sofia'><?php echo e(__('Europe/Sofia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Stockholm'): echo 'selected'; endif; ?> value='Europe/Stockholm'><?php echo e(__('Europe/Stockholm')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Tallinn'): echo 'selected'; endif; ?> value='Europe/Tallinn'><?php echo e(__('Europe/Tallinn')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Tirane'): echo 'selected'; endif; ?> value='Europe/Tirane'><?php echo e(__('Europe/Tirane')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Ulyanovsk'): echo 'selected'; endif; ?> value='Europe/Ulyanovsk'><?php echo e(__('Europe/Ulyanovsk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Uzhgorod'): echo 'selected'; endif; ?> value='Europe/Uzhgorod'><?php echo e(__('Europe/Uzhgorod')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Vaduz'): echo 'selected'; endif; ?> value='Europe/Vaduz'><?php echo e(__('Europe/Vaduz')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Vatican'): echo 'selected'; endif; ?> value='Europe/Vatican'><?php echo e(__('Europe/Vatican')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Vienna'): echo 'selected'; endif; ?> value='Europe/Vienna'><?php echo e(__('Europe/Vienna')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Vilnius'): echo 'selected'; endif; ?> value='Europe/Vilnius'><?php echo e(__('Europe/Vilnius')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Volgograd'): echo 'selected'; endif; ?> value='Europe/Volgograd'><?php echo e(__('Europe/Volgograd')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Warsaw'): echo 'selected'; endif; ?> value='Europe/Warsaw'><?php echo e(__('Europe/Warsaw')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Zagreb'): echo 'selected'; endif; ?> value='Europe/Zagreb'><?php echo e(__('Europe/Zagreb')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Zaporozhye'): echo 'selected'; endif; ?> value='Europe/Zaporozhye'><?php echo e(__('Europe/Zaporozhye')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Europe/Zurich'): echo 'selected'; endif; ?> value='Europe/Zurich'><?php echo e(__('Europe/Zurich')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Antananarivo'): echo 'selected'; endif; ?> value='Indian/Antananarivo'><?php echo e(__('Indian/Antananarivo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Chagos'): echo 'selected'; endif; ?> value='Indian/Chagos'><?php echo e(__('Indian/Chagos')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Christmas'): echo 'selected'; endif; ?> value='Indian/Christmas'><?php echo e(__('Indian/Christmas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Cocos'): echo 'selected'; endif; ?> value='Indian/Cocos'><?php echo e(__('Indian/Cocos')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Comoro'): echo 'selected'; endif; ?> value='Indian/Comoro'><?php echo e(__('Indian/Comoro')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Kerguelen'): echo 'selected'; endif; ?> value='Indian/Kerguelen'><?php echo e(__('Indian/Kerguelen')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Mahe'): echo 'selected'; endif; ?> value='Indian/Mahe'><?php echo e(__('Indian/Mahe')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Maldives'): echo 'selected'; endif; ?> value='Indian/Maldives'><?php echo e(__('Indian/Maldives')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Mauritius'): echo 'selected'; endif; ?> value='Indian/Mauritius'><?php echo e(__('Indian/Mauritius')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Mayotte'): echo 'selected'; endif; ?> value='Indian/Mayotte'><?php echo e(__('Indian/Mayotte')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Indian/Reunion'): echo 'selected'; endif; ?> value='Indian/Reunion'><?php echo e(__('Indian/Reunion')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Apia'): echo 'selected'; endif; ?> value='Pacific/Apia'><?php echo e(__('Pacific/Apia')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Auckland'): echo 'selected'; endif; ?> value='Pacific/Auckland'><?php echo e(__('Pacific/Auckland')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Bougainville'): echo 'selected'; endif; ?> value='Pacific/Bougainville'><?php echo e(__('Pacific/Bougainville')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Chatham'): echo 'selected'; endif; ?> value='Pacific/Chatham'><?php echo e(__('Pacific/Chatham')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Chuuk'): echo 'selected'; endif; ?> value='Pacific/Chuuk'><?php echo e(__('Pacific/Chuuk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Easter'): echo 'selected'; endif; ?> value='Pacific/Easter'><?php echo e(__('Pacific/Easter')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Efate'): echo 'selected'; endif; ?> value='Pacific/Efate'><?php echo e(__('Pacific/Efate')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Enderbury'): echo 'selected'; endif; ?> value='Pacific/Enderbury'><?php echo e(__('Pacific/Enderbury')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Fakaofo'): echo 'selected'; endif; ?> value='Pacific/Fakaofo'><?php echo e(__('Pacific/Fakaofo')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Fiji'): echo 'selected'; endif; ?> value='Pacific/Fiji'><?php echo e(__('Pacific/Fiji')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Funafuti'): echo 'selected'; endif; ?> value='Pacific/Funafuti'><?php echo e(__('Pacific/Funafuti')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Galapagos'): echo 'selected'; endif; ?> value='Pacific/Galapagos'><?php echo e(__('Pacific/Galapagos')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Gambier'): echo 'selected'; endif; ?> value='Pacific/Gambier'><?php echo e(__('Pacific/Gambier')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Guadalcanal'): echo 'selected'; endif; ?> value='Pacific/Guadalcanal'><?php echo e(__('Pacific/Guadalcanal')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Guam'): echo 'selected'; endif; ?> value='Pacific/Guam'><?php echo e(__('Pacific/Guam')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Honolulu'): echo 'selected'; endif; ?> value='Pacific/Honolulu'><?php echo e(__('Pacific/Honolulu')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Kiritimati'): echo 'selected'; endif; ?> value='Pacific/Kiritimati'><?php echo e(__('Pacific/Kiritimati')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Kosrae'): echo 'selected'; endif; ?> value='Pacific/Kosrae'><?php echo e(__('Pacific/Kosrae')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Kwajalein'): echo 'selected'; endif; ?> value='Pacific/Kwajalein'><?php echo e(__('Pacific/Kwajalein')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Majuro'): echo 'selected'; endif; ?> value='Pacific/Majuro'><?php echo e(__('Pacific/Majuro')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Marquesas'): echo 'selected'; endif; ?> value='Pacific/Marquesas'><?php echo e(__('Pacific/Marquesas')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Midway'): echo 'selected'; endif; ?> value='Pacific/Midway'><?php echo e(__('Pacific/Midway')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Nauru'): echo 'selected'; endif; ?> value='Pacific/Nauru'><?php echo e(__('Pacific/Nauru')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Niue'): echo 'selected'; endif; ?> value='Pacific/Niue'><?php echo e(__('Pacific/Niue')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Norfolk'): echo 'selected'; endif; ?> value='Pacific/Norfolk'><?php echo e(__('Pacific/Norfolk')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Noumea'): echo 'selected'; endif; ?> value='Pacific/Noumea'><?php echo e(__('Pacific/Noumea')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Pago_Pago'): echo 'selected'; endif; ?> value='Pacific/Pago_Pago'><?php echo e(__('Pacific/Pago_Pago')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Palau'): echo 'selected'; endif; ?> value='Pacific/Palau'><?php echo e(__('Pacific/Palau')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Pitcairn'): echo 'selected'; endif; ?> value='Pacific/Pitcairn'><?php echo e(__('Pacific/Pitcairn')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Pohnpei'): echo 'selected'; endif; ?> value='Pacific/Pohnpei'><?php echo e(__('Pacific/Pohnpei')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Port_Moresby'): echo 'selected'; endif; ?> value='Pacific/Port_Moresby'><?php echo e(__('Pacific/Port_Moresby')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Rarotonga'): echo 'selected'; endif; ?> value='Pacific/Rarotonga'><?php echo e(__('Pacific/Rarotonga')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Saipan'): echo 'selected'; endif; ?> value='Pacific/Saipan'><?php echo e(__('Pacific/Saipan')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Tahiti'): echo 'selected'; endif; ?> value='Pacific/Tahiti'><?php echo e(__('Pacific/Tahiti')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Tarawa'): echo 'selected'; endif; ?> value='Pacific/Tarawa'><?php echo e(__('Pacific/Tarawa')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Tongatapu'): echo 'selected'; endif; ?> value='Pacific/Tongatapu'><?php echo e(__('Pacific/Tongatapu')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Wake'): echo 'selected'; endif; ?> value='Pacific/Wake'><?php echo e(__('Pacific/Wake')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'Pacific/Wallis'): echo 'selected'; endif; ?> value='Pacific/Wallis'><?php echo e(__('Pacific/Wallis')); ?></option>
                                                                <option <?php if(env('TIMEZONE') == 'UTC'): echo 'selected'; endif; ?> value='UTC'><?php echo e(__('UTC')); ?></option>
                                                            </select>
                                                        <span></span>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="button-group text-center mt-4">
                                                                <button class="theme-btn m-2 submit-btn"><?php echo e(__('Update')); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/banaeaou/pro.banaeats.com/resources/views/admin/settings/system.blade.php ENDPATH**/ ?>