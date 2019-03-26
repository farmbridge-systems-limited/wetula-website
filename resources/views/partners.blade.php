<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Our Partners</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header-component></header-component>

    <div id="contact-page" class="content-wrapper">
        <div id="contact-header" class="drop-shadow bg-green">
            <div class="container pt-10 pb-10">
                <h1 class="mt-4 fg-white text-center">Our Partners</h1>
                <p class="text-leader2 fg-white text-light text-center subtext">
                    Wetula is open for partnership. Use the contact us page to send us a message. <br>
                    And lets talk from there. This page  contains our current list of partners. You are welcome.

                </p>


            </div>


        </div>


    </div>

    <div id="partners">
        <div class="partners container">
            <a class="card c-pointer no-user-select">
                <div class="card-header bg-white">
                    <img src="{{asset('images/partners/ailentech.png')}}" alt="">
                    <div>
                        <h2>AilenTech Limited</h2>
                        <p>Software Development</p>
                    </div>
                </div>

                <div class="card-footer bg-teal ">
                   <p class="fg-white text-leader2">AilenTech LLC is Software Development Firm based in Kumasi in the Ashanti Region. We specialize in Mobile, Desktop and large scale web development projects for both organizations and individuals.</p>
                    <p><button class="button bg-orange fg-white border border-1 bd-white text-upper">Visit our Website</button></p>
                </div>
            </a>
            <a class="card c-pointer no-user-select">
                <div class="card-header bg-white">
                    <img src="{{asset('images/partners/tekxul.png')}}" alt="">
                    <div>
                        <h2>TekXul Limited</h2>
                        <p>Hardware Manufacturer</p>
                    </div>
                </div>

                <div class="card-footer bg-brown ">
                    <p class="fg-white text-leader2">TekXul is an Internet of Things and general hardware mechandize specialization company that develops fine solutions for problems ranging from acquatic domains to industrial automations.</p>
                    <p><button class="button bg-orange fg-white border border-1 bd-white text-upper">Visit our Website</button></p>
                </div>
            </a>
            <a class="card c-pointer no-user-select">
                <div class="card-header bg-white">
                    <img src="{{asset('images/partners/ailentech.png')}}" alt="">
                    <div>
                        <h2>AilenTech Limited</h2>
                        <p>Software Development</p>
                    </div>
                </div>

                <div class="card-footer bg-teal ">
                    <p class="fg-white text-leader2">AilenTech LLC is Software Development Firm based in Kumasi in the Ashanti Region. We specialize in Mobile, Desktop and large scale web development projects for both organizations and individuals.</p>
                    <p><button class="button bg-orange fg-white border border-1 bd-white text-upper">Visit our Website</button></p>
                </div>
            </a>
            <a class="card c-pointer no-user-select">
                <div class="card-header bg-white">
                    <img src="{{asset('images/partners/tekxul.png')}}" alt="">
                    <div>
                        <h2>TekXul Limited</h2>
                        <p>Hardware Manufacturer</p>
                    </div>
                </div>

                <div class="card-footer bg-brown ">
                    <p class="fg-white text-leader2">TekXul is an Internet of Things and general hardware mechandize specialization company that develops fine solutions for problems ranging from acquatic domains to industrial automations.</p>
                    <p><button class="button bg-orange fg-white border border-1 bd-white text-upper">Visit our Website</button></p>
                </div>
            </a>

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
<script>
    import MapComponent from "../js/components/MapComponent";

    export default {
        components: {MapComponent}
    }
</script>
