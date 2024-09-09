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
                                <label class="col-sm-5 col-form-label">Pemeriksaan ke</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="periksa ke" name="periksa_ke" value="{{old('keguguran')}}">
                                        <option value="Pertama">Pertama - Trisemester I </option>
                                        <option value="Kedua">Kedua - Trisemester I</option>
                                        <option value="Ketiga">Ketiga - Trisemester I</option>
                                        <option value="Keempat">Keempat - Trisemester II</option>
                                        <option value="Kelima">Kelima - Trisemester II</option>
                                        <option value="Keenam">Keenam - Trisemester II</option>
                                        <option value="Ketujuh">Ketujuh - Trisemester III</option>
                                        <option value="Kedelapan">Kedelapan - Trisemester III</option>
                                        <option value="Kesembilan">Kesembilan - Trisemester III</option>
                                        <option value="Kesepuluh">Kesepuluh - Trisemester III</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Noreg/Kode/Nama</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="kehamilan_id" value="{{old('kehamilan_id')}}">>
                                        <option selected>Pilih Kehamilan</option>
                                        @foreach ($kehamilan as $ry)
                                            <option value="{{$ry->id}}">{{$ry->noreg}} / G{{$ry->hamil}}P{{$ry->lahir}}A{{$ry->aborsi}} / {{$ry->user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Nama Puskesmas</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="puskesmas_id" value="{{old('puskesmas_id')}}">
                                        <option selected>Pilih Puskesmas</option>
                                        @foreach ($puskesmas as $p)
                                            <option value="{{$p->id}}">{{$p->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tanggal Periksa </label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl" value="{{old('tgl')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan (kg)</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="{{old('bb')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">TFU</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tfu" value="{{old('tfu')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tekanan Darah </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_a"  value="{{old('td_a')}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_b" value="{{old('td_b')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Imunisasi" name="imunisasi" value="{{old('imunisasi')}}">
                                        <option value="1">Imunisasi</option>
                                        <option value="0">Tidak Imunisasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Denyut Janin</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="denyut" value="{{old('denyut')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">HB</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="hb" value="{{old('hb')}}">
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
