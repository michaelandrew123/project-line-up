@extends('layouts.master-nhl')

@section('content')


<style>
    body{
        background-color: #f5f5f5;
    }
    .container-header {
        display: flex;
        align-items: center;
        justify-content: center;
        /*min-height: 100vh;*/
    }

    .container-slider {
        max-width: 1200px;
        width: 100%;
    }

    .slider-wrapper {
        position: relative;
    }

    .slider-wrapper .slide-button {
        position: absolute;
        top: 50%;
        outline: none;
        border: none;
        height: 50px;
        width: 50px;
        z-index: 5;
        color: #fff;
        display: flex;
        cursor: pointer;
        font-size: 2.2rem;
        background: #9f9f9f;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    .slider-wrapper .slide-button:hover {
        background: #404040;
    }

    .slider-wrapper .slide-button#prev-slide {
        left: -25px;
        display: none;
    }

    .slider-wrapper .slide-button#next-slide {
        right: -25px;
    }

    .slider-wrapper .image-list {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
        /*columns: repeat(auto-fill, minmax(280px, 1fr));*/
        gap: 20px;
        font-size: 0;
        list-style: none;
        margin-bottom: 30px;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .slider-wrapper .image-list::-webkit-scrollbar {
        display: none;
    }

    .slider-wrapper .image-list .nhl-image-item {
        /*width: 325px;*/
        /*height: 400px;*/
        width: 200px;
        height: 344px;
        object-fit: cover;
    }

    .container .slider-scrollbar {
        height: 24px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .slider-scrollbar .scrollbar-track {
        background: #ccc;
        width: 100%;
        height: 2px;
        display: flex;
        align-items: center;
        border-radius: 4px;
        position: relative;
    }

    .slider-scrollbar:hover .scrollbar-track {
        height: 4px;
    }

    .slider-scrollbar .scrollbar-thumb {
        position: absolute;
        background: #000;
        top: 0;
        bottom: 0;
        width: 50%;
        height: 100%;
        cursor: grab;
        border-radius: inherit;
    }

    .slider-scrollbar .scrollbar-thumb:active {
        cursor: grabbing;
        height: 8px;
        top: -2px;
    }

    .slider-scrollbar .scrollbar-thumb::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        bottom: -10px;
    }
    .modalNhl-active{

    }
    /* Styles for mobile and tablets */
    @media only screen and (max-width: 1023px) {
        .slider-wrapper .slide-button {
            display: none !important;
        }

        .slider-wrapper .image-list {
            gap: 10px;
            margin-bottom: 15px;
            scroll-snap-type: x mandatory;
        }

        .slider-wrapper .image-list .nhl-image-item {
            width: 280px;
            height: 380px;
        }

        .slider-scrollbar .scrollbar-thumb {
            width: 20%;
        }
    }
</style>






    <div class="w-full flex justify-center block smm-hidden  ">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center gap-10 max-w-screen-2xl ">



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
                                <img class="w-9 h-9  " src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL Player News</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL Player News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">
                        {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
                        <div class="flex w-full md:flex-row flex-wrap    mb-3 ">
                            <div class="container-header">

                                <div class="container-slider">
                                    <div class="slider-wrapper">
                                        <!-- Slider controls -->
                                        <button type="button" id="prev-slide" class=" slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                                </svg>
                                                <span class="sr-only">Previous</span>
                                            </span>
                                        </button>

                                        <div  class="image-list">
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

                                                    <div class="nhl-image-item" >
                                                        {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                                            <div class="  bg-white border rounded-[13px] border border-[#d9d9d9]">
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
                                                                    <div class="flex flex-row justify-center gap-3 {{ $nhl_bg_color }} p-2 text-white items-center w-10/12 rounded-[13px]">
                                                                        {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">--}}

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
                                                                    @foreach($teams->data as $team)
                                                                        @if($team->slug == $val->team->slug)
                                                                            <img class="w-5" src="{{ $team->logo->src }}">
                                                                        @endif
                                                                    @endforeach
                                                                    <h1 class="text-base ">
                                                                        {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhl-view-news " rel="modalNhl-{{$val->id}}" >
                                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                                    <h1 class="text-base ">
                                                                        view news

                                                                    </h1>
                                                                </div>
                                                                <div class="h-full nhl-view-news-desc  hidden" id="nhl-{{$val->id}}">


                                                                    <div  class="flex flex-col gap-2 items-start p-[12%]   bg-white h-full  justify-between text-wrap w-auto rounded-lg" >
                                                                        <div class="text-sm">{{$val->description}}</div>

                                                                        <div class="flex flex-col gap-2">
                                                                            <div class="flex flex-row gap-2 items-center">
                                                                                <a href="{{$val->source->url}}">
                                                                                    <img class="w-5" src="{{ asset('/images/twitter.png') }}">
                                                                                </a>
                                                                                <p> {{$val->source->name}}</p>
                                                                            </div>


                                                                            <div class="flex flex-row gap-2 text-xs">
                                                                                <div>
                                                                                    {{$val->published_at->date}}
                                                                                    @
                                                                                    {{$val->published_at->time}}
                                                                               </div>
                                                                           </div>

                                                                       </div>
                                                                   </div>

                                                               </div>
                                                           </div>
                                                        {{--</div>--}}
                                                   </div>



                                                <div class="relative z-30 hidden modalNhl {{$val->id}} ease-out duration-300" id="modalNhl-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <!--
                                                      Background backdrop, show/hide based on modal state.

                                                      Entering: "ease-out duration-300"
                                                        From: "opacity-0"
                                                        To: "opacity-100"
                                                      Leaving: "ease-in duration-200"
                                                        From: "opacity-100"
                                                        To: "opacity-0"
                                                    -->



                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                                            <!--
                                                              Modal panel, show/hide based on modal state.

                                                              Entering: "ease-out duration-300"
                                                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                To: "opacity-100 translate-y-0 sm:scale-100"
                                                              Leaving: "ease-in duration-200"
                                                                From: "opacity-100 translate-y-0 sm:scale-100"
                                                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                            -->
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">



                                                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                                    <div class=" w-full h-full relative rounded-xl bg-white border">
                                                                        <div class="flex m-3 mt-5 gap-2">
                                                                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                                            <div class="flex flex-col gap-3">
                                                                                <div class="flex flex-row gap-2">
                                                                                    @if(!empty($nhl_type_icon))
                                                                                        <img class="w-[15px] h-[15px]" src="{{ asset($nhl_type_icon) }}">
                                                                                    @endif
                                                                                    <p class="text-sm font-bold">
                                                                                        {{  ( !empty($val->type->name) ? $val->type->name : '')     }}
                                                                                    </p>
                                                                                </div>
                                                                                <div class="flex flex-col">
                                                                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-bold">
                                                                                        {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                                                    </h1>

                                                                                    @foreach($teams->data as $team)
                                                                                        @if($team->slug == $val->team->slug)
                                                                                            <p class="text-[12px] font-semibold">{{ $team->name }}</p>
                                                                                        @endif
                                                                                    @endforeach

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                                                            <div class="text-sm">{{$val->description}}</div>
                                                                        </div>
                                                                        <div class="w-full  ">
                                                                            <div class="w-full flex flex-row items-center gap-2 ">
                                                                                <a href="{{$val->source->url}}">
                                                                                    <img class="xl:w-10 xl:h-10 lg:w-10 lg:h-10 md:w-8 md:h-8" src="{{ asset('/images/twitter.png') }}">
                                                                                </a>
                                                                                <div>
                                                                                    <h3 class="text-xs">{{$val->source->name}}</h3>
                                                                                    <p class="text-xs font-bold">{{$val->published_at->date}} | {{$val->published_at->time}}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="aa de dn md aue avb bxn hidden">
                                                                    <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                                                                        <span class="t">Close</span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 hidden">
                                                                    <button type="button" rel="modalNhl-{{$val->id}}" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto close-modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            @endforeach

                                        <!-- Slider controls -->
                                            {{--<button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>--}}
                                                    {{--<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
                                                        {{--<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
                                                            {{--<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>--}}
                                                        {{--</svg>--}}
                                                        {{--<span class="sr-only">Previous</span>--}}
                                                    {{--</span>--}}
                                            {{--</button>--}}
                                            {{--<button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none right-0" data-carousel-next>--}}
                                                    {{--<span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
                                                        {{--<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
                                                            {{--<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
                                                        {{--</svg>--}}
                                                        {{--<span class="sr-only">Next</span>--}}
                                                    {{--</span>--}}
                                            {{--</button>--}}

                                        </div>
                                        {{--<button id="next-slide" class="slide-button material-symbols-rounded">--}}
                                            {{--chevron_right--}}
                                        {{--</button>--}}
                                         <button type="button" id="next-slide" class=" slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>


                                    <div class="slider-scrollbar" style="visibility: hidden">
                                        <div class="scrollbar-track">
                                            <div class="scrollbar-thumb"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div id="animation-carousel" class="relative w-full hidden" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 ">
                                    <!-- Item 1 -->
                                    @foreach($nhl_results->data as $key=>$val)
                                        <div class="hidden duration-200 ease-linear w-[33%] " data-carousel-item>
                                            <img  alt="..." class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Slider controls -->
                                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none right-0" data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>


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
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL Line Combination</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL Line Combination</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-between xl:justify-between lg:justify-between md:justify-between mb-3 ">

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
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL Starting Goalies</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL Starting Goalies</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-between xl:justify-between lg:justify-between md:justify-between mb-3 ">

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



                <div class="flex flex-col w-full hidden">
                    <div class="flex flex-row gap-3 w-full">
                        <div class="flex flex-row justify-between items-center w-full">
                            <div class="flex flex-row gap-4">
                                <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">EPL</h1>
                            </div>
                            <div class=" flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All EPL News</a>
                            </div>

                        </div>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-between xl:justify-between lg:justify-between md:justify-between mb-3 ">

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

                <div class="hidden ">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row gap-3">
                            <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                            <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NBA</h1>
                        </div>
                        <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                            <div class="flex w-full md:flex-row flex-wrap justify-between xl:justify-between lg:justify-between md:justify-between mb-3 ">
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
                            <div class="flex w-full md:flex-row flex-wrap justify-between xl:justify-between lg:justify-between md:justify-between mb-3 ">
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
