@extends('layouts.app')

@section('title', 'Photo Gallery')
@section('frontend-content')
    <section class="about-sec1">
            <h2>Gallery</h2>
        </section>
        <section class="container">
            <div class="tz-gallery">
                <div class="row">
                    @foreach ($photos as $item)
                    
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{ asset($item->photo) }}">
                        <img src="{{ asset($item->photo) }}" alt="Bridge" style="width: 100%; height: 220px; margin-bottom: 20px;"> <br>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
@endsection