<div class="flex flex-col w-full  ">
    <div class="flex flex-row sm:justify-start justify-center">
        <div class="flex flex-row sm:w-full w-11/12">
            <div class="flex flex-row justify-center">

                <div class="relative flex justify-center sm:justify-start gap-2">
                    <img class="w-12 h-12  " src="{{ asset('/images/nhl.png') }}">
                    <h1 class="lg:text-2xl md:text-base text-base font-extrabold pt-5 pb-5 " >
                        NHL Line Combinations
                    </h1>
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

                            <div  class="image-list combination-image-list-combo grid md:grid-cols-5 sm:grid-cols-4 grid-cols-2 justify-center" rel="combo" id="combo" style="row-gap: 30px; ">

                                @foreach($team_player_card as $key1 => $val)


                                    @php
                                        $team_name = str_replace('-', ' ', $key1);
                                    @endphp

                                    {{--<h3> sdsdsd  ddd{{ $team_name }} {{$key1}}</h3>--}}


                                    @if($val != '' && $val != null)
                                        <div class="combination-image-item-combo image-item flex flex-col gap-2 items-center w-full items-center combo "  style="  object-fit: cover;">

                                            <a href="/nhl/line-combos/{{  ( !empty($key1) ? $key1 : '')     }}" class="cursor-pointer">
                                                <div class="">
                                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                                        @foreach($teams->data as $team)
                                                            @if($team->slug == $key1)
                                                                <img  class="md:w-44 sm:w-36 w-24" src="{{  ( !empty($team->front_uniform) ? $team->front_uniform->src : '' )    }}" class="mb-2.5 px-3 " alt="">
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/nhl/line-combos/{{  ( !empty($key1) ? $key1 : '')     }}" class="flex flex-row gap-2 cursor-pointer">

                                                @foreach($teams->data as $team)
                                                    @if($team->slug == $key1)
                                                        <div class="w-6">
                                                            <img class="w-auto" src="{{ $team->logo->src }}">
                                                        </div>

                                                    @endif
                                                @endforeach

                                                {{--{{ ( !empty($val->full_name) ? $val->full_name : '')  }}--}}
                                                <p class="text-center sm:text-sm text-xs py-0.5 bold uppercase">     {{ $team_name }}    </p>
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