<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')


    <style>

        .arrow {
            margin: 25px;
        }

        .is-top {


        }
        .is-triangle{

        }
        /* Arrow holder */
        .arrowed {
            position: relative;
            /*height: 200px; width: 200px;*/
            /*margin: 0 20px 20px 0;*/
            /*border: 1px solid rgba(0,0,0,0.25);*/
        }

        /* Just centering the examples */
        .arrowed div {
            position: absolute;
            top: 0; bottom: 0; left: 0; right: 0;
            margin: auto;
        }
        /* -- ARROW 3      -- */

        .arrow-3 {
            height: 0px; width: 0px;
            border: 8px solid;
            border-color: white white #f7f7f700 transparent;
            transform: rotate(-45deg);
        }
        .leading-12{
            line-height: 3rem;
        }
        .leading-13{
            line-height: 3.5rem;
        }
        .bottom--4{
            bottom: -4px;
        }
    </style>
</head>
<body>


<nav class="bg-white shadow-lg shadow-[#ececec] w-full">



    <div class="flex flex-row items-center justify-between flex-wrap bg-current px-6">


        <div class="flex flex-row items-center">

            <div>

                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <img src = "{{ asset('/images/logo.png') }}" class="w-16"/>
                    <span class="font-semibold text-xl tracking-tight">Line Ups</span>
                </div>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>

            </div>


            <div class="h-14 leading-13">



                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4 relative">
                    NFL
                    <div class="absolute bottom--4">
                        <div class="arrowed">
                            <div class="arrow-3"></div>
                        </div>
                    </div>
                </a>


                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    NBA
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    MLB
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    NHL
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Horse Racing
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
                    More
                </a>



                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-5">
                    oddsFire
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
                    Questions
                </a>
                <a href="#responsive-header" class="h-full block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white ">
                    PREMIUM
                </a>
            </div>

        </div>

        <div class="w-full block flex-grow   lg:items-center lg:w-auto">
            <div class="flex flex-row justify-end items-center gap-2">
                <div class="flex flex-row justify-center items-center relative">
                    <div>
                        <input type="text" name="search" id="search" class="px-3 py-1 border-1 rounded-md"/>
                    </div>
                    <div class="absolute right-0 top-0">
                        <img src = "{{ asset('/images/search.png') }}" class=" text-white w-8" />
                    </div>
                </div>
                <div>
                    <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                        SIGN UP FOR FREE
                    </a>
                </div>
            </div>
        </div>

    </div>









    <div class="w-4/5 m-auto">
        <ul class="list-none flex gap-2  py-2">

            <li><a href="#">News</a></li>
            <li><a>Projections</a></li>
            <li><a>Daily Fantasy</a></li>
            <li><a>NHL Odds</a></li>
            <li><a>Rankings</a></li>
            <li><a>Questions</a></li>
            <li><a>Players</a></li>
            <li><a>Teams</a></li>
        </ul>


    </div>

</nav>

<div class="flex flex-col">

    <div class="text-white bg-slate-700 flex  justify-evenly py-5">
        <div class="w-1/7 hidden">
            <img src="/admin.png" />
        </div>
        <div class="flex flex-col gap-y-3 py-2 w-1/3">
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

    <div class="w-6/12 m-auto text-black">
        <ul class="list-none flex gap-2  py-2">
            <li><a href="#"> < NHL</a></li>
            <li><a>Toronto Maple Leafs*</a></li>
            <li><a>Home</a></li>
            <li><a>News</a></li>
            <li><a>Stats</a></li>
            <li><a>Schedule</a></li>
        </ul>
    </div>

</div>

<div class="w-6/12 h-25 flex flex-row items-center justify-center bg-emerald-300 m-auto">
    Ads image
    {{--ads--}}
    {{----}}
</div>


<div class="flex justify-evenly">

    <div class=w-3/12" flex flex-row items-center justify-center bg-emerald-300">
        Ads image
        {{--ads--}}
        {{----}}
    </div>


    <div class="w-5/12">
        <div class="divide-y divide-slate-200 my-4">
            <div class="flex flex-row items-center justify-center p-lg-3 bg-slate-700 text-white py-4 rounded-t-lg">
                <h1 class="font-bold">LINE COMBINATIONS</h1> &nbsp;
                <span class="text-xs"> Updated: Jul 25 (6:18am)</span>
            </div>

            <!-- Start First row -->
            <div class="pb-2 flex flex-row gap-4 justify-center">
                <div class=" mt-4">

                    <div class="flex flex-row justify-center items-center">
                        <p>FORWARD</p>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="p-4 ">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4 ">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4 ">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center invisible">
                        <p>Line 1</p>
                    </div>
                </div>
                <div class=" mt-4">

                        <div class="text-center">
                            <p>DEFENCE</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 ">
                            <div class="p-4 ">
                                <h3 class="capitalize">Mctavish</h3>
                                <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                            </div>
                            <div class="p-4 ">
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
                <div >

                    <div class="grid grid-cols-3 gap-4">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center invisible">
                        <p>Line 2</p>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 ">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>
                    <div class="text-center invisible">
                        <p>Pairing 2</p>
                    </div>
                </div>
            </div> <!-- End Second row -->

            <!-- Start Third row -->
            <div class="pb-2 flex flex-row gap-4 justify-center" >
                <div >

                    <div class="grid grid-cols-3 gap-4">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center invisible">
                        <p>Line 3</p>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 ">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
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
                <div >

                    <div class="grid grid-cols-3 gap-4">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
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
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>
                    <div class="text-center invisible">
                        <p>Goalies</p>
                    </div>
                </div>
            </div>  <!-- End Fourth row -->


            <div class="flex flex-row items-center p-4 rounded-b-lg bg-yellow-500 justify-center ">


                <div class="flex flex-row gap-1 items-center justify-center ">
                    <h1 class="font-bold text-white text-center">MORNING SKATE</h1>
                    <p class="font-bold text-white text-center">(Updated July 25, 6:18am)</p>
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
        </div>




        <div class=" flex flex-row items-center justify-center bg-emerald-300 my-4">
            Ads image
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
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center">
                        <p>Line 1</p>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 ">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>
                    <div class="text-center">
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
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center">
                        <p>Line 1</p>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 ">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>
                    <div class="text-center">
                        <p>Pairing 1</p>
                    </div>
                </div>
            </div>  <!-- End First row -->
        </div><!-- End POWER PLAY 2 -->

        <div class=" flex flex-row items-center justify-center bg-emerald-300  my-4">
            Ads image
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
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center items-center">
                        <p>Line 1</p>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 ">
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                        <div class="p-4">
                            <h3 class="capitalize">Mctavish</h3>
                            <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                        </div>
                    </div>
                    <div class="text-center">
                        <p>Pairing 1</p>
                    </div>
                </div>
            </div>  <!-- End First row -->
        </div><!-- End PRESS BOX -->
    </div>

    <div class="w-3/12 my-4">
        <div>
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



        <div class=" flex flex-row items-center justify-center bg-emerald-300">
            Ads image
            {{--ads--}}
            {{----}}
        </div>




    </div>

</div>

</body>
</html>