<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- urutkan hari dengan mengambil data where('kode_hari') -->
    <h1>Jadwal Kuliah</h1>
    
    @if(count($dataJadwalKuliahKelas) > 0)
    <h2>Jadwal Kelas {{$kodeKelas}}</h2>

    @foreach ($dataJadwalKuliahKelas as $jadwalHari)
        <h2>Hari {{$jadwalHari->kode_hari}}</h2>
        <table>
            <thead>
                <tr>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jadwalHari as $jadwal)
                @if(is_object($jadwal))
                    <tr>
                        <td>{{$jadwal->kode_jam}}</td>
                        <td>{{$jadwal->mata_kuliah}}</td>
                        <td>{{$jadwal->ruangan}}</td>
                    </tr>
                @endif
                var_dump($jadwalHari);
            @endforeach
            </tbody>
        </table>
    @endforeach
    <?php
        // var_dump($dataJadwalKuliahKelas)
    ?>

@else
    <p>Tidak ada jadwal untuk kelas {{$kodeKelas}}</p>
@endif
</body>
</html>