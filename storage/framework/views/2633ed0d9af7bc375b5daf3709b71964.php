<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/periksa">Periksa</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body pt-3">
                            <h6><strong>Data pemeriksaan pada kehamilan ke <?php echo e($periksa->kehamilan->hamil); ?></strong></h6>
                            <hr>
                            <div class="row mb-2">
                                <div class="col-lg-3">Ibu Hamil</div>
                                <div class="col-lg-8">: <b><?php echo e($periksa->kehamilan->user->name); ?></b></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Periksa </div>
                                <div class="col-lg-8">: Ke <?php echo e($periksa->periksa_ke); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tempat Periksa</div>
                                <div class="col-lg-8">: Puskesmas <?php echo e($periksa->puskesmas->nama); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tangal Periksa</div>
                                <div class="col-lg-8">: <?php echo e(date('d F Y', strtotime($periksa->tgl))); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Berat Badan</div>
                                <div class="col-lg-8">: <?php echo e($periksa->bb); ?> kg</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">TFU</div>
                                <div class="col-lg-8">: <?php echo e($periksa->tfu); ?> cm</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tekanan Darah</div>
                                <div class="col-lg-8">:
                                    <?php if($periksa->td_a == 90): ?>
                                        <b href="" class="text text-danger"><?php echo e($periksa->td_a); ?>/<?php echo e($periksa->td_b); ?> mmHg</b>
                                    <?php else: ?>
                                        <?php if($periksa->td_a == 140): ?>
                                            <b href="" class="text text-danger"><?php echo e($periksa->td_a); ?>/<?php echo e($periksa->td_b); ?> mmHg</b>
                                        <?php else: ?>
                                            <?php echo e($periksa->td_a); ?>/<?php echo e($periksa->td_b); ?> mmHg
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Imunisasi</div>
                                <div class="col-lg-8">:
                                    <?php if($periksa->imunisasi == 0): ?>
                                        tidak
                                    <?php else: ?>
                                        ya
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Denyut</div>
                                <div class="col-lg-8">:
                                    <?php if($periksa->denyut >= 1 && $periksa->denyut <= 120): ?>
                                        <b class="text text-danger"><?php echo e($periksa->denyut); ?> bpm</b>
                                    <?php else: ?>
                                        <?php echo e($periksa->denyut); ?> bpm
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">HB</div>
                                <div class="col-lg-8">:
                                    <?php if($periksa->hb >= 1 && $periksa->hb <= 11): ?>
                                        <a class="text text-danger"><?php echo e($periksa->hb); ?> g/dL</b>
                                    <?php else: ?>
                                        <?php echo e($periksa->hb); ?> g/dL
                                    <?php endif; ?>
                                </div>
                            </div>
                            <small class="text text-danger">Catatan Kehamilan :</small>
                            <?php if($periksa->td_a == 90): ?>
                                <li><small>Resiko Tekanan Darah DISTOLIK</small></li>
                            <?php endif; ?>
                            <?php if($periksa->td_a == 140): ?>
                                <li><small>Resiko Tekanan Darah HIPERTENSI</small></li>
                            <?php endif; ?>
                            <?php if($periksa->denyut >= 1 && $periksa->denyut <= 120): ?>
                                <li><small>Denyut Jantung Janin TIDAK NORMAL</small></li>
                            <?php endif; ?>
                            <?php if($periksa->hb >= 1 && $periksa->hb <= 11): ?>
                                <li><small>Kadar Hemoglobin (Hb) TIDAK NORMAL</small></li>
                            <?php endif; ?>
                            <hr>
                            <a href="/periksa/edit/<?php echo e($periksa->id); ?>"class="btn btn-sm btn-primary mt-3">ubah data</a>
                            <a href="/periksa"class="btn btn-sm btn-primary mt-3">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/periksa/view.blade.php ENDPATH**/ ?>