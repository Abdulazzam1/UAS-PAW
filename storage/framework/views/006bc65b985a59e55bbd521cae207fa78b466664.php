<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="title"><?php echo e(__('Add Supplier')); ?></h5>
            </div>
            <form method="post" action="/Supplier/Add" autocomplete="off">
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('suplier_name') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Nama Supplier')); ?></label>
                                <input autocomplete="off" type="text" name="suplier_name" class="form-control<?php echo e($errors->has('suplier_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nama Supplier')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'suplier_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('suplier_address') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Alamat')); ?></label>
                                <input autocomplete="off" type="text" name="suplier_address" class="form-control<?php echo e($errors->has('suplier_address') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Alamat')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'suplier_address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('suplier_contact') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Kontak Personal')); ?></label>
                                <input autocomplete="off" type="text" name="suplier_contact" class="form-control<?php echo e($errors->has('suplier_contact') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Kontak Personal')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'suplier_contact'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('contact_person') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Nomor Kontak')); ?></label>
                                <input autocomplete="off" type="tel" name="contact_person" class="form-control<?php echo e($errors->has('contact_person') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nomor Kontak')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'contact_person'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('note') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Catatan')); ?></label>
                                <input autocomplete="off" name="note" class="form-control<?php echo e($errors->has('note') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Catatan')); ?>">
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

<?php echo $__env->make('layouts.app', ['page' => __('Add Supplier'), 'pageSlug' => 'supplier'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Source\NewPOS\resources\views/supplier/add.blade.php ENDPATH**/ ?>