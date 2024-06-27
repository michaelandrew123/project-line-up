<div class="flex flex-col w-full">
    <div class="flex flex-row gap-3 w-full mb-[10px] sm:mb-0">
        <div class="flex flex-row justify-between w-full sm:gap-4 gap-2 items-center">
            <div class="flex flex-row  sm:gap-4 gap-2 items-center  ">
                {{--<img class="w-9 h-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}">--}}

                <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                <div class="text-xl xl:text-lg lg:text-base md:text-sm  font-bold  font-blue flex flex-row gap-2">
                    <div class="uppercase">{{ request()->segment(1) }} Depth Charts</div>

                </div>
            </div>
            <div class=" flex justify-end  ">
                <a href="#" class="font-blue font-bold text-sm">View All</a>
            </div>

        </div>
    </div>

    <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2  ">
        <div class=" w-full   ">
            No Data Available
        </div>
    </div>
</div>