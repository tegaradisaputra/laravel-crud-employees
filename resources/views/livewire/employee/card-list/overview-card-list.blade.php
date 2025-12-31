<div>
    {{-- Be like water. --}}

    <div class="grid grid-cols-1 p-4 bg-white w-100 shadow-md rounded-md">
        <div class="flex items-center w-full gap-2 mb-3">
            <ion-icon class="text-blue-600 text-lg" name="mail-outline"></ion-icon>
            <p class="text-md font-medium">Contact Information</p>
        </div>
            
        
            
        <div class="grid grid-cols-2 items-center w-2/3">
            <p class="text-gray-500 font-medium">Email</p>
            <p class="text-sm">{{ $employee->email }}</p>
        </div>

        <div class="grid grid-cols-2 items-center w-2/3">
            <p class="text-gray-500 font-medium">Phone</p>
            <p class="text-sm">{{ $employee->no_hp }}</p>
        </div>

        <div class="grid grid-cols-2 items-center w-2/3">
            <p class="text-gray-500 font-medium">Location</p>
            <p class="text-sm">{{ $employee->alamat }}</p>
        </div>
        

</div>
