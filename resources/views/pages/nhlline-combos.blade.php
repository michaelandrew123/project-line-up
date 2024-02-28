@extends('layouts.master-nhl-v1')

@section('content')

 <!-- Desktop nhl/Line combos -->
 @if(isset($team_color))
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


<div class="">
<div class="w-full flex flex-col items-center mt-5 smm-hidden ">
    <div class="relative flex flex-row justify-center gap-3 items-center  xl:w-11/12 lg:w-11/12  md:w-11/12 sm:w-11/12  w-11/12 md:max-w-screen-2xl h-auto" style="background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}   ">
        <div class="w-full flex flex-col gap-5 p-8">
            <div class="flex flex-row items-center justify-between ">
                <div class="flex flex-row items-center w-full">

                        @if(isset($ext))
                            @if($ext =='svg')
                                <div class="flex flex-row items-center  justify-between w-full" style="position: relative;">
                                    <div class="flex flex-col relative"  style="height:200px;   " >
                                        <img class="flex" style=" height:100%; width: auto; " src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">
                                    </div>

                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <div class="teams text-4xl font-bold text-black" style="line-height: .8; color: {{  ( !empty($color2) ? $color2: 'black')  }}">
                                                {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}
                                            </div>
                                            <div class="teams text-lg font-bold text-black" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">line combinations</div>
                                        </div>

                                        <div class="flex flex-row items-center relative" >

                                            <div class="flex flex-row items-center justify-left items-end" style=" color: {{  ( !empty($color3) ? $color3: 'black')  }}">
                                                <div class="flex flex-row  gap-2 items-center">
                                                    <a href="{{ $result->data->source->url  }}" class=" " target="_blank">
                                                        <img  class="w-6 h-6 " src="{{ asset('/images/line-combos/6523-information-6.png') }}"  >
                                                        <p class="text-sm font-semibold">{{ $result->data->source->name  }}</p>
                                                    </a>
                                                    <div class="flex flex-row gap-2">

                                                        <img src="{{ asset('/images/line-combos/6523-information-8.png') }}" class="w-6 h-6   ">
                                                        <p class="text-sm font-semibold text-white">  {{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }}  </p>


                                                    </div>
                                                    <div class="flex flex-row gap-2 justify-center items-center text-white">
                                                        <img src="{{ asset('/images/line-combos/6523-information-5.png') }}" class="w-6 h-6 ">

                                                        <h1 class="text-sm font-semibold uppercase">  {{ $result->data->status->name }}</h1>
                                                    </div>
                                                </div>
                                                <div class="relative hidden">
                                                    <a href="#" id="head-drp" class="text-lg font-bold  w-[13rem] rounded-full bg-slate-300"> {{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}</a>
                                                    <div class="drp-dwn hidden flex flex-col bg-slate-300 w-[13rem] p-2 absolute">

                                                            <a class="teams" href="/nhl/line-combos/{{$team->data->slug}}">{{$team->data->name}}</a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            @else
                                <div class="flex flex-row items-center  justify-between  w-full" style="position: relative;">
                                    <div class="flex flex-col relative"  style="height:200px;   " >
                                        <img class="flex" style=" height:100%; width: auto; " src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">

                                    </div>


                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <div class="teams text-4xl font-bold text-black" style="line-height: .8; color: {{  ( !empty($color2) ? $color2: 'black')  }}">
                                                {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}
                                            </div>
                                            <div class="teams text-lg font-bold text-black" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">line combinations</div>
                                        </div>

                                        <div class="flex flex-row items-center relative hidden" >

                                            <div class="flex flex-row items-center justify-left items-end" style=" color: {{  ( !empty($color3) ? $color3: 'black')  }}">
                                                <div class="flex flex-col items-left gap-2">


                                                </div>
                                                <div class="relative hidden">
                                                    <a href="#" id="head-drp" class="text-lg font-bold  w-[13rem] rounded-full bg-slate-300"> {{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}</a>
                                                    <div class="drp-dwn hidden flex flex-col bg-slate-300 w-[13rem] p-2 absolute">

                                                            <a class="teams" href="/nhl/line-combos/{{$team->data->slug}}">{{$team->data->name}}</a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                    </div>

                                    <div></div>

                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            @endif
                        @else

                            <div class="flex flex-row items-center  justify-between  w-full" style="position: relative;">
                                <div class="flex flex-col relative"  style="height:200px;   " >
                                     <img class="flex" style=" height:100%; width: auto; "  src='https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg'    alt="">
                                </div>


                                <div class="flex flex-col gap-4">
                                    <div>
                                        <div class="teams text-4xl font-bold text-black" style="line-height: .8; color: {{  ( !empty($color2) ? $color2: 'black')  }}">
                                            {{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}
                                        </div>
                                        <div class="teams text-lg font-bold text-black" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">line combinations</div>
                                    </div>

                                    <div class="flex flex-row items-center relative" >

                                        <div class="flex flex-row items-center justify-left items-end hidden" style=" color: {{  ( !empty($color3) ? $color3: 'black')  }}">
                                            <div class="flex flex-row items-center gap-2">
                                                <a href="{{ $result->data->source->url  }}" class=" " target="_blank">
                                                    <p class="text-sm font-semibold">{{ $result->data->source->name  }}</p>
                                                </a>
                                                <p class="text-sm font-semibold text-white">{{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }}</p>
                                                <div class="flex gap-2 justify-center items-center text-white">
                                                    <h1 class="text-sm font-semibold uppercase"> {{ $result->data->status->name }}</h1>
                                                </div>
                                            </div>
                                            <div class="relative hidden">
                                                <a href="#" id="head-drp" class="text-lg font-bold  w-[13rem] rounded-full bg-slate-300"> {{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}</a>
                                                <div class="drp-dwn hidden flex flex-col bg-slate-300 w-[13rem] p-2 absolute">

                                                        <a class="teams" href="/nhl/line-combos/{{$team->data->slug}}">{{$team->data->name}}</a>

                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        @endif

                        {{--<div class="flex flex-row items-center gap-5">--}}
                            {{--<div class="flex flex-col"   >--}}
                                {{--<img class="w-20 flex" style="mix-blend-mode: multiply; " src="{{  ( !empty($current_logo) ? $current_logo: 'https://media.projectedlineups.com/sports/hockey/leagues/nhl/teams/anaheim-ducks/logos/logo.svg') }}" alt="">--}}
                             {{--</div>--}}


                </div>
            </div>

        </div>



        {{--<div class=" absolute bottom-0  right-32">--}}

        <div class="absolute bottom-0  right-0 hidden">
            <div class="relative flex flex-row">
                @if(isset($team->data->featured_player_1))
                    @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_2)){
                    <img class="xl:w-56 lg:w-56 md:w-52  relative " src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                    @else
                        <img class="xl:w-56 lg:w-56 md:w-52  relative left-40" src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                    @endif
                @endif
                @if(isset($team->data->featured_player_2))
                    @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_1)){
                    <img class="xl:w-56 lg:w-56 md:w-52 relative " src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                    @else
                        <img class="xl:w-56 lg:w-56 md:w-52 relative left-20" src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                    @endif
                @endif
                @if(isset($team->data->featured_player_3))
                    @if(!isset($team->data->featured_player_2) || !isset($team->data->featured_player_1)){
                    <img class=" xl:w-56 lg:w-56 md:w-52   " src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                    @else
                        <img class=" xl:w-56 lg:w-56 md:w-52 " src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                    @endif
                @endif
           
            </div>
        </div>
    </div>



    <div class="flex flex-row gap-4 mt-5 justify-start xl:w-11/12 lg:w-full md:w-full ">

        <div class="flex gap-2 justify-left items-center">
            <img  class="w-6 h-6 " src="{{ asset('/images/line-combos/6523-information-6.png') }}"  >
            <h1 class="text-sm font-semibold uppercase "> {{ $result->data->status->name }}</h1>
        </div>
        <div class="flex flex-row gap-2 items-center">

            <img src="{{ asset('/images/line-combos/6523-information-8.png') }}" class="w-6 h-6 ">
            <a href="{{ $result->data->source->url  }}" class=" " target="_blank">

                <p class="text-sm font-semibold  items-center">{{ $result->data->source->name  }}</p>
            </a>
        </div>
        <div class="flex flex-row gap-2  items-center">
            <img src="{{ asset('/images/line-combos/6523-information-5.png') }}" class="w-6 h-6 ">


            <p class="text-sm font-semibold  items-center">  {{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }} </p>

        </div>
    </div>








    <div class="flex flex-row items-center xl:w-11/12 lg:w-11/12 md:w-full mt-[20px] gap-3 block smm-hidden max-w-screen-2xl hidden" id="sub-hed">
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] text-black font-bold rounded-md l-ups bckgrnd active flex justify-center">
            Lineups
        </button>
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd create flex justify-center items-center xl:gap-3 lg:gap-1 md:gap-1">
            <img class="xl:w-9 lg:w-9 md:w-7" src="{{ asset('/images/menu-icon/icons8-create-50.png') }}" alt="">
            Create
        </button>
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd d-kings flex justify-center gap-3">
            Draftkings
        </button>
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd fnl flex justify-center gap-3">
           Fanduel
        </button>
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd sts flex justify-center">
            Stats
        </button>
        <a href="{{url('/nhl/team-news')}}" class="w-40 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd flex justify-center">
            Player News
        </a>
        <button class="w-36 xl:text-[24px] lg:text-[20px] md:text-[16px] font-bold rounded-md text-black bckgrnd shp flex justify-center">
            Shop
        </button>
        <!-- <button class="w-36 bg-green-600 text-[16px] font-bold rounded-md text-black">Create</button> -->
    </div> 
    <div class="props flex w-11/12 my-5 gap-5 block smm-hidden max-w-screen-2xl hidden ">
        <ul class="flex flex-row justify-between w-9/12 ml-[5rem] text-lg font-bold text-slate-500 ">
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">SHOTS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">GOALS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">ASSISTS</a></li>
            <li><a class="bg-slate-100 p-1 border rounded-md" href="">POINTS</a></li>
        </ul>
    </div>
    <!-- Line-ups  -->

    <div class="xl:w-11/12 lg:w-full md:w-full hidden">
        <img class="w-screen my-5" src="{{ asset('/images/line-combos/logo/go_daddy.png') }}">
    </div>
    <div id="lu-body" class="w-full flex flex-row justify-evenly gap-7 max-w-screen-2xl mt-10">
        <div class="xl:w-7/12 lg:w-8/12 md:w-7/12 block smm-hidden">
            {{--<img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}"> --}}
            {{--<img class="w-full my-2" src="{{ asset('/images/line-combos/logo/go_daddy.png') }}">--}}
            <div id="shirt-footer" class="flex flex-col gap-2 ">
                <div class="flex flex-col gap-2 w-full" id="forwards">
                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">FORWARDS</h1>
                    </div>
                        <div class="flex flex-row mt-10 gap-3 justify-center">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw1')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="">
                                            <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                              <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                            </div>
                                        </div>
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">  {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                    </div>
                                @endif
                                @if($key == 'c1')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'rw1')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row mt-10 gap-3 justify-center">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw2')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'c2')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'rw2')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row  mt-10 gap-3 justify-center">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw3')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'c3')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'rw3')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row  mt-10 gap-3 justify-center">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw4')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'c4')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                                @if($key == 'rw4')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                            @endforeach
                        </div>
                </div>                
                <div class="h-[2px] w-full my-10 hidden mt-10"></div>
                <div class="flex flex-col w-full mt-10 " id="defence">
                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">DEFENCE</h1>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'ld1')
                                <div class="flex flex-col items-center w-[30%] ">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'rd1')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)

                            @if($key == 'ld2')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'rd2')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                        @endforeach
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)


                            @if($key == 'ld3')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'rd3')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                        @endforeach
                    </div>
                </div>
                <div class="  h-[2px] w-full my-10 hidden "></div>
                <div class="flex flex-col w-full mt-10" id="goalie">
                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'sg1')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'sg2')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                        @endforeach
                    </div>                    
                </div>
                <div class="h-[2px] w-full my-10 hidden"></div>
                <div class="flex flex-col w-full mt-10">
                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md  " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 1</h1>
                    </div>
                    <div class="flex flex-row  mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'pp11')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'pp12')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'pp13')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                        @endforeach
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'pp14')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'pp15')
                               <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">

                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 2</h1>
                    </div>
                    <div class="flex flex-row  mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'pp21')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'pp22')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif

                                @if($key == 'pp23')
                                    <div class="flex flex-col items-center w-[30%]">
                                        <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                        </div>       
                                        <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                    </div>
                                @endif
                        @endforeach
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'pp24')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                            @if($key == 'pp25')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>       
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>                            
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-5 hidden"></div>
                <div class="flex flex-col w-full mt-10">
                    <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="text-center font-extrabold text-md   " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">PRESS BOX </h1>
                    </div>
                    <div class="flex flex-row mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'b1')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                            @if($key == 'b2')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                            @if($key == 'b3')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="flex flex-row  justify-center mt-10 gap-3 justify-center">
                        @foreach($result->data->slots as $key=>$item)
                            @if($key == 'b4')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                            @if($key == 'b5')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                            @if($key == 'b6')
                                <div class="flex flex-col items-center w-[30%]">
                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                    </div>
                                    <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">{{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <ul class="flex justify-evenly items-center text-base font-medium gap-2 w-full hidden">
                    <li>Badges:</li>
                    <li class="flex items-center gap-1"><img class="w-7 h-7 border border-black" src="{{ asset('/images/menu-icon/ ') }}" alt="">Game-time Decision</li>
                    <li class="flex items-center gap-1"><p class="px-1.5 py-px border rounded-md bg-red-600 text-white font-light">IR</p> Injured Reserved list</li>
                    <li class="flex  items-center gap-1"><p class="px-1.5 py-px border rounded-md bg-red-600 text-white font-light">DTD</p>Day-to-Day</li>
                    <li class="flex  items-center gap-1"><p class="px-1.5 py-px border rounded-md bg-red-600 text-white font-light">OUT</p> Out</li>
                </ul>
            </div>
            <div class="flex flex-col gap-10 mt-10 hidden">
                <h1 class="text-lg font-bold text-center">Power play</h1>
                <p class="text-lg">
                    You might hear these lines reffered to as special teams lines,
                    but power play lines are important for success in the NHL.
                    When you have a power play you are up man, or possibly 
                    even two. Being able to capitalize on the power play is recipe
                    for sucess. The power play lines are going to feature the more
                    talented offensive players on the  team. Now when they 
                    struggle, a coach will tend to change things up. He will often
                    ride a hot hand here as well if a player is on hot streak and 
                    the coach wants to use him on the power play where he was 
                    initially not on the line anymore. Injuries and moves will occur
                    as well, so that is why you fantasy players should be taking 
                    advantage of the players who move within the power play lines.
                    Check out the list of top power play team rankings here.  
                </p>
            </div>
        </div>
        @include('partials.nhl-sidebar')
    </div> 
    
    <!-- End of Line-ups -->
   <div id="drf-shp" class="hidden w-full flex flex-col items-center block smm-hidden ">
            <div class="w-11/12 md:w-full flex flex-col items-center gap-6 max-w-screen-2xl">
                <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg">FORWARDS</h1>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-11/12    rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-5"> Stack Price: $25,500</h1></div>
                <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                           <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                           <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>Goals</p>
                                      <p>Assist</p>
                                      <p>Points</p>
                                      <p>Shots</p>
                                      <p>Blocks</p>
                                      <p>TOI</p>
                                      <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                      <p>.45</p>
                                      <p>.35</p>
                                      <p>.80</p>
                                      <p>2.76</p>
                                      <p>1.2</p>
                                      <p>16:53</p>
                                      <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-11/12  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-xl font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="w-11/12  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-xl font-bold p-3"> Stack Price: $25,500</h1></div>
            </div>
            <div class="w-10/12 flex flex-row justify-between gap-2 my-10 max-w-screen-2xl">
                    <div class="flex flex-col items-center gap-8 w-9/12  md:w-full">
                       <div class="bg-slate-300 h-[2px] w-11/12"></div>
                       <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[5rem] text-center">DEFENCE</h1>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="text-2xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                    <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                            <p>Start per Game</p>
                                            <div class="flex flex-row w-full justify-evenly">
                                                <div class="xl:text-sm lg:text-sm text-[10px]">
                                                <p>Goals</p>
                                                <p>Assist</p>
                                                <p>Points</p>
                                                <p>Shots</p>
                                                <p>Blocks</p>
                                                <p>TOI</p>
                                                <p>PP TQI</p>
                                                </div>
                                                <div class="xl:text-sm lg:text-sm text-[10px]">
                                                <p>.45</p>
                                                <p>.35</p>
                                                <p>.80</p>
                                                <p>2.76</p>
                                                <p>1.2</p>
                                                <p>16:53</p>
                                                <p>2.12</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                          <div class="flex flex-row items-end w-8/12 gap-2 ">
                            <div class="w-11/12 flex flex-col items-center">
                                <p class="w-[10rem] text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                            </div>               
                            <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                </div>
                                <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                </div>
                                <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                <div class="flex flex-col gap-3 mt-1.5">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                    <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                </div>
                                <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                  <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                  <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                    <img src="" alt="">
                                </div>
                                <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                               <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                    <p>Start per Game</p>
                                    <div class="flex flex-row w-full justify-evenly">
                                        <div class="xl:text-sm lg:text-sm text-[10px]">
                                        <p>Goals</p>
                                        <p>Assist</p>
                                        <p>Points</p>
                                        <p>Shots</p>
                                        <p>Blocks</p>
                                        <p>TOI</p>
                                        <p>PP TQI</p>
                                        </div>
                                        <div class="xl:text-sm lg:text-sm text-[10px]">
                                        <p>.45</p>
                                        <p>.35</p>
                                        <p>.80</p>
                                        <p>2.76</p>
                                        <p>1.2</p>
                                        <p>16:53</p>
                                        <p>2.12</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                    <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 items-center w-full ">
                        <div class="bg-slate-300 h-[2px] w-11/12"></div>

                        <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                            <h1 class="text-center font-extrabold text-md" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>
                        </div>
                        {{--<h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[5rem] ">GOALIES</h1>--}}
                        <div class="flex flex-row justify-between xl:w-11/12 lg:w-full gap-3.5 md:gap-0">
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                        <h3 class="text-2xl font-semibold text-center">7500</h3>
                                    </div> 
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                    <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                      <h3 class="text-xl font-bold text-center">BUY</h3>
                                      <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                   <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center w-8/12 gap-2 ">
                                <div class="w-11/12 flex flex-col items-center">
                                    <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                                </div>               
                                <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                                    </div>
                                    <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                    <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                    <div class="flex flex-col gap-3 mt-1.5">
                                        <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                        <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                                    </div>
                                    <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                                      <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                                      <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                <div class="flex flex-col gap-3 mt-1.5">
                                        <img src="" alt="">
                                    </div>
                                    <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                    <h3 class="text-xl font-bold text-center">BUY</h3>
                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                    <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                        <p>Start per Game</p>
                                        <div class="flex flex-row w-full justify-evenly">
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>Goals</p>
                                            <p>Assist</p>
                                            <p>Points</p>
                                            <p>Shots</p>
                                            <p>Blocks</p>
                                            <p>TOI</p>
                                            <p>PP TQI</p>
                                            </div>
                                            <div class="xl:text-sm lg:text-sm text-[10px]">
                                            <p>.45</p>
                                            <p>.35</p>
                                            <p>.80</p>
                                            <p>2.76</p>
                                            <p>1.2</p>
                                            <p>16:53</p>
                                            <p>2.12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                        <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-300 h-[2px] w-full my-5 hidden"></div>
                   </div>
                </div>
                <img class="xl:w-[20rem] w-[7rem]  h-3/5 lg:h-2/5 md:h-1/4" src="{{ asset('/images/menu-icon/adds1.png') }}">
            </div>
            <div class="w-full flex flex-col items-center  gap-8 max-w-screen-2xl">
                <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-1</h1>  
                <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                             <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                        <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between  xl:w-[61%] w-[67%] gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div> 
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="text-2xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <div class="w-full flex flex-col items-center  gap-8 max-w-screen-2xl">
                <h1 class="text-center font-extrabold text-md mt-5 mb-10 bg-slate-300 p-0.5 border rounded-lg w-[6rem] ">PLAYER-2</h1>  
                <div class="flex flex-col w-11/12 md:w-full gap-5">                    
                <div class="flex flex-row justify-between xl:w-11/12 w-full gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center gap-2 w-8/12 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>              
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                              <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100] w-f ull py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%]  h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                        <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class=" text-center xl:text-sm text-[12px] bg-slate-300 px-2 py-1 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-4 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">5.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                        <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between  xl:w-[61%] w-[67%] gap-3.5 md:gap-0">
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div> 
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                                <h3 class="text-xl font-bold text-center">BUY</h3>
                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-8/12 gap-2 ">
                        <div class="w-11/12 flex flex-col items-center">
                            <p class="w-[10rem] text-center xl:text-sm text-[12px] bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class=" px-3" alt="">
                        </div>               
                        <div class="hidden w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg drftking">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#ffa100] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl  font-semibold text-center">Proj.</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">12.3</h1>
                            </div>
                            <div class="bg-[#1d9bf0] w-full py-3 border rounded-lg">
                            <h3 class="xl:text-2xl text-xl  font-semibold text-center">7500</h3>
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                            <div class="flex flex-col gap-3 mt-1.5">
                                <h3 class="xl:text-2xl text-xl font-semibold text-center">SHOTS</h3>
                                <h1 class="xl:text-5xl text-4xl font-extrabold text-center">2.5</h1>
                            </div>
                            <div class="bg-[#ffa100] flex justify-center w-full py-3 border rounded-lg">
                               <h3 class="xl:text-xl text-md font-semibold text-center">CHART</h3>
                              <img class="xl:w-7 w-[1.5rem]" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                        <div class="flex flex-col gap-3 mt-1.5">
                                <img src="" alt="">
                            </div>
                            <div class="bg-[#ffa100]  w-full py-3 border rounded-lg">
                            <h3 class="text-xl font-bold text-center">BUY</h3>
                            <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                            </div>
                        </div>
                        <div class="w-[50%] h-[95%]  bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                            <div class="flex flex-col  xl:gap-5 gap-1 items-center mt-1.5 xl:text-sm lg:text-sm text-[11px] font-semibold">
                                <p>Start per Game</p>
                                <div class="flex flex-row w-full justify-evenly">
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>Goals</p>
                                    <p>Assist</p>
                                    <p>Points</p>
                                    <p>Shots</p>
                                    <p>Blocks</p>
                                    <p>TOI</p>
                                    <p>PP TQI</p>
                                    </div>
                                    <div class="xl:text-sm lg:text-sm text-[10px]">
                                    <p>.45</p>
                                    <p>.35</p>
                                    <p>.80</p>
                                    <p>2.76</p>
                                    <p>1.2</p>
                                    <p>16:53</p>
                                    <p>2.12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-[#ffa100] w-full xl:py-3 py-1 border rounded-lg">
                                <h3 class="xl:text-xl lg:text-xl md:text-md font-semibold text-center">Last 5</h3>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
                <div class="bg-slate-300 h-[2px] w-9/12 flex  my-5"></div>
            <div class="flex flex-col items-center w-9/12 gap-5">
                   <h1 class="text-center font-extrabold text-md mt-5 mb-10">PRESS BOX </h1>
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col items-center gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                </div>
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col items-center gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                    <div class="flex flex-col items-center  gap-4 w-[32%]">
                        <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                        <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-[16rem] px-3" alt="">                            
                    </div>
                </div>
                <div class="flex flex-col items-center w-11/12">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-2 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div>
            </div>       
        </div>
   </div>
</div>
<!-- Old design -->
<!-- <div class="w-full flex flex-row xl:justify-end lg:justify-center block smm-hidden gap-7 ">
    <div class="xl:w-7/12 lg:w-8/12 md:w-10/12">
        <div class="flex flex-row items-center justify-between m-3">
            <div class="flex flex-row items-center gap-7">
                <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div>
                    <p class="text-2xl font-extrabold">Toronto Maple Leafs</p>
                    <p class="text-2xl font-extrabold">Line Combinations</p>
                </div>
            </div>
            <div class="flex gap-2">
                <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
            </div>            
        </div>
        <div class="bg-slate-300 h-[2px] w-full"></div>
        <div class=" mx-3">
            <div class="flex flex-row items-center justify-between">
                <div class="flex flex-row gap-2 items-center">                       
                    <div>
                        <p class="text-[13px] font-semibold">David Alter</p>
                        <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                </div>
                <div class="relative">
                    <button id="" class="cursor-pointer flex flex-row justify-center items-center bg-slate-300 h-10 w-[11.5rem] rounded-full ">
                        <p class="text-[13px]">TORONTO MAPLE LEAFS</p>
                        <img src="{{ asset('/images/starting-goalies/arrow_blue.png') }}" class="w-4 h-4 rounded-full ml-2 fill-cyan-400 arrow">
                    </button> 
                </div>
            </div>
        </div>
            <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md bg-[#1d9bf0] l-ups">LINEUPS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md d-kings">DRAFTKINGS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md fnl">FANDUEL</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md sts">STATS</button>
                <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-md nws">NEWS</button>
            </div>
            <div id="shirt-footer"  class="flex flex-col gap-2 my-3">
                <div class="flex flex-col gap-2 w-full">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">FORWARDS</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem] " src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem] " src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="flex flex-row justify-between mt-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">DEFENCE</h1>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">GOALIES</h1>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 1</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mt-10">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 2</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center mt-10 gap-3">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">8500</p>
                                </div>
                                <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                    <img class="xl:w-[3.5rem] lg:w-[2rem] xl:h-[2rem] lg:h-[1.5rem] md:w-[2rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                    <p class="xl:text-lg lg:text-sm  font-semibold text-[13px]">12.5</p>
                                </div>   
                            </div>
                            <div class="w-full flex justify-evenly hidden hidden stat">
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">TOI/Gm</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm font-semibold">Goals</p>
                                    <p class="text-sm font-semibold">Assists</p>
                                    <p class="text-sm font-semibold">Shots/Gm</p>
                                    <p class="text-sm font-semibold">CF %</p>
                                    <p class="text-sm font-semibold">PP TOI/Gm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-300 h-[2px] w-full my-5"></div>
                 <div class="flex flex-col w-full">
                    <h1 class="text-center font-extrabold text-md mt-5 mb-10">PRESS BOX</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col items-center gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                        <div class="flex flex-col items-center  gap-4 w-[32%]">
                            <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                            <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">                            
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center ">
                    <ul class="flex flex-row justify-evenly list-none w-10/12 bg-slate-200 p-5 border rounded-3xl">
                        <li class=" flex flex-col items-center justify-center text-center mt-3">
                            <img class="w-14" src="{{ asset('/images/menu-icon/gtd icon.png') }}"  alt="">
                            <p class="text-sm font-bold"> Game Time <br> Decision</p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/injury icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Injured </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/hot icon.png') }}" alt=""> 
                            <p class="text-sm font-bold"> Hot Streak </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/cold icon.png') }}" alt="">
                            <p class="text-sm font-bold"> Cold player </p> 
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/value icon.png') }}"alt="">
                            <p class="text-sm font-bold"> Value Player </p>
                        </li>
                        <li class=" flex flex-col items-center justify-center  text-center">
                            <img class="w-14" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                            <p class="text-sm font-bold"> Top slack </p>
                        </li>                             
                    </ul>
                </div> 
            </div>
            
            <div class="flex flex-col gap-10 mt-10 hidden">
                <h1 class="text-lg font-bold text-center">Power play</h1>
                <p class="text-lg">
                    You might hear these lines reffered to as special teams lines,
                    but power play lines are important for success in the NHL.
                    When you have a power play you are up man, or possibly 
                    even two. Being able to capitalize on the power play is recipe
                    for sucess. The power play lines are going to feature the more
                    talented offensive players on the  team. Now when they 
                    struggle, a coach will tend to change things up. He will often
                    ride a hot hand here as well if a player is on hot streak and 
                    the coach wants to use him on the power play where he was 
                    initially not on the line anymore. Injuries and moves will occur
                    as well, so that is why you fantasy players should be taking 
                    advantage of the players who move within the power play lines.
                    Check out the list of top power play team rankings here.  
                </p>
            </div>
       </div>
       <div class="w-3/12 xl:mr-7 lg:mr-6 md:mr-2">
            <div class=" ">
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
                        <p class="text-sm font-semibold">To win Stanley Cup</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1050</p>
                    </div> 
                </div>
                <div class="flex flex-row items-center justify-between gap-3 p-3 border border-slate-200">
                    <div class="flex flex-row items-center gap-2">
                        <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                        <p class="text-sm font-semibold">To win Eastern <br> Conference</p>
                    </div>
                    <div>
                        <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+550</p>
                    </div> 
                </div>
                <div class="flex flex-col border border-slate-200">
                    <div class="flex flex-row items-center justify-between gap-3 p-3 ">
                        <div class="flex flex-row items-center gap-2">
                            <img class="w-10" src="{{ asset('/images/menu-icon/') }}" >
                            <p class="text-sm font-semibold">To win Atlantic</p>
                        </div>
                        <div>
                            <p class="border border-slate-300 px-3 py-1.5 font-semibold text-indigo-700">+1600</p>
                        </div> 
                    </div>
                    <div class="flex justify-end">
                        <a class="text-[#39b6ff] font-semibold mr-1" href="#">See All Lines</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
                    <h1 class="font-bold ml-16">Features</h1>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                   <p class="font-semibold text-sm"hidden>Props and Odds</p>
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
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL injuries</a>
               </div>
            </div>
            <div class="flex flex-col gap-5 mt-9">
                <div class="flex flex-col gap-2">
         flex justify-center            <div class="flex flex-row items-center">
                       <img class="w-6 h-6" class="w-7" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                       <h1 class="font-bold ml-8">Team News</h1>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full"></div>
                </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Nick Robertson - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">TJ Brodie - LTIR-UBI </p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin is out indefinitely with a cervical<br> spine injury</p>
               </div>
               <div class="flex flex-col gap-2 ml-3">
                    <div class="w-full flex flex-row justify-between">
                        <p class="font-semibold text-sm">Jake Muzzin - LTIR-UBI</p>
                        <p class="text-sm"> 2023-01-16</p>
                    </div>
                   <p class="text-sm">Muzzin underwent a minor surgical procedure<br> and will be re-evaluated after the ASG (ankle).</p>
               </div>
               <div class="w-full flex justify-center">
                  <a class="font-semibold text-sm" href="">View All NHL News</a>
               </div>
            </div>
            <div class="flex flex-col gap-6 items-center mt-6">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="w-10/12 h- " src="{{ asset('/images/menu-icon/adds6.png') }}">
                <img class="w-full h-60" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>           
    </div>
</div> -->
 
<!-- <div class="hidden smm-block">
    <div class="flex flex-col mx-1">
        <div class="flex flex-row justify-between items-center mb-1">
            <div class="flex flex-row items-center gap-1">
                <img class="w-[3rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                <div class="flex">
                    <h1 class="sm:text-4xl text-3xl font-extrabold">projected</h1>
                    <h1 class="sm:text-4xl text-3xl font-extrabold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <a href="#">
                <svg class="w-10 text-whborderitemsorder-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>  
        <div class="flex flex-row gap-2 mx-2 my-5">
            <button class="text-xl font-bold bg-[#38b6ff] text-black w-full h-12 rounded-md">NHL</button>
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NFL</button>
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NBA</button>
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">MLB</button>
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">SOC</button>
        </div>
        <div class="flex flex-row mx-2 gap-3 mb-3">
            <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
            <button class="text-xl font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
        </div>
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center  ">
        <div class="w-11/12">   
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}" >       
            <div class="flex flex-row items-center justify-center justify-between w-full">
                <img class="w-[4rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div class="flex sm:flex-row flex-col gap-2">
                    <p class="text-2xl font-bold">Toronto Maple Leafs</p>
                    <p class="text-2xl font-bold">Line Combinations</p>
                </div>
            </div>         
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class="mx-3">             
                <div class="flex flex-row gap-2 items-center w-full justify-between">                       
                    <div>
                        <p class="text-[13px] font-semibold">David Alter</p>
                        <p class="text-[13px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="w-5 h-5  rounded-full ml-2">
                        <h1 class="text-[13px] font-bold">MORNING SKATE</h1> 
                    </div> 
                </div>             
            </div>
                <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10" id="sub-hed">
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm bg-[#1d9bf0] l-ups">LINEUPS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm d-kings">DRAFTKINGS</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm fnl">FANDUEL</button>
                    <button class="w-full bg-slate-100 mx-1 py-4 font-semibold rounded-sm sts">STATS</button>
                    <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md prp">PROPS</button>
                    <button class="w-full bg-slate-100 text-lg py-4 font-bold rounded-md flex justify-center items-center shp">SHOP
                        <img class="w-7" src="{{ asset('/images/menu-icon/shopping-bag.png') }}" alt="">
                    </button>
                </div>
                <div id="shirt-footer"  class="flex flex-col gap-2 shirt-players">
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">FORWARDS</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center   rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center   rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ff8210] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">DEFENCE</h1>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center xl:gap-2 lg:gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">GOALIES</h1>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>      
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 1</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 2</h1>
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">MITCH MARNER</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-col items-center rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">ALEXANDER KERFOOT</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center  rounded-md gap-4 w-[32%]">
                                <p class="text-center text-sm bg-slate-300 p-0.5 border rounded-lg font-bold">AUSTON MATTHEWS</p>
                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="mb-2.5 px-3" alt="">
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden drftking">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-icon.png') }}" alt="">
                                        <p class="text-sm font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/draftking-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex flex-row justify-between items-center p-2 my-0.5 hidden fduel">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-icon.png') }}" alt="">
                                        <p class="text-sm  font-semibold">8500</p>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[2rem] h-[1.5rem]" src="{{ asset('/images/menu-icon/fanduel-rate.png') }}" alt="">
                                        <p class="text-sm  font-semibold">12.5</p>
                                    </div>   
                                </div>
                                <div class="w-full flex justify-evenly hidden hidden stat">
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">TOI/Gm</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-semibold">Goals</p>
                                        <p class="text-sm font-semibold">Assists</p>
                                        <p class="text-sm font-semibold">Shots/Gm</p>
                                        <p class="text-sm font-semibold">CF %</p>
                                        <p class="text-sm font-semibold">PP TOI/Gm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carsl" class=" my-3">
                    <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-3]"
                            data-te-carousel-indicators>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="0"
                                data-te-carousel-active
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-current="true"
                                aria-label="Slide 1"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="1"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 2"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="2"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 3"></button>
                        </div>     
                            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                                <div
                                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-active
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                            </div>
                        <button
                        class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Previous</span
                        >
                        </button>
                        <button
                        class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Next</span
                        >
                        </button>
                    </div>
                    <div class="mt-8 w-full flex justify-center">
                       <img class="h-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>                   
                </div>
            </div>
        </div>  
    </div>
