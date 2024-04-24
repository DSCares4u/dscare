@extends('admin.adminBase')

@section('content')
    <div class="container mt-16">
        <div class="flex justify-between mb-3 mt-3 items-center">
            <h2 class="text-2xl font-bold">Manage Booked Services (<span id="counting">0</span>)</h2>
            <a href="/admin/manage-book-service/insert"
                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                <i class="fas fa-plus mr-1"></i> Book Services Manually
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Name</th>
                        <th class="py-2 px-4 border">Mobile</th>
                        <th class="py-2 px-4 border">Service</th>
                        <th class="py-2 px-4 border">Actions</th>
                    </tr>
                </thead>
                <tbody id="callingData">
                    <!-- <tr>
                        <td class="py-2 px-4 border text-center">5</td>
                        <td class="py-2 px-4 border text-center">Dentist</td>
                        <td class="py-2 px-4 border text-center">qwertyuiopdfghjkl</td>
                        <td class="py-2 px-4 border text-center">qwertyuiopdfghjkl</td>
                        <td class="py-2 px-4 border text-center">
                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                                <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

     {{-- Edit Work  --}}

     <div id="default-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-hidden="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="editServiceBookModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4" id="editServiceBook">Edit Doctor</h5>
                    <form id="editServiceBookingForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="editServiceId" name="id">
                        <div class="mb-3">
                            <label for="editName" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                            <input type="text" name="name" id="editName" placeholder="e.g. Roni" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="flex mb-3 justify-between gap-2">
                            <div class="w-1/2">
                                <label for="editMobile" class="block text-gray-700 text-sm font-bold mb-2">Contact No.</label>
                                <input type="tel" name="mobile" id="editMobile" placeholder="e.g. 1234567890" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="w-1/2">
                                <label for="editEmail" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email" id="editEmail" placeholder="e.g. 1234567890" required
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="callingServices" class="block text-gray-700 text-sm font-bold mb-2">Service</label>
                            <select name="service_id" id="callingServices" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Select Service</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="editAddress"
                                class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                                <textarea name="address" id="editAddress" cols="30" rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editMessage"
                                class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                                <textarea name="message" id="editMessage" cols="30" rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>                       
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEditServicePlan"
                                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
        // Function to fetch and display Plans
        let callingBookedServices = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('book.service.index') }}",
                success: function(response) {
                    let table = $("#callingData");
                    table.empty();
                    let data = response.data;

                    // Update Plan count
                    let len = data.length;
                    $("#counting").html(len);

                    data.forEach((data) => {
                        table.append(`
                        <tr>
                        <td class="py-2 px-4 border text-center">${data.id}</td>
                        <td class="py-2 px-4 border text-center">${data.name}</td>
                        <td class="py-2 px-4 border text-center">${data.mobile}</td>
                        <td class="py-2 px-4 border text-center">${data.service.name}</td>
                        <td class="py-2 px-4 border text-center">
                            <a href='/admin/manage-book-service/view/${data.id}'>
                            <button class=" py-1 px-2 "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                            </a>
                            <button class=" py-1 px-2  editBtn" data-id='${data.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                <button type='button' class='py-1 px-2 delete-btn' data-id='${data.id}' ><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>

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
        $(document).on('click', '.delete-btn', function() {
            let serviceId = $(this).data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token
            $.ajax({
                type: 'DELETE',
                url: `/api/admin/manage-book-service/delete/${serviceId}`,
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                },
                success: function(response) {
                    // console.log("Delete Data Successfully");
                    swal("message", response.message, "message");
                    callingBookedServices(); // Fetch students again after successful deletion
                },
                error: function(xhr, status, error) {
                    console.error("Error Deleting Service:", error);
                }
            });
        });

         // Edit Doctor Work

         $(document).on('click', '.editBtn', function() {
                let bookServiceId = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `/api/admin/manage-book-service/edit/${bookServiceId}`,
                    success: function(response) {
                        $('#editServiceId').val(response.data.id);
                        $('#editName').val(response.data.name);
                        $('#editMobile').val(response.data.mobile);
                        $('#editEmail').val(response.data.email);
                        $('#callingServices').val(response.data.service_id);
                        $('#editAddress').val(response.data.address);
                        $('#editMessage').val(response.data.message);
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Doctor details for editing:', error);
                    }
                });
            });

            $('#editServiceBookingForm').submit(function(e) {
                e.preventDefault();
                let bookedServiceId = $('#editServiceId').val();
                let formData = {
                    name: $('#editName').val(),
                    mobile: $('#editMobile').val(),
                    email: $('#editEmail').val(),
                    service_id: $('#callingServices').val(),
                    address: $('#editAddress').val(),
                    message: $('#editMessage').val(),                            
                };
                $.ajax({
                    type: 'PUT',
                    url: `/api/admin/manage-book-service/edit/${bookedServiceId}`,
                    data: formData,
                    success: function(response) {
                        swal("Success", response.message, "message");
                        $('#default-modal').addClass('hidden');
                        swal("Success", response.message, "message");
                        callingBookedServices(); // Assuming you have a function to fetch Docotor
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Service Details:', error);
                    }
                });
            });

             // calling Services
        $.ajax({
            type: "GET",
            url: "{{ route('service.index') }}",
            success: function(response) {
                let select = $("#callingServices");
                select.empty();
                response.data.forEach((service) => {
                    select.append(`
                    <option value="${service.id}">${service.name}</option>
                    `);
                });
            }
        });

            // Cancel edit Doctor button click handler
            $('#cancelEditServicePlan').click(function() {
                $('#default-modal').addClass('hidden');
            });
        callingBookedServices();
    });
</script>

@endsection
