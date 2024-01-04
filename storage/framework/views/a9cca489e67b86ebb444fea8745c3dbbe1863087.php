<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="title"><?php echo e(__('Add Customer')); ?></h5>
            </div>
            <form method="post" action="/Customer/Add" autocomplete="off">
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('customer_name') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Nama')); ?></label>
                                <input autocomplete="off" type="text" name="customer_name" class="form-control<?php echo e($errors->has('customer_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nama')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'customer_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('address') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Alamat')); ?></label>
                                <input autocomplete="off" type="text" name="address" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Alamat')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'suplier_address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('contact') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Kontak')); ?></label>
                                <input autocomplete="off" type="tel" name="contact" class="form-control<?php echo e($errors->has('contact') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Kontak')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'contact'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('membership_number') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('No Member')); ?></label>
                                <input autocomplete="off" type="text" name="membership_number" class="form-control<?php echo e($errors->has('membership_number') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('No Member')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'membership_number'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('expected_date') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Berlaku Hingga')); ?></label>
                                <input autocomplete="off" type="date" name="expected_date" class="form-control<?php echo e($errors->has('expected_date') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Catatan')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'expected_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('note') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Catatan')); ?></label>
                                <input autocomplete="off" name="note" class="form-control<?php echo e($errors->has('note') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Catatan')); ?>"></note>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'note'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary"><?php echo e(__('Save')); ?></button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => __('Add Customer'), 'pageSlug' => 'customer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/customer/add.blade.php ENDPATH**/ ?>