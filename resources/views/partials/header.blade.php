


<nav class="bg-white shadow-lg shadow-[#ececec] w-full">
    <div class="md:flex md:flex-col sm:block">
        <div class="sm:relative md:flex md:justify-center z-30">
            <!--Desktop menu and Tablet--> 
            <div class="w-full flex-row lg:flex lg:flex-row md:pt-2 sm:py-1 items-center sm:flex-wrap sm:px-0 sm:hidden smm-hidden">
                <div class="lg:w-7/12 w-full bg-current lg:gap-3  flex sm:flex-row-reverse md:flex-row md:items-center sm:items-center sm:justify-end sm:gap-2 smm-flex-row-reverse smm-flex-row-reverse smm-justify-end  smm-items-center smm-gap-2 ">
                    <div>
                        <div class="flex items-center flex-shrink-0 text-white ">
                            <div class="ml-1">
                                <img class="xl:w-[200px] lg:w-[150px]" src="{{ asset('/images/menu-icon/logo.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div id="main-menu1" class="pr-4 md:flex md:items-center sm:h-full sm:relative md:h-14 md:leading-13 relative   md:block">


                        <div class="block lg:hidden md:hidden  ">
                            <button id="main-menu-desktop" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white justify-end ">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
 
                        <div class=" flex flex-row xl:gap-12 lg:gap-2 navbar"> 
                            <a href="#responsive-header" rel="daily-menu"  class="sm:leading-loose md:leading-13 sm:block sm:mt-0 no-underline h-full block mt-4 md:mt-0 md:inline-block lg:mt-0    md:text-slate-300  hover:text-white  font-bold">
                                DAILY FANTASY
                                <div class="relative hidden daily-menu active" >
                                    <div class="arrowed absolute top-[13px] left-10 ">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="projections-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block  mt-4 md:inline-block lg:mt-0 md:mt-0   relative md:text-slate-300  hover:text-white font-bold">
                                PROJECTIONS
                                <div class="relative  hidden projections-menu ">
                                    <div class="arrowed absolute top-[13px] left-10">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="news-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                NEWS

                                <div class="relative  hidden news-menu">
                                    <div class="arrowed absolute top-[13px] left-5">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header " rel="betting-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                BETTING

                                <div class="relative  hidden betting-menu">
                                    <div class="arrowed absolute top-[13px] left-5">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="odds-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                ODDS

                                <div class="relative  hidden odds-menu">
                                    <div class="arrowed absolute top-[13px] left-3">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                       </div> 
                    </div>
                </div>

                <div class="w-5/12 bg-[#1d9bf0] flex sm:flex-row-reverse md:flex-row md:items-center  lg:justify-start sm:items-center sm:justify-end sm:gap-2 smm-flex-row-reverse smm-flex-row-reverse smm-justify-end  smm-items-center smm-gap-2">
                    <div id="main-menu2" class=" p-[12px] w-full flex flex-row gap-10 navbar">
                        <div class="gap-6 flex flex-row">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold">
                                STARTING GOALIES
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute top-[13px] left-16">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                LINE COMBINATIONS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute top-[13px] left-16">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-row gap-3">
                            <div class="flex flex-row justify-center items-center relative">
                                <div>
                                    <input type="text" name="search" id="search" class="px-2  w-32 border-1  rounded-md "/>
                                </div>
                                <div class="absolute right-px top-2.5">
                                    <img src = "{{ asset('/images/search.png') }}" class=" text-white w-4" />
                                </div>
                            </div>
                            <div>
                                <a href="#">
                                    <svg class=" w-8 h-8 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div> 
            <!--End Desktop menu and Tablet --> 
            <!--Start Mobile menu -->  
            <div class="smm-z-20 ">
                <div class="xl:hidden lg:hidden block border-r-2 border-gray-200" id="mobile-smm-menu ">
                    <div class="flex flex-row items-center h-14 bg-black w-full">
                        <div class="flex items-center flex-shrink-0 text-white pl-2">
                            <div id="main-menu1" class="pr-2 md:flex md:items-center sm:h-full sm:relative md:h-14 md:leading-13 relative  md:block">
                                <div class=" block flex flex-row gap-1">
                                    <button id="main-menu-mobile" class="flex items-center px-3 py-2 border rounded text-sky-600 border-sky-600 hover:text-white hover:border-white justify-end ">
                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                                    </button>
                                    <div class="flex items-center">
                                        <img class=" w-[10rem]" src="{{ asset('/images/menu-icon/logo.png') }}" alt="">
                                    </div>
                                </div>
                                <div class=" flex flex-row gap-12 navbar smm-hidden md:hidden sm:hidden"> 
                                    <a href="#responsive-header" rel="daily-menu"  class="sm:leading-loose md:leading-13 sm:block sm:mt-0 no-underline h-full block mt-4 md:mt-0 md:inline-block lg:mt-0    md:text-slate-300  hover:text-white  font-bold">
                                        DAILY FANTASY
                                        <div class="relative hidden daily-menu active" >
                                            <div class="arrowed absolute top-5 left-10 ">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="projections-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block  mt-4 md:inline-block lg:mt-0 md:mt-0   relative md:text-slate-300  hover:text-white font-bold">
                                        PROJECTIONS
                                        <div class="relative  hidden projections-menu ">
                                            <div class="arrowed absolute top-5 left-10">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="news-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        NEWS 
                                        <div class="relative  hidden news-menu">
                                            <div class="arrowed absolute top-5 left-5">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header " rel="betting-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        BETTING 
                                        <div class="relative  hidden betting-menu">
                                            <div class="arrowed absolute top-5 left-5">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="odds-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        ODDS 
                                        <div class="relative  hidden odds-menu">
                                            <div class="arrowed absolute top-5 left-3">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            </div> 
                        </div> 
                        <div class="flex flex-row justify-between w-11/12 mx-1">                                   
                            <div class="flex flex-row justify-center w-[58%] sm:gap-2 smm-gap-0">
                                <a href=""><img class="w-9 h-9" src="{{ asset('/images/menu-icon/goalie_icon-removebg-preview.png') }}" alt=""></a>
                                <a href=""><img class="w-9 h-9" src="{{ asset('/images/menu-icon/player_icon-removebg-preview.png') }}" alt=""></a>
                            </div> 
                            <div>
                                <a href="#">
                                    <svg class=" w-9 h-9 text-black border border-black rounded-full bg-sky-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div> 
                        </div>
                    </div>
                        <!-- <div class="sm:mt-4 flex flex-row gap-y-4"   id="list-menu"> 
                            <div> 
                                <a href="#responsive-header" rel="search-bar"  class=" mt-4 sm:leading-loose  sm:block  no-underline block md:mt-0 md:inline-block lg:mt-0  md:text-slate-300 ">
                                    <img src = "{{ asset('/images/search.png') }}" class="w-5 m-auto " />
                                    <div class="relative bottom--4  hidden active"  >
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


                            <div class="md:hidden sm:block md:relative flex flex-row w-full" id="sub-menu">
                                <ul class="justify-start md:absolute list-none  flex-col sm:items-start gap-2 py-2 nhl hidden active sm:flex-wrap smm-flex-wrap smm-items-end px-2">

                                    <li ><a  class="hover:font-bold"  href="#">STARTING GOALIES </a></li>
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

                                <ul class="justify-start list-none flex-col gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap smm-items-start p-2 ">
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
                        </div> -->
                    <div class="hidden" id="new-menu">
                        <div class="mt-4 flex flex-row justify-evenly">
                            <button class="text-[#28abf3] font-bold text-sm border border-black border-radius rounded-full bg-black w-[41%] p-1">JOIN</button>
                            <button class="text-[#28abf3] font-bold text-sm border border-black border-radius rounded-full bg-black w-[41%] p-1">SIGN IN</button>
                        </div>
                        <div class="my-4" id="header-mobile-menu">
                            <div class="flex flex-row bg-[#38b6ff] border border-black">
                                <a class="text-white font-bold text-sm ml-9 p-1" href="#">STARTING GOALIES</a>
                            </div>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex items-center gap-2 relative " >
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus menu-line-combonation-icon-1" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative menu-line-combonation-icon-2" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text " rel="menu-line-combonation" href="#">LINE COMBINATIONS</a>
                            </div>
                                <ul id="team-logo" class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-line-combonation hidden" style>
                                    <li><a href=""><img class="w-10 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a></li>
                                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a></li>
                                </ul>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus menu-projections-icon-1" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative menu-projections-icon-2" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" rel="menu-projections" href="#">PROJECTIONS</a>
                            </div>
                                <ul id="team-logo" class="bg-white flex flex-col justify-center menu-projections hidden">
                                    <li class="p-1  border border-black w-full">
                                        <a class="flex flex-row items-center ml-[27px]" href="#">
                                            <img class="w-[7%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                            <p class="ml-2 text-md font-semibold">DRAFTKINGS</p>
                                        </a> 
                                    </li>
                                    <li class=" p-1  border border-black w-full">
                                        <a class="flex flex-row items-center ml-[27px]" href="#">
                                            <img class="w-[7%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                            <p class="ml-2 text-md font-semibold">FANDUEL</p>
                                        </a>
                                    </li>
                                </ul>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" rel="menu-news" href="#">News</a>
                            </div>
                                  <ul id="team-logo" class="bg-white flex flex-col  menu-news hidden">
                                    <li class=" border border-black w-full p-1">
                                            <a class="flex flex-row items-center ml-[27px]" href="#">
                                                <p class="ml-2 text-md font-semibold">PLAYER NEWS</p>
                                            </a> 
                                        </li>
                                        <li class=" border border-black w-full p-1">
                                            <a class="flex flex-row items-center ml-[27px]" href="#">
                                                <p class="ml-2 text-md font-semibold">TEAM NEWS</p>
                                            </a>
                                        </li>
                                  </ul>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" rel="menu-betting" href="#">BETTING</a>
                            </div>

                                <ul id="team-logo" class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-betting hidden">
                                    <li class="h-24"></li>
                                </ul>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1" rel="menu-odds" href="#">ODDS</a>
                            </div>
                                  <ul id="team-logo" class="w-full bg-white flex flex-wrap justify-center  my-5 menu-odds hidden">
                                     <li><a href="#"><img class="w-[12rem] link-text" src="{{ asset('/images/menu-icon/coming_soon.png') }}" alt=""></a></li>
                                  </ul>
                            <div class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 icon-plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden icon-negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" rel="menu-schedule"  href="#">SCHEDULE</a>
                            </div>
                                <ul id="team-logo" class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-schedule hidden">
                                    <li class="h-24"></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Mobile menu -->
        </div>
     <!-- Desktop -->
        <div class="w-4/5 m-auto lg:block md:hidden sm:hidden smm-hidden p-4" id="sub-menu">
            <ul class="list-none flex-row items-center gap-2 py-2 daily-fantasy hidden sm:flex-wrap smm-flex-wrap daily-menu active">
                <li ><a  class="font-semibold hover:font-bold"  href="#">STARTING GOALIES</a></li>
                <li><a  class="font-semibold hover:font-bold" href="#" >LINE COMBINATIONS</a></li>
                <li><a  class="font-semibold hover:font-bold" href="#">PROJECTIONS</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 projections-menu hidden  smm-flex-wrap">
                <li class="flex items-center">
                    <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                    <a  class="font-semibold font-semibold hover:font-bold" href="#" >DRAFTKINGS</a>
                </li>
                <li class="flex itmes-center">
                    <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                    <a  class="font-semibold hover:font-bold" href="#">FANDUEL</a>
                </li>
                
            </ul>
            <ul class="list-none flex-row gap-2 py-2  hidden smm-flex-wrap news-menu">
                <li ><a class=" font-semibold hover:font-bold" href="#">TEAM NEWS</a></li>
                <li ><a class="font-semibold hover:font-bold" href="#">PLAYER NEWS</a></li>
                <li ><a class="font-semibold hover:font-bold" href="#">SCHEDULE</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 dfs-projections hidden smm-flex-wrap hidden betting-menu">
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">SPORTSBOOKS</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">BONUSES</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">NEWS</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">ODDS</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">PROPS</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">BETTING GUIDE</a></li>
                <li class="flex"><a class="font-semibold hover:font-bold" href="#">GLOSSARY</a></li>  
            </ul>
            <ul class="list-none flex-row gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap  hidden odds-menu ">
                <li ><a  class="font-semibold hover:font-bold" href="#">GAME ODDS</a></li>
                <li ><a  class="font-semibold hover:font-bold" href="#">PLAYER PROPS</a></li>
            </ul> 
            <ul class="list-none flex-row gap-2 py-2 line-menu hidden smm-flex-wrap justify-end">
                <div class="flex flex-row gap-3">
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/starting-goalies/pinpng.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/goalie icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/gtd icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/hot icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/injury icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/instagram icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/player icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/projections icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/tiktok icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/twitter icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/menu icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/value icon.png') }}"></a></li>
                    <li><a href="#"><img class="w-7 h-7" src="{{ asset('/images/menu-icon/website icon.png') }}"></a></li>
                </div>
            </ul>
            <ul class="list-none flex gap-2 py-2 shop hidden sm:flex-wrap ">
            </ul>
        </div>
      <!-- End Desktop -->
    </div>
</nav>