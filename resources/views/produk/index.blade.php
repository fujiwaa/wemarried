<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Produk</h1>
        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>