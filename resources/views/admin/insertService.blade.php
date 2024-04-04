@extends('admin.adminBase')
@section('content')

<div class="container mx-auto mt-16">
    <div class="w-full lg:w-2/3 md:w-8/12 sm:w-11/12 mx-auto">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-200 px-4 py-2 rounded-t-lg">
                <h3 class="text-xl font-semibold">Add New Service</h3>
            </div>
            <div class="p-3">
                <form id="addService">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Service Name</label>
                        <input type="text" id="name" name="name"
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
                    <div class="">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add New Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function() {
            //insert new Plan
            $("#addService").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('service.store') }}",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal("Success", response.message, "success");
                        $("#addService").trigger("reset");

                        window.open("/admin/manage-service", "_self")

                    }
                })
            })
        })
</script>

@endsection
