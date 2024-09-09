@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/obat">obat</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <hr>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Nama Ibu Hamil</div>
                                <div class="col-lg-5 col-md-8">: <b>{{$obat->user->name}}</b></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Jenis Obat</div>
                                <div class="col-lg-5 col-md-8">: <b class="text text-primary">{{$obat->jenis}}</b></div>
                            </div>
                            <hr>
                            <a href="/obat"class="btn btn-sm btn-primary mt-3">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @php
                        $jadwalObat = App\Models\ObatJadwal::where('obat_id', $obat->id)->count();
                        $jadwal = ($jadwalObat)*(0.35);
                    @endphp
                    <h5 class="card-title">Kepatuhan Minum Obat <b class="text text-danger">{{$jadwal}} %</b></h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$jadwal}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
