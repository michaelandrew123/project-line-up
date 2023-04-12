@extends('layouts.master')

@section('content')
<!-- Desktop Design -->
<div class="xl:block lg:block md:block smm-hidden ">
    <div class="flex flex-row mb-5 justify-between">
        <div class="flex flex-col gap-10   xl:block lg:hidden md:hidden">
            <img class="  h-[40%]" src="{{ asset('/images/menu-icon/adds1.png') }}">
            <img class="  h-36" src="{{ asset('/images/menu-icon/adds2.png') }}">
        </div>
        <div class="flex flex-col items-center">
            <div class="flex justify-center mb-5">
                <img class="w-10/12  " src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <div class="flex flex-row gap-4 items-center">               
                <div class="flex flex-row items-center gap-3">
                    <img class="w-[2.5rem] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                    <h1 class="text-3xl font-semibold pt-5 pb-5 flex items-start">
                        Player News
                    </h1>
                </div>
                <div class="flex flex-row gap-4">
                    <div class="bg-neutral-300 rounded-full flex flex-row gap-2  justify-center items-center w-40 h-7">
                        <img class="w-[23px] border rounded-full" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="font-bold text-sm text-green-500">Starting Goalie</p>
                    </div>
                    <div class="bg-neutral-300 rounded-full flex flex-row gap-2   justify-center items-center w-24 h-7">
                        <img class="w-[18px] rounded-sm" src="{{ asset('/images/menu-icon/white-plus.png') }}">
                        <p class="font-bold text-sm text-red-700">Injury</p>
                    </div>
                    <div class="bg-neutral-300 rounded-full flex flex-row gap-2  justify-center items-center w-36 h-7">
                        <img class="w-[23px] border rounded-full " src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                        <p class="font-bold text-sm  text-sky-700">Line Change</p>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  z-20">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex my-5 md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  z-20">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex my-5 md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <!-- <div class="mb-5">
                <div class="flex md:flex-row">
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex md:flex-row">
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="flex flex-col  items-center  xl:block lg:hidden md:hidden">
            <img class="  h-40" src="{{ asset('/images/menu-icon/adds3.png') }}">
            <img class="  h-[40%]" src="{{ asset('/images/menu-icon/adds4.png') }}">
        </div>             
    </div>
    <div class="flex flex-row justify-between hidden">
        <div class=" xl:block lg:hidden   md:hidden">
            <img class="  h-3/5" src="{{ asset('/images/menu-icon/adds4.png') }}">
        </div>
        <div class="flex flex-col items-center">
            <!-- <div class="mb-5">
                <div class="mb-5">
                    <div class="flex md:flex-row">
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                        <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex md:flex-row">
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                        <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="mb-5">
                    <div class="flex md:flex-row">
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                        <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                        <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                        <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                            <div class="flex m-1 mt-5 ">
                                <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                    <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                        <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                    </div>
                                    <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                    <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                    <div class="flex flex-row items-center mt-1">
                                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,700</p>
                                        <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                        <p class="text-[13px] font-bold ml-1">$8,500</p>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-9">
                                <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                                <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                </div>
                            </div>
                            

                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
                <div class="flex md:flex-row">
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div>
                <div class="flex md:flex-row">
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm font-semibold ml-4 text-sky-700">Line Changes</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[19rem] h-80 border border-black rounded-xl relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex justify-center items-center p-1 ">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                                <h1 class=" text-lg font-extrabold">JACOB MARKSTORM</h1>
                                <p class="text-[13px] font-semibold">Toronto Maple Leafs</p>
                                <div class="flex flex-row items-center mt-1">
                                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,700</p>
                                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                                    <p class="text-[13px] font-bold ml-1">$8,500</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-1 mb-2 pb-9">
                            <p class="text-[13px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="font-bold">David Alter</h3>
                                <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                            </div>
                        </div>
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="flex md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex my-5 md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row justify-evenly block smm-hidden">
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                            <div class="bg-[#e7e9ec] rounded-full w-[97%] flex items-center p-1">
                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                <h1 class="text-sm ml-4 text-[#637a92]">Line Changes</h1>
                            </div>
                            <h1 class=" text-lg font-extrabold md:font-bold">JOHN TAVORES</h1>
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative ">
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

                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[31%] h-[21rem] border border-black rounded-xl relative  ">
                    <div class="flex m-1 mt-5 ">
                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
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
                        <p class="text-[14px] font-bold lg:mb-5 md:mb-[13px] md:sm-1">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">
                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:block lg:hidden   md:hidden">
            <img class="  h-3/5" src="{{ asset('/images/menu-icon/adds4.png') }}">
        </div> 
    </div>
</div>
<!-- End of desktop -->
        <!-- Mobile Design -->
       <div class="hidden smm-block">
            <div class="flex flex-col items-center my-1 mx-1.5">
                <!-- <div class="relative flex justify-center border border-black">
                   <img class="w-2/5" src="{{ asset('/images/menu-icon/box.png') }}" alt="">
                   <a href="">
                      <img class="w-9 h-9 border border-black rounded-xl absolute top-0 right-0" src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                    </a>
                </div> -->
                <div class="border-2 border-black rounded-xl rounded-md w-full h-[57px] overflow-hidden mt-1 flex flex-row items-center rounded-br-xl-between">
                   <input class="border border-l-0 border-r-2 border-black rounded-xl h-[110%] w-[319%]" type="text">
                   <a class="w-full flex justify-center" href="">
                      <img class="w-[73px]" src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                   </a> 
                </div>
            </div>
            <hr>             
            <div class="flex flex-row items-center justify-self-start my-3 gap-8 ml-5">
                <img class="w-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                <p class=" font-bold ">PLAYER NEWS - John Tavores</p>
            </div>
            <div class="flex flex-col items-center gap-5">               
                <div class="flex flex-col items-center gap-8">
                    <div class="parent border border-black  w-[85%] relative rounded-xl">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 border rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black rounded-xl w-[85%] relative ">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black rounded-xl w-[85%] relative">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="font-semibold text-md ">
                    <button id="main-tile" >Next</button>
                </div> 
                <div id="tile" class="flex flex-col items-center gap-8 hidden">
                    <div class="parent border border-black rounded-xl w-[85%] relative">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black rounded-xl w-[85%] relative ">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black rounded-xl w-[85%] relative">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="font-semibold text-md">
                    <button id="main-tile2" class="hidden">Next</button>
                </div> 
                <div id="tile2" class="flex flex-col items-center gap-8 hidden">
                    <div class="parent border border-black rounded-xl w-[85%] relative">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black rounded-xl w-[85%] relative ">
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
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 rounded-br-xl">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>  
        <!-- End of Mobile Design -->
@endsection