@extends('layouts.main')
@section('content')
    <!--================ Banner Area =================-->
    <div class="banner">
        <div class="container">
            <div class="row">
                <h3 class="tt-title">
                    Gallery & Activities
                </h3>
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
                    <li class="active"><a href="{{ route('activities.index') }}"> Gallery & Activities</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="   ">
        <div class="container">
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-12">
                        <hr style="border-top: 1px dashed red;">
                        <p style="font-size: 20px;">
                            {{ $activity->title ?? '' }}
                        </p>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-3" style="padding: 5px;">
                            <img src="{{ $image }}" alt=""
                                style="width: 100%; height: 250px; background-size: center; object-fit: cover; border-radius: 30px;">
                        </div>
                    @endforeach
                @endforeach
            </div>
            <!--end row -->
        </div>
    </div>
@endsection
