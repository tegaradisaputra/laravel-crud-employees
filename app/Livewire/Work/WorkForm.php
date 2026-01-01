<?php

namespace App\Livewire\Work;

use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeeJob;

class WorkForm extends Component
{
    public Employee $employee;

    public ?int $jobId = null;

    public $jabatan;
    public $departemen;
    public $status_karyawan;
    public $tanggal_masuk;

    public function mount(Employee $employee, ?EmployeeJob $job = null)
    {
        $this->employee = $employee;

        if ($job) {
            $this->jobId = $job->id;
            $this->jabatan = $job->jabatan;
            $this->departemen = $job->departemen;
            $this->status_karyawan = $job->status_karyawan;
            $this->tanggal_masuk = $job->tanggal_masuk;
        }
    }


    public function save()
    {
        $this->validate([
            'jabatan' => 'required',
            'departemen' => 'required',
            'status_karyawan' => 'required',
            'tanggal_masuk' => 'required|date',
        ]);

        if ($this->jobId) {
            // UPDATE
            EmployeeJob::findOrFail($this->jobId)->update([
                'jabatan' => $this->jabatan,
                'departemen' => $this->departemen,
                'status_karyawan' => $this->status_karyawan,
                'tanggal_masuk' => $this->tanggal_masuk,
            ]);
        } else {
            // CREATE
            EmployeeJob::create([
                'employee_id' => $this->employee->id,
                'jabatan' => $this->jabatan,
                'departemen' => $this->departemen,
                'status_karyawan' => $this->status_karyawan,
                'tanggal_masuk' => $this->tanggal_masuk,
            ]);
        }

        $this->resetForm();

        $this->dispatch('workCreated');
    }


    public function resetForm()
    {
        $this->reset([
            'jobId',
            'jabatan',
            'departemen',
            'status_karyawan',
            'tanggal_masuk',
        ]);
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
