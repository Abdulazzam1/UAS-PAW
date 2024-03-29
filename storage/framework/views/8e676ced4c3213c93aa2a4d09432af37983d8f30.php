<?php $__env->startSection('content'); ?>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="/Register">
            <?php echo csrf_field(); ?>
            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="<?php echo e(asset('black')); ?>/img/card-primary.png" alt="">
                    <h1 class="card-title"><?php echo e(__('Register')); ?></h1>
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
                    <div class="input-group<?php echo e($errors->has('nama') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>
                        <input type="text" placeholder="<?php echo e(__('Nama')); ?>" name="nama" class="form-control<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'nama'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <div class="input-group<?php echo e($errors->has('password_confirmed') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="<?php echo e(__('Konfirmasi Password')); ?>" name="password_confirmed" class="form-control<?php echo e($errors->has('password_confirmed') ? ' is-invalid' : ''); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'password_confirmed'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="input-group<?php echo e($errors->has('position') ? 'has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-bag-16"></i>
                            </div>
                        </div>
                        <select id="pilih_posisi" placeholder="<?php echo e(__('Posisi')); ?>" name="position" class="form-control<?php echo e($errors->has('position') ? 'is-invalid' : ''); ?>">
                            <option disabled selected>Pilih posisi...</option>
                            <option value="kasir">Kasir</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Get Started')); ?></button>
                    <div class="pull-left">
                        <h6>
                            <a href="/Login" class="link footer-link"><?php echo e(__('Login')); ?></a>
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

<?php echo $__env->make('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Source\NewPOS\resources\views/auth/register.blade.php ENDPATH**/ ?>