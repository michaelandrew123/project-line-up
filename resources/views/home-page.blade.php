@extends('layouts.master')

@section('content')





<div>

    <div class="flex justify-evenly relative ">
        <div class="w-full mr-10  flex flex-col justify-between gap-4">

            <div class=" bg-lime-400  flex justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

            <div class=" bg-lime-400 w-full mr-10 flex justify-center items-center h-full">
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
                <h1 class="text-2xl font-bold pt-5 pb-5">
                    Starting Goalies
                </h1>
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
                <h1 class="text-2xl font-bold pt-5 pb-5">
                    Player News
                </h1>
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
                <h1 class="text-2xl font-bold pt-5 pb-5">
                    Projections
                </h1>
                <div class="flex md:flex-row">
                </div> 
                <div class="relative">
                    <a href="" class="text-black font-semibold flex justify-end"><p class="text-md font-bold">see all</p></a>
                </div>
            </div>
        </div>

        <div class="w-full ml-10  flex flex-col justify-between gap-4">

            <div class=" bg-lime-400  flex justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

            <div class=" bg-lime-400 w-full mr-10 flex justify-center items-center h-full">
                <h1 class="text-lg font-semibold text-center">ADDS</h1>
            </div>

        </div>

    </div>
</div>



















@endsection