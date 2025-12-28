<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeJob;
use App\Models\EmployeeEducation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil semua data karyawan dari database
        $employees = Employee::all();

        // mengirim data karyawan ke view index
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form untuk menambah data karyawan
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email|unique:employees,email',
        ]);

        // simpan data karyawan ke database
        $employee = Employee::create($validatedData);

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('employee.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        // mengambil semua data job dan education dari database
        $employeeJobs = EmployeeJob::all();
        $employeeEducations = EmployeeEducation::all();

        // menampilkan detail untuk data karyawan
        return view('employee.show', compact('employee', 'employeeJobs', 'employeeEducations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        // mengambil semua data job dan education dari database
        $employeeJobs = EmployeeJob::all();
        $employeeEducations = EmployeeEducation::all();

        // menampilkan detail untuk data karyawan
        return view('employee.edit', compact('employee', 'employeeJobs', 'employeeEducations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // validasi data yang diterima dari form
        $validatedData = $request->validated([
            'nik' => 'required|unique:employees,nik',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email|unique:employees,email',
        ]);

        // simpan data karyawan ke database
        $employee->update($validatedData);

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('employee.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        // hapus data karyawan dari database
        $employee->delete();

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('employee.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
