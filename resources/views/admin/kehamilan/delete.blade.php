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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hapus data kehamilan</h5>
                            <p>Apakah kamu yakin ingin menghapus data ini</p>
                            <form action="" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary" type="submit">Hapus</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
          </section>
    </main>
@endsection
