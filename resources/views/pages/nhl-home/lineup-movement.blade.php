<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">
            <div class="flex flex-row  sm:gap-4 gap-2 items-center  ">
                {{--<img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">--}}

                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2 items-center">
                    <div class="uppercase">{{ request()->segment(1) }} </div>
                        <div> Line Change</div>

                    <div class="triangle-green cursor-pointer" rel="green" style="
                            width:0;
                            border-bottom:20px solid green;
                            transform: rotate(0deg);
                            border-left:10px solid transparent;
                            border-right:10px solid transparent;"></div>

                    <div class="triangle-red cursor-pointer" rel="red" style="
                            width:0;
                            border-bottom:20px solid red;
                            transform: rotate(180deg);
                            border-left:10px solid transparent;
                            border-right:10px solid transparent;"></div>
                </div>
            </div>
            <div class=" flex justify-end  ">
                <a href="/{{request()->segment(1)}}/line-combinations" class="font-blue font-bold text-sm">View All</a>
            </div>

        </div>
    </div>


    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2  ">
        <div class=" w-full   ">
            <div class="nhl-movement-container-header container-header">

                <div class="nhl-movement-container-slider container-slider">
                    <div class="nhl-movement-slider-wrapper slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class="hidden nhl-movement-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <div  class=" nhl-movement-image-list image-list">
                            @php
                                $lc_count = 0;
                                $lc_bg_color = '';
                                $lc_color = '';
                                $lc_type_icon = '';
                                $deg = 0;
                            @endphp
                            @foreach($team_movement->data as $key=>$val)


                                @if($val->movement == 1)
                                    @php
                                        $lc_count++;
                                        $lc_color = 'green';
                                        $deg = 0;
                                    @endphp

                                {{--{{ ($nhl_count  > 6) ? 'hidden' : '' }}--}}

                                    <div class="
                                    {{ (request()->segment(1) == 'nba') ? 'nba-image-item' : '' }}
                                    {{ (request()->segment(1) == 'nhl') ? 'nhl-lc-image-item ' : '' }}
                                    {{ (request()->segment(1) == 'mlb') ? 'mlb-image-item ' : '' }}
                                    {{ (request()->segment(1) == 'epl') ? 'epl-image-item ' : '' }} nhl-movement-image-item image-item {{ ($lc_count > 5) ? 'green' : 'red' }} " >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class="card-wd  bg-white rounded-[13px]">
                                        <div class="flex flex-col gap-4 items-center justify-center relative">


                                            <div class=" px-3 pt-5">
                                                <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                            </div>


                                            <div class="flex flex-row justify-center gap-3 bg-[#111111] p-2 text-white items-center w-full rounded-b-[13px]" style="color: {{ ($lc_count > 5) ? 'green' : 'red' }} !important;">
                                                <div class="triangle" style="
    width:0;
    border-bottom:14px solid {{ ($lc_count > 5) ? 'green' : 'red' }};
    transform: rotate({{ ($lc_count > 5) ? 0 : 180 }}deg);
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;"></div>

                                                <p class="text-base font-bold uppercase" >
                                                    @if($val->slot->slug == 'c1' || $val->slot->slug == 'lw1' || $val->slot->slug == 'rw1')
                                                        Line 1
                                                    @elseif($val->slot->slug == 'c2' || $val->slot->slug == 'lw2' || $val->slot->slug == 'rw2')
                                                        Line 2
                                                    @elseif($val->slot->slug == 'c3' || $val->slot->slug == 'lw3' || $val->slot->slug == 'rw3')
                                                        Line 3
                                                    @elseif($val->slot->slug == 'c4' || $val->slot->slug == 'lw4' || $val->slot->slug == 'rw4')
                                                        Line 4
                                                    @elseif($val->slot->slug == 'ld1' || $val->slot->slug == 'rd1')
                                                        Line 1
                                                    @elseif($val->slot->slug == 'ld2' || $val->slot->slug == 'rd2')
                                                        Line 2
                                                    @elseif($val->slot->slug == 'ld3' || $val->slot->slug == 'rd3')
                                                        Line 3
                                                    @elseif($val->slot->slug == 'pp11' || $val->slot->slug == 'pp12' || $val->slot->slug == 'pp13' || $val->slot->slug == 'pp14' || $val->slot->slug == 'pp15')
                                                        Powerplay 1
                                                    @elseif($val->slot->slug == 'pp21' || $val->slot->slug == 'pp22' || $val->slot->slug == 'pp23' || $val->slot->slug == 'pp24' || $val->slot->slug == 'pp25')
                                                        Powerplay 2
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex sm:flex-row flex-col items-center  justify-center sm:gap-2 sm:my-2">

                                            @foreach($teams->data as $team)
                                                @if($team->slug == $val->team->slug)
                                                    <img class="w-5" src="{{ $team->logo->src }}">
                                                @endif
                                            @endforeach

                                            <div class="sm:text-base text-sm ">
                                                {{  ( !empty($val->player->first_name) ? $val->player->first_name : '') }}
                                            </div>
                                            <div class="sm:text-base text-sm ">
                                                {{  ( !empty($val->player->last_name) ? $val->player->last_name : '') }}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="">
                                        @php
                                            $lineCombo = null;
                                        @endphp

                                        @if(request()->segment(1) == 'nhl')
                                            @php $lineCombo = 'line-change' @endphp
                                        @endif
                                        <a href="/{{request()->segment(1)}}/{{ $lineCombo }}/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer "  >
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                            <h1 class="text-base ">
                                                line combo
                                            </h1>
                                        </a>
                                    </div>
                                    {{--</div>--}}
                                </div>

                                @else
                                    @php
                                        $lc_color = 'red';
                                        $deg = 180;
                                    @endphp
                                @endif





                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class="hidden nhl-movement-slide-button slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
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