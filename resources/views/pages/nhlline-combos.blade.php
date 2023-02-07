@extends('layouts.master')

@section('content')

 <!-- nhl/Line combos -->
<div class="w-full flex justify-center">
    <div class="w-11/12 flex flex-col border-black m-4 gap-5">
        <div class="flex flex-row justify-between items-center">
            <div class="flex gap-3">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <div class="flex">
                    <h1 class="xl:text-4xl lg:text-3xl font-extrabold">projected</h1>
                    <h1 class="xl:text-4xl lg:text-3xl font-bold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center xl:gap-5 lg:gap-3">
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 py-2 rounded-md">NHL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NFL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NBA</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">MLB</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">EPL</button>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-between w-full">
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">STARTING GOALIES</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 py-2 rounded-md">LINE COMBOS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">PROJECTIONS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NEWS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">PROPS & ODDS</button>
        </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
    </div>
</div>
 <div class="w-full flex justify-end block smm-hidden gap-7 ">
       <div class="w-7/12">
            <img class="w-full" src="{{ asset('/images/menu-icon/adds_header.png') }}">
          <div class="flex flex-row items-center justify-between m-3">
              <div class="flex flex-row items-center gap-7">
                   <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <div>
                        <p class="text-2xl font-extrabold">Toronto Maple Leafs</p>
                        <p class="text-2xl font-extrabold">Line Combinations</p>
                    </div>
              </div>
              <div class="flex gap-2">
                    <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                    <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
              </div>            
          </div>
        <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class=" mx-3 mt-2">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex flex-row gap-2 items-center">
                        <img class="w-11 h-11" src="{{ asset('/images/menu-icon/twitter icon.png') }}" alt="">
                        <div>
                            <p class="text-[13px] font-semibold">David Alter</p>
                            <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="relative">
                        <button id="" class="cursor-pointer flex flex-row justify-center items-center bg-slate-300 h-10 w-[11.5rem] rounded-full ">
                            <p class="text-[13px]">TORONTO MAPLE LEAFS</p>
                            <img src="{{ asset('/images/starting-goalies/arrow_blue.png') }}" class="w-4 h-4 rounded-full ml-2 fill-cyan-400 arrow">
                        </button> 
                        <!-- <ul id="" class="absolute bg-white w-[11rem] bg-slate-300 py-2 hidden top-[30px] left-[4px] z-20">
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-01</li>
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-02</li>
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-03</li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <!-- <ul class="flex flex-row items-center mx-px h-9 w-full justify-evenly mt-3 z-10" id="sub-hed">
                <li class=" h-full flex items-center justify-center l-ups"><button class="w-full font-bold text-sm text-slate-400 bg-black">LINEUPS</button></li>
                <li class="list-none w-full h-full  mr-3 ml-2 flex items-center justify-center d-kings"><button class=" font-bold text-sm text-slate-400">DRAFTKINGS</button></li>  
                <li class="list-none w-full h-full  flex items-center justify-center fnl"><button class="font-bold text-sm text-slate-400">FANDUEL</button></li>
                <li class="list-none w-full h-full flex items-center justify-center sts"><button class=" font-bold text-sm text-slate-400">STATS</button></li>
                <li class="list-none w-full h-full  flex items-center justify-center nws" ><button class=" font-bold text-sm text-slate-400">NEWS</button></li>
            </ul> -->
            <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md bg-[#1d9bf0] l-ups">LINEUPS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md d-kings">DRAFTKINGS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md fnl">FANDUEL</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md sts">STATS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md nws">NEWS</button>
            </div>
            <div id="shirt-footer"  class="flex flex-col">
            <div class="flex flex-col w-full">
                <h1 class="text-center font-bold text-md mt-1 mb-6">FORWARDS</h1>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden drftking ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden fduel ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden  stat ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="flex flex-row justify-between mt-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between mt-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly hidden ">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">TOI/Gm</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold">Goals</p>
                                <p class="text-sm font-semibold">Assists</p>
                                <p class="text-sm font-semibold">Shots/Gm</p>
                                <p class="text-sm font-semibold">CF %</p>
                                <p class="text-sm font-semibold">PP TOI/Gm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="bg-slate-300 h-[2px] w-full my-24"></div>
            <div class="flex flex-col w-full">
                <h1 class="text-center font-bold text-md mt-1 mb-6">DEFENCE</h1>
                <div class="flex flex-row justify-center gap-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-3 gap-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-3 gap-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-300 h-[2px] w-full my-24"></div>
            <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
            <div class="flex flex-col w-full">
                <h1 class="text-center font-bold text-md mt-1 mb-6">GOALIES</h1>
                <div class="flex flex-row justify-center gap-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center mt-3 gap-3">
                    <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                    <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                        <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden ">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-bold text-md mt-1 mb-6">PLAYER 1</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden dfking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">
                    <h1 class="text-center font-bold text-md mt-1 mb-6">PLAYER 2</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden dfking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/MITCH-MARNER-16.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center border border-black rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/ALEXANDER-KERFOOT-15.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                        </div>
                        <div class="flex flex-col items-center border border-black  rounded-md gap-2 w-[32%]">
                            <p class="text-center text-[11px] font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/AUSTON-MATTHEWS-34.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between p-2 my-0.5 hidden">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-10 mt-10">
                <h1 class="text-lg font-bold">Power play</h1>
                <p class="text-lg">
                    You might hear these lines reffered to as special teams lines,
                    but power play lines are important for success in the NHL.
                    When you have a power play you are up man, or possibly 
                    even two. Being able to capitalize on the power play is recipe
                    for sucess. The power play lines are going to feature the more
                    talented offensive players on the  team. Now when they 
                    struggle, a coach will tend to change things up. He will often
                    ride a hot hand here as well if a player is on hot streak and 
                    the coach wants to use him on the power play where he was 
                    initially not on the line anymore. Injuries and moves will occur
                    as well, so that is why you fantasy players should be taking 
                    advantage of the players who move within the power play lines.
                    Check out the list of top power play team rankings here.  
                </p>
            </div>
       </div>
       <div class="w-3/12 mr-7">
            <div class=" ">
                <div class="flex flex-row items-center justify-end bg-[#39b6ff] w-full h-9 rounded-t-md gap-2">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/') }}" >
                    <p class="text-md font-bold mr-3">MetaBet</p>
                </div>
                <div class="flex flex-rowb gap-3 p-3 border border-slate-200">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <h1 class="text-lg font-semibold">Toronto Maple Leafs</h1>
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-sm font-semibold">To win Stanley Cup</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1050</p>
                    </div> 
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-sm font-semibold">To win Eastern <br> Conference</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+550</p>
                    </div> 
                </div>
                <div class="flex flex-col border border-slate-200">
                    <div class="flex flex-row items-center justify-between gap-3 p-3 ">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="text-sm font-semibold">To win Atlantic</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1600</p>
                        </div> 
                    </div>
                    <div class="flex justify-end">
                        <a class="text-[#39b6ff] font-semibold mr-1" href="#">See All Lines</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
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
                       <h1 class="font-bold ml-8">Injury Report</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL injuries</a>
               </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row items-center">
                       <img class="w-6 h-6" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                       <h1 class="font-bold ml-8">Team News</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL News</a>
               </div>
            </div>
            <div class="flex flex-col gap-6 items-center mt-6">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>
            
       </div>
    </div>
    
    
    <!-- end -->



@endsection