@extends('doctor.DoctorBase')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Welcome, Dr. John Doe</h1>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Appointments Today</h2>
            <p class="text-3xl font-bold text-blue-600">10</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Total Patients</h2>
            <p class="text-3xl font-bold text-blue-600">150</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Messages</h2>
            <p class="text-3xl font-bold text-blue-600">5</p>
        </div>
    </div>
</div>


    
@endsection