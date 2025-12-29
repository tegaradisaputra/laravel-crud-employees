<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nik" placeholder="NIK" value="{{ $employee->nik }}">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $employee->nama_lengkap }}">
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $employee->tanggal_lahir }}">
        <select name="jenis_kelamin">
            <option name="jenis_kelamin" value="L" {{ $employee->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option name="jenis_kelamin" value="P" {{ $employee->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <input type="text" name="alamat" placeholder="Alamat" value="{{ $employee->alamat }}">
        <input type="text" name="no_hp" placeholder="No HP" value="{{ $employee->no_hp }}">
        <input type="email" name="email" placeholder="Email" value="{{ $employee->email }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>