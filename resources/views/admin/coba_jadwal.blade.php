<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jadwal Kuliah</h1>

    <ul>
        @foreach($dataKelas as $kelas)
            <li><a href="/admin/jadwal_kuliah/{{ $kelas->kode_kelas }}">{{ $kelas->kode_kelas }}</a></li>
        @endforeach
    </ul>
</body>
</html>