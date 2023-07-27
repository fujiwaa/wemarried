@extends('layouts.app')

@section('title', 'Data Customer')

@section('contents')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Produk</h1>
        <div class="d-flex justify-content-between">
            <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <form action="{{ route('produk.search') }}" class="form-inline" method="GET">
                <input type="search" class="form-control mb-3"name="search" placeholder="Input kategori">
                <div class="input-group-append mb-3">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Foto Produk</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                            @forelse ($produk as $pr => $hasil)
                                <tr>
                                    <th>{{ $pr+1 }}</th>
                                    <td>{{ $hasil->namaproduk }}</td>
                                    <td>{{ $hasil->kategori }}</td>
                                    <td>{{ $hasil->deskripsi }}</td>
                                    <td>{{ $hasil->harga }}</td>
                                    <td>{{ $hasil->fotoproduk }}</td>
                                    <td>
                                        <form action="{{ route('produk.destroy', $hasil->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('produk.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" align="center">Tidak ada data.</td>
                                </tr>
                            @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection