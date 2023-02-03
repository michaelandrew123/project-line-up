@extends('layouts.master')

@section('content')
    <!-- New update design -->
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
            <ul class="flex flex-row items-center mx-px bg-black h-9 w-full justify-evenly mt-3 z-10" id="fther">
                <li class="list-none w-full h-full flex items-center justify-center" id="" ><a href="#" class=" font-bold text-sm text-white lu">LINEUPS</a></li>
                <li class="list-none w-full h-full  mr-3 ml-2 flex items-center justify-center"><a href="#" class=" text-white font-bold text-sm df">DRAFTKINGS</a></li>  
                <li class="list-none w-full h-full  flex items-center justify-center"><a href="#" class=" text-white font-bold text-sm fl">FANDUEL</a></li>
                <li class="list-none w-full h-full flex items-center justify-center"><a href="#" class=" text-white font-bold text-sm ss">STATS</a></li>
                <li class="list-none w-full h-full  flex items-center justify-center" ><a href="#" class=" text-white font-bold text-sm ns">NEWS</a></li>
            </ul>
            <div id="prent" class="flex flex-col w-full">
                <h1 class="text-center font-bold text-md mt-1 mb-6">FORWARDS</h1>
                <div class="flex flex-row justify-between">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 fduel hidden">
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">8500</p>
                            </div>
                            <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                <p class="xl:text-md lg:text-sm  font-semibold">12.5</p>
                            </div>   
                        </div>
                        <div class="w-full flex justify-evenly  stat">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex justify-evenly ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex flex-row justify-between p-2 my-0.5 ">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex justify-evenly hidden">
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
                        <div class="w-full flex justify-evenly hidden">
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
       <div class="w-3/12 border border-black mr-7">
        <div class="border border-black ">
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
    </div>
    
    
    <!-- end -->
    <!-- old design -->
    <!-- <div class="flex flex-col lg:block md:block sm:hidden smm-hidden ">
        <div class="text-white bg-[#202e5b] flex justify-evenly py-4">
            <div class="w-1/7 hidden">
                <img src="/admin.png" />
            </div>
            <div class="flex flex-col gap-y-3 py-2 md:w-1/3  smm-w-11-12">
                <div>
                    <h1 class="font-black text-3xl">Toronto Maple Leafs</h1>
                    <p>3rd In Atlantic, Division, 4th in Eastern Conference</p>
                </div>
                <hr>
                <p>Playoff Odds: 100.00% | Stanley Cup Odds: 0.00%</p>
            </div>
            <div class="text-center flex flex-col gap-y-3 px-4 py-2 bg-slate-800 w-1/3 hidden">
                <p>2022-23 Season</p>
                <div class="flex flex-row justify-center gap-x-3 ">
                    <div class="flex flex-col gap-y-3">
                        <h1>54-21-7</h1>
                        <hr />
                        <p>RECORD</p>
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h1>54-21-7</h1>
                        <hr />
                        <p>RECORD</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded tex hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">SIGN UP FOR FREE</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="md:w-full  smm-flex smm-justify-center text-center m-auto text-black lg:block md:hidden sm:hidden smm-hidden">
        <ul class="list-none flex gap-2  justify-center  ">
            <img class="w-7 h-6" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
            <h1 class="text-base font-bold">Toronto Maple Leafs</h1>
            <li><a class="text-sm font-bold">News</a></li>
            <li><a class="text-sm font-bold">Schedule</a></li>
            <li><a class="text-sm font-bold">Odds</a></li>
        </ul>
    </div> -->
    <!-- <div class=" text-center flex flex-row items-center justify-center  m-auto md:block sm:hidden">
        <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto"/>
        {{--ads--}}
        {{----}}
    </div> -->
    <div class="hidden">
        <div class="flex justify-center lg:block md:block sm:hidden smm-hidden ">
            <div class="md:inline-flex gap-4">
                <div class="md:w-3/12 sm:w-11/12 smm-w-11-12 flex flex-row items-center justify-center smm-hidden  sm:m-auto">
                    <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                    {{--ads--}}
                    {{----}}
                </div>
                <div class="md:w-4/12 sm:w-11/12 smm-w-11-12 md:m-0 sm:m-auto smm-m-auto">
                    <div class="divide-y divide-slate-200 my-4">
                        <div class="flex flex-col items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <div class="flex items-center ">
                                <h1 class="font-bold">LINE COMBINATIONS</h1> &nbsp;
                            </div>
                        </div>
                        <div class="flex flex-row items-center p-4 rounded-b-lg bg-[#eab308] justify-center ">
                            <div class="flex flex-row gap-1 items-center justify-center ">
                                <div class="flex flex-row gap-1 items-center justify-center">
                                    <h1 class="font-bold text-white text-center">MORNING SKATE</h1>
                                    <p class="font-bold text-white text-center">(Updated July 25, 6:18am) </p>
                                </div>
                                <div>
                                    <p class="text-[#99D9D9]">Source:</p>
                                </div>
                            </div>
                            <div class="hidden">
                                LOGO
                            </div>
                            <div class="flex flex-row gap-1 items-center hidden">
                                <div>
                                    <input type="radio" />
                                </div>
                                <div>
                                    Starting Goalie
                                </div>
                            </div>
                        </div>                   
                        <!-- Start First row -->
                            <div class="pb-2 flex lg:flex-row md:flex-row  justify-center smm-hidden">
                            <div class=" mt-4">
                                <div class="flex flex-row justify-center items-center font-bold">
                                    <p>FORWARD</p>
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center invisible">
                                    <p>Line 1</p>
                                </div>
                            </div>
                            <div class=" mt-4">
                                <div class="text-center font-bold">
                                    <p>DEFENCE</p>
                                </div>
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center invisible">
                                    <p>Pairing 1</p>
                                </div>
                            </div>
                        </div> 
                        <!--  End First row -->  
                        <!-- Start Second row -->
                        <div class="pb-2 flex flex-row gap-4 justify-center">
                            <div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-center items-center invisible font-bold">
                                    <p>Line 2</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center invisible font-bold">
                                    <p>Pairing 2</p>
                                </div>
                            </div>
                        </div> <!-- End Second row -->
                        <!-- Start Third row -->
                        <div class="pb-2 flex flex-row gap-4 justify-center" >
                            <div >
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center invisible font-bold">
                                    <p>Line 3</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center invisible">
                                    <p>Pairing 3</p>
                                </div>
                            </div>
                        </div> <!-- End Third row -->
                        <!-- Start Fourth row -->
                        <div class="pb-2 flex flex-row gap-4 justify-center">
                            <div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center invisible">
                                    <p>Line 4</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center invisible">
                                    <p>Goalies</p>
                                </div>
                            </div>
                        </div>  <!-- End Fourth row -->
                    </div>
                    <div class=" flex flex-row items-center justify-center my-4">
                        <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                        {{--ads--}}
                        {{----}}
                    </div>
                    <div > <!-- Start POWER PLAY 1 -->
                        <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <h1 class="font-bold">POWER PLAY 1</h1> &nbsp;
                        </div>
                        <!-- Start First row -->
                        <div class="flex flex-row gap-4 justify-center">
                            <div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center font-bold">
                                    <p>Line 1</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center font-bold">
                                    <p>Pairing 1</p>
                                </div>
                            </div>
                        </div>  <!-- End First row -->
                    </div><!-- End POWER PLAY 1 -->
                    <div> <!-- Start POWER PLAY 2 -->
                        <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <h1 class="font-bold">POWER PLAY 2</h1> &nbsp;
                        </div>
                        <!-- Start First row -->
                        <div class="flex flex-row gap-4 justify-center">
                            <div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-center items-center font-bold">
                                    <p>Line 1</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center font-bold">
                                    <p>Pairing 1</p>
                                </div>
                            </div>
                        </div>  <!-- End First row -->
                    </div><!-- End POWER PLAY 2 -->
                    <div class=" flex flex-row items-center justify-center   my-4">
                        <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                        {{--ads--}}
                        {{----}}
                    </div>
                    <div> <!-- Start PRESS BOX -->
                        <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <h1 class="font-bold">PRESS BOX</h1> &nbsp;
                        </div>
                        <!-- Start First row -->
                        <div class="flex flex-row gap-4 justify-center" >
                            <div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center items-center font-bold">
                                    <p>Line 1</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="grid grid-cols-2 gap-4 ">
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                    <div class="p-4 smm-p-0">
                                        <h3 class="capitalize">Mctavish</h3>
                                        <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-24"/>
                                    </div>
                                </div>
                                <div class="text-center font-bold">
                                    <p>Pairing 1</p>
                                </div>
                            </div>
                        </div>  <!-- End First row -->
                    </div><!-- End PRESS BOX -->
                </div>
                <div class="md:w-3/12 sm:w-11/12 smm-w-11-12 md:m-0 sm:m-auto smm-m-auto">
                    <div class="my-4">
                        <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <h1 class="font-bold">INJURY REPORT</h1> &nbsp;
                        </div>
                        <div class="flex flex-col divide-y divide-slate-200 gap-y-3 mt-2">
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                            <h1 class="font-bold">TRANSACTIONS</h1> &nbsp;
                        </div>
                        <div class="flex flex-col divide-y divide-slate-200 gap-y-3 mt-2">
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row space-x-4">
                                <img class="h-14" src="https://s3-us-west-2.amazonaws.com/static.fantasydata.com/headshots/nhl/low-res/30002539.png  " />
                                <div class="flex flex-col">
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Expected Return > Mon Sep 25, 2022</p>
                                        <p><span  class="font-bold text-sky-400">Jake Muzzin</span> - <span class="font-bold text-slate-400">DAY-TO-DAY <i>Back</i></span></p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-slate-300">Thu Sep 22, 2022</p>
                                        <p><span class="font-bold text-sky-400">Jake Muzzin </span> <span class="text-slate-400">| Muzzin will not participate in the first week of camp due to back discomfort, reports Sport </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-center items-center bg-slate-700 py-4 rounded-b-lg">
                                <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded tex hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">
                                    Buttton
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-row items-center justify-center ">
                        <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end  -->
 
  
    <!-- Mobile Design -->
    <div class="xl:hidden lg:hidden md:hidden sm:block smm-block">
        <div class="flex flex-col justify-center w-full">
            <div class="list-none flex flex-col mx-3 gap-0">
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <div class="flex flex-col">
                        <p class="text-lg font-bold">Toronto Maple Leafs</p>
                        <p class="text-lg font-bold">Line Combinations</p>
                        <div class="flex flex-row gap-2">
                            <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-4 h-4  rounded-full ml-2">
                            <h1 class="text-[11px] font-bold">MORNING SKATE</h1>              
                        </div>
                    </div>
                </div>     
                <!-- <div class="flex flex-row gap-4">
                    <li><a class="text-sm font-bold">News</a></li>
                    <li><a class="text-sm font-bold">Schedule</a></li>
                    <li><a class="text-sm font-bold">Odds</a></li>
                </div>  -->
            </div>
            <hr />
            <div class="md:block sm:block smm-block hidden mx-3  mt-2">
                <div class="flex flex-row items-center justify-between ">
                    <div class="flex flex-row gap-2 items-center">
                        <img class="w-11 h-11" src="{{ asset('/images/menu-icon/twitter icon.png') }}" alt="">
                        <div>
                            <p class="text-[11px]">David Alter</p>
                            <p class="text-[11px]">09/22/2022 | 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="relative">
                        <button id="tml_btn" class="cursor-pointer flex flex-row justify-center items-center bg-slate-300 h-10 w-[11.5rem] rounded-full ">
                            <p class="text-[13px]">TORONTO MAPLE LEAFS</p>
                            <img src="{{ asset('/images/starting-goalies/arrow_blue.png') }}" class="w-4 h-4 rounded-full ml-2 fill-cyan-400 arrow">
                        </button> 
                        <ul id="drop_down" class="absolute bg-white w-[11rem] bg-slate-300 py-2 hidden top-[30px] left-[4px] z-20">
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-01</li>
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-02</li>
                            <li class="hover:bg-slate-100 active:bg-slate-200 p-2">TEAM-03</li>
                        </ul>
                    </div>
                    <!-- <h1 class="text-[10px] font-extrabold border border-gray px-7 p-3 ml-2 bg-slate-300 rounded-full">MORNING SKATE</h1> -->
                </div>
            </div>
        </div>
        <ul class="flex flex-row justify-center items-center mx-px bg-black h-9 w-full justify-evenly mt-3 z-10" id="mobile-2nd-mnav">
            <li class="list-none w-full h-full text-center  " id="nav-active" ><a href="#" class=" font-bold text-[11px] text-white">LINEUPS</a></li>
            <li class="list-none w-full h-full text-center mr-3 ml-2"><a href="#" class=" text-white font-bold text-[11px] ">DRAFTKINGS</a></li>  
            <li class="list-none w-full h-full text-center "><a href="#" class=" text-white font-bold text-[11px]  ">FANDUEL</a></li>
            <li class="list-none w-full h-full text-center "><a href="#" class=" text-white font-bold text-[11px] ">STATS</a></li>
            <li class="list-none w-full h-full text-center " ><a href="#" class=" text-white font-bold text-[11px]  ">NEWS</a></li>
        </ul>
       <hr/>
       <div id="img" class="hidden flex justify-center">
           <div class="flex flex-col justify-center items-center mt-2 mx-1 " id="nav-body">
                <h1 class="text-center text-sm font-bold">FORWARDS</h1>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-between mt-3 text-center h-[15px]">
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">GOALS:13</p>
                                <p class="text-[11px] text-sm">ASSISTS:16</p>
                            </div>
                            <div class=" flex flex-col ">
                                <p class="text-[11px] text-sm">TOI:16.1</p>
                                <p class="text-[11px] text-sm">SHOTS:85</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
       <div id="scrollbar" class="w-full flex flex-col justify-center hidden my-9 gap-8">
           <div class="flex flex-col items-center gap-8">
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative ">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">PROJECTED</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center gap-8">
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative ">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">PROJECTED</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center gap-8">
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative ">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                    <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                </div>
                            </div>
                            <div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                            </div>
                        </div>                     
                    </div>
                    <div class="m-2 gap-1 mb-5">
                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="rectangle">
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <div id="ldf" class="">  
            <div class="flex flex-col justify-center items-center mt-2 mx-1 " id="nav-body">
                    <h1 class="text-center text-sm font-bold">FORWARDS</h1>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            <img class="w-5 h-5 absolute right-1 bottom-1.5 " src="{{ asset('/images/menu-icon/cold icon.png') }}"alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/gtd icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/hot icon.png') }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            <img class="w-6 h-6 ml-1 flex absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <img class="w-6 h-6 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1.5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <img class="w-6 h-6 ml-1 absolute right-1 bottom-1.5 " src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class=" flex flex-row items-center justify-center my-4">
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                {{--ads--}}
                <div class=" flex w-3/5 h-48 justify-center items-center">
                   <img class="w-[14rem]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div>
                {{----}}
            </section> 
            <div class="bg-slate-300 w-12/12 h-px mx-1"></div> 
            <section class="flex flex-col items-center mt-5 mb-5">
            <h1 class="text-center text-sm font-bold">DEFENCE</h1>
                    <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MATTHEWS</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                    <div class="flex flex-row forward-icon-draftking hidden">
                                        <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-md text-center">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                        <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MARNER</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                    <div class=" flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MATTHEWS</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                    <div class="flex flex-row forward-icon-draftking hidden">
                                        <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-md">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                        <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MARNER</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                    <div class=" flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                <div class="flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section> 
            <div>
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto">
                <div class="  w-10/12 m-auto h-20 flex justify-center items-center  mt-5 mb-5">
                   <img class="w-[32rem]" src="{{ asset('/images/menu-icon/adds_header.png') }}">
                </div>
            </div> 
            <hr />
            <section class="flex flex-col items-center mt-5 mb-5 mx-1">
                <h1 class="text-center text-sm font-bold">POWERPLAY 1</h1>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                <div class="flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                   </div>                
            </section>
            <div class=" flex flex-row items-center justify-center my-4">
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                {{--ads--}}
                <div class=" flex w-3/5 h-48 justify-center items-center">
                   <img class="w-[14rem]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div>
                {{----}}
            </div>
            <hr />
            <section class="flex flex-col items-center mt-5 mb-5">
                <h1 class="text-center text-sm font-bold">POWERPLAY 2</h1>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                <div class="flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl relative ">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                            <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                                <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                                </div>
                            </div>
                        </div>
                 </div>
            </section>        
            <div>
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto">
            </div>
            <hr />
            <section class="flex flex-col items-center mt-5 mb-5">
                <h1 class="text-center text-sm font-bold">GOALIES</h1>
                        <div class="flex flex-row justify-center gap-1 mt-1 w-2/3">
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MATTHEWS</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                                    <div class="flex flex-row forward-icon-draftking hidden">
                                        <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-md text-center">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                        <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-100 p-2 rounded-xl relative ">
                                <p class="text-center">MARNER</p>
                                <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                                <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                                    <div class=" flex flex-row forward-icon-draftking hidden">
                                    <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                    <div class="flex flex-row forward-icon-fanduel hidden">
                                    <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-md">$8500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section> 
            <div class="  w-10/12 m-auto h-20 flex justify-center items-center  mt-5 mb-5">
               <img class="w-[32rem]" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <hr />
            <div class="flex flex-col items-center mt-5 mb-5">
              <h1 class="text-center text-sm font-bold">PRESSBOX</h1>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1 mt-1 justify-center ">
                    <div class="bg-slate-100 p-2 rounded-xl text-center relative ">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 text-center h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1.5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md text-center">$8500</p>
                            </div>
                            <div class="flex justify-end">
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1" src="{{ asset('/images/menu-icon/gtd icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row items-center justify-center mt-3 h-[15px]">
                            <div class="flex flex-row forward-icon-draftking hidden">
                                <img class="w-7 h-7 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                                <img class="w-6 h-6 absolute left-0 bottom-1 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/gtd icon.png') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl relative ">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-32 mx-px" alt="">
                        <div class="flex flex-row justify-center items-center  mt-3 h-[15px]">
                            <div class=" flex flex-row forward-icon-draftking hidden">
                            <img class="w-7 h-7 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <div class="flex flex-row forward-icon-fanduel hidden">
                            <img class="w-6 h-6 absolute left-0 bottom-1" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-md">$8500</p>
                            </div>
                            <img class="w-5 h-5 ml-1 absolute right-1 bottom-1.5" src="{{ asset('/images/menu-icon/gtd icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center relative">
                <div class="flex flex-row justify-evenly  list-none w-[71%] bg-slate-200 p-5 border rounded-3xl">
                    <li class=" flex flex-col items-center text-center mt-2">
                        <img class="w-8 h-8" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                        <p class="text-[10px] "> Game Time <br> Decision</p>
                    </li>
                    <li class=" flex flex-col items-center text-center mt-2">
                        <img class="w-8 h-8" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        <p class="text-[10px] "> Injured </p> 
                    </li>
                    <li class=" flex flex-col items-center text-center mt-2">
                        <img class="w-8 h-8" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                        <p class="text-[10px] "> Hot Streak </p>
                    </li>
                    <li class=" flex flex-col items-center text-center mt-2">
                        <img class="w-8 h-8" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                        <p class="text-[10px] "> Cold player </p> 
                    </li>
                    <li class=" flex flex-col items-center text-center mt-2">
                      <img class="w-8 h-8" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                      <p class="text-[10px] "> Value Player </p>
                    </li>
                    <li class=" flex flex-col items-center text-center mt-2">
                       <img class="w-8 h-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                       <p class="text-[10px] "> Top slack </p>
                    </li>                             
                </div>
                <div class="flex flex-row absolute bottom-0 gap-3 hidden">
                    <p class="text-[10px] font-extrabold "> Game Time <br> Decision</p>
                    <p class="text-[10px] font-extrabold"> Injured </p>
                    <p class="text-[10px] font-extrabold"> Hot Streak </p> 
                    <p class="text-[10px] font-extrabold"> Cold player </p>
                    <p class="text-[10px] font-extrabold"> Value Player </p>
                    <p class="text-[10px] font-extrabold"> Top slack </p>
                </div>
            </div> 
         </div>
    </div>
    

@endsection