@extends('admin.admin')
@section('content')
    @vite('resources/css/jadwal.css')
    @vite('resources/js/jadwal.js')

    <div class="container">
        <div>
            <div id="jadwalkuliah" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH JADWAL KULIAH</p>
                    <form action="" method="POST">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_jadwal" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jadwal</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jadwal" id="kode_jadwal" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_enrollment" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Enrollment</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_enrollment" id="kode_enrollment" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_hari" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Hari</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_hari" id="kode_hari" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Ruang</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_ruang" id="kode_ruang" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam</label>
                                <div class="mt-2">
                                    <div class="mt-2">
                                        <input type="text" name="kode_hari" id="kode_hari" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="">
                                    </div>          
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
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Jadwal</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Enrollment</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Hari</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Ruang</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Kelas</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Jam</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Machine Not Learning</td>
                            <td class="border px-4 py-2">Dr. John Doe</td>
                            <td class="border px-4 py-2">Senin</td>
                            <td class="border px-4 py-2">MST III-04</td>
                            <td class="border px-4 py-2">TI-2B</td>
                            <td class="border px-4 py-2">07:00 - 09:00</td>
                            <td class="border px-4 py-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>     
        </div>
    </div>
@endsection