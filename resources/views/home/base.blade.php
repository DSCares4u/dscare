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
            <li>
                <a href="#"
                    class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page"></a>
            </li>
        </ul>
    </div>


    <nav
        class="bg-white dark:bg-gray-900 text-sm  w-full   border-gray-200 dark:border-gray-600 shadow-2xl z-40 sticky top-0">
        <div class="max-w-screen-xl flex  flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center space-x-3 ml-8 mt-4 rtl:space-x-reverse">
                <img src="/images/logo.png" class="h-16" alt="Flowbite Logo">
            </a>
            <div class="location flex ">
                <label for="" class="pt-1 mr-1">Location:</label>
                <select name="" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select Location</option>
                    <option value="">Purnea</option>
                    <option value="">Patna</option>
                    <option value="">Katihar</option>
                    <option value="">Arariya</option>
                </select>
            </div>
            <p>Call : +91 7288818181 / +91 939 2682922</p>
            <p>For Mumbai Enquiries: +91 7288818181</p>
            <div class="float-end md:order-2 space-x-3 pr-5 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login/Sign
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
                    <a href="#" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Services</a>
                </li>
                <li>
                    <a href="#" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Plans</a>
                </li>
                <li>
                    <a href="#" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Franchise Enquiry</a>
                </li>
                <li>
                    <a href="#" class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Connect</a>
                </li>
            </ul>
        </div>

    </nav>



    @section('content')
    @show


    {{-- footer work --}}


    <div class="pre-footer w-full flex h-40 mt-5">
        <div class="w-4/12 text-white bg-[#3e7199] flex">
            <a href="#" class='justify-center items-center flex w-3/12'>
                <img class="rounded-t-lg h-20 " src="/images/icons/doc.png" alt="" />
            </a>
            <div class=" w-9/12">
                <a href="#" class='justify-start flex mt-6'>
                    <h5 class=" text-xl font-semibold  tracking-tight  dark:text-white">Book Doctor Consultations</h5>
                </a>
                <p class="mb-2  font-normal text-sm  dark:text-gray-400">Get doctor consultations at your doorstep on
                    Sundays and evenings by experienced doctors for the convenience of your elderly loved ones.</p>
                <button class="bg-pink-500 text-white text-sm rounded-lg p-1">Read More</button>
            </div>
        </div>
        <div class="w-4/12 text-white bg-[#3b89c5] flex">
            <a href="#" class='justify-center items-center flex w-3/12'>
                <img class="rounded-t-lg h-20 " src="/images/icons/lab.png" alt="" />
            </a>
            <div class=" w-9/12">
                <a href="#" class='justify-start flex mt-6'>
                    <h5 class=" text-xl font-semibold  tracking-tight  dark:text-white">Book Lab Tests- CBC</h5>
                </a>
                <p class="mb-2  font-normal text-sm  dark:text-gray-400">Takes a complete blood count, to detect
                    anemia,
                    infections and can detect diseases like bone marrow disorders, dehydration, etc.</p>
                <button class="bg-pink-500 text-white text-sm rounded-lg p-1">Read More</button>
            </div>
        </div>
        <div class="w-4/12 text-white bg-[#3e7199] flex">
            <a href="#" class='justify-center items-center flex w-3/12'>
                <img class="rounded-t-lg h-20 " src="/images/icons/rent.png" alt="" />
            </a>
            <div class=" w-9/12">
                <a href="#" class='justify-start flex mt-6'>
                    <h5 class=" text-xl font-semibold  tracking-tight  dark:text-white">Buy or Rent Equipment</h5>
                </a>
                <p class="mb-2  font-normal text-sm  dark:text-gray-400">Avail Ventilator/ BIPAP for rental or purchase
                    at
                    cost-effective prices for your elderly. Choose from a wide range of products and brands.</p>
                <button class="bg-pink-500 text-white text-sm rounded-lg p-1">Read More</button>
            </div>
        </div>
    </div>


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

    <div class="call flex justify-center gap-2 bg-[#273c75] p-3 z-50 sticky bottom-0 w-full ">
        <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]">Request a call</button>
        <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]">Connect on
            Whatsapp</button>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
