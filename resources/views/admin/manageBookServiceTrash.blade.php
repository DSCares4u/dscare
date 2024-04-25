@extends('admin.adminBase')

@section('content')
    <div class="container mt-16">
        <div class="flex justify-between mb-3 mt-3 items-center">
            <h2 class="text-2xl font-bold">Booked Services Trash (<span id="counting">0</span>)</h2>
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
                <tbody id="callingService">
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to fetch and display doctor
            let callingBookedService = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('book.service.index.deleted') }}",
                    success: function(response) {
                        let table = $("#callingService");
                        table.empty();
                        let data = response.data;

                        // Update plan count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data) => {
                            table.append(`
                            <tr class="hover:bg-gray-100 mt-5 px-3 py-3 capitalize">
                                <td class="py-2 px-4 border text-center">${data.id}</td>
                                <td class="py-2 px-4 border text-center">${data.name}</td>
                                <td class="py-2 px-4 border text-center">${data.mobile}</td>
                                <td class="py-2 px-4 border text-center">${data.service.name}</td>                                <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">
                                <button type='button' class='bg-red-500 p-1 text-white font-semibold rounded delete-btn 'data-id='${data.id}' onclick='confirmPermanentDelete(postId)' >Delete</button>
                                <button type='button' class='bg-green-500 p-1 text-white font-semibold rounded restore-btn 'data-id='${data.id}' >Restore</button>
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
                let serviceId = $(this).data('id');

                // Show confirmation dialog
                if (confirm("Are you sure you want to permanently delete this Booked Service?")) {
                    let csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token
                    $.ajax({
                        type: 'DELETE',
                        url: `/api/admin/manage-book-service/trash/delete-permanent/${serviceId}`, // Corrected URL construction
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            // console.log("Delete Data Successfully");
                            swal("message", response.message, "message");
                            callingBookedService();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error deleting Plan Detail:", error);
                        }
                    });
                }
            });

            // restore doctor

            $(document).on('click', '.restore-btn', function() {
                let serviceId = $(this).data('id');
                $.ajax({
                    url: `/api/admin/manage-book-service/trash/restore/${serviceId}`,
                    type: 'PUT',
                    success: function(response) {
                        // console.log(response.message);
                        swal("message", response.message, "message");
                        callingBookedService();
                        // Handle success
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        // Handle error
                    }
                });
            });

            callingBookedService();
        });
    </script>
@endsection
