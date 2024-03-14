@extends('home.base')
@section('content')

<div class="banner">
    <div id="default-carousel" class="relative mt-3 w-full " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700  ease-in-out" data-carousel-item>
                <img src="/images/1.jpg"
                    class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/2.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/3.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
       
    </div>
</div>

<div class="services flex gap-3 mx-8 mt-20">
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white hover: border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
    <div
        class="mx-auto pt-4 h-24 w-28 my-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="/images/icons/jar.png" class="mx-auto" alt="">
        <a href="" class="mx-6">Medicine</a>
    </div>
</div>

<div class="flex justify-center mt-3">
    <button class="bg-[#0a3d62] p-3 rounded-lg font-serif text-white hover:bg-[#356d96]">Book Your Service</button>
</div>

<div class="w-full flex justify-evenly px-16 mt-10 ">
    <div class="about w-4/12">
        <h2 class=" font-bold leading-snug text-xl text-[#273c75]">Why Us ?</h2>
        <p class="mt-5 leading-normal">Max@Home, India’s largest home healthcare brand under the umbrella of Max
            Healthcare; leading healthcare provider in the country, with a vision to bring their medical expertise and
            hospital-quality care to the comfort of patients’ homes. With a special purpose to help people lead a life
            with independence and dignity, Max@Home delivers services with compassion, excellence and reliability.

        </p>
    </div>
    <div class="icon w-4/12 px-5">
        <img src="/images/icons/about.png" alt="">
    </div>
    <div class="questions w-4/12 px-5">
        <ul>
            <li class="flex mb-3"><img src="/images/icons/tick3.png" class="mr-2 px-1" alt="">Largest home healthcare
                providers</li>
            <li class="flex mb-3"><img src="/images/icons/tick3.png" class="mr-2 px-1" alt="">Certified & trained
                caregivers</li>
            <li class="flex mb-3"><img src="/images/icons/tick3.png" class="mr-2 px-1" alt="">Personalized care plans
            </li>
            <li class="flex mb-3"><img src="/images/icons/tick3.png" class="mr-2 px-1" alt="">Multi-disciplinary care
                teams</li>
            <li class="flex mb-3"><img src="/images/icons/tick3.png" class="mr-2 px-1" alt="">Clinically backed
                protocols
            </li>
        </ul>
    </div>
</div>


<!-- <div class="services flex justify-center  gap-8 mt-16">
    <div class="services-name ">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Doctor Consultation</h3>
    </div>
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Nurse/Attendent</h3>
    </div>
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Physiotherapy at home</h3>
    </div>
    <div class="services-name ">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Lab tests and sample collection</h3>
    </div>

</div>
<div class="services flex justify-center  gap-8 mt-16">
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">ECG, X-ray at home</h3>
    </div>
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Home Dialysis</h3>
    </div>
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Dental Care Services at Home</h3>
    </div>
    <div class="services-name">
        <div class="service-img bg-[#48dbfb] rounded-full h-40 w-40 border shadow-2xl ">
            <img src="/images/icons/nurse1.png" class="mx-auto pt-5" alt="">
        </div>
        <h3 class="text-center text-lg tracking-tight font-semibold text-gray-500">Medicine Delivery</h3>
    </div>
</div> -->

