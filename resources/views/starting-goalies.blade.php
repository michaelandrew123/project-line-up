@extends('layouts.master')

@section('content')

    <div class="flex flex-col  m-auto">


        <div class="bg-slate-700 text-white flex flex-row  justify-evenly items-center py-5  ">
            <div class="bg-gray-500  lg:right-40 md:right-12  relative" >
                <div>
                    <button class="bg-red-500 p-7 px-5 py-5 ">
                    <div class="transform rotate-6 absolute left-2 top-8">
                                    <div class="arrowed">
                                        <div class="arrow-prev " style="transform: rotate(222deg);"></div>
                                    </div>
                    </div>
                    
                    <b>PREVIOUS</b> SEP 4, 2022</button>
                 
                    
                </div>
            </div>
            <div>

                TODAY SEP 5, 2022
            </div>
            <div class="bg-gray-500 lg:left-40 md:left-12 relative">
                <div>
                    <button class="bg-red-500 p-7 px-8 py-5">
                    <div class="transform rotate-45 absolute right-8 top-7">
                                    <div class="arrowed">
                                        <div class="arrow-next"></div>
                                    </div>
                            
                    </div>
                    <b>NEXT</b> SEP 6, 2022</button>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-center flex-col m-auto items-center">
                <div class="flex flex-col bg-sky-600 w-full justify-center items-center text-white font-bold py-2">
                    <h1 class="text-2xl">NASHVILLE PREDATOR @ CAROLINA HURRICANES</h1>
                    <h2 class="text-xl">FEB 18TH, 2022 7:00PM EST</h2>
                </div>
                <div class="flex flex-row w-full justify-center items-center">
                    <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                    <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                </div>
                <div class="flex flex-row w-full justify-center items-center" >

                    <div class="flex flex-col w-full justify-center items-center">
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                            <div class="flex flex-row justify-center w-full">
                                <img  class="h-8 w-10 absolute top-4 left-5" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class="font-bold relative text-xl top-4 right-15">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">
                                
                                     <img class="h-9 w-12 relative top-2 right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                               
                                <div class="font-bold text-xl relative top-4 right-7">$8,500</div>
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
                        <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full  py-2 mb-1">
                            <div class="flex flex-row justify-center w-full relative">
                                <img class="h-8 w-10 absolute top-2 left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class="font-bold text-xl relative top-4 right-5">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full relative">
                                <img class="h-9 w-12 relative  top-2 right-20" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}"/>
                                <div class="font-bold text-xl relative top-4 right-7">$8,500</div>
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

            <div class="flex justify-center flex-col m-auto items-center">
                <div class="flex flex-col bg-sky-600 w-full justify-center items-center text-white font-bold py-2">
                    <h1 class="text-2xl">NASHVILLE PREDATOR @ CAROLINA HURRICANES</h1>
                    <h2 class="text-xl">FEB 18TH, 2022 7:00PM EST</h2>
                </div>
                <div class="flex flex-row w-full justify-center items-center">
                    <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                    <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                </div>
                <div class="flex flex-row w-full justify-center items-center" >

                    <div class="flex flex-col w-full justify-center items-center">
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full  py-2 mb-1">
                            <div class="flex flex-row justify-center w-full relative ">
                                <img class="h-8 w-10 absolute left-5 top-2" src="{{ asset('/images/starting-goalies/pinpng.png') }}"/>
                                <div class="font-bold text-xl relative top-4">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full ">
                                <img class="h-9 w-12 relative top-2 right-10" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                                <div class="font-bold text-xl relative top-4 right-3">$8,500</div>
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
                        <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />
                        <div class="flex flex-row justify-between w-full py-2 mb-1">
                            <div class="flex flex-row justify-center w-full  relative">
                                <img class="h-8 w-10 absolute left-1 top-2" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class="font-bold text-xl relative right-5 top-3">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">
                                <img class="h-9 w-12 relative top-2 right-20" src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />
                                <div class="font-bold text-xl relative top-4 right-7 ">$8,500</div>
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


    </div>
@endsection