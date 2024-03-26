<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources\css\admin.css')
    @vite('resources/js/admin.js')
</head>
<body>
    <div class="container">
        <div>
            <div id="dosen" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR DOSEN</p>
                    <form action="">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <!-- <a href="#tambahdosen" class="flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">Tambah <ion-icon name="add" size="small" class="ml-1"></ion-icon></a> -->
                                <a href="tambahdosen" class="modal flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">
                                    Tambah Data
                                </a>
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
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">John Doe</td>
                                    <td class="border px-4 py-2">002182725211</td>
                                    <td class="border px-4 py-2">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
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