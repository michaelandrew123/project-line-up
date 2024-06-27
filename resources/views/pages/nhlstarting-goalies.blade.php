@extends('layouts.master-nhl-v1')
@section('content')
    <!-- Header slider -->
    <div class="w-full flex flex-col items-center  ">
        <div class="relative   flex flex-row justify-center gap-3 items-center  xl:w-10/12 lg:w-10/12  md:w-10/12 sm:w-10/12  w-11/12 md:max-w-screen-2xl h-auto">
               <div class="flex flex-row justify-evenly sm:mt-10 mt-0 w-full">
                   <div class="flex flex-col items-center xl:w-full lg:w-full md:w-full  ">
                       <!-- Using PHP -->
                       <div class="w-full hidden ">
                           <!-- corouser example caption 4 -->
                           <div  class="relative"  >
                               <div class="relative w-full overflow-hidden after:clear-both after:block   ">
                                   <div class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]" >
                                       <div class="flex flex-row justify-center items-center ">
                                           {{--bg-[#38b6ff]--}}
                                           <div id="sg-current-date" class="flex justify-center items-center border border-[#38b6ff] bg-white rounded-lg h-14 w-10/12 text-white">
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

                               <a href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->subDay()->format('Y-m-d')]) }}"
                                   class="sg-current-date-arrow absolute left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                   type="button"
                               >
                                   <div class="flex items-center justify-center h-14 w-14  border border-[#38b6ff] bg-white rounded-lg">
                                       <img class="w-[30px] h-[30px] rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}"  alt="">
                                   </div>
                               </a>
                               <a href="{{ route('nhl.get-starting-goalies', ['date' => Carbon\Carbon::parse($date)->addDay()->format('Y-m-d')]) }}"
                                   class="sg-current-date-arrow absolute right-0 top-0 z-[1] flex flex    items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                                   type="button" >
                                   <div class="flex items-center justify-center  h-14 w-14 border border-[#38b6ff] bg-white rounded-lg">
                                       <img class="w-[30px] h-[30px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="" >
                                   </div>
                               </a>
                           </div>
                       </div>

                           <!-- Content -->
                       <div class="flex flex-col items-center sm:mt-2 mt-0 gap-5 w-full">
                           <div class="flex flex-col w-full sm:mt-2 mt-0 place-items-stretch" >
                               <div class="relative flex items-center gap-2">


                                   <div class="w-12">
                                       <img class="w-auto" src="{{ asset('/images/league/' . request()->segment(1) .'.png') }}">
                                   </div>



