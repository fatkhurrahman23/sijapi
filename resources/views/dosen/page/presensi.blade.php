@extends('dosen.page.header')
@section('content')
    @vite('resources\css\presensi.css')
    @vite('resources\js\presensi.js')
    
    <div id="presensi" class="container flex flex-col ">
        <div class="w-screen h-screen bg-custom-silver flex flex-col">
            <div class="w-screen flex justify-center mt-12 h-1/2 sm:h-2/5 lg:h-1/2 xl:h-1/2 2xl:h-1/2  ">
                <div class="items-center  bg-custom-putih shadow-xl h-64 sm:h-3/4 md:h-3/4 lg:h-3/4 xl:h-3/4 sm:w-screen lg:w-5/12 md:w-screen rounded-b-8xl flex flex-col">
                    <div class=" px-2 pt-3 flex justify-center items-center align-middle">
                        <p class="text-center px-10 py-4 font-poppins font-normal  sm:text-lg md:text-2xl lg:text-xl text-base xl:text-xl">Klik “Open Camera” atau “Unggah Foto” untuk mengakses QR Kode</p>
                    </div>
                    <button class=" flex justify-center items-start mt-6">
                        <div class="border bg-custom-birutua w-60 py-4 sm:py-5 md:py-5 lg:py-5 xl:py-5 rounded-lg flex justify-between items-center px-7">
                            <svg width="50px" height="35px" xmlns="http://www.w3.org/2000/svg" class="ionicon text-white" fill="#fff" stroke="#fff" viewBox="0 0 512 512"><rect fill="#fff" stroke="#fff" x="336" y="336" width="80" height="80" rx="8" ry="8"/><rect x="272" y="272" width="64" height="64" rx="8" ry="8"/><rect x="416" y="416" width="64" height="64" rx="8" ry="8"/><rect x="432" y="272" width="48" height="48" rx="8" ry="8"/><rect x="272" y="432" width="48" height="48" rx="8" ry="8"/><rect x="336" y="96" width="80" height="80" rx="8" ry="8"/><rect x="288" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="96" width="80" height="80" rx="8" ry="8"/><rect  x="48" y="48" width="176" height="176" rx="16" ry="16" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" fill="#fff"/><rect fill="#fff" x="96" y="336" width="80" height="80" rx="8" ry="8"/><rect x="48" y="288" width="176" height="176" rx="16" ry="16" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                            <p class="text-custom-putih font-poppins font-medium sm:text-lg md:text-lg lg:text-lg xl:text-lg text-base">Buat Barcode</p>
                        </div>
                    </button>  
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
