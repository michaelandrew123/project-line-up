<li class="nav-itms {{Request::is('nhl/starting-goalies') ? 'active':'' }}">
    <a href="{{url(request()->segment(1) . '/starting-goalies')}}" style="{{Request::is('nhl/starting-goalies') ? 'text-color:transparent':'' }}" class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">
        Starting Goalies
    </a>
</li>
<li class="nhl-linecombos_ nav-itms" >
    <a  href="/{{ request()->segment(1) }}/line-combinations" style="{{ (request()->segment(2) == 'line-combinations' || request()->segment(2) == 'line-combos'  ? ' color:#38b6ff;' : '') }} z-index: 1; cursor:pointer"  class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">

        Line Combinations
    </a>
</li>
<li class="nhl-linecombos_ nav-itms" >
    <a  href="/{{ request()->segment(1) }}/line-change" style="{{ (request()->segment(2) == 'line-change' ? 'color:#38b6ff;' : '') }} z-index: 1; cursor:pointer"  class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">

        Line Change
    </a>
</li>
<li class="nav-itms hidden {{Request::is('nhl/projections') ? 'active':'' }}">
    <a href="{{url('nhl/projections')}}" style="{{Request::is('nhl/projections') ? 'text-color:transparent':'' }}" class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">
        DFS Projections
    </a>
</li>
<li class="">
    <a href="/{{ request()->segment(1) }}/player-news" style="{{ (request()->segment(2) == 'player-news' ? ' color:#38b6ff;' : '') }}" class=" text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
        Player News
    </a>
</li>
<li class="nav-itms hidden {{Request::is('nhl/lineup-study') ? 'active':'' }}">
    <a href="{{url('nhl/lineup-study')}}" style="{{Request::is('nhl/lineup-study') ? 'text-color:transparent':'' }}" class="text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center">
        Lineup Study
    </a>
</li>

{{--@if (request()->path() == 'nhl/player-news' || request()->path() == 'nhl/player-news/')--}}
    {{--<li class="nav-itms {{Request::is('nhl/news') ? 'active':'' }}">--}}
        {{--<a href="{{ request()->segment(1) }}/matchup" class="  flex items-center text-xl xl:text-lg lg:text-base md:text-sm font-bold  text-black text-center  ">--}}
            {{--Matchup--}}
        {{--<!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->--}}
        {{--</a>--}}
    {{--</li>--}}
{{--@else--}}
    <li class="nav-itms ">
        <a href="/{{ request()->segment(1) }}/matchup" style="{{ (request()->segment(2) == 'matchup' ? ' color:#38b6ff;' : '') }}" class="flex items-center text-sm xl:text-lg lg:text-base md:text-sm font-bold text-center  ">
            Matchup
        <!-- <img class="w-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt=""> GPP Money List -->
        </a>
    </li>
{{--@endif--}}