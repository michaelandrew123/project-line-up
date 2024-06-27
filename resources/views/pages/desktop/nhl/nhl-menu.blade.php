

<div class="w-full flex flex-col justify-start items-start  hidden">
    <div class="flex flex-row w-10/12">
        <div class="w-full flex justify-evenly items-center">
            <a href="/">
                <img class="w-96" src="{{ asset('/images/projectedlineup_logo.png') }}" />
            </a>
            <img class="w-6/12 ml-2" src="{{ asset('/images/home-page/nca.png') }}" alt="">
        </div>
    </div>
    <div class="relative w-10/12">
        <div class="relative ">
            <input type="text" class="w-full  text-left text-xl text-[#4d4d4d] rounded-[13px] h-14 " id="search-nhl-home" placeholder="Search Projected Lineups" style="border: 2px solid #38B6FF">
            <a class="absolute top-2 right-3" href="">
                <img class="w-[40px]" src="{{ asset('/images/search.png') }}" alt="">
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
    {{--//Current active--}}
    <div class="flex flex-col w-10/12 mt-2" >
        <div class="flex xl:gap-6 lg:gap-5 gap-2 ">
            <a href="{{url('/nhl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 p-2 border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                NHL
            </a>
            <a href="{{url('/nba/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  p-2 border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                NBA
            </a>
            <a href="{{url('/soc/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  p-2 border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                MLB
            </a>
            <a href="{{url('/nfl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  p-2 border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                NFL
            </a>
            <a href="{{url('/bet')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#15d869] xl:px-4 lg:px-4 md:px-2 p-2  border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">
                BET
            </a>
            <a href="{{url('/learn')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#1c6399] xl:px-4 lg:px-4 md:px-2  p-2 border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">
                LEARN
            </a>
        </div>
    </div>

    <div class="flex flex-col sm:w-10/12 w-full " style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
        <ul  class="flex flex-row  items-center xl:gap-6 lg:gap-5 md:gap-2 sm:w-11/12 w-full gap-2">
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
                    <a href="/nhl/matchup" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">
                        Matchup
                    <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                    </a>
                </li>
            @else
                <li class="nav-itms ">
                    <a href="/nhl/matchup" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold     text-center  ">
                        Matchup
                    <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>

