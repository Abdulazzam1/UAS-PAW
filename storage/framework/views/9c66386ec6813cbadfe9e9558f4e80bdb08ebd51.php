<?php $__env->startSection('content'); ?>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="/Login">
            <?php echo csrf_field(); ?>
            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="<?php echo e(asset('black')); ?>/img/card-primary.png" alt="">
                    <h1 class="card-title"><?php echo e(__('Login')); ?></h1>
                </div>
                <div class="card-body">
                    <!-- <p class="text-dark mb-2">Sign in with <strong>admin@black.com</strong> and the password <strong>secret</strong></p> -->
                    <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" autocomplete="off">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="input-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="<?php echo e(__('Password')); ?>" name="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <?php if(session('failed')): ?>
                    <div class="alert alert-danger fade show" role="alert">
                        <?php echo e(session('failed')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                    <div class="alert alert-success fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Login')); ?></button>
                    <div class="pull-left">
                        <h6>
                            <a href="/Register" class="link footer-link"><?php echo e(__('Create Account')); ?></a>
                        </h6>
                    </div>
                    <!-- <div class="pull-right">
                        <h6>
                            <a href="" class="link footer-link"><?php echo e(__('Forgot password?')); ?></a>
                        </h6>
                    </div> -->
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/auth/login.blade.php ENDPATH**/ ?>