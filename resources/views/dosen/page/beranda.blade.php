@extends('dosen.page.header')
@section('content')
    @vite('resources\css\beranda.css')
    @vite('resources\js\beranda.js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div id="beranda" class="flex bg-white flex-col w-screen">
        <div class="bg-custom-silver h-99 w-screen " >
            <div class="block sm:flex md:flex lg:flex">
                <div class="h-full  w-screen sm:w-1/2 px-auto items-center">
                    <div class="mt-12 mx-auto bg-bukuberanda bg-contain bg-center bg-no-repeat h-80 sm:h-98 w-full"></div>
                </div>
                <div class=" flex justify-center flex-col w-screen sm:w-1/2">
                    <p class="hometype mb-36 sm:mb-64 md:mb-56 lg:mb-52  text-custom-kuningtua px-4 sm:px-0 text-xl sm:text-2xl lg:text-4xl"></p>
                    <p style="line-height:2.3rem;" class="leading-8 mt-28 font-poppins font-medium text-sm sm:text-sm md:text-sm lg:text-xl text-justify w-full sm:w-3/4 px-4 sm:px-0 text-custom-dark">Ini adalah sebuah aplikasi website yang dikembangkan oleh mahasiswa dari POLINES. Aplikasi ini digunakan untuk melakukan penjadwalan dan presensi bagi mahasiswa POLINES, sehingga mempermudah pengelolaan jadwal dan pencatatan kehadiran secara digital.
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-screen"  viewBox="0 0 1440 320">
            <path fill="#DBDFEB" d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,192C672,181,768,107,864,74.7C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
        <div class="bg-white h-full flex pb-9 flex-col justify-center">
            <div class="flex justify-center flex-col items-center">
                <p class="font-poppins font-bold text-xl sm:text-2xl md:text-2xl lg:text-3xl text-custom-dark">KEGIATAN BERMANFAAT</p>
                <p class="my-3 w-96 sm:w-96 md:w-96 lg:w-97 text-center font-poppins text-md sm:text-md md:text-md lg:text-lg">Berikut beberapa kegiatan bermanfaat yang pernah dilakukan oleh mahasiswa di Politeknik Negeri Semarang</p>
            </div>
            <div class="flex my-9 flex-col rounded-lg items-center justify-center sm:flex sm:flex-col md:flex md:flex-row lg:flex lg:flex-row xl:flex xl:flex-row">
                <div class="max-w-sm h-97  my-6 mx-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="bg-center rounded-t-lg  bg-bermanfaat1 bg-cover bg-no-repeat h-60 w-full"></div>
                    <div class="p-5">
                        <a href="https://www.lpmdimensi.com/2022/09/pesima-2022-adanya-mabit-tuk-bentuk-akhlak-karimah-maba/">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Kegiatan PESIMA bagi mahasiswa baru 2022</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kegiatan keagamaan ini dilakukan oleh mahasiswa islam dari Politeknik Negeri Semarang.</p>
                        <a href="https://www.lpmdimensi.com/2022/09/pesima-2022-adanya-mabit-tuk-bentuk-akhlak-karimah-maba/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm h-97  my-6 mx-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="bg-center rounded-t-lg bg-bermanfaat2 bg-cover bg-no-repeat h-60 w-full"></div>
                    <div class="p-5">
                        <a href="https://jateng.tribunnews.com/2017/08/22/ribuan-mahasiswa-baru-polines-digembleng-kedisiplinan-dan-bela-negara">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Ospek LDK yang dilakukan mahasiswa POLINES</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kegiatan ini untuk melatih kedisiplinan bagi mahasiswa POLINES, yang dibimbing oleh para TNI.</p>
                        <a href="https://jateng.tribunnews.com/2017/08/22/ribuan-mahasiswa-baru-polines-digembleng-kedisiplinan-dan-bela-negara" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm h-97 my-6 mx-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="bg-center rounded-t-lg bg-bermanfaat3 bg-cover bg-no-repeat h-60 w-full"></div>
                    <div class="p-5">
                        <a href="https://www.lpmdimensi.com/2018/08/potret-kemeriahan-galang-dana-untuk-lombok/">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Donasi korban bencana alam tsunami di Lombok</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kegiatan donasi ini digunakan untuk membantu saudara kita yang menjadi korban bencana alam di Lombok.</p>
                        <a href="https://www.lpmdimensi.com/2018/08/potret-kemeriahan-galang-dana-untuk-lombok/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
        <div class="hidden sm:flex md:flex lg:flex xl:flex  flex-col bg-custom-birutua justify-center items-center py-3">
            <div class="flex justify-around lg:justify-center w-screen my-7">
                <div class="lg:px-20  flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="55px" height="55px" class="ionicon" viewBox="0 0 512 512"><path fill="#ffffff" d="M432 176H320V64a48 48 0 00-48-48H80a48 48 0 00-48 48v416a16 16 0 0016 16h104a8 8 0 008-8v-71.55c0-8.61 6.62-16 15.23-16.43A16 16 0 01192 416v72a8 8 0 008 8h264a16 16 0 0016-16V224a48 48 0 00-48-48zM98.08 431.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm80 240a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm80 320a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM444 464H320V208h112a16 16 0 0116 16v236a4 4 0 01-4 4z"/><path fill="#ffffff" d="M400 400a16 16 0 1016 16 16 16 0 00-16-16zM400 320a16 16 0 1016 16 16 16 0 00-16-16zM400 240a16 16 0 1016 16 16 16 0 00-16-16zM336 400a16 16 0 1016 16 16 16 0 00-16-16zM336 320a16 16 0 1016 16 16 16 0 00-16-16zM336 240a16 16 0 1016 16 16 16 0 00-16-16z"/></svg>                    
                    <div class="px-5">
                        <p class="font-poppins text-base sm:text-xl md:text-xl lg:text-xl font-medium text-custom-kuningtua ">Gedung</p>
                        <p class="font-poppins font-medium text-base sm:text-lg md:text-lg lg:text-lg text-white">11 Total</p>
                    </div>
                </div>        
                <div class="lg:px-20 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"  width="55px" height="55px" class="ionicon" viewBox="0 0 512 512"><path fill="#ffffff" d="M336 80H176a16 16 0 00-16 16v16h192V96a16 16 0 00-16-16z" /><path fill="#ffffff" d="M496 176a64.07 64.07 0 00-64-64h-48V96a48.05 48.05 0 00-48-48H176a48.05 48.05 0 00-48 48v16H80a64.07 64.07 0 00-64 64v48h480zm-144-64H160V96a16 16 0 0116-16h160a16 16 0 0116 16zM336 264a24 24 0 01-24 24H200a24 24 0 01-24-24v-4a4 4 0 00-4-4H16v144a64 64 0 0064 64h352a64 64 0 0064-64V256H340a4 4 0 00-4 4z"/></svg>
                    <div class="px-5">
                        <p class="font-poppins text-base sm:text-xl md:text-xl lg:text-xl font-medium text-custom-kuningtua ">Ruang Kuliah</p>
                        <p class="font-poppins font-medium text-base sm:text-lg md:text-lg lg:text-lg text-white">91 Total</p>
                    </div>
                </div>     
                <div class="lg:px-20  flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="55px" height="55px" class="ionicon" viewBox="0 0 512 512"><path fill="#ffffff" d="M432 176H320V64a48 48 0 00-48-48H80a48 48 0 00-48 48v416a16 16 0 0016 16h104a8 8 0 008-8v-71.55c0-8.61 6.62-16 15.23-16.43A16 16 0 01192 416v72a8 8 0 008 8h264a16 16 0 0016-16V224a48 48 0 00-48-48zM98.08 431.87a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm80 240a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm80 320a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zm0-80a16 16 0 1113.79-13.79 16 16 0 01-13.79 13.79zM444 464H320V208h112a16 16 0 0116 16v236a4 4 0 01-4 4z"/><path fill="#ffffff" d="M400 400a16 16 0 1016 16 16 16 0 00-16-16zM400 320a16 16 0 1016 16 16 16 0 00-16-16zM400 240a16 16 0 1016 16 16 16 0 00-16-16zM336 400a16 16 0 1016 16 16 16 0 00-16-16zM336 320a16 16 0 1016 16 16 16 0 00-16-16zM336 240a16 16 0 1016 16 16 16 0 00-16-16z"/></svg>                    
                    <div class="px-5">
                        <p class="font-poppins text-base sm:text-xl md:text-xl lg:text-xl font-medium text-custom-kuningtua">Lab & Workshop</p>
                        <p class="font-poppins font-medium text-base sm:text-lg md:text-lg lg:text-lg text-white">36 Total</p>
                    </div>
                </div>        
            </div>
        </div>
        <div class="bg-custom-silver h-99 w-screen" >
            <div class="block sm:flex md:flex lg:flex">
                <div class="h-full  w-screen sm:w-1/2 px-auto items-center">
                    <div class="mt-12 mx-auto bg-gkt bg-contain bg-center bg-no-repeat h-80 sm:h-98 w-full"></div>
                </div>
                <div class=" flex justify-center flex-col w-screen sm:w-1/2">
                    <p class="text-custom-kuningtua mt-9 px-4 font-poppins font-bold sm:px-0 text-xl sm:text-2xl lg:text-4xl">PEMBANGUNAN GKT</p>
                    <p style="line-height:2.3rem;" class="leading-8 mt-9 font-poppins font-medium text-sm sm:text-sm md:text-sm lg:text-xl text-justify w-full sm:w-3/4 px-4 sm:px-0 text-custom-dark">Pembangunan gedung GKT (Gedung Kuliah terpadu) ini bertujuan untuk menambang ruangan kelas bagi para mahasiswa. Gedung ini juga merupakan gedung kebanggaan dan gedung terbesar di Politeknik Negeri Semarang.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        
   
@endsection
