@extends('layouts.master')

@section('content')

       <div class="hidden smm-block">
           <div class="flex flex-col items-center my-1 mx-1.5">
                <!-- <div class="relative flex justify-center border border-black">
                   <img class="w-2/5" src="{{ asset('/images/menu-icon/box.png') }}" alt="">
                   <a href="">
                      <img class="w-9 h-9 border border-black absolute top-0 right-0" src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                    </a>
                </div> -->
                <div class="border-2 border-black rounded-md w-full h-[57px] overflow-hidden mt-1 flex flex-row items-center justify-between">
                   <input class="border-2 border-black h-[110%] w-[319%]" type="text">
                   <a class="w-full flex justify-center" href="">
                      <img class="w-[73px]" src="{{ asset('/images/menu-icon/search.png') }}" alt="">
                   </a> 
                </div>
            </div>
            <hr>
             
            <div class="flex flex-row items-center justify-self-start my-3 gap-8 ml-5">
                <img class="w-9" src="{{ asset('/images/menu-icon/hockey_logo.png') }}" alt="">
                <p class=" font-bold ">PLAYER NEWS - John Tavores</p>
            </div>
            <div class="flex flex-col items-center gap-5">
                
                <div class="flex flex-col items-center gap-8">
                    <div class="parent border border-black w-[85%] relative">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black w-[85%] relative ">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black w-[85%] relative">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">PROJECTED</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-8">
                    <div class="parent border border-black w-[85%] relative">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black w-[85%] relative ">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black w-[85%] relative">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">PROJECTED</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-8">
                    <div class="parent border border-black w-[85%] relative">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">Line Changes</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">JOHN TAVORES</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                    <div class="parent border border-black w-[85%] relative ">
                        <div class="flex flex-row gap-3 ml-2 mt-5">
                            <div class="">
                            <img class="w-20 h-24" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/transaction icon.png') }}" class="w-[24px] stroke-[#365374] border-3 border-white rounded-[100%] ">
                                        <h1 class="text-[12px] font-extrabold ml-2 text-[#3a5776]">CONFIRMED</h1>
                                    </div>
                                </div>
                                <div>
                                    <h1 class=" text-lg font-extrabold">ILYA SANSONOV</h1>
                                    <p class="text-[10px] font-semibold">Toronto Maple Leafs - c</p>
                                </div>
                            </div>                     
                        </div>
                        <div class="m-2 gap-1 mb-5">
                            <p class="text-[14px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                            <p class="text-[11px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="rectangle">
                            <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">                     
                                <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                                <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>  
@endsection