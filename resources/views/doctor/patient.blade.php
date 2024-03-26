@extends('doctor.DoctorBase')

@section('content')

<!-- <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Patient History</h1>

    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Patient Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="text-gray-600"><span class="font-semibold">Name:</span> John Doe</p>
                <p class="text-gray-600"><span class="font-semibold">Date of Birth:</span> January 1, 1980</p>
                <p class="text-gray-600"><span class="font-semibold">Gender:</span> Male</p>
            </div>
            <div>
                <p class="text-gray-600"><span class="font-semibold">Phone:</span> +1234567890</p>
                <p class="text-gray-600"><span class="font-semibold">Email:</span> john.doe@example.com</p>
                <p class="text-gray-600"><span class="font-semibold">Address:</span> 123 Main St, City, Country</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Medical History</h2>
        <ul>
            <li class="text-gray-600"><span class="font-semibold">Date:</span> January 10, 2023</li>
            <li class="text-gray-600"><span class="font-semibold">Reason for Visit:</span> Flu Symptoms</li>
            <li class="text-gray-600"><span class="font-semibold">Diagnosis:</span> Influenza</li>
            <li class="text-gray-600"><span class="font-semibold">Medications Prescribed:</span> Ibuprofen, Rest</li>
            <li class="text-gray-600"><span class="font-semibold">Notes:</span> Advised to rest for 3 days</li>
        </ul>
        <hr class="my-4 border-gray-200">
        <ul>
            <li class="text-gray-600"><span class="font-semibold">Date:</span> April 5, 2022</li>
            <li class="text-gray-600"><span class="font-semibold">Reason for Visit:</span> Annual Checkup</li>
            <li class="text-gray-600"><span class="font-semibold">Diagnosis:</span> Normal</li>
            <li class="text-gray-600"><span class="font-semibold">Medications Prescribed:</span> None</li>
            <li class="text-gray-600"><span class="font-semibold">Notes:</span> Patient is in good health</li>
        </ul>
    </div>
</div> -->

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Patient History</h1>

    <!-- Patient Information -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Patient Information</h2>
        <!-- Placeholder for patient information -->
        <p class="text-gray-600"><span class="font-semibold">Name:</span> John Doe</p>
        <p class="text-gray-600"><span class="font-semibold">Date of Birth:</span> January 1, 1980</p>
        <p class="text-gray-600"><span class="font-semibold">Gender:</span> Male</p>
        <p class="text-gray-600"><span class="font-semibold">Phone:</span> +1234567890</p>
        <p class="text-gray-600"><span class="font-semibold">Email:</span> john.doe@example.com</p>
        <p class="text-gray-600"><span class="font-semibold">Address:</span> 123 Main St, City, Country</p>
    </div>

    <!-- Medical History -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Medical History</h2>
        <!-- Placeholder for medical history -->
        <ul>
            <li class="text-gray-600"><span class="font-semibold">Date:</span> January 10, 2023</li>
            <li class="text-gray-600"><span class="font-semibold">Reason for Visit:</span> Flu Symptoms</li>
            <li class="text-gray-600"><span class="font-semibold">Diagnosis:</span> Influenza</li>
            <li class="text-gray-600"><span class="font-semibold">Medications Prescribed:</span> Ibuprofen, Rest</li>
            <li class="text-gray-600"><span class="font-semibold">Notes:</span> Advised to rest for 3 days</li>
        </ul>
        <!-- Add more medical history entries as needed -->
    </div>
</div>
@endsection