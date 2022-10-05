<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')


    <style>


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

        html {
            font-size: 16px;
            @screen md {
                font-size: 17px;
            }
            @screen lg {
                font-size: 26px;
            }
        }
    
        .active{
            display: flex;
        }
        .deactive{
            display:none;
        }
        @media (max-width: 639px) {
            .smm-flex{
                display: flex;

            }
            .smm-flex-row{
                flex-direction: row;
            }


            .smm-flex-row-reverse{flex-direction: row-reverse;}

            .smm-flex-col{
                flex-direction: column;
            }
            .smm-justify-start	{
                justify-content: flex-start
            }
            .smm-justify-end	{justify-content: flex-end}
            .smm-justify-center	{justify-content: center}
            .smm-justify-between	{justify-content: space-between}
            .smm-justify-around	{justify-content: space-around}
            .smm-justify-evenly	{justify-content: space-evenly}
            .smm-items-center	{align-items: center}
            .smm-items-start{ align-items: flex-start;}
            .smm-block	{display: block;}
            .smm-hidden	{display: none;}
            .smm-flex-wrap	{flex-wrap: wrap;}



            .smm-static	{position: static}
            .smm-fixed	{position: fixed}
            .smm-absolute	{position: absolute}
            .smm-relative	{position: relative}
            .smm-sticky	{position: sticky}

            .smm-gap-2 { gap: 0.5rem; }







            .smm-w-1-12	{ width: 8.333333%;}
            .smm-w-2-12	{ width: 16.666667%;}
            .smm-w-3-12	{ width: 25%;}
            .smm-w-4-12 {	width: 33.333333%;}
            .smm-w-5-12	{ width: 41.666667%;}
            .smm-w-6-12	{ width: 50%;}
            .smm-w-7-12	{ width: 58.333333%;}
            .smm-w-8-12	{ width: 66.666667%;}
            .smm-w-9-12	{ width: 75%;}
            .smm-w-10-12{	width: 83.333333%;}
            .smm-w-11-12{	width: 91.666667%;}
            .smm-w-full	{width: 100%;}
            .smm-p-0{padding: 0px;}

        }
    </style>
</head>
<body>


<nav class="bg-white shadow-lg shadow-[#ececec] w-full">





    <div class="md:flex md:flex-col sm:block">


<div class="sm:relative">

        <div class="md:flex xl:flex-row lg:flex-col-reverse lg:pt-6 md:flex-col-reverse md:pt-6 sm:block sm:py-1 items-center justify-between sm:flex-wrap bg-current px-6 ">



            <div class="flex sm:flex-row-reverse  md:flex-row md:items-center sm:items-center sm:justify-end sm:gap-2 smm-flex-row-reverse smm-flex-row-reverse smm-justify-end  smm-items-center smm-gap-2">

                <div>

                    <div class="flex items-center flex-shrink-0 text-white mr-6">
                        <img src = "{{ asset('/images/logo.png') }}" class="w-16" />
                        <span class="font-semibold text-xl tracking-tight hidden">Line Ups</span>
                    </div>
                </div>


                <div class="md:flex md:items-center sm:h-full sm:relative md:h-14 md:leading-13 relative main-menu  md:block">


                    <div class="block lg:hidden md:hidden">
                        <button id="main-menu-mobile" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>



                    <div class="  md:block  sm:hidden smm-hidden">

                        <a href="#responsive-header" rel="menu-nhl"  class="  sm:leading-loose md:leading-13 sm:block sm:mt-0 no-underline h-full block mt-4 md:mt-0 md:inline-block lg:mt-0  pr-4  md:text-slate-300  hover:text-white  font-bold">
                            NHL
                            <div class="relative bottom--4 hidden"  >
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>
                        <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 h-full block  mt-4 md:inline-block lg:mt-0 md:mt-0  pr-4 relative md:text-slate-300  hover:text-white font-bold">
                            STARTING GOALIES

                            <div class="relative bottom--4 hidden">
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>
                        <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300  hover:text-white font-bold">
                            LINE COMBINATIONS

                            <div class="relative bottom--4  hidden">
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>
                        <a href="#responsive-header " class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300  hover:text-white font-bold">
                            DFS PROJECTIONS

                            <div class="relative bottom--4  hidden">
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>
                        <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300  hover:text-white font-bold">
                            ODDS

                            <div class="relative bottom--4 hidden">
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>
                        <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold pr-4">
                            SHOP

                            <div class="relative bottom--4 hidden">
                                <div class="arrowed">
                                    <div class="arrow-3"></div>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>

            </div>

            <div class="w-full md:block sm:hidden smm-hidden flex-grow md:items-center  lg:items-center lg:w-auto">
                <div class="flex flex-row justify-end md:justify-center items-center gap-2">
                    <div class="flex flex-row justify-center items-center relative">
                        <div>
                            <input type="text" name="search" id="search" class="px-3 py-1 border-1 rounded-md"/>
                        </div>
                        <div class="absolute right-0 top-0">
                            <img src = "{{ asset('/images/search.png') }}" class=" text-white w-8" />
                        </div>
                    </div>
                    <div>
                        <a href="#" class="uppercase inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0 lg:mt-0">
                            SIGN UP FOR FREE
                        </a>
                    </div>
                </div>
            </div>
        </div>


