<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
        @csrf
        @method('DELETE')
        <ul>
            <li>NIK: {{ $employee->nik }}</li>
            <li>Nama Lengkap: {{ $employee->nama_lengkap }}</li>
            <li>Tanggal Lahir: {{ $employee->tanggal_lahir }}</li>
            <li>Jenis Kelamin: {{ $employee->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
            <li>Alamat: {{ $employee->alamat }}</li>
            <li>No HP: {{ $employee->no_hp }}</li>
            <li>Email: {{ $employee->email }}</li>
        </ul>
        <button type="submit">Hapus Karyawan</button>
    </form>
</body>
</html>