
    <div class="flex flex-col gap-10">

        <div class="w-full ">
            <!-- corouser example caption 4 -->
            <div  class="relative"  >
                <div class="relative w-full overflow-hidden after:clear-both after:block   ">
                    <div class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]" >
                        <div class="flex flex-row justify-center items-center ">

                            <div class="flex justify-center items-center border border-[#38b6ff] bg-white rounded-lg h-14 w-10/12 text-white">
                                <div class="text-base font-bold text-black" >
                                    <!--Tuesday, February 6, 2024-->
                                    {{ $current_date }}

                                    {{--@if(isset($date))--}}
                                        {{--{{ Carbon\Carbon::parse($date)->format('l, F j, Y') }}--}}
                                    {{--@else--}}
                                        {{--{{ \Carbon\Carbon::now()->format('l, F j, Y') }}--}}
                                    {{--@endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="subtractOneDay"
                     :class="{ 'pointer-events-none': isLoading }"
                     class="absolute cursor-pointer left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                     type="button" >
                    <div class="flex items-center justify-center h-14 w-14  border border-[#38b6ff] bg-white rounded-lg">
                        <img class="w-[30px] h-[30px] rotate-90"  src="{{ asset('images/starting-goalies/arrow-down.png') }}"   alt="">
                    </div>
                </div>
                <div @click="addOneDay"
                     :class="{ 'pointer-events-none': isLoading }"
                     class=" absolute right-0 top-0 z-[1] flex flex cursor-pointer items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                     type="button" >

                    <div class="flex items-center justify-center  h-14 w-14 border border-[#38b6ff] bg-white rounded-lg">
                        <img class="w-[30px] h-[30px] -rotate-90"  src="{{ asset('images/starting-goalies/arrow-down.png') }}" alt="" >
                    </div>
                </div>
            </div>
        </div>


        <div class="relative flex items-center gap-2">
            <img class="w-12 h-12  " src="{{ asset('/images/nhl.png') }}">
            <h1 class="text-2xl font-extrabold pt-5 pb-5 " >
                NHL Matchup
            </h1>
        </div>


        <div class="flex flex-row gap-4 " id="logo-matchup" >
            {{--matchup-logo-list--}}
            @foreach($team_logo as $key=>$logo)
                <div class="flex flex-col gap-2 rounded-lg border border-[#000000] justify-center items-center p-4 home-away-logo cursor-pointer" rel="home-away-{{$logo->id}}"  >
                    <img src="{{ $logo->starting_goalies->home->team->logo->src  }}" class="w-8">
                    <img src="{{ $logo->starting_goalies->away->team->logo->src  }} " class="w-8">
                </div>
            @endforeach
        </div>

        {{--<!-- Content -->--}}
        @foreach($team_logo as $key=>$val)
            <div class="flex flex-col items-center w-full gap-3 place-items-stretch home-away-starting-goalies {{ ($key == 0) ? '' : 'hidden' }} " id="home-away-{{$val->id}}">
                <div class="flex flex-col gap-2 w-full rounded-lg"  >
                    <div>
                        <div class="flex flex-row justify-evenly w-full gap-6"  >

                            <div class="flex flex-col items-center justify-between gap-2 w-2/12 ">
                                <div class="flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-lg">
                                    @if($val->starting_goalies->home->player)
                                        <div class="p-4 " >
                                            <img src="{{ $val->starting_goalies->home->player->images->uniform ? $val->starting_goalies->home->player->images->uniform : '' }}" class="w-44" alt="...">
                                        </div>
                                    @endif
                                    @if($val->starting_goalies->home->status->name == 'Expected')
                                        <div class=" bg-yellow-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->home->status->name ? $val->starting_goalies->home->status->name : '' }}
                                        </div>
                                    @elseif($val->starting_goalies->home->status->name == 'Confirmed')
                                        <div  class="bg-green-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->home->status->name ? $val->starting_goalies->home->status->name : '' }}
                                        </div>
                                    @else
                                        <div class="bg-blue-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->home->status->name ? $val->starting_goalies->home->status->name : '' }}
                                        </div>
                                    @endif
                                </div>
                                @if($val->starting_goalies->home->player && $val->starting_goalies->home->player->full_name)
                                    <h1 class="text-base">
                                        {{ $val->starting_goalies->home->player->full_name ? $val->starting_goalies->home->player->full_name :'' }}
                                    </h1>
                                @endif
                                <div class="flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center starting-goalies-view-card cursor-pointer" :rel="'sg-view-card' + matchup.starting_goalies.home.id" >
                                    <img class="w-5 h-5"  src="{{ asset('/images/home-page/plus.png') }}"  />
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
                                                    <h1 class="text-center text-2xl font-bold">
                                                        {{ $val->starting_goalies->home->team->name ? $val->starting_goalies->home->team->name  : '' }}
                                                    </h1>
                                                    <img class="w-10" src="{{$val->starting_goalies->home->team->logo->src ? $val->starting_goalies->home->team->logo->src  : ''}}" alt="">
                                                </div>
                                                <div class="flex flex-row text-center  text-[#38b6ff] font-bold   items-center">
                                                    <div class="text-base flex flex-col">
                                                        <div>
                                                            {{ $val->starting_goalies->home->game->game_date->date ? $val->starting_goalies->home->game->game_date->date  : '' }}
                                                        </div>
                                                        <div>
                                                            {{ $val->starting_goalies->home->game->game_date->time ? $val->starting_goalies->home->game->game_date->time  : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row items-center gap-1">
                                                    <img class="w-10" src="{{$val->starting_goalies->away->team->logo->src ? $val->starting_goalies->away->team->logo->src  : ''}}" alt="">
                                                    <h1 class="text-center text-2xl font-bold ">
                                                        {{ $val->starting_goalies->away->team->name ? $val->starting_goalies->away->team->name  : '' }}
                                                    </h1>
                                                </div>
                                            </div>

                                            <div class="flex flex-row justify-between    px-6 py-4">
                                                <div class="flex flex-row justify-evenly gap-4 text-center">
                                                    <div class="p-2 gap-2  ">
                                                        <div class="text-black text-sm  ">GOALS</div>
                                                        <div class="bg-[#F4F5F7] p-6 rounded-lg  font-bold">
                                                            @if($val->home_team->odds && $val->home_team->odds->team_goal)
                                                                {{ $val->home_team->odds->team_goal }}
                                                            @else
                                                                0
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="p-2 gap-2  ">
                                                        <div class="text-black text-sm  ">WIN %</div>
                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold" >
                                                            @if($val->home_team->odds && $val->home_team->odds->win_percentage)
                                                                {{ $val->home_team->odds->win_percentage }}
                                                            @else
                                                                0
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex flex-row justify-evenly text-center">
                                                    <div class="p-2 gap-2 ">
                                                        <div class="text-black text-sm ">0/U</div>
                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold" >
                                                            @if($val->home_team->odds && $val->home_team->odds->over_under)
                                                                {{ $val->home_team->odds->over_under  }}
                                                            @else
                                                                0
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="flex flex-row justify-evenly gap-4 text-center" >
                                                    <div class="p-2 gap-2  ">
                                                        <div class="text-black text-sm ">WIN %</div>
                                                        <div class="bg-[#F4F5F7] p-6 rounded-lg  font-bold" >
                                                            @if($val->away_team->odds && $val->away_team->odds->win_percentage)
                                                                {{ $val->away_team->odds->win_percentage  }}
                                                            @else
                                                                0
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="p-2 gap-2 w-full ">
                                                        <div class="text-black text-sm">GOALS</div>
                                                        <div class="bg-[#F4F5F7]  p-6 rounded-lg  font-bold" >

                                                            @if($val->away_team->odds && $val->away_team->odds->team_goal)
                                                                {{ $val->away_team->odds->team_goal  }}
                                                            @else
                                                                0
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="flex flex-row gap-2 justify-evenly">
                                                <div class="flex flex-row gap-4">
                                                    <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff]">
                                                        <img  class="w-6" :src="$matchup->starting_goalies.home.team.logo.src ? $matchup->starting_goalies.home.team.logo.src  : ''">
                                                        <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$val->starting_goalies->home->team->slug }}">line Combinations</a></div>
                                                    </div>
                                                </div>

                                                <div class="flex flex-row gap-4 w-1/3 hidden">
                                                    <div class="flex flex-row  p-2 items-center justify-center rounded-lg gap-2 border border-[#38b6ff] w-full ">
                                                        <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$val->starting_goalies->away->team->slug }}"> matchup </a></div>
                                                    </div>
                                                </div>


                                                <div class="flex flex-row gap-4">
                                                    <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff]">
                                                        <img  class="w-6" src="{{ $val->starting_goalies->away->team->logo->src ? $val->starting_goalies->away->team->logo->src  : '' }}">
                                                        <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{$val->starting_goalies->away->team->slug }}">line Combinations</a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col items-center justify-between gap-2 w-2/12 ">
                                <div class="flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-lg">
                                    @if($val->starting_goalies->away->player)
                                        <div class="p-4 ">
                                            <img src="{{$val->starting_goalies->away->player->images->uniform ? $val->starting_goalies->away->player->images->uniform : ''}}" class="w-44" alt="...">
                                        </div>
                                    @endif
                                    @if($val->starting_goalies->home->status->name == 'Expected')
                                        <div class=" bg-yellow-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->away->status->name ? $val->starting_goalies->away->status->name : '' }}
                                        </div>
                                    @elseif($val->starting_goalies->away->status->name == 'Confirmed')
                                        <div  class="bg-green-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->away->status->name ? $val->starting_goalies->away->status->name : '' }}
                                        </div>
                                    @else
                                        <div class="bg-blue-500 text-black p-2 w-full rounded-b-[13px]">
                                            {{ $val->starting_goalies->away->status->name ? $val->starting_goalies->away->status->name : '' }}
                                        </div>
                                    @endif

                                </div>
                                @if($val->starting_goalies->away->player && $val->starting_goalies->away->player->full_name)
                                    <h1 class="text-base " >
                                        {{ $val->starting_goalies->away->player->full_name ? $val->starting_goalies->away->player->full_name :'' }}
                                    </h1>
                                @endif


                                <div class="flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center starting-goalies-view-card cursor-pointer" :rel="'sg-view-card' + getMatchupSingleData.starting_goalies.away.id" >
                                    <img class="w-5 h-5" src="{{asset('/images/home-page/plus.png')}}"   />
                                    <span class="text-black">
                                    view card
                                </span>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        <div class="flex flex-col w-full">
            <div class="flex flex-row gap-3 w-full">
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-row gap-4">
                        <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                        <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold">NHL Player News</h1>
                    </div>
                    <div class=" flex justify-center my-5 hidden">
                        <a href="/nhl/player-news" class="text-[#1d9bf0] font-bold text-sm">View All NHL Player News</a>
                    </div>
                </div>
            </div>



            @foreach($shuffle_two_team_player_card as $key=>$dataTwoTeams)


                @foreach($dataTwoTeams as $key1=>$val)

                    <div class="nhl-matchup-image-item image-item hidden"  >
                        <div class="  bg-white border rounded-[13px] border border-[#d9d9d9]">
                            <div class="flex flex-col gap-4 items-center justify-center relative">
                                <div class=" px-3 pt-5">

                                    @if($val->type->slug && $val->type->slug == 'lineup-update')
                                        <div>
                                            <img class="w-44" :src="dataTwoTeam.team.front_uniform.src" alt="player images uniform">
                                        </div>
                                    @else
                                        <div>

                                            @if(isset($val->player) && $val->player->images)
                                                <div>
                                                    <img class="w-44" src="{{$val->player->images->uniform}}" alt="player images uniform">
                                                </div>
                                            @else
                                                <div class="font-black" >
                                                    No Image Available
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                @endforeach
            @endforeach
                {{--<div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 hidden">--}}
                    {{--<div class=" w-full   mb-3 "  >--}}
                        {{--<div   class="nhl-matchup-container-header container-header">--}}
                            {{--<div class="nhl-matchup-container-slider container-slider">--}}
                                {{--<div class="nhl-matchup-slider-wrapper slider-wrapper">--}}
                                    {{--<!-- Slider controls -->--}}

                                    {{--<button type="button" id="prev-slide" class="nhl-matchup-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>--}}
                                        {{--<span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
                                            {{--<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
                                                {{--<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>--}}
                                            {{--</svg>--}}
                                            {{--<span class="sr-only">Previous</span>--}}
                                        {{--</span>--}}
                                    {{--</button>--}}


                                    {{--<div  class="nhl-matchup-image-list image-list hidden">--}}

                                        {{--@foreach($dataTwoTeams as $key1=>$dataTwoTeam)--}}
                                            {{--{{$dataTwoTeam->id}}--}}
                                                {{--<div class="nhl-matchup-image-item image-item hidden"  >--}}
                                                    {{--<div class="  bg-white border rounded-[13px] border border-[#d9d9d9]">--}}
                                                        {{--<div class="flex flex-col gap-4 items-center justify-center relative">--}}
                                                            {{--<div class=" px-3 pt-5">--}}

                                                                {{--@if($dataTwoTeam->type->slug && $dataTwoTeam->type->slug == 'lineup-update')--}}
                                                                    {{--<div>--}}
                                                                        {{--<img class="w-44" :src="dataTwoTeam.team.front_uniform.src" alt="player images uniform">--}}
                                                                    {{--</div>--}}
                                                                {{--@else--}}
                                                                    {{--<div>--}}

                                                                        {{--@if(isset($dataTwoTeam->player) && $dataTwoTeam->player->images)--}}
                                                                            {{--<div>--}}
                                                                                {{--<img class="w-44" src="{{$dataTwoTeam->player->images->uniform}}" alt="player images uniform">--}}
                                                                            {{--</div>--}}
                                                                        {{--@else--}}
                                                                            {{--<div class="font-black" >--}}
                                                                                {{--No Image Available--}}
                                                                            {{--</div>--}}
                                                                        {{--@endif--}}
                                                                    {{--</div>--}}
                                                                {{--@endif--}}
                                                            {{--</div>--}}

                                                            {{--<div class="flex flex-row justify-center gap-3 p-2 text-white items-center w-full rounded-b-[13px] bg-[#F10000]"  >--}}
                                                                {{--@if($dataTwoTeam->type->slug && $dataTwoTeam->type->slug == 'lineup-update')--}}
                                                                    {{--<p class="text-sm font-bold">--}}
                                                                        {{--{{ $dataTwoTeam->metafields->lineup_status->name }}--}}
                                                                    {{--</p>--}}
                                                                {{--@else--}}
                                                                    {{--<p class="text-sm font-bold" v-else>--}}
                                                                        {{--{{ $dataTwoTeam->type->name }}--}}
                                                                    {{--</p>--}}
                                                                {{--@endif--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div>--}}
                                                        {{--<div class="flex flex-row items-center gap-2 justify-center my-2"  >--}}

                                                            {{--@if($dataTwoTeam->type->slug && $dataTwoTeam->type->slug == 'lineup-update')--}}
                                                                {{--<img class="w-5" src="{{ $dataTwoTeam->team->logo->src }}">--}}
                                                                {{--@if(isset($dataTwoTeam->player) && $dataTwoTeam->player->full_name)--}}
                                                                    {{--<h1 class="text-base">--}}
                                                                        {{--{{ $dataTwoTeam->player->full_name }}--}}
                                                                    {{--</h1>--}}
                                                                {{--@else--}}
                                                                    {{--<h1 class="text-base ">--}}
                                                                        {{--{{ $dataTwoTeam->team->name }}--}}
                                                                    {{--</h1>--}}
                                                                {{--@endif--}}
                                                            {{--@else--}}
                                                                {{--<img class="w-5" src="{{ $dataTwoTeam->team->logo->src }}">--}}
                                                                {{--@if(isset($dataTwoTeam->player) && $dataTwoTeam->player->full_name)--}}
                                                                    {{--<h1 class="text-base" >--}}
                                                                        {{--{{ $dataTwoTeam->player->full_name }}--}}
                                                                    {{--</h1>--}}
                                                                {{--@else--}}
                                                                    {{--<h1 class="text-base" >--}}
                                                                        {{--{{ $dataTwoTeam->team->name }}--}}
                                                                    {{--</h1>--}}
                                                                {{--@endif--}}
                                                            {{--@endif--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="">--}}
                                                        {{--<div class="flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhl-view-news " rel="modalNhl-id" >--}}
                                                            {{--<img class="w-[15px] h-[15px]" src="{{asset('/images/home-page/plus.png')}}" alt="home-page/plus.png">--}}
                                                            {{--<h1 class="text-base ">--}}
                                                                {{--view news--}}
                                                            {{--</h1>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--@endforeach--}}
                                    {{--</div>--}}

                                    {{--<button type="button" id="next-slide" class="nhl-matchup-slide-button  slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>--}}
                                        {{--<span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
                                            {{--<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
                                                {{--<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
                                            {{--</svg>--}}
                                            {{--<span class="sr-only">Next</span>--}}
                                        {{--</span>--}}
                                    {{--</button>--}}

                                {{--</div>--}}


                                {{--<div class="nhl-matchup-slider-scrollbar slider-scrollbar" style="visibility: hidden">--}}
                                    {{--<div class="scrollbar-track">--}}
                                        {{--<div class="nhl-matchup-scrollbar-thumb scrollbar-thumb"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}

                {{--</div>--}}







        </div>
    </div>