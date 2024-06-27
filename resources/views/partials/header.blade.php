
<div class="w-full flex flex-row justify-center  ">
    <div class="xl:w-10/12 lg:w-10/12 md:w-10/12 sm:w-10/12 w-full justify-center flex flex-col  max-w-screen-2xl sm:mt-8 sm:mb-4 my-4 gap-4 ">
    {{--<div class=" flex flex-row gap-4 max-w-screen-2xl ">--}}

        <div class="flex flex-row justify-between items-center flex w-full py-3 hidden ">
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

                </div>
            </div>

            <div class="hidden flex flex-row items-center xl:w-8/12 lg:w-8/12 md:w-7/12 xl:justify-end lg:justify-end md:justify-end hidden">

                <a href="#" >
                    <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>



        <div class="flex flex-row w-full sm:justify-start justify-center sm:my-0 ">

            <div class="  gap-2 w-full sm:flex flex-col items-center justify-start items-baseline  ">
                <div class="relative w-full ">
                    <div class=" xl:w-full md:w-full sm:w-full">
                        <div class="flex flex-row w-full">
                            <div class="w-full flex  flex-row  justify-evenly items-center gap-5">

                                <div class="flex sm:flex-row flex-col w-10/12  relative ">


                                    {{--request()->segment(2) != 'player-news' &&--}}
                                    @if(
                                        request()->segment(2) != 'line-combinations' &&
                                        request()->segment(2) != 'starting-lineups' &&
                                        request()->segment(2) != 'depth-charts' &&
                                        request()->segment(2) != 'predicted-lineups')


                                        <a href="/" class=" relative sm:block flex items-center justify-center">
                                            <img class=" relative sm:top-12 sm:w-auto top-0 w-64" src="{{ asset('/images/plu_log.svg') }}" />
                                        </a>

                                        <div class="flex flex-row relative  justify-end" >
                                            @if (request()->path() != '' && request()->path() != '/')
                                                @if(request()->segment(1) == 'nba')
                                                    <img class="w-auto  "
                                                         src="{{ asset('/images/webgl/nba-header.webp') }}"
                                                         alt="">
                                                @else
                                                    <img class="w-auto  "
                                                         src="{{ asset('/images/webgl/'.request()->segment(1).'-header.png') }}"
                                                         alt="">
                                                @endif
                                            @else
                                                <img class="w-auto sm:mt-10 mt-0"
                                                     src="{{ asset('/images/webgl/main-header.webp') }}"
                                                     alt="">
                                             @endif
                                        </div>
                                    @else
                                        <a href="/" class=" relative sm:block flex items-center justify-center">
                                            <img class=" relative  w-64" src="{{ asset('/images/plu_log.svg') }}" />
                                        </a>

                                        <div class="flex flex-row relative  justify-end" >
                                            @if (request()->path() != '' && request()->path() != '/')
                                                @if(request()->segment(1) == 'nba')
                                                    <img class="w-auto  hidden  "
                                                         src="{{ asset('/images/webgl/nba-header.webp') }}"
                                                         alt="">
                                                @else
                                                    <img class="w-auto hidden  "
                                                         src="{{ asset('/images/webgl/'.request()->segment(1).'-header.png') }}"
                                                         alt="">
                                                @endif
                                            @endif
                                        </div>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="w-full flex flex-row justify-center">

                        <div class=" xl:w-10/12 md:w-10/12 sm:w-full w-11/12">



                            @if(request()->segment(2) != 'player-news' &&
                                request()->segment(2) != 'line-combinations' &&
                                request()->segment(2) != 'starting-lineups' &&
                                request()->segment(2) != 'depth-charts' &&
                                request()->segment(2) != 'predicted-lineups')

                                <div class="relative w-full flex justify-center ">

                                    <input type="text" class=" w-full text-left text-base text-[#4d4d4d] rounded-[13px] h-14 " id="search-nhl-home" placeholder="search projected lineups" >
                                    <a class="absolute top-2 right-3 search-mode" href="">
                                        <img class="w-[40px] dark-mode hidden " src="{{ asset('/images/search_dark.png') }}" alt="">
                                        <img class="w-[40px] light-mode" src="{{ asset('/images/search.png') }}" alt="">
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


                            @endif




                            <div class="relative sm:w-full w-full mt-4 sm:block hidden">
                                <div class="flex xl:gap-6 lg:gap-5 md:gap-2 gap-2  ">


                                    <a href="{{url('/nhl/home')}}" class="{{ request()->segment(1) === 'nhl' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold   xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        NHL
                                    </a>
                                    <a href="{{url('/nba/home')}}"  class="{{ request()->segment(1) === 'nba' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        NBA
                                    </a>
                                    <a href="{{url('/mlb/home')}}" class="{{ request()->segment(1) === 'mlb' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        MLB
                                    </a>
                                    <a href="{{url('/nfl/home')}}" class="{{ request()->segment(1) === 'nfl' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        NFL
                                    </a>
                                    <a href="{{url('/epl/home')}}" class="{{ request()->segment(1) === 'epl' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        EPL
                                    </a>
                                    <a href="{{url('/learn')}}" class="{{ request()->segment(1) === 'learn' ? 'bg-sky-500/50 border-sky-50 text-white' :  'text-[#38b6ff]'   }} xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold   xl:px-4 lg:px-4 md:px-2 px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                                        LEARN
                                    </a>

                                </div>
                            </div>

                            <div class="hidden sm:block">
                                @if (request()->path() != '' || request()->path() != '/')
                                    <div class="flex flex-col sm:w-full w-full mt-2" style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
                                        <ul  class="flex flex-row  items-center xl:gap-6 lg:gap-5 md:gap-2 sm:w-11/12 w-full gap-2">
                                            @if(request()->segment(1) == 'nba')
                                                @include('pages.desktop.sub-menu.nba')
                                            @elseif(request()->segment(1) == 'nhl')
                                                @include('pages.desktop.sub-menu.nhl')
                                            @elseif(request()->segment(1) == 'mlb')
                                                @include('pages.desktop.sub-menu.mlb')
                                            @elseif(request()->segment(1) == 'nfl')
                                                @include('pages.desktop.sub-menu.nfl')
                                            @elseif(request()->segment(1) == 'epl')
                                                @include('pages.desktop.sub-menu.epl')
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--sm:hidden flex flex-row items-center absolute right-5 top-1/3 translate-y-[-50%]--}}
                    <div class="flex flex-row items-center  absolute sm:top-20 sm:right-0 right-5 top-10 translate-y-[-50%]">
                        <div class="">
                            <input type="checkbox" class="checkbox" id="checkbox">
                            <label for="checkbox" class="checkbox-label">
                                <i class="fas fa-sun"></i>
                                <i class="fas fa-moon"></i>
                                <span class="ball"></span>
                            </label>
                        </div>
                    </div>


                </div>


            </div>

        </div>

        <div class="w-full sm:flex sm:w-full  hidden" >

            @php
                $segment1 = request()->segment(1);
                $segment2 = request()->segment(2);

                if(!isset($team_slug)){
                    $team_slug = '';
                }
            @endphp
            @if($segment1 . '/line-combinations/'. $team_slug || $segment1 . '/starting-lineups/'. $team_slug || $segment1 . '/predicted-lineups')
                @if($segment2 == 'line-combos' || $segment2 == 'line-combinations' || $segment2 == 'starting-lineups' || $segment2 == 'predicted-lineups')
                   <div   class="w-full relative ddd">
                        <ul  class="sm:flex sm:flex-row grid grid-row-4   grid-flow-col items-center xl:gap-2 lg:gap-1 py-2"  >
                            @foreach($teams->data as $key=>$val)
                                @if(!empty($val->logo->src))
                                    {{--@if($val->league->slug == 'nhl')--}}
                                    <li class="lc-team-logo flex justify-center items-center"  value="">
                                        <a  href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{$val->slug}}"  >
                                            <img class="xl:w-15 lg:w-15 md:w-12 w-10 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                        </a>
                                    </li>

                                @else

                                    <li class="lc-team-logo flex justify-center items-center"  value="">
                                        <a  href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{$val->slug}}"  >
                                            {{ substr($val->name, 0, 1) }}
                                        </a>
                                    </li>


                                    {{--@endif--}}
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            @elseif($segment1 . '/line-combinations' || $segment1 . '/starting-lineups' || $segment1 . '/predicted-lineups')

                <div   class="w-full relative ssss">
                    <ul  class="sm:flex sm:flex-row  items-center justify-center gap-2 xl:gap-2 lg:gap-1 py-2   ">
                        @foreach($teams->data as $key=>$val)
                            @if(!empty($val->logo->src))
                                @if($val->league->slug == 'nhl')
                                    <li class="lc-team-logo flex justify-center items-center"  >
                                        <a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{$val->slug}}" >
                                            <img class="xl:w-15 lg:w-15 md:w-12 w-10 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            @else


                <div class="hidden qqqq">

                    <div  class="w-full relative flex-wrap grid grid-row-4 ">
                        <ul class="sm:flex sm:flex-row grid grid-row-4  grid-flow-col  items-center xl:gap-2 lg:gap-1 py-2">
                            @foreach($teams->data as $key=>$val)
                                @if(!empty($val->logo->src))
                                    @if($val->league->slug == 'nhl')
                                        <li class="lc-team-logo flex justify-center items-center"  >
                                            <a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{$val->slug}}"  >
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


        <div class="mt-16 hidden">
            <a href="#" >
                <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

    </div>
