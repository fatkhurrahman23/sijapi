<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/matkul.css')
    @vite('resources/js/matkul.js')
</head>

<body>
    <div class="container">
        <div>
            <div id="matkul" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DATA MATKUL</p>
                <form action="admin/matakuliah" method="POST">
                    @csrf
                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-2">
                                <label for="kode_matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode MatKul</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_matkul" id="kode_matkul" autocomplete="kode_matkul" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="nama_matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama MatKul</label>
                                <div class="mt-2">
                                    <input type="text" name="nama_matkul" id="nama_matkul" autocomplete="nama_matkul" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="semester" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Semester</label>
                                <div class="mt-2">
                                    <input type="text" name="semester" id="semester" autocomplete="semester" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="sks" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">SKS</label>
                                <div class="mt-2">
                                    <input type="text" name="sks" id="sks" autocomplete="sks" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="jenis" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Jenis</label>
                                <div class="mt-2">
                                    <select id="jenis" name="jenis" autocomplete="jenis" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Ganjil</option>
                                        <option>Gasal</option>
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode_kelas" autocomplete="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto mt-24 w-11/12 border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Matkul</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">SKS</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">AI81</td>
                            <td class="border px-4 py-2">Machine Learning</td>
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">
                                <button class="bg-custom-birumuda text-custom-birutua px-3 py-1 rounded-md font-poppins font-semibold">Edit</button>
                                <button class="bg-custom-birumuda text-custom-birutua px-3 py-1 rounded-md font-poppins font-semibold">Hapus</button>
                            </td>
                        </tr>
                        @foreach ($dataMataKuliah as $matkul)
                        <tr>
                            <td class="border px-4 py-2">{{ $matkul->kode_mata_kuliah }}</td>
                            <td class="border px-4 py-2">{{ $matkul->nama }}</td>
                            <td class="border px-4 py-2">{{ $matkul->sks }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('matakuliah.edit', $matkul->kode_mata_kuliah) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</a>
                                <a href="{{ route('matakuliah.delete', $matkul->kode_mata_kuliah) }}" class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

