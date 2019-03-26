<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Join Us</title>
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
                <h1 class="mt-4 fg-white text-center">Join our Team</h1>
                <p class="text-leader2 fg-white text-light text-center subtext">
                    We look forward for awesome people like you whose resumes fit our vacant positions to join us.

                </p>


            </div>


        </div>


    </div>

    <div id="carreer">
        <div class="jobs container">
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
                </div>
            </a>
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
                </div>
            </a>
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
                </div>
            </a>
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
                </div>
            </a>
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
                </div>
            </a>
            <a href="{{url('/job-detail')}}" class="card no-decor c-pointer no-user-select">
                <div class="card-header">
                    <div class="simple-description">
                        <h2>Web Developer</h2>
                        <p>Software Development</p>
                    </div>
                    <button class="button mt-10-minus place-right">Full Time</button>
                </div>

                <div class="card-footer clear-float bg-gray">
                    <p><span class="mif-location"></span> Kumasi</p>
                    <p><span class="mif-dollars"></span> GH¢ 3,500 - 4,500</p>
                    <p><span class="mif-history"></span> 2 days ago</p>
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
