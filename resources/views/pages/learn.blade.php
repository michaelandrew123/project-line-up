@extends('layouts.master-learn')

@section('content')
    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col items-center w-full gap-[7rem] max-w-screen-2xl ">
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
                        <a href="{{url('/nhl/home')}}" class="text-[24px]  font-bold  text-[#38b6ff] px-4 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NHL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#38b6ff] px-4 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NBA</a>
                        <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">SOC</a>
                        <a href="{{url('/nfl/home')}}" class="text-[24px]  font-bold text-[#38b6ff] px-4 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">NFL</a>
                        <a href="" class="text-[24px]  font-bold  text-[#15d869] px-4 py-px border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">BET</a>
                        <a href="" class="text-[24px]  font-bold  text-white bg-[#1c6399] px-4 py-px border border-[#1c6399] rounded-md ">LEARN</a>
                    </div>
                    <a href="#" >
                        <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
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
        