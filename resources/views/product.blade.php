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
                    <li class="pt-1 pb-1"><a href="{{url('/about')}}">About <span>Us</span></a></li>
                    <li class=" pt-1 pb-1">
                        <a href="#" class="dropdown-toggle">Sectors</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li>
                                <a href="{{url('/sector')}}">Cocoa</a>
                            </li>
                            <li><a href="{{url('/sector')}}">Cashew</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('/sector')}}">Maize</a></li>
                        </ul>
                    </li>
                    <li class="active pt-1 pb-1"><a href="{{url('/product')}}">Products</a></li>
                    <li class="pt-1 pb-1"><a href="{{url('/contact-us')}}">Contact <span>Us</span></a></li>
                    <li class="pt-1 pb-1" id="join-nav-item"><a href="{{url('/join-us')}}">Join Us</a></li>
                    <li class="pt-1 pb-1 place-right" id="login-nav-item"><a href="{{url('/login')}}"
                                                                             class="text-upper text-bold"><span
                                class="mif-user"></span> Client Login</a></li>
                    <li class="pt-1 pb-1 place-right" id="register-nav-item"><a href="{{url('/register')}}"
                                                                                class=""><span
                                class="mif-user-plus"></span> Create an Account</a></li>
                </ul>
            </div>
        </div>

    </header>

    <div id="product-page" class="content-wrapper">
        <div id="product-landing" class="drop-shadow bg-white">
            <div class="container pt-10 pb-10">
                <div class="text-content">
                    <p class="text-leader">Introducing the all new</p>
                    <h1 class="mt-4">Wetula Faire Scale</h1>
                    <p class="text-leader text-light subtext">
                        For your transparent weighing, payment and recording
                        of food crops at the Farm Gate.
                    </p>

                    <div class="action-call mt-4">
                        <button class="button large bg-green fg-white "><span class="mif"></span>Smart Features</button>
                        <button class="button large bg-orange fg-white">Order Today <span
                                class="mif-arrow-right"></span></button>
                    </div>

                </div>
                <div class="img-container">
                    <img src="{{asset('images/scale/scale_2.png')}}" alt="Wetula Faire Scale">
                </div>
                <div class="action-call">
                    <button class="button large bg-green fg-white "><span class="mif"></span>Smart Features</button>
                    <button class="button large bg-orange fg-white">Order Today <span class="mif-arrow-right"></span>
                    </button>
                </div>

            </div>

        </div>

        <div id="product-description">
            <div class="container pt-10 pb-10">
                <h2 class="text-bold text-center fg-orange">The Wetula Faire Weigh Scale</h2>
                <p class="text-center text-leader2">
                    The Wetula fair weigh technology scales, ensure fairness, offers instant e-payments, provides
                    real-time actionable data, gives financial service identity and provides guarantees for a
                    transparent and inclusive financial service access for smallholder farmers and their trading
                    partners with increased incomes.
                </p>

                <div class="video-section mt-10">
                    <iframe style="margin: 0 auto" src="https://www.youtube-nocookie.com/embed/vAlG-i5KE7k?start=17"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    <div class="see-it-text">
                        <h3 class="fg-orange"><span class="mif-youtube-play fg-green"></span> See it in Action</h3>
                        <p class="mb-8 text-leader2">It is easy to see that, reducing complexity for our customer helps
                            reduce complexity for our vendor, lowering the friction to sell and to deliver our products.
                            <br><br>
                            This means a more capital efficient model - one which would hopefully scale much quicker and
                            cost less to build products, sell, and support customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="product-feature">
            <div class="container pt-10 pb-10">

                <div>
                    <div id="smart_features">
                        <h3 class="fg-orange text-bold text-center">Smart Features</h3>
                        <hr class="bg-green">
                        <div class="smart-features-container p-8">
                            <div class="smart-feature-item">
                                <div class="img-container w-100 d-flex flex-justify-center">
                                    <img src="{{asset('images/smart_features/intelligence.png')}}" alt="Intelligence">
                                </div>
                                <p class="text-leader text-center fg-green text-bold">Intelligence</p>
                                <p class="text-leader2 text-center" style="font-style: italic">
                                    The Scale measures weight by use of a load cell. Values collected by the hardware is
                                    then processed by a single board computer, encrypted and stored on a local database
                                    while passing these same collected values via an API to a cloud-based platform where
                                    the values are stored with respect to the unique user accounts.
                                </p>
                            </div>
                            <div class="smart-feature-item">
                                <div class="img-container w-100 d-flex flex-justify-center">
                                    <img src="{{asset('images/smart_features/hardware.png')}}" alt="Custom Hardware">
                                </div>
                                <p class="text-leader text-center fg-green text-bold">Custom Hardware</p>
                                <p class="text-leader2 text-center" style="font-style: italic">
                                    The Scale measures weight by use of a load cell. Values collected by the hardware is
                                    then processed by a single board computer, encrypted and stored on a local database
                                    while passing these same collected values via an API to a cloud-based platform where
                                    the values are stored with respect to the unique user accounts.
                                </p>
                            </div>
                            <div class="smart-feature-item">
                                <div class="img-container w-100 d-flex flex-justify-center">
                                    <img src="{{asset('images/smart_features/internet.png')}}" alt="Internet & GSM">
                                </div>
                                <p class="text-leader text-center fg-green text-bold">Internet & GSM</p>
                                <p class="text-leader2 text-center" style="font-style: italic">
                                    The Scale measures weight by use of a load cell. Values collected by the hardware is
                                    then processed by a single board computer, encrypted and stored on a local database
                                    while passing these same collected values via an API to a cloud-based platform where
                                    the values are stored with respect to the unique user accounts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="why_use">Applications</div>
                    <div id="pricing_model">Music</div>
                </div>
            </div>
        </div>


    </div>


    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
