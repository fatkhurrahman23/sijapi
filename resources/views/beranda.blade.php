<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    @vite('resources\css\app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    <header class="bg-gray-800 py-4">
    <div class="flex justify-between">
   <!-- CLASS LOGO -->
        <div class="container mx-auto flex justify-between items-center border border-solid">
            <div class = "flex">
            <div class="bg-logo-polines w-12 ml-4 h-12 bg-no-repeat"></div>
            <div class="bg-sijapi w-36 h-16 bg-no-repeat border border-solid"></div></div>
        </div>

        <!-- CLASS Navigasi -->
        <nav class="text-white">
            <ul class="flex space-x-4 py-4 justify-center border border-solid">
                <li><a href="#" class="hover:text-gray-400">Beranda</a></li>
                <li><a href="#" class="hover:text-gray-400">Jadwal</a></li>
                <li><a href="#" class="hover:text-gray-400">Presensi</a></li>
            </ul>
        </nav>
        <!-- CLASS PROFILE -->
        <div class="container flex border border-solid justify-end">

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold  w-32 h-10 rounded mt-3">
                LOGOUT
            </button>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-32 h-10 rounded ml-4 mr-4 mt-3">
                PROFILE
                <i class="fas fa-user mr-2"></i>  
            </button>


        </div>
    </div>
    </header>
    
    
    <div class="bg-gkt w-200 h-100 grid grid-cols-2 second">
                <h1 class="text-3xl font-semibold text-center">Welcome to Your Website</h1>
            </div>
        </div>

    <footer class="bg-gray-800 py-4 mt-8">
        <div class="container mx-auto text-white text-center">
            &copy; -Politeknik Negeri Semarang-
        </div>
    </footer>
</body>
</html>