</div>



<div class="w-full hidden">

    <div id="header-homepage" class="w-full sm:mt-10  justify-center my-4 hidden">


        <div class="xl:w-11/12 lg:w-11/12 md:w-11/12 sm:w-11/12 w-full flex flex-col items-center justify-between gap-1 sm:max-w-screen-2xl hidden ">
            <div class="w-full h-auto sm:flex justify-center relative  hidden">
                @if(isset($team->data->featured_player_1))
                    @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_2))
                        <img class="xl:w-56 lg:w-56 md:w-52  relative " src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                    @else
                        <img class="xl:w-56 lg:w-56 md:w-52   relative left-20" src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                    @endif
                @endif
                @if(isset($team->data->featured_player_2))
                    @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_1))
                        <img class="xl:w-56 lg:w-56 md:w-52 relative  z-10" src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                    @else
                        <img class="xl:w-56 lg:w-56 md:w-52 z-10 relative" src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                    @endif
                @endif
                @if(isset($team->data->featured_player_3))
                    @if(!isset($team->data->featured_player_2) || !isset($team->data->featured_player_1))
                        <img class=" xl:w-56 lg:w-56 md:w-52 relative " style="right: 5rem;" src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                    @else
                        <img class="xl:w-56 lg:w-56 md:w-52 relative" style="right: 5rem;" src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                    @endif
                @endif

            </div>
        </div>


        <div class="flex flex-row w-full justify-evenly hidden">
            <div class="w-full h-auto flex justify-center relative">
                <img class="w-[32%] z-20 absolute" src="{{ asset('/images/home-page/connor-mcdavid.png') }}" alt="">
                <img class="w-[32%] z-0 " src="{{ asset('/images/home-page/auston-matthews.png') }}" alt="">
                <img class="w-[32%] z-10 " src="{{ asset('/images/home-page/mohamed-salah.png') }}" alt="">
            </div>
        </div>




        <div class="relative sm:w-10/12 w-11/12 flex sm:flex-row-reverse flex-col items-center justify-center sm:my-0 my-4">


            <div class="flex items-end relative w-full justify-center">
                <div class="flex justify-center">
                    <a href="/">
                        <img  class="sm:w-auto w-64 " src="{{ asset('/images/plu_log.svg') }}" />

                    </a>
                </div>


                <div class="sm:hidden flex flex-row items-center absolute right-5 top-1/3 translate-y-[-50%]">
                    <div class="">

                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="checkbox-label">
                            <i class="fas fa-sun"></i>
                            <i class="fas fa-moon"></i>
                            <span class="ball"></span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="flex flex-row w-full justify-evenly  ">
                <div class="w-full h-auto flex justify-center relative">

                    <img class="sm:w-auto w-[90%]"
                         src="{{ asset('/images/webgl/main-header.webp') }}"
                         alt="">

                    {{--<img--}}
                            {{--class="w-[40%] z-20 absolute"--}}
                            {{--src="{{ asset('/images/index/3.png') }}"--}}
                            {{--alt="">--}}
                    {{--<img--}}
                            {{--class="w-[40%] z-0 "--}}
                            {{--src="{{ asset('/images/index/2.png') }}"--}}
                            {{--alt="">--}}
                    {{--<img--}}
                            {{--class="w-[40%] z-10"--}}
                            {{--src="{{ asset('/images/index/1.png') }}"--}}
                            {{--alt="">--}}
                </div>
            </div>
            <div class="w-full ">
                <div class="relative  w-full">
                    <input type="text" class="w-full  text-left text-xl text-[#4d4d4d] rounded-[13px] h-14 " id="search-home" placeholder="search projected lineups" >
                    {{--<a class="absolute top-2 right-3" href="">--}}
                        {{--<img class="w-[40px]" src="{{ asset('/images/search.png') }}" alt="">--}}
                    {{--</a>--}}
                    <a class="absolute top-2 right-3 search-mode" href="">
                        <img class="w-[40px] dark-mode hidden " src="{{ asset('/images/search_dark.png') }}" alt="">
                        <img class="w-[40px] light-mode" src="{{ asset('/images/search.png') }}" alt="">
                    </a>
                </div>
                <div id="search-nhl-home-content" class="relative hidden">
                    <div class="absolute bg-white z-10 w-full text-center rounded-b-lg border border-y border-b border-[#38B6FF]">

                        <div class="i hidden" id="loading_"><div></div><div></div></div>
                        <ul id="item-search-content">
                            <!--  content... -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col  mt-2 justify-center hidden" style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
            <ul  class="flex flex-row justify-center flex-wrap items-center gap-2 w-full  ">
                <li class="nav-itms {{Request::is('nhl/starting-goalies') ? 'active':'' }}">
                    <a href="{{url('nhl/starting-goalies')}}" style="{{Request::is('nhl/starting-goalies') ? 'text-color:transparent':'' }}" class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center">
                        Starting Goalies
                    </a>
                </li>
                {{--bg-[#38b6ff] text-[#ffffff]--}}
                <li class="nhl-linecombos_ nav-itms {{Request::is('nhl/line-combinations') ? 'active':'' }}"   >
                    {{--<a href="{{url('nhl/line-combos')}}"  style="  z-index: 1;" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
                    <a href="{{url('nhl/line-combinations')}}"  style="  z-index: 1; cursor:pointer" class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                        Line combinations
                    </a>
                </li>
                <li class="nav-itms hidden {{Request::is('nhl/projections') ? 'active':'' }}">
                    <a href="{{url('nhl/projections')}}" style="{{Request::is('nhl/projections') ? 'text-color:transparent':'' }}" class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center">
                        DFS Projections
                    </a>
                </li>
                @if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')

                    <li class="">
                        <a href="{{url('nhl/player-news')}}" style="color:#38b6ff;" class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                            Player News
                        </a>
                    </li>
                @else
                    <li class="">
                        <a href="{{url('nhl/player-news')}}" style=" " class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                            Player News
                        </a>
                    </li>
                @endif

                <li class="nav-itms hidden {{Request::is('nhl/lineup-study') ? 'active':'' }}">
                    <a href="{{url('nhl/lineup-study')}}" style="{{Request::is('nhl/lineup-study') ? 'text-color:transparent':'' }}" class="text-base xl:text-lg lg:text-base md:text-sm font-bold text-center">
                        Lineup Study
                    </a>
                </li>

                @if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')
                    <li class="nav-itms {{Request::is('nhl/news') ? 'active':'' }}">
                        <a href="/nhl/matchup" class="  flex items-center text-base xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">
                            Matchup
                        <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                        </a>
                    </li>
                @else
                    <li class="nav-itms ">
                        <a href="/nhl/matchup" class="  flex items-center text-base xl:text-lg lg:text-base md:text-sm font-bold     text-center  ">
                            Matchup
                        <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>


</div>