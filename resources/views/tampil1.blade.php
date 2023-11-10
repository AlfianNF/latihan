<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mb-3">Data Mahasiswa</h1>

        <form class="col-lg-8" method="GET" action="{{ url('tampilkan') }}">
            @csrf
            <div class="mb-3">
              <label for="nim" class="form-label">NIM : </label>
              <input type="text" class="form-control" name="nim" required>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">NAMA : </label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ALAMAT : </label><br>
                <textarea name="alamat" id="alamat" cols="100" rows="5"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>