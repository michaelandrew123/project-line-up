<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">

            <div class="flex flex-row  sm:gap-4 gap-2 items-center">
                {{--<img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">--}}

                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                {{--<h1 class="text-base xl:text-lg lg:text-base md:text-sm  font-bold font-blue">{{ request()->segment(1) }} Starting Goalies</h1>--}}
                <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2" >
                    <div class="uppercase">{{ request()->segment(1) }} </div>
                    <div> Starting Goalies </div>
                </div>
            </div>
            <div class=" flex justify-end ">
                <a href="/nhl/starting-goalies" class="font-blue font-bold text-sm">View All</a>
            </div>

        </div>
    </div>



    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2  ">
        <div class=" w-full ">
            <div class="nhl-sg-container-header container-header">

                <div class="nhl-sg-container-slider container-slider">
                    <div class="nhl-sg-slider-wrapper slider-wrapper">
                        <!-- Slider controls -->
                        <button type="button" id="prev-slide" class="hidden nhl-sg-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <div  class="nhl-sg-image-list image-list">
                            @php
                                $sg_count = 0;
                                $sg_bg_color = '';
                                $sg_type_icon = ''
                            @endphp
                            @foreach($starting_goalies->data as $key=>$sg_val)


                                @php
                                    $sg_count++
                                @endphp
                                {{--{{ ($nhl_count  > 6) ? 'hidden' : '' }}--}}

                                <div class="nhl-sg-image-item image-item " >
                                    {{--<div class="flex flex-col   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">--}}

                                    <div class=" card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative">




                                            <div class="text-base absolute top-1 right-1 badge-sample">

                                                @if(Carbon\Carbon::parse($sg_val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

                                                    <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                    {{--<span class="text-white  border border-gray-100">New</span>--}}
                                                @else
                                                    {{--<img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />--}}
                                                    {{--<span class="text-orange-700  border border-gray-100">Old</span>--}}
                                                @endif
                                            </div>


                                            {{--</div>--}}
                                            <div class=" px-3 pt-5  ">
                                                {{--@if(Carbon\Carbon::parse($sg_val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))--}}
                                                    {{--<div class="text-green-200">New Player</div>--}}
                                                {{--@else--}}
                                                    {{--<div class="text-red-200">Old Player</div>--}}
                                                {{--@endif--}}


                                                @if(!empty($sg_val->type->slug) && $sg_val->type->slug == 'lineup-update')
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($sg_val->team->front_uniform->src) ? $sg_val->team->front_uniform->src : '')     }}">
                                                @else
                                                    <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($sg_val->player->images->uniform) ? $sg_val->player->images->uniform : '')     }}">
                                                @endif


                                            </div>


                                            @if($sg_val->type->slug == 'injury' || $sg_val->type->slug == 'send-down' || $sg_val->type->slug == 'suspension' || $sg_val->type->slug == 'ruled-out' || $sg_val->type->slug == 'healthy-scratch')
                                                @php
                                                    $sg_bg_color = 'bg-[#F10000]';
                                                @endphp
                                                @if($sg_val->type->slug == 'injury')
                                                    @php
                                                        $sg_type_icon ='';
                                                    @endphp
                                                @else
                                                    @php
                                                        $sg_type_icon ='';
                                                    @endphp
                                                @endif
                                            @elseif($sg_val->type->slug == 'starting-goalie' || $sg_val->type->slug == 'available' || $sg_val->type->slug == 'call-up' || $sg_val->type->slug == 'will-play')
                                                @if(isset($sg_val->metafields->goalie_status) && $sg_val->metafields->goalie_status->value == 'confirmed')
                                                    @php
                                                        $sg_type_icon ='';
                                                        $sg_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @elseif(isset($sg_val->metafields->goalie_status) && $sg_val->metafields->goalie_status->value == 'expected')
                                                    @php
                                                        $sg_type_icon ='';
                                                        $sg_bg_color = 'bg-[#FFCC00]';
                                                    @endphp
                                                @else
                                                    @php
                                                        $sg_type_icon ='';
                                                        $sg_bg_color = 'bg-[#15D869]';
                                                    @endphp
                                                @endif
                                            @elseif($sg_val->type->slug == 'probable')
                                                @php
                                                    $sg_type_icon ='';
                                                    $sg_bg_color = 'bg-[#FFCC00]';
                                                @endphp
                                            @elseif($sg_val->type->slug == 'doubtful' || $sg_val->type->slug == 'questionable')
                                                @php
                                                    $sg_bg_color = 'bg-[#FE6601]';
                                                    $sg_type_icon ='';
                                                @endphp
                                            @elseif($sg_val->type->slug == 'game-time-decision')
                                                @php
                                                    $sg_bg_color = 'bg-[#000000]';
                                                    $sg_type_icon ='';
                                                @endphp
                                            @else
                                                @php
                                                    $sg_bg_color = 'bg-[#38B6FF]';
                                                    $sg_type_icon ='';
                                                @endphp
                                            @endif

                                            <div class="flex flex-row justify-center gap-3 {{ $sg_bg_color }} p-2 text-white items-center w-full rounded-b-[13px]">

                                                    <p class="text-sm font-bold" >
                                                        @if(!empty($sg_val->type->slug) && $sg_val->type->slug == 'lineup-update')
                                                            {{ $sg_val->metafields->lineup_status->name }}
                                                        @elseif(!empty($sg_val->type->slug) && $sg_val->type->slug == 'starting-goalie')
                                                            {{  ( !empty($sg_val->metafields->goalie_status->name) ? $sg_val->metafields->goalie_status->name: '')     }}
                                                        @else
                                                            {{--{{  ( !empty($val->type->name) ? $val->id : '')     }}--}}
                                                            {{ $sg_val->type->name}}
                                                        @endif
                                                    </p>


                                            </div>



                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex flex-row items-center gap-2 justify-center my-2">
                                            @foreach($teams->data as $team)
                                                @if($team->slug == $sg_val->team->slug)
                                                    <img class="w-5" src="{{ $team->logo->src }}">
                                                @endif
                                            @endforeach
                                            {{--<h1 class="sm:text-base text-sm">--}}
                                                {{--{{  ( !empty($sg_val->player->full_name) ? $sg_val->player->full_name : '')     }}--}}
                                            {{--</h1>--}}
                                                <h1 class="sm:text-base text-sm sm:block hidden">
                                                    {{  ( !empty($sg_val->player->full_name) ? $sg_val->player->full_name : '')     }}
                                                </h1>

                                                <div class="flex flex-col sm:flex-row sm:hidden block">

                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($sg_val->player->first_name) ? $sg_val->player->first_name : '')     }}
                                                    </div>
                                                    <div class="sm:text-base text-sm">
                                                        {{  ( !empty($sg_val->player->last_name) ? $sg_val->player->last_name : '')     }}
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhlsg-view-news " rel="modalNhlSg-{{$sg_val->id}}" >
                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                            <h1 class="text-base ">
                                                view news
                                            </h1>
                                        </div>
                                        <div class="h-full sg-view-news-desc  hidden" id="sg-{{$sg_val->id}}">


                                            <div  class="flex flex-col gap-2 items-start p-[12%]   bg-white h-full  justify-between text-wrap w-auto rounded-lg" >
                                                <div class="text-sm">{{$sg_val->description}}</div>

                                                <div class="flex flex-col gap-2">
                                                    <div class="flex flex-row gap-2 items-center">
                                                        <a href="{{$sg_val->source->url}}">
                                                            <img class="w-5" src="{{ asset('/images/twitter.png') }}">
                                                        </a>
                                                        <p> {{$sg_val->source->name}}</p>
                                                    </div>

                                                    <div class="flex flex-row gap-2 text-xs">
                                                        <div>
                                                            {{$sg_val->published_at->date}}
                                                            @
                                                            {{$sg_val->published_at->time}}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{--</div>--}}
                                </div>
                                <div class="absolute">
                                    <div class="relative z-30 hidden modalNhlSg {{$sg_val->id}} ease-out duration-300" id="modalNhlSg-{{$sg_val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                                        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                                <div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                    <div class="close-modal cursor-pointer" rel="modalNhlSg-{{$sg_val->id}}"></div>
                                                    <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                                        <div class="flex flex-col gap-4 w-full h-full relative rounded-xl ">
                                                            <div class="flex m-3 mt-5 gap-5">
                                                                <img class="w-[150px] " src="{{  ( !empty($sg_val->player->images->uniform) ? $sg_val->player->images->uniform : '')     }}">
                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-row gap-2">

                                                                        <p class="text-sm font-bold">
                                                                            {{  ( !empty($sg_val->metafields->goalie_status->name) ? $sg_val->metafields->goalie_status->name : '')     }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <h1 class="text-2xl font-bold">
                                                                            {{  ( !empty($sg_val->player->full_name) ? $sg_val->player->full_name : '')     }}
                                                                        </h1>
                                                                        @foreach($teams->data as $team)
                                                                            @if($team->slug == $sg_val->team->slug)
                                                                                <p class="text-[12px] font-semibold">{{ $team->name }}</p>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">
                                                                <div class="modal-title text-sm font-bold">{{$sg_val->title}}</div>
                                                                <div class="text-sm">{{$sg_val->description}}</div>
                                                            </div>
                                                            <div class="m-3 flex  flex-col gap-4 items-center">
                                                                <div class="flex flex-row justify-between gap-2  w-full">
                                                                    <div  >
                                                                        <a class="  flex flex-row items-center gap-2  " href="{{$sg_val->source->url}}">
                                                                            <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                                                            <div>
                                                                                <h3 class="text-xs font-extrabold">{{$sg_val->source->name}}</h3>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="  flex flex-row items-center gap-2 ">
                                                                        <a href="{{$sg_val->source->url}}">
                                                                            <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                                                        </a>
                                                                        <div>
                                                                            <p class="text-xs font-bold">{{$sg_val->published_at->date}} | {{$sg_val->published_at->time}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aa de dn md aue avb bxn hidden">
                                                        <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                                                            <span class="t">Close</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <button type="button" id="next-slide" class="hidden nhl-sg-slide-button slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                                <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                        </button>
                    </div>


                    <div class="nhl-sg-slider-scrollbar slider-scrollbar" style="visibility: hidden">
                        <div class="scrollbar-track">
                            <div class="nhl-sg-scrollbar-thumb scrollbar-thumb"></div>
                        </div>
                    </div>

                </div>
            </div>





        </div>

    </div>
</div>