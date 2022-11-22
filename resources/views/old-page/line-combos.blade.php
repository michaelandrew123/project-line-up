@extends('layouts.master')

@section('content')


    <div class="flex flex-col smm-hidden">

        <div class="text-white bg-[#202e5b] flex  justify-evenly py-5">
            <div class="w-1/7 hidden">
                <img src="/admin.png" />
            </div>
            <div class="flex flex-col gap-y-3 py-2 md:w-1/3  smm-w-10-12">
                <div>
                    <h1 class="font-black text-3xl">Toronto Maple Leafs</h1>
                    <p>3rd In Atlantic, Division, 4th in Eastern Conference</p>
                </div>
                <hr>
                <p>Playoff Odds: 100.00% | Stanley Cup Odds: 0.00%</p>
            </div>
            <div class="text-center flex flex-col gap-y-3 px-5 py-2 bg-slate-800 w-1/3 hidden">
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
                    <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">SIGN UP FOR FREE</a>
                </div>
            </div>

        </div>

        

    </div>
    <div class="md:w-full  smm-flex smm-justify-center text-center m-auto text-black smm-hidden">
            <ul class="list-none flex gap-2  justify-center  ">
                <img class="w-7 h-6" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                <h1 class="text-base font-bold">Toronto Maple Leafs</h1>
                <li><a class="text-sm font-bold">News</a></li>
                <li><a class="text-sm font-bold">Schedule</a></li>
                <li><a class="text-sm font-bold">Odds</a></li>
            </ul>
        </div>

    <div class=" text-center flex flex-row items-center justify-center  m-auto md:block sm:hidden">
        <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto"/>
        {{--ads--}}
        {{----}}
    </div>

    <div class="flex justify-center smm-hidden">
        <div class="md:inline-flex gap-4">
            <div class="md:w-3/12 sm:w-10/12 smm-w-10-12 flex flex-row items-center justify-center smm-hidden  sm:m-auto">
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                {{--ads--}}
                {{----}}
            </div>
    
            <div class="md:w-5/12 sm:w-10/12 smm-w-10-12 md:m-0 sm:m-auto smm-m-auto">
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
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
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                            <div class="text-center font-bold">
                                <p>Pairing 1</p>
                            </div>
                        </div>
                    </div>  <!-- End First row -->
                </div><!-- End PRESS BOX -->
            </div>
            <div class="md:w-3/12 sm:w-10/12 smm-w-10-12 md:m-0 sm:m-auto smm-m-auto">
                <div class="my-4">
                    <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                        <h1 class="font-bold">INJURY REPORT</h1> &nbsp;
                    </div>
                    <div class="flex flex-col divide-y divide-slate-200 gap-y-3 mt-2">
                        <div class="flex flex-row space-x-5">
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
                        <div class="flex flex-row space-x-5">
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
                        <div class="flex flex-row space-x-5">
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
                        <div class="flex flex-row space-x-5">
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
                        <div class="flex flex-row space-x-5">
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
                        <div class="flex flex-row space-x-5">
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
                            <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">
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
    <!-- Mobile Design -->
    <div class="hidden smm-block">
        <div class="flex flex-col justify-center">
            <div class="md:w-full  smm-flex smm-justify-center text-center m-auto text-black">
                <div class="list-none flex flex-row gap-2 items-center">
                    <div>
                        <img class="w-12 h-10 border border-white rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    </div>
                    <div>
                        <p class="text-sm font-bold">Toronto Maple Leafs</p>
                    </div>
                    <div class="flex flex-row gap-1">
                        <li><a class="text-xs font-bold">News</a></li>
                        <li><a class="text-xs font-bold">Schedule</a></li>
                        <li><a class="text-xs font-bold">Odds</a></li>
                    </div>
                </div>
            </div>
           
            <div class="smm-block hidden mt-2">
                <div class="flex flex-row items-center justify-center gap-2">
                    <img  class="w-9 h-9" src="{{ asset('/images/menu-icon/twitter icon.png') }}" alt="">
                    <div>
                        <p class="text-xs">David Alter</p>
                        <p class="text-xs">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <h1 class="text-[10px] font-extrabold border border-gray p-3 ml-2 bg-slate-300 rounded-full">MORNING SKATE</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-center text-center mt-2">
            <div class="w-6/12 bg-black">
                <p class="text-white font-bold text-xs  p-3 ">FANTASY</p>
            </div>
            <div class=" w-6/12  bg-sky-400">
                <p class="text-white font-bold text-xs p-3 ">DFS SALARIES</p>
            </div>
        </div>
        
        
       
       <!-- Start First Row -->
        <div class="hidden smm-block">
                <h1 class="text-center text-sm font-bold">FORWARDS</h1>
            <div class="flex flex-row gap-1">
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">KERFOT</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3 my-0">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 mr-px" src="{{ asset('/images/menu-icon/cold icon.png') }}"alt="">
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MATTHEWS</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 ml-1" src="{{ asset('/images/menu-icon/gtd icon.png') }}"alt="">
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MARNER</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 ml-1" src="{{ asset('/images/menu-icon/hot icon.png') }}"alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-1 mt-px">
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">KERFOT</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 ml-1" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MATTHEWS</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 ml-1" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MARNER</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5 ml-1" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}"alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-1 mt-px">
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">KERFOT</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p> 
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MATTHEWS</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p> 
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MARNER</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-1 mt-px">
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">KERFOT</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                       
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MATTHEWS</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                       
                    </div>
                </div>
                <div class="bg-slate-100 p-2 rounded-xl">
                    <p class="text-center">MARNER</p>
                    <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                    <div class="flex flex-row items-center justify-evenly mt-3">
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                        <p class="text-sm">8500</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End of First Row -->
        <div class=" flex flex-row items-center justify-center my-4">
            <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
            {{--ads--}}
            {{----}}
        </div>
        <!-- First Second Row -->
        <div class="flex flex-col justify-center ">
          <h1 class="text-center text-sm font-bold">DEFENCE</h1>
            <div class="flex justify-center">
                <div class="flex flex-row gap-1 mt-px w-9/12">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <div class="flex flex-row gap-1 mt-px w-9/12">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <div class="flex flex-row gap-1 mt-px w-9/12">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- End of Second Row -->
        <div>
            <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto">
        </div>
            <!-- First Third Row  -->
            <div>
                <h1 class="text-center text-sm font-bold">POWERPLAY 1</h1>
                <div class="flex flex-row gap-1 mt-px">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                <div class="flex flex-row gap-1 mt- w-9/12">
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Third Row -->
        <div class=" flex flex-row items-center justify-center my-4">
            <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
            {{--ads--}}
            {{----}}
        </div>
           <!--  third row -->
            <div>
                <h1 class="text-center text-sm font-bold">POWERPLAY 2</h1>
                <div class="flex flex-row gap-1 mt-px">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                        
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                <div class="flex flex-row gap-1 mt- w-9/12">
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End third row -->
            <!-- Fourth row -->
            <div>
                 <h1 class="text-center text-sm font-bold">GOALIES</h1>
                <div class="flex justify-center mt-2">
                    <div class="flex flex-row gap-1 mt-px w-9/12">
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MATTHEWS</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            
                            </div>
                        </div>
                        <div class="bg-slate-100 p-2 rounded-xl">
                            <p class="text-center">MARNER</p>
                            <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                            <div class="flex flex-row items-center justify-evenly mt-3">
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                                <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                <p class="text-sm">8500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End fourth row -->
            <div>
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto">
            </div>
            <!-- Fifth row -->
            <div>
              <h1 class="text-center text-sm font-bold">PRESSBOX</h1>
                <div class="flex flex-row gap-1">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3 my-0">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-1">
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">KERFOT</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3 my-0">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/gtd icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MATTHEWS</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/gtd icon.png') }}"alt="">
                        </div>
                    </div>
                    <div class="bg-slate-100 p-2 rounded-xl">
                        <p class="text-center">MARNER</p>
                        <img src ="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-40" alt="">
                        <div class="flex flex-row items-center justify-evenly mt-3">
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-5 h-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                            <p class="text-sm">8500</p>
                            <img class="w-4 h-4 mr-px" src="{{ asset('/images/menu-icon/gtd icon.png') }}"alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Fifth row -->
            <div class="flex flex-col justify-center ">
                <div class="flex flex-row gap-4">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">                       
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt="">                       
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">                      
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">                       
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">                       
                </div>
                <div class="flex flex-row">
                    <p class="text-sm font-bold"> Game Time Decision </p>
                    <p> Injured </p>
                    <p> Hot Streak </p>
                    <p> Cold player </p>
                    <p> Value Player </p>
                    <p> Top slack </p>
                </div>
            </div>
    </div>

@endsection