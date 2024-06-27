
<!-- NHL Sidebar -->

    <div class="sm:w-4/12 w-full   block smm-hidden relative  ">
            <div class="relative sticky top-0 ">



                <div class="flex flex-col gap-5">
                    <div class="flex justify-center rounded-[13px] " style=" background-color: {{  ( !empty($color1) ? $color1: 'gray')  }}">
                        <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">Team News </h1>
                    </div>
                    @php
                        $team_count = 0;
                    @endphp
                    @foreach($article->data as $key=>$val)

                        @if(empty($current_name))
                            @if($val->team->slug == 'anaheim-ducks')
                                @php
                                    $team_count++
                                @endphp
                                <div class="flex flex-row-reverse gap-2 items-start justify-start" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                    <div class="flex flex-col text-left gap-2">
                                        <div class="flex flex-col mb-2">
                                            <p class="font-semibold text-sm">

                                                {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                            </p>
                                        </div>
                                        <p class="text-sm">


                                            @if($val->type->slug == 'lineup-update')

                                                {{--{{$val->title}}--}}
                                            @else

                                                {{$val->title}}

                                            @endif

                                        </p>
                                        <p class="text-[12px]  text-slate-500">{{$val->source->retrieved_at->date}}</p>
                                    </div>
                                    <img class="w-14  " style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">
                                </div>
                            @endif
                        @elseif(!empty($current_name))
                            @if($current_name == $val->team->name)
                                @php
                                    $team_count++
                                @endphp
                                <div class="flex flex-row-reverse gap-2 items-start justify-end" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                    <div class="flex flex-col text-left gap-2">
                                        <div class="flex flex-col mb-2">
                                            <p class="font-semibold text-sm">

                                                {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                            </p>
                                        </div>
                                        <p class="text-sm">

                                            @if($val->type->slug == 'lineup-update')

                                                {{--{{$val->title}}--}}
                                            @else

                                                {{$val->title}}

                                            @endif

                                        </p>
                                        <p class="text-[12px]  text-slate-500">{{$val->source->retrieved_at->date}}</p>
                                    </div>
                                    <img class="w-14" style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">
                                </div>
                            @endif
                        @endif
                    @endforeach

                    @if($team_count > 5)
                        <div class="w-full flex justify-center">
                            <a class="font-semibold text-sm text-[#38b6ff]" href="{{url('/nhl/player-news')}}">View All NHL News</a>
                        </div>
                    @endif
                </div>


                <div class="flex flex-col gap-5  mt-9">


                    <div class="flex justify-center rounded-[13px] " style=" background-color: {{  ( !empty($color1) ? $color1: 'gray')  }}">
                        <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">Injury Report </h1>
                    </div>
                    {{--<div class="flex justify-center w-full rounded-[13px] py-2  rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">--}}
                        {{--<h1 class="font-bold" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">Injury Report</h1>--}}
                    {{--</div>--}}
                    <div id="injury" class="flex flex-col gap-2 w-full">
                        @php
                          $team_injury_count = 0; 
                        @endphp 
                        @foreach($article->data as $key=>$val)
                            @if(isset($val->type))
                                @if($val->type->slug === 'injury')  
                                    @if(empty($current_name))
                                        @if($val->team->slug == 'anaheim-ducks')
                                            @php 
                                                $team_injury_count++ 
                                            @endphp               
                                            {{--<div id="injry" class="flex flex-row-reverse gap-2 items-start justify-end" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">--}}
                                                {{--<div class="flex flex-col w-full" style=" ">--}}
                                                    {{--<div class="w-full flex flex-col justify-between ">--}}
                                                        {{--<div class="flex flex-col mb-2">--}}
                                                            {{--<div class="flex items-center">--}}
                                                                {{--<p class="font-semibold text-sm">--}}
                                                                    {{--{{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}--}}
                                                                {{--</p>--}}
                                                                {{--<p class="font-semibold text-[10px] italic hidden">({{$val->player->position->name}})</p>--}}
                                                            {{--</div>--}}
                                                            {{--<p class="text-[12px] text-slate-500">{{$val->source->retrieved_at->date}}</p>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="text-sm">{{$val->title}}</p>--}}
                                                        {{--<div class="flex flex-row justify-between items-center">--}}
                                                            {{--@if(!empty($val->metafields))--}}
                                                                {{--<p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>--}}
                                                                {{--<p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>   --}}
                                                            {{--@endif --}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<img class="w-14  " style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">--}}
                                            {{--</div>--}}




                                            <div class="flex flex-row-reverse gap-2 items-start justify-end" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                                <div class="flex flex-col text-left gap-2">
                                                    <div class="flex flex-col mb-2">
                                                        <p class="font-semibold text-sm">

                                                            {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                        </p>
                                                    </div>
                                                    <p class="text-sm">

                                                        @if($val->type->slug == 'lineup-update')

                                                            {{--{{$val->title}}--}}
                                                        @else

                                                            {{$val->title}}

                                                        @endif

                                                    </p>


                                                    <div class="flex flex-row justify-between items-center">
                                                        @if(!empty($val->metafields))
                                                            <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>
                                                            <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>
                                                        @endif
                                                    </div>


                                                    <p class="text-[12px]  text-slate-500">{{$val->source->retrieved_at->date}}</p>
                                                </div>
                                                <img class="w-14" style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">
                                            </div>

                                        @endif
                                    @elseif(!empty($current_name))  
                                        @if($current_name == $val->team->name) 
                                            @php 
                                                $team_injury_count++ 
                                            @endphp    
                                            {{--<div id="injry" class=" flex flex-row-reverse gap-2 items-start justify-end" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">--}}
                                                {{--<div class="flex flex-col w-full" style=" ">--}}
                                                    {{--<div class="w-full flex flex-col justify-between">--}}
                                                        {{--<div class="flex flex-col mb-2">--}}
                                                            {{--<div class="flex items-center">--}}
                                                                {{--<p class="font-semibold text-sm">--}}
                                                                    {{--{{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}--}}
                                                                {{--</p>--}}
                                                                {{--<p class="font-semibold text-[10px] italic hidden">({{$val->player->position->name}})</p>--}}
                                                            {{--</div>--}}
                                                            {{--<p class="text-[12px]  text-slate-500">{{$val->source->retrieved_at->date}}</p>--}}
                                                        {{--</div>--}}
                                                        {{--<p class="text-sm">{{$val->title}}</p>--}}
                                                        {{--<div class="flex flex-row justify-between items-center">--}}
                                                            {{--@if(!empty($val->metafields))--}}
                                                                {{--<p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>--}}
                                                                {{--<p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>--}}
                                                            {{--@endif--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<img class="w-14  " style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">--}}
                                            {{--</div>--}}






                                            <div class="flex flex-row-reverse gap-2 items-start justify-end" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                                <div class="flex flex-col text-left gap-2">
                                                    <div class="flex flex-col mb-2">
                                                        <p class="font-semibold text-sm">

                                                            {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                        </p>
                                                    </div>
                                                    <p class="text-sm">

                                                        @if($val->type->slug == 'lineup-update')

                                                            {{--{{$val->title}}--}}
                                                        @else

                                                            {{$val->title}}

                                                        @endif

                                                    </p>


                                                    <div class="flex flex-row justify-between items-center">
                                                        @if(!empty($val->metafields))
                                                            <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>
                                                            <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>
                                                        @endif
                                                    </div>


                                                    <p class="text-[12px]  text-slate-500">{{$val->source->retrieved_at->date}}</p>
                                                </div>
                                                <img class="w-14" style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}" alt="">
                                            </div>


                                        @endif                                            
                                    @endif     
                                @endif                    
                            @endif
                        @endforeach
                    </div>


                    @if($team_injury_count > 5)
                        <div class="w-full flex justify-center">
                            <a class="font-semibold text-sm text-[#38b6ff]" href="">View All NHL injuries</a>
                        </div>
                     @endif
                </div>




                <div class="flex flex-col gap-5 mt-9 hidden">
                    <div class="flex justify-center  w-full rounded-[13px] py-2 " style=" background-color: {{  ( !empty($color1) ? $color1: 'gray')  }}">
                        <h1 class="font-bold" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">Articles</h1>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Props and Odds</p>
                        <p class="text-sm">Check out today's tophidden Props and Odds for <br> tonight slate</p>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Morning Skate </p>
                        <p class="text-sm">Update and happening from this morning's <br> skate</p>
                    </div>
                    <div class="flex flex-col gap-2 ml-3">
                        <p class="font-semibold text-sm">Top Stacks</p>
                        <p class="text-sm">Looking at today's slate DFS top stacks for  <br>Draftkings</p>
                    </div>
                </div>
                <div class="flex flex-col gap-6 items-center mt-6 hidden">
                    <img class="w-full h-60 skeleton" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="w-10/12 h- skeleton" src="{{ asset('/images/menu-icon/adds6.png') }}">
                    <img class="w-full h-60 skeleton" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div> 
            </div>          
        </div>