<html>
    <head>
        <title>Create Data Mahasiswa</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-4">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Create Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ url('save') }}" method="post" name="add-blog-post-form" id="add-blog-post-form">
                @csrf
                    <div class="form-group mb-3">
                        NIM
                        <input type="text" id="nim" name="nim" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Nama
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Alamat
                        <input type="text" id="alamat" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Umur
                        <input type="text" id="umur" name="umur" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Kota
                        <input type="text" id="kota" name="kota" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Kelas
                        <input type="text" id="kelas" name="kelas" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        Jurusan
                        <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>