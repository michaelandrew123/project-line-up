@extends('layouts.master-learn')

@section('content')

    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-center w-full gap-[5rem] max-w-screen-2xl ">
           <div class="flex flex-row justify-between items-end flex w-full my-5">
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
            </div>
            <div class=" w-full flex flex-col items-center">
                <div class="flex flex-row w-full justify-evenly">
                    <img class="w-[15rem] " src="{{ asset('/images/menu-icon/player-3.png') }}" alt="">
                    <img class="w-[15rem] " src="{{ asset('/images/menu-icon/player-2.png') }}" alt="">
                    <img class="w-[15rem] " src="{{ asset('/images/menu-icon/player-3.png') }}" alt="">
                    <img class="w-[15rem] " src="{{ asset('/images/menu-icon/player-2.png') }}" alt="">
                </div>
                <div class="relative w-full">
                    <input class="w-full border border-2 border-black text-center text-lg font-bold rounded h-14" type="text" value="Search Projected Lineups">
                    <a class="absolute top-0 right-0" href="">
                      <img class="w-[65px] " src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                   </a> 
                </div>
            </div>
            <div class="w-full flex justify-between">
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                      <img class="w-12" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                      <h1 class="text-4xl font-bold">NHL</h1>
                    </div>
                    <ul class="flex flex-col gap-2">
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Line Combinations</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="{{url('/nhl/')}}">Starting goalies</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-4">
                        <img class="w-10" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                        <h1 class="text-4xl font-bold">NBA</h1>
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
                        <h1 class="text-4xl font-bold">NFL</h1>
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
                    <img class="w-10" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                    <h1 class="text-4xl font-bold">EPL-MLS</h1>
                    </div>
                    <ul class="flex flex-col gap-2">
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Starting Lineups</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Matchups</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">DFS Projections</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Latest Articles</a></li>
                        <li><a class="text-xl font-bold text-[#39b6ff]" href="">Player News</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full  flex flex-col  mt-16 gap-6  ">
                <h1 class="text-2xl font-bold">What is the importance using projected luneups?</h1>
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
    </div>

@endsection
        