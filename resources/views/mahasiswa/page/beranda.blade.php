<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    @vite('resources\css\app.css')
</head>

<body class="flex flex-col h-screen bg-cover bg-center">

    <!-- NAVIGASI -->
    <nav class="bg-custom-birutua">
        <div class="mx-auto px-2 sm:px-6 lg:px-8 flex justify-between items-center h-20">
            <!-- LOGO -->
            <div>
                <div class="bg-logo-sijapi w-28 h-12 bg-no-repeat bg-contain"></div>
            </div>
            <!-- NAVIGASI -->
            <div class="flex justify-center items-center space-x-4 text-white">
                <ul class="flex space-x-4">
                    <li><a href="" class="py-4 px-2 border-b-2 border-transparent hover:border-yellow-200">Beranda</a></li>
                    <li><a href="" class="py-4 px-2 border-b-2 border-transparent hover:border-yellow-200">Jadwal</a></li>
                    <li><a href="" class="py-4 px-2 border-b-2 border-transparent hover:border-yellow-200">Presensi</a></li>
                </ul>
            </div>
            <!-- PROFILE LOGIN -->
            <div id="profileLogout" class="hidden sm:flex space-x-4">
                <button class="font-poppins text-custom-putih text-sm border border-solid border-custom-putih px-7 py-1 rounded-md bg-custom-birumuda">LOGOUT</button>
                <button class="font-poppins text-sm text-custom-putih border-custom-putih px-3 py-1 rounded-md flex border border-solid bg-custom-birumuda">
                    <div class="flex justify-center items-center">PROFILE</div>
                    <div class="ml-2 bg-logo-profile w-5 h-5 bg-contain bg-no-repeat"></div>
                </button>
            </div>
            <!-- Hamburger Menu -->
            <div class="sm:hidden">
                <button id="menuButton" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Background -->
    <div class="bg-background-beranda bg-no-repeat bg-cover h-120 border border-solid border-yellow-300 flex justify-between">
        <div class="bg-people-beranda w-80 h-88  border border-solid border-red-500 bg-no-repeat bg-cover border border-solid border-blue-300"></div>
        <div class="bg-batu-beranda mx-auto w-full h-full  border border-solid border-green-500 bg-no-repeat flex"></div>
    </div>

    <!-- Footer --> 
    <footer class="bg-custom-birutua text-white mt-auto">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-4">
            <p class="text-center">-POLITEKNIK NEGERI SEMARANG-</p>
        </div>
    </footer>

    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('profileLogout').classList.toggle('hidden');
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
