@extends('layout.template')

@section('title', 'Data Movie')

@section('content')

    <h1>Data programming language</h1>
    <a href="/bahasas/create" class="btn btn-primary">Input language</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Penemu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bahasas as $bahasa)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $bahasa->nama }}</td>
                    <td>{{ $bahasa->category->nama_kategori }}</td>
                    <td>{{ $bahasa->tahun }}</td>
                    <td>{{ $bahasa->penemu }}</td>
                    <td class="text-nowrap">
                        <a href="/bahasa/{{ $bahasa['id'] }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/bahasa/delete/{{ $bahasa->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $bahasas->links() }}
    </div>
@endsection
