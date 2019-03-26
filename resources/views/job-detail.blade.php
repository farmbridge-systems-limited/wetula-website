<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Job Detail</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header-component></header-component>

    <div id="job-detail">
            <div class="grid container">
                <div class="row">
                    <div class="cell-8">
                        <div id="job-summary">
                            <h3>Android Developer</h3>
                            <p class="text-leader2">App Development</p>
                            <div class="dates">
                                <p><span class="mif-calendar"></span> Post Date: <span class="highlight">Feb 19, 2019</span></p>

                                <p><span class="mif-calendar"></span> Last Date: <span class="highlight">March 15, 2019</span></p>

                                <p><span class="mif-users"></span> Applications: <span class="highlight">4</span></p>



                            </div>
                        </div>
                        <div id="job-description">
                            <p class="text-leader2 text-bold">Job Description</p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>



                            <div class="group-list border-none">
                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>

                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>
                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>
                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>
                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>
                                <div class="item border-none">
                                    <p class="bullet-point"><span class="mif-stop fg-green"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="cell-4">
                        <div id="job-apply">
                            <button class="button warning rounded full-size outline text-upper">Apply for this Job</button>

                            <div class="job-widget">
                                <p class="item-icon"><span class="mif-chart-bars mif-2x"></span></p>
                                <div>
                                    <p class="job-widget-title text-upper text-bold">Job Type</p>
                                    <p class="job-widget-description">Full time</p>
                                </div>
                            </div>

                            <div class="job-widget">
                                <p class="item-icon"><span class="mif-dollars mif-2x"></span></p>
                                <div>
                                    <p class="job-widget-title text-upper text-bold">Salary</p>
                                    <p class="job-widget-description">GH¢5000 - GH¢6000</p>
                                </div>
                            </div>

                            <div class="job-widget">
                                <p class="item-icon"><span class="mif-suitcase mif-2x"></span></p>
                                <div>
                                    <p class="job-widget-title text-upper text-bold">Experience</p>
                                    <p class="job-widget-description">2 years</p>
                                </div>
                            </div>

                            <div class="job-widget">
                                <p class="item-icon"><span class="mif-user-plus mif-2x"></span></p>
                                <div>
                                    <p class="job-widget-title text-upper text-bold">Vacancy</p>
                                    <p class="job-widget-description">5</p>
                                </div>
                            </div>

                            <div class="job-widget">
                                <p class="item-icon"><span class="mif-location-city mif-2x"></span></p>
                                <div>
                                    <p class="job-widget-title text-upper text-bold">Location</p>
                                    <p class="job-widget-description">
                                        Ayeduase New Site
                                        <br>
                                        Near KNUST
                                        <br>
                                        Kumasi - Ashanti
                                        <br>
                                        Ghana

                                        <br>
                                        <br> <br>
                                        024 776 2814
                                        <br>
                                        support@dmc.com
                                        <br>
                                        https://www.datamineconsult.com
                                    </p>
                                    <br><br>site
                                    <p style="color: #7b0d5d">Application ends in 2d 7h 6m</p>
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
<script>

</script>
</html>
<script>
    import MapComponent from "../js/components/MapComponent";

    export default {
        components: {MapComponent}
    }
</script>
