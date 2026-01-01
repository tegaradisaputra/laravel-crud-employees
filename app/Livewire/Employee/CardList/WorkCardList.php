<?php

namespace App\Livewire\Employee\CardList;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeJob;

class WorkCardList extends Component
{
    public Employee $employee;

    public bool $showCreateForm = false;

    public ?int $editingJobId = null;

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
        $this->employee->refresh();
        $this->hideForm();
    }


    public function edit($jobId)
    {
        $this->editingJobId = $jobId;
        $this->showCreateForm = true;
    }



    public function delete($employeeJob)
    {
        EmployeeJob::where('id', $employeeJob)->delete();
        $this->employee->refresh();
    }


    public function render()
    {
        return view('livewire.employee.card-list.work-card-list', [
            'work' => $this->employee->job
        ]);
    }
}
