<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="flex items-center justify-between mb-3">
        <h3 class="font-bold text-2xl">Work Information</h3>

        <button wire:click="showForm" class="px-3 py-1 flex items-center gap-2 bg-blue-600 rounded-md text-white">
            <ion-icon name="add-outline" class="text-white"></ion-icon>
            Add Work
        </button>
    </div>

    @if ($showCreateForm)
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
        <div class="bg-white p-6 rounded w-150">

            <livewire:work.work-form
                :employee="$employee"
                :job="$editingJobId"
                wire:key="'create-work-form' . $editingJobId->id"
            />

        </div>
    </div>
    @endif

    @if($work)
    <div class="mt-4 space-y-3">

        <div class="group overflow-hidden grid grid-cols-1 p-4 bg-white w-150 shadow-md rounded-md">

            <div class="flex justify-between">
                <ion-icon class="rounded-md bg-blue-100 text-blue-500 text-2xl p-3 mb-2" name="calendar-clear-outline"></ion-icon>

                <div class="hidden group-hover:flex text-lg gap-2">
                    <button wire:click="edit({{ $work->id }})">
                        <ion-icon name="pencil-outline"></ion-icon>
                    </button>
                    
                    <button wire:click="delete({{ $work->id }})">
                        <ion-icon class="text-red-500" name="trash-outline"></ion-icon>
                    </button>
                </div>
                
            </div>
        


            
            <div class="font-medium text-2xl">
                <div class="grid grid-cols-2 text-lg items-center w-2/3">
                    <p class="text-gray-500 font-medium">Jabatan</p>
                    <p class="text-lg font-medium">{{ $work->jabatan }}</p>
                </div>

                <div class="grid grid-cols-2 text-lg items-center w-2/3">
                    <p class="text-gray-500 font-medium">Departemen</p>
                    <p class="text-lg">{{ $work->departemen }}</p>
                </div>

                <div class="grid grid-cols-2 text-lg items-center w-2/3">
                    <p class="text-gray-500 font-medium">Tanggal Masuk</p>
                    <p class="text-lg">{{ $work->tanggal_masuk }}</p>
                </div>

                <div class="grid grid-cols-2 text-lg items-center w-2/3">
                    <p class="text-gray-500 font-medium">Status</p>
                    <p class="text-lg">{{ $work->status_karyawan }}</p>
                </div>
            </div>

            
        </div>
        @else
        <div class="flex items-center justify-center mt-12 ">
            <span class="bg-red-500 px-4 py-2 rounded-md font-medium text-xl shadow-lg shadow-red-400 text-white">
                No Education Data Yet
            </span>
        </div>
        @endif
    </div>
    

</div>
