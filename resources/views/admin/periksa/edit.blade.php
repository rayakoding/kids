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
                            @method('PUT')
                            <input type="text" name="kehamilan_id" value="{{$periksa->kehamilan_id}}" hidden>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Pemeriksaan ke</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="periksa ke" name="periksa_ke" value="{{old('keguguran')}}">
                                        @if ($periksa->periksa_ke == 'Pertama')
                                            <option value="{{$periksa->periksa_ke}}" selected>Pertama - Trisemester I </option>
                                        @else
                                            @if ($periksa->periksa_ke == 'Kedua')
                                                <option value="{{$periksa->periksa_ke}}" selected>Kedua - Trisemester I </option>
                                            @else
                                                @if ($periksa->periksa_ke == 'Ketiga')
                                                    <option value="{{$periksa->periksa_ke}}" selected>Ketiga - Trisemester I </option>
                                                @else
                                                    @if ($periksa->periksa_ke == 'Keempat')
                                                        <option value="{{$periksa->periksa_ke}}" selected>Keempat - Trisemester II </option>
                                                    @else
                                                        @if ($periksa->periksa_ke == 'Kelima')
                                                            <option value="{{$periksa->periksa_ke}}" selected>Kelima - Trisemester II </option>
                                                        @else
                                                            @if ($periksa->periksa_ke == 'Keenam')
                                                                <option value="{{$periksa->periksa_ke}}" selected>Keenam - Trisemester II </option>
                                                            @else
                                                                @if ($periksa->periksa_ke == 'Ketujuh')
                                                                    <option value="{{$periksa->periksa_ke}}" selected>Ketujuh - Trisemester III </option>
                                                                @else
                                                                    @if ($periksa->periksa_ke == 'Delapan')
                                                                        <option value="{{$periksa->periksa_ke}}" selected>Delapan - Trisemester III </option>
                                                                    @else
                                                                        @if ($periksa->periksa_ke == 'Sembilan')
                                                                            <option value="{{$periksa->periksa_ke}}" selected>Sembilan - Trisemester III </option>
                                                                        @else
                                                                            @if ($periksa->periksa_ke == 'Sepuluh')
                                                                                <option value="{{$periksa->periksa_ke}}" selected>Sepuluh - Trisemester III </option>
                                                                            @else

                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
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
                                <label for="inputText" class="col-sm-5 col-form-label">Tanggal Periksa</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" name="tgl" value="{{$periksa->tgl}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Tempat Periksa</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Ubah Hak Akses" name="puskesmas_id">
                                        <option value="{{$periksa->puskesmas_id}}" selected>{{$periksa->puskesmas->nama}}</option>
                                        @foreach ($puskesmas as $r)
                                            <option value="{{$r->id}}">Puskesmas {{$r->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Berat Badan (kg)</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bb" value="{{$periksa->bb}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">TFU</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tfu" value="{{$periksa->tfu}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Tekanan Darah </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_a" value="{{$periksa->td_a}}">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="td_b" value="{{$periksa->td_b}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-5 col-form-label">Imunisasi</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="keguguran" name="imunisasi">
                                        @if ($periksa->imunisasi == 0)
                                            <option value="{{$periksa->imunisasi}}" selected>Tidak Imunisasi</option>
                                        @else
                                            <option value="{{$periksa->imunisasi}}" selected>Imunisasi</option>
                                        @endif
                                        <option value="1">Imunisasi</option>
                                        <option value="0">Tidak Imunisasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">Denyut Janin</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="denyut" value="{{$periksa->denyut}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-5 col-form-label">HB</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="hb" value="{{$periksa->hb}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button class="btn btn-primary" type="submit">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
