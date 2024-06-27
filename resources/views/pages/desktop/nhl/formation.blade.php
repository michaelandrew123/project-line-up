


<div id="shirt-footer" class="sm:flex flex-col gap-2  ">
    <div class="flex flex-col gap-2 mt-0 sm:mt-0 w-full" id="forwards">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">FORWARDS</h1>
        </div>
        <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'lw1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        <div class="">
                            {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                            {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                            {{--</div>--}}


                            <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                                <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                            </div>



                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif

                    </div>
                @endif
                @if($key == 'c1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rw1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'lw2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'c2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rw2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'lw3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'c3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rw3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'lw4' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'c4' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rw4' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="h-[2px] w-full my-10 hidden mt-4 sm:mt-10"></div>
    <div class="flex flex-col w-full mt-4 sm:mt-10" id="defence">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">DEFENCE</h1>
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'ld1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%] ">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rd1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)

                @if($key == 'ld2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rd2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

            @endforeach
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)


                @if($key == 'ld3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'rd3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    <div class="  h-[2px] w-full my-10 hidden "></div>
    <div class="flex flex-col w-full mt-4 sm:mt-10" id="goalie">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">GOALIES</h1>
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'sg1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'sg2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    <div class="h-[2px] w-full my-10 hidden"></div>
    <div class="flex flex-col w-full mt-4 sm:mt-10">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 1</h1>
        </div>
        <div class="flex flex-row mt-4 sm:mt-10  gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'pp11' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'pp12' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'pp13' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

            @endforeach
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'pp14' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'pp15' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    <div class="flex flex-col w-full mt-4 sm:mt-10">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">POWER PLAY 2</h1>
        </div>
        <div class="flex flex-row  mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'pp21' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'pp22' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif

                @if($key == 'pp23' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)
                @if($key == 'pp24' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'pp25' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="bg-slate-300 h-[2px] w-full my-5 hidden"></div>
    <div class="flex flex-col w-full mt-4 sm:mt-10">
        <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
            <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">PRESS BOX </h1>
        </div>
        <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)

                @if($key == 'b1' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'b2' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'b3' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>

                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex flex-row justify-center mt-4 sm:mt-10 sm:mt-10 gap-3 justify-center">
            @foreach($result->data->slots as $key=>$item)


                @if($key == 'b4' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}

                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>


                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
                @if($key == 'b5' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                        {{--                        --}}
                    </div>
                @endif
                @if($key == 'b6' && !empty($item->images->uniform))
                    <div class="flex flex-col items-center w-[30%]">
                        {{--<div class="xl:w-[180px] lg:w-[180px] md:w-[150px]">--}}
                        {{--<img src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">--}}
                        {{--</div>--}}
                        <div class="relative h-28 w-28 xl:h-32 xl:w-32">
                            <img class="nhl-images" src="{{  ( !empty($item->images->uniform) ? $item->images->uniform : '')    }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                        </div>
                        @if(!empty($item->first_name) && !empty($item->last_name) && !empty($item->full_name))
                            @include('pages.desktop.name', ['first_name' => $item->first_name, 'last_name' => $item->last_name, 'full_name' => $item->full_name])
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <div class="flex flex-col gap-2  block sm:hidden  mt-4 sm:mt-10 ">

        <div class=" ">
            <div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: '#f5f5f5')  }}">
                <h1 class="w-full py-2 text-base text-center font-medium"  style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">TEAM NEWS</h1>
            </div>
            <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2   ">

                <input type="hidden" value="{{ '/nhl/line-combinations/'. $team_slug }}" classs=" " id="nhl-combos-tema-news">
                {{--hello world  {{ $team_slug }} {{  Request::is('nhl/line-combos/'. $team_slug ) }}--}}

                <div class=" w-full  my-5">
                    <div class="container-header nhl-container-header ">

                        <div class="container-slider nhl-container-slider">
                            <div class="slider-wrapper nhl-slider-wrapper">
                                <!-- Slider controls -->
                                <button type="button" id="prev-slide" class=" slide-button nhl-slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                                                        <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                                            </svg>
                                                            <span class="sr-only">Previous</span>
                                                        </span>
                                </button>
                                <div  class="image-list nhl-image-list">
                                    @php
                                        $team_count = 0;
                                        $nhl_count = 0;
                                        $nhl_bg_color = '';
                                        $nhl_type_icon = ''
                                    @endphp
                                    @foreach($article->data as $key=>$val)

                                        {{--@if(empty($current_name))--}}
                                        {{--@if($val->team->slug == 'anaheim-ducks')--}}
                                        {{--@php--}}
                                        {{--$team_count++--}}
                                        {{--@endphp--}}
                                        {{--<div class="flex flex-row items-start justify-evenly items-center   " style="{{ $team_count  > 10 ? 'display: none' : ''}}">--}}

                                        {{--<div class="w-1/2 text-center xl:w-48 flex justify-center ">--}}
                                        {{--<div class="relative flex flex-col items-center h-auto gap-2 w-32 {{  ( !empty($val->player->images->uniform) ? '' : 'hidden')    }} ">--}}
                                        {{--<img  class="nhl-images" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" style=" " src="{{$val->player->images->uniform}}"  alt="">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="w-1/2 text-center xl:w-48 flex flex-col justify-center">--}}

                                        {{--<p class="font-semibold text-base">{{$val->player->full_name}}</p>--}}
                                        {{--<p class="text-[12px]">{{$val->title}}</p>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--@endif--}}
                                        {{--@elseif(!empty($current_name))--}}
                                        @if($current_name == $val->team->name)
                                            @php
                                                $team_count++
                                            @endphp










                                            <div class="nhl-image-item image-item" >
                                                <div class=" card-wd bg-white rounded-[13px] ">
                                                    <div class="flex flex-col gap-4 items-center justify-center relative">


                                                        @if(Carbon\Carbon::parse($val->published_at->date)->format('Y-m-d') == \Carbon\Carbon::now()->format('Y-m-d'))

                                                            <div class="text-base absolute top-1 right-1 badge-sample">
                                                                <img class="w-10" src="{{ asset('/images/badge/new-badge.png') }}" />
                                                            </div>

                                                        @endif



                                                        <div class=" px-3 pt-5">
                                                            @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                                <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->team->front_uniform->src) ? $val->team->front_uniform->src : '')     }}">
                                                            @else
                                                                <img class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                            @endif
                                                        </div>


                                                        @if($val->type->slug == 'injury' || $val->type->slug == 'send-down' || $val->type->slug == 'suspension' || $val->type->slug == 'ruled-out' || $val->type->slug == 'healthy-scratch')
                                                            @php
                                                                $nhl_bg_color = 'bg-[#F10000]';
                                                            @endphp
                                                            @if($val->type->slug == 'injury')
                                                                @php
                                                                    $nhl_type_icon ='';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $nhl_type_icon ='';
                                                                @endphp
                                                            @endif
                                                        @elseif($val->type->slug == 'starting-goalie' || $val->type->slug == 'available' || $val->type->slug == 'call-up' || $val->type->slug == 'will-play')
                                                            @if(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'confirmed')
                                                                @php
                                                                    $nhl_type_icon ='';
                                                                    $nhl_bg_color = 'bg-[#15D869]';
                                                                @endphp
                                                            @elseif(isset($val->metafields->goalie_status) && $val->metafields->goalie_status->value == 'expected')
                                                                @php
                                                                    $nhl_type_icon ='';
                                                                    $nhl_bg_color = 'bg-[#FFCC00]';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $nhl_type_icon ='';
                                                                    $nhl_bg_color = 'bg-[#15D869]';
                                                                @endphp
                                                            @endif
                                                        @elseif($val->type->slug == 'probable')
                                                            @php
                                                                $nhl_type_icon ='';
                                                                $nhl_bg_color = 'bg-[#FFCC00]';
                                                            @endphp
                                                        @elseif($val->type->slug == 'doubtful' || $val->type->slug == 'questionable')
                                                            @php
                                                                $nhl_bg_color = 'bg-[#FE6601]';
                                                                $nhl_type_icon ='';
                                                            @endphp
                                                        @elseif($val->type->slug == 'game-time-decision')
                                                            @php
                                                                $nhl_bg_color = 'bg-[#000000]';
                                                                $nhl_type_icon ='';
                                                            @endphp
                                                        @else
                                                            @php
                                                                $nhl_bg_color = 'bg-[#38B6FF]';
                                                                $nhl_type_icon ='';
                                                            @endphp
                                                        @endif


                                                        {{--@include('pages.types.color')--}}

                                                        <div class="flex flex-row justify-center gap-3 {{ $nhl_bg_color }} p-2 text-white items-center w-full rounded-b-[13px] ">
                                                            {{--<img class="w-[15px] h-[15px]" src="{{ asset('/images/menu-icon/injury icon.png') }}">--}}

                                                            @if(!empty($nhl_type_icon))
                                                                <img class="w-[15px] h-[15px]" src="{{ asset($nhl_type_icon) }}">
                                                            @endif

                                                            <p class="text-sm font-bold" >
                                                                @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                                    {{ $val->metafields->lineup_status->name }}
                                                                @elseif(!empty($val->type->slug) && $val->type->slug == 'starting-goalie')
                                                                    {{  ( !empty($val->metafields->goalie_status->name) ? $val->metafields->goalie_status->name: '')     }}
                                                                @else
                                                                    {{--{{  ( !empty($val->type->name) ? $val->id : '')     }}--}}
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
                                                                @if(empty($val->player->full_name))
                                                                    <div class="sm:hidden flex flex-col  ">

                                                                        <div class="sm:text-base text-sm">
                                                                            {{--{{ $team->name }}--}}
                                                                            {{  ( !empty($team->location_name) ? $team->location_name : '')     }}
                                                                        </div>
                                                                        <div class="sm:text-base text-sm">
                                                                            {{  ( !empty($team->team_name) ? $team->team_name : '')     }}
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                        @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')
                                                            <h1 class="sm:text-base text-sm sm:flex hidden">
                                                                {{$val->team->name }}
                                                            </h1>
                                                        @else
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
                                                        @endif



                                                    </div>
                                                </div>
                                                <div class="">

                                                    @if(!empty($val->type->slug) && $val->type->slug == 'lineup-update')

                                                        <a href="/nhl/line-combinations/{{  ( !empty($val->team->slug) ? $val->team->slug : '')     }}" class=" card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer  "  >
                                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                            <h1 class="text-base ">
                                                                Line Combo
                                                            </h1>
                                                        </a>

                                                    @else
                                                        <div class="card-wd flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px] border border-[#d9d9d9] bg-white cursor-pointer nhl-view-news  " rel="modalNhl-{{$val->id}}" >
                                                            <img class="w-[15px] h-[15px]" src="{{ asset('/images/home-page/plus.png') }}">
                                                            <h1 class="text-base ">
                                                                view news
                                                            </h1>
                                                        </div>
                                                    @endif



                                                    <div class="h-full nhl-view-news-desc  hidden" id="nhl-{{$val->id}}">


                                                        <div  class="flex flex-col gap-2 items-start p-[12%]   bg-white h-full  justify-between text-wrap w-auto rounded-lg" >
                                                            <div class="text-sm">{{$val->description}}</div>

                                                            <div class="flex flex-col gap-2">
                                                                <div class="flex flex-row gap-2 items-center">
                                                                    <a href="{{$val->source->url}}">
                                                                        <img class="w-5" src="{{ asset('/images/twitter.png') }}">
                                                                    </a>
                                                                    <p> {{$val->source->name}}</p>
                                                                </div>


                                                                <div class="flex flex-row gap-2 text-xs">
                                                                    <div>
                                                                        {{$val->published_at->date}}
                                                                        @
                                                                        {{$val->published_at->time}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                {{--</div>--}}
                                            </div>


                                            <div class="absolute">
                                                <div class="relative z-30 hidden modalNhl {{$val->id}} ease-out duration-300" id="modalNhl-{{$val->id}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <!--
                                                      Background backdrop, show/hide based on modal state.

                                                      Entering: "ease-out duration-300"
                                                        From: "opacity-0"
                                                        To: "opacity-100"
                                                      Leaving: "ease-in duration-200"
                                                        From: "opacity-100"
                                                        To: "opacity-0"
                                                    -->
                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                                            <!--
                                                              Modal panel, show/hide based on modal state.

                                                              Entering: "ease-out duration-300"
                                                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                To: "opacity-100 translate-y-0 sm:scale-100"
                                                              Leaving: "ease-in duration-200"
                                                                From: "opacity-100 translate-y-0 sm:scale-100"
                                                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                            -->
                                                            <div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                                <div class="close-modal cursor-pointer" rel="modalNhl-{{$val->id}}"></div>


                                                                {{--<div class="relative">--}}
                                                                {{--<div   class="close close-modal" rel="modalNhl-{{$val->id}}" style="z-index: 1"> </div>--}}
                                                                {{--</div>--}}

                                                                <div class=" px-4 pb-4 pt-5 sm:p-6 sm:pb-4">

                                                                    <div class="flex flex-col gap-4 w-full h-full relative rounded-xl ">
                                                                        <div class="flex m-3 mt-5 gap-5">
                                                                            <img class="w-[150px]  " src="{{  ( !empty($val->player->images->uniform) ? $val->player->images->uniform : '')     }}">
                                                                            <div class="flex flex-col gap-3">
                                                                                <div class="flex flex-row gap-2">
                                                                                    <p class="text-sm font-bold">
                                                                                        {{  ( !empty($val->type->name) ? $val->type->name : '')     }}
                                                                                    </p>
                                                                                </div>
                                                                                <div class="flex flex-col">
                                                                                    <h1 class="text-2xl font-bold">
                                                                                        {{  ( !empty($val->player->full_name) ? $val->player->full_name : '')     }}
                                                                                    </h1>

                                                                                    @foreach($teams->data as $team)
                                                                                        @if($team->slug == $val->team->slug)
                                                                                            <p class="text-[12px] font-semibold">{{ $team->name }}</p>
                                                                                        @endif
                                                                                    @endforeach

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">
                                                                            <div class="modal-title text-sm font-bold">{{$val->title}}</div>
                                                                            <div class="text-sm">{{$val->description}}</div>
                                                                        </div>
                                                                        <div class="m-3 flex  flex-col gap-4 items-center">
                                                                            <div class="flex flex-row justify-between gap-2  w-full">
                                                                                <div  >
                                                                                    <a class="  flex flex-row items-center gap-2  " href="{{$val->source->url}}">
                                                                                        <img class="w-7 h-7" src="{{ asset('/images/twitter.png') }}">

                                                                                        <div>
                                                                                            <h3 class="text-xs font-extrabold">{{$val->source->name}}</h3>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="  flex flex-row items-center gap-2 ">
                                                                                    <a href="{{$val->source->url}}">
                                                                                        <img class="w-7 h-7" src="{{ asset('/images/6523-information-5.png') }}">
                                                                                    </a>
                                                                                    <div>
                                                                                        <p class="text-xs font-bold">{{$val->published_at->date}} | {{$val->published_at->time}}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            {{--<div class=" ">--}}
                                                                            {{--<img class="w-44" src="{{ asset('/images/projectedlineup_logo.png') }}">--}}
                                                                            {{--</div>--}}
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




                                            <div class="flex flex-row gap-4 items-start  justify-evenly items-center hidden" style="{{ $team_count  > 10 ? 'display: none' : ''}}">

                                                <div class="w-1/2 text-center xl:w-48 flex justify-center  ">
                                                    <div class="relative flex flex-col items-center h-28 w-28 {{  ( !empty($val->player->images->uniform) ? '' : 'hidden')    }} ">
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
                                        {{--@endif--}}
                                    @endforeach
                                </div>




                                <button type="button" id="next-slide" class="slide-button nhl-slide-button  absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                            <div class="nhl-slider-scrollbar" style="visibility: hidden">
                                <div class="scrollbar-track">
                                    <div class="nhl-scrollbar-thumb scrollbar-thumb"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{--@if($team_count > 3)--}}
                {{--<div>--}}
                {{--<div class="text-black text-base  font-semibold flex justify-end mr-[13px] cursor-pointer" id=" "> See all</div>--}}
                {{--</div>--}}
                {{--@endif--}}
            </div>
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