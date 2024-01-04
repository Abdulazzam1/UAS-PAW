<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title"><?php echo e(__('Marketing')); ?></h3>
                    <p class="description">
                        <?php echo e(__('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.')); ?>

                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title"><?php echo e(__('Fully Coded in HTML5')); ?></h3>
                    <p class="description">
                        <?php echo e(__('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.')); ?>

                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title"><?php echo e(__('Built Audience')); ?></h3>
                    <p class="description">
                        <?php echo e(__('There is also a Fully Customizable CMS Admin Dashboard for this product.')); ?>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <img class="card-img" src="<?php echo e(asset('black')); ?>/img/card-primary.png" alt="Card image">
                    <h4 class="card-title"><?php echo e(__('Register')); ?></h4>
                </div>
                <form class="form" method="post" action="">
                    <?php echo csrf_field(); ?>

                    <div class="card-body">
                        <div class="input-group<?php echo e($errors->has('store_name') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-bank"></i>
                                </div>
                            </div>
                            <input type="text" name="store_name" class="form-control<?php echo e($errors->has('store_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Store Name')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="input-group<?php echo e($errors->has('Address') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-square-pin"></i>
                                </div>
                            </div>
                            <input type="text" name="Address" class="form-control<?php echo e($errors->has('Address') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Address')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'Address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="input-group<?php echo e($errors->has('NamaPIC') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-square-pin"></i>
                                </div>
                            </div>
                            <input type="text" name="NamaPIC" class="form-control<?php echo e($errors->has('NamaPIC') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('PIC Name')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'NamaPIC'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="input-group<?php echo e($errors->has('NoPIC') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="NoPIC" class="form-control<?php echo e($errors->has('NoPIC') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('PIC Phone Number')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'NoPIC'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="input-group<?php echo e($errors->has('PhoneNumber') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-mobile"></i>
                                </div>
                            </div>
                            <input type="text" name="PhoneNumber" class="form-control<?php echo e($errors->has('PhoneNumber') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Phone Number')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'PhoneNumber'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="input-group<?php echo e($errors->has('ZipCode') ? ' has-danger' : ''); ?>">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="text" name="ZipCode" class="form-control<?php echo e($errors->has('ZipCode') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('ZIP Code')); ?>" autocomplete="off">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'ZipCode'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                <?php echo e(__('I agree to the')); ?>

                                <a href="#"><?php echo e(__('terms and conditions')); ?></a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg"><?php echo e(__('Submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/auth/register_toko.blade.php ENDPATH**/ ?>