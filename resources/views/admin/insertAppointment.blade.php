@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-8">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Book New Appointment</h3>
            </div>
            <div class="p-4">
                <form id="bookAppointment">
                    <div class="flex gap-2 mb-4">
                        <div class="w-1/2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Patient's Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. abc kumar">
                        </div>
                        <div class=" w-1/2">
                            <label for="mobile" class="block text-sm font-medium text-gray-700">Contact No.</label>
                            <input type="tel" id="mobile" name="mobile"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 1234567890">
                        </div>
                    </div>
                    <div class="flex gap-2 mb-4">

                        <div class=" w-1/2">
                            <label for="doctor" class="block text-sm font-medium text-gray-700">Doctor</label>
                            <select name="doctor_id" id="callingDoctors"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                                <option value="">Select Doctor / Hospital</option>
                            </select>
                        </div>
                        <div class=" w-1/2">
                            <label for="appointment_date" class="block text-sm font-medium text-gray-700">Date Of
                                Appointment</label>
                            <input type="date" id="appointment_date" name="appointment_date"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                    </div>
                    <div class="flex gap-2 mb-4">
                        <div class=" w-1/2">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input type="number" id="age" name="age"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required placeholder="e.g. 45">
                        </div>
                        <div class=" w-1/2">
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" id="gender"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" id="address" rows="3"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required></textarea>
                    </div>

                    <div class="mb-2">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Book
                            Appointment Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {

    // calling Doctor
    $.ajax({
            type: "GET",
            url: "{{ route('doctor.index') }}",
            success: function(response) {
                let select = $("#callingDoctors");
                select.empty();
                response.data.forEach((doctor) => {
                    select.append(`
                    <option value="${doctor.id}">${doctor.name}</option>
                    `);
                });
            }
        });


    //insert new Appointment
    $("#bookAppointment").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ route('appointment.store') }}",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#bookAppointment").trigger("reset");

                window.open("/admin/manage-appointment", "_self");

            }
        })
    })
})
</script>

@endsection