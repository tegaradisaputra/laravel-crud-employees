<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    protected $table = 'employee_educations';
        
    // mass assignment
    protected $fillable = [
        'employee_id',
        'pendidikan',
        'jurusan',
        'institusi',
        'tahun_lulus'
    ];

    // relasi ke Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
