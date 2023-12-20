@extends('layouts.master-nhl')

@section('content')

 
    <div class="flex justify-center max-w-screen-2xl block smm-hidden">
        <div class="w-11/12">
            <div class="flex flex-col w-full ">
                <div class="flex flex-col w-full">

                    <div class="relative flex items-center h-[220px]  mt-8 justify-center">
                        <img class="w-12 h-12 ml-8 hidden" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                        <h1 class="text-2xl font-extrabold pt-5 pb-5 ml-5 ml-8 hidden" >
                            NHL Player News
                        </h1>


                        <div class=" bottom-0  ">
                            <div class="flex flex-row"  >

                                <img class="w-52 relative left-6 z-0" src="{{ asset('/images/nhl-player-news/IMG_0621.png') }}">

                                <img class="w-52 relative z-10" src="{{ asset('/images/nhl-player-news/IMG_0622.png') }}">

                                <img class="w-52 relative right-6 z-0" src="{{ asset('/images/nhl-player-news/IMG_0623.png') }}">
                            </div>
                        </div>
                    </div>







                    <div class="hidden">
                        <div class="flex m-5">
                            <h1 class="font-extrabold text-2xl text-black">NHL Player News</h1>
                        </div>
                        <div class="flex flex-row justify-center xl:gap-3 lg:gap-3 md:gap-2">
                        @foreach($contentPosts as $key=>$item)
                            {{--{{ $item->category->slug }}--}}
                            @if($item->category->slug === 'morning-skate')
                                <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white relative">
                                    <div class="gap-1 w-10/12 mt-4">
                                        <div class="flex flex-row items-center gap-2">
                                            <img class="xl:w-8 lg:w-6 md:w-6" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                            <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                        </div>
                                        <div class="flex justify-center">
                                        <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                        </div>
                                        <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                        <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                    </div>
                                    <div class="w-full ">
                                        <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px] absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            @endif
                            @if($item->category->slug === 'top-stacks')
                                <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white relative">
                                    <div class="gap-1 w-10/12 mt-4">
                                        <div class="flex flex-row items-center gap-2">
                                            <img class="xl:w-8 lg:w-6 md:w-6" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                            <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                        </div>
                                        <div class="flex justify-center">
                                        <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                        </div>                                    <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                        <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                    </div>
                                    <div class=" w-full ">
                                        <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px]  absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            @endif
                            @if($item->category->slug === 'props-and-odds')
                                <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white  relative">
                                    <div class="gap-1 w-10/12 mt-4">
                                        <div class="flex flex-row items-center gap-2">
                                            <div class="xl:w-7 xl:h-7 w-5 h-5 bg-green-600 rounded-full flex justify-center items-center">
                                                <p class="xl:text-xl lg:text-lg font-bold text-white">$</p>
                                            </div>
                                            <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                        </div>
                                        <div class="flex justify-center">
                                        <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                        </div>
                                        <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                        <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                    </div>
                                    <div class="w-full ">
                                        <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px]  absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            @endif
                        {{----}}                 
                            <!-- <div class="xl:w-[23rem] lg:w-[17rem] md:w-[13rem] h-72  relative ml-5 mr-5 border border-slate-200 rounded-xl flex justify-center bg-white">
                                <div class="m-1 mt-4 w-[15rem] flex flex-col gap-1">
                                    <div class="flex flex-row items-center gap-2">
                                        <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                        <h1 class="font-extrabold">Top Tracks</h1>
                                    </div>
                                    <img src="{{ asset('/images/home-page/45909_a11.jpg') }}" class="w-[15rem]">
                                    <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                    <div class="flex w-full justify-end mt-4">
                                        <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            </div>                  
                            <div class="xl:w-[23rem] lg:w-[17rem] md:w-[13rem] h-72  relative border border-slate-200  rounded-xl flex justify-center bg-white">
                                <div class="m-1 mt-6 w-[15rem] flex flex-col gap-2">
                                    <h1 class="font-bold "><span class="text-white bg-green-500 text-base px-3 py-2 rounded-full mr-2">$</span>Props and Odds</h1>
                                    <img src="{{ asset('/images/home-page/45966_a11.jpg') }}" class="w-[15rem]">
                                    <p class="text-[12px] font-extrabold">Edmonton on the list  of top stacks to play tonight</p>
                                    <div class="flex w-full justify-end mt-4">
                                        <img class="w-[21px] h-[25px]" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                    </div>
                                </div>
                            </div> -->                  
                        @endforeach
                    </div>
                    </div>

                    {{--Starting goailies w/ API--}}
                    <div>
                        <div class="flex flex-col  ">
                            <div class="flex items-center">
                                <h1 class="font-extrabold text-2xl text-black pt-5">NHL Player News</h1>
                            </div>
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                                @php
                                    $player_news_count = 0
                                @endphp

                                @foreach($player_news->data as $key=>$val)
                                    @if($val->type->slug == 'injury' || $val->type->slug == 'line-change')

                                        @php
                                            $player_news_count++
                                        @endphp

                                        <div class="flex flex-col gap-5 w-[32%] rounded-xl justify-between bg-[#eeeeee] border border-[#38b6ff] relative mt-5  card-container {{ ($player_news_count  > 6) ? 'hidden' : '' }}" >


                                            <div>
                                                <div class="flex mx-4 mt-5 gap-4  pb-5">
                                                    <img class="lg:w-20 lg:h-20 md:w-13 md:h-[3rem]" src="{{$val->player->images->uniform}}">
                                                    <div class="flex flex-col  xl:gap-3 lg:gap-3 md:gap-1 w-full">

                                                        <div class="flex flex-row justify-between w-full">
                                                            <div class="flex flex-row gap-2">
                                                                @if( !empty($val->type->name))
                                                                    @if($val->type->name == 'Starting Goalie')
                                                                        <img class="w-8" src="{{ asset('/images/nhl-player-news/starting_goalie_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Line Change')
                                                                        <img class="w-8" src="{{ asset('/images/nhl-player-news/line_change_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Injury')
                                                                        <img class="w-8" src="{{ asset('/images/nhl-player-news/injury_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @else
                                                                        <img class="w-8" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @endif
                                                                @endif
                                                            </div>

                                                            {{--<div class="flex items-center">--}}
                                                                {{--@if(isset($val->metafields->goalie_status) )--}}
                                                                    {{--@if($val->metafields->goalie_status->name == 'Expected')--}}
                                                                        {{--<div class=" bg-yellow-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                                    {{--@elseif($val->metafields->goalie_status->name == 'Confirmed')--}}
                                                                        {{--<div class=" bg-green-500  font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                                    {{--@else--}}
                                                                        {{--<div class=" bg-blue-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                                    {{--@endif--}}
                                                                {{--@endif--}}
                                                            {{--</div>--}}
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <h1 class=" text-base font-extrabold"> {{$val->player->full_name}}</h1>
                                                            <p class="text-xs font-semibold">{{$val->team->name}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>

                                                    <div class="mx-2">
                                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[10px] font-black mb-1">{{$val->title}}</p>
                                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[8px] font-semibold">{{ !empty($val->description) ? $val->description : ''}}</p>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="flex flex-row items-center justify-between ">
                                                <div  class="flex flex-row items-center ">

                                                    <a href="{{$val->source->url}}">
                                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-12 md::h-12" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    </a>

                                                    <div>
                                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target=”_blank”  href="{{$val->source->url}}">{{$val->source->name}}</a>
                                                        <p class="text-[10px] font-bold">{{$val->source->retrieved_at->datetime}}</p>
                                                    </div>

                                                </div>
                                                <div class="">
                                                    {{--bg-[#38b6ff] font-medium text-white text-base  mx-2 dark:text-blue-500 hover:underline p-2 rounded-md--}}
                                                    <a href="#" class="" >
                                                        <img class="w-12 mx-2  p-2" src="{{ asset('/images/footer/share_icon.png') }}" />
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                    @endif
                                @endforeach


                            </div>
                        </div>

                        @if( $player_news_count > 6)
                            <div class="w-full flex justify-center my-5  ">
                                <a href="" class="text-[#1d9bf0] font-bold xl:text-sm text-[13px]">View All NHL News</a>
                            </div>
                        @endif
                    </div>



                    {{--Starting goailies w/ API--}}
                    <div>
                        <div class="flex flex-col  ">
                            <div class="flex items-center">
                                <h1 class="font-extrabold text-2xl text-black pt-5">NHL Starting Goalies</h1>
                            </div>
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                                @php
                                    $starting_goalies_count = 0
                                @endphp

                                @foreach($player_news->data as $key=>$val)
                                    @if($val->type->slug == 'starting-goalie')

                                        @php
                                            $starting_goalies_count++
                                        @endphp

                                        <div class="flex flex-col gap-5 w-[32%] rounded-xl justify-between bg-[#eeeeee] border border-[#38b6ff] relative mt-5  card-container {{ ($starting_goalies_count  > 6) ? 'hidden' : '' }}" >


                                            <div>
                                                <div class="flex mx-4 mt-5 gap-4 pb-5">
                                                    <img class="lg:w-20 lg:h-20 md:w-13 md:h-[3rem]" src="{{$val->player->images->uniform}}">
                                                    <div class="flex flex-col  xl:gap-3 lg:gap-3 md:gap-1 w-full">

                                                        <div class="flex flex-row justify-between w-full">
                                                            <div class="flex flex-row gap-2">
                                                                @if( !empty($val->type->name))
                                                                    @if($val->type->name == 'Starting Goalie')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/starting_goalie_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Line Change')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/line_change_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Injury')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/injury_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @else
                                                                        <img class="w-10" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @endif
                                                                @endif
                                                            </div>

                                                            {{--<div class="flex items-center">--}}
                                                            {{--@if(isset($val->metafields->goalie_status) )--}}
                                                            {{--@if($val->metafields->goalie_status->name == 'Expected')--}}
                                                            {{--<div class=" bg-yellow-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@elseif($val->metafields->goalie_status->name == 'Confirmed')--}}
                                                            {{--<div class=" bg-green-500  font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@else--}}
                                                            {{--<div class=" bg-blue-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@endif--}}
                                                            {{--@endif--}}
                                                            {{--</div>--}}
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <h1 class=" text-base font-extrabold"> {{$val->player->full_name}}</h1>
                                                            <p class="text-xs font-semibold">{{$val->team->name}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>

                                                    <div class="mx-2">
                                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[10px] font-black mb-1">{{$val->title}}</p>
                                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[8px] font-semibold">{{ !empty($val->description) ? $val->description : ''}}</p>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="flex flex-row items-center justify-between ">
                                                <div  class="flex flex-row items-center ">

                                                    <a href="{{$val->source->url}}">
                                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-12 md::h-12" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    </a>

                                                    <div>
                                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target=”_blank”  href="{{$val->source->url}}">{{$val->source->name}}</a>
                                                        <p class="text-[10px] font-bold">{{$val->source->retrieved_at->datetime}}</p>
                                                    </div>

                                                </div>
                                                <div class="">
                                                    {{--bg-[#38b6ff] font-medium text-white text-base  mx-2 dark:text-blue-500 hover:underline p-2 rounded-md--}}
                                                    <a href="#" class="" >
                                                        <img class="w-12 mx-2  p-2" src="{{ asset('/images/footer/share_icon.png') }}" />
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                    @endif
                                @endforeach


                            </div>
                        </div>

                        @if( $starting_goalies_count > 6)
                            <div class="w-full flex justify-center my-5  ">
                                <a href="" class="text-[#1d9bf0] font-bold xl:text-sm text-[13px]">View All NHL News</a>
                            </div>
                        @endif
                    </div>






                    {{--Starting goailies w/ API--}}
                    <div>
                        <div class="flex flex-col  ">
                            <div class="flex items-center">
                                <h1 class="font-extrabold text-2xl text-black pt-5">NHL Line Combinations</h1>
                            </div>
                            <div class="flex w-full md:flex-row flex-wrap justify-center xl:justify-evenly lg:justify-between md:justify-between mb-3 ">

                                @php
                                    $line_combinations_count = 0
                                @endphp

                                {{--{{ ($article_injury_count  > 6) ? 'hidden' : '' }}--}}

                                @foreach($goalies->data as $key=>$val)
                                    @if(isset($val->metafields->goalie_status))

                                        @php
                                            $line_combinations_count++
                                        @endphp

                                        <div class="flex flex-col gap-5 w-[32%] rounded-xl justify-between bg-[#eeeeee] border border-[#38b6ff] relative mt-5  card-container {{ ($line_combinations_count  > 6) ? 'hidden' : '' }}" >


                                            <div>
                                                <div class="flex mx-4 mt-5 gap-4 border-b-2 pb-5">
                                                    <img class="lg:w-20 lg:h-20 md:w-13 md:h-[3rem]" src="{{$val->player->images->uniform}}">
                                                    <div class="flex flex-col  xl:gap-3 lg:gap-3 md:gap-1 w-full">

                                                        <div class="flex flex-row justify-between w-full">
                                                            <div class="flex flex-row gap-2">
                                                                @if( !empty($val->type->name))
                                                                    @if($val->type->name == 'Starting Goalie')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/starting_goalie_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Line Change')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/line_change_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @elseif($val->type->name == 'Injury')
                                                                        <img class="w-10" src="{{ asset('/images/nhl-player-news/injury_icon.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @else
                                                                        <img class="w-10" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                                        <button class="btn btn-primary text-[11px] font-bold"> {{ !empty($val->type->name) ? $val->type->name : ''}} </button>
                                                                    @endif
                                                                @endif
                                                            </div>

                                                            {{--<div class="flex items-center">--}}
                                                            {{--@if(isset($val->metafields->goalie_status) )--}}
                                                            {{--@if($val->metafields->goalie_status->name == 'Expected')--}}
                                                            {{--<div class=" bg-yellow-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@elseif($val->metafields->goalie_status->name == 'Confirmed')--}}
                                                            {{--<div class=" bg-green-500  font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@else--}}
                                                            {{--<div class=" bg-blue-500 font-medium text-white text-base  px-2 rounded-md">{{ (isset($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name : " ")  }} </div>--}}
                                                            {{--@endif--}}
                                                            {{--@endif--}}
                                                            {{--</div>--}}
                                                        </div>

                                                        <div class="flex flex-col">
                                                            <h1 class=" text-base font-extrabold"> {{$val->player->full_name}}</h1>
                                                            <p class="text-xs font-semibold">{{$val->team->name}}</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>

                                                    <div class="mx-2">
                                                        <p class="xl:text-[14px] lg:text-[13px] md:text-[10px] font-black mb-1">{{$val->title}}</p>
                                                        <p class="xl:text-[11px] lg:text-[10px] md:text-[8px] font-semibold">{{ !empty($val->description) ? $val->description : ''}}</p>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="flex flex-row items-center justify-between ">
                                                <div  class="flex flex-row items-center ">

                                                    <a href="{{$val->source->url}}">
                                                        <img class="xl:w-14 xl:h-14 lg:w-14 lg:h-14 md:w-12 md::h-12" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                                    </a>

                                                    <div>
                                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target=”_blank”  href="{{$val->source->url}}">{{$val->source->name}}</a>
                                                        <p class="text-[10px] font-bold">{{$val->source->retrieved_at->datetime}}</p>
                                                    </div>

                                                </div>
                                                <div class="">
                                                    {{--bg-[#38b6ff] font-medium text-white text-base  mx-2 dark:text-blue-500 hover:underline p-2 rounded-md--}}
                                                    <a href="#" class="" >
                                                        <img class="w-12 mx-2  p-2" src="{{ asset('/images/footer/share_icon.png') }}" />
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                    @endif
                                @endforeach


                            </div>
                        </div>


                        @if( $line_combinations_count > 6)
                            <div class="w-full flex justify-center my-5  ">
                                <a href="" class="text-[#1d9bf0] font-bold xl:text-sm text-[13px]">View All NHL News</a>
                            </div>
                        @endif


                    </div>










                    </div>





















                        <div class="hidden">
                            <div class="flex flex-row w-full justify-center gap-24 my-5">
                                <img class="xl:w-96 lg:w-80 md:w-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                                <img class="xl:w-96 lg:w-80 md:w-64" src="{{ asset('/images/menu-icon/adds3.png') }}">
                            </div>
                            <div class="flex items-center ">
                                <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-2xl font-bold pt-5 pb-5 ">
                                    Latest Articles
                                </h1>
                            </div>
                            <div class="flex flex-row justify-center xl:gap-3 lg:gap-3 md:gap-2">
                            @foreach($contentPosts as $key=>$item)
                                {{--{{ $item->category->slug }}--}}
                                @if($item->category->slug === 'morning-skate')
                                    <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white relative">
                                        <div class="gap-1 w-10/12 mt-4">
                                            <div class="flex flex-row items-center gap-2">
                                                <img class="xl:w-8 lg:w-6 md:w-6" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                                <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                            </div>
                                            <div class="flex justify-center">
                                            <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                            </div>
                                            <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                            <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                        </div>
                                        <div class="w-full ">
                                            <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px] absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                @endif
                                @if($item->category->slug === 'top-stacks')
                                    <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white relative">
                                        <div class="gap-1 w-10/12 mt-4">
                                            <div class="flex flex-row items-center gap-2">
                                                <img class="xl:w-8 lg:w-6 md:w-6" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                                <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                            </div>
                                            <div class="flex justify-center">
                                            <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                            </div>                                    <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                            <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                        </div>
                                        <div class=" w-full ">
                                            <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px]  absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                @endif
                                @if($item->category->slug === 'props-and-odds')
                                    <div class="xl:w-[18rem] lg:w-[15rem] md:w-[12rem] xl:h-80 lg:h-[15rem] md:h-[14rem] border border-[#38b6ff]  rounded-xl flex flex-col items-center bg-white  relative">
                                        <div class="gap-1 w-10/12 mt-4">
                                            <div class="flex flex-row items-center gap-2">
                                                <div class="xl:w-7 xl:h-7 w-5 h-5 bg-green-600 rounded-full flex justify-center items-center">
                                                    <p class="xl:text-xl lg:text-lg font-bold text-white">$</p>
                                                </div>
                                                <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                            </div>
                                            <div class="flex justify-center">
                                            <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[10rem] md:w-[9rem]">
                                            </div>
                                            <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->title}}</p>
                                            <p class="xl:text-[13px] lg:text-[13px] md:text-[11px] xl:font-extrabold font-bold">{{$item->published_at->datetime}}</p>
                                        </div>
                                        <div class="w-full ">
                                            <img class="xl:w-[21px] xl:h-[25px] lg:w-[21px] lg:h-[25px] md:w-[17px] md:h-[18px]  absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                            <div class="w-full flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold xl:text-sm  text-[13px]">View All NHL Articles</a>
                            </div>
                            <div class="flex items-center ">
                                <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                    Projections for October 12, 2023
                                </h1>
                            </div>
                            <table class="">
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Player</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Pos </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Salary </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Team </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Opp </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Time </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Win % </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">ML </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Q/U </td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Team Goal </td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Opp Goal </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Start/line </td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">PP Unit </td>
                                    <td class="flex justify-center items-center w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold ">Projections </td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">John Kingberg</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">D</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">4000</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">MIN</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">DAL</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">9:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">40.0</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">+150</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">5.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.45</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.05</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold "> </td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Nick Bjugstad</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">C</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3400</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">EDM</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">LAK</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">10:00 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">66.10</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-159</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.84</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.66</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7.27</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Shayne Gostisbehere</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">D</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">4400</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">CAR</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">NYI</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:00 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">62.30</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-165</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">5.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.12</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.38</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7.04</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Taylor Hail</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">W</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">4400</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7.22</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">David Krejci</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">C</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">4500</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">9.46</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">David Pastrnak</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">W</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">9600</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">25.58</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Pavel Zacha</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">C</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">4000</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">9.72</td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Patrice Bergeron</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">C</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6100</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold "> </td>
                                </tr>
                                <tr class="flex flex-row justify-between h-[1.5rem] ">
                                    <td class="flex justify-start items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold">Jake Debrusk</td>
                                    <td class="flex justify-center items-center w-[40%]  border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">W</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">5700</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">BOS</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">FLA</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">7:30 pm</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">69.20</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-225</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">6.5</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">3.06</td>
                                    <td class="flex justify-center items-center w-[60%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">2.54</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center w-[40%] border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">-</td>
                                    <td class="flex justify-center items-center border  w-full border border-slate-200 xl:text-[11px] lg:text-[9px] md:text-[7px] font-semibold ">16.01</td>
                                </tr>
                            </table>
                            <div class="w-full flex justify-center my-5">
                                <a href="" class="text-[#1d9bf0] font-bold xl:text-sm text-[13px]">Full NHL Projections</a>
                            </div>
                            <div class="flex justify-center my-5">
                                <img class="w-[70%] h-80" src="{{ asset('/images/menu-icon/adds-new1.png') }}">
                            </div>
                        </div>



                    <div class="flex flex-col w-full  mt-10 hidden">  
                        <div class="flex flex-col gap-9">
                            <div class="flex items-center">
                                <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                    NHL Line Combinations
                                </h1>
                            </div>
                            <ul class="w-full flex flex-col gap-5">
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-between">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                                <li class="flex flex-row justify-evenly">
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                    <button class="flex flex-col justify-end w-[17rem] h-[6rem] items-center border border-black rounded-xl bg-white">
                                        <div class="flex flex-row items-center w-auto">
                                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt="">
                                            <h1 class="text-lg font-bold">Pittsburgh Penguins</h1>
                                        </div>
                                        <p class="text-sm font-bold mb-2">Line Combinations</p>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>                
                <!-- </div> -->
            </div>   
            <!-- Articles  -->
            <div class=" flex flex-col xl:w-64 lg:w-52 md:w-52 hidden">
                <div class="flex flex-col gap-5 mt-9 ">
                    <div class="flex justify-center w-full rounded py-2  ">
                        <h1 class="w-full bg-[#38b6ff] py-1.5 rounded-md text-base text-center font-medium">Starting Goalies ddddddd</h1>
                    </div>
                    <div id="" class="flex flex-col gap-4 w-full">
                    @foreach($goalies->data as $key=>$val)
                        @if(isset($val->metafields->goalie_status))
                            @if($val->metafields->goalie_status->name === 'Confirmed')  
                                <div class="flex flex-row items-center gap-2 w-full" style=" ">   
                                    <img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{$val->player->images->uniform}}" alt="">    
                                    <div class="flex flex-col">
                                        <div class="flex flex-col justify-center">
                                            <p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">
                                            {{$val->player->full_name}} 
                                            </p>
                                        </div>
                                        <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">{{$val->title}}</p>
                                        <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">{{$val->published_at->datetime}}</p>
                                    </div>
                                </div>
                            @endif
                        @endif     
                    @endforeach
                        <!-- <div class="flex flex-row items-center gap-2 w-full" style=" ">   
                            <img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">    
                            <div class="flex flex-col">
                                <div class="flex flex-col justify-center">
                                    <p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">
                                        Linus Ullmark - BOS
                                    </p>
                                </div>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">Ullmark was the first goalie off the ice</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">30 min ago</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-2 w-full" style=" ">   
                            <img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">    
                            <div class="flex flex-col">
                                <div class="flex flex-col justify-center">
                                    <p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">
                                        Linus Ullmark - BOS
                                    </p>
                                </div>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">Ullmark was the first goalie off the ice</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">30 min ago</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-2 w-full" style=" ">   
                            <img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" alt="">    
                            <div class="flex flex-col">
                                <div class="flex flex-col justify-center">
                                    <p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">
                                        Linus Ullmark - BOS
                                    </p>
                                </div>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">Ullmark was the first goalie off the ice</p>
                                <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">30 min ago</p>
                            </div>
                        </div>  -->
                        <div class="w-full flex justify-center">
                            <a class="font-semibold xl:text-sm lg:text-sm md:text-[8px] text-[#38b6ff]" href="{{url('nhl/starting-goaliesv2')}}">View Today's Starting Goalies </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img class="w-10/12" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>  
                    <div class="flex justify-center border w-full rounded py-2 bg-[#38b6ff]">
                        <h1 class="font-bold">Line Combinations</h1>
                    </div>
                    <div id="" class="flex flex-col gap-4 w-full">
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Toronto Maple Leafs
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[12px]">
                                        Edmonton Oilers
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Boston Bruins
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        ST.Louis Blues
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Vegas Golden Knights
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-center">
                            <a class="font-semibold xl:text-sm lg:text-sm md:text-[8px] text-[#38b6ff]" href="{{url('nhl/line-combinations')}}">View NHL Line Combinations</a>
                        </div>
                    </div>
                </div>  
                <div class="flex flex-row relative xl:justify-between lg:justify-center hidden">  
                    <div class="flex flex-col xl:w-[67%] lg:w-auto ">  
                        <div class="flex flex-col">
                            <div class="flex items-center">
                                <img class="w-12 h-12" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">
                                <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                    NHL Player News
                                </h1>
                            </div>
                            <div class="flex flex-row w-full justify-between mb-3">
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p> 
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                            
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full justify-between">
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                            
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3 w-[32%] h-[21rem] border border-black  rounded-xl ">
                                    <!-- <img class="w-[3rem] " src="{{ asset('/images/menu-icon/player-uniform5.png') }}"> -->
                                    <div class="flex m-1 mt-5 ">
                                        <img class="lg:w-20 lg:h-24 md:w-16 md:h-20" src="{{ asset('/images/menu-icon/player-uniform5.png') }}">
                                        <div class="ml-2">
                                            <div class="flex flex-row gap-2">
                                                <img class="w-[15px] h-[15px]  " src="{{ asset('/images/menu-icon/injury icon.png') }}">
                                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] font-bold">Injury</p>
                                            </div>
                                            <h1 class=" text-xl font-extrabold">Pascal Francouz</h1>
                                            <p class="text-[10px] font-semibold">Pittsburgh Penguins - D</p>
                                            
                                        </div>
                                    </div>
                                    <div class=" ml-1">
                                        <p class="xl:text-[14px] lg:text-[14px] md:text-[11px] font-bold mb-2">Kris Letang out indefinitely after suffering stroke</p>
                                        <p class="text-[9px] font-semibold">The Pittsburgh Penguins have announce that defenseman Kris Letang will be out indefinitely after sufffering a stroke. The team said Letang is 'not experiencing any lasting effect"and will continue to undergo test over the next few day.</p>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                        <div>
                                            <h3 class="text-[13px] font-extrabold">Vince Marcaroni</h3>
                                            <p class="text-[9px] font-bold">11/30/2012 | 12:59 pm EST</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <a href="" class="text-black font-semibold flex justify-end mr-[13px]">see all</a>
                            </div>
                        </div>      
                        <div class="flex flex-row justify-center">
                            <div class="flex flex-col">
                                <div class="flex items-center ">
                                    <img class="w-14 h-14" src="{{ asset('/images/home-page/graph-logo.png') }}">
                                    <h1 class="text-2xl font-bold pt-5 pb-5 ml-5">
                                        Projections
                                    </h1>
                                </div>
                                <div class="flex flex-row overflow-x-clip mx-1 ">
                                    <table class="tbl table-fixed flex flex-row ">
                                        <tr>
                                            <th class="relative ">First
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1 text-[#8bbf9b]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th >
                                            <th class="relative">Last
                                            <div class="absolute right-0 bottom-1  ">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="relative">Pos
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th >
                                            <th class="relative">Team
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="relative">Opp
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="relative" style="width:9%;">Start/line
                                            <div class="absolute right-px bottom-1">
                                                    <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-4 h-4 relative bottom-px right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="relative" style="width:8%;">PP Unit 
                                            <!-- <div class="absolute right-0 bottom-1">
                                                    <img class="w-2 h-1 relative top-3 rotate-[88deg]" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-4 h-4 relative bottom-1 right-1"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div> -->
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblGoals relative">Goals
                                                <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblWin relative">Win%
                                                <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblSalary relative" style=" width:9%; font-size:14px;">DK Salary
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblProj relative" style=" width:9%; font-size:14px;">DK PROJ
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblSalary2 relative" style=" width:9%; font-size:14px;">FD Salary
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            <th class="tblProj2 relative" style=" width:9%; font-size:14px;">FD PROJ
                                            <div class="absolute right-0 bottom-1">
                                                    <img class="w-3 h-1 relative top-1" src="{{ asset('/images/home-page/minus-removebg-preview.png') }}">
                                                    <img class="w-3 h-3"  src="{{ asset('/images/home-page/downward-arrow__1_-removebg-preview.png') }}">
                                            </div>
                                            </th>
                                            
                                        </tr>
                                        <tr>
                                            <td>Auston</td>
                                            <td>Mathew</td>
                                            <td>C</td>
                                            <td>TQR</td>
                                            <td>@ DET</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.73</td>
                                            <td class="tblWin">63.2</td>
                                            <td class="tblSalary">9200</td>
                                            <td class="tblProj">29.9</td>
                                            <td class="tblSalary2">10200</td>
                                            <td class="tblProj2">34.99</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Jonathan</td>
                                            <td>Huberdaeu</td>
                                            <td >W</td>
                                            <td>FLA</td>
                                            <td>vs. EDM</td>
                                            <td class="bg-[#ffd966] text-center">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">4.19</td>
                                            <td class="tblWin">67.5</td>
                                            <td class="tblSalary">7100</td>
                                            <td class="tblProj">25.39</td>
                                            <td class="tblSalary2">8800</td>
                                            <td class="tblProj2">32.65</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Alexander</td>
                                            <td>Barkov</td>
                                            <td >C</td>
                                            <td>FLA</td>
                                            <td>vs. EDM</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">4.19</td>
                                            <td class="tblWin">67.5</td>
                                            <td class="tblSalary">7500</td>
                                            <td class="tblProj">25.15</td>
                                            <td class="tblSalary2">9900</td>
                                            <td class="tblProj2">30.62</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Nathan</td>
                                            <td>Mackinnon</td>
                                            <td >C</td>
                                            <td>COL</td>
                                            <td>@ JVK</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.27</td>
                                            <td class="tblWin">58.3</td>
                                            <td class="tblSalary">8700</td>
                                            <td class="tblProj">23.68</td>
                                            <td class="tblSalary2">9800</td>
                                            <td class="tblProj2">27.18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Charlie</td>
                                            <td>McAvoy</td>
                                            <td >D</td>
                                            <td>BOS</td>
                                            <td>@ SJ</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.05</td>
                                            <td class="tblWin">60</td>
                                            <td class="tblSalary">5900</td>
                                            <td class="tblProj">10.44</td>
                                            <td class="tblSalary2">5400</td>
                                            <td class="tblProj2">12.52</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Sam</td>
                                            <td>Reinhart</td>
                                            <td >W</td>
                                            <td>FLA</td>
                                            <td>vs.EDM</td>
                                            <td class="bg-[#e06666] text-center">3</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">4.19</td>
                                            <td class="tblWin">67.5</td>
                                            <td class="tblSalary">5000</td>
                                            <td class="tblProj">21.26</td>
                                            <td class="tblSalary2">6500</td>
                                            <td class="tblProj2">26.79</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>Mikko</td>
                                            <td>Rantanen</td>
                                            <td >W</td>
                                            <td>COL</td>
                                            <td>@ VGK</td>
                                            <td class="tblsLine">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.27</td>
                                            <td class="tblWin">58.3</td>
                                            <td class="tblSalary">7300</td>
                                            <td class="tblProj">20.72</td>
                                            <td class="tblSalary2">9100</td>
                                            <td class="tblProj2">25.33</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Sam</td>
                                            <td>Bennet</td>
                                            <td >C</td>
                                            <td>FLA</td>
                                            <td>vs.EDM</td>
                                            <td class="bg-[#ffd966] text-center">2</td>
                                            <td class="text-center">2</td>
                                            <td class="tblGoals">4.19</td>
                                            <td class="tblGoals">67.5</td>
                                            <td class="tblSalary">5000</td>
                                            <td class="tblProj">20.18</td>
                                            <td class="tblSalary2">6800</td>
                                            <td class="tblProj2">23.37</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Matt</td>
                                            <td>Grzelcyk</td>
                                            <td >D</td>
                                            <td>BOS</td>
                                            <td>@ SJ</td>
                                            <td class="bg-[#ffd966] text-center">1</td>
                                            <td class="text-center">2</td>
                                            <td class="tblGoals">3.05</td>
                                            <td class="tblGoals">60</td>
                                            <td class="tblSalary">4500</td>
                                            <td class="tblProj">8.04</td>
                                            <td class="tblSalary2">4300</td>
                                            <td class="tblProj2">9.96</td>
                                            
                                        
                                        </tr>
                                        <tr>
                                            <td>Mitche</td>
                                            <td>Mamer</td>
                                            <td >W</td>
                                            <td>TOR</td>
                                            <td>@ DET</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.73</td>
                                            <td class="tblWin">63.2</td>
                                            <td class="tblSalary">8000</td>
                                            <td class="tblProj">19.7</td>
                                            <td class="tblSalary2">8200</td>
                                            <td class="tblProj2">24.18</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Alex</td>
                                            <td>Overchkin</td>
                                            <td >W</td>
                                            <td>WSH</td>
                                            <td>@ PHI</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.36</td>
                                            <td class="tblWin">60.8</td>
                                            <td class="tblSalary">8300</td>
                                            <td class="tblProj">18.35</td>
                                            <td class="tblSalary2">9900</td>
                                            <td class="tblProj2">21.42</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>Gaudreu</td>
                                            <td >W</td>
                                            <td>CGY</td>
                                            <td>vs. MIN</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.32</td>
                                            <td class="tblWin">59.8</td>
                                            <td class="tblSalary">7200</td>
                                            <td class="tblProj">18.34</td>
                                            <td class="tblSalary2">8400</td>
                                            <td class="tblProj2">22.28</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Nikita</td>
                                            <td>Kusherov</td>
                                            <td >W</td>
                                            <td>TB</td>
                                            <td>@ NSH</td>
                                            <td class="tblsLine">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.34</td>
                                            <td class="tblWin">60.2</td>
                                            <td class="tblSalary">8700</td>
                                            <td class="tblProj">18.33</td>
                                            <td class="tblSalary2">9800</td>
                                            <td class="tblProj2">22.87</td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>Nazem</td>
                                            <td>Kadri</td>
                                            <td >C</td>
                                            <td>COL</td>
                                            <td>@ VJK</td>
                                            <td class="bg-[#ffd966] text-center">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.27</td>
                                            <td class="tblWin">58.3</td>
                                            <td class="tblSalary">7200</td>
                                            <td class="tblProj">18.24</td>
                                            <td class="tblSalary2">9400</td>
                                            <td class="tblProj2">21.82</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>Brady</td>
                                            <td>Tkachuk</td>
                                            <td>W</td>
                                            <td>OTT</td>
                                            <td>vs. MTL</td>
                                            <td class="tblsLine">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.45</td>
                                            <td class="tblWin">36.6</td>
                                            <td class="tblSalary">6500</td>
                                            <td class="tblProj">18.1</td>
                                            <td class="tblSalary2">6800</td>
                                            <td class="tblProj2">20.41</td>
                                        
                                            
                                        </tr>
                                        <tr>
                                            <td>Gabriel</td>
                                            <td>Landeskog</td>
                                            <td >W</td>
                                            <td>COL</td>
                                            <td>@ VJK</td>
                                            <td class="bg-[#ffd966] text-center">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.27</td>
                                            <td class="tblWin">58.3</td>
                                            <td class="tblSalary">6400</td>
                                            <td class="tblProj">18.07</td>
                                            <td class="tblSalary2">9000</td>
                                            <td class="tblProj2">22.72</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>David</td>
                                            <td>Pastmak</td>
                                            <td >W</td>
                                            <td>BOS</td>
                                            <td>@ SJ</td>
                                            <td class="bg-[#ffd966] text-center">2</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.05</td>
                                            <td class="tblWin">60</td>
                                            <td class="tblSalary">8300</td>
                                            <td class="tblProj">18.02</td>
                                            <td class="tblSalary2">8600</td>
                                            <td class="tblProj2">20.78</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>William</td>
                                            <td>Nylander</td>
                                            <td >W</td>
                                            <td>TOR</td>
                                            <td>@ DET</td>
                                            <td class="bg-[#ffd966] text-center">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.73</td>
                                            <td class="tblWin">63.2</td>
                                            <td class="tblSalary">6100</td>
                                            <td class="tblProj">17.85</td>
                                            <td class="tblSalary2">7200</td>
                                            <td class="tblProj2">22.06</td>
                                        
                                        </tr>
                                        <tr>
                                            <td>Mathew</td>
                                            <td>Tkachuk</td>
                                            <td >W</td>
                                            <td>CGY</td>
                                            <td>vs. MIN</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.32</td>
                                            <td class="tblWin">59.8</td>
                                            <td class="tblSalary">6300</td>
                                            <td class="tblProj">17.4</td>
                                            <td class="tblSalary2">8300</td>
                                            <td class="tblProj2">21.86</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Kirill</td>
                                            <td>Kaprizov</td>
                                            <td >W</td>
                                            <td>MIN</td>
                                            <td>@ CGY</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">2.68</td>
                                            <td class="tblWin">40.2</td>
                                            <td class="tblSalary">8700</td>
                                            <td class="tblProj">17.21</td>
                                            <td class="tblSalary2">9200</td>
                                            <td class="tblProj2">21.19</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Brad</td>
                                            <td>Marchand</td>
                                            <td >W</td>
                                            <td>BOS</td>
                                            <td>@ SJ</td>
                                            <td class="tblsLine">1</td>
                                            <td class="tblUnit">1</td>
                                            <td class="tblGoals">3.05</td>
                                            <td class="tblWin">60</td>
                                            <td class="tblSalary">7500</td>
                                            <td class="tblProj">17.19</td>
                                            <td class="tblSalary2">8700</td>
                                            <td class="tblProj2">20.36</td>
                                        
                                        </tr>

                                    </table>
                                </div>
                                <div class="relative">
                                    <a href="" class="text-black font-semibold flex justify-end mr-2">see all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class=" flex items-end xl:block lg:hidden md:hidden">
                        <img class="" src="{{ asset('/images/menu-icon/adds5.png') }}">
                    </div>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile design -->
    <!-- New update design -->
    <div class="w-full smm-block hidden">   
        <div class="flex flex-col items-center py-2 mx-2">
            <img class="w-full my-3" src="{{ asset('/images/menu-icon/adds_header.png') }}"> 
            <div class="flex flex-row w-full justify-between gap-2.5">
                <a href="{{url('nhl/starting-goalies')}}" class="h-[12rem] smm-h-[9rem] bg-[#333333] w-full flex flex-col items-center justify-center text-center rounded-lg gap-2 p-3">
                    <h1 class="text-2xl font-bold text-white">Starting Goalies</h1>
                    <img class="w-[44%]" src="{{ asset('/images/menu-icon/starting-goalie.png') }}" alt="">
                </a>
                <a href="{{url('nhl/line-combos')}}" class="h-[12rem] smm-h-[9rem] bg-[#333333] w-full flex flex-col items-center justify-center text-center  rounded-lg gap-2 p-3">
                    <h1 class=" text-2xl font-bold text-white">Line Combinations</h1>
                    <img class="w-[44%]" src="{{ asset('/images/menu-icon/line-combinations.png') }}" alt="">
                </a>
            </div>
            <div class="flex flex-row gap-2.5 mt-2.5 hidden">
                @foreach($contentPosts as $key=>$item)
                    @if($item->category->slug === 'top-stacks')
                        <a href="" class="h-[12rem] smm-h-[9rem] bg-[#ffa100] w-full flex flex-col items-center justify-between text-center rounded-lg gap-2.5 ">
                            <h1 class="text-2xl font-bold text-white mt-2">{{$item->category->name}}</h1>
                            <img class="w-[63%]" src="{{$item->metafields->featured_image->url }}" alt="">
                        </a>
                    @endif
                    @if($item->category->slug === 'morning-skate')
                        <a href="" class="h-[12rem] smm-h-[9rem] bg-[#56aeff] w-full flex flex-col items-center justify-between text-center rounded-lg  gap-2.5 ">
                            <h1 class="text-2xl font-bold text-white mt-2">{{$item->category->name}}</h1>
                            <img class="w-[63%]" src="{{$item->metafields->featured_image->url }}" alt="">
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="w-full mt-3 hidden">
                @foreach($contentPosts as $key=>$item)
                    @if($item->category->slug === 'props-and-odds')
                        <a href="" class="h-[12rem] smm-h-[9rem] bg-[#f41823] w-full flex items-end  rounded-lg gap-2.5">
                            <div class="w-full mx-5 mt-2 flex flex-row items-start justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-9 h-9 bg-green-600 rounded-full flex justify-center items-center">
                                        <p class="text-2xl font-bold text-white">$</p>
                                    </div>
                                    <h1 class=" text-2xl font-bold text-black ">{{$item->category->name}}</h1>
                                </div>
                                <img class="w-[40%]" src="{{$item->metafields->featured_image->url }}" alt="">
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            {{--bg-[#38b6ff]--}}
            <div class="">
                <div class="flex flex-col mt-2.5 gap-1">
                    <h1 class=" bg-[#38b6ff] py-1.5 rounded-md text-base text-center font-bold">Starting Goalies</h1>
                    <div class="w-full flex flex-col  gap-5 bg-[#f4f5f4] mx-2 gap-2">
                        @foreach($goalies->data as $key=>$val)
                            @if(isset($val->metafields->goalie_status))
                                @if($val->metafields->goalie_status->name === 'Confirmed')  
                                    <div class="flex flex-row items-center gap-4 w-full mt-2">   
                                        <img class="w-[20%]" style=" " src="{{$val->player->images->uniform}}" alt="">    
                                        <div class="flex flex-col">
                                            <div class="flex flex-col justify-center">
                                                <p class="font-bold text-lg">
                                                 {{$val->player->full_name}} 
                                                </p>
                                            </div>
                                            <p class=" text-[15px] font-semibold">{{$val->title}}</p>
                                            <p class=" text-[10px] text-slate-500">{{$val->published_at->datetime}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endif     
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col mt-2.5 gap-1">
                    <h1 class=" bg-[#38b6ff] py-1.5 rounded-md text-base text-center font-bold">Player News</h1>
                    <div class="w-full flex flex-col  gap-5 bg-[#f4f5f4] mx-2  gap-2">
                        @php
                            $article_injury_count = 0; 
                        @endphp 
                        @foreach($article->data as $key=>$val)
                            @if(isset($val->league))
                                @if($val->league->slug === 'nhl')
                                    @php 
                                        $article_injury_count++ 
                                    @endphp 
                                    <div class="flex flex-row items-center gap-2 w-full mt-2" style="{{ $article_injury_count  > 7 ? 'display: none' : ''}}">   
                                        <img class=" w-[20%]" style=" " src="{{$val->player->images->uniform}}" alt="">    
                                        <div class="flex flex-col">
                                            <div class="flex flex-col justify-center">
                                                <p class="font-bold text-[15px]">
                                                {{$val->player->full_name}} 
                                                </p>
                                            </div>
                                            <p class=" text-[15px] font-semibold">{{$val->title}}</p>
                                            <p class=" text-[10px] text-slate-500">{{$val->published_at->datetime}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endif     
                        @endforeach
                    </div>
                </div>
                <img class="w-full mt-2" src="{{ asset('/images/menu-icon/adds_header.png') }}"> 
            </div>
        </div>
    </div>
   
@endsection
