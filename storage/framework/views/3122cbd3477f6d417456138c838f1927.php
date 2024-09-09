<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/obat">obat</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <hr>
                            <div class="row mb-2">
                                <?php if($obat != NULL): ?>
                                    <div class="col-lg-5 col-md-4 label">Jenis Obat <?php echo e($obat->jenis); ?></div>
                                <?php endif; ?>
                            </div>
                            <form action="" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="text" name="obat_id" value="<?php echo e($obat->id); ?>" hidden>
                                <button type="submit" class="btn btn-primary btn-sm btn-primary mb-3">Minum Obat</button>
                            </form>

                            <?php
                                $jadwal = App\Models\ObatJadwal::where('obat_id', $obat->id)->get()
                            ?>

                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button type="submit" class="btn btn-primary btn-sm btn-success mb-2"><?php echo e($no++); ?></button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <hr>
                            <a href="/obat_ibu"class="btn btn-sm btn-primary mt-3">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php
                        $jadwalObat = App\Models\ObatJadwal::where('obat_id', $obat->id)->count();
                        $jadwal = ($jadwalObat)*(0.35);
                    ?>
                    <h5 class="card-title">Kepatuhan Minum Obat <b class="text text-danger"><?php echo e($jadwal); ?> %</b></h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo e($jadwal); ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/member/obat/view.blade.php ENDPATH**/ ?>