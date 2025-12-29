<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    // mass assignment
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email'
    ];

    // relasi ke EmployeeJob
    public function job(): HasOne
    {
        return $this->hasOne(EmployeeJob::class);
    }

    // relasi ke EmployeeEducation
    public function educations(): HasMany
    {
        return $this->hasMany(EmployeeEducation::class);
    }
}
