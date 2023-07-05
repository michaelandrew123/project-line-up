@extends('layouts.master-nhl')

@section('content')
    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col block smm-hidden max-w-screen-2xl gap-2">
            <div class="w-full bg-[#1d9bf0] h-16 flex flex-row items-center gap-8 ">
                <h1 class="text-white ml-3">Contests Dashboard</h1>
                <form action="" class="border border-black">
                    <input type="date" id="" name="" class="w-[8rem]">
                </form>
               <div class="flex items-center gap-1">
                    <button class="flex items-center gap-1">
                        <img class="w-5" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                        <p class="text-white text-sm">DraftKings</p>
                    </button>
                    <img class="w-2 h-2" src="{{ asset('/images/menu-icon/icon.png') }}" alt="">
               </div>
               <div class="flex items-center gap-1">
                    <button class="flex items-center gap-1">
                        <p class="text-white text-sm">7:07 PM (5 games) Main</p>
                    </button>
                    <img class="w-2 h-2" src="{{ asset('/images/menu-icon/icon.png') }}" alt="">
               </div>
               <div class="flex items-center gap-1">
                    <button class="flex items-center gap-1">
                        <p class="text-white text-sm">$0 MLB $10k mini-MAX[150 Entry Max] (23781 entries)</p>
                    </button>
                    <img class="w-2 h-2" src="{{ asset('/images/menu-icon/icon.png') }}" alt="">
               </div>
            </div>
            <div class="w-full flex justify-center">
              <img class="w-full my-2" src="{{ asset('/images/menu-icon/table2.png') }}">
            </div>
        </div>
    </div>
@endsection