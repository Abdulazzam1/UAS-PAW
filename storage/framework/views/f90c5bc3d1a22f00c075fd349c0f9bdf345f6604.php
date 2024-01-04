
                        
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/Sales/Save/<?php echo e(session('invoice')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group<?php echo e($errors->has('customer') ? ' has-danger' : ''); ?>">
                            <label><?php echo e(__('Customer')); ?></label>
                            <input autocomplete="off" type="text" name="customer" class="text-dark form-control<?php echo e($errors->has('customer') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Customer')); ?>">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'customer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <input type="hidden" name="transaction_id" value="<?php echo e($transaction_id); ?>">
                        <input type="hidden" name="profit" value="<?php echo e($ttl_profit); ?>">
                        <div class="form-group<?php echo e($errors->has('customer') ? ' has-danger' : ''); ?>">
                            <label><?php echo e(__('Bayar')); ?></label>
                            <input autocomplete="off" type="text" placeholder="<?php echo e($ttl_amount); ?>" name="amount" class="text-dark form-control<?php echo e($errors->has('amount') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Bayar')); ?>">
                            <?php echo $__env->make('alerts.feedback', ['field' => 'amount'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-success">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <?php if(session('success')): ?>
                    <div class="alert alert-success fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="col-4 text-right">
                            Invoice: <?php echo e(session('invoice')); ?>

                        </div>
                    </div>
                    <form action="/Sales/Incoming" method="post" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select required name="product_id" class="form-control" placeholder="Pilih produk...">
                                        <option></option>
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option class="text-dark" value="<?php echo e($prod->product_id); ?>"><?php echo e($prod->product_code); ?> - <?php echo e($prod->product_name); ?> - <?php echo e($prod->gen_name); ?> | Expires at: <?php echo e($prod->expiry_date); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <input required autocomplete="off" type="number" name="qty" class="form-control" placeholder="<?php echo e(__('Qty')); ?>">
                                </div>
                            </div>
                            <div class="col-4 text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Add Product</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Profit</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->product_code); ?></td>
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e($data->product_category); ?></td>
                                    <td><?php echo e($data->price); ?></td>
                                    <td><?php echo e($data->qty); ?></td>
                                    <td><?php echo e($data->amount); ?></td>
                                    <td><?php echo e($data->profit); ?></td>
                                    <td>
                                        <form method="post" action="/Sales/Cancel/<?php echo e($data->transaction_id); ?>/<?php echo e($data->product_code); ?>/<?php echo e($data->qty); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-sm btn-danger" style="cursor: pointer !important;" type="submit">
                                                <i class="tim-icons icon-trash-simple"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Total Amount: </td>
                                    <td>Total Profit: </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total: </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php if($amount !== null): ?>
                                            <?php $__currentLoopData = $amount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($amount->total_amount); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            0
                                            <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($profit !== null): ?>
                                            <?php $__currentLoopData = $profit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($profit->total_profit); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>   
                                            0
                                        <?php endif; ?>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#exampleModal">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['page' => __('Sales'), 'pageSlug' => 'sales'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Source\NewPOS\resources\views/sales/index.blade.php ENDPATH**/ ?>