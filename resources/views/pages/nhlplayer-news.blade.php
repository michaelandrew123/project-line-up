   
@extends('layouts.master-nhl')

@section('content')
 
    <!-- <div class="bg-slate-100  w-full flex justify-center block smm-hidden py-2">
        <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col  gap-5  max-w-screen-2xl">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="flex items-center gap-1.5">
                    <img class="xl:w-16 xl:h-16 w-12 h-12" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div  class="flex txt-logo">
                        <h1 class="xl:text-6xl lg:text-5xl text-3xl ">projected</h1>
                        <h1 class="xl:text-6xl lg:text-5xl text-3xl text-[#39b6ff] ">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center gap-2">
                    <a href="{{url('/nhl/home')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">EPL</a>
                    <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">LEARN</a>
                    <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-[#38b6ff] xl:px-7 px-4  py-2 rounded-md">ALL PAGES</a>
                    <div class="relative">
                        <input class="border border-[#9fa0a0] w-[8rem] h-[3rem] rounded-lg startgoal-input" type="" value=" "> 
                        <a class="absolute right-[5px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
                    </div>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}"  class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBINATIONS</a>
                <a href=""  class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</a>
                <a href=""  class="xl:text-2xl lg:text-lg text-base font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">PLAYER NEWS</a>
                <a href=""  class="xl:text-2xl lg:text-lg text-base font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</a>
            </div>
          
        </div>
    </div> -->
 <div class="flex justify-center mt-8 block smm-hidden w-full">
    <div class="flex flex-row justify-between gap-1 lg:gap-2 md:gap-1 xl:w-full lg:w-11/12 md:w-full  max-w-screen-2xl">
        <div class="flex flex-col xl:w-w-full lg:w-9/12 md:w-11/12   ">
            <div class="flex flex-col">
                <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                    <div class="flex flex-col items-center gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5  xl:gap-20 lg:gap-14 md:gap-16 mt-5">
                            <div class="flex flex-row gap-2">
                                <img class="w-7 " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Morning Skate</p>
                            </div>
                            <div class="w-full flex flex-col items-center gap-5  ">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">                                   
                                    <p class="xl:text-base lg:text-base md:text-sm font-bold ">San Jose changes up their top line as they face Rangers</p>                                                                                          
                                <div class="text-sm lg:text-[12px] md:text-[9px] w-full flex flex-row items-end justify-between">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="w-4" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex mt-5 ">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-16">
                                <div class="flex flex-row gap-2">
                                   <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                    <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Top Tracks</p>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5">
                                      <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                      <p class="xl:text-base lg:text-base md:text-sm font-bold ">Edmonton on the list of top stacks to play tonight</p>                                                                                          
                                    <div class="text-sm lg:text-[12px] md:text-[9px] w-full flex flex-row items-end justify-between">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="w-4" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div> 
                                </div>                                       
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex m-1 mt-5 ">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-16">
                                <div class="flex flex-row gap-2">
                                    <h1 class="xl:text-lg lg:text-lg md:text-base font-extrabold "><span class="text-white bg-green-500 text-base px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds</h1>
                                </div>
                                <div class="w-full flex flex-col items-center gap-5">
                                        <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                        <p class="xl:text-base lg:text-base md:text-sm font-bold">Edmonton on the list of top stacks to play tonight</p>                                                                                          
                                    <div class="text-sm lg:text-[12px] md:text-[9px] w-full flex flex-row items-end justify-between">
                                        <p>January 27, 2023</p>
                                        <div class="flex items-center gap-2">
                                            <p>projectedlineup.com</p>
                                            <img class="w-4" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div> 
                                </div>                                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                    <div class="flex flex-col items-center gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex flex-col items-center w-11/12 justify-center gap-20 mx-5 mt-5">
                            <h1 class="xl:text-lg lg:text-lg md:text-base font-extrabold text-center">Marner extends point <br> steak to 19 games</h1>
                            <div class="w-full flex flex-col items-center gap-12">
                                <div class="flex flex-row">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                </div>                                                                                         
                                <div class="text-[12px] w-full flex flex-row justify-between">
                                    <p>January 27, 2023</p>
                                    <p>projectedlineup.com</p>    
                                </div> 
                            </div>                                       
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex flex-col items-center w-11/12 justify-center gap-14 mx-5   mt-5">
                            <h1 class="xl:text-lg lg:text-lg md:text-base font-extrabold text-center">Who is the best current <br> NHL player you'd trade <br> for Connor Bedard</h1>
                            <div class="w-full flex flex-col items-center gap-12">
                                <div class="flex flex-row">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                </div>                                                                                         
                                <div class="text-[12px] w-full flex flex-row justify-between">
                                    <p>January 27, 2023</p>
                                    <p>projectedlineup.com</p>    
                                </div> 
                            </div>                                       
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex flex-col items-center w-11/12 justify-center gap-20  mx-5 mt-5">
                            <h1 class="xl:text-lg lg:text-lg md:text-base font-extrabold text-center">Sidney Crosby still <br> in fine form  </h1>
                            <div class="w-full flex flex-col items-center gap-12">
                                <div class="flex flex-row">
                                    <img class="lg:w-20 lg:h-20 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/.png') }}">
                                </div>                                                                                         
                                <div class="text-[12px] w-full flex flex-row justify-between">
                                    <p>January 27, 2023</p>
                                    <p>projectedlineup.com</p>    
                                </div> 
                            </div>                                       
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="" class="text-black font-semibold text-base flex justify-end mr-[13px]">see all</a>
                </div>
            </div>  
            <div class="flex flex-col">
                <div class="flex items-center">
                    <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                        NHL Player News
                    </h1>
                </div>
                <div class="flex flex-wrap w-full justify-evenly md:justify-between mb-3">
                    @php
                        $article_injury_count = 0; 
                    @endphp 
                    @foreach($article->data as $key=>$val)
                        @if(isset($val->league))
                            @if($val->league->slug === 'nhl')
                                @php 
                                    $article_injury_count++ 
                                @endphp 
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative mt-5" style="{{ $article_injury_count  > 6 ? 'display: none' : ''}}">
                                    <div class="flex mx-4 mt-5">
                                        <img class="lg:w-20 lg:h-20 md:w-13 md:h-16" src="{{$val->player->images->uniform}}">
                                        <div class="flex flex-col ml-2 gap-3">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[18px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                <p class="text-[11px] font-bold"> {{ !empty($val->metafields->goalie_status->value) ? $val->metafields->goalie_status->value : ''}}</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">{{$val->player->full_name}}</h1>
                                                <p class="text-[10px] font-semibold">{{$val->team->name}}</p>
                                            </div>                                                                      
                                        </div>
                                    </div>
                                    <div class="mx-2">
                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[12px] font-bold mb-1">{{$val->title}}</p>
                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[10px] font-semibold">{{ !empty($val->description) ? $val->description : ''}}</p>
                                    </div>
                                    <div class="flex flex-row items-center absolute left-1 bottom-0 ">
                                        <a href="{{$val->source->url}}">
                                          <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        </a>
                                        <div>
                                            <h3 class="xl:text-[13px] lg:text-[13px] md:text-[12px] font-extrabold">{{$val->source->name}}</h3>
                                            <p class="text-[10px]   font-bold">{{$val->source->retrieved_at->datetime}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    <!-- <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white border border-black relative">
                        <div class="flex  mx-4 mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-[4rem]" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">Mark Stone</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class=" mx-4">
                            <p class="text-base xl:text-base lg:text-base md:text-sm font-bold mb-2">Stone out with a lower body injury</p>
                            <p class="text-[12px] lg:text-[12px] md:text-[10px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-1 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="xl:text-[13px] lg:text-[13px] md:text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[10px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex  mx-4 mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-[4rem]" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">Connor Mcdavid</h1>
                                    <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class=" mx-4">
                            <p class="text-base xl:text-base lg:text-base md:text-sm font-bold mb-2">Stone out with a lower body injury</p>
                            <p class="text-[12px] lg:text-[12px] md:text-[10px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-3 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="xl:text-[13px] lg:text-[13px] md:text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[10px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem] rounded-xl bg-white border border-black relative">
                        <div class="flex  mx-4 mt-5">
                            <img class="lg:w-20 lg:h-20 md:w-13 md:h-16" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">John Tavares</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs  - C</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class=" mx-4">
                            <p class="text-base md:text-sm font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                            <p class="text-[12px] lg:text-[12px] md:text-[10px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-1 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="xl:text-[13px] lg:text-[13px] md:text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[10px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]   rounded-xl bg-white border border-black relative">
                        <div class="flex  mx-4 mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-[4rem]" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                    <p class="text-[11px] font-bold">Injury</p>
                                </div>
                                <div>
                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">Auston Matthews</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - C</p>
                                </div>   
                            </div>
                        </div>
                        <div class=" mx-4">
                            <p class="text-base md:text-sm font-bold mb-2">Mathews out for three weeks with a lower body injury</p>
                            <p class="text-[12px] lg:text-[12px] md:text-[10px] font-semibold">Mathews would be out for atleast three weeks after suffering a sprained knee Wednesday versus the Rangers.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-1 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class=" text-xl md:text-base  font-extrabold">Chris Benn</h3>
                                <p class="text-[10px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 w-[32%] h-[21rem]  rounded-xl bg-white border border-black relative">
                        <div class="flex  mx-4 mt-5 ">
                            <img class="lg:w-20 lg:h-20 md:w-16 md:h-[4rem]" src="{{ asset('/images/menu-icon/.png') }}">
                            <div class="flex flex-col ml-2 gap-3">
                                <div class="flex flex-row gap-2">
                                    <img class="w-[18px] " src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <p class="text-[11px] font-bold">Line Changes</p>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold">Connor Mcdavid</h1>
                                    <p class="text-[10px] font-semibold">Vegas Golden Knights - W</p>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class=" mx-4">
                            <p class="text-base xl:text-base lg:text-base md:text-sm font-bold mb-2">Stone out with a lower body injury</p>
                            <p class="text-[12px] lg:text-[12px] md:text-[10px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                        </div>
                        <div class="flex flex-row items-center absolute left-1 bottom-2">
                            <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                            <div>
                                <h3 class="xl:text-[13px] lg:text-[13px] md:text-[12px] font-extrabold">Chris Benn</h3>
                                <p class="text-[10px] font-bold">11/30/2012 | 12:59 pm EST</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="relative">
                    <a href="" class="text-black text-base  font-semibold flex justify-end mr-[13px]">see all</a>
                </div>
            </div>
            <div class="flex flex-row w-full justify-center gap-24 md:gap-14">
                <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>                
        </div>   
        <div class="flex justify-center">
            <div class="flex flex-col  gap-8 block smm-hidden ">
                <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <div class="flex flex-col gap-3 ml-5">
                    <div class="flex flex-row ">
                        <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                        <h1 class="text-md font-bold">Latest Articles </h1>
                    </div>
                    <hr>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-sm xl:text-sm lg:text-sm md:text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                </div>
                <img class="mt-10 w-[17rem] h-[35rem]" src="{{ asset('/images/menu-icon/adds1.png') }}">
            </div>  
        </div>  
    </div>
  </div>
 









    
@endsection
