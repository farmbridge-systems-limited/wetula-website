<template>
    <nav class="container">

        <ul class="inline-list d-flex flex-justify-center" id="scrolltab">
            <li class="active"><a class="button large" v-on:click="navigateInternalLink('#overview')">Overview</a></li>
            <li><a class="button large" v-on:click="navigateInternalLink('#benefits')">Benefits</a></li>
            <li><a class="button large" v-on:click="navigateInternalLink('#requirements')">Requirements</a></li>
            <li><a class="button large" v-on:click="navigateInternalLink('#pricing')">Pricing</a></li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "CustomerSegmentNavComponent",
        methods: {
            navigateInternalLink: function (hashLink) {
                location.hash = hashLink;
                console.log('SCROLL BY');
                window.scrollBy({
                    top: -160
                });
            }

        }
    }
</script>

<style scoped>

</style>
