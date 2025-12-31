<div>
    {{-- The whole world belongs to you. --}}

    <div  class="flex gap-2 mb-6">
        <button wire:click="setTab('overview')" 
        @class([
            'px-6 py-1 bg-gray-50/50 shadow-md rounded-md text-sm text-gray-900 transition duration-50' =>  $tab === 'overview',
            'px-6 py-1 text-gray-500 text-sm transition duration-50' => $tab !== 'overview'
        ])
        >Overview</button>
        <button wire:click="setTab('work')"
        @class([
            'px-6 py-1 bg-gray-50/50 shadow-md rounded-md text-sm text-gray-900 transition duration-50' =>  $tab === 'work',
            'px-6 py-1 text-gray-500 text-sm transition duration-50'  => $tab !== 'work'
        ])
        >Work</button>
        <button wire:click="setTab('education')"
        @class([
            'px-6 py-1 bg-gray-50/50 shadow-md rounded-md text-sm text-gray-900 transition duration-50' =>  $tab === 'education',
            'px-6 py-1 text-gray-500 text-sm transition duration-50'  => $tab !== 'education'
        ])
        >Education</button>
    </div>

    @if ($tab == 'overview')
    <livewire:employee.card-list.overview-card-list  
    :employee="$employee"
    />

    @elseif($tab == 'work')
    <livewire:employee.card-list.work-card-list />

    @elseif($tab == 'education')
    <livewire:employee.card-list.education-card-list 
    :employee="$employee"
    />
    @endif


</div>
