@extends('layouts.master')

@section('content')


    <div class="flex flex-col">

        <div class="text-white bg-slate-700 flex  justify-evenly py-5">
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
                    <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">SIGN UP FOR FREE</a>
                </div>
            </div>

        </div>

        <div class="md:w-6/12 sm:w-10/12 smm-w-10-12 smm-flex smm-justify-center text-center m-auto text-black">
            <ul class="list-none flex gap-2  py-2 justify-center  ">
                <li><a href="#"> NHL</a></li>
                <li><a>Toronto Maple Leafs*</a></li>
                <li><a>Home</a></li>
                <li><a>News</a></li>
                <li><a>Stats</a></li>
                <li><a>Schedule</a></li>
            </ul>
        </div>

    </div>

    <div class=" text-center flex flex-row items-center justify-center  m-auto md:block sm:hidden">
        <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto"/>
        {{--ads--}}
        {{----}}
    </div>

    <div class="flex justify-center">
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
                    <div class="flex flex-row items-center p-4 rounded-b-lg bg-yellow-500 justify-center ">
                        <div class="flex flex-row gap-1 items-center justify-center ">
                            <div class="flex flex-row gap-1 items-center justify-center">
                                <h1 class="font-bold text-white text-center">MORNING SKATE</h1>
                                <p class="font-bold text-white text-center">(Updated July 25, 6:18am) </p>
                            </div>
                            <div>
                                <p class="text-white">Source:</p>
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
                    <div class="pb-2 flex flex-row gap-4 justify-center">
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
                    </div>  <!-- End First row -->
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
                            <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                                Buttton
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row items-center justify-center ">

                    <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
                    {{--ads--}}
                    {{----}}
                </div>
            </div>
        </div>
    </div>

@endsection