<!--Mobile menu -->



    <div style="background-color: white;" class="md:block md:flex sm:flex sm:flex-row sm:absolute smm-absolute sm:bg-white w-full border-b-2 border-gray-200 smm-flex smm-flex-row "  id="list-menu">


        <div class="md:hidden sm:block px-2  border-r-2 border-gray-200" >

            <a href="#responsive-header" rel="menu-nhl"  class="  sm:leading-loose md:leading-13 sm:block sm:mt-0 no-underline block mt-4 md:mt-0 md:inline-block lg:mt-0  pr-4  md:text-slate-300  hover:text-black  hover:font-bold">
                NHL
                <div class="relative bottom--4 hidden"  >
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>
            <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 block  mt-4 md:inline-block lg:mt-0 md:mt-0  pr-4 relative md:text-slate-300  hover:text-black  hover:font-bold">
                STARTING GOALIES

                <div class="relative bottom--4 hidden">
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>
            <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300  hover:text-black  hover:font-bold">
                LINE COMBINATIONS

                <div class="relative bottom--4  hidden">
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>
            <a href="#responsive-header " class="sm:leading-loose sm:block sm:mt-0 block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300 hover:text-black  hover:font-bold">
                DFS PROJECTIONS

                <div class="relative bottom--4  hidden">
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>
            <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 block mt-4 md:inline-block lg:mt-0 md:mt-0 pr-4 relative md:text-slate-300 hover:text-black  hover:font-bold">
                ODDS

                <div class="relative bottom--4 hidden">
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>
            <a href="#responsive-header" class="sm:leading-loose sm:block sm:mt-0 block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-black  hover:font-bold pr-4">
                SHOP

                <div class="relative bottom--4 hidden">
                    <div class="arrowed">
                        <div class="arrow-3"></div>
                    </div>
                </div>
            </a>

        </div>

        <div class="md:hidden sm:block md:relative" id="sub-menu">
            <ul class="justify-start md:absolute list-none  flex-col sm:items-start items-center gap-2 py-2 nhl active sm:flex-wrap smm-flex-wrap smm-items-start px-2">

                <li><a  class="hover:font-bold"  href="#">STARTING GOALIES</a></li>
                <li><a  class="hover:font-bold" >LINE COMBINATIONS</a></li>
                <li><a  class="hover:font-bold" >DFS PROJECTIONS</a></li>
                <li><a  class="hover:font-bold" >TODAYS GAMES</a></li>
                <li><a  class="hover:font-bold" >TEAM STANDINGS</a></li>
                <li><a  class="hover:font-bold" >PLAYER STATS</a></li>
                <li><a  class="hover:font-bold" >ODDS</a></li>
                <li><a  class="hover:font-bold" >NEWS FEED</a></li>
                <li><a  class="hover:font-bold" >SCHEDULE</a></li>
            </ul>

            <ul class="justify-start list-none md:flex-col gap-2 py-2 starting-goalies hidden  smm-flex-wrap">
            </ul>
            <ul class="justify-start list-none md:flex-col gap-2 py-2 line-combinations hidden smm-flex-wrap">

                <li ><a class="hover:font-bold" href="#">(DISPLAY TEAM LOGOS)</a></li>
            </ul>

            <ul class="justify-start list-none md:flex-col gap-2 py-2 dfs-projections hidden smm-flex-wrap">

                <li><a class="hover:font-bold" href="#">DRAFTKINGS</a></li>
                <li><a class="hover:font-bold" href="#">FANDUEL</a></li>
            </ul>

            <ul class="justify-start list-none md:flex-col gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap">
                <li ><a  class="hover:font-bold" href="#">NHL</a></li>
                <li ><a  class="hover:font-bold" href="#">NBA</a></li>
                <li ><a  class="hover:font-bold" href="#">NFL</a></li>
                <li ><a  class="hover:font-bold" href="#">MLB</a></li>
                <li ><a  class="hover:font-bold" href="#">SOCCER</a></li>
                <li ><a  class="hover:font-bold" href="#">SPORTSBOOKS</a></li>
            </ul>


            <ul class="justify-start list-none flex gap-2 py-2 shop hidden sm:flex-wrap ">

            </ul>
        </div>






    </div>

    <!--End Mobile menu -->

    </div>




        <div class="w-4/5 m-auto lg:block md:hidden sm:hidden smm-hidden" id="sub-menu">
            <ul class="list-none flex-row justify-center items-center gap-2 py-2 nhl hidden active sm:flex-wrap smm-flex-wrap">

                <li><a  class="hover:font-bold"  href="#">STARTING GOALIES</a></li>
                <li><a  class="hover:font-bold" >LINE COMBINATIONS</a></li>
                <li><a  class="hover:font-bold" >DFS PROJECTIONS</a></li>
                <li><a  class="hover:font-bold" >TODAYS GAMES</a></li>
                <li><a  class="hover:font-bold" >TEAM STANDINGS</a></li>
                <li><a  class="hover:font-bold" >PLAYER STATS</a></li>
                <li><a  class="hover:font-bold" >ODDS</a></li>
                <li><a  class="hover:font-bold" >NEWS FEED</a></li>
                <li><a  class="hover:font-bold" >SCHEDULE</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 starting-goalies hidden  smm-flex-wrap">
            </ul>
            <ul class="list-none flex-row gap-2 py-2 line-combinations hidden smm-flex-wrap">

                <li ><a class="hover:font-bold" href="#">(DISPLAY TEAM LOGOS)</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 dfs-projections hidden smm-flex-wrap">

                <li><a class="hover:font-bold" href="#">DRAFTKINGS</a></li>
                <li><a class="hover:font-bold" href="#">FANDUEL</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap">
                <li ><a  class="hover:font-bold" href="#">NHL</a></li>
                <li ><a  class="hover:font-bold" href="#">NBA</a></li>
                <li ><a  class="hover:font-bold" href="#">NFL</a></li>
                <li ><a  class="hover:font-bold" href="#">MLB</a></li>
                <li ><a  class="hover:font-bold" href="#">SOCCER</a></li>
                <li ><a  class="hover:font-bold" href="#">SPORTSBOOKS</a></li>
            </ul>


            <ul class="list-none flex gap-2 py-2 shop hidden sm:flex-wrap ">

            </ul>
        </div>


    </div>









