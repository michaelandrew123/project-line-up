@extends('layouts.master')

@section('content')

 <!-- Desktop nhl/Line combos -->
<div class="w-full flex flex-row justify-center block smm-hidden">
    <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-center  border-black m-4 gap-5">
        <div class="flex flex-row justify-between  items-center flex justify-center w-full">
            <div class="flex gap-3">
                <img class="w-10 h-10" class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <div class="flex">
                    <h1 class="xl:text-4xl text-2xl font-extrabold">projected</h1>
                    <h1 class="xl:text-4xl text-2xl font-bold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center xl:gap-5 gap-3">
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-5  py-2 rounded-md">NHL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NFL</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NBA</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">MLB</button>
                <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">EPL</button>
                <a href="#">
                    <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-between w-full gap-3">
            <button class="xl:text-2xl text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-5  py-2 rounded-md">STARTING GOALIES</button>
            <button class="xl:text-2xl text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-5  py-2 rounded-md">LINE COMBOS</button>
            <button class="xl:text-2xl text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-5  py-2 rounded-md">PROJECTIONS</button>
            <button class="xl:text-2xl text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-5  py-2 rounded-md">NEWS</button>
            <button class="flex items-center xl:text-2xl text-lg font-bold bg-[#ebece9] text-black xl:px-9 px-5  py-2 rounded-md"hidden>PROPS & ODDS
                <img class="w-7 w-5" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
            </button>
        </div>
        <div class="relative w-full">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>
    </div>
