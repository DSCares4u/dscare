@extends('admin.adminBase')
@section('content')
    <div class="container py-2 mt-5">
        <div class="bg-white p-4 shadow-md rounded-md mb-4">
            <h2 class="text-lg font-semibold">Booked Service Information</h2>
            <table class="min-w-full" id="doctorDetails">
                <tbody >
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Customer Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="name"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Contact No.</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="mobile"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Email</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="email"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Service Name</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="serviceName"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Address</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="address"></td>
                    </tr>
                    <tr>
                        <th class="border-b border-gray-200 px-4 py-2">Message</th>
                        <td class="border-b border-gray-200 px-4 py-2" id="message"></td>
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
                    url: `/api/admin/manage-book-service/view/{{ request()->segment(4) }}`,
                    success: function(response) {                      
                        $("#planId").text(response.data.id);
                        $("#name").text(response.data.name);
                        $("#mobile").text(response.data.mobile);
                        $("#address").text(response.data.address);
                        $("#message").text(response.data.message);
                        $("#email").text(response.data.email);
                        $("#serviceName").val(response.data.service_id);
                    },                    
                });
            }
                 // calling Services
        $.ajax({
            type: "GET",
            url: "{{ route('service.index') }}",
            success: function(response) {
                let select = $("#serviceName");
                select.empty();
                response.data.forEach((service) => {
                    select.append(`
                    <option value="${service.id}">${service.name}</option>
                    `);
                });
            }
        });
            callingDoctor();
        });
    </script>
@endsection
