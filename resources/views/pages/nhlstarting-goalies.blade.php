@extends('layouts.master-nhl-v1')

@section('content')

    <!-- Header slider -->
    <div class="w-full flex flex-col items-center  ">
        <div class="relative xl:w-11/12 lg:w-full md:w-full flex flex-row justify-center gap-3 items-center block smm-hidden max-w-screen-2xl h-auto">
               <div class="flex flex-row justify-evenly mt-10 w-full">   
                   <div class="flex flex-col items-center xl:w-full lg:w-full md:w-full  ">

                       <!-- Using PHP -->

                       <div class="w-full ">
                           <!-- corouser example caption 4 -->
                           <div  class="relative"  >
                               <div class="relative w-full overflow-hidden after:clear-both after:block   ">
                                   <div class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]" >
                                       <div class="flex flex-row justify-center items-center ">
                                           {{--bg-[#38b6ff]--}}
                                           <div class="flex justify-center items-center border border-[#38b6ff] bg-white rounded-lg h-14 w-10/12 text-white">
                                               <div class="text-base font-bold text-black">
                                                   @if(isset($date))
                                                        {{ Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                                   @else
                                                        {{ \Carbon\Carbon::now()->format('l, F j, Y') }}
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <a
                                   href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->subDay()->format('Y-m-d')]) }}"
                                   class="absolute left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                   type="button" >
                                   <div class="flex items-center justify-center h-14 w-14  border border-[#38b6ff] bg-white rounded-lg">
                                       <img class="w-[30px] h-[30px] rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}"  alt="">
                                   </div>
                               </a>
                               <a
                                   href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->addDay()->format('Y-m-d')]) }}"
                                   class=" absolute right-0 top-0 z-[1] flex flex    items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                   type="button" >

                                   <div class="flex items-center justify-center  h-14 w-14 border border-[#38b6ff] bg-white rounded-lg">
                                       <img class="w-[30px] h-[30px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="" >
                                   </div>
                               </a>
                           </div>
                       </div>












                           <!-- Content -->
                   <div class="flex flex-col items-center mt-2 gap-5 w-full">

                        {{--<div class="flex flex-wrap justify-center w-11/12 hidden gap-5">--}}
                            {{--@foreach($goalies_schedule->data as $key=>$val)--}}
                                {{--<div class="flex gap-3 w-full h-56">--}}
                                    {{--<div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">--}}
                                        {{--@if(!empty($val->starting_goalies->home->player->full_name))--}}
                                            {{--<h1 class="font-bold text-base mt-3">{{$val->starting_goalies->home->player->full_name}} sdadasd</h1>--}}
                                        {{--@endif--}}
                                        {{--<div class="flex flex-row items-center gap-2">--}}
                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">--}}
                                            {{--<p class="text-[11px] font-bold">{{$val->starting_goalies->home->status->name}}</p>--}}
                                        {{--</div>--}}
                                        {{--@if(!empty($val->starting_goalies->home->player->images->uniform))--}}
                                            {{--<div class="flex flex-row items-center gap-2">--}}
                                                {{--<img class="w-[9rem]" src="{{$val->starting_goalies->home->player->images->uniform}}">--}}
                                                {{--<p class="text-[11px] font-bold"> </p>--}}
                                            {{--</div>--}}
                                        {{--@endif--}}
                                        {{--<img src=" " class="w-40" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="flex flex-col justify-between w-full border border-black rounded">--}}
                                        {{--<div class="flex flex-row justify-evenly mt-3">--}}
                                            {{--<div class="">--}}
                                                {{--<div class="flex flex-col items-center gap-2">--}}
                                                    {{--<img class="w-12 " src="{{ asset('/images/teamlogo-svg/ .svg') }}" alt="">--}}
                                                    {{--<h1 class="text-center font-bold">{{$val->home_team->name}}</h1>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div>--}}
                                                {{--<div class="flex flex-col items-center gap-2">--}}
                                                    {{--<img class="w-12 " src="{{ asset('/images/teamlogo-svg/ .svg') }}" alt="">--}}
                                                    {{--<h1 class="text-center  font-bold">{{$val->away_team->name}}</h1>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="text-sm text-center font-semibold text-[#9da8af]">--}}
                                            {{--<p>Jan 24, 7pm EST</p>--}}
                                            {{--<p>Bridgestone Arena</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="w-full flex justify-center m-1">--}}
                                            {{--<button class="border border-black font-bold px-3 py-1 rounded w-40">--}}
                                                {{--Game Odds--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="border border-black flex flex-col items-center justify-between w-full rounded-lg">--}}
                                        {{--@if(!empty($val->starting_goalies->away->player->full_name))--}}
                                            {{--<h1 class="font-bold text-base mt-3">{{$val->starting_goalies->away->player->full_name}}</h1>--}}
                                        {{--@endif--}}
                                        {{--<div class="flex flex-row items-center gap-2">--}}
                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">--}}
                                            {{--<p class="text-[11px] font-bold">{{$val->starting_goalies->home->status->name}}</p>--}}
                                        {{--</div>--}}
                                        {{--@if(!empty($val->starting_goalies->away->player->images->uniform))--}}
                                            {{--<div class="flex flex-row items-center gap-2">--}}
                                                {{--<img class="w-[9rem]" src="{{$val->starting_goalies->away->player->images->uniform}}">--}}
                                                {{--<p class="text-[11px] font-bold"> </p>--}}
                                            {{--</div>--}}
                                        {{--@endif--}}
                                        {{--<img src=" " class="w-40" alt="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                             {{--@endforeach--}}
                        {{--</div>--}}


                       <div class="flex flex-col w-full  mt-2 place-items-stretch" >
                            <h1 class="font-bold">NHL Starting Goalies sdasdad </h1>
                            <p>Protected Lineups compiles everything you need to knowo about the days starting goalies. From fantasy hocky to sports betting, we have you covered</p>
                       </div>


                        <!-- Content -->
                        <div class="flex flex-col items-center w-full gap-3 mt-2 place-items-stretch" >
                            @foreach ($seasons->data as $key => $season )
                                {{--border border-[#38b6ff]--}}
                                <div class="flex flex-col gap-4 w-full rounded-lg">
                                    {{--<div class="w-full text-center items-center bg-[#38B6FF] font-bold py-2"> {{ $season->game_date->full  }}</div>--}}
                                    <div class="flex flex-row justify-evenly w-full gap-6 px-6">
                                        <div class="flex flex-col items-center justify-between   w-2/12 ">
{{--                                            <h1 class="font-bold text-lg mt-2 player" >{{ (isset($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : " ")  }}</h1>--}}
                                            <div class="flex flex-col gap-4 bg-white w-full p-4 justify-center text-center items-center w-34 rounded-lg">
                                                <img class="w-full" src="{{ (isset($season->starting_goalies->home->player->images->uniform ) ? $season->starting_goalies->home->player->images->uniform : " ")  }}" class="w-44" alt="">
                                                @if(isset($season->starting_goalies->home->status->name))
                                                    <div class="flex flex-row p-1 items-center font-bold w-full text-center">
                                                        {{--<img class="w-4 h-4" src="{{ asset('/images\menu-icon/green-checked.png') }}">--}}

                                                        @if($season->starting_goalies->home->status->name == 'Expected')
                                                            <div class=" bg-yellow-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                        @elseif($season->starting_goalies->home->status->name == 'Confirmed')
                                                            <div class="bg-green-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                        @else
                                                            <div class="bg-blue-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>


                                            <div class="text-sm font-bold p-2" >
                                                {{ (isset($season->starting_goalies->home->player->full_name) ?   $season->starting_goalies->home->player->full_name : " ")  }}
                                            </div>


                                            <div class="flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center"  >
                                                <img class="w-5 h-5" src="{{ asset('/images/home-page/plus.png') }}"   />
                                                <span class="text-black">
                                                    view card
                                                </span>
                                            </div>


                                        </div>

                                        <div class="flex flex-col justify-between w-8/12 bg-white rounder-lg" >
                                            <div class="flex flex-col gap-5 h-full">

                                                <div class="flex flex-col justify-evenly h-full">
                                                        <div class="flex flex-col h-full justify-between py-8 gap-2" >
                                                            <div class="flex flex-row justify-evenly gap-4">
                                                                <div class="flex flex-row items-center gap-1">
                                                                    <h1 class="text-center text-2xl font-bold">{{ $season->starting_goalies->home->team->name }}</h1>
                                                                    <img class="w-10" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}" alt="">
                                                                </div>
                                                                <div class="flex flex-row text-center  text-[#38b6ff] font-bold   items-center">
                                                                    <div class="text-base flex flex-col">
                                                                        <div>
                                                                            {{ (isset($season->starting_goalies->home->game->game_date->date)
                                                                            ?
                                                                             $season->starting_goalies->home->game->game_date->date : " ")  }}
                                                                        </div>
                                                                        <div>
                                                                            {{ (isset($season->starting_goalies->home->game->game_date->time)
                                                                            ?
                                                                             $season->starting_goalies->home->game->game_date->time : " ")  }}
                                                                        </div>
                                                                      </div>
                                                                </div>
                                                                <div class="flex flex-row items-center gap-1">
                                                                    <img class="w-10" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}" alt="">
                                                                    <h1 class="text-center text-2xl font-bold ">{{ $season->starting_goalies->away->team->name }}</h1>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-row justify-between    px-6 py-4">
                                                                <div class="flex flex-row justify-evenly gap-4 text-center">
                                                                    <div class="p-2 gap-2  ">
                                                                        <div class="text-black text-sm  ">GOALS</div>
                                                                        <div class="bg-[#F4F5F7]   p-6 rounded-lg  font-bold">{{ (isset($season->home_team->odds->team_goal) ? $season->home_team->odds->team_goal : "")  }}</div>
                                                                    </div>
                                                                    <div class="p-2 gap-2  ">
                                                                        <div class="text-black text-sm  ">WIN %</div>
                                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold">{{ (isset($season->home_team->odds->win_percentage) ? $season->home_team->odds->win_percentage : "")  }}</div>
                                                                    </div>
                                                                </div>

                                                                <div class="flex flex-row justify-evenly text-center">
                                                                    <div class="p-2 gap-2 ">
                                                                        <div class="text-black text-sm ">0/U</div>
                                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold">{{ (isset($season->home_team->odds->over_under) ? $season->home_team->odds->over_under : "")  }}</div>
                                                                    </div>
                                                                </div>

                                                                <div class="flex flex-row justify-evenly gap-4 text-center" >
                                                                    <div class="p-2 gap-2  ">
                                                                        <div class="text-black text-sm ">WIN %</div>
                                                                        <div class="bg-[#F4F5F7] p-6 rounded-lg  font-bold">{{ (isset($season->away_team->odds->win_percentage) ? $season->away_team->odds->win_percentage : "")  }}</div>
                                                                    </div>
                                                                    <div class="p-2 gap-2 w-full ">
                                                                        <div class="text-black text-sm">GOALS</div>
                                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold">{{ (isset($season->away_team->odds->team_goal) ? $season->away_team->odds->team_goal : "")  }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="flex flex-row gap-2 justify-evenly">
                                                                <div class="flex flex-row gap-4">
                                                                    <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff]">
                                                                        <img  class="w-6" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}">
                                                                        <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$season->starting_goalies->home->team->slug }}">line Combinations</a></div>
                                                                    </div>
                                                                </div>

                                                                <div class="flex flex-row gap-4 w-1/3">
                                                                    <div class="flex flex-row  p-2 items-center justify-center rounded-lg gap-2 border border-[#38b6ff] w-full ">
                                                                         <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$season->starting_goalies->away->team->slug }}">matchup</a></div>
                                                                    </div>
                                                                </div>


                                                                <div class="flex flex-row gap-4">
                                                                    <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff]">
                                                                        <img class="w-6" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}">
                                                                        <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$season->starting_goalies->away->team->slug }}">line Combinations</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-between    w-2/12 ">
                                            {{--                                            <h1 class="font-bold text-lg mt-2 player" >{{ (isset($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : " ")  }}</h1>--}}
                                            <div class="flex flex-col gap-4 bg-white w-full p-4 justify-center text-center items-center w-34 rounded-lg">
                                                <img class="w-full" src="{{ (isset($season->starting_goalies->away->player->images->uniform ) ? $season->starting_goalies->away->player->images->uniform : " ")  }}" class="w-44" alt="">
                                                @if(isset($season->starting_goalies->away->status->name))
                                                    <div class="flex flex-row p-1 items-center font-bold w-full text-center">
                                                        {{--<img class="w-4 h-4" src="{{ asset('/images\menu-icon/green-checked.png') }}">--}}

                                                        @if($season->starting_goalies->away->status->name == 'Expected')
                                                            <div class=" bg-yellow-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                        @elseif($season->starting_goalies->away->status->name == 'Confirmed')
                                                            <div class="bg-green-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                        @else
                                                            <div class="bg-blue-500 rounded-lg w-full text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>


                                            <div class="text-sm font-bold p-2" >
                                                {{ (isset($season->starting_goalies->away->player->full_name) ?   $season->starting_goalies->away->player->full_name : " ")  }}
                                            </div>


                                            <div class="flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center"  >
                                                <img  class="w-5 h-5"  src="{{ asset('/images/home-page/plus.png') }}"  />
                                                <span class="text-black">
                                                    view card
                                                </span>
                                            </div>


                                        </div>



                                    </div>

                                </div>
                            @endforeach
                        </div>




                        <div class="flex flex-col w-full gap-2 hidden" >


                        </div>
                   </div>




                </div>
            </div>
        </div>

    </div>



    <div class="flex flex-col items-center  w-full smm-block  hidden  ">



        <div class="relative flex flex-row justify-center gap-3 items-center block max-w-screen-2xl h-auto">
            <div class="flex flex-row justify-evenly mt-10 w-full">
                <div class="flex flex-col items-center xl:w-full lg:w-full md:w-4/5  ">

                    <!-- Using PHP -->

                    <div class="w-full ">
                        <!-- corouser example caption 4 -->
                        <div  class="relative"  >
                            <div class="relative w-full overflow-hidden after:clear-both after:block   ">
                                <div class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]" >
                                    <div class="flex flex-row justify-center items-center ">
                                        {{--bg-[#38b6ff]--}}
                                        <div class="flex justify-center items-center border border-[#38b6ff] bg-white rounded-lg h-14 w-10/12 text-white">
                                            <div class="text-base font-bold text-black">
                                                @if(isset($date))
                                                    {{ Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                                @else
                                                    {{ \Carbon\Carbon::now()->format('l, F j, Y') }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a
                                    href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->subDay()->format('Y-m-d')]) }}"
                                    class="absolute left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                    type="button" >
                                <div class="flex items-center justify-center h-14 w-14  border border-black bg-white rounded-lg">
                                    <img class="w-[30px] h-[30px] rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}"  alt="">
                                </div>
                            </a>
                            <a
                                    href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->addDay()->format('Y-m-d')]) }}"
                                    class=" absolute right-0 top-0 z-[1] flex flex    items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                    type="button" >

                                <div class="flex items-center justify-center  h-14 w-14 border border-black bg-white rounded-lg">
                                    <img class="w-[30px] h-[30px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="" >
                                </div>
                            </a>
                        </div>
                    </div>












                    <!-- Content -->
                    <div class="flex flex-col items-center mt-2 gap-5 w-full">



                        <div class="flex flex-col w-full  mt-2 place-items-stretch hidden" >
                            <h1 class="font-bold">NHL Starting Goalies </h1>
                            <p>Protected Lineups compiles everything you need to knowo about the days starting goalies. From fantasy hocky to sports betting, we have you covered</p>
                        </div>


                        <!-- Content -->
                        <div class="flex flex-col items-center w-full gap-3 mt-2 place-items-stretch" >
                            @foreach ($seasons->data as $key => $season )
                                <div class="flex flex-col gap-2 w-full border border-[#38b6ff] rounded-lg">
                                    {{--<div class="w-full text-center items-center bg-[#38B6FF] font-bold py-2"> {{ $season->game_date->full  }}</div>--}}
                                    <div class="flex flex-row justify-evenly w-full gap-6 px-6">
                                        <div class="flex flex-col items-center justify-between py-5  w-4/12 ">
                                            <h1 class="font-bold text-lg mt-2 player" >{{ (isset($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : " ")  }}</h1>
                                            <img class="w-24" src="{{ (isset($season->starting_goalies->home->player->images->uniform ) ? $season->starting_goalies->home->player->images->uniform : " ")  }}" class="w-44" alt="">
                                            @if(isset($season->starting_goalies->home->status->name))
                                                <div class="flex flex-row gap-4 items-center font-bold w-full text-center">
                                                    {{--<img class="w-4 h-4" src="{{ asset('/images\menu-icon/green-checked.png') }}">--}}
                                                    @if($season->starting_goalies->home->status->name == 'Expected')
                                                        <div class=" bg-yellow-500  rounded-full w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                    @elseif($season->starting_goalies->home->status->name == 'Confirmed')
                                                        <div class=" bg-green-500  rounded-full w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                    @else
                                                        <div class=" bg-blue-500  rounded-full w-full text-black">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                    @endif
                                                </div>
                                            @endif
                                            <small class="text-xs" > {{ (isset($season->starting_goalies->home->source->name) ? 'Source: '. $season->starting_goalies->home->source->name : " ")  }} </small>
                                        </div>

                                        <div class="flex flex-col justify-between w-4/12 " >
                                            <div class="flex flex-col gap-5 h-full  ">

                                                <div class="flex flex-col justify-evenly h-full">
                                                    <div class="flex flex-col h-full justify-between py-8 gap-2" >
                                                        <div class="flex flex-row justify-evenly gap-4">
                                                            <div class="flex flex-row items-center gap-1 hidden">
                                                                <h1 class="text-center text-2xl font-bold">{{ $season->starting_goalies->home->team->name }}</h1>
                                                                <img class="w-10" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}" alt="">
                                                            </div>

                                                            <div class="flew flex-col">
                                                                <div class="text-5xl text-[#38b6ff] font-bold text-center">@</div>
                                                                <div class="text-center  text-[#38b6ff] font-bold  flex flex-row items-center">
                                                                    <div class="text-base">
                                                                        {{ (isset($season->starting_goalies->home->game->game_date->date)
                                                                        ?
                                                                         $season->starting_goalies->home->game->game_date->date : " ")  }}
                                                                        <span class="text-sm">
                                                                            {{ (isset($season->starting_goalies->home->game->game_date->time)
                                                                            ?
                                                                             $season->starting_goalies->home->game->game_date->time : " ")  }}
                                                                        </span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="flex flex-row items-center gap-1 hidden">
                                                                <img class="w-10" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}" alt="">
                                                                <h1 class="text-center text-2xl font-bold ">{{ $season->starting_goalies->away->team->name }}</h1>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-row justify-evenly bg-slate-300 rounded-lg px-6 py-4 hidden">
                                                            <div class="flex flex-row justify-evenly w-full text-center">
                                                                <div class="p-2 gap-2 w-full">
                                                                    <div class="text-black text-sm font-bold">GOALS</div>
                                                                    <div class="bg-green-500 text-white rounded-full w-full p-2">{{ (isset($season->home_team->odds->team_goal) ? $season->home_team->odds->team_goal : "")  }}</div>
                                                                </div>
                                                                <div class="p-2 gap-2 w-full">
                                                                    <div class="text-black text-sm font-boldfont-bold">WIN %</div>
                                                                    <div class="bg-green-500 text-white rounded-full w-full p-2 ">{{ (isset($season->home_team->odds->win_percentage) ? $season->home_team->odds->win_percentage : "")  }}</div>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-row justify-evenly w-full text-center">
                                                                <div class="p-2 gap-2 w-full">
                                                                    <div class="text-black text-sm font-bold">0/U</div>
                                                                    <div class="bg-black text-white rounded-full w-full p-2 ">{{ (isset($season->home_team->odds->over_under) ? $season->home_team->odds->over_under : "")  }}</div>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-row justify-evenly w-full text-center" >
                                                                <div class="p-2 gap-2 w-full">
                                                                    <div class="text-black text-sm font-bold">WIN %</div>
                                                                    <div class="bg-red-500 text-white rounded-full w-full p-2">{{ (isset($season->away_team->odds->win_percentage) ? $season->away_team->odds->win_percentage : "")  }}</div>
                                                                </div>
                                                                <div class="p-2 gap-2 w-full">
                                                                    <div class="text-black text-sm font-bold">GOALS</div>
                                                                    <div class="bg-red-500 text-white rounded-full w-full p-2">{{ (isset($season->away_team->odds->team_goal) ? $season->away_team->odds->team_goal : "")  }}</div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="flex flex-row gap-2 justify-evenly hidden">
                                                            <div class="flex flex-row gap-4">
                                                                <div class="flex flex-row p-2 rounded-full gap-2 border border-[#38b6ff]">
                                                                    <img  class="w-6" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}">
                                                                    <div class="text-[#38b6ff]"><a href="/nhl/line-combos/{{$season->starting_goalies->home->team->slug }}">line Combinations</a></div>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-row gap-4">
                                                                <div class="flex flex-row p-2 rounded-full gap-2 border border-[#38b6ff]">
                                                                    <img class="w-6" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}">
                                                                    <div class="text-[#38b6ff]"><a href="/nhl/line-combos/{{$season->starting_goalies->away->team->slug }}">line Combinations</a></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col items-center justify-between   py-5   w-4/12">
                                            <h1 class="font-bold text-lg  mt-2 opponent">{{ (isset($season->starting_goalies->away->player->full_name) ? $season->starting_goalies->away->player->full_name : " ")  }}</h1>
                                            <img class="w-24" src=" {{ (isset($season->starting_goalies->away->player->images->uniform) ? $season->starting_goalies->away->player->images->uniform : " ")  }} " class="w-44" alt="">
                                            @if(isset($season->starting_goalies->away->status->name))
                                                <div class="flex flex-row gap-4 items-center font-bold w-full text-center">
                                                    {{--<img class="w-4 h-4" src="{{ asset('/images\menu-icon/green-checked.png') }}">--}}
                                                    @if(isset($season->starting_goalies->away->status->name))
                                                        <div class="flex flex-row gap-4 items-center font-bold w-full text-center">
                                                            {{--<img class="w-4 h-4" src="{{ asset('/images\menu-icon/green-checked.png') }}">--}}

                                                            @if($season->starting_goalies->away->status->name == 'Expected')
                                                                <div class=" bg-yellow-500  rounded-full w-full text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                            @elseif($season->starting_goalies->away->status->name == 'Confirmed')
                                                                <div class=" bg-green-500  rounded-full w-full text-black">   {{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                            @else
                                                                <div class=" bg-blue-500  rounded-full w-full text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif
                                            <small class="text-xs"> {{ (isset($season->starting_goalies->away->source->name) ? 'Source: '. $season->starting_goalies->away->source->name : " ")  }} </small>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>




                        <div class="flex flex-col w-full gap-2 hidden" >


                        </div>
                    </div>




                </div>
            </div>
        </div>

    </div>



@endsection