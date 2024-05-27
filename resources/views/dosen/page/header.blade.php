<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite('resources/css/header.css')
    @vite('resources/js/header.js')
</head>

<body class="">
    <div class="contain overflow-x-hidden">
        <nav class=" bg-custom-birutua flex justify-between fixed items-center mx-auto h-12 shadow-md z-50" id="navbar">
            <div class="w-screen h-full justify-between flex mx-2 ">
                <p class="ml-2 sm:ml-7 md:ml-7 lg:ml-7 w-full justify-start flex  items-center font-poppins font-bold  h-full text-xl sm:text-2xl text-custom-tomat">S I J A P I</p>
                <div class="h-full w-full items-center  flex justify-between">
                    <ul class=" gap-12  mx-auto hidden sm:flex z-50">
                        <li><a href="{{ url('dosen/page/beranda') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base ">Beranda</a></li>  
                        <li><a href="{{ url('dosen/page/jadwal') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base ">Jadwal</a></li>
                        <li><a href="{{ url('dosen/page/presensi') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base">Presensi</a></li>
                    </ul>
                </div>
             
                <div class="w-full items-center flex justify-center sm:justify-end md:justify-end lg:justify-end font-poppins -mr-8  sm:mr-12 md:mr-12 lg:mr-12 relative">
                    <p class="text-custom-silver sm:mr-2 md:mr-2 lg:mr-3 hidden font-poppins font-medium sm:text-base md:text-base lg:flex lg:text-base order-last sm:order-first md:order-first lg:order-first">Professor Snape</p>
                    <div class="relative cursor-pointer group" onclick="toggleDropdown()">
                        <div onclick="toggleDropdown()" id="profileIcon" class="flex justify-center items-center">    
                            <svg  xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" class="ionicon" viewBox="0 0 512 512">
                                <path stroke="#000" fill="#DBDFEB" d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6zM432 480H80a31 31 0 01-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75 1.94 10.73-.68 21.34-7.18 29.11A31 31 0 01432 480z"/>
                            </svg>
                            <svg   xmlns="http://www.w3.org/2000/svg" class="cursor-pointer animate-bounce" width="10px" height="10px" class="ionicon" viewBox="0 0 512 512">
                                <path fill="#DBDFEB" d="M64 144l192 224 192-224H64z"/>
                            </svg>
                        </div>
                        <div id="dropdownMenu" class="transition-opacity duration-300 ease-in-out absolute right-0 mt-2 w-48 bg-custom-abu opacity-95 border border-gray-200 rounded shadow-lg hidden">
                            <div class=" py-2  lg:hidden">
                                <p class="block px-4  text-gray-800  font-poppins text-sm font-medium">Username</p>
                                <p class="block px-6 py-1  text-gray-800  font-poppins font-base text-xs">Professor Snape</p>
                            </div>
                            <a class="  cursor-pointer" href="/logout">
                                <button class="font-poppins text-sm font-semibold px-4 w-full justify-start flex py-2 text-red-600 hover:bg-gray-100">
                                    Log out
                                </button>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="fixed bg-custom-birutua w-full bottom-0 h-12 z-50 sm:hidden">
                <div class="mx-4 my-2">
                    <ul class="flex mx-auto  justify-around w-full ">
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path fill="#FFD717" d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z"/><path d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z" fill="#FFD717" stroke="#FFD717"/></svg>
                                <a href="{{ url('dosen/page/beranda') }}" class="font-poppins text-ls text-custom-kuning">Beranda</a>
                            </li>
                        </button>
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path d="M428 224H288a48 48 0 01-48-48V36a4 4 0 00-4-4h-92a64 64 0 00-64 64v320a64 64 0 0064 64h224a64 64 0 0064-64V228a4 4 0 00-4-4zm-92 160H176a16 16 0 010-32h160a16 16 0 010 32zm0-80H176a16 16 0 010-32h160a16 16 0 010 32z" fill="#fff"/><path fill="#fff" d="M419.22 188.59L275.41 44.78a2 2 0 00-3.41 1.41V176a16 16 0 0016 16h129.81a2 2 0 001.41-3.41z"/></svg>                                
                                <a href="{{ url('dosen/page/jadwal') }}" class="font-poppins text-ls text-custom-putih">Jadwal</a>
                            </li>
                        </button>
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path fill="#fff" d="M439.91 112h-23.82a.09.09 0 00-.09.09V416a32 32 0 0032 32 32 32 0 0032-32V152.09A40.09 40.09 0 00439.91 112z"/><path fill="#fff" d="M384 416V72a40 40 0 00-40-40H72a40 40 0 00-40 40v352a56 56 0 0056 56h342.85a1.14 1.14 0 001.15-1.15 1.14 1.14 0 00-.85-1.1A64.11 64.11 0 01384 416zM96 128a16 16 0 0116-16h64a16 16 0 0116 16v64a16 16 0 01-16 16h-64a16 16 0 01-16-16zm208 272H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 368h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 400zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 304h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 336zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 240h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 272zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 01240 176h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 208zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 01240 112h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 144z"/></svg>
                                <a href="{{ url('dosen/page/presensi') }}" class="font-poppins text-ls text-custom-putih">Presensi</a>
                            </li>
                        </button>
                
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>

</html>
