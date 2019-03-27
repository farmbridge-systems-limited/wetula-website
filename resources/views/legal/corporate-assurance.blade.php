<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Corporate Assurance</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header-component></header-component>

    <div id="terms-of-service" class="content-wrapper">


        <nav class="container">
            <ul id="legal-nav" class="inline-list d-flex flex-justify-center" id="scrolltab">
                <li class=""><a href="{{url('/legal/terms-of-service')}}" class="button" >Terms of Service</a></li>
                <li ><a href="{{url('/legal/privacy-policy')}}" class="button">Privacy Policy</a></li>
                <li><a href="{{url('/legal/disclaimer')}}" class="button">Disclaimer & Waiver of Liability</a></li>
                <li ><a href="{{url('/legal/data-protection-policy')}}" class="button">Data Protection Policy</a></li>
                <li class="active"><a href="{{url('/legal/corporate-assurance')}}" class="button">Corporate Assurance</a></li>
            </ul>
        </nav>


        <div id="legal-header" class="drop-shadow bg-green">
            <div class="container pt-10 pb-10">
                <h1 class="mt-4 fg-white text-center">Corporate Assurance</h1>
            </div>
        </div>
        <div class="bg-white pt-12 pb-10">
            <div id="legal-container" class="container">

                <main class="content">
                    <div id="intro">

                        <h2 id="who-we-are" class="text-center fg-orange">Who we are</h2>
                        <p class="text-leader2">
                            When we talk about “Wetula”, or “us” or “we” in these Notices, we are referring to Wetula Software and its subsidiaries, affiliates and their respective parent and subsidiary companies (“Farm Bridge Systems Ltd”, “Farmbridgesystems.com” and “Wetula.com”).
                        </p>

                        <h2 id="collecting-information" class="text-center fg-orange mt-15">How We Collect Information about You and Your Consent</h2>
                        <p class="text-leader2">
                            We collect your personal information, for example when you apply and register with us for an account; make a payment; apply for a service; use our credit reference facility; or look for advice about your project investments. We will also collect information from other sources, such as credit bureaus (like the Irish Credit Bureau), or through our website, apps, social media sites, community based discussion forums and CCTV footage on our facilities. We will sometimes record phone conversations to improve security, resolve complaints, improve service and train our people. We will always let you know when we are recording our calls with you.
                        </p>
                        <p class="text-leader2">
                            Our websites uses ‘cookies’ technology.  A cookie is a little piece of text that our server places on your device when you visit any of our websites. They help us make the site work better for you. You can find out more about cookies, including how to disable them on www.wetula.com We also use cloud technology to store data including your information, to support our infrastructure and to deliver you real time personalized offers. By using our products and services, or asking about them directly or online, you are consenting to us collecting and using your information in the ways we explain in this notice and any future versions of it.
                        </p>

                        <h2 id="keeping-information" class="text-center fg-orange mt-15">How We Keep Your Information Safe</h2>

                        <p class="text-leader2">
                            We know that you care about how information about you is used, stored and shared. We appreciate your trust in us to do that. To protect your information, we use security measures that comply with uk law and meet international standards. This includes computer safeguards and secure files and buildings.
                        </p>

                        <h2 id="managing-products" class="text-center fg-orange mt-15">
                            What We Use Your Information For
                            Offering and Managing Your WETULA Products and Services
                        </h2>

                    <p class="text-leader2">We gather information about you and the products and services you use, or ask us about. We use this information to:</p>

                        <div class="">
                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">make recommendations about the products or services you hold with us,</p>
                                    </div>
                                </span>
                            <br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">decide how the products and services you don’t yet hold might be suitable for you, and</p>
                                    </div>
                                </span>
                            <br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">decide to offer these to you, the terms and conditions under which we offer them and how we will offer them to you, for example directly or through digital media.</p>
                                    </div>
                                </span>
                            <br>

                        </div>

                        <h2 id="developing-relationship" class="text-center fg-orange mt-15">
                            Developing Our Relationship – Marketing and Customer Experience
                        </h2>

                        <p class="text-leader2">
                            We may use your information for direct marketing purposes, where you have given us permission to do so. We may make you aware of products and services which may be of interest to you. We may do this by phone, mail, email, text or through other digital media. You can decide how much direct marketing you want to accept, so we make it as easy as possible for you to change your direct marketing preferences, simply contact us directly online or by calling ……………. We will also use the information we have gathered on you to personalize your experience on digital media such as websites, apps, social media sites, mobiles and tablet devices. This may include giving you product and service content we believe might be of interest to you.
                        </p>

                        <h2 id="data-analytics" class="text-center fg-orange mt-15">
                            Data Analytics – Using Information in Our Business
                        </h2>

                        <p class="text-leader2">
                            We analyze the information that we collect and hold on you through channels such as social media networks (Facebook, Twitter, YouTube etc.). This helps us understand your behaviour, our relationship with you and also our position in a market place. Our analysis helps us to offer you products and services content we believe will be of interest to you.
                        </p>


                        <h2 id="legal-obligations" class="text-center fg-orange mt-15">
                            Our Legal Obligations
                        </h2>
                        <p class="text-leader2">
                            We have legal obligations to prevent fraud, tax avoidance, money laundering and terrorist financing. These obligations mean we have to continually update our customer information. Often, we have to share customer information with third party law enforcement agencies. Where false or misleading information is given to us, or we suspect criminal activity we have a duty to record this and forward same to the appropriate law enforcement agencies, which may be within and outside Ghana.
                        </p>

                        <h2 id="thirdparty" class="text-center fg-orange mt-15">Your Information and Third Parties</h2>
                        <p class="text-leader2">
                            We sometimes use other companies and individuals to work on our behalf or to give us information to help us make decisions. For example, to:
                        </p>
                        <div class="">
                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">analyze data; collect debts;</p>
                                    </div>
                                </span>
                            <br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">trace information; </p>
                                    </div>
                                </span>
                            <br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">process information; and</p>
                                    </div>
                                </span>
                            <br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">conduct market research.</p>
                                    </div>
                                </span>
                            <br>

                        </div>
                        <p class="text-leader2">
                            We contract with all third parties to whom we give your information for these purposes to keep your information confidential and to respect the law on data protection. If at any time you would like to be removed from our market research database please let us know by writing to Wetula Central Secretariat W/CS.
                        </p>

                        <p class="text-leader2">
                            We use credit reference to check your credit history, your debts, how you operate your accounts and to authenticate your identity. Our credit reference agencies record these searches, whether you are offered credit or not. We also take from banks, information about the products and services you hold with them and they keep us updated about how well you take and repay credit. We do this so that third parties can make quick and easy decisions about offering credit and carry out credit reviews. We may use credit scoring techniques and automated decision-making systems to either fully or partially assess and report on you to interested banks.
                        </p>

                        <h2 id="accessing-and-managing-information" class="text-center fg-orange mt-15">Accessing and Managing Your Information</h2>
                        <p class="text-leader2">
                            We try to make sure that the information we have about you is accurate and up-to-date. Sometimes we may ask you to verify that the information we have remains accurate. If your information changes or you believe we have information which is inaccurate or not up-to-date please let us know and we will change it.
                            <br><br>
                            Under the Data Protection Acts, you have the right to see the personal information we hold about you. We will charge you a fee for this service. To get a copy of this information, write to your local Wetula branch or to the Wetula Central Secretariat.

                            <br>
                            The Wetula software will only keep and use personal information in accordance with applicable national/international Data Protection Laws.  Wetula is entitled to hold and keep a record on computer based or structured paper file of any information obtained from or about its registered applicants in connection with the Application and in connection with the operation of the Account.

                            <br><br>
                            Such information may be retained on our system after the registered applicant has closed all its Accounts, and for customer identification purposes in accordance with the record keeping policy of Wetula.  Wetula may wish to send to the registered applicant information on products and services which it believes will be of interest to its registered applicants. Where the registered applicant does not wish to receive such marketing information they may request the cessation of this activity by unsubscribing electronically on our website or via emails.

                        </p>









                        <div id="toc-normal-flow" class="bg-lightGray drop-shadow mt-10 p-8 rounded">
                        <corporate-assurance-nav></corporate-assurance-nav>
                    </div>
                    </div>
                </main>
                <aside >
                    <div id="toc-side-flow" class="bg-lightGray  drop-shadow mt-10 p-8 rounded">
                        <corporate-assurance-nav></corporate-assurance-nav>
                    </div>
                </aside>

            </div>
        </div>

    </div>


    {{--Footer--}}
    @include('components.footer')

</div>

</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
