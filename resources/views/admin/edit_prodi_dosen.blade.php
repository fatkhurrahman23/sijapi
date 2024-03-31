<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi Dosen</title>
    @vite('resources\css\app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="page ml-12" id="editprodidosen">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">EDIT PRODI DOSEN</p>
            <form action="">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                        <div class="mt-2">
                            <input type="text" name="kode_prodi" id="kode_prodi" autocomplete="kode_prodi" value="{{ $prodiDosenToEdit->kode_prodi }}" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Prodi</label>
                        <div class="mt-2">
                            <input type="text" name="nama" id="nama" autocomplete="nama" value="{{ $prodiDosenToEdit->nama }}" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                            
                    <div class="sm:col-span-2 flex justify-between items-end">
                        <button type="submit" class=" flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" >
                            <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                <p class="ml-2">Simpan</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
