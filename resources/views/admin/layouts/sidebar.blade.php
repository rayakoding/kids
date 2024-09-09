
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            @if (Auth::user()->role == 'Member')
                <li class="nav-heading">Member</li>
                <li class="nav-item">
                    @if ($title == 'Beranda')
                        <a class="nav-link " href="/dashboard">
                    @else
                    <a class="nav-link collapsed" href="/dashboard">
                    @endif
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Beranda')
                        <a class="nav-link " href="/profile">
                    @else
                    <a class="nav-link collapsed" href="/profile">
                    @endif
                    <i class="bi bi-person"></i>
                    <span>Profil Saya</span>
                    </a>
                </li><li class="nav-item">
                    @if ($title == 'Kehamilan')
                        <a class="nav-link " href="/kehamilan_ibu">
                    @else
                        <a class="nav-link collapsed" href="/kehamilan_ibu">
                    @endif
                        <i class="ri-heart-3-line"></i>
                        <span>Kehamilan</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Obat')
                        <a class="nav-link " href="/obat_ibu">
                    @else
                        <a class="nav-link collapsed" href="/obat_ibu">
                    @endif
                        <i class="ri-capsule-line"></i>
                        <span>Obat</span>
                    </a>
                </li>
            @endif
            @if (Auth::user()->role == 'Admin')
                <li class="nav-heading">Administrator</li>
                <li class="nav-item">
                    @if ($title == 'Beranda')
                        <a class="nav-link " href="/dashboard">
                    @else
                    <a class="nav-link collapsed" href="/dashboard">
                    @endif
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Puskesmas')
                        <a class="nav-link " href="/puskesmas">
                    @else
                        <a class="nav-link collapsed" href="/puskesmas">
                    @endif
                        <i class="ri-building-line"></i>
                        <span>Puskesmas</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Desa')
                        <a class="nav-link " href="/desa">
                    @else
                        <a class="nav-link collapsed" href="/desa">
                    @endif
                        <i class="ri-home-3-line"></i>
                        <span>Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Pengguna')
                        <a class="nav-link " href="/user">
                    @else
                        <a class="nav-link collapsed" href="/user">
                    @endif
                        <i class="bi bi-person"></i>
                        <span>Akses Ibu Hamil</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Kehamilan')
                        <a class="nav-link " href="/kehamilan">
                    @else
                        <a class="nav-link collapsed" href="/kehamilan">
                    @endif
                        <i class="ri-heart-3-line"></i>
                        <span>Kehamilan</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Periksa')
                        <a class="nav-link " href="/periksa">
                    @else
                        <a class="nav-link collapsed" href="/periksa">
                    @endif
                        <i class="ri-stethoscope-line"></i>
                        <span>Periksa</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Obat')
                        <a class="nav-link " href="/obat">
                    @else
                        <a class="nav-link collapsed" href="/obat">
                    @endif
                        <i class="ri-capsule-line"></i>
                        <span>Obat</span>
                    </a>
                </li>
                <li class="nav-heading">Warning</li>
                <li class="nav-item">
                    @if ($title == 'IMT Abnormal')
                        <a class="nav-link " href="/imt">
                    @else
                        <a class="nav-link collapsed" href="/imt">
                    @endif
                        <i class="ri-virus-line"></i>
                        <span>IMT Abnormal</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Denyut Abnormal')
                        <a class="nav-link " href="/denyut">
                    @else
                        <a class="nav-link collapsed" href="/denyut">
                    @endif
                        <i class="ri-heart-2-line"></i>
                        <span>Denyut Abnormal</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if ($title == 'Hb Abnormal')
                        <a class="nav-link " href="/hb">
                    @else
                        <a class="nav-link collapsed" href="/hb">
                    @endif
                        <i class="ri-heart-2-line"></i>
                        <span>Hb Abnormal</span>
                    </a>
                </li>
            @endif
        </ul>
    </aside>
