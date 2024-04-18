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

    <h2>JADWAL SENIN</h2>

        <table>
            <thead>
                <tr>
                    <th>Jam</th>
                    <th>Mata Kuliah</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwalKuliahSenin as $jadwalSenin)
                    <tr>
                        <td>{{$jadwalSenin->kode_jam}}</td>
                        <td>{{$jadwalSenin->nama_mata_kuliah}}</td>
                        <td>{{$jadwalSenin->ruangan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    
</body>
</html>