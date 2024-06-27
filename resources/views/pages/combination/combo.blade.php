<div class="flex flex-col w-full   ">
    <div class="flex flex-row sm:justify-start justify-center">
        <div class="flex flex-row sm:w-full w-11/12">
            <div class="flex flex-row justify-center">

                <div class="relative flex items-center justify-center sm:justify-start gap-4">
                    @if(request()->segment(1) == 'nhl')
                        <div class="w-12">
                            <img class="w-auto" src="{{ asset('/images/league/' . request()->segment(1) .'.png') }}">
                        </div>
                    @elseif(request()->segment(1) == 'nba')
                        <div class="w-8">
                            <img class="w-auto" src="{{ asset('/images/league/' . request()->segment(1) .'.png') }}">
                        </div>
                    @endif


                    {{--<h1 class="lg:text-2xl md:text-base text-base font-extrabold pt-5 pb-5 " >--}}
                    <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2">
                        <div class="uppercase">{{request()->segment(1) }}</div>
                        <div>
                            @if(request()->segment(1) == 'nhl')
                                Line combinations
                            @elseif(request()->segment(1) == 'nba')
                                Starting Lineup
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{--@foreach($teams->data as $key=>$val)--}}
        <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">
            {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
            <div class=" w-full   mb-3 ">
                <div class="container-header combination-container-header-combo">

                    <div class="container-slider combination-container-slider-combo">
                        <div class="slider-wrapper combination-slider-wrapper-combo ">

                            <div  class="image-list combination-image-list-combo grid md:grid-cols-5 sm:grid-cols-4 grid-cols-6 items-center justify-center" rel="combo" id="combo" >
                                {{--style="row-gap: 30px; "--}}
                                @foreach($team_player_card as $key1 => $val)
                                    @php
                                        $team_name = str_replace('-', ' ', $key1);
                                    @endphp
                                    @if($val != '' && $val != null)
                                        <div class="  rounded-[13px] combination-image-item-combo image-item flex flex-col gap-1 items-center w-full items-center combo "  style="  object-fit: cover;">


                                            <a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{  ( !empty($key1) ? $key1 : '') }}" class="cursor-pointer sm:block hidden ">
                                                <div class="flex justify-center items-center  ">
                                                    @if(request()->segment(1) == 'epl')
                                                        <img class="md:w-44 sm:w-36 w-24 mb-2.5 px-3 " src="{{  ( !empty($val->images->uniform) ? $val->images->uniform : '' )    }}"   alt="">
                                                    @else
                                                        @foreach($teams->data as $team)
                                                            @if($team->slug == $key1)
                                                                <img  class="md:w-44 sm:w-36 w-24 mb-2.5 px-3 " src="{{  ( !empty($team->front_uniform) ? $team->front_uniform->src : '' )    }}"   alt="">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </a>
                                            <a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{  ( !empty($key1) ? $key1 : '')     }}" class="flex flex-row gap-1 cursor-pointer  w-full items-center justify-center">

                                                @foreach($teams->data as $team)
                                                    @if($team->slug == $key1)
                                                        <div class="sm:w-6 w-10 flex items-center">
                                                            <img class="w-auto" src="{{ $team->logo->src }}">
                                                        </div>

                                                    @endif
                                                @endforeach

                                                {{ ( !empty($val->full_name) ? $val->full_name : '')  }}
                                                <p class="sm:text-left text-center sm:text-sm text-xs py-0.5 bold uppercase sm:block hidden">     {{ $team_name }}    </p>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>





            </div>

        </div>
    {{--@endforeach--}}
</div>