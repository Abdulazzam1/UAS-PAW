                        
<?php $__env->startSection('content'); ?>
<div class="content">
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
                            <h4 class="card-title">Suppliers</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="/Supplier/Add" class="btn btn-sm btn-primary">Add Supplier</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kontak Supplier</th>
                                    <th scope="col">Kontak Personal</th>
                                    <th scope="col">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->suplier_name); ?></td>
                                    <td><?php echo e($data->suplier_address); ?></td>
                                    <td><?php echo e($data->suplier_contact); ?></td>
                                    <td><?php echo e($data->contact_person); ?></td>
                                    <td><?php echo e($data->note); ?></td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="/Supplier/Edit/<?php echo e($data->suplier_id); ?>">Edit</a>
                                                <form method="post" action="/Supplier/Delete/<?php echo e($data->suplier_id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="dropdown-item" style="cursor: pointer !important;" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => __('Supplier'), 'pageSlug' => 'supplier'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/supplier/index.blade.php ENDPATH**/ ?>