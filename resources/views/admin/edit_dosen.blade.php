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
        <h2>Edit Data Dosen</h2>
        <form action="/admin/dosen/{{ $dosenToEdit->nip }}/update" method="POST">
            @csrf
            <!-- PARAMETER: kode_dosen, nip, nama, alamat, no_telp, kode_prodi(IK,TI) -->
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosenToEdit->nip }}">
            </div>
            <div class="mb-3">
                <label for="kode_dosen" class="form-label">Kode Dosen</label>
                <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="{{ $dosenToEdit->kode_dosen }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosenToEdit->nama }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dosenToEdit->alamat }}">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $dosenToEdit->no_telp }}">
            </div>
            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                <select name="kode_prodi" id="kode_prodi" class="form-select">
                    <option value="IK" {{ $dosenToEdit->kode_prodi == 'L' ? 'selected' : '' }}>D3-Teknik Informatika</option>
                    <option value="TI" {{ $dosenToEdit->kode_prodi == 'P' ? 'selected' : '' }}>D4-Teknologi Rekayasa Komputer</option>
                </select>
    </div>
</body>
</html>