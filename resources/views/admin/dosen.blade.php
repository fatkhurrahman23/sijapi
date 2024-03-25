<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <!-- page admin untuk tampil data dosen -->
    <h1>DOSEN</h1>
    <p>Ini adalah halaman DOSEN</p>
    <table class="table table-bordered">
        <tr>
            <th>Kode Dosen</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th> 
            <th>Nomor Telepon</th>    
            <th>Prodi</th>       
            <th>Action</th>
        </tr>
        @foreach($dataDosen as $dosen)
        <tr>
            <td>{{ $dosen->kode_dosen }}</td>
            <td>{{ $dosen->nip }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->alamat }}</td>
            <td>{{ $dosen->no_telp }}</td>
            <td>{{ $dosen->kode_prodi }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>

    <!-- Form -->
    <div class="container mt-5">
        <h2>Tambah data dosen</h2>
        <form action="/admin/dosen" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_dosen" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="mb-3">
                <label for="kode_prodi" class="form-label">PRODI</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kode_prodi" id="kode_prodi" value="TI">
                    <label class="form-check-label" for="kode_prodi">TI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kode_prodi" id="kode_prodi" value="IK">
                    <label class="form-check-label" for="kode_prodi">IK</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>