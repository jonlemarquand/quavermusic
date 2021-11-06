<template>
    <div class="container quaver-logo__container">
        <div class="quaver-logo">Quaver<span class="quaver-logo--pink">.</span>Music</div>
        <div class="quaver-logo__subtext">What have you been listening to?</div>
    </div>
</template>

<script>
export default {
    name: "Logo",
}
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
        text-align: center;
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
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete
