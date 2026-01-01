<?php

namespace App\Livewire\Employee\CardList;

use Livewire\Component;
use App\Models\EmployeeEducation;
use App\Models\Employee;


class EducationCardList extends Component
{

    public Employee $employee;

    public bool $showCreateForm = false;

    public ?int $editingEducationId = null;

    protected $listeners = [
        'educationCreated' => 'onEducationCreated',
        'closeEducationForm' => 'hideForm',
    ];

    public $pendidikan;
    public $jurusan;
    public $institusi;
    public $tahun_lulus;

    // menampilkan form create
    public function showForm()
    {
        $this->showCreateForm = true;
    }


    public function hideForm()
    {
        $this->showCreateForm = false;
    }
    


    public function onEducationCreated()
    {
        $this->hideForm();
    }


    public function edit($educationId)
    {
        $this->editingEducationId = $educationId;
        $this->showCreateForm = true;
    }


    public function delete($educationId)
    {
        EmployeeEducation::where('id', $educationId)->delete();
        $this->employee->refresh();
    }



    public function render()
    {
        return view('livewire.employee.card-list.education-card-list', [
            'employeeEducations' => $this->employee->educations
        ]);
    }
}
