@extends('admin.adminBase')
@section('content')
    <div class="container py-2 mt-5">
        <div class="bg-white p-4 shadow-md rounded-md mb-4">
            <h2 class="text-lg font-semibold">Doctor's Information</h2>
            <table class="min-w-full" id="doctorDetails">
                <tbody >
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorName"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Mobile</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorMobile"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Email</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorEmail"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Age</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorAge"></td>
                    </tr>                    
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Gender</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorGender"></td>
                    </tr>                    
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Specialization</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorSpecialization"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Experience</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorExp"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Qualification</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorQualification"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Visiting Charge</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorVisiting"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Online Charge</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorOnline"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Appointment Day & Time</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorAppointment"></td>
                    </tr>                    
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Address</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="doctorAddress"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to fetch and display doctor
            let callingDoctor = () => {
                $.ajax({
                    type: "GET",
                    url: `/api/admin/manage-doctor/view/{{ request()->segment(4) }}`,
                    success: function(response) {
                        $("#doctorId").text(response.data.id);
                        $("#doctorName").text(response.data.name);
                        $("#doctorMobile").text(response.data.mobile);
                        $("#doctorEmail").text(response.data.email);
                        $("#doctorAge").text(response.data.age);
                        $("#doctorGender").text(response.data.gender);
                        $("#doctorSpecialization").text(response.data.specialization);
                        $("#doctorExp").text(response.data.experience);
                        $("#doctorQualification").text(response.data.qualification);
                        $("#doctorVisiting").text(response.data.visiting_charge);
                        $("#doctorOnline").text(response.data.online_charge);
                        $("#doctorAppointment").text(response.data.preferred_day);
                        $("#doctorAddress").text(response.data.landmark + ',' +response.data.city + ',' + response.data.state);
                    },                    
                });
            }
            callingDoctor();
        });
    </script>
@endsection
