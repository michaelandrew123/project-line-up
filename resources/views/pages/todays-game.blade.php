@extends('layouts.master')

@section('content')
<!-- first group shirt -->
 <div class="mb-8 ">
      <div class="bg-[#1d9bf0] p-0.5 flex flex-row lg:justify-evenly justify-between items-end w-full">
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                <h1 class="text-black lg:text-3xl md:text-2xl  sm:text-lg text-lg font-bold mt-[7px]">Nashville <br class="lg:hidden smm-block"> Predator</h1>
            </div>
                <p class="text-black lg:text-lg text-md mb-2">Feb. 18,2022 <br class="lg:hidden md:block"> | 7:00 EST</p>
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <h1 class="text-black lg:text-3xl md:text-2xl sm:text-lg text-lg font-bold mt-[7px]">Carolina <br class="lg:hidden smm-block"> Hurricanes</h1>
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt="">
            </div>
      </div>
      <div class="">
            <div class=" flex xl:flex-non-wrap lg:flex-nowrap flex-wrap ">
                <div class=" flex-auto relative">
                    <!-- <div>
                      <p class="text-center bg-black  text-[#FFFFFF] p-3  lg:text-base md:text-base text-sm"><b>MORNING SKATE (Update July 25, 6:18am) </b>Source:</p>
                    </div> -->
                    <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                      <h2 class="text-xl font-bold">JUUSE JASON</h2>
                      <div class="flex flex-row items-center gap-[3.25rem]">
                        <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                        <p class="text-lg ">Confirmed</p>
                      </div>
                    </div>                       
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div> 
               </div>
               <div class="flex-auto relative">
                        <!-- <div>
                            <p class="text-center  bg-black  text-[#FFFFFF] p-3 lg:text-base md:text-base text-sm"><b>MORNING SKATE (Update July 25, 6:18am) </b>Source:</p>
                        </div> -->
                        <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                            <h2 class="text-xl font-bold">FRED ANDERSON</h2>
                            <div class="flex flex-row items-center gap-[3.25rem]">
                                <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                                <p>Confirmed</p>
                            </div>
                        </div>  
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div> 
               </div> 
            </div>
            <div class="bg-black text-center p-3">
                  <h2 class="text-white  lg:text-xl md:text-xl text-base">STARRING GOALIES | LINE COMBINATION | DFS PROJECTIONS | GAME ODSS</h2>
               </div>
      </div>
 </div>
 <!-- end of first shirt group -->
 <!-- second group row -->
 <div class="mb-8">
      <div class="bg-[#1d9bf0] p-0.5 flex flex-row lg:justify-evenly justify-between items-end w-full">
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                <h1 class="text-black lg:text-3xl md:text-2xl  sm:text-lg text-lg font-bold mt-[7px]">Nashville <br class="lg:hidden smm-block"> Predator</h1>
            </div>
                <p class="text-black lg:text-lg text-md mb-2">Feb. 18,2022 <br class="lg:hidden md:block"> | 7:00 EST</p>
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <h1 class="text-black lg:text-3xl md:text-2xl sm:text-lg text-lg font-bold mt-[7px]">Carolina <br class="lg:hidden smm-block"> Hurricanes</h1>
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt="">
            </div>
      </div>
      <div class="">
            <div class=" flex xl:flex-non-wrap lg:flex-nowrap flex-wrap ">
                <div class=" flex-auto relative">
                    <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                      <h2 class="text-xl font-bold">JUUSE JASON</h2>
                      <div class="flex flex-row items-center gap-[3.25rem]">
                        <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                        <p class="text-lg ">Confirmed</p>
                      </div>
                    </div>                       
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div>  
               </div>
                    <div class="flex-auto relative">
                        <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                            <h2 class="text-xl font-bold">FRED ANDERSON</h2>
                            <div class="flex flex-row items-center gap-[3.25rem]">
                                <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                                <p>Confirmed</p>
                            </div>
                        </div>  
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div> 
               </div> 
            </div>
            <div class="bg-black text-center p-3">
              <h2 class="text-white lg:text-xl md:text-xl text-base">STARRING GOALIES | LINE COMBINATION | DFS PROJECTIONS | GAME ODSS</h2>
            </div>
      </div>
 </div>
 <!-- end of second row -->
 <!-- third group row -->
 <div class="mb-8">
      <div class="bg-[#1d9bf0] p-0.5 flex flex-row lg:justify-evenly justify-between items-end w-full">
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                <h1 class="text-black lg:text-3xl md:text-2xl  sm:text-lg text-lg font-bold mt-[7px]">Nashville <br class="lg:hidden smm-block"> Predator</h1>
            </div>
                <p class="text-black lg:text-lg text-md mb-2">Feb. 18,2022 <br class="lg:hidden md:block"> | 7:00 EST</p>
            <div class="flex flex-row lg:gap-[4.75rem] gap-[2rem]">
                <h1 class="text-black lg:text-3xl md:text-2xl sm:text-lg text-lg font-bold mt-[7px]">Carolina <br class="lg:hidden smm-block"> Hurricanes</h1>
                <img class="w-20" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt="">
            </div>
      </div>
      <div class="">
            <div class=" flex xl:flex-non-wrap lg:flex-nowrap flex-wrap ">
                <div class=" flex-auto relative">
                    <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                      <h2 class="text-xl font-bold">JUUSE JASON</h2>
                      <div class="flex flex-row items-center gap-[3.25rem]">
                        <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                        <p class="text-lg ">Confirmed</p>
                      </div>
                    </div>                       
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div> 
               </div>
               <div class="flex-auto relative">
                        <div class="flex flex-row justify-center items-center gap-[6rem] bg-slate-300 p-5">
                            <h2 class="text-xl font-bold">FRED ANDERSON</h2>
                            <div class="flex flex-row items-center gap-[3.25rem]">
                                <div class="bg-green-500 w-[23px] h-[23px] rounded-full"></div>
                                <p>Confirmed</p>
                            </div>
                        </div>  
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div class=" mt-4">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                            
                        </div>
                        <div class=" mt-4">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>                        
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1 ">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-1 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-1 justify-center relative right-[0.75rem] smm-right-0">
                        <div class="">
                            <div class="grid grid-cols-3 gap-1">
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="flex flex-col xl:ml-7 lg:ml-7 md:ml-7 ml-0  mb-[15px] justify-center items-center">
                            <p class="text-lg font-semibold">Morning Skate</p>
                            <p class="text-lg  font-semibold">(July 25 6:18 am)</p>
                        </div>
                    </div> 
               </div> 
            </div>
            <div class="bg-black text-center p-3">
              <h2 class="text-white lg:text-xl md:text-xl text-base">STARRING GOALIES | LINE COMBINATION | DFS PROJECTIONS | GAME ODSS</h2>
            </div>
      </div>
 </div>
 <!-- end of third row -->
 <!-- old design -->
 <div class="hidden">
      <div class="bg-black text-center p-2 ">       
            <h1 class="text-white lg:text-4xl md:text-3xl text-2xl">Nashville Predator a Carolina Hurricanes </h1>
            <p class="text-white ">Feb. 18,2022 | 7:00 EST</p>
      </div>
      <div class="">
            <div class=" flex xl:flex-non-wrap lg:flex-nowrap flex-wrap gap-0.5">
                <div class="flex-auto">
                    <div>
                       <p class="text-center  bg-[#1d9bf0]  text-[#FFFFFF] p-3  lg:text-base md:text-base text-sm"><b>MORNING SKATE (Update July 25, 6:18am) </b>Source:</p> 
                    </div>
                    <div class=" flex flex-row justify-center items-center gap-2">
                      <h2 class="text-lg font-bold">JUUSE JASON</h2>
                      <div class="flex flex-row items-center gap-1">
                        <div class="bg-green-500 w-[1rem] h-[1rem] rounded-full"></div>
                        <p>Confirmed</p>
                      </div>
                    </div>                       
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div class=" mt-4">
                            <div class="flex flex-row justify-center items-center font-bold">
                                <p>FORWARD</p>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>                           
                        </div>
                        <div class=" mt-4">
                            <div class="text-center font-bold">
                                <p>DEFENCE</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>

                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-3 ">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-4 justify-center relative right-[4.75rem]">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                            <div class="flex flex-row justify-center items-center invisible font-bold">
                                <p>Line 2</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-center invisible font-bold">
                                <p>Pairing 2</p>
                            </div>
                        </div>
                    </div> 
               </div>
               <div class="flex-auto">
                    <div>
                        <p class="text-center bg-[#1d9bf0] text-[#FFFFFF] p-3  lg:text-base md:text-base text-sm"><b>MORNING SKATE (Update July 25, 6:18am) </b>Source:</p>
                    </div>
                       <div class=" flex flex-row justify-center items-center gap-2">
                            <h2 class="text-lg font-bold">FRED ANDERSON</h2>
                            <div class="flex flex-row items-center gap-1">
                                <div class="bg-green-500 w-[1rem] h-[1rem] rounded-full"></div>
                                <p>Confirmed</p>
                            </div>
                        </div>  
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div class=" mt-4">
                            <div class="flex flex-row justify-center items-center font-bold">
                                <p>FORWARD</p>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                            
                        </div>
                        <div class=" mt-4">
                            <div class="text-center font-bold">
                                <p>DEFENCE</p>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 flex flex-row gap-4 justify-center">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pb-2 flex flex-row gap-4 justify-center relative right-[6.75rem]">
                        <div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <!-- <div class="grid grid-cols-2 gap-3 ">
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                                <div class="p-4 smm-p-0">
                                    <h3 class="capitalize">Mctavish</h3>
                                    <img src = "{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}" class="w-16"/>
                                </div>
                            </div> -->
                        </div>
                    </div> 
               </div> 
            </div>
            <div class="bg-[#99D9D9] text-center p-3">
              <h2 class="text-[#001628]  lg:text-xl md:text-xl text-base">STARRING GOALIES | LINE COMBINATION | DFS PROJECTIONS | GAME ODSS</h2>
            </div>
      </div>
 </div>
 <!-- end of third shirt group -->
@endsection
