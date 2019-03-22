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
                    <li class=" pt-1 pb-1"><a href="{{url('/product')}}">Products</a></li>
                    <li class="active pt-1 pb-1"><a href="{{url('/contact-us')}}">Contact <span>Us</span></a></li>
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

    <div id="contact-page" class="content-wrapper">
        <div id="contact-header" class="drop-shadow bg-green">
            <div class="container pt-10 pb-10">
                <h1 class="mt-4 fg-white text-center">Contact Us</h1>
                <p class="text-leader2 fg-white text-light text-center subtext">
                    Please give us a message, if you need to make some enquiries or support from Us. <br>
                    We are readily at your service.
                </p>


            </div>


        </div>
        <div style="background-image: url({{asset('images/cocoa.gif')}})" class="contact-form   pt-10 pb-10">
            <div class="container">
                <div class="form-container   rounded bg-lightGray">
                    <h2 class="fg-orange text-center">Write us a message</h2>
                    <br>
                    <form class="">
                        <div class="form-group">
                            <input data-prepend="<span class='mif-mail'></span>" type="email" placeholder="Your name"/>
                            <small hidden class="text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Email Address"/>
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="" cols="30" rows="7"></textarea>
                        </div>

                        <div class="form-group d-flex flex-justify-center">
                            <button class="button large rounded success">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>


    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyEBbnGhCIgALnVG82bVwQPCQmHl3KXzQ"></script>
<script>

</script>
</html>
