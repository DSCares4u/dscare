@extends('doctor.DoctorBase')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Doctor Profile</h1>

    <!-- Doctor Information -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
        <p class="text-gray-600"><span class="font-semibold">Name:</span> Dr. John Doe</p>
        <p class="text-gray-600"><span class="font-semibold">Specialization:</span> Cardiology</p>
        <p class="text-gray-600"><span class="font-semibold">Experience:</span> 10 years</p>
        <p class="text-gray-600"><span class="font-semibold">Education:</span> MD, University Name</p>
        <p class="text-gray-600"><span class="font-semibold">Phone:</span> +1234567890</p>
        <p class="text-gray-600"><span class="font-semibold">Email:</span> john.doe@example.com</p>
        <p class="text-gray-600"><span class="font-semibold">Address:</span> 123 Main St, City, Country</p>
    </div>

    <!-- Professional Details -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Professional Details</h2>
        <p class="text-gray-600"><span class="font-semibold">Hospital/Clinic:</span> XYZ Hospital</p>
        <p class="text-gray-600"><span class="font-semibold">Department:</span> Cardiology</p>
        <p class="text-gray-600"><span class="font-semibold">Working Hours:</span> Mon-Fri, 9:00 AM - 5:00 PM</p>
        <p class="text-gray-600"><span class="font-semibold">Consultation Fee:</span> $100</p>
        <p class="text-gray-600"><span class="font-semibold">Languages Spoken:</span> English, Spanish</p>
        <p class="text-gray-600"><span class="font-semibold">Achievements:</span> Awarded Best Cardiologist 2020</p>
    </div>
</div>

@endsection