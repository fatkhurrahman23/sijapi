<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <form action="/admin/matakuliah/{{ $mataKuliahToEdit->kode_mata_kuliah }}/update" method="POST">
        @csrf
        <label for="nama">Nama Mata Kuliah:</label>
        <input type="text" name="nama" id="nama" value="{{ $mataKuliahToEdit->nama }}" required><br>

        <label for="sks">SKS:</label>
        <input type="number" name="sks" id="sks" value="{{ $mataKuliahToEdit->sks }}" required><br>

        <label for="semester">Semester:</label>
        <input type="number" name="semester" id="semester" value="{{ $mataKuliahToEdit->semester }}" required><br>

        <label for="jenis">Jenis:</label>
        <select name="jenis" id="jenis" required>
            <option value="gasal" {{ $mataKuliahToEdit->jenis == 'gasal' ? 'selected' : '' }}>Gasal</option>
            <option value="genap" {{ $mataKuliahToEdit->jenis == 'genap' ? 'selected' : '' }}>Genap</option>
        </select><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>