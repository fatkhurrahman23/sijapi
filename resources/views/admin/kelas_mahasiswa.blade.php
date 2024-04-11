@extends('admin.admin')
@section('content')    
    @vite('resources/css/kelas_mahasiswa.css')
    @vite('resources/js/kelas_mahasiswa.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container">
        <div id="kelasmahasiswa" class="page ml-12">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">KELAS MAHASISWA</p>
            <form action="{{ url('admin\kelas_mahasiswa') }}" method="POST">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    @csrf
                    <div class="sm:col-span-2">
                        <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas Mahasiswa</label>
                        <div class="mt-2">
                            <input type="text" name="kode_kelas" id="kode_kelas" autocomplete="kode_kelas" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                        <div class="mt-2">
                            <select id="kode_prodi" name="kode_prodi" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @foreach($dataProdi as $prodi)
                                <option value="{{ $prodi->kode_prodi }}">{{ $prodi->nama }}</option>
                            @endforeach
                            </select>          
                        </div>
                    </div>
                    <div class="sm:col-span-2 flex justify-between items-end">
                        <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                            <p class="ml-2">Simpan</p>
                        </button>
                    </div>
                </div>
            </form>
            <div class="overflow-x-auto pb-2">
                <table class="table-auto mt-24 w-11/12 border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode kelas</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Prodi</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $dataKelasMahasiswa as $no => $value )
                        <tr>
                            <td class="border px-4 py-2">{{ $no+1 }}</td>
                            <td class="border px-4 py-2">{{ $value->kode_kelas }}</td>
                            <td class="border px-4 py-2">{{ $value->kode_prodi }}</td>
                            <td class="border px-4 py-2">
                                <button type="button" data-modal-target="edit_kelasmahasiswa_modal{{ $value->kode_kelas }}" data-modal-toggle="edit_kelasmahasiswa_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                <a href="{{ url('admin/kelas_mahasiswa/delete/'.$value->kode_kelas)  }}">                                    
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- ==========================================modal========================================== -->
@foreach( $dataKelasMahasiswa as $no => $value )
    <div id="edit_kelasmahasiswa_modal{{ $value->kode_kelas }}" tabindex="-1" aria-hidden="true" class="hidden h-screen modal flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center">
            <div class="backdrop absolute inset-0 bg-black opacity-30"></div>
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">EDIT DATA JAM</h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit_kelasmahasiswa_modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ url('admin/kelas_mahasiswa/update/'.$value->kode_kelas) }}" method="POST">
                            @csrf
                            <div class="sm:col-span-2">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_kelas" id="kode_kelas" autocomplete="kode_kelas" class="bg-gray-300 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->kode_kelas }}" required autofocus readonly>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                                <div class="mt-2">
                                    <select id="kode_prodi" name="kode_prodi" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataProdi as $prodi)
                                        <option value="{{ $prodi->kode_prodi }}">{{ $prodi->nama }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2 flex justify-center items-center">
                                <button type="submit" class="flex justify-center align-middle items-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <img class="flex justify-center align-bottom items-center" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                    <p class="ml-2">Simpan</p>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @if (Session::has('add'))
        <!-- Initialize Toastr -->
        <script>
            toastr.options = {
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "closeButton": true,
            };
            toastr.success("{{ Session::get('add') }}");
        </script>
    @elseif (Session::has('update'))
        <!-- Initialize Toastr for error message -->
        <script>
            toastr.options = {
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "closeButton": true,
            };
            toastr.info("{{ Session::get('update') }}");
        </script>
    @elseif (Session::has('delete'))
        <!-- Initialize Toastr for info message -->
        <script>
            toastr.options = {
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "closeButton": true,
            };
            toastr.success("{{ Session::get('delete') }}");
        </script>
    @endif
@endsection