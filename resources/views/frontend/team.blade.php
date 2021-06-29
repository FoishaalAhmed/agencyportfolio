@extends('layouts.app')

@section('title', 'Our Team')
@section('frontend-content')
    <section class="team-sec2">
        <div class="container mt-5">
            <h2>Meet our creative team</h2>
            @php
                $mainTwo = array_slice($teams, 0, 2);
                $rest = array_slice($teams, 2);
            @endphp
            <div class="team mt-5 ">
                <div class="row ">
                    <div class="">
                        @foreach ($mainTwo as $item)
                        <img class="team-card-left rounded-left" src="{{ asset($item['photo']) }}" alt="">
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="team mt-5">
                <div class="row ">
                    <div class="">
                        @foreach ($rest as $item)
                        <img class="team-card-left rounded-left" src="{{ asset($item['photo']) }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-5 description-card">
                <p>We are an awesome team of {{ sizeof($teams) }} people working in sales, marketing, media</p>
                <p>planning, design, copywriting, and many more...</p>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="mt-5 mb-5">
        <section id="portfolio" class="container body-part-8">
            <div class="mt-5">
                <h2>Work we are proud of</h2>
            </div>
            <div class="mt-5">
                <div class="row">
                    <div class="button col-md-6"><button id="button1" class="button" type="button">TVC</button></div>
                    <div class="button col-md-6"><button id="button2" class="button" type="button">Documentary</button>
                    </div>
                </div>
            </div>
            <!-- photo gallery -->

            <!-- section 1 -->

            <div class="section-1">
                <div class=" mt-5 row">
                    @foreach ($tvcs as $item)
                        <div class="col-md-6 photo-frame">
                            <div class="photo">
                                <img src="{{ asset($item->photo) }}" alt="">
                            </div>
                            <div class="photo-detail">
                                <h3> TVC </h3>
                                <button class="btn btn-outline-dark"><a
                                        href="https://www.youtube.com/watch?v=<?php echo $item->video; ?>"
                                        style="color: white; text-decoration: none;">Watch Now</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- section 2 -->
            <div class="section-2">
                <div class=" mt-5 row">
                    @foreach ($documentaries as $item)
                        <div class="col-md-6 photo-frame">
                            <div class="photo">
                                <img src="{{ asset($item->photo) }}" alt="">
                            </div>
                            <div class="photo-detail">
                                <h3> Documentary </h3>
                                <button class="btn btn-outline-dark"><a
                                        href="https://www.youtube.com/watch?v=<?php echo $item->video; ?>"
                                        style="color: white; text-decoration: none;">Watch Now</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
