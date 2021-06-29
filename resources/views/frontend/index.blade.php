@extends('layouts.app')


@section('title', 'Prionty')
@section('frontend-content')
    @if ($intro != null)
    <!-- body part-0 video-->
    <section class="video-container">
        <video autoplay loop muted>
            <source src="{{ asset($intro->video) }}" type="video/mp4">
        </video>

    </section>
    @endif

    <!-- Body Part-1 -->
    <section class="counter-container">
        <div class="container">
            <div class="counters counter-display">
                <div>
                    <div class="counter" data-target="<?php echo $client; ?>">0</div>
                    <h3>Happy Clients</h3>
                </div>
                <div>
                    <div class="counter" data-target="<?php echo $tvc; ?>">0</div>
                    <h3>Documentary</h3>
                </div>
                <div>
                    <div class="counter" data-target="<?php echo $documentary; ?>">0</div>
                    <h3>TVC</h3>
                </div>
                <div>
                    <div class="counter" data-target="<?php if($project != null) echo $project->value; else 0; ?>">0</div>
                    <h3>Projects</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Body Part-2 Service-->
    <section id="services">
        <div class="container mt-5 body-part-2">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('public/frontend/media/planning.jpg') }}" alt="">
                </div>
                <div class="col-md-6 mx-2">
                    <h2 style="color: #32c4e1; font-weight: bold;">We are best at</h2>

                    @foreach ($services as $key => $service)
                    <div class="row" >
                        <div class="col-md-3 logo">
                            <img src="{{ asset($service->icon) }}" alt="">
                        </div>
                        <div class="col-md-9">
                            <h3>{{ $service->name }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if ($reliable != null)
    <!-- Body Part-3 -->
    <section class="body-part-3">
        <div class="container body-part-3">
            <div class="mt-5 body-part-2">
                <h2 style="font-weight: bold; color: #32c4e1">We are Reliable</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-weight: bold">

                            Creation World BD is an advertising agency providing marketing and advertising services. Founded in 2015, Creation World BD is always dedicated to the service of the highest quality of products and giving the best service possible to clients.
                        </p>
                        <p style="font-weight: bold">

                            But, a campaign that doesn’t have everything will never generate the kind of demand your business needs and  deserves.

                        </p>
                        
                        
                    </div>
                    <div class="col-md-6">
                        <p style="font-weight: bold">You deserve a firm that takes the time to learn about you, your industry and your
                            customers. Of course, we, too, are enamored by witty headlines and eye-catching design;
                            in fact, we strive for it. But, ensuring that every component of a good campaign is
                            represented is what you can expect from Creation World.</p>
                        <br>

                        <button class="btn float-right"> <a href="" style="color: black; text-decoration: none; margin-bottom: 20px;"> Learn More <i class="fas fa-angle-right"></i></a></button>
                        
                    </div>
                </div>
            </div>
        </div>
        <br/> <br/>
    </section>
    @endif
    @if ($testimonial)
    <section class=" bg-white mt-5 ">
        <div class="container p-3 mb-3 body-part-4">

            <h2 class="testimonial-header">{{ $testimonial->content }}</h2>

            <div>
                <div class="d-flex justify-content-center"><img src="{{ asset($testimonial->photo) }}" alt="" style="width: 200px;"></div>
                <div class="d-flex justify-content-center">
                    <h3>{{ $testimonial->name }}</h3>
                </div>
                <div class="d-flex justify-content-center">
                    <h3>{{ $testimonial->position }}</h3>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="body-part-5" style="background-image: url({{ asset('public/frontend/media/bg-image.jpeg') }});">
        {{-- <div class="elementor-background-overlay" style=""></div> --}}
        <h2 style="color: #32c4e1; font-size: 50px; line-height: 1.4em; font-weight: bold; ">We are the key to your success</h2>
    </section>
    <section class="bg-white">
        <div class="container body-part-6 ">
            <div class="d-flex justify-content-center row ">
                <div class="card mt-4 mb-4 division-4">
                    <img class="card-img-top mt-4 rounded mx-auto d-block" src="{{ asset('public/frontend/media/1-card.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>SITUATION ANALYSIS</h4>
                        <p class="card-text">We analyse the market and your competitors to merge our objectives and
                            focus area</p>
                    </div>
                </div>
                <div class="card mt-4 mx-1 division-4">
                    <img class="card-img-top rounded mt-4 mx-auto d-block " src="{{ asset('public/frontend/media/2-card.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>DEFINE OBJECTIVES</h4>
                        <p class="card-text">We take initial steps to rule the market; define our objectives to get
                            the best outcome</p>
                    </div>
                </div>
                <div class="card mt-4 mx-1 division-4">
                    <img class="card-img-top rounded mt-4 mx-auto d-block" src="{{ asset('public/frontend/media/3-card.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>DEFINE AUDIENCES</h4>
                        <p class="card-text">It is a crucial step. If you don't know you audiences you cannot
                            achieve success</p>
                    </div>
                </div>
                <div class="card mt-4 division-4">
                    <img class="card-img-top rounded mt-4 mx-auto d-block" src="{{ asset('public/frontend/media/4-card.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>EVALUATE RESULTS</h4>
                        <p class="card-text">Our solid strategy and creative team will help you to create the
                            ultimate brand</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="body-part-7 " style="background-image: url({{ asset('public/frontend/media/back-1-1.jpeg') }});">
            <h2 style="font-weight: bold; color: #32c4e1;">A name you can trust</h2>
            <p style="font-weight: bold; color: #32c4e1;">We provide full scale marketing and advertising services We have one</p>
            <p style="font-weight: bold; color: #32c4e1;">mission ” To generate demand for your product or service ”</p>
        </div>
    </section>
    <section id="portfolio" class="container body-part-8">
        <div class="mt-5">
            <h2 style="color: #32c4e1">Work we are proud of</h2>
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
                        <button class="btn btn-outline-dark"><a href="https://www.youtube.com/watch?v=<?php echo $item->video; ?>" style="color: white; text-decoration: none;">Watch Now</a></button>
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
                        <button class="btn btn-outline-dark"><a href="https://www.youtube.com/watch?v=<?php echo $item->video; ?>" style="color: white; text-decoration: none;">Watch Now</a></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="bg-white ">
        <div class="container body-part-9 mt-5">
            <h2>Our Clients</h2>
            <div class="row">
                @foreach ($clients as $item)
                    
                <div class="col" style="margin-bottom: 20px;">
                    <img src="{{ asset($item->logo) }}" alt="">
                </div>

                 @endforeach
            </div>
        </div>
    </section>
    @if ($news)
        
    
    <section id="news" class="mt-5">
        <div class="container body-part-10 ">
            <h2>Latest News</h2>
            <div class="mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset($news->photo) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4>{{ $news->title }}</h4>
                        <p class="card-text">{!! Str::limit($news->content, 150) !!}</p>
                        <a href="{{ route('news', $news->slug) }}">READ MORE </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif
    <!-- Contact -->

    <section id="contact" class="mt-5 contact-section mt-3 pt-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <div>
                        <h2 style="font-weight: bold; color: aliceblue">We would love to hear from you</h2>
                        <p style="font-weight: bold; color: aliceblue"><i class="fas fa-map-marker-alt"></i> &nbsp; {{ $contact->address }}</p>
                    </div>
                    <div>
                        <!-- contact form -->
                        <div>
                            <span id="form_output"></span>
                            <form action="" method="post" class="contact-form" id="contact-form">
                                @csrf
                                <input type="text" class="contact-form-text" placeholder="Name" name="name" id="w3lName" required="">
                                <input type="email" class="contact-form-text" name="email" placeholder="Email" id="w3lSender" required="">
                                <textarea rows="3" class="contact-form-text" placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                                <button type="submit" class="contact-form-btn" class="btn btn-theme2">Send <i class="far fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gmap">
                    <iframe
                        src="{{ $contact->map }}"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <br/>
    </section>

    
@endsection

@section('footer')
<script>
   $(function(){
        $.ajaxSetup({ headers: {'X-CSRF-Token' : '{{csrf_token()}}'}  });

        $('#contact-form').submit(function(event) {
            event.preventDefault();
            var formData = $('#contact-form').serialize();
            var url = '{{route("query")}}';

            $.ajax({

                url: url,
                method: 'POST',
                data: formData,
                dataType: 'json',

                success: function(data){
                    
                    if (data.error.length > 0) {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }

                        $('#form_output').html(error_html);  
                                            
                    } else {
                        $('#form_output').html(data.success);
                        $('#contact-form')[0].reset();
                    }
                    
                },

                error: function(error) {

                    console.log(error);
                }
            });
        });
    });
    
        
    
        
</script>
@endsection
