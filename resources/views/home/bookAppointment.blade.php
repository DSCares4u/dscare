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

<div class="mt-10 flex flex-wrap mx-10 justify-center gap-8">
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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
            <button class=" p-1.5 text-white bg-yellow-500">Book Video Consult</button>
            <button class=" bg-[#006266] p-1.5 text-white ">Book Hospital Visit</button>
        </div>
    </div>   
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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
            <button class=" p-1.5 text-white bg-yellow-500">Book Video Consult</button>
            <button class=" bg-[#006266] p-1.5 text-white ">Book Hospital Visit</button>
        </div>
    </div>   
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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
            <button class=" p-1.5 text-white bg-yellow-500">Book Video Consult</button>
        </div>
    </div>   
    <div class="doctor w-3/12  border border-gray-200 rounded-lg shadow ">
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




@endsection