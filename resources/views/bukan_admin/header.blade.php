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
        <nav class="bg-custom-birutua shadow-2xl flex justify-between align-middle items-center w-full mx-auto px-6 h-12">
            <div class="">
                <div class="w-24 flex items-center align-middle justify-center bg-sijapi-update cursor-pointer bg-contain h-7 bg-no-repeat "></div>
            </div>
            <div class="z-50 nav-links duration-500 md:static absolute md:min-h-fit min-h-[10vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class=" flex md:flex-row flex-col md:items-center md:gap-[3vw] gap-1 ">
                    <li id="beranda-nav" class="">
                        <a class="text-custom-putih hover:text-gray-500" href="{{ url('bukan_admin/beranda') }}">Beranda</a>
                    </li>
                    <li id="jadwal-nav" class="">
                        <a class="text-custom-putih hover:text-gray-500" href="{{ url('bukan_admin/jadwal') }}">Jadwal</a>
                    </li>
                    <li id="presensi-nav" class="">
                        <a class="text-custom-putih hover:text-gray-500" href="#">Presensi</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-2 z-50">
                <button class="bg-custom-birumuda border border-solid border-custom-putih text-white px-3 py-1 rounded-lg hover:bg-blue-900">Log out</button>
                <button class="bg-custom-birumuda border border-solid border-custom-putih text-white px-4 py-1 rounded-lg hover:bg-blue-900">Profile</button>
                <ion-icon id="menu-icon" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>

</html>
