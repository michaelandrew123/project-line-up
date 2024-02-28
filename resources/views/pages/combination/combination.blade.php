<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="flex flex-row gap-4">
                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <h1 class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold"> NHL Line Combinations</h1>
            </div>
            <div class=" flex justify-center my-5 hidden">
                <a href="" class="text-[#1d9bf0] font-bold text-sm">View All NHL News</a>
            </div>
        </div>
    </div>


    {{--@foreach($teams->data as $key=>$val)--}}
        @foreach($team_players as $key=>$item)
            <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">
        {{--justify-between xl:justify-evenly lg:justify-between md:justify-between--}}
                <div class=" w-full   mb-3 ">
                    <div class="container-header combination-container-header-combo-{{$key }}">

                        <div class="container-slider combination-container-slider-combo-{{$key }}">
                            <div class="slider-wrapper combination-slider-wrapper-combo-{{$key }} ">
                                <!-- Slider controls -->
                                <button type="button" id="prev-slide" class=" slide-button combination-slide-button-combo-{{$key}} absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <div  class="image-list combination-image-list-combo-{{$key }} " rel="combo-{{$key }}" id="combo-{{$key }}">
                                    @foreach($item->slots as $key1=>$val)
                                        @if($val != '' && $val != null)
                                            <div class="combination-image-item-combo-{{$key }} image-item flex flex-col items-center w-full combo-{{$key}}"  style="  width: 210px; object-fit: cover;">
                                                <div class="">
                                                    <div class="xl:w-[200px] lg:w-[200px] md:w-[150px]">
                                                        <img src="{{  ( !empty($val->images->uniform) ? $val->images->uniform : '')    }}" class="mb-2.5 px-3 " alt="">
                                                    </div>
                                                </div>
                                                <p class="text-center text-sm py-0.5 px-4  font-bold uppercase">  {{ ( !empty($val->full_name) ? $val->full_name : '')  }}        </p>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                                <button type="button" id="next-slide" class="slide-button combination-slide-button-combo-{{$key}}  absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                            <div class="combination-slider-scrollbar-combo-{{$key }}" style="visibility: hidden">
                                <div class="scrollbar-track">
                                    <div class="combination-scrollbar-thumb-combo-{{$key }} scrollbar-thumb"></div>
                                </div>
                            </div>

                        </div>
                    </div>





                </div>

            </div>
        @endforeach
    {{--@endforeach--}}
</div>