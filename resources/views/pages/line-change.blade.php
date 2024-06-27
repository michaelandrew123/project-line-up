
@extends('layouts.master-nhl-v1')

@section('content')

    <div class="flex justify-center  sm:mt-8 mt-4  w-full">
        <div class="xl:w-10/12 lg:w-10/12  md:w-10/12 sm:w-10/12 smm-w-11-12 flex flex-col justify-between gap-1 lg:gap-2 md:gap-1  ">


            <div class="flex flex-row sm:justify-start justify-center w-full">
                <div class="flex flex-row sm:w-full w-11/12">
                    <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2">
                        <div class="uppercase">NHL</div>
                        <div>
                            Line Change
                        </div>
                    </div>
                </div>
            </div>

            <ul class="flex flex-row sm:gap-2 gap-2 flex-wrap" id="line-change-items">

                <li  class="sm:text-sm xl:text-lg lg:text-base md:text-sm text-sm font-bold flex text-center md:p-2 sm:p-2 p-2 rounded-lg border border-gray-300 all cursor-pointer line-change-active"  rel="all-line-change">
                    <span >All</span>
                </li>


                @foreach($available_team as $key => $val)
                    <li class="sm:text-sm xl:text-lg lg:text-base md:text-sm text-sm font-bold flex text-center text-center md:p-2 sm:p-2 p-2 rounded-lg ruled-out border border-gray-300 cursor-pointer" rel="{{$key}}">
                        <span >{{$val}}</span>
                    </li>
                @endforeach
            </ul>



            <div class="flex flex-wrap w-full justify-evenly md:justify-between mb-3 mt-5 sm:mt-0  ">
                <div class="nhl-pn-sub-container-header container-header">

                    <div class="nhl-pn-sub-container-slider container-slider">
                        <div class="nhl-pn-sub-slider-wrapper slider-wrapper  ">

                            <div class="w-full flex justify-center items-center hidden text-center" id="nhl-pn-loading_">
                                <div class="i" ><div></div><div></div></div>
                            </div>
                            <div  class="grid nhl-pn-sub-image-list image-list  md:grid-cols-5 sm:grid-cols-4 grid-cols-3"    >

                                @php
                                    $lc_count = 0;
                                    $lc_bg_color = '';
                                    $lc_type_icon = ''
                                @endphp
                                @foreach($availableTeamData as $key=>$val)

                                        <div  class=" grid place-items-stretch image-item  {{ $val->team->slug }} all-line-change"  >
                                            @php
                                                $lc_count++
                                            @endphp
                                            {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}
                                            <div class="card-wd  player-card bg-white rounded-[13px]  ">
                                                <div class="flex flex-col gap-4 justify-between justify-center relative" style="height: 100%">

                                                    @if(Carbon\Carbon::parse($val->updated_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

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



                                                    {{--<div class="flex flex-row justify-center gap-3 {{ $lc_bg_color }} p-2 text-white items-center w-full rounded-b-[13px]">--}}
                                                        {{--@if(!empty($lc_type_icon))--}}
                                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset($lc_type_icon) }}">--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>

                                            <div>
                                                <div class="flex flex-row items-center gap-2 justify-center my-2">
                                                    @foreach($teams->data as $team)
                                                        @if($team->slug == $val->team->slug)
                                                            <img class="w-5" src="{{ $team->logo->src }}">
                                                        @endif
                                                    @endforeach
                                                    {{--<h1 class="text-base hidden sm:block">--}}
                                                    {{--{{  ( !empty($val->team->name) ? $val->team->name : '')     }}--}}
                                                    {{--</h1>--}}


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
                                                <a href="/nhl/line-combinations/{{ ( !empty($val->team->slug) ? $val->team->slug : '') }}" class=" card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >
                                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                    <h1 class="text-base ">
                                                        line Combo
                                                    </h1>
                                                </a>

                                            </div>
                                            {{--</div>--}}
                                        </div>

                                @endforeach

                            </div>


                            {{--{{ ($lc_count  <= 10) ? 'hidden' : '' }}--}}
                            {{--<div class="flex flex-row justify-center items-center text-center w-full cursor-pointer " id="pn-load-more">--}}
                                {{--<div class="bg-[#2C86FB] py-2 px-6 text-white font-medium rounded-lg">LOAD MORE</div>--}}
                            {{--</div>--}}

                        </div>

                    </div>
                </div>

            </div>


            {{--<div>--}}

                {{--@foreach($availableTeamData as $key=>$val)--}}
                    {{--@if(isset($val->metafields->goalie_status))--}}
                        {{--@if($val->metafields->goalie_status->name === 'Confirmed')--}}
                            {{--<div class="flex flex-row items-center gap-2 w-full" style=" ">--}}

                                {{--<img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">--}}
                                {{--<div class="flex flex-col">--}}
                                    {{--<div class="flex flex-col justify-center">--}}
                                        {{--<p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">--}}
                                            {{--{{$val->player->full_name}}--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">{{$val->title}}</p>--}}
                                    {{--<p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">30 min ago</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--@endif--}}
                {{--@endforeach--}}

            {{--</div>--}}
            {{--@foreach($teams->data as $key=>$val)--}}
            {{--<div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">--}}
                {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
                {{--<div class=" w-full   mb-3 ">--}}
                    {{--<div class="container-header combination-container-header-combo">--}}

                        {{--<div class="container-slider combination-container-slider-combo">--}}
                            {{--<div class="slider-wrapper combination-slider-wrapper-combo ">--}}

                                {{--<div  class="image-list combination-image-list-combo grid md:grid-cols-5 sm:grid-cols-4 grid-cols-6 items-center justify-center"  >--}}
                                    {{--style="row-gap: 30px; "--}}


                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}





                {{--</div>--}}

            {{--</div>--}}


        </div>
    </div>











@endsection