<div class="packages flex justify-around gap-2 mt-10 w-full mx-8 p-2 ">
    <div class="w-2/12 max-w-sm  mb-2   bg-white border border-[#54a0ff] hover:border-[#29476b] ">
        <div class="flex justify-center gap-5 bg-[#006266] p-2 text-white mb-2">
            <h5 class=" text-lg font-bold text-center   dark:text-white">Base Plan</h5>
        </div>
        <div class="validity ml-2">
            <h4 class="font-semibold text-[#006266]">Validity : 1 Year</h4>
            <hr>
        </div>
        <ul class="mb-2 pl-4 mt-1">
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
          
            
        </ul>
        <div class="price flex ml-3 justify-between mb-2"><del class="text-gray-400">Rs. 8000</del> <p class="text-red-500 mr-4 font-bold">Rs. 5000</p></div>
        <a href="#" class="inline-flex ml-3 font-medium text-sm items-center text-blue-600 hover:underline">
            See Details
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
        </a>
        <button class="float-end font-light p-1 rounded-sm mb-2 text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

    </div>
    <div class="w-2/12 max-w-sm  mb-2   bg-white border border-[#54a0ff] hover:border-[#29476b] ">
        <div class="flex justify-center gap-5 bg-[#006266] p-2 text-white mb-2">
            <h5 class=" text-lg font-bold text-center   dark:text-white">Base Plan</h5>
        </div>
        <div class="validity ml-2">
            <h4 class="font-semibold text-[#006266]">Validity : 1 Year</h4>
            <hr>
        </div>
        <ul class="mb-2 pl-4 mt-1">
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
          
            
        </ul>
        <div class="price flex ml-3 justify-between mb-2"><del class="text-gray-400">Rs. 8000</del> <p class="text-red-500 mr-4 font-bold">Rs. 5000</p></div>
        <a href="#" class="inline-flex ml-3 font-medium text-sm items-center text-blue-600 hover:underline">
            See Details
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
        </a>
        <button class="float-end font-light p-1 rounded-sm mb-2 text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

    </div>
    <div class="w-2/12 max-w-sm  mb-2   bg-white border border-[#54a0ff] hover:border-[#29476b] ">
        <div class="flex justify-center gap-5 bg-[#006266] p-2 text-white mb-2">
            <h5 class=" text-lg font-bold text-center   dark:text-white">Base Plan</h5>
        </div>
        <div class="validity ml-2">
            <h4 class="font-semibold text-[#006266]">Validity : 1 Year</h4>
            <hr>
        </div>
        <ul class="mb-2 pl-4 mt-1">
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
          
            
        </ul>
        <div class="price flex ml-3 justify-between mb-2"><del class="text-gray-400">Rs. 8000</del> <p class="text-red-500 mr-4 font-bold">Rs. 5000</p></div>
        <a href="#" class="inline-flex ml-3 font-medium text-sm items-center text-blue-600 hover:underline">
            See Details
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
        </a>
        <button class="float-end font-light p-1 rounded-sm mb-2 text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

    </div>
    <div class="w-2/12 max-w-sm  mb-2   bg-white border border-[#54a0ff] hover:border-[#29476b] ">
        <div class="flex justify-center gap-5 bg-[#006266] p-2 text-white mb-2">
            <h5 class=" text-lg font-bold text-center   dark:text-white">Base Plan</h5>
        </div>
        <div class="validity ml-2">
            <h4 class="font-semibold text-[#006266]">Validity : 1 Year</h4>
            <hr>
        </div>
        <ul class="mb-2 pl-4 mt-1">
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
            <li class="flex w-10/12 mb-2">
                <img src="images/icons/tick-p.png" alt="" class="h-6  mt-1 mr-1">
                <p class="text-sm  text-gray-500">Iron And Total Iron Binding Capacity</p>
            </li>
          
            
        </ul>
        <div class="price flex ml-3 justify-between mb-2"><del class="text-gray-400">Rs. 8000</del> <p class="text-red-500 mr-4 font-bold">Rs. 5000</p></div>
        <a href="#" class="inline-flex ml-3 font-medium text-sm items-center text-blue-600 hover:underline">
            See Details
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
        </a>
        <button class="float-end font-light p-1 rounded-sm mb-2 text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

    </div>
</div>

<div class="advertisment flex gap-5 mx-5">
    <div id="default-carousel" class="relative mx-auto z-10 h-96 w-6/12 " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-36 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-2.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-4.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <!-- <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button> -->
    </div>
    <div id="default-carousel" class="relative mx-auto z-10 h-96 w-6/12 " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-36 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-2.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-4.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/ad-banner-1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <!-- <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button> -->
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>


<!-- 
<div class="menu flex mt-4 justify-evenly px-20">


    <div class=" w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/doctor.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Doctor At Home</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Apollo's team of expert,
                specialized doctors</p>

        </div>
    </div>
    <div class=" w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/nurse.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nurse At Home</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Compassionate and skilled
                nursing staff.</p>

        </div>
    </div>
    <div class=" w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/physio.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Physio At Home</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Professionally trained
                physiotherapists</p>

        </div>
    </div>
    <div class=" w-4/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/medical.png" height="50px" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Medical
                    Equipment at Home
                </h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Rent & Purchase equipment</p>

        </div>
    </div>
</div> -->

<!-- <div class="extend-about w-full flex mt-10 ">
    <div class=" w-6/12 ml-10 ">
        <h1 class='text-blue-600 text-7xl dark:text-white font-thin '>About <br>
            DS Cares 4 U</h1>
        <p class='mt-5 font-bold text-gray-500 leading-7'>The transforming healthcare scenario in India has led to the
            advent of Homecare – Health care services that conveniently come Home for the comfort of patients and their
            families. Our home care services prioritize your loved one’s well-being. <br>
        </p>
        <p class='mt-3  font-bold text-gray-500 leading-7'>
            Apollo HomeCare’s transformative journey has redefined the healthcare landscape in India over the last few
            decades with its mission of delivering quality home care services to millions of Indians. In keeping with
            this mission, Apollo HomeCare, with its unique treatment options, delivers clinical excellence with
            compassion and healthcare to the comfort of your home.</p>
    </div>
    <div class="flex w-1/2">

    </div>
</div> -->

