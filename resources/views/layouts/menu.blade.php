<header class="header1">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>
                        စိတ်ကူးထဲက အတိုင်း အိမ်လေးကို အလှဆင် ဖန်တီးကြမယ်...
                    </h4>
                </div>
                <div class="col-md-6">
                    <div class="right_content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="icofont icofont-envelope-open"></i>
                                </div>
                                <div class="text">
                                    <h5>EMAIL US AT</h5>
                                    <h6>
                                        <a href="mailto:info@engineering.com">
                                            info@engineering.com
                                        </a>
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icofont icofont-ui-call"></i>
                                </div>
                                <div class="text">
                                    <h5>CALL US NOW</h5>
                                    <h6>
                                        09 790 790090
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tt-header">
        <div class="container">
            <div class="top-inner clearfix">
                <div class="logo pull-left main-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.jpg') }}" class="img-responsive" alt=""
                            style="width: 100px;">
                    </a>
                </div>


                <div class="cmn-toggle-switch">
                    <span></span>
                </div>
            </div>

            <div class="toggle-block">
                <div class="toggle-block-container">
                    <nav class="main-nav clearfix">
                        <ul>
                            <li class="parent">
                                <a href="{{ route('home') }}">
                                    <span>
                                        Home
                                    </span>
                                </a>
                            </li>

                            <li class="parent">
                                <a href="aboutus_01.html">
                                    <span>
                                        About Us
                                        <i class="menu-toggle fa fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('about.index') }}"><span>Abour of Our Company</span></a>
                                    </li>

                                    <li>
                                        <a href="company_history.html"><span>Team Member</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="{{ route('services.index') }}">
                                    <span>
                                        Our Services
                                    </span>
                                </a>
                            </li>

                            <li class="parent">
                                <a href="{{ route('project.index') }}">
                                    <span>
                                        Our Projects
                                    </span>
                                </a>
                            </li>

                            <li class="parent">
                                <a href="{{ route('estimate.index') }}">
                                    <span>
                                        Estimate
                                    </span>
                                </a>
                            </li>

                            <li class="last">
                                <a href="{{ route('activities.index') }}">
                                    <span>
                                        Gallery & Activities
                                    </span>
                                </a>
                            </li>

                            <li class="last">
                                <a href="{{ route('contact.index') }}">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
