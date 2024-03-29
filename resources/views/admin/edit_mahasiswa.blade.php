<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ruang</title>
    @vite('resources\css\app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div>
        <div id="editmahasiswa" class="page ml-12">
                    <p class=" glow-text mt-10 font-poppins font-bold text-black text-2xl">EDIT DATA MAHASISWA</p>
                    <form action="/admin/mahasiswa/{{ $mahasiswaToEdit->nim }}/update" method="POST">
                        @csrf
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Mahasiswa</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="nama" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $mahasiswaToEdit->nama }}">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="nim" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" autocomplete="nim" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $mahasiswaToEdit->nim }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode_kelas" autocomplete="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $mahasiswaToEdit->kode_kelas }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="jenis_kelamin" class="block text-sm font-poppins font-semibold leading-6 text-gray-90">Jenis Kelamin</label>
                                <div class="mt-2">
                                    <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis_kelamin" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="L" {{ $mahasiswaToEdit->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ $mahasiswaToEdit->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>          
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
        </div>
    </div>

</body>
</html>