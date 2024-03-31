<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div id="kelasmahasiswa" class="page ml-12">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH KELAS MAHASISWA</p>
            <form action="admin/kelas_mahasisaw" method="POST">
                @csrf
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-2">
                        <label for="kode_kelas_mahasiswa" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas Mahasiswa</label>
                        <div class="mt-2">
                            <input type="text" name="kode_kelas_mahasiswa" id="kode_kelas_mahasiswa" autocomplete="kode_kelas_mahasiswa" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Prodi</label>
                        <div class="mt-2">
                            <input type="text" name="nama_prodi" id="nama_prodi" autocomplete="nama_prodi" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2 flex justify-between items-end">
                        <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                            <p class="ml-2">Tambah</p>
                        </button>
                    </div>
                </div>
            </form>
            <div class="overflow-x-auto">
                <table class="table-auto mt-24 w-11/12 border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Kelas Mahasiswa</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Prodi</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataKelasMahasiswa as $kelasMahasiswa)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $kelasMahasiswa->kode_kelas }}</td>
                                <td class="border px-4 py-2">{{ $kelasMahasiswa->prodi }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('kelas_mahasiswa.edit', $kelasMahasiswa->kode_kelas) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</a>
                                    <a href="{{ route('kelas_mahasiswa.delete', $kelasMahasiswa->kode_kelas) }}" class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

