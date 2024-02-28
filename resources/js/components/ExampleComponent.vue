<template>
    <div class="container">
        <h1> </h1>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.title }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {


        computed: {
            products() {
                return this.$store.state.products;
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
