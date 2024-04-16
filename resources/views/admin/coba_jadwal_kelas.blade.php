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
        @for($i = 1; $i <= 5; $i++)
            <h2>Hari {{$i}}</h2>
            @php
            $jadwalHari = $dataJadwalKuliahKelas->where('kode_hari', $i)->first();
            @endphp
            @if($jadwalHari)
                <table>
                    <thead>
                        <tr>
                            <th>Jam</th>
                            <th>Mata Kuliah</th>
                            <th>Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$jadwalHari->kode_jam}}</td>
                            <td>{{$jadwalHari->mata_kuliah}}</td>
                            <td>{{$jadwalHari->ruangan}}</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Tidak ada jadwal</p>
            @endif
        @endfor
    @else
        <p>Tidak ada jadwal</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Mata Kuliah</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataJadwalKuliahKelas as $jadwalKelas): ?>
                <tr>
                    <td><?php echo $jadwalKelas['hari']; ?></td>
                    <td><?php echo $jadwalKelas['jam']; ?></td>
                    <td><?php echo $jadwalKelas['mata_kuliah']; ?></td>
                    <td><?php echo $jadwalKelas['ruangan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>