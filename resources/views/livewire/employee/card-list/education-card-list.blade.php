<div>
    {{-- Stop trying to control. --}}

    <div class="flex items-center justify-between">
        <h3 class="font-bold text-2xl">Education History</h3>

        <button wire:click="showForm" class="px-3 py-1 flex items-center gap-2 bg-blue-600 rounded-md text-white">
            <ion-icon name="add-outline" class="text-white"></ion-icon>
            Add Education
        </button>
    </div>

    @if ($showCreateForm)
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
        <div class="bg-white p-6 rounded w-150">

            <livewire:education.education-form
                :employee="$employee"
                wire:key="create-education-form"
            />

        </div>
    </div>
    @endif

@forelse ($employeeEducations as $edu)
    <div class="mt-4 space-y-3">
    
        <div class="overflow-hidden group grid grid-cols-1 p-4 bg-white w-100 shadow-md rounded-md">
            

            <div class="flex justify-between">
                <ion-icon class="rounded-md bg-blue-100 text-blue-500 text-2xl p-3 mb-2" name="school-outline"></ion-icon>

                <div class="hidden group-hover:flex text-lg gap-2">
                    <button>
                        <ion-icon name="pencil-outline"></ion-icon>
                    </button>
                    
                    <button>
                        <ion-icon class="text-red-500" name="trash-outline"></ion-icon>
                    </button>
                </div>
                
            </div>

            
            
            
            <h3 class="text-2xl font-bold">{{ $edu->institusi }}</h3>
            <p class="text-lg text-gray-700">{{ $edu->pendidikan }}</p>
            <p class="text-sm text-gray-500 mb-4">{{ $edu->jurusan }}</p>

            <p class="text-sm border font-medium flex w-28 items-center px-3 py-1 rounded-lg">Class of {{ $edu->tahun_lulus }}</p>
            
            </div>
            
        </div>

        @empty
        <div class="flex items-center justify-center mt-12 ">
            <span class="bg-red-500 px-4 py-2 rounded-md font-medium text-2xl shadow-lg shadow-red-400 text-white">
                No Education Data Yet
            </span>
        </div>
@endforelse

</div>
