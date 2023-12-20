@extends('layouts.master-nhl')

@section('content')
<style>
    body{
        background-color: #f5f5f5;
    }

</style>
    <div class="w-full flex justify-center block smm-hidden  ">
        <div class="xl:w-full lg:w-full  md:w-full flex flex-col items-center gap-10 max-w-screen-2xl ">
            <div class="w-full flex flex-col items-center">
                <div class="flex flex-row w-full justify-evenly">
                    <img class="w-full" src="{{ asset('/images/menu-icon/players.png') }}" alt="">

                    {{--<div class="w-full h-auto flex justify-center relative">--}}
                        {{--<img class="w-[45%] z-0 absolute left-0 bottom-0" src="{{ asset('/images/menu-icon/auston matthews (1).png') }}" alt="">--}}
                        {{--<img class="w-[42%] z-20" src="{{ asset('/images/menu-icon/player4.png') }}" alt="">--}}
                        {{--<img class="w-[45%] z-10 absolute right-0 bottom-0" src="{{ asset('/images/menu-icon/connor mcdavid (1).png') }}" alt="">--}}
                    {{--</div>--}}
                </div>
                <div class="relative w-full">
                    <input class="w-full border border-4 border-[#4d4d4d] text-center text-xl text-[#4d4d4d] font-bold rounded h-14" type="text" placeholder="Search Projected Lineups">
                    <a class="absolute top-1 right-1" href="">
                        <img class="w-[50px]" src="{{ asset('/images/menu-icon/icons8-search-48.png') }}" alt="">
                    </a>
                </div>
            </div>
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



            <div class="w-full  flex flex-col  mt-10 gap-6  ">
                <h1 class="xl:text-6xl lg:text-5xl md:text-5xl font-bold text-center text-black hidden">Your destination for fantasy sports <br> players and bettors</h1>
                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3 w-full">
                        <div class="flex flex-row justify-between items-center w-full">
                            <div class="flex flex-row gap-4">
                                <div class="w-[20px] h-full bg-[#38b6ff]"></div>
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NHL</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                            @php
                                $nhl_count = 0;
                                $nhl_bg_color = '';
                                $nhl_type_icon = ''
                            @endphp
                        @foreach($nhl_results->data as $key=>$val)
                                @php
                                    $nhl_count++
                                @endphp
                                {{--{{ ($nhl_count  > 6) ? 'hidden' : '' }}--}}
                                <div class="relative rounded-xl  flex flex-col {{ ($nhl_count  > 5) ? 'hidden' : '' }}">
                                    <div class="  bg-white border">
                                        <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                            <img class="w-44" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">

                                            @if($val->type->name == 'Injury')
                                                @php
                                                    $nhl_type_icon ='/images/menu-icon/white-plus.png';
                                                    $nhl_bg_color = 'bg-red-500';
                                                @endphp
                                            @elseif($val->type->name == 'morning skate')
                                                @php
                                                    $nhl_bg_color = 'bg-yellow-500';
                                                 $nhl_type_icon ='';
                                                @endphp

                                            @elseif($val->type->name == 'Starting Goalie')
                                                @php
                                                    $nhl_bg_color = 'bg-orange-500';
                                                    $nhl_type_icon ='';
                                                @endphp
                                            @endif
                                            <div class="flex flex-row justify-center gap-3 {{ $nhl_bg_color }} p-2 text-white items-center w-10/12">


                                                @if(!empty($nhl_type_icon))
                                                    <img class="w-[15px] h-[15px]" src="{{ asset($nhl_type_icon) }}">
                                                @endif

                                                <p class="text-sm font-bold">
                                                    {{  ( !empty($val->type->name) ? $val->type->name : '')     }}
                                                </p>
                                            </div>



                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex flex-row items-center gap-2 justify-center my-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <h1 class="text-base font-extrabold">
                                                {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                            </h1>
                                        </div>
                                    </div>




                                    <div>
                                        <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                            <h1 class="text-base font-extrabold">
                                                view news
                                            </h1>
                                        </div>
                                    </div>


                                </div>
                            @endforeach


                            <div class="relative rounded-xl  flex flex-col hidden">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-yellow-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px] hidden" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Morning skate
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col hidden">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col hidden">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col hidden">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>




                        </div>

                    </div>
                </div>



                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3 w-full">
                        <div class="flex flex-row justify-between items-center w-full">
                            <div class="flex flex-row gap-4">
                                <div class="w-[20px] h-full bg-[#38b6ff]"></div>
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NBA</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NBA News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-green-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px] rounded-full " src="{{ asset('/images/home-page/green-check.png') }}">
                                            <p class="text-base font-bold">
                                                Available
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>




                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3 w-full">
                        <div class="flex flex-row justify-between items-center w-full">
                            <div class="flex flex-row gap-4">
                                <div class="w-[20px] h-full bg-[#38b6ff]"></div>
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NFL</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NFL News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>


                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>



                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3 w-full">
                        <div class="flex flex-row justify-between items-center w-full">
                            <div class="flex flex-row gap-4">
                                <div class="w-[20px] h-full bg-[#38b6ff]"></div>
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">EPL</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All EPL News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>


                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>



                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>


                            </div>

                            <div class="relative rounded-xl  flex flex-col">
                                <div class="  bg-white border">
                                    <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                        <img class="w-44" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">

                                        <div class="flex flex-row justify-center gap-3 bg-red-500 p-2 text-white items-center w-10/12">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                                            <p class="text-base font-bold">
                                                Injury
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center my-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            Auston Mathews
                                        </h1>
                                    </div>
                                </div>




                                <div>
                                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white" >
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                        <h1 class="text-base font-extrabold">
                                            view news
                                        </h1>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="hidden">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row gap-3">
                            <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                            <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NBA</h1>
                        </div>
                        <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NBA News</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row gap-3">
                            <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                            <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NFL</h1>
                        </div>
                        <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NFL News</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row gap-3">
                            <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                            <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">EPL</h1>
                        </div>
                        <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                    <div class="flex m-3 mt-5 gap-2">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="text-[11px] font-bold">
                                                    Injury
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                    </div>
                                    <div class="w-full absolute bottom-1">
                                        <div class="w-full flex flex-row items-center ">
                                            <a href="">
                                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>
                                            <div>
                                                <h3 class="text-[13px]">Chris Benn</h3>
                                                <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All EPL News</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
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
