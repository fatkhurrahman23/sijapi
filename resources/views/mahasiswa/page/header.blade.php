<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite('resources/css/header.css')
    @vite('resources/js/header.js')
</head>

<body>
    <header class="bg-custom-birutua">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div class="py-1">
                <div class="w-32 bg-logo-sijapi cursor-pointer bg-contain h-12 bg-no-repeat "></div>
            </div>
            <div class=" nav-links duration-500 md:static absolute md:min-h-fit min-h-[10vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[3vw] gap-8">
                    <li id="beranda-nav">
                        <a class="text-custom-putih hover:text-gray-500" href="beranda.blade.php">Beranda</a>
                    </li>
                    <li id="jadwal-nav">
                        <a class="text-custom-putih hover:text-gray-500" href="#">Jadwal</a>
                    </li>
                    <li id="presensi-nav">
                        <a class="text-custom-putih hover:text-gray-500" href="#">Presensi</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-2">
                <button class="bg-custom-birumuda border border-solid border-custom-putih text-white px-3 py-1 rounded-lg hover:bg-blue-900">Log out</button>
                <button class="bg-custom-birumuda border border-solid border-custom-putih text-white px-4 py-1 rounded-lg hover:bg-blue-900">Profile</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer  md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <div class="container">
           
    </div>

    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
        
    </script>

</body>

</html>
