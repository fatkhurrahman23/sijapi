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
    <div class="container">
        <div>
            <div id="dosen" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR DOSEN</p>
                    <form action="">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nip" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIP</label>
                                <div class="mt-2">
                                    <input type="text" name="nip" id="nip" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="alamat" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Alamat</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat" id="alamat" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_telp" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">No Telp</label>
                                <div class="mt-2">
                                    <input type="text" name="no_telp" id="no_telp" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                                <div class="mt-2">
                                    <select id="kode_prodi" name="kode_prodi" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>TI</option>
                                        <option>TRK</option>
                                    </select>          
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
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Dosen</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIP</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                    
                                @foreach ($dataDosen as $dosen)
                                    <tr>
                                        <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                        <td class="border px-4 py-2">{{ $dosen->nama }}</td>
                                        <td class="border px-4 py-2">{{ $dosen->nip }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('dosen.edit', $dosen->nip) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</a>
                                            <a href="{{ route('dosen.delete', $dosen->nip) }}" class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>     
        </div>
    </div>

    <script>
        // Script JavaScript untuk toggle modal
        // Pastikan modul modal sudah didefinisikan
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        modalToggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalTarget = button.dataset.modalToggle;
                const modal = document.getElementById(modalTarget);
                modal.classList.toggle('hidden');
            });
        });

        const modalCloseButtons = document.querySelectorAll('[data-modal-hide]');
        modalCloseButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalTarget = button.dataset.modalHide;
                const modal = document.getElementById(modalTarget);
                modal.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
