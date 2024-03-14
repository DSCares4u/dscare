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


    <nav class="bg-white dark:bg-gray-900 text-sm  w-full   border-gray-200 dark:border-gray-600 shadow-2xl z-40 sticky top-0">
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
            <p>Call :  +91 7288818181 / +91 939 2682922</p>
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
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">About Us</a>
                </li>
                <li>
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Care Plans</a>
                </li>
                <li>
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Franchise Enquiry</a>
                </li>
                <li>
                    <a href="#"
                        class="block  py-2  text-white rounded bg-[#40739e]  md:p-0 "
                        aria-current="page">Connect</a>
                </li>
                <!-- <li>
                    <a href="#"
                        class="block   hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-white rounded bg-[#40739e]">About
                        Us</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-white rounded bg-[#40739e]">Care
                        Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-white rounded bg-[#40739e]">Care
                        Plans</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-white rounded bg-[#40739e]">Franchise
                        Enquiry</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-white rounded bg-[#40739e]">Connect</a>
                </li> -->
            </ul>
        </div>

    </nav>



    @section('content')
    @show
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
