<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeEducation;

class EmployeeEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil semua data dari EmployeeEducatuon
        $employeeEducations = EmployeeEducation::all();

        return view('employees.show', compact('employeeEducations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeEducation $employeeEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeEducation $employeeEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeEducation $employeeEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeEducation $employeeEducation)
    {
        //
    }
}
