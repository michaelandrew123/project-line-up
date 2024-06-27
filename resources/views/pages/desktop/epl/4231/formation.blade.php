<div class="rounded-[13px]" style=" background-color: {{  ( !empty($color1) ? $color1: 'gray')  }}">
    <h1 class="w-full py-2 text-base text-center font-medium" style=" color: {{  ( !empty($color2) ? $color2: 'black')  }}">Formation {{ $val->formation->slug }}</h1>
</div>

<div class="flex flex-col ">
            <div class="flex flex-row mt-4 sm:mt-10 sm:gap-3 gap-0 justify-center">
                @foreach($result as $val)
                    @if(is_object($val) && isset($val->slots->{'starter-2'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-2'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-2'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-2'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-2'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="flex flex-row mt-4 sm:mt-10 sm:gap-3 gap-0 justify-center">
                @foreach($result as $val)
                    @if(is_object($val) && isset($val->slots->{'starter-3'}))
                        <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-3'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-3'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-3'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-3'}->full_name }} </p>
                            </div>
                        </div>
                    @endif

                    @if(is_object($val) && isset($val->slots->{'starter-4'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-4'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-4'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-4'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-4'}->full_name }} </p>
                            </div>
                        </div>
                    @endif

                    @if(is_object($val) && isset($val->slots->{'starter-5'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-5'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-5'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-5'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-5'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="flex flex-row mt-4 sm:mt-10 sm:gap-3 gap-0 justify-center">

                @foreach($result as $val)
                    @if(is_object($val) && isset($val->slots->{'starter-6'}))
                        <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-6'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-6'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-6'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-6'}->full_name }} </p>
                            </div>
                        </div>
                    @endif

                    @if(is_object($val) && isset($val->slots->{'starter-7'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-7'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-7'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-7'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-7'}->full_name }} </p>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>

            <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
                @foreach($result as $val)
                    @if(is_object($val) && isset($val->slots->{'starter-8'}))
                        <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-8'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-8'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-8'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-8'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                    @if(is_object($val) && isset($val->slots->{'starter-9'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-9'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-9'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-9'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-9'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                    @if(is_object($val) && isset($val->slots->{'starter-10'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-10'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-10'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-10'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-10'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                    @if(is_object($val) && isset($val->slots->{'starter-11'}))
                    <!-- Your existing code -->
                        {{--{{ $val->slots->starter-2  }}--}}
                        <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                            <div class="">
                                <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                    <img class="nhl-images" src="{{ $val->slots->{'starter-11'}->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                                </div>
                            </div>
                            <div class="sm:hidden block">
                                <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->{'starter-11'}->first_name }} </p>
                                <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->{'starter-11'}->last_name }} </p>
                            </div>
                            <div class="sm:block hidden">
                                <p class="text-center text-sm py-0.5 px-4  font-bold capitalize"> {{ $val->slots->{'starter-11'}->full_name }} </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="flex flex-row mt-4 sm:mt-10 gap-3 justify-center">
                @if(is_object($val) && isset($val->slots->goalkeeper))
                    <!-- Your existing code -->
                    {{--{{ $val->slots->starter-2  }}--}}
                    <div class="flex flex-col items-center w-[30%] sm:gap-2 gap-0 ">
                        <div class="">
                            <div class="relative sm:h-auto h-28 sm:w-28 w-24 xl:w-32">
                                <img class="nhl-images" src="{{ $val->slots->goalkeeper->images->uniform }}" sizes=" (max-width: 768px) 50vw, (max-width: 1200p) 10vw, 50vw" alt="">
                            </div>
                        </div>
                        <div class="sm:hidden block">
                            <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->goalkeeper->first_name }} </p>
                            <p class="text-center text-xs  font-bold capitalize leading-3"> {{ $val->slots->goalkeeper->last_name }} </p>
                        </div>
                        <div class="sm:block hidden">
                            <p class="text-center text-xs   font-bold capitalize leading-3"> {{ $val->slots->goalkeeper->full_name }} </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
