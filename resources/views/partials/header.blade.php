


<nav class="bg-white shadow-lg shadow-[#ececec] w-full">





    <div class="md:flex md:flex-col sm:block">


        <div class="sm:relative md:flex md:justify-center  bg-current z-30">

            <div class="md:flex xl:flex-row lg:flex-col-reverse lg:pt-6 md:flex-col-reverse md:pt-6 sm:block sm:py-1 items-center justify-between sm:flex-wrap bg-current px-3 sm:px-3">



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



            <div style="background-color: white;" class="md:block md:flex sm:flex sm:flex-row sm:absolute smm-absolute sm:bg-white w-full border-b-2 border-gray-200 smm-flex smm-flex-row pb-2"  id="list-menu">


                <div class="md:hidden sm:block px-2  border-r-2 border-gray-200" id="mobile-smm-menu">




                    <a href="#responsive-header" rel="search-bar"  class="  sm:leading-loose md:leading-13 sm:block sm:mt-4 no-underline block mt-4 md:mt-0 md:inline-block lg:mt-0  md:text-slate-300  ">

                        <img src = "{{ asset('/images/search.png') }}" class="w-5 m-auto" />
                        <div class="relative bottom--4 hidden"  >
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>

                    <a href="#responsive-header" rel="nhl"  class="  sm:leading-loose md:leading-13 sm:block sm:mt-4 no-underline block mt-4 md:mt-0 md:inline-block lg:mt-0  md:text-slate-300  ">
                        <img src = "{{ asset('/images/menu-icon/icons8-nfl-50.png') }}" class="w-5 m-auto" />

                        <div class="relative bottom--4 hidden"  >
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#responsive-header" rel="starting-goalies" class="sm:leading-loose sm:block sm:mt-4 block  mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                        <img src = "{{ asset('/images/menu-icon/icons8-goals-64.png') }}" class="w-5 m-auto" />

                        <div class="relative bottom--4 hidden">
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#responsive-header" rel="line-combinations" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                        <img src = "{{ asset('/images/menu-icon/icons8-combination-32.png') }}" class="w-5 m-auto" />
                        <div class="relative bottom--4  hidden">
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#responsive-header" rel="dfs-projections" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300 ">
                        <img src = "{{ asset('/images/menu-icon/icons8-project-management-24.png') }}" class="w-5 m-auto" />

                        <div class="relative bottom--4  hidden">
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#responsive-header" rel="odds" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                        ODDS

                        <div class="relative bottom--4 hidden">
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#responsive-header" rel="shop" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative  ">
                        <img src = "{{ asset('/images/menu-icon/icons8-department-shop-24.png') }}" class="w-5 m-auto" />

                        <div class="relative bottom--4 hidden">
                            <div class="arrowed">
                                <div class="arrow-3"></div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="md:hidden sm:block md:relative" id="sub-menu">
                    <ul class="justify-start md:absolute list-none  flex-col sm:items-start items-center gap-2 py-2 nhl hidden active sm:flex-wrap smm-flex-wrap smm-items-start px-2">

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

                    <ul class="justify-start list-none  flex-col gap-2 py-2 starting-goalies hidden  smm-flex-wrap smm-items-start p-2">
                    </ul>
                    <ul class="justify-start list-none  flex-col gap-2 py-2 line-combinations hidden smm-flex-wrap p-2">

                        <li ><a class="hover:font-bold" href="#">(DISPLAY TEAM LOGOS)</a></li>
                    </ul>

                    <ul class="justify-start list-none flex-col gap-2 py-2 dfs-projections hidden smm-flex-wrap smm-items-start p-2">

                        <li><a class="hover:font-bold" href="#">DRAFTKINGS</a></li>
                        <li><a class="hover:font-bold" href="#">FANDUEL</a></li>
                    </ul>

                    <ul class="justify-start list-none flex-col gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap smm-items-start p-2">
                        <li ><a  class="hover:font-bold" href="#">NHL</a></li>
                        <li ><a  class="hover:font-bold" href="#">NBA</a></li>
                        <li ><a  class="hover:font-bold" href="#">NFL</a></li>
                        <li ><a  class="hover:font-bold" href="#">MLB</a></li>
                        <li ><a  class="hover:font-bold" href="#">SOCCER</a></li>
                        <li ><a  class="hover:font-bold" href="#">SPORTSBOOKS</a></li>
                    </ul>


                    <ul class="justify-start list-none flex gap-2 py-2 shop hidden sm:flex-wrap smm-items-start p-2">

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