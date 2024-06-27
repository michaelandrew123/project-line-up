<template>
    <div class="flex flex-col gap-4" ref="parentDiv">

        <div class="w-full ">
            <!-- corouser example caption 4 -->
            <div  class="relative"  >
                <div class="relative w-full overflow-hidden after:clear-both after:block   ">
                    <div class="relative float-left -mr-[100%] w-full   transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none z-[-1]" >
                        <div class="flex flex-row justify-center items-center ">

                            <div class="flex justify-center items-center border border-[#38b6ff] bg-white rounded-lg h-14 w-10/12 text-white" id="sg-current-date">
                                <div class="text-base font-bold text-black" >
                                    <!--Tuesday, February 6, 2024-->
                                    {{ getFormattedDate }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="subtractOneDay"
                     :class="{ 'pointer-events-none': isLoading }"
                     class="sg-current-date-arrow absolute cursor-pointer left-0  top-0 z-[1] flex  items-center justify-center border-0 bg-none p-0 text-center text-white transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" >
                    <div class="flex items-center justify-center h-14 w-14  border border-[#38b6ff] bg-white rounded-lg">
                        <img class="w-[30px] h-[30px] rotate-90" :src="assetUrl + 'images/starting-goalies/arrow-down.png'"   alt="">
                    </div>
                </div>
                <div @click="addOneDay"
                        :class="{ 'pointer-events-none': isLoading }"
                        class="sg-current-date-arrow absolute right-0 top-0 z-[1] flex flex cursor-pointer items-center justify-center border-0 bg-none p-0 text-center text-white   transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" >

                    <div class="flex items-center justify-center  h-14 w-14 border border-[#38b6ff] bg-white rounded-lg">
                        <img class="w-[30px] h-[30px] -rotate-90" :src="assetUrl + 'images/starting-goalies/arrow-down.png'" alt="" >
                    </div>
                </div>
            </div>
        </div>
        <div v-if="!isLoading" >
            <!--matchup-logo-list grid sm:grid-cols-10 grid-cols-5-->
            <div class="flex flex-row gap-4 gap-4 flex-wrap" id="logo-matchup" >
                <!--sm:gap-4 gap-2 py-2 px-2-->
                <div class="matchup-border-dark-mode flex flex-col p-2 items-center  rounded-lg border border-[#000000]  cursor-pointer justify-center"  :class="{ 'pointer-events-none': isLoadingLogo }" v-if="getMatchupLogo.length != 0" v-for="logo in getMatchupLogo" v-key="logo.id" @click="fetchNhlSeasonId({id: logo.id})"  >
                    <div class="w-10">
                        <img :src="logo.starting_goalies.home.team.logo.src" class="w-auto  py-2 px-2">
                    </div>
                    <div class="w-10">
                        <img :src="logo.starting_goalies.away.team.logo.src" class="w-auto  py-2 px-2">
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-row justify-center" v-else>
            Loading page...
        </div>
        <!-- Content -->
        <div class="flex flex-col items-center w-full gap-3 place-items-stretch" >
            <div class="flex flex-col gap-2 w-full rounded-lg" v-if="!isLoading && !isLoadingLogo">
                <div  class="flex flex-row justify-evenly w-full gap-6 px-6" v-if="matchup.length === 0">
                    <div> No Data Available...</div>
                </div>
                <div  v-else >


                    <div class="flex flex-col justify-evenly w-full gap-6 sm:hidden mb-5 ">



                        <div class="flex flex-col justify-evenly gap-4 header-starting-goalies-mobile p-4">

                            <div class="flex flex-row gap-2 items-center">
                                <div class="text-center text-4xl  ">  {{ matchup.starting_goalies.home.team.name ? matchup.starting_goalies.home.team.name  : '' }} at  {{ matchup.starting_goalies.away.team.name ? matchup.starting_goalies.away.team.name  : '' }}</div>

                            </div>

                            <div class="flex flex-col text-center  text-[#38b6ff] font-bold   items-center">
                                <div class="text-base flex flex-col">
                                    <div>

                                        <div>
                                            {{ matchup.starting_goalies.home.game.game_date.date ? matchup.starting_goalies.home.game.game_date.date  : '' }}
                                        </div>
                                        <div>
                                            {{ matchup.starting_goalies.home.game.game_date.time ? matchup.starting_goalies.home.game.game_date.time  : '' }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="flex flex-row justify-evenly w-full gap-6" >
                            <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                <div class=" card-wd player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">


                                    <div class="p-4 " v-if="matchup.starting_goalies.home.player">
                                        <img :src="matchup.starting_goalies.home.player.images.uniform ? matchup.starting_goalies.home.player.images.uniform : ''" class="w-44" alt="...">
                                    </div>

                                    <div v-if="matchup.starting_goalies.home.status.name == 'Expected'" class=" bg-[#FFCC00]  text-black p-2 w-full rounded-b-[13px]">
                                        {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                    </div>
                                    <div v-else-if="matchup.starting_goalies.home.status.name == 'Confirmed'" class="bg-[#15D869] text-black p-2 w-full rounded-b-[13px]">
                                        {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                    </div>
                                    <div class="bg-[#38B6FF] text-black p-2 w-full rounded-b-[13px]"  v-else>
                                        {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                    </div>
                                </div>

                                <h1 class="text-base " v-if="matchup.starting_goalies.home.player && matchup.starting_goalies.home.player.full_name">
                                    {{ matchup.starting_goalies.home.player.full_name ? matchup.starting_goalies.home.player.full_name :'' }}
                                </h1>
                                <div @click="openSgModal(matchup.starting_goalies.home.id, 'home')" class=" card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center   cursor-pointer " rel="sg-view-card-home-{{matchup.starting_goalies.home->id}}" >
                                    <img class="w-5 h-5"  :src="assetUrl + 'images/home-page/plus.png'"    />
                                    <h1 class="text-base ">
                                        view news
                                    </h1>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                                 <div class=" card-wd player-card flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-[13px]">


                                     <div class="p-4 " v-if="matchup.starting_goalies.away.player">
                                         <img :src="matchup.starting_goalies.away.player.images.uniform ? matchup.starting_goalies.away.player.images.uniform : ''" class="w-44" alt="...">
                                     </div>


                                     <div v-if="matchup.starting_goalies.away.status.name == 'Expected'" class=" bg-[#FFCC00]  text-black p-2 w-full rounded-b-[13px]">
                                         {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                     </div>
                                     <div v-else-if="matchup.starting_goalies.away.status.name == 'Confirmed'" class="bg-[#15D869] text-black p-2 w-full rounded-b-[13px]">
                                         {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                     </div>
                                     <div class="bg-[#38B6FF] text-black p-2 w-full rounded-b-[13px]"  v-else>
                                         {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                     </div>


                                </div>
                                <h1 class="text-base " v-if="matchup.starting_goalies.away.player && matchup.starting_goalies.away.player.full_name">
                                    {{ matchup.starting_goalies.away.player.full_name ? matchup.starting_goalies.away.player.full_name :'' }}
                                </h1>

                                <div @click="openSgModal(matchup.starting_goalies.away.id, 'away')" class="card-wd  border border-[#d9d9d9] flex flex-row items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center cursor-pointer  " rel="sg-view-card-away-{{$season->starting_goalies->away->id}}"  >
                                    <img  class="w-5 h-5" :src="assetUrl + 'images/home-page/plus.png'"  />
                                    <h1 class="text-base ">
                                        view news
                                    </h1>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col justify-evenly w-full gap-4">
                            <div class="flex flex-row gap-4">
                                <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center w-full justify-center">

                                    <div class="w-6">

                                        <img  class="w-auto" :src="matchup.starting_goalies.home.team.logo.src ? matchup.starting_goalies.home.team.logo.src : ''">

                                    </div>
                                    <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combos/{{matchup.starting_goalies.home.team.slug }}">line Combinations</a></div>

                                </div>
                            </div>
                            <div class="flex flex-row gap-4">
                                <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] items-center w-full justify-center">
                                    <div class="w-6">
                                        <img class="w-auto" :src="matchup.starting_goalies.away.team.logo.src  ? matchup.starting_goalies.away.team.logo.src : ''">
                                    </div>


                                    <div class="text-[#38b6ff] font-bold  "><a href="/nhl/line-combos/{{matchup.starting_goalies.away.team.slug }}">line Combinations</a></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sm:flex hidden sm:flex-row flex-col justify-evenly w-full gap-6 "  >

                        <div class="flex flex-col items-center justify-between gap-2 sm:w-2/12  w-full ">
                            <div class=" card-wd flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-lg">
                                <div class="p-4 " v-if="matchup.starting_goalies.home.player">
                                    <img :src="matchup.starting_goalies.home.player.images.uniform ? matchup.starting_goalies.home.player.images.uniform : ''" class="w-44" alt="...">
                                </div>

                                <div v-if="matchup.starting_goalies.home.status.name == 'Expected'" class=" bg-yellow-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                </div>
                                <div v-else-if="matchup.starting_goalies.home.status.name == 'Confirmed'" class="bg-green-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                </div>
                                <div v-else class="bg-blue-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.home.status.name  ? matchup.starting_goalies.home.status.name : '' }}
                                </div>
                            </div>

                            <h1 class="text-base " v-if="matchup.starting_goalies.home.player && matchup.starting_goalies.home.player.full_name">
                                {{ matchup.starting_goalies.home.player.full_name ? matchup.starting_goalies.home.player.full_name :'' }}
                            </h1>

                            <div @click="openSgModal(matchup.starting_goalies.home.id, 'home')" class=" card-wd  border border-[#d9d9d9] flex flex-row flex-wrap items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center   cursor-pointer" :rel="'sg-view-card' + matchup.starting_goalies.home.id" >
                                <img class="w-5 h-5" :src="assetUrl + 'images/home-page/plus.png'"   />
                                <h1 class="text-base ">
                                    view news
                                </h1>
                            </div>

                        </div>



                        <div class="card-wd flex flex-col justify-between sm:w-8/12 w-full bg-white rounder-lg" >
                            <div class="flex flex-col gap-5 h-full">

                                <div class="flex flex-col justify-evenly h-full">
                                    <div class="  flex flex-col h-full justify-between py-8 gap-2" >
                                        <div class="flex sm:flex-row  flex-col justify-evenly sm:gap-4 gap-6 px-2 ">
                                            <div class="  flex sm:flex-row flex-col-reverse sm:p-2 rounded-lg gap-2 items-center">
                                                <h1 class=" text-center lg:text-2xl md:text-1xl sm:text-1xl  text-base  font-bold">
                                                    {{ matchup.starting_goalies.home.team.name ? matchup.starting_goalies.home.team.name  : '' }}
                                                </h1>

                                                <div class="flex items-center w-10 sm:w-10">
                                                    <img class="w-auto" :src="matchup.starting_goalies.home.team.logo.src ? matchup.starting_goalies.home.team.logo.src  : ''" alt="">
                                                </div>
                                            </div>
                                            <div class="flex  justify-center text-center  text-[#38b6ff] font-bold   items-center">
                                                <div class="text-center lg:text-2xl md:text-1xl sm:text-1xl  text-base  font-bold">
                                                    <div>
                                                        {{ matchup.starting_goalies.home.game.game_date.date ? matchup.starting_goalies.home.game.game_date.date  : '' }}
                                                    </div>
                                                    <div>
                                                        {{ matchup.starting_goalies.home.game.game_date.time ? matchup.starting_goalies.home.game.game_date.time  : '' }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex  sm:flex-row flex-col-reverse sm:p-2 rounded-lg gap-2 items-center">

                                                <div class="flex items-center w-10 sm:w-10">
                                                    <img class="w-auto" :src="matchup.starting_goalies.away.team.logo.src ? matchup.starting_goalies.away.team.logo.src  : ''" alt="">
                                                </div>

                                                <h1 class="text-center lg:text-2xl md:text-1xl sm:text-1xl  text-base  font-bold">
                                                    {{ matchup.starting_goalies.away.team.name ? matchup.starting_goalies.away.team.name  : '' }}
                                                </h1>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-row flex-col justify-between px-6 py-4 flex-wrap">
                                            <div class="flex flex-row justify-evenly gap-4 text-center">
                                                <div class="p-2 gap-2 sm:w-auto w-6/12 ">
                                                    <div class="text-black text-sm  ">GOALS</div>
                                                    <div class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold " v-if="matchup.home_team.odds && matchup.home_team.odds.team_goal">
                                                        {{ matchup.home_team.odds.team_goal }}

                                                    </div>
                                                    <div v-else class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold " >
                                                        0

                                                    </div>


                                                </div>
                                                <div class="p-2 gap-2  sm:w-auto w-6/12">
                                                    <div class="text-black text-sm  ">WIN %</div>
                                                    <div class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold " v-if="matchup.home_team.odds && matchup.home_team.odds.win_percentage">
                                                        {{ matchup.home_team.odds.win_percentage  }}
                                                    </div>
                                                    <div v-else class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold ">
                                                        0
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-row justify-evenly text-center">
                                                <div class="p-2 gap-2 sm:w-auto w-full ">
                                                    <div class="text-black text-sm ">0/U</div>
                                                    <div class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold " v-if="matchup.home_team.odds && matchup.home_team.odds.over_under">
                                                        {{ matchup.home_team.odds.over_under  }}
                                                    </div>
                                                    <div v-else class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold ">
                                                        0
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="flex flex-row justify-evenly gap-4 text-center" >
                                                <div class="p-2 gap-2 sm:w-auto w-6/12 ">
                                                    <div class="text-black text-sm ">WIN %</div>
                                                    <div class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold " v-if="matchup.away_team.odds && matchup.away_team.odds.win_percentage">
                                                        {{ matchup.away_team.odds.win_percentage }}
                                                    </div>
                                                    <div v-else class="card-wd-1 bg-[#F4F5F7] p-6 rounded-lg  font-bold ">
                                                        0
                                                    </div>
                                                </div>
                                                <div class="p-2 gap-2 sm:w-auto w-6/12 ">
                                                    <div class="text-black text-sm ">GOALS</div>
                                                    <div class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold " v-if="matchup.away_team.odds && matchup.away_team.odds.team_goal">
                                                        {{ matchup.away_team.odds.team_goal }}
                                                    </div>
                                                    <div v-else class="card-wd-1 bg-[#F4F5F7]  p-6 rounded-lg  font-bold ">
                                                        0
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="flex sm:flex-row flex-col gap-2 justify-evenly">
                                            <div class="flex flex-row gap-4 sm:w-auto w-full sm:text-left text-center">
                                                <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] sm:w-auto sm:justify-start justify-center w-full">


                                                    <div class="w-6">
                                                        <img  class="w-auto" :src="matchup.starting_goalies.home.team.logo.src ? matchup.starting_goalies.home.team.logo.src  : ''">
                                                    </div>
                                                    <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{matchup.starting_goalies.home.team.slug }}">line Combinations</a></div>
                                                </div>
                                            </div>

                                            <div class="flex flex-row gap-4 w-1/3 hidden">
                                                <div class="flex flex-row  p-2 items-center justify-center rounded-lg gap-2 border border-[#38b6ff] w-full ">
                                                    <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{matchup.starting_goalies.away.team.slug }}">matchup</a></div>
                                                </div>
                                            </div>


                                            <div class="flex flex-row gap-4 sm:w-auto w-full sm:text-left text-center">
                                                <div class="flex flex-row p-2 rounded-lg gap-2 border border-[#38b6ff] sm:w-auto sm:justify-start justify-center w-full">
                                                    <div class="w-6">
                                                        <img  class="w-auto" :src="matchup.starting_goalies.away.team.logo.src ? matchup.starting_goalies.away.team.logo.src  : ''">
                                                    </div>
                                                    <div class="text-[#38b6ff] font-bold"><a href="/nhl/line-combos/{{matchup.starting_goalies.away.team.slug }}">line Combinations</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col items-center justify-between sm:w-2/12  w-full">
                            <div class=" card-wd flex flex-col gap-4 bg-white w-full justify-center text-center items-center w-34 rounded-lg">
                                <div class="p-4 " v-if="matchup.starting_goalies.away.player">
                                    <img :src="matchup.starting_goalies.away.player.images.uniform ? matchup.starting_goalies.away.player.images.uniform : ''" class="w-44" alt="...">
                                </div>

                                <div v-if="matchup.starting_goalies.away.status.name == 'Expected'" class=" bg-yellow-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                </div>
                                <div v-else-if="matchup.starting_goalies.away.status.name == 'Confirmed'" class="bg-green-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                </div>
                                <div v-else class="bg-blue-500 text-black p-2 w-full rounded-b-[13px]">
                                    {{ matchup.starting_goalies.away.status.name  ? matchup.starting_goalies.away.status.name : '' }}
                                </div>
                            </div>

                            <h1 class="text-base " v-if="matchup.starting_goalies.away.player && matchup.starting_goalies.away.player.full_name">
                                {{ matchup.starting_goalies.away.player.full_name ? matchup.starting_goalies.away.player.full_name :'' }}
                            </h1>



                            <div @click="openSgModal(matchup.starting_goalies.away.id, 'away')" class=" card-wd  border border-[#d9d9d9] flex flex-row flex-wrap items-center justify-center gap-2 text-sm font-bold bg-white  border border-black rounded-lg w-full p-2 text-center cursor-pointer " :rel="'sg-view-card' + getMatchupSingleData.starting_goalies.away.id" >
                                <img class="w-5 h-5" :src="assetUrl + 'images/home-page/plus.png'"   />
                                <h1 class="text-base ">
                                    view news
                                </h1>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center" v-else>
                Loading page...
            </div>

            <div v-if="showModalAwayHome" class="z-20">
                <modal-away-home @close="closeAwayHomeModal" :startingGoalies="startingGoalies" />
            </div>


        </div>


        <div class="flex flex-col w-full">
            <div class="flex flex-row gap-3 w-full">
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-row gap-4">
                        <div class="bg-[#38B6FF] w-1 pt-4 pb-4"></div>
                        <h1 class="text-xl xl:text-lg lg:text-base md:text-sm font-bold ">NHL Player News</h1>
                    </div>
                    <div class=" flex justify-center my-5 hidden">
                        <a href="/nhl/player-news" class="text-[#1d9bf0] font-bold text-sm">View All NHL Player News</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 nhl-player-news">

                <!--<div class=" w-full   mb-3 "  v-if="!isLoading && !isLoadingLogo">-->
                    <!--<div v-if="getShuffleTwoTeamPlayerCard.length > 0" class="nhl-matchup-container-header container-header">-->
                        <div class="nhl-matchup-container-slider container-slider">
                            <div class="nhl-matchup-slider-wrapper slider-wrapper">
                                <!-- Slider controls -->
                                <!--<div>-->
                                    <!--<button class="cursor-pointer " @click="toggleHighlight">Toggle Highlight-->
                                        <!--<div class="length-info">sddd 1 </div>-->
                                        <!--<div class="length-info">sddd 2 </div>-->
                                        <!--<div class="length-info">sddd 3 </div>-->
                                    <!--</button>-->
                                    <!--<div id="highlightedElement">Highlighted Content</div>-->
                                <!--</div>-->
                                <button type="button" id="prev-slide" class="nhl-matchup-slide-button slide-button absolute start-0 z-30   items-center justify-center  cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>

                                <div  class="nhl-matchup-image-list image-list " >

                                    <div class="nhl-matchup-image-item image-item " v-for="dataTwoTeam in getShuffleTwoTeamPlayerCard" v-key="dataTwoTeam.id">
                                        <!--{{ getShuffleTwoTeamPlayerCard.length  }}-->
                                        <div class=" card-wd bg-white  rounded-[13px] ">
                                            <div class="flex flex-col gap-4 items-center justify-center relative">
                                                <div class=" px-3 pt-5">
                                                    <div v-if="dataTwoTeam.type.slug && dataTwoTeam.type.slug == 'lineup-update'">
                                                        <img class="md:w-44 sm:w-36 w-24" :src="dataTwoTeam.team.front_uniform.src" alt="player images uniform">
                                                    </div>
                                                    <div v-else >

                                                        <div v-if="dataTwoTeam.player && dataTwoTeam.player.images">
                                                            <img class="md:w-44 sm:w-36 w-24" :src="dataTwoTeam.player.images.uniform" alt="player images uniform">
                                                        </div>
                                                        <div class="font-black" v-else >
                                                            No Image Available
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="flex flex-row justify-center gap-3 p-2 text-white items-center w-full rounded-b-[13px] bg-[#F10000]"  :class="backgroundColorClass(dataTwoTeam.type.slug)">
                                                    <p class="text-sm font-bold" v-if="dataTwoTeam.type.slug == 'lineup-update'">
                                                        {{ dataTwoTeam.metafields.lineup_status.name }}
                                                    </p>
                                                    <p class="text-sm font-bold" v-else>
                                                        {{ dataTwoTeam.type.name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex flex-row items-center gap-2 justify-center my-2" v-if="dataTwoTeam.type.slug == 'lineup-update'">
                                                <img class="w-5" :src="dataTwoTeam.team.logo.src">
                                                <h1 class="sm:text-base text-sm" v-if="dataTwoTeam.player && dataTwoTeam.player.full_name">
                                                    {{ dataTwoTeam.player.full_name }}
                                                </h1>
                                                <h1 class="sm:text-base text-sm " v-else >
                                                    {{ dataTwoTeam.team.name }}
                                                </h1>
                                            </div>
                                            <div class="flex flex-row items-center gap-2 justify-center my-2" v-else >
                                                <img class="w-5" :src="dataTwoTeam.team.logo.src">
                                                <h1 class="sm:text-base text-sm " v-if="dataTwoTeam.player && dataTwoTeam.player.full_name">
                                                    {{ dataTwoTeam.player.full_name }}
                                                </h1>
                                                <h1 class="sm:text-base text-sm" v-else >
                                                    {{ dataTwoTeam.team.name }}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div @click="openModal(dataTwoTeam.id)" class="card-wd  border border-[#d9d9d9] flex flex-row items-center gap-2 justify-center  p-2 rounded-[13px]  bg-white cursor-pointer  " rel="modalNhl-id" >
                                                <img class="w-[15px] h-[15px]" :src="assetUrl + 'images/home-page/plus.png'"  alt="home-page/plus.png">
                                                <h1 class="text-base ">
                                                    view news
                                                </h1>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <button type="button" id="next-slide" class=" nhl-matchup-slide-button  slide-button absolute  end-0 z-30  items-center justify-center  cursor-pointer group focus:outline-none right-0"  data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>

                            </div>


                            <div class="nhl-matchup-slider-scrollbar slider-scrollbar" style="visibility: hidden">
                                <div class="scrollbar-track">
                                    <div class="nhl-matchup-scrollbar-thumb scrollbar-thumb"></div>
                                </div>
                            </div>

                        </div>
                    <!--</div>-->

                    <!--<div class="nhl-matchup-container-header container-header" v-else >-->
                        <!--No Data Available...-->
                    <!--</div>-->


                <!--</div>-->

                <!--<div class="flex flex-row justify-center" v-else>-->
                    <!--Loading page...-->
                <!--</div>-->
                <div v-if="showConfirmModal" class="z-20">

                    <modal-info @close="closeModal" :dataTwoTeam="dataTwoTeam" />
                            <!--@close="closeModal"-->
                            <!--@confirm="confirmModal"-->
                            <!--:basis="basis"-->

                </div>
            </div>

        </div>

    </div>
</template>
<script>

    import { mapGetters, mapMutations, mapActions, mapState } from 'vuex';
    import moment from 'moment'
    // import ModalInfo from "./Modal";
    import ModalInfo from './Modal/index.vue';
    import ModalAwayHome from './Modal/AwayHome.vue';
    import $ from 'jquery'

    export default {
        name: 'NhlMatchup',
        components: {
            ModalInfo,
            ModalAwayHome
        },
        data() {
            return {
                assetUrl: window.assetUrl,
                showConfirmModal: false,
                showModalAwayHome: false,
                dataTwoTeam: null,
                startingGoalies: null
            };
        },
        created(){
            this.$nextTick(() => {
                this.getCurrentDate();
                this.updateGridTemplateColumns();
            });

        },
        computed: {
            ...mapState(['isHighlighted', 'matchup', 'shuffleTwoTeamPlayerCard']),
            ...mapGetters(['getMatchupLogo', 'getMatchupSingleData', 'getShuffleTwoTeamPlayerCard', 'getFormattedDate', 'isLoading', 'isLoadingLogo']),
        },
        methods:{
            ...mapActions(['fetchNhlSeason', 'fetchNhlSeasonId', 'fetchNhlTeamPlayer', 'getCurrentDate', 'subtractOneDay', 'addOneDay', 'toggleHighlight']),
            backgroundColorClass(slug) {
                // const slug = this.dataTwoTeam.type.slug;
                switch (slug) {
                    case 'injury':
                    case 'send-down':
                    case 'suspension':
                    case 'ruled-out':
                    case 'healthy-scratch':
                        return 'bg-[#F10000]';
                    case 'confirmed':
                    case 'available':
                    case 'call-up':
                    case 'will-play':
                        return 'bg-[#15D869]';
                    case 'expected':
                    case 'probable':
                        return 'bg-[#FFCC00]';
                    case 'doubtful':
                    case 'questionable':
                        return 'bg-[#FE6601]';
                    case 'game-time-decision':
                        return 'bg-[#000000]';
                    default:
                        return 'bg-[#38B6FF]';
                }
            },
            // async fetchNhlSeasonId(id){
            //     await this.fetchNhlSeasonId({id: id});
            //     // await this.initMatchupitemlistGrid();
            // },
            applyHighlight() {
                console.log('mounted', this.isHighlighted);
                $('#highlightedElement').addClass('highlight');
            },
            removeHighlight() {
                $('#highlightedElement').removeClass('highlight');
            },
            getMatchupCount(){

                // var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});
                // var nhlMatch = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;

            },

            shuffleTwoTeamPlayer(){
                return this.getShuffleTwoTeamPlayerCard;
            },
            updateGridTemplateColumns() {
                if (this.$refs.parentDiv) {
                    this.$nextTick(() => {
                        const itemDataElements = this.$refs.parentDiv.querySelectorAll('.nhl-matchup-image-item');
                        // console.log('items data ', itemDataElements);
                        const nhlMatchupImageItemCount = itemDataElements.length;

                        const imageList = this.$refs.parentDiv.querySelector(".nhl-matchup-slider-wrapper .nhl-matchup-image-list");
                        const slideButtons = this.$refs.parentDiv.querySelectorAll(".nhl-matchup-slider-wrapper .nhl-matchup-slide-button");
                        const sliderScrollbar = this.$refs.parentDiv.querySelector(".nhl-matchup-container-slider .nhl-matchup-slider-scrollbar");
                        const scrollbarThumb = sliderScrollbar.querySelector(".nhl-matchup-scrollbar-thumb");




                        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

                        slideButtons.forEach(button => {
                            // console.log("Click me one time ");
                            // console.log("Hello world ", button.id);
                            button.addEventListener("click", () => {

                                // console.log('max button List  ', button);

                                const direction = button.id === "prev-slide" ? -1 : 1;
                                const scrollAmount = imageList.clientWidth * direction;

                                imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
                            });
                        });

                        // Show or hide slide buttons based on scroll position
                        const handleSlideButtons = () => {
                            slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                            slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
                        }

                        // Update scrollbar thumb position based on image scroll
                        const updateScrollThumbPosition = () => {
                            const scrollPosition = imageList.scrollLeft;
                            const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                            scrollbarThumb.style.left = `${thumbPosition}px`;
                        }
                        // Call these two functions when image list scrolls
                        imageList.addEventListener("scroll", () => {
                            updateScrollThumbPosition();
                            handleSlideButtons();
                        });
                        // this.$refs.parentDiv.style.color = 'red';
                        this.$refs.parentDiv.style.gridTemplateColumns = `repeat(${nhlMatchupImageItemCount}, 1fr)`;

                        // this.shuffleTwoTeamPlayer();
                    });
                }
            },
            closeModal() {
                this.showConfirmModal = false;
            },
            confirmModal(item) {
                this.showConfirmModal = false;
            },
            openModal(id){
                this.dataTwoTeam = this.getShuffleTwoTeamPlayerCard.find(item => item.id === id);
                this.showConfirmModal = true;
            },
            openSgModal(id, status){

                // Check if this.getMatchupSingleData is an array
                // if (Array.isArray(this.getMatchupSingleData)) {
                //     // Use the find function
                //     this.startingGoalies = this.getMatchupSingleData.find(item => item.starting_goalies.away.id === id);
                // } else {
                //     // Handle the case where this.getMatchupSingleData is not an array
                //     console.error('getMatchupSingleData is not an array');
                // }

                // console.log('id ', id)
                // console.log('away id ', this.getMatchupSingleData.starting_goalies.away.id)
                // console.log('matchup away', this.matchup.starting_goalies.away)
                // console.log('matchup starting_goalies ', this.matchup.starting_goalies)
                // console.log('matchup ', this.matchup)
                if(status == 'away'){

                    // console.log(this.matchup)
                     this.startingGoalies = this.matchup.starting_goalies.away
                    // this.getMatchupSingleData.find(item => item.starting_goalies.away.id === id);
                }
                if(status == 'home'){
                    // this.startingGoalies = this.matchup.starting_goalies.home.find(item => item.id === id);
                    this.startingGoalies = this.matchup.starting_goalies.home;
                }
                this.showModalAwayHome = true
            },
            closeAwayHomeModal(){
                this.showModalAwayHome = false;
            }
            // async initMatchupitemlistGrid(){
            //     var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
            //     $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});
            // }
        },
        watch: {
            matchup(newValue){
                 this.getMatchupCount();
            },
            shuffleTwoTeamPlayerCard(newValue){
                this.updateGridTemplateColumns();

                // this.$nextTick(() => {
                //
                //     // const itemDataElements = this.$refs.parentDiv.querySelectorAll('.nhl-matchup-image-item');
                //     // const nhlMatchupImageItemCount = itemDataElements.length;
                //     // this.$refs.parentDiv.style.gridTemplateColumns = `repeat(${nhlMatchupImageItemCount}, 1fr)`;
                //
                //     // const itemDataElements = this.$el.querySelectorAll('.nhl-matchup-image-item');
                //     console.log( this.$refs);
                //
                //     // const nhlMatchupImageItemCount = itemDataElements.length;
                //     // $('.nhl-matchup-image-list').css('grid-template-columns', 'repeat(' + nhlMatchupImageItemCount + ', 1fr)');
                // });


                // this.$nextTick(() => {
                //     // $('.length-info').css('background-color', 'green');
                //     // $('.length-info').css({'color': 'yellow'});
                //     // $('.nhl-matchup-image-list').css({'color': 'yellow'});
                //     var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                //     console.log('under next tick ', nhlMatchupImageItemCount);
                // });
                // this.$nextTick(() => {
                //     const itemDataElements = this.$el;
                //
                //     console.log(itemDataElements);
                //     // $(itemDataElements).css({'color': 'yellow'});
                //
                //     // const itemDataElements = this.$el.querySelectorAll('.nhl-matchup-image-item');
                //     // const nhlMatchupImageItemCount = itemDataElements.length;
                //     // $(itemDataElements).css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});
                // });
                // var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
                // console.log('watch shuffle two team :', newValue);
                // $('.length-info').text(newValue.length)
                // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + newValue.length + ', 1fr)'});


                // console.log('length: ', newValue.length);
                // console.log('Matchup lengt getShuffleTwoTeamPlayerCard:', nhlMatchupImageItemCount);
            },
            isHighlighted(newValue) {
                // console.log('newValue', newValue)
                if (newValue) {
                    this.applyHighlight(); // Apply highlight if isHighlighted is true
                } else {
                    this.removeHighlight(); // Remove highlight if isHighlighted is false
                }
            },
        },
        mounted() {
            // Apply initial highlight based on Vuex state
            // this.updateGridTemplateColumns();

            this.$nextTick(() => {
                this.getCurrentDate();
                // this.shuffleTwoTeamPlayer();
                // this.shuffleTwoTeamPlayerCard;
                this.updateGridTemplateColumns();
                // console.log('this area this shuffleTwoTeamPlayer 1', this.shuffleTwoTeamPlayer());
                // // console.log(this.$refs.parentDiv); // Should not be undefined here
            });


            // this.updateGridTemplateColumns();
            // if(this.matchup){
            //
            //     this.getMatchupCount();
            //     // var nhlMatchupImat = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
            //     // console.log('Hello world ', newValue);
            // }
            // if (this.isHighlighted) {
            //     this.applyHighlight();
            // }
        },
    }



</script>

<style>
    .highlight {
        background-color: yellow;
    }
</style>