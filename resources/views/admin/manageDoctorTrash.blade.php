@extends('admin.adminBase')

@section('content')
    <div class="flex-1 flex mt-12 items-center justify-between ">
        <h1 class="text-lg font-semibold  py-2">Manage Doctors Trash (<span id="counting">0</span>)</h1>
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

    <script>
        $(document).ready(function() {
            // Function to fetch and display doctor
            let callingDoctor = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('doctor.index.deleted') }}",
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

                            <button type='button' class='bg-red-500 p-1 rounded delete-btn 'data-id='${data.id}' onclick='confirmPermanentDelete(postId)' >Delete</button>

                            <button type='button' class='bg-green-500 p-1 rounded restore-btn 'data-id='${data.id}' >Restore</button>
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

            // Permanent delete work

            $(document).on('click', '.delete-btn', function() {
                let doctorId = $(this).data('id');

                // Show confirmation dialog
                if (confirm("Are you sure you want to permanently delete this doctor?")) {
                    let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token

                    $.ajax({
                        type: 'DELETE',
                        url: `/api/admin/manage-doctor/trash/delete-permanent/${doctorId}`, // Corrected URL construction
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
                }
            });

            // restore doctor

            $(document).on('click', '.restore-btn', function() {
                let doctorId = $(this).data('id');
                $.ajax({
                    url: `/api/admin/manage-doctor/trash/restore/${doctorId}`,
                    type: 'PUT',
                    success: function(response) {
                        // console.log(response.message);
                        swal("message", response.message, "message");
                        callingDoctor();
                        // Handle success
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        // Handle error
                    }
                });
            });

            callingDoctor();
        });
    </script>
@endsection
