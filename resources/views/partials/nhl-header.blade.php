  
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
                        <a href="" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                            NBA
                        </a>
                        <a href="{{url('/nfl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
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
                    <li class="nav-itms {{Request::is('nhl/starting-goaliesv2') ? 'active':'' }}">
                        <a href="{{url('nhl/starting-goaliesv2')}}" style="{{Request::is('nhl/starting-goaliesv2') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
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
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=" smm-block hidden relative mb-5 w-full py-2">
        <div class="fixed top-0 w-full bg-white z-30">
            <!-- Main navigation container -->
            <nav
                class="flex-no-wrap relative flex w-full items-center justify-between bg-[#f3f5f9] rounded-md shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10  "
                data-te-navbar-ref>
                <div class="flex w-full flex-row items-center justify-between px-3">
                    <!-- Hamburger button for mobile view -->
                    <button
                    class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                    type="button"
                    data-te-collapse-init
                    data-te-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="h-7 w-7">
                        <path
                            fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                        </svg>
                    </span>
                    </button>

                    <!-- Collapsible navigation container -->
                    <div
                    class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                    id="navbarSupportedContent1"
                    data-te-collapse-item>
                    <!-- Logo -->
                    <a
                        class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                        href="#">
                        <img
                        src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp"
                        style="height: 15px"
                        alt="TE Logo"
                        loading="lazy" />
                    </a>
                    <!-- Left navigation links -->
                    <ul
                        class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
                        data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <!-- Dashboard link -->
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                            href="#"
                            data-te-nav-link-ref
                            >Dashboard</a
                        >
                        </li>
                        <!-- Team link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#"
                            data-te-nav-link-ref
                            >Team</a
                        >
                        </li>
                        <!-- Projects link -->
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a
                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="#"
                            data-te-nav-link-ref
                            >Projects</a
                        >
                        </li>
                    </ul>
                    </div>
                    <div class="w-full flex justify-center">
                        <div class="flex">
                            <h1 class="text-4xl font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                            <h1 class="text-4xl font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                        </div>
                    </div>
                
                </div>
            </nav>
        </div>
    </div>