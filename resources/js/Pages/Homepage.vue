<template>
    <Layout>
        <h1>Hi, {{ name }}</h1>
    </Layout>
</template>

<script>

import Layout from "../Shared/Layout";

export default {
    name: "Homepage",
    props: {
        name: String,
    },
    components: { Layout }
}
</script>

<style scoped>

</style>
