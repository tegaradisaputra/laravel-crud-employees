<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- iconion icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- tailwindcss vite integration --}}
    @vite('resources/css/app.css')
</head>
<body>

    {{-- header start --}}
    <header class="flex w-full px-12 items-center justify-between h-16 bg-white border-b border-gray-200">
        <div class="flex items-center gap-2 ">
            <ion-icon class="bg-blue-100 rounded-md text-blue-600 p-2 text-xl" name="people-outline"></ion-icon>
            <a href="/employee" class="text-2xl font-semibold text-gray-900">Employee Manager</a>

            <a href="{{ route('employee.index') }}" class="text-lg font-medium ml-5 {{ request()->routeIs('employee.index') ? 'text-gray-900 hover:text-gray-600' : 'text-gray-600 hover:text-gray-900' }}">Dashboard</a>

            <a href="{{ route('employee.create') }}" class="font-medium {{ request()->routeIs('employee.create') ? 'text-gray-900 hover:text-gray-600' : 'text-gray-600 hover:text-gray-900' }}">Add Employee</a>
        </div>

        <a href="{{ route('employee.create') }}" class="px-3 py-1 bg-blue-600 hover:bg-blue-500 rounded-md flex items-center">
            <ion-icon name="add-circle-outline" class="text-white"></ion-icon>
            <span class="text-white ml-1">New Hire</span>
        </a>
    </header>
    {{-- header end --}}