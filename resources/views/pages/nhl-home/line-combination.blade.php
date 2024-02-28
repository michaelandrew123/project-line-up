<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">
            <div class="flex flex-row  sm:gap-4 gap-2 items-center  w-6/12">
                {{--<img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">--}}

                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL Line Combination</h1>
            </div>
            <div class=" flex justify-end my-5  w-6/12">
                <a href="/nhl/line-combinations" class="text-[#1d9bf0] font-bold text-sm">View All</a>
            </div>

        </div>
    </div>


    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 "> 
        <div class=" w-full   mb-3 ">
            <div class="nhl-lc-container-header container-header">

                <div class="nhl-lc-container-slider container-slider">
                    <div class="nhl-lc-slider-wrapper slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class="hidden nhl-lc-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <div  class="nhl-lc-image-list image-list">
                            @php
                                $lc_count = 0;
                                $lc_bg_color = '';
                                $lc_type_icon = ''
                            @endphp
                            @foreach($line_combinations->data as $key=>$val)
                                @php
                                    $lc_count++
                                @endphp
                                {{--{{ ($nhl_count  > 6) ? 'hidden' : '' }}--}}

                                <div class="nhl-lc-image-item image-item" >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class="card-wd  bg-white border rounded-[13px] border border-[#d9d9d9]">
                                        <div class="flex flex-col gap-4 items-center justify-center relative">

                                            <div class="text-base absolute top-1 right-1 badge-sample">

                                                @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

                                                    <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                    {{--<span class="text-white  border border-gray-100">New</span>--}}
                                                @else
                                                    {{--<span class="text-orange-700  border border-gray-100">Old</span>--}}
                                                @endif
                                            </div>

                                            <div class=" px-3 pt-5">
                                                @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                @else
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                @endif
                                            </div>


                                            @if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')
                                                @php
                                                    $lc_bg_color = 'bg-[#F10000]';
                                                @endphp
                                                @if($val->type->slug == 'injury')
                                                    @php
                                                        $lc_type_icon ='';
                                                    @endphp
                                                @else
                                                    @php
                                                        $lc_type_icon ='';
                                                    @endphp
                                                @endif
                                            @elseif($val->type->slug == 'starting-goalie' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                @if(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'confirmed')
                                                    @php
                                                        $lc_type_icon ='';
                                                        $lc_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @elseif(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'expected')
                                                    @php
                                                        $lc_type_icon ='';
                                                        $lc_bg_color = 'bg-[#FFCC00]';
                                                    @endphp
                                                @else
                                                    @php
                                                        $lc_type_icon ='';
                                                        $lc_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @endif
                                            @elseif($val->type->slug == 'probable')
                                                @php
                                                    $lc_type_icon ='';
                                                    $lc_bg_color = 'bg-[#FFCC00]';
                                                @endphp
                                            @elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')
                                                @php
                                                    $lc_bg_color = 'bg-[#FE6601]';
                                                    $lc_type_icon ='';
                                                @endphp
                                            @elseif($val->type->slug == 'game-time-decision')
                                                @php
                                                    $lc_bg_color = 'bg-[#000000]';
                                                    $lc_type_icon ='';
                                                @endphp
                                            @else
                                                @php
                                                    $lc_bg_color = 'bg-[#38B6FF]';
                                                    $lc_type_icon ='';
                                                @endphp
                                            @endif



                                            <div class="flex flex-row justify-center gap-3 {{ $lc_bg_color }} p-2 text-white items-center w-full rounded-b-[13px]">
                                                @if(!empty($lc_type_icon))
                                                    <img class="w-[15px] h-[15px]" src="{{ asset($lc_type_icon) }}">
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
                                                        {{--<p class="text-sm font-bold" v-if="$val->type->slug == 'lineup-update'">--}}
                                                            {{--{{  ( !empty($val->metafields->lineup_status->name) ? $val->metafields->lineup_status->name : '')     }}--}}
                                                        {{--</p>--}}
                                                    {{--@else--}}
                                                        {{--<p class="text-sm font-bold" v-else>--}}
                                                            {{--{{  ( !empty($val->type->name) ? $val->type->name : '')     }}--}}
                                                        {{--</p>--}}
                                                    {{--@endif--}}
                                                    {{----}}
                                                    {{----}}
                                                {{--<p class="text-sm font-bold">--}}
                                                    {{--{{  ( !empty($val->metafields->lineup_status->name) ? $val->metafields->lineup_status->name : '')     }}--}}
                                                {{--</p>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex flex-row items-center gap-2 justify-center my-2">


                                            @foreach($teams->data as $team)
                                                @if($team->slug == $val->team->slug)
                                                    <img class="w-5" src="{{ $team->logo->src }}">

                                                    <div class="flex flex-col sm:flex-row sm:hidden block">

                                                        <div class="sm:text-base text-sm">
                                                            {{  ( !empty($team->location_name) ? $team->location_name : '')     }}
                                                        </div>
                                                        <div class="sm:text-base text-sm">
                                                            {{  ( !empty($team->team_name) ? $team->team_name : '')     }}
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <h1 class="sm:text-base text-sm  hidden sm:block">
                                               {{  ( !empty($val->team->name) ? $val->team->name : '') }}
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="/nhl/line-combos/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  view-news"  >
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                            <h1 class="text-base ">
                                                Line Combo
                                            </h1>
                                        </a>
                                    </div>
                                    {{--</div>--}}
                                </div>
                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class="hidden nhl-lc-slide-button slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="nhl-lc-slider-scrollbar slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="nhl-lc-scrollbar-thumb scrollbar-thumb"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</div>