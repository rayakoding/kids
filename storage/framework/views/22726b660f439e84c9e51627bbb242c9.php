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

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($title); ?></h5>
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="text" name="user_id" value="<?php echo e($kehamilan->user_id); ?>" hidden>
                            <input type="text" name="noreg" value="<?php echo e($kehamilan->noreg); ?>" hidden>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Area / Desa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="desa_id">
                                        <option value="<?php echo e($kehamilan->desa->id); ?>" selected><?php echo e($kehamilan->desa->nama); ?></option>
                                        <?php $__currentLoopData = $desa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($r->id); ?>">Desa <?php echo e($r->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Kehamilan</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="hamil">
                                        <?php if($kehamilan->hamil == 1): ?>
                                            <option value="1">Kehamilan Pertama</option>
                                        <?php else: ?>
                                            <?php if($kehamilan->hamil == 2): ?>
                                                <option value="2">Kehamilan Kedua</option>
                                            <?php else: ?>
                                                <?php if($kehamilan->hamil == 3): ?>
                                                    <option value="3">Kehamilan Ketiga</option>
                                                <?php else: ?>
                                                    <?php if($kehamilan->hamil == 4): ?>
                                                        <option value="4">Kehamilan Keempat</option>
                                                    <?php else: ?>
                                                        <?php if($kehamilan->hamil == 5): ?>
                                                            <option value="5">Kehamilan Kelima</option>
                                                        <?php else: ?>
                                                            <option value="6">Kehamilan Keenam</option>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                            <option value="1">Kehamilan Pertama</option>
                                            <option value="2">Kehamilan Kedua</option>
                                            <option value="3">Kehamilan Ketiga</option>
                                            <option value="4">Kehamilan Keempat</option>
                                            <option value="5">Kehamilan Kelima</option>
                                            <option value="6">Kehamilan Keenam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Kelahiran</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="kehamilan" name="lahir">
                                        <?php if($kehamilan->lahir == 0): ?>
                                            <option value="0">Belum Pernah</option>
                                        <?php else: ?>
                                            <?php if($kehamilan->lahir == 1): ?>
                                                <option value="1">Kelahiran Pertama</option>
                                            <?php else: ?>
                                                <?php if($kehamilan->lahir == 2): ?>
                                                    <option value="2">Kelahiran Kedua</option>
                                                <?php else: ?>
                                                    <?php if($kehamilan->lahir == 3): ?>
                                                        <option value="3">Kelahiran Ketiga</option>
                                                    <?php else: ?>
                                                        <?php if($kehamilan->lahir == 4): ?>
                                                            <option value="4">Kelahiran Keempat</option>
                                                        <?php else: ?>
                                                            <?php if($kehamilan->lahir == 5): ?>
                                                                <option value="5">Kelahiran Kelima</option>
                                                            <?php else: ?>
                                                                <option value="6">Kelahiran Keenam</option>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                            <option value="0">Belum Pernah</option>
                                            <option value="1">Kelahiran Pertama</option>
                                            <option value="2">Kelahiran Kedua</option>
                                            <option value="3">Kelahiran Ketiga</option>
                                            <option value="4">Kelahiran Keempat</option>
                                            <option value="5">Kelahiran Kelima</option>
                                            <option value="6">Kelahiran Keenam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Keguguran</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="aborsi">
                                        <?php if($kehamilan->aborsi == 0): ?>
                                            <option value="0">Belum Pernah</option>
                                        <?php else: ?>
                                            <?php if($kehamilan->aborsi == 1): ?>
                                                <option value="1">Keguguran Pertama</option>
                                            <?php else: ?>
                                                <?php if($kehamilan->aborsi == 2): ?>
                                                    <option value="2">Keguguran Kedua</option>
                                                <?php else: ?>
                                                    <?php if($kehamilan->aborsi == 3): ?>
                                                        <option value="3">Keguguran Ketiga</option>
                                                    <?php else: ?>
                                                        <?php if($kehamilan->aborsi == 4): ?>
                                                            <option value="4">Keguguran Keempat</option>
                                                        <?php else: ?>
                                                            <?php if($kehamilan->aborsi == 5): ?>
                                                                <option value="5">Keguguran Kelima</option>
                                                            <?php else: ?>
                                                                <option value="6">Keguguran Keenam</option>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <option value="0">Belum Pernah</option>
                                            <option value="1">Keguguran Pertama</option>
                                            <option value="2">Keguguran Kedua</option>
                                            <option value="3">Keguguran Ketiga</option>
                                            <option value="4">Keguguran Keempat</option>
                                            <option value="5">Keguguran Kelima</option>
                                            <option value="6">Keguguran Keenam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Hari Pertama Haid Terakhir </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="hpht" value="<?php echo e($kehamilan->hpht); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Hari Perkiraan Lahir </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hpl" value="<?php echo e(date('d F Y', strtotime($kehamilan->hpl))); ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="<?php echo e($kehamilan->bb); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tb" value="<?php echo e($kehamilan->tb); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">LILA</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="lila" value="<?php echo e($kehamilan->lila); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">IMT</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="imt" value="<?php echo e($kehamilan->imt); ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Nama Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bidan" value="<?php echo e($kehamilan->bidan); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Alamat Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="alamat_bidan" value="<?php echo e($kehamilan->alamat_bidan); ?>">
                                </div>
                            </div><div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Status Kehamilan</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Status" name="status">
                                        <?php if($kehamilan->status == 'Mengandung'): ?>
                                            <option value="Mengandung">Mengandung</option>
                                        <?php else: ?>
                                            <?php if($kehamilan->status == 'Keguguran'): ?>
                                                <option value="Keguguran">Keguguran</option>
                                            <?php else: ?>
                                                <option value="Lahir">Lahir</option>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                            <option value="Mengandung">Mengandung</option>
                                            <option value="Keguguran">Keguguran</option>
                                            <option value="Lahir">Lahir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/kehamilan/edit.blade.php ENDPATH**/ ?>