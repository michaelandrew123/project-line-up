@extends('layouts.master-nhl')

@section('content')
    <div class="w-full flex flex-col items-center max-w-screen-2xl">
        <div class="w-11/12 flex flex-col gap-3">
            <div class="bg-[#38b6ff] h-20 w-full flex justify-center items-center">
                <h1 class="text-black font-bold xl:text-5xl lg:text-4xl md:text-3xl">DFS Projections October 12, 2023</h1>
            </div>
            <div class="w-full flex justify-center">
              <img class="w-7/12 my-2" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>
            <div class="flex flex-row justify-center xl:gap-3 lg:gap-2 md:gap-1.5">
                @foreach($contentPosts as $key=>$item)
                    @if($item->category->slug === 'morning-skate')
                        <div class="xl:w-[23rem] lg:w-[17rem] md:w-[15rem] xl:h-80 lg:h-80 md:h-72 border border-slate-200  rounded-xl flex flex-col items-center bg-white relative">
                            <div class="m-1 mt-4 xl:w-[15rem] lg:w-[15rem] md:w-[13rem] flex flex-col gap-1  ">
                                <div class="flex flex-row items-center gap-2 ">
                                    <img class="w-8" src="{{ asset('/images/home-page/679-6790349_espn-fantasy-hockey-logo-hd-png-download-removebg-preview.png') }}">
                                    <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                </div>
                                <img src="  {{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[16rem] md:w-[13rem]">
                                <p class="text-[12px] font-extrabold">{{$item->title}}</p>
                                <p class="text-[12px] font-extrabold">{{$item->published_at->datetime}}</p>
                            </div>
                            <div class="w-full ">
                                <img class="w-[21px] h-[25px] absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    @endif
                    @if($item->category->slug === 'top-stacks')
                        <div class="xl:w-[23rem] lg:w-[17rem] md:w-[15rem]  xl:h-80 lg:h-80 md:h-72 border border-slate-200  rounded-xl flex flex-col items-center bg-white relative">
                            <div class="m-1 mt-4 xl:w-[15rem] lg:w-[15rem] md:w-[13rem] flex flex-col gap-1 ">
                                <div class="flex flex-row items-center gap-2">
                                    <img class="w-8" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}">
                                    <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                </div>
                                <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[16rem] md:w-[13rem]">
                                <p class="text-[12px] font-extrabold">{{$item->title}}</p>
                                <p class="text-[12px] font-extrabold">{{$item->published_at->datetime}}</p>
                            </div>
                            <div class=" w-full ">
                                <img class="w-[21px] h-[25px] absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    @endif
                    @if($item->category->slug === 'props-and-odds')
                        <div class="xl:w-[23rem] lg:w-[17rem] md:w-[15rem]  xl:h-80 lg:h-80 md:h-72 border border-slate-200  rounded-xl flex flex-col items-center bg-white  relative">
                            <div class="m-1 mt-4 xl:w-[15rem] lg:w-[15rem] md:w-[13rem] flex flex-col gap-1">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-7 h-7 bg-green-600 rounded-full flex justify-center items-center">
                                        <p class="text-xl font-bold text-white">$</p>
                                    </div>
                                    <h1 class="font-extrabold">{{$item->category->name}}</h1>
                                </div>
                                <img src="{{$item->metafields->featured_image->url }}" class="xl:w-[16rem] lg:w-[16rem] md:w-[13rem]">
                                <p class="text-[12px] font-extrabold">{{$item->title}}</p>
                                <p class="text-[12px] font-extrabold">{{$item->published_at->datetime}}</p>
                            </div>
                            <div class="w-full ">
                                <img class="w-[21px] h-[25px] absolute bottom-3 right-5" src="{{ asset('/images/menu-icon/arrow-download.png') }}">
                            </div>
                        </div>
                    @endif           
                @endforeach
            </div>
            <div class="w-full flex justify-center mt-5">
              <img class="w-full my-2" src="{{ asset('/images/menu-icon/table.png') }}">
            </div>
        </div>
    </div>
@endsection
