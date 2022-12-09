@extends('layouts.master')

@section('content')





<div class="flex xl:block lg:block hidden">

    <div class="flex justify-evenly relative ">
        <div class="w-full  lg:mr-1  flex flex-col justify-between gap-4">
            <div class=" bg-lime-400  flex  mr-10 lg:mr-5 justify-center items-center h-full ">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>
            <div class=" bg-lime-400 mr-10 lg:mr-5 flex  justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>
            <div class=" bg-lime-400 mr-10 lg:mr-5 flex  justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>
        </div>
        <div class="flex flex-col ">
            <div class=" bg-lime-400 w-10/12 m-auto h-20 flex justify-center items-center  mt-5 mb-5">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>
            <div class="flex md:flex-row  ">
                <div class="w-[18rem] h-80  relative  ">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-orange-400 rounded-full w-40 flex items-center p-1 mb-3">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="text-sm ml-4 text-black font-semibold">Morning Skates</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-[18rem]">

                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                        <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[18rem] h-80  relative ml-5 mr-5 ">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1 mb-3">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="text-sm ml-4 text-black font-semibold">Top Tracks</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[18rem]">

                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Edmonton in a great spot tonight against the Predators</p>
                        <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
                <div class="w-[18rem] h-80  relative  ">
                    <div class=" m-1 mt-5 ">
                        <div class="bg-orange-400  rounded-full w-40 flex items-center p-1 mb-3">
                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                            <h1 class="text-sm ml-4 text-black font-semibold">Best Sets</h1>
                        </div>
                        <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[18rem]">

                    </div>
                    <div class=" ml-1 mb-5 pb-9">
                        <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                        <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                    </div>
                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                        <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                        <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center">
                    <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Starting Goalies
                     </h1>
                </div>
                <div class="flex md:flex-row">
                    <div class="w-[18rem] h-80 border border-black relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
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

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[18rem] h-80 border border-black relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
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

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[18rem] h-80 border border-black relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
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
                        

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end">see all</a>
                </div>
            </div>

            <div class="flex flex-col  ">
                <div class="flex items-center">
                    <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Players News
                     </h1>
                </div>
                <div class="flex md:flex-row">
                    <div class="w-[18rem] h-80 border border-black relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
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

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[18rem] h-80 border border-black relative ml-5 mr-5">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
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

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                    <div class="w-[18rem] h-80 border border-black relative  ">
                        <div class="flex m-1 mt-5 ">
                            <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
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

                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end">see all</p></a>
                </div>
            </div>

            <div class="flex flex-col  ">
            <div class="flex items-center ">
                    <img class="w-14 h-14" src="{{ asset('/images/home-page/graph-logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Projections
                     </h1>
                </div>
                <div class="flex md:flex-row">
                </div> 
                <div class="flex justify-center " >
                        <table class="tbl table-fixed">
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
                    <a href="" class="text-black font-semibold flex justify-end">see all</a>
                </div>
            </div>
        </div>
        

        <div class="w-full  flex flex-col justify-between gap-4">

            <div class=" bg-lime-400  flex justify-center items-center w-10/12 h-full ml-10 lg:ml-5">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

            <div class=" bg-lime-400 mr-10 flex justify-center items-center w-10/12 h-full ml-10 lg:ml-5">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>
            <div class=" bg-lime-400 mr-10 flex justify-center items-center w-10/12 h-full ml-10 lg:ml-5">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

        </div>
    </div>
