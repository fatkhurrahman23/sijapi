<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateTahunAkademikStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:tahunakademikstatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'php artisan make:command UpdateTahunAkademikStatus';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('tahun_akademik')
            ->whereDate('tgl_mulai', '<=', Carbon::today())
            ->where('status', 'Tidak aktif')
            ->update(['status' => 'Aktif']);

        $tahunAkademik = DB::table('tahun_akademik')
            ->whereDate('tgl_mulai', '>', Carbon::today())
            ->where('status', 'Aktif');



        DB::table('tahun_akademik')
            ->where('status' , 'Aktif')
            ->whereDate('tgl_selesai', '<', Carbon::today())
//            ->where('status', 'Aktif')
            ->update(['status' => 'Lewat']);

        $this->info('Status tahun akademik telah diperbarui.');
    }
}
