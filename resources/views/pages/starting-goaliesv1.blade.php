@extends('layouts.master')

@section('content')


    <!-- Desktop Design -->
    <div class="flex justify-evenly lg:flex-row md:flex-col sm:flex-col smm-hidden">
            <div class="flex flex-col ">
                <img class="w-[17rem] h-[35rem] mb-[2rem]" src="{{ asset('/images/menu-icon/adds1.png') }}">
                <img class="w-[17rem] h-[185px] mb-[31px]" src="{{ asset('/images/menu-icon/adds2.png') }}">
                <img class="w-[17rem] h-[540px]" src="{{ asset('/images/menu-icon/adds4.png') }}">
            </div>
        <div class=" flex flex-col">  
            <div class="flex justify-center mb-5">
                <img class="w-10/12 h-20" src="{{ asset('/images/menu-icon/adds_header.png') }}">
            </div>  
            <h1 class="text-black text-3xl font-bold">Starting Goalies</h1>
            <div class="flex justify-center  mb-3 w-">
                <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex justify-between">
                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                    <div class="flex flex-col items-center gap-5 mb-4 justify-center">
                        <p class="text-white  xl:text-lg lg:text-lg font-bold  ">FEB 18TH, 2022 7:00PM EST</p>
                        <h1 class="text-black text-3xl font-bold ">Toronto Maple Leafs VS Calagary Flames</h1>
                    </div>
                    <img class="w-16 " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                    <!-- <h1 class="text-white text-3xl sm:text-1xl font-bold ">NASHILLE <br> PREDATOR </h1>
                    <h1 class="text-white text-3xl sm:text-1xl font-bold xl:ml-60 lg:ml-60 md:ml-64 sm:ml-40  ">CAROLINA <br>HURRICANES</h1>
                    <p class="text-white  xl:text-lg lg:text-lg sm:text-sm font-bold xl:ml-20 lg:ml-20 md:ml-20 sm:ml-10 lg:mt-0 md:mt-0 sm:mt-2 ">FEB 18TH, 2022 7:00PM EST</p> -->
                </div>
            </div>
            <div class=" ">
                <div class="flex justify-center md:flex-row sm:flex-col gap-4">
                       <div class="w-96 h-5/6 border border-black relative mb-10 ">
                            <div class="flex m-3 mt-5 ">
                                <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                        <div class="bg-green-400 bg-orange-400 rounded-full w-40 flex items-center p-1">
                                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                            <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                        </div>
                                    <h1 class="xl:text-2xl text-1xl font-extrabold">JUUSE SAROS</h1>
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
                                <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be a number one goalie in the NHL</p>
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
                    <div class="flex flex-col">    
                        <div class="flex justify-center mb-3 ">
                                    <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex gap-16 items-center">
                                        <div class="flex gap-32">
                                            <div class="flex">
                                                <img class="w-16 mr-3" src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">
                                                <h1 class="text-white text-3xl sm:text-1xl font-bold ">TORONTO <br> MAPLE LEAFS </h1>
                                            </div>
                                            <div class="flex">
                                                <img class="w-16 mr-3" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                                                <h1 class="text-white text-3xl sm:text-1xl font-bold">CALGARY<br>FLAMES</h1>
                                            </div> 
                                        </div>                                                               
                                        <p class="text-white  xl:text-lg lg:text-lg sm:text-sm font-bold lg:mt-0 md:mt-0 sm:mt-2 ">Nov.7 <br> 7:00 pm </p>
                                    </div>
                                </div>
                        <div class=" ">
                        <div class="flex justify-center md:flex-row sm:flex-col  gap-4">
                            <div class="w-96 h-5/6 border border-black relative mb-10 ">
                                <div class="flex m-3 mt-5 ">
                                    <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                    <div class="ml-2">
                                            <div class="bg-green-400 bg-orange-400 rounded-full w-40 flex items-center p-1">
                                                <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                                <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                            </div>
                                        <h1 class="xl:text-2xl text-1xl font-extrabold">JUUSE SAROS</h1>
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
                                    <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be a number one goalie in the NHL</p>
                                </div>
                                <div class="flex items-center ml-3 pb-5">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] font-bold">11/07/2022 4:21pm EST</p>
                                    </div>
                                </div>  
                                <div class="w-20  overflow-hidden inline-block absolute bottom-0 right-0 "> 
                                    <div class=" h-28  bg-sky-500/100 rotate-45 transform origin-bottom-left">  
                                    </div>
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
                </div>
                <div class="flex flex-col">   
                    <div class="flex justify-center mb-3 w-">
                        <div class="bg-sky-500/100 w-[49rem] h-24 p-2 flex ">
                        <h1 class="text-white text-3xl sm:text-1xl font-bold ">NASHILLE <br> PREDATOR </h1>
                            <h1 class="text-white text-3xl sm:text-1xl font-bold xl:ml-60 lg:ml-60 md:ml-64 sm:ml-40  ">CAROLINA <br>HURRICANES</h1>
                            <p class="text-white  xl:text-lg lg:text-lg sm:text-sm font-bold xl:ml-20 lg:ml-20 md:ml-20 sm:ml-10 lg:mt-0 md:mt-0 sm:mt-2 ">FEB 18TH, 2022 7:00PM EST</p>
                        </div>
                    </div>
                    <div class=" ">
                    <div class="flex justify-center md:flex-row sm:flex-col  gap-4">
                        <div class="w-96 h-5/6 border border-black relative mb-10 ">
                            <div class="flex m-3 mt-5 ">
                                <img class="w-24 h-32 " src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                                <div class="ml-2">
                                        <div class="bg-green-400 bg-orange-400 rounded-full w-40 flex items-center p-1">
                                            <img src="{{ asset('/images/starting-goalies/checked.png') }}" class="w-4 h-4 bg-white rounded-full ml-3">
                                            <h1 class="text-sm ml-4 text-slate-100">Confirmed</h1>
                                        </div>
                                    <h1 class="xl:text-2xl text-1xl font-extrabold">JUUSE SAROS</h1>
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
                                <p class="text-[13px] font-semibold">Juuse Saros continue to show that he is well equiped to be a number one goalie in the NHL</p>
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
            </div> 
        </div>
        <div class="flex flex-col gap-2 items-center">
            <img class="w-72 h-[263px]" src="{{ asset('/images/menu-icon/adds3.png') }}">
            <img class="w-[17rem] h-[499px] mb-[31px]" src="{{ asset('/images/menu-icon/adds6.png') }}">
            <img class="w-[17rem] h-[540px]" src="{{ asset('/images/menu-icon/adds5.png') }}">
        </div>
    </div>
    <!-- End of Desktop -->
    <!-- Mobile design -->
        <div class="mx-1 hidden smm-block">
            <div class="carousel">
                <div id="carouselExampleControls" class="carousel slide relative mt-2" data-bs-ride="carousel">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-xl font-bold mt-2">
                            Starting Goalies
                        </h1>
                        <h1>NOVEMBER 24,2022</h1>
                    </div>
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active relative float-left w-full">                         
                        </div>
                        <div class="carousel-item relative float-left w-full">
                        </div>
                        <div class="carousel-item relative float-left w-full">
                        </div> 
                    </div>
                    <button
                        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev"
                    >
                        <img class="color-red border border-sky-100 rounded-full w-[51px] rotate-180 absolute top-[8px]" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
                    </button>

                    <button
                        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                        type="button"
                        data-bs-target="#carouselExampleControls"
                        data-bs-slide="next"
                    >     
                       <img class="color-red border border-sky-100 rounded-full w-[51px] absolute top-[8px]" src="{{ asset('/images/menu-icon/arrow-icon-28.png') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-center gap-1 mt-3">
                <div class="w-full bg-sky-500 flex flex-row justify-between items-center p-1">
                    <img class="w-12 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-md font-semibold">Tronto Maple Leafs @ Calgary Flames</h1>
                        <p class="text-sm font-semibold">7:00 pm EST</p>
                    </div>
                    <img class="w-12 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                </div>
                <div class="parent border border-black w-full relative">
                    <div class="flex flex-row gap-1.5 ml-2 mt-5">
                        <div class="">
                            <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                    <h1 class="text-[12px] font-extrabold ml-px text-black">CONFIRMED</h1>
                                </div>
                            </div>
                            <div >
                                <h1 class=" text-xl font-extrabold">JUUSE SAROS</h1>
                                <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                            </div>
                            <div class="flex flex-row">
                                <div class="flex flex-row items-center gap-1">
                                    <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">7500</p>
                                    <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">8200</p>
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="m-px gap-1 mb-px">
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
                <div class="flex flex-col items-center w-full ">
                    <div class="parent border border-black w-full relative">
                        <div class="flex flex-row gap-1.5 ml-2 mt-5">
                            <div class="">
                                <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                        <h1 class="text-[12px] font-extrabold ml-px text-black">PROJECTED</h1>
                                    </div>
                                </div>
                                <div >
                                    <h1 class=" text-xl font-extrabold">PREDRIK ANDERSON</h1>
                                    <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">7500</p>
                                        <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">8200</p>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                        <div class="m-px gap-1 mb-px">
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
            <div class="flex flex-col items-center gap-1 mt-3">
                <div class="w-full bg-sky-500 flex flex-row justify-between items-center p-1">
                    <img class="w-12 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-md font-semibold">Tronto Maple Leafs @ Calgary Flames</h1>
                        <p class="text-sm font-semibold">7:00 pm EST</p>
                    </div>
                    <img class="w-12 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                </div>
                <div class="parent border border-black w-full relative">
                    <div class="flex flex-row gap-1.5 ml-2 mt-5">
                        <div class="">
                            <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                    <h1 class="text-[12px] font-extrabold ml-px text-black">CONFIRMED</h1>
                                </div>
                            </div>
                            <div >
                                <h1 class=" text-xl font-extrabold">JUUSE SAROS</h1>
                                <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                            </div>
                            <div class="flex flex-row">
                                <div class="flex flex-row items-center gap-1">
                                    <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">7500</p>
                                    <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">8200</p>
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="m-px gap-1 mb-px">
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
                <div class="flex flex-col items-center w-full ">
                    <div class="parent border border-black w-full relative">
                        <div class="flex flex-row gap-1.5 ml-2 mt-5">
                            <div class="">
                                <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                        <h1 class="text-[12px] font-extrabold ml-px text-black">PROJECTED</h1>
                                    </div>
                                </div>
                                <div >
                                    <h1 class=" text-xl font-extrabold">PREDRIK ANDERSON</h1>
                                    <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">7500</p>
                                        <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">8200</p>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                        <div class="m-px gap-1 mb-px">
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
            <div class="w-full flex justify-center my-3">
                <div class="w-2/4 h-32 bg-lime-400 ">                
                </div>
            </div>
            <div class="flex flex-col items-center gap-1 mt-3">
                <div class="w-full bg-sky-500 flex flex-row justify-between items-center p-1">
                    <img class="w-12 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-md font-semibold">Tronto Maple Leafs @ Calgary Flames</h1>
                        <p class="text-sm font-semibold">7:00 pm EST</p>
                    </div>
                    <img class="w-12 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                </div>
                <div class="parent border border-black w-full relative">
                    <div class="flex flex-row gap-1.5 ml-2 mt-5">
                        <div class="">
                            <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                    <h1 class="text-[12px] font-extrabold ml-px text-black">CONFIRMED</h1>
                                </div>
                            </div>
                            <div >
                                <h1 class=" text-xl font-extrabold">JUUSE SAROS</h1>
                                <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                            </div>
                            <div class="flex flex-row">
                                <div class="flex flex-row items-center gap-1">
                                    <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">7500</p>
                                    <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">8200</p>
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="m-px gap-1 mb-px">
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
                <div class="flex flex-col items-center w-full ">
                    <div class="parent border border-black w-full relative">
                        <div class="flex flex-row gap-1.5 ml-2 mt-5">
                            <div class="">
                                <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                        <h1 class="text-[12px] font-extrabold ml-px text-black">PROJECTED</h1>
                                    </div>
                                </div>
                                <div >
                                    <h1 class=" text-xl font-extrabold">PREDRIK ANDERSON</h1>
                                    <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">7500</p>
                                        <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">8200</p>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                        <div class="m-px gap-1 mb-px">
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
            <div class="flex flex-col items-center gap-1 mt-3">
                <div class="w-full bg-sky-500 flex flex-row justify-between items-center p-1">
                    <img class="w-12 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-md font-semibold">Tronto Maple Leafs @ Calgary Flames</h1>
                        <p class="text-sm font-semibold">7:00 pm EST</p>
                    </div>
                    <img class="w-12 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                </div>
                <div class="parent border border-black w-full relative">
                    <div class="flex flex-row gap-1.5 ml-2 mt-5">
                        <div class="">
                            <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                    <h1 class="text-[12px] font-extrabold ml-px text-black">CONFIRMED</h1>
                                </div>
                            </div>
                            <div >
                                <h1 class=" text-xl font-extrabold">JUUSE SAROS</h1>
                                <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                            </div>
                            <div class="flex flex-row">
                                <div class="flex flex-row items-center gap-1">
                                    <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">7500</p>
                                    <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">8200</p>
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="m-px gap-1 mb-px">
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
                <div class="flex flex-col items-center w-full ">
                    <div class="parent border border-black w-full relative">
                        <div class="flex flex-row gap-1.5 ml-2 mt-5">
                            <div class="">
                                <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                        <h1 class="text-[12px] font-extrabold ml-px text-black">PROJECTED</h1>
                                    </div>
                                </div>
                                <div >
                                    <h1 class=" text-xl font-extrabold">PREDRIK ANDERSON</h1>
                                    <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">7500</p>
                                        <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">8200</p>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                        <div class="m-px gap-1 mb-px">
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
            <div class="w-full flex justify-center my-3">
                <div class="w-2/4 h-32 bg-lime-400 ">                
                </div>
            </div>
            <div class="flex flex-col items-center gap-1 mt-3">
                <div class="w-full bg-sky-500 flex flex-row justify-between items-center p-1">
                    <img class="w-12 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt="">
                    <div class="text-center">
                        <h1 class="text-md font-semibold">Tronto Maple Leafs @ Calgary Flames</h1>
                        <p class="text-sm font-semibold">7:00 pm EST</p>
                    </div>
                    <img class="w-12 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt="">
                </div>
                <div class="parent border border-black w-full relative">
                    <div class="flex flex-row gap-1.5 ml-2 mt-5">
                        <div class="">
                            <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                        </div>
                        <div class="flex flex-col gap-3 ml-3">
                            <div>
                                <div class="flex flex-row items-center">
                                    <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                    <h1 class="text-[12px] font-extrabold ml-px text-black">CONFIRMED</h1>
                                </div>
                            </div>
                            <div >
                                <h1 class=" text-xl font-extrabold">JUUSE SAROS</h1>
                                <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                            </div>
                            <div class="flex flex-row">
                                <div class="flex flex-row items-center gap-1">
                                    <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">7500</p>
                                    <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                    <p class="text-[10px] font-bold">8200</p>
                                </div>
                            </div> 
                        </div>                    
                    </div>
                    <div class="m-px gap-1 mb-px">
                        <div class="mt-5">
                            <div class="flex items-center">
                                <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                <div>
                                    <h3 class="font-bold">David Alter</h3>
                                    <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
                <div class="flex flex-col items-center w-full ">
                    <div class="parent border border-black w-full relative">
                        <div class="flex flex-row gap-1.5 ml-2 mt-5">
                            <div class="">
                                <img class="w-[7rem] h-[8rem]" src="{{ asset('/images/Anaheim/MASON-MCTAVISH-37.png') }}">
                            </div>
                            <div class="flex flex-col gap-3 ml-3">
                                <div>
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('/images/menu-icon/green-checked.png') }}" class="w-[24px] rounded-full ">
                                        <h1 class="text-[12px] font-extrabold ml-px text-black">PROJECTED</h1>
                                    </div>
                                </div>
                                <div >
                                    <h1 class=" text-xl font-extrabold">PREDRIK ANDERSON</h1>
                                    <p class="text-[9px] font-bold ml-2">Toronto Maple Leafs - c</p>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-row items-center gap-1">
                                        <img class="w-[9%]" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__3_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">7500</p>
                                        <img class="w-[9%] ml-2" src="{{ asset('/images/menu-icon/mobile-_line_combo-DFS.pdf-1__4_-removebg-preview.png') }}" alt="">
                                        <p class="text-[10px] font-bold">8200</p>
                                    </div>
                                </div> 
                            </div>                    
                        </div>
                        <div class="m-px gap-1 mb-px">
                            <div class="mt-5">
                                <div class="flex items-center">
                                    <img class="w-14 h-14" src="{{ asset('/images/starting-goalies/twitter-removebg-preview.png') }}">
                                    <div>
                                        <h3 class="font-bold">David Alter</h3>
                                        <p class="text-[12px] ">11/07/2022 4:21pm EST</p>
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
            <div class="w-full flex justify-center my-3">
                <div class="w-full h-16 bg-lime-400 ">                
                </div>
            </div>
        </div>
    <!-- End of Mobile -->
@endsection