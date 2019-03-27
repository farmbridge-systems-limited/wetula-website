<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Disclaimer</title>
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
                <li class="active"><a href="{{url('/legal/disclaimer')}}" class="button">Disclaimer & Waiver of Liability</a></li>
                <li ><a href="{{url('/legal/data-protection-policy')}}" class="button">Data Protection Policy</a></li>
                <li ><a href="{{url('/legal/corporate-assurance')}}" class="button">Corporate Assurance</a></li>
            </ul>
        </nav>


        <div id="legal-header" class="drop-shadow bg-green">
            <div class="container pt-10 pb-10">
                <h1 class="mt-4 fg-white text-center">Disclaimer & Waiver of Liability</h1>
            </div>
        </div>
        <div class="bg-white pt-12 pb-10">
            <div id="legal-container" class="container">

                <main class="content w-100">
                    <div id="intro">

                        <h2 class="text-center fg-orange">Use of This Web Site</h2>
                        <p class="text-leader2">
                            Access to and use of this website is provided subject to the Terms and Conditions of Use (this document) which you should read carefully. By accessing this website, you hereby accept same. While Wetula has taken all reasonable steps to ensure the accuracy and completeness of the information on the pages of this site, it can accept no legal liability in respect of any inaccuracy or incompleteness in such information.
                        </p>
                        <p class="text-leader2">
                            Wetula is NOT responsible for the contents of any off-site pages referenced or linked to.
                        </p>

                        <h2 class="text-center fg-orange mt-15">Disclaimer and Waiver of Liability</h2>
                        <p class="text-leader2">
                            Every effort has been made to ensure that the information provided on this platform is accurate and up-to-date. If you notice any errors or omissions please let us know as soon as possible. It is our policy to respond and correct errors within 7 working days of receiving accurate and verified information. Please contact us, using the contact details if there are any issues.
                        </p>
                        <p class="text-leader2">
                            Wetula and its employees, members or agents assume no responsibility for and give no guarantees, undertakings or warranties concerning the accuracy, completeness or up-to-date nature of the information provided on the platform at this time and do not accept any liability whatsoever arising from any errors or omissions.
                        </p>

                        <p class="text-leader2">
                            The site sometimes links to external sites over which Wetula has no control and accepts no responsibility. Any links from this website to external websites are provided as a matter of convenience only. They should not be taken as an endorsement of the contents or practices of those external websites.
                        </p>

                        <h2 class="text-center fg-orange mt-15">Copyright</h2>

                        <p class="text-leader2">
                            All material on the Wetula website is copyright Farmbridge systems limited unless otherwise stated. Copyright is implied irrespective of whether a copyright symbol or a copyright statement is displayed.
                        </p>










                        <div id="toc-normal-flow" class="bg-lightGray d-none drop-shadow mt-10 p-8 rounded">
                        <privacy-policy-nav></privacy-policy-nav>
                    </div>
                    </div>
                </main>
                <aside class="d-none">
                    <div id="toc-side-flow" class="bg-lightGray  drop-shadow mt-10 p-8 rounded">
                        <privacy-policy-nav></privacy-policy-nav>
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
