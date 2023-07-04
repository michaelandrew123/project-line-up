@extends('layouts.master-nhl')

@section('content')
    <div class="w-full flex justify-center bg-slate-100  mt-5">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col block smm-hidden max-w-screen-2xl">
            <div class="w-full flex justify-center gap-3 items-center block smm-hidden max-w-screen-2xl  bg-slate-200 px-2 h-36">
                <div class="w-full flex flex-col gap-2 ">
                    <div class="flex flex-row items-center justify-between ">
                        <div class="flex flex-row items-center">
                            <div class="flex flex-row items-center gap-5">
                                <div class="flex flex-col">
                                    <img class="w-20 flex" src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">
                                </div>
                                <div>
                                    <div class="teams text-4xl font-bold text-black">
                                        {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}
                                    </div>
                                    <div class="teams text-lg font-bold text-black">Team News</div>
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>  
            <div class="flex flex-row justify-evenly items-center w-full mt-[10px]  block smm-hidden max-w-screen-2xl" id="sub-hed">
                <a href="{{url('/nhl/line-combos')}}" class="  text-[24px] text-black font-bold rounded-md l-ups bckgrnd  ">
                    Lineups
                </a>
                <a href="" class="w-36  text-[24px] font-bold rounded-md text-black bckgrnd create flex justify-center">
                    <img class="w-9" src="{{ asset('/images/menu-icon/icons8-create-50.png') }}" alt="">
                    Create
                </a>
                <a href="" class="  text-[24px] font-bold rounded-md text-black bckgrnd d-kings ">
                    Draftkings
                </a>
                <a href="" class="  text-[24px] font-bold rounded-md text-black bckgrnd fnl  ">
                    Fanduel
                </a>
                <a href="" class=" text-[24px] font-bold rounded-md text-black bckgrnd sts  ">
                    Stats
                </a>
                <a href="" class=" text-[24px] font-bold rounded-md text-black bckgrnd active shp  ">
                    Player News
                </a>
                <a href="" class="text-[24px] font-bold rounded-md text-black bckgrnd shp  ">
                    Team Stats
                </a>
                <a href="" class="text-[24px] font-bold rounded-md text-black bckgrnd shp">
                    Shop
                </a>
            </div>
            <div class="w-full flex justify-center">
              <img class="w-8/12 my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <div class="flex flex-col w-full gap-5 mt-3">
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                    <img class="w-[31%]" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <div class="w-[31%] xl:h-[22rem] lg:h-[20rem] md:w-[31%] md:h-[18rem] relative rounded-xl bg-white ">
                        <div class="flex m-3 mt-5 ">
                           <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">
                                      Injury
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-xl md:text-base font-extrabold">Auston Mathews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>
                            </div>
                        </div>
                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1">
                            <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-3">Mathews out for three weeks with a lower body injury</p>
                            <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="w-full absolute bottom-1">
                            <div class="w-full flex flex-row items-center ">
                                <a href="">
                                <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-10 md:h-10" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                </a>
                                <div>
                                    <h3 class="text-[13px]">Chris Benn</h3>
                                    <p class="xl:text-[9px] lg:text-[9px] md:text-[8px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                </div>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <div class="w-full flex flex-col items-center ">
    <div class="w-full  smm-block hidden">
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
                <a href="" class="text-xl font-bold bg-[#38b6ff] text-black w-full h-12 rounded-md">NHL</a>
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NFL</a>
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NBA</a>
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">MLB</a>
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">SOC</a>
            </div>
            <div class="flex flex-row mx-2 gap-3 mb-3">
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</a>
                <a href="" class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">LINE COMBOS</a>
            </div>               
        </div>
    </div>
    <div class="relative w-full my-3 smm-block hidden">
        <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search players"> 
        <a href="" class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
    </div>






@endsection