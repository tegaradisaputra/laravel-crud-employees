<?php

namespace App\Livewire\Education;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeEducation;

class EducationForm extends Component
{
    public Employee $employee;

    public ?int $educationId = null;

    public $pendidikan;
    public $jurusan;
    public $institusi;
    public $tahun_lulus;

    public function mount(Employee $employee, ?EmployeeEducation $education = null)
    {
        $this->employee = $employee;

        if ($education) {
            $this->educationId = $education->id;
            $this->pendidikan = $education->pendidikan;
            $this->jurusan = $education->jurusan;
            $this->institusi = $education->institusi;
            $this->tahun_lulus = $education->tahun_lulus;
        }
    }


    public function save()
    {
        $this->validate([
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'institusi' => 'required',
            'tahun_lulus' => 'required|numeric',
        ]);

        if($this->educationId)
        {
            EmployeeEducation::findOrFail($this->educationId)->update([
                'employee_id' => $this->employee->id,
                'pendidikan' => $this->pendidikan,
                'jurusan' => $this->jurusan,
                'institusi' => $this->institusi,
                'tahun_lulus' => $this->tahun_lulus,
            ]);
        } else
        {
            EmployeeEducation::create([
                'employee_id' => $this->employee->id,
                'pendidikan' => $this->pendidikan,
                'jurusan' => $this->jurusan,
                'institusi' => $this->institusi,
                'tahun_lulus' => $this->tahun_lulus,
            ]);
        }

        $this->resetForm();

        $this->dispatch('educationCreated');
    }


    public function resetForm()
    {
        $this->reset([
            'educationId',
            'pendidikan',
            'jurusan',
            'institusi',
            'tahun_lulus',
        ]);
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
