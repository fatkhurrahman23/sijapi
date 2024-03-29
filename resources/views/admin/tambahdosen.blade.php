<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources\css\app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div id="mata-kuliah" class="page ml-12">
        <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR MATKUL</p>
            <form action="" class="border border-solid ">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1 ">
                        <label for="kode matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Matkul</label>
                            <div class="mt-2">
                                <input type="text" name="kode matkul" id="kode matkul" autocomplete="kode matkul" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>                            
                    </div>

                    <div class="sm:col-span-2">
                        <label for="nama-matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Matkul</label>
                            <div class="mt-2">
                                <input type="text" name="nama-matkul" id="nama-matkul" autocomplete="nama-matkul" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                    </div>
                            
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="jumlah-sks" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Dosen Pengampu</label>
                            <div class="mt-2">
                                <input type="text" name="jumlah-sks" id="jumlah-sks" autocomplete="jumlah-sks" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit" class="w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>