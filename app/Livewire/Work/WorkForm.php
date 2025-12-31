<?php

namespace App\Livewire\Work;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeJob;

class WorkForm extends Component
{
    public Employee $employee;

    public $jabatan;
    public $departemen;
    public $status_karyawan;
    public $tanggal_masuk;

    public function save()
    {
        $this->validate([
            'jabatan' => 'required',
            'departemen' => 'required',
            'status_karyawan' => 'required',
            'tanggal_masuk' => 'required|numeric',
        ]);

        EmployeeEducation::create([
            'employee_id' => $this->employee->id,
            'jabatan' => $this->jabatab,
            'departemen' => $this->departemen,
            'status_karyawan' => $this->status_karyawan,
            'tanggal_masuk' => $this->tanggal_masuk,
        ]);

        $this->dispatch('workCreated');
    }

    public function cancelForm()
    {
        $this->dispatch('closeWorkForm');
    }  

    public function render()
    {
        return view('livewire.work.work-form');
    }
}
