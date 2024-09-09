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
                        <form action="/kehamilan/add" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Ibu Hamil</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="user_id">
                                        <option selected>Pilih Nama Ibu Hamil</option>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($ry->id); ?>"><?php echo e($ry->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Area / Desa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="desa_id">
                                        <option selected>Pilih Area</option>
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
                                        <option selected>Pilih Kehamilan ke</option>
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
                                        <option selected>Pilih Kelahiran ke</option>
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
                                        <option selected>Pilih Keguguran ke</option>
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
                                    <input type="date" class="form-control" name="hpht" placeholder="isi tanggal HPHT">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" placeholder="isikan berat badan dalam kg">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tb" placeholder="isikan tinggi badan dalam cm">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">LILA</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="lila" placeholder="isikan LILA">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Nama Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bidan" placeholder="isikan nama bidan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Alamat Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="alamat_bidan" placeholder="isikan alamat bidan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Status Kehamilan</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Status" name="status">
                                            <option value="Mengandung">Mengandung</option>
                                            <option value="Keguguran">Keguguran</option>
                                            <option value="Lahir">Lahir</option>
                                    </select>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/kehamilan/add.blade.php ENDPATH**/ ?>