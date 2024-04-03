@extends('admin.adminBase')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <div class="bg-white shadow-md rounded px-8 mb-4">
        <h2 class="text-2xl mb-2">Service Booking Form</h2>
        <form id="bookService">
            <div class="mb-3">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="e.g. Roni" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex mb-3 justify-between gap-2">
                <div class="w-1/2">
                    <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Contact No.</label>
                    <input type="tel" id="mobile" name="mobile" placeholder="e.g. 1234567890" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-1/2">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="e.g. 1234567890" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="service" class="block text-gray-700 text-sm font-bold mb-2">Service</label>
                <!-- <select name="" id="service" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="ab">Select Service</option>
                    <option value="c">Ambulance</option>
                    <option value="d">Medicine Delivery</option>
                </select> -->
                <input type="service" id="service" name="service" placeholder="e.g. 1234567890" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-3">
                <label for="address"
                    class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                    <textarea name="address" id="" cols="30" rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-3">
                <label for="message"
                    class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea name="message" id="" cols="30" rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
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
    //Book New service

    $("#bookService").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ route('book.service.store') }}",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#bookService").trigger("reset");

                window.open("/admin/manage-book-service", "_self");

            }
        })
    })
})
</script>


   
@endsection
