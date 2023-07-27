@extends('layouts.app')

@section('title', 'Data Customer')

@section('contents')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Client</h1>
        <div class="d-flex justify-content-between">
            <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <form action="{{ route('client.search') }}" class="form-inline" method="GET">
                <input type="search" class="form-control mb-3"name="search" placeholder="Input Nama">
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                            @forelse ($client as $cl => $hasil)
                                <tr>
                                    <th>{{ $cl+1 }}</th>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->email }}</td>
                                    <td>{{ $hasil->password }}</td>
                                    <td>{{ $hasil->nomorhp }}</td>
                                    <td>
                                        <form action="{{ route('client.destroy', $hasil->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('client.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
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