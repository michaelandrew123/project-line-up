    <div class="w-full flex flex-row justify-center block smm-hidden">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center justify-between gap-1 max-w-screen-2xl">
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
                        <a href="{{url('/nhl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                            NHL
                        </a>
                        <a href="" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold bg-[#38b6ff] text-[#ffffff]  xl:px-4 lg:px-4 md:px-2 py-px rounded-md">
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
                                @if($val->league->slug == 'nba')
                                    <li class="lc-team-logo "  
                                        style="" value="">
                                        <a class=""  href="">
                                            <img class="xl:w-10 lg:w-10 md:w-7 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                        </a>
                                    </li> 
                                @endif 
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- <div id="head-drp" class="relative border border-[#9fa0a0] w-full h-[3rem] rounded-lg flex flex-col justify-center items-center">
                <a href="#" class="w-[28rem] text-4xl text-[#9fa0a0] font-semibold">
                    {{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}
                </a>
                <div class="drp-dwn hidden flex flex-col  w-full p-2 bg-slate-50 absolute top-12 overflow-y-auto h-[21rem]">
                    @foreach($team->data as $key=>$val)
                        <div class="flex flex-row items-center gap-10">
                            <a class="teams text-2xl font-semibold text-[#9fa0a0]" href="/nhl/line-combos/{{$val->slug}}">{{$val->name}}</a>
                            <div class="flex flex-col">
                                <img class="w-7 flex " src="{{$val->logo->src}}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="absolute right-[15px] top-[8px] rotate-[271deg] arrw-v1" href="">
                    <img class="w-[2.5rem] " src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
                </a>
            </div> -->
            <!-- <div id="head-drp" >
                <select class="relative border border-[#9fa0a0] w-full h-[3rem] rounded-lg flex flex-col justify-center items-center" name="" id="">
                    @foreach($team->data as $key=>$val)
                        <option class="" value="">
                            <a href="/nhl/line-combos/{{$val->slug}}">{{$val->name}}</a>
                        </option>
                    @endforeach
                </select>
                <a class="absolute right-[15px] top-[8px] rotate-[271deg] arrw-v1" href="">
                    <img class="w-[2.5rem] " src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
                </a>
            </div> -->
        </div>
    </div>