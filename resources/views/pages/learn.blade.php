{{--@extends('layouts.master-learn')--}}

@extends('layouts.master-nhl-v1')

@section('content')
    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-center w-full gap-[7rem] max-w-screen-2xl ">

            <div class="w-full flex flex-col  gap-9">
               <div class="flex flex-row justify-between">
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">NHL</h1>
                    </div>
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">NBA</h1>
                    </div>
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem] -rotate-45" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">NFL</h1>
                    </div>
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]  " src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">EPL</h1>
                    </div>
               </div>  
               <div class="flex flex-row justify-between">
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]  " src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">MLB</h1>
                    </div>
                    <div class="border border-black rounded h-28 w-64 flex justify-center items-center gap-3">
                        <img class="w-[3rem] h-[3rem] border border-black" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                        <h1 class="text-black font-bold text-2xl">PROJECTIONS</h1>
                    </div>
                    <div class="border border-5 border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]  h-[3rem] rounded-full " src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">BETTING</h1>
                    </div>
                    <div class="border border-5 border-black rounded h-28 w-64 flex justify-center items-center gap-5">
                        <img class="w-[3rem]  h-[3rem] " src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                        <h1 class="text-black font-extrabold text-2xl">STATS</h1>
                    </div>
               </div>  
                <div class="flex flex-col w-full gap-3">
                    <h1 class="text-2xl font-semibold">Whats is the most importance of using projected lineups?</h1>
                    <p class="text-xl  font-semibold">Projected lineups can help ou give the edge in all types of 
                        fantasy sports or sports bettig; having an idea of <br/>
                        who is playing before your competition is alwayts going to 
                        put you a step ahead. All confirmed lineups are</p>
                </div>
            </div>
        </div>
    </div>
@endsection
        