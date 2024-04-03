<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>DSCare4U</title>
</head>

<body class='p-0 m-0 font-sans bg-white'>

    <div class="bg-[#006266] items-center justify-end pr-16 w-full flex md:flex md:w-auto md:order-1 p-2 ">
        <ul class="flex flex-col mt-4 font-semibold text-sm  gap-6 md:flex-row md:mt-0 pr-12 ">
            <li>
                <a href="#"
                    class="block py-2 px-3 text-white  rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Blog</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Event</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Media</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Gallery</a>
            </li>
        </ul>
    </div>


    <nav
        class="bg-white dark:bg-gray-900 text-sm  w-full   border-gray-200 dark:border-gray-600 shadow-2xl z-40 sticky top-0">
        <div class="max-w-screen-xl flex  flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center space-x-3 ml-8 mt-4 rtl:space-x-reverse">
                <img src="/images/ds-care-footer.jpg" class="h-12" alt="Flowbite Logo">
            </a>
            <div class="location flex ">
                <!-- <label for="" class="pt-1 mr-1">Location:</label> -->
                <select name="" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-9">
                    <option value="">Select Location</option>
                    <option value="">Purnea</option>
                    <option value="">Patna</option>
                    <option value="">Katihar</option>
                    <option value="">Arariya</option>
                </select>
            </div>
            <p>Bihar :- 7288818181 / 939 2682922</p>
            <p> Mumbai :- 7288818181</p>
            <div class="float-end md:order-2 space-x-3 pr-5 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="loginForm">Login/Sign
                    Up</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

        </div>

        <div class="items-center justify-end pr-5 pt-3 pb-3 hidden w-full md:flex md:w-auto md:order-1 bg-[#40739e] ">
            <ul
                class="flex flex-col font-extralight text-sm p-4 md:p-0 mt-2  rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 bg-[#40739e]">
                <li>
                    <a href="/" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">About Us</a>
                </li>
                <li>
                    <a href="/services" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Services</a>
                </li>
                <li>
                    <a href="/plans" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Plans</a>
                </li>
                <li>
                    <a href="/appointment" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Appointment</a>
                </li>
                <li>
                    <a href="/career" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Career</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Login work -->

    <div id="login" class="hidden fixed inset-0 items-center justify-center z-50 mt-20">
        <div class="modal-content  bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto p-4">
            <div class="flex justify-end pr-4">
                <button id="closeFormButton" class="text-3xl leading-none hover:text-gray-300">&times;</button>
            </div>
            <div class="py-2 px-10">
                <h2 class="text-xl font-bold mb-2">Login Form</h2>
                <form>
                    @csrf
                    <div class="mb-1">
                        <label for="mobile" class="block text-gray-700 font-bold mb-1">Mobile No:</label>
                        <input type="tel" id="mobile" name="mobile" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your Mobile No">
                    </div>
                    <div class="mb-2">
                        <button type="button" id="sendOTP" class="text-green-500 text-sm hover:underline ">Send Otp</button>
                    </div>
                    <div class="mb-2" id="otpSection" style="display:none;">
                        <label for="otp" class="block text-gray-700 font-bold mb-1">Enter Your OTP:</label>
                        <input type="text" id="otp" name="otp" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter your OTP">
                        <button type="button" id="verifyOTP"class="mt-2 w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " >Verify OTP</button>
                    </div>
                    <div class="flex justify-center">
                    <!-- <button type="submit "class="mt-2 w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Login Now</button> -->

                    <div id="message"></div>

                    </div>
                    
                </form>
            </div>
        </div>
    </div>


    <script>
        // JavaScript to handle opening and closing of the form
       

    //     $(document).ready(function(){
    //         $('#sendOTP').on('click',function(){
    //             let mobile = $('input[name="mobile"]').val();

    //             $.ajax([
    //                 type:"POST",
    //                 url:'api/login',
    //                 data:{
    //                     mobile: mobile 
    //                 },
    //                 success: function(response){
    //                     $('#otpSection').show();
    //                     $('#message').html(response.message);
    //                 },
    //                 error: function(xhr,status,error){
    //                     $('#message').html(xhr.responseJSON.message);
    //                 }
    //             ]);
    //         });

    //         $('#verifyOTP').on('click',function(){
    //             let otp = $('input[name="otp"]').val();

    //             $.ajax({
    //                 type: POST,
    //                 url:'api/verify-otp',
    //                 data:{
    //                     otp: otp
    //                 },
    //                 success: function(response){
    //                     window.open('/home/index','_self');
    //                 },
    //                 error: function(xhr,status,error){
    //                     $('#message').html(xhr.responseJSON.message);
    //                 }
    //             });
    //         })
    //     });

    //     document.addEventListener('DOMContentLoaded', function() {
    //         let openFormButton = document.getElementById('loginForm');
    //         let closeFormButton = document.getElementById('closeFormButton');
    //         let loginForm = document.getElementById('login');

    //         openFormButton.addEventListener('click', function() {
    //             loginForm.classList.remove('hidden');
    //         });

    //         closeFormButton.addEventListener('click', function() {
    //             loginForm.classList.add('hidden');
    //         });
    //     });

