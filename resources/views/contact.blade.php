<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Contact Us</title>
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
                <h1 class="mt-4 fg-white text-center">Contact Us</h1>
                <p class="text-leader2 fg-white text-light text-center subtext">
                    Please give us a message, if you need to make some enquiries or support from Us. <br>
                    We are readily at your service.
                </p>


            </div>


        </div>
        <div style="background-image: url({{asset('images/cocoa.gif')}})" class="contact-form pt-10 pb-10">
            <div class="container">
                <div class="form-container rounded bg-lightGray">
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

        <map-component></map-component>
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
<script>
    import MapComponent from "../js/components/MapComponent";

    export default {
        components: {MapComponent}
    }
</script>
