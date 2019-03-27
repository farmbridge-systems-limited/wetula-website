<template>
    <nav class="container">
        <h5>Table of Content</h5>
        <ol>
            <li>
                <a  class="no-decor c-pointer fg-darkBlue" v-on:click="navigateInternalLink('#application-acceptance')" >Application & Acceptance of the Terms</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#provisions-of-service')"  class="no-decor c-pointer fg-darkBlue">Provisions of Service</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#users-generally')"  class="no-decor c-pointer fg-darkBlue">Users Generally</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#member-accounts')"  class="no-decor fg-darkBlue">Member Accounts</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#member-responsibilities')"  class="no-decor c-pointer fg-darkBlue">Members Responsibilities</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#breaches-by-members')"  class="no-decor c-pointer fg-darkBlue">Breaches by Members</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#transactions-between-buyers-sellers')"  class="no-decor c-pointer fg-darkBlue">Transactions between Buyers & Sellers</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#limitation-liability')"  class="no-decor c-pointer fg-darkBlue">Limitation of Liability</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#force-majeure')"  class="no-decor c-pointer fg-darkBlue">Force Majeure</a>
            </li>

            <li>
                <a v-on:click="navigateInternalLink('#intellectual-property-rights')"  class="no-decor c-pointer fg-darkBlue">Intellectual Property Rights</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#notices')"  class="no-decor c-pointer fg-darkBlue">Notices</a>
            </li>
            <li>
                <a v-on:click="navigateInternalLink('#general-provisions')"  class="no-decor c-pointer fg-darkBlue">General Provisions</a>
            </li>

        </ol>

    </nav>
</template>

<script>
    export default {
        name: "TermOfServiceNav",
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
