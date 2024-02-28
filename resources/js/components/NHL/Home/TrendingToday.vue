<template>
    <div>
        <div class="flex flex-col gap-6 relative">
            <div class="flex flex-row items-center gap-2 "> 
                <img class="w-8" :src="assetUrl + 'images/nhl-home/trending_icon.png'" alt="Image">
                <div>Trending Today </div>
            </div>

            <div  class="marquee-parent flex flex-row gap-2 flex-nowrap z-10">
                <div class="marquee flex flex-row gap-2 flex-nowrap">
                        <div class="card-wd flex sm:flex-row flex-col gap-2 items-center font-['Roboto'] font-bold bg-[#E1E8ED] ms:px-4 px-2 py-2 sm:rounded-full rounded-xl ">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_net_icon.png'" alt="Image">
                            <a href="./starting-goalies" class="cursor-pointer text-sm font-bold " >Who are todays starting goalies? </a>
                        </div>
                        <div class="card-wd flex sm:flex-row flex-col gap-2  items-center font-['Roboto'] font-bold bg-[#E1E8ED] ms:px-4 px-2 py-2 sm:rounded-full rounded-xl">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/hockey_icon.png'" alt="Image">
                            <a href="./line-combinations" class="cursor-pointer text-sm font-bold">What are the latest nhl line combination? </a>
                        </div>
                        <div class="card-wd flex sm:flex-row flex-col gap-2 items-center font-['Roboto'] font-bold bg-[#E1E8ED] ms:px-4 px-2 py-2 sm:rounded-full rounded-xl">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/news_icon.png'" alt="Image">
                            <a href="./player-news" class="cursor-pointer text-sm font-bold">What is the latest NHL player news? </a>
                        </div>

                        <div class="card-wd flex sm:flex-row flex-col gap-2 items-center font-['Roboto'] font-bold bg-[#E1E8ED] ms:px-4 px-2 py-2 sm:rounded-full rounded-xl">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/matchup_icon_.png'" alt="Image">
                            <a href="./matchups" class="cursor-pointer text-sm font-bold">What are today's NHL matchups?</a>
                        </div>
                        <div class="card-wd flex sm:flex-row flex-col gap-2 items-center font-['Roboto'] font-bold bg-[#E1E8ED] ms:px-4 px-2 py-2 sm:rounded-full rounded-xl">
                            <img class="w-6" :src="assetUrl + 'images/nhl-home/projection_icon.png'" alt="Image">
                            <a href="./projections" class="cursor-pointer text-sm font-bold">What are todays DFS player projections? </a>
                        </div>
                </div>
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
            if (window.matchMedia("(max-width: 639px)").matches) {
                var clonedMarquee = $('.marquee').clone();

                // Append the cloned marquee element to the marquee-parent
                $('.marquee-parent').append(clonedMarquee);

            }

            // Log the HTML content of the cloned marquee (optional)
            // console.log('Hello world mounted', clonedMarquee.html());

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