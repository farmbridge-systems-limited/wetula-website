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
                    <div id="why_use" class="pt-12">
                        <h3 class="fg-orange text-bold text-center">Why use Wetula Faire Scale</h3>
                        <hr class="bg-green">
                        <div class="punchlines-container pt-16">
                            <div class="punchline-item">
                                <div class="item-icon">
                                    <div
                                        class="img-container d-flex flex-column flex-align-center  border border-1 bd-orange p-8">
                                        <img src="{{asset('images/punchlines/sell.png')}}" alt="">
                                        <p class="text-leader2 text-bold fg-green">Easy to Sell</p>
                                    </div>

                                </div>
                                <ul class="punchstatments unstyled-list">
                                    <li><span class="mif-stop"></span>Shorter sales cycles-do not have to test
                                        extensively in a customer's environment.
                                    </li>
                                    <li><span class="mif-stop"></span>Lends itself to tele sales, can demo over phone
                                        and Web, do not need a huge sales infrastructure to close deals (just need quote
                                        bearing reps without a huge staff of sales engineers and professional services
                                        guys to get the job done).
                                    </li>
                                    <li><span class="mif-stop"></span>Not a capital expense, usually sold as monthly or
                                        annual subscription which can many times be taken out of business budget as
                                        opposed to IT budget.
                                    </li>

                                </ul>
                            </div>

                            <div class="punchline-item">
                                <div class="item-icon">
                                    <div
                                        class="img-container d-flex flex-column flex-align-center  border border-1 bd-orange p-8">
                                        <img src="{{asset('images/punchlines/installer.png')}}" alt="">
                                        <p class="text-leader2 text-bold fg-green">Easy to Install</p>
                                    </div>

                                </div>
                                <ul class="punchstatments unstyled-list">
                                    <li><span class="mif-stop"></span>No messy installation process, long testing
                                        process, or fast hardware delivered to customer.
                                    </li>
                                    <li><span class="mif-stop"></span>Can leave a customer and simply point them to a
                                        URL, train them over the phone, and get them up and running.
                                    </li>
                                    <li><span class="mif-stop"></span>All of this means that the business can scale
                                        rapidly.
                                    </li>

                                </ul>
                            </div>


                            <div class="punchline-item">
                                <div class="item-icon">
                                    <div
                                        class="img-container d-flex flex-column flex-align-center  border border-1 bd-orange p-8">
                                        <img src="{{asset('images/punchlines/support.png')}}" alt="">
                                        <p class="text-leader2 text-bold fg-green">Cheap Support</p>
                                    </div>

                                </div>
                                <ul class="punchstatments unstyled-list">
                                    <li><span class="mif-stop"></span>Browser-based delivery and richer client
                                        interfaces like DHTML make it easy to use for the customer - less training -
                                        less customer support costs.
                                    </li>


                                </ul>
                            </div>

                            <div class="punchline-item">
                                <div class="item-icon">
                                    <div
                                        class="img-container d-flex flex-column flex-align-center  border border-1 bd-orange p-8">
                                        <img src="{{asset('images/punchlines/integration.png')}}" alt="">
                                        <p class="text-leader2 text-bold fg-green">Easy Integration</p>
                                    </div>

                                </div>
                                <ul class="punchstatments unstyled-list">
                                    <li><span class="mif-stop"></span>Our standard APIs makes it easier for software
                                        delivered as a service to integrate disparate systems.
                                    </li>
                                    <li><span class="mif-stop"></span>Once again, reduces costs to deliver product to
                                        customers and also removes obstacles to getting customers.
                                    </li>

                                </ul>
                            </div>

                            <div class="punchline-item">
                                <div class="item-icon">
                                    <div
                                        class="img-container d-flex flex-column flex-align-center  border border-1 bd-orange p-8">
                                        <img src="{{asset('images/punchlines/apis.png')}}" alt="">
                                        <p class="text-leader2 text-bold fg-green">APIs & SDKs</p>
                                    </div>

                                </div>
                                <ul class="punchstatments  unstyled-list">
                                    <li><span class="mif-stop"></span>Versus a few years ago, bandwidth, storage,
                                        servers, and software are much cheaper now.
                                    </li>
                                    <li><span class="mif-stop"></span>Think Linux, Intel boxes, cheap bandwidth,
                                        commodity software stacks, and smarter entrepreneurs changing the economics of
                                        building and delivering software as a service.

                                    </li>
                                    <li><span class="mif-stop"></span>The economics speak for themselves.</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div id="pricing_model" class="pt-12 pb-10">
                        <h3 class="fg-orange text-bold text-center">Pricing Model</h3>
                        <hr class="bg-green">

                        <div class="pricing-container mt-16">
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
                            <div class="price-table border border-1 mb-10 bd-orange">
                                <div class="bg-orange p-8">
                                    <h3 class="fg-white text-center text-upper">Corporates</h3>
                                </div>

                                <div class="d-flex flex-justify-center border border-1 bd-orange p-6">
                                    <img width="100" height="100" src="{{asset('images/pricing/subscription.png')}}"
                                         alt="Farmers free">
                                </div>
                                <div class="pt-6 pb-6 border d-flex flex-column flex-align-center border-1 bd-orange">

                                    <p>Must be a registred corporation</p>
                                    <p>Bulk accounts management</p>
                                    <p>Access APIs & SDKs</p>
                                    <p>Full time technical support </p>
                                    <button class="button mt-8 large rounded bg-orange fg-white">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="product-order-call-to-action">
            <div class="container pt-10 pb-10">
                <h1 class="text-center fg-white">Now in Stock</h1>
                <p class="text-leader text-center fg-lightGray">
                    The Wetula Faire Scales are now available in stock for orders.
                    You may place an order today.
                    <br>
                    <br>
                    <button class="button large rounded fg-white bg-orange">Place an order today</button>
                </p>
            </div>
        </div>


    </div>


    {{--Footer--}}
    @include('components.footer')

</div>


</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
