


        @if (request()->path() == '' || request()->path() == '/')

            <div id="mobile-footer-menu-123" class="d  z-50 w-full sm:flex fixed bottom-0 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
                    <a  href="{{url('/nfl/home')}}" class="inline-flex justify-end gap-2 inline-flex flex-col items-center px-5 py-2 hover:bg-gray-50 dark:hover:bg-gray-800 group">

                        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mdi--football.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
                        <span class="text-sm text-white dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">NFL </span>
                    </a>

                    <a href="{{url('/epl/home')}}"  class="inline-flex justify-end gap-2 inline-flex flex-col items-center px-5 py-2  ">

                        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mdi--soccer.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
                        <span class="text-sm text-white dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">EPL</span>
                    </a>
                    <a href="{{url('/nhl/home')}}"  class="inline-flex justify-end gap-2 inline-flex flex-col items-center px-5 py-2  ">

                        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mdi--hockey-puck.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
                        <span class="text-sm text-white dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">NHL</span>
                    </a>
                    <a href="{{url('/mlb/home')}}"  class="inline-flex justify-end gap-2 inline-flex flex-col items-center px-5 py-2  ">

                        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mdi--baseball.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
                        <span class="text-sm text-white dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">MLB</span>
                    </a>
                    <a href="{{url('/nba/home')}}" class="inline-flex justify-end gap-2  flex-col items-center px-5 py-2  ">

                        <img class="w-6 mt-2  " src="{{ asset('/images/league/mobile/mdi--basketball.svg') }}" style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(180deg) brightness(95%) contrast(80%);">
                        <span class="text-sm text-white dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-500">NBA</span>
                    </a>
                </div>
            </div>
        @else
            <div id="mobile-footer-menu-123" class="sm:flex h-16 z-50 w-full fixed bottom-0 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                @if(request()->segment(1) == 'nba')
                    @include('pages.mobile.sub-menu.nba')
                @elseif(request()->segment(1) == 'nhl')
                    @include('pages.mobile.sub-menu.nhl')
                @elseif(request()->segment(1) == 'mlb')
                    @include('pages.mobile.sub-menu.mlb')
                @elseif(request()->segment(1) == 'nfl')
                    @include('pages.mobile.sub-menu.nfl')
                @elseif(request()->segment(1) == 'epl')
                    @include('pages.mobile.sub-menu.epl')
                @endif
            </div>
        @endif

