@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/profile">Pengguna</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{asset('')}}admin/assets/img/messages-1.jpg" alt="Profile" class="rounded-circle">
                        <h5 class="mt-3"><strong>{{Auth::user()->name}}</strong></h5>
                        <a class="badge bg-success mb-3">{{Auth::user()->role}}</a>
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
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->username}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Alamat Email</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Panggilan</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->tgl}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Alamat</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->alamat}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->telp}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->pekerjaan}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Suami</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->ayah}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Golongan Darah</div>
                                    <div class="col-lg-9 col-md-8">{{Auth::user()->gol_darah}}</div>
                                </div>
                                <hr>
                                <div class="col">
                                    <a href="/profile/edit" class="btn btn-primary">Ubah Data</a>
                                </div>
                            </div>
                            <div class="tab-pane fade show profile-overview mt-3" id="profile-kehamilan">
                                @if (Auth::user()->kehamilan != NULL)
                                    @php
                                        $kehamilan_user = app\Models\Kehamilan::where('user_id', Auth::user()->id)->get()
                                    @endphp
                                    @foreach ($kehamilan_user as $ry)
                                        <hr>
                                        <a href="/kehamilan_ibu/view/{{$ry->id}}" class="btn btn-primary btn-sm mb-3"><b>Kehamilan {{$ry->hamil}}</b></a>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Nomor Pendaftaran</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->noreg}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Kode Kehamilan</div>
                                            <div class="col-lg-5 col-md-8">: <b class="text text-primary">G{{$ry->hamil}}P{{$ry->lahir}}A{{$ry->aborsi}}</b></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Pertama Haid Terakhir</div>
                                            <div class="col-lg-5 col-md-8">: {{date('d F Y', strtotime($ry->hpht))}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Perkiraan Lahir</div>
                                            <div class="col-lg-5 col-md-8">: {{date('d F Y', strtotime($ry->hpl))}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Area</div>
                                            <div class="col-lg-5 col-md-8">: Desa {{$ry->desa->nama}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Puskesmas</div>
                                            <div class="col-lg-5 col-md-8">: Puskesmas {{$ry->desa->puskesmas->nama}}</div>
                                        </div>
                                        @php
                                            $tanggal_lahir = new DateTime("$ry->hpht");
                                            $sekarang = new DateTime("today");
                                            if ($tanggal_lahir > $sekarang) {
                                                    $thn = "0";
                                                }
                                            $thn = $sekarang->diff($tanggal_lahir)->y;
                                            $bln = $sekarang->diff($tanggal_lahir)->m;
                                            $tgl = $sekarang->diff($tanggal_lahir)->d;
                                        @endphp
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Usia Kehamilan</div>
                                            <div class="col-lg-5 col-md-8">: {{$thn}} tahun {{$bln}} bulan {{$tgl}} hari</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Berat Badan</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->bb}} kg</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Tinggi Badan</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->tb}} cm</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">LILA</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->lila}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">IMT</div>
                                            <div class="col-lg-5 col-md-8">:
                                                @if ($ry->imt < 18)
                                                    <stong class="text text-danger">{{$ry->imt}} kg/m²</strong>
                                                @else
                                                    @if ($ry->imt > 30)
                                                        <stong class="text text-danger">{{$ry->imt}} kg/m²</strong>
                                                    @else
                                                        {{$ry->imt}} kg/m²
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Nama Bidan</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->bidan}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Alamat Bidan</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->alamat_bidan}}</div>
                                        </div>
                                        <small class="text text-danger">Catatan Kehamilan :</small>
                                        @if ($ry->lila < 23.5)
                                            <li><small>Karena ibu hamil nilai LILA kurang dari 23.5 dianjurkan untuk melakukan kunjungan ke Faskes I atau Puskesmas</small></li>
                                        @endif
                                        @if ($ry->imt < 18)
                                            <li><small>Ibu Hamil Kurang Energi Kronis (KEK) <br>mempunyai Indeks Massa Tubuh (IMT) pada pra hamil atau Trimester I (usia kehamilan ≤12 minggu) dibawah 18,5 kg/m2 (Kurus)</small></li>
                                        @endif
                                        @if ($ry->imt > 30)
                                            <li><small>Ibu Hamil mempunyai Indeks Massa Tubuh (IMT) diatas 30 kg/m2 (OBESITAS)</small></li>
                                        @endif
                                    @endforeach
                                @else
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan_ibu/add_id/{{Auth::user()->id}}" class="btn btn-sm btn-primary">Tambah</a>
                                @endif
                            </div>

                            <div class="tab-pane fade show profile-overview mt-3" id="profile-periksa">
                                @if (Auth::user()->kehamilan != NULL)
                                    @php
                                        $kehamilan_user = App\Models\Kehamilan::where('user_id', Auth::user()->id)->get();
                                    @endphp
                                    @foreach ($kehamilan_user as $ry)
                                    <hr>
                                    <h6><a href="/kehamilan_ibu/edit/{{$ry->id}}"><b>Kehamilan {{$ry->hamil}} / {{$ry->noreg}}</b></a></h6>
                                    <a href="/periksa_ibu/add/{{$ry->id}}" class="btn btn-primary btn-sm">tambah data periksa</a>
                                        @php
                                            $periksa = App\Models\Periksa::where('kehamilan_id', $ry->id)->get();
                                        @endphp
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Pemeriksaan</th>
                                                        <th scope="col">Tgl.</th>
                                                        <th scope="col">Detail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($periksa as $ry)
                                                    <tr>
                                                        <td><b class="text text-primary">{{$ry->periksa_ke}}</b></td>
                                                        <th>{{date('d F Y', strtotime($ry->tgl))}}</th>
                                                        <td><a href="/periksa_ibu/view/{{$ry->id}}" class="badge bg-danger">lihat</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                    @endforeach
                                @else
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan_ibu/add_id/{{Auth::user()->id}}" class="btn btn-sm btn-primary">Tambah</a>
                                @endif
                            </div>
                            <div class="tab-pane fade show profile-overview mt-3" id="profile-obat">
                                @if (Auth::user()->kehamilan != NULL)
                                    @php
                                        $kehamilan_user = App\Models\Kehamilan::where('user_id', Auth::user()->id)->get();
                                    @endphp

                                @else
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan_ibu/add_id/{{Auth::user()->id}}" class="btn btn-sm btn-primary">Tambah</a>
                                @endif
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
