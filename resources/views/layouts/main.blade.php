<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icofont.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <title>
        MD Engineering & Construction Co.,Ltd
    </title>
</head>

<body>
    @include('layouts.menu')
    <div id="content-wrapper">
        @if (URL::current() == route('home'))
            @include('layouts.slider')
        @endif

        @yield('content')


        <br><br>
        <div class="footer_strip footer_strip_02">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12" style="background-color: white">
                        <div class="footer_main"
                            style="background-color: white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <img src="{{ asset('data/logo.jpg') }}" class="img-responsive" alt="Footer Logo"
                                style="width: 50%;">
                            <div class="simple-text">
                                <p style="color: black">
                                    We promote environmentally responsible practices and sustainable construction
                                    methods.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="footer_one">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h4 class="sub-title"><i class="icofont icofont-home"></i>Visit Us</h4>
                                <p>
                                    No.41B Corner of Tha Khin Ba Hein Street & Tun Thiri Street Ward 30 North Dagon
                                    Township Yangon
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h4 class="sub-title"><i class="icofont icofont-phone"></i> Call Us</h4>
                                <p>
                                    09 790 790090
                                </p>
                                <br>

                                <h4 class="sub-title"><i class="icofont icofont-envelope"></i> Email Us</h4>
                                <p><a href="mailto:info@myanmarduo.com">info@myanmarduo.com</a></p>
                                <p><a href="mailto:myanmarduo@gmail.com">myanmarduo@gmail.com</a></p>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h4 class="sub-title"><i class="icofont icofont-fb"></i> Facebook</h4>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                    nonce="PosYNXjc"></script>

                                <div class="fb-page" data-href="https://www.facebook.com/md.engineering.construction"
                                    data-tabs="timeline" data-width="" data-height="250" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/md.engineering.construction"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/md.engineering.construction">Facebook</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer_01">
            <div class="container">
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p>
                                    Copyright © {{ now()->year }}
                                    <span>
                                        MD Engineering & Construction Co.,Ltd.
                                    </span>
                                    All Rights Reserved
                                    <span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="links">
                                <ul>
                                    <li><a href="{{ route('about.index') }}">About Us </a></li>
                                    <li><a href="{{ route('activities.index') }}"> Activities </a></li>
                                    <li class="last"><a href="{{ route('project.index') }}">Projects</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/global.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
</body>

</html>
