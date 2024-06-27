<template>
    <div>

        <div class="absolute">
            <div class="relative z-30   ease-out duration-300"   aria-labelledby="modal-title" role="dialog" aria-modal="true">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div class="modal-center relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="close-modal cursor-pointer " @click="handleClose" ></div>
                            <div class=" px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="flex flex-col gap-4 w-full h-full relative rounded-xl ">
                                    <div class="flex m-3 mt-5 gap-5">

                                        <!--<div :if="dataTwoTeam.player.images && dataTwoTeam.player">-->

                                            <!--&lt;!&ndash;<img :if="dataTwoTeam.player.images.uniform" class="w-[150px]" :src="dataTwoTeam.player.images.uniform">&ndash;&gt;-->
                                        <!--</div>-->

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


                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-row gap-2">
                                                <p class="text-sm font-bold">
                                                    {{ dataTwoTeam.type.name ? dataTwoTeam.type.name : '' }}
                                                </p>
                                            </div>
                                            <div class="flex flex-col">
                                                <div v-if="dataTwoTeam.player">
                                                    <h1 class="text-2xl font-bold">
                                                        {{ dataTwoTeam.player.full_name  }}
                                                    </h1>
                                                </div>
                                                <div v-else-if="dataTwoTeam.team">
                                                    <h1 class="text-2xl font-bold">
                                                        {{ dataTwoTeam.team.name }}
                                                    </h1>
                                                </div>
                                                <div else ></div>
                                                <!--@foreach($teams->data as $team)-->
                                                <!--@if($team->slug == $val->team->slug)-->
                                                <!--<p class="text-[12px] font-semibold">{{ $team->name }}</p>-->
                                                <!--@endif-->
                                                <!--@endforeach-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class=" m-3 mb-2 lg:pb-3 md:pb-1 flex flex-col gap-4">
                                        <div class="modal-title text-sm font-bold">
                                            {{ dataTwoTeam.title ? dataTwoTeam.title : '' }}
                                        <div class="text-sm">
                                            {{ dataTwoTeam.description ? dataTwoTeam.description : '' }}
                                        </div>
                                    </div>
                                    <div class="m-3 flex  flex-col gap-4 items-center">
                                        <div class="flex flex-row justify-between gap-2  w-full">
                                            <div>
                                                <a class="flex flex-row items-center gap-2" :href="dataTwoTeam.source.url">
                                                    <img class="w-7 h-7" :src="assetUrl + 'images/twitter.png'">

                                                    <div>
                                                        <h3 class="text-xs font-extrabold">
                                                            {{ dataTwoTeam.source.name ? dataTwoTeam.source.name : '' }}
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="  flex flex-row items-center gap-2 ">
                                                <a :href="dataTwoTeam.source.url">
                                                    <img class="w-7 h-7" :src="assetUrl + 'images/6523-information-5.png'">
                                                </a>
                                                <div>
                                                    <p class="text-xs font-bold">
                                                        {{ dataTwoTeam.published_at.date ? dataTwoTeam.published_at.time : '' }} </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="aa de dn md aue avb bxn hidden">
                                    <button type="button" class="adu alo axp bkx bmz bne bnq bog">
                                        <span class="t">Close</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="oc se w-[1.5rem] h-[1.5rem]">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                    </button>
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

    // import { mapGetters, mapMutations, mapActions, mapState } from 'vuex';
    // import moment from 'moment'
    // import $ from 'jquery'
    export default {
        props: ['dataTwoTeam'],
        name: 'ModalInfo',
        data() {
            return {
                assetUrl: window.assetUrl,
            }
        },
        mounted() {
            console.log('data two team ', this.dataTwoTeam)
        },
        methods: {
            handleClose() {
                this.$emit('close');
            },
            // handleConfirm() {
            //     this.counter+=1;
            //     this.$emit('confirm', this.counter)
            // },
        },
    }

</script>