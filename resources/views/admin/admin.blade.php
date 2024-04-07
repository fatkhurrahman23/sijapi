<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <!-- ======= Styles ====== -->
    @vite('resources\js\admin2.js')
    @vite('resources\css\admin.css')

</head>

<body>
<!-- =============================================== Navigation =============================================== -->
    <div class="container p-0">
        <div class="navigation" id="myNav" onmouseenter="showScroll()" onmouseleave="hideScroll()">
            <ul>
                <li class="mt-2">
                    <a href="#">
                        <span class="icon bg-logo-polines bg-contain bg-no-repeat"></span>
                        <div class="ml-2 w-3/4 h-full ">
                            <div class="bg-sijapi-new bg-no-repeat bg-contain h-7 w-1/2"></div>
                            <div class="bg-sijapi-text bg-no-repeat bg-contain h-9 w-5/6"></div>
                        </div>
                    </a>
                </li>

                <li id="dashboard-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon"  width="30" height="54" viewBox="0 0 512 512"><rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Dashboard</span>
                    </a>
                </li>

                <li id="mahasiswa-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><circle fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" cx="256" cy="56" r="40"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M204.23 274.44c2.9-18.06 4.2-35.52-.5-47.59-4-10.38-12.7-16.19-23.2-20.15L88 176.76c-12-4-23.21-10.7-24-23.94-1-17 14-28 29-24 0 0 88 31.14 163 31.14s162-31 162-31c18-5 30 9 30 23.79 0 14.21-11 19.21-24 23.94l-88 31.91c-8 3-21 9-26 18.18-6 10.75-5 29.53-2.1 47.59l5.9 29.63 37.41 163.9c2.8 13.15-6.3 25.44-19.4 27.74S308 489 304.12 476.28l-37.56-115.93q-2.71-8.34-4.8-16.87L256 320l-5.3 21.65q-2.52 10.35-5.8 20.48L208 476.18c-4 12.85-14.5 21.75-27.6 19.46s-22.4-15.59-19.46-27.74l37.39-163.83z"/></svg>                        
                        </span>
                        <span class="title ml-2">Mahasiswa</span>
                    </a>
                </li>

                <li id="dosen-nav">
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 192L256 64l224 128-224 128L32 192z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 240v128l144 80 144-80V240M480 368V192M256 320v128"/></svg>                        </span>
                        <span class="title ml-2">Dosen</span>
                    </a>
                </li>

                <li id="matkul-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M384 80H128c-26 0-43 14-48 40L48 272v112a48.14 48.14 0 0048 48h320a48.14 48.14 0 0048-48V272l-32-152c-5-27-23-40-48-40z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 272h144M320 272h144M192 272a64 64 0 00128 0M144 144h224M128 208h256"/></svg>
                        </span>
                        <span class="title ml-2">Mata Kuliah</span>
                    </a>
                </li>
                <li id="ruang-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 416v64M80 32h192a32 32 0 0132 32v412a4 4 0 01-4 4H48h0V64a32 32 0 0132-32zM320 192h112a32 32 0 0132 32v256h0-160 0V208a16 16 0 0116-16z"/><path d="M98.08 431.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM98.08 351.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM98.08 271.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM98.08 191.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM98.08 111.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM178.08 351.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM178.08 271.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM178.08 191.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM178.08 111.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM258.08 431.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM258.08 351.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM258.08 271.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79z"/><ellipse cx="256" cy="176" rx="15.95" ry="16.03" transform="rotate(-45 255.99 175.996)"/><path d="M258.08 111.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM400 400a16 16 0 1016 16 16 16 0 00-16-16zM400 320a16 16 0 1016 16 16 16 0 00-16-16zM400 240a16 16 0 1016 16 16 16 0 00-16-16zM336 400a16 16 0 1016 16 16 16 0 00-16-16zM336 320a16 16 0 1016 16 16 16 0 00-16-16zM336 240a16 16 0 1016 16 16 16 0 00-16-16z"/></svg>                        
                        </span>
                        <span class="title ml-2">Ruang</span>
                    </a>
                </li>
                <li id="kelasmahasiswa-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><rect x="32" y="128" width="448" height="320" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M144 128V96a32 32 0 0132-32h160a32 32 0 0132 32v32M480 240H32M320 240v24a8 8 0 01-8 8H200a8 8 0 01-8-8v-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>                        </span>
                        <span class="title ml-2">kelas Mahasiswa</span>
                    </a>
                </li>
                <li id="prodidosen-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3"  xmlns="http://www.w3.org/2000/svg" class="ionicon"  width="30" height="54" viewBox="0 0 512 512"><path d="M440 432H72a40 40 0 01-40-40V120a40 40 0 0140-40h75.89a40 40 0 0122.19 6.72l27.84 18.56a40 40 0 0022.19 6.72H440a40 40 0 0140 40v240a40 40 0 01-40 40zM32 192h448" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Prodi Dosen</span>
                    </a>
                </li>
                <li id="hari-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32"/><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" x="112" y="224" width="96" height="96" rx="13"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M464 160H48"/></svg>
                        </span>
                        <span class="title ml-2">Hari</span>
                    </a>
                </li>
                <li id="tahunakademik-nav">
                    <a href="{{ url('admin/tahun_akademik') }}">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><rect x="48" y="80" width="416" height="384" rx="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M128 48v32M384 48v32M464 160H48M304 260l43.42-32H352v168M191.87 306.63c9.11 0 25.79-4.28 36.72-15.47a37.9 37.9 0 0011.13-27.26c0-26.12-22.59-39.9-47.89-39.9-21.4 0-33.52 11.61-37.85 18.93M149 374.16c4.88 8.27 19.71 25.84 43.88 25.84 28.59 0 52.12-15.94 52.12-43.82 0-12.62-3.66-24-11.58-32.07-12.36-12.64-31.25-17.48-41.55-17.48"/></svg>
                        </span>
                        <span class="title ml-2">Tahun Akademik</span>
                    </a>
                </li>
                <li id="jam-nav">
                    <a href="{{ url('admin/jam') }}">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M416.07 272a160 160 0 10-160 160 160 160 0 00160-160zM142.12 91.21A46.67 46.67 0 00112 80l-2.79.08C83.66 81.62 64 104 64.07 131c0 13.21 4.66 19.37 10.88 27.23a4.55 4.55 0 003.24 1.77h.88a3.23 3.23 0 002.54-1.31L142.38 99a5.38 5.38 0 001.55-4 5.26 5.26 0 00-1.81-3.79zM369.88 91.21A46.67 46.67 0 01400 80l2.79.08C428.34 81.62 448 104 447.93 131c0 13.21-4.66 19.37-10.88 27.23a4.55 4.55 0 01-3.24 1.76h-.88a3.23 3.23 0 01-2.54-1.31L369.62 99a5.38 5.38 0 01-1.55-4 5.26 5.26 0 011.81-3.79z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256.07 160v112h-80M416.07 432l-40-40M96.07 432l40-40"/></svg>
                        </span>
                        <span class="title ml-2">Jam</span>
                    </a>
                </li>
                <li id="waktutidaktersedia-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M145.61 464h220.78c19.8 0 35.55-16.29 33.42-35.06C386.06 308 304 310 304 256s83.11-51 95.8-172.94c2-18.78-13.61-35.06-33.41-35.06H145.61c-19.8 0-35.37 16.28-33.41 35.06C124.89 205 208 201 208 256s-82.06 52-95.8 172.94c-2.14 18.77 13.61 35.06 33.41 35.06z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M343.3 432H169.13c-15.6 0-20-18-9.06-29.16C186.55 376 240 356.78 240 326V224c0-19.85-38-35-61.51-67.2-3.88-5.31-3.49-12.8 6.37-12.8h142.73c8.41 0 10.23 7.43 6.4 12.75C310.82 189 272 204.05 272 224v102c0 30.53 55.71 47 80.4 76.87 9.95 12.04 6.47 29.13-9.1 29.13z"/></svg>
                        </span>
                        <span class="title ml-2">Waktu Tidak Tersedia</span>
                    </a>
                </li>
                <li id="enrollment-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><circle cx="256" cy="184" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="344" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="168" cy="328" r="120" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Enrollment</span>
                    </a>
                </li>
                <li id="jadwalkuliah-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><rect x="32" y="96" width="64" height="368" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 224h128M112 400h128"/><rect x="112" y="160" width="128" height="304" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="256" y="48" width="96" height="416" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M422.46 96.11l-40.4 4.25c-11.12 1.17-19.18 11.57-17.93 23.1l34.92 321.59c1.26 11.53 11.37 20 22.49 18.84l40.4-4.25c11.12-1.17 19.18-11.57 17.93-23.1L445 115c-1.31-11.58-11.42-20.06-22.54-18.89z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Jadwal Kuliah</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Password</span>
                    </a>
                </li>
                <hr class="mb-3 mt-7">
                <li id="dashboard-nav">
                    <a href="{{ route('logout') }}" class="logout">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span id="signOutButton" class="title ml-2 font-medium">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

