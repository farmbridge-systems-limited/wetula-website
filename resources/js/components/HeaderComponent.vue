<template>
    <header class=" bg-white">

        <div id="app-bar-container">
            <div class="mobile-tab-app-bar z-absolute container">
                <div class="geo-container p-1">
                    <button class="button bg-white" id="geoSettingsToggleBtn"
                            onclick="$('#geosettings-sidepanel').data('charms').toggle()"><span
                        class="mif-equalizer mif-2x"></span>
                        <span id="btnText" style="margin-top: -4px">Geo Settings</span></button>

                    <a class="button bg-white" id="language">
                        <span class="mif-language fg-green"></span>
                        <small>English</small>
                    </a>

                    <a class=" button bg-white" id="continent">
                        <span class="mif-earth fg-green"></span>
                        <small>Africa</small>
                    </a>
                    <a class="button bg-white" id="appbar_contact">
                        <span class="mif-phone fg-green"></span>
                        <small>Contact Us</small>
                    </a>

                </div>
                <div class="auth-container pt-2 p-1">
                    <a class="ml-2 mr-2 "><span class="mif-security"></span> Client Login</a>
                </div>
                <div class="menu-container p-1">
                    <a class="button rounded border border-2 bd-white place-right" id="menuToggleBtn"><span
                        class="mif-menu "></span> <span
                        class="btnText"> Menu</span></a>
                    <div class="pos-absolute  pos-top-right" id="mobileNavList">
                        <div class="bg-red fg-white"
                             data-role="dropdown"
                             data-toggle-element="#menuToggleBtn">
                            <ul class="sidenav-m3 pl-1 bg-orange">

                                <li class="active"><a href="/home">Home</a></li>
                                <li class="bg-darkGreen">
                                    <a class="dropdown-toggle" href="/about">About Us</a>
                                    <ul class="d-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="/sector">Customer Segments</a></li>
                                        <li><a href="/company">Our Company</a></li>
                                        <li><a href="/team">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="bg-darkGreen">
                                    <a class="dropdown-toggle" href="#">Operation Sectors</a>
                                    <ul class="d-menu" data-role="dropdown" style="display: none;">
                                        <li><a href="">Tree Crops</a></li>
                                        <li><a href="">Tree Crops</a></li>
                                        <li><a href="">Tree Crops</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="#/products">Products</a></li>
                                <li class=""><a href="/join-us">Join Us</a></li>
                                <li class=""><a href="/contact">Contact Us</a></li>


                            </ul>
                        </div>
                    </div>

                    <button class="button" id="joinBtn"><span class="mif-user-plus"></span> Register</button>
                </div>

            </div>
            <div class="desktop-app-bar container">

            </div>
        </div>
        <div id="brand-container">
            <div class="container">
                <div class="logo-container">
                    <img alt="Wetula Logo" src="../../sass/images/wetula_logo.png">
                </div>
                <div class="p-6" id="wetula_info">
                    <div class="d-flex flex-justify-end">
                        <div class="pos-relative">
                            <a class="button link dropdown-toggle"><span
                                class="mif-language mif-2x mr-4 fg-green"></span> English(UK)</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Espanol</a></li>
                            </ul>
                        </div>
                        <div class="pos-relative">
                            <a class="button link dropdown-toggle"><span class="mif-earth mif-2x mr-4 fg-green"></span>
                                Ghana</a>
                            <ul class="d-menu" data-role="dropdown">
                                <li><a href="#">Africa</a></li>
                                <li><a href="#">Asia</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex mt-2 flex-justify-end">
                        <p class="pl-2">
                            <span class="mif-mail fg-orange"></span>
                            <small>support@wetula.com</small>

                            <span class="mif-phone fg-orange"></span>
                            <small>+233(0) 245 4855 531</small>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="drop-shadow" id="nav-container">
            <div class="container">
                <ul class="h-menu fg-white" style="background: transparent">
                    <li class=" pt-1 pb-1"><a href="/">Home</a></li>
                    <li class="pt-1 pb-1"><a href="/about">About <span>Us</span></a></li>
                    <li class="pt-1 pb-1">
                        <a class="dropdown-toggle" href="#">Sectors</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li>
                                <a href="/sector">Cocoa</a>
                            </li>
                            <li><a href="/sector">Cashew</a></li>
                            <li class="divider"></li>
                            <li><a href="/sector">Maize</a></li>
                        </ul>
                    </li>
                    <li class="pt-1 pb-1"><a href="/product">Products</a></li>
                    <li class="pt-1 pb-1"><a href="/contact-us">Contact <span>Us</span></a></li>
                    <li class="pt-1 pb-1" id="join-nav-item"><a href="/join-us">Join Us</a></li>
                    <li class="pt-1 pb-1 place-right" id="login-nav-item"><a class="text-upper text-bold"
                                                                             href="/login"><span
                        class="mif-user"></span> Client Login</a></li>
                    <li class="pt-1 pb-1 place-right" id="register-nav-item"><a class=""
                                                                                href="/register"><span
                        class="mif-user-plus"></span> Create an Account</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-green w-75 pt-10" data-position="left" data-role="charms" id="geosettings-sidepanel">

            <h4> GeoSettings Panel
                <small class="place-right">
                    <a onclick="$('#geosettings-sidepanel').data('charms').toggle()">
                        <span class="mif-cross fg-white"></span>
                    </a>
                </small>

            </h4>

            <form class="pt-10">
                <div class="form-group">
                    <p class="text-leader mb-2"><span class="mif-earth2"></span> Select Region</p>
                    <select>
                        <option class="fg-cyan">Ghana</option>
                    </select>
                </div>
                <div class="form-group mt-10">
                    <p class="text-leader mb-2"><span class="mif-language"></span> Select Language</p>
                    <select>
                        <option class="fg-cyan">English (UK)</option>
                    </select>
                </div>
            </form>


        </div>
    </header>
</template>

<script>
    export default {
        name: "HeaderComponent",
        components: {},
        data: () => {
            return {}
        },
        mounted() {

        },
        methods: {
            toggleGeoSettingsPanel: function () {

            }
        }
    }
</script>

<style scoped>

</style>
