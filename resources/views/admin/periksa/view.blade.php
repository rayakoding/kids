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

        <section class="section profile">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body pt-3">
                            <h6><strong>Data pemeriksaan pada kehamilan ke {{$periksa->kehamilan->hamil}}</strong></h6>
                            <hr>
                            <div class="row mb-2">
                                <div class="col-lg-3">Ibu Hamil</div>
                                <div class="col-lg-8">: <b>{{$periksa->kehamilan->user->name}}</b></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Periksa </div>
                                <div class="col-lg-8">: Ke {{$periksa->periksa_ke}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tempat Periksa</div>
                                <div class="col-lg-8">: Puskesmas {{$periksa->puskesmas->nama}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tangal Periksa</div>
                                <div class="col-lg-8">: {{date('d F Y', strtotime($periksa->tgl))}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Berat Badan</div>
                                <div class="col-lg-8">: {{$periksa->bb}} kg</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">TFU</div>
                                <div class="col-lg-8">: {{$periksa->tfu}} cm</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Tekanan Darah</div>
                                <div class="col-lg-8">:
                                    @if ($periksa->td_a == 90)
                                        <b href="" class="text text-danger">{{$periksa->td_a}}/{{$periksa->td_b}} mmHg</b>
                                    @else
                                        @if ($periksa->td_a == 140)
                                            <b href="" class="text text-danger">{{$periksa->td_a}}/{{$periksa->td_b}} mmHg</b>
                                        @else
                                            {{$periksa->td_a}}/{{$periksa->td_b}} mmHg
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Imunisasi</div>
                                <div class="col-lg-8">:
                                    @if ($periksa->imunisasi == 0)
                                        tidak
                                    @else
                                        ya
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">Denyut</div>
                                <div class="col-lg-8">:
                                    @if ($periksa->denyut >= 1 && $periksa->denyut <= 120)
                                        <b class="text text-danger">{{$periksa->denyut}} bpm</b>
                                    @else
                                        {{$periksa->denyut}} bpm
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-3">HB</div>
                                <div class="col-lg-8">:
                                    @if ($periksa->hb >= 1 && $periksa->hb <= 11)
                                        <a class="text text-danger">{{$periksa->hb}} g/dL</b>
                                    @else
                                        {{$periksa->hb}} g/dL
                                    @endif
                                </div>
                            </div>
                            <small class="text text-danger">Catatan Kehamilan :</small>
                            @if ($periksa->td_a == 90)
                                <li><small>Resiko Tekanan Darah DISTOLIK</small></li>
                            @endif
                            @if ($periksa->td_a == 140)
                                <li><small>Resiko Tekanan Darah HIPERTENSI</small></li>
                            @endif
                            @if ($periksa->denyut >= 1 && $periksa->denyut <= 120)
                                <li><small>Denyut Jantung Janin TIDAK NORMAL</small></li>
                            @endif
                            @if ($periksa->hb >= 1 && $periksa->hb <= 11)
                                <li><small>Kadar Hemoglobin (Hb) TIDAK NORMAL</small></li>
                            @endif
                            <hr>
                            <a href="/periksa/edit/{{$periksa->id}}"class="btn btn-sm btn-primary mt-3">ubah data</a>
                            <a href="/periksa"class="btn btn-sm btn-primary mt-3">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