</script>
<script>
    $(document).ready(function(){
    $('#sendOTP').on('click',function(){
        let mobile = $('input[name="mobile"]').val();

        $.ajax({
            type: "POST",
            url: 'api/login',
            data: {
                mobile: mobile 
            },
            success: function(response){
                console.log(response.data);
                $('#otpSection').show();
                $('#message').html(response.message);
            },
            error: function(xhr,status,error){
                $('#message').html(xhr.responseJSON.message);
            }
        });
    });

    $('#verifyOTP').on('click',function(){
        let otp = $('input[name="otp"]').val();

        $.ajax({
            type: "POST",
            url: 'api/verify-otp',
            data: {
                otp: otp
            },
            success: function(response){
                window.open('/home/index','_self');
            },
            error: function(xhr,status,error){
                $('#message').html(xhr.responseJSON.message);
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let openFormButton = document.getElementById('loginForm');
    let closeFormButton = document.getElementById('closeFormButton');
    let loginForm = document.getElementById('login');

    openFormButton.addEventListener('click', function() {
        loginForm.classList.remove('hidden');
    });

    closeFormButton.addEventListener('click', function() {
        loginForm.classList.add('hidden');
    });
});
</script>



    @section('content')
    @show


    {{-- footer work --}}




    <footer class="flex justify-evenly mb-4 w-full h-56 px-20 gap-10  mt-12">
        <div class="w-3/12">
            <a href="">
                <img src="/images/footer_logo.jpg" alt="">
            </a>
            <p class="text-start text-gray-400 text-sm mt-5">
                No. 40, North Phase,
                5th Cross Street, Kalaimagal Nagar, Ekkatuthangal, Chennai
                TAMIL NADU- 600032.
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

    <div class="call flex justify-center gap-2 bg-[#273c75] p-3 z-30 sticky bottom-0 w-full ">
        <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]" id="requestCallBtn">Request a call</button>
        <a href="http://wa.me/919128528958" target="_blank" rel="noopener noreferrer">
        <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]">Connect on
            Whatsapp</button>
        </a>
    </div>
    
    {{-- <div class="call flex justify-center gap-2 bg-[#273c75] p-3 z-30 sticky bottom-0 w-full">
        <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]">Request a call</button>
        <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" ><path fill="#63E6BE" d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z"/></svg></button>
    </div> --}}

    <!-- Request a call Work -->

<div id="callingForm" class="hidden fixed inset-0 items-center justify-center z-50 ">
    <div class="modal-content bg-white md:max-w-lg mx-auto mt-2 w-[30%] rounded shadow-lg z-50 overflow-y-auto">
       
        <div class="flex py-2 px-1">
            <div class=" w-full">
                <div class="flex justify-end pt-1 pr-4">
                    <button id="closeFormButton" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                </div>
                <h2 class="text-xl font-bold mb-2 text-center">Request Call Now</h2>
                <form class="p-4" id="requestCall">
                    <div class="mb-2">
                        <input type="text" id="name" name="name" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Name">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="mobile" name="mobile" class="form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Mobile">
                    </div>
                   
                    <div class="mb-2">
                        <textarea id="address" name="address" rows="2" class="form-textarea form-input w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            placeholder="Address"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>


<script>
// JavaScript to handle opening and closing of calling request Form

        document.addEventListener('DOMContentLoaded', function() {
        let openFormButton = document.getElementById('requestCallBtn');
        let closeFormButton = document.getElementById('closeFormButton');
        let callingForm = document.getElementById('callingForm');

        openFormButton.addEventListener('click', function() {
            callingForm.classList.remove('hidden');
        });

        closeFormButton.addEventListener('click', function() {
            callingForm.classList.add('hidden');
        });
    });

    $(document).ready(function() {
    //insert new call request

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
                window.open("/", "_self")
            }
        })
    })
})
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
