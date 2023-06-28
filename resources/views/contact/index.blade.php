@extends('layouts.main')
@section('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <h3 class="tt-title">Contact Us</h3>
            </div>
        </div>
    </div>
    <!--================ End Banner Area =================-->
    <!--================ Breadcrumb =================-->
    <div class="container">
        <div class="row">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="icofont icofont-double-right"></i></li>
                    <li class="active"><a href="contact_us.html"> Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--================ End Breadcrumb =================-->
    <!--================ Contact Us =================-->
    <div class="contact_us cellpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="icon_classes">
                        <h5><i class="icofont icofont-home"></i>Visit Us</h5>
                        <p>
                            No.41B Corner of Tha Khin Ba Hein Street & Tun Thiri Street Ward 30 North Dagon Township Yangon
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="icon_classes">
                        <h5><i class="icofont icofont-phone"></i>Call Us</h5>
                        <p>09 790 790090</p>
                        <p><br></p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="icon_classes last">
                        <h5><i class="icofont icofont-envelope"></i>Email Us</h5>
                        <p><a href="mailto:info@myanmarduo.com">info@myanmarduo.com</a></p>
                        <p><a href="mailto:myanmarduo@gmail.com">myanmarduo@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Contact Us =================-->
    <!--================ Contact Form =================-->
    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="tt-title text-center">
                    Interested in discussing?
                </div>
                <div class="simple-text">
                    <p>
                        Alternatively, you may contact us by filling up the contact form. Our team will response you
                        shortly.
                    </p>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="contact_us2_form">
                        <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <input name="name" type="text" required class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <input name="email" type="text" class="form-control" required
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <input name="phone" type="text" class="form-control" required
                                            placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <input name="subject" type="text" class="form-control" required
                                            placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn sim-button button8" name="contactForm"
                                        value="contactForm" id="contactForm"><span>Submit<i
                                                class="icofont icofont-tick-mark"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Contact Form =================-->
    <!--================ Request A Quote Section =================-->
    <div class="request_A_quote contact_quote">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <p>Have any ideas in your mind?</p>
                    <h4>CREATE YOUR NEXT PROJECT WITH US</h4>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="button_request">
                        <div class="sim-button button8">
                            <a href="tel:09 790 790090"><span>Call Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ Request A Quote Section =================-->
    <!--================ Map =================-->
    <div class="map">
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.0988981003443!2d96.1976412742249!3d16.871001583930756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193691fd9d14d%3A0xc0083be8e12c00bb!2sMD%20Engineering%20%26%20Construction!5e0!3m2!1sen!2smm!4v1687687833328!5m2!1sen!2smm"
                width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
