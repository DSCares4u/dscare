@extends('admin.adminBase')

@section('content')
    <div class="flex-1 flex mt-12 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Doctors (<span id="counting">0</span>)</h1>
        <a href="/admin/manage-doctor/insert" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
            <i class="fas fa-plus"></i> Add New Doctor</a>

    </div>
    <div class="overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="pb-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" name="query" id="searchInput"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Our Doctor">
                </div>
            </div>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Image</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Name</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Specialization</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Address</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Mobile</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Fees</th>
                        <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody id="callingDoctor">
                    <!-- <tr class="mt-5 capitalize">
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Dr. Rajiv Kumar</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Dentist</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Line Bazar, Purnea</td>
                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">894561236</td>

                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm flex">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"class="h-3 mt-1 mr-2 "><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>500 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-5 ml-2"><path d="M160 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM126.5 199.3c-1 .4-1.9 .8-2.9 1.2l-8 3.5c-16.4 7.3-29 21.2-34.7 38.2l-2.6 7.8c-5.6 16.8-23.7 25.8-40.5 20.2s-25.8-23.7-20.2-40.5l2.6-7.8c11.4-34.1 36.6-61.9 69.4-76.5l8-3.5c20.8-9.2 43.3-14 66.1-14c44.6 0 84.8 26.8 101.9 67.9L281 232.7l21.4 10.7c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3L247 287.3c-10.3-5.2-18.4-13.8-22.8-24.5l-9.6-23-19.3 65.5 49.5 54c5.4 5.9 9.2 13 11.2 20.8l23 92.1c4.3 17.1-6.1 34.5-23.3 38.8s-34.5-6.1-38.8-23.3l-22-88.1-70.7-77.1c-14.8-16.1-20.3-38.6-14.7-59.7l16.9-63.5zM68.7 398l25-62.4c2.1 3 4.5 5.8 7 8.6l40.7 44.4-14.5 36.2c-2.4 6-6 11.5-10.6 16.1L54.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L68.7 398z"/></svg> --}}

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"class="h-3 mt-1 mr-2 "><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>300<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-4 ml-2"><path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
                            </td>


                            <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                {{-- <button class="mx-8 text-sm"><svg xmlns="http://www.w3.org/2000/svg"class="h-5" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></button> --}}

                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                <button type='button' class='py-1 px-2  '><svg  class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </td>
                        </tr>
                       -->
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="10" class="p-3 flex items-center justify-center">
                            <div id="pagination" class="">
                            </div>
                        </th>
                    </tr>
                </tfoot>
        </div>
    </div>


    {{-- edit modal --}}
    <div id="default-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="editDoctorModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4" id="editDoctor">Edit Doctor</h5>
                    <form id="editDoctorForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="editDoctorId" name="id">
                        <div class="flex gap-2 mb-4">
                            <div class="w-1/2">
                                <label for="editDoctorName" class="block text-sm font-medium text-gray-700">Doctor's
                                    Name</label>
                                <input type="text" id="editDoctorName" name="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                            <div class="w-1/2">
                                <label for="editDoctorimage" class="block text-sm font-medium text-gray-700">Upload
                                    Doctor's
                                    Image</label>
                                <input type="file" id="editDoctorimage" name="image"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                        </div>
                        <div class="flex gap-2 mb-4">
                            <div class=" w-1/2">
                                <label for="editDoctorEmail" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="editDoctorEmail" name="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                            <div class=" w-1/2">
                                <label for="editDoctorMobile" class="block text-sm font-medium text-gray-700">Contact
                                    No.</label>
                                <input type="tel" id="editDoctorMobile" name="mobile"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 1234567890">
                            </div>
                        </div>
                        <div class="flex gap-2 mb-4">
                            <div class=" w-1/2">
                                <label for="editDoctorAge" class="block text-sm font-medium text-gray-700">Age</label>
                                <input type="number" id="editDoctorAge" name="age"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 45">
                            </div>
                            <div class=" w-1/2">
                                <label for="editDoctorGender"
                                    class="block text-sm font-medium text-gray-700">Gender</label>
                                <select name="gender" id="editDoctorGender"
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
                                <label for="editDoctorSpecialization"
                                    class="block text-sm font-medium text-gray-700">Specialization</label>
                                <input type="text" id="editDoctorSpecialization" name="specialization"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Dentist">
                            </div>
                            <div class=" w-1/3">
                                <label for="editDoctorExperience"
                                    class="block text-sm font-medium text-gray-700">Experience</label>
                                <input type="text" id="editDoctorExperience" name="experience"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. 5+ Years">
                            </div>
                            <div class=" w-1/3">
                                <label for="editDoctorQualification"
                                    class="block text-sm font-medium text-gray-700">Qualification</label>
                                <input type="text" id="editDoctorQualification" name="qualification"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. MD Medicine">
                            </div>
                        </div>
                        <div class="flex mb-4 gap-2">
                            <div class=" w-1/2">
                                <label for="editDoctorVisitingCharge"
                                    class="block text-sm font-medium text-gray-700">Visiting
                                    Charge</label>
                                <input type="number" id="editDoctorVisitingCharge" name="visiting_charge"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Rs. 500">
                            </div>
                            <div class="w-1/2">
                                <label for="editDoctorOnlineCharge" class="block text-sm font-medium text-gray-700">Online
                                    Checkup
                                    Charge</label>
                                <input type="number" id="editDoctorOnlineCharge" name="online_charge"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Rs.400">
                            </div>
                        </div>
                        <div class="mb-4 flex gap-2">
                            <div class=" w-1/3">
                                <label for="editDoctorLandmark"
                                    class="block text-sm font-medium text-gray-700">Landmark</label>
                                <input type="text" id="editDoctorLandmark" name="landmark"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. near abc road">
                            </div>
                            <div class=" w-1/3">
                                <label for="editDoctorCity" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" id="editDoctorCity" name="city"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Purnea">
                            </div>
                            <div class=" w-1/3">
                                <label for="editDoctorState" class="block text-sm font-medium text-gray-700">State</label>
                                <input type="text" id="editDoctorState" name="state"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required placeholder="e.g. Bihar">
                            </div>
                        </div>
                        <!-- Day Time Work  -->

                        <!-- HTML for preferred day and time selection -->

                        {{-- <div class="mb-4">
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
                        </div> --}}
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEditDoctor"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // Function to fetch and display doctor
            let callingDoctor = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('doctor.index') }}",
                    success: function(response) {
                        let table = $("#callingDoctor");
                        table.empty();
                        let data = response.data;

                        // Update doctor count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                            <tr class="hover:bg-gray-100 mt-5 px-3 py-3 capitalize">
                                <td class="border-b border-gray-200 text-center text-sm">${data.id}</td> 
                                <td class="border-b border-gray-200 text-center text-sm "><img src="/image/doctor/${data.image}" width="40px" height="20px" alt=""></td> 
                                <td class="border-b border-gray-200 text-center text-sm">${data.name}</td> 
                                <td class="border-b border-gray-200 text-center text-sm">${data.specialization}</td> 
                                <td class="border-b border-gray-200 text-center text-sm">${data.landmark},${data.city},${data.city}</td> 
                                <td class="border-b border-gray-200 text-center text-sm">${data.mobile}</td> 
                                <td class="border-b border-gray-200 px-3 text-center py-3 text-sm flex"> 
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"class="h-3 mt-1 mr-2 "><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>${data.visiting_charge} <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-5 ml-2"><path d="M160 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM126.5 199.3c-1 .4-1.9 .8-2.9 1.2l-8 3.5c-16.4 7.3-29 21.2-34.7 38.2l-2.6 7.8c-5.6 16.8-23.7 25.8-40.5 20.2s-25.8-23.7-20.2-40.5l2.6-7.8c11.4-34.1 36.6-61.9 69.4-76.5l8-3.5c20.8-9.2 43.3-14 66.1-14c44.6 0 84.8 26.8 101.9 67.9L281 232.7l21.4 10.7c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3L247 287.3c-10.3-5.2-18.4-13.8-22.8-24.5l-9.6-23-19.3 65.5 49.5 54c5.4 5.9 9.2 13 11.2 20.8l23 92.1c4.3 17.1-6.1 34.5-23.3 38.8s-34.5-6.1-38.8-23.3l-22-88.1-70.7-77.1c-14.8-16.1-20.3-38.6-14.7-59.7l16.9-63.5zM68.7 398l25-62.4c2.1 3 4.5 5.8 7 8.6l40.7 44.4-14.5 36.2c-2.4 6-6 11.5-10.6 16.1L54.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L68.7 398z"/></svg>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"class="h-3 mt-1 mr-2 "><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>${data.online_charge}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-4 ml-2"><path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg> 
                        </td>          
                        <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                            <a href='/admin/manage-doctor/view/${data.id}'>
                            <button class=" py-1 px-2 "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                            </a>

                            <button class=" py-1 px-2 editBtn " data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>

                            <button type='button' class='py-1 px-2 delete-btn 'data-id='${data.id}' ><svg  class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                        </td>
                            </tr>
                        `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }

            // delete doctor 

            $(document).on('click', '.delete-btn', function() {
                let doctorId = $(this).data('id');
                let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token
                $.ajax({
                    type: 'DELETE',
                    url: `/api/admin/manage-doctor/delete/${doctorId}`, // Corrected URL construction
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                    },
                    success: function(response) {
                        // console.log("Delete Data Successfully");
                        swal("message", response.message, "message");
                        callingDoctor(); // Fetch Doctors again after successful deletion
                    },
                    error: function(xhr, status, error) {
                        console.error("Error deleting Doctor:", error);
                    }
                });
            });

            // Edit Doctor Work

            $(document).on('click', '.editBtn', function() {
                let doctorId = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `/api/admin/manage-doctor/edit/${doctorId}`,
                    success: function(response) {
                        $('#editDoctorId').val(response.data.id);
                        $('#editDoctorName').val(response.data.name);
                        $('#editDoctorEmail').val(response.data.email);
                        $('#editDoctorMobile').val(response.data.mobile);
                        $('#editDoctorAge').val(response.data.age);
                        $('#editDoctorImage').val(response.data.image);
                        $('#editDoctorGender').val(response.data.gender);
                        // $('#editDoctorPreferredDay').val(response.data.preferred_day);
                        $('#editDoctorSpecialization').val(response.data.specialization);
                        $('#editDoctorExperience').val(response.data.experience);
                        $('#editDoctorQualification').val(response.data.qualification);
                        $('#editDoctorVisitingCharge').val(response.data.visiting_charge);
                        $('#editDoctorOnlineCharge').val(response.data.online_charge);
                        $('#editDoctorLandmark').val(response.data.landmark);
                        $('#editDoctorCity').val(response.data.city);
                        $('#editDoctorState').val(response.data.state);
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Doctor details for editing:', error);
                    }
                });
            });

            $('#editDoctorForm').submit(function(e) {
                e.preventDefault();
                let DoctorId = $('#editDoctorId').val();
                let formData = {
                    name: $('#editDoctorName').val(),
                    email: $('#editDoctorEmail').val(),
                    mobile: $('#editDoctorMobile').val(),
                    age: $('#editDoctorAge').val(),
                    image: $('#editDoctorImage').val(),
                    gender: $('#editDoctorGender').val(),
                    specialization: $('#editDoctorSpecialization').val(),
                    experience: $('#editDoctorExperience').val(),
                    qualification: $('#editDoctorQualification').val(),
                    visiting_charge: $('#editDoctorVisitingCharge').val(),
                    online_charge: $('#editDoctorOnlineCharge').val(),
                    landmark: $('#editDoctorLandmark').val(),
                    city: $('#editDoctorCity').val(),
                    state: $('#editDoctorState').val(),
                };
                $.ajax({
                    type: 'PUT',
                    url: `/api/admin/manage-doctor/edit/${DoctorId}`,
                    data: formData,
                    success: function(response) {
                        swal("Success", response.message, "message");
                        $('#default-modal').addClass('hidden');
                        swal("Success", response.message, "message");
                        callingDoctor(); // Assuming you have a function to fetch Docotor
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Doctor:', error);
                    }
                });
            });

            // Cancel edit Doctor button click handler
            $('#cancelEditDoctor').click(function() {
                $('#default-modal').addClass('hidden');
            });
            callingDoctor();
        });
    </script>
@endsection
