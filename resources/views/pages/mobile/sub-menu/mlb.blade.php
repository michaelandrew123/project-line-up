<div class="grid h-full max-w-lg grid-cols-3 mx-auto font-medium">


    <a  href="/{{ request()->segment(1) }}/player-news" class="inline-flex flex-col items-center justify-center px-5 ">
        {{--<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
        {{--<path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>--}}
        {{--<path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>--}}
        {{--</svg>--}}
        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mlb/player-news.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);" >
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'player-news' ? 'text-blue-500': ' ') }} text-sm font-bold">Player News</span>
    </a>
    <a href="/{{ request()->segment(1) }}/starting-pitchers"  class="inline-flex flex-col items-center justify-center px-5 ">
        {{--<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
        {{--<path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>--}}
        {{--<path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>--}}
        {{--</svg>--}}
        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mlb/starting-pitchers.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);" >
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'starting-pitchers' ? 'text-blue-500': ' ') }} text-sm font-bold">Starting Pitchers</span>
    </a>

    <a href="/{{ request()->segment(1) }}/starting-lineups" class="inline-flex flex-col items-center justify-center px-5 ">
        {{--<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">--}}
        {{--<path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>--}}
        {{--</svg>--}}
        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mlb/mlb-lineups.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);" >
        <span class="text-sm {{ ( !empty(request()->segment(2)) && request()->segment(2) == 'starting-lineups' ? 'text-blue-500': ' ') }}  text-sm font-bold"> Lineups</span>
    </a>
</div>