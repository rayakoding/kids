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
                                <label class="col-sm-5 col-form-label">Nama Ibu Hamil</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Bumil" name="user_id" value="<?php echo e(old('user_id')); ?>">>
                                        <option selected>Pilih Nama Ibu Hamil</option>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($ry->id); ?>"><?php echo e($ry->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Imunisasi" name="jenis" value="<?php echo e(old('jenis')); ?>">
                                        <option value="Fe">Fe</option>
                                        <option value="Hipertensi">Hipertensi</option>
                                        <option value="Kalsium">Kalsium</option>
                                        <option value="Asam Folat">Asam Folat</option>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/obat/add.blade.php ENDPATH**/ ?>