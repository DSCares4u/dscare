@extends('admin.adminBase')

@section('content')

<div class="p-4 mt-8">
        <!-- <div class="flex-1 flex mb-5 mt-1">
            <h1 class="text-2xl font-semibold text-slate-500">Hello Admin, </h1>
        </div> -->
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
                            placeholder="Search Patient / Doctor / Hospitals">
                    </div>
                </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow p-3 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-sm font-normal leading-none text-gray-900 dark:text-white">Upcoming Appointments</h5>
                    <a href="/admin/manage-appointment"
                        class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        View all
                    </a>
                </div>
                <div class="flow-root">
                    <ul role="list" id="upcomingAppointment" class="divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- {{-- <li class="flex justify-around items-center mt-2 pt-2">
                            <p>Rohit Kumar</p>
                            <p>913654488</p>
                            <p>Dr. Rajiv Dixit</p>
                        </li> --}} -->
                       
                     
                        
                    </ul>
                </div>
            </div>
            <div class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                            <h5 class="text-sm font-normal leading-none text-gray-900 dark:text-white">Booked Services</h5>

                    <a href="/admin/manage-book-service" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        View all
                    </a>
                </div>
              
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700" id="callingServices">
                    </ul>
                </div>
                <div id="pagination" class="">
                    <!-- Pagination links will be inserted here -->
                </div>
            </div>
        </div>
        <div class="flex-1 flex mt-4 mb-2">
            <h1 class="text-md font-normal">Static</h1>
        </div>
        <div class="grid grid-cols-4 gap-4 mb-4">
            <div class="flex flex-col p-4 justify-center rounded bg-pink-600 dark:bg-pink-800">
                <p class="text-sm font-semibold text-white dark:text-pink-300">Today's Appointment</p>
                <p class="text-2xl text-white dark:text-pink-300 countAdmission">50+</p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-blue-600 dark:bg-blue-800">
                <p class="text-sm text-left font-semibold text-slate-100 dark:text-blue-300">Available Doctor's</p>
                <p class="text-2xl text-white dark:text-blue-300 countStudent">10+</p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-green-600 dark:bg-green-800">
                <p class="text-sm font-semibold text-white dark:text-green-300">Total Services</p>
                <p class="text-2xl text-white dark:text-green-300 counthallFrame">15+</p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-yellow-600 dark:bg-yellow-800">
                <p class="text-sm font-semibold text-white dark:text-yellow-300">Total Plans</p>
                <p class="text-2xl text-white dark:text-yellow-300 countPayments">5+</p>
            </div>
            <!-- <div class="flex flex-col p-4 justify-center rounded bg-purple-600 dark:bg-purple-800">
                <p class="text-sm font-semibold text-white dark:text-purple-300">Total </p>
                <p class="text-2xl text-white dark:text-purple-300 countCourse"></p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-amber-600 dark:bg-amber-800">
                <p class="text-sm font-semibold text-white dark:text-amber-300">Total </p>
                <p class="text-2xl text-white dark:text-amber-300">0</p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-emerald-600 dark:bg-emerald-800">
                <p class="text-sm font-semibold text-white dark:text-emerald-300">Total </p>
                <p class="text-2xl text-white dark:text-emerald-300 countProjects">0</p>
            </div>
            <div class="flex flex-col p-4 justify-center rounded bg-purple-600 dark:bg-purple-800">
                <p class="text-sm font-semibold text-white dark:text-purple-300">Total </p>
                <p class="text-2xl text-white dark:text-purple-300 countCategory"></p>
            </div> -->


        </div>
    </div>
    



<script>
    $(document).ready(function() {
        // Function to fetch and display doctor
        let callingAppointment = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('appointment.index') }}",
                success: function(response) {
                    let table = $("#upcomingAppointment");
                    table.empty();
                    let data = response.data.slice(-8);

                    data.forEach((data) => {
                        table.append(`
                            <li class="flex justify-around items-center mt-2 pt-2">
                                <p>${data.name}</p>
                                <p>${data.mobile}</p>
                                <p>Dr. ${data.doctor.name}</p>
                            </li>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        callingAppointment();
    });

        // Function to fetch and display Plans
        let callingServices = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('book.service.index') }}",
                success: function(response) {
                    let table = $("#callingServices");
                    table.empty();
                    let data = response.data.slice(-8);

                    data.forEach((data) => {
                        table.append(`
                        <li class="flex justify-around items-center mt-2 pt-2 ">
                                <p>${data.name}</p>
                                <p>${data.mobile}</p>
                                <p>${data.service.name}</p>
                            </li>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        callingServices();
</script>



@endsection