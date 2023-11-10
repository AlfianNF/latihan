<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Ini adalah praktikum 1</h1>
        <div class="row">
            <div class="col-lg-6">
                <a href="/tombol/primary"><button type="button" class="btn btn-primary">Primary</button></a>
                <a href="/tombol/secondary"><button type="button" class="btn btn-secondary">Secondary</button></a>
                <a href="/tombol/success"><button type="button" class="btn btn-success">Success</button></a>
                <a href="/tombol/danger"><button type="button" class="btn btn-danger">Danger</button></a>
                <a href="/tombol/warning"><button type="button" class="btn btn-warning">Warning</button></a>
                <a href="/tombol/info"><button type="button" class="btn btn-info">Info</button></a>
                <a href="/tombol/light"><button type="button" class="btn btn-light">Light</button></a>
                <a href="/tombol/dark"><button type="button" class="btn btn-dark">Dark</button></a>
            </div>
        </div>

        <hr>
        <h2>Jenis tombolnya adalah <button class="btn btn-{{ $jenis_tombol }}">{{ $jenis_tombol }}</button></h2>
    </div>
</body>
</html>