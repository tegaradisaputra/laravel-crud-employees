@include('layouts.header')

    {{-- content start --}}
    <main class=" px-12 py-5 bg-gray-100 w-full min-h-screen">
        <div class="flex justify-between items-center">
            <div class=" ">
                <span class="text-3xl font-bold mb-6">Dashboard</span>
                <p class="text-gray-600">Manage your team members and their roles.</p>
            </div>

            <div class="flex gap-2 items-center relative">
                <ion-icon name="search-outline" class="absolute left-2 z-10"></ion-icon>
                <input type="text" placeholder="Search Employees..." class="bg-white drop-shadow-sm rounded-md px-3 pl-8 py-1 outline-none border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">

                <a href="{{ route('employee.create') }}" class="px-3 py-1 bg-blue-600 hover:bg-blue-500 rounded-md flex items-center">
                    <ion-icon name="add-outline" class="text-white"></ion-icon>
                    <span class="text-white ml-1">Add Employee</span>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-1">
            {{-- card employee list --}}
            @foreach ($employees as $e)
            <a href="{{ route('employee.show', $e->id) }}" class="group relative bg-white rounded-md w-80 mt-12 shadow-lg transition duration-100 hover:-translate-y-0.5 hover:shadow-xl">
                <div class="h-20 bg-blue-100/75"></div>
    
                <div class="absolute top-10 left-8 -translate-x-1">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=1766935633181" alt="avatar" class="w-15 h-15 rounded-full border-4 border-white shadow-md">
                </div>
    
                <div class="pl-6 pt-6 pb-6">
                    <span class="font-bold text-xl group-hover:text-blue-500">{{ $e->nama_lengkap }}</span>
                    <p class="text-gray-500 text-sm">Junior Fullstack Developer</p>

                    <p class="text-gray-500 mt-3 text-sm items-center flex gap-1">
                        <ion-icon name="briefcase-outline"></ion-icon>
                        Engineering
                    </p>
                    <p class="text-gray-500 text-sm items-center flex gap-1">
                        <ion-icon name="location-outline"></ion-icon>
                        {{ $e->alamat }}
                    </p>
                    <div class="hover:text-blue-500 group-hover:text-blue-500">...</div>
                </div>
            </a>
                @endforeach
        </div>
    </main>
    {{-- content end --}}


@include('layouts.footer')