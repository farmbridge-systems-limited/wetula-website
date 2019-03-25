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
    <header-component></header-component>

    <div style="padding-top: 164px" class="content-wrapper customer-segment-page pt-10-md">
        <div id="segment-landing">
            <div class="sector-title-widget d-flex flex-align-center drop-shadow bg-white">
                <div>
                    <h1 class="fg-orange">Farmers</h1>
                    <p class="text-leader2">Small Share-holder farmers</p>
                </div>
                <img src="{{asset('images/customers/farmers-circular-icon.png')}}"/>
            </div>
            <div id="segment-login-widget" class="bg-white">
                <h2 class="fg-orange"><span class="mif-goat"></span> Farmers Login</h2>
            </div>
        </div>

        <nav class="container">

            <ul id="scrolltab" class="inline-list d-flex flex-justify-center">
                <li class="active"><a href="#overview" class="button large">Overview</a></li>
                <li><a href="#benefits" class="button large">Benefits</a></li>
                <li><a href="#requirements" class="button large">Requirements</a></li>
                <li><a href="#pricing" class="button large">Pricing</a></li>
            </ul>
        </nav>

        <div id="sector-content">
            <div class="container pt-10 pb-10">
                <div id="overview" class="sector-overview">
                    <hr class="bg-green ">
                    <h2 class="text-center text-bold fg-orange mt-8 mb-8">Overview</h2>

                    <div id="sector-video" class="d-flex flex-justify-center">
                        <iframe style="margin: 0 auto" src="https://www.youtube-nocookie.com/embed/vAlG-i5KE7k?start=17"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                    </div>
                    <p class="overview-text text-leader2">
                        Actively automating and networking smallholder farmers' farm activity and trade data collection,
                        storage and retrieval in real-time anywhere and anytime. Actively automating and networking
                        smallholder farmers' farm activity and trade data collection, storage and retrieval in real-time
                        anywhere and anytime.
                    </p>
                </div>

                <div id="benefits" class="sector-benefits">
                    <hr class="bg-green ">
                    <h2 class="text-center text-bold fg-orange mt-4 mb-8">Benefits</h2>

                    <ul class="b">
                        <li class="">
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi.
                            </p>
                        </li>
                        <li>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cupiditate dolores
                                earum fugiat impedit ratione sit tempore veritatis!
                            </p>
                        </li>
                        <li>
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cupiditate dolores
                                earum fugiat impedit ratione sit tempore veritatis!
                            </p>
                        </li>
                    </ul>
                </div>

                <div id="requirements" class="sector-requirements">
                    <hr class="bg-green ">
                    <h2 class="text-center text-bold fg-orange mt-4 mb-8">Registration Requirements</h2>
                    <p class="text-center">
                        To complete your registration successfully as a farmer, you will need to meet the following
                        requirements.
                    </p>

                    <ul class="step-list">
                        <li>
                            <h4>Verified Farmlands </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </li>
                        <li>
                            <h4>Wetula ID</h4>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </li>
                        <li>
                            <h4>Verified farmlands</h4>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                        </li>
                    </ul>
                </div>

                <div id="pricing" class="sector-pricing">
                    <hr class="bg-green">
                    <h2 class="text-center text-bold fg-orange mt-4 mb-8">Pricing Model</h2>


                    <div class="pricing-container mt-16 ">
                        <div class="price-table border border-2 mb-10 bd-green">
                            <div class="bg-green p-8">
                                <h3 class="fg-white text-center text-upper">Farmers</h3>
                            </div>

                            <div
                                class="d-flex flex-justify-center border border-1 bd-green p-6 border-left-none border-right-none">
                                <img width="100" height="100" src="{{asset('images/pricing/free.png')}}"
                                     alt="Farmers free">
                            </div>
                            <div
                                class="pt-6 pb-6 border d-flex flex-column flex-align-center border-1 bd-green border-left-none border-right-none border-bottom-none">

                                <p>Field-based usage</p>
                                <p>Must have a Wetula Farmers Account</p>
                                <button class="button mt-8 large rounded bg-green fg-white">Register Now</button>
                            </div>
                        </div>
                    </div>
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
