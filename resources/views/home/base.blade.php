<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>DSCare4U</title>
</head>

<body class='p-0 m-0 font-sans'>

    <div class="bg-[#e58e26] items-center justify-end mb-10 pr-16 w-full flex md:flex md:w-auto md:order-1 p-2 ">
        <ul class="flex flex-col mt-4 font-semibold text-sm  gap-6 md:flex-row md:mt-0 pr-12 ">
            <li>
                <a href="#" class="block py-2 px-3 text-white  rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Blog</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Event</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Media</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page">Gallery</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent  md:p-0 md:dark:text-blue-500"
                    aria-current="page"></a>
            </li>
        </ul>
    </div>

    <div class="header ">
     
    </div>

 <div class="header "> 
    <!-- <nav class="p-10 float-right justify-end top-25">
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">                           
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login/Sign Up</button>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
    </nav> -->

  <nav class="bg-white dark:bg-gray-900  w-full mt-10 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DS Cares 4 U</span>
    </a>
    
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky pr-10">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block pointer py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Care Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Care Plans</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Franchise Enquiry</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Connect</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

</div> 

    @section('content')
    @show
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>