{{--<li class="nhl-linecombos_ nav-itms" >--}}
    {{--<a  href="/{{ request()->segment(1) }}/starting-lineups" style="{{ (request()->segment(2) == 'starting-lineups' ? ' color:#38b6ff;' : '') }} z-index: 1; cursor:pointer"  class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">--}}
        {{--Starting Lineups--}}
    {{--</a>--}}
{{--</li>--}}
{{--<li class="">--}}
    {{--<a href="/{{ request()->segment(1) }}/player-news" style="{{ (request()->segment(2) == 'player-news' ? ' color:#38b6ff;' : '') }}" class=" text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
        {{--Player News--}}
    {{--</a>--}}
{{--</li>--}}
{{--<li class="nav-itms ">--}}
    {{--<a href="/{{ request()->segment(1) }}/matchup" style="{{ (request()->segment(2) == 'matchup' ? ' color:#38b6ff;' : '') }}" class="flex items-center text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
        {{--Matchup--}}
    {{--</a>--}}
{{--</li>--}}


<div class="grid h-full max-w-lg grid-cols-3 mx-auto font-medium">

    <a href="/{{ request()->segment(1) }}/player-news"  class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nba/player-news.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="{{  ( !empty(request()->segment(2)) && request()->segment(2) == 'player-news' ? 'text-blue-500': ' ') }}  text-sm font-bold">Player News</span>
    </a>

    <a  href="/{{ request()->segment(1) }}/matchup" class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nba/matchup.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="{{  ( !empty(request()->segment(2)) && request()->segment(2) == 'matchup' ? 'text-blue-500': ' ') }} text-sm font-bold">Matchup</span>
    </a>
    <a href="/{{ request()->segment(1) }}/starting-lineups" class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nba/nba-lineups.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="{{ ( !empty(request()->segment(2)) && request()->segment(2) == 'starting-lineups' ? 'text-blue-500': ' ') }}  text-sm font-bold">Lineups</span>
    </a>
</div>