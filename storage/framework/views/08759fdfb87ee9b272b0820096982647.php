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

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($title); ?></h5>
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="text" name="kehamilan_id" value="<?php echo e($periksa->kehamilan_id); ?>" hidden>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Pemeriksaan ke</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="periksa ke" name="periksa_ke" value="<?php echo e(old('keguguran')); ?>">
                                        <?php if($periksa->periksa_ke == 'Pertama'): ?>
                                            <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Pertama - Trisemester I </option>
                                        <?php else: ?>
                                            <?php if($periksa->periksa_ke == 'Kedua'): ?>
                                                <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Kedua - Trisemester I </option>
                                            <?php else: ?>
                                                <?php if($periksa->periksa_ke == 'Ketiga'): ?>
                                                    <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Ketiga - Trisemester I </option>
                                                <?php else: ?>
                                                    <?php if($periksa->periksa_ke == 'Keempat'): ?>
                                                        <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Keempat - Trisemester II </option>
                                                    <?php else: ?>
                                                        <?php if($periksa->periksa_ke == 'Kelima'): ?>
                                                            <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Kelima - Trisemester II </option>
                                                        <?php else: ?>
                                                            <?php if($periksa->periksa_ke == 'Keenam'): ?>
                                                                <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Keenam - Trisemester II </option>
                                                            <?php else: ?>
                                                                <?php if($periksa->periksa_ke == 'Ketujuh'): ?>
                                                                    <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Ketujuh - Trisemester III </option>
                                                                <?php else: ?>
                                                                    <?php if($periksa->periksa_ke == 'Delapan'): ?>
                                                                        <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Delapan - Trisemester III </option>
                                                                    <?php else: ?>
                                                                        <?php if($periksa->periksa_ke == 'Sembilan'): ?>
                                                                            <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Sembilan - Trisemester III </option>
                                                                        <?php else: ?>
                                                                            <?php if($periksa->periksa_ke == 'Sepuluh'): ?>
                                                                                <option value="<?php echo e($periksa->periksa_ke); ?>" selected>Sepuluh - Trisemester III </option>
                                                                            <?php else: ?>

                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <option value="Pertama">Pertama - Trisemester I </option>
                                        <option value="Kedua">Kedua - Trisemester I</option>
                                        <option value="Ketiga">Ketiga - Trisemester I</option>
                                        <option value="Keempat">Keempat - Trisemester II</option>
                                        <option value="Kelima">Kelima - Trisemester II</option>
                                        <option value="Keenam">Keenam - Trisemester II</option>
                                        <option value="Ketujuh">Ketujuh - Trisemester III</option>
                                        <option value="Kedelapan">Kedelapan - Trisemester III</option>
                                        <option value="Kesembilan">Kesembilan - Trisemester III</option>
                                        <option value="Kesepuluh">Kesepuluh - Trisemester III</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tanggal Periksa</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl" value="<?php echo e($periksa->tgl); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Tempat Periksa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="puskesmas_id">
                                        <option value="<?php echo e($periksa->puskesmas_id); ?>" selected><?php echo e($periksa->puskesmas->nama); ?></option>
                                        <?php $__currentLoopData = $puskesmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($r->id); ?>">Puskesmas <?php echo e($r->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan (kg)</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="<?php echo e($periksa->bb); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">TFU</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tfu" value="<?php echo e($periksa->tfu); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tekanan Darah </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_a" value="<?php echo e($periksa->td_a); ?>">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_b" value="<?php echo e($periksa->td_b); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="imunisasi">
                                        <?php if($periksa->imunisasi == 0): ?>
                                            <option value="<?php echo e($periksa->imunisasi); ?>" selected>Tidak Imunisasi</option>
                                        <?php else: ?>
                                            <option value="<?php echo e($periksa->imunisasi); ?>" selected>Imunisasi</option>
                                        <?php endif; ?>
                                        <option value="1">Imunisasi</option>
                                        <option value="0">Tidak Imunisasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Denyut Janin</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="denyut" value="<?php echo e($periksa->denyut); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">HB</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="hb" value="<?php echo e($periksa->hb); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/periksa/edit.blade.php ENDPATH**/ ?>