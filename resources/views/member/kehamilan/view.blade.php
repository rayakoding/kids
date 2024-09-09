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

        <section class="section profile">
            <div class="card">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data <span>Periksa</span></h5>
                            <div id="reportsChart"></div>

                            @php
                                $periksa_kehamilan = App\Models\Periksa::where('kehamilan_id', $kehamilan->id)->get();
                            @endphp

                            <script>
                              document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                  series: [{
                                    name: 'Berat Badan',
                                    data: [
                                        @foreach ($periksa_kehamilan as $ry)
                                            '{{$ry->bb}}',
                                        @endforeach
                                    ],
                                    }, {
                                    name: 'Denyut',
                                    data: [
                                        @foreach ($periksa_kehamilan as $ry)
                                            '{{$ry->denyut}}',
                                        @endforeach
                                    ],
                                    }, {
                                    name: 'Tekanan Darah',
                                    data: [
                                        @foreach ($periksa_kehamilan as $ry)
                                            '{{$ry->td_a}}',
                                        @endforeach
                                    ],
                                    }, {
                                    name: 'TFU',
                                    data: [
                                        @foreach ($periksa_kehamilan as $ry)
                                            '{{$ry->tfu}}',
                                        @endforeach
                                    ]
                                  }],
                                  chart: {
                                    height: 350,
                                    type: 'area',
                                    toolbar: {
                                      show: false
                                    },
                                  },
                                  markers: {
                                    size: 4
                                  },
                                  colors: ['#4154f1', '#2eca6a', '#ff771d', '#ff1cce'],
                                  fill: {
                                    type: "gradient",
                                    gradient: {
                                      shadeIntensity: 1,
                                      opacityFrom: 0.3,
                                      opacityTo: 0.4,
                                      stops: [0, 90, 100]
                                    }
                                  },
                                  dataLabels: {
                                    enabled: false
                                  },
                                  stroke: {
                                    curve: 'smooth',
                                    width: 2
                                  },
                                  xaxis: {
                                    type: 'text',
                                    categories: [
                                        @foreach ($periksa_kehamilan as $ry)
                                            "Periksa {{$ry->periksa_ke}}",
                                        @endforeach
                                        ]
                                  },
                                  tooltip: {
                                    x: {
                                      format: 'dd/MM/yy HH:mm'
                                    },
                                  }
                                }).render();
                              });
                            </script>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$title}}</h5>
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Area / Desa </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->desa->nama}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Kode Kehamilan </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="G{{$kehamilan->hamil}}P{{$kehamilan->lahir}}A{{$kehamilan->aborsi}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Hari Pertama Haid Terakhir </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{date('d F Y', strtotime($kehamilan->hpht))}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Hari Perkiraan Lahir </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{date('d F Y', strtotime($kehamilan->hpl))}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Berat Badan </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->bb}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Tinggi Badan </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->tb}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">LILA </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->lila}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">IMT </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->imt}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Nama Bidan </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->bidan}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-5 col-form-label">Alamat Bidan </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="hpht" value="{{$kehamilan->alamat_bidan}}" readonly>
                                    </div>
                                </div>
                                <small class="text text-danger">Catatan Kehamilan :</small>
                                @if ($kehamilan->lila < 23.5)
                                    <li><small>Karena ibu hamil nilai LILA kurang dari 23.5 dianjurkan untuk melakukan kunjungan ke Faskes I atau Puskesmas</small></li>
                                @endif
                                @if ($kehamilan->imt < 18)
                                    <li><small>Ibu Hamil Kurang Energi Kronis (KEK) <br>mempunyai Indeks Massa Tubuh (IMT) pada pra hamil atau Trimester I (usia kehamilan ≤12 minggu) dibawah 18,5 kg/m2 (Kurus)</small></li>
                                @endif
                                @if ($kehamilan->imt > 30)
                                    <li><small>Ibu Hamil mempunyai Indeks Massa Tubuh (IMT) diatas 30 kg/m2 (OBESITAS)</small></li>
                                @endif
                                <hr>
                                    <a class="btn btn-primary btn-sm" href="/kehamilan_ibu/edit/{{$kehamilan->id}}">Ubah Data</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
