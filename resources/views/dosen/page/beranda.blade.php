@extends('dosen.page.header')
@section('content')
    @vite('resources\css\beranda.css')
    @vite('resources\js\beranda.js')
    
    <div id="beranda" class="container flex flex-col ">
        <div class="w-screen ">
            <div id="background2" class="back h-120 bg-background-gkt bg-cover bg-no-repeat flex justify-center items-center  px-12 ">
            <div class="absolute inset-0 mt-12 bg-black opacity-60 h-120"></div>
                <div class="z-30 flex flex-col md:flex-row w-full filter-none">
                    <div class="right z-40 w-11/12 md:w-2/3  md:order-2 h-99">
                        <div id="carouselExampleCaptions" class="relative  h-full" data-twe-carousel-init data-twe-ride="carousel">
                        <!--Carousel indicators-->
                        <div
                            class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                            data-twe-carousel-indicators>
                            <button
                            type="button"
                            data-twe-target="#carouselExampleCaptions"
                            data-twe-slide-to="0"
                            data-twe-carousel-active
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-current="true"
                            aria-label="Slide 1"></button>
                            <button
                            type="button"
                            data-twe-target="#carouselExampleCaptions"
                            data-twe-slide-to="1"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 2"></button>
                            <button
                            type="button"
                            data-twe-target="#carouselExampleCaptions"
                            data-twe-slide-to="2"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 3"></button>
                        </div>

                        <!--Carousel items-->
                        <div
                            class="relative  shadow-lg rounded-lg w-full overflow-hidden after:clear-both after:block after:content-['']">
                            <!--First item-->
                            <div
                                class="animator relative float-left -mr-[100%] hidden w-full h-99 "
                                data-twe-carousel-item
                                style="backface-visibility: hidden">
                                <div
                                    class="block w-99 h-full bg-corousel-satu bg-cover"
                                    style="background-position: center;"
                                    alt="Deskripsi Gambar 2">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black  to-transparent"></div>
                                <div
                                    class="absolute  bottom-5 hidden py-9 w-full text-center text-white md:block">
                                    <h5 class="text-xl font-semibold">Teknik Pembelajaran</h5 >
                                    <p>
                                        Pembahasan teknik pembelajaran yang efektif bagi mahasiswa...
                                    </p>
                                </div>
                            </div>
                            <!--Second item-->
                            <div
                                class="animator relative float-left -mr-[100%] hidden w-full h-99 "
                                data-twe-carousel-item
                                style="backface-visibility: hidden">
                                <div
                                    class="block w-99 h-full bg-corousel-dua bg-cover"
                                    style="background-position: center;"
                                    alt="Deskripsi Gambar 2">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black  to-transparent"></div>
                                <div
                                    class="absolute  bottom-5 hidden py-9 w-full text-center text-white md:block">
                                    <h5 class="text-xl font-semibold">Kesehatan Mahasiswa</h5 >
                                    <p>
                                        Kesehatan bagi seseorang amatlah penting...
                                    </p>
                                </div>
                            </div>
                            <!--Third item-->
                            <div
                                class="animator relative float-left -mr-[100%] hidden w-full h-99 "
                                data-twe-carousel-item
                                style="backface-visibility: hidden">
                                <div
                                    class="block w-99 h-full bg-corousel-tiga bg-cover"
                                    style="background-position: center;"
                                    alt="Deskripsi Gambar 2">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black  to-transparent"></div>
                                <div
                                    class="absolute  bottom-5 hidden py-9 w-full text-center text-white md:block">
                                    <h5 class="text-xl font-semibold">Berjuang Demi Indonesia</h5 >
                                    <p>
                                        Sebagai mahasiswa kita berjuang untuk negara...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Carousel controls - prev item-->
                        <button
                            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                            type="button"
                            data-twe-target="#carouselExampleCaptions"
                            data-twe-slide="prev">
                            <span class="inline-block h-8 w-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6">
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                            </span>
                            <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Previous</span
                            >
                        </button>
                        <!--Carousel controls - next item-->
                        <button
                            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                            type="button"
                            data-twe-target="#carouselExampleCaptions"
                            data-twe-slide="next">
                            <span class="inline-block h-8 w-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6">
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            </span>
                            <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Next</span
                            >
                        </button>
                        </div>
                    </div>
                    <div class="z-40 mt-28  bg-orang-beranda bg-contain bg-no-repeat w-3/4 md:w-1/3 hidden md:block md:order-1 h-99 justify-end align-top items-start "></div>
                </div>
                <div class="absolute inset-0 bg-transparent z-10"></div>
            </div>
        </div>
        <div class="bg-custom-birutua font-poppins font-regular text-custom-putih h-12 w-screen flex justify-center align-middle items-center">
            <footer>
                -Politeknik Negeri Semarang-
            </footer>
        </div>
    </div>
@endsection
