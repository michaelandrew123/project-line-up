@extends('layouts.master')

@section('content')




<!-- Desktop design -->
<div class="flex   xl:block lg:block md:block hidden w-full mx-2 bg-slate-100">
    <div class="flex flex-row w-full xl:justify-between lg:justify-center mb-8">
        <div class="flex flex-col xl:block lg:hidden md:hidden">
            <img class="w-48   mb-32" src="{{ asset('/images/menu-icon/adds1.png') }}">
            <img class="w-48 " src="{{ asset('/images/menu-icon/adds2.png') }}">
        </div>
        <div class="flex flex-col xl:w-[67%] lg:w-[90%] md:w-full">
            <div class="flex justify-center mb-5">
                <img class="w-10/12  " src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <div class="flex md:flex-row justify-between">
                <div class="2xl:w-[23rem] xl:w-[23rem] w-12/12  h-80  relative border border-slate-200  rounded-xl flex flex-col justify-center ">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-orange-400  rounded-full w-[50%] flex items-center p-1 mb-2">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="lg:text-sm md:text-[13px]  ml-2 text-black font-semibold">Morning Skate</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-[21rem]">
                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                        <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="2xl:w-[23rem] xl:w-[23rem] w-12/12  h-80  relative ml-5 mr-5 border border-slate-200  rounded-xl flex flex-col justify-center">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-[#15d869] rounded-full w-[50%] flex items-center p-1 mb-2">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="lg:text-sm md:text-[13px] ml-4 text-black font-semibold">Top Tracks</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[21rem]">
                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Edmonton in a great spot tonight against the </br>Predators</p>
                        <p class="text-[10px] font-bold mb-2 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="2xl:w-[23rem] xl:w-[23rem] w-12/12  h-80  relative border border-slate-200  rounded-xl flex flex-col justify-center">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-orange-400  rounded-full w-[50%] flex items-center p-1 mb-2">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="lg:text-sm md:text-[13px]  ml-4 text-black font-semibold">Best Sets</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[21rem]">
                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                        <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex items-center">
                    <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Hightlights
                    </h1>
                </div>
                <div class="bg-[#045473] w-full mb-2">
                    <p class="text-white text-[15px] font-semibold p-0.5 mx-1">NHL Highlights: Blues 6, Maple Leafs 5 (SO)</p>
                </div>
                <div class="flex flex-row justify-between items-stretch">
                        <img class="w-6/12" src="http://127.0.0.1:8000/images/menu-icon/high_lights.png" alt="">
                        <ul id="parent" class="flex flex-col w-6/12">
                            <li class="flex flex-col border grow border-slate-400 p-0.5 link" style="border-left: none;">
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:37</p>
                            </li>
                            <li class="flex flex-col border border-slate-400 p-0.5 link" style="border-left: none;">
                                <a class="text-sm font-semibold ml-2" href="#">NHL Highlight: Jet 3, Flames 2</a>
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:35</p>
                            </li>
                            <li id="-active" class="flex flex-col border border-slate-400 p-0.5 link" style="border-left: none;">
                                <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Predator 6, Canadiens 3</a>
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                            </li>
                            <li class="flex flex-col border border-slate-400 p-0.5 link" style="border-left: none;">
                                <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Blues 6, Maple Leafs 5 (SO)</a>
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                            </li>
                            <li class="flex flex-col border border-slate-400 p-0.5 link" style="border-left: none;">
                                <a class="text-sm font-semibold ml-2" href="#">NHL HIghtlights: Sabres 5, Capital 4 (OT)</a>
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:39</p>
                            </li>
                            <li class="flex flex-col border border-slate-400 p-0.5 link" style="border-left: none;">
                                <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Panthers 5, Coyotes 3</a>
                                <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center xl:justify-between lg:justify-center xl:block lg:hidden md:hidden">
            <img class="w-60  " src="{{ asset('/images/menu-icon/adds3.png') }}">
            <img class="w-48   " src="{{ asset('/images/menu-icon/adds6.png') }}">
        </div>  
    </div>
    <div class="flex flex-row w-full xl:justify-between lg:justify-center">
        <div class="xl:block lg:hidden md:hidden">
            <img class="w-48  " src="{{ asset('/images/menu-icon/adds4.png') }}">
        </div> 
        <div class="flex flex-col xl:w-[67%] lg:w-[90%] md:w-full">
            <div class="flex flex-col ">
                <div class="flex items-center">
                    <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Starting Goalies
                    </h1>
                </div>
                <div class="flex md:flex-row justify-center justify-between">
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-[100%] flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1 ">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1 md:ml-0">$8,700</p>
                                    <img class="w-5 ml-3 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1 md:ml-0">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                            <p class="text-[14px] font-bold mb-5 ">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-[97%] flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-36 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 2xl:pb-5 xl:pb-5 lg:pb-5  sm:pb-0">
                            <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px]  md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center">
                    <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Player News
                    </h1>
                </div>
                <div class="flex md:flex-row justify-center justify-between">
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-[100%] flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1 ">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1 md:ml-0">$8,700</p>
                                    <img class="w-5 ml-3 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1 md:ml-0">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                            <p class="text-[14px] font-bold mb-5 ">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-[97%] flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                        <div class="flex m-1 mt-5 ">
                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-36 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold md:font-bold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[14px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 2xl:pb-5 xl:pb-5 lg:pb-5  sm:pb-0">
                            <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px]  md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                </div>
            </div>
        </div>
        <div class="flex xl:block lg:hidden md:hidden">
            <img class="w-60  relative bottom-0" src="{{ asset('/images/menu-icon/adds5.png') }}">
        </div> 
    </div>
    <div class="flex flex-row lg:justify-center">
        <div class="flex flex-col">
            <div class="flex items-center ">
                <img class="w-14 h-14" src="{{ asset('/images/home-page/graph-logo.png') }}">
                <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                    Projections
                </h1>
            </div>
            <div class="flex flex-row overflow-x-clip mx-1 ">
                    <table class="tbl table-fixed flex flex-row ">
                        <tr>
                            <th class="relative ">First
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1 text-[#8bbf9b]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th >
                            <th class="relative">Last
                            <div class="absolute right-0 bottom-1  ">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="relative">Pos
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th >
                            <th class="relative">Team
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="relative">Opp
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="relative" style="width:9%;">Start/line
                            <div class="absolute right-px bottom-1">
                                    <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-4 h-4 relative bottom-px right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="relative" style="width:8%;">PP Unit 
                            <!-- <div class="absolute right-0 bottom-1">
                                    <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-4 h-4 relative bottom-1 right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div> -->
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblGoals relative">Goals
                                <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblWin relative">Win%
                                <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblSalary relative" style=" width:9%; font-size:14px;">DK Salary
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblProj relative" style=" width:9%; font-size:14px;">DK PROJ
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblSalary2 relative" style=" width:9%; font-size:14px;">FD Salary
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            <th class="tblProj2 relative" style=" width:9%; font-size:14px;">FD PROJ
                            <div class="absolute right-0 bottom-1">
                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                            </div>
                            </th>
                            
                        </tr>
                        <tr>
                            <td>Auston</td>
                            <td>Mathew</td>
                            <td>C</td>
                            <td>TQR</td>
                            <td>@ DET</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.73</td>
                            <td class="tblWin">63.2</td>
                            <td class="tblSalary">9200</td>
                            <td class="tblProj">29.9</td>
                            <td class="tblSalary2">10200</td>
                            <td class="tblProj2">34.99</td>
                            
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Huberdaeu</td>
                            <td >W</td>
                            <td>FLA</td>
                            <td>vs. EDM</td>
                            <td class="bg-[#ffd966] text-center">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">4.19</td>
                            <td class="tblWin">67.5</td>
                            <td class="tblSalary">7100</td>
                            <td class="tblProj">25.39</td>
                            <td class="tblSalary2">8800</td>
                            <td class="tblProj2">32.65</td>
                            
                        </tr>
                        <tr>
                            <td>Alexander</td>
                            <td>Barkov</td>
                            <td >C</td>
                            <td>FLA</td>
                            <td>vs. EDM</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">4.19</td>
                            <td class="tblWin">67.5</td>
                            <td class="tblSalary">7500</td>
                            <td class="tblProj">25.15</td>
                            <td class="tblSalary2">9900</td>
                            <td class="tblProj2">30.62</td>
                            
                        </tr>
                        <tr>
                            <td>Nathan</td>
                            <td>Mackinnon</td>
                            <td >C</td>
                            <td>COL</td>
                            <td>@ JVK</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.27</td>
                            <td class="tblWin">58.3</td>
                            <td class="tblSalary">8700</td>
                            <td class="tblProj">23.68</td>
                            <td class="tblSalary2">9800</td>
                            <td class="tblProj2">27.18</td>
                            
                        </tr>
                        <tr>
                            <td>Charlie</td>
                            <td>McAvoy</td>
                            <td >D</td>
                            <td>BOS</td>
                            <td>@ SJ</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.05</td>
                            <td class="tblWin">60</td>
                            <td class="tblSalary">5900</td>
                            <td class="tblProj">10.44</td>
                            <td class="tblSalary2">5400</td>
                            <td class="tblProj2">12.52</td>
                            
                        </tr>
                        <tr>
                            <td>Sam</td>
                            <td>Reinhart</td>
                            <td >W</td>
                            <td>FLA</td>
                            <td>vs.EDM</td>
                            <td class="bg-[#e06666] text-center">3</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">4.19</td>
                            <td class="tblWin">67.5</td>
                            <td class="tblSalary">5000</td>
                            <td class="tblProj">21.26</td>
                            <td class="tblSalary2">6500</td>
                            <td class="tblProj2">26.79</td>
                        
                        </tr>
                        <tr>
                            <td>Mikko</td>
                            <td>Rantanen</td>
                            <td >W</td>
                            <td>COL</td>
                            <td>@ VGK</td>
                            <td class="tblsLine">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.27</td>
                            <td class="tblWin">58.3</td>
                            <td class="tblSalary">7300</td>
                            <td class="tblProj">20.72</td>
                            <td class="tblSalary2">9100</td>
                            <td class="tblProj2">25.33</td>
                            
                        </tr>
                        <tr>
                            <td>Sam</td>
                            <td>Bennet</td>
                            <td >C</td>
                            <td>FLA</td>
                            <td>vs.EDM</td>
                            <td class="bg-[#ffd966] text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="tblGoals">4.19</td>
                            <td class="tblGoals">67.5</td>
                            <td class="tblSalary">5000</td>
                            <td class="tblProj">20.18</td>
                            <td class="tblSalary2">6800</td>
                            <td class="tblProj2">23.37</td>
                            
                        </tr>
                        <tr>
                            <td>Matt</td>
                            <td>Grzelcyk</td>
                            <td >D</td>
                            <td>BOS</td>
                            <td>@ SJ</td>
                            <td class="bg-[#ffd966] text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="tblGoals">3.05</td>
                            <td class="tblGoals">60</td>
                            <td class="tblSalary">4500</td>
                            <td class="tblProj">8.04</td>
                            <td class="tblSalary2">4300</td>
                            <td class="tblProj2">9.96</td>
                            
                        
                        </tr>
                        <tr>
                            <td>Mitche</td>
                            <td>Mamer</td>
                            <td >W</td>
                            <td>TOR</td>
                            <td>@ DET</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.73</td>
                            <td class="tblWin">63.2</td>
                            <td class="tblSalary">8000</td>
                            <td class="tblProj">19.7</td>
                            <td class="tblSalary2">8200</td>
                            <td class="tblProj2">24.18</td>
                            
                        </tr>
                        <tr>
                            <td>Alex</td>
                            <td>Overchkin</td>
                            <td >W</td>
                            <td>WSH</td>
                            <td>@ PHI</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.36</td>
                            <td class="tblWin">60.8</td>
                            <td class="tblSalary">8300</td>
                            <td class="tblProj">18.35</td>
                            <td class="tblSalary2">9900</td>
                            <td class="tblProj2">21.42</td>
                        
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Gaudreu</td>
                            <td >W</td>
                            <td>CGY</td>
                            <td>vs. MIN</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.32</td>
                            <td class="tblWin">59.8</td>
                            <td class="tblSalary">7200</td>
                            <td class="tblProj">18.34</td>
                            <td class="tblSalary2">8400</td>
                            <td class="tblProj2">22.28</td>
                            
                        </tr>
                        <tr>
                            <td>Nikita</td>
                            <td>Kusherov</td>
                            <td >W</td>
                            <td>TB</td>
                            <td>@ NSH</td>
                            <td class="tblsLine">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.34</td>
                            <td class="tblWin">60.2</td>
                            <td class="tblSalary">8700</td>
                            <td class="tblProj">18.33</td>
                            <td class="tblSalary2">9800</td>
                            <td class="tblProj2">22.87</td>
                            
                            
                        </tr>
                        <tr>
                            <td>Nazem</td>
                            <td>Kadri</td>
                            <td >C</td>
                            <td>COL</td>
                            <td>@ VJK</td>
                            <td class="bg-[#ffd966] text-center">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.27</td>
                            <td class="tblWin">58.3</td>
                            <td class="tblSalary">7200</td>
                            <td class="tblProj">18.24</td>
                            <td class="tblSalary2">9400</td>
                            <td class="tblProj2">21.82</td>
                        
                        </tr>
                        <tr>
                            <td>Brady</td>
                            <td>Tkachuk</td>
                            <td>W</td>
                            <td>OTT</td>
                            <td>vs. MTL</td>
                            <td class="tblsLine">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.45</td>
                            <td class="tblWin">36.6</td>
                            <td class="tblSalary">6500</td>
                            <td class="tblProj">18.1</td>
                            <td class="tblSalary2">6800</td>
                            <td class="tblProj2">20.41</td>
                        
                            
                        </tr>
                        <tr>
                            <td>Gabriel</td>
                            <td>Landeskog</td>
                            <td >W</td>
                            <td>COL</td>
                            <td>@ VJK</td>
                            <td class="bg-[#ffd966] text-center">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.27</td>
                            <td class="tblWin">58.3</td>
                            <td class="tblSalary">6400</td>
                            <td class="tblProj">18.07</td>
                            <td class="tblSalary2">9000</td>
                            <td class="tblProj2">22.72</td>
                        
                        </tr>
                        <tr>
                            <td>David</td>
                            <td>Pastmak</td>
                            <td >W</td>
                            <td>BOS</td>
                            <td>@ SJ</td>
                            <td class="bg-[#ffd966] text-center">2</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.05</td>
                            <td class="tblWin">60</td>
                            <td class="tblSalary">8300</td>
                            <td class="tblProj">18.02</td>
                            <td class="tblSalary2">8600</td>
                            <td class="tblProj2">20.78</td>
                        
                        </tr>
                        <tr>
                            <td>William</td>
                            <td>Nylander</td>
                            <td >W</td>
                            <td>TOR</td>
                            <td>@ DET</td>
                            <td class="bg-[#ffd966] text-center">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.73</td>
                            <td class="tblWin">63.2</td>
                            <td class="tblSalary">6100</td>
                            <td class="tblProj">17.85</td>
                            <td class="tblSalary2">7200</td>
                            <td class="tblProj2">22.06</td>
                        
                        </tr>
                        <tr>
                            <td>Mathew</td>
                            <td>Tkachuk</td>
                            <td >W</td>
                            <td>CGY</td>
                            <td>vs. MIN</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.32</td>
                            <td class="tblWin">59.8</td>
                            <td class="tblSalary">6300</td>
                            <td class="tblProj">17.4</td>
                            <td class="tblSalary2">8300</td>
                            <td class="tblProj2">21.86</td>
                            
                        </tr>
                        <tr>
                            <td>Kirill</td>
                            <td>Kaprizov</td>
                            <td >W</td>
                            <td>MIN</td>
                            <td>@ CGY</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">2.68</td>
                            <td class="tblWin">40.2</td>
                            <td class="tblSalary">8700</td>
                            <td class="tblProj">17.21</td>
                            <td class="tblSalary2">9200</td>
                            <td class="tblProj2">21.19</td>
                            
                        </tr>
                        <tr>
                            <td>Brad</td>
                            <td>Marchand</td>
                            <td >W</td>
                            <td>BOS</td>
                            <td>@ SJ</td>
                            <td class="tblsLine">1</td>
                            <td class="tblUnit">1</td>
                            <td class="tblGoals">3.05</td>
                            <td class="tblWin">60</td>
                            <td class="tblSalary">7500</td>
                            <td class="tblProj">17.19</td>
                            <td class="tblSalary2">8700</td>
                            <td class="tblProj2">20.36</td>
                        
                        </tr>

                    </table>
            </div>
            <div class="relative">
                <a href="" class="text-black font-semibold flex justify-end mr-2">see all</a>
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center gap-3 hidden">
        <div class="flex flex-col ">       
            <!-- NHL combinations penguins -->
            <!-- <div class="flex flex-col">
                <div class="flex items-center">
                    <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        NHL Line Combinations
                    </h1>
                </div>
                <div class="flex md:flex-row justify-center justify-evenly mb-3">
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex md:flex-row justify-center justify-evenly">
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                        <div class="flex flex-row items-center  w-full justify-evenly">
                            <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                            <div class="flex flex-col ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                    <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                    <p class="text-[10px] font-semibold">Line Combinations</p>
                                </div>
                            </div>   
                        </div>
                        <div class="flex flex-col items-center gap-3">
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                            <div class="flex flex-row w-[80%] justify-evenly">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->      
            <div class="flex flex-col w-full ">  
                <!-- Projections table      -->
                <div class="flex flex-row justify-center">
                    <div class="flex flex-col">
                        <div class="flex items-center ">
                            <img class="w-14 h-14" src="{{ asset('/images/menu-icon/projection_logo.png') }}">
                            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                Projections
                            </h1>
                        </div>
                        <div class="flex flex-row overflow-x-clip mx-1 ">
                            <table class="tbl table-fixed flex flex-row ">
                                <tr>
                                    <th class="relative ">First
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1 text-[#8bbf9b]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th >
                                    <th class="relative">Last
                                    <div class="absolute right-0 bottom-1  ">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="relative">Pos
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th >
                                    <th class="relative">Team
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="relative">Opp
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="relative" style="width:9%;">Start/line
                                    <div class="absolute right-px bottom-1">
                                            <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-4 h-4 relative bottom-px right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="relative" style="width:8%;">PP Unit 
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblGoals relative">Goals
                                        <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblWin relative">Win%
                                        <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblSalary relative" style=" width:9%; font-size:14px;">DK Salary
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblProj relative" style=" width:9%; font-size:14px;">DK PROJ
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblSalary2 relative" style=" width:9%; font-size:14px;">FD Salary
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    <th class="tblProj2 relative" style=" width:9%; font-size:14px;">FD PROJ
                                    <div class="absolute right-0 bottom-1">
                                            <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                            <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                    </div>
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <td>Auston</td>
                                    <td>Mathew</td>
                                    <td>C</td>
                                    <td>TQR</td>
                                    <td>@ DET</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.73</td>
                                    <td class="tblWin">63.2</td>
                                    <td class="tblSalary">9200</td>
                                    <td class="tblProj">29.9</td>
                                    <td class="tblSalary2">10200</td>
                                    <td class="tblProj2">34.99</td>
                                    
                                </tr>
                                <tr>
                                    <td>Jonathan</td>
                                    <td>Huberdaeu</td>
                                    <td >W</td>
                                    <td>FLA</td>
                                    <td>vs. EDM</td>
                                    <td class="bg-[#ffd966] text-center">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">4.19</td>
                                    <td class="tblWin">67.5</td>
                                    <td class="tblSalary">7100</td>
                                    <td class="tblProj">25.39</td>
                                    <td class="tblSalary2">8800</td>
                                    <td class="tblProj2">32.65</td>
                                    
                                </tr>
                                <tr>
                                    <td>Alexander</td>
                                    <td>Barkov</td>
                                    <td >C</td>
                                    <td>FLA</td>
                                    <td>vs. EDM</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">4.19</td>
                                    <td class="tblWin">67.5</td>
                                    <td class="tblSalary">7500</td>
                                    <td class="tblProj">25.15</td>
                                    <td class="tblSalary2">9900</td>
                                    <td class="tblProj2">30.62</td>
                                    
                                </tr>
                                <tr>
                                    <td>Nathan</td>
                                    <td>Mackinnon</td>
                                    <td >C</td>
                                    <td>COL</td>
                                    <td>@ JVK</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.27</td>
                                    <td class="tblWin">58.3</td>
                                    <td class="tblSalary">8700</td>
                                    <td class="tblProj">23.68</td>
                                    <td class="tblSalary2">9800</td>
                                    <td class="tblProj2">27.18</td>
                                    
                                </tr>
                                <tr>
                                    <td>Charlie</td>
                                    <td>McAvoy</td>
                                    <td >D</td>
                                    <td>BOS</td>
                                    <td>@ SJ</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.05</td>
                                    <td class="tblWin">60</td>
                                    <td class="tblSalary">5900</td>
                                    <td class="tblProj">10.44</td>
                                    <td class="tblSalary2">5400</td>
                                    <td class="tblProj2">12.52</td>
                                    
                                </tr>
                                <tr>
                                    <td>Sam</td>
                                    <td>Reinhart</td>
                                    <td >W</td>
                                    <td>FLA</td>
                                    <td>vs.EDM</td>
                                    <td class="bg-[#e06666] text-center">3</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">4.19</td>
                                    <td class="tblWin">67.5</td>
                                    <td class="tblSalary">5000</td>
                                    <td class="tblProj">21.26</td>
                                    <td class="tblSalary2">6500</td>
                                    <td class="tblProj2">26.79</td>
                                
                                </tr>
                                <tr>
                                    <td>Mikko</td>
                                    <td>Rantanen</td>
                                    <td >W</td>
                                    <td>COL</td>
                                    <td>@ VGK</td>
                                    <td class="tblsLine">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.27</td>
                                    <td class="tblWin">58.3</td>
                                    <td class="tblSalary">7300</td>
                                    <td class="tblProj">20.72</td>
                                    <td class="tblSalary2">9100</td>
                                    <td class="tblProj2">25.33</td>
                                    
                                </tr>
                                <tr>
                                    <td>Sam</td>
                                    <td>Bennet</td>
                                    <td >C</td>
                                    <td>FLA</td>
                                    <td>vs.EDM</td>
                                    <td class="bg-[#ffd966] text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="tblGoals">4.19</td>
                                    <td class="tblGoals">67.5</td>
                                    <td class="tblSalary">5000</td>
                                    <td class="tblProj">20.18</td>
                                    <td class="tblSalary2">6800</td>
                                    <td class="tblProj2">23.37</td>
                                    
                                </tr>
                                <tr>
                                    <td>Matt</td>
                                    <td>Grzelcyk</td>
                                    <td >D</td>
                                    <td>BOS</td>
                                    <td>@ SJ</td>
                                    <td class="bg-[#ffd966] text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="tblGoals">3.05</td>
                                    <td class="tblGoals">60</td>
                                    <td class="tblSalary">4500</td>
                                    <td class="tblProj">8.04</td>
                                    <td class="tblSalary2">4300</td>
                                    <td class="tblProj2">9.96</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>Mitche</td>
                                    <td>Mamer</td>
                                    <td >W</td>
                                    <td>TOR</td>
                                    <td>@ DET</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.73</td>
                                    <td class="tblWin">63.2</td>
                                    <td class="tblSalary">8000</td>
                                    <td class="tblProj">19.7</td>
                                    <td class="tblSalary2">8200</td>
                                    <td class="tblProj2">24.18</td>
                                    
                                </tr>
                                <tr>
                                    <td>Alex</td>
                                    <td>Overchkin</td>
                                    <td >W</td>
                                    <td>WSH</td>
                                    <td>@ PHI</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.36</td>
                                    <td class="tblWin">60.8</td>
                                    <td class="tblSalary">8300</td>
                                    <td class="tblProj">18.35</td>
                                    <td class="tblSalary2">9900</td>
                                    <td class="tblProj2">21.42</td>
                                
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Gaudreu</td>
                                    <td >W</td>
                                    <td>CGY</td>
                                    <td>vs. MIN</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.32</td>
                                    <td class="tblWin">59.8</td>
                                    <td class="tblSalary">7200</td>
                                    <td class="tblProj">18.34</td>
                                    <td class="tblSalary2">8400</td>
                                    <td class="tblProj2">22.28</td>
                                    
                                </tr>
                                <tr>
                                    <td>Nikita</td>
                                    <td>Kusherov</td>
                                    <td >W</td>
                                    <td>TB</td>
                                    <td>@ NSH</td>
                                    <td class="tblsLine">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.34</td>
                                    <td class="tblWin">60.2</td>
                                    <td class="tblSalary">8700</td>
                                    <td class="tblProj">18.33</td>
                                    <td class="tblSalary2">9800</td>
                                    <td class="tblProj2">22.87</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>Nazem</td>
                                    <td>Kadri</td>
                                    <td >C</td>
                                    <td>COL</td>
                                    <td>@ VJK</td>
                                    <td class="bg-[#ffd966] text-center">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.27</td>
                                    <td class="tblWin">58.3</td>
                                    <td class="tblSalary">7200</td>
                                    <td class="tblProj">18.24</td>
                                    <td class="tblSalary2">9400</td>
                                    <td class="tblProj2">21.82</td>
                                
                                </tr>
                                <tr>
                                    <td>Brady</td>
                                    <td>Tkachuk</td>
                                    <td>W</td>
                                    <td>OTT</td>
                                    <td>vs. MTL</td>
                                    <td class="tblsLine">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.45</td>
                                    <td class="tblWin">36.6</td>
                                    <td class="tblSalary">6500</td>
                                    <td class="tblProj">18.1</td>
                                    <td class="tblSalary2">6800</td>
                                    <td class="tblProj2">20.41</td>
                                
                                    
                                </tr>
                                <tr>
                                    <td>Gabriel</td>
                                    <td>Landeskog</td>
                                    <td >W</td>
                                    <td>COL</td>
                                    <td>@ VJK</td>
                                    <td class="bg-[#ffd966] text-center">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.27</td>
                                    <td class="tblWin">58.3</td>
                                    <td class="tblSalary">6400</td>
                                    <td class="tblProj">18.07</td>
                                    <td class="tblSalary2">9000</td>
                                    <td class="tblProj2">22.72</td>
                                
                                </tr>
                                <tr>
                                    <td>David</td>
                                    <td>Pastmak</td>
                                    <td >W</td>
                                    <td>BOS</td>
                                    <td>@ SJ</td>
                                    <td class="bg-[#ffd966] text-center">2</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.05</td>
                                    <td class="tblWin">60</td>
                                    <td class="tblSalary">8300</td>
                                    <td class="tblProj">18.02</td>
                                    <td class="tblSalary2">8600</td>
                                    <td class="tblProj2">20.78</td>
                                
                                </tr>
                                <tr>
                                    <td>William</td>
                                    <td>Nylander</td>
                                    <td >W</td>
                                    <td>TOR</td>
                                    <td>@ DET</td>
                                    <td class="bg-[#ffd966] text-center">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.73</td>
                                    <td class="tblWin">63.2</td>
                                    <td class="tblSalary">6100</td>
                                    <td class="tblProj">17.85</td>
                                    <td class="tblSalary2">7200</td>
                                    <td class="tblProj2">22.06</td>
                                
                                </tr>
                                <tr>
                                    <td>Mathew</td>
                                    <td>Tkachuk</td>
                                    <td >W</td>
                                    <td>CGY</td>
                                    <td>vs. MIN</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.32</td>
                                    <td class="tblWin">59.8</td>
                                    <td class="tblSalary">6300</td>
                                    <td class="tblProj">17.4</td>
                                    <td class="tblSalary2">8300</td>
                                    <td class="tblProj2">21.86</td>
                                    
                                </tr>
                                <tr>
                                    <td>Kirill</td>
                                    <td>Kaprizov</td>
                                    <td >W</td>
                                    <td>MIN</td>
                                    <td>@ CGY</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">2.68</td>
                                    <td class="tblWin">40.2</td>
                                    <td class="tblSalary">8700</td>
                                    <td class="tblProj">17.21</td>
                                    <td class="tblSalary2">9200</td>
                                    <td class="tblProj2">21.19</td>
                                    
                                </tr>
                                <tr>
                                    <td>Brad</td>
                                    <td>Marchand</td>
                                    <td >W</td>
                                    <td>BOS</td>
                                    <td>@ SJ</td>
                                    <td class="tblsLine">1</td>
                                    <td class="tblUnit">1</td>
                                    <td class="tblGoals">3.05</td>
                                    <td class="tblWin">60</td>
                                    <td class="tblSalary">7500</td>
                                    <td class="tblProj">17.19</td>
                                    <td class="tblSalary2">8700</td>
                                    <td class="tblProj2">20.36</td>
                                
                                </tr>

                            </table>
                        </div>
                        <!-- <div class="relative">
                            <a href="" class="text-black font-semibold flex justify-end mr-2">see all</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>   
        <div class="flex flex-row relative xl:justify-between lg:justify-center hidden">  
            <!-- <div class="xl:block lg:hidden md:hidden">
                <img class="" src="{{ asset('/images/menu-icon/adds4.png') }}">
            </div>        -->
            <div class="flex flex-col xl:w-[67%] lg:w-auto ">  
                <div class="flex flex-col">
                    <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            NHL Player News
                        </h1>
                    </div>
                    <!-- <div class="flex md:flex-row justify-center justify-evenly">
                        <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#e7e9ec] rounded-full w-[100%] flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex mt-1 ">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1 md:ml-0">$8,700</p>
                                        <img class="w-5 ml-3 " src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1 md:ml-0">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="text-[14px] font-bold mb-5 ">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[31%] h-[21rem] border border-black relative rounded-xl">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#15d869] rounded-full w-[97%] flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold md:font-bold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[31%] h-[21rem] border border-black relative rounded-xl ">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-orange-400 rounded-full w-36 flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold md:font-bold">JACOB MARKSTORM</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 2xl:pb-5 xl:pb-5 lg:pb-5  sm:pb-0">
                                <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px]  md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div> -->
                    <div class="flex flex-row w-full justify-between mb-3">
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p> 
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                    </div>
                </div>      
                
            </div>
            <!-- <div class=" flex items-end xl:block lg:hidden md:hidden">
                <img class="" src="{{ asset('/images/menu-icon/adds5.png') }}">
            </div>  -->
        </div>
    </div>
</div>
<!-- End Desktop -->
<!-- Tablet and mobile responsive design -->
<div class="flex flex-col xl:hidden lg:hidden md:hidden smm-block ">
    <!-- <div id="carouselExampleControls3" class="carousel slide relative mt-4  hidden md:block smm-block" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full"> 
                <div class=" flex justify-center">
                    <div class="w-[70%] h-[23rem]  relative  ">
                        <div class=" m-1 mt-5 ">
                            <div class="bg-orange-400 rounded-full w-[97%] flex items-center p-1 mb-3">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                <h1 class="text-sm ml-4 text-black font-semibold">Morning Skates</h1>
                            </div>
                            <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-full">

                        </div>
                        <div class=" ml-1 mb-5 pb-9">
                            <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                            <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="carousel-item relative float-left w-full">
                <div class="flex justify-center align-center">
                    <div class="w-[70%] h-[23rem]  relative ml-5 mr-5 ">
                        <div class=" m-1 mt-5 ">
                            <div class="bg-[#15d869] rounded-full w-[97%] flex items-center p-1 mb-3">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                <h1 class="text-sm ml-4 text-black font-semibold">Top Tracks</h1>
                            </div>
                            <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-full">

                        </div>
                        <div class=" ml-1 mb-5 pb-9">
                            <p class="text-xs font-bold mb-5">Edmonton in a great spot tonight against the Predators</p>
                            <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <div class="flex justify-center align-center">
                    <div class="w-[70%] h-[23rem]  relative  ">
                        <div class=" m-1 mt-5 ">
                            <div class="bg-orange-400  rounded-full w-[97%] flex items-center p-1 mb-3">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                <h1 class="text-sm ml-4 text-black font-semibold">Best Sets</h1>
                            </div>
                            <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-full">

                        </div>
                        <div class=" ml-1 mb-5 pb-9">
                            <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                            <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselExampleControls3"
            data-bs-slide="prev"
        >
            <img class="color-red border border-sky-100 rounded-full w-12 rotate-180 " src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
        </button>

        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselExampleControls3"
            data-bs-slide="next"
        >     
            <img class="color-red border border-sky-100 rounded-full w-12" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
        
        </button>
    </div>      -->
        <div>
            <div class="flex justify-center  mt-5 mb-5">
                <img class="w-3/4 h-14" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div> 
            <div class="flex flex-col justify-evenly">
                <div class="flex justify-center ">
                    <div>
                        <div class="flex felx-row items-center ml-2 mb-0.5">
                            <img class="w-7" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                            <p class="text-sm font-bold ml-2">Morning Skate</p>  
                        </div>
                        <div class="w-full max-h-[23rem] relative  ">
                            <div class=" ">
                                <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-full">
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="flex justify-center">
                    <div>
                        <div class="flex felx-row items-center ml-2  mb-0.5">
                            <img class="w-7" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                            <p class="text-sm font-bold ml-2">Top Tracks</p>  
                        </div>
                        <div class="w-full max-h-[23rem] relative ">
                            <div class="">
                                <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-full">
                            </div>
                        </div>
                    </div> 
                </div>      
                <div class="flex justify-center">
                    <div> 
                        <div class="flex felx-row items-center ml-2  mb-0.5">
                            <img class="w-7" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                            <p class="text-sm font-bold ml-2">Best Sets</p>  
                        </div>
                        <div class="w-full max-h-[23rem]  relative  ">
                            <div class=" ">
                                <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-full">
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
            <div class="w-full mt-4">    
                <div class=" bg-[#8e99a2] w-full flex justify-center items-center p-3">
                    <img class="w-7 mr-2" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                    <p class="text-sm font-bold ml-2">Recently Updated</p> 
                </div>
                <div class="ml-2">
                    <table class="w-full ">
                        <tr class="">
                            <td class="border-none text-sm font-bold">Team</td>
                            <td class="border-none text-sm font-bold">Update</td>
                            <td class="border-none text-sm font-bold">Status</td>
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p> 
                            </td>
                            <td class="border-none text-sm">Line Combinations</td>
                            <td class="border-none text-sm">Morning Skate</td>                           
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td>
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                <p class="text-sm ml-2">Calgary Flames</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td> 
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt="">
                                <p class="text-sm ml-2">Vancouver Canucks</p>
                            </td>
                            <td class="border-none text-sm">Line Combinations</td>
                            <td class="border-none text-sm">Morning Skate</td> 
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <p class="text-sm ml-2">Pittburgh Penguins</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td> 
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt="">
                                <p class="text-sm ml-2">Montreal Canadiens</p>
                            </td>
                            <td class="border-none text-sm">Line Combinations</td>
                            <td class="border-none text-sm">Morning Skate</td> 
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td>
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td>
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td>
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Toronto Maple Leafs</p>
                            </td>
                            <td class="border-none text-sm">Starting Goalie</td>
                            <td class="border-none text-sm">Morning Skate</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <img class="w-full" src="{{ asset('/images/menu-icon/playing-hockey.png') }}" alt="">
            </div>
            <div class="w-full mt-4">    
                <div class=" bg-[#8e99a2] w-full flex justify-center items-center p-3">
                    <img class="w-7 mr-2" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                    <p class="text-sm font-bold ml-2">Player News</p> 
                </div>
                <div class="ml-2">
                    <table class="w-full ">
                        <tr class="">
                            <td class="border-none text-sm font-bold">Player</td>
                            <td class="border-none text-sm font-bold">Status</td>
                            <td class="border-none text-sm font-bold">Source</td>
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">John Tavares</p> 
                            </td>
                            <td class="border-none text-sm">Line Change</td>
                            <td class="border-none flex">
                              <img class="w-[20px] fill-sky-500" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td> 
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-1">Auston Matthews</p>
                            </td>
                            <td class="border-none text-sm">Injury</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                <p class="text-sm ml-2">Nazim Kadri</p>
                            </td>
                            <td class="border-none text-sm">Suspended</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt="">
                                <p class="text-sm ml-2">Bo Horvart</p>
                            </td>
                            <td class="border-none text-sm">Traded</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td> 
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <p class="text-sm ml-2">Sidney Crosby</p>
                            </td>
                            <td class="border-none text-sm">Line Change</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>  
                        </tr>
                        <tr>
                            <td class="border-none flex flex-row">
                                <img class="w-[18px] " src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt="">
                                <p class="text-sm ml-2">Sidney Crosby</p>
                            </td>
                            <td class="border-none text-sm">Line Change</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>  
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <p class="text-sm ml-2">Mitch Marner</p>
                            </td>
                            <td class="border-none text-sm">Injury</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td> 
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt="">
                                <p class="text-sm ml-2">Jack Eichel</p>
                            </td>
                            <td class="border-none text-sm">Injured Reserve</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="border-none flex flex-row">
                                <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt="">
                                <p class="text-sm ml-2">Steven Stamkos</p>
                            </td>
                            <td class="border-none text-sm">Line Change</td>
                            <td class="border-none text-sm flex flex-row">
                              <img class="w-[20px]" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                              <p class="text-sm ml-1">David Alter</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- Old Design of Mobile -->
        <!-- <div id="carouselExampleControls" class="carousel slide relative mt-4" data-bs-ride="carousel">
            <div class="flex justify-center items-center mt-4">
                <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                    Starting Goalies
                    </h1>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full"> 
                    <div class=" flex justify-center">
                        <div class="parent border border-black w-[85%] relative">
                            <div class="flex flex-row gap-3 ml-2 mt-5">
                                <div class="">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                </div>
                                <div>
                                    <div>
                                        <div class="bg-[#e7e9ec] rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                            <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                        </div>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="two_icons">
                                        <div class="flex mt-1">
                                            <div class="flex">
                                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                            </div>
                                            <div class="flex">
                                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                                            </div>   
                                        </div>
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                        <div class="parent border border-black w-[85%] relative">
                            <div class="flex flex-row gap-3 ml-2 mt-5">
                                <div class="">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                </div>
                                <div>
                                    <div>
                                        <div class="bg-[#15d869] rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                            <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                        </div>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="two_icons">
                                        <div class="flex mt-1">
                                            <div class="flex">
                                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                            </div>
                                            <div class="flex">
                                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                                            </div>   
                                        </div>
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                       <div class="parent border border-black w-[85%] relative">
                            <div class="flex flex-row gap-3 ml-2 mt-5">
                                <div class="">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                </div>
                                <div>
                                    <div>
                                        <div class="bg-orange-400 rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                            <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                        </div>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="two_icons">
                                        <div class="flex mt-1">
                                            <div class="flex">
                                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                            </div>
                                            <div class="flex">
                                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                                            </div>   
                                        </div>
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
                                            <h3 class="font-bold">JACOB MARKSTORM</h3>
                                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="rectangle">
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
            >
                <img class="color-red border border-sky-100 rounded-full w-12 rotate-180 absolute top-[8px]" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
            >     
                <img class="color-red border border-sky-100 rounded-full w-12 absolute top-[8px]" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
            </button>
        </div> -->
        <!-- player news carousel -->
        <!-- <div class="flex justify-center items-center mt-4 ">
            <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                Players News
            </h1>
        </div>
        <div id="carouselExampleControls2" class="carousel slide relative mt-4  " data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active relative float-left w-full"> 
                            <div class=" flex justify-center">
                                <div class="w-[70%] h-[21rem] border border-black relative rounded-xl ">
                                    <div class="flex m-1 mt-5">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                        <div class="ml-2">
                                                <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                                    <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                                </div>
                                            <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                            <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                            <div class="flex mt-1">
                                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-1 mb-2 pb-9">
                                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="font-bold">David Alter</h3>
                                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                        </div>
                                    </div>     
                                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <div class="flex justify-center align-center">
                                <div class="w-[70%] h-[21rem] border border-black relative rounded-xlml-5 mr-5">
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                        <div class="ml-2">
                                                <div class="bg-[#15d869] rounded-full w-[97%] flex items-center p-1">
                                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                                </div>
                                            <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                            <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                            <div class="flex mt-1">
                                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-1 mb-2 pb-9">
                                        <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="font-bold">David Alter</h3>
                                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                        </div>
                                    </div>                                               
                                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                                           
                                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"> 
                                        </div>
                                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                    </div>
                                </div>  
                            </div>
                        
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <div class="flex justify-center align-center">
                                    <div class="w-[70%] h-[21rem] border border-black relative rounded-xlsmm-overflow-x-hidden ">
                                        <div class="flex m-1 mt-5 ">
                                            <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                            <div class="ml-2">
                                                <div class="bg-orange-400 rounded-full w-[97%] flex items-center p-1">
                                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                                </div>
                                                <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                                <div class="flex mt-1">
                                                    <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                                    <p class="text-[14px] font-bold ml-1">$8,700</p>
                                                    <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                                    <p class="text-[14px] font-bold ml-1">$8,500</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" ml-1 mb-2 pb-9">
                                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            <div>
                                                <h3 class="font-bold">David Alter</h3>
                                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                            </div>
                                        </div>                                               
                                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                           
                                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left">                                
                                            </div>
                                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                        </div>       
                                    </div> 
                                </div>
                        </div> 
                </div>


                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleControls2"
                    data-bs-slide="prev"
                >
                    <img class="color-red border border-sky-100 rounded-full w-12 rotate-180 " src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
                </button>

                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button"
                    data-bs-target="#carouselExampleControls2"
                    data-bs-slide="next"
                >     
                <img class="color-red border border-sky-100 rounded-full w-12" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
            
                </button>
        </div> -->
        <!-- <div>
           <div class="flex flex-col items-center my-5">
                <div class="border-2 border-black rounded-md w-10/12 h-[57px] overflow-hidden mt-3 flex flex-row items-center justify-between">
                   <input class="border-2 border-black h-[110%] w-[319%]" type="text">
                   <a class="w-full flex justify-center" href="">
                      <img class="w-[73px]" src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                   </a> 
                </div>
            </div>
            <hr>
             
            <div class="flex flex-row items-center justify-self-start my-3 gap-8 ml-5">
                <img class="w-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                <p class=" font-bold ">PLAYER NEWS</p>
            </div>
            <div class="flex flex-col items-center gap-5">
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div>
                            <div>
                                <div class="bg-[#e7e9ec] rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                                </div>
                            </div>
                            <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                            <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            <div class="two_icons">
                                <div class="flex mt-1">
                                    <div class="flex">
                                        <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    </div>
                                    <div class="flex">
                                        <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,500</p>
                                    </div>   
                                </div>
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
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div>
                            <div>
                                <div class="bg-[#15d869] rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                            </div>
                            <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                            <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            <div class="two_icons">
                                <div class="flex mt-1">
                                    <div class="flex">
                                        <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    </div>
                                    <div class="flex">
                                        <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,500</p>
                                    </div>   
                                </div>
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
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="parent border border-black w-[85%] relative">
                    <div class="flex flex-row gap-3 ml-2 mt-5">
                        <div class="">
                          <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div>
                            <div>
                                <div class="bg-orange-400 rounded-full sm:w-40 smm:w-10% flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                            </div>
                            <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                            <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            <div class="two_icons">
                                <div class="flex mt-1">
                                    <div class="flex">
                                        <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,700</p>
                                    </div>
                                    <div class="flex">
                                        <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                        <p class="text-[14px] font-bold ml-1">$8,500</p>
                                    </div>   
                                </div>
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
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl ">                     
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>    -->
</div>
<!-- End of tablet and mobile  -->

    



              
                
                
               
 


















@endsection