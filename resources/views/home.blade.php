<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="metro4:init" content="false">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rural Smile Foundation  | @yield('page_title')</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app" >
            {{--Header--}}
            <header class=" bg-white">

                    <div id="app-bar-container" >
                        <div class="mobile-tab-app-bar container">
                            <div class="geo-container p-1">
                                <button  id="geoSettingsToggleBtn" class="button bg-white"><span class="mif-equalizer mif-2x"></span> <span id="btnText" style="margin-top: -4px">Geo Settings</span></button>

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
                                <a id="menuToggleBtn" class="button place-right"><span class="mif-menu "></span> <span class="btnText"> Menu</span></a>

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
                                        <a class="button link dropdown-toggle"><span class="mif-language mif-2x mr-4 fg-green"></span> English(UK)</a>
                                        <ul class="d-menu" data-role="dropdown">
                                            <li><a href="#">English (UK)</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Espanol</a></li>
                                        </ul>
                                    </div>
                                    <div class="pos-relative">
                                        <a class="button link dropdown-toggle"><span class="mif-earth mif-2x mr-4 fg-green"></span> Ghana</a>
                                        <ul class="d-menu" data-role="dropdown">
                                            <li><a href="#">Africa</a></li>
                                            <li><a href="#">Asia</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex mt-2 flex-justify-end" >
                                    <p class="pl-2">
                                        <span class="mif-mail fg-orange"></span> <small>support@wetula.com</small>

                                        <span class="mif-phone fg-orange"></span> <small>+233(0) 245 4855 531</small>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="drop-shadow" id="nav-container">
                        <div class="container">
                            <ul class="h-menu fg-white" style="background: transparent">
                                <li class="active pt-1 pb-1"><a href="#">Home</a></li>
                                <li class="pt-1 pb-1"><a href="#">About <span>Us</span></a></li>
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
                                <li class="pt-1 pb-1 place-right" id="login-nav-item"><a href="#" class="text-upper text-bold"><span class="mif-user"></span> Client Login</a></li>
                                <li class="pt-1 pb-1 place-right" id="register-nav-item"><a href="#" class=""><span class="mif-user-plus"></span> Create an Account</a></li>
                            </ul>
                        </div>
                    </div>

            </header>

            {{--Carousel--}}
            <div id="carousel" class="z-1" data-aos="zoom-out" data-role="carousel"
                 data-cls-bullet="bullet-big"
                 data-auto-start="true"
                 data-cls-controls="fg-white"
                 data-bullets-position="right"
                 data-controls-on-mouse="true"
                 data-height="@ (max-width: 1600px),600 |  (max-width: 768px),4/3 | (max-width: 700px), 500 | (max-width: 576px),480"
                 data-control-next="<span class='mif-chevron-right fg-white'></span>"
                 data-control-prev="<span class='mif-chevron-left fg-white'></span>">
                <div class="slide p-2  pl-10 pr-10" data-cover="images/sliders/slider1.jpg">
                    <div class="row flex-align-center h-100 ">
                        <div class="ml-20 cell-md-6 op-orange mt-20 text-center pt-8 pb-8" data-aos="fade-left "
                             data-aos-easing="ease-in-sine" data-aos-offset="300">
                            <h1 class="fg-white carousel-title"> <span class="text-light">Welcome to</span> <span class="text-bold">Wetula</span></h1>
                            <p class="fg-white carousel-text text-leader">"The chief driver of quantum leaps in farm performance in Africa.</p>
                        </div>
                        <div class="cell-md-6">
                        </div>
                    </div>
                </div>

                <div class="slide  p-2 pl-10 pr-10" data-cover="images/sliders/slider1.jpg">
                    <div class="row flex-align-center h-100">
                        <div class="ml-20 cell-md-6 op-green mt-20 text-center pt-8 pb-8" data-aos="fade-right">
                            <h1 class="fg-white carousel-title"> Your number one business destination</h1>
                            <p class="fg-white carousel-text text-leader">in the Garden City</p>
                        </div>
                        <div class="cell-md-6">
                        </div>
                    </div>
                </div>

                <div class="slide p-2 pl-10 pr-10" data-cover="images/sliders/slider1.jpg">
                    <div class="row flex-align-center h-100">
                        <div class="ml-20 cell-md-6 op-brown mt-20 text-center pt-8 pb-8">
                            <h1 class="fg-white carousel-title"> A Great place for your conference.</h1>
                            <p class="fg-white carousel-text text-leader">Modern conference room designed specifically for you</p>
                        </div>
                        <div class="cell-md-8">
                        </div>
                    </div>
                </div>
            </div>

            {{--Opening Message--}}
            <div id="opening-message">
                <div class="container pt-10 pb-10">
                    <h2 class="text-center text-bold ">World-Class Platform
                        Built by Industry Experts</h2>

                    <p class="text-center text-leader2 pt-4 pb-4">Wetula empowers farmers and organizations with software and hardware tools to help them increase productivity.</p>

                    <div class="d-flex flex-justify-center">
                        <iframe style="margin: 0 auto" width="560" height="315" src="https://www.youtube-nocookie.com/embed/vAlG-i5KE7k?start=17" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
            </div>
        </div>

            {{--Customer Segments--}}
            <div id="customer-segments-overview">
                <div class="container pt-10 pb-10">
                    <h2 class="text-center text-bold ">Our Customer Segments</h2>

                    <p class="text-center text-leader2 pt-4 pb-4">Wetula provides a range of services to farmers and various stakeholders on the value chain.
                        We are committed to adding new customer segments to the platform.</p>
                    
                    <div class="customers-container">
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/farmers.png')}}" alt="">
                            </div>
                            <p>Farmers</p>
                        </div>
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/input_suppliers.png')}}" alt="">
                            </div>
                            <p>Input Suppliers</p>
                        </div>
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/financial.png')}}" alt="">
                            </div>
                            <p>Financial Services</p>
                        </div>
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/insurance.png')}}" alt="">
                            </div>
                            <p>Insurance Companies</p>
                        </div>
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/crop_marketing.png')}}" alt="">
                            </div>
                            <p>Crop Marketing</p>
                        </div>

                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/software.png')}}" alt="">
                            </div>
                            <p>Apps & Software</p>
                        </div>

                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/aggregators.png')}}" alt="">
                            </div>
                            <p>Aggregators</p>
                        </div>

                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/equipment_suppliers.png')}}" alt="">
                            </div>
                            <p>Equipment Suppliers</p>
                        </div>

                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/retailers.png')}}" alt="">
                            </div>
                            <p>Ag Retailers</p>
                        </div>
                        <div class="customer-item">
                            <div>
                                <img src="{{asset('images/customers/ngos.png')}}" alt="">
                            </div>
                            <p>NGOs</p>
                        </div>
                    </div>

                </div>
            </div>

            {{--Join the Platform --}}
            <div id="join-platform-call">
                <div class="container pt-10 pb-10">
                    <h1 class="text-center fg-white">Join the Platform</h1>
                    <p class="text-center text-leader2">For the 50 million smallholder families in Africa who do not have a credit score, a secured financial Identity—, backed by money in or out of an account—we build digital financial history, promote savings and enable digital transactions for productivity, profitability and resilience.</p>

                    <button class="button mt-8 fg-white rounded large ">Register Now</button>
                </div>

            </div>


            {{--Featured Product--}}
            <div id="featured-product">
                <div class="">
                    <div id="intro" class="container">
                        <h2 class="text-bold text-upper">Our Product</h2>
                        <hr class="w-25 bg-orange">
                        <h3 class="text-bold mt-12">Introducing</h3>
                        <h1 class="mt-4">The Wetula Faire Weigh Scale</h1>

                        <div class="img-container shadow-1">
                            <img src="{{asset('images/scale/scale_1.png')}}" alt="Wetula Scale">

                        </div>

                    </div>
                    <div id="content" class=" pb-10 pt-10">
                       <div class="content-container container">
                           <div class="img-container shadow-1">
                               <img src="{{asset('images/scale/scale_1.png')}}" alt="Wetula Scale">

                           </div>


                           <h3 class="text-bold mt-12">Introducing</h3>
                           <h1 class="mt-4">The Wetula Faire Weigh Scale</h1>



                           <p class="text-leader2">Constructed of food grade stainless steel, the Wetula fair weigh scale is designed for minimum human operability. It remedies the age-old problem of rigging, cheating and the lack of transacted records for farmers. It provides for efficient management, traceable sourcing, transparent and accountable resource use. </p>

                           <p class="text-leader2">
                               And incentivizes the smallholder farmer with more revenue whilst also indirectly providing for better rural livelihoods and more food to feed global population, in the world’s quest to produce food sustainably.
                           </p>

                           <button class="mt-4 fg-white button large rounded">Visit Product Page <span class="mif-chevron-right"></span></button>
                       </div>
                       </div>
                </div>
            </div>


            {{--Developer Portal--}}
            <div id="developer-portal">
                <div class="container pt-20 pb-20 ">
                    <h2 class="text-center text-bold">Wetula Developer Portal</h2>
                    <p style="font-weight: 500" class="text-leader2 text-center">Make Smarter Data Decisions for your Business using Wetula APIs</p>

                    <div class="feature-container mt-10">
                        <div class="feature-item">
                            <img src="{{asset('images/code.png')}}" alt="">
                            <p class="text-leader2 text-bold">Build your Apps</p>
                            <p class="subtext">Create apps for your business utilizing the Wetula API. Get access to farmers data.</p>
                        </div>
                        <div class="feature-item">
                            <img src="{{asset('images/libraries.png')}}" alt="">
                            <p class="text-leader2 text-bold">Multiple Languages & Libraries</p>
                            <p class="subtext">Use your favourite programming languages and favorite frontend libraries. </p>
                        </div>
                        <div class="feature-item">
                            <img src="{{asset('images/documentation.png')}}" alt="">
                            <p class="text-leader2 text-bold">Documentation & Support</p>
                            <p class="subtext">Documentation is available with direct developer support from our  technical team</p>
                        </div>
                    </div>

                    <div class="portal-call-action-container mt-10">
                        <button class="button rounded fg-white large">Visit our Developer Portal</button>
                    </div>
                </div>
            </div>


            {{--Our Founder--}}
            <div id="our-founder">
                <div class="founder-photo">
                    <h2>Our Founder</h2>

                    <div class="img-container shadow-1">
                        <img src="{{asset('images/nabin_founder.jpg')}}" alt="Joseph Nabin">
                    </div>
                    <div class="founder-name p-4 bg-white">
                        <p class="fg-darkRed text-leader2 text-upper text-center">Joseph N. Nabin (C.E.O)</p>
                    </div>
                </div>
                <div class="founder-content">
                    <div class="container">
                        <h2>Our Founder</h2>




                        <div class="img-container shadow-1">
                            <img src="{{asset('images/nabin_founder.jpg')}}" alt="Joseph Nabin">
                        </div>

                        <div  class="founder-name p-4 bg-white">
                            <p class="fg-darkRed text-leader2 text-upper text-center">Joseph N. Nabin (C.E.O)</p>
                        </div>
                        <p class="text-leader2">
                            At Farmbridge Systems Limited, our hearts are with the over 50 million smallholder families in Africa who do not have a credit score, a secured financial Identity—, backed by money in or out of their accounts—, we will build their digital financial histories, promote their savings and enable their digital transactions for productivity, profitability and resilience.
                            <br><br>The Wetula fair weigh technology offered by Farmbridge Systems Limited, makes the weighing scale a very high-tech device used in the agriculture sector and provides very accurate measures with equivalent monetary values and integrated with instant mobile money payments anywhere for financial inclusion.

                        </p>
                    </div>
                </div>
            </div>

            {{--Contact Us Call-to-Action--}}
            <div id="contact-us-call">
                <div class="container pt-15 pb-20">
                    <h3 class="text-bold text-center">How can we help you?</h3>
                    <p class="text-leader2 text-center">
                        It's likely you might have some questions or might need to clarify certain things . <br>
                        Feel free to contact our support team for immediate assistance
                        <br>
                        <button class="button mt-10 large rounded fg-white text-upper">Contact Us Today</button>
                    </p>


                </div>
            </div>

        </div>


    </body>

    <script src="{{asset('js/app.js')}}"></script>
</html>
