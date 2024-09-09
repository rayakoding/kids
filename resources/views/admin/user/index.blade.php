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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar {{$title}}</h5>
                                @if (session()->has('hijau'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session()->get('hijau') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session()->has('merah'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session()->get('merah') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            <a href="/user/add" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Ibu Hamil</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($user as $ry)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$ry->name}}</td>
                                            <td>
                                                @if ($ry->tgl == NULL)
                                                    <small class="text text-danger">blm ada data</small>
                                                @else
                                                    @php
                                                        $tanggal_lahir = new DateTime("$ry->tgl");
                                                        $sekarang = new DateTime("today");
                                                            if ($tanggal_lahir > $sekarang) {
                                                                $thn = "0";
                                                        }
                                                        $thn = $sekarang->diff($tanggal_lahir)->y;
                                                        $bln = $sekarang->diff($tanggal_lahir)->m;
                                                        $tgl = $sekarang->diff($tanggal_lahir)->d;
                                                        echo $thn." tahun ";
                                                    @endphp
                                                @endif
                                            </td>
                                            <td>
                                                @if ($ry->alamat == NULL)
                                                    <small class="text text-danger">blm ada data</small>
                                                @else
                                                    {{$ry->alamat}}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/user/view/{{$ry->id}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="/user/edit/{{$ry->id}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                <a href="/user/delete/{{$ry->id}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
