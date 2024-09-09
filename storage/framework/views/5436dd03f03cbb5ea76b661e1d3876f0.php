<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/kehamilan">Kehamilan</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Kepatuhan <span>Minum Obat</span></h5>
                    <div id="reportsChart"></div>

                    <?php
                        $obat_fe = App\Models\Obat::where('kehamilan_id', $kehamilan->id)->where('jenis', 1)->get();
                        $vitamin = App\Models\Obat::where('kehamilan_id', $kehamilan->id)->where('jenis', 2)->get();
                        $lainya = App\Models\Obat::where('kehamilan_id', $kehamilan->id)->where('jenis', 3)->get();
                        $kalsium = App\Models\Obat::where('kehamilan_id', $kehamilan->id)->where('jenis', 4)->get();
                    ?>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                            series: [{
                            name: 'Berat Badan',
                            data: [
                                <?php $__currentLoopData = $vitamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    '<?php echo e($ry->jenis); ?>',
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ]
                            }],
                            chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                                show: false
                            },
                            },
                            markers: {
                            size: 4
                            },
                            colors: ['#4154f1'],
                            fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100]
                            }
                            },
                            dataLabels: {
                            enabled: false
                            },
                            stroke: {
                            curve: 'smooth',
                            width: 2
                            },
                            xaxis: {
                            type: 'text',
                            categories: [
                                <?php $__currentLoopData = $vitamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    "<?php echo e(date('d/m', strtotime($ry->created_at))); ?>",
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                ]
                            },
                            tooltip: {
                            x: {
                                format: 'dd/MM/yy HH:mm'
                            },
                            }
                        }).render();
                        });
                    </script>
                    <hr>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/kehamilan/obat_dua.blade.php ENDPATH**/ ?>