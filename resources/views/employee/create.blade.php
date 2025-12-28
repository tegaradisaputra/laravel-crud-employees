<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <input type="text" name="nik" placeholder="NIK">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir">
        <select name="jenis_kelamin">
            <option name="jenis_kelamin" value="L">Laki-laki</option>
            <option name="jenis_kelamin" value="P">Perempuan</option>
        </select>
        <input type="text" name="alamat" placeholder="Alamat">
        <input type="text" name="no_hp" placeholder="No HP">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>