@extends('layouts.master')

@section('content')
<div class="relative">
    <div class="xl:absolute lg:absolute relative h-2/6 xl:w-64 p-10 bg-lime-400 left-0 lg:w-24 mb-7 ">
        <h1 class="text-lg font-semibold text-center">ADDS</h1>
    </div>
            <div class="flex justify-center mb-3">
                <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex ">
                    <div class="flex">
                        <h1 class="text-white text-3xl sm:text-1xl font-bold ">NASHILLE <br> PREDATOR </h1>
                        <h1 class="text-white text-3xl sm:text-1xl font-bold xl:ml-60 lg:ml-60 md:ml-64 sm:ml-40  ">CAROLINA <br>HURRICANES</h1>
                   </div>
                    <p class="text-white  xl:text-lg lg:text-lg sm:text-sm text-xs font-bold xl:ml-20 lg:ml-20 md:ml-20 sm:ml-10 lg:mt-0 md:mt-0 sm:mt-2 ">FEB 18TH, 2022 7:00PM EST</p>
                </div>
            </div>
      <div class="flex justify-center md:flex-nowrap sm:flex-nowrap flex-wrap">
            <div class="w-96 h-5/6 border border-black relative mr-4 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-green-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                            <h1 class="xl:text-2xl sm:text-lg  font-extrabold">JUUSE SAROS</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Saros was the first gaolie off the ice  at morning skate</p>
                        <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be <br> a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
            </div>
            <div class="w-96 h-5/6 border border-black relative mb-10 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                            <h1 class="xl:text-2xl text-1xl font-extrabold">PREDRIK ANDERSON</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[13px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                              <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                       </div>
            </div>
        </div>
        <div class="xl:absolute lg:absolute md:relative h-2/6 xl:w-64 p-10 bg-lime-400 right-0 top-0 lg:w-24 mb-7">
           <h1 class=" text-lg font-semibold text-center">ADDS</h1>
        </div>
</div>
<div class="relative">
        <!-- second block -->
        <div class="xl:absolute lg:absolute relative h-2/6 xl:w-64 p-10 bg-lime-400 left-0 lg:w-24 mb-7">
          <h1 class="text-lg font-semibold text-center">ADDS</h1>
        </div>
        

    

            <div class="flex justify-center mb-3">
                <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex ">
                <h1 class="text-white text-3xl sm:text-1xl font-bold ">NASHILLE <br> PREDATOR </h1>
                    <h1 class="text-white text-3xl sm:text-1xl font-bold xl:ml-60 lg:ml-60 md:ml-64 sm:ml-40  ">CAROLINA <br>HURRICANES</h1>
                    <p class="text-white  xl:text-lg lg:text-lg sm:text-sm font-bold xl:ml-20 lg:ml-20 md:ml-20 sm:ml-10 lg:mt-0 md:mt-0 sm:mt-2 ">FEB 18TH, 2022 7:00PM EST</p>
                </div>
            </div>
          
      <div class="flex justify-center relative">
            <div class="w-96 h-5/6 border border-black relative mr-4 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-green-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                            <h1 class="xl:text-2xl text-1xl   font-extrabold">JUUSE SAROS</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Saros was the first gaolie off the ice at morning skate</p>
                        <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be <br> a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
          </div>
           <div class="w-96 h-5/6 border border-black relative mb-10 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                            <h1 class="xl:text-2xl text-1xl font-extrabold">PREDRIK ANDERSON</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[13px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                              <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                       </div>
            </div>
        </div>
        <div class="xl:absolute lg:absolute md:relative h-2/6 xl:w-64 p-10 bg-lime-400 right-0 top-0  lg:w-24 mb-7">
           <h1 class=" text-lg font-semibold text-center">ADDS</h1>
        </div>
       
        <!-- third block -->
        <div class="flex justify-center mb-3">
                <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex ">
                <h1 class="text-white text-3xl sm:text-1xl font-bold ">NASHILLE <br> PREDATOR </h1>
                    <h1 class="text-white text-3xl sm:text-1xl font-bold xl:ml-60 lg:ml-60 md:ml-64 sm:ml-40  ">CAROLINA <br>HURRICANES</h1>
                    <p class="text-white  xl:text-lg lg:text-lg sm:text-sm font-bold xl:ml-20 lg:ml-20 md:ml-20 sm:ml-10 lg:mt-0 md:mt-0 sm:mt-2 ">FEB 18TH, 2022 7:00PM EST</p>
                </div>
            </div>
          
      <div class="flex justify-center relative">
            <div class="w-96 h-5/6 border border-black relative mr-4 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-green-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                </div>
                            <h1 class="xl:text-2xl text-1xl   font-extrabold">JUUSE SAROS</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Saros was the first gaolie off the ice at morning skate</p>
                        <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be <br> a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                            <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                        </div>
          </div>
           <div class="w-96 h-5/6 border border-black relative mb-10 ">
                    <div class="flex m-3 mt-5 ">
                        <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        <div class="ml-2">
                                <div class="bg-orange-400 rounded-full w-40 flex items-center p-1">
                                    <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                    <h1 class="text-sm ml-4 text-slate-100">Projected</h1>
                                </div>
                            <h1 class="xl:text-2xl text-1xl font-extrabold">PREDRIK ANDERSON</h1>
                            <p class="text-[14px] font-extrabold">Toronto Maple Leafs</p>
                            <div class="flex mt-4">
                                <img class="w-6 h-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,700</p>
                                <img class="w-6 h-5 ml-3" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}">
                                <p class="text-[14px] font-bold ml-1">$8,500</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 mb-5 pb-5">
                        <p class="text-[16px] font-bold mb-5">Anderson was the first gaolie off the ice at morning skate</p>
                        <p class="text-[13px] font-semibold">Predrik Anderson continue to show that he is well equiped to be a number one goalie in the NHL</p>
                    </div>
                    <div class="flex items-center ml-3 pb-5">
                        <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                        <div>
                            <h3 class="font-bold">David Alter</h3>
                            <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                        </div>
                    </div>
                            
                        <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 ">
                            
                            <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left"></div>
                              <h1 class="text-xl text-[50px] absolute bottom-4 right-1 text-white">+</h1>
                       </div>
            </div>
        </div>
       
           
       
       
       
 
        
</div>
        
             
       
       
       
     
      
        













@endsection