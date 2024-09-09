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
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="user_id" value="{{$kehamilan->user_id}}" hidden>
                            <input type="text" name="noreg" value="{{$kehamilan->noreg}}" hidden>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Area / Desa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="desa_id">
                                        <option value="{{$kehamilan->desa->id}}" selected>{{$kehamilan->desa->nama}}</option>
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
                                        @if ($kehamilan->hamil == 1)
                                            <option value="1">Kehamilan Pertama</option>
                                        @else
                                            @if ($kehamilan->hamil == 2)
                                                <option value="2">Kehamilan Kedua</option>
                                            @else
                                                @if ($kehamilan->hamil == 3)
                                                    <option value="3">Kehamilan Ketiga</option>
                                                @else
                                                    @if ($kehamilan->hamil == 4)
                                                        <option value="4">Kehamilan Keempat</option>
                                                    @else
                                                        @if ($kehamilan->hamil == 5)
                                                            <option value="5">Kehamilan Kelima</option>
                                                        @else
                                                            <option value="6">Kehamilan Keenam</option>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
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
                                        @if ($kehamilan->lahir == 0)
                                            <option value="0">Belum Pernah</option>
                                        @else
                                            @if ($kehamilan->lahir == 1)
                                                <option value="1">Kelahiran Pertama</option>
                                            @else
                                                @if ($kehamilan->lahir == 2)
                                                    <option value="2">Kelahiran Kedua</option>
                                                @else
                                                    @if ($kehamilan->lahir == 3)
                                                        <option value="3">Kelahiran Ketiga</option>
                                                    @else
                                                        @if ($kehamilan->lahir == 4)
                                                            <option value="4">Kelahiran Keempat</option>
                                                        @else
                                                            @if ($kehamilan->lahir == 5)
                                                                <option value="5">Kelahiran Kelima</option>
                                                            @else
                                                                <option value="6">Kelahiran Keenam</option>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
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
                                        @if ($kehamilan->aborsi == 0)
                                            <option value="0">Belum Pernah</option>
                                        @else
                                            @if ($kehamilan->aborsi == 1)
                                                <option value="1">Keguguran Pertama</option>
                                            @else
                                                @if ($kehamilan->aborsi == 2)
                                                    <option value="2">Keguguran Kedua</option>
                                                @else
                                                    @if ($kehamilan->aborsi == 3)
                                                        <option value="3">Keguguran Ketiga</option>
                                                    @else
                                                        @if ($kehamilan->aborsi == 4)
                                                            <option value="4">Keguguran Keempat</option>
                                                        @else
                                                            @if ($kehamilan->aborsi == 5)
                                                                <option value="5">Keguguran Kelima</option>
                                                            @else
                                                                <option value="6">Keguguran Keenam</option>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
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
                                    <input type="date" class="form-control" name="hpht" value="{{$kehamilan->hpht}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Hari Perkiraan Lahir </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="hpl" value="{{date('d F Y', strtotime($kehamilan->hpl))}}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="{{$kehamilan->bb}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tb" value="{{$kehamilan->tb}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">LILA</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="lila" value="{{$kehamilan->lila}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">IMT</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="imt" value="{{$kehamilan->imt}}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Nama Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bidan" value="{{$kehamilan->bidan}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Alamat Bidan</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="alamat_bidan" value="{{$kehamilan->alamat_bidan}}">
                                </div>
                            </div><div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Status Kehamilan</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Status" name="status">
                                        @if ($kehamilan->status == 'Mengandung')
                                            <option value="Mengandung">Mengandung</option>
                                        @else
                                            @if ($kehamilan->status == 'Keguguran')
                                                <option value="Keguguran">Keguguran</option>
                                            @else
                                                <option value="Lahir">Lahir</option>
                                            @endif
                                        @endif
                                            <option value="Mengandung">Mengandung</option>
                                            <option value="Keguguran">Keguguran</option>
                                            <option value="Lahir">Lahir</option>
                                    </select>
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
