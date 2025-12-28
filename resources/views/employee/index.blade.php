<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($employees as $emp)
            <li>{{ $emp->nik }}</li>
            <li>{{ $emp->nama_lengkap }}</li>
            <li>{{ $emp->tanggal_lahir }}</li>
            <li>{{ $emp->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
            <li>{{ $emp->alamat }}</li>
            <li>{{ $emp->no_hp }}</li>
            <li>{{ $emp->email }}</li>
        @endforeach
    </ul>
</body>
</html>