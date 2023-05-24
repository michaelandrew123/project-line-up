@extends('layouts.master')

@section('content')

 
   <div class="flex justify-center bg-slate-100">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5  block smm-hidden max-w-screen-2xl">
            <div class="w-full flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl text-2xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl text-2xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-5  py-2 rounded-md">NHL</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NFL</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NBA</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">MLB</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">EPL</button>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full gap-3">
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</button>
            </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center bg-slate-100">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-row justify-between xl:gap-3 gap-1 block smm-hidden max-w-screen-2xl">
            <div class="flex flex-col  xl:w-9/12 lg:w-10/12 gap-5">
                <div class="w-full bg-[#d9d9d9] flex flex-row  items-center rounded-md">
                    <img class="w-[4rem] rounded-lg justify-self-start ml-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <h1 class="text-center text-xl font-bold w-full">Toronto Maples Leafs Team News</h1>
                </div>
                <div class="flex flex-row justify-between w-full">
                    <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 md:px-6 py-2 rounded-md">ALL</button>
                    <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-6 py-2 rounded-md">LINE CHANGES</button>
                    <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-6 py-2 rounded-md">INJURIES</button>
                    <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-6 py-2 rounded-md">MOVES</button>
                    <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-6 py-2 rounded-md">SIGNINGS</button>
                </div> 
                <div class="flex flex-col w-full">
                    <div class="flex flex-row w-full justify-between mb-3">
                        <div class="flex flex-col gap-3  w-[32%] h-[21rem]   rounded-xl bg-white relative">
                            <div class="flex mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <div>
                                        <h1 class="xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">Auston Mathews</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                    </div>   
                                </div>
                            </div>
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                            <div class="flex  mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div>
                                        <h1 class=" xl:text-xl lg:text-md xl:font-extrabold lg:font-bold font-semibold">John Tavores</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                    </div>   
                                </div>
                            </div>
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
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
                            <div class="flex  mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                        <div class="flex flex-col gap-3 xl:w-[32%] lg:w-[32%] md:w-[44%] h-[21rem]   rounded-xl bg-white relative">
                            <div class="flex  mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                        <img class="xl:w-9/12 lg:w-9/12 md:w-9/12 " src="{{ asset('/images/menu-icon/adds3.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 xl:w-[32%] lg:w-[32%] md:w-[44%] h-[21rem]   rounded-xl bg-white relative">
                            <div class="flex mx-2  mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                            <div class="flex  mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                            <div class="flex  mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
                            <div class="flex mx-2 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-2">
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
                            <div class=" mx-2 ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[11px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
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
    </div>
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






@endsection