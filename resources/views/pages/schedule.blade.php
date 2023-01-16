@extends('layouts.master')

@section('content')

<div class="flex flex-row justify-center relative">
    <div class="w-[65%] flex flex-col items-center">
        <div class="bg-[#202e5b] w-full h-32 flex flex-col items-center justify-center">
            <h1 class="text-white text-[28px]">NHL Weekly Schedule</h1>
            <p class="text-white">Week of January 9,2023</p>
        </div>
        <div class="bg-[#ce1126] w-full h-2"></div>
        <div class="w-[56rem] border border-black flex flex-col mt-[1rem]">
            <div class="flex flex-row justify-between ">
                <div class=" flex flex-row">
                    <button class="p-2 active:bg-[#202e5b] active:text-white border border-[#202e5b] font-bold">LOGOS</button>
                    <button class="p-2 active:bg-[#202e5b] active:text-white border border-[#202e5b] font-bold">NAMES</button>
                </div>
                <div>
                    <select class="border border-black border-2 w-[19rem] h-[41px]">
                        <option value="">Week of January 2,2023</option> 
                        <option value=""> Week of January 9, 2023</option>
                        <option value="">Week of January 16, 2023 (This Week)</option>
                        <option value="">Week of January 23, 2023</option>
                        <option value="">Week of January 30, 2023</option>
                        <option value=""> Week of February 6, 2023</option>
                        <option value=""> Week of February 13, 2023 </option>
                        <option value=""> Week of February 20, 2023</option>
                        <option value="'">Week of February 27, 2023</option>
                        <option value="">Week of March 6, 2023</option>
                        <option value="">Week of March 13, 2023</option>
                        <option value="">Week of March 20, 2023</option>
                        <option value=""> Week of March 27, 2023</option>
                        <option value=""> Week of April 3, 2023</option>
                        <option value="">Week of April 10, 2023</option>
                        <option value="">Week of April 17, 2023</option>
                        <option value="">Week of April 24, 2023</option>
                        <option value=""> Week of May 1, 2023</option>
                        <option value="">Week of May 8, 2023</option>
                        <option value=""> Week of May 15, 2023</option>
                        <option value="">Week of May 22, 2023</option>
                        <option value="">Week of May 29, 2023</option>
                        <option value="">Week of June 5, 2023</option>
                    </select>
                </div>
            </div>
            <div>
                <ul class="flex flex-row justify-between gap-0.5 text-white">
                    <li class="border border-black w-full bg-[#ce1126]"><a  href="#"><img class="fill-white w-[4rem]  py-2 px-3" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt=""></a></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 09</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 10</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 11</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 12</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 13</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 14</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#202e5b]"><h1 class="text-md font-semibold">JAN 15</h1></li>
                    <li class=" border border-black w-full bg-[#202e5b]"><a href="#"><img class="fill-white w-[4rem]  py-2 px-3" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt=""></a></li>
                </ul>
            </div>
        </div>
        

    </div>

    
    <div class="bg-red-700 w-[27%]">
        <h1 >NHL Weekly Schedule</h1>
        <p>Week of January 9,2023</p>
    </div>
</div>






@endsection
