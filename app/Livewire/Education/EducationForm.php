<?php

namespace App\Livewire\Education;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeEducation;

class EducationForm extends Component
{
    public Employee $employee;

    public $pendidikan;
    public $jurusan;
    public $institusi;
    public $tahun_lulus;

    public function save()
    {
        $this->validate([
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'institusi' => 'required',
            'tahun_lulus' => 'required|numeric',
        ]);

        EmployeeEducation::create([
            'employee_id' => $this->employee->id,
            'pendidikan' => $this->pendidikan,
            'jurusan' => $this->jurusan,
            'institusi' => $this->institusi,
            'tahun_lulus' => $this->tahun_lulus,
        ]);

        $this->dispatch('educationCreated');
    }


    public function cancelForm()
    {
        $this->dispatch('closeEducationForm');
    }

    public function render()
    {
        return view('livewire.education.education-form');
    }
}
