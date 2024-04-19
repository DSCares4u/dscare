@extends('admin.adminBase')
@section('content')
    <div class="container py-2 mt-5">
        <div class="bg-white p-4 shadow-md rounded-md mb-4">
            <h2 class="text-lg font-semibold">Appointment's Information</h2>
            <table class="min-w-full" id="doctorDetails">
                <tbody >
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Patient Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="name"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Contact No.</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="mobile"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Age</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="age"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Gender</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="gender"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Address</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="address"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Appointment Date</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="appointment_date"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Appointment Type</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="appointment_type"></td>
                    </tr>                   
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Doctor Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctor_name"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Payment Status</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="payment_status"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to fetch and display doctor
            let callingAppointment = () => {
                $.ajax({
                    type: "GET",
                    url: `/api/admin/manage-appointment/view/{{ request()->segment(4) }}`,
                    success: function(response) {                      
                        $("#planId").text(response.data.id);
                        $("#name").text(response.data.name);
                        $("#mobile").text(response.data.mobile);
                        $("#age").text(response.data.age);
                        $("#gender").text(response.data.gender);
                        $("#appointment_type").text(response.data.appointment_type);
                        $("#doctor_name").text(response.data.doctor_id);
                        $("#appointment_date").text(response.data.appointment_date);
                        $("#payment_status").text(response.data.payment_status);
                        $("#address").text(response.data.address);
                    },                    
                });
            }
            callingAppointment();
        });
    </script>
@endsection
