   
@extends('layouts.master-nhl-v1')

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


    <div class="xl:w-11/12 lg:w-full md:w-full flex flex-row justify-between gap-1 lg:gap-2 md:gap-1 w-full max-w-screen-2xl">
        <div class="flex flex-col w-full ">
            <div class="flex flex-col hidden">
                <div class="flex flex-row w-full justify-evenly md:justify-between mb-3">
                    <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                            <div class="flex flex-row gap-2">
                                <img class="xl:w-7 lg:w-7 md:w-5" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Morning Skate</p>
                            </div>
                            <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                   
                                <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">San Jose changes up their top line as they face Rangers</p>                                                                                          
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div>
                    <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                            <div class="flex flex-row gap-2">
                                <img class="xl:w-7 lg:w-7 md:w-5" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                <p class="xl:text-lg lg:text-lg md:text-base font-extrabold">Top Tracks</p>
                            </div>
                            <div class="w-full flex flex-col items-center gap-5 ">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                   
                                <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">Edmonton on the list of top stacks to play tonight</p>                                                                                          
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div>
                    <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-3">
                            <div class="flex flex-row gap-2">
                                <h1 class="xl:text-lg lg:text-lg md:text-[15px] font-extrabold ">
                                    <span class="text-white bg-green-500 px-1.5 py-0.5 rounded-full mr-2">$</span>Props and Odds
                                </h1>
                            </div>
                            <div class="w-full flex flex-col items-center gap-5">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                   
                                <p class="xl:text-base lg:text-base md:text-[10px] font-bold  text-center">Edmonton on the list of top stacks to play tonight</p>                                                                                          
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div>
                    <div class="hidden flex flex-col gap-3 w-[32%] w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[19rem]   rounded-xl bg-white border border-black relative">
                        <div class="flex mt-5 ">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-14">
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
                    <div class="hidden flex flex-col gap-3 w-[32%] w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[19rem] rounded-xl bg-white border border-black relative">
                        <div class="flex m-1 mt-5 ">
                            <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-[4.5rem] md:gap-14">
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
                   <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                        <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Marner extends point <br> steak to 19 games</h1>
                            <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                                                                                                         
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div> 
                    <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                        <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Who is the best current <br> NHL player you'd trade <br> for Connor Bedard</h1>
                            <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                                                                                                         
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div> 
                            </div>                                       
                        </div> 
                    </div>
                    <div class="flex flex-col items-center gap-3 w-[32%] xl:h-[21rem] lg:h-[21rem] md:h-[14rem] rounded-xl bg-white border border-black relative">                        
                        <div class="flex flex-col justify-center mx-5 xl:gap-20 lg:gap-14 md:gap-5 xl:mt-5 lg:mt-5 md:mt-2">
                        <h1 class="xl:text-lg lg:text-lg md:text-[13px] font-extrabold text-center">Sidney Crosby still <br> in fine form  </h1>
                            <div class="w-full flex flex-col items-center gap-5  bottom-0">
                                <img class="lg:w-20 lg:h-20 md:w-16 md:h-16" src="{{ asset('/images/menu-icon/.png') }}">                                                                                                                         
                                <div class="text-sm lg:text-[10px] md:text-[7px] w-full flex flex-row items-end justify-evenly absolute bottom-5 ">
                                    <p>January 27, 2023</p>
                                    <div class="flex items-center gap-2">
                                        <p>projectedlineup.com</p>
                                        <img class="xl:w-4 lg:w-4 md:w-2" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
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
                <div>
                    <div class="relative flex items-center h-[220px]  mb-8 bg-white">
                        <img class="w-12 h-12 ml-8 hidden" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-extrabold pt-5 pb-5 ml-5 ml-8" >
                            NHL Player News
                        </h1>


                        <div class="absolute bottom-0 right-32">
                            <div class="flex flex-row"  >

                                <img class="w-52 relative left-6 z-0" src="{{ asset('/images/nhl-player-news/IMG_0621.png') }}">

                                <img class="w-52 relative z-10" src="{{ asset('/images/nhl-player-news/IMG_0622.png') }}">

                                <img class="w-52 relative right-6 z-0" src="{{ asset('/images/nhl-player-news/IMG_0623.png') }}">
                            </div>
                        </div>
                    </div>
                    <div>
                        <ul class="flex flex-row gap-5">
                            {{--{{Request::is('nhl/starting-goalies') ? 'active':'' }}--}}
                            {{--{{ request()->fullUrl() }}--}}



                            {{--@php--}}
                                {{--$queryParams = request()->query();--}}
                            {{--@endphp--}}

                            {{--@if (!empty($queryParams))--}}
                                {{--<p>URL Parameters:</p>--}}
                                {{--<ul>--}}
                                    {{--@foreach ($queryParams as $key => $value)--}}
                                        {{--<li>{{ $key }}: {{ $value }}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--@else--}}
                                {{--<p>No URL parameters found.</p>--}}
                            {{--@endif--}}
                            {{----}}

                            {{--{{ request()->path() }}--}}

                            @if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')

                                <li  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center "  style="color:#38b6ff;" >
                                    <a href="/nhl/player-news/">All</a>
                                </li>

                            @else
                                <li  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center "    >
                                    <a href="/nhl/player-news/">All</a>
                                </li>

                            @endif


                            @foreach($type_names as $key=>$type)
                                {{--{{$key}}--}}
                                {{--{{ Request::is('/nhl/player-news/'. $key) ? 'color:#38b6ff;' : 'dasdasdd' }}--}}
                                @php
                                    $path = 'nhl/player-news/'. $key
                                @endphp
                                @if(request()->path() == $path)
                                    <li  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  " style="color:#38b6ff">
                                        <a href="{{  url('/nhl/player-news/' . $key) }}"> {{$type}}  </a>
                                    </li>
                                @else
                                    <li  class="text-xl xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
                                        <a href="{{  url('/nhl/player-news/' . $key) }}"> {{$type}}   </a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
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
                                <div class="flex flex-col gap-5 w-[32%] rounded-xl justify-between bg-white border border-[#38b6ff] relative mt-5 {{ ($article_injury_count  > 6) ? 'hidden' : '' }} card-container" >
                                    <div>
                                        <div class="flex mx-4 mt-5 gap-4   pb-5">
                                            <img class="lg:w-20 lg:h-20 md:w-13 md:h-[3rem]" src="{{$val->player->images->uniform}}">
                                            <div class="flex flex-col ml-2 xl:gap-3 lg:gap-3 md:gap-1 w-full">

                                                <div class="flex flex-row justify-between w-full">
                                                    <div class="flex flex-row gap-2">
                                                        @if( !empty($val->type->name))
                                                            @if($val->type->name == 'Starting Goalie')
                                                                <img class="w-12" src="{{ asset('/images/nhl-player-news/starting_goalie_icon.png') }}">
                                                                <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                            @elseif($val->type->name == 'Line Change')
                                                                <img class="w-12" src="{{ asset('/images/nhl-player-news/line_change_icon.png') }}">
                                                                <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                            @elseif($val->type->name == 'Injury')
                                                                <img class="w-12" src="{{ asset('/images/nhl-player-news/injury_icon.png') }}">
                                                                <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                            @else
                                                                <img class="w-12" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                                <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                            @endif
                                                        @endif
                                                    </div>

                                                    <div class="flex items-center">
                                                        @if(isset($val->metafields->goalie_status) )
                                                            @if($val->metafields->goalie_status->name == 'Expected')
                                                                <div class=" bg-yellow-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>
                                                            @elseif($val->metafields->goalie_status->name == 'Confirmed')
                                                                <div class=" bg-green-500  font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>
                                                            @else
                                                                <div class=" bg-blue-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="flex flex-col">
                                                    <h1 class="xl:text-xl lg:text-lg md:text-base font-extrabold"> {{$val->player->full_name}}</h1>
                                                    <p class="text-[10px] font-semibold">{{$val->team->name}}</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div>

                                            <div class="mx-2">
                                                <p class="xl:text-[14px] lg:text-[13px] md:text-[10px] font-black mb-1">{{$val->title}}</p>
                                                <p class="xl:text-[11px] lg:text-[10px] md:text-[8px] font-semibold">{{ !empty($val->description) ? $val->description : ''}}</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center justify-between ">
                                        <div  class="flex flex-row items-center ">

                                            <a href="{{$val->source->url}}">
                                              <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-12 md::h-12" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                            </a>

                                            <div>
                                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target=”_blank”  href="{{$val->source->url}}">{{$val->source->name}}</a>
                                                <p class="text-[10px] font-bold">{{$val->source->retrieved_at->datetime}}</p>
                                            </div>

                                        </div>
                                        <div class="">
                                            {{--bg-[#38b6ff] font-medium text-white text-base  mx-2 dark:text-blue-500 hover:underline p-2 rounded-md"--}}
                                            <a href="#" class="" >
                                                <img class="w-12 mx-2  p-2" src="{{ asset('/images/footer/share_icon.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach

                </div>

                <div class="relative">
                    <div class="text-black text-base  font-semibold flex justify-end mr-[13px] cursor-pointer" id="see-all-player-news">see all</div>
                </div>
            </div>
            <div class="flex flex-row w-full justify-center gap-24 md:gap-14">
                <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-96 lg:w-64 md:w-48" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>                
        </div>   
        <div class="xl:w-3/12 lg:w-3/12 md:w-4/12 flex justify-center hidden">
            <div class="flex flex-col gap-8 block smm-hidden ">
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
