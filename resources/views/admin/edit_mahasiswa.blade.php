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
        <h2>Edit Mahasiswa</h2>
        <form action="/admin/mahasiswa/{{ $mahasiswaToEdit->nim }}/update" method="POST">
            @csrf
            <!-- @method('PUT') -->
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswaToEdit->nim }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswaToEdit->nama }}">
            </div>
            <!-- kode kelas -->
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="{{ $mahasiswaToEdit->kode_kelas }}">
            </div>
            <!-- jenis kelamin -->
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label mb-3">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                    <option value="L" {{ $mahasiswaToEdit->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $mahasiswaToEdit->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
    </div>
</body>
</html>