<!-- <div class="extent-long-terms w-full ml-10 mt-20 mr-10">
    <h1 class='text-blue-600 text-7xl dark:text-white font-thin '>Long Term Plans</h1>
    <p class='mt-5 font-bold text-gray-500 leading-7'>Our Home Partnership Programs nurture lasting relationships by
        upholding the dignity of those receiving healthcare as well as supporting those who give care. We provide expert
        medical supervision with compassionate homecare over an extended period of time at home and our home care plans
        encompass personalized healthcare services, including vaccination at home, patient care services, sample
        collection, injection services, nurse at home(female/male), home doctor visit and physiotherapist visits.</p>
    <p class="mt-3 font-bold text-gray-500 leading-7">

        Apollo HomeCare aims to provide home healthcare services of international standards at an affordable cost in
        Hyderabad, Bangalore, Chennai, Delhi, Kolkata, and other cities.</p>
</div> -->


<!-- <div class="care-plans flex mt-20 justify-evenly items-center px-10">
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/ortho.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ortho Rehab</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Total Knee Replacement, Total Hip
                Replacement & Spine Surgery</p>

        </div>
    </div>
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/heart.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Heart Rehab</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Congestive Heart Failure & Post
                Cardiac Surgery</p>

        </div>
    </div>
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/neuro.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Neuro Rehab</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Stroke, Parkinson’s, Post Brain
                and Spinal Surgery</p>

        </div>
    </div>
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/lungs.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lungs Rehab</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Asthma and Chronic Obstructive
                Pulmonary Disease</p>

        </div>
    </div>
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex'>
            <img class="rounded-t-lg" src="/images/icons/mother.png" alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">Mother &
                    Baby Care</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Post natal care & support for
                Mother & Baby</p>

        </div>
    </div>
    <div class=" w-6/12 shadow dark:bg-gray-800 ">
        <a href="#" class='justify-center flex h'>
            <img class="rounded-t-lg" src="/images/icons/elder.png" height='' alt="" />
        </a>
        <div class="p-3">
            <a href="#" class='justify-center flex'>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elder Care</h5>
            </a>
            <p class="mb-10 text-center font-normal text-gray-700 dark:text-gray-400">Long term partnership plans for
                geriatric care.</p>

        </div>
    </div>
</div> -->

<div class="pre-footer w-full flex h-40 mt-20">
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
            <p class="mb-2  font-normal text-sm  dark:text-gray-400">Takes a complete blood count, to detect anemia,
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
            <p class="mb-2  font-normal text-sm  dark:text-gray-400">Avail Ventilator/ BIPAP for rental or purchase at
                cost-effective prices for your elderly. Choose from a wide range of products and brands.</p>
            <button class="bg-pink-500 text-white text-sm rounded-lg p-1">Read More</button>
        </div>
    </div>
</div>

<!-- 
<div class="stat flex mt-20 justify-evenly items-center px-10">
    <div class="employees">
        <h2 class='text-blue-600 text-7xl text-center'>800+</h2>
        <p class='text-center text-gray-500 leading-7'>Employees</p>
    </div>
    <div class="employees">
        <h2 class='text-blue-600 text-7xl text-center'>2Lakh</h2>
        <p class='text-center text-gray-500 leading-7'>Patient Care Episodes</p>
    </div>
    <div class="employees">
        <h2 class='text-blue-600 text-7xl text-center'>14</h2>
        <p class='text-center text-gray-500 leading-7'>Cities</p>
    </div>

</div> -->

<!-- <div class="flex pre-footer mt-10 bg-[#1B9CFC]">
    <div class="w-1/2">
        <h2 class="text-5xl text-white font-extrabold p-12 leading-tight">
            Our Specialized <br>
            Out-of-Hospital care services for seniors are now available in Bengaluru, Hyderabad & Chennai
            To know more you can…
        </h2>
    </div>
    <div class="w-1/2 ">


        <form class="max-w-sm mx-auto mt-16">
            <h2 class="text-white text-4xl font-extrabold text-center mb-10 font-serif">Contact Us</h2>
            <div class="mb-5">
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Name" required />
            </div>
            <div class="mb-5">
                <input type="tel" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Phone" required />
            </div>
            <div class="mb-5">
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Email" required />
            </div>
            <div class="mb-5">
                <select name="" id=""
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select Location</option>
                    <option value="">Purnea</option>
                    <option value="">Patna</option>
                    <option value="">Katihar</option>
                    <option value="">Arariya</option>
                </select>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div> -->



<!-- <footer class=" dark:bg-gray-900 ">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap  dark:text-white">DS
                        Cares 4 U</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase dark:text-white">Resources</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">DSCares4U</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">DSCares4U™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 21 16">
                        <path
                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer> -->



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
    <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]" >Request a call</button>
    <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]">Connect on Whatsapp</button>
</div>






@endsection