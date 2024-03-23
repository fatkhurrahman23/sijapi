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
    <h1>MAHASISWA</h1>
    <p>Ini adalah halaman MAHASISWA</p>
    <table class="table table-bordered">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
        @foreach($dataMahasiswa as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
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
                <label for="kode_ruang" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                    <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
                    <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kelas</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kode_kelas" id="kode_kelas" value="TI-2A">
                    <label class="form-check-label" for="kode_kelas">TI-2A</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kode_kelas" id="kode_kelas" value="TI-2B">
                    <label class="form-check-label" for="kode_kelas">TI-2B</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>