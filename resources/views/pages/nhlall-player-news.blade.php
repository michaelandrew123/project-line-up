@extends('layouts.master-nhl')

@section('content')
<!-- Desktop design -->
<!-- <div class="w-full flex justify-center bg-slate-100 ">
    <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5 block smm-hidden max-w-screen-2xl">
        <div class="flex flex-row justify-between items-center">
            <div class="flex gap-3">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <div class="flex">
                    <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                    <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-5  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">EPL</a>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-between w-full gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</a>
                <a href="{{url('/nhl/player-news')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</a>
        </div>
        <div class="relative">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>
    </div>
</div> -->
<!-- <div class="w-full flex justify-center bg-slate-100">
    <div class="w-full flex flex-row justify-between gap-3 block smm-hidden max-w-screen-2xl">
        <div class="flex flex-col  xl:w-9/12 lg:w-10/12 gap-5">
            <div class="w-full bg-[#d9d9d9] flex flex-row  items-center justify-between rounded-md">
                <div class="flex gap-2 ml-2">
                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                </div>
                <h1 class="text-xl font-bold text-center">NHL Player News</h1>
                <div class="flex gap-2 mr-2">
                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                </div>
            </div>
            <div class="flex flex-row justify-between w-full ">
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md  text-black bg-[#38b6ff] text-[#ffffff]">ALL</button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black  flex justify-center  ">LINE CHANGES</button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black  flex justify-center ">INJURIES</button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black  flex justify-center  ">MOVES</button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black  flex justify-center  ">SIGNINGS</button>
            </div> 
            <div class="flex flex-row items-center w-full  justify-center   mt-[20px] gap-3 text-slate-500  block  hidden max-w-screen-2xl" id="sub-hed">
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md l-ups text-black bg-[#38b6ff] text-[#ffffff]">
                    Lineups
                </button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black d-kings flex justify-center gap-3">
                    <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                    Draftkings
                </button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black fnl flex justify-center gap-3">
                    <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">Fanduel
                </button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black sts">
                    Stats
                </button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md text-black prp">
                    Props
                </button>
                <button class="w-36 bg-[#ebece9] text-[16px] font-bold rounded-md   text-black shp">
                    Shop</button>
                <button class="w-36 bg-green-600 text-[16px] font-bold rounded-md text-black">Create</button>
            </div> 
            <div class="flex flex-col w-full">
                <div class="flex flex-row w-full justify-between mb-3">
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white relative">
                        <div class="flex mx-10 md:m-0 mt-5   ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold"> Connor Mcdavid</h1>
                                    <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class="mx-10 md:m-0  ml-1  ">
                            <p class="text-[14px] font-bold mb-2">Stone out with lower body injury</p>
                            <p class="text-[12px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white relative">
                        <div class="flex mx-10 md:m-0  mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">John Tavares</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class="mx-10 md:m-0  ml-1">
                            <p class="text-[14px] font-bold mb-2">Tavares set to play in his third All Star game </p>
                            <p class="text-[12px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                        <div class="flex mx-10 md:m-0  mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class="mx-10 md:m-0  ml-1">
                            <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-between mb-3">
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white relative">
                        <div class="flex mx-1 md:m-0  mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Mark Stone</h1>
                                    <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class="mx-2 ml-1 md:m-0 ">
                            <p class="text-[14px] font-bold mb-2">Stone out with lower body injury</p>
                            <p class="text-[12px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                       <img class="h-64 xl:w-auto lg:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                        <div class="flex mx-10 md:m-0  mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class="mx-2 ml-1 md:m-0 ">
                            <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-between mb-3">
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                        <div class="flex mx-2 mt-5 md:m-0 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class="mx-2 ml-1 md:m-0 ">
                            <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                        <div class="flex mx-2 mt-5 md:m-0 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class="mx-2 ml-1 md:m-0 ">
                            <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                        <div class="flex mx-2 mt-5 md:m-0 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class="mx-2 ml-1 md:m-0 ">
                            <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-lg font-bold flex justify-end mr-[12px]">view more</a>
                </div>
            </div>
            <div class="flex flex-row w-full ">
               <img class="w-full h-32 border border-black" src="{{ asset('/images/menu-icon/.png') }}">
            </div>              
        </div>
           <div class="xl:w-3/12 lg:w-2/12 md:w-2/12 flex flex-col items-center  ">
                <img class="w-9/12" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <div class="flex flex-col gap-5 mt-9 ">
                    <div class="flex flex-col gap-2">
                        <h1 class="font-bold xl:ml-16 lg:ml-12 ">Features</h1>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Props and Odds</p>
                        <p class="text-sm">Check out today's top Props and Odds for <br> tonight slate</p>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Morning Skate </p>
                        <p class="text-sm">Update and happening from this morning's <br> skate</p>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Top Stacks</p>
                        <p class="text-sm">Looking at today's slate DFS top stacks for  <br>Draftkings</p>
                    </div>
                </div>
                <div class="flex flex-col gap-5 mt-9">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row items-center">
                        <img class="w-6 h-6" src="{{ asset('/images/menu-icon/injury icon.png') }}" alt="">
                        <h1 class="font-bold xl:ml-8 lg:ml-8 md:ml-1">Line Combinations</h1>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
                    </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Pittburgh Penguins</p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Toronto Maples Leafs</p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Washington Capitals </p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Montreal Canadiens</p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Washington Capitals </p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                        <div class="w-full flex flex-row justify-between">
                            <p class="font-semibold text-sm">Montreal Canadiens</p>
                            <p class="text-sm"> 2023-01-16</p>
                        </div>
                    <p class="text-sm">morning skate</p>
                </div>
                
                <div class="w-full flex flex-col items-center gap-3">
                    <a class="font-semibold text-sm" href="">View All NHL Line Combinations</a>
                    <img class="" src="{{ asset('/images/menu-icon/high_lights.png') }}" alt="">
                </div>
                </div>
            </div>
    </div>
</div> -->
<div class="w-full flex justify-center bg-slate-100">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col block smm-hidden max-w-screen-2xl">
            <div class="w-full flex justify-center gap-3 items-end block smm-hidden max-w-screen-2xl bg-[#38b6ff] px-2 h-36">
                <div class="w-full flex flex-row justify-between mx-10 justify-end">
                    <div class="flex flex-row items-center justify-between ">
                        <div class="flex flex-row items-center">
                            <div class="flex flex-row items-center gap-5">
                                <div class="text-4xl font-bold text-black">
                                   NHL Player News
                                </div>
                            </div>
                        </div>         
                    </div>
                    <div class="relative w-[18rem]  flex justify-center">
                        <img class="w-32 h-32 absolute right-1" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">
                        <img class="w-32 h-32  z-10" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">
                        <img class="w-32 h-32 absolute left-1" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">
                    </div>
                </div>
            </div>  
            <div class="flex flex-row justify-evenly items-center w-9/12 mt-[10px]  block smm-hidden max-w-screen-2xl" id="sub-hed">
                <a href=" " class="  text-[24px] text-black font-bold rounded-md l-ups apn-bckgrnd active ">
                    All
                </a>
                <a href="" class="  text-[24px] font-bold rounded-md text-black apn-bckgrnd">
                    Line Changes
                </a>
                <a href="" class="  text-[24px] font-bold rounded-md text-black apn-bckgrnd">
                    Injury
                </a>
                <a href="" class=" text-[24px] font-bold rounded-md text-black apn-bckgrnd">
                    Moves
                </a>
                <a href="" class=" text-[24px] font-bold rounded-md text-black apn-bckgrnd">
                    Signings
                </a>
            </div>
            <div class="w-full flex justify-center">
              <img class="w-8/12 my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <div class="flex flex-col w-full gap-5 mt-3">
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="w-full flex justify-center my-5">
              <a class="font-semibold text-sm text-[#38b6ff]" href="">View more</a>
            </div>          
        </div>
    </div>
<!-- End of Desktop -->
<!-- Mobile Design -->
<div class="w-full flex flex-col items-center ">
    <div class="w-full  smm-block hidden">
        <div class="flex flex-col mx-1">
            <div class="flex flex-row justify-between items-center mb-1">
                <div class="flex flex-row items-center gap-1.5">
                    <img class="w-[3rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                    <div class="flex">
                        <h1 class="sm:text-4xl text-3xl font-extrabold">projected</h1>
                        <h1 class="sm:text-4xl text-3xl font-extrabold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>  
            <div class="flex flex-row gap-2 mx-2 my-5">
                <button class="text-xl font-bold bg-[#38b6ff] text-black w-full h-12 rounded-md">NHL</button>
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NFL</button>
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NBA</button>
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">MLB</button>
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">SOC</button>
            </div>
            <div class="flex flex-row mx-2 gap-3 mb-3">
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
                <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">LINE COMBOS</button>
            </div>               
        </div>
    </div>
    <div class="relative w-full my-3 smm-block hidden">
        <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search players"> 
        <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
    </div>
</div>
<div class="flex flex-col gap-1 hidden smm-block">
    <img class="w-full my-1.5" src="{{ asset('/images/menu-icon/adds_header.png') }}" >  
    <div id="" class=" my-3 mx-1  ">
        <div class="w-full h-20  flex items-center justify-between border-slate-300 border-b-2 my-4"> 
            <div class="flex gap-1">
              <img class="w-16 h-16 " src="{{ asset('/images/menu-icon/.png') }}" alt=""> 
              <img class="w-16 h-16" src="{{ asset('/images/menu-icon/.png') }}" alt=""> 
            </div>               
            <h1 class="text-xl font-bold">NHL Players News</h1>
            <div class="flex gap-1">
              <img class="w-16 h-16 " src="{{ asset('/images/menu-icon/.png') }}" alt=""> 
              <img class="w-16 h-16 " src="{{ asset('/images/menu-icon/.png') }}" alt=""> 
            </div>
        </div>       
        <div class="w-full flex flex-col gap-3 border-2 h-[91rem] overflow-auto">
            <div class="flex flex-col items-center gap-3">          
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>                          
            </div>                   
            <div class="flex flex-col items-center gap-3">          
            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>                           
            </div>
            <div class="flex flex-col items-center gap-3">          
            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>                          
            </div>                   
            <div class="flex flex-col items-center gap-3">          
            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5 gap-3">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row items-center gap-1">                                                   
                            <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                            <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                        </div>                                              
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="sm:w-36 sm:h-36 w-32 w-32 " alt="">
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <div class="">
                            <h1 class="sm:text-xl text-lg font-bold">Jordan Kyrou</h1>
                            <p class="sm:text-[12px] text-[10px] font-bold">St.Louis Blues - C</p>
                        </div>
                        <h1 class="sm:text-xl text-lg sm:font-extrabold font-bold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                        <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <p class="sm:font-extrabold font-bold">Jim Thomas</p>
                                <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>                          
            </div>        
        </div>                  
    </div>
</div>





@endsection