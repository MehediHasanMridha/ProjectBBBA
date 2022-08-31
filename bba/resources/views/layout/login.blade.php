<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="style/LoginFirst.css" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/5507de1efb.js" crossorigin="anonymous"></script>
    <title>@yield('page_title')</title>
</head>

<body>
    <div class="overflow-hidden h-[100vh] relative bg-repeat" style="background-image: url('{{asset('images/feather.png')}}')">
        <div class="nav flex flex-row justify-between">
            @section('bsmrstu_logo')
                
            @show
            <i class="fa-solid fa-bars absolute right-1 top-3 z-30 text-3xl lg:invisible" id="icon" onclick="nav()" aria-hidden="true"></i>
            <div id="nav_menu"
                class="nav_menu font-['Segoe UI'] z-20 -mt-[500px] w-full bg-[#FF8C40] py-10 text-center text-3xl font-bold text-white lg:relative lg:top-0 lg:mt-[45.4px] lg:mr-[70.9px] lg:w-[652.14px] lg:bg-transparent lg:py-0 lg:text-right lg:text-[25px] lg:text-[#3E3E3E]">
                <ul class="space-y-8 lg:inline-flex lg:space-y-0 lg:space-x-[32.9px] 2xl:space-x-[55px]">
                    <li class="hover:text-[#1AA2A2] cursor-pointer">
                        Home
                    </li>
                    <li class="hover:text-[#1AA2A2] cursor-pointer">
                        Blog
                    </li>
                    <li class="hover:text-[#1AA2A2] cursor-pointer">
                        About
                    </li>
                    <li class="hover:text-[#1AA2A2] cursor-pointer">
                        Archive
                    </li>

                    <li class="cursor-pointer">
                        <i class="fa-solid fa-arrow-right-to-bracket mr-3 cursor-pointer"></i>
                        <span class="hover:text-[#1AA2A2] cursor-pointer">
                        Log In</span>
                    </li>
                </ul>
            </div>
        </div>
        @section('content')
        @show
        <div class="ml-[1500px] lg:ml-0">
            <img src="{{asset('images/Path 1.png')}}"
                class="absolute lg:-bottom-2 lg:-left-3 lg:h-[429.87px] lg:w-[570.75px] 2xl:w-[600px]" alt="" />
            <img src="{{asset('images/Ellipse 1.png')}}"
                class="absolute lg:left-[112.2px] lg:bottom-[82.5px] lg:h-[153.46px] lg:w-[153.24px] 2xl:left-[120px] 2xl:w-[130px]"
                alt="" />
            <img src="{{asset('images/Ellipse 4.png')}}"
                class="absolute lg:left-[284.38px] lg:bottom-[52.5px] 2xl:left-[280px] 2xl:bottom-[121px]"
                alt="" />
            <img src="{{asset('images/Ellipse 5.png')}}"
                class="absolute lg:bottom-[263px] lg:left-[97.2px] 2xl:bottom-[300px] 2xl:left-[100px]"
                alt="" />
            <img src="{{asset('images/Ellipse 3.png')}}"
                class="absolute lg:-right-[399.5px] lg:-bottom-[408px] lg:h-[655px] lg:w-[666px] 2xl:-right-[327px] 2xl:-bottom-[447px] 2xl:w-[700px]"
                alt="" />
            <img src="{{asset('images/Ellipse 7.png')}}"
                class="absolute lg:right-[292px] lg:bottom-[20.8px] 2xl:right-[387px] 2xl:bottom-[50px]"
                alt="" />
            <img src="{{asset('images/Ellipse 2.png')}}"
                class="absolute lg:right-[180px] lg:bottom-[144px] 2xl:right-[247px] 2xl:bottom-[170px]"
                alt="" />
            <img src="{{asset('images/Ellipse 6.png')}}"
                class="absolute lg:right-[30.7px] lg:bottom-[262px] 2xl:right-[82px] 2xl:bottom-[288px]"
                alt="" />
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function nav() {
            let icon = document.getElementById("icon").classList.contains("fa-bars");
            document.getElementById("nav_menu").classList.add("duration-[1000ms]");
            if (icon) {
                document.getElementById("icon").classList.replace("fa-bars", "fa-times");
                document.getElementById("nav_menu").classList.remove("-mt-[500px]");
                // document.getElementById("2nd_div").classList.replace("w-[100%]", "w-[0%]");
            } else {
                document.getElementById("nav_menu").classList.add("-mt-[500px]");
                document.getElementById("icon").classList.replace("fa-times", "fa-bars");
                // document.getElementById("2nd_div").classList.replace("w-[0%]", "w-[100%]");
            }
        }
    </script>
</body>

</html>
