<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    @vite('resources\css\admin.css')
    @vite('resources/js/admin.js')
</head>
<body>
    <div class="container">
        <div>
            <div id="dosen" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR DOSEN</p>
                    <form action="">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <!-- <a href="#tambahdosen" class="flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">Tambah <ion-icon name="add" size="small" class="ml-1"></ion-icon></a> -->
                                <a href="tambahdosen" class="modal flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="overflow-x-auto">
                        <table class="table-auto mt-24 w-11/12 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Dosen</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIP</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                    
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">002182725211</td>
                                    <td class="border px-4 py-2">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal  py-1 px-2 rounded">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>     
        </div>
    </div>

    <script>
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        modalToggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalTarget = button.dataset.modalToggle;
                const modal = document.getElementById(modalTarget);
                modal.classList.toggle('hidden');
            });
        });

        const modalCloseButtons = document.querySelectorAll('[data-modal-hide]');
        modalCloseButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalTarget = button.dataset.modalHide;
                const modal = document.getElementById(modalTarget);
                modal.classList.add('hidden');
            });
        });
    </script>
=======
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
>>>>>>> cc78e752e7fd6eeee11096f87838a3bddf768261
</body>
</html>