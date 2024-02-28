@extends('layouts.master-nhl-v1')

@section('content')

    <div class="w-full justify-center block mt-10  smm-hidden">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center gap-10 sm:gap-2 md:max-w-screen-2xl ">

            @include('pages.home.nhl')
            @include('pages.home.nba')
            @include('pages.home.nfl')
            @include('pages.home.mlb')

        </div>
    </div>
    <!-- API link  https://api.projectedlineups.com/v1/sports/leagues -->
    <!-- Mobile design -->
    <div class="w-full smm-block hidden">
        <div class="flex flex-col items-center mx-2">
            <img class="w-full mb-5 hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            <div class="w-full">
                <div class="w-full h-auto flex justify-center relative">
                    <img class="w-[45%] z-0 absolute left-0 bottom-0" src="{{ asset('/images/menu-icon/auston matthews (1).png') }}" alt="">
                    <img class="w-[42%] z-20" src="{{ asset('/images/menu-icon/player4.png') }}" alt="">
                    <img class="w-[45%] z-10 absolute right-0 bottom-0" src="{{ asset('/images/menu-icon/connor mcdavid (1).png') }}" alt="">
                </div>
                <div class="relative w-full">
                    <input class="w-full border border-1 border-[#4d4d4d] text-center text-lg text-black font-bold rounded-xl h-12" type="text" placeholder="Search Projected Lineups">
                    <a class="absolute top-2 right-1" href="">
                        <img class="w-[35px]" src="{{ asset('/images/menu-icon/icons8-search-48.png') }}" alt="">
                    </a>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-center text-black my-5">Your destination for fantasy sports  players and bettors</h1>
            <div class="w-full flex flex-col">
                <div class="w-full flex flex-row gap-2">
                    <a class="w-full flex flex-col bg-[#ff3131] border rounded-lg" href="">
                        <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                            <img class="w-8 h-8" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                            <h1 class="text-3xl font-bold text-white">EPL</h1>
                        </div>
                        <div class="w-full flex justify-center">
                            <img class="w-[48%]" src="{{ asset('/images/menu-icon/player4.png') }}" alt="">
                        </div>
                    </a>
                    <a class="w-full flex flex-col bg-[#15d869] border rounded-lg" href="">
                        <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                            <img class="w-10 h-10 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                            <h1 class="text-3xl font-bold text-white">NFL</h1>
                        </div>
                        <div class="w-full flex justify-center">
                            <img class="w-[48%]" src="{{ asset('/images/menu-icon/player5.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="w-full flex flex-row gap-2 mt-2">
                    <a class="w-full flex flex-col bg-[#1d9bf0] border rounded-lg" href="{{url('/nhl/home')}}">
                        <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                            <img class="w-8 h-8" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                            <h1 class="text-3xl font-bold text-white">NHL</h1>
                        </div>
                        <div class="w-full flex justify-center">
                            <img class="w-[48%]" src="{{ asset('/images/menu-icon/player7.png') }}" alt="">
                        </div>
                    </a>
                    <a class="w-full flex flex-col bg-[#8c52ff] border rounded-lg " href="">
                        <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                            <img class="w-8 h-8  " src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                            <h1 class="text-3xl font-bold text-white">NBA</h1>
                        </div>
                        <div class="w-full flex justify-center">
                            <img class="w-[48%]" src="{{ asset('/images/menu-icon/player6.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