</div> -->
<div class="hidden ">
    <div class="flex flex-col ">
        <div class="flex flex-row justify-between items-center mb-1">
            <div class="flex flex-row items-center gap-1">
                <img class="sm:w-[3rem] w-10" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                <div class="flex">
                    <h1 class="sm:text-4xl text-2xl font-extrabold">projected</h1>
                    <h1 class="sm:text-4xl text-2xl font-extrabold text-[#39b6ff]">lineups</h1>
                </div>
            </div>
            <a href="#">
                <svg class="sm:w-10 w-8 text-white border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>  
        <div class="flex flex-row sm:gap-2 gap-1 mx-2 my-5">
            <button class="sm:text-xl text-sm font-bold bg-[#38b6ff] text-black w-full sm:h-12 h-10 rounded-md">NHL</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">NFL</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">NBA</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">MLB</button>
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">SOC</button>
        </div>
        <div class="flex flex-row mx-2 sm:gap-3 gap-1 mb-3">
            <button class="sm:text-xl text-sm font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
            <button class="sm:text-xl text-sm font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
        </div>

         
            <div id="head-drp-mob" class=" relative border border-[#9fa0a0] w-full h-[3rem] rounded-lg flex flex-col justify-center items-center">
                <a href="#" class="w-full text-[20px] text-center font-bold text-[#9fa0a0] font-semibold">{{  ( !empty($drp_name) ? $drp_name: 'Anaheim Ducks')  }}</a>
                <div class="drp-dwn-mob hidden flex flex-col w-full p-2 bg-slate-100 absolute top-12 overflow-y-auto h-[17rem]">

                    <a class="teams text-[20px]  font-bold text-[#9fa0a0]" href="/nhl/line-combos/{{$team->data->slug}}">{{$team->data->name}}</a>

                </div>
                <a class="absolute right-[15px] top-[12px] rotate-[271deg] arrw-v1-mob" href="">
                    <img class="w-[2rem] " src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
                </a>
            </div>
    </div>
    <div class="flex flex-col items-center  ">
        <div class="w-[95%] mx-5">   
            <img class="w-full my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}" >       
            <div class="flex flex-row items-center justify-center justify-between w-full">
                <img class="sm:w-[4rem] w-[3rem] rounded-lg" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__2_-removebg-preview.png') }}" >
                <div class="flex sm:flex-row flex-col">
                    <p class="sm:text-2xl text-md font-bold">Toronto Maple Leafs</p>
                    <p class="sm:text-2xl text-md font-bold">Line Combinations</p>
                </div>
            </div>         
            <div class="bg-slate-300 h-[2px] w-full"></div>
            <div class="mx-3">             
                <div class="flex flex-row gap-2 items-center w-full justify-between">                       
                    <div>
                        <p class="sm:text-[13px] text-[10px] font-semibold">David Alter</p>
                        <p class="sm:text-[13px] text-[10px] font-semibold">09/22/2022 | 4:21pm EST</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/starting-goalies/blue_cheked.png') }}" class="sm:w-5 sm:h-5 w-3  rounded-full ml-2">
                        <h1 class="sm:text-[13px] text-[10px] font-bold">MORNING SKATE</h1> 
                    </div> 
                </div>             
            </div>
                <div class="flex flex-row items-center w-full justify-evenly mt-3 z-10 gap-1" id="sub-hed">
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm bg-[#1d9bf0] l-ups">LINEUPS</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm d-kings">DRAFTKINGS</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm fnl">FANDUEL</button>
                    <button class="w-full bg-slate-100  sm:py-4 py-2 sm:text-lg text-[10px] font-semibold rounded-sm sts">STATS</button>
                    <button class="w-full bg-slate-100  sm:text-lg text-[10px] sm:py-4 py-2 font-semibold rounded-md prp">PROPS</button>
                    <button class="w-full bg-slate-100 sm:text-lg  text-[10px] sm:py-4 py-2 font-semibold rounded-md flex justify-center items-center shp">SHOP
                        <img class="sm:w-7 w-4" src="{{ asset('/images/menu-icon/shopping-bag.png') }}" alt="">
                    </button>
                </div>
                <div id="shirt-footer"  class="flex flex-col gap-2 shirt-players">
                    <div class="flex flex-col gap-2 w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">FORWARDS</h1>
                        <div class="flex flex-row justify-between">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw1')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>   
                                </div>
                                @endif
                                @if($key == 'c1')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>        
                                    </div>                                                            
                                </div>
                                @endif
                                @if($key == 'rw1')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>       
                                    </div>                            
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw2')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>   
                                </div>
                                @endif
                                @if($key == 'c2')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                                                            
                                </div>
                                @endif
                                @if($key == 'rw2')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                             
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'lw3')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>   
                                </div>
                                @endif
                                @if($key == 'c3')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                                                             
                                </div>
                                @endif
                                @if($key == 'rw3')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                             
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                        <div class="flex flex-row justify-between mt-3">
                            @foreach($result->data->slots as $key=>$item)
                            @if($key == 'lw4')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>    
                                </div>
                            @endif
                            @if($key == 'c4')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                                                             
                                </div>
                            @endif
                            @if($key == 'rw4')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>                             
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div> 
                    <div class="w-full  rounded-lg bg-[#1d9bf0] fl-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="w-full  rounded-lg bg-[#ffa100] dk-price hidden"><h1 class="text-center text-lg font-bold p-3"> Stack Price: $25,500</h1></div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">DEFENCE</h1>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            @foreach($result->data->slots as $key=>$item)
                            @if($key == 'ld1')
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                            @endif
                            @if($key == 'rd1')
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            @foreach($result->data->slots as $key=>$item)
                            @if($key == 'ld2')
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                            @endif
                            @if($key == 'rd2')
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            @foreach($result->data->slots as $key=>$item)
                            @if($key == 'ld3')
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                            @endif
                            @if($key == 'rd3')
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <img class="w-auto" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
                    <div class="flex flex-col w-full">
                        {{--<h1 class="text-center font-extrabold text-md mt-5 mb-10">GOALIES</h1>--}}
                        <div class="py-2 rounded-lg" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                            <h1 class="text-center font-extrabold text-md" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-row justify-center mt-10 gap-3">
                                @foreach($result->data->slots as $key=>$item)
                                    @if($key == 'sg1')
                                        <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                            <div>
                                                <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                                <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                            </div>
                                            <div class="   ">
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                    </div>
                                                    <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                    </div>
                                                    <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                        <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                        <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                    <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                        <p class="text-center">Start per Game</p>
                                                        <div class="flex flex-row w-full justify-evenly">
                                                            <div class="sm:text-[10px] text-[5px]">
                                                                <p>Goals</p>
                                                                <p>Assist</p>
                                                                <p>Points</p>
                                                                <p>Shots</p>
                                                                <p>Blocks</p>
                                                                <p>TOI</p>
                                                                <p>PP TQI</p>
                                                            </div>
                                                            <div class="sm:text-[10px] text-[5px]">
                                                                <p>.45</p>
                                                                <p>.35</p>
                                                                <p>.80</p>
                                                                <p>2.76</p>
                                                                <p>1.2</p>
                                                                <p>16:53</p>
                                                                <p>2.12</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                        <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                    </div>
                                                </div>      
                                            </div> 
                                        </div>
                                    @endif
                                    @if($key == 'sg2')
                                        <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                            <div>
                                                <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                                <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                            </div>
                                            <div class="   ">
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                    </div>
                                                    <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                        <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                        <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                    </div>
                                                    <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                        <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                    <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                        <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                        <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                    <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                        <p class="text-center">Start per Game</p>
                                                        <div class="flex flex-row w-full justify-evenly">
                                                            <div class="sm:text-[10px] text-[5px]">
                                                                <p>Goals</p>
                                                                <p>Assist</p>
                                                                <p>Points</p>
                                                                <p>Shots</p>
                                                                <p>Blocks</p>
                                                                <p>TOI</p>
                                                                <p>PP TQI</p>
                                                            </div>
                                                            <div class="sm:text-[10px] text-[5px]">
                                                                <p>.45</p>
                                                                <p>.35</p>
                                                                <p>.80</p>
                                                                <p>2.76</p>
                                                                <p>1.2</p>
                                                                <p>16:53</p>
                                                                <p>2.12</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                        <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                    </div>
                                                </div>     
                                            </div>                            
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>      
                    </div>
                    <div class="bg-slate-300 h-[2px] w-full my-24"></div>
                    <div class="flex flex-col w-full">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 1</h1>
                        <div class="flex flex-row justify-between">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'pp11')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>    
                                    </div>   
                                </div>
                                @endif
                                @if($key == 'pp12')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>        
                                    </div>                                                            
                                </div>
                                @endif
                                @if($key == 'pp13')
                                <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                    <div class="">
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class=" ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>       
                                    </div>                            
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">   
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'pp14')
                                    <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                        <div>
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        <div class="   ">
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                </div>
                                                <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                    <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                    <p class="text-center">Start per Game</p>
                                                    <div class="flex flex-row w-full justify-evenly">
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>Goals</p>
                                                            <p>Assist</p>
                                                            <p>Points</p>
                                                            <p>Shots</p>
                                                            <p>Blocks</p>
                                                            <p>TOI</p>
                                                            <p>PP TQI</p>
                                                        </div>
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>.45</p>
                                                            <p>.35</p>
                                                            <p>.80</p>
                                                            <p>2.76</p>
                                                            <p>1.2</p>
                                                            <p>16:53</p>
                                                            <p>2.12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                </div>
                                            </div>      
                                        </div> 
                                    </div>
                                @endif
                                @if($key == 'pp15')
                                    <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                        <div>
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        <div class="   ">
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                </div>
                                                <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                    <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                    <p class="text-center">Start per Game</p>
                                                    <div class="flex flex-row w-full justify-evenly">
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>Goals</p>
                                                            <p>Assist</p>
                                                            <p>Points</p>
                                                            <p>Shots</p>
                                                            <p>Blocks</p>
                                                            <p>TOI</p>
                                                            <p>PP TQI</p>
                                                        </div>
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>.45</p>
                                                            <p>.35</p>
                                                            <p>.80</p>
                                                            <p>2.76</p>
                                                            <p>1.2</p>
                                                            <p>16:53</p>
                                                            <p>2.12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                </div>
                                            </div>     
                                        </div>                            
                                    </div>
                                @endif
                            @endforeach
                        </div>  
                       
                    </div>
                    <div class="flex flex-col w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PLAYER 2</h1>
                        <div class="flex flex-row justify-between">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'pp21')
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        <div class=" ">
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                </div>
                                                <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                    <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                    <p class="text-center">Start per Game</p>
                                                    <div class="flex flex-row w-full justify-evenly">
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>Goals</p>
                                                            <p>Assist</p>
                                                            <p>Points</p>
                                                            <p>Shots</p>
                                                            <p>Blocks</p>
                                                            <p>TOI</p>
                                                            <p>PP TQI</p>
                                                        </div>
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>.45</p>
                                                            <p>.35</p>
                                                            <p>.80</p>
                                                            <p>2.76</p>
                                                            <p>1.2</p>
                                                            <p>16:53</p>
                                                            <p>2.12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                </div>
                                            </div>    
                                        </div>   
                                    </div>
                                @endif
                                @if($key == 'pp22')
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">                              
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        <div class=" ">
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                </div>
                                                <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                    <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                    <p class="text-center">Start per Game</p>
                                                    <div class="flex flex-row w-full justify-evenly">
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>Goals</p>
                                                            <p>Assist</p>
                                                            <p>Points</p>
                                                            <p>Shots</p>
                                                            <p>Blocks</p>
                                                            <p>TOI</p>
                                                            <p>PP TQI</p>
                                                        </div>
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>.45</p>
                                                            <p>.35</p>
                                                            <p>.80</p>
                                                            <p>2.76</p>
                                                            <p>1.2</p>
                                                            <p>16:53</p>
                                                            <p>2.12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                </div>
                                            </div>        
                                        </div>                                                                                   
                                    </div>
                                @endif 
                                @if($key == 'pp23')  
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">                         
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        <div class=" ">
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                                </div>
                                                <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                    <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                    <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                                </div>
                                                <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                    <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                                <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                    <img src="" alt="">
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                    <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                    <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                                <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                    <p class="text-center">Start per Game</p>
                                                    <div class="flex flex-row w-full justify-evenly">
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>Goals</p>
                                                            <p>Assist</p>
                                                            <p>Points</p>
                                                            <p>Shots</p>
                                                            <p>Blocks</p>
                                                            <p>TOI</p>
                                                            <p>PP TQI</p>
                                                        </div>
                                                        <div class="sm:text-[10px] text-[5px]">
                                                            <p>.45</p>
                                                            <p>.35</p>
                                                            <p>.80</p>
                                                            <p>2.76</p>
                                                            <p>1.2</p>
                                                            <p>16:53</p>
                                                            <p>2.12</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                    <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                                </div>
                                            </div>       
                                        </div>                                                   
                                    </div>
                                @endif   
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3">
                            <div class="flex flex-row justify-center mt-10 gap-3">
                                <div class="flex flex-row items-center rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>      
                                    </div> 
                                </div>
                                <div class="flex flex-row items-center  rounded-md gap-2 w-[37%]">
                                    <div>
                                        <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                        <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                    </div>
                                    <div class="   ">
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden drftking">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden fduel">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">5.3</h1>
                                            </div>
                                            <div class="bg-[#1d9bf0] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-lg text-[10px] font-semibold text-center">7500</h3>
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden props">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-auto">
                                                <h3 class="sm:text-xl text-sm font-semibold text-center">Proj.</h3>
                                                <h1 class="sm:text-3xl text-sm font-extrabold text-center">12.3</h1>
                                            </div>
                                            <div class="bg-[#ffa100] flex flex-wrap justify-center items-center w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[9px] font-semibold text-center">CHART</h3>
                                                <img class="sm:w-3 sm:h-3 w-2 h-2" src="{{ asset('/images/menu-icon/lock (1).png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden shop">
                                            <div class="flex flex-col  sm:h-[5.5rem] h-[3rem]">
                                                <img src="" alt="">
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-3 py-1 border rounded-lg">
                                                <h3 class="sm:text-sm text-[9px] font-bold text-center">BUY</h3>
                                                <img class="w-7" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="sm:w-[6rem] w-[3rem] bg-slate-300 flex flex-col justify-between border rounded-lg hidden stats">
                                            <div class="flex flex-col  sm:h-[7.5rem] h-auto items-center sm:text-[11px] text-[8px] font-semibold">
                                                <p class="text-center">Start per Game</p>
                                                <div class="flex flex-row w-full justify-evenly">
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>Goals</p>
                                                        <p>Assist</p>
                                                        <p>Points</p>
                                                        <p>Shots</p>
                                                        <p>Blocks</p>
                                                        <p>TOI</p>
                                                        <p>PP TQI</p>
                                                    </div>
                                                    <div class="sm:text-[10px] text-[5px]">
                                                        <p>.45</p>
                                                        <p>.35</p>
                                                        <p>.80</p>
                                                        <p>2.76</p>
                                                        <p>1.2</p>
                                                        <p>16:53</p>
                                                        <p>2.12</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-[#ffa100] w-full sm:py-[3%] py-0 border rounded-lg">
                                                <h3 class="sm:text-[12px] text-[10px] font-semibold text-center">Last 5</h3>
                                            </div>
                                        </div>     
                                    </div>                            
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div id="p-box" class="flex flex-col items-center w-full mt-10">
                        <h1 class="text-center font-extrabold text-md mt-5 mb-10">PRESS BOX </h1>
                        <div class="flex flex-row justify-between frstrow ">
                            @foreach($result->data->slots as $key=>$item)
                               @if($key == 'b1')
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full   ">
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                    </div>
                                @endif
                                @if($key == 'pp22')
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full ">
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>                                                       
                                    </div>
                                @endif
                                @if($key == 'b3')
                                    <div class="flex flex-row items-center rounded-md sm:gap-2 gap-0 w-full  ">
                                        <div class="">
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>                          
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-row justify-center mt-10 gap-3 scondrow">
                            <div class="flex flex-row justify-center mt-10 gap-3">
                            @foreach($result->data->slots as $key=>$item)
                                @if($key == 'b4')
                                    <div class="flex flex-row items-center rounded-md gap-2 w-[33%]">
                                        <div>
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                        
                                    </div>
                                @endif
                                @if($key == 'b5')
                                    <div class="flex flex-row items-center  rounded-md gap-2 w-[33%]">
                                        <div>
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                                                    
                                    </div>
                                @endif
                                @if($key == 'b6')
                                    <div class="flex flex-row items-center  rounded-md gap-2 w-[33%]">
                                        <div>
                                            <p class="text-center sm:text-[10px] text-[6px] bg-slate-300 p-0.5 border rounded-lg font-bold"> {{ ( !empty($item->full_name) ? $item->full_name : '')  }}</p>
                                            <img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 sm:max-w-full min-w-[2rem]" alt="">
                                        </div>
                                                                    
                                    </div>
                                @endif
                            @endforeach
                            </div>
                        </div>  
                    </div>
                </div>
                <div id="carsl" class=" my-3 hidden">
                    <div id="carouselExampleCaptions1" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 z-[-3]"
                            data-te-carousel-indicators>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="0"
                                data-te-carousel-active
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-current="true"
                                aria-label="Slide 1"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="1"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 2"></button>
                            <button
                                type="button"
                                data-te-target="#carouselExampleCaptions1"
                                data-te-slide-to="2"
                                class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent bg-current bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                                aria-label="Slide 3"></button>
                        </div>     
                            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                                <div
                                class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-active
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-3]"
                                data-te-carousel-item
                                style="backface-visibility: hidden">
                                    <div class="flex flex-col items-center gap-3">          
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row w-full justify-evenly  border border-black rounded-xl sm:px-5 px-2 py-5">
                                            <div class="flex flex-col gap-4">
                                                <div class="flex flex-row items-center gap-1">                                                   
                                                    <img class="w-[20px] h-[20px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                    <p class="text-[#385575] text-lg font-extrabold">Injury</p>
                                                </div>                                              
                                                <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-36 h-36 " alt="">
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="">
                                                    <h1 class="text-xl font-bold">Jordan Kyrou</h1>
                                                    <p class="text-[12px] font-bold">St.Louis Blues - C</p>
                                                </div>
                                                <h1 class="text-xl font-extrabold">Jordan Kyrou out indefinitely <br> after suffering stroke</h1>
                                                <div class="flex flex-row items-center">
                                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    <div>
                                                        <p class="font-extrabold">Jim Thomas</p>
                                                        <p class="text-sm font-boldfont-bold">11/30/2022 | 12:59 pm EST</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                            </div>
                        <button
                        class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Previous</span
                        >
                        </button>
                        <button
                        class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-whopacititems50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-whhover:items-underline hover:opacity-90 hover:outline-none focus:text-whfocus:items-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions1"
                        data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Next</span
                        >
                        </button>
                    </div>
                    <div class="mt-8 w-full flex justify-center">
                       <img class="h-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>                   
                </div>
            </div>
        </div>  
    </div>
</div>
<div class="mx-1.5 smm-block  hidden">
    <div class="flex flex-col w-full ">

        <div id="line-combos-div_  "  class=" ">
            @php

                if(!isset($team_slug)){
                    $team_slug = '';
                }

            @endphp
            @if(Request::is('nhl/line-combos/'. $team_slug ))
                <img class="w-full mt-2 hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}" >
                <div class="h-[90vh] flex flex-col justify-between">
                    <div>
                        <div class="  flex flex-col gap-16 items-center justify-between   rounded-md" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                            <div class="flex flex-col items-center py-5  " style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                                <h1 class="text-2xl text-black font-medium " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">{{  ( !empty($current_name) ? $current_name: 'Anaheim Ducks')  }}</h1>
                                <h1 class="text-2xl text-white font-bold " style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">  NHL Line Combinations </h1>
                            </div>

                            <div class="flex flex-col items-center  ">
                                <img class="w-40" src="{{  ( !empty($current_logo) ? $current_logo: ' ') }}" alt="">
                            </div>


                            <div class="relative w-[83%] flex justify-center ">

                                {{--<div class="absolute bottom-0  right-0">--}}
                                    {{--<div class="relative flex flex-row">--}}



                                        @if(isset($team->data->featured_player_1))
                                            @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_2)){
                                                <img class="w-[40%]  relative " src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                                            @else
                                                <img class="w-[40%]  relative left-10" src="{{  ( !empty($team->data->featured_player_1->images->photo) ? $team->data->featured_player_1->images->photo :  '' )  }}" alt="">
                                            @endif
                                        @endif
                                        @if(isset($team->data->featured_player_2))
                                            @if(!isset($team->data->featured_player_3) || !isset($team->data->featured_player_1)){
                                                <img class="w-[40%]  relative  " src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                                            @else
                                                <img class="w-[40%]  relative z-10" src="{{  ( !empty($team->data->featured_player_2->images->photo) ? $team->data->featured_player_2->images->photo :  '' )  }}" alt="">
                                            @endif
                                        @endif
                                        @if(isset($team->data->featured_player_3))
                                            @if(!isset($team->data->featured_player_2) || !isset($team->data->featured_player_1)){
                                                <img class="w-[40%] relative   " src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                                            @else
                                                <img class="w-[40%] relative  right-10" src="{{  ( !empty($team->data->featured_player_3->images->photo) ? $team->data->featured_player_3->images->photo :  '' )  }}" alt="">
                                            @endif
                                        @endif
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<img class="w-[9rem]  absolute right-0" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">--}}
                                {{--<img class="w-[9rem]  absolute z-10" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">--}}
                                {{--<img class="w-[9rem] absolute left-0" src="{{ asset('/images/menu-icon/John Tavares (1).png') }}" alt="">--}}
                            </div>


                        </div>


                    </div>

                    <div class="flex flex-col gap-10" >

                        <div class=" flex flex-col gap-2 items-center text-gray-600  ">


                            <div class="flex gap-2 justify-start text-right items-center w-full">
                                <img  class="w-6 h-6 " src="{{ asset('/images/line-combos/6523-information-6.png') }}"  >
                                <div class="text-base font-semibold uppercase  " >
                                    {{ $result->data->status->name }}
                                </div>
                            </div>
                            <div class="flex gap-2 justify-start text-right items-center w-full">
                                <img src="{{ asset('/images/line-combos/6523-information-8.png') }}" class="w-6 h-6   ">
                                <div class="text-base font-semibold text-gray-600 "> {{ $result->data->source->name  }}</div>
                            </div>
                            <div class="flex gap-2 justify-start w-full flex flex-row   " >
                                <img src="{{ asset('/images/line-combos/6523-information-5.png') }}" class="w-6 h-6 ">
                                <div class="text-base font-semibold text-gray-600 ">{{ $result->data->updated_at->date  }} | {{ $result->data->updated_at->time  }}</div>

                            </div>
                        </div>
                        <div class="relative flex justify-center border border-gray-700  ">



                            <select class="form-select w-full p-1 " aria-label="Default select example" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

                                <option selected class="border-b border-gray-200">
                                    <a href="" style="width:100% !important; color: black">
                                        Winnipeg Jets
                                    </a>
                                </option>
                                @foreach($teams->data as $key=>$val)
                                    @if($val->league->slug == 'nhl')
                                        <option value="{{ url('/nhl/line-combos/'. $val->slug ) }}"  class="border border-1 border-bottom border-dark line-combos-items">
                                            {{--<a href="/nhl/line-combos/{{$val->slug}}" style="width:100% !important; color: black">--}}
                                                {{$val->name}}
                                             {{--</a>--}}
                                        </option>
                                    @endif
                                @endforeach

                            </select>


                        </div>

                    </div>
                    <div style="clear:both"></div>

                </div>

            @elseif(Request::is('nhl/line-combos'))
                <div class=""></div>
                <div class="w-full relative flex justify-center  ">
                    <ul id="" class="flex flex-wrap items-center xl:gap-2 lg:gap-1 pt-2 justify-center gap-2"  style="background-color:white " >

                        @foreach($teams->data as $key=>$val)
                            @if(!empty($val->logo->src))
                                @if($val->league->slug == 'nhl')
                                    <li class="lc-team-logo "  value="">
                                        <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                            <img class=" w-12 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="p-2 text-xs mt-5">
                    We understand the vital importance of having the latest NHL line combinations at your fingertips. For fantasy sports enthusiasts and sports betting aficionados alike, timely and accurate information on player lineups is not just a convenience—it's a game-changer. Staying updated with the most current line combinations empowers you to make informed decisions, elevating your strategy in fantasy hockey leagues and sports betting markets. Our platform ensures you're always ahead of the curve with real-time updates, deep insights, and expert analysis. Dive into the dynamic world of NHL with ProjectedLineup.com, where every shift and strategy counts towards your victory!
                </div>
            @else
                <div id="line-combos_" class=" ">
                    <div class=""></div>
                    <div class="w-full relative flex justify-center">
                        <ul id="" class="flex  flex-wrap items-center xl:gap-2 lg:gap-1 pt-2 justify-center  gap-2"  style="background-color:white " >

                            @foreach($teams->data as $key=>$val)
                                @if(!empty($val->logo->src))
                                    @if($val->league->slug == 'nhl')
                                        <li class="lc-team-logo "  value="">
                                            <a class=""  href="/nhl/line-combos/{{$val->slug}}">
                                                <img class="w-12 flex " src="{{$val->logo->src}}" alt=""  data-te-toggle="tooltip" title="{{ $val->name }}">
                                            </a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </div>

        @if(Request::is('nhl/line-combos/'. $team_slug ))

            <img class="w-full my-1 hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}" >
            <div class="flex flex-col gap-2 mb-5  " >

                <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full   py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">FORWARDS</h1>
                </div>
                <div class="flex flex-row mt-4 ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'lw1')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw"  alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'c1')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rw1')
                                <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                    <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                        </div>
                                        <div class="">
                                            <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                            <p class="text-center  text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-row mt-4   ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'lw2')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'c2')
                                <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                    <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                        </div>

                                        <div class="">
                                            <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                            <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif
                        @if($key == 'rw2')
                                <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                    <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                        </div>

                                        <div class="">
                                            <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                            <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex flex-row mt-4  ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'lw3')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'c3')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rw3')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex flex-row mt-4">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'lw4')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'c4')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rw4')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <img class="w-full my-1 hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}" >
            <div class="flex flex-col gap-2 mb-5  ">


                <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">DEFENCE</h1>
                </div>
                <div class="flex flex-row justify-center mt-4 ">
                    @foreach($result->data->slots as $key=>$item)

                        @if($key == 'ld1')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="" style=" height: 100%; width: 100%; inset: 0px; object-fit: cover; object-position: center top; color: transparent;">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rd1')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center   ">
                                <div class="flex flex-col items-center  h-auto gap-2 w-32   ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images"  src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-row justify-center mt-4  ">
                    @foreach($result->data->slots as $key=>$item)

                        @if($key == 'ld2')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center   ">
                                <div class="flex flex-col items-center  h-auto gap-2 w-32   ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images"  src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rd2')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center   ">
                                <div class="flex flex-col items-center  h-auto gap-2 w-32   ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images"   src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>
                <div class="flex flex-row justify-center mt-4 ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'ld3')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center   ">
                                <div class="flex flex-col items-center  h-auto gap-2 w-32   ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images"  src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'rd3')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center   ">
                                <div class="flex flex-col items-center  h-auto gap-2 w-32   ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images"  src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">

                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div >
            <div class="flex flex-col gap-2 mb-5  ">


               {{--<h1 class="w-full py-1.5 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>--}}

                <div class=" " style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full py-2 rounded-md text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>
                </div>
                <div class="flex flex-row justify-center mt-4 ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'sg1')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'sg2')
                                <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                    <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                        </div>

                                        <div class="">
                                            <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                            <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2 mb-5  " id="power">
                <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 1</h1>
                </div>

                <div class="flex flex-row  mt-4">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'pp11')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp12')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp13')
                                <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                    <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                            <img class="nhl-images"src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                        </div>

                                        <div class="">
                                            <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                            <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif

                    @endforeach
                </div>
                <div class="flex flex-row justify-center mt-4 ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'pp14')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}"sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp15')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2 mb-5   " >

                <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full  py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 2</h1>
                </div>
                <div class="flex flex-row  mt-4">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'pp21')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp22')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp23')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-row justify-center mt-4  ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'pp24')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'pp25')
                            <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2 mb-5  ">

                <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                    <h1 class="w-full  py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">PRESSBOX</h1>
                </div>
                <div class="flex flex-row mt-4">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'b1')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'b2')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($key == 'b3')
                            <div class="w-1/3 text-center xl:w-48 flex justify-center">
                                <div class="flex flex-col items-center h-auto gap-2 w-32  ">
                                    <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                        <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                    </div>

                                    <div class="">
                                        <p class="text-center text-xs   font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                        <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-row justify-center  mt-4 ">
                    @foreach($result->data->slots as $key=>$item)
                        @if($key == 'b4')
                            <div class="flex flex-col items-center w-[32%] gap-2 w-1/3">
                                <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                    <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                </div>

                                <div class="">
                                    <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                    <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                </div>
                            </div>
                        @endif
                        @if($key == 'b5')
                            <div class="flex flex-col items-center w-[32%] gap-2 w-1/3">
                                <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                    <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}"  alt="">
                                </div>

                                <div class="">
                                    <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                    <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                </div>
                            </div>
                        @endif
                        @if($key == 'b6')
                            <div class="flex flex-col items-center w-[32%] gap-2 w-1/3">
                                <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                    <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" alt="">
                                </div>

                                <div class="">
                                    <p class="text-center text-xs  font-bold uppercase leading-3">{{ ( !empty($item->first_name) ? $item->first_name : '')  }}</p>
                                    <p class="text-center text-xs font-bold uppercase leading-3">{{ ( !empty($item->last_name) ? $item->last_name : '')  }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2  ">


                <div class=" ">
                    <div  style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                        <h1 class="w-full py-2 rounded-md text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">TEAM NEWS</h1>
                    </div>
                    <div class="flex flex-col gap-4 mt-4">
                        @php
                            $team_count = 0;
                        @endphp
                        @foreach($article->data as $key=>$val)
                            @if(empty($current_name))
                                @if($val->team->slug == 'anaheim-ducks')
                                    @php
                                        $team_count++
                                    @endphp
                                    <div class="flex flex-row items-start justify-evenly items-center" style="{{ $team_count  > 10 ? 'display: none' : ''}}">

                                        <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                            <div class="relative flex flex-col items-center h-auto gap-2 w-32  ">
                                                <img  class="nhl-images" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" style=" " src="{{$val->player->images->uniform}}"  alt="">
                                            </div>
                                        </div>


                                        <div class="w-1/2 text-center xl:w-48 flex flex-col justify-center">

                                            <p class="font-semibold text-base">{{$val->player->full_name}}</p>
                                            <p class="text-[12px]">{{$val->title}}</p>
                                        </div>
                                    </div>
                                @endif
                            @elseif(!empty($current_name))
                                @if($current_name == $val->team->name)
                                    @php
                                        $team_count++
                                    @endphp
                                    <div class="flex flex-row gap-4 items-start  justify-evenly items-center" style="{{ $team_count  > 10 ? 'display: none' : ''}}">

                                        <div class="w-1/2 text-center xl:w-48 flex justify-center">
                                            <div class="relative flex flex-col items-center h-28 w-28  ">
                                                <img  class="nhl-images" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" style=" " src="{{ ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}"  alt="">
                                            </div>
                                        </div>

                                        <div class="w-1/2 text-center xl:w-48 flex flex-col justify-center">
                                            <p class="font-semibold text-base"> {{ ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}</p>
                                            <p class="text-[12px]">{{$val->title}}</p>
                                        </div>

                                        {{--<img sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" style=" " src="{{$val->player->images->uniform}}" alt="">--}}
                                        {{--<div class="flex flex-col">--}}
                                            {{--<p class="font-semibold text-base">{{$val->player->full_name}}</p>--}}
                                            {{--<p class="text-[12px]">{{$val->title}}</p>--}}
                                        {{--</div>--}}
                                    </div>
                                @endif
                            @endif
                        @endforeach

                        @if($team_count > 3)
                            <div>
                                <div class="text-black text-base  font-semibold flex justify-end mr-[13px] cursor-pointer" id=" "> See all</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>



        @endif


    </div>
</div>
<!-- Mobile end -->
@endsection