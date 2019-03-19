<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | About Us</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header class=" bg-white">

        <div id="app-bar-container">
            <div class="mobile-tab-app-bar container">
                <div class="geo-container p-1">
                    <button id="geoSettingsToggleBtn" class="button bg-white"><span class="mif-equalizer mif-2x"></span>
                        <span id="btnText" style="margin-top: -4px">Geo Settings</span></button>

                    <a id="language" class="button bg-white">
                        <span class="mif-language fg-green"></span>
                        <small>English</small>
                    </a>

                    <a id="continent" class=" button bg-white">
                        <span class="mif-earth fg-green"></span>
                        <small>Africa</small>
                    </a>
                    <a id="appbar_contact" class="button bg-white">
                        <span class="mif-phone fg-green"></span>
                        <small>Contact Us</small>
                    </a>

                </div>
                <div class="auth-container pt-2 p-1">
                    <a class="ml-2 mr-2 "><span class="mif-security"></span> Client Login</a>
                </div>
                <div class="menu-container p-1">
                    <a id="menuToggleBtn" class="button place-right"><span class="mif-menu "></span> <span
                            class="btnText"> Menu</span></a>

                    <button id="joinBtn" class="button"><span class="mif-user-plus"></span> Register</button>
                </div>

            </div>
            <div class="desktop-app-bar container">

            </div>
        </div>
        <div id="brand-container">
            <div class="container">
                <div class="logo-container">
                    <img src="{{asset('images/wetula_logo.png')}}" alt="">
                </div>
                <div id="wetula_info" class="p-6">
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
                    <li class=" pt-1 pb-1"><a href="{{url('/')}}">Home</a></li>
                    <li class="active pt-1 pb-1"><a href="{{url('/about')}}">About <span>Us</span></a></li>
                    <li class="pt-1 pb-1">
                        <a href="#" class="dropdown-toggle">Sectors</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li>
                                <a href="#">Cocoa</a>
                            </li>
                            <li><a href="#">Cashew</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Maize</a></li>
                        </ul>
                    </li>
                    <li class="pt-1 pb-1"><a href="#">Products</a></li>
                    <li class="pt-1 pb-1"><a href="#">Contact <span>Us</span></a></li>
                    <li class="pt-1 pb-1" id="join-nav-item"><a href="#">Join Us</a></li>
                    <li class="pt-1 pb-1 place-right" id="login-nav-item"><a href="#" class="text-upper text-bold"><span
                                class="mif-user"></span> Client Login</a></li>
                    <li class="pt-1 pb-1 place-right" id="register-nav-item"><a href="#" class=""><span
                                class="mif-user-plus"></span> Create an Account</a></li>
                </ul>
            </div>
        </div>

    </header>

    <div id="about-landing">
        <div id="featured-background">
            <div class="container">
                <h2 class="text-bold">About</h2>
                <h1>Wetula Platform</h1>
                <blockquote class="text-leader">
                    Chief driver of the quantum leap in farm performance.
                </blockquote>
                <h1 style="font-size: 5rem" class="symb-direct text-center">
                    <a href="#" class="no-decor fg-orange">
                        <span class="mif-chevron-thin-down ani-flash"></span>
                    </a>
                </h1>
            </div>
        </div>
        <div id="branded-lines"></div>
    </div>
    {{--Mission - Vision & Core Values --}}
    <div id="values-container" class="container">
        <div id="mission" class="bg-orange fg-white rounded value-item ">
            <p class="text-leader text-center"><span class="mif-airplane mif-2x"></span></p>
            <p class="text-center title-text text-bold text-leader">Mission Statement</p>
            <p class="text-leader2 text-center">
                Our mission is to have integrable hard & softwares that provide simplified small holder friendly
                precision agriculture technologies for the various actors in the various agriculture value chains.
            </p>
        </div>
        <div id="vision" class="bg-green fg-white rounded value-item ">
            <p class="text-leader text-center"><span class="mif-target mif-2x"></span></p>
            <p class="text-center title-text text-bold text-leader">Our Vision</p>
            <p class="text-leader2 text-center">
                To drive a quantum leap in farm performance, farmer life improvements and inclusive end-to-end solutions
                in not only cocoa, but along the major agriculture value chains globally.
            </p>
        </div>
        <div id="values" class="bg-orange fg-white rounded value-item ">
            <p class="text-leader text-center"><span class="mif-balance-scale mif-2x"></span></p>
            <p class="text-center title-text text-bold text-leader">Core Values</p>
            <p class="text-leader2 text-center">
                We maintain a unique culture, build resilient teams, employ innovation and use superior production
                processes
            </p>
        </div>
    </div>

    {{--Company Overview--}}
    <div id="company-overview">
        <div class="container pt-10 pb-10">
            <hr class="bg-orange w-25">
            <h3 class="text-center mb-10">Company Overview</h3>
            <div class="img-container rounded"></div>

            <section class="pt-4 pb-4">
                <figure class="float-right mr-8 " data-aos="zoom-in-right">
                    <img alt="Company Picture" src="{{asset('images/company_picture_1.jpg')}}">
                </figure>
                <p class="text-leader2">

                    Despite the prolonged inertia in digitizing Africa’s agriculture, the industry makes significant
                    global gains amounting to billions of dollars. The sector also continues to show steady growth and
                    promising prospects for Africa in the coming years. Agriculture and agribusiness accounts for 32
                    percent of GDP in Sub-Saharan Africa and employs 65 percent of the work force. Entry level barriers
                    (other than adoption issues and the need to obtain state-based licenses and registrations) in the
                    industry have spawned more middle men (mid-level actors).
                </p>

                <p class="text-leader2">
                    Farmbridge Systems Limited has strategically positioned itself along the value chains in emerging
                    markets of agricultural digitization and automation. We are building a unique and innovative
                    demand-led value-chain that would be based on long-term linkages between producers, buyers and other
                    key market players such as suppliers of finance, inputs and technical professionals.
                </p>

                <p class="text-leader2">
                    Competition in the sector is largely based on reputation and proven performance as many new
                    competitors find it difficult to quickly establish a foothold in the digital market. Existing firms
                    have several advantages relative to new entrants. They: have access to a pool of resourceful small
                    holder schemes; have ongoing arrangements with these schemes and value chain actors; have ongoing
                    arrangements with financial institutions and input supplier schemes; and enjoy public display in
                    local markets and leverage "word-of-mouth" referrals.

                </p>

                <p class="text-leader2">
                    Farmbridge Systems Limited focuses its expertise to discover, manufacture and market innovative
                    digital solutions for private businesses, Governments and Non-Governmental Organizations. As a
                    leading technology company in Africa, we are devoted to providing excellent and high-quality cost
                    efficient sustainable solutions, and customer-tailored products and services. Our commitments
                    stretch beyond discovering and manufacturing integrated applications and translates into
                    comprehensively innovative product portfolios, including solutions for all value chains.
                </p>
            </section>
        </div>
    </div>
    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