{{--                                   <img class="w-12 h-12  " src="{{ asset('/images/nhl.png') }}">--}}
                                   {{--font-blue xl:text-lg lg:text-base md:text-sm text-xl  font-bold--}}
                                   {{--<h1 class="lg:text-2xl md:text-1xl sm:text-1xl  text-base font-extrabold pt-5 pb-5 " >--}}
                                   <h1 class="lxl:text-lg lg:text-base md:text-sm text-xl  font-bold   pt-5 pb-5 " >
                                       NHL Starting Goalies
                                   </h1>
                               </div>

                                <p class="hidden">Everything you need to knowo about the days starting goalies. From fantasy hocky to sports betting, we have you covered</p>
                           </div>

                            <!-- Content -->
                            <div class="flex flex-col items-center w-full gap-3 mt-2 place-items-stretch" >
                                @foreach($seasons->data as $key => $season )
                                    {{--border border-[#38b6ff]--}}
                                    @if(isset($season->starting_goalies))
                                        <div class="flex flex-col gap-4 w-full rounded-lg">
                                            {{--<div class="w-full text-center items-center bg-[#38B6FF] font-bold py-2"> {{ $season->game_date->full  }}</div>--}}


                                                <div class="flex flex-col justify-evenly w-full gap-6 sm:hidden mb-5 ">



                                                    <div class="flex flex-col justify-evenly gap-4 header-starting-goalies-mobile p-4">

                                                        <div class="flex flex-row gap-2 items-center">
                                                            <div class="text-center text-4xl  ">{{ $season->starting_goalies->home->team->name }}  at {{ $season->starting_goalies->away->team->name }}</div>

                                                        </div>

                                                        <div class="flex flex-col text-center  text-[#38b6ff] font-bold   items-center">
                                                            <div class="text-base flex flex-col">
                                                                <div>
                                                                    {{ (isset($season->starting_goalies->home->game->game_date->date)
                                                                    ?
                                                                     $season->starting_goalies->home->game->game_date->date : " ")  }}
                                                                    |
                                                                    {{ (isset($season->starting_goalies->home->game->game_date->time)
                                                                    ?
                                                                     $season->starting_goalies->home->game->game_date->time : " ")  }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="flex flex-row justify-evenly w-full gap-6" >
                                                        <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                                            <div class=" card-wd player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">
                                                                <div class="p-4 ">

                                                                    <img class="w-full" src="{{ (isset($season->starting_goalies->home->player->images->uniform ) ? $season->starting_goalies->home->player->images->uniform : " ")  }}" class="w-44" alt="">

                                                                </div>
                                                                @if(isset($season->starting_goalies->home->status->name))
                                                                    <div class="flex flex-row  items-center font-bold w-full text-center">
                                                                        @if($season->starting_goalies->home->status->name == 'Expected')
                                                                            <div class=" bg-[#FFCC00] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }}  </div>
                                                                        @elseif($season->starting_goalies->home->status->name == 'Confirmed')
                                                                            <div class="bg-[#15D869] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                                        @else
                                                                            <div class="bg-[#38B6FF] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }}  </div>
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            </div>

                                                            <h1 class="text-base ">
                                                                {{ (isset($season->starting_goalies->home->player->full_name) ?   $season->starting_goalies->home->player->full_name : " ")  }}
                                                            </h1>
                                                            <div class="rounded-[13px] card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center   cursor-pointer  starting-goalies-home-view-card" rel="sg-view-card-home-{{$season->starting_goalies->home->id}}" >
                                                                <img class="w-5 h-5" src="{{ asset('/images/home-page/plus.png') }}"   />
                                                                <h1 class="text-base ">
                                                                    view news
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                                        {{--                                            <h1 class="font-bold text-lg mt-2 player" >{{ (isset($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : " ")  }}</h1>--}}
                                                            <div class=" card-wd player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">

                                                                <div class="p-4 ">
                                                                    <img class="w-full" src="{{ (isset($season->starting_goalies->away->player->images->uniform ) ? $season->starting_goalies->away->player->images->uniform : " ")  }}" class="w-44" alt="">
                                                                </div>

                                                                @if(isset($season->starting_goalies->away->status->name))
                                                                    <div class="flex flex-row items-center font-bold w-full text-center">
                                                                        @if($season->starting_goalies->away->status->name == 'Expected')
                                                                            <div class=" bg-[#FFCC00] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                        @elseif($season->starting_goalies->away->status->name == 'Confirmed')
                                                                            <div class="bg-[#15D869] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                        @else
                                                                            <div class="bg-[#38B6FF] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <h1 class="text-base ">
                                                                {{ (isset($season->starting_goalies->away->player->full_name) ?   $season->starting_goalies->away->player->full_name : " ")  }}
                                                            </h1>

                                                            <div class="rounded-[13px] card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center cursor-pointer  starting-goalies-away-view-card" rel="sg-view-card-away-{{$season->starting_goalies->away->id}}"  >
                                                                <img  class="w-5 h-5"  src="{{ asset('/images/home-page/plus.png') }}"  />
                                                                <h1 class="text-base ">
                                                                    view news
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="flex flex-col justify-evenly w-full gap-4">
                                                        <div class="flex flex-row gap-4">
                                                            <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center w-full justify-center">

                                                                <div class="w-6">

                                                                    <img  class="w-auto" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}">

                                                                </div>
                                                                <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combinations/{{$season->starting_goalies->home->team->slug }}">line Combinations</a></div>

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row gap-4">
                                                            <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center w-full justify-center">
                                                                <div class="w-6">
                                                                    <img class="w-auto" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}">
                                                                </div>


                                                                <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combinations/{{$season->starting_goalies->away->team->slug }}">line Combinations</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            <div class="sm:flex hidden sm:flex-row flex-col justify-evenly w-full gap-6  ">


                                                <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                                    <div class="  card-wd   player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">
                                                        <div class="p-4 ">

                                                            <img class="w-full" src="{{ (isset($season->starting_goalies->home->player->images->uniform ) ? $season->starting_goalies->home->player->images->uniform : " ")  }}" class="w-44" alt="">

                                                        </div>
                                                        @if(isset($season->starting_goalies->home->status->name))
                                                            <div class="flex flex-row  items-center font-bold w-full text-center">
                                                                @if($season->starting_goalies->home->status->name == 'Expected')
                                                                    <div class=" bg-[#FFCC00] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }}  </div>
                                                                @elseif($season->starting_goalies->home->status->name == 'Confirmed')
                                                                    <div class="bg-[#15D869] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }} </div>
                                                                @else
                                                                    <div class="bg-[#38B6FF] text-black p-2 w-full rounded-b-[13px]">{{ (isset($season->starting_goalies->home->status->name) ? $season->starting_goalies->home->status->name : " ")  }}  </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <h1 class="text-base ">
                                                        {{ (isset($season->starting_goalies->home->player->full_name) ?   $season->starting_goalies->home->player->full_name : " ")  }}
                                                    </h1>
                                                    <div class=" card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center starting-goalies-home-view-card  cursor-pointer " rel="sg-view-card-home-{{$season->starting_goalies->home->id}}" >
                                                        <img class="w-5 h-5" src="{{ asset('/images/home-page/plus.png') }}"   />
                                                        <h1 class="text-base ">
                                                            view news
                                                        </h1>
                                                    </div>
                                                </div>


                                                <div class="card-wd flex flex-col justify-between sm:w-8/12 w-full bg-white rounder-lg" >
                                                    <div class="flex flex-col gap-5 h-full">

                                                        <div class="flex flex-col justify-evenly h-full">
                                                                <div class="  flex flex-col h-full justify-between py-8 gap-2" >
                                                                    <div class="flex flex-row justify-evenly gap-4">
                                                                        <div class="flex flex-row items-center gap-1 ">
                                                                            <h1 class="text-center lg:text-2xl md:text-1xl sm:text-1xl  text-base  font-bold">{{ $season->starting_goalies->home->team->name }}</h1>

                                                                            <div class="w-10">
                                                                                <img class="w-auto" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}" alt="">
                                                                            </div>

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
                                                                        <div class="flex flex-row items-center gap-1 ">
                                                                            <div class="w-10">
                                                                                <img class="w-auto" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}" alt="">
                                                                            </div>
                                                                            <h1 class="text-center lg:text-2xl md:text-1xl sm:text-1xl  text-base font-bold ">{{ $season->starting_goalies->away->team->name }}</h1>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex flex-row justify-between px-6 py-4 ">
                                                                        <div class="flex flex-row justify-evenly gap-4 text-center">
                                                                            <div class="p-2 gap-2  ">
                                                                                <div class="text-black text-sm   ">GOALS</div>
                                                                                <div class="card-wd-1  bg-[#F4F5F7] p-6 rounded-lg  font-bold   ">{{ (isset($season->home_team->odds->team_goal) ? $season->home_team->odds->team_goal : "")  }}</div>
                                                                            </div>
                                                                            <div class="p-2 gap-2  ">
                                                                                <div class="text-black text-sm  ">WIN %</div>
                                                                                <div class="card-wd-1 bg-[#F4F5F7 p-6 rounded-lg  font-bold ">{{ (isset($season->home_team->odds->win_percentage) ? $season->home_team->odds->win_percentage : "")  }}</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex flex-row justify-evenly text-center">
                                                                            <div class="p-2 gap-2 ">
                                                                                <div class="text-black text-sm ">0/U</div>
                                                                                <div class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold  ">{{ (isset($season->home_team->odds->over_under) ? $season->home_team->odds->over_under : "")  }}</div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex flex-row justify-evenly gap-4 text-center" >
                                                                            <div class="p-2 gap-2  ">
                                                                                <div class="text-black text-sm ">WIN %</div>
                                                                                <div class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold ">{{ (isset($season->away_team->odds->win_percentage) ? $season->away_team->odds->win_percentage : "")  }}</div>
                                                                            </div>
                                                                            <div class="p-2 gap-2 w-full ">
                                                                                <div class="text-black text-sm ">GOALS</div>
                                                                                <div class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold  ">{{ (isset($season->away_team->odds->team_goal) ? $season->away_team->odds->team_goal : "")  }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex flex-row gap-2 justify-evenly ">
                                                                        <div class="flex flex-row gap-4">
                                                                            <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center">

                                                                                <div class="w-6">

                                                                                    <img  class="w-auto" src="{{ (isset($season->starting_goalies->home->team->logo->src ) ? $season->starting_goalies->home->team->logo->src : " ")  }}">

                                                                                </div>
                                                                                <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combinations/{{$season->starting_goalies->home->team->slug }}">line Combinations</a></div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="flex flex-row gap-4 w-1/3">
                                                                            <div class="flex flex-row  p-2 items-center justify-center rounded-lg gap-2 border border-[#38b6ff] w-full ">
                                                                                 <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combos/{{$season->starting_goalies->away->team->slug }}">matchup</a></div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex flex-row gap-4">
                                                                            <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center">
                                                                                <div class="w-6">
                                                                                    <img class="w-auto" src="{{ (isset($season->starting_goalies->away->team->logo->src ) ? $season->starting_goalies->away->team->logo->src : " ")  }}">
                                                                                </div>


                                                                                <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combinations/{{$season->starting_goalies->away->team->slug }}">line Combinations</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                                    {{--                                            <h1 class="font-bold text-lg mt-2 player" >{{ (isset($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : " ")  }}</h1>--}}
                                                    <div class=" card-wd player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">

                                                        <div class="p-4 ">
                                                            <img class="w-full" src="{{ (isset($season->starting_goalies->away->player->images->uniform ) ? $season->starting_goalies->away->player->images->uniform : " ")  }}" class="w-44" alt="">
                                                        </div>

                                                        @if(isset($season->starting_goalies->away->status->name))
                                                            <div class="flex flex-row items-center font-bold w-full text-center">
                                                                @if($season->starting_goalies->away->status->name == 'Expected')
                                                                    <div class=" bg-[#FFCC00] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                @elseif($season->starting_goalies->away->status->name == 'Confirmed')
                                                                    <div class="bg-[#15D869] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                @else
                                                                    <div class="bg-[#38B6FF] p-2 w-full rounded-b-[13px] text-black">{{ (isset($season->starting_goalies->away->status->name) ? $season->starting_goalies->away->status->name : " ")  }} </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <h1 class="text-base ">
                                                        {{ (isset($season->starting_goalies->away->player->full_name) ?   $season->starting_goalies->away->player->full_name : " ")  }}
                                                    </h1>

                                                    <div class="rounded-[13px] card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center starting-goalies-away-view-card cursor-pointer  " rel="sg-view-card-away-{{$season->starting_goalies->away->id}}"  >
                                                        <img  class="w-5 h-5"  src="{{ asset('/images/home-page/plus.png') }}"  />
                                                        <h1 class="text-base ">
                                                            view news
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="absolute">
                                            <div class="relative z-30 hidden sg-modal-view-card-home {{$season->starting_goalies->home->id}} ease-out duration-300" id="sg-view-card-home-{{$season->starting_goalies->home->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                                                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                                                        <div class="modal-center relative transform overflow-hidden rounded-lg   text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                            <div class="close-modal cursor-pointer" rel="sg-view-card-home-{{$season->starting_goalies->home->id}}"></div>


                                                            {{--<div class="relative">--}}
                                                            {{--<div   class="close close-modal" rel="modalNhl-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                            {{--</div>--}}

                                                            <div class="  px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                                <div class="flex flex-col gap-4 w-full h-full relative rounded-xl  ">
                                                                    <div class="flex m-3 mt-5 gap-5">
                                                                        <img class="w-[150px]  " src="{{  ( !empty($season->starting_goalies->home->player->images->uniform) ? $season->starting_goalies->home->player->images->uniform : '')     }}">
                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col">
                                                                                <h1 class="text-2xl font-bold">
                                                                                    {{  ( !empty($season->starting_goalies->home->player->full_name) ? $season->starting_goalies->home->player->full_name : '')     }}
                                                                                </h1>
                                                                                <p class="text-[12px] font-semibold">{{ $season->starting_goalies->home->team->name }}</p>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-3 flex  flex-col gap-4 items-center">
                                                                        <div class="flex flex-row justify-between gap-2  w-full">
                                                                            <div  >
                                                                                <a class="  flex flex-row items-center gap-2  " href="{{$season->starting_goalies->home->source->url}}">
                                                                                    <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                                                                    <div>
                                                                                        <h3 class="text-xs font-extrabold">{{$season->starting_goalies->home->source->name}}</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="  flex flex-row items-center gap-2 ">
                                                                                <a href="{{$season->starting_goalies->home->source->url}}">
                                                                                    <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                                                                </a>
                                                                                <div>
                                                                                    <p class="text-xs font-bold">{{ ( !empty($season->starting_goalies->home->game->game_date->date) ? $season->starting_goalies->home->game->game_date->date : '') }} | {{ ( !empty($season->starting_goalies->home->game->game_date->time) ? $season->starting_goalies->home->game->game_date->time : '') }} </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="aa de dn md aue avb bxn hidden">
                                                                <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                                                                    <span class="t">Close</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="absolute">
                                            <div class="relative z-30 hidden sg-modal-view-card-away {{$season->starting_goalies->home->id}} ease-out duration-300" id="sg-view-card-away-{{$season->starting_goalies->away->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                                                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                                                        <div class="modal-center relative transform overflow-hidden rounded-lg  text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                            <div class="close-modal cursor-pointer" rel="sg-view-card-away-{{$season->starting_goalies->away->id}}"></div>


                                                            {{--<div class="relative">--}}
                                                            {{--<div   class="close close-modal" rel="modalNhl-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                            {{--</div>--}}

                                                            <div class="  px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                                <div class="flex flex-col gap-4 w-full h-full relative rounded-xl    ">
                                                                    <div class="flex m-3 mt-5 gap-5">
                                                                        <img class="w-[150px]  " src="{{  ( !empty($season->starting_goalies->away->player->images->uniform) ? $season->starting_goalies->away->player->images->uniform : '')     }}">
                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col">
                                                                                <h1 class="text-2xl font-bold">
                                                                                    {{  ( !empty($season->starting_goalies->away->player->full_name) ? $season->starting_goalies->away->player->full_name : '')     }}
                                                                                </h1>
                                                                                <p class="text-[12px] font-semibold">{{ $season->starting_goalies->away->team->name }}</p>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-3 flex  flex-col gap-4 items-center">
                                                                        <div class="flex flex-row justify-between gap-2  w-full">
                                                                            <div  >
                                                                                <a class="  flex flex-row items-center gap-2  " href="{{$season->starting_goalies->away->source->url}}">
                                                                                    <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                                                                    <div>
                                                                                        <h3 class="text-xs font-extrabold">{{$season->starting_goalies->away->source->name}}</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>

                                                                            <div class="  flex flex-row items-center gap-2 ">
                                                                                <a href="{{$season->starting_goalies->away->source->url}}">
                                                                                    <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                                                                </a>
                                                                                <div>
                                                                                    <p class="text-xs font-bold">{{ ( !empty($season->starting_goalies->away->game->game_date->date) ? $season->starting_goalies->away->game->game_date->date : '') }} | {{ ( !empty($season->starting_goalies->away->game->game_date->time) ? $season->starting_goalies->away->game->game_date->time : '') }} </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="aa de dn md aue avb bxn hidden">
                                                                <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                                                                    <span class="t">Close</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                       </div>
                </div>
            </div>
        </div>

    </div>






@endsection