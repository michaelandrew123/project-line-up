<template>
    <div class="flex flex-col">
        <div class="flex flex-row justify-center">
            <div class="flex flex-row w-11/12">
                <div class="flex flex-row justify-center">

                    <div class="relative flex items-center gap-2">
                        <img class="w-12 h-12  " :src=" assetUrl +'images/nhl.png'" >
                        <h1 class="text-2xl font-extrabold pt-5 pb-5 " >
                            NHL Line Combinations
                        </h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex flex-col w-full xl:gap-5 lg:gap-3 md:gap-2 mt-3 ">

            <div class=" w-full   mb-3 ">
                <div class="container-header combination-container-header-combo">

                    <div class="container-slider combination-container-slider-combo">
                        <div class="slider-wrapper combination-slider-wrapper-combo ">
                            <div  class="image-list combination-image-list-combo " rel="combo" id="combo" style="row-gap: 30px; grid-template-columns: repeat(5, 1fr);">



                                    <div v-for="(item, key) in combos" :key="key">
                                        <div>{{ key }}</div>
                                    </div>



                            </div>
                        </div>

                    </div>
                </div>





            </div>

        </div>







    </div>

</template>
<script>

    import { mapGetters, mapMutations, mapActions, mapState } from 'vuex';
    export default {
        name: 'LineCombination',
        data() {
            return {
                assetUrl: window.assetUrl,
            };
        },
        created(){
            this.fetchCombo();
            // console.log('hello team ', this.combos);
            // this.fetchCombo().then(() => {
            // }).catch(error => {
            //     console.error('Error fetching combo:', error);
            // });
        },
        computed: {
            // ...mapState(['combos']),
            ...mapState({
                combos: state => state.combo.combos
            })
        },
        methods: {
            ...mapActions(['fetchCombo'])
        },
        watch: {
            // combo(newValue){
            //     this.getMatchupCount();
            // },
        },
        computed: {
        },
    }
</script>

