@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/kehamilan">Kehamilan</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$title}}</h5>
                        <form action="/kehamilan/add" method="POST">
                            @csrf
                            <input type="text" name="user_id" value="{{$user->id}}" hidden>

                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Area / Desa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="desa_id">
                                        <option selected>Pilih Area</option>
                                        @foreach ($desa as $r)
                                            <option value="{{$r->id}}">Desa {{$r->nama}}</option>
                                        @endforeach
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
                        </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
