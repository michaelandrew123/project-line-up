{{--@extends('layouts.master-nhl')--}}
@extends('layouts.master-nhl-v1')
@section('content')
 
<style>

    body{
        background-color: #f5f5f5;
    }
</style>
    <div class="w-full flex justify-center block  ">
        <div class="  flex flex-col items-center gap-10 xl:w-11/12 lg:w-11/12  md:w-11/12 sm:w-11/12 smm-w-11-12 md:max-w-screen-2xl ">



            <div class="w-full flex justify-between hidden">

                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-12 lg:w-12 md:w-10" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NHL</h1>
                    </div>
                    <ul class="flex flex-col gap-2 xl:text-xl lg:text-xl md:text-lg">
                        <li><a class=" font-bold text-[#39b6ff]" href="">Line Combinations</a></li>
                        <li><a class=" font-bold text-[#39b6ff]" href="{{url('/nhl/')}}">Starting goalies</a></li>
                        <li><a class="  font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="  font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class=" font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-12 lg:w-12 md:w-10" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NBA</h1>
                    </div>
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-11 lg:w-11 md:w-10 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NFL</h1>
                    </div>
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Depth Charts</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-10 lg:w-10 md:w-9" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">EPL-MLS</h1>
                    </div>
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
            </div>



            <div class="w-full  flex flex-col  mt-10 sm:gap-6 gap-4 ">
                <div id="vue-nhl-home">
                    <trending-today></trending-today>
                </div>
                @include('pages.nhl-home.player-news')
                @include('pages.nhl-home.line-combination')
                @include('pages.nhl-home.starting-goalies')
                <div class="hidden">
                    <h1 class="xl:text-6xl lg:text-5xl md:text-5xl font-bold text-center text-black hidden">Your destination for fantasy sports <br> players and bettors</h1>


                </div>
            </div>
        </div>
    </div>
    <!-- API link  https://api.projectedlineups.com/v1/sports/leagues -->
    <!-- Mobile design -->
    <div class="w-full hidden">
        <div class="flex flex-col items-center mx-2">
            <img class="w-full mb-5 hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            <div class="w-full hidden">
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
            <div class="w-full flex flex-col hidden">
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
