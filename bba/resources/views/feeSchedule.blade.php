@extends('layout.dashboard')

@section('content')
    <div class="searchBr w-full">
          <div class="bg-[#E2E2E2] p-4 text-center space-y-2">
            <div
              class="text-[#3E3E3E] text-[25px] md:text-[33px] lg:text-[40px] font-semibold"
            >
              Name of the Office
            </div>
            <div class="text-[23px]">Friday 05-08-22</div>
          </div>
        </div>
        <div class="content w-full space-y-[19px]">
          <div
            class="bg-[#3E3E3E] text-white text-[23px] font-semibold h-[50px] flex items-center justify-center"
          >
            Fee Schedule
          </div>
          <div class="">
            <ul class="relative space-y-[15px] lg:p-0 p-2">
              <div class="flex flex-row">
                <li class="flex justify-between w-[245px]">
                  <span>Name of the Department*</span><span>:</span>
                </li>
                <input type="text" class="focus:outline-none px-[2px]" />
              </div>
              <div class="flex flex-row">
                <li class="flex justify-between w-[245px]">
                  <span>Account Number/Code*</span><span>:</span>
                </li>
                <input type="text" class="focus:outline-none px-[2px]" />
              </div>
              <div class="flex flex-row">
                <li class="flex justify-between w-[245px]">
                  <span>Class/Program*</span><span>:</span>
                </li>
                <input type="text" class="focus:outline-none px-[2px]" />
              </div>
              <div class="flex flex-row">
                <li class="flex justify-between w-[245px]">
                  <span>Fee Code*</span><span>:</span>
                </li>
                <input
                  type="text"
                  class="focus:outline-none lg:w-[116px] px-[2px]"
                />
              </div>
              <div class="flex flex-row">
                <li
                  class="relative lg:absolute lg:left-[362px] lg:top-[99px] flex justify-between w-[245px] lg:w-[200px]"
                >
                  <span>Fee Amount(Semi Annual)*</span><span>:</span>
                </li>
                <input
                  type="text"
                  class="lg:absolute lg:left-[562px] lg:top-[99px] focus:outline-none lg:w-[116px] px-[2px]"
                />
              </div>
              <div class="flex flex-row">
                <li class="flex justify-between w-[245px]">
                  <span>Fee Title*</span><span>:</span>
                </li>
                <input type="text" class="focus:outline-none px-[2px]" />
              </div>
            </ul>
          </div>
          <div
            class="lg:flex lg:flex-row lg:justify-between lg:space-y-[0px] lg:space-x-[8px] lg:text-[20px] font-['Segoe UI'] flex-col space-y-[15px]"
          >
            <div class="1st lg:w-[164px] w-full">
              <ul class="space-y-[9px]">
                <li
                  class="bg-[#3E3E3E] h-[33px] flex items-center justify-center text-white"
                >
                  Fee Code
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] flex items-center justify-center"
                >
                  101
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] flex items-center justify-center"
                >
                  102
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] flex items-center justify-center"
                >
                  103
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] flex items-center justify-center"
                >
                  104
                </li>
              </ul>
            </div>
            <div class="2nd lg:w-[389px] w-full">
              <ul class="space-y-[9px] text-center">
                <li
                  class="bg-[#3E3E3E] h-[33px] lg:flex lg:items-center lg:px-[34px] lg:box-border text-white"
                >
                  Fee Title
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] lg:flex lg:items-center lg:px-[34px] lg:box-border"
                >
                  A
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] lg:flex lg:items-center lg:px-[34px] lg:box-border"
                >
                  B
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] lg:flex lg:items-center lg:px-[34px] lg:box-border"
                >
                  C
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] lg:flex lg:items-center lg:px-[34px] lg:box-border"
                >
                  D
                </li>
              </ul>
            </div>
            <div class="3rd lg:w-[164px] w-full">
              <ul class="space-y-[9px]">
                <li
                  class="bg-[#3E3E3E] h-[33px] flex items-center justify-center text-white"
                >
                  Amount
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] flex items-center justify-center"
                >
                  100
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] flex items-center justify-center"
                >
                  200
                </li>
                <li
                  class="bg-[#E2E2E2] h-[33px] flex items-center justify-center"
                >
                  300
                </li>
                <li
                  class="bg-[#FFE1CE] h-[33px] flex items-center justify-center"
                >
                  400
                </li>
              </ul>
            </div>
          </div>
          <div
            class="flex lg:justify-end justify-between space-x-[8px] text-white text-[20px] font-semibold"
          >
            <span
              class="w-[164px] h-[33px] flex items-center justify-center bg-[#3E3E3E] cursor-pointer"
              >Add</span
            ><span
              class="w-[164px] h-[33px] flex items-center justify-center bg-[#FF8C40] cursor-pointer"
              >Save</span
            >
          </div>
        </div>
      </div>
@endsection