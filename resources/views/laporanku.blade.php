@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <h1 class="text-center">Laporanku</h1>
        <div class="col-md-9 col-xl-12 col-lg-6">
            @foreach($data_pengaduan as $pengaduan)
            <div class="card shadow">
                <div class="card-body">
                    <p>{{$pengaduan->tanggal_pengaduan}}</p>
                    <p>{{$pengaduan->isi_laporan}}</p>
                    <p><img src="{{ asset('/images/'.$pengaduan->foto) }}" alt=""></p>
                    <p>{{$pengaduan->status}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection