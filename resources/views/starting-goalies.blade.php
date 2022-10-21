@extends('layouts.master')

@section('content')





    <div class="flex flex-col  m-auto ">


        <div class="bg-slate-700 text-white flex flex-row  justify-evenly  py-5 lg:w-full flex md:flex-row sm:flex=col" >
            <div class="bg-gray-500  xl:right-40 lg:right-20  md:right-10  relative z-20">
                <div>
                    <button class="bg-red-500 p-7 lg:px-2 lg:py-5 px-0.5 py-4">
                    <div class="transform rotate-6 absolute left-2 sm:left-1 lg:top-8 lg:left-2 sm:top-7 top-10">
                                    <div class="arrowed">
                                        <div class="arrow-prev" style="transform: rotate(222deg);"></div>
                                    </div>
                    </div>
                    
                    <p class="ml-4 text-[14px] "><b>PREVIOUS</b> SEP 4, 2022</p></button>
                 
                    
                </div>
            </div>
            <div class="text-center ">

                <p class="text-[12px] sm:text-lg lg:text-lg">TODAY SEP 5, 2022</p>
            </div>
            <div class="bg-gray-500 xl:left-40 lg:left-20 md:left-10 relative z-10 h-12">
                <div>
                    <button class="bg-red-500 p-7 lg:px-5 lg:py-5 px-2 py-4">
                    <div class="transform rotate-45 absolute lg:right-7 lg:top-6  sm:right-6 sm:top-5 right-6 bottom-3">
                                    <div class="arrowed">
                                        <div class="arrow-next"></div>
                                    </div>
                            
                    </div>
                    <p class="lg:mr-1 mr-4 text-[14px]"><b>NEXT</b> SEP 6, 2022</p></button>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-center flex-col m-auto items-center ">
                <div class="flex flex-col w-full bg-sky-600 justify-center items-center text-white font-bold py-2">
                    <h1 class="text-2xl text-center">NASHVILLE PREDATOR @ CAROLINA HURRICANES</h1>
                    <h2 class="text-xl">FEB 18TH, 2022 7:00PM EST</h2>
                </div>
              
                
                <div class="flex flex-col md:flex-row sm:flex-col w-full justify-center items-center" >
                
                    <div class="flex flex-col w-full justify-center items-center">
                    <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                            <div class="flex flex-row justify-center w-full relative">
                                <img  class="h-8 w-10 absolute top-2 left-1 " src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class=" relative top-4 lg:right-15 md:right-1 sm:right-10 text-xl font-bold ">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">
                                
                                     <img class="h-9 w-12 relative top-2 lg:right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                               
                                <div class="font-bold text-xl relative top-4 lg:right-7 md:left-2 sm:left-12">$8,500</div>
                            </div>
                        </div>
                        <div class="flex flex-row bg-slate-700 text-white w-full justify-center items-center py-4 gap-4">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full justify-center items-center" >
                       <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                        <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full  py-2 mb-1">
                            <div class="flex flex-row justify-center w-full relative">
                                <img class="h-8 w-10 absolute top-2 left-1 " src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class="font-bold text-xl relative top-4 lg:right-5 md:right-2 ">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full relative">
                                <img class="h-9 w-12 relative  top-2 lg:right-20" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}"/>
                                <div class="font-bold text-xl relative top-4 lg:right-7 sm:left-12 md:left-2  ">$8,500</div>
                            </div>
                        </div>

                        <div class="flex flex-row bg-slate-700 text-white w-full justify-center items-center py-4 gap-4">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                </div>

            </div>


            <div class=" text-center flex flex-row items-center justify-center  m-auto md:block sm:hidden my-5">
                <img src="https://tpc.googlesyndication.com/daca_images/simgad/7715899908337629235" class="m-auto"/>
                {{--ads--}}
                {{----}}
            </div>

            <div class="flex justify-center flex-col m-auto items-center ">
                <div class="flex flex-col bg-sky-600 w-full justify-center items-center text-white font-bold py-2 ">
                    <h1 class="text-2xl">NASHVILLE PREDATOR @ CAROLINA HURRICANES</h1>
                    <h2 class="text-xl">FEB 18TH, 2022 7:00PM EST</h2>
                </div>
               
                <div class="flex flex-col md:flex-row sm:flex-col w-full justify-center items-center" >

                    <div class="flex flex-col w-full justify-center items-center">
                    <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full  py-2 mb-1">
                            <div class="flex flex-row justify-center w-full relative ">
                                <img class="h-8 w-10 absolute top-2 left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}"/>
                                <div class="font-bold text-xl relative top-4 left-2">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full ">
                                <img class="h-9 w-12 relative top-2 lg:right-10 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                                <div class="font-bold text-xl relative top-4 lg:right-3 sm:left-12 md:left-2 ">$8,500</div>
                            </div>
                        </div>
                        <div class="flex flex-row bg-slate-700 text-white w-full justify-center items-center py-4 gap-4">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full justify-center items-center" >
                     <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                        <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full py-2 mb-1">
                            <div class="flex flex-row justify-center w-full  relative">
                                <img class="h-8 w-10 absolute left-1 top-2" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class="font-bold text-xl relative lg:right-5 sm:left-2 top-4">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">
                                <img class="h-9 w-12 relative top-2 lg:right-20" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                                <div class="font-bold text-xl relative top-4 lg:right-7 sm:left-12 md:left-2 ">$8,500</div>
                            </div>
                        </div>

                        <div class="flex flex-row bg-slate-700 text-white w-full justify-center items-center py-4 gap-4">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                </div>

            </div>


    </div>
@endsection