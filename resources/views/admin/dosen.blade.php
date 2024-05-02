@extends('admin.admin')
@section('content')
    @vite('resources\css\dosen.css')
    @vite('resources/js/dosen.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                            <h1>Data Dosen</h1>
                                <ul class="breadcrumb">
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li>
                                    <a class="active" href="#">Dosen</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                            <ul class="box-info">
                                <li>
                                    <i class="bx bxs-calendar-check"></i>
                                    <span class="text">
                                    <h3 id="totalDosen"></h3>
                                    <p>Total Dosen</p>
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bxs-group"></i>
                                    <span class="text">
                                    <h3 id="totalDosenTI"></h3>
                                    <p>Dosen TI</p>
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bxs-group"></i>
                                    <span class="text">
                                    <h3 id="totalDosenIK"></h3>
                                    <p>Dosen IK</p>
                                    </span>
                                </li>
                            </ul>
                <form class=" mb-2 px-8 my-6 rounded-2xl py-7 bg-custom-abu " action="{{ url('admin/dosen') }}" method="POST">
                    <h3 class="font-poppins font-medium text-2xl text-custom-dark">Tambah Dosen</h3>
                    @csrf
                        <div class="mt-7 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nip" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIP</label>
                                <div class="mt-2">
                                    <input type="text" name="nip" id="nip" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="alamat" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Alamat</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat" id="alamat" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_telp" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">No Telp</label>
                                <div class="mt-2">
                                    <input type="text" name="no_telp" id="no_telp" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                                <div class="mt-2">
                                    <select id="kode_prodi" name="kode_prodi" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataProdi as $prodi)
                                        <option value="{{ $prodi->kode_prodi }}">{{ $prodi->nama }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 flex justify-between items-end mb-24">
                                <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                    <p class="ml-2">Tambah</p>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="overflow-x-auto pb-12 px-8  my-7 py-7 bg-custom-abu rounded-2xl ">
                        <table id="myTable"  class="dataTables_wrapper mt-11 w-full table table-striped">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Dosen</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Dosen</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIP</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Prodi</th>
                                    <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $dataDosen as $no => $value )
                                    <tr>
                                        <td class="border pl-2 py-2">{{ $no+1 }}</td>
                                        <td class="border pl-2 py-2">{{ $value->kode_dosen }}</td>
                                        <td class="border pl-2 py-2">{{ $value->nama }}</td>
                                        <td class="border pl-2 py-2">{{ $value->nip }}</td>
                                        <td class="border pl-2 py-2">{{ $value->kode_prodi }}</td>
                                        <td class="border pl-2 py-2">
                                            <button type="button" data-modal-target="edit_dosen_modal{{ $value->kode_dosen }}" data-modal-toggle="edit_dosen_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                            <a href="{{ url('admin/dosen/delete/'.$value->kode_dosen) }}">
                                                <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

    @foreach( $dataDosen as $no => $value )
        <div id="edit_dosen_modal{{ $value->kode_dosen }}" tabindex="-1" aria-hidden="true" class="hidden h-100 mt-5 py-12 modal flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center">
            <div class="backdrop absolute inset-0 bg-black opacity-30 h-130"></div>
            <div class="relative p-4 w-full max-w-md max-h-full">

                <div class="relative bg-white rounded-lg  shadow ">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900 ">EDIT DATA DOSEN</h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 " data-modal-hide="edit_dosen_modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ url('admin/dosen/update/'.$value->kode_dosen) }}" method="POST">
                            @csrf
                            <div class="sm:col-span-2">
                                <label for="kode_dosen" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_dosen" id="kode_dosen" autocomplete="kode_dosen" class="bg-gray-300 pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->kode_dosen }}" required autofocus readonly>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nip" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIP</label>
                                <div class="mt-2">
                                    <input type="text" name="nip" id="nip" autocomplete="nip" class="block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->nip }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Dosen</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="nama" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->nama }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="alamat" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">alamat</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat" id="alamat" autocomplete="alamat" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->alamat }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="no_telp" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">No Telp</label>
                                <div class="mt-2">
                                    <input type="text" name="no_telp" id="no_telp" autocomplete="no_telp" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->no_telp }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Prodi</label>
                                <div class="mt-2">
                                    <select id="kode_prodi" name="kode_prodi" class="pl-2 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @foreach($dataProdi as $prodi)
                                            <option value="{{ $prodi->kode_prodi }}" {{ $prodi->kode_prodi == $value->kode_prodi ? 'selected' : '' }}>{{ $prodi->nama }}</option>
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

    @elseif (Session::has('error'))
        <!-- Initialize Toastr for info message -->
        <script>
            toastr.options = {
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "closeButton": true,
            };
            toastr.error("{{ Session::get('error') }}");
        </script>

    @endif

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

