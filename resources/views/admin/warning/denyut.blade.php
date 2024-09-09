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
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Ibu Hamil</th>
                                        <th>Kehamilan Ke</th>
                                        <th>Periksa Ke</th>
                                        <th>Denyut Janin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($denyut as $ry)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$ry->kehamilan->user->name}}</td>
                                            <td>{{$ry->kehamilan->hamil}}</td>
                                            <td>{{$ry->periksa_ke}}</td>
                                            <td>{{$ry->denyut}}</td>
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
