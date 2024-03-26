<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <!-- page admin untuk tampil data mahasiswa -->
    <h1>MataKuliah</h1>
    <p>Ini adalah halaman MAHASISWA</p>
    <table class="table table-bordered">
        <tr>
            <th>kode_mata_kuliah</th>
            <th>kode_kelas</th>
            <th>nama</th>
            <th>sks</th>
            <th>semester</th>
            <th>jenis</th>
            <th>Action</th>
        </tr>
        @foreach($dataMataKuliah as $Matakuliah)
        <tr>
            <td>{{ $Matakuliah->kode_mata_kuliah }}</td>
            <td>{{ $Matakuliah->kode_kelas }}</td>
            <td>{{ $Matakuliah->nama }}</td>
            <td>{{ $Matakuliah->sks }}</td>
            <td>{{ $Matakuliah->semester }}</td>
            <td>{{ $Matakuliah->jenis }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>

    <!-- Form -->
    <div class="container mt-5">
        <h2>Tambah data mahasiswa</h2>
        <form action="/admin/mahasiswa" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_ruang" class="form-label">kode_mata_kuliah</label>
                <input type="text" class="form-control" id="kode_mata_kuliah" name="kode_mata_kuliah">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">kode_kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">sks</label>
                <input type="text" class="form-control" id="sks" name="sks">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">semester</label>
                <input type="text" class="form-control" id="semester" name="semester">
            </div>
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">jenis</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Gansal">
                    <label class="form-check-label" for="jenis">Gansal</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Genap">
                    <label class="form-check-label" for="jenis">Genap</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>