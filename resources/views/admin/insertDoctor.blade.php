@extends('admin.adminBase')
@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
            <div class="bg-white shadow-lg rounded-lg">
                <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                    <h3 class="text-xl font-semibold">Add New Doctor</h3>
                </div>
                <div class="p-4">
                    <form id="addDoctor">
                        <div class="flex gap-2 mb-4">
                            <div class="w-1/2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Doctor's Name</label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Dr. abc kumar">
                            </div>
                            <div class="w-1/2">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Doctor's
                                    Image</label>
                                <input type="file" id="image" name="image"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 "
                                    required>
                            </div>
                        </div>
                        <div class="flex gap-2 mb-4">
                            <div class=" w-1/2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. abckumar@gmail.com">
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
                            <div class=" w-1/3">
                                <label for="specialization"
                                    class="block text-sm font-medium text-gray-700">Specialization</label>
                                <input type="text" id="specialization" name="specialization"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Dentist">
                            </div>
                            <div class=" w-1/3">
                                <label for="experience" class="block text-sm font-medium text-gray-700">Experience</label>
                                <input type="text" id="experience" name="experience"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 5+ Years">
                            </div>
                            <div class=" w-1/3">
                                <label for="qualification"
                                    class="block text-sm font-medium text-gray-700">Qualification</label>
                                <input type="text" id="qualification" name="qualification"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. MD Medicine">
                            </div>
                        </div>
                        <div class="flex mb-4 gap-2">
                            <div class=" w-1/2">
                                <label for="visiting_charge" class="block text-sm font-medium text-gray-700">Visiting
                                    Charge</label>
                                <input type="number" id="visiting_charge" name="visiting_charge"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Rs. 500">
                            </div>
                            <div class="w-1/2">
                                <label for="online_charge" class="block text-sm font-medium text-gray-700">Online Checkup
                                    Charge</label>
                                <input type="number" id="online_charge" name="online_charge"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Rs.400">
                            </div>
                        </div>
                        <div class="mb-4 flex gap-2">
                            <div class=" w-1/3">
                                <label for="landmark" class="block text-sm font-medium text-gray-700">Landmark</label>
                                <input type="text" id="landmark" name="landmark"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. near abc road">
                            </div>
                            <div class=" w-1/3">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" id="city" name="city"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Purnea">
                            </div>
                            <div class=" w-1/3">
                                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                                <input type="text" id="state" name="state"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Bihar">
                            </div>
                        </div>

                        <!-- Day Time Work  -->

                        <!-- HTML for preferred day and time selection -->

                        <div class="mb-4">
                            <label for="day" class="text-xl flex-1 font-medium text-gray-700">Preferred Day and Time</label>
                            <div class="mb-3">
                                @php
                                    $days = [
                                        'Monday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thursday',
                                        'Friday',
                                        'Saturday',
                                        'Sunday'
                                    ];
                                @endphp
                                @foreach ($days as $day)
                                    <div class="flex items-center gap-12">
                                        <div class="flex items-center min-w-[4rem]">
                                            <input id="{{ $day }}" name="preferred_day[{{ $day }}][day]"
                                                type="checkbox" value="{{ $day }}"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="{{ $day }}"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $day }}</label>
                                        </div>
                                        <div class="flex">From :
                                            <label for="start-time-{{ $day }}" class="sr-only">Start
                                                time:</label>
                                            <input type="time" id="start-time-{{ $day }}"
                                                name="preferred_day[{{ $day }}][start_time]"
                                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="10:00" required>
                                                To: 
                                            <label for="end-time-{{ $day }}" class="sr-only">End time:</label>
                                            <input type="time" id="end-time-{{ $day }}" name="preferred_day[{{ $day }}][end_time]" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="18:00" required>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        

                        <div class="mb-2">
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                                New Doctor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
        $("#addDoctor").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ route('doctor.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    swal("Success", response.message, "success");
                    $("#addDoctor").trigger("reset");
                    window.open("/admin/manage-doctor", "_self");
                }
            });
        });
    });
</script>
@endsection
