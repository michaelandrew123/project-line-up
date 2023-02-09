
@extends('layouts.master')

@section('content')
    <div class="w-full flex justify-center lg:block  smm:hidden">
        <div class="w-11/12 flex flex-col border-black m-4 gap-5">
            <div class="flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl lg:text-3xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl lg:text-3xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 lg:gap-3">
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 py-2 rounded-md">NHL</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NFL</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NBA</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">MLB</button>
                    <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">EPL</button>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full">
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 py-2 rounded-md">STARTING GOALIES</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">LINE COMBOS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">PROJECTIONS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">NEWS</button>
                <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 py-2 rounded-md">PROPS & ODDS</button>
            </div>
               <div class="relative">
                 <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                 <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
               </div>
        </div>
    </div>
    <div class="w-full flex flex-col smm-hidden">
        <div class="flex flex-row justify-evenly mt-10">   
            <div class="flex flex-col items-center w-7/12">
                <div class="w-full  h-36 bg-[#d9d9d9] flex  border rounded-[10px] justify-center items-center">
                <h1 class="text-2xl font-bold ">NHL Starting Goalies Tuesday, January 24</h1>
                </div>
                <div class="w-full">
                    <div id="carouselExampleControlsv1" class="carousel slide relative mt-4 nav-corsl" data-bs-ride="">
                        <div class="relative">
                            <div class="absolute top-0 bottom-0 left-0 flex items-center">
                                <button
                                    class="carousel-control-prev  flex items-center justify-between p-1 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0 w-[12.5rem] border border-2 border-black "
                                    type="button"
                                    data-bs-target="#carouselExampleControlsv1"
                                    data-bs-slide="prev"
                                >
                                        <div class="flex flex-row">
                                        <img class="w-[25px] rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                        <img class="w-[25px] rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                        </div>
                                        <div>
                                        <h1 class="font-extrabold text-black text-lg">Previous Day</h1>
                                        </div>
                                </button>
                            </div>
                            <div class="absolute top-0 bottom-0 right-0 flex items-center">
                                <button
                                    class="carousel-control-next  flex items-center justify-between p-1 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0 w-[12.5rem] border border-2 border-black"
                                    type="button"
                                    data-bs-target="#carouselExampleControlsv1"
                                    data-bs-slide="next"
                                > 
                                    <div>
                                    <h1 class="font-extrabold text-black text-lg">Next Day</h1> 
                                    </div>   
                                    <div class="flex flex-row">
                                        <img class="w-[25px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                        <img class="w-[25px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                    </div>  
                                </button>
                            </div> 
                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden mt-8">
                            <div class="carousel-item active relative float-left w-full ">
                                <div class="flex flex-col mt-10"> 
                                    <div class="flex flex-row justify-between ">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item relative float-left w-full ">
                                <div class="flex flex-col mt-10"> 
                                    <div class="flex flex-row justify-between ">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item relative float-left w-full ">
                                <div class="flex flex-col mt-10"> 
                                    <div class="flex flex-row justify-between ">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-10">
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-2 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <h1 class="text-3xl font-bold text-black">Colorado</h1>
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">
                                                </div>
                                                <p class="text-md text-center text-black">25-17-13, 4th Central</p>
                                            </div>
                                        </div>
                                        <h1 class="text-center text-sm font-bold">
                                            Jan 24, 7:00pm <br><br>
                                            Bridgestone Arena <br>
                                            NashVille, TN <br>
                                            Line : COL- 155 <br>
                                            O/U 6.5
                                        </h1>
                                        <div class="h-32 w-72 bg-[#d9d9d9] border rounded-[10px] flex flex-col items-center justify-end ">
                                            <div class="justify-center items-center gap-3 mb-4">
                                                <div class="flex flex-row items-center gap-3">
                                                    <img class="w-16" src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">
                                                    <h1 class="text-3xl font-bold text-black">Nashville</h1>
                                                </div>
                                                <p class="text-md text-center text-black">22-18-6, 5th Central</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between mt-4 ">
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-[47%] h-auto border-2 border-[#d9d9d9] relative rounded-xl ">
                                            <div class="flex mt-5 gap-8 mx-4 my-5">
                                                <img class="lg:w-24 lg:h-28 md:w-20 md:h-24" src="{{ asset('/images/menu-icon/player-uniform2.png') }}">
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <h1 class=" text-xl font-extrabold">Igor Shesterkin</h1>
                                                        <p class="text-[10px] font-semibold">New York Rangers - G</p>
                                                    </div>
                                                    <div class="flex flex-row items-center gap-2">
                                                        <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                                        <p class="text-sm font-bold text-[#2f4e6f]">Confirmed</p>
                                                    </div>
                                                    <p class="text-[11px]">Mollie Walker jan 30 11:53 am EST</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
            <div class=" flex flex-col w-60 gap-8">
                <img class="w-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
                <img class="" src="{{ asset('/images/menu-icon/adds-new1.png') }}">
                <div class="flex flex-col gap-3 ml-5">
                    <div class="flex flex-row ">
                        <img src="{{ asset('/images/menu-icon/ .png') }}" alt="">
                        <h1 class="text-md font-semibold">Latest Articles </h1>
                    </div>
                    <hr>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold ">Canuck's Ilya Mikheyev out <br> for the season, will undergo <br>ACL surgery</h1>
                        <p class="text-[10px]">January 27, <span class="ml-2">2023 ESPN</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold underline underline-offset-1">Montgomery thriving with <br> Bruins in 2nd chance as NHL <br>coach</h1>
                        <p class="text-[10px]">January 27, 2023 <span class="ml-2">NHL.COM</span></p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h1 class="text-[12px] font-bold">Which NHL All-Star jersey is <br> the greatest of all-time?</h1>
                        <p class="text-[10px]">january 27, 2023  <span class="ml-2">Yahoo Sports</span></p>
                    </div>
                </div>
                <img class="w-full" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div>
        </div>

    </div>








@endsection
