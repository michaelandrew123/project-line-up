@extends('layouts.master-nhl')

@section('content')
    <!-- @foreach($starting_goalies as $key=>$val)
        @if(isset($val->team->slug))
            {{$val->game->game_date->full}}
        @endif
    @endforeach -->
    <div class="w-full flex flex-col items-center">
        <div class="max-w-screen-2xl smm-hidden  xl:w-full">
               <div class="flex flex-row justify-evenly mt-10 w-full">   
                   <div class="flex flex-col items-center xl:w-8/12 lg:w-8/12 md:w-4/5  ">
                        <div class="w-full">
                            <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
                                <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%]  mb-4 flex list-none justify-center p-0 z-[-1]"
                                    data-te-carousel-indicators>
                                    <button
                                        type="button"
                                        data-te-target="#carouselExampleCaptions1"
                                        data-te-slide-to="0"
                                        data-te-carousel-active
                                        class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                        aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button
                                        type="button"
                                        data-te-target="#carouselExampleCaptions1"
                                        data-te-slide-to="1"
                                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                        aria-label="Slide 2"></button>
                                    <button
                                        type="button"
                                        data-te-target="#carouselExampleCaptions1"
                                        data-te-slide-to="2"
                                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                                    @php
                                        $nhl_goalies = 0;
                                    @endphp                                   
                                    @foreach($goalies_schedule->data as $key=>$val)
                                        @if($nhl_goalies == 0)   
                                            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                                                data-te-carousel-active
                                                data-te-carousel-item
                                                style="backface-visibility: hidden">
                                                <div class="flex flex-row justify-center items-center">
                                                    <div class="flex justify-center items-center border border-black bg-[#38b6ff] rounded-lg h-14 w-10/12">
                                                        <h1 class="text-2xl font-bold text-white ">{{$val->game_date->full}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        @else 
                                            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                                                data-te-carousel-item
                                                style="backface-visibility: hidden">
                                                <div class="flex flex-row justify-center items-center">
                                                <div class="flex justify-center items-center border border-black bg-[#38b6ff] rounded-lg h-14 w-10/12">
                                                        <h1 class="text-2xl font-bold text-white ">{{$val->game_date->full}}</h1>
                                                    </div>
                                                </div>
                                            </div>      
                                        @endif
                                        @php
                                            $nhl_goalies++;
                                        @endphp  
                                    @endforeach
                                </div>
                            <button
                            class=" absolute left-0 top-0 z-[1] flex items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                            type="button"
                            data-te-target="#carouselExampleCaptions1"
                            data-te-slide="prev">
                            <div class="flex items-center justify-center h-14 w-14  border border-black bg-white rounded-lg">
                                <img class="w-[30px] h-[30px] rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                            </div>                 
                            </button>
                            <button
                            class=" absolute right-0 top-0 z-[1] flex items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                            type="button"
                            data-te-target="#carouselExampleCaptions1"
                            data-te-slide="next"> 
                                <div class="flex items-center justify-center  h-14 w-14 border border-black bg-white rounded-lg">
                                    <img class="w-[30px] h-[30px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">                                       
                                </div>                          
                            </button>
                        </div>
                    </div> 
                    <div class="flex flex-col items-center mt-2 gap-5 w-full">
                        <div class="flex flex-wrap justify-center w-11/12 gap-5">
                            @foreach($goalies_schedule->data as $key=>$val)  
                                <div class="flex gap-3 w-full h-56">
                                    <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                                        @if(!empty($val->starting_goalies->home->player->full_name))
                                            <h1 class="font-bold text-base mt-3">{{$val->starting_goalies->home->player->full_name}}</h1>
                                        @endif
                                        <div class="flex flex-row items-center gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-[11px] font-bold">{{$val->starting_goalies->home->status->name}}</p>
                                        </div>
                                        @if(!empty($val->starting_goalies->home->player->images->uniform))
                                            <div class="flex flex-row items-center gap-2">
                                                <img class="w-[9rem]" src="{{$val->starting_goalies->home->player->images->uniform}}">
                                                <p class="text-[11px] font-bold"> </p>
                                            </div>
                                        @endif
                                        <img src=" " class="w-40" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between w-full border border-black rounded">
                                        <div class="flex flex-row justify-evenly mt-3">
                                            <div class="">
                                                <div class="flex flex-col items-center gap-2">
                                                    <img class="w-12 " src="{{ asset('/images/teamlogo-svg/ .svg') }}" alt="">
                                                    <h1 class="text-center font-bold">{{$val->home_team->name}}</h1>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex flex-col items-center gap-2">
                                                    <img class="w-12 " src="{{ asset('/images/teamlogo-svg/ .svg') }}" alt="">
                                                    <h1 class="text-center  font-bold">{{$val->away_team->name}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-sm text-center font-semibold text-[#9da8af]">
                                            <p>Jan 24, 7pm EST</p>
                                            <p>Bridgestone Arena</p>
                                        </div>
                                        <div class="w-full flex justify-center m-1">
                                            <button class="border border-black font-bold px-3 py-1 rounded w-40">
                                                Game Odds
                                            </button>
                                        </div>
                                    </div>
                                    <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                                        @if(!empty($val->starting_goalies->away->player->full_name))
                                            <h1 class="font-bold text-base mt-3">{{$val->starting_goalies->away->player->full_name}}</h1>
                                        @endif
                                        <div class="flex flex-row items-center gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-[11px] font-bold">{{$val->starting_goalies->home->status->name}}</p>
                                        </div>
                                        @if(!empty($val->starting_goalies->away->player->images->uniform))
                                            <div class="flex flex-row items-center gap-2">
                                                <img class="w-[9rem]" src="{{$val->starting_goalies->away->player->images->uniform}}">
                                                <p class="text-[11px] font-bold"> </p>
                                            </div>
                                        @endif
                                        <img src=" " class="w-40" alt="">
                                    </div>
                                </div> 
                             @endforeach 
                        </div>
                        <div class="flex flex-col w-full gap-2">
                            <div class="flex flex-col ">
                                <h1 class="font-semibold text-lg">AROUND THE WEB</h1>
                                <div class="border border-slate-300 w-full"></div>
                            </div>
                            <img class="w-full h-32 border border-black" src="{{ asset('/images/menu-icon/.png') }}">
                        </div> 
                    </div>
                </div>  
                <div class=" flex flex-col w-1/5 gap-8">
                    <img class="w-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="" src="{{ asset('/images/menu-icon/adds-new1.png') }}">
                    <div class="flex flex-col gap-3 ml-5">
                        <div class="flex flex-row ">
                            <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                            <h1 class="text-md font-semibold">Latest Articles </h1>
                        </div>
                        <hr>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                            <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                            <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                            <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                        </div>
                    </div>
                    <img class="w-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div>
            </div>
        </div>
        <!-- sample carousel -->
        <div class="hidden">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    </div>

    <!-- Mobile design -->
    <div class="w-full flex flex-col items-center hidden">
        <div class="w-full  smm-block hidden">
            <div class="flex flex-col mx-1">
                <div class="flex flex-row justify-between items-center mb-1">
                    <div class="flex flex-row items-center gap-1.5">
                        <img class="w-[3rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                        <div class="flex">
                            <h1 class="sm:text-4xl text-3xl font-extrabold">projected</h1>
                            <h1 class="sm:text-4xl text-3xl font-extrabold text-[#39b6ff]">lineups</h1>
                        </div>
                    </div>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>  
                <div class="flex flex-row gap-2 mx-2 my-5">
                    <button class="text-xl font-bold bg-[#38b6ff] text-black w-full h-12 rounded-md">NHL</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NFL</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NBA</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">MLB</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">SOC</button>
                </div>
                <div class="flex flex-row mx-2 gap-3 mb-3">
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
                    <button class="text-xl font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
                </div>               
            </div>
        </div>
        <div class="relative w-full my-3 smm-block hidden">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>
    </div>
    <img class="w-full my-3 smm-block hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}" alt="">
    <!-- <div class="flex justify-center w-full my-8 smm-block hidden">
        <div class="w-full h-20 bg-[#d9d9d9] flex border rounded-[10px] justify-center items-center my-5 ">
            <h1 class="text-xl font-bold text-black ">NHL Starting Goalies Tuesday, January 24</h1>
        </div>
        <div id="carouselExampleCaptions4" class="relative w-full" data-te-carousel-init data-te-carousel-slide>
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%]  mb-4 flex list-none justify-center p-0 z-[-1]"
                data-te-carousel-indicators>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="1"
                    class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="2"
                    class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 3"></button>
            </div>
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <div
                    class="relative float-left -mr-[100%] w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-active
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 w-full">
                <button
                    class=" absolute top-0 bottom-0 left-0 z-[1] flex items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide="prev">
                        <div class="flex flex-row items-center justify-between w-[10rem] border border-black ">
                                <div class="flex flex-row relative">
                                <img class="h-3 rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                <img class="h-3 rotate-90 absolute left-2" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                </div>
                                <div>
                                <h1 class="font-extrabold text-black text-lg">Previous Day</h1>
                                </div>
                        </div>                 
                </button>
                <button
                    class=" absolute top-0 bottom-0 right-0 z-[1] flex flex   items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide="next"> 
                        <div class="flex flex-row items-center justify-between  w-[9rem] border border-black ">
                            <div>
                            <h1 class="font-extrabold text-black text-lg">Next Day</h1> 
                            </div>   
                            <div class="flex flex-row relative ">
                                <img class="h-3 -rotate-90 absolute right-2" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                <img class="h-3 -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                            </div> 
                        </div>                          
                </button>
            </div>
                
        </div>
    </div> -->
    <div class="flex flex-col items-center  w-full smm-block hidden">
        <div class="w-full">
            <div id="carouselExampleCaptions4" class="relative" data-te-carousel-init data-te-carousel-slide>
                <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%]  mb-4 flex list-none justify-center p-0 z-[-1]"
                    data-te-carousel-indicators>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions4"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions4"
                        data-te-slide-to="1"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions4"
                        data-te-slide-to="2"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 3"></button>
                </div>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                    <div
                        class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex justify-center items-center border border-black bg-[#38b6ff] rounded-lg h-14 w-9/12">
                                <h1 class="text-base font-bold text-white ">NHL Starting Goalies Tuesday, January 24</h1>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full  transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex justify-center items-center border border-black bg-[#38b6ff] rounded-lg h-14 w-9/12">
                                <h1 class="text-base font-bold text-white ">NHL Starting Goalies Tuesday, January 24</h1>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex justify-center items-center border border-black bg-[#38b6ff] rounded-lg h-14 w-9/12">
                                <h1 class="text-base font-bold text-white ">NHL Starting Goalies Tuesday, January 24</h1>
                            </div>
                        </div>
                    </div>
                </div>

            <button
            class="absolute left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions4"
            data-te-slide="prev">
            <div class="flex items-center justify-center h-14 w-14  border border-black bg-white rounded-lg">
                <img class="w-[30px] h-[30px] rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
            </div>                 
            </button>
            <button
            class=" absolute right-0 top-0 z-[1] flex flex    items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions4"
            data-te-slide="next"> 
                <div class="flex items-center justify-center  h-14 w-14 border border-black bg-white rounded-lg">
                    <img class="w-[30px] h-[30px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">                                       
                </div>                          
            </button>
        </div>
        <div class="flex flex-col items-center w-full gap-3 mt-2">
            <div class="flex gap-2 w-full h-44">
                <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
                <div class="flex flex-col justify-between w-full border border-black rounded">
                    <div class="flex flex-row justify-evenly mt-1">
                        <div class="">
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt="">
                                <h1 class="text-center font-bold">Boston <br> Bruins</h1>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt="">
                                <h1 class="text-center  font-bold">Florida <br> Panthers</h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-center font-semibold text-[#9da8af]">
                        <p>Jan 24, 7pm EST</p>
                        <p>Bridgestone Arena</p>
                    </div>
                    <div class="w-full flex justify-center m-1">
                        <button class="border border-black font-bold px-2 py-px rounded w-40">
                            Game Odds
                        </button>
                    </div>
                </div>
                <div class="border border-black flex flex-col items-center  justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm  mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
            </div>
            <div class="flex gap-2 w-full h-44">
                <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
                <div class="flex flex-col justify-between w-full border border-black rounded">
                    <div class="flex flex-row justify-evenly mt-1">
                        <div class="">
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt="">
                                <h1 class="text-center font-bold">Edmonton<br>Oilers</h1>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <h1 class="text-center  font-bold">Toronto<br>Maple</h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-center font-semibold text-[#9da8af]">
                        <p>Jan 24, 7pm EST</p>
                        <p>Bridgestone Arena</p>
                    </div>
                    <div class="w-full flex justify-center m-1">
                        <button class="border border-black font-bold px-2 py-px rounded w-40">
                            Game Odds
                        </button>
                    </div>
                </div>
                <div class="border border-black flex flex-col items-center  justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm  mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
            </div>
            <div class="flex gap-2 w-full h-44">
                <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
                <div class="flex flex-col justify-between w-full border border-black rounded">
                    <div class="flex flex-row justify-evenly mt-1">
                        <div class="">
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt="">
                                <h1 class="text-center font-bold">Boston <br> Bruins</h1>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt="">
                                <h1 class="text-center  font-bold">Florida <br> Panthers</h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-center font-semibold text-[#9da8af]">
                        <p>Jan 24, 7pm EST</p>
                        <p>Bridgestone Arena</p>
                    </div>
                    <div class="w-full flex justify-center m-1">
                        <button class="border border-black font-bold px-2 py-px rounded w-40">
                            Game Odds
                        </button>
                    </div>
                </div>
                <div class="border border-black flex flex-col items-center  justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm  mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
            </div>
            <div class="flex gap-2 w-full h-44">
                <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
                <div class="flex flex-col justify-between w-full border border-black rounded">
                    <div class="flex flex-row justify-evenly mt-1">
                        <div class="">
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt="">
                                <h1 class="text-center font-bold">Boston <br> Bruins</h1>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt="">
                                <h1 class="text-center  font-bold">Florida <br> Panthers</h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-center font-semibold text-[#9da8af]">
                        <p>Jan 24, 7pm EST</p>
                        <p>Bridgestone Arena</p>
                    </div>
                    <div class="w-full flex justify-center m-1">
                        <button class="border border-black font-bold px-2 py-px rounded w-40">
                            Game Odds
                        </button>
                    </div>
                </div>
                <div class="border border-black flex flex-col items-center  justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm  mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
            </div>
            <div class="flex gap-2 w-full h-44">
                <div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
                <div class="flex flex-col justify-between w-full border border-black rounded">
                    <div class="flex flex-row justify-evenly mt-1">
                        <div class="">
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt="">
                                <h1 class="text-center font-bold">Edmonton<br>Oilers</h1>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-center gap-1">
                                <img class="w-12 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                <h1 class="text-center  font-bold">Toronto<br>Maple</h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-center font-semibold text-[#9da8af]">
                        <p>Jan 24, 7pm EST</p>
                        <p>Bridgestone Arena</p>
                    </div>
                    <div class="w-full flex justify-center m-1">
                        <button class="border border-black font-bold px-2 py-px rounded w-40">
                            Game Odds
                        </button>
                    </div>
                </div>
                <div class="border border-black flex flex-col items-center  justify-between w-full rounded-lg">
                    <h1 class="font-bold text-sm  mt-2">Players Name</h1>
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                        <p class="text-[11px] font-bold">Confirmed</p>
                    </div>
                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32" alt="">
                </div>
            </div>
        </div>
    </div> 








@endsection