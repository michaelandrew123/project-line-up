
@extends('layouts.master')

@section('content')
    <div class="w-full flex justify-center">
        <div class="xl:w-11/12 lg:w-11/12 w-full flex flex-col border-black m-4 gap-5 block smm-hidden">
            <div class="flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 lg:px-8 md:px-4  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 lg:px-8 md:px-4 py-2 rounded-md">EPL</a>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">LINE COMBOS</a>
                <a href="{{url('/nhl/ ')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">PROJECTIONS</a>
                <a href="{{url('/nhl/ ')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">NEWS</a>
                <a href="{{url('/nhl/props')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 lg:px-6 md:px-5 py-2 rounded-md">PROPS & ODDS</a>
            </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div> 
    </div>
    <div class="w-full flex flex-col smm-hidden">
        <div class="flex flex-row justify-evenly mt-10">   
            <div class="flex flex-col items-center xl:w-7/12 lg:w-8/12">
                <div class="w-full  h-36 bg-[#d9d9d9] flex  border rounded-[10px] justify-center items-center">
                    <h1 class="text-2xl font-bold ">NHL Starting Goalies Tuesday, January 24</h1>
                </div>
                <div class="w-full">
                    <!-- <div id="carouselExampleControlsv1 hidden" class="carousel slide relative mt-4 " data-bs-ride="">
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                                            Jan 24, 7:00pm <br>
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
                    </div> -->
            <div id="carouselExampleCaptions3" class="relative" data-te-carousel-init data-te-carousel-slide>
                <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%]  mb-4 flex list-none justify-center p-0 z-[-1]"
                    data-te-carousel-indicators>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="1"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions3"
                        data-te-slide-to="2"
                        class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                        aria-label="Slide 3"></button>
                </div>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                    <div
                        class="relative float-left -mr-[100%] w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                    <div
                        class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                    <div
                        class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class="flex flex-row justify-center">
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                                        Jan 24, 7:00pm <br>
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
                <button
                class=" absolute top-0 bottom-0 left-0 z-[1] flex  h-[3rem] w-[25%] md:w-[27%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions3"
                data-te-slide="prev">
                   <div class="flex w-[11rem] border border-black py-2">
                        <div class="flex flex-row ">
                          <img class="w-[25px] rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                          <img class="w-[25px] rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                        </div>
                        <div>
                          <h1 class="font-extrabold text-black text-lg">Previous Day</h1>
                        </div>
                   </div>                 
                </button>
                <button
                class=" absolute top-0 bottom-0 right-0 z-[1] flex flex  h-[3rem] w-[19%] lg:w-[20%] md:w-[21%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleCaptions3"
                data-te-slide="next"> 
                    <div class="flex  w-[9rem] border border-black py-2">
                        <div>
                          <h1 class="font-extrabold text-black text-lg">Next Day</h1> 
                        </div>   
                        <div class="flex flex-row ">
                            <img class="w-[25px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                            <img class="w-[25px] -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                        </div> 
                    </div>                          
                </button>
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
    <!-- Mobile design -->
    <div class="w-full flex flex-col items-center ">
        <div class="w-full  smm-block hidden">
            <div class="flex flex-col mx-1">
                <div class="flex flex-row justify-between items-center mb-1">
                    <div class="flex flex-row items-center gap-1.5">
                        <img class="w-[3rem]" src="{{ asset('/images/menu-icon/top stack icon (80 × 80 px).png') }}" alt="">
                        <div class="flex">
                            <h1 class="sm:text-4xl text-3xl font-extrabold">projected</h1>
                            <h1 class="sm:text-4xl text-3xl font-extrabold text-[#39b6ff]">lineups</h1>
                        </div>
                    </div>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>  
                <div class="flex flex-row gap-2 mx-2 my-5">
                    <button class="text-xl font-bold bg-[#38b6ff] text-black w-full h-12 rounded-md">NHL</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NFL</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">NBA</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">MLB</button>
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">SOC</button>
                </div>
                <div class="flex flex-row mx-2 gap-3 mb-3">
                    <button class="text-xl font-bold bg-[#ebece9] text-black w-full h-12 rounded-md">STARTING GOALIES</button>
                    <button class="text-xl font-bold bg-[#1d9bf0] text-black w-full h-12 rounded-md">LINE COMBOS</button>
                </div>               
            </div>
        </div>
        <div class="relative w-full my-3 smm-block hidden">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>

    </div>
    <img class="w-full my-3 smm-block hidden" src="{{ asset('/images/menu-icon/adds_header.png') }}" alt="">
    <div class="flex justify-center w-full my-8 smm-block hidden">
        <div class="w-full h-20 bg-[#d9d9d9] flex border rounded-[10px] justify-center items-center my-5 ">
            <h1 class="text-xl font-bold text-black ">NHL Starting Goalies Tuesday, January 24</h1>
        </div>
        <div id="carouselExampleCaptions4" class="relative w-full" data-te-carousel-init data-te-carousel-slide>
            <div class="absolute right-0 -bottom-10 left-0 z-[2] mx-[15%]  mb-4 flex list-none justify-center p-0 z-[-1]"
                data-te-carousel-indicators>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="1"
                    class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide-to="2"
                    class="mx-[3px] box-content h-h-[15px] w-[15px] flex-initial cursor-pointer border-1 border-solid border-transparent  bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none rounded-full"
                    aria-label="Slide 3"></button>
            </div>
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] ">
                <div
                    class="relative float-left -mr-[100%] w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-active
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full mt-5 transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <div class="flex flex-row justify-center my-3">
                        <div class="flex flex-col items-center  w-full mx-1 gap-4">
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div> 
                            <div class="flex flex-col  w-full gap-3 ">
                                <div class=" smm-w-full flex flex-row justify-between">
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <h1 class="font-bold text-xl  text-black">Colorado</h1>
                                        <img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt="">                             
                                    </div>
                                    <div class="font-bold text-md text-[12px] text-center">
                                        <p >Jan 24, 7:00pm</p>
                                        <p >Bridgestone Arena</p>
                                        <p>Nashville, TN</p>
                                    </div>
                                    <div class="flex flex-row justify-evenly items-center h-16 w-48 bg-[#d9d9d9] border rounded-[8px]">
                                        <img class="w-16  " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt="">  
                                        <h1 class="font-bold text-xl   text-black">Nashville</h1>                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="border border-black rounded-xl  smm-w-full h-40 flex items-center justify-evenly gap-3">
                                    <img src="{{ asset('/images/menu-icon/Copy_of_jersey.png') }}" class="w-32 h-32 " alt="">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h1 class="text-2xl font-extrabold">Igor Shesterkin</h1>
                                            <p class="text-md font-bold">New york Ranger - G</p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img class="w-[14px] h-[14px]" src="{{ asset('/images/menu-icon/green-checked.png') }}">
                                            <p class="text-lg font-extrabold">Confirmed</p>
                                        </div>
                                        <div class="text-[12px] flex flex-row font-bold">
                                            <p>Mollie Walker</p>
                                            <p>Jan 30 11:53 am EST</p>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 w-full">
                <button
                    class=" absolute top-0 bottom-0 left-0 z-[1] flex items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide="prev">
                        <div class="flex flex-row items-center justify-between w-[10rem] border border-black ">
                                <div class="flex flex-row relative">
                                <img class="h-3 rotate-90 " src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                <img class="h-3 rotate-90 absolute left-2" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                </div>
                                <div>
                                <h1 class="font-extrabold text-black text-lg">Previous Day</h1>
                                </div>
                        </div>                 
                </button>
                <button
                    class=" absolute top-0 bottom-0 right-0 z-[1] flex flex   items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions4"
                    data-te-slide="next"> 
                        <div class="flex flex-row items-center justify-between  w-[9rem] border border-black ">
                            <div>
                            <h1 class="font-extrabold text-black text-lg">Next Day</h1> 
                            </div>   
                            <div class="flex flex-row relative ">
                                <img class="h-3 -rotate-90 absolute right-2" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                                <img class="h-3 -rotate-90" src="{{ asset('/images/starting-goalies/arrow-down.png') }}" alt="">
                            </div> 
                        </div>                          
                </button>
            </div>
                
        </div>
    </div>








@endsection
