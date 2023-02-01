
@extends('layouts.master')

@section('content')


<div class="w-full flex flex-col items-center">
    <img src="{{ asset('/images/menu-icon/nfl_banner_2023 (1).jpg') }}" alt="">
    <h1 class="text-center text-7xl font-extrabold mt-24">Your destination for fantasy sports players and bettors</h1>
    <div class="flex flex-row w-full justify-center gap-8 mt-10">
        <div class="w-[23%] border border-black rounded-2xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">NHL</h1>
                    <p class="text-md font-bold">5 games</p>
                    <img src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/goalie icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">STARTING GOALIES</p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">LINE COMBOS</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROJECTIONS</p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROPS & ODDS</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="w-[23%] border border-black rounded-2xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">NFL</h1>
                    <p class="text-md font-bold">5 games</p>
                    <img src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/helmet-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="w-[23%] border border-black rounded-2xl ">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">NHL</h1>
                    <p class="text-md font-bold">5 games</p>
                    <img src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/goalie icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROJECTIONS</p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROPS & ODDS</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="flex flex-row w-full justify-center gap-8 mt-4">  
        <div class="w-[23%] border border-black rounded-2xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">MLB</h1>
                    <p class="text-md font-bold">11 games</p>
                    <img src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/helmet-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="w-[23%] border border-black rounded-2xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">EPL</h1>
                    <p class="text-md font-bold">6 games</p>
                    <img src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/goalie icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROJECTIONS</p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROPS & ODDS</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="w-[23%] border border-black rounded-2xl">
            <div class="flex flex-col ">
                <div class="flex flex-row justify-center items-center gap-14 mt-2">
                    <h1 class="text-2xl font-bold">MLS</h1>
                    <p class="text-md font-bold">6 games</p>
                    <img src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                </div>
                <div class="flex flex-col gap-3 mx-2 mt-2 mb-7">
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/goalie icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/player icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold"></p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between ">
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/projection-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROJECTIONS</p>
                        </div>
                        <div class="bg-[#212123] w-[48%] h-[8.5rem] flex flex-col items-center justify-center gap-3">
                            <img class="w-[4.5rem]" src="{{ asset('/images/menu-icon/props_odds-icon.png') }}" alt="">
                            <p class="text-[#9e9f9d] text-sm font-semibold">PROPS & ODDS</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="w-9/12 flex flex-col mt-32">
        <p class="text-lg">
            <b>Projected Lineups</b> can help give you the edge in all types of fantasy sports or sports betting;
            having an idea of who is playing before your competition is always going to put you step  ahead.
            All confirmed lineups are updated as soon as team or reliable source has confirmed the lineup 
            for that day. So whatever you are looking for trusted source on the starters for your favorite football 
            team , or trying to set your daily fantasy lineup on the day's full state of NBA games, Lineups has you 
            covered. You can also find updated rosters for several sports, including updated NBA rosters as well 
            as MLB and nfl rosters.
       </p>
       <p class="text-lg">
            Between Twitter, Instagram, and the dozens of hte social and informational sites, the  barriers for 
            information between teams, reporters, and the public have fallen. Lineups.com does the job of searching
            and colllectingthis information from trusted sources and providing it to you instantly. For example ,
            you can get up to the second news on all NBA starting lineups right here.   
        </p>
    </div>
</div>



@endsection
