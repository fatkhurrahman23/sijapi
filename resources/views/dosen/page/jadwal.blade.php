@extends('dosen.page.header')
@section('content')
    @vite('resources\css\jadwalBukanAdmin.css')
    @vite('resources\js\jadwalBukanAdmin.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="px-9 bg-custom-silver border border-solid border-yellow-400 w-screen">
        <div class="mt-5 flex h-72">
            <div class="bg-custom-putih pt-3 pl-4 flex-1 hidden md:block rounded-l-lg">
                <div class="bg-orang-beranda bg-cover bg-no-repeat h-full w-full"></div>
            </div>
            <div class="w-3/4 bg-custom-putih p-2 flex flex-col rounded-r-lg pl-12 align-middle justify-center">
                <h1 class="mb-5 font-poppins font-semibold text-custom-birutua sm:text-2xl md:text-3xl lg:text-4xl">Hai, Dono Sutrisno</h1>
                <p class="mt-2 font-poppins font-light text-black sm:text-lg lg:text-xl">Dosen Jurusan Elektro</p>
                <p class="mt-4 font-poppins font-light text-black sm:text-lg lg:text-xl">Politeknik Negeri Semarang </p>
            </div>
        </div>

        <div class="overflow-x-auto pb-12 px-8  my-7 py-7 bg-custom-abu rounded-2xl">
                <table id="myTable" class="dataTables_wrapper mt-11 w-full table table-striped">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Prodi</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-2 py-2">MK921</td>
                            <td class="border px-2 py-2">Machine Learning</td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>

        <div class="bg-custom-putih rounded-lg my-9 p-4 " >
            <p class=" px-4 mt-4 font-poppins font-semibold h-12">Jadwal kaldik</p>
            <div class="font-poppins flex justify-center align-middle items-center w-full font-bold h-140">
                <div class="flex w-1/2 h-full bg-background-kaldik bg-contain bg-no-repeat"></div>

                
            </div>

            <div class ="flex justify-end border-solid-birumuda  mr-96">
                <button class="ustify-self-end bg-custom-birumuda border border-solid border-custom-putih text-white px-3 py-1 rounded-lg hover:bg-blue-900 ">DOWNLOAD</button>
            </div>
            
        </div>

    </div>
        <!-- DataTables -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
@endsection
