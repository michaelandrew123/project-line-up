
@extends('layouts.master-nhl')

@section('content')
<!-- Desktop design -->
    <!-- <div class="w-full flex justify-center ">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col border-black m-4 gap-5 block  smm-hidden max-w-screen-2xl">
            <div class="flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-5  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">EPL</a>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</a>
                <a href="{{url('/nhl/player-news')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</a>
            </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div>
    </div> -->
    <div class="w-full flex justify-center bg-slate-100 ">
       <div class="w-11/12 flex flex-row justify-between gap-3 block  smm-hidden max-w-screen-2xl">
          <div class="flex flex-col  w-9/12 gap-5">
                <div class="w-full bg-[#d9d9d9] flex flex-row  items-center rounded-md">
                    <h1 class="text-center py-10 text-3xl font-bold w-full">  {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }} Line Combinations</h1>
                </div>
                <div class="flex flex-col w-full  mt-7">  
                    <div class="flex flex-col ">
                        <ul class="w-full flex flex-wrap gap-5">
                        @foreach($team->data as $key=>$val)
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white gap-px">
                                    <div class="flex flex-row items-center w-auto gap-2">
                                        <img class="w-[2.5rem]" src="{{$val->logo->src}}" alt="">
                                        <h1 class="text-lg font-bold">{{$val->name}}</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                        @endforeach
                                <!-- <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button> -->
                          
                            <!-- <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-between gap-3">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li>
                            <li class="flex flex-row justify-evenly">
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                                <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                    <div class="flex flex-row items-center w-auto">
                                        <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                    </div>
                                    <p class="text-sm font-bold mb-2">Line Combinations</p>
                                </button>
                            </li> -->
                        </ul>
                    </div>
                </div> 
                <div class="flex flex-row w-full ">
                   <img class="w-full h-32 border border-black" src="{{ asset('/images/menu-icon/.png') }}">
                </div>               
                    <p class="text-xl my-5">
                        In fantasy sports betting, <span class="font-semibold"> line combinations</span> can be used to analyze 
                        player performance and make informed decisions. In fantasy sports, understanding
                        player statistics and tendencies, as well as their role in the team's line combinations,
                        can help in determining the most valuable players to draft for fantasy team. In
                        and weaknesses, and can be used to make more informed predictions about the 
                        outcome of the game. This information can be also be used to determine which players
                        are likely to have a significant impact on the game, which can be used to make
                        more accurate picks for player props or fantasy sports contests. Overall, line
                        combinations play a crucial role in both fantasy sports and sports betting, as they 
                        provide valuable information that can used to make informed decisions.
                    </p>
                   <div class="flex flex-col w-full my-5">
                      <h1 class="text-xl font-extrabold">
                          10 reason why using  projectedlineups.com to view updated line combinations is important in fantasy sports
                      </h1>
                       <ol class="text-xl list-decimal ml-10 gap-3">
                            <li>Better decision making: Projected lineups provide valuable information that can 
                              help you make informed decisions about which players 
                              to start or sit in your fantasy lineup.
                            </li>
                            <li>
                                Avoiding inactive players: Projected lineups can help you avoid starting inactive 
                               players, which can hurt your team's chances of winning.
                            </li>
                            <li>
                              Injuries & suspensions: Knowing a player's projected role in the lineup can help you 
                              stay up-to-date on any changes due to injury or suspension.
                            </li>
                            <li>
                              Maximize production: Projected lineups can give you an idea of a player's 
                              expected playing tme, helping you maximize your team's production.
                            </li>
                            <li>
                              Better lineup construction: By using projected lineups, you can make more 
                              informed decision about which  players to draft and build a stronger overall
                              lineup.
                            </li>
                            <li>
                               Improved flexibility: Projected lineups can give you more flexibility in making 
                              lineup decisios, as you can adjust your team based on the latest information.
                            </li>
                            <li>
                              Increased competitiveness: With access to the most up-to-date projected
                              lineups, you can stay onne step ahead of your competition, giving you a better 
                              chance of winning. 
                            </li>
                            <li>
                              Monitor trends: Projected lineups can help you identify player trends and
                              make more informed decisions based on the past performance.
                            </li>
                            <li>
                              Improved matchups: By using projected lineups, you can gain insight into 
                              favorable and unfavorable matchups, helping you make more strategic lineup
                              decisions.
                            </li>
                            <li>
                              Reduces stress: Having access to projected lineups can reduce the stress of
                              making lineup decisions, as you will have more information at your disposal.
                            </li>
                        </ol>
                   </div>
                   <div class="flex flex-col w-full gap-3">
                      <h1 class="text-xl font-extrabold">
                           10 reasons why using projectedlineups.com for updates line combinations is important in gambling
                      </h1>
                       <ol class="text-xl list-decimal ml-10">
                            <li>
                                Improved odds: Projected lineups provide accurate information that can help
                                 you make more informed decisions, giving you an edge in betting.
                            </li>
                            <li>
                               Injuries & suspensions: Projected lineups can help you stay up-to-date wit any 
                               changes in player's availability due to injury or suspension.
                            </li>
                            <li>
                              Strategy: Knowing the starting lineup can inform your betting strategy, helpng
                              you take advantage matchups and player tendencies.
                            </li>
                            <li>
                               Trends: Projected lineups can give you insight into a team's recent performance 
                               and trends, which can help you make more accurate predictions.
                            </li>
                            <li>
                               Value: By using projected lineups, you can identify players who are undervalued
                               or overvalued, helping you find value in your bets.
                            </li>
                            <li>
                               Improved odds: Having accurate information on player's role in the lineup can
                                help you get better odds on your bets, making it easier to win.
                            </li>
                            <li>
                               Optimal lineups:  Projected lineups can provide valued information for those 
                               using DFS (daily fantasy sports) sites, allowing for more optimized lineups.
                            </li>
                            <li>
                               Late-breaking news: Having access to the most up-to-date projected lineups
                               can help you react quickly to any last-minute changes, giving  you an advantage.
                            </li>
                            <li>
                               Consistency : With projected lineups, you can tracka player's performance over
                               time, helping you make more consistent betting decisions.
                            </li>
                            <li>
                               Betting opportunities:  Projected lineups can open up new betting opportunities,
                               giving you the chance to make more profitable wagers.  
                            </li>
                        </ol>
                   </div>
           </div>
           <div class="w-3/12 mt-5 block smm-hidden relative">
            <div class="relative sticky top-0">
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
                        <p class="font-semibold text-sm">Props and Odds</p>
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
                    <div id="injury" class="flex flex-col gap-2 ml-3 ">
                        @php
                          $team_injury_count = 0; 
                        @endphp 
                        @foreach($article->data as $key=>$val)
                            @if(isset($val->type))
                                @if($val->type->slug === 'injury') 
                                    @php 
                                     $team_injury_count++ 
                                    @endphp
                                    <div id="injry" class="flex flex-col" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">
                                        <div class="w-full flex flex-row justify-between ">
                                            <p class="font-semibold text-sm">{{$val->player->full_name}}</p>
                                            <i class="text-sm">{{$val->source->retrieved_at->date}}</i>
                                        </div>
                                        <p class="text-sm">{{$val->title}}</p>
                                    </div>
                                @endif
                            @endif
                        @endforeach
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
                    @php
                      $article_count = 0; 
                    @endphp
                    @foreach($article->data as $key=>$val)
                        @php
                        $article_count++
                        @endphp
                        <div class="flex flex-col gap-2 ml-3" style="{{ $article_count  > 10 ? 'display: none' : ''}}">
                            <div class="w-full flex flex-row justify-between">
                                <p class="font-semibold text-sm">{{$val->player->full_name}}</p>
                                <p class="text-sm">{{$val->source->retrieved_at->date}}</p>
                            </div>
                            <p class="text-sm">{{$val->title}}</p>
                        </div>
                    @endforeach
                    <div class="w-full flex justify-center">
                        <a class="font-semibold text-sm" href="{{url('/nhl/player-news')}}">View All NHL News</a>
                    </div>
                </div>
                <div class="flex flex-col gap-6 items-center mt-6">
                    <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                    <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div> 
            </div>          
        </div>
    </div>
<!-- End of Design -->


<!-- Mobile Design -->
<div class="w-full hidden smm-block">
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
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col mx-2">
        <img class="w-full my-1.5 " src="{{ asset('/images/menu-icon/adds_header.png') }}" >         
        <div class="w-full h-20 bg-[#d9d9d9] flex border rounded-lg justify-center items-center ">
            <h1 class="text-xl font-bold text-black ">NHL Line Combinations</h1>
        </div>
        <div class="mx-1 my-3 flex flex-col gap-3">
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
            </div>
            <div class="flex justify-center">
                <div class="w-[33%] flex flex-row sm:justify-between justify-center gap-3">
                    <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                    <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                </div>
            </div>  
        </div>
        <div class="flex flex-col gap-3 mt-8">
            <div class=" w-full flex justify-center">
                <img class="w-[25rem] h-72" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div> 
            <div class=" w-full flex justify-center">
                <img class="w-[25rem] h-64" src="{{ asset('/images/menu-icon/high_lights.png') }}" alt="">
            </div>
            <img class="w-auto my-3" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
        </div>       
    </div>
</div>
 



@endsection
