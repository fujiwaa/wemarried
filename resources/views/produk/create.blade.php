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
        <h1 class="text-center mb-5">Tambah Data Produk</h1>
        <a href="{{ route('produk.index') }}" class="btn btn-primary mb-3">Data Produk</a>
        <div class="card">
            <div class="card-body">
              <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                  <label for="namaproduk" class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kategori" name="kategori">
                  </div>
                </div>
                
                <div class="mb-3 row">
                  <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      var readFoto = function(event) {
      var input = event.target;
      var reader = new FileReader();
      reader.onload = function(){
        var dataURL = reader.result;
        var output = document.getElementById('output');
        output.src = dataURL;
      };
      reader.readAsDataURL(input.files[0]);
      };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>