@extends('layouts.master')

@section('content')





    <div class="flex flex-col  m-auto ">


        <div class=" text-white flex flex-row  justify-evenly  py-5 lg:w-full flex md:flex-row sm:flex=col" >
            <div class=" xl:right-40 lg:right-20  md:right-10  relative sm:z-20 smm-x-0 ">
                <div>
                    <button class="bg-red-500  p-7 lg:p-5 md:p-5 sm:p-5">
                    <div class="transform rotate-6 absolute left-2 lg:top-8 sm:top-10 smm-top-10 ">
                        <div class="arrowed">
                            <div class="arrow-prev" style="transform: rotate(222deg);"></div>
                        </div>
                    </div>
                    <p><b>PREVIOUS</b> SEP 4, 2022</p></button>
                </div>
            </div>
            <div class="sm:text-center flex items-center text-center">
                TODAY SEP 5, 2022
            </div>
            <div class=" xl:left-40 lg:left-20 md:left-10 relative z-10 ">
                <div>
                    <button class="bg-red-500 p-7 lg:px-5 lg:py-5 md:p-5 sm:p-5">
                    <div class="transform rotate-45 absolute md:right-6 md:top-7  sm:right-6 sm:top-9 smm-inset-9 smm-right-8 ">
                        <div class="arrowed">
                            <div class="arrow-next"></div>
                        </div>
                    </div>
                    <p class="mr-1"><b>NEXT</b> SEP 6, 2022</p></button>
                </div>
            </div>
        </div>
 
        <div class="flex justify-center flex-col items-center ">
            <div class="flex flex-col w-full bg-[#202e5b] justify-center items-center text-white font-bold py-2">
                <h1 class="text-2xl text-center">NASHVILLE PREDATOR @ CAROLINA HURRICANES</h1>
                <h2 class="text-xl text-center">FEB 18TH, 2022 7:00PM EST</h2>
            </div>

            <div class="flex md:flex-row sm:flex-col flew-col  sm:w-full smm-flex-col smm-w-full">

                <div class="flex md:flex-row sm:flex-col md:w-full md:justify-center md:items-center w-full" >

                    <div class="flex flex-col justify-center items-center w-full">
                        <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>



                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />


                        <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                            <div class="flex flex-row justify-center w-full relative">
                                <img  class="h-8 w-10 absolute  top-2 left-1 lg:left-4 sm:left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class=" relative top-4 lg:right-15 md:right-1 sm:right-10 text-xl font-bold ">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">

                                <img class="h-9 w-12 relative top-2 lg:right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />

                                <div class="font-bold text-xl relative top-4 lg:right-7 md:left-2 sm:left-12">$8,500</div>
                            </div>
                        </div>

                        <div class="flex flex-row bg-[#1155cc] text-white justify-center items-center md:py-4 sm:py-2 py-2 md:gap-4 sm:gap-2 gap-2 w-full">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                </div>



                <div class="flex flex-col w-full justify-center items-center" >
                    <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                    <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                    <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />


                    <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                        <div class="flex flex-row justify-center w-full relative">
                            <img  class="h-8 w-10 absolute  top-2 left-1 lg:left-4 sm:left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                            <div class=" relative top-4 lg:right-15 md:right-1 sm:right-10 text-xl font-bold ">$8,700</div>
                        </div>
                        <div class="flex flex-row justify-center w-full">

                            <img class="h-9 w-12 relative top-2 lg:right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />

                            <div class="font-bold text-xl relative top-4 lg:right-7 md:left-2 sm:left-12">$8,500</div>
                        </div>
                    </div>

                    <div class="flex flex-row bg-[#1155cc] text-white justify-center items-center md:py-4 sm:py-2 py-2 md:gap-4 sm:gap-2 gap-2 w-full">
                        <div>LINE</div>
                        <div>COMBINATIONS</div>
                        <div>MATCHUP</div>
                        <div>ODDS</div>
                    </div>
                </div>


            </div>





            <div class="flex md:flex-row sm:flex-col flew-col  sm:w-full smm-flex-col smm-w-full">

                <div class="flex md:flex-row sm:flex-col md:w-full md:justify-center md:items-center w-full" >

                    <div class="flex flex-col justify-center items-center w-full">
                        <h3 class="text-center bg-green-400 w-full font-bold text-base">CONFIRMD</h3>
                        <h3 class="font-bold text-base">JUUSE SAROS</h3>



                        <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />


                        <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                            <div class="flex flex-row justify-center w-full relative">
                                <img  class="h-8 w-10 absolute  top-2 left-1 lg:left-4 sm:left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                                <div class=" relative top-4 lg:right-15 md:right-1 sm:right-10 text-xl font-bold ">$8,700</div>
                            </div>
                            <div class="flex flex-row justify-center w-full">

                                <img class="h-9 w-12 relative top-2 lg:right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />

                                <div class="font-bold text-xl relative top-4 lg:right-7 md:left-2 sm:left-12">$8,500</div>
                            </div>
                        </div>

                        <div class="flex flex-row bg-[#1155cc] text-white justify-center items-center md:py-4 sm:py-2 py-2 md:gap-4 sm:gap-2 gap-2 w-full">
                            <div>LINE</div>
                            <div>COMBINATIONS</div>
                            <div>MATCHUP</div>
                            <div>ODDS</div>
                        </div>
                    </div>
                </div>



                <div class="flex flex-col w-full justify-center items-center" >
                    <h3 class="text-center bg-orange-400 w-full font-bold text-base">PROJECTED</h3>
                    <h3 class="font-bold text-base">PREDRIK ANDERSON</h3>
                    <img class="w-5/12" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" />


                    <div class="flex flex-row justify-between w-full py-2 relative mb-1">
                        <div class="flex flex-row justify-center w-full relative">
                            <img  class="h-8 w-10 absolute  top-2 left-1 lg:left-4 sm:left-1" src="{{ asset('/images/starting-goalies/pinpng.png') }}" />
                            <div class=" relative top-4 lg:right-15 md:right-1 sm:right-10 text-xl font-bold ">$8,700</div>
                        </div>
                        <div class="flex flex-row justify-center w-full">

                            <img class="h-9 w-12 relative top-2 lg:right-20 " src="{{ asset('/images/starting-goalies/69-691619_shield-transparent-png-blue-shield-no-background-png.png') }}" />

                            <div class="font-bold text-xl relative top-4 lg:right-7 md:left-2 sm:left-12">$8,500</div>
                        </div>
                    </div>

                    <div class="flex flex-row bg-[#1155cc] text-[white] justify-center items-center md:py-4 sm:py-2 py-2 md:gap-4 sm:gap-2 gap-2 w-full">
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
                
            </div>

           















    </div>
@endsection