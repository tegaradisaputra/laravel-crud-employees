<div>
    {{-- Stop trying to control. --}}

    <div class="flex flex-col w-full">

        <div class="flex justify-end">
            <button wire:click="cancelForm" class="text-xl text-gray-500 hover:text-gray-900 cursor-pointer">
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <div class="flex flex-col mb-6">
                <h3 class="text-2xl font-bold">Add Work</h3>
                <p class="text-sm text-gray-500">Add details about an work of employee.</p>
        </div>

        <div class="mb-4">
            <label for="departemen">Departement</label>
            <input wire:model="departemen" placeholder="Engineering" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="tanggal_masuk">Start Date</label>
            <input wire:model="tanggal_masuk" placeholder="Januray 01, 2025" type="date" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="jabatan">Jabatan</label>
            <input wire:model="jabatan" placeholder="Developer  " class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="mb-4">
            <label for="status_karyawan">Status Karyawan</label>
            <input wire:model="status_karyawan" placeholder="Tetap" class="w-full border outline-none border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded px-3 py-2 shadow-md">
        </div>

        <div class="flex justify-end gap-2">
            <button wire:click="cancelForm" class="px-3 py-1.5 text-xl border bg-white rounded-md cursor-pointer">
                Cancel
            </button>

            <button wire:click="save" class="px-3 py-1.5 text-xl border text-white bg-blue-500 rounded-md cursor-pointer">
                Save Work
            </button>
        </div>

    </div>
</div>
