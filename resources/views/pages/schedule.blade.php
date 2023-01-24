@extends('layouts.master')

@section('content')

<div class="flex flex-row justify-center relative">
    <div class="w-[72%] flex flex-col items-center">
        <div class="bg-[#1d9bf0] w-full h-32 flex flex-col items-center justify-center">
            <h1 class="text-white text-[28px]">NHL Weekly Schedule</h1>
            <p class="text-white">Week of January 9,2023</p>
        </div>
        <div class="bg-[#1d9bf0] w-full h-2"></div>
        <div class="w-[94%]  flex flex-col mt-[1rem] gap-4">
            <div class="flex flex-row justify-between ">
                <div id="LN-btn" class=" flex flex-row">
                    <button id="btn-l" class="p-2 hover:bg-[#202e5b] hover:text-white bg-[#202e5b] text-white active:text-white border border-[#202e5b] font-bold btn-ln">LOGOS</button>
                    <button id="btn-n" class="p-2 hover:bg-[#202e5b] hover:text-white active:text-white border border-[#202e5b] font-bold btn-ln">NAMES</button>
                </div>
                <div>
                    <select class=" border border-black w-[19rem] h-[41px]">
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
            <div class="flex flex-col relative ">
                <ul class="flex flex-row justify-between gap-0.5 text-white h-[3rem] sticky top-0">
                    <li class="border border-black w-full bg-[#ce1126] flex justify-center"><a  href="#"><img class=" w-[4rem]  py-2 px-3" src="{{ asset('/images/starting-goalies/arrowhead-white.png') }}" alt=""></a></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 09</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 10</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 11</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 12</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 13</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 14</h1></li>
                    <li class="flex justify-center items-center border border-black w-full bg-[#1d9bf0]"><h1 class="text-md font-medium">JAN 15</h1></li>
                    <li class=" border border-black w-full bg-[#1d9bf0] flex justify-center "><a href="#"><img class="fill-white w-[4rem]  py-2 px-3" src="{{ asset('/images/starting-goalies/arrow-clicking.png') }}" alt=""></a></li>
                </ul>
                <table id="table-1" class="">
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-slate-400 font-semibold ">2</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-25-5)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-28-8)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(33-5-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-7)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-slate-400 font-semibold ">2</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(33-5-4)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(18-18-7)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(28-14-1)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-25-5)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(33-5-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-slate-400 font-semibold ">2</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(28-14-1)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-7)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(28-14-1)</p>
                        </td>                      
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(28-14-1)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-28-8)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                             
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-7)</p>
                        </td>
                        <td class=" border-slate-200 w-full">
                            
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-28-8)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full "><a href="">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>    
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>    
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>  
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                       <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-7)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class=" border-slate-200 w-full "><a href="">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-25-5)</p>
                        </td> 
                        <td class="border-slate-200 w-full"></td>                
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>  
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>  
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td> 
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td> 
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>                
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td> 
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-25-5)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td> 
                        
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-28-8)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td> 
                        <td class="border-slate-200 w-full"></td>                
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td> 
                        
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td> 
                        <td class="border-slate-200 w-full"></td> 
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(33-5-4)</p>
                        </td>               
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                      <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                      <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-17-6)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(26-12-4)</p>
                        </td> 
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#202e5b] font-semibold ">3</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                            <p class="text-[12px]">(13-25-5)</p>
                        </td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                      <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href="#"><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(24-18-4)</p> 
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-slate-400 font-semibold ">2</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                      <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-slate-400 font-semibold ">2</p>
                        </td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="border-slate-200 w-full">
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full">
                            <a href=""><img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                            <p class="text-[12px]">(12-28-4)</p>
                        </td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        </td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="flex flex-col items-center justify-center border-slate-200 w-full "><a href="">
                            <img class="w-[3rem]" src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                            <p class="text-[12px]">(19-20-3)</p>
                        </td>
                        <td class="border-slate-200 w-full flex flex-col items-center justify-center  w-full">
                            <p class="text-2xl text-[#ce1126] font-semibold ">4</p>
                        </td>
                    </tr>  
                </table>
                <table id="table-2" class="hidden">
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]">
                         <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>                     
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>                     
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>                    
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>                     
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>                    
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class=" border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>                     
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem]  bg-[#f3f4f6]">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                    <tr class="flex justify-between h-[5rem] ">
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>                     
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                        <td class="border-slate-200 w-full"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-between border border-slate-200 w-[20%] xl:block lg:hidden relative">
        <div class="relative sticky top-0">
            <div class="w-full border border-slate-200 h-[18rem] bg-slate-400">
              <img class="w-full h-full" src="{{ asset('/images/menu-icon/adds2.png') }}">
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-white">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1> 
                <p class="text-sm">Fusce nisl neque, dictum vel tristique non, viverra laoreet est.
                Suspendisse commodo fringilla dui efficitur pulvinar. Integer faucibus, nulla facilisis tincidunt finibus, nunc nibh accumsan odio, sit amet convallis dolor massa ac enim.
                Praesent libero mauris, maximus sed fringilla eu, lobortis sit amet lectus. Praesent pulvinar semper ligula ultrices molestie. 
                </p>
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-slate-400">
              <img class="w-full h-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-white">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1> 
                <p class="text-sm">Fusce nisl neque, dictum vel tristique non, viverra laoreet est.
                Suspendisse commodo fringilla dui efficitur pulvinar. Integer faucibus, nulla facilisis tincidunt finibus, nunc nibh accumsan odio, sit amet convallis dolor massa ac enim.
                Praesent libero mauris, maximus sed fringilla eu, lobortis sit amet lectus. Praesent pulvinar semper ligula ultrices molestie. 
                </p>
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-slate-400">
              <img class="w-full h-full" src="{{ asset('/images/menu-icon/adds2.png') }}">
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-white">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1> 
                <p class="text-sm">Fusce nisl neque, dictum vel tristique non, viverra laoreet est.
                Suspendisse commodo fringilla dui efficitur pulvinar. Integer faucibus, nulla facilisis tincidunt finibus, nunc nibh accumsan odio, sit amet convallis dolor massa ac enim.
                Praesent libero mauris, maximus sed fringilla eu, lobortis sit amet lectus. Praesent pulvinar semper ligula ultrices molestie. 
                </p>
            </div>
            <div class="w-full border border-slate-200 h-[18rem] bg-slate-400">
              <img class="w-full h-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>
        </div>
        
    </div>
</div>
<div class="flex flex-row justify-center ">
  <div class=" bg-slate-800 w-[92%] flex flex-row justify-between">
     <h1 class=" text-white p-3">COPYRIGHT &#169 THE NATONAL NETWORK LTD</h1>
     <div class="flex items-center">
        <a class="text-white p-3" href="">CONTACT</a>
        <a class="text-white p-3" href="">PRIVACY POLICY</a>
     </div>
     
  </div>
    
    
</div>






@endsection
