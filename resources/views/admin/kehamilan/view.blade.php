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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <h6><a href="/kehamilan/edit/{{$kehamilan->id}}"><b>Kehamilan {{$kehamilan->hamil}}</b></a></h6>
                            <hr>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Nomor Registrasi</div>
                                <div class="col-lg-5 col-md-8">: <b>{{$kehamilan->noreg}}</b></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Kode Kehamilan</div>
                                <div class="col-lg-5 col-md-8">: <b class="text text-primary">G{{$kehamilan->hamil}}P{{$kehamilan->lahir}}A{{$kehamilan->aborsi}}</b></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Hari Pertama Haid Terakhir</div>
                                <div class="col-lg-5 col-md-8">: {{date('d F Y', strtotime($kehamilan->hpht))}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Hari Perkiraan Lahir</div>
                                <div class="col-lg-5 col-md-8">: {{date('d F Y', strtotime($kehamilan->hpl))}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Area</div>
                                <div class="col-lg-5 col-md-8">: Desa {{$kehamilan->desa->nama}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Puskesmas</div>
                                <div class="col-lg-5 col-md-8">: Puskesmas {{$kehamilan->desa->puskesmas->nama}}</div>
                            </div>
                            @php
                                $tanggal_lahir = new DateTime("$kehamilan->hpht");
                                $sekarang = new DateTime("today");
                                if ($tanggal_lahir > $sekarang) {
                                        $thn = "0";
                                    }
                                $thn = $sekarang->diff($tanggal_lahir)->y;
                                $bln = $sekarang->diff($tanggal_lahir)->m;
                                $tgl = $sekarang->diff($tanggal_lahir)->d;
                            @endphp
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Usia Kehamilan</div>
                                <div class="col-lg-5 col-md-8">: {{$thn}} tahun {{$bln}} bulan {{$tgl}} hari</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Berat Badan</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->bb}} kg</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Tinggi Badan</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->tb}} cm</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">LILA</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->lila}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">IMT</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->imt}} kg/m²</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Nama Bidan</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->bidan}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5 col-md-4 label">Alamat Bidan</div>
                                <div class="col-lg-5 col-md-8">: {{$kehamilan->alamat_bidan}}</div>
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
                            <a href="/kehamilan/edit/{{$kehamilan->id}}"class="btn btn-sm btn-primary mt-3">ubah data</a>
                            <a href="/kehamilan"class="btn btn-sm btn-primary mt-3">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
