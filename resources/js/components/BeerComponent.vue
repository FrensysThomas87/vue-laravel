<template>
    <div>
        <h2>{{beers.brand}}</h2>
    </div>
</template>

<script>


export default {
    name: 'BeerComponent',
    props:{
        beers:Object
    }
}

</script>

<style scoped>

</style>
