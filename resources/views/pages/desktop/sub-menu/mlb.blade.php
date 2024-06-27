<li class="nhl-linecombos_ nav-itms" >
    <a  href="/{{ request()->segment(1) }}/starting-lineups" style="{{ (request()->segment(2) == 'starting-lineups' ? ' color:#38b6ff;' : '') }} z-index: 1; cursor:pointer"  class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">
        Starting Lineups
    </a>
</li>
<li class="">
    <a href="/{{ request()->segment(1) }}/starting-pitchers" style="{{ (request()->segment(2) == 'starting-pitchers' ? ' color:#38b6ff;' : '') }}" class=" text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
        Starting Pitchers
    </a>
</li>
<li class="">
    <a href="/{{ request()->segment(1) }}/player-news" style="{{ (request()->segment(2) == 'player-news' ? ' color:#38b6ff;' : '') }}" class=" text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
        Player News
    </a>
</li>
{{--<li class="nav-itms ">--}}
    {{--<a href="/{{ request()->segment(1) }}/matchup" style="{{ (request()->segment(2) == 'matchup' ? ' color:#38b6ff;' : '') }}" class="flex items-center text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">--}}
        {{--Matchup--}}
    {{--</a>--}}
{{--</li>--}}