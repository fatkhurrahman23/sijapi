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
                <form action="{{ url('admin/jadwal_kuliah') }}" method="POST">
                    @csrf
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_jadwal_kuliah" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jadwal Kuliah</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jadwal_kuliah" id="kode_jadwal_kuliah" class="pl-2 block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_enrollment" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Enrollment</label>
                                <div class="mt-2">
                                    <select id="kode_enrollment" name="kode_enrollment" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataEnrollment as $enrollment)
                                        <option value="{{ $enrollment->kode_enrollment }}">{{ $enrollment->kode_enrollment }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_hari" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Hari</label>
                                <div class="mt-2">
                                    <select id="kode_hari" name="kode_hari" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataHari as $hari)
                                        <option value="{{ $hari->kode_hari }}">{{ $hari->nama_hari }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="kode_ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Ruang</label>
                                <div class="mt-2">
                                    <select id="kode_ruang" name="kode_ruang" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataRuang as $ruang)
                                        <option value="{{ $ruang->kode_ruang }}">{{ $ruang->nama_ruang }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1" readonly hidden>
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <select id="kode_kelas" name="kode_kelas" class="block bg-gray-300 w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                                        <option class="" value="{{ request('kode_kelas') }}" selected>{{ request('kode_kelas') }}</option>
                                    </select>                                  
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_awal" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Awal</label>
                                <div class="mt-2">
                                    <select id="kode_jam_awal" name="kode_jam_awal" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataJam as $jam)
                                        <option value="{{ $jam->kode_jam }}">{{ $jam->kode_jam }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_akhir" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Akhir</label>
                                <div class="mt-2">
                                    <select id="kode_jam_akhir" name="kode_jam_akhir" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach($dataJam as $jam)
                                        <option value="{{ $jam->kode_jam }}">{{ $jam->kode_jam }}</option>
                                    @endforeach
                                    </select>          
                                </div>
                            </div>
                            <div class="sm:col-span-2 flex justify-between items-end">
                                <button type="submit" class="flex justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                    <p class="ml-2">Tambah</p>
                                </button>
                            </div>
                        </div>
                    </form>
                <div class="overflow-x-auto pb-2">
                    <table class="table-auto mt-24 w-11/12 border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Jam</th>
                                <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Mata Kuliah</th>
                                <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Ruang</th>
                                <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwalKuliahSenin as $senin)
                            @for($jam_kuliah = ($senin->kode_jam_awal); $jam_kuliah <= $senin->kode_jam_akhir; $jam_kuliah++)
                                <tr>
                                    <td class="border px-4 py-2">{{ $jam_kuliah }}</td>
                                    <td class="border px-4 py-2">{{ $senin->enrollment->mata_kuliah->nama_mata_kuliah }}</td>
                                    <td class="border px-4 py-2">{{ $senin->kode_ruang }}</td>
                                    <td class="border px-4 py-2">
                                        <button type="button" data-modal-target="" data-modal-toggle="" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                                        <a href="{{ url('admin/jadwal_kuliah/delete/'.$senin->kode_jadwal_kuliah) }}">
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--  -->
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
@endsection