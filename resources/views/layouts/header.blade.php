<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Employee Management')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-emerald-600">EmployeeSys</h1>
        <nav class="flex gap-6 text-sm font-medium">
            <a href="{{ route('employee.index') }}" class="hover:text-emerald-600">Employees</a>
            <a href="#" class="hover:text-emerald-600">Jobs</a>
            <a href="#" class="hover:text-emerald-600">Education</a>
        </nav>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-8">