</div>
<div class="">
<div class="w-full flex flex-col items-center ">
    <div class="w-11/12 flex justify-center gap-3 items-center block smm-hidden">
        <div class="w-9/12 flex flex-col gap-2">
            <div class="flex flex-row items-center justify-between m-3">
                <div class="flex flex-row items-center gap-7">
                    <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <div>
                        <p class="text-2xl font-extrabold">Toronto Maple Leafs</p>
                        <p class="text-2xl font-extrabold">Line Combinations</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                    <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
                </div>            
            </div>
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class=" mx-3">
                <div class="flex flex-row items-center justify-between">
                    <div class="flex flex-row gap-2 items-center">                       
                        <div>
                            <p class="text-[13px] font-semibold">David Alter</p>
                            <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                        </div>
                    </div>
                    <div class="relative">
                        <button id="" class="cursor-pointer flex flex-row justify-center items-center bg-slate-300 h-10 w-[11.5rem] rounded-full ">
                            <p class="text-[13px]">TORONTO MAPLE LEAFS</p>
                            <img src="{{ asset('/images/starting-goalies/arrow_blue.png') }}" class="w-4 h-4 rounded-full ml-2 fill-cyan-400 arrow">
                        </button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="w-3/12 ">
          <img class="w-full h-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
        </div>
    </div>
    <div class="flex flex-row items-center w-11/12 justify-evenly mt-3 gap-2.5 text-slate-500  block smm-hidden" id="sub-hed">
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md l-ups bg-[#1d9bf0]">LINEUPS</button>
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md  d-kings">DRAFTKINGS</button>
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md fnl">FANDUEL</button>
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md sts">STATS</button>
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md prp">PROPS</button>
        <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md flex justify-center items-center shp">SHOP
            <img class="w-7" src="{{ asset('/images/menu-icon/shopping-bag.png') }}" alt="">
        </button>
    </div> 
    <div class="flex w-11/12 my-5 gap-5 block smm-hidden">
        <ul class="flex flex-row justify-between w-9/12 ml-[5rem] text-lg font-bold text-slate-500 ">
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">SHOTS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">GOALS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">ASSISTS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">POINTS</a></li>
        </ul>
    </div>
    <!-- Line-ups  -->
    <div id="lu-body" class="w-full flex flex-row xl:justify-end lg:justify-center gap-7  ">
        <div class="xl:w-7/12 lg:w-8/12 md:w-10/12  block smm-hidden"> 
            <div id="shirt-footer"  class="flex flex-col gap-2 my-3">
                <div class="flex flex-col gap-2 w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div> 
                    </div>
                    
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                </div> 
                
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>                    
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-5"></div>
                    <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PRESS BOX</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center ">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-5 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div> 
            </div>
            
            <div class="flex flex-col gap-10 mt-10 hidden">
                <h1 class="text-lg font-bold text-center">Power play</h1>
                <p class="text-lg">
                    You might hear these lines reffered to as special teams lines,
                    but power play lines are important for success in the NHL.
                    When you have a power play you are up man, or possibly 
                    even two. Being able to capitalize on the power play is recipe
                    for sucess. The power play lines are going to feature the more
                    talented offensive players on the  team. Now when they 
                    struggle, a coach will tend to change things up. He will often
                    ride a hot hand here as well if a player is on hot streak and 
                    the coach wants to use him on the power play where he was 
                    initially not on the line anymore. Injuries and moves will occur
                    as well, so that is why you fantasy players should be taking 
                    advantage of the players who move within the power play lines.
                    Check out the list of top power play team rankings here.  
                </p>
            </div>
        </div>
        <div class="w-3/12 xl:mr-7 lg:mr-6 md:mr-2 block smm-hidden">
            <div class="">
                <div class="flex flex-row items-center justify-end bg-[#39b6ff] w-full h-9 rounded-t-md gap-2">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/') }}" >
                    <p class="text-md font-bold mr-3">MetaBet</p>
                </div>
                <div class="flex flex-rowb gap-3 p-3 border border-slate-200">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <h1 class="text-lg font-semibold">Toronto Maple Leafs</h1>
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="xl:text-sm lg:text-sm text-[12px] font-semibold">To win Stanley Cup</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1050</p>
                    </div> 
                </div>
                <div class="flex flex-row items-center justify-between gap-3 md:gap-0 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="xl:text-sm lg:text-sm text-[12px] font-semibold">To win Eastern <br> Conference</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+550</p>
                    </div> 
                </div>
                <div class="flex flex-col border border-slate-200">
                    <div class="flex flex-row items-center justify-between gap-3 p-3 ">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="xl:text-sm lg:text-sm text-sm md:text-[12px] font-semibold">To win Atlantic</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1600</p>
                        </div> 
                    </div>
                    <div class="flex justify-end">
                        <a class="text-[#39b6ff] font-semibold mr-1 xl:text-lg lg:text-md md:text-sm" href="#">See All Lines</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <h1 class="font-bold ml-16">Features</h1>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <p class="font-semibold text-sm"hidden>Props and Odds</p>
                    <p class="text-sm">Check out today's tophidden Props and Odds for <br> tonight slate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <p class="font-semibold text-sm">Morning Skate </p>
                    <p class="text-sm">Update and happening from this morning's <br> skate</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <p class="font-semibold text-sm">Top Stacks</p>
                    <p class="text-sm">Looking at today's slate DFS top stacks for  <br>Draftkings</p>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row items-center">
                        <img class="w-6 h-6" src="{{ asset('/images/menu-icon/injury icon.png') }}" alt="">
                        <h1 class="font-bold ml-8">Injury Report</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
                </div>
                <div class="w-full flex justify-center">
                    <a class="font-semibold text-sm" href="">View All NHL injuries</a>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row items-center">
                        <img class="w-6 h-6" class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                        <h1 class="font-bold ml-8">Team News</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
                </div>
                <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                    <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
                </div>
                <div class="w-full flex justify-center">
                    <a class="font-semibold text-sm" href="">View All NHL News</a>
                </div>
            </div>
            <div class="flex flex-col gap-6 items-center mt-6">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>           
        </div>
    </div> 
    <!-- End of Line-ups -->
   <div id="drf-shp" class="hidden w-full flex flex-col items-center block smm-hidden">
        <div class="w-11/12 md:w-full flex flex-col items-center gap-6 ">
            <div class="bg-slate-300 h-[2px] w-11/12"></div>
                <h1 class="text-center font-extrabold text-md mt-1 mb-6 bg-slate-300 p-0.5 border rounded-lg">FORWARDS</h1>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-11/12    rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-3"> Stack Price: $25,500</h1></div>
            </div>
            <div class="w-10/12 flex flex-row justify-between gap-2 my-10">
                    <div class="flex flex-col items-center gap-8 w-9/12  md:w-full">
                       <div class="bg-slate-300 h-[2px] w-11/12"></div>
                       <h1 class="text-center font-extrabold text-md mt-1 mb-6 bg-slate-300 p-0.5 border rounded-lg w-[5rem] text-center">DEFENCE</h1>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="text-2xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                    <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                            <p>Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="xl:text-sm lg:text-sm text-[10px]">
                                                <p>Goals</p>
                                                <p>Assist</p>
                                                <p>Points</p>
                                                <p>Shots</p>
                                                <p>Blocks</p>
                                                <p>TOI</p>
                                                <p>PP TQI</p>
                                                </div>
                                                <div class="xl:text-sm lg:text-sm text-[10px]">
                                                <p>.45</p>
                                                <p>.35</p>
                                                <p>.80</p>
                                                <p>2.76</p>
                                                <p>1.2</p>
                                                <p>16:53</p>
                                                <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                          <div class="flex flex-row items-end w-8/12 gap-2 ">
                            <div class="w-11/12 flex flex-col items-center">
                                <p class="w-[10rem] text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                            </div>               
                            <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                </div>
                                <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                </div>
                                <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                </div>
                                <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                  <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                  <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                    <img src="" alt="">
                                </div>
                                <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                               <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                    <p>Start per Game</p>
                                    <div class="flex flex-row w-full justify-evenly">
                                        <div class="xl:text-sm lg:text-sm text-[10px]">
                                        <p>Goals</p>
                                        <p>Assist</p>
                                        <p>Points</p>
                                        <p>Shots</p>
                                        <p>Blocks</p>
                                        <p>TOI</p>
                                        <p>PP TQI</p>
                                        </div>
                                        <div class="xl:text-sm lg:text-sm text-[10px]">
                                        <p>.45</p>
                                        <p>.35</p>
                                        <p>.80</p>
                                        <p>2.76</p>
                                        <p>1.2</p>
                                        <p>16:53</p>
                                        <p>2.12</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                    <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 items-center w-full ">
                        <div class="bg-slate-300 h-[2px] w-11/12"></div>
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6 bg-slate-300 p-0.5 border rounded-lg w-[5rem] ">GOALIES</h1>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="text-2xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                    <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full my-5"></div>
                   </div>
                </div>
                <img class="xl:w-[20rem] w-[7rem]  h-3/5 lg:h-2/5 md:h-1/4" src="{{ asset('/images/menu-icon/adds1.png') }}">
            </div>
            <div class="w-full flex flex-col items-center  gap-8 ">
                <h1 class="text-center font-extrabold text-md mt-1 mb-6 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-1</h1>  
                <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                        <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between  xl:w-[61%] w-[67%] gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div> 
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="text-2xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <div class="w-full flex flex-col items-center  gap-8 ">
                <h1 class="text-center font-extrabold text-md mt-1 mb-6 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-2</h1>  
                <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                        <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between  xl:w-[61%] w-[67%] gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div> 
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
                <div class="bg-slate-300 h-[2px] w-9/12 flex  my-5"></div>
               <div class="flex flex-col items-center w-9/12 gap-5">
                   <h1 class="text-center font-extrabold text-md mt-1 mb-6">PRESS BOX</h1>
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col items-center gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                </div>
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col items-center gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-2 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                </div>
                <div class="flex flex-col items-center w-11/12">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-2 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div>
            </div>       
        </div>
   </div>
</div>
<!-- Old design -->
<!-- <div class="w-full flex flex-row xl:justify-end lg:justify-center block smm-hidden gap-7 ">
    <div class="xl:w-7/12 lg:w-8/12 md:w-10/12">
        <div class="flex flex-row items-center justify-between m-3">
            <div class="flex flex-row items-center gap-7">
                <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div>
                    <p class="text-2xl font-extrabold">Toronto Maple Leafs</p>
                    <p class="text-2xl font-extrabold">Line Combinations</p>
                </div>
            </div>
            <div class="flex gap-2">
                <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
            </div>            
        </div>
        <div class="bg-slate-300 h-[2px] w-full"></div>
        <div class=" mx-3">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row gap-2 items-center">                       
                    <div>
                        <p class="text-[13px] font-semibold">David Alter</p>
                        <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                </div>
                <div class="relative">
                    <button id="" class="cursor-pointer flex flex-row justify-center items-center bg-slate-300 h-10 w-[11.5rem] rounded-full ">
                        <p class="text-[13px]">TORONTO MAPLE LEAFS</p>
                        <img src="{{ asset('/images/starting-goalies/arrow_blue.png') }}" class="w-4 h-4 rounded-full ml-2 fill-cyan-400 arrow">
                    </button> 
                </div>
            </div>
        </div>
            <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md bg-[#1d9bf0] l-ups">LINEUPS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md d-kings">DRAFTKINGS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md fnl">FANDUEL</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md sts">STATS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md nws">NEWS</button>
            </div>
            <div id="shirt-footer"  class="flex flex-col gap-2 my-3">
                <div class="flex flex-col gap-2 w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem] " src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem] " src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                    <div class="flex flex-row justify-center gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-3 gap-3">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-5"></div>
                 <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-1 mb-6">PRESS BOX</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-2 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center ">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-5 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div> 
            </div>
            
            <div class="flex flex-col gap-10 mt-10 hidden">
                <h1 class="text-lg font-bold text-center">Power play</h1>
                <p class="text-lg">
                    You might hear these lines reffered to as special teams lines,
                    but power play lines are important for success in the NHL.
                    When you have a power play you are up man, or possibly 
                    even two. Being able to capitalize on the power play is recipe
                    for sucess. The power play lines are going to feature the more
                    talented offensive players on the  team. Now when they 
                    struggle, a coach will tend to change things up. He will often
                    ride a hot hand here as well if a player is on hot streak and 
                    the coach wants to use him on the power play where he was 
                    initially not on the line anymore. Injuries and moves will occur
                    as well, so that is why you fantasy players should be taking 
                    advantage of the players who move within the power play lines.
                    Check out the list of top power play team rankings here.  
                </p>
            </div>
       </div>
       <div class="w-3/12 xl:mr-7 lg:mr-6 md:mr-2">
            <div class=" ">
                <div class="flex flex-row items-center justify-end bg-[#39b6ff] w-full h-9 rounded-t-md gap-2">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/') }}" >
                    <p class="text-md font-bold mr-3">MetaBet</p>
                </div>
                <div class="flex flex-rowb gap-3 p-3 border border-slate-200">
                    <img class="w-5 h-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                    <h1 class="text-lg font-semibold">Toronto Maple Leafs</h1>
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-sm font-semibold">To win Stanley Cup</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1050</p>
                    </div> 
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-sm font-semibold">To win Eastern <br> Conference</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+550</p>
                    </div> 
                </div>
                <div class="flex flex-col border border-slate-200">
                    <div class="flex flex-row items-center justify-between gap-3 p-3 ">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="text-sm font-semibold">To win Atlantic</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1600</p>
                        </div> 
                    </div>
                    <div class="flex justify-end">
                        <a class="text-[#39b6ff] font-semibold mr-1" href="#">See All Lines</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <h1 class="font-bold ml-16">Features</h1>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                   <p class="font-semibold text-sm"hidden>Props and Odds</p>
                   <p class="text-sm">Check out today's tophidden Props and Odds for <br> tonight slate</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                   <p class="font-semibold text-sm">Morning Skate </p>
                   <p class="text-sm">Update and happening from this morning's <br> skate</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                   <p class="font-semibold text-sm">Top Stacks</p>
                   <p class="text-sm">Looking at today's slate DFS top stacks for  <br>Draftkings</p>
               </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row items-center">
                       <img class="w-6 h-6" src="{{ asset('/images/menu-icon/injury icon.png') }}" alt="">
                       <h1 class="font-bold ml-8">Injury Report</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL injuries</a>
               </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
         flex justify-center            <div class="flex flex-row items-center">
                       <img class="w-6 h-6" class="w-7" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                       <h1 class="font-bold ml-8">Team News</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL News</a>
               </div>
            </div>
            <div class="flex flex-col gap-6 items-center mt-6">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>           
    </div>
</div> -->
<!--Desktop end -->
<!-- Mobile old Design -->
<!-- <div class="hidden smm-block">
    <div class="flex flex-col mx-1">
        <div class="flex flex-row justify-between items-center mb-1">
            <div class="flex flex-row items-center gap-1">
                <img class="w-[3rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                <div class="flex">
                    <h1 class="sm:text-4xl text-3xl font-extrabold">projected</h1>
                    <h1 class="sm:text-4xl text-3xl font-extrabold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <a href="#">
                <svg class="w-10 text-whborderitemsorder-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center  ">
        <div class="w-11/12">   
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}" >       
            <div class="flex flex-row items-center justify-center justify-between w-full">
                <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div class="flex sm:flex-row flex-col gap-2">
                    <p class="text-2xl font-bold">Toronto Maple Leafs</p>
                    <p class="text-2xl font-bold">Line Combinations</p>
                </div>
            </div>         
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class="mx-3">             
                <div class="flex flex-row gap-2 items-center w-full justify-between">                       
                    <div>
                        <p class="text-[13px] font-semibold">David Alter</p>
                        <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                        <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
                    </div> 
                </div>             
            </div>
                <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm bg-[#1d9bf0] l-ups">LINEUPS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm d-kings">DRAFTKINGS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm fnl">FANDUEL</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm sts">STATS</button>
                    <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md prp">PROPS</button>
                    <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md flex justify-center items-center shp">SHOP
                        <img class="w-7" src="{{ asset('/images/menu-icon/shopping-bag.png') }}" alt="">
                    </button>
                </div>
                <div id="shirt-footer"  class="flex flex-col gap-2 shirt-players">
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center   rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center   rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-2 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carsl" class=" my-3">
                    <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-3]"
                            data-te-carousel-indicators>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="0"
                                data-te-carousel-active
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-current="true"
                                aria-label="Slide 1"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="1"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 2"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="2"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 3"></button>
                        </div>     
                            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                                <div
                                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-active
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                            </div>
                        <button
                        class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Previous</span
                        >
                        </button>
                        <button
                        class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Next</span
                        >
                        </button>
                    </div>
                    <div class="mt-8 w-full flex justify-center">
                       <img class="h-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>                   
                </div>
            </div>
        </div>  
    </div>