<!-- =============================================== Main =============================================== -->
        <div class="main">
            <div class="topbar">
                
                <div class="toggle">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="40" height="74" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="mt-4 flex flex-col justify-center items-center align-middle">
                    <div class="user bg-yellow-400">
                        <p class="flex justify-center font-poppins text-3xl font-semibold text-custom-putih">A</p>
                    </div>
                    <!-- TAMBAHKAN USERNAME YANG DIDAPAT DARI SESSION -->
                    <p class="username">
                        <span class="font-poppins font-semibold text-custom-birumuda">{{ isset($username) ? $username : 'Guest' }}</span>
                    </p>
                </div>
            </div>

            
<!-- ===============================================TAMBAH DATA=============================================== -->
            <div class="tambah">
<<<<<<< HEAD
                @yield('content')
=======
                @include('admin\dashboard')
                <x-mahasiswa-component />
                <x-dosen-component />
                <x-kelas-mahasiswa />
                <x-ruang-component />
                <x-prodi-dosen />
                <x-hari-component />
                <x-tahun-akademik />
                <x-mata-kuliah-component />
                <x-jam-component />

                @include('admin\waktu_tidak_tersedia')
                <x-enrollment-component />
                @include('admin\jadwal_kuliah')
                <div id="editmatkul"></div>

                
                <!-- ===============================================MAHASISWA=============================================== -->
                
                
                <!-- ===============================================DOSEN=============================================== -->
                
                <!-- ===============================================MATA KULIAH=============================================== -->
                <!-- ===============================================RUANG=============================================== -->
>>>>>>> 20f81164e171f5fcc8bf5668a79d47c817c6147d
            </div>
        </div>
    </div>
    <script>
    function showScroll() {
        document.getElementById("myNav").style.overflowY = "scroll"; 
    }

    function hideScroll() {
        document.getElementById("myNav").style.overflowY = "hidden";    
    }
    </script>
</body>

</html>