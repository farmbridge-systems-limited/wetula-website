<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | NGOs</title>
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
                    <h1 class="fg-orange">NGOs</h1>
                    <p class="text-leader2">Some tagline here</p>
                </div>
                <img src="{{asset('images/customers/ngos-circular-icon.png')}}"/>
            </div>
            <form id="segment-login-widget" class="rounded op-white">
                <h4 class="fg-orange text-center"><span class="mif-key"></span> NGOs Login</h4>

                <div class="form-group">
                    <input type="email" placeholder="Enter email"/>
                    <small hidden class="text-muted fg-red">Username is required</small>
                </div>
                <div class="form-group mb-2">
                    <input type="email" placeholder="Enter email"/>
                    <small hidden class="text-muted">Password is required</small>
                </div>
                <button class="button w-100 d-block bg-green success">Login</button>
                <button class="button w-100 mt-1 d-block bg-orange success">Create an Account</button>
                <a href="#" class="no-decor d-block w-100 pt-3 text-center fg-orange"><span class="mif-lock"></span>Forgot my password?</a>
            </form>
        </div>

        <customer-segment-nav-component></customer-segment-nav-component>

        <div id="sector-content">
            <div class="container pt-10 pb-10">
                <div id="overview" class="sector-overview">
                    <hr class="bg-green ">
                    <h2 class="text-center text-bold fg-orange mt-8 mb-8">Overview</h2>

                    <div class="sector-overview-content">
                        <div id="sector-video" class="d-flex flex-justify-center">
                            <iframe style="margin: 0 auto"
                                    src="https://www.youtube-nocookie.com/embed/vAlG-i5KE7k?start=17"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                        </div>
                        <p class="overview-text text-leader">
                            Actively automating and networking smallholder farmers' farm activity and trade data
                            collection,
                            storage and retrieval in real-time anywhere and anytime. Actively automating and networking
                            smallholder farmers' farm activity and trade data collection, storage and retrieval in
                            real-time
                            anywhere and anytime.
                        </p>
                    </div>
                </div>

                <div id="benefits" class="sector-benefits">
                    <hr class="bg-green ">
                    <h2 class="text-center text-bold fg-orange mt-4 mb-8">Benefits</h2>

                    <ul class="">
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
                        <li class="bg-light rounded selected-item p-10">
                            <h4>Verified Farmlands </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </li>
                        <li class="bg-light rounded p-10">
                            <h4>Wetula ID</h4>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </li>
                        <li class="bg-light rounded p-10">
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
                                <h3 class="fg-white text-center text-upper">NGOs</h3>
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

        <div id="contact-us-call">
            <div class="container pt-10 pb-10">
                <h1 class="text-center ">How can we help you?</h1>
                <p class="text-center text-leader">It's likely you might have some questions or might need to clarify
                    certain things . <br>
                    Feel free to contact out support team for immediate assistance

                    <br>
                    <br>
                    <button class="button bg-orange fg-white large rounded">Contact Us Today</button>
                </p>
            </div>
            o
        </div>

    </div>


    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
<script>

</script>
</html>
