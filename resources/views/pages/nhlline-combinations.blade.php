
@extends('layouts.master-nhl')

@section('content')
<!-- Desktop design -->
    <!-- <div class="w-full flex justify-center ">
        <div class="xl:w-11/12 lg:w-full md:w-full flex flex-col border-black m-4 gap-5 block  smm-hidden max-w-screen-2xl">
            <div class="flex flex-row justify-between items-center">
                <div class="flex gap-3">
                    <img class="w-10 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
                    <div class="flex">
                        <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                        <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
                    </div>
                </div>
                <div class="flex flex-row items-center xl:gap-5 gap-3">
                    <a href="{{url('/nhl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-5  py-2 rounded-md">NHL</a>
                    <a href="{{url('/nfl/home')}}" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NFL</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">NBA</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">MLB</a>
                    <a href="" class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-5  py-2 rounded-md">EPL</a>
                    <a href="#">
                        <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-between w-full gap-3">
                <a href="{{url('/nhl/starting-goalies')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</a>
                <a href="{{url('/nhl/line-combos')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</a>
                <a href="{{url('/nhl/player-news')}}" class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</a>
                <a href="" class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</a>
            </div>
            <div class="relative">
                <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
                <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
            </div>
        </div>
    </div> -->
    <div class="w-full flex justify-center  mt-10">
       <div class="xl:w-11/12 lg:w-full md:w-full flex flex-row justify-between gap-3 block  smm-hidden max-w-screen-2xl">
            <div class="flex flex-col  w-9/12 gap-5">
                <div class="w-full bg-[#38b6ff] flex flex-row  items-center rounded-md">
                    <h1 class="text-center py-10 text-3xl font-bold w-full">  NHL Line Combinations</h1>
                </div>
                <table class="">
                    @foreach($team->data as $key=>$val)
                        @if($val->league->slug == 'nhl')
                            <tr class="w-full flex  items-center border-b-2 border-slate-200 h-12">
                                <td class="w-full flex items-center gap-2 border-0">
                                    <a class="flex flex-row" href="../../nhl/line-combos/{{ $val->slug }}">
                                        <img class="w-7" src="{{$val->logo->src}}" alt="">
                                        <h1 class="xl:text-base lg:text-base md:text-sm font-bold">{{$val->name}}</h1>
                                    </a>
                                </td>
                                <td class="w-[60%] border-0" href="">
                                    <a class="xl:text-base lg:text-base md:text-sm text-[#38b6ff]" href="/nhl/line-combos/{{ $val->slug }}#forwards">Forward</a>
                                </td>
                                <td class="w-[60%] border-0" href="">
                                    <a class="xl:text-base lg:text-base md:text-sm  text-[#38b6ff]" href="/nhl/line-combos/{{ $val->slug }}#defence">Defence</a>
                                </td>
                                <td class="w-[60%] border-0" href="">
                                 <a class="xl:text-base lg:text-base md:text-sm text-[#38b6ff]" href="/nhl/line-combos/{{ $val->slug }}#goalie">Goalie</a>
                                </td>
                                <td class="w-[60%] border-0" href="">
                                 <a class="xl:text-base lg:text-base md:text-sm  text-[#38b6ff]" href="/nhl/line-combos/{{ $val->slug }}#power">Power Play</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
           <div class=" flex flex-col  xl:w-64 lg:w-52 md:w-52">
                <div class="flex flex-col gap-5 mt-9 ">
                    <div class="flex justify-center border w-full rounded py-2 bg-[#38b6ff]">
                        <h1 class="font-bold">Starting Goalies</h1>
                    </div>
                    <div id=" " class="flex flex-col gap-4 w-full">
                        @foreach($goalies->data as $key=>$val)
                            @if(isset($val->metafields->goalie_status))
                                @if($val->metafields->goalie_status->name === 'Confirmed')  
                                    <div class="flex flex-row items-center gap-2 w-full" style=" ">   
                                        <img class="xl:w-16 lg:w-16 md:w-14" style=" " src="{{$val->player->images->uniform}}" alt="">    
                                        <div class="flex flex-col">
                                            <div class="flex flex-col justify-center">
                                                <p class="font-bold xl:text-sm lg:text-sm md:text-[10px]">
                                                {{$val->player->full_name}} 
                                                </p>
                                            </div>
                                            <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] font-semibold">{{$val->title}}</p>
                                            <p class="xl:text-[12px] lg:text-[12px] md:text-[10px] text-slate-500">30 min ago</p>
                                        </div>
                                    </div>
                                @endif
                            @endif     
                        @endforeach

                        <div class="w-full flex justify-center">
                            <a class="font-semibold xl:text-sm lg:text-sm md:text-[8px] text-[#38b6ff]" href="{{url('nhl/starting-goaliesv2')}}">View Today's Starting Goalies</a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img class="w-10/12" src="{{ asset('/images/menu-icon/adds3.png') }}">
                    </div>  
                    <div class="flex justify-center border w-full rounded py-2 bg-[#38b6ff]">
                        <h1 class="font-bold">Line Combinations</h1>
                    </div>
                    <div id="" class="flex flex-col gap-4 w-full">
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Toronto Maple Leafs
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[12px]">
                                        Edmonton Oilers
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Boston Bruins
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between  gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        ST.Louis Blues
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center w-full" style=" ">   
                            <img class="w-11" style=" " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt="">    
                            <div class="w-full flex flex-row justify-between gap-2">
                                <div class="flex flex-col gap-px">
                                    <p class="font-bold text-[11px]">
                                        Vegas Golden Knights
                                    </p>
                                    <p class="text-[11px] text-slate-500">30 min ago</p>
                                </div>
                                <p class="xl:text-[11px] lg:text-[9px] md:text-[7px] md:text-[9px] font-semibold text-[#1d9bf0]">Morning Skate</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-center">
                            <a class="font-semibold xl:text-sm lg:text-sm md:text-[8px] text-[#38b6ff]" href="">View NHL Line Combinations</a>
                        </div>
                    </div>
                </div> 
            </div> 
    </div>

