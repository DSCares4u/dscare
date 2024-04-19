@extends('home.base')
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
                                <option selected value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-2 mb-4">
                        <div class=" w-1/2">
                            <label for="appointment_date" class="block text-sm font-medium text-gray-700">Date Of
                                Appointment</label>
                            <select name="appointment_date" id="appointment_date"
                                class="border border-gray-300  shadow-sm  w-full rounded-md mt-1">
                                <option value="{{ \Carbon\Carbon::now()->toDateString() }}" selected>Today <p
                                        id="isAvailable"></p>
                                </option>
                                @for ($i = 1; $i <= 3; $i++)
                                    <option value="{{ \Carbon\Carbon::now()->addDays($i)->toDateString() }}">
                                        {{ \Carbon\Carbon::now()->addDays($i)->format('D d M') }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="flex mb-4 gap-3">
                        <div class="flex items-center gap-4 me-4">
                            <div id="visitingCharge"></div>
                            <div id="onlineCharge"></div>
                        </div>
                    </div>
                    <div class="flex mb-4 gap-3">
                        <div class="flex items-center gap-4 me-4">
                            <div id="preferred_day">
                                <!-- calling preferred day and time data  -->
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" id="address" rows="3"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            required>
                    </textarea>
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

         // Function to update fees based on appointment type
         function updateFees(appointmentType) {
                if (appointmentType === 'video') {
                    $('#visitingCharge').empty();
                    $('#onlineCharge').html('<p>Online Consultation Fee: $XX</p>'); // Replace $XX with actual fee
                } else if (appointmentType === 'clinic') {
                    $('#onlineCharge').empty();
                    $('#visitingCharge').html('<p>Visiting Clinic Fee: $XX</p>'); // Replace $XX with actual fee
                }
            }

    //Book New service

    $("#bookAppointment").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: `/api/appointment/book-now/{{ request()->segment(3) }}`,
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#bookAppointment").trigger("reset");
                window.open("/appointment", "_self");
            }
        })
    })

      // Event listener for doctor selection
      $('#callingDoctors').change(function() {
                let selectedDoctor = $(this).children("option:selected");
                let visitingFee = selectedDoctor.data('visiting-fee');
                let onlineFee = selectedDoctor.data('online-fee');
                let preferredDay = selectedDoctor.data('day-time-doctor');

                // Update the fee display
                $('#visitingCharge').html(
                    `<input id="inline-radio" type="radio" value="clinic" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visiting Charge Rs. ${visitingFee}</label>`
                    );

                $('#onlineCharge').html(
                    `<input id="inline-radio" type="radio" value="video" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Video Consult Rs. ${onlineFee}</label>`
                    );

                // Convert the preferred day and time JSON string to an object
                // preferredDay = JSON.parse(preferredDay);
                alert(preferredDay);
            });


            // Event listener for appointment type selection
            $('input[name="inline-radio-group"]').change(function() {
                let appointmentType = $(this).val();
                updateFees(appointmentType);
            });
})
</script>


@endsection
