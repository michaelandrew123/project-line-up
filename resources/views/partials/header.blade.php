


<nav class="bg-white shadow-lg shadow-[#ececec]">


    <div class="md:flex md:flex-col sm:block "  
    @if(URL::current()==route('nfl.home')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.starting-goalies')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.home')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.line-combos')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.team-news')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.individual-player-news')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.all-player-news')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.line-combinations')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.props')) style="display:none !important;" @endif
    @if(URL::current()==route('nhl.player-news')) style="display:none !important;" @endif
    >
    
        <div class="bg-[#545454] w-full h-[6rem] gap-1 flex justify-center ">
            <!-- <div class=" flex flex-col items-center w-[10rem] gap-1.5 ml-1.5">
                <select style="-webkit-appearance: none;" class="font-bold text-[12px] border border-white rounded-[4px] w-[9rem] h-[29px] snap-none pl-2 ">
                    <option class="text-lg font-semibold" value="" class="font-bold text-[12px] p-5">All Sports</option> 
                    <option class="text-lg font-semibold" value="" class="font-bold text-[12px] p-5">NHL</option>
                    <option class="text-lg font-semibold" value="" class="font-bold text-[12px] p-5">NBA</option>
                </select>
                <div class="flex flex-row justify-center bg-[#27282d]">
                    <button class="font-semibold bg-[#27282d] text-[12px] text-white py-1 px-3 border border-[#27282d] rounded-md hover:bg-white hover:text-[#49a1dd]">GAMES</button>
                    <button class="font-semibold bg-[#27282d] text-[12px] text-white py-1 px-3 border border-[#27282d] rounded-md hover:bg-white hover:text-[#49a1dd]">LEADERS</button>
                </div>
            </div> -->
            <!-- <div class="flex gap-1">
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-white w-[11rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                <div class="bg-white w-[11rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                <div class="bg-white w-[11rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                </div>
                <div class="flex items-center h-[5.5rem]">
                <div class="w-[3rem] h-[88%] bg-black border border-black rounded-[4px] flex items-center justify-center">
                        <a class="text-white text-center hover:underline" href="#">
                            <h1 class="text-[14px] font-bold">NBA</h1>
                            <p class="text-[10px]">View All</p>
                        </a>
                </div>
                </div>
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                <div class="bg-white w-[11rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                <div class="bg-white w-[9rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                <div class="bg-white w-[11rem] h-[74px] rounded-[4px] ">
                        <div class="flex flex-col m-1 gap-1">
                            <div class="flex flex-row justify-between">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">JAC</h1>
                                        <p class="text-[11px]">9-8</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1.5">
                                        <img class="w-[18px]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                        <h1 class="text-[13px] font-normalbold">KC</h1>
                                        <p class="text-[11px]">14-3</p>
                                        <p class="text-[11px] font-bold">69.0%</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="text-[11px] text-white font-semibold">KC -8.5</p>
                                    <p class="text-[11px] text-white font-semibold">O/U 48.5</p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex flex-row justify-between ">
                                <p class="text-[11px]">Sun,5:30am EST</p>
                                <p class="text-[11px]">NBC</p>
                            </div>
                        </div>
                </div>
                </div>
            </div> -->         
            <div class="owl-carousel image-slider my-1.5 mx-5 relative " >
                <div class="w-[5rem] h-[5.5rem] bg-black border border-black rounded-[11px] flex items-center justify-center absolute left-[10rem]  smm-left-[10rem] ">
                    <a class="text-white text-center" href="#">
                        <h1 class="text-sm font-bold text-white" >THURS</h1>
                        <p class="text-[26px] font-[700] text-white">1 7</p>
                    </a>
                </div>
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">PHI</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">SEA</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-green-400 px-2 rounded-sm">-140</p>
                                    <p class="text-[13px] text-white bg-rose-600  px-2 rounded-sm">+300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6.5</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">7:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div> 
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">VGK</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">TOR</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-rose-600 px-2 rounded-sm">+140</p>
                                    <p class="text-[13px] text-white bg-green-400  px-2 rounded-sm">-300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">7:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div> 
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">MTL</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">EDM</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-green-400 px-2 rounded-sm">-140</p>
                                    <p class="text-[13px] text-white bg-rose-600  px-2 rounded-sm">+300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">5.5</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">9:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">PHI</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">SEA</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white  bg-rose-600 px-2 rounded-sm">+140</p>
                                    <p class="text-[13px] text-white bg-green-400  px-2 rounded-sm">-300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6.5</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">10:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">WPG</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">PIT</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-green-400 px-2 rounded-sm">-185</p>
                                    <p class="text-[13px] text-white bg-rose-600  px-2 rounded-sm">+150</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6.5</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">10:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">PHI</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">SEA</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-green-400 px-2 rounded-sm">-140</p>
                                    <p class="text-[13px] text-white bg-rose-600  px-2 rounded-sm">+300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6.5</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">7:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div> 
                <div class="flex flex-row items-center gap-1.5 h-[5.5rem]">
                    <div class="bg-[#212123] w-[14rem] h-[82px] rounded-[8px] ">
                        <div class="flex flex-col  m-2">
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center mr-12">
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">VGK</h1>
                                    </div>
                                    <div class="flex flex-row items-center w-[27px] gap-4">
                                        <img class="w-[88%]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                        <h1 class="text-[14px] font-normalbold text-white">TOR</h1>  
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[13px] text-white bg-rose-600 px-2 rounded-sm">+140</p>
                                    <p class="text-[13px] text-white bg-green-400  px-2 rounded-sm">-300</p>
                                </div>
                                <div class="text-center bg-[#3f4148] p-3 rounded-[5px]">
                                    <p class="text-[11px] text-white font-semibold">O/U</p>
                                    <p class="text-[11px] text-white font-semibold ">6</p>
                                </div>
                            </div>
                            <div class="ml-4 ">
                                <p class="text-[12px] text-slate-400">7:00pm EST</p> 
                            </div>
                        </div>               
                    </div>
                </div>                   
            </div>         
        </div> 
        <div class="sm:relative md:flex md:justify-center z-30">
            <!--Desktop menu and Tablet-->
            <div class="w-full flex-row lg:flex lg:flex-row md:flex items-center sm:flex-wrap sm:px-0 md:block  sm:hidden smm-hidden ">
                <div class="w-full lg:w-8/12 md:w-8/12 bg-current  flex  md:items-center md:justify-start md:justify-between ">
                    <div class="flex flex-row xl:ml-4 ml-2 w-[30%] justify-between">
                        <div class="relative">
                            <!-- <span class="text-[50px] text-white rotate-90 absolute right-2 bottom-[-19px]" href=""></span> -->
                            <select id="SN" style="-webkit-appearance: none;" class="bg-[#545454] xl:w-[8rem] lg:w-[4rem] h-[41px]  text-black text-lg font-semibold xl:text-center lg:text-left xl:pl-0 pl-1.5">
                                <option class="xl:text-lg text-md font-semibold" value="1">
                                   <a class="nhl" href="">NHL</a></option> 
                                <option id="mlb" class="xl:text-lg text-md font-semibold" value="">MLB</option>
                                <option id="nfl" class="xl:text-lg text-md font-semibold" value="">NFL</option>
                                <option id="nba" class="xl:text-lg text-md font-semibold" value="">NBA</option>
                                <option id="soc" class="xl:text-lg text-md font-semibold" value="">SOC</option>
                            </select>
                            <img class="absolute xl:top-1.5 lg:top-2 right-0.5 xl:w-[2.5rem] lg:w-[1.5rem] xl:h-[2rem] lg:h-[1.5rem] xl:block lg:block md:hidden rotate-[270deg] arrw" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
                            <!-- <img class="absolute top-0 right-0 w-[3.5rem] h-[4rem]" src="{{ asset('/images/starting-goalies/arrowhead-white.png') }}" alt="">     -->
                        </div>
                        <div class="flex items-center flex-shrink-0 text-white">
                            <div id="Sl" class="ml-1 flex flex-row items-center gap-1">
                                <div class="relative">
                                    <div class="bg-[#37b3fc] w-[33px] h-[2rem] rounded-full"></div>
                                   <img id="hockey" class="w-[27px] absolute top-[3px] right-[3px]" src="{{ asset('/images/menu-icon/puck icon 40x40.png') }}" alt="">
                                   <img id="base" class="w-[27px] hidden absolute top-[3px] right-[3px]" src="{{ asset('/images/menu-icon/baseball icon 40x40.png') }}" alt="">
                                   <img id="rugby" class="w-[27px] hidden absolute top-[2px] right-[2px]" src="{{ asset('/images/menu-icon/football icon 40x40.png') }}" alt="">
                                   <img id="basket" class="w-[27px] hidden absolute top-[2px] right-[3px]" src="{{ asset('/images/menu-icon/baskball icon 40x40.png') }}" alt="">
                                   <img id="soccer" class="w-[27px] hidden absolute top-[3px] right-[3px]" src="{{ asset('/images/menu-icon/soccer icon 40x40.png') }}" alt="">
                                </div>
                                <div class="flex xl:text-lg lg:text-md md:text-sm font-bold">
                                    <h1 class="italic">projected</h1>
                                    <h1 class="italic text-[#39b6ff] ">lineups</h1>
                                </div>
                                <!-- <img class="xl:w-[200px] lg:w-[150px] md:w-[7rem]" src="{{ asset('/images/menu-icon/logo.png') }}" alt=""> -->
                            </div>
                        </div>
                    </div>
                    <div id="main-menu1" class="pr-4 md:flex md:items-center sm:h-full sm:relative md:h-14 md:leading-13 relative   md:block">
                        <div class="block lg:hidden md:hidden  ">
                            <button id="main-menu-desktop" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white justify-end ">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
                        <div class=" flex flex-row 2xl:gap-12 lg:gap-[1rem] md:gap-[0.5rem] navbar"> 
                            <a href="#responsive-header" rel="daily-menu" class="sm:leading-loose md:leading-13 xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 no-underline h-full block mt-4 md:mt-0 md:inline-block lg:mt-0 text-[16px]  md:text-slate-300  hover:text-white  font-bold">
                                DAILY FANTASY
                                <div class="relative hidden daily-menu active" >
                                    <div class="arrowed absolute xl:top-[13px] xl:left-10 lg:top-[17px] lg:left-10 md:top-[20px] md:left-[18px]">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="projections-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block  mt-4 md:inline-block lg:mt-0 md:mt-0   relative md:text-slate-300  hover:text-white font-bold">
                                PROJECTIONS
                                <div class="relative hidden projections-menu ">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-10 lg:top-[17px] lg:left-10 md:top-[20px] md:left-[18px]">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="news-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                NEWS

                                <div class="relative  hidden news-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-5 lg:top-[17px] lg:left-2 md:top-[20px] md:left-[8px]">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header " rel="betting-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                BETTING

                                <div class="relative  hidden betting-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-5 lg:top-[17px] lg:left-3 md:top-[20px] md:left-2">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="odds-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                PROPS & ODDS
                                <div class="relative  hidden odds-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-7 lg:top-[17px] lg:left-7 md:top-[20px] md:left-5">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                       </div> 
                    </div>
                </div>
                <div id="nav-text" class="  xl:w-4/12 lg:w-4/12 md:w-4/12 bg-[#1d9bf0] flex sm:flex-row-reverse md:flex-row items-center  lg:justify-start">
                    <div id="main-menu2" class="w-full xl:p-[12px]  lg:p-[12px] py-[14px]  w-full flex flex-row items-center 2xl:gap-[0.5rem] xl:gap-[0.5rem] lg:gap-[10px] md:gap-[0.5rem] md:justify-evenly navbar">
                        <div class="2xl:gap-[4rem] xl:gap-[1.5rem] lg:gap-[10px] md:gap-[20px] flex flex-row justify-between NHL ">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                STARTING GOALIES
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[10px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                LINE COMBINATIONS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="2xl:gap-[4rem] xl:gap-[4.5rem] lg:gap-[3rem] md:gap-[20px] flex flex-row justify-between MLB hidden ">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold">
                                STARTING PITCHERS
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                LINEUPS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="2xl:gap-[4rem] xl:gap-[4.5rem] lg:gap-[3rem] md:gap-[20px] flex flex-row justify-between NFL hidden ">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold">
                                DEPTHCHARTS
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                MASHUPS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="2xl:gap-[4rem] xl:gap-[4.5rem] lg:gap-[3rem] md:gap-[20px] flex flex-row justify-between NBA hidden ">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold">
                                STARTING LINEUPS
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                MASHUPS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="2xl:gap-[4rem] xl:gap-[4.5rem] lg:gap-[3rem] md:gap-[20px] flex flex-row justify-between SOC hidden ">
                            <a href="#responsive-header" rel="goalies-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold">
                                STARTING LINEUPS
                                <div class="relative hidden goalies-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                            <a href="#responsive-header" rel="line-menu" class="sm:leading-loose xl:text-[16px] lg:text-[12px] md:text-[8px] sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative hover:text-white  font-bold ">
                                MASHUPS
                                <div class="relative hidden line-menu">
                                    <div class="arrowed absolute xl:top-[13px] xl:left-16 lg:top-[17px] lg:left-14 md:top-[20px] md:left-9">
                                        <div class="arrow-3"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-row xl:gap-3 lg:gap-[3px] md:gap-1 ">
                            <!-- <div class="flex flex-row justify-evenly items-center relative ">
                                <div>
                                    <input type="text" name="text" id="search" class="px-2 xl:w-32 lg:w-[6rem] md:w-[5rem] border-1 rounded-md "/>
                                </div>
                                <div class="absolute right-px xl:top-2.5 lg:top-2.5 md:top-1.5">
                                    <img src = "{{ asset('/images/search.png') }}" class="text-white w-4" />
                                </div>
                            </div> -->
                            <div class="xl:mr-[1.5rem] lg:mr-[1.5rem]">
                                <a href="#">
                                    <svg class="xl:w-8 xl:h-8 lg:w-8 lg:h-8 md:w-[27px] md:h-[27px] text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div> 
            <!--End Desktop menu and Tablet --> 
            <!--Start Mobile menu -->  
            <div class="smm-z-20">
                <div class="xl:hidden lg:hidden md:hidden block border-r-2 border-gray-200" id="mobile-smm-menu ">
                    <div class="flex flex-row justify-between items-center h-16 bg-black w-full pb-2">
                        <div class="flex items-center flex-shrink-0 text-white pl-[9px]">
                            <div id="main-menu1" class="pr-2 md:flex md:items-center sm:h-full sm:relative md:h-14 md:leading-13 relative  md:block">
                                <div class="block flex flex-row items-center gap-[7px]">
                                    <button id="main-menu-mobile" class="flex flex-col items-center gap-2 py-2  text-sky-600 border-sky-600 hover:text-white hover:border-white justify-end ">
                                        <!-- <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg> -->
                                        <div class="w-10 h-1 bg-[#0284c7] border border-[#0284c7] rounded"></div>
                                        <div class="w-10 h-1 bg-[#0284c7] border border-[#0284c7] rounded"></div>
                                        <div class="w-10 h-1 bg-[#0284c7] border border-[#0284c7] rounded"></div>
                                    </button>
                                    <div class="flex items-center">
                                        <img class="w-[10rem]" src="{{ asset('/images/menu-icon/logo.png') }}" alt="">
                                    </div>
                                </div>
                                <div class=" flex flex-row gap-12 navbar smm-hidden md:hidden sm:hidden"> 
                                    <a href="#responsive-header" rel="daily-menu"  class="sm:leading-loose md:leading-13 sm:block sm:mt-0 no-underline h-full block mt-4 md:mt-0 md:inline-block lg:mt-0    md:text-slate-300  hover:text-white  font-bold">
                                        DAILY FANTASY
                                        <div class="relative hidden daily-menu active" >
                                            <div class="arrowed absolute top-5 left-10 ">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="projections-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block  mt-4 md:inline-block lg:mt-0 md:mt-0   relative md:text-slate-300  hover:text-white font-bold">
                                        PROJECTIONS
                                        <div class="relative  hidden projections-menu ">
                                            <div class="arrowed absolute top-5 left-10">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="news-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        NEWS 
                                        <div class="relative  hidden news-menu">
                                            <div class="arrowed absolute top-5 left-5">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header " rel="betting-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        BETTING 
                                        <div class="relative  hidden betting-menu">
                                            <div class="arrowed absolute top-5 left-5">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#responsive-header" rel="odds-menu" class="sm:leading-loose sm:block sm:mt-0 h-full block mt-4 md:inline-block lg:mt-0 md:mt-0  relative md:text-slate-300  hover:text-white font-bold">
                                        ODDS 
                                        <div class="relative  hidden odds-menu">
                                            <div class="arrowed absolute top-5 left-3">
                                                <div class="arrow-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            </div> 
                        </div> 
                        <div class="flex flex-row justify-between ">                                   
                            <div class="flex flex-row mr-0.5 sm:gap-2 smm-gap-2 items-end">
                                <a href=""><img class="w-[47px] " src="{{ asset('/images/menu-icon/player_icon-removebg-preview.png') }}" alt=""></a>
                                <a href=""><img class="w-[47px] " src="{{ asset('/images/menu-icon/goalie_icon-removebg-preview.png') }}" alt=""></a>
                                <a href="#">
                                    <svg class=" w-[3rem]  text-black border border-black rounded-full bg-sky-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div> 
                        </div>
                    </div>
                        <!-- <div class="sm:mt-4 flex flex-row gap-y-4"   id="list-menu"> 
                            <div> 
                                <a href="#responsive-header" rel="search-bar"  class=" mt-4 sm:leading-loose  sm:block  no-underline block md:mt-0 md:inline-block lg:mt-0  md:text-slate-300 ">
                                    <img src = "{{ asset('/images/search.png') }}" class="w-5 m-auto " />
                                    <div class="relative bottom--4  hidden active"  >
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="nhl"  class="  sm:leading-loose md:leading-13 sm:block sm:mt-4 no-underline block mt-4 md:mt-0 md:inline-block lg:mt-0  md:text-slate-300  ">
                                    <img src = "{{ asset('/images/menu-icon/icons8-nfl-50.png') }}" class="w-5 m-auto" />

                                    <div class="relative bottom--4 hidden"  >
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="starting-goalies" class="sm:leading-loose sm:block sm:mt-4 block  mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                                    <img src = "{{ asset('/images/menu-icon/icons8-goals-64.png') }}" class="w-5 m-auto" />

                                    <div class="relative bottom--4 hidden">
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="line-combinations" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                                    <img src = "{{ asset('/images/menu-icon/icons8-combination-32.png') }}" class="w-5 m-auto" />
                                    <div class="relative bottom--4  hidden">
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="dfs-projections" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300 ">
                                    <img src = "{{ asset('/images/menu-icon/icons8-project-management-24.png') }}" class="w-5 m-auto" />

                                    <div class="relative bottom--4  hidden">
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="odds" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 relative md:text-slate-300  ">
                                    ODDS

                                    <div class="relative bottom--4 hidden">
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#responsive-header" rel="shop" class="sm:leading-loose sm:block sm:mt-4 block mt-4 md:inline-block lg:mt-0 md:mt-0 md:text-slate-300 relative  ">
                                    <img src = "{{ asset('/images/menu-icon/icons8-department-shop-24.png') }}" class="w-5 m-auto" />

                                    <div class="relative bottom--4 hidden">
                                        <div class="arrowed">
                                            <div class="arrow-3"></div>
                                        </div>
                                    </div>
                                </a>   
                            </div>


                            <div class="md:hidden sm:block md:relative flex flex-row w-full" id="sub-menu">
                                <ul class="justify-start md:absolute list-none  flex-col sm:items-start gap-2 py-2 nhl hidden active sm:flex-wrap smm-flex-wrap smm-items-end px-2">

                                    <li ><a  class="hover:font-bold"  href="#">STARTING GOALIES </a></li>
                                    <li><a  class="hover:font-bold" >LINE COMBINATIONS</a></li>
                                    <li><a  class="hover:font-bold" >DFS PROJECTIONS</a></li>
                                    <li><a  class="hover:font-bold" >TODAYS GAMES</a></li>
                                    <li><a  class="hover:font-bold" >TEAM STANDINGS</a></li>
                                    <li><a  class="hover:font-bold" >PLAYER STATS</a></li>
                                    <li><a  class="hover:font-bold" >ODDS</a></li>
                                    <li><a  class="hover:font-bold" >NEWS FEED</a></li>
                                    <li><a  class="hover:font-bold" >SCHEDULE</a></li>
                                </ul>

                                <ul class="justify-start list-none  flex-col gap-2 py-2 starting-goalies hidden  smm-flex-wrap smm-items-start p-2">
                                </ul>
                                <ul class="justify-start list-none  flex-col gap-2 py-2 line-combinations hidden smm-flex-wrap p-2">

                                    <li ><a class="hover:font-bold" href="#">(DISPLAY TEAM LOGOS)</a></li>
                                </ul>

                                <ul class="justify-start list-none flex-col gap-2 py-2 dfs-projections hidden smm-flex-wrap smm-items-start p-2">

                                    <li><a class="hover:font-bold" href="#">DRAFTKINGS</a></li>
                                    <li><a class="hover:font-bold" href="#">FANDUEL</a></li>
                                </ul>

                                <ul class="justify-start list-none flex-col gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap smm-items-start p-2 ">
                                    <li ><a  class="hover:font-bold" href="#">NHL</a></li>
                                    <li ><a  class="hover:font-bold" href="#">NBA</a></li>
                                    <li ><a  class="hover:font-bold" href="#">NFL</a></li>
                                    <li ><a  class="hover:font-bold" href="#">MLB</a></li>
                                    <li ><a  class="hover:font-bold" href="#">SOCCER</a></li>
                                    <li ><a  class="hover:font-bold" href="#">SPORTSBOOKS</a></li>
                                </ul>


                                <ul class="justify-start list-none flex gap-2 py-2 shop hidden sm:flex-wrap smm-items-start p-2">

                                </ul>
                            </div>
                        </div> -->
                    <div id="new-menu" class="hidden" >
                        <div class="mt-4 flex flex-row justify-evenly">
                            <button class="text-[#28abf3] font-bold text-sm border border-black border-radius rounded-full bg-black w-[41%] p-1">JOIN</button>
                            <button class="text-[#28abf3] font-bold text-sm border border-black border-radius rounded-full bg-black w-[41%] p-1">SIGN IN</button>
                        </div>
                        <div class="my-4" id="header-mobile-menu">
                            <ul class="flex flex-row bg-[#38b6ff] border border-black">
                                <a class="text-white font-bold text-sm ml-9 p-1" href="#">STARTING GOALIES</a>
                            </ul>
                            <ul id="header1" class="flex flex-row bg-[#38b6ff] border border-black flex items-center gap-2 relative">
                                <img class="w-[20px] h-[20px] ml-2.5 plus menu-line-combonation-icon-1" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden  negative menu-line-combanation-icon-2" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1" menu="header1" rel="menu-line-combanation" href="#">LINE COMBINATIONS</a>
                            </ul>
                            <ul class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-line-combanation hidden">
                                <li><a href=""><img class="w-10 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a></li>
                                <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a></li>
                            </ul>
                            <ul id="header2" class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5  plus menu-projections-icon-1" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden  negative menu-projections-icon-2" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 text" menu="header2" rel="menu-projections" href="#">PROJECTIONS</a>
                            </ul>
                            <ul class="bg-white flex flex-col justify-center menu-projections hidden">
                                <li class="p-1  border border-black w-full">
                                    <a class="flex flex-row items-center ml-[27px]" href="#">
                                        <img class="w-[7%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="ml-2 text-md font-semibold">DRAFTKINGS</p>
                                    </a> 
                                </li>
                                <li class=" p-1  border border-black w-full">
                                    <a class="flex flex-row items-center ml-[27px]" href="#">
                                        <img class="w-[7%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="ml-2 text-md font-semibold">FANDUEL</p>
                                    </a>
                                </li>
                            </ul>
                            <ul id="header3" class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" menu="header3" rel="menu-news" href="#">News</a>
                            </ul>
                                  <ul class="bg-white flex flex-col  menu-news hidden">
                                    <li class=" border border-black w-full p-1">
                                            <a class="flex flex-row items-center ml-[27px]" href="#">
                                                <p class="ml-2 text-md font-semibold">PLAYER NEWS</p>
                                            </a> 
                                        </li>
                                        <li class=" border border-black w-full p-1">
                                            <a class="flex flex-row items-center ml-[27px]" href="#">
                                                <p class="ml-2 text-md font-semibold">TEAM NEWS</p>
                                            </a>
                                        </li>
                                  </ul>
                            <ul id="header4" class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" menu="header4" rel="menu-betting" href="#">BETTING</a>
                            </ul>

                                <ul class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-betting hidden">
                                    <li class="h-24"></li>
                                </ul>
                            <ul id="header5" class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1" rel="menu-odds" menu="header5" href="#">ODDS</a>
                            </ul>
                                  <ul class="w-full bg-white flex flex-wrap justify-center  my-5 menu-odds hidden">
                                     <li><a href="#"><img class="w-[11rem] link-text" src="{{ asset('/images/menu-icon/coming_soon.png') }}" alt=""></a></li>
                                  </ul>
                            <ul id="header6" class="flex flex-row bg-[#38b6ff] border border-black flex flex-row items-center gap-2 ">
                                <img class="w-[20px] h-[20px] ml-2.5 plus" src="{{ asset('/images/menu-icon/plus.png') }}" alt="">
                                <img class="w-[20px] ml-2.5 hidden negative" src="{{ asset('/images/menu-icon/negative.png') }}" alt="">
                                <a class="text-white font-bold text-sm p-1 link-text" menu="header6" rel="menu-schedule"  href="#">SCHEDULE</a>
                            </ul>
                            <ul class="w-full bg-white flex flex-wrap justify-center gap-2 m-2 menu-schedule hidden">
                                <li class="h-24"></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
            <!--End Mobile menu -->
        </div>
     <!-- Desktop -->
        <div class="w-4/5 m-auto lg:block md:block sm:hidden smm-hidden p-4 relative " id="sub-menu">
            <ul class="list-none flex-row items-center gap-2 py-2 daily-fantasy hidden sm:flex-wrap smm-flex-wrap daily-menu active">
                <li ><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold"  href="{{url('/starting-goaliesv1')}}">STARTING GOALIES</a></li>
                <li><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="{{url('/line-combos')}}" >LINE COMBINATIONS</a></li>
                <li><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="{{url('/projections')}}">PROJECTIONS</a></li>
                <li><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">MATCH UP</a></li>
                <li><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="{{url('/schedule')}}">SCHEDULE</a></li>
            </ul>

            <ul class="list-none flex-row gap-2 py-2 projections-menu hidden  smm-flex-wrap">
                <li class="flex items-center">
                    <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}">
                    <a  class="xl:text-[16px] lg:text-[12px] font-semibold font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#" >DRAFTKINGS</a>
                </li>
                <li class="flex itmes-center">
                    <img class="w-5 ml-3" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}">
                    <a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">FANDUEL</a>
                </li>
            </ul>
            <ul class="list-none flex-row gap-2 py-2  hidden smm-flex-wrap news-menu">
                <li ><a class="xl:text-[16px] lg:text-[12px]  font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">TEAM NEWS</a></li>
                <li ><a class="xl:text-[16px] lg:text-[12px]  font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="{{url('/player-news')}}">PLAYER NEWS</a></li>
                <li ><a class="xl:text-[16px] lg:text-[12px]  font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="{{url('/schedule')}}">SCHEDULE</a></li>
            </ul>
            <ul class="list-none flex-row gap-2 py-2 dfs-projections hidden smm-flex-wrap hidden betting-menu">
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">SPORTSBOOKS</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">BONUSES</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">NEWS</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">ODDS</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">PROPS</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">BETTING GUIDE</a></li>
                <li class="flex"><a class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">GLOSSARY</a></li>  
            </ul>
            <ul class="list-none flex-row gap-2 py-2 odds hidden sm:flex-wrap smm-flex-wrap  hidden odds-menu ">
                <li ><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">GAME ODDS</a></li>
                <li ><a  class="xl:text-[16px] lg:text-[12px] font-semibold hover:font-bold md:text-[13px] md:hover:font-bold" href="#">PLAYER PROPS</a></li>
            </ul> 
            <ul class="list-none flex-row gap-2 py-2 line-menu hidden smm-flex-wrap justify-center relative 2xl:left-[38rem] xl:left-[38rem] xl:w-[53%]  lg:left-[30rem] lg:w-[53%]  md:left-[26rem] md:w-[45%]">
                <ul class="w-full bg-white flex flex-wrap gap-2 m-1">
                    <li><a href=""><img class="w-10 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-10 ml-1" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a></li>
                </ul>
            </ul>
            <ul class="list-none flex gap-2 py-2 shop hidden sm:flex-wrap ">
            </ul>
        </div>
      <!-- End Desktop -->
    </div>
</nav>