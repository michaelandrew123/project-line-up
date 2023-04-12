@extends('layouts.master')

@section('content')

    <div class="flex justify-center bg-slate-100">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5  block smm-hidden">
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
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-row justify-between xl:gap-3 gap-1 block smm-hidden">
            <div class="flex flex-col  xl:w-9/12 lg:w-10/12 gap-5">
                <div class=" w-full bg-[#d9d9d9] flex flex-row items-center rounded-md">
                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-20 ml-6" src="{{ asset('/images/menu-icon/.png') }}">
                    <h1 class="text-center text-xl font-bold w-full">Auston Mathews News</h1>
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                        <div class="flex justify-center items-center">
                        <img class="w-9/12 " src="{{ asset('/images/menu-icon/adds3.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
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
                            <div class=" ml-1">
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
                        <h1 class="font-bold ml-16">Features</h1>
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
 
<div class="flex flex-col gap-1 hidden smm-block ">
    <img class="w-full my-1.5 mx-1" src="{{ asset('/images/menu-icon/adds_header.png') }}" >  
    <div id="" class=" my-3 mx-1 hidden smm-block ">
        <div class="w-full h-20  flex items-center gap-[10rem] border-slate-300 border-b-2 my-4">       
            <img class="w-16 h-16 mx-2" src="{{ asset('/images/menu-icon/.png') }}" alt="">          
            <h1 class="text-xl font-bold">Jordan Kyrou News</h1>
        </div>       
        <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-3]"
                data-te-carousel-indicators>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions1"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions1"
                    data-te-slide-to="1"
                    class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions1"
                    data-te-slide-to="2"
                    class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 3"></button>
            </div>     
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                    <div
                    class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                    data-te-carousel-active
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                        <div class="flex flex-col items-center gap-3">          
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                        <div class="flex flex-col items-center gap-3">          
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                        <div class="flex flex-col items-center gap-3">          
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row items-center gap-1">                                                   
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                    </div>                                              
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                </div>
                                <div class="flex flex-col gap-3.5">
                                    <div class="">
                                        <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                        <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                    </div>
                                    <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                    <div class="flex flex-row items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <p class="font-extrabold">Jim Thomas</p>
                                            <p class="text-[10px] font-bold">11/30/2022 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions1"
            data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                >Previous</span
            >
            </button>
            <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions1"
            data-te-slide="next">
            <span class="inline-block h-8 w-8">
                
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                >Next</span
            >
            </button>
        </div>
        <div class="mt-8 w-full flex justify-center">
            <img class="h-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
        </div>                   
    </div>
</div>

@endsection