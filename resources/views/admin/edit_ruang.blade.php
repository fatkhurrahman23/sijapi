<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit ruang</title>
</head>
<body>
    <!-- Edit Form -->
    <div class="container mt-5">
        <h2>Edit Ruang</h2>
        <form action="/admin/ruang/{{ $ruangToEdit->id }}/update" method="POST">
            @csrf
            <!-- @method('PUT') -->
            <div class="mb-3">
                <label for="kode_ruang" class="form-label">ID Ruang</label>
                <input type="text" class="form-control" id="kode_ruang" name="kode_ruang" value="{{ $ruangToEdit->kode_ruang }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Ruang</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $ruangToEdit->nama }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>