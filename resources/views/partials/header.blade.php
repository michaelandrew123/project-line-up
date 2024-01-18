
<div class="w-full flex flex-row justify-center block smm-hidden ">
    <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col items-center justify-between gap-1 max-w-screen-2xl ">

        <div class="flex flex-row justify-between items-center flex w-full  py-3 ">
            <div class="flex gap-1 items-end justify-start">
                <img class="xl:w-[99px] lg:w-[99px] md:w-[80px] hidden" src="{{  ( !empty($team_color['data']['featured_player_1']['images']['photo']) ? $team_color['data']['featured_player_1']['images']['photo'] :  '')  }}" alt="">
                <div class="flex items-end">
                    {{--                        {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}--}}

                    @if(isset($team_color))
                        @php
                            $colorCounter = 0;
                        @endphp

                        @foreach($team_color['data']['colors']['types'] as $key=>$val)
                            @if($colorCounter == 0)
                                @php $projectedColor = $val; @endphp
                            @endif

                            @if($colorCounter == 1)
                                @php  $lineUpsColor = $val; @endphp
                            @endif
                            @php $colorCounter++; @endphp

                        @endforeach

                        @foreach($team_color['data']['colors']['types'] as $key=>$val)
                            @if($key == 'color-1')
                                @php
                                    $color1 = $val
                                @endphp
                            @endif
                            @if($key == 'color-2')
                                @php
                                    $color2 = $val
                                @endphp
                            @endif
                            @if($key == 'color-3')
                                @php
                                    $color3 = $val
                                @endphp
                            @endif
                        @endforeach
                    @endif

                    <img  src="{{ asset('/images/projectedlineup_logo.png') }}" />
                </div>
            </div>
            <div class="flex flex-row items-center xl:w-8/12 lg:w-8/12 md:w-7/12 xl:justify-between lg:justify-between md:justify-between ">
                <div class="flex xl:gap-6 lg:gap-5 md:gap-2">
                    <a href="{{url('/nhl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                        NHL
                    </a>
                    <a href="{{url('/nba/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff] rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                        NBA
                    </a>
                    <a href="{{url('/soc/line-combos')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50 hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                        SOC
                    </a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px border border-[#38b6ff]  rounded-md hover:bg-sky-500/50 hover:border-sky-50  hover:text-white active:bg-[#38b6ff] active:text-[#ffffff]">
                        NFL
                    </a>
                    <a href="{{url('/bet')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#15d869] xl:px-4 lg:px-4 px-3 md:px-2 border border-[#15d869]  rounded-md hover:bg-green-300 hover:border-green-300  hover:text-white active:bg-[#15d869] active:text-[#ffffff]">
                        BET
                    </a>
                    <a href="{{url('/learn')}}" class="xl:text-[24px] lg:text-[22px] md:text-[20px]  font-bold  text-[#1c6399] xl:px-4 lg:px-4 md:px-2 py-px border border-[#1c6399] rounded-md hover:bg-cyan-500 hover:border-cyan-500  hover:text-white active:bg-[#1c6399] active:text-[#ffffff]">
                        LEARN
                    </a>
                </div>
                <a href="#" >
                    <svg class="w-10 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-10/12 flex flex-col items-center">

            <div class="flex flex-row w-full justify-evenly">
                <div class="w-full h-auto flex justify-center relative">
                    <img class="w-[32%] z-20 absolute" src="{{ asset('/images/home-page/connor-mcdavid.png') }}" alt="">
                    <img class="w-[32%] z-0 " src="{{ asset('/images/home-page/auston-matthews.png') }}" alt="">
                    <img class="w-[32%] z-10 " src="{{ asset('/images/home-page/mohamed-salah.png') }}" alt="">
                </div>

            </div>


            {{--<div class="relative">--}}
                <div class="relative w-10/12">
                    {{--border-2 border-[#38B6FF]--}}
                    {{--<input class="w-full border-2 border-rose-600 text-center text-xl text-[#4d4d4d] rounded h-14" type="text" placeholder="Search Projected Lineups">--}}
                    <input type="text" class="w-full  text-center text-xl text-[#4d4d4d] rounded h-14 search" type="text" placeholder="Search Projected Lineups" style="border: 2px solid #38B6FF">

                    {{--<input class="border-2 border-rose-600 ...">--}}
                    <a class="absolute top-1 right-3" href="">
                        <img class="w-[50px]" src="{{ asset('/images/search.png') }}" alt="">
                    </a>
                </div>

                {{--<div id="search-nhl-home-content">--}}
                    {{--<div>Search Result</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

    </div>
</div>




<div class="smm-block hidden relative mb-12 py-2" >
    <div class="fixed top-0 w-full z-30">
        <section class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <ul class="menu">
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold bg-[#38b6ff] text-[#ffffff]  xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white">
                    <a href="{{url('/nhl/home')}}" class="w-full ">
                        NHL
                    </a>
                </li>
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                    <a href="{{url('/nba/line-combos')}}" class="w-full">
                        NBA
                    </a>
                </li>
                <li  class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                    <a href="{{url('/soc/line-combos')}}" class="w-full">
                        SOC
                    </a>
                </li>
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2 py-px  hover:bg-sky-500/50 hover:border-sky-50  hover:text-white ">
                    <a href="{{url('/nfl/home')}}"  class="w-full">
                        NFL
                    </a>

                </li>

            </ul>
            <div class="w-full flex justify-center">
                <div class="flex items-center  ">
                    @php
                        if(!isset($team_slug)){
                            $team_slug = '';
                        }
                    @endphp

                    <img  src="{{ asset('/images/projectedlineup_logo.png') }}" />
                </div>
            </div>
        </section>
    </div>
</div>