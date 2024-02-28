

<div class="smm-block hidden relative mb-12 w-full" >
    <div class="fixed top-0 w-full z-30 bg-white p-2">
        <section class="top-nav">
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <ul class="menu">
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold bg-[#38b6ff] text-[#ffffff]  xl:px-4 lg:px-4 md:px-2  py-2  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white">
                    <a href="{{url('/nhl/home')}}" class="w-full ">
                        NHL
                    </a>
                </li>
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold  text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  py-2  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                    <a href="{{url('/nba/line-combos')}}" class="w-full">
                        NBA
                    </a>
                </li>
                <li  class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  py-2  hover:bg-sky-500/50 hover:border-sky-50 hover:text-white ">
                    <a href="{{url('/soc/line-combos')}}" class="w-full">
                        MLB
                    </a>
                </li>
                <li class="xl:text-[24px] lg:text-[22px] md:text-[20px] font-bold text-[#38b6ff] xl:px-4 lg:px-4 md:px-2  py-2  hover:bg-sky-500/50 hover:border-sky-50  hover:text-white ">
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