@extends('admin.base')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">View Query</h1>
    <div class="overflow-x-auto">
        <div class="shadow-md rounded-lg overflow-hidden">
            <div class="table-responsive">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border-b border-gray-200 px-4 py-2 text-sm font-semibold">Id</th>
                            <th class="border-b border-gray-200 px-4 py-2 text-sm font-semibold">Name</th>
                            <th class="border-b border-gray-200 px-4 py-2 text-sm font-semibold">Email</th>
                            <th class="border-b border-gray-200 px-4 py-2 text-sm font-semibold">Contact No.</th>
                            <th class="border-b border-gray-200 px-4 py-2 text-sm font-semibold">Message</th>
                        </tr>
                    </thead>
                    <tbody id="callingMessage">
                        <tr>
                            <td class="border-b border-gray-200 px-4 py-2 text-sm" id="queryId"></td>
                            <td class="border-b border-gray-200 px-4 py-2 text-sm" id="queryname"></td>
                            <td class="border-b border-gray-200 px-4 py-2 text-sm" id="queryemail"></td>
                            <td class="border-b border-gray-200 px-4 py-2 text-sm" id="querymobile_no"></td>
                            <td class="border-b border-gray-200 px-4 py-2 text-sm md:max-w-md overflow-auto" id="querymessage"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    <script>
        $(document).ready(function() {
            // Function to fetch all messages
            let fetchMessages = () => {
                $.ajax({
                    url: `/api/contact/{{ request()->segment(4) }}`,
                    type: "GET",
                    success: function(response) {
                        console.log(response.data);
                        $("#queryId").text(response.data.id);
                        $("#queryname").text(response.data.name);
                        $("#queryemail").text(response.data.email);
                        $("#querymobile_no").text(response.data.mobile_no);
                        $("#querymessage").text(response.data.message);

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            };

            // Initial load of messages
            fetchMessages();
        });
    </script>
@endsection

let featuresArray = JSON.parse(response.data.features);
// Clear any existing features
$('#courseFeatures').empty();
// Loop through the features array and add each feature as a list item
featuresArray.forEach(feature => {
    $('#courseFeatures').append(`<li class='flex items-center space-x-2'>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6 fill-green-500 text-white">
<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg><span class='text-lg'>${feature}</span></li>`);
});