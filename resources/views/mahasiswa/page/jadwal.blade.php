@extends('mahasiswa.page.header')
@section('content')
    @vite('resources\css\jadwalBukanAdmin.css')
    @vite('resources\js\jadwalBukanAdmin.js')

    <div id="jadwal" class="">
        <div class="grid grid-rows-2 grid-flow-col gap-5 w-screen px-9 bg-gray-200">
            <div class=" mt-5 flex h-72">
                <div class="bg-custom-putih pt-3 pl-4 flex-1 hidden md:block rounded-l-lg">
                    <div class="bg-orang-beranda bg-cover bg-no-repeat h-full w-full"></div>
                </div>
                <div class="w-3/4 bg-custom-putih p-2 flex flex-col rounded-r-lg pl-12 align-middle justify-center">
                    <h1 class="mb-5 font-poppins font-semibold text-custom-birutua sm:text-2xl md:text-3xl lg:text-4xl">Hai, Hanni Pham</h1>
                    <p class="mt-2 font-poppins font-light text-black sm:text-lg lg:text-xl">Semester 4</p>
                    <p class="mt-2 font-poppins font-light text-black sm:text-lg lg:text-xl">Mahasiswa D4-Teknologi Rekayasa Komputer</p>
                    <p class="mt-4 font-poppins font-light text-black sm:text-lg lg:text-xl">Politeknik Negeri Semarang </p>
                </div>
            </div>

            <div class="mt-5 flex h-fit flex-col bg-custom-putih rounded-lg">
                <p class="text-yellow-500 px-4 mt-4 font-poppins font-semibold underline underline-offset-4 w-full h-12">Jadwal hari ini</p>
                <p class="flex font-poppins font-bold justify-center w-full h-12">Jumat, 03 Juni 2024</p>
                <div class="overflow-x-auto pb-2 flex justify-center">
                        <table class="table-auto mt-5 w-11/12 border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Waktu</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Mata kuliah</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Dosen</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Ruangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">01</td>
                                        <td class="border px-4 py-2">07:00 - 09:00</td>
                                        <td class="border px-4 py-2">Machine Learning</td>
                                        <td class="border px-4 py-2">Kurnianingsih</td>
                                        <td class="border px-4 py-2">MST III/04</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>  
    </div>
@endsection