</div>
<!-- Tablet and mobile responsive design -->
<div class="flex flex-col xl:hidden lg:hidden md:block smm-block ">
       <div id="carouselExampleControls3" class="carousel slide relative mt-4  hidden md:block smm-block" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full"> 
                    <div class=" flex justify-center">
                        <div class="w-[70%] h-[23rem]  relative  ">
                            <div class=" m-1 mt-5 ">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1 mb-3">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                    <h1 class="text-sm ml-4 text-black font-semibold">Morning Skates</h1>
                                </div>
                                <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-full">

                            </div>
                            <div class=" ml-1 mb-5 pb-9">
                                <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                                <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

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
                                <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1 mb-3">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                    <h1 class="text-sm ml-4 text-black font-semibold">Top Tracks</h1>
                                </div>
                                <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-full">

                            </div>
                            <div class=" ml-1 mb-5 pb-9">
                                <p class="text-xs font-bold mb-5">Edmonton in a great spot tonight against the Predators</p>
                                <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

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
                                <div class="bg-orange-400  rounded-full w-40 flex items-center p-1 mb-3">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-2">
                                    <h1 class="text-sm ml-4 text-black font-semibold">Best Sets</h1>
                                </div>
                                <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-full">

                            </div>
                            <div class=" ml-1 mb-5 pb-9">
                                <p class="text-xs font-bold mb-5">Sharks look to put together some extra wins</p>
                                <p class="text-[10px] font-bold mb-5 ml-2">Marc Burg 11/08/22</p>
                            </div>
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">

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
      </div>     

        <!-- <div class="flex justify-center items-center mt-4">
            <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                Starting Goalies
                </h1>
        </div>
        <div id="carouselExampleControls" class="carousel slide relative mt-4" data-bs-ride="carousel">
               <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full"> 
                        <div class=" flex justify-center">
                            <div class="w-[70%] h-80 border border-black relative  ">
                                <div class="flex m-1 mt-5">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                            <div class="w-[70%] h-80 border border-black relative ml-5 mr-5">
                                <div class="flex m-1 mt-5 ">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                                           
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"> 
                                    </div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>  
                        </div>
                    
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                                <div class="w-[70%] h-80 border border-black relative smm-overflow-x-hidden ">
                                    <div class="flex m-1 mt-5 ">
                                        <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                        <div class="ml-2">
                                            <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
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
                                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                           
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
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
            >
                <img class="color-red border border-sky-100 rounded-full w-12 rotate-180 " src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
            </button>

            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
            >     
             <img class="color-red border border-sky-100 rounded-full w-12" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
           
            </button>
        </div> -->
        
        <div id="carouselExampleControls" class="carousel slide relative mt-4" data-bs-ride="carousel">
                <div class="flex justify-center items-center mt-4">
                    <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Starting Goalies
                        </h1>
                </div>
               <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full"> 
                        <div class=" flex justify-center">
                            <div class="w-[70%] h-80 border border-black relative  ">
                                <div class="flex m-1 mt-5">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                            <div class="w-[70%] h-80 border border-black relative ml-5 mr-5">
                                <div class="flex m-1 mt-5 ">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                                           
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"> 
                                    </div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>  
                        </div>
                    
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                                <div class="w-[70%] h-80 border border-black relative smm-overflow-x-hidden ">
                                    <div class="flex m-1 mt-5 ">
                                        <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                        <div class="ml-2">
                                            <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
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
                                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                           
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
        </div>
        <div class="flex justify-center items-center mt-4 ">
            <img class="w-14 h-14" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                Players News
            </h1>
        </div>
    <div id="carouselExampleControls2" class="carousel slide relative mt-4  " data-bs-ride="carousel">
               <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full"> 
                        <div class=" flex justify-center">
                            <div class="w-[70%] h-80 border border-black relative  ">
                                <div class="flex m-1 mt-5">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#e7e9ec] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                            <div class="w-[70%] h-80 border border-black relative ml-5 mr-5">
                                <div class="flex m-1 mt-5 ">
                                    <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-[#15d869] rounded-full w-40 flex items-center p-1">
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
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                                           
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"> 
                                    </div>
                                    <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                                </div>
                            </div>  
                        </div>
                    
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex justify-center align-center">
                                <div class="w-[70%] h-80 border border-black relative smm-overflow-x-hidden ">
                                    <div class="flex m-1 mt-5 ">
                                        <img class="w-20 h-24 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                        <div class="ml-2">
                                            <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
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
                                    <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                           
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
    </div>
                
        
</div>
<!-- End of tablet and mobile  -->

    



              
                
                
               
 


















@endsection