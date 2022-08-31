@extends('layout.login')

@section('page_title')
    BBA FACALTY
@endsection

@section('bsmrstu_logo')
    <div
        class="logo absolute top-[100px] left-1/2 -translate-x-1/2 transform lg:relative lg:top-0 lg:left-0 lg:mt-0 lg:ml-0 lg:-translate-x-0 2xl:mt-[20px] 2xl:ml-[46px]">
        <img class="w-[220px] lg:w-[120px] lg:mx-3" src="{{ asset('images/logo.jpg') }}" alt="" />
    </div>
@endsection

@section('content')
    <div class="space-y-[43px] 2xl:mt-[120px]">
        <div class="text font-['Segoe UI'] mt-[256px] text-center text-[25px] font-bold text-[#3E3E3E] lg:mx-auto lg:mt-0 lg:w-[660px] lg:text-[50px] 2xl:w-[739px] 2xl:text-[56px]"
            data-aos="fade-up" data-aos-duration="3000">
            One account for everything.
        </div>
        <div class="login-btn">
            <a href="Login">
                <div
                    class="loginBtn mx-auto w-[160px] text-[20px] hover:bg-[#1AA2A2] cursor-pointer bg-[#006666] p-2 text-white text-center rounded-full font-[Segoe UI] font-semibold lg:text-[30px]">
                    Log In
                </div>
            </a>
            <a href="SignUp" class="">
                <div
                    class="loginBtn my-3 mx-auto w-[160px] text-[20px] hover:bg-[#1AA2A2] cursor-pointer bg-[#006666] p-2 text-white text-center rounded-full font-[Segoe UI] font-semibold lg:text-[30px]">
                    Sign Up
                </div>
            </a>
        </div>
    </div>
@endsection
