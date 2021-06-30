<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prioynti</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
</head>

<body>
    <main>
        <section class="header-main">
            <nav>
                <nav class="navbar navbar-expand-lg navbar-light">
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
                                    <a class="nav-link active" href="{{ route('about') }}">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">SERVICE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">PORTFOLIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">BUSINESSWALL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('contact') }}">CONTACT US</a>
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
              justify-content-center
            ">
                    <p>prionti started its journey from early 2000's</p>

                    <h1>Concept | Creative | solution</h1>
                    <p>connecting customer with your brand</p>
                </div>
            </nav>
        </section>
        <section id="service-section" class="container-fluid">
            <div class="row service-section__header justify-content-center">
                <div class="col text-center">
                    <h1 class="mt-5">WHAT WE STAND FOR</h1>
                    <p>
                        OUR RESULT-ORIENTED EXPERT TEAM FOCUSES ON MAKING INVESTORS
                        SUCCESSFUL IN REACHING MORE AUDIENCE DEVELOPING A NEW IDEA WITH
                        CREATIVITY
                    </p>
                    <hr />
                </div>
            </div>
            <div class="container w-100 mt-5">
                <div class=" row gy-3 mx-auto flex-row justify-content-center align-items-center">
                    @if ($strategic_planning != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($strategic_planning->photo) }}" class="card-img-top"
                                        alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $strategic_planning->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($strategic_planning->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($media_buying != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($media_buying->photo) }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $media_buying->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($media_buying->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($creative_design != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($creative_design->photo) }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $creative_design->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($creative_design->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class=" my-3 gy-2 row gy-3  mx-auto flex-row justify-content-center align-items-center">
                    @if ($audiovisual_production != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($audiovisual_production->photo) }}" class="card-img-top"
                                        alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $audiovisual_production->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($audiovisual_production->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($digital_marketing != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($digital_marketing->photo) }}" class="card-img-top"
                                        alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $digital_marketing->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($digital_marketing->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($event_management != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($event_management->photo) }}" class="card-img-top"
                                        alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $event_management->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($event_management->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row gy-3 mx-auto flex-row justify-content-center align-items-center">
                    @if ($web_development != null)
                        <div class="col col-md-auto">
                            <div class="card card__main" style="width: 19rem">
                                <div class="card-body">
                                    <img src="{{ asset($web_development->photo) }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $web_development->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {!! Str::limit($web_development->text, 235) !!}
                                    </p>
                                    <a href="#" class="btn card-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        @endif @if ($pr != null)
                            <div class="col col-md-auto">
                                <div class="card card__main" style="width: 19rem">
                                    <div class="card-body">
                                        <img src="{{ asset($pr->photo) }}" class="card-img-top" alt="..." />
                                        <h5 class="card-title card-title__main mt-2">
                                            {{ $pr->name }}
                                        </h5>
                                        <p class="card-text card-text__main" style="text-align: justify">
                                            {!! Str::limit($pr->text, 235) !!}
                                        </p>
                                        <a href="#" class="btn card-button">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            @endif @if ($monitoring != null)
                                <div class="col col-md-auto">
                                    <div class="card card__main" style="width: 19rem">
                                        <div class="card-body">
                                            <img src="{{ asset($monitoring->photo) }}" class="card-img-top"
                                                alt="..." />
                                            <h5 class="card-title card-title__main mt-2">
                                                {{ $monitoring->name }}
                                            </h5>
                                            <p class="card-text card-text__main" style="text-align: justify">
                                                {!! Str::limit($monitoring->text, 235) !!}
                                            </p>
                                            <a href="#" class="btn card-button">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                </div>
            </div>
        </section>
        @if ($who_we_are != null)

            <section id="about-us" class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-11 order-1 about-us__left"
                        style='background: url("{{ asset($who_we_are->photo) }}") center center;'></div>
                    <div class="col order-2 about-us__right">
                        <div class="about-us__right__content w-75 mx-auto  mt-5 mb-5 flex-row justify-content-center ">
                            <h1>{{ $who_we_are->name }}</h1>
                            <div class="" style="text-align: justify">
                                {!! $who_we_are->text !!}
                            </div>
                            <button class="px-2">ABOUT US</button>
                        </div>
                    </div>
                </div>
            </section>

        @endif
        <section id="clients" class="container-fluid pb-5">
            <div class="row clients__head mx-auto my-auto w-50 text-center pt-5 pb-5">
                <h1>SOME OF OUR VALUABLE CLIENTS</h1>
                <p>
                    WITH OUR ALWAYS ON COMMUNICATIONS WE HELP CLIENT SOLVE BUSINESS
                    PROBLEMS BY FUSING CREATIVITY, INNOVATION, STRATEGY AND CRAFT.
                </p>
            </div>

            <div class="row marquee w-100">
                <ul class="marquee-content">
                    @foreach ($firstThirteenClients as $item)

                        <li>
                            <i> <img src="{{ asset($item->logo) }}" alt="" /></i>
                        </li>

                    @endforeach
                </ul>
            </div>
            <div class="container-fluid" style="padding: 0px">
                <div class="row marquee w-100">
                    <ul class="marquee-content2">
                        @foreach ($secondThirteenClients as $item)

                            <li>
                                <i> <img src="{{ asset($item->logo) }}" alt="" /></i>
                            </li>

                        @endforeach
                    </ul>
                </div>
                <div class="row marquee w-100">
                    <ul class="marquee-content3">
                        @foreach ($thirdThirteenClients as $item)

                            <li>
                                <i> <img src="{{ asset($item->logo) }}" alt="" /></i>
                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- <div class="row owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($firstThirteenClients as $item)
                        <div class="owl-item cloned bg-light">
                            <div class="item clients-carousel-item">
                                <img class="img-fluid"
                                    src="{{ asset($item->logo) }}" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row owl-carousel owl-theme owl-loaded owl-drag mt-5 mb-5">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($secondThirteenClients as $item)
                        <div class="owl-item cloned bg-light">
                            <div class="item clients-carousel-item item">
                                <img class="img-fluid"
                                    src="{{ asset($item->logo) }}" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($thirdThirteenClients as $item)
                        <div class="owl-item cloned bg-light">
                            <div class="item clients-carousel-item item">
                                <img class="img-fluid"
                                    src="{{ asset($item->logo) }}" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </section>
        <section id="awards" class="mb-5">
            <div class="container p-5">
                <div class="row float-left g-3">
                    @foreach ($awards as $item)
                        <div class="col-lg-3 col-sm-4">
                            <div class="thumbnail gallery-img-holder content">
                                <div class="content-overlay"></div>
                                <img src="{{ asset($item->photo) }}" class="img-fluid content-image" />
                                <div class="content-details fadeIn-bottom fadeIn-right">
                                    <h6>{{ $item->name }}</h6>
                                    <p>{{ $item->year }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="footer" class="container-fluid">
            <div class="container pt-5">
                <div class="row footer__main">
                    <div class="col footer__left">
                        <img src="{{ asset('public/frontend/images/logo.png') }}" alt="logo" />
                        <p>
                            @if ($about != null)
                                {!! substr($about->text, 0, 292) !!}
                            @endif
                        </p>
                    </div>
                    <div class="col-lg-6 px-3 text-center footer__middle">
                        <div class="mt-3 footer__middle-text">
                            <h6 class="">WANT TO MAKE SOMETHING GREAT TOGETHER?</h6>
                            <p>LET’S TALK HERE OR EMAIL US AT</p>
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </div>
                        <div class="footer__nav">
                            <ul class="me-5 d-flex">
                                <li class="mx-2">
                                    <a class="" href="{{ URL::to('/') }}">HOME</a>
                                </li>
                                <li class="mx-2">
                                    <a class="" href="{{ route('about') }}">ABOUT</a>
                                </li>
                                <li class="mx-2">
                                    <a class="" href="#">SERVICE</a>
                                </li>
                                <li class="mx-2">
                                    <a class="" href="#">PORTFOLIO</a>
                                </li>
                                <li class="mx-2">
                                    <a class="" href="#">BUSINESSWALL</a>
                                </li>
                                <li class="mx-2">
                                    <a class="" href="{{ route('contact') }}">CONTACT </a>
                                </li>
                                <li class="">
                                    <a class="" href="{{ route('career') }}">CAREER</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col ms-5 footer__right pt-4">
                        <h6 class="mb-2">CONTACT INFO</h6>
                        <p>OFFICE LINE <br />{{ $contact->phone }}</p>
                        <p>FAX <br />{{ $contact->fax }}</p>
                        <p>{{ $contact->address }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <small>© 2021 PRIONTY EDIT & EFFECT </small>
                    </div>
                    <div class="col-3 d-flex justify-content-evenly align-items-center gx-2">
                        <a href="https://{{ $contact->facebook }}"><i class="fab fa-facebook"></i> </a>
                        <a href="https://{{ $contact->twitter }}"> <i class="fab fa-youtube"></i></a>
                        <a href="https://{{ $contact->instagram }}"><i class="fab fa-linkedin"></i></a>
                        <a href="https://{{ $contact->pinterest }}"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
