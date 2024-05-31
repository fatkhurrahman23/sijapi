<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;

class CsvImportController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');

        // Menambahkan timestamp ke nama file untuk mencegah tumpang tindih
        $filename = now()->format('Y_m_d_His') . '_' . $request->session()->get('nama', 'guest');

        // Menyimpan file ke storage
        $path = $file->storeAs('uploads', $filename, 'public');

        // Memanggil metode import dengan path file yang baru diunggah
        $this->import($path);

        return back()->with('success', "File has been uploaded and imported successfully.");
//        return json_decode('{"status": "success"}');

    }

    public function import($filePath)
    {
        $csv = Reader::createFromPath(storage_path('app/public/' . $filePath), 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();

        foreach ($records as $record) {

            $uuid = (string) \Illuminate\Support\Str::uuid();

            User::create([
                'uuid' => $uuid,
                'username' => $record['nim'],
//                'email' => $record['email'],
                'password' => Hash::make($record['nim'])
            ]);

            Mahasiswa::create([
                'nim' => $record['nim'],
                'nama' => $record['nama'],
                'kode_prodi' => $record['prodi'],
//                'tingkat' => $record['tingkat'],
                'kelas' => $record['kelas'],
                'tahun_masuk' => $record['tahunMasuk'],
                'jenis_kelamin' => $record['jk'],
            ]);
        }

        // Menghapus file setelah diimpor
        Storage::disk('public')->delete($filePath);

        return back()->with('success', 'Data has been imported successfully.');
    }
}
