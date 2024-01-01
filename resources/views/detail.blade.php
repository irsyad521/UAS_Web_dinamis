@extends('layout.template')

@section('title', $bahasa ? $bahasa->nama : 'Detail Bahasa')

@section('content')
    @if ($bahasa)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title">{{ $bahasa->nama }}</h2>
                        <p class="card-text">{{ $bahasa->sinopsis }}</p>
                        <p class="card-text">Kategori :
                            {{ $bahasa->category ? $bahasa->category->nama_kategori : 'Tidak ada kategori' }}</p>
                        <p class="card-text">Tahun : {{ $bahasa->tahun }}</p>
                        <p class="card-text">Penemu : {{ $bahasa->penemu }}</p>
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/{{ $bahasa->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                </div>
            </div>
        </div>
    @else
        <p>Data bahasa tidak ditemukan.</p>
    @endif
@endsection
