<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/desa">Desa</a></li>
                    <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($title); ?></h5>
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Desa</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan nama Desa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Puskesmas</label>
                                <div class="col-sm-7">
                                    <select class="form-select" aria-label="Puskesmas" name="puskesmas_id">
                                        <option selected>Pilih Puskesmas</option>
                                        <?php $__currentLoopData = $puskesmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($r->id); ?>">Puskesmas <?php echo e($r->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/desa/add.blade.php ENDPATH**/ ?>