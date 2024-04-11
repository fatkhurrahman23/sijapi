@extends('admin.admin')
@section('content')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div>
            <div id="dashboard" class="page ml-12">
                <div class="flex justify-center flex-col items-center">
                    <div class="bg-bg-sijapi bg-no-repeat bg-contain h-44 w-64"></div>
                    <div class="font-poppins text-lg font-extralight">
                        <p>Sistem Penjadwalan dan Presensi</p>
                    </div>
                    <div class="font-poppins text-3xl font-bold ">
                        <p>Politeknik Negeri Semarang</p>
                    </div>
                    </div>
            </div>     
        </div>
    </div>
@endsection