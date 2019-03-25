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

    <div id="about" class="content-wrapper">
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
                    To drive a quantum leap in farm performance, farmer life improvements and inclusive end-to-end
                    solutions
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
                <div class="img-container thumbnail rounded"></div>

                <section class="pt-4 pb-4">
                    <figure class="float-right mr-8 " data-aos="zoom-in-right">
                        <img alt="Company Picture" src="{{asset('images/company_picture_1.jpg')}}">
                    </figure>
                    <p class="text-leader2">

                        Despite the prolonged inertia in digitizing Africa’s agriculture, the industry makes significant
                        global gains amounting to billions of dollars. The sector also continues to show steady growth
                        and
                        promising prospects for Africa in the coming years. Agriculture and agribusiness accounts for 32
                        percent of GDP in Sub-Saharan Africa and employs 65 percent of the work force. Entry level
                        barriers
                        (other than adoption issues and the need to obtain state-based licenses and registrations) in
                        the
                        industry have spawned more middle men (mid-level actors).
                    </p>

                    <p class="text-leader2">
                        Farmbridge Systems Limited has strategically positioned itself along the value chains in
                        emerging
                        markets of agricultural digitization and automation. We are building a unique and innovative
                        demand-led value-chain that would be based on long-term linkages between producers, buyers and
                        other
                        key market players such as suppliers of finance, inputs and technical professionals.
                    </p>

                    <p class="text-leader2">
                        Competition in the sector is largely based on reputation and proven performance as many new
                        competitors find it difficult to quickly establish a foothold in the digital market. Existing
                        firms
                        have several advantages relative to new entrants. They: have access to a pool of resourceful
                        small
                        holder schemes; have ongoing arrangements with these schemes and value chain actors; have
                        ongoing
                        arrangements with financial institutions and input supplier schemes; and enjoy public display in
                        local markets and leverage "word-of-mouth" referrals.

                    </p>

                    <p class="text-leader2">
                        Farmbridge Systems Limited focuses its expertise to discover, manufacture and market innovative
                        digital solutions for private businesses, Governments and Non-Governmental Organizations. As a
                        leading technology company in Africa, we are devoted to providing excellent and high-quality
                        cost
                        efficient sustainable solutions, and customer-tailored products and services. Our commitments
                        stretch beyond discovering and manufacturing integrated applications and translates into
                        comprehensively innovative product portfolios, including solutions for all value chains.
                    </p>
                </section>
            </div>
        </div>


        {{--Our Team--}}

        <div id="our-team">
            <div class="container pt-10 pb-10">
                <hr class="bg-orange w-25">
                <h3 class="text-center mb-10">Our Team</h3>

                <div class="members">
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="member-card img-container thumbnail">
                        <img src="{{asset('images/team/joe_nabin.jpg')}}" alt="Joe Nabin">
                        <div class="image-overlay op-green d-flex flex-column flex-justify-center">
                            <h4>Joseph N. Nabin</h4>
                            <p class="text-leader2">Chief Executive Officer</p>
                            <ul class="mt-8 inline-list">
                                <li><a href="#"><span class="mif-facebook mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-twitter mif-3x"></span></a></li>
                                <li><a href="#"><span class="mif-linkedin mif-3x"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Call to Action--}}

        <div id="aboutpage-call-to-action">
            <div class="container pt-10 pb-10">
                <p class="text-leader2 text-center text-bold text-upper fg-white">Learn more about </p>
                <h2 class="text-center fg-white mt-2">Our Customer Segments</h2>

                <p class="text-leader2 fg-white pl-4 pr-4 text-center">
                    Whilst we will be working with farmers and other stakeholder institutions and individuals in the
                    agricultural sector, we have analyzed the various small holder agriculture value chains. And we have
                    determined that, of the 500 million small holder households in Africa, our innovative technology
                    would generate the most value in the loose and or tight commercial agriculture value chains.

                    <br><br>

                    <button class="button large rounded fg-white bg-orange text-upper">Learn more...</button>
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
