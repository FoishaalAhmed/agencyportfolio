<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prionty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,800;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>

<body>
    <section class="header-main">
        <nav>
            <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light fixed-top wow slideInDown"
                data-wow-duration="0.75s" data-wow-delay="0s" style="background-color: #002338;">


                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ URL::to('/') }}"><img class="navbar-logo"
                            src="{{ asset('public/frontend/images/logo.png') }}" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto nav_items me-5">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ URL::to('/') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('about') }}">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('services') }}">SERVICE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('business') }}">BUSINESSWALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('contact') }}">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('career') }}">CAREER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="
            hero-text
            d-flex
            flex-column
            align-items-center
            justify-content-center wow bounceIn
          " data-wow-duration="1s" data-wow-delay=".5s">
                <p>prionti started its journey from early 2000's</p>

                <h1>Concept | Creative | solution</h1>
                <p>connecting customer with your brand</p>
            </div>
        </nav>
    </section>



    <main>
        <section id="service-section" class="container-fluid">
            @if ($what_we_stand_for)


                <div class="row service-section__header justify-content-center">
                    <div class="col text-center" style="padding-top: 50px; padding-bottom: 10px; ">
                        <h1 class="mt-5">{{ $what_we_stand_for->name }}</h1>
                        <p class="w-50 mx-auto">
                            {{ $what_we_stand_for->text }}
                        </p>
                    </div>
                </div>
            @endif
            <div style="padding-bottom: 20px;" class="container mt-5 wow fadeIn" data-wow-duration="1s"
                data-wow-delay="0.5s">
                <div class="row gy-2">
                    @foreach ($services as $item)
                        <div class="col-md-4 wow @if ($loop->odd) {{ 'slideInRight' }} @else {{ 'slideInLeft' }} @endif" data-wow-duration="1s" data-wow-delay=".5s">
                            <div style="background-color: #f0f8ff94;" class="card card__main mx-auto gy-md-1">
                                <div class="card-body">
                                    <img src="{{ asset($item->icon) }}" class="card-img-top" alt="..." />
                                    <h5 style="font-weight: bold;" class="card-title card-title__main mt-2">
                                        {{ $item->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {{ substr(strip_tags($item->description), 0, 235) }}
                                    </p>
                                    <a href="{{ route('services') }}" class="btn card-button"><span
                                            style="font-style: normal;font-weight: normal;color: black;"><u>READ
                                                MORE</u></span> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('services') }}" class="btn card-button float-end" style="margin-top: 5px;">MORE</a>
            </div>
        </section>
        @if ($who_we_are != null)
            <section id="about-us" class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-11 order-1 about-us__left wow slideInLeft"
                        data-wow-duration="1s" data-wow-delay=".5s"
                        style='background: url("{{ asset($who_we_are->photo) }}") center center;'></div>
                    <div class="col order-2 about-us__right wow slideInRight" data-wow-duration="1s"
                        data-wow-delay=".5s">
                        <div style="padding-top: 30px; padding-bottom: 30px;" class="
                about-us__right__content
                w-75
                mx-auto
                mt-5
                mb-5
                flex-row
                justify-content-center
              ">
                            <h1>{{ $who_we_are->name }}</h1>
                            <p class="" style="text-align: justify;padding-top: 20px; padding-bottom: 20px; ">
                                {!! $who_we_are->text !!}
                            </p>
                            <button class="px-2"><a style="color:white; text-decoration: none;"
                                    href="{{ route('about') }}">About Us</a></button>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section id="clients" class="container-fluid" style="padding-right: 0px">
            <div class="row clients__head mx-auto my-auto w-50 text-center pt-5 pb-5">
                <h1 style="padding-top: 30px; padding-bottom: 3px; " class="text-center wow fadeInLeft"
                    data-wow-duration="1s" data-wow-delay="0.3s">
                    SOME OF OUR <br />
                    VALUABLE CLIENTS
                </h1>

            </div>
            <div class="container">

                <div class="row" style="text-align: center; padding-bottom: 30px;margin-top: -30px; ">
                    <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" style="color: #7aa8b7;">
                        WITH OUR ALWAYS ON COMMUNICATIONS WE HELP CLIENT SOLVE BUSINESS
                        PROBLEMS BY FUSING CREATIVITY, INNOVATION, STRATEGY AND CRAFT.
                    </p>
                </div>
            </div>
            <!-- Slider -->
            <div class="slider">
                <!-- Slider-1 -->
                <div class="slide-track">
                    <!-- 9 slide -->
                    @foreach ($firstTwentyClients as $item)
                        <div class="slide">
                            <img src="{{ asset($item->logo) }}" alt="">
                        </div>
                    @endforeach
                    {{-- <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div>
                    <!-- 9 slide end -->
                    <!-- 9 slide double -->
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (10).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div> --}}
                </div>
                <!-- Slider-2 -->
                <div class="slide-track-2">
                    <!-- 9 slide -->
                    @foreach ($secondTwentyClients as $item)
                        <div class="slide">
                            <img src="{{ asset($item->logo) }}" alt="">
                        </div>
                    @endforeach
                    {{-- <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div>
                    <!-- 9 slide end -->
                    <!-- 9 slide double -->
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (10).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div> --}}
                </div>
                <!-- Slider-3 -->
                <div class="slide-track">
                    <!-- 9 slide -->
                    @foreach ($thirdTwentyClients as $item)
                        <div class="slide">
                            <img src="{{ asset($item->logo) }}" alt="">
                        </div>
                    @endforeach
                    {{-- <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div>
                    <!-- 9 slide end -->
                    <!-- 9 slide double -->
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (10).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (11).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (12).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (13).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (14).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients//Background (15).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (16).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (17).png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('public/frontend/images/clients/Background (18).png') }}" alt="">
                    </div> --}}
                </div>
            </div>

            </div>
        </section>
        <section id="awards" class="mb-5">
            <div class="container p-5 ">
                <h1 style="padding-top: 10px; padding-bottom: 10px; " class="awards-head wow fadeInLeft"
                    data-wow-duration="0.5s" data-wow-delay="0.25s">AWARDS AND ACHIEVEMENTS
                </h1>
                <div class="row float-left g-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    @foreach ($awards as $item)
                        <div class="col-lg-3 col-sm-4">
                            <div class="thumbnail gallery-img-holder">
                                <div class="content-overlay"></div>
                                <img src="{{ asset($item->photo) }}" class="img-fluid content-image" />
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/frontend/images/award.jpg') }}"
                                class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <div class="footer" style="background-color: #002338;color: white;text-align: center;">
            <div style="padding-top: 30px;padding-bottom: 10px;">
                <p>LET’S TALK HERE OR EMAIL US AT</p>
                <h6 class="mb-2">CONTACT INFO</h6>
                <p style="margin-bottom: 0px;">{{ $contact->fax }} , {{ $contact->phone }}</p>
                <a style="color: white;text-decoration: none;"
                    href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                <p>{{ $contact->address }}</p>
                <div class="justify-content-evenly align-items-center gx-2 mobile">
                    <a style="text-decoration: none;font-size: 30px;padding: 15px;"
                        href="{{ $contact->facebook }}"><i class="fab fa-facebook"></i> </a>
                    <a style="text-decoration: none;font-size: 30px;color: red;padding: 15px;"
                        href="{{ $contact->twitter }}"> <i class="fab fa-youtube"></i></a>
                    <a style="text-decoration: none;font-size: 30px;padding: 15px;"
                        href="{{ $contact->instagram }}"><i class="fab fa-linkedin"></i></a>
                    <a style="text-decoration: none; font-size:30px;padding: 15px;color:green "
                        href="{{ $contact->pinterest }}"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="{{ asset('public/frontend/js/animation.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
