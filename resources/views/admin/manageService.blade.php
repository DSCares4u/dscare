@extends('admin.adminBase')
@section('content')

<div class="flex-1 flex mt-12 items-center justify-between ">
    <h1 class="text-lg font-semibold  py-2">Manage Services (<span id="counting">0</span>)</h1>
    <a href="/admin/manage-service/insert" class="bg-indigo-500 hover:bg-indigo-800 text-white px-3 py-2 rounded">
        <i class="fas fa-plus"></i>Add New Service</a>
</div>
<div class="overflow-x-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Id</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Image</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Service Name</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Description</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Features</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Feature_description</th>
                    <th class="border-b border-gray-200 px-3 py-2 text-sm">Actions</th>
                </tr>
            </thead>
            <tbody id="callingServices" >
                <!-- <tr class="mt-5">
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td> 
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">3</td> 
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Basic Plan</td> 
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Regular Monitoring</td> 
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Rs.300 <del>Rs.500</del></td> 
                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">Senior Citizer</td> 

                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                        {{--<button class="mx-8 text-sm"><svg xmlns="http://www.w3.org/2000/svg"class="h-5" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></button>--}}

                        <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                        <button class=" py-1 px-2  "><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                        <button type='button' class='py-1 px-2  '><svg  class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                    </td>
                </tr>               -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10" class="p-3 flex items-center justify-center">
                        <div id="pagination" class=""></div>
                    </th>
                </tr>
            </tfoot>
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
                role="dialog" aria-modal="true" aria-labelledby="editServiceModalLabel">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h5 class="text-lg font-semibold mb-4" id="editServiceBook">Edit Service</h5>
                    <form id="editServiceForm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="editServiceId" name="id">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Service Name</label>
                            <input type="text" id="serviceName" name="name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4 w-1/2">
                            <label for="s_image" class="block text-sm font-medium text-gray-700">Service Image</label>
                            <input type="file" id="s_image" name="s_image"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 "
                                >
                        </div>
                        <div class="mb-4">
                            <label for="s_description" class="block text-sm font-medium text-gray-700">Service Description</label>
                            <textarea name="s_description" id="s_description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required ></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="s_features" class="block text-sm font-medium text-gray-700">Features</label>
                            <input type="text" id="s_feature" name="s_feature"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="mb-4 w-1/2">
                            <label for="f_logo" class="block text-sm font-medium text-gray-700">Feature Logo</label>
                            <input type="file" id="f_logo" name="f_logo"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 "
                                >
                        </div>
                        <div class="mb-4">
                            <label for="f_description" class="block text-sm font-medium text-gray-700">Feature Description</label>
                            <textarea name="f_description" id="f_description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required ></textarea>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save
                                changes</button>
                            <button type="button" id="cancelEditBookPlan"
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
        let callingService = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('service.index') }}",
                success: function(response) {
                    let table = $("#callingServices");
                    table.empty();
                    console.log(response.data);

                    let data = response.data;

                    // Update Plan count
                    let len = data.length;
                    $("#counting").html(len);

                    data.forEach((service) => {
                        table.append(`
                            <tr class="hover:bg-gray-100 mt-5 px-3 py-3">
                                <td class="border-b border-gray-200 text-center text-sm">${service.id}</td>  
                                <td class="border-b border-gray-200 text-center text-sm">${service.s_image}</td>  
                                <td class="border-b border-gray-200 text-center text-sm">${service.name}</td>  
                                <td class="border-b border-gray-200 text-center text-sm">${service.s_description}</td>  
                                <td class="border-b border-gray-200 text-center text-sm">${service.s_feature}</td>  
                                <td class="border-b border-gray-200 text-center text-sm">${service.f_description}</td>  
                                <td class="border-b border-gray-200  text-center text-sm">
                                    <button class="py-1 px-2"><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></button>
                                    <button class="py-1 px-2 editBtn" data-id='${service.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
                                    <button type='button' class='py-1 px-2 delete-btn' data-id='${service.id}'><svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
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

         // delete work

         $(document).on('click', '.delete-btn', function() {
            let serviceId = $(this).data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token
            $.ajax({
                type: 'DELETE',
                url: `/api/admin/manage-service/delete/${serviceId}`, // Corrected URL construction
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                },
                success: function(response) {
                    // console.log("Delete Data Successfully");
                    swal("message", response.message, "message");
                    callingService(); // Fetch students again after successful deletion
                },
                error: function(xhr, status, error) {
                    console.error("Error Deleting Service:", error);
                }
            });
        });

         // Edit Service Work

         $(document).on('click', '.editBtn', function() {
                let serviceId = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `/api/admin/manage-service/edit/${serviceId}`,
                    success: function(response) {
                        $('#editServiceId').val(response.data.id);
                        $('#editServiceName').val(response.data.name);
                        $('#editServiceImage').val(response.data.s_image);
                        $('#editServiceDescription').val(response.data.s_description);
                        $('#editServiceFeatures').val(response.data.s_feature);
                        $('#editServiceFeaturesLogo').val(response.data.f_logo);
                        $('#editServiceFeaturesDescription').val(response.data.f_description);
                            
                        $('#default-modal').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Plan details for editing:', error);
                    }
                });
            });

            $('#editserviceForm').submit(function(e) {
                e.preventDefault();
                let serviceId = $('#editServiceId').val();
                let formData = {
                    name: $('#editServiceName').val(),
                    s_image: $('#editServiceImage').val(),
                    s_description: $('#editServiceDescription').val(),
                    s_feature: $('#editServiceFeatures').val(),
                    f_logo: $('#editServiceFeaturesLogo').val(),
                    f_description: $('#editServiceNeditServiceFeaturesDescriptioname').val(),
                                  
                };
                $.ajax({
                    type: 'PUT',
                    url: `/api/admin/manage-service/edit/${serviceId}`,
                    data: formData,
                    success: function(response) {
                        swal("Success", response.message, "message");
                        $('#default-modal').addClass('hidden');
                        swal("Success", response.message, "message");
                        callingService(); // Assuming you have a function to fetch service
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating Service Details:', error);
                    }
                });
            });

            // Cancel edit Doctor button click handler
            $('#cancelEditService').click(function() {
                $('#default-modal').addClass('hidden');
            });

        callingService();
    });
</script>


@endsection