</div> -->
<div class="hidden smm-block">
    <div class="flex flex-col mx-1">
        <div class="flex flex-row justify-between items-center mb-1">
            <div class="flex flex-row items-center gap-1">
                <img class="sm:w-[3rem] w-10" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                <div class="flex">
                    <h1 class="sm:text-4xl text-2xl font-extrabold">projected</h1>
                    <h1 class="sm:text-4xl text-2xl font-extrabold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <a href="#">
                <svg class="sm:w-10 w-8 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>  
        <div class="flex flex-row sm:gap-2 gap-1 mx-2 my-5">
            <button class="sm:text-xl text-sm font-bold bg-[#38b6ff] text-black w-full sm:h-12 h-10 rounded-md">NHL</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">NFL</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">NBA</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">MLB</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">SOC</button>
        </div>
        <div class="flex flex-row mx-2 sm:gap-3 gap-1 mb-3">
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
            <button class="sm:text-xl text-sm font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
        </div>
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center  ">
        <div class="w-[95%] mx-5">   
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}" >       
            <div class="flex flex-row items-center justify-center justify-between w-full">
                <img class="sm:w-[4rem] w-[3rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div class="flex sm:flex-row flex-col">
                    <p class="sm:text-2xl text-md font-bold">Toronto Maple Leafs</p>
                    <p class="sm:text-2xl text-md font-bold">Line Combinations</p>
                </div>
            </div>         
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class="mx-3">             
                <div class="flex flex-row gap-2 items-center w-full justify-between">                       
                    <div>
                        <p class="sm:text-[13px] text-[10px] font-semibold">David Alter</p>
                        <p class="sm:text-[13px] text-[10px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="sm:w-5 sm:h-5 w-3  rounded-full ml-2">
                        <h1 class="sm:text-[13px] text-[10px] font-bold">MORNING SKATE</h1> 
                    </div> 
                </div>             
            </div>
                <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10 gap-1" id="sub-hed">
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm bg-[#1d9bf0] l-ups">LINEUPS</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm d-kings">DRAFTKINGS</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm fnl">FANDUEL</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm sts">STATS</button>
                    <button class="w-full bg-slate-100  sm:text-lg text-[10px] sm:py-4 py-2 font-semibold rounded-md prp">PROPS</button>
                    <button class="w-full bg-slate-100 sm:text-lg  text-[10px] sm:py-4 py-2 font-semibold rounded-md flex justify-center items-center shp">SHOP
                        <img class="sm:w-7 w-4" src="{{ asset('/images/menu-icon/shopping-bag.png') }}" alt="">
                    </button>
                </div>
                <div id="shirt-footer"  class="flex flex-col gap-2 shirt-players">
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">FORWARDS</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>        
                                </div>                                                            
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>       
                                </div>                            
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                                                            
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                             
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                                                             
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                             
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>    
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                                                             
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>                             
                            </div>
                        </div>
                    </div> 
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">DEFENCE</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>      
                                </div> 
                            </div>
                            <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>     
                                </div>                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>      
                                </div> 
                            </div>
                            <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>     
                                </div>                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-3 gap-3">
                            <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>      
                                </div> 
                            </div>
                            <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                <div>
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class="   ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>     
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">GOALIES</h1>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-row justify-center gap-3">
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 1</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>        
                                </div>                                                            
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>       
                                </div>                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-row justify-center gap-3">
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="flex flex-col w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PLAYER 2</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>        
                                </div>                                                            
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                <div class=" ">
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                        </div>
                                        <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                            <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                            <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                        </div>
                                        <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                            <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                        <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                            <img src="" alt="">
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                            <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                        <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                            <p class="text-center">Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>Goals</p>
                                                    <p>Assist</p>
                                                    <p>Points</p>
                                                    <p>Shots</p>
                                                    <p>Blocks</p>
                                                    <p>TOI</p>
                                                    <p>PP TQI</p>
                                                </div>
                                                <div class="sm:text-[10px] text-[5px]">
                                                    <p>.45</p>
                                                    <p>.35</p>
                                                    <p>.80</p>
                                                    <p>2.76</p>
                                                    <p>1.2</p>
                                                    <p>16:53</p>
                                                    <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                            <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                        </div>
                                    </div>       
                                </div>                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-center gap-3">
                            <div class="flex flex-row justify-center gap-3">
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div id="p-box" class="flex flex-col items-center w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-1 mb-6">PRESS BOX</h1>
                        <div class="flex flex-row justify-between frstrow ">
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                  
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                                                                         
                            </div>
                            <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                <div class="">
                                    <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                </div>
                                                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-center gap-3 scondrow">
                            <div class="flex flex-row justify-center gap-3">
                                <div class="flex flex-row items-center rounded-md gap-2 w-[33%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                     
                                </div>
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[33%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                                                
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div id="carsl" class=" my-3 hidden">
                    <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-3]"
                            data-te-carousel-indicators>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="0"
                                data-te-carousel-active
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-current="true"
                                aria-label="Slide 1"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="1"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 2"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="2"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 3"></button>
                        </div>     
                            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                                <div
                                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-active
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                            </div>
                        <button
                        class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Previous</span
                        >
                        </button>
                        <button
                        class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Next</span
                        >
                        </button>
                    </div>
                    <div class="mt-8 w-full flex justify-center">
                       <img class="h-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>                   
                </div>
            </div>
        </div>  
    </div>
</div>
<!-- Mobile end -->
@endsection