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

    <div class="call flex justify-center gap-2 bg-[#273c75] p-3 z-50 sticky bottom-0 w-full ">
        <button class="bg-[#487eb0] p-2 rounded-lg font-serif text-white hover:bg-[#40739e]">Request a call</button>
        <button class="bg-[#27ae60] p-2 rounded-lg font-serif text-white hover:bg-[#2ecc71]">Connect on
            Whatsapp</button>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
