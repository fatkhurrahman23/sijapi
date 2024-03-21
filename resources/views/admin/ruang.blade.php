<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang</title>
    <!-- <link rel="stylesheet" href="/bootstrap/app.php"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Ruang</h1>
    <p>Ini adalah halaman ruang</p>
    <table class="table table-bordered">
        <tr>
            <th>ID Ruang</th>
            <th>Nama Ruang</th>
            <th>Action</th>
        </tr>
        @foreach($dataRuang as $ruang)
        <tr>
            <td>{{ $ruang->kode_ruang }}</td>
            <td>{{ $ruang->nama }}</td>
            <td>
                <a href="{{ route('ruang.edit', $ruang->id) }}" class="btn btn-warning">Edit</a>
        </tr>
        @endforeach
    </table>

    <!-- Form -->
    <div class="container mt-5">
        <h2>Add Ruang</h2>
        <form action="/admin/ruang" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_ruang" class="form-label">ID Ruang</label>
                <input type="text" class="form-control" id="kode_ruang" name="kode_ruang">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Ruang</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    

    <!-- Your table here -->
</body>
</html>