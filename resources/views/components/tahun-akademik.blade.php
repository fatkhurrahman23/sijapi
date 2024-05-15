<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang</title>
    @vite('resources/css/tahun_akademik.css')
    @vite('resources/js/tahun_akademik.js')
</head>
<body>
    <div class="container">
        <div id="tahunakademik" class="page ml-12">
            <p class="glow-text mt-10 font-poppins font-bold text-black text-2xl">TAMBAH TAHUN AKADEMIK</p>
            <form action="/admin/tahun_akademik" method="POST">
                @csrf
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="nama_tahun_akademik" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Tahun Akademik</label>
                        <div class="mt-2">
                            <input type="text" name="nama_tahun_akademik" id="nama_tahun_akademik" autocomplete="nama_tahun_akademik" class="block w-3/4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                                <label for="edit_status" class="block text-sm font-poppins font-semibold leading-6 text-gray-900">Status</label>
                                <div class="mt-2">
                                    <select id="edit_status" name="edit_status" autocomplete="edit_status" class="block w-3/4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="gasal">Gasal</option>
                                        <option value="genap">Genap</option>
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
            <div class="overflow-x-auto">
                <table class="table-auto mt-24 w-11/12 border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">No</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Kode Tahun Akademik</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Tahun Akademik</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Status</th>
                            <th class="px-4 py-2 bg-custom-birutua font-poppins font-semibold text-custom-putih">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($dataTahunAkademik as $tahunAkademik)
                        <tr>
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $tahunAkademik->tahun_akademik }}</td>
                            <td class="border px-4 py-2">{{ $tahunAkademik->status }}</td>
                            <td class="border px-4 py-2">
                            <!-- Modal -->
                            <div id="edit_tahun_akademik_modal" tabindex="-1" aria-hidden="true"class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <!-- Content will be loaded here -->
                                    </div>
                                </div>
                            </div>

                            <script>
                            $(document).ready(function() {
                                $('.edit-modal-btn').on('click', function() {
                                    var id = $(this).data('id');
                                    $.get('/admin/tahun_akademik/' + id + '/edit', function(data) {
                                        $('#edit_tahun_akademik_modal .modal-content').html(data);
                                        $('#edit_tahun_akademik_modal').removeClass('hidden'); // Show the modal
                                        window.location.hash = 'edit_tahun_akademik_modal'; // Change URL hash
                                    });
                                });

                                // Listen for hash changes to close the modal
                                $(window).on('hashchange', function() {
                                    if (window.location.hash !== '#edit_tahun_akademik_modal') {
                                        $('#edit_tahun_akademik_modal').addClass('hidden'); // Hide the modal
                                    }
                                });
                            });
                            </script>                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

