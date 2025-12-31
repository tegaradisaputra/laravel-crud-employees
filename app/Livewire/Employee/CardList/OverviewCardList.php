<?php

namespace App\Livewire\Employee\CardList;

use Livewire\Component;
use App\Models\Employee;

class OverviewCardList extends Component
{
    public Employee $employee;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }
    

    public function render()
    {
        return view('livewire.employee.card-list.overview-card-list');
    }
}
