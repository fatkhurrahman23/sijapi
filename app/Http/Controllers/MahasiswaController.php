<?php

    namespace App\Http\Controllers;
    use App\Models\Kelas_mahasiswa;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Database\QueryException;

    use App\Models\Mahasiswa;
    use App\Models\Data_prodi;
    use App\Models\Jadwal_kuliah;


    class MahasiswaController extends Controller
    {
        //ambil data di database
        public function tampilDataMahasiswa(Request $request){
            $dataMahasiswa = Mahasiswa::all();
            $dataKelasMahasiswa = Kelas_mahasiswa::all();
            $dataProdi = Data_prodi::all();
            return view('/admin/mahasiswa', compact('dataMahasiswa', 'dataKelasMahasiswa', 'dataProdi'));
        }

        //tambah data ke database
        public function tambahDataMahasiswa(Request $request){
            try {
                $dataKelasMahasiswa = Mahasiswa::all();
                $tahunMasuk = new Mahasiswa();
                $tahunMasuk->setDefaultTahunMasuk();
                DB::table('mahasiswa')->insert([
                    'nim' => $request->nim,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'kode_kelas' => $request->kode_kelas,
                    'tahun_masuk' => $tahunMasuk->tahun_masuk,
                    'kode_prodi' => $request->prodi
                ]);
                return redirect('/admin/mahasiswa')->with('add', 'Mahasiswa telah ditambahkan');
            } catch (\Illuminate\Database\QueryException $e) {
                if ($e->errorInfo[1] === 1062) {
                    return redirect('/admin/mahasiswa')->with('error', 'NIM sudah ada, gagal menambahkan mahasiswa');
                } else {
                    return redirect('/admin/mahasiswa')->with('error', 'Terjadi kesalahan saat menambahkan mahasiswa');
                }
            }
        }

        // edit data mahasiswa
        public function editMahasiswa($nim){
            $dataKelasMahasiswa = Kelas_mahasiswa::all();
            $dataMahasiswa = DB::table('mahasiswa')->where('nim', $nim)->first();
            return view('admin/mahasiswa', compact('dataMahasiswa', 'dataKelasMahasiswa'));
        }

        // update data mahasiswa
        public function updateDataMahasiswa(Request $request){
        

            try {
                $dataKelasMahasiswa = Kelas_mahasiswa::all();
                DB::table('mahasiswa')->where('nim', $request->nim)->update([
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'kode_kelas' => $request->kode_kelas
                ]);
                return redirect('admin/mahasiswa')->with('update', 'Mahasiswa telah diupdate');
            } catch (QueryException $e) {
                if ($e->errorInfo[1] === 1451) {
                    // Foreign key constraint violation
                    return redirect('admin/mahasiswa')->with('error', 'Data still has related data, cannot be update');
                } else {
                    // Other database error
                    return redirect('admin/mahasiswa')->with('error', 'An error occurred while update data');
                }
            }
        }

        // hapus data mahasiswa
        public function hapusDataMahasiswa($nim){
            try{
                DB::table('mahasiswa')->where('nim', $nim)->delete();
                return redirect('admin/mahasiswa')->with('delete', 'Mahasiswa telah dihapus');
            } catch (QueryException $e) {
                if ($e->errorInfo[1] === 1451) {
                    // Foreign key constraint violation
                    return redirect('admin/mahasiswa')->with('error', 'Data memiliki relasi, gagal menghapus');
                } else {
                    // Other database error
                    return redirect('admin/mahasiswa')->with('error', 'Ada error ketika menghapus data');
                }
        }
    }

        //  ============================= KELAS MAHASISWA =============================
        //ambil data di database
        public function tampilDataKelasMahasiswa(Request $request){
            $dataKelasMahasiswa = Kelas_mahasiswa::all();
            $dataProdi = Data_prodi::all();
            return view('/admin/kelas_mahasiswa', compact('dataKelasMahasiswa', 'dataProdi'));
        }

        //tambah data ke database
        public function tambahDataKelasMahasiswa(Request $request){
            $dataProdi = Data_prodi::all();
            DB::table('kelas_mahasiswa')->insert([
                'kode_kelas' => $request->kode_kelas,
                'kode_prodi' => $request->kode_prodi
            ]);
            return redirect('/admin/kelas_mahasiswa')->with('add', 'Kelas telah ditambahkan');
        }

        // edit data kelas mahasiswa
        public function editKelasMahasiswa($kode_kelas){
            $dataProdi = Data_prodi::all();
            $dataKelasMahasiswa = DB::table('kelas_mahasiswa')->where('kode_kelas', $kode_kelas)->first();
            return view('admin/kelas_mahasiswa', compact('dataKelasMahasiswa', 'dataProdi'));
        }

        // update data kelas mahasiswa
        public function updateDataKelasMahasiswa(Request $request, $id){

            try {
                $dataProdi = Data_prodi::all();
                $dataKelasMahasiswa = Kelas_mahasiswa::where('kode_kelas', $id)->first();
                $dataKelasMahasiswa->kode_kelas = $request->kode_kelas;
                $dataKelasMahasiswa->kode_prodi = $request->kode_prodi;
                $dataKelasMahasiswa->save();
                return redirect('admin/kelas_mahasiswa')->with('update', 'Kelas Telah diupdate');
            } catch (QueryException $e) {
                if ($e->errorInfo[1] === 1451) {
                    // Foreign key constraint violation
                    return redirect('admin/kelas_mahasiswa')->with('error', 'Data still has related data, cannot be update');
                } else {
                    // Other database error
                    return redirect('admin/kelas_mahasiswa')->with('error', 'An error occurred while update data');
                }
            }
        }

        public function hapusDataKelasMahasiswa(Request $request, $id)
        {
           try{
                $dataKelasMahasiswa = Kelas_mahasiswa::where('kode_kelas',$id)->first();
                $dataKelasMahasiswa->delete();
                return Redirect('admin/kelas_mahasiswa')->with('delete', 'Kelas Telah dihapus');
           } catch (QueryException $e) {
                if ($e->errorInfo[1] === 1451) {
                    // Foreign key constraint violation
                    return redirect('admin/kelas_mahasiswa')->with('error', 'Data memiliki relasi, gagal menghapus');
                } else {
                    // Other database error
                    return redirect('admin/kelas_mahasiswa')->with('error', 'Ada error ketika menghapus data');
                }
           }
        }

        // ====================================== MAHASISWA BUKAN ADMIN ======================================
        public function tampilBeranda(Request $request){
            return view('mahasiswa/page/beranda');
        }
        public function tampilJadwal(Request $request){
            // mengambil nama hari
            $day = \Carbon\Carbon::now()->locale('id')->isoFormat('dddd');

            // konversi nama hari ke kode hari
            $kodeHari = DB::table('hari')->where('nama_hari', $day)->first()->kode_hari;

            // kelas mahasiswa
            $kodeKelas = $request->session()->get('kode_kelas');

            // get today's schedule
            $jadwalKuliahHariIni = Jadwal_kuliah::where('kode_kelas' , $kodeKelas)->where('kode_hari', $kodeHari)->orderBy('kode_jam_awal', 'asc')->get();

            return view('mahasiswa/page/jadwal', compact('jadwalKuliahHariIni'));
        }
        public function tampilPresensi(Request $request){
            return view('mahasiswa/page/presensi');
        }
        public function tampilScanner(Request $request){
            return view('mahasiswa/page/scanner');
        }


        public function getProfileMahasiswa(Request $request)
        {
            // get username from session
            $username = $request->session()->get('username');

            // join tables and select the required fields
            $profile = DB::table('users')
                ->join('mahasiswa', 'users.username', '=', 'mahasiswa.nim')
                ->join('kelas_mahasiswa', 'mahasiswa.kode_kelas', '=', 'kelas_mahasiswa.kode_kelas')
                ->select('users.username', 'mahasiswa.nim', 'mahasiswa.nama', 'kelas_mahasiswa.kode_kelas')
                ->where('users.username', $username)
                ->first();

            return view('mahasiswa/page/profile', compact('profile'));
        }



    }
