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
        </tr>
        @foreach($data as $ruang)
        <tr>
            <td>{{ $ruang->kode_ruang }}</td>
            <td>{{ $ruang->nama }}</td>
        </tr>
        @endforeach
    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRuangModal">
    Add Ruang
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addRuangModal" tabindex="-1" aria-labelledby="addRuangModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addRuangModalLabel">Add Ruang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
    </div>
    </div>
</body>
</html>