@extends('home.base')
@section('content')




<!-- <div id="default-carousel" class=" w-[100%] " data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="  overflow-hidden rounded-lg md:h-96 mt-10">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/banner.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/banner2.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/banner-3.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
</div> -->


<div class="menu flex mt-40 justify-evenly px-20">


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
</div>

<div class="extend-about w-full flex ">
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
</div>

<div class="extent-long-terms w-full ml-10 mt-20 mr-10">
    <h1 class='text-blue-600 text-7xl dark:text-white font-thin '>Long Term Plans</h1>
    <p class='mt-5 font-bold text-gray-500 leading-7'>Our Home Partnership Programs nurture lasting relationships by
        upholding the dignity of those receiving healthcare as well as supporting those who give care. We provide expert
        medical supervision with compassionate homecare over an extended period of time at home and our home care plans
        encompass personalized healthcare services, including vaccination at home, patient care services, sample
        collection, injection services, nurse at home(female/male), home doctor visit and physiotherapist visits.</p>
    <p class="mt-3 font-bold text-gray-500 leading-7">

        Apollo HomeCare aims to provide home healthcare services of international standards at an affordable cost in
        Hyderabad, Bangalore, Chennai, Delhi, Kolkata, and other cities.</p>
</div>


<div class="care-plans flex mt-20 justify-evenly items-center px-10">
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
</div>


<div class="extent-testimonials w-full ml-10 mt-15 mr-10">
    <h1 class='text-blue-600 text-7xl dark:text-white font-thin '>Testimonials</h1>
    <p class='mt-5 font-bold text-gray-500 leading-7'>Our Home Partnership Programs nurture lasting relationships by upholding the dignity of those receiving care as well as supporting those who give care. We provide expert medical supervision with compassionate care over an extended period.    </p>
</div>


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
    
</div>


<div class="footer">
    
</div>



@endsection