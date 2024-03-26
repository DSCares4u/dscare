@extends('doctor.DoctorBase')

@section('content')



<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Doctor Appointment Dashboard</h1>

    <!-- Appointment Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">John Doe</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 10:00 AM - 11:00 AM</p>
            <p class="text-gray-600">Reason: Regular Checkup</p>
            <div class="mt-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</button>
                <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Cancel</button>
            </div>
        </div>

        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Jane Smith</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 11:30 AM - 12:30 PM</p>
            <p class="text-gray-600">Reason: Flu Symptoms</p>
            <div class="mt-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</button>
                <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Cancel</button>
            </div>
        </div>

        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Alice Johnson</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 2:00 PM - 3:00 PM</p>
            <p class="text-gray-600">Reason: Follow-up Consultation</p>
            <div class="mt-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Edit</button>
                <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Upcoming Appointments</h1>

    <!-- Appointment Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">John Doe</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 10:00 AM - 11:00 AM</p>
            <p class="text-gray-600">Reason: Regular Checkup</p>
        </div>

        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Jane Smith</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 11:30 AM - 12:30 PM</p>
            <p class="text-gray-600">Reason: Flu Symptoms</p>
        </div>

        <!-- Sample Appointment Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-2">Alice Johnson</h2>
            <p class="text-gray-600 mb-4">Appointment Time: 2:00 PM - 3:00 PM</p>
            <p class="text-gray-600">Reason: Follow-up Consultation</p>
        </div>
    </div>
</div>

    
@endsection