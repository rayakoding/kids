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
                            <a href="/kehamilan_ibu/add" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>HPL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $kehamilan_user = App\Models\Kehamilan::where('user_id', Auth::user()->id)->get()
                                    @endphp
                                    @php $no = 1; @endphp
                                    @foreach ($kehamilan_user as $ry)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>G{{$ry->hamil}}P{{$ry->lahir}}A{{$ry->aborsi}}</td>
                                            <td>{{date('d F Y', strtotime($ry->hpl))}}</td>
                                            <td>
                                                <a href="/kehamilan_ibu/view/{{$ry->id}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="/kehamilan_ibu/delete/{{$ry->id}}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
