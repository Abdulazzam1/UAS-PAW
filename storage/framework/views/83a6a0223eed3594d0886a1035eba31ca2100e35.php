<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category"></h5>
                            <h2 class="card-title">Penjualan</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="grafikPenjualan" class="chartjs-render-monitor" style="width:70%; height: 60%;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category"></h5>
                            <h2 class="card-title">Supplier</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                            <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($supplier->suplier_name); ?></td>
                                <td><?php echo e($supplier->suplier_address); ?></td>
                                <td><?php echo e($supplier->suplier_contact); ?></td>
                                <td><?php echo e($supplier->contact_person); ?></td>
                                <td><?php echo e($supplier->note); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category"></h5>
                            <h2 class="card-title">Produk</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">Barcode</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Nama Brand</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Kedatangan</th>
                                <th scope="col">Expire</th>
                                <th scope="col">Harga Beli</th>
                                <th scope="col">Harga Jual</th>
                                <th scope="col">QTY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->product_code); ?></td>
                                <td><?php echo e($product->product_category); ?></td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td><?php echo e($product->gen_name); ?></td>
                                <td><?php echo e($product->supplier); ?></td>
                                <td><?php echo e($product->date_arrival); ?></td>
                                <td><?php echo e($product->expiry_date); ?></td>
                                <td><?php echo e($product->o_price); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo e($product->qty); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('black')); ?>/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('script_js'); ?>
<script>
    gradientChartOptionsConfiguration =  {
    maintainAspectRatio: false,
    legend: {
        display: false
    },

    tooltips: {
        backgroundColor: '#fff',
        titleFontColor: '#333',
        bodyFontColor: '#666',
        bodySpacing: 4,
        xPadding: 12,
        mode: "nearest",
        intersect: 0,
        position: "nearest"
    },
    responsive: true,
    scales:{
        yAxes: [{
        barPercentage: 1.6,
            gridLines: {
                drawBorder: false,
                color: 'rgba(29,140,248,0.0)',
                zeroLineColor: "transparent",
            },
            ticks: {
                suggestedMin:50,
                suggestedMax: 110,
                padding: 20,
                fontColor: "#9a9a9a"
            }
            }],

        xAxes: [{
        barPercentage: 1.6,
            gridLines: {
                drawBorder: false,
                color: 'rgba(220,53,69,0.1)',
                zeroLineColor: "transparent",
            },
            ticks: {
                padding: 20,
                fontColor: "#9a9a9a"
            }
            }]
        }
    };

    var ctx = document.getElementById("grafikPenjualan").getContext("2d");

    var gradientStroke = ctx.createLinearGradient(0,230,0,50);

    gradientStroke.addColorStop(1, 'rgba(72,72,176,0.2)');
    gradientStroke.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke.addColorStop(0, 'rgba(119,52,169,0)');

    fetch('/data-penjualan').then(response => response.json())
    .then(res => {
        var myChart = new Chart(ctx, {
        type: 'line',
        data:{ 
                labels: res.map(item => item.name),
                datasets: [{
                    label: "Data",
                    fill: true,
                    backgroundColor: gradientStroke,
                    borderColor: '#d048b6',
                    borderWidth: 2,
                    borderDash: [],
                    borderDashOffset: 0.0,
                    pointBackgroundColor: '#d048b6',
                    pointBorderColor:'rgba(255,255,255,0)',
                    pointHoverBackgroundColor: '#d048b6',
                    pointBorderWidth: 20,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 15,
                    pointRadius: 4,
                    data: res.map(item => item.qty),
                }],
                options: gradientChartOptionsConfiguration
            }
        }); 
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NewPOS\resources\views/Dashboard.blade.php ENDPATH**/ ?>