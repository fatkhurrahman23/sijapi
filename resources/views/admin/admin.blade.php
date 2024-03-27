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
                        <span class="icon bg-logo-polines bg-contain bg-no-repeat"></span>
                        <span class="title bg-bg-sijapi bg-no-repeat bg-contain w-3/4 ml-2" ></span>
                    </a>
                </li>

                <li id="tambahdata-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon"  width="30" height="54" viewBox="0 0 512 512"><rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li id="mahasiswa-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><circle fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" cx="256" cy="56" r="40"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M204.23 274.44c2.9-18.06 4.2-35.52-.5-47.59-4-10.38-12.7-16.19-23.2-20.15L88 176.76c-12-4-23.21-10.7-24-23.94-1-17 14-28 29-24 0 0 88 31.14 163 31.14s162-31 162-31c18-5 30 9 30 23.79 0 14.21-11 19.21-24 23.94l-88 31.91c-8 3-21 9-26 18.18-6 10.75-5 29.53-2.1 47.59l5.9 29.63 37.41 163.9c2.8 13.15-6.3 25.44-19.4 27.74S308 489 304.12 476.28l-37.56-115.93q-2.71-8.34-4.8-16.87L256 320l-5.3 21.65q-2.52 10.35-5.8 20.48L208 476.18c-4 12.85-14.5 21.75-27.6 19.46s-22.4-15.59-19.46-27.74l37.39-163.83z"/></svg>                        
                        </span>
                        <span class="title">Mahasiswa</span>
                    </a>
                </li>

                <li id="dosen-nav">
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 192L256 64l224 128-224 128L32 192z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 240v128l144 80 144-80V240M480 368V192M256 320v128"/></svg>                        </span>
                        <span class="title">Dosen</span>
                    </a>
                </li>

                <li id="matkul-nav">
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M384 80H128c-26 0-43 14-48 40L48 272v112a48.14 48.14 0 0048 48h320a48.14 48.14 0 0048-48V272l-32-152c-5-27-23-40-48-40z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 272h144M320 272h144M192 272a64 64 0 00128 0M144 144h224M128 208h256"/></svg>
                        </span>
                        <span class="title">Mata Kuliah</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" class="ionicon" width="30" height="54" viewBox="0 0 512 512"><path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
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
            </div>

            
<!-- ===============================================TAMBAH DATA=============================================== -->
            <div class="tambah">
                @include('admin\tambahdata')

<!-- ===============================================MAHASISWA=============================================== -->
                @include('admin\mahasiswa')
            
<!-- ===============================================DOSEN=============================================== -->
                @include('admin\dosen')

<!-- ===============================================MATA KULIAH=============================================== -->
                @include('admin\matkul')
    </div>
</body>

</html>