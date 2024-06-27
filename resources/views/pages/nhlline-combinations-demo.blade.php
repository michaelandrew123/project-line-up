@extends('layouts.master-nhl-v1')

@section('content')
    @php
        $color1 = '#00337e';
        $color2 = '#ffffff'
    @endphp
    <!-- Desktop nhl/Line combos -->
    {{--@if(isset($team_color))--}}
        {{--@foreach($team_color['data']['colors']['types'] as $key=>$val)--}}
            {{--@if($key == 'color-1')--}}
                {{--@php--}}
                    {{--$color1 = $val--}}
                {{--@endphp--}}
            {{--@endif--}}
            {{--@if($key == 'color-2')--}}
                {{--@php--}}
                    {{--$color2 = $val--}}
                {{--@endphp--}}
            {{--@endif--}}
            {{--@if($key == 'color-3')--}}
                {{--@php--}}
                    {{--$color3 = $val--}}
                {{--@endphp--}}
            {{--@endif--}}
        {{--@endforeach--}}
    {{--@endif--}}


    <div class="mx-1.5 sm:mx-0">
        <div class="w-full flex flex-col items-center   mt-0 ">

            <div class="relative flex flex-col justify-center gap-3 items-center pb-5 xl:w-10/12 lg:w-10/12  md:w-10/12 sm:w-10/12 w-full sm:mx-0  h-auto rounded-[13px] " style="background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}   ">
                <div class="relative flex flex-row justify-center gap-3 items-center">
                    <div class="w-full flex flex-col sm:gap-5 sm:p-8">
                        <div class="flex flex-row items-center justify-between ">
                            <div class="flex flex-row items-center w-full">

                                        <div class="flex sm:flex-row flex-col-reverse  gap-10 sm:gap-16 items-center  sm:justify-start justify-between  w-full" style="position: relative;">
                                            <div class="flex flex-col relative py-5 sm:py-0"  style="height:200px;   " >
                                                <img class="flex sm:h-full sm:w-auto w-40"  src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">
                                            </div>

                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-col  py-5 sm:py-0 ">
                                                    <div class="teams text-4xl font-bold text-black" style="line-height: .8; color: {{  ( !empty($color2) ? $color2: 'black')  }}">
                                                        {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}
                                                    </div>
                                                    <div class="teams text-lg font-bold text-black" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">

                                                        {{--line combinations--}}
                                                        @if(request()->segment(1) == 'nhl')
                                                            Line combinations
                                                        @elseif(request()->segment(1) == 'nba' || request()->segment(1) == 'mlb')
                                                            Starting Lineup
                                                        @elseif(request()->segment(1) == 'nfl')
                                                            Depth Chart
                                                        @elseif(request()->segment(1) == 'epl')
                                                            Predicted Lineup
                                                        @endif
                                                    </div>
                                                </div>

                                                {{--<div class="flex flex-row items-center relative" >--}}

                                                    {{--<div class="flex flex-row items-center justify-left items-end" style=" color: {{  ( !empty($color3) ? $color3: 'black')  }}">--}}
                                                        {{--<div class="flex flex-row  gap-2 items-center">--}}
                                                            {{--<a href="{{ $result->data->source->url  }}" class=" " target="_blank">--}}
                                                                {{--<img  class="w-6 h-6 " src="{{ asset('/images/line-combos/6523-information-6.png') }}"  >--}}
                                                                {{--<p class="text-sm font-semibold">{{ $result->data->source->name  }}</p>--}}
                                                            {{--</a>--}}
                                                            {{--<div class="flex flex-row gap-2">--}}

                                                                {{--<img src="{{ asset('/images/line-combos/6523-information-8.png') }}" class="w-6 h-6   ">--}}
                                                                {{--<p class="text-sm font-semibold text-white">  {{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }}  </p>--}}


                                                            {{--</div>--}}
                                                            {{--<div class="flex flex-row gap-2 justify-center items-center text-white">--}}
                                                                {{--<img src="{{ asset('/images/line-combos/6523-information-5.png') }}" class="w-6 h-6 ">--}}

                                                                {{--<h1 class="text-sm font-semibold uppercase">  {{ $result->data->status->name }}</h1>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="relative hidden">--}}
                                                            {{--<a href="#" id="head-drp" class="text-lg font-bold  w-[13rem] rounded-full bg-slate-300"> {{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}</a>--}}
                                                            {{--<div class="drp-dwn hidden flex flex-col bg-slate-300 w-[13rem] p-2 absolute">--}}

                                                                {{--<a class="teams" href="/nhl/line-combinations/{{$team->data->slug}}">{{$team->data->name}}</a>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}

                                            </div>
                                        </div>


                                {{--<div class="flex flex-row items-center gap-5">--}}
                                {{--<div class="flex flex-col"   >--}}
                                {{--<img class="w-20 flex" style="mix-blend-mode: multiply; " src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">--}}
                                {{--</div>--}}


                            </div>
                        </div>


                </div>


                {{--last game --}}
                {{--<div class="flex sm:flex-row flex-col gap-4 px-5 justify-start xl:w-10/12  lg:w-10/12  md:w-10/12 sm:w-10/12 w-full  ">--}}

                    {{--<div class="flex gap-2 justify-left items-center">--}}
                        {{--<img  class="w-6 h-6 " src="{{ asset('/images/line-combos/6523-information-6.png') }}"  >--}}
                        {{--<h1 class="text-sm font-semibold capital "> {{ $result->data->status->name }} </h1>--}}
                    {{--</div>--}}
                    {{--<div class="flex flex-row gap-2 items-center">--}}

                        {{--<img src="{{ asset('/images/line-combos/6523-information-8.png') }}" class="w-6 h-6 ">--}}
                        {{--<a href="{{ $result->data->source->url  }}" class=" " target="_blank">--}}

                            {{--<p class="text-sm font-semibold  items-center">{{ $result->data->source->name  }}</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="flex flex-row gap-2  items-center">--}}
                        {{--<img src="{{ asset('/images/line-combos/6523-information-5.png') }}" class="w-6 h-6 ">--}}


                        {{--<p class="text-sm font-semibold  items-center">  Last Updated: {{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }} </p>--}}

                    {{--</div>--}}

                {{--</div>--}}
                {{--end last game--}}

            </div>
            </div>

            <div class=" w-full mt-5 relative flex justify-center border border-gray-700  sm:hidden   ">

                <select class="form-select w-full p-1 select-option-dm  " aria-label="Default select example" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

                    {{--<option selected class="border-b border-gray-200 p-2">--}}
                    {{--<a href="" style="width:100% !important; color: black">--}}
                    {{--Winnipeg Jets--}}
                    {{--</a>--}}
                    {{--</option>--}}

                    {{--@foreach($teams->data as $key=>$val)--}}


                        {{--@php--}}
                            {{--$urlSelect = $val->slug--}}
                        {{--@endphp--}}
                        {{--@if(request()->path() == '"nhl/line-combos/' . $val->slug .'"')--}}
                        {{--Hello world {{request()->path()}}--}}
                        {{--@endif--}}



                        {{--<option {{ (request()->segment(3) == $urlSelect) ? 'selected' : ''     }}   value="{{$urlSelect}}"   class="p-2 sm:border sm:border-1 sm:border-bottom sm:border-dark sm:line-combos-items">--}}
                            {{--<a href="/nhl/line-combos/{{$val->slug}}" style="width:100% !important; color: black">--}}
                            {{--{{$val->name}}--}}
                            {{--</a>--}}
                        {{--</option>--}}





                    {{--@endforeach--}}

                </select>


            </div>

            {{--xl:w-11/12 lg:w-11/12 md:w-full--}}
            <div id="lu-body" class=" flex sm:flex-row flex-col justify-evenly gap-7 xl:w-10/12 lg:w-10/12 md:w-10/12 sm:w-10/12 w-full mt-4 sm:mt-10">
                <div class="sm:w-10/12 w-full ">
                    {{--<img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}"> --}}
                    {{--<img class="w-full my-2" src="{{ asset('/images/line-combos/logo/go_daddy.png') }}">--}}
                    {{--@if(request()->segment(1) == 'mlb')--}}
                        @include('pages.desktop.mlb.formation')
                    {{--@elseif(request()->segment(1) == 'epl')--}}
                        {{--@include('pages.desktop.epl.433.formation')--}}
                        {{--@include('pages.desktop.epl.3241.formation')--}}
                        {{--@include('pages.desktop.epl.3421.formation')--}}
                        {{--@include('pages.desktop.epl.343.formation')--}}



                        {{--@foreach($formation as $val)--}}

                            {{--@if($val->formation-slug == '3-4-3')--}}
                                {{--@include('pages.desktop.epl.343.formation')--}}
                            {{--@elseif($val->formation-slug == '3-5-2')--}}
{{--                                @include('pages.desktop.epl.352.formation')--}}
                            {{--@elseif($val->formation-slug == '4-3-3')--}}
{{--                                @include('pages.desktop.epl.433.formation')--}}
                            {{--@elseif($val->formation-slug == '4-4-2')--}}
{{--                                @include('pages.desktop.epl.442.formation')--}}
                            {{--@elseif($val->formation-slug == '4-5-1')--}}
{{--                                @include('pages.desktop.epl.451.formation')--}}
                            {{--@elseif($val->formation-slug == '3-2-4-1')--}}
{{--                                @include('pages.desktop.epl.3241.formation')--}}
                            {{--@elseif($val->formation-slug == '3-4-2-1')--}}
{{--                                @include('pages.desktop.epl.3421.formation')--}}
                            {{--@elseif($val->formation-slug == '4-1-4-1')--}}
{{--                                @include('pages.desktop.epl.4141.formation')--}}
                            {{--@elseif($val->formation-slug == '4-2-2-2')--}}
{{--                                @include('pages.desktop.epl.4222.formation')--}}
                            {{--@elseif($val->formation-slug == '4-2-3-1')--}}
                                {{--@include('pages.desktop.epl.4231.formation')--}}
                            {{--@elseif($val->formation-slug == '4-3-2-1')--}}
{{--                                @include('pages.desktop.epl.4321.formation')--}}
                            {{--@elseif($val->formation-slug == '4-1-2-1-2')--}}
{{--                                @include('pages.desktop.epl.41212.formation')--}}
                            {{--@endif--}}
                        {{--@endforeach--}}

                    {{--@endif--}}
                </div>
                @include('partials.sidebar-demo')
            </div>



        </div>
    </div>



    <!-- Mobile end -->
@endsection