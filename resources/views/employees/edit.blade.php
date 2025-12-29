@include('layouts.header')

    {{-- content start --}}
    <main class=" px-12 py-5 bg-gray-100 w-full min-h-screen">

        <div class="w-1/2 mx-auto flex flex-col">
            
            <div class="flex flex-col items-start mb-6">
                <a href="{{ route('employee.index') }}" class="flex items-center gap-2 mb-3 text-gray-600 hover:text-gray-900 font-medium">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                    <span>Back</span>
                </a>
                <h3 class="text-2xl font-bold">Update Employee</h3>
                <p class="text-gray-600 text-sm">Update an existing employee record in the system.</p>
            </div>

            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">

                    <!-- Title -->
                    <div>
                        <h3 class="text-lg font-semibold">Personal Information</h3>
                        <p class="text-gray-600 text-sm">
                            Basic details about the employee.
                        </p>
                    </div>

                    <!-- Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- NIK (full width) -->
                        <div class="md:col-span-2">
                            <label class="block text-sm mb-1">NIK</label>
                            <input type="text" name="nik" value="{{ $employee->nik }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="NIK">
                        </div>

                        <!-- Nama Depan -->
                        <div>
                            <label class="block text-sm mb-1">Nama Depan</label>
                            <input type="text" name="nama_depan" value="{{ $employee->nama_depan }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="Nama Depan">
                        </div>

                        <!-- Nama Belakang -->
                        <div>
                            <label class="block text-sm mb-1">Nama Belakang</label>
                            <input type="text" name="nama_belakang" value="{{ $employee->nama_belakang }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="Nama Belakang">
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <label class="block text-sm mb-1">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $employee->tanggal_lahir }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="block text-sm mb-1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="{{ $employee->jenis_kelamin }}"
                                    class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
                                <option value="">-- Pilih --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <!-- Alamat (full width) -->
                        <div class="md:col-span-2">
                            <label class="block text-sm mb-1">Alamat</label>
                            <input type="text" name="alamat" value="{{ $employee->alamat }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="Alamat">
                        </div>

                        <!-- No HP -->
                        <div>
                            <label class="block text-sm mb-1">No HP</label>
                            <input type="text" name="no_hp" value="{{ $employee->no_hp }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="No HP">
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm mb-1">Email</label>
                            <input type="email" name="email" value="{{ $employee->email }}"
                                class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md"
                                placeholder="Email">
                        </div>

                    </div>

                    <!-- Button -->
                    <div class="flex justify-end gap-4 text-center">

                        <a href="{{ route('employee.index') }}" class="px-4 py-1.5 bg-white text-gray-900 border border-gray-900 rounded">
                            <span>Cancel</span>
                        </a>

                        <button type="submit"
                                class="px-4 py-1.5 bg-blue-600 text-white rounded hover:bg-blue-500">
                            Update Employee
                        </button>
                    </div>

                </div>
            </form>


        </div>
            

    </main>
    {{-- content end --}}

@include('layouts.footer')
