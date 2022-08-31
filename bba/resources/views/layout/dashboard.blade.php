<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="main.css"> -->
    <script src="https://kit.fontawesome.com/5507de1efb.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="flex justify-between lg:space-x-[36px] lg:p-5 overflow-hidden">
        <i onclick="nav()" id="icon"
            class="fa fa-bars absolute right-1 cursor-pointer text-2xl mr-2 mt-2 z-30 lg:hidden" aria-hidden="true"></i>
        <div id="nav_slide"
            class="w-[100%] absolute bg-[#E2E2E2] h-[100vh] -ml-[820px] lg:h-auto  lg:relative lg:ml-0 lg:w-[253px] z-20">
            <div class="avater_nav bg-[#FF8C40] p-2 flex justify-between">
                <h1 class="text-xl text-white">Admin Zone</h1>
        
            </div>
            <div class="avatar  h-[200px] flex items-center justify-center flex-col">
                <img class="w-[100px] h-[100px] rounded-full" src="../../images/J-Sir.png" alt="" srcset="">
                <h1>Your FullName</h1>
                <h1>Your you@gmail.com</h1>
            </div>
            <div>
                <ul>
                    <li class="bg-[#FF8C40] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#3E3E3E] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#FF8C40] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#3E3E3E] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#FF8C40] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#3E3E3E] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#FF8C40] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Dashboard</a></li>
                    <li class="bg-[#3E3E3E] text-white h-14 hover:bg-[#F3482C] c p-2"><a href="#">Log out</a></li>
                </ul>
            </div>
        </div>
        <div id="2nd_div" class="w-[100%] lg:relative lg:w-[724px] z-10">
            @section('content')
                
            @show
        </div>
        <div class="absolute -top-[1000px] lg:top-0 lg:relative space-y-[12px] lg:w-[253px] bg-[#ffffff]">
            <div
                class="nav bg-[#FF8C40] hover:bg-[#F3482C] h-[50px] text-white font-semibold flex justify-between items-center box-border p-2">
                <h1>My Account</h1>
                <img class="w-[40px] h-[40px] rounded-full" src="../../images/J-Sir.png" alt="" />
            </div>
            <div class="bg-[#3E3E3E] h-[50px] flex justify-between items-center box-border p-2">
                <input type="text" class="h-[50px] bg-[#3E3E3E] focus:outline-none text-white" name="" id="" />
                <i class="fa-solid fa-magnifying-glass text-white"></i>
            </div>
        </div>
    </div>
    <script>
        function nav() {
            let icon = document.getElementById("icon").classList.contains("fa-bars");
            document.getElementById("nav_slide").classList.add("duration-1000");
            if (icon) {
                document.getElementById("icon").classList.replace("fa-bars", "fa-times");
                document.getElementById("nav_slide").classList.remove("-ml-[820px]");
                document.getElementById("2nd_div").classList.add("fixed");
                
                
            } else {
                document.getElementById("nav_slide").classList.add("-ml-[820px]");
                document.getElementById("icon").classList.replace("fa-times", "fa-bars");
                document.getElementById("2nd_div").classList.remove("fixed");
            }
        }
    </script>
</body>

</html>