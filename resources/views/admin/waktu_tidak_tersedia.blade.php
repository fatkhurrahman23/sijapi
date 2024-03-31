<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Tidak tersedia</title>
    @vite('resources/css/waktu_tidak_tersedia.css')
    @vite('resources/js/waktu_tidak_tersedia.js')
</head>
<body>
    <div class="container">
        <div id="waktutidaktersedia" class="page ml-12">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH WAKTU TIDAK TERSEDIA</p>
            <form action="">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_waktu_tidak_tersedia" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Waktu Tidak Tersedia</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_waktu_tidak_tersedia" id="kode_waktu_tidak_tersedia" autocomplete="kode_waktu_tidak_tersedia" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" autocomplete="kode_dosen" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_jam" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jam" id="kode_jam" autocomplete="kode_jam" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jam" id="kode_jam" autocomplete="kode_jam" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Waktu Tidak Tersedia</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Dosen</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Jam</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Hari</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">J9112</td>
                            <td class="border px-4 py-2">Kurnianingsih</td>
                            <td class="border px-4 py-2">12:00 - 13:00</td>
                            <td class="border px-4 py-2">Senin</td>
                            <td class="border px-4 py-2">
                                <button type="button" data-modal-target="edit_waktu_tidak_tersedia_modal" data-modal-toggle="edit_waktu_tidak_tersedia_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <div id="edit_waktu_tidak_tersedia_modal" tabindex="-1" aria-hidden="true"class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
<!-- ==========================================================Modal content========================================================== -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            EDIT WAKTU TIDAK TERSEDIA
                                                        </h3>
                                                        <button type="button"
                                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="edit_waktu_tidak_tersedia_modal">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <div class="p-4 md:p-5">
                                                        <form class="space-y-4" action="#">
                                                            <div class="sm:col-span-2">
                                                                <label for="kode_waktu_tidak_tersedia" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Waktu Tidak Tersedia</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_waktu_tidak_tersedia" id="kode_waktu_tidak_tersedia" autocomplete="kode_waktu_tidak_tersedia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>

                                                            <div class="sm:col-span-2">
                                                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_dosen" id="kode_dosen" autocomplete="kode_dosen" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2 sm:col-start-1">
                                                                <label for="kode_jam" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_jam" id="kode_jam" autocomplete="kode_jam" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label for="kode_" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Hari</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_" id="kode_" autocomplete="kode_" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2 flex justify-center items-center">
                                                                <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                                    <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                                                    <p class="ml-2">Simpan</p>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

