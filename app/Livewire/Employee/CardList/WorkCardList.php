<?php

namespace App\Livewire\Employee\CardList;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeJob;

class WorkCardList extends Component
{
    public Employee $employee;

    public bool $showCreateForm = false;

    protected $listeners = [
        'workCreated' => 'onWorkCreated',
        'closeWorkForm' => 'hideForm'
    ];

    public $jabatan;
    public $departemen;
    public $status_karyawan;
    public $tanggal_masuk;

    public function showForm()
    {
        $this->showCreateForm = true;
    }

    public function hideForm()
    {
        $this->showCreateForm = false;
    }

    public function onWorkCreated()
    {
        $this->hideForm();
    }

    public function render()
    {
        return view('livewire.employee.card-list.work-card-list', [
            'works' => $this->employee->job
        ]);
    }
}
