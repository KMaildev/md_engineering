@extends('layouts.main')
@section('content')
    <div class="welcome_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 cellpadding">
                    <div class="">
                        <h4>Welcome To Our Company</h4>
                        <h2>
                            MD Engineering &
                            <span>Construction</span>
                        </h2>
                        <div class="simple-text">
                            <p style="text-align: justify">
                                Our construction company is a reputable and trusted name in the industry, known for
                                delivering exceptional results. With a proven track record of successful projects, we
                                specialize in providing comprehensive construction solutions tailored to our clients' needs.
                                Our experienced team of professionals excels in project management, ensuring efficient
                                execution from start to finish. We prioritize quality craftsmanship, utilizing the latest
                                techniques and materials to deliver durable and sustainable structures. Safety is paramount
                                to us, and we maintain strict adherence to industry standards and regulations. Customer
                                satisfaction is at the heart of our business, and we strive to exceed expectations by
                                delivering projects on time and within budget. Choose our company for your construction
                                needs and experience excellence in every aspect of our service.
                            </p>
                        </div>
                        <div class="buttons">
                            <div class="sim-button button8">
                                <a href="{{ route('contact.index') }}"><span>Contact Us</span></a>
                            </div>
                            <div class="sim-button nextbtn button8">
                                <a href="{{ route('project.index') }}"><span>Projects</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image">
                        <img src="{{ asset('data/about.jpg') }}" class="img-responsive" alt="Image"
                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_technologies cellpadding">
        <div class="container">
            <div class="technologies">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-sec">
                            <div class="icon">
                                <i class="icofont icofont-calculations"></i>
                                <h4 class="sub-title">
                                    Design
                                </h4>
                            </div>
                            <div class="simple-text">
                                <p style="text-align: justify">
                                    Our design service for construction delivers custom solutions that blend creativity and
                                    functionality. Our skilled team works closely with you to understand your needs and
                                    create designs that maximize space, aesthetics, and efficiency. With a focus on
                                    effective communication and adherence to regulations, we bring your vision to life
                                    seamlessly. Trust our design service to transform your construction project into a
                                    beautifully designed reality.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-sec">
                            <div class="icon">
                                <i class="icofont icofont-help-robot"></i>
                                <h4 class="sub-title">Fresh & Latest Equipments</h4>
                            </div>
                            <div class="simple-text">
                                <p style="text-align: justify">
                                    The construction industry utilizes a range of modern equipment, including excavators,
                                    bulldozers, cranes, concrete mixers, and skid steer loaders. Tower cranes, scissor
                                    lifts, and backhoe loaders are also essential. Scaffolding, concrete pumps, laser
                                    levels, and dump trucks play important roles in construction operations. These equipment
                                    enhance efficiency and productivity on construction sites.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-sec">
                            <div class="icon">
                                <i class="icofont icofont-under-construction-alt"></i>
                                <h4 class="sub-title">Hardworking & Affordable Team</h4>
                            </div>
                            <div class="simple-text">
                                <p style="text-align: justify">
                                    Our construction team is both hardworking and affordable, offering a winning combination
                                    for your projects. With a strong work ethic, they consistently deliver quality results
                                    while keeping costs under control. Their expertise and efficiency ensure timely
                                    completion without compromising on standards. Trust our team to provide exceptional
                                    value for your construction needs.
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="strip_01 strip_02 cellpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="services_1 first">
                        <i class="icofont icofont-globe-alt"></i>
                        <h2>49</h2>
                        <h3>Global Cities</h3>
                    </div>
                    <div class="empty-space sm-30 xs-30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services_1">
                        <i class="icofont icofont-users-alt-5"></i>
                        <h2>516</h2>
                        <h3>Our Happy Clients</h3>
                    </div>
                    <div class="empty-space sm-30 xs-30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services_1">
                        <i class="icofont icofont-safety-hat"></i>
                        <h2>256</h2>
                        <h3>Expert Employees</h3>
                    </div>
                    <div class="empty-space xs-30"></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services_1">
                        <i class="icofont icofont-briefcase"></i>
                        <h2>616</h2>
                        <h3>Project Completed</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="our_spacility">
        <div class="img_2">
            <img src="{{ asset('data/statement.jpg') }}" class="img-responsive" alt="Image 1">
        </div>
        <div class="container-fluid padding_0">
            <div class="row">
                <div class="our_special">
                    <div class="col-md-9 col-md-offset-3">
                        <div class="our_special_1">
                            <div class="col-md-9 col-md-offset-3">
                                <div class="content">
                                    <i class="icofont icofont-calculations"></i>
                                    <h2>
                                        Our Vision
                                    </h2>
                                    <p style="text-align: justify">
                                        Our vision is to be a trusted leader in the construction industry, known for our
                                        innovation, reliability, and exceptional service. We are committed to delivering
                                        high-quality projects, fostering sustainable practices, and building long-term
                                        client relationships based on trust and integrity. Our goal is to shape the future
                                        of construction and make a positive impact on the communities we serve.
                                    </p>
                                    <div class="border_bottom_50"></div>
                                </div>
                            </div>

                            <div class="col-md-9 col-md-offset-3">
                                <div class="content">
                                    <i class="icofont icofont-help-robot"></i>
                                    <h2>Our Mission</h2>
                                    <p style="text-align: justify">
                                        Our mission is to deliver excellence in construction through superior quality,
                                        professionalism, and client satisfaction. We prioritize integrity, safety, and
                                        sustainability while forging strong relationships and positively impacting
                                        communities.
                                    </p>
                                    <div class="border_bottom_50"></div>
                                </div>
                            </div>

                            <div class="col-md-9 col-md-offset-3">
                                <div class="content">
                                    <i class="icofont icofont-under-construction-alt"></i>
                                    <h2>
                                        Our values drive our construction company:
                                    </h2>
                                    <p>
                                        Quality: We are committed to delivering exceptional craftsmanship and attention
                                        to detail in every project.
                                        <br><br>
                                        Collaboration: We foster teamwork and open communication with clients, partners, and
                                        stakeholders.
                                        <br><br>
                                        Safety: We prioritize the safety of our workers, clients, and the community.
                                        <br><br>
                                        Client Focus: We listen to our clients, understand their vision, and strive to
                                        exceed their expectations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio latest_work_01 project_3columns cellpadding">
        <div class="container">

            <div class="banner" style="background-image: url({{ asset('data/banner1.jpg') }});">
                <div class="container">
                    <div class="row">
                        <h3 class="tt-title">Our Projects</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="portfolio-items list-unstyled caption-style-4" id="grid">
                    @foreach ($projects as $project)
                        <div class="col-md-4 col-sm-6 col-xs-6" data-groups='["residential"]'>
                            <figure class="portfolio-item item">
                                <a href="{{ route('project.show', $project->id) }}">
                                    <img src="{{ $project->photo }}" alt=""
                                        style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                </a>
                                <div class="overlay">
                                    <div class="inner">
                                        <a href="{{ $project->photo }}" class="zoom popupzoom">
                                            <i class="icofont icofont-search"></i>
                                        </a>
                                        <a href="{{ route('project.show', $project->id) }}" class="link">
                                            <i class="icofont icofont-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                            <div class="list-group-item d-flex justify-content-between align-items-center"
                                style="background: rgb(131,58,180);
                                    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%); font-size: 15px; color: white;">
                                {{ $project->title ?? '' }}
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-4 col-sm-6 col-xs-6 shuffle_sizer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
