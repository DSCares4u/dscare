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
                            <label for="day" class="text-xl flex-1 font-medium text-gray-700">Preferred Day and
                                Time</label>
                            <div class="mb-3">
                                @php
                                    $days = [
                                        'Monday' => 'monday',
                                        'Tuesday' => 'tuesday',
                                        'Wednesday' => 'wednesday',
                                        'Thursday' => 'thursday',
                                        'Friday' => 'friday',
                                        'Saturday' => 'saturday',
                                        'Sunday' => 'sunday',
                                    ];
                                @endphp
                                @foreach ($days as $day => $dayKey)
                                    <div class="flex items-center gap-5">
                                        <div class="flex items-center min-w-[4rem]">
                                            <input id="{{ $dayKey }}" name="preferred_day[{{ $day }}][day]"
                                                type="checkbox" value="{{ $dayKey }}"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="{{ $dayKey }}"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $day }}</label>
                                        </div>
                                        <div class="flex">
                                            <label for="start-time-{{ $dayKey }}" class="sr-only">Start
                                                time:</label>
                                            <input type="time" id="start-time-{{ $dayKey }}"
                                                name="preferred_day[{{ $day }}][start_time]"
                                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                value="10:00" required>
                                            <label for="end-time-{{ $dayKey }}" class="sr-only">End time:</label>
                                            <input type="time" id="end-time-{{ $dayKey }}"
                                                name="preferred_day[{{ $day }}][end_time]"
                                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                value="18:00" required>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- <div class="flex flex-1 gap-3 flex-col md:flex-row">
                                <div class="grid lg:flex-[3] lg:grid-cols-10 sm:grid-cols-5 grid-cols-4 justify-start gap-1">
                                    @php
                                        $days = [
                                            'Monday',   
                                            'Tuesday',
                                            'Wednesday',
                                            'Thursday',
                                            'Friday',
                                            'Saturday',
                                            'Sunday',
                                        ];
                                        $times = ['10 AM - 01 PM', '02 PM - 05 PM', '07 PM - 10 PM'];
                                    @endphp
                                    @foreach ($days as $dayIndex => $day)
                                        <div class="flex flex-col items-start">
                                            <label class="font-medium text-gray-700">{{ $day }}</label>
                                            @foreach ($times as $timeIndex => $time)
                                                <div class="flex items-center">
                                                    <input id="day{{ $dayIndex }}_time{{ $timeIndex }}"
                                                        type="checkbox" class="hidden peer"
                                                        name="preferred_day[{{ $day }}][]"
                                                        value="{{ $time }}">
                                                    <label for="day{{ $dayIndex }}_time{{ $timeIndex }}"
                                                        class="inline-flex items-center rounded-2xl justify-between py-1 px-2 font-medium tracking-tight border border-slate-200 cursor-pointer bg-brand-light text-brand-black border-slate-200-green-700 peer-checked:border border-slate-200-green-400 peer-checked:bg-green-700 peer-checked:text-white">
                                                        <div class="flex items-center justify-center md:w-full">
                                                            <div class="text-xs text-brand-black text-nowrap">
                                                                {{ $time }}</div>
                                                        </div>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}

                        <!-- Day Time Work  -->

                        <!-- drawer init and show -->
                        {{-- <div class="text-center">
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                type="button" data-drawer-target="drawer-timepicker"
                                data-drawer-show="drawer-timepicker" aria-controls="drawer-timepicker">
                                Set time schedule
                            </button>
                        </div> --}}

                        <!-- drawer component -->
                        {{-- <div id="drawer-timepicker"
                            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-96 dark:bg-gray-800"
                            tabindex="-1" aria-labelledby="drawer-timepicker-label">
                            <h5 id="drawer-label"
                                class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                                Time schedule</h5>
                            <button type="button" data-drawer-hide="drawer-timepicker" aria-controls="drawer-timepicker"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>
                          

                            <form name="business-hours-form">
                                <div
                                    class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-600 dark:bg-gray-700 mb-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <span class="text-gray-900 dark:text-white text-base font-medium">Business
                                            hours</span>
                                        <label class="inline-flex items-center cursor-pointer">
                                            <input type="checkbox" value="" name="business-hours"
                                                class="sr-only peer">
                                            <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                            <span class="sr-only">Business hours</span>
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 font-normal">Enable or disable
                                        business working hours for all weekly working days</p>
                                </div>

                                <div class="mb-3">
                                    @php
                                        $days = [
                                            'monday' => 'Mon',
                                            'tuesday' => 'Tue',
                                            'wednesday' => 'Wed',
                                            'thursday' => 'Thu',
                                            'friday' => 'Fri',
                                            'saturday' => 'Sat',
                                            'sunday' => 'Sun',
                                        ];
                                    @endphp
                                    @foreach ($days as $dayKey => $day)
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-[4rem]">
                                                <input checked id="{{ $dayKey }}" name="days" type="checkbox"
                                                    value="{{ $dayKey }}"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="{{ $dayKey }}"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $day }}</label>
                                            </div>
                                            <div class="flex">
                                                <label for="start-time-{{ $dayKey }}" class="sr-only">Start
                                                    time:</label>
                                                <input type="time" id="start-time-{{ $dayKey }}"
                                                    name="start-time-{{ $dayKey }}"
                                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="10:00" required>
                                                <label for="end-time-{{ $dayKey }}" class="sr-only">End
                                                    time:</label>
                                                <input type="time" id="end-time-{{ $dayKey }}"
                                                    name="end-time-{{ $dayKey }}"
                                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="18:00" required>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="grid grid-cols-2 gap-4 bottom-4 left-0 w-full md:px-4 md:absolute">
                                    <button type="button" data-drawer-hide="drawer-timepicker"
                                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                                    <button type="submit"
                                        class="text-white w-full inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Save all
                                    </button>
                                </div>
                            </form>

                        </div> --}}

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

    <!--
            <script>
                $(document).ready(function() {
                    //insert new Plan
                    $("#addDoctor").submit(function(e) {
                        e.preventDefault();

                        // Get preferred day and time values
                        var preferredDay = [];
                        var preferredTime = [];
                        $("input[name='preferred_day']:checked").each(function() {
                            preferredDay.push($(this).val());
                        });
                        $("input[name='preferred_time']:checked").each(function() {
                            preferredTime.push($(this).val());
                        });

                        // Prepare data to send
                        var formData = new FormData(this);
                        formData.append('preferred_day', JSON.stringify(preferredDay));
                        formData.append('preferred_time', JSON.stringify(preferredTime));

                        // Send AJAX request
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
            </script> -->

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
