@extends('layouts.master-soc')

@section('content')

<div class="">
<div class="w-full flex flex-col items-center ">
    <div class="w-11/12 flex justify-center gap-3 items-center block smm-hidden max-w-screen-2xl  bg-[#38b6ff] px-2 py-2">
        <div class="w-full flex flex-col gap-2 ">
            <div class="flex flex-row items-center justify-between ">
                <div class="flex flex-row items-center">
                    <div class="flex flex-row items-center gap-5">
                        <div class="flex flex-col">
                            <img class="w-20 flex" src="{{ asset('/images/teamlogo-svg/ .svg') }}" alt="">
                        </div>
                        <div>
                            <div class="teams text-4xl font-bold text-[#ffffff]">
                              {{  ( !empty($current_name) ? $current_name: 'Manchester City')  }}
                            </div>
                            <div class="teams text-lg font-bold text-[#ffffff]">Starting lineup</div>
                        </div>
                    </div>
                </div>         
            </div>
            <div class="flex flex-row items-center justify-left items-end">
                <div class="flex flex-row gap-10 items-center">
                    <a href="#" class=" " target="_blank">
                        <p class="text-[13px] font-semibold">{{ $result->data->source->name  }}</p>
                    </a>
                    <p class="text-[13px] font-semibold">full date/time</p>
                    <div class="flex gap-2 justify-center items-center">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-4 h-4  rounded-full ">
                        <h1 class="text-[13px] font-semibold uppercase">status->name</h1>
                    </div>      
                </div>
            </div>
        </div>
    </div>  
    <div class="flex flex-row items-center w-11/12 mt-[20px] gap-3 block smm-hidden max-w-screen-2xl" id="sub-hed">
        <button class="w-36  text-[24px] text-black font-bold rounded-md l-ups nfl-bckgrnd active flex justify-center">
            Lineups
        </button>
        <button class="w-36   text-[24px] font-bold rounded-md text-black nfl-bckgrnd create flex justify-center gap-3">
            <img class="w-9" src="{{ asset('/images/menu-icon/icons8-create-50.png') }}" alt="">
            Create
        </button>
        <button class="w-36  text-[24px] font-bold rounded-md text-black nfl-bckgrnd d-kings flex justify-center   gap-3">
            Draftkings
        </button>
        <button class="w-36 text-[24px] font-bold rounded-md text-black nfl-bckgrnd fnl flex justify-center gap-3">
           Fanduel
        </button>
        <button class="w-36 text-[24px] font-bold rounded-md text-black nfl-bckgrnd sts flex justify-center">
            Stats
        </button>
        <button class="w-36   text-[24px] font-bold rounded-md text-black nfl-bckgrnd shp flex justify-center">
            Shop
        </button>
    </div> 
    <!-- Line-ups  -->
    <div id="lu-body" class="w-full flex flex-row justify-evenly gap-7  max-w-screen-2xl">
        <div class="xl:w-8/12 lg:w-8/12 md:w-10/12 block smm-hidden">
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}"> 
            <div id=""  class="flex flex-col gap-2 my-1">
                <div class="flex flex-col  gap-2 w-full">
                    <div class="w-full flex items-center justify-center mt-5">
                      <h1 class="h-8 w-52  bg-[#38b6ff] rounded justify-center flex items-center font-extrabold text-md text-[#ffffff] ">FORMATION 4-2-3-1</h1>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Auston Matthews</p>
                        </div>
                    </div>
                    <div class="flex flex-row mt-10 gap-3">
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Auston Matthews</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">Alexander Kerfoot</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Mitch Marner</p>
                        </div>
                    </div> 
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Auston Matthews</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">Alexander Kerfoot</p>
                        </div>
                    </div> 
                    <div class="flex flex-row mt-10 gap-1.5  ">
                        <div class="flex flex-col items-center w-[32%]  ">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Auston Matthews</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">Alexander Kerfoot</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">Alexander Kerfoot</p>
                        </div>
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Mitch Marner</p>
                        </div>
                    </div> 
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center w-[32%]">     
                            <div class="w-[200px]">
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="  px-3" alt="">
                            </div>
                            <p class="text-center text-sm py-0.5 px-4 font-bold uppercase">Alexander Kerfoot</p>
                        </div>
                    </div>
                </div> 
                <div class="bg-[#d9d9d9] w-full h-1"></div>                
           </div>
       </div> 
 
       @include('partials.soc-sidebar')
       <!-- End of Line-ups -->
        <div id="drf-shp" class="hidden w-full flex flex-col items-center block smm-hidden">
                <div class="w-11/12 md:w-full flex flex-col items-center gap-6 max-w-screen-2xl">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg">FORWARDS</h1>
                    <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                        <div class="flex flex-row items-center gap-2 w-8/12 ">
                            <div class="w-11/12 flex flex-col items-center">
                                <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                    <div class="w-10/12 flex flex-row justify-between gap-2 my-10 max-w-screen-2xl">
                            <div class="flex flex-col items-center gap-8 w-9/12  md:w-full">
                            <div class="bg-slate-300 h-[2px] w-11/12"></div>
                            <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[5rem] text-center">DEFENCE</h1>
                                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                                        <div class="w-11/12 flex flex-col items-center">
                                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                        <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[5rem] ">GOALIES</h1>
                                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                                        <div class="w-11/12 flex flex-col items-center">
                                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                            <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                    <div class="w-full flex flex-col items-center  gap-8 max-w-screen-2xl">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-1</h1>  
                        <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                        <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center gap-2 w-8/12 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                    <div class="w-full flex flex-col items-center  gap-8 max-w-screen-2xl">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-2</h1>  
                        <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                        <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center gap-2 w-8/12 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                                    <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class=" px-3" alt="">
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
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PRESS BOX</h1>
                        <div class="flex flex-row justify-between w-full">
                            <div class="flex flex-col items-center gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
                            </div>
                            <div class="flex flex-col items-center  gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
                            </div>
                            <div class="flex flex-col items-center  gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
                            </div>
                        </div>
                        <div class="flex flex-row justify-between w-full">
                            <div class="flex flex-col items-center gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
                            </div>
                            <div class="flex flex-col items-center  gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
                            </div>
                            <div class="flex flex-col items-center  gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/sample-uniform-removebg-preview.png') }}" class="w-[16rem] px-3" alt="">                            
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
    
@endsection