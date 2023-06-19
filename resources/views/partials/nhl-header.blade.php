<div class="w-full mb-3 flex flex-row justify-center block smm-hidden ">
    <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-flex flex-row justify-between items-center flex w-full  border-black m-4 gap-5 max-w-screen-2xl border-b-2 border-slate-300 pb-[20px]">
        <div class="flex flex-row justify-between items-end flex w-full">
            <div class="flex gap-1 items-end">
                <img class="w-[99px]" src="{{ asset('/images/line-combos/logo/matthew_tkachuk.png') }}" alt="">
                <div class="flex">
                    <h1 class="text-[50px] font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                    <h1 class="text-[50px]  font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center  w-8/12   justify-between">
                <div class="flex gap-6">
                    <a href="{{url('/nhl/home')}}" class="text-[24px] font-bold bg-[#38b6ff] text-[#ffffff]  px-4 py-px rounded-md">NHL</a>
                    <a href="" class="text-[24px]  font-bold  text-[#38b6ff] px-4 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NBA</a>
                    <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">SOC</a>
                    <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NFL</a>
                    <a href="" class="text-[24px]  font-bold  text-[#15d869] px-4 py-px border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">BET</a>
                    <a href="" class="text-[24px]  font-bold  text-[#1c6399] px-4 py-px border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">LEARN</a>
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
        <ul class="flex flex-row justify-between w-full">
 
            <li class="nav-itms {{Request::is('nhl/starting-goaliesv2') ? 'active':'' }}">
                <a href="{{url('nhl/starting-goaliesv2')}}" style="{{Request::is('nhl/starting-goaliesv2') ? 'background-color:transparent':'' }}" class="button-header text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black  px-2 mx-px rounded-lg text-center hover:bg-neutral-300 active:bg-[#38b6ff]  ">
                    Starting Goalies
                </a>
            </li>
          
                <li class="nav-itms   {{Request::is('nhl/line-combos') ? 'active':'' }}">
                    <a  href="{{url('nhl/line-combos')}}" style="{{Request::is('nhl/line-combos') ? 'background-color:transparent':'' }} " 
                      class=" text-xl xl:text-lg lg:text-base md:text-sm font-bold  bg-[#ebece9]  px-2 py-px rounded-lg text-center">
                        Line Combinations
                    </a>
                </li>
         
            <li class="nav-itms   {{Request::is('nhl/projections') ? 'active':'' }}">
                <a href="{{url('nhl/projections')}}" style="{{Request::is('nhl/projections') ? 'background-color:transparent':'' }}" class=" text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff]  ">
                    DFS Projections
                </a>
            </li>
            <li class="nav-itms {{Request::is('nhl/player-news') ? 'active':'' }}">
                <a href="{{url('nhl/player-news')}}" style="{{Request::is('nhl/player-news') ? 'background-color:transparent':'' }}" class="header-btn text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff]  ">
                    Player News
                </a>
            </li>
            <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                <a href="" class=" text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff] ">
                    Props & Odds
                </a>
            </li>
            <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                <a href="" class="  text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2  mx-px rounded-lg text-center hover:bg-neutral-300   active:bg-[#38b6ff] ">
                    Lineup Study
                </a>
            </li>
            <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                <a href="" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold bg-[#ebece9] text-black px-2 mx-px rounded-lg text-center hover:bg-neutral-300  active:bg-[#38b6ff] active:text-[#ffffff]">
                  <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List
                </a>
            </li>
        </ul>
        <div class="w-full relative mb-7">
            <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 absolute">
                @foreach($team->data as $key=>$val)
                    @if(!empty($val->logo->src))
                        <li class="lc-team-logo" style="{{ Request::is('nhl/line-combos') != ('nhl/line-combos') ? 'display:none':'' }}" value="">
                            <a class="" href="/nhl/line-combos/{{$val->slug}}">
                            <img class="w-10 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                            </a>
                        </li> 
                    @endif 
                @endforeach
            </ul>
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
        <div class="relative w-full hidden">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input " type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href="">
                <img class="w-[3.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
</div>