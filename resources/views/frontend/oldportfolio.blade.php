<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
    <title>Our Works</title>
</head>

<body>
    <section class="header-main-our-works">
        <nav>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
                            {{-- <li class="nav-item">
                                    <a class="nav-link active" href="#">PORTFOLIO</a>
                                </li> --}}
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('works') }}">OUR WORK</a>
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
        </nav>
        <!--<div class="vdo">-->
            <!-- The video -->
        <!--    <video autoplay muted loop id="myVideo">-->
        <!--        <source src="{{ asset('public/frontend/video/productionID_4517474.mp4') }}" type="video/mp4" />-->
        <!--    </video>-->
        <!--</div>-->
    </section>
    
    <main>
        <section class="container-fluid our-work__main pb-5">
            <br> <br>
            <div class="container our-work__contents">
                <h1 class="text-center">WORKS</h1>
                <div class="our-work__content pt-5">
                    <div class="row float-left g-3">
                        @foreach ($portfolios as $item)
                            <div class="col-lg-4 col-sm-4">
                                <div class="thumbnail gallery-img-holder content" style="margin-bottom: 35px;">
                                    <a href="https://www.youtube.com/watch?v={{ $item->video }}" target="_blank"><img
                                            src="{{ asset($item->photo) }}" class="img-fluid content-image" /></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section id="footer" class="container-fluid">
            <div class="container pt-5">
                <div class="row footer__main">
                    <!--<div class="col footer__left">-->
                    <!--    <img src="{{ asset('public/frontend/images/logo.png') }}" alt="logo" />-->
                    <!--    <p>-->
                    <!--        @if ($about != null)-->
                    <!--            {!! substr($about->text, 0, 292) !!}-->
                    <!--        @endif-->
                    <!--    </p>-->
                    <!--</div>-->
                    <div class="col-lg-12 px-3 text-center footer__middle">
                        <div class="mt-3 footer__middle-text">
                            <h6 class="">WANT TO MAKE SOMETHING GREAT TOGETHER?</h6>
                            <p>LET’S TALK HERE OR EMAIL US AT</p>
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            <br/> <br/>
                            <h6 class="mb-2">CONTACT INFO</h6>
                            <p>OFFICE LINE <br />{{ $contact->phone }}</p>
                            <p>FAX <br />{{ $contact->fax }}</p>
                            <p>{{ $contact->address }}</p>
                            <div class="justify-content-evenly align-items-center gx-2 mobile">
                                <a href="https://https://www.facebook.com/priontyhd/"><i class="fab fa-facebook"></i> </a>
                                <a href="https://https://twitter.com/HdPrionty"> <i class="fab fa-youtube"></i></a>
                                <a href="https://instagram.com"><i class="fab fa-linkedin"></i></a>
                                <a href="https://pinterest.com"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <!--<div class="footer__nav">-->
                        <!--    <ul class="me-5 d-flex">-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ URL::to('/') }}">HOME</a>-->
                        <!--        </li>-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ route('about') }}">ABOUT</a>-->
                        <!--        </li>-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ route('services') }}">SERVICE</a>-->
                        <!--        </li>-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ route('works') }}">OURWORK</a>-->
                        <!--        </li>-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ route('business') }}">BUSINESSWALL</a>-->
                        <!--        </li>-->
                        <!--        <li class="mx-2">-->
                        <!--            <a class="" href="{{ route('contact') }}">CONTACT </a>-->
                        <!--        </li>-->
                        <!--        <li class="">-->
                        <!--            <a class="" href="{{ route('career') }}">CAREER</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                    <!--<div class="col ms-5 footer__right pt-4">-->
                    <!--    <h6 class="mb-2">CONTACT INFO</h6>-->
                    <!--    <p>OFFICE LINE <br />{{ $contact->phone }}</p>-->
                    <!--    <p>FAX <br />{{ $contact->fax }}</p>-->
                    <!--    <p>{{ $contact->address }}</p>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
    <!--<section class="container-fluid footer__bottom">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-9">-->
    <!--                <small>© 2021 PRIONTY EDIT & EFFECT </small>-->
    <!--            </div>-->
    <!--            <div class="col-3 d-flex justify-content-evenly align-items-center gx-2">-->
    <!--                <a href="https://{{ $contact->facebook }}"><i class="fab fa-facebook"></i> </a>-->
    <!--                <a href="https://{{ $contact->twitter }}"> <i class="fab fa-youtube"></i></a>-->
    <!--                <a href="https://{{ $contact->instagram }}"><i class="fab fa-linkedin"></i></a>-->
    <!--                <a href="https://{{ $contact->pinterest }}"><i class="fab fa-whatsapp"></i></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
</body>

</html>
