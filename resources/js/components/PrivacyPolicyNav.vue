<template>
    <nav class="container">
        <h5>Table of Content</h5>
        <ol>
            <li>
                <a  class="no-decor c-pointer fg-darkBlue" v-on:click="navigateInternalLink('#collection-of-information')" >Collection of Information</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#use-of-personal-data')"  class="no-decor c-pointer fg-darkBlue">Use of Personal Data</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#disclosure-of-personal-data')"  class="no-decor c-pointer fg-darkBlue">Disclosure of Personal Data</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#right-to-access')"  class="no-decor fg-darkBlue">Right to Access/Correct Personal Data</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#cookies')"  class="no-decor c-pointer fg-darkBlue">Cookies</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#minors')"  class="no-decor c-pointer fg-darkBlue">Minors</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#security-measures')"  class="no-decor c-pointer fg-darkBlue">Security Measures</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#changes')"  class="no-decor c-pointer fg-darkBlue">Changes to this Privacy Policy</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#feedback')"  class="no-decor c-pointer fg-darkBlue">Feedback</a>
            </li>


        </ol>

    </nav>
</template>

<script>
    export default {
        name: "PrivacyPolicyNav",
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
