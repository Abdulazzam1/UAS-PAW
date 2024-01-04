<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="title"><?php echo e(__('Edit Product')); ?></h5>
            </div>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="post" action="/Produk/Edit/<?php echo e($prod->product_id); ?>" autocomplete="off">
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('product_code') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Barcode')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->product_code); ?>" type="text" name="product_code" class="form-control<?php echo e($errors->has('product_code') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Barcode')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'product_code'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('product_category') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Kategori')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->product_category); ?>" type="text" name="product_category" class="form-control<?php echo e($errors->has('product_category') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Kategori')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'product_category'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('product_name') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Nama Produk')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->product_name); ?>" type="text" name="product_name" class="form-control<?php echo e($errors->has('product_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nama Produk')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'product_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('gen_name') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Nama Brand')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->gen_name); ?>" type="text" name="gen_name" class="form-control<?php echo e($errors->has('gen_name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nama Brand')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'gen_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('supplier') ? ' has-danger' : ''); ?>">
                                <label for="supplier"><?php echo e(__('Supplier')); ?></label>
                                <select class="form-control" id="supplier" name="supplier">
                                    <option selected value="<?php echo e($prod->supplier); ?>"><?php echo e($prod->supplier); ?></option>
                                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($supp->suplier_name); ?>" class="text-dark"><?php echo e($supp->suplier_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group<?php echo e($errors->has('date_arrival') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Tanggal Kedatangan')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->date_arrival); ?>" type="date" name="date_arrival" class="form-control<?php echo e($errors->has('date_arrival') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Tanggal Kedatangan')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'date_arrival'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('expiry_date') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Tanggal Expired')); ?></label>
                                <input autocomplete="off" value="<?php echo e($prod->expiry_date); ?>" type="date" name="expiry_date" class="form-control<?php echo e($errors->has('expiry_date') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Tanggal Expired')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'expiry_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('price') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Harga Jual')); ?></label>
                                <input onkeyup="sum()" value="<?php echo e($prod->price); ?>" autocomplete="off" id="price" type="text" name="price" class="form-control<?php echo e($errors->has('price') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Harga Jual')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'price'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('o_price') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Harga Beli')); ?></label>
                                <input onkeyup="sum()" value="<?php echo e($prod->o_price); ?>" autocomplete="off" id="o_price" type="text" name="o_price" class="form-control<?php echo e($errors->has('o_price') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Harga Beli')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'o_price'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('profit') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Profit')); ?></label>
                                <input readonly autocomplete="off" value="<?php echo e($prod->profit); ?>" id="profit" type="number" name="profit" class="form-control<?php echo e($errors->has('profit') ? ' is-invalid' : ''); ?> text-light" placeholder="<?php echo e(__('Profit')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'profit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('qty') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Kuantitas')); ?></label>
                                <input onkeyup="sum()" autocomplete="off" value="<?php echo e($prod->qty); ?>" id="qty" type="number" name="qty" class="form-control<?php echo e($errors->has('qty') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Kuantitas')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'qty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <input type="hidden" id="qty_sold" value="<?php echo e($prod->qty_sold); ?>" name="qty_sold">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary"><?php echo e(__('Save')); ?></button>
                </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_js'); ?>
<script>
    function sum() {
        var txtSellingPrice = document.getElementById("price").value;
        var txtOriginalPrice = document.getElementById("o_price").value;
        var result = parseInt(txtSellingPrice) - parseInt(txtOriginalPrice);
        if(!isNaN(result)) {
            document.getElementById("profit").value = result;
        }
        var txtQuantity = document.getElementById("qty").value;
        var result = parseInt(txtQuantity);
        if(!isNaN(result)) {
            document.getElementById("qty_sold").value = result;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => __('Edit Product'), 'pageSlug' => 'product'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/produk/edit.blade.php ENDPATH**/ ?>