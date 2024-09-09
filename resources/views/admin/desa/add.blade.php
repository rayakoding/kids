@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/desa">Desa</a></li>
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
                                <label for="inputText" class="col-sm-4 col-form-label">Nama Desa</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan nama Desa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Puskesmas</label>
                                <div class="col-sm-7">
                                    <select class="form-select" aria-label="Puskesmas" name="puskesmas_id">
                                        <option selected>Pilih Puskesmas</option>
                                        @foreach ($puskesmas as $r)
                                            <option value="{{$r->id}}">Puskesmas {{$r->nama}}</option>
                                        @endforeach
                                    </select>
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

    </main>
@endsection
