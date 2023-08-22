  
    <div class="w-full flex flex-row justify-center block smm-hidden ">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center justify-between gap-1 max-w-screen-2xl ">
            <div class="flex flex-row justify-between items-end flex w-full  pb-3 border-[d9d9d9] border-b-2">
                <div class="flex gap-1 items-end">
                    <img class="xl:w-[99px] lg:w-[99px] md:w-[80px]" src="{{ asset('/images/line-combos/logo/matthew_tkachuk.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                        <h1 class="xl:text-[50px] lg:text-[50px] md:text-[40px] font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
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
                        <a href="" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#15d869] xl:px-4 lg:px-4 px-3 md:px-2 border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">
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
            <div class="flex flex-col w-full gap-1" style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
                <ul  class="flex flex-row items-center justify-between w-11/12  ml-1">
                    <li class="nav-itms {{Request::is('nhl/starting-goalies') ? 'active':'' }}">
                        <a href="{{url('nhl/starting-goalies')}}" style="{{Request::is('nhl/starting-goalies') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            Starting Goalies
                        </a>
                    </li>
                    @if(Request::is('nhl/line-combos') != ('nhl/line-combos') && Request::is('nhl/line-combinations') != ('nhl/line-combinations'))
                        <li class="">
                            <a href="{{url('nhl/line-combos')}}" style="" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                Line combinations
                            </a>
                        </li>
                    @else
                        <li class=" ">
                            <a  href="{{url('nhl/line-combos')}}" style="color:#38b6ff;" 
                            class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                                Line Combinations
                            </a>
                        </li>
                    @endif
                        <li class="nav-itms   {{Request::is('nhl/projections') ? 'active':'' }}">
                            <a href="{{url('nhl/projections')}}" style="{{Request::is('nhl/projections') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                                DFS Projections
                            </a>
                        </li>
                    @if(Request::is('nhl/team-news') != ('nhl/team-news') && Request::is('nhl/player-news') != ('nhl/player-news') && Request::is('nhl/individual-player-news') != ('nhl/individual-player-news') && Request::is('nhl/all-player-news') != ('nhl/all-player-news'))
                        <li class="">
                            <a href="{{url('nhl/player-news')}}" style=" " class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                Player News
                            </a>
                        </li>
                    @else
                        <li class="">
                            <a href="{{url('nhl/player-news')}}" style="color:#38b6ff;" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                Player News
                            </a>
                        </li>
                    @endif
                    <!-- <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="" class=" text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff] ">
                            Props & Odds
                        </a>
                    </li> -->
                    <li class="nav-itms {{Request::is('nhl/lineup-study') ? 'active':'' }}">
                        <a href="{{url('nhl/lineup-study')}}" style="{{Request::is('nhl/lineup-study') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            Lineup Study
                        </a>
                    </li>
                    <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">
                            News
                        <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
                        </a>
                    </li>
                </ul>
                @if(Request::is('nhl/line-combos') != ('nhl/line-combos') && Request::is('nhl/line-combos/{team}') != ('nhl/line-combos/{team}') && Request::is('nhl/team-news') != ('nhl/team-news'))
                  <div class=""></div>
                @else            
                  <div class="bg-[#d9d9d9] w-full h-px"></div>
                @endif
                <div class="w-full relative">
                    <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 absolute ">
                        @foreach($team->data as $key=>$val)
                            @if(!empty($val->logo->src))
                                @if($val->league->slug == 'nhl')    
                                    @if(Request::is('nhl/line-combos') != ('nhl/line-combos') && Request::is('nhl/line-combos/{team}') != ('nhl/line-combos/{team}') && Request::is('nhl/team-news') != ('nhl/team-news') && Request::is('nhl/line-combinations') != ('nhl/line-combinations'))
                                        <li class="lc-team-logo " style="display:none;"   value="">
                                            <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                            <img class="xl:w-10 lg:w-10 md:w-7 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                            </a>
                                        </li> 
                                    @else 
                                        <li class="lc-team-logo "  
                                            style=" " value="">
                                            <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                            <img class="xl:w-10 lg:w-10 md:w-7 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                            </a>
                                        </li> 
                                    @endif 
                                @endif
                            @endif 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="smm-block hidden relative mb-12 py-2" >
        <!-- <div class="fixed top-0 w-full bg-red-700 z-30 hidden"> 
            <nav class="flex items-center bg-gray-50 dark:bg-gray-800 dark:border-gray-700 h-14 relative">
                <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 relative top-12 left-0">
                    <div class="hidden w-full" id="navbar-hamburger">
                        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
                            </li>
                            <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
                            </li>
                            <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
                            </li>
                            <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <div class="flex">
                        <h1 class="text-4xl font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                        <h1 class="text-4xl font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                    </div>
                </div>
            </nav>
        </div> -->
        <div class="fixed top-0 w-full z-30">
            <section class="top-nav">
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                    <div class='menu-button'></div>
                </label>
                <ul class="menu">
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                    <li>Four</li>
                    <li>Five</li>
                </ul>
                <div class="w-full flex justify-center">
                    <div class="flex">
                        <h1 class="text-4xl font-regular text-black" style="font-family: 'Mouse Memoirs'">projected</h1>
                        <h1 class="text-4xl font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                    </div>
                </div>
            </section>
        </div>
    </div>