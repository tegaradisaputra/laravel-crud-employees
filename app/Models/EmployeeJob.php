<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeJob extends Model
{
    // mass assignment
    protected $fillable = [
    'employee_id',
    'jabatan',
    'departemen',
    'status_karyawan',
    'tanggal_masuk'
];

    // relasi ke Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
