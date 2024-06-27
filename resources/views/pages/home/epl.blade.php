<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between items-center w-full items-center">
            <div class="flex flex-row  sm:gap-4 gap-2  items-center">
                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <h1 class="font-blue text-xl xl:text-lg lg:text-base md:text-sm  font-bold ">EPL</h1>
            </div>
            <div class=" flex justify-center items-center">
                <a href="./epl/home" class="font-blue font-bold text-sm">View All </a>
            </div>
        </div>
    </div>



    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 ">
        {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
        <div class=" w-full">
            <div class="container-header epl-container-header">

                <div class="container-slider epl-container-slider">
                    <div class="slider-wrapper epl-slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class=" slide-button epl-slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                        </button>
                        <div  class="image-list epl-image-list">
                            @php
                                $epl_count = 0;
                                $epl_bg_color = '';
                                $epl_type_icon = ''
                            @endphp
                            @foreach($epl_results->data as $key=>$val)
                                @php
                                    $epl_count++
                                @endphp
                                {{--{{ ($epl_count  > 6) ? 'hidden' : '' }}--}}

                                <div class="epl-image-item image-item" >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class=" card-wd bg-white rounded-[13px]  ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative">


                                            @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
                                                <div class="text-base absolute top-1 right-1 badge-sample">
                                                    <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                </div>
                                            @endif

                                            <div class=" px-3 pt-5">
                                                @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                    <img class="md:w-40 sm:w-32 w-20" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                @else
                                                    <img class="md:w-40 sm:w-32 w-20" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                @endif
                                            </div>


                                            @if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')
                                                @php
                                                    $epl_bg_color = 'bg-[#F10000]';
                                                @endphp
                                                @if($val->type->slug == 'injury')
                                                    @php
                                                        $epl_type_icon ='';
                                                    @endphp
                                                @else
                                                    @php
                                                        $epl_type_icon ='';
                                                    @endphp
                                                @endif
                                            @elseif($val->type->slug == 'confirmed' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                @php
                                                    $epl_type_icon ='';
                                                    $epl_bg_color = 'bg-[#15D869]';
                                                @endphp
                                            @elseif($val->type->slug == 'expected' || $val->type->slug == 'probable')
                                                @php
                                                    $epl_type_icon ='';
                                                    $epl_bg_color = 'bg-[#FFCC00]';
                                                @endphp
                                            @elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')
                                                @php
                                                    $epl_bg_color = 'bg-[#FE6601]';
                                                    $epl_type_icon ='';
                                                @endphp
                                            @elseif($val->type->slug == 'game-time-decision')
                                                @php
                                                    $epl_bg_color = 'bg-[#000000]';
                                                    $epl_type_icon ='';
                                                @endphp
                                            @else
                                                @php
                                                    $epl_bg_color = 'bg-[#38B6FF]';
                                                    $epl_type_icon ='';
                                                @endphp
                                            @endif
                                            <div class="flex flex-row justify-center gap-3 {{ $epl_bg_color }} p-2 text-white items-center w-full rounded-b-[13px] ">
                                                {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">--}}

                                                @if(!empty($epl_type_icon))
                                                    <img class="w-[15px] h-[15px]" src="{{ asset($epl_type_icon) }}">
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
                                                    @if(empty($val->player->full_name))
                                                        <div class="sm:hidden flex flex-col  ">

                                                            <div class="sm:text-base text-sm">
                                                                {{--{{ $team->name }}--}}
                                                                {{  ( !empty($team->location_name) ? $team->location_name : '')     }}
                                                            </div>
                                                            <div class="sm:text-base text-sm">
                                                                {{  ( !empty($team->team_name) ? $team->team_name : '')     }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                            @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                <h1 class="sm:text-base text-sm sm:flex hidden">
                                                    {{$val->team->name }}
                                                </h1>
                                            @else
                                                <h1 class="sm:text-base text-sm sm:block hidden">
                                                    {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                </h1>
                                                <div class="flex flex-col sm:flex-row sm:hidden block">
                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($val->player->first_name) ? $val->player->first_name : '')     }}
                                                    </div>
                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($val->player->last_name) ? $val->player->last_name : '')     }}
                                                    </div>
                                                </div>
                                            @endif


                                        </div>
                                    </div>
                                    <div class="">

                                        @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')

                                            <a href="/epl/predicted-lineups/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                <h1 class="text-base ">
                                                    view lineup
                                                </h1>
                                            </a>

                                        @else
                                            <div class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer epl-view-news " rel="modal-{{$val->id}}" >
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                <h1 class="text-base ">
                                                    view news
                                                </h1>
                                            </div>
                                        @endif



                                        <div class="h-full epl-view-news-desc  hidden" id="epl-{{$val->id}}">


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


                                @include('pages.modal.index')


                                {{--<div class="absolute">--}}
                                    {{--<div class="relative z-30 hidden modalEpl {{$val->id}} ease-out duration-300" id="modalEpl-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">--}}

                                        {{--<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>--}}

                                        {{--<div class="fixed inset-0 z-10 w-screen overflow-y-auto">--}}
                                            {{--<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">--}}
                                                {{--<!----}}
                                                  {{--Modal panel, show/hide based on modal state.--}}

                                                  {{--Entering: "ease-out duration-300"--}}
                                                    {{--From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
                                                    {{--To: "opacity-100 translate-y-0 sm:scale-100"--}}
                                                  {{--Leaving: "ease-in duration-200"--}}
                                                    {{--From: "opacity-100 translate-y-0 sm:scale-100"--}}
                                                    {{--To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
                                                {{---->--}}
                                                {{--<div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">--}}

                                                    {{--<div class="close-modal cursor-pointer" rel="modalEpl-{{$val->id}}"></div>--}}


                                                    {{--<div class="relative">--}}
                                                    {{--<div   class="close close-modal" rel="modalNhl-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">--}}

                                                        {{--<div class="flex flex-col gap-4 w-full h-full relative rounded-xl">--}}
                                                            {{--<div class="flex m-3 mt-5 gap-5">--}}
                                                                {{--<img class="w-[150px]  " src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">--}}
                                                                {{--<div class="flex flex-col gap-3">--}}
                                                                    {{--<div class="flex flex-row gap-2">--}}
                                                                        {{--<p class="text-sm font-bold">--}}
                                                                            {{--{{  ( !empty($val->type->name) ? $val->type->name : '')     }}--}}
                                                                        {{--</p>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="flex flex-col">--}}
                                                                        {{--<h1 class="text-2xl font-bold">--}}
                                                                            {{--{{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}--}}
                                                                        {{--</h1>--}}

                                                                        {{--@foreach($teams->data as $team)--}}
                                                                            {{--@if($team->slug == $val->team->slug)--}}
                                                                                {{--<p class="text-[12px] font-semibold">{{ $team->name }}</p>--}}
                                                                            {{--@endif--}}
                                                                        {{--@endforeach--}}

                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">--}}
                                                                {{--<div class="modal-title text-sm font-bold">{{$val->title}}</div>--}}
                                                                {{--<div class="text-sm">{{$val->description}}</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="m-3 flex  flex-col gap-4 items-center">--}}
                                                                {{--<div class="flex flex-row justify-between gap-2  w-full">--}}
                                                                    {{--<div  >--}}
                                                                        {{--<a class="  flex flex-row items-center gap-2  " href="{{$val->source->url}}">--}}
                                                                            {{--<img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">--}}

                                                                            {{--<div>--}}
                                                                                {{--<h3 class="text-xs font-extrabold">{{$val->source->name}}</h3>--}}
                                                                            {{--</div>--}}
                                                                        {{--</a>--}}
                                                                    {{--</div>--}}

                                                                    {{--<div class="  flex flex-row items-center gap-2 ">--}}
                                                                        {{--<a href="{{$val->source->url}}">--}}
                                                                            {{--<img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">--}}
                                                                        {{--</a>--}}
                                                                        {{--<div>--}}
                                                                            {{--<p class="text-xs font-bold">{{$val->published_at->date}} | {{$val->published_at->time}}</p>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}

                                                                {{--<div class=" ">--}}
                                                                {{--<img class="w-44" src="{{ asset('/images/projectedlineup_logo.png') }}">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="aa de dn md aue avb bxn hidden">--}}
                                                        {{--<button type="button" class="adu alo axp bkx bmz bne bnq bog">--}}
                                                            {{--<span class="t">Close</span>--}}
                                                            {{--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">--}}
                                                                {{--</path>--}}
                                                            {{--</svg>--}}
                                                        {{--</button>--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class="slide-button epl-slide-button  absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <div class="epl-slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="epl-scrollbar-thumb scrollbar-thumb"></div>
                        </div>
                    </div>

                </div>
            </div>




            <div id="animation-carousel" class="relative w-full hidden" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 ">
                    <!-- Item 1 -->
                    @foreach($epl_results->data as $key=>$val)
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white view-news" >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white view-news" >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white view-news" >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white view-news" >
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
