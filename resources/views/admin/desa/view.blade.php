@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/user">Pengguna</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{asset('')}}admin/assets/img/messages-1.jpg" alt="Profile" class="rounded-circle">
                        <h2>{{$user->name}}</h2>
                        <h3>{{$user->role}}</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Akun</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Kehamilan</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Info Akun</h5>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Nama Pengguna</div>
                                    <div class="col-lg-9 col-md-8">{{$user->username}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Alamat Email</div>
                                    <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Panggilan</div>
                                    <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8">{{$user->tgl}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Alamat</div>
                                    <div class="col-lg-9 col-md-8">{{$user->alamat}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                                    <div class="col-lg-9 col-md-8">{{$user->telp}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8">{{$user->pekerjaan}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Suami</div>
                                    <div class="col-lg-9 col-md-8">{{$user->ayah}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Golongan Darah</div>
                                    <div class="col-lg-9 col-md-8">{{$user->gol_darah}}</div>
                                </div>
                                <div class="row mb-2">
                                    <a href="/user/edit/{{$user->id}}" class="btn btn-primary mb-2">Ubah Data</a>
                                    <a href="/user/delete/{{$user->id}}" class="btn btn-danger">Hapus Data</a>
                                </div>
                            </div>
                            <div class="tab-pane fade show profile-overview mt-3" id="profile-edit">
                                @if ($user->kehamilan != NULL)
                                    @php
                                        $kehamilan_user = app\Models\Kehamilan::where('user_id', $user->id)->get()
                                    @endphp
                                    @foreach ($kehamilan_user as $ry)
                                        <hr>
                                        <h6><b>Kehamilan {{$ry->hamil}}</b></h6>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Kode Kehamilan</div>
                                            <div class="col-lg-5 col-md-8">: G{{$ry->hamil}}P{{$ry->lahir}}A{{$ry->aborsi}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Pertama Haid Terakhir</div>
                                            <div class="col-lg-5 col-md-8">: {{$ry->hpht}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Hari Perkiraan Lahir</div>
                                            <div class="col-lg-5 col-md-8">: Desa {{$ry->desa->hpl}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Area</div>
                                            <div class="col-lg-5 col-md-8">: Desa {{$ry->desa->nama}}</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-5 col-md-4 label">Puskesmas</div>
                                            <div class="col-lg-5 col-md-8">: Puskesmas {{$ry->puskesmas->nama}}</div>
                                        </div>
                                    @endforeach
                                @else
                                    Saat ini belum ada data kehamilan, untuk menambahkan silahkan tambahkan dengan menekan tombol <a href="/kehamilan/tambah_id/{{$user->id}}" class="btn btn-sm btn-primary">Tambah</a>
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
