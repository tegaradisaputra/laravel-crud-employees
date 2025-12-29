<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeJob;
use App\Models\EmployeeEducation;
use Illuminate\Validation\Rule;
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
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form untuk menambah data karyawan
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nik' => 'required|unique:employees,nik',
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',   
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required',
        ]);

        // gabung nama depan dan belakang menjadi nama lengkap
        $validatedData['nama_lengkap'] = $validatedData['nama_depan'] . ' ' . $validatedData['nama_belakang'];
        unset($validatedData['nama_depan'], $validatedData['nama_belakang']);

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
        // mengambil data karyawan berdasarkan id

        // menampilkan detail untuk data karyawan
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {

        // menampilkan detail untuk data karyawan
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required',
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
