<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">
            <div class="flex flex-row sm:gap-4 gap-2 items-center" >
                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <h1 class="font-blue text-xl xl:text-lg lg:text-base md:text-sm  font-bold ">NHL </h1>
            </div>
            <div class=" flex justify-center items-center">
                <a href="/nhl/player-news" class="font-blue font-bold text-sm">View All </a>
            </div>
        </div>
    </div>



    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2   ">
        {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
        <div class=" w-full ">
            <div class="container-header nhl-container-header">

                <div class="container-slider nhl-container-slider">
                    <div class="slider-wrapper nhl-slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class=" slide-button nhl-slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <div  class="image-list nhl-image-list">
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

                                <div class="nhl-image-item image-item" >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class=" card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative">


                                            @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

                                                <div class="text-base absolute top-1 right-1 badge-sample">
                                                    <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                </div>

                                            @endif



                                            <div class=" px-3 pt-5">
                                                @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                @else
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                @endif
                                            </div>


                                            @if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')
                                                @php
                                                    $nhl_bg_color = 'bg-[#F10000]';
                                                @endphp
                                                @if($val->type->slug == 'injury')
                                                    @php
                                                        $nhl_type_icon ='';
                                                    @endphp
                                                @else
                                                    @php
                                                        $nhl_type_icon ='';
                                                    @endphp
                                                @endif
                                            @elseif($val->type->slug == 'starting-goalie' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                @if(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'confirmed')
                                                    @php
                                                        $nhl_type_icon ='';
                                                        $nhl_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @elseif(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'expected')
                                                    @php
                                                        $nhl_type_icon ='';
                                                        $nhl_bg_color = 'bg-[#FFCC00]';
                                                    @endphp
                                                @else
                                                    @php
                                                        $nhl_type_icon ='';
                                                        $nhl_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @endif
                                            @elseif($val->type->slug == 'probable')
                                                @php
                                                    $nhl_type_icon ='';
                                                    $nhl_bg_color = 'bg-[#FFCC00]';
                                                @endphp
                                            @elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')
                                                @php
                                                    $nhl_bg_color = 'bg-[#FE6601]';
                                                    $nhl_type_icon ='';
                                                @endphp
                                            @elseif($val->type->slug == 'game-time-decision')
                                                @php
                                                    $nhl_bg_color = 'bg-[#000000]';
                                                    $nhl_type_icon ='';
                                                @endphp
                                            @else
                                                @php
                                                    $nhl_bg_color = 'bg-[#38B6FF]';
                                                    $nhl_type_icon ='';
                                                @endphp
                                            @endif


                                            {{--@include('pages.types.color')--}}

                                            <div class="flex flex-row justify-center gap-3 {{ $nhl_bg_color }} p-2 text-white items-center w-full rounded-b-[13px] ">
                                                {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">--}}

                                                @if(!empty($nhl_type_icon))
                                                    <img class="w-[15px] h-[15px]" src="{{ asset($nhl_type_icon) }}">
                                                @endif

                                                <p class="text-sm font-bold" >
                                                    @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                        {{ $val->metafields->lineup_status->name }}
                                                    @elseif(!empty($val->type->slug) && $val->type->slug == 'starting-goalie')
                                                        {{  ( !empty($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name: '')     }}
                                                    @else
                                                        {{--{{  ( !empty($val->type->name) ? $val->id : '')     }}--}}
                                                        {{ $val->type->name}}
                                                    @endif

                                                </p>
                                                {{--@if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')--}}
                                                    {{--<p class="text-sm font-bold" >--}}
                                                        {{--{{  ( !empty($val->metafields->lineup_status->name) ? $val->metafields->lineup_status->name : '')     }}--}}
                                                    {{--</p>--}}
                                                {{--@else--}}
                                                    {{--<p class="text-sm font-bold" v-else>--}}
                                                        {{--{{  ( !empty($val->type->name) ? $val->type->name : '')     }}--}}
                                                    {{--</p>--}}
                                                {{--@endif--}}

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

                                            <a href="/nhl/line-combinations/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class=" card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                <h1 class="text-base ">
                                                    line combo
                                                </h1>
                                            </a>

                                        @else
                                            <div class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhl-view-news" rel="modal-{{$val->id}}" >
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                <h1 class="text-base ">
                                                    view news
                                                </h1>
                                            </div>
                                        @endif



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

                                @include('pages.modal.index')
                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class="slide-button nhl-slide-button  absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <div class="nhl-slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="nhl-scrollbar-thumb scrollbar-thumb"></div>
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white  " >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white  " >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white " >
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
                    <div class="flex flex-row items-center gap-2 justify-center border border-gray-500 p-2 rounded-lg bg-white " >
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
