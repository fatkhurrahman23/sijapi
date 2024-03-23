<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    @vite('resources\css\admin.css')
    @vite('resources/js/admin.js')

</head>

<body>
<!-- =============================================== Navigation =============================================== -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li class="mt-2">
                    <a href="#">
                        <span class="icon bg-logo-polines bg-contain bg-no-repeat">
                            
                        </span>
                        <span class="title bg-bg-sijapi bg-no-repeat bg-contain w-3/4 ml-2" ></span>
                    </a>
                </li>

                <li id="tambah-data-nav">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="grid-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Data</span>
                    </a>
                </li>

                <li id="mahasiswa-nav">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Mahasiswa</span>
                    </a>
                </li>

                <li id="dosen-nav">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="id-card-outline"></ion-icon>
                        </span>
                        <span class="title">Dosen</span>
                        
                    </a>
                </li>

                <li id="mata-kuliah-nav">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="file-tray-full-outline"></ion-icon>
                        </span>
                        <span class="title">Mata Kuliah</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

<!-- =============================================== Main =============================================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user bg-yellow-400">
                    <p class="flex justify-center font-poppins text-3xl font-semibold text-custom-putih">A</p>
                </div>
            </div>

            <div class="tambah">

<!-- ===============================================TAMBAH DATA=============================================== -->

                <div id="tambah-data" class="page">
                   
                   <h1>tambah Content</h1>
               </div>

<!-- ===============================================MAHASISWA=============================================== -->

                <div id="mahasiswa" class="page ml-12">
                    <p class=" glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DATA MAHASISWA</p>
                    <form action="">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="no" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">No</label>
                                <div class="mt-2">
                                    <input type="text" name="no" id="no" autocomplete="no" class="block w-4/5 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="nama-mahasiswa" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Mahasiswa</label>
                                <div class="mt-2">
                                    <input type="text" name="nama-mahasiswa" id="nama-mahasiswa" autocomplete="nama-mahasiswa" class="block w-4/5 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="nim" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" autocomplete="nim" class="block w-4/5 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit" class="w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
                            </div>
                        </div>
                    </form>
                    <div class="overflow-x-auto">
                        <table class="table-auto mt-24 w-11/12 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Mahasiswa</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIM</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Tambahkan baris-baris data di sini -->
                
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">Rais Hannan Rizanto</td>
                                    <td class="border px-4 py-2">4.33.22.1.21</td>
                                    <td class="border px-4 py-2">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal  py-1 px-2 rounded">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

<!-- ===============================================DOSEN=============================================== -->

                <div id="dosen" class="page ml-12">
                    <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR DOSEN</p>
                        <form action="">
                            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <a href="#tambahdosen" class="flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">Tambah <ion-icon name="add" size="small" class="ml-1"></ion-icon></a>
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
                                    <!-- Tambahkan baris-baris data di sini -->
                    
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
<!-- ===============================================TAMBAH DATA DOSEN=============================================== -->
                <div id="tambahdosen" class="page ml-12">
                    <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH DAFTAR DOSEN</p>
                        <form action="">
                            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <button type="button" class= "flex w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 justify-center">Tambah <ion-icon name="add" size="small" class="ml-1"></ion-icon></button>
                                </div>
                            </div>
                        </form>
                </div>
<!-- ===============================================MATA KULIAH=============================================== -->
                <div id="mata-kuliah" class="page">
                   
                    <h1>matakuliah Content</h1>
                </div>
            </div>

    <!-- =========== Scripts =========  -->
    <script src="resources/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    document.getElementById("tambahdosen-link").addEventListener("click", function(event) {
        event.preventDefault(); // Menghentikan tindakan default dari tautan (mengarahkan ke URL yang ditentukan)
        var targetElement = document.getElementById("tambahdosen"); // Mengambil elemen target
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: "smooth" }); // Menggulir halaman ke elemen target dengan efek smooth
        }
    });
</script>
</body>

</html>