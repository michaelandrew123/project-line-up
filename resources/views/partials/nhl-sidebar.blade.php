<div class="w-3/12 mt-5 block smm-hidden relative  ">
            <div class="relative sticky top-0 ">
                <div class="flex flex-col gap-5 mt-9">
                    <div class="flex flex-col gap-2">
                        <h1 class="font-bold ml-16">Features</h1>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
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
                <div class="flex flex-col gap-5 mt-9 ">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row items-center">
                            <img class="w-6 h-6 " src="{{ asset('/images/menu-icon/injury icon.png') }}" alt="">
                            <h1 class="font-bold ml-8">Injury Report</h1>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
                    </div>
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
                                            <div id="injry" class="flex flex-row items-center gap-2.5 w-full" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">       
                                                <img class="w-14  " style=" " src="{{$val->player->images->uniform}}" alt="">
                                                <div class="flex flex-col w-full" style=" ">
                                                    <div class="w-full flex flex-col justify-between ">
                                                        <div class="flex flex-row items-center justify-between">
                                                            <div class="flex items-center">
                                                                <p class="font-semibold text-sm">
                                                                {{$val->player->full_name}}
                                                                </p>
                                                                <p class="font-semibold text-[10px] italic">({{$val->player->position->name}})</p>
                                                            </div>
                                                            <i class="text-[12px]">{{$val->source->retrieved_at->date}}</i>
                                                        </div>
                                                        <div class="flex flex-row justify-between items-center">
                                                            @if(!empty($val->metafields))
                                                                <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>
                                                                <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>   
                                                            @endif 
                                                        </div>
                                                        <p class="text-sm">{{$val->title}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @elseif(!empty($current_name))  
                                        @if($current_name == $val->team->name) 
                                            @php 
                                                $team_injury_count++ 
                                            @endphp    
                                            <div id="injry" class="flex flex-row items-center gap-2.5 w-full" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">       
                                                <img class="w-14 " style=" " src="{{$val->player->images->uniform}}" alt="">
                                                <div class="flex flex-col w-full" style=" ">
                                                    <div class="w-full flex flex-col justify-between ">
                                                        <div class="flex flex-row items-center justify-between">
                                                            <div class="flex items-center">
                                                                <p class="font-semibold text-sm">
                                                                {{$val->player->full_name}}
                                                                </p>
                                                                <p class="font-semibold text-[10px] italic">({{$val->player->position->name}})</p>
                                                            </div>
                                                            <i class="text-[12px]">{{$val->source->retrieved_at->date}}</i>
                                                        </div>
                                                        <div class="flex flex-row justify-between items-center">
                                                            @if(!empty($val->metafields))
                                                                <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>
                                                                <p class=" font-normal text-[12px]"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>   
                                                            @endif 
                                                        </div>
                                                        <p class="text-sm">{{$val->title}}</p>
                                                    </div>
                                                </div>
                                            </div>                                               
                                        @endif                                            
                                    @endif     
                                @endif                    
                            @endif
                        @endforeach
                    </div>
                    <div class="w-full flex justify-center">
                        <a class="font-semibold text-sm" href="">View All NHL injuries</a>
                    </div>
                </div>
                <div class="flex flex-col gap-5 mt-9">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row items-center">
                            <img class="w-6 h-6  " class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            <h1 class="font-bold ml-8">Team News</h1>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
                    </div>
                    @php
                      $team_count = 0; 
                    @endphp
                    @foreach($article->data as $key=>$val)
                       
                            @if(empty($current_name))
                                @if($val->team->slug == 'anaheim-ducks')
                                    @php
                                        $article_count++
                                    @endphp
                                    <div class="flex flex-col gap-2 ml-3" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                        <div class="w-full flex flex-row justify-between">
                                            <p class="font-semibold text-sm">{{$val->player->full_name}}</p>
                                            <p class="text-sm">{{$val->source->retrieved_at->date}}</p>
                                        </div>
                                        <p class="text-sm">{{$val->title}}</p>
                                    </div>
                                @endif
                            @elseif(!empty($current_name))
                                @if($current_name == $val->team->name)
                                    @php
                                        $article_count++
                                    @endphp
                                    <div class="flex flex-col gap-2 ml-3" style="{{ $team_count  > 10 ? 'display: none' : ''}}">
                                        <div class="w-full flex flex-row justify-between">
                                            <p class="font-semibold text-sm">{{$val->player->full_name}}</p>
                                            <p class="text-sm">{{$val->source->retrieved_at->date}}</p>
                                        </div>
                                        <p class="text-sm">{{$val->title}}</p>
                                    </div>    
                                @endif                      
                            @endif
                    @endforeach
                    <div class="w-full flex justify-center">
                        <a class="font-semibold text-sm" href="{{url('/nhl/player-news')}}">View All NHL News</a>
                    </div>
                </div>
                <div class="flex flex-col gap-6 items-center mt-6">
                    <img class="w-full h-60 skeleton" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="w-10/12 h- skeleton" src="{{ asset('/images/menu-icon/adds6.png') }}">
                    <img class="w-full h-60 skeleton" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div> 
            </div>          
        </div>