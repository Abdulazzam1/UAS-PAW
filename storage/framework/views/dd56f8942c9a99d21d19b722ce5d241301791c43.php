<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>POS | DIGIMART</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('black')); ?>/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?php echo e(asset('black')); ?>/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="<?php echo e(asset('black')); ?>/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="<?php echo e(asset('black')); ?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="<?php echo e(asset('black')); ?>/css/theme.css" rel="stylesheet" />
    </head>
    <body class="<?php echo e($class ?? ''); ?>">
        <?php 
            $Auth = session('DataLogin');
        ?>
        <?php if($Auth): ?>
            <div class="wrapper">
                    <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="main-panel">
                    <?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="content">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <form id="logout-form" action="" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        <?php else: ?>
            <?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper wrapper-full-page">
                <div class="full-page <?php echo e($contentClass ?? ''); ?>">
                    <div class="content">
                        <div class="container">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
        <script src="<?php echo e(asset('black')); ?>/js/core/jquery.min.js"></script>
        <script src="<?php echo e(asset('black')); ?>/js/core/popper.min.js"></script>
        <script src="<?php echo e(asset('black')); ?>/js/core/bootstrap.min.js"></script>
        <script src="<?php echo e(asset('black')); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <!-- Place this tag in your head or just before your close body tag. -->
        
        <!-- Chart JS -->
        
        <!--  Notifications Plugin    -->
        <script src="<?php echo e(asset('black')); ?>/js/plugins/bootstrap-notify.js"></script>

        <script src="<?php echo e(asset('black')); ?>/js/black-dashboard.min.js?v=1.0.0"></script>
        <script src="<?php echo e(asset('black')); ?>/js/theme.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <?php echo $__env->yieldContent('script_js'); ?>

        <?php echo $__env->yieldPushContent('js'); ?>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    $('.fixed-plugin a').click(function(event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .background-color span').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }

                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }
                    });

                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            blackDashboard.showSidebarMessage('Sidebar mini activated...');
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });

                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                            var $btn = $(this);

                            if (white_color == true) {
                                $('body').addClass('change-background');
                                setTimeout(function() {
                                    $('body').removeClass('change-background');
                                    $('body').removeClass('white-content');
                                }, 900);
                                white_color = false;
                            } else {
                                $('body').addClass('change-background');
                                setTimeout(function() {
                                    $('body').removeClass('change-background');
                                    $('body').addClass('white-content');
                                }, 900);

                                white_color = true;
                            }
                    });
                });
            });
        </script>
        <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html>
<?php /**PATH D:\Laravel Source\NewPOS\resources\views/layouts/app.blade.php ENDPATH**/ ?>