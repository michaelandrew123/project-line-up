<div class="w-3/12 mt-5 block smm-hidden relative">
            <div class="relative sticky top-0">
                <div class="">
                    <div class="flex flex-row items-center justify-end bg-[#39b6ff] w-full h-9 rounded-t-md gap-2">
                        <img class="w-5 h-6" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-md font-bold mr-3">MetaBet</p>
                    </div>
                    <div class="flex flex-rowb gap-3 p-3 border border-slate-200">
                        <img class="w-5 h-6" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                        <h1 class="text-lg font-semibold">Toronto Maple Leafs</h1>
                    </div>
                    <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="xl:text-sm lg:text-sm text-[12px] font-semibold">To win Stanley Cup</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1050</p>
                        </div> 
                    </div>
                    <div class="flex flex-row items-center justify-between gap-3 md:gap-0 p-3 border border-slate-200">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="xl:text-sm lg:text-sm text-[12px] font-semibold">To win Eastern <br> Conference</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+550</p>
                        </div> 
                    </div>
                    <div class="flex flex-col border border-slate-200">
                        <div class="flex flex-row items-center justify-between gap-3 p-3 ">
                            <div class="flex flex-row items-center gap-2">
                                <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                                <p class="xl:text-sm lg:text-sm text-sm md:text-[12px] font-semibold">To win Atlantic</p>
                            </div>
                            <div>
                                <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1600</p>
                            </div> 
                        </div>
                        <div class="flex justify-end">
                            <a class="text-[#39b6ff] font-semibold mr-1 xl:text-lg lg:text-md md:text-sm" href="#">See All Lines</a>
                        </div>
                    </div>
                </div>
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
                <div class="flex flex-col gap-5 mt-9">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row items-center">
                            <img class="w-6 h-6" src="{{ asset('/images/menu-icon/injury icon.png') }}" alt="">
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
                                    @if(!empty($val->metafields))
                                        @if(!empty($current_name))                                               
                                            @if($current_name == $val->team->name)
                                                @php 
                                                    $team_injury_count++ 
                                                @endphp    
                                                <div id="injry" class="flex flex-row items-center gap-2.5 w-full" style="{{ $team_injury_count  > 5 ? 'display: none' : ''}}">       
                                                    <img class="w-20" src="{{$val->player->images->uniform}}" alt="">
                                                    <div class="flex flex-col w-full" style=" ">
                                                        <div class="w-full flex flex-col justify-between ">
                                                            <div class="flex flex-row gap-2">
                                                                <p class="font-semibold text-sm">
                                                                   {{$val->player->full_name}}
                                                                </p>
                                                                <p class="font-semibold text-sm">({{$val->player->position->name}})</p>
                                                            </div>
                                                            <div class="flex flex-row gap-2">
                                                                <p class="font-semibold text-sm"> {{ !empty($val->metafields->injury_type->name ) ? $val->metafields->injury_type->name : ''}}</p>
                                                                <p class="font-semibold text-sm"> {{ !empty($val->metafields->injury_timeframe->name ) ? $val->metafields->injury_timeframe->name : ''}}</p>   
                                                            </div>
                                                            <p class="text-sm">{{$val->title}}</p>
                                                            <i class="text-sm">{{$val->source->retrieved_at->date}}</i>
                                                        </div>
                                                    </div>
                                                </div> 
                                            @endif
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
                            <img class="w-6 h-6" class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            <h1 class="font-bold ml-8">Team News</h1>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full"></div>
                    </div>
                    @php
                      $article_count = 0; 
                    @endphp
                    @foreach($article->data as $key=>$val)
                        @if(!empty($current_name))
                            @if($current_name == $val->team->name)
                                @php
                                  $article_count++
                                @endphp
                                <div class="flex flex-col gap-2 ml-3" style="{{ $article_count  > 10 ? 'display: none' : ''}}">
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
                    <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                    <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                </div> 
            </div>          
        </div>