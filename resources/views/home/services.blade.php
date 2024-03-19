@extends('home.base')

@section('content')

<div class="service-head flex mx-10  mt-10 gap-5 mb-10">
    <div class="w-1/2">
        <h3 class="text-3xl text-[#6F1E51] font-light">Emergency Care Assistance</h3>
        <p class="mt-5 leading-5 text-gray-500 text-sm font-light">The goal of Crisis Care is to stabilize the immediate situation with right care and support. Anvayaa provides an array of Crisis Care services now operational in more than 40+ cities so that your parents are ready to tackle the difficulties. Depending on the severity of the crisis, the well-trained members will refer you to specific medical services.</p>
    </div>
    <div class="w-1/2 flex justify-end ">
        <img src=" /images/emer-service.jpg" class="h-56 " alt="">
    </div>
</div>

<hr class="mx-10 text-[#75284f]">

<div class="services-name mx-10 mt-5">
    <h3 class="text-3xl text-[#6F1E51] font-light">Caregiver Services for Seniors in now operational in more than 40+ cities</h3>
    <div class="card flex flex-wrap mt-3">
        <div class="flex  px-2 w-1/3 mt-5">
            <img src="/images/icons/ambulance.png" class="h-5 mt-1" alt="">
            <div class="card flex flex-wrap pr-6 pl-2">
                <h5 class="text-[#6F1E51] font-semibold text-sm">Ambulance Assistance</h5>
                <p class="text-xs text-gray-400 mt-3">Anvayaa has partnered with 1500 + Ambulance service vendors for Emergency assistance/urgent care for elderly to provide immediate care. We make sure that the Ambulances are equipped with advanced equipment and are available round the clock or 24 /7.</p>
            </div>
        </div>
        <div class="flex  px-2 w-1/3 mt-5">
            <img src="/images/icons/non-medical.png" class="h-5 mt-1" alt="">
            <div class="card flex flex-wrap pr-6 pl-2">
                <h5 class="text-[#6F1E51] font-semibold text-sm">Non Medical Emergency</h5>
                <p class="text-xs text-gray-400 mt-3">Our company understands that emergencies are not only related to medical. Non-medical emergencies such as the need of a wheelchair at a certain location or transportation assistance to a funeral is also essential and will be provided by us immediately.</p>
            </div>
        </div>
        <div class="flex  px-2 w-1/3 mt-5">
            <img src="/images/icons/medical-emer.png" class="h-5 mt-1" alt="">
            <div class="card flex flex-wrap pr-6 pl-2">
                <h5 class="text-[#6F1E51] font-semibold text-sm">Medical Emergency Assistance Care Plan</h5>
                <p class="text-xs text-gray-400 mt-3">Emergency care/urgent care plans for your parents with specific health care needs are generated after health profiling. Our care manager discusses with you, your parents and the doctor to determine a specific care plan for any medical emergencies that may occur.</p>
            </div>
        </div>
        <div class="flex  px-2 w-1/3 mt-5">
            <img src="/images/icons/realtime.png" class="h-5 mt-1" alt="">
            <div class="card flex flex-wrap pr-6 pl-2">
                <h5 class="text-[#6F1E51] font-semibold text-sm">Realtime Updates</h5>
                <p class="text-xs text-gray-400 mt-3">Panic attacks are usual when someone we know is facing an emergency situation. Our team understands this and during an emergency situation provides you the 24 hr urgent care with consistent real-time updates related to the emergency issue.</p>
            </div>
        </div>
        <div class="flex  px-2 w-1/3 mt-5">
            <img src="/images/icons/ambulance.png" class="h-5 mt-1" alt="">
            <div class="card flex flex-wrap pr-6 pl-2">
                <h5 class="text-[#6F1E51] font-semibold text-sm">Ambulance Assistance</h5>
                <p class="text-xs text-gray-400 mt-3">Anvayaa has partnered with 1500 + Ambulance service vendors for Emergency assistance/urgent care for elderly to provide immediate care. We make sure that the Ambulances are equipped with advanced equipment and are available round the clock or 24 /7.</p>
            </div>
        </div>
    </div>
    <div class="btn text-center">
        <button class="bg-[#EE5A24] text-white rounded-xl mt-10 p-2 text-xs ">View Other Services</button>
    </div>
</div>




@endsection