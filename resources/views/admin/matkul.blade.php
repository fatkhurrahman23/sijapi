


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
                <form action="">
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
                                        <button type="button" data-modal-target="edit_matkul_modal" data-modal-toggle="edit_matkul_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <div id="edit_matkul_modal" tabindex="-1" aria-hidden="true"class="hidden modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
<!-- ==========================================================Modal content========================================================== -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            EDIT DATA MATKUL
                                                        </h3>
                                                        <button type="button"
                                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="edit_matkul_modal">
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
                                                                <label for="kode_matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode MatKul</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_matkul" id="kode_matkul" autocomplete="kode_matkul" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label for="nama_matkul" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama MatKul</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="nama_matkul" id="nama_matkul" autocomplete="nama_matkul" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label for="semester" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Semester</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="semester" id="semester" autocomplete="semester" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2 sm:col-start-1">
                                                                <label for="sks" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">SKS</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="sks" id="sks" autocomplete="sks" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label for="jenis" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Jenis</label>
                                                                <div class="mt-2">
                                                                    <select id="jenis" name="jenis" autocomplete="jenis" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                        <option>Ganjil</option>
                                                                        <option>Gasal</option>
                                                                    </select>          
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2">
                                                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                                                <div class="mt-2">
                                                                    <input type="text" name="kode_kelas" id="kode_kelas" autocomplete="kode_kelas" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2 flex justify-center items-center">
                                                                <button type="submit" class=" flex justify-center align-middle items-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" >
                                                                    <img class="flex justify-center align-bottom items-center" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                                                    <p class="ml-2">Simpan</p>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal  py-1 px-2 rounded">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        const modalToggle = document.querySelector("[data-modal-toggle]");
const modal = document.getElementById("edit_matkul_modal");
const overlay = document.createElement("div");
overlay.classList.add("overlay");

modalToggle.addEventListener("click", () => {
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
    document.body.appendChild(overlay);
    overlay.style.display = "block";
});

const modalClose = document.querySelector("[data-modal-hide]");

modalClose.addEventListener("click", () => {
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
    overlay.style.display = "none";
    document.body.removeChild(overlay);
});
    </script>

</body>

</html>






