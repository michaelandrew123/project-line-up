
@extends('layouts.master')

@section('content')

<!-- Desktop design -->
<div class="w-full flex flex-col items-center block smm-hidden">
    <div class="w-11/12  border-black m-4">
        <div class="flex flex-row justify-between items-center">
            <div class="flex gap-3">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <div class="flex">
                    <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                    <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <div class="flex flex-row items-center xl:gap-5 gap-3">
                <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-slate-500 xl:px-10 lg:px-8 md:px-5 py-2 rounded-sm">NHL</a>
                <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-slate-500 xl:px-10 lg:px-8 md:px-5 py-2 rounded-sm">NFL</a>
                <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-slate-500 xl:px-10 lg:px-8 md:px-5 py-2 rounded-sm">NBA</a>
                <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-slate-500 xl:px-10 lg:px-8 md:px-5 py-2 rounded-sm">MLB</a>
                <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-slate-500 xl:px-10 lg:px-8 md:px-5 py-2 rounded-sm">SOC</a>
                <a href="#">
                    <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col items-center justify-center relative ">
        <div class="flex flex-row justify-center items-center relative w-10/12">
            <img class="w-[20rem] absolute xl:left-[9.5rem] left-0" src="{{ asset('/images/menu-icon/allen_fb.png') }}" alt="">
            <img class="w-[20rem] z-10" src="{{ asset('/images/menu-icon/mahomes_fb.png') }}" alt="">
            <img class="w-[21rem] absolute xl:right-[9.5rem] right-0" src="{{ asset('/images/menu-icon/chase_fb.png') }}" alt="">
        </div>
        <div class="absolute bottom-1 z-20">
            <div class="relative">
                <input class="border border-black xl:w-[50rem] lg:w-[50rem] md:w-[45rem] h-[4.5rem] rounded-lg home-input " type="" value="Search team projected lineups. . .">
                <a class="absolute right-[10px] top-[7px]" href=""><img class=" w-[57px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div>
        <div class="bg-slate-300 h-[2px] w-11/12 "></div>
    </div>
    <h1 class="text-center xl:text-7xl text-5xl font-extrabold mt-24">Your destination for fantasy sports players and bettors</h1>
    <div class="flex flex-col gap-20 w-10/12 mt-24">
        <div class="w-full flex flex-row justify-between">
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-12" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">NHL</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Starting goalies</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Line Combinations</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-10" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">NBA</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Matchups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-11 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">NFL</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Depth Charts</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Matchups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-9 -rotate-45" src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">MLB</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Starting Pitchers</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
        </div>
        <div class="w-full flex flex-row justify-between">
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-9" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">EPL</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Predicted lineups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Matchups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-9" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">MLS</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Predicted lineups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Matchups</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Projections</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                <h1 class="text-4xl font-extrabold">LEARN</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Newletter</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Strategy</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Betting Strategy</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Betting Terms</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Fantasy Sports</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <h1 class="text-4xl font-extrabold">ODDS</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Sports Review</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Best Odds</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player Props</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Futures</a></li>
                    <li><a class="text-xl font-bold text-[#39b6ff]" href="">Bonuses</a></li>
                </ul>
            </div>
        </div>
    </div>
    <img class="w-6/12 mt-32" src="{{ asset('/images/menu-icon/adds-new1.png') }}" alt="">
    <!-- <div class="flex flex-row w-full justify-center gap-16 mt-16">  
        <div class="w-[36%] h-[33rem] border border-slate-300 rounded-3xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-between items-center m-8">
                    <h1 class="text-2xl font-bold">MLB</h1>
                    <p class="text-xl font-bold">11 games</p>
                    <img src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col items-center gap-3 mx-2 mt-2 gap-9 relative">
                    <div class="w-full">
                        <div class="flex flex-row justify-between ">
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/goalie icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">STARTING PITCHERS</p>
                            </div>
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">LINEUPS</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-11/12 "></div>
                    <div class="bg-slate-300 h-full w-[2px] absolute "></div>
                    <div class="w-full">
                        <div class="flex flex-row justify-between ">
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">PROJECTIONS</p>
                            </div>
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">PROPS & ODDS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="w-[36%] h-[33rem] border border-slate-300 rounded-3xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-between items-center m-8">
                    <h1 class="text-2xl font-bold">EPL</h1>
                    <p class="text-xl font-bold">6 games</p>
                    <img src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col items-center gap-3 mx-2 mt-2 gap-9 relative">
                    <div class="w-full">
                        <div class="flex flex-row justify-between ">
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/helmet-icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">PREDICTED LINEUPS</p>
                            </div>
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">MATCHUPS</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-11/12 "></div>
                    <div class="bg-slate-300 h-full w-[2px] absolute "></div>
                    <div class="w-full">
                        <div class="flex flex-row justify-between ">
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">PROJECTIONS</p>
                            </div>
                            <div class=" w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                                <img class="w-[7.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                                <p class="text-[#9e9f9d] text-lg font-bold">ODDS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div> -->
    <div class="w-10/12 flex flex-col mt-16 gap-6">
        <h1 class="text-2xl font-extrabold">What is the importance using projected luneups?</h1>
        <p class="text-xl">
            Projected Lineups can help give you the edge in all types of fantasy sports or sports betting;
            having an idea of who is playing before your competition is always going to put you step  ahead.
            All confirmed lineups are updated as soon as team or reliable source has confirmed the lineup 
            for that day. So whatever you are looking for trusted source on the starters for your favorite football 
            team , or trying to set your daily fantasy lineup on the day's full state of NBA games, Lineups has you 
            covered. You can also find updated rosters for several sports, including updated NBA rosters as well 
            as MLB and nfl rosters.
       </p>
       <p class="text-xl">
            Between Twitter, Instagram, and the dozens of hte social and informational sites, the  barriers for 
            information between teams, reporters, and the public have fallen. Lineups.com does the job of searching
            and colllectingthis information from trusted sources and providing it to you instantly. For example ,
            you can get up to the second news on all NBA starting lineups right here.   
        </p>
        <p class="text-xl">
            When it comes to injuries, we are now able to get constant updates through social media and 
            other platforms, so the question of who is playing or when someone will return lineups can 
            be more accurate and more useful when it comes to fantasy sports, sports wagering, or any 
            purpose it is needed for. Another crucial thing i peace of mind, and you get itr with us, as 
            we validate all our information against our list of trusted sources.
        </p>
        <p class="text-xl">
            Starting  lineups and rosters are just small slice of the overall content and information you can 
            expect to find. we can also provide tons of analytic statistic and data for your fantasy football 
            selections, such as target share, snap counts., and more. These fantasy football stats are critical 
            to not only setting your season-long line-up but also creating yor daily fantasy team in hope of
            dominating.
        </p>
        <p class="text-xl">
            Another element to consider is the weather, which we can provide up -to-date information
            on. On top of this, you can find player projections, which are base on more than simple 
            plug-and-play formula. Tons of data analysis go into our unique fantasy football projections to 
            provide you most accurate numbers as possible. you can also findanalytic articles from our 
            knowledgeable staff and tons of sports, fantasy, and betting news. We also provide up-to-date 
            betting information, including lines. spread, and statistic on NFL games each and every week.  
        </p>
    </div>
</div>
<!-- End desktop design -->
<!-- Mobile design -->
<div class="w-full flex flex-col items-center hidden smm-block">
    <div class="border-black m-4">
        <div class="flex flex-col gap-5">
            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-row items-center gap-1.5">
                    <img class="sm:w-[3rem] w-[1.5rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                    <div class="flex">
                        <h1 class="sm:text-4xl text-2xl font-extrabold">projected</h1>
                        <h1 class="sm:text-4xl text-2xl font-extrabold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <a href="#">
                    <svg class="sm:w-10 w-8 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <!-- <div class="flex flex-row justify-between items-center">
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 sm:px-[2rem] px-[1.5rem] sm:py-2 py-1 rounded-sm">NHL</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 sm:px-[2rem] px-[1.5rem] sm:py-2 py-1 rounded-sm">NFL</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 sm:px-[2rem] px-[1.5rem] sm:py-2 py-1 rounded-sm">NBA</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 sm:px-[2rem] px-[1.5rem] sm:py-2 py-1 rounded-sm">MLB</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 sm:px-[2rem] px-[1.5rem] sm:py-2 py-1 rounded-sm">SOC</button>   
            </div> -->
            <div class="w-full flex flex-row items-center gap-2">
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 w-11/12 h-12 rounded-sm">NHL</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 w-11/12 h-12 rounded-sm">NFL</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 w-11/12 h-12 rounded-sm">NBA</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 w-11/12 h-12 rounded-sm">MLB</button>
                <button class="sm:text-2xl smm-text-md font-bold bg-[#ebece9] text-slate-500 w-11/12 h-12 rounded-sm">SOC</button>   
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col items-center justify-center relative border border-black">
        <div class="flex flex-row justify-center items-center relative w-11/12">
            <img class="absolute left-0 sm:w-[10rem] w-[7rem]" src="{{ asset('/images/menu-icon/basketball_player.png') }}" alt="">
            <img class="absolute sm:left-[7rem] left-[3rem] sm:w-[10rem] w-[7rem] z-0" src="{{ asset('/images/menu-icon/soccer_player.png') }}" alt="">
            <img class="sm:w-[10rem] w-[7rem] z-10" src="{{ asset('/images/menu-icon/hockey_player.png') }}" alt="">
            <img class="absolute sm:right-[7rem] right-[3rem] sm:w-[10rem] w-[7rem] z-0" src="{{ asset('/images/menu-icon/baseball_player.png') }}" alt="">
            <img class="absolute right-0 sm:w-[10rem] w-[7rem]" src="{{ asset('/images/menu-icon/football_player_(2).png') }}" alt="">
        </div>
        <div class="absolute  z-20">
            <div class="relative">
                <input class="border border-black sm:w-[40rem] w-full sm:h-[3.5rem] h-[2.5rem] rounded-lg home-input-mob" type="" value="Search team projected lineups. . .">
                <a class="absolute right-[10px] top-[7px]" href=""><img class=" sm:w-[40px] w-[27px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div>
        <div class="bg-slate-300 h-[2px] w-11/12 "></div>
    </div>
    <h1 class="text-center sm:text-4xl text-2xl font-extrabold mt-20">Your destination for fantasy sports players and bettors</h1>
    <div class="flex flex-col gap-10 w-full mt-24">
        <div class=" flex flex-row justify-evenly">
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="sm:w-12 w-10" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">NHL</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Starting goalies</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Line Combinations</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="sm:w-12 w-9" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">NBA</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Matchups</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-row justify-evenly">
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="sm:w-12 w-10 -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">NFL</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Depth Charts</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Matchups</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="sm:w-12 w-9 -rotate-45" src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">MLB</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Starting Pitchers</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-row justify-evenly">
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">LEARN</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Newletter</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">DFS Strategy</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Betting Strategy</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Betting Terms</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Fantasy Sports</a></li>
                </ul>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row items-center gap-4">
                <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                <h1 class="sm:text-4xl text-3xl font-extrabold">ODDS</h1>
                </div>
                <ul class="flex flex-col gap-2">
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Sports Review</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Best Odds</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Player Props</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Futures</a></li>
                    <li><a class="sm:text-xl text-lg font-bold text-[#39b6ff]" href="">Bonuses</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End mobile design -->


@endsection
