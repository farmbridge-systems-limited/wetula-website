<template>
    <nav class="container">
        <h5>Table of Content</h5>
        <ol>
            <li>
                <a  class="no-decor c-pointer fg-darkBlue" v-on:click="navigateInternalLink('#who-we-are')">Who we are</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#collecting-information')"  class="no-decor c-pointer fg-darkBlue">How we collect information about you and your consent</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#keeping-information')"  class="no-decor c-pointer fg-darkBlue">How we keep your information safe</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#managing-products')"  class="no-decor fg-darkBlue">What we use your information for offering and managing your Wetula products and services</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#developing-relationship')"  class="no-decor c-pointer fg-darkBlue">Developing our Relationship - Marketing and Customer Experience</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#data-analytics')"  class="no-decor c-pointer fg-darkBlue">Data Analytics - Using information in our Business.</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#legal-obligations')"  class="no-decor c-pointer fg-darkBlue">Our Legal Obligations</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#thirdparty')"  class="no-decor c-pointer fg-darkBlue">Your information and Third Parties</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#accessing-and-managing-information')"  class="no-decor c-pointer fg-darkBlue">Accessing and Managing your Information</a>
            </li>




        </ol>

    </nav>
</template>

<script>
    export default {
        name: "CorporateAssuranceNav",
        methods: {
            navigateInternalLink: function (hashLink) {
                location.hash = hashLink;
                console.log('SCROLL BY');
                window.scrollBy({
                    top: -200
                });
            }
        }
    }
</script>

<style scoped>

</style>
