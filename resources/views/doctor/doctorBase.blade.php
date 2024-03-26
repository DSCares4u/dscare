<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>DSCare4U</title>
</head>

<body class='p-0 m-0 font-sans bg-white'>


    <div class="flex justify-between items-center bg-white shadow-md p-4">
        <!-- Logo -->
        <div class="text-xl font-bold text-blue-600"><a href="/doctor">Doctor Panel</a></div>

        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/doctor/appointment" class="text-gray-600 hover:text-blue-600">Appointments</a></li>
                <li><a href="/doctor/patient" class="text-gray-600 hover:text-blue-600">Patients</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-600">Messages</a></li>
                <li><a href="/doctor/profile" class="text-gray-600 hover:text-blue-600">Profile</a></li>
            </ul>
        </nav>
        <button type="button"
            class="text-white bg-green-700 hover:bg-green-800  font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            id="bookAppointmentButton">Book Appointment</button>

        <!-- User Info -->
        <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-8 h-8 rounded-full">
            <span class="text-gray-600">Dr. John Doe</span>
        </div>
    </div>


    
    <div id="bookAppointmentForm" class="hidden fixed inset-0 items-center justify-center z-50">
        <div class="modal-content  bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="flex justify-end pt-1 pr-4">
                <button id="closeFormButton" class="text-3xl leading-none hover:text-gray-300">&times;</button>
            </div>
            <div class="py-2 px-10 pb-2">
                <h2 class="text-xl font-bold mb-2">Booking Form</h2>
                <form>
                    <div class="mb-2">
                        <label for="name" class="block text-gray-700 font-bold mb-1">Name:</label>
                        <input type="text" id="name" name="name" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your Name">
                    </div>
                    <div class="mb-2">
                        <label for="mobile_no" class="block text-gray-700 font-bold mb-1">Mobile No:</label>
                        <input type="tel" id="mobile_no" name="mobile_no" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your Mobile No">
                    </div>
                    <div class="mb-2">
                        <label for="address" class="block text-gray-700 font-bold mb-1">Address:</label>
                        <input type="text" id="address" name="address" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your Address">
                    </div>
                    <div class="mb-1">
                        <label for="description" class="block text-gray-700 font-bold mb-1">Description:</label>
                        <textarea id="description" name="description" rows="2" class="form-textarea  w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your message"></textarea>
                    </div>
                    <div class="flex justify-center">
                    <button type="submit"
                        class=" w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Book Now</button>
                        </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle opening and closing of the form
        document.addEventListener('DOMContentLoaded', function() {
            let openFormButton = document.getElementById('bookAppointmentButton');
            let closeFormButton = document.getElementById('closeFormButton');
            let applicationForm = document.getElementById('bookAppointmentForm');

            openFormButton.addEventListener('click', function() {
                applicationForm.classList.remove('hidden');
            });

            closeFormButton.addEventListener('click', function() {
                applicationForm.classList.add('hidden');
            });
        });
    </script>


    @section('content')
    @show
    {{-- footer work --}}
    <!-- <footer class="flex justify-evenly mb-4 w-full h-56 px-20 gap-10  mt-12">
        <div class="w-3/12">
            <a href="">
                <img src="/images/footer_logo.jpg" alt="">
            </a>
            <p class="text-start text-gray-400 text-sm mt-5">
                No. 40, North Phase,
                5th Cross Street, Kalaimagal Nagar, Ekkatuthangal, Chennai
                Purnea
            </p>
            <p class="text-start text-gray-400 mt-4 text-sm">
                098849 45900

                response@athulyahomecare.com
            </p>
        </div>
        <div class="flex w-3/12">
            <ul>
                <li class="text-xl font-bold mb-4">
                    About Us
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Services</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Leadership</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Video Testimonials</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Career</a>
                </li>
            </ul>
        </div>
        <div class="flex w-3/12">
            <ul>
                <li class="text-xl font-bold mb-4">
                    Our Services
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Doctor Visits to Home</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Geriatric counseling</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Critical Care at Home</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Skilled Nursing Care at Home</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Nursing Assistance at Home</a>
                </li>
                <li class="flex gap-1 text-gray-400 text-sm items-center mb-2">
                    <img src="/images/icons/arrow.png" alt="" class="h-3  items-center">
                    <a href="">Nursing Procedures</a>
                </li>
            </ul>
        </div>
        <div class=" w-3/12 justify-start">
            <p class="text-xl font-bold mb-4">Subscribe to our Newsletter</p>
            <div class="mb-3">
                <input type="email" placeholder="Email Address...">
            </div>
            <div class="mb-3">
                <button type="Submit" class="text-white bg-blue-500 p-1.5 rounded-sm text-sm">Sign Up</button>
            </div>
        </div>

    </footer>

    <div class="call flex justify-center gap-2 bg-[#273c75] p-3 z-50 sticky bottom-0 w-full ">
        <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]">Request a call</button>
        <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]">Connect on
            Whatsapp</button>
    </div> -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>