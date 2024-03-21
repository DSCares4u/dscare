@extends('home.base')
@section('content')

<div class="banner">
    <div id="default-carousel" class="relative mt- w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700  ease-in-out" data-carousel-item>
                <img src="/images/1.jpg"
                    class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
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
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/banner/7.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/banner/5.jpg"
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

<div class="services flex gap-3 mx-8 mt-16">
    <a href="">
        <div class="mx-auto flex justify-center items-center my-auto max-w-sm bg-white hover:border border-gray-600  shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="/images/services/Medicine.jpg" class="h-20" alt="">
            <!-- <a href="" class="mx-6">Medicine</a> -->
        </div>
    </a>
   
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
    <button class="bg-[#0a3d62] p-3 rounded-lg font-serif text-white hover:bg-[#356d96]" id="openFormButton">Book Your Service</button>
</div>

<!-- Book Appointment Work -->
<div id="applicationForm" class="hidden fixed inset-0 items-center justify-center z-50 ">
    <div class="modal-content  bg-white w-11/12 md:max-w-lg mx-auto mt-2  rounded shadow-lg z-50 overflow-y-auto h-[80%]">
       
        <div class="flex py-2 px-2">
            <img src="/images/book.png" class="w-5/12" alt="">
            <div class=" w-7/12">

                <h2 class="text-xl font-bold mb-2 text-center">Booking A Service</h2>
                <form class="p-4">
                    <div class="mb-2">
                        <input type="text" id="name" name="name" class="form-input w-full"
                            placeholder="Name">
                    </div>
                    <div class="flex gap-3 mb-2">
                        <div class="w-1/2">
                            <input type="tel" id="mobile_no" name="mobile_no" class="form-input w-full"
                                placeholder="Phone">
                        </div>
                        <div class=" w-1/2">
                            <input type="email" id="email" name="email" class="form-input w-full"
                                placeholder="Email">
                        </div>
                    </div>                    
                    <div class="mb-2">
                        <input type="text" id="address" name="address" class="form-input w-full"
                            placeholder="Address">
                    </div>
                    <div class="mb-2">
                        <textarea id="description" name="description" rows="2" class="form-textarea w-full"
                            placeholder="Message"></textarea>
                    </div>
                    <button id="closeFormButton"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Close</button>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Submit</button>
                </form>
            </div>
        </div>

    </div>
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
        <button class="float-end font-light p-2 rounded-sm mb-2 font-mono text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

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
        <button class="float-end font-light p-2 rounded-sm mb-2 font-mono text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

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
        <button class="float-end font-light p-2 rounded-sm mb-2 font-mono text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

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
        <button class="float-end font-light p-2 rounded-sm mb-2 font-mono text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

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
        <button class="float-end font-light p-2 rounded-sm mb-2 font-mono text-sm items-center bg-[#006266] text-white hover:underline mr-3">Book Now</button>

    </div>
   
</div>

<div class="advertisment flex gap-5 mx-5" >
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
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/banner/1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
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
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/1.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
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


    <script>
        // JavaScript to handle opening and closing of the book appointment
        document.addEventListener('DOMContentLoaded', function() {
            let openFormButton = document.getElementById('openFormButton');
            let closeFormButton = document.getElementById('closeFormButton');
            let applicationForm = document.getElementById('applicationForm');

            openFormButton.addEventListener('click', function() {
                applicationForm.classList.remove('hidden');
            });

            closeFormButton.addEventListener('click', function() {
                applicationForm.classList.add('hidden');
            });
        });
    </script>








@endsection