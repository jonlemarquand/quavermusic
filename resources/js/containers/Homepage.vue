<template>
    <div class="container">
        <h2>Artists</h2>
        <div class="quaver-grid">
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
        </div>
        <p>View more</p>
        <h2>Albums</h2>
        <div class="quaver-grid">
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
            <GridItem />
        </div>
        <p>View more</p>
    </div>
</template>

<script>
import GridItem from "../components/GridItem";

export default {
    components: {
        GridItem
    },
    data () {
        return {
            info: null
        }
    },
    mounted () {
        axios
            .get('' +
                '/api/overall/show')
            .then(response => (this.info = response))
    }
}
</script>
<style lang="scss" scoped>
@import '~@/_variables.scss';

.quaver-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
}
</style>
