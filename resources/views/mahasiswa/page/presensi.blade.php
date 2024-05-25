@extends('mahasiswa.page.header')
@section('content')
    @vite('resources\css\presensi.css')
    @vite('resources\js\presensi.js')
    
    <div id="presensi" class="container flex flex-col ">
        <div class="w-screen h-screen bg-custom-silver flex flex-col">
            <div class="w-screen flex justify-center mt-12 h-1/2 sm:h-2/5 lg:h-1/2 xl:h-1/2 2xl:h-1/2  ">
                <div class="items-center  bg-custom-putih shadow-xl h-64 sm:h-3/4 md:h-3/4 lg:h-3/4 xl:h-3/4 sm:w-screen lg:w-5/12 md:w-screen rounded-b-8xl flex flex-col">
                    <div class=" px-2 pt-2 flex justify-center items-center align-middle">
                        <p class="text-center px-10 py-4 font-poppins font-normal  sm:text-lg md:text-2xl lg:text-xl text-base xl:text-xl">Klik “Open Camera” atau “Unggah Foto” untuk mengakses QR Kode</p>
                    </div>
                    <button class=" flex justify-center items-start mt-6" id="uploadLink" >
                        <div class="border bg-custom-birutua w-60 py-2 sm:py-3 md:py-3 lg:py-3 xl:py-3 rounded-lg flex justify-between items-center px-7">
                            <svg  width="40px" height="25px" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M432 112V96a48.14 48.14 0 00-48-48H64a48.14 48.14 0 00-48 48v256a48.14 48.14 0 0048 48h16" fill="none" stroke="white" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" fill="none" stroke="white" stroke-linejoin="round" stroke-width="32"/><ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" fill="none" stroke="white" stroke-miterlimit="10" stroke-width="32"/><path d="M342.15 372.17L255 285.78a30.93 30.93 0 00-42.18-1.21L96 387.64M265.23 464l118.59-117.73a31 31 0 0141.46-1.87L496 402.91" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                            <p class="text-custom-putih font-poppins font-medium sm:text-lg md:text-lg lg:text-lg xl:text-lg text-base">Unggah Foto</p>
                        </div>
                    </button>
                    <input type="file" id="fileInput" style="display: none;">  
                    <a href="{{ url('mahasiswa/page/scanner') }}" class=" flex justify-center items-start mt-3">
                        <div class="border bg-custom-birutua w-60 py-2 sm:py-3 md:py-3 lg:py-3 xl:py-3 rounded-lg flex justify-between items-center px-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="25px" class="ionicon" viewBox="0 0 512 512"><path stroke="#fff" d="M336 448h56a56 56 0 0056-56v-56M448 176v-56a56 56 0 00-56-56h-56M176 448h-56a56 56 0 01-56-56v-56M64 176v-56a56 56 0 0156-56h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                            <p class="text-custom-putih font-poppins font-medium sm:text-lg md:text-lg lg:text-lg xl:text-lg text-base">Scan Barcode</p>
                        </div>
                    </a>  
                </div>
            </div>
        </div>
        <div class="bg-custom-birutua font-poppins font-regular text-custom-putih h-12 w-screen flex justify-center align-middle items-center">
            <footer>
                -Politeknik Negeri Semarang-
            </footer>
        </div>
    </div>
    <script>
        document.getElementById('uploadLink').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('fileInput').click();
        });
    </script>
@endsection
