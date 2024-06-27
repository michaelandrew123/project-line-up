
@extends('layouts.master-nhl-v1')

@section('content')

    <div class="flex justify-center  sM:mt-8 mt-4  w-full">
        <div class="xl:w-10/12 lg:w-10/12  md:w-10/12 sm:w-10/12 smm-w-11-12 flex flex-row justify-between gap-1 lg:gap-2 md:gap-1 md:max-w-screen-2xl">
            <div class="flex flex-col w-full ">
                <div class="flex flex-col hidden">
                    <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                                <div class="flex flex-row gap-2">
                                    <img class="xl:w-7 lg:w-7 md:w-5" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Morning Skate</p>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">San Jose changes up their top line as they face Rangers</p>
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                                <div class="flex flex-row gap-2">
                                    <img class="xl:w-7 lg:w-7 md:w-5" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                    <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Top Tracks</p>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5 ">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">Edmonton on the list of top stacks to play tonight</p>
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-3">
                                <div class="flex flex-row gap-2">
                                    <h1 class="xl:text-lg lg:text-lg md:text-[15px] font-extrabold ">
                                        <span class="text-white bg-green-500 px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds
                                    </h1>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">Edmonton on the list of top stacks to play tonight</p>
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden flex flex-col gap-3 w-[32%] w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[19rem]   rounded-xl bg-white border border-black relative">
                            <div class="flex mt-5 ">
                                <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-14">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                        <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Top Tracks</p>
                                    </div>
                                    <div class="w-full flex flex-col items-center gap-5">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                        <p class="xl:text-base lg:text-base md:text-sm font-bold ">Edmonton on the list of top stacks to play tonight</p>
                                        <div class="text-sm lg:text-[12px] md:text-[9px] w-full flex flex-row items-end justify-between">
                                            <p>January 27, 2023</p>
                                            <div class="flex items-center gap-2">
                                                <p>projectedlineup.com</p>
                                                <img class="w-4" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden flex flex-col gap-3 w-[32%] w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[19rem] rounded-xl bg-white border border-black relative">
                            <div class="flex m-1 mt-5 ">
                                <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-14">
                                    <div class="flex flex-row gap-2">
                                        <h1 class="xl:text-lg lg:text-lg md:text-base font-extrabold "><span class="text-white bg-green-500 text-base px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds</h1>
                                    </div>
                                    <div class="w-full flex flex-col items-center gap-5">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                        <p class="xl:text-base lg:text-base md:text-sm font-bold">Edmonton on the list of top stacks to play tonight</p>
                                        <div class="text-sm lg:text-[12px] md:text-[9px] w-full flex flex-row items-end justify-between">
                                            <p>January 27, 2023</p>
                                            <div class="flex items-center gap-2">
                                                <p>projectedlineup.com</p>
                                                <img class="w-4" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                                <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Marner extends point <br> steak to 19 games</h1>
                                <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                                <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Who is the best current <br> NHL player you'd trade <br> for Connor Bedard</h1>
                                <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                                <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Sidney Crosby still <br> in fine form  </h1>
                                <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                    <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="" class="text-black font-semibold text-base flex justify-end mr-[13px]">see all</a>
                    </div>
                </div>
                <div class="flex flex-col sm:gap-5 gap-2">
                    <div>
                        <div class="relative flex items-center gap-2">
{{--                            <img class="w-12 h-12  " src="{{ asset('/images/nhl.png') }}">--}}

                            <div class="w-8">
                                <img class="w-auto" src="{{ asset('/images/league/' . request()->segment(1) .'.png') }}">
                            </div>
                            <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2 " >
                                <div class="uppercase">{{request()->segment(1) }}</div>
                                <div> Player News   </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <ul class="flex flex-row sm:gap-2 gap-2 flex-wrap" id="nhl-sub-items">
                                <li  class="sm:text-sm xl:text-lg lg:text-base md:text-sm text-sm font-bold flex text-center text-center md:p-2 sm:p-2 p-2 rounded-lg pn-sub-active border border-gray-300 all cursor-pointer"  rel="all">
                                    <span >All</span>
                                </li>

                                @foreach($type_names as $key=>$type)
                                    @if($key != 'lineup-update')
                                        <li  class="sm:text-sm xl:text-lg lg:text-base md:text-sm text-sm font-bold flex text-center text-center md:p-2 sm:p-2 p-2 rounded-lg {{$key}} border border-gray-300 cursor-pointer" rel="{{$key}}">
                                            <span > {{$type}} </span>
                                        </li>
                                     @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>


                    <div class="flex flex-wrap w-full justify-evenly md:justify-between mb-3 mt-5 sm:mt-0  ">
                        <div class="nhl-pn-sub-container-header container-header">
                            <div class="nhl-pn-sub-container-slider container-slider">
                                <div class="nhl-pn-sub-slider-wrapper slider-wrapper  ">
                                    <div class="w-full flex justify-center items-center hidden text-center" id="nhl-pn-loading_">
                                        <div class="i" ><div></div><div></div></div>
                                    </div>
                                    <div  class="grid nhl-pn-sub-image-list image-list  md:grid-cols-5 sm:grid-cols-4 grid-cols-3"   id="pn-item-content">
                                        @php
                                            $lc_count = 0;
                                            $lc_bg_color = '';
                                            $lc_type_icon = ''
                                        @endphp
                                        @foreach($article->data as $key=>$val)

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
                                            @elseif($val->type->slug == 'confirmed' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                @php
                                                    $lc_type_icon ='';
                                                    $lc_bg_color = 'bg-[#15D869]';
                                                @endphp
                                            @elseif($val->type->slug == 'expected' || $val->type->slug == 'probable')
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
                                            {{--{{ ($lc_count  > 20) ? 'hidden' : '' }}--}}
                                            @if( (!empty($val->type->slug)) && $val->type->slug != 'lineup-update')
                                                <div  class=" grid place-items-stretch nhl-pn-sub-image-item image-item pn-all pn-{{$val->type->slug}}"  >

                                                    @php
                                                        $lc_count++
                                                    @endphp
                                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}
                                                    <div class="card-wd  player-card bg-white rounded-[13px]  ">
                                                        <div class="flex flex-col gap-4 items-center justify-between relative" style="height: 100%">

                                                            @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

                                                                <div class="text-base absolute top-1 right-1 badge-sample">
                                                                    <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                                </div>
                                                            @endif
                                                            <div class=" px-3 pt-5">
                                                                @if(isset($val->player) && $val->player->images)
                                                                    <img class="md:w-44 sm:w-36 w-24" src="{{$val->player->images->uniform}}">
                                                                @else
                                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                                @endif
                                                            </div>
                                                            <div class="flex flex-row justify-center gap-3 {{ $lc_bg_color }} p-2 text-white items-center w-full rounded-b-[13px]">
                                                                @if(!empty($lc_type_icon))
                                                                    <img class="w-[15px] h-[15px]" src="{{ asset($lc_type_icon) }}">
                                                                @endif
                                                                <p class="text-sm font-bold">
                                                                    @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                                        {{ $val->metafields->lineup_status->name }}
                                                                    @elseif(!empty($val->type->slug) && $val->type->slug == 'starting-goalie')
                                                                        {{  ( !empty($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name: '')     }}
                                                                    @else
                                                                        {{--{{  ( !empty($val->type->name) ? $val->id : '')     }}--}}
                                                                        {{ $val->type->name}}
                                                                    @endif
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
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        {{--{{$val->type->slug  }} --}}
                                                        @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')

                                                            <a href="/nhl/line-combinations/{{ ( !empty($val->team->slug) ? $val->team->slug : '') }}" class=" card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >
                                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                                <h1 class="text-base ">
                                                                    Line Combo
                                                                </h1>
                                                            </a>

                                                        @else
                                                            <div class="card-wd flex flex-row items-center sm:gap-2 gap-1 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhl-view-news  " rel="modalPn-{{ $val->id }}">
                                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                                <h1 class="text-base ">
                                                                    view news
                                                                </h1>
                                                            </div>
                                                        @endif
                                                        {{--<div class="card-wd  border border-[#d9d9d9] flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px]   bg-white cursor-pointer   " rel="modalPn-{{ $val->id }}" >--}}
                                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">--}}
                                                            {{--<h1 class="text-base ">--}}
                                                                {{--view news--}}
                                                            {{--</h1>--}}
                                                        {{--</div>--}}

                                                        {{----}}
                                                        {{----}}
                                                        {{--<a href="/nhl/line-combos/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class="flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >--}}
                                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">--}}
                                                            {{--<h1 class="text-base ">--}}
                                                                {{--View News--}}
                                                            {{--</h1>--}}
                                                        {{--</a>--}}
                                                    </div>
                                                    {{--</div>--}}
                                                </div>

                                                    <div class="absolute">
                                                        <div class="relative z-30 hidden modalPn {{$val->id}} ease-out duration-300" id="modalPn-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                                                                    <div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                                        <div class="close-modal cursor-pointer" rel="modalPn-{{$val->id}}"></div>


                                                                        {{--<div class="relative">--}}
                                                                        {{--<div   class="close close-modal" rel="modalPn-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                                        {{--</div>--}}

                                                                        <div class=" px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                                            <div class="flex flex-col gap-4 w-full h-full relative rounded-xl ">
                                                                                <div class="flex m-3 mt-5 gap-5">
                                                                                    <img class="w-[150px]  " src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                                                    <div class="flex flex-col gap-3">
                                                                                        <div class="flex flex-row gap-2">
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

                                                                                    {{--<div class=" ">--}}
                                                                                    {{--<img class="w-44" src="{{ asset('/images/projectedlineup_logo.png') }}">--}}
                                                                                    {{--</div>--}}
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
                                            @endif
                                        @endforeach

                                    </div>


                                    {{--{{ ($lc_count  <= 10) ? 'hidden' : '' }}--}}
                                    <div class="flex flex-row justify-center items-center text-center w-full cursor-pointer " id="pn-load-more">
                                        <div class="bg-[#2C86FB] py-2 px-6 text-white font-medium rounded-lg">LOAD MORE</div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>



            <div class="xl:w-3/12 lg:w-3/12 md:w-4/12 flex justify-center hidden">
                <div class="flex flex-col gap-8 block smm-hidden ">
                    <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="flex flex-col gap-3 ml-5">
                        <div class="flex flex-row ">
                            <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                            <h1 class="text-md font-bold">Latest Articles </h1>
                        </div>
                        <hr>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                    </div>
                    <img class="mt-10 w-[17rem] h-[35rem]" src="{{ asset('/images/menu-icon/adds1.png') }}">
                </div>
            </div>
        </div>
    </div>











@endsection
