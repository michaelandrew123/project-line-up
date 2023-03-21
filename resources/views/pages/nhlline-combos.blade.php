@extends('layouts.master')

@section('content')

 <!-- Desktop nhl/Line combos -->
<div class="w-full flex justify-center block smm-hidden">
    <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5">
        <div class="flex flex-row justify-between items-center">
            <div class="flex gap-3">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <div class="flex">
                    <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                    <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center xl:gap-5 gap-3">
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-8  py-2 rounded-md">NHL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">NFL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">NBA</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">MLB</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">EPL</button>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-between w-full gap-3">
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</button>
        </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
    </div>
</div>
<div class="w-full flex flex-row xl:justify-end lg:justify-center block smm-hidden gap-7 ">
    <div class="xl:w-7/12 lg:w-8/12 md:w-10/12">
        <!-- <img class="w-full" src="{{ asset('/images/menu-icon/adds_header.png') }}"> -->
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
        <div class=" mx-3">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row gap-2 items-center">                       
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
            <div id="shirt-footer"  class="flex flex-col gap-2 my-3">
                <div class="flex flex-col gap-2 w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem] " src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem] " src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
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
                <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>                    
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
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
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-5"></div>
                 <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PRESS BOX</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center ">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-5 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div> 
            </div>
            
            <div class="flex flex-col gap-10 mt-10 hidden">
                <h1 class="text-lg font-bold text-center">Power play</h1>
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
       <div class="w-3/12 xl:mr-7 lg:mr-6 md:mr-2">
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
<!--Desktop end -->
<!-- Mobile Design -->
<div class="hidden smm-block">
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
            <button class="text-xl font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
        </div>
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center  ">
        <div class="w-11/12">   
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}" >       
            <div class="flex flex-row items-center justify-center justify-between w-full">
                <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div class="flex sm:flex-row flex-col gap-2">
                    <p class="text-2xl font-bold">Toronto Maple Leafs</p>
                    <p class="text-2xl font-bold">Line Combinations</p>
                </div>
            </div>         
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class="mx-3">             
                <div class="flex flex-row gap-2 items-center w-full justify-between">                       
                    <div>
                        <p class="text-[13px] font-semibold">David Alter</p>
                        <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                        <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
                    </div> 
                </div>             
            </div>
                <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm bg-[#1d9bf0] l-ups">LINEUPS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm d-kings">DRAFTKINGS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm fnl">FANDUEL</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm sts">STATS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm nws">NEWS</button>
                </div>
                <div id="shirt-footer"  class="flex flex-col gap-2 shirt-players">
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center   rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center   rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
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
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>      
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                    </div>
                    <div class="flex flex-col w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-1.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
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
                        </div>
                    </div>
                </div>
                <div id="carsl" class=" my-3">
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
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
        </div>  
    </div>
</div>
<!-- Mobile end -->
@endsection