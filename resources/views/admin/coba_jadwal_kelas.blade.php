@extends('admin.admin')
@section('content')
    @vite('resources/css/coba_jadwal_kelas.css')
    @vite('resources/js/coba_jadwal_kelas.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <div class="container">
        <div class="page ml-12" id="coba_jadwal_kelas">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">JADWAL KULIAH</p>
            <div class="overflow-x-auto pb-2">
                <table class="table-auto mt-24 w-11/12 border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Jam</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Mata Kuliah</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwalKuliahSenin as $jadwalSenin)
                            <tr>
                                <td>{{$jadwalSenin->kode_jam}}</td>
                                <td>{{$jadwalSenin->nama_mata_kuliah}}</td>
                                <td>{{$jadwalSenin->ruangan}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection