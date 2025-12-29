@include('layouts.header')


    <main class=" px-12 py-5 bg-gray-100 w-full min-h-screen">

        <div class="w-1/2 mx-auto flex flex-col">
            
            <div class="flex gap-4 items-center mb-6">
                <a href="{{ route('employee.index') }}" class="flex items-center gap-2 mb-3 text-gray-600 hover:text-gray-900 font-medium">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </a>

                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=1767018552909" alt="" class="w-20 h-20 rounded-full border-4 border-white shadow-md">

                <div class="flex flex-col">
                    <h3 class="text-2xl font-bold">{{ $employee->nama_lengkap }}</h3>
                    <p class="text-gray-600 text-sm">Expert Web Developer | <span>Engineering</span></p>
                </div>

                <a href="{{ route('employee.edit', $employee->id) }}" class="ml-auto px-4 py-1.5 flex gap-2 items-center border border-gray-900 rounded-md">
                    <ion-icon name="pencil-outline"></ion-icon>
                    <span>Edit Profile</span>
                </a>

                <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-1.5 flex items-center bg-red-600 text-white rounded-md hover:bg-red-500">
                        <ion-icon name="trash-outline"></ion-icon>
                    </button>
                </form>
            </div>
        </div>
    </main>












@include('layouts.footer')

    {{-- <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
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
    </form> --}}