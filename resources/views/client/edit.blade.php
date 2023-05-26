<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Edit Data Client</h1>
        <a href="{{ route('client.index') }}" class="btn btn-primary mb-3">Data Clienc</a>
        <div class="card">
            <div class="card-body">
              <form action="{{ route('client.update', $Client->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3 row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $client->nama }}">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{ $client->email }}">
                  </div>
                </div>
                
                <div class="mb-3 row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="{{ $client->password }}">
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="nomorhp" class="col-sm-2 col-form-label">No. Handphone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="{{ $client->nomorhp }}">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary float-end">Edit</button>
              </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>