<!-- Mobile Design -->
<div class="w-full hidden smm-block">
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
        <div class="relative mx-2 z-20">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg linecomb-input-mob" type="" value="Search team projected lineups"> 
            <a class="absolute right-[12px] top-[12px] font-extrabold" href="">
               <img class="w-[2.5rem]" src="{{ asset('/images/menu-icon/arrowgrey.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="flex flex-col mx-2">
        <img class="w-full my-1.5 " src="{{ asset('/images/menu-icon/adds_header.png') }}" >         
        <div class="w-full h-20 bg-[#d9d9d9] flex border rounded-lg justify-center items-center ">
            <h1 class="text-xl font-bold text-black ">NHL Line Combinations </h1>
        </div>
        <div class="mx-1 my-3 flex flex-col gap-3">
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/montreal-canadiens.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/nashville-predators.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-jersey-devils.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-york-islanders.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/new-york-rangers.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/ottawa-senators.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/philadelphia-flyers.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/pittsburgh-penguins.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/san-jose-sharks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img  class="w-14 " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a>
            </div>
            <div class="w-full flex flex-row justify-evenly gap-3">
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a>
                <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a>
            </div>
            <div class="flex justify-center">
                <div class="w-[33%] flex flex-row sm:justify-between justify-center gap-3">
                    <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a>
                    <a class="bg-[#d9d9d9] w-20 border rounded-lg flex justify-center" href=""><img class="w-14 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a>
                </div>
            </div>  
        </div>
        <div class="flex flex-col gap-3 mt-8">
            <div class=" w-full flex justify-center">
                <img class="w-[25rem] h-72" src="{{ asset('/images/menu-icon/adds3.png') }}">
            </div> 
            <div class=" w-full flex justify-center">
                <img class="w-[25rem] h-64" src="{{ asset('/images/menu-icon/high_lights.png') }}" alt="">
            </div>
            <img class="w-auto my-3" src="{{ asset('/images/menu-icon/newsletter.png') }}" alt=""> 
        </div>       
    </div>
</div>
 



@endsection
