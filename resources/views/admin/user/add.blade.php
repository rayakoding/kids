@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Panggilan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="Masukan nama lengkap">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">NIK Ibu Hamil</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" placeholder="Isikan username">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-4 col-form-label">Alamat Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="Masukan alamat email">
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
@endsection
