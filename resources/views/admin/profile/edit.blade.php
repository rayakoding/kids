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

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$title}}</h5>
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="role" value="{{Auth::user()->role}}" hidden>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Pengguna</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Alamat Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Panggilan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tgl" value="{{Auth::user()->tgl}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="alamat" value="{{Auth::user()->alamat}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nomor Telepon</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telp" value="{{Auth::user()->telp}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Pekerjaan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pekerjaan" value="{{Auth::user()->pekerjaan}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Suami</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="ayah" value="{{Auth::user()->ayah}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Golongan Darah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="gol_darah" value="{{Auth::user()->gol_darah}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Kata Sandi</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" value="{{Auth::user()->password}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
