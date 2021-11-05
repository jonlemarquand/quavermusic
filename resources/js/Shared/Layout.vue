<template>
    <header>
        <h1>Quaver Music</h1>
    </header>
    <main>
        <slot />
    </main>
</template>

<script>
export default {
    name: "Layout"
}
</script>

<style lang="scss">
    @import '~@/_variables.scss';

    #app {
        background: $black;
        color: $white;
    }
</style>