</nav>

<div class="flex flex-col">

    <div class="text-white bg-slate-700 flex  justify-evenly py-5">
        <div class="w-1/7 hidden">
            <img src="/admin.png" />
        </div>
        <div class="flex flex-col gap-y-3 py-2 md:w-1/3 sm:w-10/12 smm-w-10-12">
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

<div class="md:w-6/12 sm:w-10/12 smm-w-10-12 h-25 text-center flex flex-row items-center justify-center  m-auto md:block sm:hidden">
    <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" />
    {{--ads--}}
    {{----}}
</div>


<!--body content -->

<div class="flex md:flex-row md:justify-evenly sm:flex-col smm-flex-col sm:justify-center sm:items-center smm-items-center">

    <div class="md:w-3/12 sm:w-10/12 smm-w-10-12 flex flex-row items-center justify-center smm-hidden">
        <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
        {{--ads--}}
        {{----}}
    </div>


        <div class="md:w-5/12 sm:w-10/12 smm-w-10-12">
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

                    <div class="flex flex-row justify-center items-center">
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

                        <div class="text-center">
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

                    <div class="flex flex-row justify-center items-center invisible">
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
                    <div class="text-center invisible">
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

                    <div class="flex flex-row justify-center items-center invisible">
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




        <div class=" flex flex-row items-center justify-center   my-4">
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

                    <div class="flex flex-row justify-center items-center">
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

                    <div class="flex flex-row justify-center items-center">
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
                    <div class="text-center">
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

                    <div class="flex flex-row justify-center items-center">
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
                    <div class="text-center">
                        <p>Pairing 1</p>
                    </div>
                </div>
            </div>  <!-- End First row -->
        </div><!-- End PRESS BOX -->
    </div>

    <div class="md:w-3/12 sm:w-10/12 smm-w-10-12 my-4">
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



        <div class=" flex flex-row items-center justify-center ">

            <img src="https://tpc.googlesyndication.com/daca_images/simgad/9745768358543156588" />
            {{--ads--}}
            {{----}}
        </div>




    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    // let headers = new Headers();
    //
    // headers.append('Content-Type', 'application/json');
    // headers.append('Accept', 'application/json');
    // headers.append('Authorization', 'Basic ' + base64.encode(username + ":" +  password));
    // headers.append('Origin','http://localhost:3000');
    //
    // fetch('https://example.com/movies.json', function(){
    //     mode: 'cors',
    //         credentials: 'include',
    //         method: 'POST',
    //         headers: headers
    //
    //
    // })
    //     .then((response) => response.json())
    // .then((data) => console.log(data));
    //


    $( "div.main-menu > div > a" ).mouseover(function() {
        $("div.main-menu > div > a > div").addClass('md:hidden');
        $( this ).find('div').removeClass('md:hidden');

        var data = $(this).text();

        var arrayData = data.replace(/\s{2,}/g, ' ').split(' ');

        var arrayDataCombine='';
        var j = 0;

        for(var i = 0; i < arrayData.length; i++){
            if(arrayData[i] != '' && arrayData[i] != ' '){
                if(arrayData[i] != undefined){

                    if(i == 1){
                        arrayDataCombine = arrayData[i].toLowerCase();
                    }else{
                        arrayDataCombine += "-" + arrayData[i].toLowerCase();
                    }
                }
            }

        }

        $('#sub-menu > ul.active').removeClass('active');
        $('.'+arrayDataCombine).addClass('active');


    });

    $('#main-menu-mobile').on('touchstart', function(){
        $('#list-menu').toggleClass('sm:hidden smm-hidden');
    })

</script>


</body>
</html>