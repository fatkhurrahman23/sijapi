<!DOCTYPE html>
<html>
<head>
    <title>Edit Tahun Akademik</title>
</head>
<body>
    <h1>Edit Tahun Akademik</h1>

    <form action="/tahun_akademik/update" method="POST">
        @csrf
        <input type="hidden" name="kode_tahun_akademik" value="{{ $tahunAkademikToEdit->kode_tahun_akademik }}">

        <label for="tahun_akademik">Tahun Akademik:</label>
        <input type="text" name="tahun_akademik" value="{{ $tahunAkademikToEdit->tahun_akademik }}">

        <label for="status">Status:</label>
        <select name="status">
            <option value="gasal" {{ $tahunAkademikToEdit->status == 'gasal' ? 'selected' : '' }}>Gasal</option>
            <option value="genap" {{ $tahunAkademikToEdit->status == 'genap' ? 'selected' : '' }}>Genap</option>
        </select>

        <button type="submit">Update</button>
    </form>
</body>
</html>