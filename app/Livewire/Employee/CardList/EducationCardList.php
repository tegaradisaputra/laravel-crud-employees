<?php

namespace App\Livewire\Employee\CardList;

use Livewire\Component;
use App\Models\EmployeeEducations;
use App\Models\Employee;


class EducationCardList extends Component
{

    public Employee $employee;

    public bool $showCreateForm = false;

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
        // Livewire auto re-render → list ke-refresh
    }



    public function render()
    {
        return view('livewire.employee.card-list.education-card-list', [
            'employeeEducations' => $this->employee->educations
        ]);
    }
}
