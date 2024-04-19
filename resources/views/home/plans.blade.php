@extends('home.base')
@section('content')

<div class="upper mt-5">
    <div class="head flex items-center justify-center h-80" style="background-image: url('/images/plans-head.jpg');">
        <h3 class=" uppercase  text-white font-bold text-4xl tracking-wider">Health Care packages <p class="text-sm text-center mt-3 font-medium tracking-widest">Home / Healthcare Packages</p>
        </h3>
    </div>
</div>
<div class="care-packages  mt-10">
    <h3 class="text-center text-3xl font-bold">General Care Packages</h3>
    <div class="cards mt-10 flex justify-center flex-wrap gap-5" id="callingPlan">
        <!-- <div class="max-w-xs  bg-white border border-[#006266] p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <a href="#">
                <img class="rounded-t-lg" src="/images/premium-plan.png" alt="" />
            </a>
            <a href="#">
                <h5
                    class="mb-2 mt-2 text-2xl text-center font-bold tracking-tight text-white bg-blue-500 dark:text-white uppercase">
                    Base Plan</h5>

            </a>
            <ul class="mt-2">
                <li class="flex font-medium  text-[13px]  "><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                        alt=""> 09 General Physician Consultations</li>
                <li class="flex font-medium text-[13px]"><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                        alt="">Regular Monitoring</li>
                <li class="flex font-medium text-[13px]"><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                        alt="">Electronic Health Records</li>
                <li class="flex font-medium text-[13px]"><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                        alt="">24* 7 Ambulance Service</li>
                <li class="flex font-medium text-[13px]"><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                        alt="">Concierge</li>
            </ul>
            <div class="flex justify-between w-full">
                <p class="text-base font-semibold mt-12 ">₹1500 <del class="text-gray-500 mr-2 text-sm"> Rs. 1,795
                    </del>
                </p>
                <div class="mt-5">
                    <p class="text-base ml-3 font-bold text-[#ff3f34]
                     ">79% Off</p>

                    <button class=" p-2 py-1 font-medium  rounded-md bg-[#006266]  text-white">Buy
                        Now</button>
                </div>
            </div>
        </div> -->
    </div>
</div>
<div class="benefits w-full flex mt-10 gap-8 mx-12 justify-center">
    <img src="/images/benefits.jpg" alt="" class="w-4/12">
    <div class="points w-9/12">
        <h3 class="text-3xl font-light text-[#f53b57]">Membership Benefits</h3>
        <ul class="mt-5 mx-3">
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">A comprehensive health check-up and home security evaluation for your parents</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">A background-verified, dedicated, Care Manager assigned to your family</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">A 24X7 number to call for any of your parents' needs</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">Strong technology platform with a Mobile App and Web Login portal with real-time updates</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">Up to 40% discount on Pathology & Radiology services</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">Up to 15% discount on pharmacies</li>
            <li class="flex text-sm gap-2 mt-2 text-gray-500"><img src="/images/icons/dot.png" alt="" class="h-3 text-center mt-1">Waiver on site-visit charges and up to 10% discounts on any services availed from HouseJoy, ServizPro, HouzKare and Nightingales exclusively for Anvayaa members.</li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Function to fetch and display Plans
        let callingPlan = () => {
            $.ajax({
                type: "GET",
                url: "{{ route('plan.index') }}",
                success: function(response) {
                    let card = $("#callingPlan");
                    card.empty();
                    let data = response.data;
                    data.forEach((item) => {
                        let discount = Math.round(((item.price - item.discount_price) / item.price) * 100);
                        card.append(`                        
                        <div class="max-w-xs  bg-white border border-[#006266] p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                            <a href="#">
                                <img class="rounded-t-lg" src="/image/plan/${item.image}" alt=""/>
                            </a>
                            <a href="#">
                                <h5 class="mb-2 mt-2 text-2xl text-center font-bold tracking-tight text-white bg-blue-500 dark:text-white uppercase">${item.name}</h5>
                            </a>
                            <ul class="mt-2">
                                <li class="flex font-medium  text-[13px]  "><img src="/images/icons/correct.png" class="h-4 mr-2 mt-1"
                                        alt="">${item.features}</li>
                            </ul>
                            <div class="flex justify-between w-full">
                                <p class="text-base font-semibold mt-12 ">₹${item.discount_price} <del class="text-gray-500 mr-2 text-sm"> Rs. ${item.price}
                                    </del>
                                </p>
                                <div class="mt-5">
                                    <p class="text-base ml-3 font-bold text-[#ff3f34]
                                    ">${discount}% Off</p>
                                    <a href='/plans/book-now/${item.id}'>
                                    <button class=" p-2 py-1 font-medium  rounded-md bg-[#006266]  text-white">Buy
                                        Now</button>
                                        </a>
                                </div>
                            </div>
                        </div>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        callingPlan();
    });
</script>

@endsection