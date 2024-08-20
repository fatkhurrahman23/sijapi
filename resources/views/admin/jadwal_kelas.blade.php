@extends('admin.admin')
@section('content')
    @vite('resources/css/jadwal_kelas.css')
    @vite('resources/js/jadwal_kelas.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                        <h1>Jadwal Kelas {{ $kodeKelas }}</h1>
                                <ul class="breadcrumb">
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                </li>
                                <li>
                                    <a class="active" href="#">Jadwal Kelas</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li>
                                    <a class="active" href="#">{{ $kodeKelas }}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                            <!-- <ul class="box-info">
                                <li>
                                    <i class="bx bxs-calendar-check"></i>
                                    <span class="text">
                                    <h3 id="totalcobajadwal"></h3>
                                    <p>Total Jadwal</p>
                                    </span>
                                </li>
                            </ul> -->
                <form class=" mb-2 px-8 my-6 rounded-2xl py-7 bg-custom-abu "action="{{ url('admin/jadwal_kelas') }}" method="POST">
                    <h3 class="font-poppins font-medium text-2xl text-custom-dark">Tambah Jadwal Kelas</h3>
                    @csrf
                        <div class="mt-7 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="kode_jadwal_kuliah" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jadwal Kuliah</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jadwal_kuliah" id="kode_jadwal_kuliah" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="kode_enrollment" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Enrollment</label>
                                <div class="mt-2">
                                    <select id="kode_enrollment" name="kode_enrollment" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <option value=""> -- Pilih enrollment --</option>
                                        @foreach($dataEnrollment as $enrollment)
                                            <option value="{{ $enrollment->kode_enrollment }}">
                                                {{ $enrollment->mata_kuliah->nama_mata_kuliah }} -
                                                {{ $enrollment->dosen->nama }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_tahun_akademik" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Tahun Akademik</label>
                                <div class="mt-2">
                                    <select id="tahun_akademik" name="kode_tahun_akademik" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    <option value=""> -- Pilih Tahun Akademik --</option>
                                        @foreach($dataTahunAkademik as $tahun)
                                            <option value="{{ $tahun->kode_tahun_akademik }}">
                                                {{ $tahun->kode_tahun_akademik }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="semester" class="block text-sm font-poppins font-semibold leading-6 text-gray-90">semester</label>
                                <div class="mt-2">
                                    <select id="semester" name="semester" autocomplete="semester" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="">-- Pilih Semester --</option>
                                        <option value="Gasal">Gasal</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_hari" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Hari</label>
                                <div class="mt-2">
                                    <select id="kode_hari" name="kode_hari" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <option value=""> -- Pilih Hari --</option>
                                        @foreach($dataHari as $hari)
                                            <option value="{{ $hari->kode_hari }}">{{ $hari->nama_hari }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 ">
                                <label for="kode_ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Ruang</label>
                                <div class="mt-2">
                                    <select id="kode_ruang" name="kode_ruang" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <option value=""> -- Pilih Ruangan --</option>
                                        @foreach($dataRuang as $ruang)
                                            <option value="{{ $ruang->kode_ruang }}">{{ $ruang->nama_ruang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1" readonly hidden>
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <select id="kode_kelas" name="kode_kelas" class="pl-1 block bg-gray-300 w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                                        <option class="" value="{{ $kodeKelas }}" selected>{{ $kodeKelas }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_awal" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Awal</label>
                                <div class="mt-2">
                                    <select id="kode_jam_awal" name="kode_jam_awal" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <option value=""> -- Pilih Jam Mulai --</option>
                                        @foreach($dataJam as $jam)
                                            <option value="{{ $jam->kode_jam }}">{{ $jam->kode_jam }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_akhir" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Akhir</label>
                                <div class="mt-2">
                                    <select id="kode_jam_akhir" name="kode_jam_akhir" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <option value=""> -- Pilih Jam Berakhir --</option>
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
    <a href="/admin/pdf/{{ $kodeKelas }}" class="btn btn-primary flex place-self-center justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" ">Generate Jadwal PDF</a>
                    <div class="overflow-x-auto pb-12 px-8  my-7 py-7 bg-custom-abu rounded-2xl">
    <label for="selectDay">Pilih Hari:</label>
    @php
    $days = [
        '1' => 'Senin',
        '2' => 'Selasa',
        '3' => 'Rabu',
        '4' => 'Kamis',
        '5' => 'Jumat'
        ];
    @endphp
    <select id="selectDay" onchange="showSchedule()" class="pl-1 block w-28 transition-all duration-1000 transform font-poppins rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        @foreach ($jadwalKuliah as $hari => $jadwal)
            <option value="{{ $hari }}" class="font-poppins ">{{ $days[$hari] }}</option>
        @endforeach
    </select>
    <div id="scheduleTables">
        @foreach ($jadwalKuliah as $hari => $jadwal)
        <table data-hari="{{ $hari }}" id="jadwal-table" class="jadwal-table dataTables_wrapper mt-11 w-full table table-striped">
            <thead>
                <tr>
                    <th class="py-3 px-4 pl-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Jam</th>
                    <th class="px-4 pl-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Mata Kuliah</th>
                    <th class="px-4 pl-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Ruang</th>
                    <th class="px-4 pl-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                </tr>
            </thead>
            <tbody id="tableBody">
            @foreach ($jadwal as $value)
                @for($jam_kuliah = $value->kode_jam_awal; $jam_kuliah <= $value->kode_jam_akhir; $jam_kuliah++)
                    <tr>
                        <td class="border px-4 py-2">{{ $jam_kuliah }}</td>
                        <td class="border px-4 py-2">{{ $value->enrollment->mata_kuliah->nama_mata_kuliah }}</td>
                        <td class="border px-4 py-2">{{ $value->kode_ruang }}</td>
                        <td class="border px-4 py-2">
                        <button type="button"  data-modal-toggle="edit_jadwal_modal" data-modal-target="edit_jadwal_modal{{ $value->kode_jadwal_kuliah }}" class="bg-blue-500 hover:bg-blue-700 text-white font-poppins font-normal py-1 px-2 rounded">Edit</button>
                            <a href="{{ url('admin/jadwal_kelas/delete/'.$value->kode_jadwal_kuliah) }}">
                                <button class="bg-red-500 hover:bg-red-700 text-white font-poppins font-normal py-1 px-2 rounded">Hapus</button>
                            </a>
                        </td>
                    </tr>
                @endfor
            @endforeach
            </tbody>
        </table>
        @endforeach
    </div>
</div>
<!-- ========================================================MODAL======================================================== -->
@foreach ($jadwalKuliah as $hari => $jadwal)
    @foreach ($jadwal as $value)
    <div id="edit_jadwal_modal{{ $value->kode_jadwal_kuliah }}" tabindex="-1" aria-hidden="true" class="hidden h-100 mt-5 py-5 modal flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center">
        <div class="backdrop absolute inset-0 bg-black opacity-30 h-130"></div>
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                        <h3 class="text-xl font-semibold text-gray-900 ">
                            EDIT DATA MATKUL
                        </h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit_jadwal_modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="{{ url('admin/jadwal_kelas/update/'.$value->kode_jadwal_kuliah) }}" method="POST">
                            @csrf

                            <div class="sm:col-span-2">
                                <label for="kode_jadwal_kuliah" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jadwal Kuliah</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_jadwal_kuliah" id="kode_jadwal_kuliah" class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $value->kode_jadwal_kuliah }}" required>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="kode_enrollment" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Enrollment</label>
                                <div class="mt-2">
                                    <select id="kode_enrollment" name="kode_enrollment" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataEnrollment as $enrollment)
                                        <option value="{{ $enrollment->kode_enrollment }}">{{ $enrollment->kode_enrollment }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_tahun_akademik" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Tahun Akademik</label>
                                <div class="mt-2">
                                    <select id="kode_tahun_akademik" name="kode_tahun_akademik" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataTahunAkademik as $tahun)
                                        <option value="{{ $tahun->kode_tahun_akademik }}">{{ $tahun->kode_tahun_akademik }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="semester" class="block text-sm font-poppins font-semibold leading-6 text-gray-90">semester</label>
                                <div class="mt-2">
                                    <select id="semester" name="semester" autocomplete="semester" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="gasal">Gasal</option>
                                        <option value="genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1" hidden>
                                <label for="kode_hari" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Hari</label>
                                <div class="mt-2">
                                    <select id="kode_hari" name="kode_hari" class="pl-1 block bg-gray-300 w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                                    <option class="" value="{{ $hari }}" selected>{{ $days[$hari] }}</option>
                                </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 ">
                                <label for="kode_ruang" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Ruang</label>
                                <div class="mt-2">
                                    <select id="kode_ruang" name="kode_ruang" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataRuang as $ruang)
                                        <option value="{{ $ruang->kode_ruang }}">{{ $ruang->nama_ruang }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1" hidden>
                                <label for="kode_kelas" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Kelas</label>
                                <div class="mt-2">
                                    <select id="kode_kelas" name="kode_kelas" class="pl-1 block bg-gray-300 w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                                    <option class="" value="{{ $kodeKelas }}" selected>{{ $kodeKelas }}</option>                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_awal" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Awal</label>
                                <div class="mt-2">
                                    <select id="kode_jam_awal" name="kode_jam_awal" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataJam as $jam)
                                        <option value="{{ $jam->kode_jam }}">{{ $jam->kode_jam }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="kode_jam_akhir" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Kode Jam Akhir</label>
                                <div class="mt-2">
                                    <select id="kode_jam_akhir" name="kode_jam_akhir" class="pl-1 block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                    @foreach($dataJam as $jam)
                                        <option value="{{ $jam->kode_jam }}">{{ $jam->kode_jam }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2 flex justify-center">
                                <button type="submit" class="flex items-center justify-center w-3/6 rounded-md bg-custom-birumuda px-3 py-2 text-sm font-poppins font-semibold text-white shadow-sm hover:bg-custom-birutua focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <img class="flex justify-end align-bottom items-end" width="17" height="17" src="https://img.icons8.com/sf-black-filled/64/plus-math.png" alt="plus-math" style="filter: invert(100%);"/>
                                    <p class="ml-2">Tambah</p>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endforeach
<script>
    function showSchedule() {
    var selectedDay = document.getElementById('selectDay').value;
    var allTables = document.querySelectorAll('.jadwal-table');

    document.getElementById('kode_hari').value = selectedDay;
    allTables.forEach(function(table) {
        if (table.getAttribute('data-hari') === selectedDay) {
            table.style.display = 'table'; // Menampilkan tabel yang sesuai dengan hari yang dipilih
        } else {
            table.style.display = 'none'; // Menyembunyikan tabel yang tidak sesuai
        }
    });
}

    // Menampilkan tabel berdasarkan hari yang dipilih saat pertama kali halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        showSchedule();
    });
</script>
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
