<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar <?php echo e($title); ?></h5>
                                <?php if(session()->has('hijau')): ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo e(session()->get('hijau')); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php if(session()->has('merah')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo e(session()->get('merah')); ?>

                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                            <a href="/periksa/add" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Periksa</th>
                                        <th>Ibu Hamil</th>
                                        <th>Tgl periksa</th>
                                        <th>BB</th>
                                        <th>TFU</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $periksa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><a href="/kehamilan/view/<?php echo e($ry->kehamilan->id); ?>"><?php echo e($ry->periksa_ke); ?>/G<?php echo e($ry->kehamilan->hamil); ?>P<?php echo e($ry->kehamilan->lahir); ?>A<?php echo e($ry->kehamilan->aborsi); ?></a></td>
                                            <td><?php echo e($ry->kehamilan->user->name); ?></td>
                                            <td><?php echo e(date('d F Y', strtotime($ry->tgl))); ?></td>
                                            <td><?php echo e($ry->bb); ?> kg</td>
                                            <td><?php echo e($ry->tfu); ?> cm</td>
                                            <td>
                                                <a href="/periksa/view/<?php echo e($ry->id); ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="/periksa/edit/<?php echo e($ry->id); ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                <a href="/periksa/delete/<?php echo e($ry->id); ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/periksa/index.blade.php ENDPATH**/ ?>