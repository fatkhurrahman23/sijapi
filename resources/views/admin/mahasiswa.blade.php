@extends('admin.admin')
@section('content')
    @vite('resources/css/mahasiswa.css')
    @vite('resources/js/mahasiswa.js')
    <!-- Toaster -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                                <h1>Data Mahasiswa</h1>
                                <ul class="breadcrumb">
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li>
                                    <a class="active" href="#">Mahasiswa</a>
                                </li>
                            </ul>
                            </div>
                              

                            </div>

                        </div>
                            <ul class="box-info">
                                <li>
                                    <i class="bx bxs-calendar-check"></i>
                                    <span class="text">
                                    <h3 id="totalMahasiswa"></h3>
                                    <p>Total Mahasiswa</p>
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bxs-group"></i>
                                    <span class="text">
                                    <h3 id="totalMahasiswaTI"></h3>
                                    <p>Mahasiswa TI</p>
                                    </span>
                                </li>
                                <li>
                                    <i class="bx bxs-group"></i>
                                    <span class="text">
                                    <h3 id="totalMahasiswaIK"></h3>
                                    <p>Mahaiswa IK</p>
                                    </span>
                                </li>
                            </ul>
            <form class=" mb-2 px-8 my-6 rounded-2xl py-7 bg-custom-abu " action="{{ url('admin\mahasiswa') }}" method="POST">
                <h3 class="font-poppins font-medium text-2xl text-custom-dark">Tambah Mahasiswa</h3>
                @csrf
                <div class="mt-7 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Mahasiswa</label>
                        <div class="mt-2">
                            <input type="text" name="nama" id="nama" autocomplete="nama" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nim" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIM</label>
                        <div class="mt-2">
                            <input type="text" name="nim" id="nim" autocomplete="nim" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="prodi" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Prodi</label>
                        <div class="mt-2">
                            <select id="prodi" name="prodi" class="pl-1 block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                @foreach($dataProdi as $prodi)
                                    <option value="{{ $prodi->kode_prodi }}">{{ $prodi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                        <div class="mt-2">
                            <select id="kode_kelas" name="kode_kelas" class="pl-1 block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                @foreach($dataKelasMahasiswa as $kelas)
                                    <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kode_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="jenis_kelamin" class="block text-sm font-poppins font-semibold leading-6 text-gray-90">Jenis Kelamin</label>
                        <div class="mt-2">
                            <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis_kelamin" class="pl-1 block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2 flex justify-between items-end">
                        <button type="submit" id="btn_tambah_mahasiswa" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                            <p class="ml-2">Tambah</p>
                        </button>
                    </div>
                </div>
            </form>

            <form class="mb-2 px-8 my-6 rounded-2xl py-7 bg-custom-abu" action="{{ url('/admin/upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3 class="font-poppins font-medium text-2xl text-custom-dark">Upload Data Mahasiswa</h3>

                <div class="mt-7 grid">
                    <label for="file">Pilih file upload:</label> <br>
                    <input type="file" id="file" name="file" accept=".csv" required>
                    <div class="sm:col-span-2 flex items-end mt-7">
                        <button type="submit" id="btn_tambah_mahasiswa" class="flex justify-center  rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                            <p class="ml-2">Tambah</p>
                        </button>
                    </div>
                </div>
            </form>

            <div class="overflow-x-auto pb-12 px-8  my-7 py-7 bg-custom-abu rounded-2xl">
                <table id="myTable" class="dataTables_wrapper mt-11 w-full table table-striped">

                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Nama Mahasiswa</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">NIM</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kelas</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Prodi</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataMahasiswa as $no => $mahasiswa)
                            <tr>
                                <td class="border px-4 py-2">{{ $no + 1 }}</td>
                                <td class="border px-4 py-2">{{ $mahasiswa->nama }}</td>
                                <td class="border px-4 py-2">{{ $mahasiswa->nim }}</td>
                                <td class="border px-4 py-2">{{ $mahasiswa->kode_prodi . "-" . $mahasiswa->tingkat . $mahasiswa->kelas }}</td>
                                <td class="border px-4 py-2">{{ $mahasiswa->kode_prodi }}</td>
                                <td class="border px-4 py-2">
                                    <button type="button" data-modal-target="edit_mahasiswa_modal{{ $mahasiswa->nim }}" data-modal-toggle="edit_mahasiswa_modal" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                    <a href="{{ url('admin/mahasiswa/delete/'.$mahasiswa->nim) }}">
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


    <!-- ==========================================modal========================================== -->
@foreach( $dataMahasiswa as $no => $value )
    <div id="edit_mahasiswa_modal{{ $value->nim }}" tabindex="-1" aria-hidden="true" class="hidden h-100 modal flex mt-5 py-12 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center">
            <div class="backdrop absolute inset-0 bg-black opacity-30"></div>
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  ">
                        <h3 class="text-xl font-semibold text-gray-900 ">EDIT DATA MAHASISWA</h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 " data-modal-hide="edit_mahasiswa_modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ url('admin/mahasiswa/update/'.$value->nim) }}" method="POST">
                            @csrf
                            <div class="sm:col-span-2">
                                <label for="nim" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">NIM</label>
                                <div class="mt-2">
                                    <input type="text" name="nim" id="nim" autocomplete="nim" class="pl-2 bg-gray-300 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->nim }}" require autofocus readonly>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="nama" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Nama Mahasiswa</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="nama" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->nama }}">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <select id="kode_kelas" name="kode_kelas" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->kode_kelas }}">
                                        @foreach($dataKelasMahasiswa as $kelas)
                                            <option value="{{ $kelas->kode_kelas }}">{{ $kelas->kode_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="jenis_kelamin" class="block text-sm font-poppins font-semibold leading-6 text-gray-90">Jenis Kelamin</label>
                                <div class="mt-2">
                                    <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis_kelamin" class="block pl-1 w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
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
    @elseif (Session::has('success'))
        <!-- Initialize Toastr for info message -->
        <script>
            toastr.options = {
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "5000",
                "closeButton": true,
            };
            toastr.success("{{ Session::get('success') }}");
        </script>

    @endif


    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

     <!-- Include necessary JavaScript files -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>


@endsection
