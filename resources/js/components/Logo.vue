<template>
    <div class="container quaver-logo__container">
        <div class="quaver-logo">Quaver<span class="quaver-logo--pink">.</span>Music</div>
        <div class="quaver-logo__subtext">What have you been listening to?</div>
    </div>
</template>

<script>

</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .quaver-logo {
        font-family: $alfa;
        text-transform: uppercase;
        font-size: 48px;
        line-height: 48px;

        &__container {
            display: flex;
            flex-direction: column;
        }

        &--pink {
            color: $pink;
            font-size: 64px;
        }

        &__subtext {
            font-size: 18px;
            font-weight: bold;
        }

    }
</style>
