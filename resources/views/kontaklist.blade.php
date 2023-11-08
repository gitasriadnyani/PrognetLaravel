<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dari Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        td {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Bagian body HTML -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Pemrograman Internet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage">Beranda</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <h1 class="text-center">Data dari Database</h1>
        <div class="table-responsive">
        <form action="/kontak/create" method="get">
            <button type="submit">New Kontak</button>
        </form>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>  
                        <th>Telepon</th>
                        <th>Gender</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $kontak)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kontak->nama }}</td>
                <td>{{ $kontak->alamat }}</td>
                <td>{{ $kontak->telepon }}</td>
                <td>{{ $kontak->gender }}</td>
                <td>
                    <form action="/kontak/{{ $kontak->id }}/edit" method="get">
                        <button type="submit" class="btn btn-dark">Edit</button>
                    </form>
                    <form action="/kontak/{{ $kontak->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                
                </td>
            </tr>
        @endforeach
            </table>
        </div>
    </div>
</body>
</html>
