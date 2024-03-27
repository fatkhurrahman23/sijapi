<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources\css\admin.css')
    @vite('resources/js/admin.js')
</head>
<body>
    <div class="container">
        <div>
        <div id="mahasiswa" class="page ml-12">
                    <p class=" glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DATA MAHASISWA</p>
                    <form action="admin/mahasiswa" method="POST">
                        @csrf
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            
                            <div class="sm:col-span-2">
                                <label for="nama-mahasiswa" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Mahasiswa</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="nama-mahasiswa" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="nim" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" autocomplete="nim" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode-kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode-_kelas" autocomplete="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="jenis-kelamin" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Jenis Kelamin</label>
                                <div class="mt-2">
                                    <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis-kelamin-name" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>          
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2 flex justify-between items-end">
                                <button type="submit" class=" flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" >
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
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Mahasiswa</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIM</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach($dataMahasiswa as $mahasiswa)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $mahasiswa->nama }}</td>
                                    <td class="border px-4 py-2">{{ $mahasiswa->nim }}</td>
                                    <td class="border px-4 py-2">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>     
        </div>
    </div>

</body>
</html>