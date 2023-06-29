<div class="w-full flex flex-row justify-center block smm-hidden">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-center justify-between w-full m-4 gap-5 max-w-screen-2xl">
            <div class="flex flex-row justify-between items-end flex w-full  pb-3 border-[d9d9d9] border-b-2">
                <div class="flex gap-1 items-end">
                    <img class="w-[99px]" src="{{ asset('/images/line-combos/logo/matthew_tkachuk.png') }}" alt="">
                    <div class="flex">
                        <h1 class="text-[50px] font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                        <h1 class="text-[50px]  font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center w-8/12 justify-between ">
                    <div class="flex gap-6">
                        <a href="{{url('/nhl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NHL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#38b6ff] px-4 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NBA</a>
                        <a href="{{url('//home')}}" class="text-[24px] font-bold bg-[#38b6ff] text-[#ffffff]  px-4 py-px rounded-md">SOC</a>
                        <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NFL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#15d869] px-4 py-px border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">BET</a>
                        <a href="{{url('/learn')}}" class="text-[24px]  font-bold  text-[#1c6399] px-4 py-px border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">LEARN</a>
                    </div>
                    <a href="#" >
                        <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-col w-full gap-1" style="{{ Request::is('/') == ('/') ? 'display:none':'' }}">
                <ul  class="flex flex-row justify-between w-10/12  ">
                    <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="{{url(' ')}}" style="{{Request::is(' ') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            Matchups
                        </a>
                    </li>
                    <li class="nav-itms   {{Request::is('soc/line-combos') ? 'active':'' }}">
                        <a  href="{{url('nfl/line-combos')}}" style="{{Request::is('soc/line-combos') ? 'text-color:transparent':'' }} " 
                        class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            Starting lineups
                        </a>
                    </li>
                    <li class="nav-itms   {{Request::is('nhl/projections') ? 'active':'' }}">
                        <a href="{{url(' ')}}" style="{{Request::is(' ') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            DFS Projections
                        </a>
                    </li>
                    <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="{{url(' ')}}" style="{{Request::is(' ') ? 'text-color:transparent':'' }}" class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center">
                            Player News
                        </a>
                    </li>
                    <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="" class="  text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center ">
                            Lineup Study
                        </a>
                    </li>
                    <li class="nav-itms {{Request::is(' ') ? 'active':'' }}">
                        <a href="" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">
                            News
                        </a>
                    </li>
                </ul>
                <div class="bg-slate-100 w-full h-1 mt-2"></div>
                <div class="w-full relative mb-5">
                    <ul id="" class="flex flex-row items-center xl:gap-2 lg:gap-1 absolute">
                        @foreach($team->data as $key=>$val)
                            @if(!empty($val->logo->src))
                                <li class="lc-team-logo" style="{{ Request::is('soc/line-combos') != ('sco/line-combos') ? 'display:none':'' }}" value="">
                                    <a class="" href="/nfl/line-combos/{{$val->slug}}">
                                    <img class="w-10 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                    </a>
                                </li> 
                            @endif 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>