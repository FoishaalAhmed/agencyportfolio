<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('public/frontend/css/about-us.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
    <title>About Us</title>
</head>

<body>
    <main>
        <section class="header-main">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand me-4" href="{{ URL::to('/') }}"><img class="navbar-logo"
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
        </section>
        <br />  <br />
        <section id="about-us " class="mt-5">
            @if ($weAre != null)
                <div class="container about-us__top text-center mb-5">
                    <div class="row">
                        <div class="col-md-8 col-sm-10">
                            <div class="about-us__top-header">
                                <h1>
                                    WHAT PRIONTY DOES
                                    <hr class="w-25 mx-auto" />
                                </h1>
                            </div>
                            <div class="w-100 mx-auto about-us__top-content" style="text-align: justify">
                                <p>
                                    {!! $weAre->text !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-10">
                            <img style="height: 330px; width: 355px" src="{{ asset($weAre->photo) }}" alt="" />
                        </div>
                    </div>
                </div>
            @endif
            @if ($message != null)
                <div class="container-fluid about-us__bottom bg-light">
                    <div class="container mt-5">
                        <div class="about-us__bottom-header text-center pt-5">
                            <h1>MESSAGE FROM CEO</h1>
                        </div>
                        <div class="row mt-5 pb-5">
                            <div class="col-md-4 col-sm-12 gy-3">
                                <img class="w-100" src="{{ asset($message->photo) }}" alt="" />
                                <div class="img-info text-center">
                                    <p style="margin: 0">MONOAR HOSSAIN PATHAN</p>
                                    <small>CEO & PROPRIETOR</small>
                                </div>
                            </div>
                            <div class="col ms-5 gy-3">
                                <p class="w-70" style="text-align: justify; margin-left: -48px">
                                    {!! $message->text !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>
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
        <!--            <div class="-->
        <!--        col-3-->
        <!--        d-flex-->
        <!--        justify-content-evenly-->
        <!--        align-items-center-->
        <!--        gx-2-->
        <!--      ">-->
        <!--                <a href="https://{{ $contact->facebook }}"><i class="fab fa-facebook"></i> </a>-->
        <!--                <a href="https://{{ $contact->twitter }}"> <i class="fab fa-youtube"></i></a>-->
        <!--                <a href="https://{{ $contact->instagram }}"><i class="fab fa-linkedin"></i></a>-->
        <!--                <a href="https://{{ $contact->pinterest }}"><i class="fab fa-whatsapp"></i></a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
