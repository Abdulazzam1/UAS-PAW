<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini"><?php echo e(__('POS')); ?></a>
            <a href="#" class="simple-text logo-normal"><?php echo e(__('DigiMart')); ?></a>
        </div>
        <ul class="nav">
            <li <?php if($pageSlug == 'dashboard'): ?> class="active " <?php endif; ?>>
                <a href="/">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p><?php echo e(__('Dashboard')); ?></p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="false">
                    <i class="tim-icons icon-settings" ></i>
                    <span class="nav-link-text" ><?php echo e(__('Master')); ?></span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li <?php if($pageSlug == 'supplier'): ?> class="active " <?php endif; ?>>
                            <a href="/Supplier">
                                <i class="tim-icons icon-delivery-fast"></i>
                                <p><?php echo e(__('Supplier')); ?></p>
                            </a>
                        </li>
                        <li <?php if($pageSlug == 'product'): ?> class="active " <?php endif; ?>>
                            <a href="/Produk">
                                <i class="tim-icons icon-app"></i>
                                <p><?php echo e(__('Produk')); ?></p>
                            </a>
                        </li>
                        <li <?php if($pageSlug == 'customer'): ?> class="active " <?php endif; ?>>
                            <a href="/Customer">
                                <i class="tim-icons icon-single-02"></i>
                                <p><?php echo e(__('Customer')); ?></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($pageSlug == 'sales'): ?> class="active " <?php endif; ?>>
                <a href="/Sales">
                    <i class="tim-icons icon-cart"></i>
                    <p><?php echo e(__('Sales')); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH D:\Laravel Source\NewPOS\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>