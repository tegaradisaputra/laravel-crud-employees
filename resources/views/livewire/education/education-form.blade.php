<div>
    {{-- Be like water. --}}

    
    <div class="flex flex-col w-full">

        <div class="flex justify-end">
            <button wire:click="cancelForm" class="text-xl text-gray-500 hover:text-gray-900 cursor-pointer">
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <div class="flex flex-col mb-6">
                <h3 class="text-2xl font-bold">Add Education</h3>
                <p class="text-sm text-gray-500">Add details about an academic degree or certification.</p>
        </div>

        <div class="mb-4">
            <label for="institusi">School/University</label>
            <input wire:model="institusi" placeholder="Harvard University" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="pendidikan">degree</label>
            <input wire:model="pendidikan" placeholder="BSc, MSc, PhD" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="jurusan">Field of Study</label>
            <input wire:model="jurusan" placeholder="Computer of Science" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="tahun_lulus">Graduation Year</label>
            <input wire:model="tahun_lulus" placeholder="2025" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="flex justify-end gap-2">
            <button wire:click="cancelForm" class="px-3 py-1.5 text-xl border bg-white rounded-md cursor-pointer">
                Cancel
            </button>
            <button wire:click="save" class="px-3 py-1.5 text-xl border text-white bg-blue-500 rounded-md cursor-pointer">
                Save Education
            </button>
        </div>

    </div>
    
</div>
