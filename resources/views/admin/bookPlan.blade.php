@extends('admin.adminBase')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <div class="bg-white shadow-md rounded px-8 mb-4">
        <h2 class="text-2xl mb-2">Plan Booking Form</h2>
        <form id="bookPlan">
            <div class="mb-3">
                <label for="patient_name" class="block text-gray-700 text-sm font-bold mb-2">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" placeholder="e.g. Roni" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-3">
                <label for="guardian_name" class="block text-gray-700 text-sm font-bold mb-2">Guardian Name</label>
                <input type="text" id="guardian_name" name="guardian_name" placeholder="e.g. Roni" required
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
                <div class=" w-1/2">
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select name="gender" id="gender"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                        required>
                        <option value="">Select Gender</option>
                        <option selected value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="plan" class="block text-gray-700 text-sm font-bold mb-2">Select Plan</label>
                <select name="plan_id" id="callingPlans" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select Plan</option>
                </select>
            </div>
            <div class="mb-2">
                    <div id="planCharge"></div>
            </div>
            <div class="mb-3 ">
                <label for="address"
                    class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                    <textarea name="address" id="" cols="30" rows="2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline">
                Book Plan Now
            </button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
         // calling Plans
    $.ajax({
            type: "GET",
            url: "{{ route('plan.index') }}",
            success: function(response) {
                let select = $("#callingPlans");
                select.empty();
                select.append(`<option value="">Select Plan</option>`)
                response.data.forEach((plan) => {
                    select.append(`
                    <option value="${plan.id}"  data-plan-charge="${plan.discount_price}">${plan.name}</option>
                    `);
                });
            }
        });

        $('#callingPlans').change(function() {
                let selectedPlan = $(this).children("option:selected");
                let PlanFee = selectedPlan.data('plan-charge');

                // Update the fee display
                $('#planCharge').html(
                    `<input  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plan Charge Rs. ${PlanFee}</label>`
                    );
            });
    //Book New service

    $("#bookPlan").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ route('book.plan.store') }}",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                swal("Success", response.message, "success");
                $("#bookPlan").trigger("reset");
                window.open("/admin/manage-book-plan", "_self");
            }
        })
    })
})
</script>


   
@endsection
