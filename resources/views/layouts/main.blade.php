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

        <footer class="footer_01">
            <div class="container">
                <div class="row">
                    <div class="footer_top">
                        <div class="col-md-4">
                            <h4 class="sub-title">Recent Post</h4>
                            <div class="recent_posts">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2  col-xs-3 image">
                                        <img src="{{ asset('assets/images/home1/r1.jpg') }}" class="img-responsive"
                                            alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-10 col-xs-9 text">
                                        <h5>Interior Design</h5>
                                        <h6>23-Mar-2020</h6>
                                        <div class="simple-text">
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                            <p><a href="#">Read Post <i class="icofont icofont-rounded-right"></i>
                                                </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recent_posts">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2  col-xs-3 image">
                                        <img src="{{ asset('assets/images/home1/r2.jpg') }}" class="img-responsive"
                                            alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-10 col-xs-9 text">
                                        <h5>Home Repairing</h5>
                                        <h6>05-Feb-2020</h6>
                                        <div class="simple-text">
                                            <p>Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                                            <p><a href="#">Read Post <i class="icofont icofont-rounded-right"></i>
                                                </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 instagram_images">
                            <h4 class="sub-title">From Instagram</h4>
                            <ul>
                                <li><img src="{{ asset('assets/images/home1/i1.jpg') }}" alt="Image 1"></li>
                                <li><img src="{{ asset('assets/images/home1/i2.jpg') }}" alt="Image 2"></li>
                                <li><img src="{{ asset('assets/images/home1/i3.jpg') }}" alt="Image 3"></li>
                                <li><img src="{{ asset('assets/images/home1/i4.jpg') }}" alt="Image 4"></li>
                                <li><img src="{{ asset('assets/images/home1/i5.jpg') }}" alt="Image 5"></li>
                                <li><img src="{{ asset('assets/images/home1/i6.jpg') }}" alt="Image 6"></li>
                                <li><img src="{{ asset('assets/images/home1/i7.jpg') }}" alt="Image 7"></li>
                                <li><img src="{{ asset('assets/images/home1/i8.jpg') }}" alt="Image 8"></li>
                                <li><img src="{{ asset('assets/images/home1/i9.jpg') }}" alt="Image 9"></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="subscribe">
                                <h4 class="sub-title">Subscribe Now</h4>
                                <form>
                                    <div class="subscribe_now">
                                        <input type="text" placeholder="Enter Email Address" required>
                                        <button type="submit" class="">Get Started</button>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                            <div class="popular_tags">
                                <h4 class="sub-title">Popular Tags</h4>
                                <ul>
                                    <li><a href="#">Outstanding</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Bridge</a></li>
                                    <li><a href="#">Mechanical</a></li>
                                    <li><a href="#">Repair</a></li>
                                    <li><a href="#">Wireframe</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p>Designed by <span><a href="https://themeforest.net/user/themechampion">ThemeChampion
                                        </a></span>© 2020 All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="links">
                                <ul>
                                    <li><a href="#">About Us </a></li>
                                    <li><a href="#"> Privacy Policy </a></li>
                                    <li class="last"><a href="#">Terms & Conditions</a></li>
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
