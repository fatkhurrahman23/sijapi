<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit ruang</title>
    @vite('resources\css\app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="container">
        <div>
            <div id="dosen" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">EDIT DATA DOSEN</p>
                    <form action="/admin/dosen/{{ $dosenToEdit->nip }}/update" method="POST">
                        @csrf
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $dosenToEdit->kode_dosen }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nip" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIP</label>
                                <div class="mt-2">
                                    <input type="text" name="nip" id="nip" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $dosenToEdit->nip }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $dosenToEdit->nama }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="alamat" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Alamat</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat" id="alamat" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $dosenToEdit->alamat }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_telp" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">No Telp</label>
                                <div class="mt-2">
                                    <input type="text" name="no_telp" id="no_telp" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $dosenToEdit->no_telp }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                                <div class="mt-2">
                                    <select id="kode_prodi" name="kode_prodi" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="IK" {{ $dosenToEdit->kode_prodi == 'L' ? 'selected' : '' }}>D3-Teknik Informatika</option>
                                        <option value="TI" {{ $dosenToEdit->kode_prodi == 'P' ? 'selected' : '' }}>D4-Teknologi Rekayasa Komputer</option>
                                    </select>            
                                </div>
                            </div>
                            <div class="sm:col-span-2 flex justify-between items-end">
                                <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                    <p class="ml-2">Simpan</p>
                                </button>
                            </div>
                        </div>
                    </form>
            </div>     
        </div>
    </div>

</body>
</html>