@extends('admin.adminBase')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl mb-4">Request A Call</h2>
        <form id="requestCall">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="e.g. Roni" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Contact No.</label>
                <input type="tel" id="mobile" name="mobile" placeholder="e.g. 1234567890" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="address"
                    class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                    <textarea name="address" id="" cols="30" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline">
                Save Now
            </button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
    //insert new request

    $("#requestCall").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ route('call.store') }}",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#requestCall").trigger("reset");

                window.open("/admin/manage-call", "_self");

            }
        })
    })
})
</script>


   
@endsection
