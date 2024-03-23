<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    @vite('resources\css\app.css')
</head>
<body>
    <nav class="bg-custom-birutua">
        <div class="mc-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div>
                    <div class="bg-logo-sijapi w-28 h-12 bg-no-repeat bg-contain flex justify-center items-start"></div>
                </div>
                <div class="border border-solid">
                    <ul class="flex justify-start items-end ">
                        <div class="border border-solid border-yellow-200"><li class="mx-3 py-4 px-2"><a href="">Beranda</a></li></div>
                        <div class="border border-solid border-yellow-200"><li class="mx-3 py-4 px-2"><a href="">Jadwal</a></li></div>
                        <div class="border border-solid border-yellow-200"><li class="mx-3 py-4 px-2"><a href="">Presensi</a></li></div>
                    </ul>
                </div>
                <div class="flex justify-center items-center">
                    <button class="mx-auto font-poppins text-custom-putih text-sm border border-solid border-custom-putih px-7 py-1 rounded-md mr-2 bg-custom-birumuda">LOGOUT</button>
                    <button class="font-poppins text-sm text-custom-putih border-custom-putih px-3 py-1 rounded-md flex border border-solid bg-custom-birumuda">
                        <div class="flex justify-center items-center">PROFILE</div>
                        <div class="ml-2 bg-logo-profile w-5 h-5 bg-contain bg-no-repeat flex"></div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
