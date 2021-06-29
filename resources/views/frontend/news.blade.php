@extends('layouts.app')

@section('title', 'News')
@section('frontend-content')
    <section class="mt-5">
        <div class="container body-part-10 ">
            <h2>{{ $news->title }}</h2>
            <div class="mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset($news->photo) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>{{ $news->title }}</h4>
                        <p class="card-text">{!! $news->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection