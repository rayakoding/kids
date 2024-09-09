<?php $__env->startSection('content'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($title); ?></h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/user">Pengguna</a></li>
                <li class="breadcrumb-item active"><?php echo e($title); ?></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="<?php echo e(asset('')); ?>admin/assets/img/messages-1.jpg" alt="Profile" class="rounded-circle">
                        <h5 class="mt-3"><strong><?php echo e($user->name); ?></strong></h5>
                        <a class="badge bg-success mb-3"><?php echo e($user->role); ?></a>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Akun</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-kehamilan">Kehamilan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-periksa">Pemeriksaan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-obat">Obat</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Info Akun</h5>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Nama Pengguna</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->username); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Alamat Email</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->email); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Panggilan</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->name); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->tgl); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Alamat</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->alamat); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->telp); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->pekerjaan); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Suami</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->ayah); ?></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Golongan Darah</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e($user->gol_darah); ?></div>
                                </div>
                                <hr>
                                <div class="col">
                                    <a href="/user/edit/<?php echo e($user->id); ?>" class="btn btn-primary">Ubah Data</a>
                                    <a href="/user/delete/<?php echo e($user->id); ?>" class="btn btn-danger">Hapus Data</a>
                                </div>
                            </div>
                            <div class="tab-pane fade show profile-overview mt-3" id="profile-kehamilan">
                                <?php if($user->kehamilan != NULL): ?>
                                    <?php
                                        $kehamilan_user = app\Models\Kehamilan::where('user_id', $user->id)->get()
                                    ?>
                                    <?php $__currentLoopData = $kehamilan_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <hr>
                                        <h6><a href="/kehamilan/view/<?php echo e($ry->id); ?>" class="btn btn-primary btn-sm"><b>Kehamilan <?php echo e($ry->hamil); ?></b></a></h6>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Nomor Pendaftaran</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->noreg); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Kode Kehamilan</div>
                                            <div class="col-lg-5 col-md-8">: <b class="text text-primary">G<?php echo e($ry->hamil); ?>P<?php echo e($ry->lahir); ?>A<?php echo e($ry->aborsi); ?></b></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Pertama Haid Terakhir</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e(date('d F Y', strtotime($ry->hpht))); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Perkiraan Lahir</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e(date('d F Y', strtotime($ry->hpl))); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Area</div>
                                            <div class="col-lg-5 col-md-8">: Desa <?php echo e($ry->desa->nama); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Puskesmas</div>
                                            <div class="col-lg-5 col-md-8">: Puskesmas <?php echo e($ry->desa->puskesmas->nama); ?></div>
                                        </div>
                                        <?php
                                            $tanggal_lahir = new DateTime("$ry->hpht");
                                            $sekarang = new DateTime("today");
                                            if ($tanggal_lahir > $sekarang) {
                                                    $thn = "0";
                                                }
                                            $thn = $sekarang->diff($tanggal_lahir)->y;
                                            $bln = $sekarang->diff($tanggal_lahir)->m;
                                            $tgl = $sekarang->diff($tanggal_lahir)->d;
                                        ?>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Usia Kehamilan</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($thn); ?> tahun <?php echo e($bln); ?> bulan <?php echo e($tgl); ?> hari</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Berat Badan</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->bb); ?> kg</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Tinggi Badan</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->tb); ?> cm</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">LILA</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->lila); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">IMT</div>
                                            <div class="col-lg-5 col-md-8">:
                                                <?php if($ry->imt < 18): ?>
                                                    <stong class="text text-danger"><?php echo e($ry->imt); ?> kg/m²</strong>
                                                <?php else: ?>
                                                    <?php if($ry->imt > 30): ?>
                                                        <stong class="text text-danger"><?php echo e($ry->imt); ?> kg/m²</strong>
                                                    <?php else: ?>
                                                        <?php echo e($ry->imt); ?> kg/m²
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Nama Bidan</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->bidan); ?></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Alamat Bidan</div>
                                            <div class="col-lg-5 col-md-8">: <?php echo e($ry->alamat_bidan); ?></div>
                                        </div>
                                        <small class="text text-danger">Catatan Kehamilan :</small>
                                        <?php if($ry->lila < 23.5): ?>
                                            <li><small>Karena ibu hamil nilai LILA kurang dari 23.5 dianjurkan untuk melakukan kunjungan ke Faskes I atau Puskesmas</small></li>
                                        <?php endif; ?>
                                        <?php if($ry->imt < 18): ?>
                                            <li><small>Ibu Hamil Kurang Energi Kronis (KEK) <br>mempunyai Indeks Massa Tubuh (IMT) pada pra hamil atau Trimester I (usia kehamilan ≤12 minggu) dibawah 18,5 kg/m2 (Kurus)</small></li>
                                        <?php endif; ?>
                                        <?php if($ry->imt > 30): ?>
                                            <li><small>Ibu Hamil mempunyai Indeks Massa Tubuh (IMT) diatas 30 kg/m2 (OBESITAS)</small></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan/add_id/<?php echo e($user->id); ?>" class="btn btn-sm btn-primary">Tambah</a>
                                <?php endif; ?>
                            </div>

                            <div class="tab-pane fade show profile-overview mt-3" id="profile-periksa">
                                <?php if($user->kehamilan != NULL): ?>
                                    <?php
                                        $kehamilan_user = App\Models\Kehamilan::where('user_id', $user->id)->get();
                                    ?>
                                    <a href="/periksa/add" class="btn btn-primary btn-sm">tambah data periksa</a>
                                    <?php $__currentLoopData = $kehamilan_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <hr>
                                        <h6><a href="/kehamilan/edit/<?php echo e($ry->id); ?>"><b>Kehamilan <?php echo e($ry->hamil); ?> / <?php echo e($ry->noreg); ?></b></a></h6>
                                        <?php
                                            $periksa = App\Models\Periksa::where('kehamilan_id', $ry->id)->get();
                                        ?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Pemeriksaan</th>
                                                        <th scope="col">Tgl.</th>
                                                        <th scope="col">TFU</th>
                                                        <th scope="col">Tek. Darah</th>
                                                        <th scope="col">Imunisasi</th>
                                                        <th scope="col">Denyut</th>
                                                        <th scope="col">HB</th>
                                                        <th scope="col">BB</th>
                                                        <th scope="col">Warning</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $periksa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><b class="text text-primary"><?php echo e($ry->periksa_ke); ?></b></td>
                                                        <th><?php echo e(date('d F Y', strtotime($ry->tgl))); ?></th>
                                                        <td><?php echo e($ry->tfu); ?></td>
                                                        <td><?php echo e($ry->td_a); ?>/<?php echo e($ry->td_b); ?></td>
                                                        <td>
                                                            <?php if($ry->imunisasi == 0): ?>
                                                            tidak
                                                            <?php else: ?>
                                                            imunisasi
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($ry->denyut >= 1 && $ry->denyut <= 120): ?>
                                                                <strong class="text text-danger"><?php echo e($ry->denyut); ?></strong>
                                                            <?php else: ?>
                                                                <?php echo e($ry->denyut); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($ry->hb >= 1 && $ry->hb <= 11): ?>
                                                                <strong class="text text-danger"><?php echo e($ry->hb); ?></strong>
                                                            <?php else: ?>
                                                                <?php echo e($ry->hb); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($ry->bb); ?></td>
                                                        <td><a href="/periksa/view/<?php echo e($ry->id); ?>" class="badge bg-danger">lihat</a></td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan/add_id/<?php echo e($user->id); ?>" class="btn btn-sm btn-primary">Tambah</a>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade show profile-overview mt-3" id="profile-obat">
                                <?php if($user->kehamilan != NULL): ?>
                                    <?php
                                        $kehamilan_user = App\Models\Kehamilan::where('user_id', $user->id)->get();
                                    ?>

                                <?php else: ?>
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan/add_id/<?php echo e($user->id); ?>" class="btn btn-sm btn-primary">Tambah</a>
                                <?php endif; ?>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/user/view.blade.php ENDPATH**/ ?>