@extends('layouts.master')

@section('content')
<div class="w-full flex flex-row justify-center ">
  <div class="xl:w-11/12 lg:w-11/12 md:w-full flex flex-col  m-4 gap-5 block smm-hidden">
        <div class="flex flex-row justify-between items-center">
          <div class="flex gap-3">
              <img class="w-16 h-10" src="{{ asset('/images/menu-icon/.png') }}" alt="">
              <div class="flex">
                  <h1 class="xl:text-4xl text-3xl font-extrabold">projected</h1>
                  <h1 class="xl:text-4xl text-3xl font-bold text-[#39b6ff]">lineups</h1>
              </div>
          </div>
          <div class="flex flex-row items-center xl:gap-5 gap-3">
              <button class="xl:text-3xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-10 px-8  py-2 rounded-md">NHL</button>
              <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">NFL</button>
              <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">NBA</button>
              <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">MLB</button>
              <button class="xl:text-3xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-10 px-8  py-2 rounded-md">EPL</button>
              <a href="#">
                  <svg class="w-10 text-white border border-black rounded-full bg-neutral-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
              </a>
          </div>
        </div>
        <div class="flex flex-row justify-between gap-3">
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">STARTING GOALIES</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">LINE COMBOS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">PROJECTIONS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#ebece9] text-black xl:px-11 px-6  py-2 rounded-md">NEWS</button>
            <button class="xl:text-2xl lg:text-lg font-bold bg-[#38b6ff] text-black xl:px-11 px-6  py-2 rounded-md">PROPS & ODDS</button>
        </div>
        <div class="relative">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[15px] top-[7px]" href=""><img class=" w-[35px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
        </div>
  </div> 
</div>
<!-- <div class="w-full border border-black flex justify-center ">
   <div class="w-11/12 h-10 bg-red-700">

   </div>
</div> -->

  <div class="w-full bg-slate-200 flex justify-center">
    <div class="w-[95%] block smm-hidden">
      <div class=" bg-[#d9d9d9] flex flex-row  items-center rounded-md">
          <h1 class="text-center py-10 text-3xl font-bold w-full">NHL Player Props</h1>
      </div>
        <div class="flex flex-col mt-5 items-center gap-8">
          <div class="flex flex-row justify-between text-3xl font-bold w-[97%] gap-3">
            <button class="bg-[#38b6ff] border border-[#38b6ff] rounded-lg py-5 w-8/12">ALL</button>
            <button class="bg-[#d9d9d9] border border-[#d9d9d9] rounded-lg py-5 w-full">SOG</button>
            <button class="bg-[#d9d9d9] border border-[#d9d9d9] rounded-lg py-5 w-full">GOALS</button>
            <button class="bg-[#d9d9d9] border border-[#d9d9d9] rounded-lg py-5 w-full">ASSISTS</button>
            <button class="bg-[#d9d9d9] border border-[#d9d9d9] rounded-lg py-5 w-full">POINTS</button>
            <button class="bg-[#d9d9d9] border border-[#d9d9d9] rounded-lg py-5 w-full">SAVES</button>
          </div>
          <div class="w-[97%] flex flex-col gap-4">
            <ul class="flex flex-row w-full gap-3">
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
              <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li>               
            </ul>
            <div class="flex flex-col w-full gap-3">
              <ul class="flex flex-row w-[61%] gap-3">
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a></li>  
              </ul>
              <div class="relative w-full">            
                <input class="border border-[#9fa0a0] w-full h-[5rem] rounded-lg props-input" type="" value="Search players"> 
                <a class="absolute right-[15px] top-[16px]" href=""><img class=" w-[52px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
              </div>
            </div>           
          </div>
        </div>
      <!--          <li><a><img class="w-16 mr-1" src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
                    <li><a href=""><img class="w-16 ml-1" src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li> -->
                    
      <div class="w-full flex flex-row">
        <div class="w-14">
          <!-- <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50" style="">Bar chart</div>
            <canvas class="p-10" id="chartBar" ></canvas>
            <div>

            </div>
            <img class="" src="{{ asset('/images/menu-icon/adds5.png') }}">
          </div> -->
          <div class="chartCard">
            <div class="chartBox ">
              <div class="flex flex-col gap-3">
                <div class="flex flex-row items-end justify-between">
                  <img class="w-16" src="{{ asset('/images/menu-icon/CONNOR-MCDAVID-97.png') }}">
                  <div class="flex flex-col gap-3">
                      <h1 class="text-2xl font-bold ">Connor McDavid - C</h1>
                      <div class="text-[12px] font-bold flex flex-row gap-2">
                        <button class="border border-slate-400 px-2 py-1 rounded-md w-16">L1</button>
                        <button class="border border-slate-400 px-2 py-1 rounded-md w-16">PP1</button>
                        <button class="border border-slate-400 px-2 py-1 rounded-md w-16">0-135</button>
                        <button class="border border-slate-400 px-2 py-1 rounded-md w-16">U-170</button>
                      </div>
                  </div>
                  <div class="flex flex-col justify-center bg-[#38b6ff] w-24 h-24 border rounded-md text-center ">
                    <p class="text-xl font-extrabold">SOG</p>
                    <h1 class="text-5xl font-bold">3.5</h1>
                  </div>
                </div>
                <div class="">
                  <div class="flex flex-row justify-between text-center">
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#38b6ff] border border-[#38b6ff] rounded-md"> SOG</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">GOALS</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">ASSIST</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">POINTS</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">TOI</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">DK PTS</button>
                    <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">FD PTS</button>
                  </div>
                </div>
              </div>
              <canvas  id="myChart"></canvas>             
              <div class="flex flex-col gap-3">       
                <div class="flex flex-col gap-2 text-center">
                  <p class="text-[10px] font-bold">SPLITS</p>
                  <div class="flex flex-row justify-between">
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">HOME</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">AWAY</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">ALL</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#38b6ff] border border-[#38b6ff] rounded-sm">L10</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">L5</button>
                  </div>
                  <div class="flex flex-row justify-between">
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">60%</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">53%</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">58%</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">53%</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ff5757] border border-[#ff5757] rounded-sm">49%</button>
                  </div>
                </div>
                <div class="flex flex-col gap-2 text-center">
                  <p class="text-[10px] font-bold">OPPONENT</p>
                  <div class="flex flex-row justify-between">
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">VS</button>
                      <button class="text-sm font-bold w-20 px-3 bg-[#ebece9] border border-[#ebece9] rounded-sm">OPP RANK</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">AVG</button>
                      <button class="text-sm font-bold w-20 px-3 bg-[#38b6ff] border border-[#38b6ff] rounded-sm">PK RANK</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">PEN/GEM</button>
                  </div>
                  <div class="flex flex-row justify-between">
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">80%</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">30</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">36.6</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">30</button>
                      <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ff5757] border border-[#ff5757] rounded-sm">2.5</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile design -->
  <div class="hidden smm-block">
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
          <div class="flex flex-row gap-2  my-5">
              <button class="sm:text-[13px] text-[11px] font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">STARTING GOALIES</button>
              <button class="sm:text-[13px] text-[11px] font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">LINE COMBOS</button>
              <button class="sm:text-[13px] text-[11px] font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">PROJECTIONS</button>
              <button class="sm:text-[13px] text-[11px] font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">NEWS</button>
              <button class="sm:text-[13px] text-[11px] font-bold bg-[#38b6ff] text-black w-full sm:h-12 h-10 rounded-md">PROPS & ODDS</button>
          </div>
          <div class="relative mx-2 ">
            <div class="">
            <input class="border border-[#9fa0a0] w-full h-[3rem] rounded-lg startgoal-input-mob" type="" value="Search team projected lineups or players"> 
            <a class="absolute right-[12px] top-[8px]" href=""><img class=" w-[32px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
          </div>
          
      </div>
      <div class="">
          <div class=" bg-[#d9d9d9] flex flex-row  items-center rounded-md my-2">
            <h1 class="text-center py-5 text-xl font-bold w-full">NHL Player Props</h1>
          </div>
          <div class="flex flex-col mt-5 items-center gap-8">
            <div class="flex flex-row justify-between text-3xl font-bold w-[97%] gap-1.5">
              <button class="sm:text-base text-sm font-bold bg-[#38b6ff] text-black w-full sm:h-12 h-10 rounded-md">ALL</button>
              <button class="sm:text-base text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">SOG</button>
              <button class="sm:text-base text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">GOALS</button>
              <button class="sm:text-base text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">ASSISTS</button>
              <button class="sm:text-base text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">POINTS</button>
              <button class="sm:text-base text-sm font-bold bg-[#ebece9] text-black w-full sm:h-12 h-10 rounded-md">SAVES</button>
            </div>
            <div class="w-full flex flex-col gap-4">
              <ul class="flex flex-row w-full gap-3">
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/calgary-flames.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/buffalo-sabres.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/boston-bruins.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/carolina-hurricanes.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/chicago-blackhawks.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/colorado-avalanche.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/columbus-blue-jackets.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/dallas-stars.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/detroit-red-wings.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/edmonton-oilers.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/florida-panthers.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/los-angeles-kings.svg') }}" alt=""></a></li>
                <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/minnesota-wild.svg') }}" alt=""></a></li>               
              </ul>
              <div class="flex flex-row w-full gap-3">               
                <div class="flex flex-row justify-end w-full">
                  <ul class="w-[61%]  flex flex-row gap-3"> 
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/seattle-kraken.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/st-louis-blues.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/tampa-bay-lightning.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/toronto-maple-leafs.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/vancouver-canucks.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/vegas-golden-knights.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/washington-capitals.svg') }}" alt=""></a></li>
                    <li class="flex justify-center items-center bg-[#d9d9d9] border border-[#d9d9d9] rounded-md w-full"><a href=""><img class="w-16 " src="{{ asset('/images/teamlogo-svg/winnipeg-jets.svg') }}" alt=""></a></li>                
                  </ul>                
                </div>
              </div>
              <div class="relative w-full">            
                <input class="border border-[#9fa0a0] w-full h-[4rem] rounded-lg props-input-mob" type="" value="Search players"> 
                <a class="absolute right-[20px] top-[7px]" href=""><img class=" w-[48px]" src="{{ asset('/images/menu-icon/search2.png') }}" alt=""></a>
              </div>
          </div>
          <div>
            <div class="chartCard">
              <div class="chartBox ">
                <div class="flex flex-col gap-3">
                  <div class="flex flex-row items-end justify-between">
                    <img class="w-16" src="{{ asset('/images/menu-icon/CONNOR-MCDAVID-97.png') }}">
                    <div class="flex flex-col gap-3">
                        <h1 class="text-2xl font-bold ">Connor McDavid - C</h1>
                        <div class="text-[12px] font-bold flex flex-row gap-2">
                          <button class="border border-slate-400 px-2 py-1 rounded-md w-16">L1</button>
                          <button class="border border-slate-400 px-2 py-1 rounded-md w-16">PP1</button>
                          <button class="border border-slate-400 px-2 py-1 rounded-md w-16">0-135</button>
                          <button class="border border-slate-400 px-2 py-1 rounded-md w-16">U-170</button>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center bg-[#38b6ff] w-24 h-24 border rounded-md text-center ">
                      <p class="text-xl font-extrabold">SOG</p>
                      <h1 class="text-5xl font-bold">3.5</h1>
                    </div>
                  </div>
                  <div class="">
                    <div class="flex flex-row justify-between text-center">
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#38b6ff] border border-[#38b6ff] rounded-md"> SOG</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">GOALS</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">ASSIST</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">POINTS</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">TOI</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">DK PTS</button>
                      <button class="text-[10px] font-bold w-14 px-2 py-1 bg-[#ebece9] border border-slate rounded-md">FD PTS</button>
                    </div>
                  </div>
                </div>
                <canvas  id="myChart"></canvas>             
                <div class="flex flex-col gap-3">       
                  <div class="flex flex-col gap-2 text-center">
                    <p class="text-[10px] font-bold">SPLITS</p>
                    <div class="flex flex-row justify-between">
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">HOME</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">AWAY</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">ALL</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#38b6ff] border border-[#38b6ff] rounded-sm">L10</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">L5</button>
                    </div>
                    <div class="flex flex-row justify-between">
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">60%</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">53%</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">58%</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">53%</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ff5757] border border-[#ff5757] rounded-sm">49%</button>
                    </div>
                  </div>
                  <div class="flex flex-col gap-2 text-center">
                    <p class="text-[10px] font-bold">OPPONENT</p>
                    <div class="flex flex-row justify-between">
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">VS</button>
                        <button class="text-sm font-bold w-20 px-3 bg-[#ebece9] border border-[#ebece9] rounded-sm">OPP RANK</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">AVG</button>
                        <button class="text-sm font-bold w-20 px-3 bg-[#38b6ff] border border-[#38b6ff] rounded-sm">PK RANK</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ebece9] border border-[#ebece9] rounded-sm">PEN/GEM</button>
                    </div>
                    <div class="flex flex-row justify-between">
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">80%</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">30</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">36.6</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#15d869] border border-[#15d869] rounded-sm">30</button>
                        <button class="text-sm font-bold w-20 px-3 py-1 bg-[#ff5757] border border-[#ff5757] rounded-sm">2.5</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
  </div>


<!-- <div class="shadow-lg rounded-lg overflow-hidden">
  <div class="py-3 px-5 bg-gray-50">
      Bar chart
  </div>
  <div>
    <h1>dfgdfgh</h1>
  </div>
  <canvas class="p-10 charts" id="chartBar">
    
  </canvas>
</div> -->


<!-- <canvas id="myChart" style="width:100%;max-width:600px">

</canvas> -->
<!-- <div class="card chart-container">
  <canvas id="chart"></canvas>
</div> -->

@endsection
