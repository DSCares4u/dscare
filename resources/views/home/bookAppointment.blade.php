@extends('home.base')
@section('content')

<div class="specialist flex w-full  mx-8 mr-4 mt-10">
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>
    <div class="w-2/12 mx-3">
        <img src="/images/icons/dermo.svg" class="mx-auto h-16" alt="">
        <h3 class="text-center font-serif text-sm">Dermatologist - Acne, Pimples...</h3>
    </div>

</div>

<div class="search mt-10 mx-24">
    <h4 class="text-blue-500 text-xl font-bold">Find Doctors</h4>
    <div class="box flex mt-5 gap-7">
    <div class="location flex">
        <label for=""><img src="/images/icons/locator.png" class="h-6 mt-2" alt=""></label>
        <select name="" id="" class="border-0  font-semibold">
            <option value="" >All Cities</option>
            <option value="">Purnea</option>
            <option value="">Patna</option>
            <option value="">Katihar</option>
            <option value="">Bhagalpur</option>
            <option value="">Arariya</option>
        </select>
    </div>
    <div class="search flex">
        <label for=""><img src="/images/icons/search.png" class="h-6 mt-2" alt=""></label>
        <input type="text" placeholder="Search Doctors / Hospital/ Symptoms" class="border-0 w-96">
    </div>
    </div>
</div>

<div class="most-search mx-24 mt-5">
    <p class="text-[#006266] text-sm font-semibold">Most Searched Cities</p>
    <div class="city flex mt-3  gap-5">
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">New Delhi</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">Mumbai</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">Kolkata</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">Chennai</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">Bangalore</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">Hyderabad</button>
        <button class="border border-gray-300 p-1 rounded-sm text-xs font-medium ">All Cities</button>
    </div>
</div>

<div class="mt-10 doctor flex flex-wrap mx-10 justify-center gap-8" id="callingDoctor">

    <div class="w-3/12  border border-gray-200 rounded-lg shadow ">
        <div class="flex mx-5 gap-5">
            <div class="w-1/4 items-center flex">
                <img src="/images/doctor-dp.webp" alt="">
            </div>
            <div class="w-3/4 ml-5 leading-tight mt-2">
                <h4>Dr. Korrai Bala Raju</h4>
                <p class="text-sm font-semibold text-blue-500">Dentist</p>
                <p class="text-base  text-blue-500">10YRS EXP.</p>
                <p class="text-sm text-gray-600 text">BDS,MDS</p>
                <p class="text-blue-500 font-semibold my-2">Fees- 400</p>
            </div>
        </div>
        <div class="address mx-5 flex text-sm text-gray-500">
            <img src="/images/icons/locator.png" class="h-4 mt-0.5" alt="">
            <p>Line Bazar, Purnea, Bihar</p>
        </div>
        <div class="available text-xs font-semibold text-gray-600 text-center">
            <p>Available Now</p>
        </div>
        <div class="button flex justify-center gap-2  text-center text-sm rounded-sm mt-1">
            <button class=" p-1.5 text-white bg-yellow-500">Book Video Consult</button>
            <button class=" bg-[#006266] p-1.5 text-white ">Book Hospital Visit</button>
        </div>
    </div>
    <div class="w-3/12  border border-gray-200 rounded-lg shadow ">
        <div class="flex mx-5 gap-5">
            <div class="w-1/4 items-center flex">
                <img src="/images/doctor-dp.webp" alt="">
            </div>
            <div class="w-3/4 ml-5 leading-tight mt-2">
                <h4>Dr. Korrai Bala Raju</h4>
                <p class="text-sm font-semibold text-blue-500">Dentist</p>
                <p class="text-base  text-blue-500">10YRS EXP.</p>
                <p class="text-sm text-gray-600 text">BDS,MDS</p>
                <p class="text-blue-500 font-semibold my-2">Fees- 400</p>
            </div>
        </div>
        <div class="address mx-5 flex text-sm text-gray-500">
            <img src="/images/icons/locator.png" class="h-4 mt-0.5" alt="">
            <p>Line Bazar, Purnea, Bihar</p>
        </div>
        <div class="available text-xs font-semibold text-gray-600 text-center">
            <p>Available Now</p>
        </div>
        <div class="button flex justify-center gap-2 text-center text-sm rounded-sm mt-1">
            <button class=" bg-[#006266] p-1.5 text-white ">Book Hospital Visit</button>
        </div>
    </div>
</div>

   <!-- Book Appointment Form -->

<div id="bookAppointmentForm" class="hidden fixed inset-0 items-center justify-center z-50 ">
    <div class="modal-content bg-white md:max-w-lg mx-auto mt-2 w-[30%] rounded shadow-lg z-50 overflow-y-auto">
        <div class="flex py-2 px-1">
            <div class=" w-full">
                <div class="flex justify-end pt-1 pr-4">
                    <button id="closeFormButton" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                </div>
                <h2 class="text-xl font-bold mb-2 text-center">Book Appointment Now</h2>
                <form class="p-4" id="bookAppointment">
                    <div class="mb-2">
                        <input type="text" id="name" name="name" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Name">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="mobile" name="mobile" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Mobile">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
// JavaScript to handle opening and closing of calling request Form

        document.addEventListener('DOMContentLoaded', function() {
        let openFormButton = document.getElementById('bookAppointmentBtn');
        let closeFormButton = document.getElementById('closeFormButton');
        let callingForm = document.getElementById('bookAppointmentForm');

        openFormButton.addEventListener('click', function() {
            callingForm.classList.remove('hidden');
        });

        closeFormButton.addEventListener('click', function() {
            callingForm.classList.add('hidden');
        });
    });

    $(document).ready(function() {
        // Function to fetch and display doctor
        let callingDoctor = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('doctor.index') }}",
                success: function(response) {
                    let card = $("#callingDoctor");
                    card.empty();
                    let data = response.data;

                    data.forEach((data) => {
                        card.append(`
                        <div class=" w-3/12  border border-gray-200 rounded-lg shadow capitalize">
                            <div class="flex mx-5 gap-5">
                                <div class="w-1/4 items-center flex">
                                    <img src="/image/doctor/${data.image}" class="rounded-full w-[100%]" alt="">
                                </div>
                                <div class="w-3/4 ml-5 leading-tight mt-2">
                                    <h4>Dr. ${data.name}</h4>
                                    <p class="text-sm font-semibold text-blue-500">${data.specialization}</p>
                                    <p class="text-base  text-blue-500">${data.experience}YRS EXP.</p>
                                    <p class="text-sm text-gray-600 text">${data.qualification}</p>
                                    <p class="text-blue-500 font-semibold my-2">Fees- ${data.visiting_charge}</p>
                                </div>
                            </div>
                            <div class="address mx-5 flex text-sm text-gray-500">
                                <img src="/images/icons/locator.png" class="h-4 mt-0.5" alt="">
                                <p>${data.landmark},${data.city},${data.state}</p>
                            </div>
                            <div class="available text-xs font-semibold text-gray-600 text-center">
                                <p>Available Now</p>
                            </div>
                            <div class="button flex justify-center gap-2  text-center text-sm rounded-sm my-1">
                            <a href="" id='bookAppointmentBtn'>
                                <button class=" p-1.5 text-white bg-yellow-500">Book Video Consult</button>
                            </a>
                                <button class=" bg-[#006266] p-1.5 text-white ">Book Hospital Visit</button>
                            </div>
                        </div>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    callingDoctor();
    });
</script>
@endsection