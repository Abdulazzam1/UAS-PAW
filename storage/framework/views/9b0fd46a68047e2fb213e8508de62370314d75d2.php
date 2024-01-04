
                        
<?php $__env->startSection('content'); ?>
<div class="content" onload="window.print();">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="col-4 text-right">
                            Invoice: <?php echo e(session('invoice')); ?>

                        </div>
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
                                            <?php echo e($amount); ?>

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
                                <tr>
                                    <td>Change: </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo e($change); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['page' => __('Struk'), 'pageSlug' => 'Struk'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/struck.blade.php ENDPATH**/ ?>