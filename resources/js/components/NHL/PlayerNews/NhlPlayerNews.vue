<template>
    <div>NHL PLAYER NEWS {{ getNhls }}</div>

</template>
<script>

    import { mapGetters, mapMutations, mapActions } from 'vuex';
    export default {
        name: 'NhlPlayerNews',
        computed: {
            ...mapGetters(['getNhl']),
            getNhls() {

                // console.log(this.store.dispatch('fetchNhl'))
                 return 'NHL';
            },
        },
    }
</script>