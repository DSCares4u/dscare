@extends('admin.adminBase')
@section('content')
    <div class="container py-2 mt-5">
        <div class="bg-white p-4 shadow-md rounded-md mb-4">
            <h2 class="text-lg font-semibold">Booked Plan Information</h2>
            <table class="min-w-full" id="doctorDetails">
                <tbody >
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Patient's Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="patientName"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Guardian's name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="guardianName"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Mobile No.</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="mobile"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Email</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="email"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Gender</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="gender"></td>
                    </tr>                   
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Plan Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="planName"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Plan Cost</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="planCost"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Patient's Address</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="address"></td>
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
                    url: `/api/admin/manage-book-plan/view/{{ request()->segment(4) }}`,
                    success: function(response) {
                        let name = response.data.plan_id.name;
                        // alert(name);
                        $("#planId").text(response.data.id);
                        $("#patientName").text(response.data.patient_name);
                        $("#guardianName").text(response.data.guardian_name);
                        $("#mobile").text(response.data.mobile);
                        $("#email").text(response.data.email);
                        $("#gender").text(response.data.gender);
                        $("#address").text(response.data.address);
                        $("#planName").text(response.data.plan.name);
                        // $("#planCost").text(response.data.plan_id.);
                    },                    
                });
            }
            callingDoctor();
        });
    </script>
@endsection
