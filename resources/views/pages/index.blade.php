@extends('layouts.master-nhl')

@section('content')

    <div class="w-full flex justify-center block smm-hidden ">
        <div class="xl:w-full lg:w-full  md:w-full flex flex-col items-center gap-[5rem] max-w-screen-2xl ">
            <!-- <div class="flex flex-row justify-between items-end flex w-full my-5">
                <div class="flex gap-1 items-end">
                    <img class="w-[99px]" src="{{ asset('/images/line-combos/logo/matthew_tkachuk.png') }}" alt="">
                    <div class="flex">
                        <h1 class="text-[50px] font-regular" style="font-family: 'Mouse Memoirs'">projected</h1>
                        <h1 class="text-[50px]  font-regular text-[#39b6ff]" style="font-family: 'Mouse Memoirs'">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center  w-8/12   justify-between">
                    <div class="flex gap-6">
                        <a href="{{url('/nhl/home')}}" class="text-[24px] font-bold bg-[#38b6ff] text-[#ffffff]  px-4 py-px rounded-md">NHL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#38b6ff] px-4 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NBA</a>
                        <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">SOC</a>
                        <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NFL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#15d869] px-4 py-px border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">BET</a>
                        <a href="" class="text-[24px]  font-bold  text-[#1c6399] px-4 py-px border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">LEARN</a>
                    </div>
                    <a href="#" >
                        <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div> -->
            <div class="w-full flex flex-col items-center">
                <div class="flex flex-row w-full justify-evenly">
                    <img class="w-full" src="{{ asset('/images/menu-icon/players.png') }}" alt="">
                </div>
                <div class="relative w-full">
                    <input class="w-full border border-4 border-[#4d4d4d] text-center text-xl text-[#4d4d4d] font-bold rounded h-14" type="text" placeholder="Search Projected Lineups">
                    <a class="absolute top-1 right-1" href="">
                      <img class="w-[50px]" src="{{ asset('/images/menu-icon/icons8-search-48.png') }}" alt="">
                   </a> 
                </div>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                      <img class="xl:w-12 lg:w-12 md:w-10" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                      <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NHL</h1>
                    </div>
                    <ul class="flex flex-col gap-2 xl:text-xl lg:text-xl md:text-lg">
                        <li><a class=" font-bold text-[#39b6ff]" href="">Line Combinations</a></li>
                        <li><a class=" font-bold text-[#39b6ff]" href="{{url('/nhl/')}}">Starting goalies</a></li>
                        <li><a class="  font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="  font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class=" font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-12 lg:w-12 md:w-10" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NBA</h1>
                    </div>
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="xl:w-11 lg:w-11 md:w-10 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                        <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">NFL</h1>
                    </div> 
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Depth Charts</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                    <img class="xl:w-10 lg:w-10 md:w-9" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                    <h1 class="xl:text-4xl lg:text-4xl md:text-3xl font-extrabold text-black">EPL-MLS</h1>
                    </div>
                    <ul class="flex flex-col gap-2  xl:text-xl lg:text-xl md:text-lg">
                        <li><a class="font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full  flex flex-col  mt-16 gap-6  ">
                <h1 class="xl:text-6xl lg:text-5xl md:text-5xl font-bold text-center text-black">Your destination for fantasy sports <br> players and bettors</h1>
                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NHL</h1>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="w-full flex justify-center my-5">
                            <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL News</a>
                        </div>
                    </div>  
                </div> 
                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NBA</h1>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="w-full flex justify-center my-5">
                            <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NBA News</a>
                        </div>
                    </div>  
                </div> 
                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">NFL</h1>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="w-full flex justify-center my-5">
                            <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NFL News</a>
                        </div>
                    </div>  
                </div> 
                <div class="flex flex-col w-full">
                    <div class="flex flex-row gap-3">
                        <img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="xl:text-4xl lg:text-3xl md:text-2xl font-bold">EPL</h1>
                    </div>
                    <div class="flex flex-col w-full xl:gap-5 lg:gap-5 md:gap-1 mt-3">
                        <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-[30%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white border">
                                <div class="flex m-3 mt-5 gap-2">
                                   <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}">
                                    <div class="flex flex-col gap-3">
                                        <div class="flex flex-row gap-2">
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                            <p class="text-[11px] font-bold">
                                            Injury
                                            </p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                            <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                                    <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                                    <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                                </div>
                                <div class="w-full absolute bottom-1">
                                    <div class="w-full flex flex-row items-center ">
                                        <a href="">
                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="text-[13px]">Chris Benn</h3>
                                            <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="w-full flex justify-center my-5">
                            <a href="" class="text-[#1d9bf0] font-bold text-sm">View All EPL News</a>
                        </div>
                    </div>  
                </div> 
                

                <!-- <h1 class="text-2xl font-medium">What is the importance using projected luneups?</h1>
                <p class="text-2xl font-medium">
                    Projected Lineups can help give you the edge in all types of fantasy sports or sports betting;
                    having an idea of who is playing before your competition is always going to put you step  ahead.
                    All confirmed lineups are updated as soon as team or reliable source has confirmed the lineup 
                    for that day. So whatever you are looking for trusted source on the starters for your favorite football 
                    team , or trying to set your daily fantasy lineup on the day's full state of NBA games, Lineups has you 
                    covered. You can also find updated rosters for several sports, including updated NBA rosters as well 
                    as MLB and nfl rosters.
                </p>
                <p class="text-2xl font-medium">
                    Between Twitter, Instagram, and the dozens of hte social and informational sites, the  barriers for 
                    information between teams, reporters, and the public have fallen. Lineups.com does the job of searching
                    and colllectingthis information from trusted sources and providing it to you instantly. For example ,
                    you can get up to the second news on all NBA starting lineups right here.   
                </p>
                <p class="text-2xl font-medium">
                    When it comes to injuries, we are now able to get constant updates through social media and 
                    other platforms, so the question of who is playing or when someone will return lineups can 
                    be more accurate and more useful when it comes to fantasy sports, sports wagering, or any 
                    purpose it is needed for. Another crucial thing i peace of mind, and you get itr with us, as 
                    we validate all our information against our list of trusted sources.
                </p>
                <p class="text-2xl font-medium">
                    Starting  lineups and rosters are just small slice of the overall content and information you can 
                    expect to find. we can also provide tons of analytic statistic and data for your fantasy football 
                    selections, such as target share, snap counts., and more. These fantasy football stats are critical 
                    to not only setting your season-long line-up but also creating yor daily fantasy team in hope of
                    dominating.
                </p>
                <p class="text-2xl font-medium">
                    Another element to consider is the weather, which we can provide up -to-date information
                    on. On top of this, you can find player projections, which are base on more than simple 
                    plug-and-play formula. Tons of data analysis go into our unique fantasy football projections to 
                    provide you most accurate numbers as possible. you can also findanalytic articles from our 
                    knowledgeable staff and tons of sports, fantasy, and betting news. We also provide up-to-date 
                    betting information, including lines. spread, and statistic on NFL games each and every week.  
                </p> -->
            </div>
        </div>
    </div>
    <!-- API link  https://api.projectedlineups.com/v1/sports/leagues -->
    <!-- Mobile design -->
    <div class="w-full smm-block hidden">
        <img class="w-full mt-14 mb-5" src="{{ asset('/images/menu-icon/adds_header.png') }}"> 
        <div class="w-full">
            <div class="w-full h-auto flex justify-center relative">
                <img class="w-[45%] z-0 absolute left-0 bottom-0" src="{{ asset('/images/menu-icon/auston matthews (1).png') }}" alt="">
                <img class="w-[42%] z-20" src="{{ asset('/images/menu-icon/player4.png') }}" alt="">
                <img class="w-[45%] z-10 absolute right-0 bottom-0" src="{{ asset('/images/menu-icon/connor mcdavid (1).png') }}" alt="">
            </div>
            <div class="relative w-full">
                <input class="w-full border border-1 border-[#4d4d4d] text-center text-lg text-black font-bold rounded-xl h-12" type="text" placeholder="Search Projected Lineups">
                <a class="absolute top-2 right-1" href="">
                    <img class="w-[35px]" src="{{ asset('/images/menu-icon/icons8-search-48.png') }}" alt="">
                </a> 
            </div>
        </div>
        <h1 class="text-3xl font-bold text-center text-black my-5">Your destination for fantasy sports  players and bettors</h1>
        <div class="w-full flex flex-col">
            <div class="w-full flex flex-row gap-2">
                <a class="w-full flex flex-col bg-[#ff3131] border rounded-lg" href="">
                    <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                      <img class="w-8 h-8" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                      <h1 class="text-3xl font-bold text-white">EPL</h1>
                    </div>
                    <div class="w-full flex justify-center">
                      <img class="w-[48%]" src="{{ asset('/images/menu-icon/player4.png') }}" alt="">
                    </div>
                </a>
                <a class="w-full flex flex-col bg-[#15d869] border rounded-lg " href="">
                    <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                      <img class="w-10 h-10 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                      <h1 class="text-3xl font-bold text-white">NFL</h1>
                    </div>
                    <div class="w-full flex justify-center">
                      <img class="w-[48%]" src="{{ asset('/images/menu-icon/player5.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="w-full flex flex-row gap-2 mt-2">
                <a class="w-full flex flex-col bg-[#1d9bf0] border rounded-lg" href="{{url('/nhl/home')}}">
                    <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                        <img class="w-8 h-8" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                        <h1 class="text-3xl font-bold text-white">NHL</h1>
                    </div>
                    <div class="w-full flex justify-center">
                        <img class="w-[48%]" src="{{ asset('/images/menu-icon/player7.png') }}" alt="">
                    </div>
                </a>
                <a class="w-full flex flex-col bg-[#8c52ff] border rounded-lg " href="">
                    <div class="flex flex-row justify-between w-6/12 ml-[10%] py-3">
                        <img class="w-8 h-8  " src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                        <h1 class="text-3xl font-bold text-white">NBA</h1>
                    </div>
                    <div class="w-full flex justify-center">
                        <img class="w-[48%]" src="{{ asset('/images/menu-icon/player6.png') }}" alt="">
                    </div>
                </a>
            </div>  
        </div>
    </div>
@endsection
        