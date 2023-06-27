@extends('layouts.main')
@section('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <h3 class="tt-title">Our Projects</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><i class="icofont icofont-double-right"></i></li>
                    <li><a href="{{ route('project.index') }}">Our Projects</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portfolio latest_work_01 project_3columns cellpadding">
        <div class="container">
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
