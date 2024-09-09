
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <?php if(Auth::user()->role == 'Member'): ?>
                <li class="nav-heading">Member</li>
                <li class="nav-item">
                    <?php if($title == 'Beranda'): ?>
                        <a class="nav-link " href="/dashboard">
                    <?php else: ?>
                    <a class="nav-link collapsed" href="/dashboard">
                    <?php endif; ?>
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Beranda'): ?>
                        <a class="nav-link " href="/profile">
                    <?php else: ?>
                    <a class="nav-link collapsed" href="/profile">
                    <?php endif; ?>
                    <i class="bi bi-person"></i>
                    <span>Profil Saya</span>
                    </a>
                </li><li class="nav-item">
                    <?php if($title == 'Kehamilan'): ?>
                        <a class="nav-link " href="/kehamilan_ibu">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/kehamilan_ibu">
                    <?php endif; ?>
                        <i class="ri-heart-3-line"></i>
                        <span>Kehamilan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Obat'): ?>
                        <a class="nav-link " href="/obat_ibu">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/obat_ibu">
                    <?php endif; ?>
                        <i class="ri-capsule-line"></i>
                        <span>Obat</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if(Auth::user()->role == 'Admin'): ?>
                <li class="nav-heading">Administrator</li>
                <li class="nav-item">
                    <?php if($title == 'Beranda'): ?>
                        <a class="nav-link " href="/dashboard">
                    <?php else: ?>
                    <a class="nav-link collapsed" href="/dashboard">
                    <?php endif; ?>
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Puskesmas'): ?>
                        <a class="nav-link " href="/puskesmas">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/puskesmas">
                    <?php endif; ?>
                        <i class="ri-building-line"></i>
                        <span>Puskesmas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Desa'): ?>
                        <a class="nav-link " href="/desa">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/desa">
                    <?php endif; ?>
                        <i class="ri-home-3-line"></i>
                        <span>Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Pengguna'): ?>
                        <a class="nav-link " href="/user">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/user">
                    <?php endif; ?>
                        <i class="bi bi-person"></i>
                        <span>Akses Ibu Hamil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Kehamilan'): ?>
                        <a class="nav-link " href="/kehamilan">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/kehamilan">
                    <?php endif; ?>
                        <i class="ri-heart-3-line"></i>
                        <span>Kehamilan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Periksa'): ?>
                        <a class="nav-link " href="/periksa">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/periksa">
                    <?php endif; ?>
                        <i class="ri-stethoscope-line"></i>
                        <span>Periksa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Obat'): ?>
                        <a class="nav-link " href="/obat">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/obat">
                    <?php endif; ?>
                        <i class="ri-capsule-line"></i>
                        <span>Obat</span>
                    </a>
                </li>
                <li class="nav-heading">Warning</li>
                <li class="nav-item">
                    <?php if($title == 'IMT Abnormal'): ?>
                        <a class="nav-link " href="/imt">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/imt">
                    <?php endif; ?>
                        <i class="ri-virus-line"></i>
                        <span>IMT Abnormal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Denyut Abnormal'): ?>
                        <a class="nav-link " href="/denyut">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/denyut">
                    <?php endif; ?>
                        <i class="ri-heart-2-line"></i>
                        <span>Denyut Abnormal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <?php if($title == 'Hb Abnormal'): ?>
                        <a class="nav-link " href="/hb">
                    <?php else: ?>
                        <a class="nav-link collapsed" href="/hb">
                    <?php endif; ?>
                        <i class="ri-heart-2-line"></i>
                        <span>Hb Abnormal</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </aside>
<?php /**PATH C:\Users\Raya\Desktop\project\kids\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>