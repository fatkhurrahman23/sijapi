<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    @vite('resources\css\app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="container">
        <div>
            <div id="enrollment" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH ENROLLMENT</p>
                    <form action="/admin/enrollment" method="POST">
                        @csrf
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_enrollment" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Enrollment</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_enrollment" id="kode_enrollment" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_tahun_akademik" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Tahun Akademik</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_tahun_akademik" id="kode_tahun_akademik" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_mata_kuliah" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Matkul</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_mata_kuliah" id="kode_mata_kuliah" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
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
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Enrollment</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Kelas</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Dosen</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Tahun Akademik</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Matkul</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataEnrollment as $enrollment)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $enrollment->kode_enrollment }}</td>
                                <td class="border px-4 py-2">{{ $enrollment->kode_kelas }}</td>
                                <td class="border px-4 py-2">{{ $enrollment->kode_dosen }}</td>
                                <td class="border px-4 py-2">{{ $enrollment->kode_tahun_akademik }}</td>
                                <td class="border px-4 py-2">{{ $enrollment->kode_mata_kuliah }}</td>
                                <td class="border px-4 py-2">
                                    <a href="/admin/enrollment/{{ $enrollment->kode_enrollment }}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</a>
                                    <a href="/admin/enrollment/{{ $enrollment->kode_enrollment }}/delete" class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</a>
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