@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$title}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/periksa">Periksa</a></li>
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
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Nama Ibu Hamil</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Bumil" name="user_id" value="{{old('user_id')}}">>
                                        <option selected>Pilih Nama Ibu Hamil</option>
                                        @foreach ($user as $ry)
                                            <option value="{{$ry->id}}">{{$ry->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Imunisasi" name="jenis" value="{{old('jenis')}}">
                                        <option value="Fe">Fe</option>
                                        <option value="Hipertensi">Hipertensi</option>
                                        <option value="Kalsium">Kalsium</option>
                                        <option value="Asam Folat">Asam Folat</option>
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

    </main><!-- End #main -->
@endsection
