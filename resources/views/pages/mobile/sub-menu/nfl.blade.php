<div class="grid h-full max-w-lg grid-cols-3 mx-auto font-medium">
    <a href="/{{ request()->segment(1) }}/player-news"  class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nfl/player-news.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'player-news' ? 'text-blue-500': ' ') }}  text-sm font-bold">Player News</span>
    </a>
    <a  href="/{{ request()->segment(1) }}/matchup" class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nfl/matchup.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'matchup' ? 'text-blue-500': ' ') }}   text-sm font-bold">Matchup</span>
    </a>
    <a href="/{{ request()->segment(1) }}/depth-charts" class="inline-flex flex-col items-center justify-center px-5   ">

        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/nfl/nfl-depth-chart.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'depth-charts' ? 'text-blue-500': '') }}  text-sm font-bold"> Depth Charts</span>
    </a>
</div>