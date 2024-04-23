@extends('dosen.page.header')
@section('content')
    @vite('resources\css\presensi.css')
    @vite('resources\js\presensi.js')
    
    <div id="presensi" class="container flex flex-col ">
        <div class="w-screen h-screen bg-custom-silver flex flex-col">
            <div class="w-screen flex justify-center h-1/2 sm:h-2/5 lg:h-1/2 xl:h-1/2 2xl:h-1/2  ">
                <div class="items-center  bg-custom-putih h-3/4 sm:h-3/4 md:h-3/4 lg:h-3/4 xl:h-3/4 sm:w-5/12 lg:w-5/12 md:w-5/12 rounded-b-8xl flex flex-col">
                    <div class=" px-8 pt-3 flex justify-center items-center align-middle">
                        <p class="text-center font-poppins font-normal sm:text-sm md:text-sm lg:text-lg text-sm xl:text-lg">Klik “Open Camera” atau “Unggah Foto” untuk mengakses QR Kode</p>
                    </div>
                    <button class=" flex justify-center items-center mt-3 sm:h-24 md:h-32 lg:h-32 xl:h-32">
                        <div class="border bg-custom-birutua w-full  py-2 sm:py-1 md:py-1 lg:py-2 xl:py-2 rounded-lg flex justify-between items-center px-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="25px" class="ionicon" viewBox="0 0 512 512"><path d="M350.54 148.68l-26.62-42.06C318.31 100.08 310.62 96 302 96h-92c-8.62 0-16.31 4.08-21.92 10.62l-26.62 42.06C155.85 155.23 148.62 160 140 160H80a32 32 0 00-32 32v192a32 32 0 0032 32h352a32 32 0 0032-32V192a32 32 0 00-32-32h-59c-8.65 0-16.85-4.77-22.46-11.32z" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="272" r="80" fill="none" stroke="white" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M124 158v-22h-24v22"/></svg>
                            <p class="text-custom-putih font-poppins font-medium text-sm">Open Camera</p>
                        </div>
                    </button>
                    <button class=" flex justify-center items-start py-1 sm:h-24 md:h-32 lg-h-32">
                        <div class="border bg-custom-birutua w-full py-2 sm:py-1 md:py-1 lg:py-2 xl:py-2 rounded-lg flex justify-between items-center px-7">
                            <svg  width="43px" height="25px" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M432 112V96a48.14 48.14 0 00-48-48H64a48.14 48.14 0 00-48 48v256a48.14 48.14 0 0048 48h16" fill="none" stroke="white" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" fill="none" stroke="white" stroke-linejoin="round" stroke-width="32"/><ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" fill="none" stroke="white" stroke-miterlimit="10" stroke-width="32"/><path d="M342.15 372.17L255 285.78a30.93 30.93 0 00-42.18-1.21L96 387.64M265.23 464l118.59-117.73a31 31 0 0141.46-1.87L496 402.91" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                            <p class="text-custom-putih font-poppins font-medium text-sm">Unggah Foto</p>
                        </div>
                    </button>
                    <button class=" flex justify-center items-start  sm:h-24 md:h-32 lg-h-32">
                        <div class="border bg-custom-birutua w-full py-2 sm:py-1 md:py-1 lg:py-2 xl:py-2 rounded-lg flex justify-between items-center px-7">
                            <svg width="40px" height="25px" xmlns="http://www.w3.org/2000/svg" class="ionicon text-white" viewBox="0 0 512 512"><rect x="336" y="336" width="80" height="80" rx="8" ry="8"/><rect x="272" y="272" width="64" height="64" rx="8" ry="8"/><rect x="416" y="416" width="64" height="64" rx="8" ry="8"/><rect x="432" y="272" width="48" height="48" rx="8" ry="8"/><rect x="272" y="432" width="48" height="48" rx="8" ry="8"/><rect x="336" y="96" width="80" height="80" rx="8" ry="8"/><rect x="288" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="96" width="80" height="80" rx="8" ry="8"/><rect x="48" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="336" width="80" height="80" rx="8" ry="8"/><rect x="48" y="288" width="176" height="176" rx="16" ry="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                            <p class="text-custom-putih font-poppins font-medium text-sm">Buat Barcode</p>
                        </div>
                    </button>
                    
                </div>
            </div>
            <div class=" grid grid-cols-2 gap-4 h-1/2">
                <div class=" h-full hidden xl:block">
                    <div class=" h-full bg-barcode bg-contain bg-no-repeat"></div>
                </div>
                <div class="h-full hidden xl:block ">
                    <div class=" h-full bg-popup-presensi bg-contain bg-no-repeat "></div>
                </div>
            </div>
        </div>
        <div class="bg-custom-birutua font-poppins font-regular text-custom-putih h-12 w-screen flex justify-center align-middle items-center">
            <footer>
                -Politeknik Negeri Semarang-
            </footer>
        </div>
    </div>
@endsection
