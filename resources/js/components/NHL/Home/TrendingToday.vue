<template>
    <div class="">
        <div class="flex flex-col gap-6 relative">
            <div class="flex flex-row items-center gap-2 "> 
                <img class="w-8" :src="assetUrl + 'images/nhl-home/trending_icon.png'" alt="Image">
                <div>Trending Today </div>
            </div>


            <!--<div class=" w-full ">-->
                <!--<div class="text-wrapper">-->
                    <!--<h1>css advance tutorial</h1>-->
                    <!--<h1>css advance tutorial</h1>-->
                    <!--<h1>css advance tutorial</h1>-->
                    <!--<h1>css advance tutorial</h1>-->
                <!--</div>-->
            <!--</div>-->

            <!--<section class="spacer"></section>-->

            <!--<section class="marquee">-->
                <!--<div class="marquee__inner" aria-hidden="true" ref="inner">-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                    <!--<div class="marquee__part">-->
                        <!--food wine fish beef vegetables-->
                    <!--</div>-->
                <!--</div>-->
            <!--</section>-->

            <!--<section class="spacer"></section>-->



            <div class=" w-full hidden ">
                <div class="container-header nhl-container-header">

                    <div class="container-slider nhl-container-slider ">
                        <div class="slider-wrapper nhl-slider-wrapper ">

                            <div  class="image-list nhl-image-list nhl-trending-image-list grid-cols-5 gap-4">
                            <!--<div  class=" image-list nhl-image-list grid grid-cols-5 gap-4 nhl-trending-image-list">-->
                            <!--<div  class=" image-list nhl-image-list flex flex-row flex-nowrap gap-4">-->


                                <div class="nhl-image-item image-item" >
                                    <div class="card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative  py-2">
                                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_net_icon.png'" alt="Image">
                                            <a href="./starting-goalies" class="cursor-pointer text-sm font-bold " >Who are todays starting goalies? </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nhl-item image-item" >
                                    <div class="card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative py-2">
                                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_icon.png'" alt="Image">
                                            <a href="./line-combinations" class="cursor-pointer text-sm font-bold">What are the latest nhl line combination? </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nhl-image-item image-item" >
                                    <div class="card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative py-2">
                                            <img class="w-6" :src="assetUrl + 'images/nhl-home/news_icon.png'" alt="Image">
                                            <a href="./player-news" class="cursor-pointer text-sm font-bold">What is the latest NHL player news? </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nhl-image-item image-item" >
                                    <div class="card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative py-2">
                                            <img class="w-6" :src="assetUrl + 'images/nhl-home/matchup_icon_.png'" alt="Image">
                                            <a href="./matchups" class="cursor-pointer text-sm font-bold">What are today's NHL matchups?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="nhl-image-item image-item" >
                                    <div class="card-wd bg-white rounded-[13px] ">
                                        <div class="flex flex-col gap-4 items-center justify-center relative py-2">
                                            <img class="w-6" :src="assetUrl + 'images/nhl-home/projection_icon.png'" alt="Image">
                                            <a href="./projections" class="cursor-pointer text-sm font-bold">What are todays DFS player projections? </a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div  class="marquee-parent relative overflow-x-hidden hidden" >
                <div class="marquee flex flex-row gap-2" >
                    <div class=" inline-block p-4 flex-none flex-col  items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_net_icon.png'" alt="Image">
                            <a href="./starting-goalies" class="cursor-pointer text-sm font-bold " >Who are todays starting goalies? </a>
                        </div>
                    </div>
                    <div class="  inline-block p-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_icon.png'" alt="Image">
                            <a href="./line-combinations" class="cursor-pointer text-sm font-bold">What are the latest nhl line combination? </a>
                        </div>
                    </div>
                    <div class=" inline-block p-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/news_icon.png'" alt="Image">
                            <a href="./player-news" class="cursor-pointer text-sm font-bold">What is the latest NHL player news? </a>
                        </div>
                    </div>
                    <div class=" inline-block p-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/matchup_icon_.png'" alt="Image">
                            <a href="./matchups" class="cursor-pointer text-sm font-bold">What are today's NHL matchups?</a>
                        </div>
                    </div>
                    <div class="  inline-block p-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/projection_icon.png'" alt="Image">
                            <a href="./projections" class="cursor-pointer text-sm font-bold">What are todays DFS player projections? </a>
                        </div>
                    </div>
                </div>
            </div>











            <div id="maindiv" class="relative overflow-x-auto hidden">
                <div  class="flex flex-nowrap flex-row gap-4 ">
                    <!--grid sm:grid-cols-3  gap-4-->



                    <div class="   flex  flex-col last:pr-8 py-4 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_net_icon.png'" alt="Image">
                            <a href="./starting-goalies" class="cursor-pointer text-sm font-bold " >Who are todays starting goalies? </a>
                        </div>
                    </div>
                    <div class="  flex  flex-col last:pr-8 py-4 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_icon.png'" alt="Image">
                            <a href="./line-combinations" class="cursor-pointer text-sm font-bold">What are the latest nhl line combination? </a>
                        </div>
                    </div>
                    <div class=" flex  flex-col last:pr-8 py-4 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/news_icon.png'" alt="Image">
                            <a href="./player-news" class="cursor-pointer text-sm font-bold">What is the latest NHL player news? </a>
                        </div>
                    </div>
                    <div class="  flex  flex-col last:pr-8 py-4 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/matchup_icon_.png'" alt="Image">
                            <a href="./matchups" class="cursor-pointer text-sm font-bold">What are today's NHL matchups?</a>
                        </div>
                    </div>
                    <div class=" flex  flex-col last:pr-8 py-4 items-center justify-center border border-[#d9d9d9] rounded-[13px]">
                        <div class=" flex flex-col justify-center items-center gap-2">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/projection_icon.png'" alt="Image">
                            <a href="./projections" class="cursor-pointer text-sm font-bold">What are todays DFS player projections? </a>
                        </div>
                    </div>

                </div>
                <!--<div id="div2" class="hidden">-->


                    <!--<div class="  inline-block  py-4 flex-none flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">-->
                        <!--<div class=" flex flex-col justify-center items-center gap-2">-->
                            <!--<img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_net_icon.png'" alt="Image">-->
                            <!--<a href="./starting-goalies" class="cursor-pointer text-sm font-bold " >Who are todays starting goalies? </a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="  inline-block   py-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">-->
                        <!--<div class=" flex flex-col justify-center items-center gap-2">-->
                            <!--<img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_icon.png'" alt="Image">-->
                            <!--<a href="./line-combinations" class="cursor-pointer text-sm font-bold">What are the latest nhl line combination? </a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class=" inline-block    py-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">-->
                        <!--<div class=" flex flex-col justify-center items-center gap-2">-->
                            <!--<img class="w-6" :src="assetUrl + 'images/nhl-home/news_icon.png'" alt="Image">-->
                            <!--<a href="./player-news" class="cursor-pointer text-sm font-bold">What is the latest NHL player news? </a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class=" inline-block  py-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">-->
                        <!--<div class=" flex flex-col justify-center items-center gap-2">-->
                            <!--<img class="w-6" :src="assetUrl + 'images/nhl-home/matchup_icon_.png'" alt="Image">-->
                            <!--<a href="./matchups" class="cursor-pointer text-sm font-bold">What are today's NHL matchups?</a>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="  inline-block   py-4 flex-none  flex-col last:pr-8 items-center justify-center border border-[#d9d9d9] rounded-[13px]">-->
                        <!--<div class=" flex flex-col justify-center items-center gap-2">-->
                            <!--<img class="w-6" :src="assetUrl + 'images/nhl-home/projection_icon.png'" alt="Image">-->
                            <!--<a href="./projections" class="cursor-pointer text-sm font-bold">What are todays DFS player projections? </a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->






        </div>

        </div>
    </div>
