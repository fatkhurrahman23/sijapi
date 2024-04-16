@extends('mahasiswa.page.header')
@section('content')
    @vite('resources\css\jadwalBukanAdmin.css')
    @vite('resources\js\jadwalBukanAdmin.js')

    <div id="jadwal" class="">
        <div class="grid grid-rows-2 grid-flow-col gap-5 w-screen px-9">
            <div class=" mt-5 flex h-72">
                <div class="bg-gray-200 pt-3 pl-12 flex-1 hidden md:block rounded-l-lg">
                    <div class="bg-orang-beranda bg-cover bg-no-repeat h-full w-full"></div>
                </div>
                <div class="w-3/4 bg-gray-200 p-2 flex- rounded-r-lg">
                    
                    
                </div>
            </div>

            <div class="border">dd</div>
        </div>  
    </div>
@endsection