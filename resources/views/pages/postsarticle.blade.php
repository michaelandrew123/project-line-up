@extends('layouts.master')

@section('content')
 

<!-- Desktop design -->
<div class=" flex justify-center bg-slate-100 ">
    <div class="max-w-screen-2xl xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5 block smm-hidden">
        <div class="flex flex-row justify-between items-center">
            <div class="flex items-center gap-3">
                <div  class="flex txt-logo">
                    <h1 class="xl:text-6xl lg:text-5xl text-3xl ">projected</h1>
                    <h1 class="xl:text-6xl lg:text-5xl text-3xl text-[#39b6ff] ">lineups</h1>
                </div>
                <img class="xl:w-16 xl:h-16 w-12 h-12" src="{{ asset('/images/menu-icon/.png') }}" alt="">
            </div>
            <div class="flex flex-row items-center xl:gap-5 gap-3">
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">NHL</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">NFL</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">NBA</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">MLB</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">EPL</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-8 px-4  py-2 rounded-md">LEARN</button>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-row justify-between w-full gap-3">
            <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</button>
            <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</button>
            <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</button>
            <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</button>
            <button class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</button>
        </div>
        <div class="relative">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>
    </div>
</div>
<div class="flex w-full justify-center">
<div class="w-full flex flex-col justify-center gap-5 max-w-screen-2xl">
    <div class="flex flex-col items-center justify-between bg-[#38b6ff] w-full h-52 border border-black smm-hidden  ">
        <h1 class="text-black xl:text-5xl lg:text-4xl md:text-2xl font-semibold">Toronto Maple Leafs easily the top stack tonight</h1>
        <div class="flex flex-row">
           <img class="xl:w-28 xl:h-28   border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt=""> 
           <img class="xl:w-28 xl:h-28  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
           <img class="xl:w-28 xl:h-28   border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
        </div>
    </div>
    <div class="max-w-full flex flex-row justify-evenly ">
        <div class="flex flex-col gap-10 smm-hidden">
            <p class="text-xl">
                 As the NHL seaon continues, daily fantasy sports (DFS) players are <br>
                constantly searching for the top stack combinations to maximize their <br>
                chances of winning. For tonight's games, Auston Mathews, Mitch Marner,<br> 
                and Calle Jarnkrok are the top stack to target.
            </p>
            <p  class="text-xl">
                <span class="font-bold">Mathews</span>  has been one of the best players in the NHL this season, and he <br>
                has been an absolute force on the offensive end of the ice. He is currently <br>
                incredible pace, with 11 goals in his last 11 games. Not only is Matthews a <br>
                threat to score every time he touches the puck , but he also gets plenty of <br>
                shots on goal and can contribute with assist as well. He is a must have <br> 
                player in any DFS lineup.
            </p>
            <p  class="text-xl">
                <span class="font-bold">Marner</span> has been Matthew's primary linemate this season, and the two have <br>
                formed one of the best duos in the NHL. Marner is an elite playermaker, with <br>
                44 assists on the reason, ang he has been on tear recently with nine <br>
                goals on the reason, ang he is a key player on the power play. Playing <br>
                alongside Mathews, Marner is a strong option in any DFS lineup.
            </p>
            <p  class="text-xl">
               <span class="font-bold">Jarnkrok</span> 
                While Matthews and Marner are the well-known names, Calle Jarnkrok <br>
                is an underrated  player who can provide some value is DFS. He has been on <br>
                a hot streak recently, with five goals and teo assist in his  last seven <br>
                games. Jarnkrok is a versatile player who can contribute in multiple ways. <br>
                the same star power as Matthews and Marner, but he can provide a solid <br>
                complement to the stack.  
            </p>
            <img class="w-full" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            <p class="text-xl">
                Another reason why this stack is the top choice for tonight's games is their <br>
                favorable matchup against their opponents. Matthews and Marner are <br>
                facing the Ottawa Senators, who have one of the worst defenses in the <br>
                NHL, allowing an average of 3.34 goals per game. 
            </p>
            <p class="text-xl">
                In conclusion, Auston Matthews, Mitch marner, and Calle Jarnkrok make for <br>
                the top stack in tonight's DFS lineup. With their impressive offensive skills, <br>
                recent hot steak, and favorable matchups against weaker defence, these <br>
                three players  are poised to have big nights and provide excellent value for <br>
                DFS players.  
            </p>
            <div class="w-full flex flex-col items-end">
                <p class="text-xl font-semibold ">January 27, 2023</p>
                <div class="flex flex-row">
                  <img class="xl:w-12 xl:h-12  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                  <img class="xl:w-12 xl:h-12  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                  <img class="xl:w-12 xl:h-12  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                </div>
            </div>
            <div class="flex flex-col">
              <div class="flex items-center justify-between">
                    <p class="text-md font-semibold">AROUND THE WEB</p>
                    <img class="xl:w-6 xl:h-6  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
              </div>
              <div class="bg-orange-500"></div>
              <div class="flex gap-5">
                    <div class="flex flex-col">
                        <img class="xl:w-[13rem] xl:h-[7rem]  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                        <p class="text-sm font-semibold">
                            Oakville Millionaire: How to Get <br>
                            Rich with Bitcoin, Without <br>
                            Buying Bitcoin
                        </p>
                    </div>  
                    <div class="flex flex-col">
                        <img class="xl:w-[13rem] xl:h-[7rem]  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                        <p class="text-sm font-semibold">
                           This C$6 Trick Removes <br>
                           Wrinkles Like Crazy!
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <img class="xl:w-[13rem] xl:h-[7rem]  border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                        <p class="text-sm font-semibold">
                            We will Guess Your Education <br>
                            Level in 20 Questions
                        </p>
                    </div>               
              </div>
            </div>
        </div>
        <div class=" flex flex-col w-64 xl:w-2/12 lg:w-2/12 md:w-[8rem] gap-8 block smm-hidden">
            <div class="flex flex-col gap-3 ml-5">
                <div class="flex flex-row ">
                    <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                    <h1 class="text-md font-bold">Latest Articles </h1>
                </div>
                <hr>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
            </div>     
        </div>  
    </div>
</div>
</div>


@endsection