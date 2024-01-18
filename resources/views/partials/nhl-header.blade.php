
<style>

    .i {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }
    .i div {
        position: absolute;
        border: 4px solid #38B6FF;
        opacity: 1;
        border-radius: 50%;
        animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }
    .i div:nth-child(2) {
        animation-delay: -0.5s;
    }
    @keyframes lds-ripple {
        0% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 0;
        }
        4.9% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 0;
        }
        5% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 1;
        }
        100% {
            top: 0px;
            left: 0px;
            width: 72px;
            height: 72px;
            opacity: 0;
        }
    }


</style>

    <div class="w-full flex flex-row justify-center block smm-hidden ">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center justify-between gap-1 max-w-screen-2xl ">
            <div class="flex flex-row justify-between items-center flex w-full  py-3  ">
                <div class="flex gap-1 items-end justify-start">
                    <img class="xl:w-[99px] lg:w-[99px] md:w-[80px] hidden" src="{{  ( !empty($team_color['data']['featured_player_1']['images']['photo']) ? $team_color['data']['featured_player_1']['images']['photo'] :  '')  }}" alt="">
                    <div class="flex items-end">
                        {{--                        {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}--}}

                        @if(isset($team_color))
                            @php
                                $colorCounter = 0;
                            @endphp

                            @foreach($team_color['data']['colors']['types'] as $key=>$val)
                                @if($colorCounter == 0)
                                   @php $projectedColor = $val; @endphp
                                @endif

                                @if($colorCounter == 1)
                                    @php  $lineUpsColor = $val; @endphp
                                @endif
                                    @php $colorCounter++; @endphp

                            @endforeach

                            @foreach($team_color['data']['colors']['types'] as $key=>$val)
                                @if($key == 'color-1')
                                    @php
                                        $color1 = $val
                                    @endphp
                                @endif
                                @if($key == 'color-2')
                                    @php
                                        $color2 = $val
                                    @endphp
                                @endif
                                @if($key == 'color-3')
                                    @php
                                        $color3 = $val
                                    @endphp
                                @endif
                            @endforeach
                        @endif

                        {{--@if(isset($color2))--}}
                            {{--@if($color2 == '#FFFFFF')--}}
                                {{--<h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular" style="color: {{  ( !empty($projectedColor) ? $projectedColor: '#000')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #000; text-stroke: 1px  #000; line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                            {{--@else--}}

                                {{--<h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular" style="color: {{  ( !empty($projectedColor) ? $projectedColor: '#000')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: {{  ( !empty($color2) ? $color2: '')  }}; text-stroke: 1px {{  ( !empty($color2) ? $color2: '')  }}; line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                            {{--@endif--}}
                        {{--@else--}}

                            {{--<h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular" style="  line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                        {{--@endif--}}


                         {{--<h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular  " style="color: {{  ( !empty($lineUpsColor) ? $lineUpsColor: '#39b6ff')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: {{  ( !empty($color1) ? $color1: '')  }}; text-stroke: 1px {{  ( !empty($color1) ? $color1: '')  }}; line-height: 1;  font-family: 'Mouse Memoirs'">lineup</h1>--}}


                        <img  src="{{ asset('/images/projectedlineup_logo.png') }}" />
                    </div>
                </div>
                <div class="flex flex-row items-center xl:w-8/12 lg:w-8/12 md:w-7/12 xl:justify-between lg:justify-between md:justify-between ">
                    <div class="flex xl:gap-6 lg:gap-5 md:gap-2">
                        <a href="{{url('/nhl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold bg-[#38b6ff] text-[#ffffff]  xl:px-4 lg:px-4 md:px-2 py-px rounded-md">
                            NHL
                        </a>
                        <a href="{{url('/nba/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                            NBA
                        </a>
                        <a href="{{url('/soc/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                            SOC
                        </a>
                        <a href="{{url('/nfl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                            NFL
                        </a>
                        <a href="{{url('/bet')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#15d869] xl:px-4 lg:px-4 px-3 md:px-2 border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">
                            BET
                        </a>
                        <a href="{{url('/learn')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#1c6399] xl:px-4 lg:px-4 md:px-2 py-px border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">
                            LEARN
                        </a>
                        <!-- {{--<button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black px-2  py-2 rounded-md">MLB</button>--}} -->
                        <!-- <a href="" class="xl:text-lg lg:text-base font-bold  text-black  px-2  py-0.5 rounded-md">EPL</a> -->
                        <!-- {{--<div class="flex relative">--}}
                        {{--<input class="border border-black w-[10rem] h-10" type="text">--}}
                            {{--<a class="absolute right-0" href="">--}}
                                {{--<img class="w-[50px]" src="{{ asset('/images/menu-icon/search.png') }}" alt="">--}}
                            {{--</a> --}}
                        {{--</div>--}} -->
                    </div>
                    <a href="#" >
                        <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-10/12 flex flex-col items-center">
                <div class="flex flex-row w-full justify-evenly">


                    {{--<img class="w-full" src="{{ asset('/images/menu-icon/players.png') }}" alt="">--}}

                    <div class="w-full h-auto flex justify-center relative">
                        <img class="w-[32%] z-20 absolute" src="{{ asset('/images/home-page/connor-mcdavid.png') }}" alt="">
                        <img class="w-[32%] z-0 " src="{{ asset('/images/home-page/auston-matthews.png') }}" alt="">
                        <img class="w-[32%] z-10 " src="{{ asset('/images/home-page/mohamed-salah.png') }}" alt="">
                    </div>
                </div>


                <div class="relative w-10/12">
                    <div class="relative ">


                        {{--border-2 border-[#38B6FF]--}}
                        {{--<input class="w-full border-2 border-rose-600 text-center text-xl text-[#4d4d4d] rounded h-14" type="text" placeholder="Search Projected Lineups">--}}
                        <input type="text" class="w-full  text-center text-xl text-[#4d4d4d] rounded h-14 " id="search-nhl-home" placeholder="Search Projected Lineups" style="border: 2px solid #38B6FF">

                        {{--<input class="border-2 border-rose-600 ...">--}}


                        <a class="absolute top-1 right-3" href="">
                            <img class="w-[50px]" src="{{ asset('/images/search.png') }}" alt="">
                        </a>




                    </div>
                    <div id="search-nhl-home-content" class="relative hidden">


                        <div class="absolute bg-white z-10 w-full text-center rounded-b-lg border border-y border-b border-[#38B6FF]">

                            <div class="i hidden" id="loading_"><div></div><div></div></div>
                            <ul id="item-content">
                            <!--  content... -->
                            </ul>
                        </div>
                    </div>
                </div>






                <div class="flex flex-col w-10/12" style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
                    <ul  class="flex flex-row items-center xl:gap-6 lg:gap-5 md:gap-2 w-11/12  ">
                        <li class="nav-itms {{Request::is('nhl/starting-goalies') ? 'active':'' }}">
                            <a href="{{url('nhl/starting-goalies')}}" style="{{Request::is('nhl/starting-goalies') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                                Starting Goalies
                            </a>
                        </li>
                        {{--bg-[#38b6ff] text-[#ffffff]--}}

                        @if(Request::is('nhl/line-combinations') != ('nhl/line-combinations') && Request::is('nhl/line-combinations') != ('nhl/line-combinations'))
                            <li class="nhl-linecombos_ nav-itms  {{Request::is('nhl/line-combinations') ? 'active':'' }}" style="padding: 1px; z-index: 2; {{ (isset($team_slug) ? 'color: #38b6ff;':'') }}" >
                                {{--<a href="{{url('nhl/line-combos')}}"  style="  z-index: 1;" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
                                <a href="{{url('nhl/line-combinations')}}"  style="  z-index: 1; cursor:pointer" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                    Line combinations
                                </a>
                            </li>
                        @else
                            <li class="nhl-linecombos_ nav-itms {{Request::is('nhl/line-combinations') ? 'active':'' }}"  style="padding: 1px;  z-index: 2; {{ (isset($team_slug) ? 'color: #38b6ff;':'') }}" >
                                {{--<a  href="{{url('nhl/line-combos')}}" style=" z-index: 1;"  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">--}}
                                <a  href="{{url('nhl/line-combinations')}}" style=" z-index: 1; cursor:pointer"  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">

                                    Line Combinations
                                </a>
                            </li>
                        @endif
                        <li class="nav-itms hidden {{Request::is('nhl/projections') ? 'active':'' }}">
                            <a href="{{url('nhl/projections')}}" style="{{Request::is('nhl/projections') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                                DFS Projections
                            </a>
                        </li>
                        {{--@if(Request::is('nhl/team-news') != ('nhl/team-news') && Request::is('nhl/player-news') != ('nhl/player-news') && Request::is('nhl/individual-player-news') != ('nhl/individual-player-news') && Request::is('nhl/all-player-news') != ('nhl/all-player-news'))--}}
                        {{--<li class="">--}}
                        {{--<a href="{{url('nhl/player-news')}}" style=" " class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
                        {{--Player News--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--@else--}}
                        {{--<li class="">--}}
                        {{--<a href="{{url('nhl/player-news')}}" style="color:#38b6ff;" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
                        {{--Player News--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--@endif--}}


                        @if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')

                            <li class="">
                                <a href="{{url('nhl/player-news')}}" style="color:#38b6ff;" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                    Player News
                                </a>
                            </li>
                        @else
                            <li class="">
                                <a href="{{url('nhl/player-news')}}" style=" " class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                    Player News
                                </a>
                            </li>
                        @endif

                    <!-- <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="" class=" text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff] ">
                            Props & Odds
                        </a>
                    </li> -->
                        <li class="nav-itms hidden {{Request::is('nhl/lineup-study') ? 'active':'' }}">
                            <a href="{{url('nhl/lineup-study')}}" style="{{Request::is('nhl/lineup-study') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                                Lineup Study
                            </a>
                        </li>

                        @if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')
                            <li class="nav-itms {{Request::is('nhl/news') ? 'active':'' }}">
                                <a href="/news" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">
                                    News
                                <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                                </a>
                            </li>
                        @else
                            <li class="nav-itms ">
                                <a href="/news" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold     text-center  ">
                                    News
                                <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                                </a>
                            </li>
                        @endif
                    </ul>

                    <div id="line-combos-div_  "  >
                        @php

                            if(!isset($team_slug)){
                                $team_slug = '';
                            }

                        @endphp
                        @if(Request::is('nhl/line-combos/'. $team_slug ))

                            <div class=""></div>
                            <div class="w-full relative">
                                <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 pt-2"  >

                                    @foreach($teams->data as $key=>$val)
                                        @if(!empty($val->logo->src))

                                            @if($val->league->slug == 'nhl')
                                                <li class="lc-team-logo "  value="">
                                                    <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                                        <img class="xl:w-15 lg:w-15 md:w-12 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                                    </a>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                        @elseif(Request::is('nhl/line-combinations'))
                            <div class=""></div>
                            <div class="w-full relative">
                                <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 pt-2"    >

                                    @foreach($teams->data as $key=>$val)
                                        @if(!empty($val->logo->src))
                                            @if($val->league->slug == 'nhl')
                                                <li class="lc-team-logo "  value="">
                                                    <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                                        <img class="xl:w-15 lg:w-15 md:w-12 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                                    </a>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <div id="line-combos_" class="hidden">
                                <div class=""></div>
                                <div class="w-full relative">
                                    <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 pt-2"  >

                                        @foreach($teams->data as $key=>$val)
                                            @if(!empty($val->logo->src))
                                                @if($val->league->slug == 'nhl')
                                                    <li class="lc-team-logo "  value="">
                                                        <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                                            <img class="xl:w-15 lg:w-15 md:w-12 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                                        </a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                    </div>

                    {{--@if (@if(request()->route()->getName()) === 'top')--}}
                    {{--<title>You are on the top page</title>--}}
                    {{--@else--}}
                    {{--<title>You are on the article page</title>--}}
                    {{--@endif--}}
                    {{--{{Request::is('nhl/line-combos') }}--}}

                </div>
            </div>


        </div>
    </div>
    <div class="smm-block hidden relative mb-12 py-2" >
        <div class="fixed top-0 w-full z-30">
            <section class="top-nav">
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                    <div class='menu-button'></div>
                </label>
                <ul class="menu">
                    <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold bg-[#38b6ff] text-[#ffffff]  xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white">
                        <a href="{{url('/nhl/home')}}" class="w-full ">
                            NHL
                        </a>
                    </li>
                    <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                        <a href="{{url('/nba/line-combos')}}" class="w-full">
                            NBA
                        </a>
                    </li>
                    <li  class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                        <a href="{{url('/soc/line-combos')}}" class="w-full">
                            SOC
                        </a>
                    </li>
                    <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50  hover:text-white ">
                        <a href="{{url('/nfl/home')}}"  class="w-full">
                            NFL
                        </a>

                    </li>

                </ul>
                <div class="w-full flex justify-center">
                    <div class="flex items-center  ">
                        {{--<h1 class="text-4xl font-regular text-black" style="line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}
                        {{--<h1 class="text-4xl font-regular text-[#39b6ff]" style="line-height: 1; font-family: 'Mouse Memoirs'">lineups</h1>--}}
                        @php
                            if(!isset($team_slug)){
                                $team_slug = '';
                            }
                        @endphp
                        {{--@if(Request::is('nhl/line-combos/'. $team_slug ))--}}

                            {{--@if(isset($color2))--}}
                                {{--@if($color2 == '#FFFFFF')--}}

                                    {{--<h1 class="text-4xl font-regular" style="color: {{  ( !empty($projectedColor) ? $projectedColor: '#000')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #000; text-stroke: 1px  #000; line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                                {{--@else--}}

                                    {{--<h1 class="text-4xl font-regular" style="color: {{  ( !empty($projectedColor) ? $projectedColor: '#000')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: {{  ( !empty($color2) ? $color2: '')  }}; text-stroke: 1px {{  ( !empty($color2) ? $color2: '')  }}; line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                                {{--@endif--}}
                            {{--@else--}}

                                {{--<h1 class="text-4xl font-regular" style="  line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                            {{--@endif--}}


                            {{--<h1 class="text-4xl font-regular  " style="color: {{  ( !empty($lineUpsColor) ? $lineUpsColor: '#38b6ff')  }};  -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: {{  ( !empty($color1) ? $color1: '')  }}; text-stroke: 1px {{  ( !empty($color1) ? $color1: '')  }}; line-height: 1;  font-family: 'Mouse Memoirs'">lineups</h1>--}}

                        {{--@else--}}
                            {{--<h1 class="text-4xl font-regular text-black" style="  line-height: 1; font-family: 'Mouse Memoirs'">projected</h1>--}}

                            {{--<h1 class="text-4xl font-regular  text-[#38b6ff]" style="line-height: 1;  font-family: 'Mouse Memoirs'">lineups</h1>--}}

                        {{--@endif--}}


                        <img  src="{{ asset('/images/projectedlineup_logo.png') }}" />
                    </div>
                </div>
            </section>
        </div>
    </div>