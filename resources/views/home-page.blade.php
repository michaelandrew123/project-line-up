@extends('layouts.master')

@section('content')





<div>

    <div class="flex justify-evenly relative ">
        <div class="w-full lg:mr-1  flex flex-col justify-between gap-4">

            <div class=" bg-lime-400  flex  mr-10 lg:mr-5 justify-center items-center  h-full ">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

            <div class=" bg-lime-400 mr-10 lg:mr-5 flex  justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

        </div>
        <div class="flex flex-col">

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
                    <a href="" class="text-black font-semibold flex justify-end"><p class="text-md font-bold">see all</p></a>
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
                    <a href="" class="text-black font-semibold flex justify-end"><p class="text-md font-bold">see all</p></a>
                </div>
            </div>

            <div class="flex flex-col  ">
            <div class="flex items-center">
                    <img class="w-14 h-14" src="{{ asset('/images/home-page/graph-logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        Projections
                     </h1>
                </div>
                <div class="flex md:flex-row">
                </div> 
                <div class="table">
                <table style="border-collapse: collapse; border: 1px solid black;">
                    <tr >
                        <th style="border: 1px solid black;">First</th>
                        <th style="border: 1px solid black;">Last</th>
                        <th style="border: 1px solid black;">Pos</th>
                        <th style="border: 1px solid black;">Team</th>
                        <th style="border: 1px solid black;">Opp</th>
                        <th style="border: 1px solid black;">Start/line</th>
                        <th style="border: 1px solid black;">PP Unit</th>
                        <th style="border: 1px solid black;">Goals</th>
                        <th style="border: 1px solid black;">Win%</th>
                        <th style="border: 1px solid black;">DK Salary</th>
                        <th style="border: 1px solid black;">DK PROJ</th>
                        <th style="border: 1px solid black;">FD Salary</th>
                        <th style="border: 1px solid black;">FD PROJ</th>
                        
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Auston</td>
                        <td style="border: 1px solid black;">Mathew</td>
                        <td style="border: 1px solid black;">C</td>
                        <td style="border: 1px solid black;">TQR</td>
                        <td style="border: 1px solid black;">@ DET</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.73</td>
                        <td style="border: 1px solid black;">63.2</td>
                        <td style="border: 1px solid black;">9200</td>
                        <td style="border: 1px solid black;">29.4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Jonathan</td>
                        <td style="border: 1px solid black;">Huberdaeu</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">FLA</td>
                        <td style="border: 1px solid black;">vs. EDM</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">4.19</td>
                        <td style="border: 1px solid black;">67.5</td>
                        <td style="border: 1px solid black;">7100</td>
                        <td style="border: 1px solid black;">25.39</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Alexander</td>
                        <td style="border: 1px solid black;">Barkov</td>
                        <td style="border: 1px solid black;">C</td>
                        <td style="border: 1px solid black;">FLA</td>
                        <td style="border: 1px solid black;">vs. EDM</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">4.19</td>
                        <td style="border: 1px solid black;">67.5</td>
                        <td style="border: 1px solid black;">7500</td>
                        <td style="border: 1px solid black;">25.15</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Nathan</td>
                        <td style="border: 1px solid black;">Mackinnon</td>
                        <td style="border: 1px solid black;">C</td>
                        <td style="border: 1px solid black;">COL</td>
                        <td style="border: 1px solid black;">@ JVK</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.27</td>
                        <td style="border: 1px solid black;">58.3</td>
                        <td style="border: 1px solid black;">8700</td>
                        <td style="border: 1px solid black;">23.68</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Charlie</td>
                        <td style="border: 1px solid black;">McAvoy</td>
                        <td style="border: 1px solid black;">D</td>
                        <td style="border: 1px solid black;">BOS</td>
                        <td style="border: 1px solid black;">@ SJ</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.05</td>
                        <td style="border: 1px solid black;">60</td>
                        <td style="border: 1px solid black;">5900</td>
                        <td style="border: 1px solid black;">10.44</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Sam</td>
                        <td style="border: 1px solid black;">Reinhart</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">FLA</td>
                        <td style="border: 1px solid black;">vs.EDM</td>
                        <td style="border: 1px solid black;">3</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">4.19</td>
                        <td style="border: 1px solid black;">67.5</td>
                        <td style="border: 1px solid black;">5000</td>
                        <td style="border: 1px solid black;">21.26</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Mikko</td>
                        <td style="border: 1px solid black;">Rantanen</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">COL</td>
                        <td style="border: 1px solid black;">@ VGK</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">3.27</td>
                        <td style="border: 1px solid black;">58.3</td>
                        <td style="border: 1px solid black;">5000</td>
                        <td style="border: 1px solid black;">20.18</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Sam</td>
                        <td style="border: 1px solid black;">Bennet</td>
                        <td style="border: 1px solid black;">C</td>
                        <td style="border: 1px solid black;">FLA</td>
                        <td style="border: 1px solid black;">vs.EDM</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">4.19</td>
                        <td style="border: 1px solid black;">67.5</td>
                        <td style="border: 1px solid black;">4500</td>
                        <td style="border: 1px solid black;">8.04</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Matt</td>
                        <td style="border: 1px solid black;">Grzelcyk</td>
                        <td style="border: 1px solid black;">D</td>
                        <td style="border: 1px solid black;">BOS</td>
                        <td style="border: 1px solid black;">@ SJ</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.05</td>
                        <td style="border: 1px solid black;">60</td>
                        <td style="border: 1px solid black;">8000</td>
                        <td style="border: 1px solid black;">19.7</td>
                      
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Mitche</td>
                        <td style="border: 1px solid black;">Mamer</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">TOR</td>
                        <td style="border: 1px solid black;">@ DET</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.73</td>
                        <td style="border: 1px solid black;">63.2</td>
                        <td style="border: 1px solid black;">8300</td>
                        <td style="border: 1px solid black;">18.35</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Alex</td>
                        <td style="border: 1px solid black;">Overchkin</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">WSH</td>
                        <td style="border: 1px solid black;">@ PHI</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.36</td>
                        <td style="border: 1px solid black;">60.8</td>
                        <td style="border: 1px solid black;">7200</td>
                        <td style="border: 1px solid black;">18.34</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">John</td>
                        <td style="border: 1px solid black;">Gaudreu</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">CGY</td>
                        <td style="border: 1px solid black;">vs. MIN</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.32</td>
                        <td style="border: 1px solid black;">59.8</td>
                        <td style="border: 1px solid black;">8700</td>
                        <td style="border: 1px solid black;">18.33</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Nikita</td>
                        <td style="border: 1px solid black;">Kusherov</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">TB</td>
                        <td style="border: 1px solid black;">@ NSH</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.34</td>
                        <td style="border: 1px solid black;">60.2</td>
                        <td style="border: 1px solid black;">7200</td>
                        <td style="border: 1px solid black;">18.24</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Nazem</td>
                        <td style="border: 1px solid black;">Kadri</td>
                        <td style="border: 1px solid black;">C</td>
                        <td style="border: 1px solid black;">COL</td>
                        <td style="border: 1px solid black;">@ VJK</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.27</td>
                        <td style="border: 1px solid black;">58.3</td>
                        <td style="border: 1px solid black;">6500</td>
                        <td style="border: 1px solid black;">18.1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Brady</td>
                        <td style="border: 1px solid black;">Tkachuk</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">OTT</td>
                        <td style="border: 1px solid black;">vs. MTL</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.45</td>
                        <td style="border: 1px solid black;">36.6</td>
                        <td style="border: 1px solid black;">6400</td>
                        <td style="border: 1px solid black;">18.7</td>
                        
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Gabriel</td>
                        <td style="border: 1px solid black;">Landeskog</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">COL</td>
                        <td style="border: 1px solid black;">@ VJK</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.27</td>
                        <td style="border: 1px solid black;">58.3</td>
                        <td style="border: 1px solid black;">8300</td>
                        <td style="border: 1px solid black;">18.2</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">David</td>
                        <td style="border: 1px solid black;">Pastmak</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">BOS</td>
                        <td style="border: 1px solid black;">@ SJ</td>
                        <td style="border: 1px solid black;">2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.05</td>
                        <td style="border: 1px solid black;">60</td>
                        <td style="border: 1px solid black;">6100</td>
                        <td style="border: 1px solid black;">17.85</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">William</td>
                        <td style="border: 1px solid black;">Nylander</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">TOR</td>
                        <td style="border: 1px solid black;">@ DET</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.73</td>
                        <td style="border: 1px solid black;">63.2</td>
                        <td style="border: 1px solid black;">6300</td>
                        <td style="border: 1px solid black;">17.4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Mathew</td>
                        <td style="border: 1px solid black;">Tkachuk</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">CGY</td>
                        <td style="border: 1px solid black;">vs. MIN</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.32</td>
                        <td style="border: 1px solid black;">59.8</td>
                        <td style="border: 1px solid black;">8700</td>
                        <td style="border: 1px solid black;">17.21</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Kirill</td>
                        <td style="border: 1px solid black;">Kaprizov</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">MIN</td>
                        <td style="border: 1px solid black;">@ CGY</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">2.68</td>
                        <td style="border: 1px solid black;">40.2</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black;">Brad</td>
                        <td style="border: 1px solid black;">Marchand</td>
                        <td style="border: 1px solid black;">W</td>
                        <td style="border: 1px solid black;">BOS</td>
                        <td style="border: 1px solid black;">@ SJ</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">3.05</td>
                        <td style="border: 1px solid black;">60</td>
                        <td style="border: 1px solid black;">1</td>
                        <td style="border: 1px solid black;">1</td>
                    </tr>

                </table>

                </div>
                
                
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end"><p class="text-md font-bold">see all</p></a>
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

        </div>
    </div>
    
</div>



















@endsection