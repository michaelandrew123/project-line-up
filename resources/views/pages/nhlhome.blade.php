@extends('layouts.master')

@section('content')

 
<div class="flex xl:block lg:block md:block  hidden w-full mx-2 bg-slate-100">
    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col border-black m-4 gap-5">
            <div class="flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 md:px-4  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">EPL</a>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">LINE COMBOS</a>
                <a href="{{url('/nhl/ ')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">PROJECTIONS</a>
                <a href="{{url('/nhl/ ')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">NEWS</a>
                <a href="{{url('/nhl/props')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">PROPS & ODDS</a>
            </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div> 
    </div>
    <div class="flex flex-row justify-center w-full xl:gap-3 lg:gap-2">
        <div class="flex flex-col xl:w-[67%] lg:w-9/12 md:w-full">
            <div class="flex flex-col w-full">
                <div class="flex justify-center mb-5">
                    <img class="w-10/12 h-20" src="{{ asset('/images/menu-icon/adds_header.png') }}">
                </div>
                <div class="flex md:flex-row justify-center">
                    <div class="xl:w-[23rem] lg:w-[17rem] md:w-[13rem] h-72 border border-slate-200 relative rounded-xl flex justify-center bg-white">
                        <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-8" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                <h1 class="font-extrabold"> Market Skate</h1>
                            </div>
                            <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-[16rem]">
                            <p class="text-[12px] font-extrabold">San jose changes up their top line as they face the race the Rangers</p>
                            <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[23rem] lg:w-[17rem] md:w-[13rem] h-72  relative ml-5 mr-5 border border-slate-200 rounded-xl flex justify-center bg-white">
                        <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                <h1 class="font-extrabold">Top Tracks</h1>
                            </div>
                            <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[15rem]">
                            <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                            <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[23rem] lg:w-[17rem] md:w-[13rem] h-72  relative border border-slate-200  rounded-xl flex justify-center bg-white">
                        <div class="m-1 mt-6 w-[15rem] flex flex-col gap-2">
                            <h1 class="font-bold "><span class="text-white bg-green-500 text-base px-3 py-2 rounded-full mr-2">$</span>Props and Odds</h1>
                            <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[15rem]">
                            <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                            <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            Hightlights
                        </h1>
                    </div>
                    <div class="bg-[#045473] w-full mb-2">
                        <p class="text-white text-[15px] font-semibold p-0.5 mx-1">NHL Highlights: Blues 6, Maple Leafs 5 (SO)</p>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div >
                            <img class="xl:w-[25rem] lg:w-[20rem] xl:h-64 lg:h-full md:w-[20rem] md:h-full" src="{{ asset('/images/menu-icon/high_lights.png') }}" alt="">
                        </div>
                        <div class="w-[57%] bg-slate-50">
                            <ul id="parent" class="flex flex-col">
                                <li class="flex flex-col border border-slate-400 p-0.5 link">
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:37</p>
                                </li>
                                <li class="flex flex-col border border-slate-400 p-0.5 link">
                                    <a class="text-sm font-semibold ml-2" href="#">NHL Highlight: Jet 3, Flames 2</a>
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:35</p>
                                </li>
                                <li id="-active" class="flex flex-col border border-slate-400 p-0.5 link">
                                    <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Predator 6, Canadiens 3</a>
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                                </li>
                                <li class="flex flex-col border border-slate-400 p-0.5 link">
                                    <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Blues 6, Maple Leafs 5 (SO)</a>
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                                </li>
                                <li class="flex flex-col border border-slate-400 p-0.5 link">
                                    <a class="text-sm font-semibold ml-2" href="#">NHL HIghtlights: Sabres 5, Capital 4 (OT)</a>
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:39</p>
                                </li>
                                <li class="flex flex-col border border-slate-400 p-0.5 link">
                                    <a class="text-sm font-semibold ml-2" href="#">NHL Highlights: Panthers 5, Coyotes 3</a>
                                    <p class="text-[13px] opacity-50 ml-2">NHL | 5:36</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ">
                    <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            NHL Starting Goalies
                        </h1>
                    </div>
                    <div class="flex w-full md:flex-row justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3">
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%] md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>                          
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%] md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>   
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%] md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="flex w-full md:flex-row justify-center xl:justify-evenly lg:justify-between md:justify-between">
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%]  md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>                          
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%]  md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>   
                        <div class="w-[31%] xl:h-[21rem] lg:h-[19rem] md:w-[32%]  md:h-[18rem]  relative rounded-xl bg-white">
                            <div class="flex m-1 mt-5 ">
                                <img class="xl:w-20 lg:w-[4rem] xl:h-24 lg:h-[5rem] md:w-[4rem] md:h-[5rem] " src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-[11px] font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 lg:pb-5 md:pb-1">
                                <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-5">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center xl:w-[17rem] lg:w-[w-14rem] justify-between">
                                <div class="flex flex-row items-center">
                                    <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row xl:gap-3 lg:gap-2">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="xl:w-[25px] xl:h-[25px] lg:w-[25px] lg:h-[25px] md:w-[20px] md:h-[20px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="relative">
                        <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img class="w-[70%] h-80" src="{{ asset('/images/menu-icon/adds-new1.png') }}">
                </div>
                <!-- NHL combinations penguins -->
                <!-- <div class="flex flex-col">
                    <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            NHL Line Combinations
                        </h1>
                    </div>
                    <div class="flex md:flex-row justify-center justify-evenly mb-3">
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex md:flex-row justify-center justify-evenly">
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] h-[21rem] border border-black  rounded-xl ">
                            <div class="flex flex-row items-center  w-full justify-evenly">
                                <img class="w-[5.5rem] mt-2" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                <div class="flex flex-col ">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/transaction icon.png') }}">
                                        <p class="text-[10px] font-bold text-sky-600">Morning skate</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-extrabold">Pittburgh Penguins</h1>
                                        <p class="text-[10px] font-semibold">Line Combinations</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                                <div class="flex flex-row w-[80%] justify-evenly">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                    <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform4.png') }}">
                                </div>
                            </div>
                            <div class="flex flex-row items-center mt-6">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="flex flex-col xl:w-full lg:w-11/12">  
                <div class="flex flex-col">
                   <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            NHL Player News
                        </h1>
                    </div>
                    <div class="flex flex-row w-full xl:justify-evenly lg:justify-between md:justify-between mb-3">
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem]  rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" xl:text-xl lg:text-lg md:text-base  font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem] rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" xl:text-xl lg:text-lg md:text-base  font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem]  rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-lg md:text-base  font-extrabold">Connor Mcdavid</h1>
                                        <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full xl:justify-evenly lg:justify-between md:justify-between mb-3">
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem]  rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" xl:text-xl lg:text-lg md:text-base  font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem]   rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <div>
                                        <h1 class="xl:text-xl lg:text-lg md:text-base  font-extrabold">Auston Mathews</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                    </div>   
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                                <p class="text-[9px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[31%] xl:h-[21rem] lg:h-[21rem] md:w-[32%] md:h-[18rem]   rounded-xl bg-white relative">
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">
                                <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-[11px] font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="xl:text-xl lg:text-lg md:text-base  font-extrabold">Connor Mcdavid</h1>
                                        <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-center gap-24">
                    <img class="xl:w-96 lg:w-80 md:w-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="xl:w-96 lg:w-80 md:w-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div> 
                <div class="flex flex-col w-full  mt-10 hidden">  
                    <div class="flex flex-col gap-9">
                        <div class="flex items-center">
                            <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                NHL Line Combinations
                            </h1>
                        </div>
                        <ul class="w-full flex flex-col gap-5">
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            <li class="flex flex-row justify-between">
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
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>   
        <!-- Articles  -->
        <div class=" flex flex-col xl:w-60 xl:w-[11rem] lg:w-[8rem] gap-8  ">
            <img class="w-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
            <div class="flex flex-col gap-3 ml-5">
                <div class="flex flex-row ">
                    <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                    <h1 class="text-md font-semibold">Latest Articles </h1>
                </div>
                <hr>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                    <p class="xl:text-[10px] lg:text-[10px] md:text-[9px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                </div>
            </div>
            <img class="mt-[28rem] w-[17rem] h-[35rem]" src="{{ asset('/images/menu-icon/adds1.png') }}">
        </div>    
        <div class="flex flex-row relative xl:justify-between lg:justify-center hidden">  
          
            <div class="flex flex-col xl:w-[67%] lg:w-auto ">  
                <div class="flex flex-col">
                    <div class="flex items-center">
                        <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                            NHL Player News
                        </h1>
                    </div>
                    <div class="flex flex-row w-full justify-between mb-3">
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p> 
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                           <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                            <div class="flex m-1 mt-5 ">
                                <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                <div class="ml-2">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                        <p class="text-[11px] font-bold">Injury</p>
                                    </div>
                                    <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                    <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                    
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-[14px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                    </div>
                </div>      
                <div class="flex flex-row justify-center">
                    <div class="flex flex-col">
                        <div class="flex items-center ">
                            <img class="w-14 h-14" src="{{ asset('/images/home-page/graph-logo.png') }}">
                            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                Projections
                            </h1>
                        </div>
                        <div class="flex flex-row overflow-x-clip mx-1 ">
                                <table class="tbl table-fixed flex flex-row ">
                                    <tr>
                                        <th class="relative ">First
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1 text-[#8bbf9b]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th >
                                        <th class="relative">Last
                                        <div class="absolute right-0 bottom-1  ">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="relative">Pos
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th >
                                        <th class="relative">Team
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="relative">Opp
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="relative" style="width:9%;">Start/line
                                        <div class="absolute right-px bottom-1">
                                                <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-4 h-4 relative bottom-px right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="relative" style="width:8%;">PP Unit 
                                        <!-- <div class="absolute right-0 bottom-1">
                                                <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-4 h-4 relative bottom-1 right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div> -->
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblGoals relative">Goals
                                            <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblWin relative">Win%
                                            <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblSalary relative" style=" width:9%; font-size:14px;">DK Salary
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblProj relative" style=" width:9%; font-size:14px;">DK PROJ
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblSalary2 relative" style=" width:9%; font-size:14px;">FD Salary
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        <th class="tblProj2 relative" style=" width:9%; font-size:14px;">FD PROJ
                                        <div class="absolute right-0 bottom-1">
                                                <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                        </div>
                                        </th>
                                        
                                    </tr>
                                    <tr>
                                        <td>Auston</td>
                                        <td>Mathew</td>
                                        <td>C</td>
                                        <td>TQR</td>
                                        <td>@ DET</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.73</td>
                                        <td class="tblWin">63.2</td>
                                        <td class="tblSalary">9200</td>
                                        <td class="tblProj">29.9</td>
                                        <td class="tblSalary2">10200</td>
                                        <td class="tblProj2">34.99</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Huberdaeu</td>
                                        <td >W</td>
                                        <td>FLA</td>
                                        <td>vs. EDM</td>
                                        <td class="bg-[#ffd966] text-center">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">4.19</td>
                                        <td class="tblWin">67.5</td>
                                        <td class="tblSalary">7100</td>
                                        <td class="tblProj">25.39</td>
                                        <td class="tblSalary2">8800</td>
                                        <td class="tblProj2">32.65</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Alexander</td>
                                        <td>Barkov</td>
                                        <td >C</td>
                                        <td>FLA</td>
                                        <td>vs. EDM</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">4.19</td>
                                        <td class="tblWin">67.5</td>
                                        <td class="tblSalary">7500</td>
                                        <td class="tblProj">25.15</td>
                                        <td class="tblSalary2">9900</td>
                                        <td class="tblProj2">30.62</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Nathan</td>
                                        <td>Mackinnon</td>
                                        <td >C</td>
                                        <td>COL</td>
                                        <td>@ JVK</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.27</td>
                                        <td class="tblWin">58.3</td>
                                        <td class="tblSalary">8700</td>
                                        <td class="tblProj">23.68</td>
                                        <td class="tblSalary2">9800</td>
                                        <td class="tblProj2">27.18</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Charlie</td>
                                        <td>McAvoy</td>
                                        <td >D</td>
                                        <td>BOS</td>
                                        <td>@ SJ</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.05</td>
                                        <td class="tblWin">60</td>
                                        <td class="tblSalary">5900</td>
                                        <td class="tblProj">10.44</td>
                                        <td class="tblSalary2">5400</td>
                                        <td class="tblProj2">12.52</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Sam</td>
                                        <td>Reinhart</td>
                                        <td >W</td>
                                        <td>FLA</td>
                                        <td>vs.EDM</td>
                                        <td class="bg-[#e06666] text-center">3</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">4.19</td>
                                        <td class="tblWin">67.5</td>
                                        <td class="tblSalary">5000</td>
                                        <td class="tblProj">21.26</td>
                                        <td class="tblSalary2">6500</td>
                                        <td class="tblProj2">26.79</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Mikko</td>
                                        <td>Rantanen</td>
                                        <td >W</td>
                                        <td>COL</td>
                                        <td>@ VGK</td>
                                        <td class="tblsLine">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.27</td>
                                        <td class="tblWin">58.3</td>
                                        <td class="tblSalary">7300</td>
                                        <td class="tblProj">20.72</td>
                                        <td class="tblSalary2">9100</td>
                                        <td class="tblProj2">25.33</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Sam</td>
                                        <td>Bennet</td>
                                        <td >C</td>
                                        <td>FLA</td>
                                        <td>vs.EDM</td>
                                        <td class="bg-[#ffd966] text-center">2</td>
                                        <td class="text-center">2</td>
                                        <td class="tblGoals">4.19</td>
                                        <td class="tblGoals">67.5</td>
                                        <td class="tblSalary">5000</td>
                                        <td class="tblProj">20.18</td>
                                        <td class="tblSalary2">6800</td>
                                        <td class="tblProj2">23.37</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Matt</td>
                                        <td>Grzelcyk</td>
                                        <td >D</td>
                                        <td>BOS</td>
                                        <td>@ SJ</td>
                                        <td class="bg-[#ffd966] text-center">1</td>
                                        <td class="text-center">2</td>
                                        <td class="tblGoals">3.05</td>
                                        <td class="tblGoals">60</td>
                                        <td class="tblSalary">4500</td>
                                        <td class="tblProj">8.04</td>
                                        <td class="tblSalary2">4300</td>
                                        <td class="tblProj2">9.96</td>
                                        
                                    
                                    </tr>
                                    <tr>
                                        <td>Mitche</td>
                                        <td>Mamer</td>
                                        <td >W</td>
                                        <td>TOR</td>
                                        <td>@ DET</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.73</td>
                                        <td class="tblWin">63.2</td>
                                        <td class="tblSalary">8000</td>
                                        <td class="tblProj">19.7</td>
                                        <td class="tblSalary2">8200</td>
                                        <td class="tblProj2">24.18</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Alex</td>
                                        <td>Overchkin</td>
                                        <td >W</td>
                                        <td>WSH</td>
                                        <td>@ PHI</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.36</td>
                                        <td class="tblWin">60.8</td>
                                        <td class="tblSalary">8300</td>
                                        <td class="tblProj">18.35</td>
                                        <td class="tblSalary2">9900</td>
                                        <td class="tblProj2">21.42</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>Gaudreu</td>
                                        <td >W</td>
                                        <td>CGY</td>
                                        <td>vs. MIN</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.32</td>
                                        <td class="tblWin">59.8</td>
                                        <td class="tblSalary">7200</td>
                                        <td class="tblProj">18.34</td>
                                        <td class="tblSalary2">8400</td>
                                        <td class="tblProj2">22.28</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Nikita</td>
                                        <td>Kusherov</td>
                                        <td >W</td>
                                        <td>TB</td>
                                        <td>@ NSH</td>
                                        <td class="tblsLine">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.34</td>
                                        <td class="tblWin">60.2</td>
                                        <td class="tblSalary">8700</td>
                                        <td class="tblProj">18.33</td>
                                        <td class="tblSalary2">9800</td>
                                        <td class="tblProj2">22.87</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>Nazem</td>
                                        <td>Kadri</td>
                                        <td >C</td>
                                        <td>COL</td>
                                        <td>@ VJK</td>
                                        <td class="bg-[#ffd966] text-center">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.27</td>
                                        <td class="tblWin">58.3</td>
                                        <td class="tblSalary">7200</td>
                                        <td class="tblProj">18.24</td>
                                        <td class="tblSalary2">9400</td>
                                        <td class="tblProj2">21.82</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Brady</td>
                                        <td>Tkachuk</td>
                                        <td>W</td>
                                        <td>OTT</td>
                                        <td>vs. MTL</td>
                                        <td class="tblsLine">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.45</td>
                                        <td class="tblWin">36.6</td>
                                        <td class="tblSalary">6500</td>
                                        <td class="tblProj">18.1</td>
                                        <td class="tblSalary2">6800</td>
                                        <td class="tblProj2">20.41</td>
                                    
                                        
                                    </tr>
                                    <tr>
                                        <td>Gabriel</td>
                                        <td>Landeskog</td>
                                        <td >W</td>
                                        <td>COL</td>
                                        <td>@ VJK</td>
                                        <td class="bg-[#ffd966] text-center">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.27</td>
                                        <td class="tblWin">58.3</td>
                                        <td class="tblSalary">6400</td>
                                        <td class="tblProj">18.07</td>
                                        <td class="tblSalary2">9000</td>
                                        <td class="tblProj2">22.72</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>David</td>
                                        <td>Pastmak</td>
                                        <td >W</td>
                                        <td>BOS</td>
                                        <td>@ SJ</td>
                                        <td class="bg-[#ffd966] text-center">2</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.05</td>
                                        <td class="tblWin">60</td>
                                        <td class="tblSalary">8300</td>
                                        <td class="tblProj">18.02</td>
                                        <td class="tblSalary2">8600</td>
                                        <td class="tblProj2">20.78</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>William</td>
                                        <td>Nylander</td>
                                        <td >W</td>
                                        <td>TOR</td>
                                        <td>@ DET</td>
                                        <td class="bg-[#ffd966] text-center">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.73</td>
                                        <td class="tblWin">63.2</td>
                                        <td class="tblSalary">6100</td>
                                        <td class="tblProj">17.85</td>
                                        <td class="tblSalary2">7200</td>
                                        <td class="tblProj2">22.06</td>
                                    
                                    </tr>
                                    <tr>
                                        <td>Mathew</td>
                                        <td>Tkachuk</td>
                                        <td >W</td>
                                        <td>CGY</td>
                                        <td>vs. MIN</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.32</td>
                                        <td class="tblWin">59.8</td>
                                        <td class="tblSalary">6300</td>
                                        <td class="tblProj">17.4</td>
                                        <td class="tblSalary2">8300</td>
                                        <td class="tblProj2">21.86</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Kirill</td>
                                        <td>Kaprizov</td>
                                        <td >W</td>
                                        <td>MIN</td>
                                        <td>@ CGY</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">2.68</td>
                                        <td class="tblWin">40.2</td>
                                        <td class="tblSalary">8700</td>
                                        <td class="tblProj">17.21</td>
                                        <td class="tblSalary2">9200</td>
                                        <td class="tblProj2">21.19</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Brad</td>
                                        <td>Marchand</td>
                                        <td >W</td>
                                        <td>BOS</td>
                                        <td>@ SJ</td>
                                        <td class="tblsLine">1</td>
                                        <td class="tblUnit">1</td>
                                        <td class="tblGoals">3.05</td>
                                        <td class="tblWin">60</td>
                                        <td class="tblSalary">7500</td>
                                        <td class="tblProj">17.19</td>
                                        <td class="tblSalary2">8700</td>
                                        <td class="tblProj2">20.36</td>
                                    
                                    </tr>

                                </table>
                        </div>
                        <div class="relative">
                            <a href="" class="text-black font-semibold flex justify-end mr-2">see all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class=" flex items-end xl:block lg:hidden md:hidden">
                <img class="" src="{{ asset('/images/menu-icon/adds5.png') }}">
            </div>  -->
        </div>
    </div>
</div>
    <div class="w-full flex justify-center hidden smm-block">
        <div class="flex flex-row justify-between items-center">
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
        <div class="flex justify-center w-full">
            <div class="flex flex-row justify-evenly w-9/12 ">
                <img class="w-[8rem] " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">
                <img class="w-[8rem] " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">
                <img class="w-[8rem] " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">
            </div>
        </div>
        <div class="relative mx-2 z-20">
            <div class="sticky top-0">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input-mob" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[12px] top-[8px]" href=""><img class=" w-[32px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
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
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">LINE COMBOS</button>
        </div>
        <!-- <div id="carouselExampleControls1" class="carousel slide relative mt-4 nav-corsl my-10" data-bs-ride="carousel">
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls1"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls1"
                    data-te-slide-to="1"
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls1"
                    data-te-slide-to="2"
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full"> 
                    <div class=" flex justify-center">                       
                        <div class="w-[23rem]  h-72 border border-slate-200 relative rounded-xl flex justify-center bg-white">
                            <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-8" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <h1 class="font-extrabold"> Market Skate</h1>
                                </div>
                                <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-[16rem]">
                                <p class="text-[12px] font-extrabold">San jose changes up their top line as they face the race the Rangers</p>
                                <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>  
                    </div> 
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                       <div class="w-[23rem]   h-72  relative ml-5 mr-5 border border-slate-200 rounded-xl flex justify-center bg-white">
                            <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                    <h1 class="font-extrabold">Top Tracks</h1>
                                </div>
                                <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[15rem]">
                                <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                        <div class="w-[23rem]   h-72  relative border border-slate-200  rounded-xl flex justify-center bg-white">
                            <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                <h1 class="font-bold "><span class="text-white bg-green-500 text-[11px] px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds</h1>
                                <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[15rem]">
                                <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                <div class="flex w-full justify-end mt-4">
                                <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleControls1"
                data-bs-slide="prev"
            >   
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls1"
                data-bs-slide="next"
            >                
            </button>
        </div> -->
            <div id="carouselExampleCaptions3" class="relative" data-te-carousel-init data-te-carousel-slide>
                <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-1]"
                    data-te-carousel-indicators>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="1"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="2"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 3"></button>
                </div>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                    <div
                        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
                            <div class="w-[23rem]  h-72 border border-slate-200 relative rounded-xl flex justify-center bg-white">
                                <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-8" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <h1 class="font-extrabold"> Market Skate</h1>
                                    </div>
                                    <img src="{{ asset('/images/home-page/45876_a11.jpg') }}" class="w-[16rem]">
                                    <p class="text-[12px] font-extrabold">San jose changes up their top line as they face the race the Rangers</p>
                                    <div class="flex w-full justify-end mt-4">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
                            <div class="w-[23rem]   h-72  relative ml-5 mr-5 border border-slate-200 rounded-xl flex justify-center bg-white">
                                <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                        <h1 class="font-extrabold">Top Tracks</h1>
                                    </div>
                                    <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[15rem]">
                                    <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                    <div class="flex w-full justify-end mt-4">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
                            <div class="w-[23rem]   h-72  relative border border-slate-200  rounded-xl flex justify-center bg-white">
                                <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                    <h1 class="font-bold "><span class="text-white bg-green-500 text-[11px] px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds</h1>
                                    <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[15rem]">
                                    <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                    <div class="flex w-full justify-end mt-4">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions3"
                data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Previous</span
                >
                </button>
                <button
                class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions3"
                data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Next</span
                >
                </button>
            </div>
     
        <img class="w-full my-10" src="{{ asset('/images/menu-icon/adds_header.png') }}" alt="">
        <div class="flex flex-row justify-center items-center">
            <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                NHL Starting Goalies
            </h1>
        </div>
        <div id="carouselExampleCaptions2" class="relative" data-te-carousel-init data-te-carousel-slide>
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-2]"
                data-te-carousel-indicators>
                <button
                type="button"
                data-te-target="#carouselExampleCaptions2"
                data-te-slide-to="0"
                data-te-carousel-active
                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                aria-current="true"
                aria-label="Slide 1"></button>
                <button
                type="button"
                data-te-target="#carouselExampleCaptions2"
                data-te-slide-to="1"
                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                aria-label="Slide 2"></button>
                <button
                type="button"
                data-te-target="#carouselExampleCaptions2"
                data-te-slide-to="2"
                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                aria-label="Slide 3"></button>
            </div>
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                <div
                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-2]"
                data-te-carousel-active
                data-te-carousel-item
                style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center">
                        <div class="w-[23rem] h-[21rem]  relative rounded-xl bg-white border border-black">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-36 w-26" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-md font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-1">
                                <p class="text-md font-extrabold mb-2">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="text-[11px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center justify-between mx-2">
                                <div class="flex flex-row items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <img class="w-[25px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-2]"
                data-te-carousel-item
                style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center">
                        <div class="w-[23rem] h-[21rem]  relative rounded-xl bg-white border border-black">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-36 w-26" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-md font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-1">
                                <p class="text-md font-extrabold mb-2">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="text-[11px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center justify-between mx-2">
                                <div class="flex flex-row items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <img class="w-[25px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-2]"
                data-te-carousel-item
                style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center">
                        <div class="w-[23rem] h-[21rem]  relative rounded-xl bg-white border border-black">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-36 w-26" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                        <p class="text-md font-bold">Confirmed</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">Igor Shesterkin</h1>
                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                    </div>  
                                </div>
                            </div>
                            <div class=" ml-1 mb-2 pb-1">
                                <p class="text-md font-extrabold mb-2">Igor Sherterk in goal for # NYR vs. Panthers, per Gerard Gallant. No lineup changes</p>
                                <p class="text-[11px] font-semibold">Shesterkin has a 15-5-5 record with a 2.95 GAA and .910 SV%. He made 24 saves in a 3-1 loss to Boston on Thursday.</p>
                            </div>
                            <div class="flex items-center justify-between mx-2">
                                <div class="flex flex-row items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="text-[13px] ">Mollie Walker</h3>
                                        <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <img class="w-[25px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-proj.png') }}">
                                    <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
        </div>
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions2"
            data-te-slide="prev">
            <span class="inline-block h-8 w-8">
            
            </span>
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Previous</span
            >
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button"
            data-te-target="#carouselExampleCaptions2"
            data-te-slide="next">
            <span class="inline-block h-8 w-8">
            
            </span>
            <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Next</span
            >
        </button>
        </div>
        <div class="flex justify-center">
           <img class="w-9/12 my-10" src="{{ asset('/images/menu-icon/adds-new1.png') }}" alt="">
        </div>
        <div class="flex flex-row justify-center items-center">
            <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
            <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                NHL Player News
            </h1>
        </div>
        <!-- <div id="carouselExampleControls3" class="carousel slide relative mt-4 nav-corsl my-10" data-bs-ride="carousel">
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls3"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls3"
                    data-te-slide-to="1"
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleControls3"
                    data-te-slide-to="2"
                    class="mx-[10px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full"> 
                    <div class=" flex justify-center">                       
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <div class="flex justify-center align-center">
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleControls3"
                data-bs-slide="prev"
            >
                
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleControls3"
                data-bs-slide="next"
            >     
                      
            </button>
        </div>
        <div class="flex justify-center">
           <img class="w-6/12 " src="{{ asset('/images/menu-icon/adds3.png') }}" alt="">
        </div> -->
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
                    <div class="flex flex-row justify-center">
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                data-te-carousel-item
                style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center">
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div
                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                data-te-carousel-item
                style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center">
                        <div class="flex flex-col gap-3 w-[23rem] h-[21rem]  rounded-xl bg-white relative border border-black mx-5">
                            <div class="flex m-1 mt-5 ">
                                <img class="h-20 h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                                <div class="flex flex-col ml-2 gap-3">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-[20px] h-[20px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                        <p class="text-md font-bold">Line Changes</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class=" text-3xl font-extrabold">John Tavares</h1>
                                        <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                    </div>                                                                      
                                </div>
                            </div>
                            <div class=" ml-1">
                                <p class="text-md font-extrabold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                <p class="text-[11px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                            </div>
                            <div class="flex flex-row items-center absolute left-3 bottom-2">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="text-[13px] font-extrabold">Chris Benn</h3>
                                    <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
           </div>
	  <button
	    class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
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
	    class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
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
    <!-- <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
	    <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
		    data-te-carousel-indicators>
		    <button
		      type="button"
		      data-te-target="#carouselExampleCaptions1"
		      data-te-slide-to="0"
		      data-te-carousel-active
		      class="mx-[3px] box-content h-[10px] w-[10px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
		      aria-current="true"
		      aria-label="Slide 1"></button>
		    <button
		      type="button"
		      data-te-target="#carouselExampleCaptions1"
		      data-te-slide-to="1"
		      class="mx-[3px] box-content h-[10px] w-[10px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
		      aria-label="Slide 2"></button>
		    <button
		      type="button"
		      data-te-target="#carouselExampleCaptions1"
		      data-te-slide-to="2"
		      class="mx-[3px] box-content h-[10px] w-[10px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
		      aria-label="Slide 3"></button>
		</div>
	    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
		    <div
		      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
		      data-te-carousel-active
		      data-te-carousel-item
		      style="backface-visibility: hidden">
		      <img
		        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
		        class="block w-full"
		        alt="..." />
		      <div
		        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
		        <h5 class="text-xl">First slide label</h5>
		        <p>
		          Some representative placeholder content for the first slide.
		        </p>
		      </div>
		    </div>
		    <div
		      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
		      data-te-carousel-item
		      style="backface-visibility: hidden">
		      <img
		        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
		        class="block w-full"
		        alt="..." />
		      <div
		        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
		        <h5 class="text-xl">Second slide label</h5>
		        <p>
		          Some representative placeholder content for the second slide.
		        </p>
		      </div>
		    </div>
		    <div
		      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
		      data-te-carousel-item
		      style="backface-visibility: hidden">
		      <img
		        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
		        class="block w-full"
		        alt="..." />
		      <div
		        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
		        <h5 class="text-xl">Third slide label</h5>
		        <p>
		          Some representative placeholder content for the third slide.
		        </p>
		      </div>
		    </div>
	   </div>
	  <button
	    class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
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
	    class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
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
	</div> -->

</div>





@endsection
