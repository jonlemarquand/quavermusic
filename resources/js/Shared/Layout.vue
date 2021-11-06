<template>
    <header>
        <Logo />
    </header>
    <main>
        <slot />
    </main>
</template>

<script>

import Logo from "./Logo"

export default {
    name: "Layout",
    components: { Logo }
}
</script>

<style lang="scss">
    @import '~@/_variables.scss';

    header {
        max-width: 1300px;
        width: 96%;
        margin: 40px auto;
    }

    main {
        max-width: 1300px;
        width: 96%;
        margin: 0 auto;
    }

    #app {
        background: $black;
        color: $white;
    }
</style>
