
<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">
            <div class="flex flex-row sm:gap-4 gap-2 items-center" >
                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>

                <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2">
                    <div class="uppercase">{{request()->segment(1) }}</div>
                    <div> Quarterback News </div>
                </div>
            </div>
            <div class=" flex justify-end  ">
                <a href="/{{request()->segment(1)}}/player-news" class=" font-blue font-bold text-sm">View All</a>
            </div>

        </div>
    </div>


    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2  ">

        <div class="w-full">
            <div class="nhl-pn-container-header container-header">

                <div class="nhl-pn-container-slider container-slider">
                    <div class="nhl-pn-slider-wrapper slider-wrapper">
                        <!-- Slider controls -->
                        <button
                                type="button"
                                id="prev-slide-quarterback"
                                rel="quarterback"
                                class="nhl-pn-slide-button home-pn-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none"
                                data-carousel-prev
                               >
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <div  class="nhl-pn-image-list home-pn-image-list image-list-quarterback image-list" rel="quarterback">
                            @php
                                $quarterback_count = 0;
                                $quarterback_bg_color = '';
                                $quarterback_type_icon = ''
                            @endphp
                            @foreach($quarterback as $key=>$val)
                                @php
                                    $quarterback_count++
                                @endphp
                                {{--{{ ($quarterback_count  > 6) ? 'hidden' : '' }}--}}
                                <div class="nfl-image-item home-pn-image-item image-item quarterback" >
                                    <div class="flex flex-col ">
                                        <div class=" card-wd bg-white rounded-[13px]">
                                            <div class="flex flex-col gap-4 items-center justify-center relative">
                                                <div class="text-base absolute top-1 right-1 badge-sample">
                                                    @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))
                                                        <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                    @endif
                                                </div>

                                                <div class=" px-3 pt-5">
                                                    @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                        @if(request()->segment(1) == 'nba')
                                                            <img class="md:w-36 sm:w-28 w-20" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                        @elseif(request()->segment(1) == 'nhl')
                                                            <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                        @elseif(request()->segment(1) == 'mlb')
                                                            <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                        @elseif(request()->segment(1) == 'nfl')
                                                            <img class="md:w-44 sm:w-36 w-28" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                        @elseif(request()->segment(1) == 'epl')
                                                            <img class="md:w-40 sm:w-32 w-20" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                        @endif
                                                    @else
                                                        @if(request()->segment(1) == 'nba')
                                                            <img class="md:w-36 sm:w-28 w-20" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                        @elseif(request()->segment(1) == 'nhl')
                                                            <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                        @elseif(request()->segment(1) == 'mlb')
                                                            <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                        @elseif(request()->segment(1) == 'nfl')
                                                            <img class="md:w-44 sm:w-36 w-28" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                        @elseif(request()->segment(1) == 'epl')
                                                            <img class="md:w-40 sm:w-32 w-20" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                        @endif
                                                    @endif
                                                </div>
                                                @if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')
                                                    @php
                                                        $quarterback_bg_color = 'bg-[#F10000]';
                                                    @endphp
                                                    @if($val->type->slug == 'injury')
                                                        @php
                                                            $quarterback_type_icon ='';
                                                        @endphp
                                                    @else
                                                        @php
                                                            $quarterback_type_icon ='';
                                                        @endphp
                                                    @endif
                                                @elseif($val->type->slug == 'starting-goalie' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                    @if(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'confirmed')
                                                        @php
                                                            $quarterback_type_icon ='';
                                                            $quarterback_bg_color = 'bg-[#15D869]';
                                                        @endphp
                                                    @elseif(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'expected')
                                                        @php
                                                            $quarterback_type_icon ='';
                                                            $quarterback_bg_color = 'bg-[#FFCC00]';
                                                        @endphp
                                                    @else
                                                        @php
                                                            $quarterback_type_icon ='';
                                                            $quarterback_bg_color = 'bg-[#15D869]';
                                                        @endphp
                                                    @endif
                                                @elseif($val->type->slug == 'probable')
                                                    @php
                                                        $quarterback_type_icon ='';
                                                        $quarterback_bg_color = 'bg-[#FFCC00]';
                                                    @endphp
                                                @elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')
                                                    @php
                                                        $quarterback_bg_color = 'bg-[#FE6601]';
                                                        $quarterback_type_icon ='';
                                                    @endphp
                                                @elseif($val->type->slug == 'game-time-decision')
                                                    @php
                                                        $quarterback_bg_color = 'bg-[#000000]';
                                                        $quarterback_type_icon ='';
                                                    @endphp
                                                @else
                                                    @php
                                                        $quarterback_bg_color = 'bg-[#38B6FF]';
                                                        $quarterback_type_icon ='';
                                                    @endphp
                                                @endif

                                                <div class="flex flex-row justify-center gap-3 {{ $quarterback_bg_color }} p-2 text-white items-center w-full rounded-b-[13px]">
                                                    @if(!empty($quarterback_type_icon))
                                                        <img class="w-[15px] h-[15px]" src="{{ asset($quarterback_type_icon) }}">
                                                    @endif
                                                    <p class="text-sm font-bold" >
                                                        @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                            {{ $val->metafields->lineup_status->name }}
                                                        @elseif(!empty($val->type->slug) && $val->type->slug == 'starting-goalie')
                                                            {{  ( !empty($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name: '')     }}
                                                        @else
                                                            {{ $val->type->name}}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex flex-row items-center gap-2 justify-center my-2">

                                                @foreach($teams->data as $team)
                                                    @if($team->slug == $val->team->slug)
                                                        <img class="w-5" src="{{ $team->logo->src }}">
                                                    @endif
                                                @endforeach


                                                <h1 class="sm:text-base text-sm sm:block hidden">
                                                    {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                </h1>


                                                <div class="flex flex-col sm:flex-row sm:hidden block">

                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($val->player->first_name) ? $val->player->first_name : '')     }}
                                                    </div>
                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($val->player->last_name) ? $val->player->last_name : '')     }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer " rel="modal-{{$val->id}}" >
                                                <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                <h1 class="text-base ">
                                                    view news
                                                </h1>
                                            </div>
                                        </div>
                                    </div>


                                    @include('pages.modal.index')

                                </div>
                            @endforeach

                        </div>
                        <button type="button" id="next-slide-quarterback"  rel="quarterback"  class="nhl-pn-slide-button slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="nhl-pn-slider-scrollbar slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="nhl-pn-scrollbar-thumb scrollbar-thumb"></div>
                        </div>
                    </div>

                </div>
            </div>






        </div>

    </div>



</div>