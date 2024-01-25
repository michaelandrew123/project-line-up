
<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="flex flex-row gap-4">
                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NBA  </h1>
            </div>
            <div class=" flex justify-center my-5">
                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NBA News</a>
            </div>
        </div>
    </div>


    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">
        {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
        <div class=" w-full   mb-3 ">
            <div class="container-header">

                <div class="container-slider nba-container-slider">
                    <div class="slider-wrapper nba-slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class=" nba-slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <div  class="image-list nba-image-list">
                            @php
                                $nba_count = 0;
                                $nba_bg_color = '';
                                $nba_type_icon = ''
                            @endphp
                            @foreach($nba_results->data as $key=>$val)
                                @php
                                    $nba_count++
                                @endphp
                                {{--{{ ($nba_count  > 6) ? 'hidden' : '' }}--}}

                                <div class="nba-image-item" >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class="  bg-white border rounded-[13px] border border-[#d9d9d9]">
                                        <div class="flex flex-col mx-3 my-5 gap-2 items-center justify-center">
                                            <img class="w-36" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">

                                            @if($val->type->slug == 'available')
                                                @php
                                                    $nba_type_icon ='/images/line-combos/6523-information-6.png';
                                                    $nba_bg_color = 'bg-green-500';
                                                @endphp
                                            @elseif($val->type->slug == 'out')
                                                @php
                                                    $nba_type_icon ='';
                                                    $nba_bg_color = 'bg-red-500';
                                                @endphp
                                            @elseif($val->type->slug == 'gtd')
                                                @php
                                                    $nba_type_icon ='';
                                                    $nba_bg_color = 'bg-black';
                                                @endphp
                                            @endif
                                            <div class="flex flex-row justify-center gap-3 {{ $nba_bg_color }} p-2 text-white items-center w-10/12 rounded-[13px]">
                                                {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">--}}

                                                @if(!empty($nba_type_icon))
                                                    <img class="w-[15px] h-[15px]" src="{{ asset($nba_type_icon) }}">
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
                                        <div class="flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nba-view-news " rel="modalNba-{{$val->id}}" >
                                            <img class="w-[15px] " src="{{ asset('/images/home-page/plus.png') }}">
                                            <h1 class="text-base ">
                                                view news

                                            </h1>
                                        </div>
                                        <div class="h-full nba-view-news-desc  hidden" id="nba-{{$val->id}}">


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
                                <div class="absolute">
                                    <div class="relative z-30 hidden modalNba {{$val->id}} ease-out duration-300" id="modalNba-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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

                                                    <div class="close-modal" rel="modalNba-{{$val->id}}"></div>


                                                    {{--<div class="relative">--}}
                                                    {{--<div   class="close close-modal" rel="modalNba-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                    {{--</div>--}}

                                                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                        <div class="flex flex-col gap-4 w-full h-full relative rounded-xl bg-white  ">
                                                            <div class="flex m-3 mt-5 gap-5">
                                                                <img class="w-[150px]" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-row gap-2">
                                                                        @if(!empty($nba_type_icon))
                                                                            <img class="w-[15px] h-[15px]" src="{{ asset($nba_type_icon) }}">
                                                                        @endif
                                                                        <p class="text-sm font-bold">
                                                                            {{  ( !empty($val->type->name) ? $val->type->name : '')     }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <h1 class="text-2xl font-bold">
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
                                                            <div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">
                                                                <div class="modal-title text-sm font-bold">{{$val->title}}</div>
                                                                <div class="text-sm">{{$val->description}}</div>
                                                            </div>
                                                            <div class="m-3 flex  flex-col gap-4 items-center">
                                                                <div class="flex flex-row justify-between gap-2  w-full">
                                                                    <div  >
                                                                        <a class="  flex flex-row items-center gap-2  " href="{{$val->source->url}}">
                                                                            <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                                                            <div>
                                                                                <h3 class="text-xs font-extrabold">{{$val->source->name}}</h3>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="  flex flex-row items-center gap-2 ">
                                                                        <a href="{{$val->source->url}}">
                                                                            <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                                                        </a>
                                                                        <div>
                                                                            <p class="text-xs font-bold">{{$val->published_at->date}} | {{$val->published_at->time}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class=" ">
                                                                    <img class="w-44" src="{{ asset('/images/projectedlineup_logo.png') }}">
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


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class=" nba-slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="slider-scrollbar nba-slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="scrollbar-thumb nba-scrollbar-thumb"></div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>


</div>