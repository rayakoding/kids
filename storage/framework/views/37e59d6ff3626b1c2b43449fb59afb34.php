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
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Pemeriksaan ke</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="periksa ke" name="periksa_ke" value="<?php echo e(old('keguguran')); ?>">
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
                                <label class="col-sm-5 col-form-label">Noreg/Kode/Nama</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="kehamilan_id" value="<?php echo e(old('kehamilan_id')); ?>">>
                                        <option selected>Pilih Kehamilan</option>
                                        <?php $__currentLoopData = $kehamilan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($ry->id); ?>"><?php echo e($ry->noreg); ?> / G<?php echo e($ry->hamil); ?>P<?php echo e($ry->lahir); ?>A<?php echo e($ry->aborsi); ?> / <?php echo e($ry->user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Nama Puskesmas</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="puskesmas_id" value="<?php echo e(old('puskesmas_id')); ?>">
                                        <option selected>Pilih Puskesmas</option>
                                        <?php $__currentLoopData = $puskesmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tanggal Periksa </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl" value="<?php echo e(old('tgl')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan (kg)</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="<?php echo e(old('bb')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">TFU</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tfu" value="<?php echo e(old('tfu')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tekanan Darah </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_a"  value="<?php echo e(old('td_a')); ?>">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_b" value="<?php echo e(old('td_b')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Imunisasi" name="imunisasi" value="<?php echo e(old('imunisasi')); ?>">
                                        <option value="1">Imunisasi</option>
                                        <option value="0">Tidak Imunisasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Denyut Janin</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="denyut" value="<?php echo e(old('denyut')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">HB</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="hb" value="<?php echo e(old('hb')); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/periksa/add.blade.php ENDPATH**/ ?>