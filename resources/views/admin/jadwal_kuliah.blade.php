@extends('admin.admin')
@section('content')
    @vite('resources/css/jadwal.css')
    @vite('resources/js/jadwal.js')

    <div class="container">
        <div>
            <div id="jadwalkuliah" class="page ml-12">
                <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH JADWAL KULIAH</p>
                <p class="mt-10 font-poppins font-semibold text-xl">Pilih kelas</p>

                <form action="{{ url('admin\jadwal_kuliah') }}" method="POST">
                    @csrf
                    <div class="flex flex-col ">
                        <ul>
                            @foreach ( $dataKelasMahasiswa as $kelas )
                                <li>
                                    <a class="rounded-lg" href="{{ url('admin/jadwal_kuliah/'.$kelas->kode_kelas) }}">
                                        <div class="w-1/2 bg-gray-200 py-2 mt-3 rounded-lg flex justify-between px-4 shadow-md">
                                            <p>{{ $kelas->kode_kelas }}</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                        </div>
                                    </a>
                                </li>
                                
                            @endforeach
                        </ul>
                    </div>
                </form>
            </div>  
        </div>
    </div>
@endsection