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
        <div id="ruang" class="page ml-12">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DATA RUANG</p>
            <form action="">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <!-- <div class="sm:col-span-2">
                        <label for="id" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Id</label>
                        <div class="mt-2">
                            <input type="text" name="id" id="id" autocomplete="id" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div> -->
                    <div class="sm:col-span-2">
                        <label for="kode-ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Ruang</label>
                        <div class="mt-2">
                            <input type="text" name="kode-ruang" id="kode-ruang" autocomplete="kode-ruang" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama-ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Ruang</label>
                        <div class="mt-2">
                            <input type="text" name="nama-ruang" id="nama-ruang" autocomplete="nama-ruang" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Ruang</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Ruang</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">J261</td>
                            <td class="border px-4 py-2">MST III/04</td>
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
</body>
</html>

