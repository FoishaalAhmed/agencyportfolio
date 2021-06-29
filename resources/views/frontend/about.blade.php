@extends('layouts.app')

@section('title', 'About us')
@section('frontend-content')

    <section class="about-sec1">
            <h2>About Us</h2>
        </section>
        <section class="container">
            <div class="about-sec2 row">
                <div class="col-md-6">
                    <img src="{{ asset($weAre->photo) }}" alt="">
                </div>
                <div class="col-md-6">
                    <div>
                        <h2>Who We Are?</h2>
                        {!! $weAre->text !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec3">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-2">
                        <img src="{{ asset($mission->photo) }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 style="font-weight: bold; font-size: 46px;">OUR MISSION</h2>
                        {!! $mission->text !!}
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-2">
                        <img src="{{ asset($vision->photo) }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 style="font-weight: bold; font-size: 46px;">OUR VISION</h2>
                        {!! $vision->text !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec4">
            <div class="mt-5 mb-5">
                <h2>Our Strength</h2>
                <div>
                    <img  class="rounded mx-auto d-block" src="{{ asset('public/frontend/media/About/3.png') }}" alt="">
                </div>
            </div>
        </section>
        <section class="about-sec5 mt-5 mb-5">
            <div class="container">
                <div class="row about-sec5-bg">
                    <div class="col-md-3">
                        <img src="{{ asset('public/frontend/media/About/4.png') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col mt-4 mb-4">
                                @foreach ($services as $item)
                                    <h4>{{ $item->name }}</h4>
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-sec6 ">
            <div>
                <h2>A name you can trust</h2>
                <p>We provide full scale marketing and advertising services  We have one</p>
                <p>mission ” To generate demand for your product or service ”</p>
                <a href="{{ URL::to('/') }}#contact">
                    <button  type="button" class="btn btn-outline-dark mb-2">Contact Us &nbsp;<i class="fas fa-angle-right"></i></button>
                </a>
                
            </div>
        </section>
    
@endsection