</template>
<script>

    import $ from 'jquery'
import { mapGetters, mapMutations, mapActions, mapState } from 'vuex';
    export default {
        name: "TrendingToday",   
        data() {
            return { 
                nhls: [],
                assetUrl: window.assetUrl 
            };
        },
        mounted(){
            // Clone the marquee element
            // if (window.matchMedia("(max-width: 639px)").matches) {
            //     var clonedMarquee = $('.nhl-trending-image-list').clone();
            //
            //     // Append the cloned marquee element to the marquee-parent
            //     $('.nhl-trending-slider-wrapper').append(clonedMarquee);
            // }
            // Log the HTML content of the cloned marquee (optional)
            // console.log('Hello world mounted', clonedMarquee.html());
            // $('#maindiv').width($('#div1').width());
            // $('#marquee-parent').width($('#marquee1').width());
            // console.log($('#marquee-parent').width($('#marquee1').width()));
            // Fetch NHL data or perform any other necessary actions
            this.fetchNhl();
        },

        created(){
            //  mapState(['nhl']),  
            // this.nhls = this.$store.state.nhl.data;


            // var copy = document.querySelector(".marquee").cloneNode(true);



            // // Clone the marquee element
            // var clonedMarquee = $('.marquee').clone();
            //
            // // Append the cloned marquee element to the marquee-parent
            // $('.marquee-parent').append(clonedMarquee);
            //
            // // Log the HTML content of the cloned marquee (optional)
            // console.log('Hello world ', clonedMarquee.html());
            //
            // // Fetch NHL data or perform any other necessary actions
            // this.fetchNhl();
            // console.log('nhl items', )
            // this.fetchNhl()
        },
        computed: {
            ...mapGetters(['getNhl']),  
        },
        methods: { 
            ...mapActions(['fetchNhl']),
        }
    }
</script>