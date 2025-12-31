<?php

namespace App\Livewire\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeEducation;

class ActivityPanel extends Component
{
    public $tab = 'overview';
    public Employee $employee;

    public function setTab($tab)
    {
        $this->tab = $tab;
    }
    
    public function mount(Employee $employee)
    {
        $this->$employee = $employee;
    }
    

    public function render()
    {
        return view('livewire.employee.activity-panel');
    }
}
