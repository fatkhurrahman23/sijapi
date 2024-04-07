<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT ENROLLMENT</title>
</head>
<body>
    <form action="/admin/enrollment/{{ $enrollmentToEdit->id }}/update" method="POST">
        @csrf
        <label for="kode_enrollment">Kode Enrollment:</label>
        <input type="text" name="kode_enrollment" id="kode_enrollment" value="{{ $enrollmentToEdit->kode_enrollment }}" required>
        <br>
        <label for="kode_kelas">Kode Kelas:</label>
        <input type="text" name="kode_kelas" id="kode_kelas" value="{{ $enrollmentToEdit->kode_kelas }}" required>
        <br>
        <label for="kode_dosen">Kode Dosen:</label>
        <input type="text" name="kode_dosen" id="kode_dosen" value="{{ $enrollmentToEdit->kode_dosen }}" required>
        <br>
        <label for="kode_tahun_akademik">Kode Tahun Akademik:</label>
        <input type="text" name="kode_tahun_akademik" id="kode_tahun_akademik" value="{{ $enrollmentToEdit->kode_tahun_akademik }}" required>
        <br>
        <label for="kode_mata_kuliah">Kode Mata Kuliah:</label>
        <input type="text" name="kode_mata_kuliah" id="kode_mata_kuliah" value="{{ $enrollmentToEdit->kode_mata_kuliah }}" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>