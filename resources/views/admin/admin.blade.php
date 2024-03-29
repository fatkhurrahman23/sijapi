<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <!-- ======= Styles ====== -->
    @vite('resources\js\admin.js')
    @vite('resources\css\admin.css')

</head>

<body>
<!-- =============================================== Navigation =============================================== -->
    <div class="container">
        <div class="navigation" id="myNav" onmouseenter="showScroll()" onmouseleave="hideScroll()">
            <ul>
                <li class="mt-2">
                    <a href="#">
                        <span class="icon bg-logo-polines bg-contain bg-no-repeat"></span>
                        <span class="title bg-bg-sijapi bg-no-repeat bg-contain w-3/4 ml-2" ></span>
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

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title ml-2">Sign Out</span>
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

                <div class="user bg-yellow-400">
                    <p class="flex justify-center font-poppins text-3xl font-semibold text-custom-putih">A</p>
                </div>
                <!-- TAMBAHKAN USERNAME YANG DIDAPAT DARI SESSION -->
                <p class="username">
                    <span class="font-poppins font-semibold text-custom-birumuda">{{ isset($username) ? $username : 'Guest' }}</span>
                </p>
                <!-- button logout -->
                <a href="{{ route('logout') }}" class="logout">
                    <ion-icon name="log-out-outline">LOGOUT</ion-icon>
                </a>
            </div>

            
<!-- ===============================================TAMBAH DATA=============================================== -->
            <div class="tambah">
                @include('admin\tambahdata')
                @include('admin\kelas_mahasiswa')
                @include('admin\ruang')
                @include('admin\dosen')
                
                <!-- ===============================================MAHASISWA=============================================== -->
                <x-mahasiswa-component />
                
                
                <!-- ===============================================DOSEN=============================================== -->
                <x-dosen-component />
                
                <!-- ===============================================MATA KULIAH=============================================== -->
                @include('admin\matkul')
                <!-- ===============================================RUANG=============================================== -->
                <!-- @include('admin\prodi_dosen') -->
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