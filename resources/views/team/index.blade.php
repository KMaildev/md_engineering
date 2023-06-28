@extends('layouts.main')
@section('content')
    <div class="our_team">
        <br>
        <div class="container">
            <div class="row">
                <div class="our_team1">
                    <h3 class="tt-title text-center">Our Team</h3>
                    <div class="simple-text">
                        <p style="text-align: justify">
                            Our construction team is a dedicated group of skilled professionals who bring expertise,
                            experience, and a strong work ethic to every project. With diverse backgrounds in various
                            construction disciplines, our team members collaborate seamlessly to deliver exceptional
                            results. They possess in-depth knowledge of industry best practices and stay up-to-date with the
                            latest advancements and techniques. Our team's attention to detail, problem-solving abilities,
                            and effective communication ensure smooth project execution from start to finish. Committed to
                            safety, quality, and client satisfaction, our team is driven to exceed expectations and deliver
                            construction projects of the highest standard.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-carousel4 owl-theme">
                        @foreach ($teams as $team)
                            <div class="item" style="background-color: #012CB4;">
                                <div class="Specialistt">
                                    <div class="images_Specialistt">
                                        <img src="{{ $team->photo }}" class="img-responsive" alt="Team 1"
                                            style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="content">
                                        <h4 class="sub-title" style="color: white;">
                                            {{ $team->name ?? '' }}
                                        </h4>
                                        <h5 style="color: white;">
                                            {{ $team->position ?? '' }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
