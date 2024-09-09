@extends('admin.layouts.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @if (Auth::user()->role == 'Member')
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/kehamilan_ibu">Kehamilan</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-building-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            @php
                                                $jumlah_kehamilan = App\Models\Kehamilan::where('user_id', Auth::user()->id)->count()
                                            @endphp
                                            <h6>{{$jumlah_kehamilan}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @if (Auth::user()->kehamilan != NULL)
                                <div class="col-xxl-4 col-md-3">
                                    <div class="card info-card sales-card">
                                        <div class="card-body">
                                        <h5 class="card-title"><a href="/periksa_ibu">Periksa</a></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="ri-building-line"></i>
                                            </div>
                                            <div class="ps-3">
                                                @php
                                                    $jumlah_periksa = App\Models\Periksa::where('kehamilan_id', Auth::user()->kehamilan->id)->count()
                                                @endphp
                                                <h6>{{$jumlah_periksa}}</h6>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if (Auth::user()->role == 'Admin')
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/puskesmas">Puskesmas</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-building-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_puskesmas}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/desa">Desa</a></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-home-3-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_desa}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/user">Ibu Hamil</a></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-account-circle-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_pengguna}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/kehamilan">Kehamilan</a></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri ri-heart-2-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_kehamilan}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/imt">IMT Abnormal</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-alarm-warning-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_imt}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/periksa">Periksa</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-stethoscope-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_periksa}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/denyut">Denyut Abnormal</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_periksa_denyut}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-3">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                    <h5 class="card-title"><a href="/hb">Hb Abnormal</a></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="ri-water-flash-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$jumlah_hb}}</h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
