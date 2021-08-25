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
</head>

<body>
    <main>
        <section class="header-main">
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
                <div class="
              hero-text
              d-flex
              flex-column
              align-items-center
              justify-content-center
            ">
                    <p>Prionty started its journey from early 2000's</p>

                    <h1>Concept | Creative | solution</h1>
                    <p>connecting customer with your brand</p>
                </div>
            </nav>
        </section>

        <section id="service-section" class="container-fluid">
            <div class="row service-section__header justify-content-center">
                <div class="col text-center">
                    <h1 class="mt-5">WHAT WE STAND FOR</h1>
                    <p class="w-50 mx-auto">
                        OUR RESULT-ORIENTED EXPERT TEAM FOCUSES ON MAKING INVESTORS
                        SUCCESSFUL IN REACHING MORE AUDIENCE DEVELOPING A NEW IDEA WITH
                        CREATIVITY
                    </p>
                    <!--<hr />-->
                </div>
            </div>

            <div class="container mt-5">
                <div class="row gy-2">
                    @foreach ($services as $item)
                        <div class="col-md-4">
                            <!--<div class="card card__main mx-auto" style="width: 21rem">-->
                            <div class="card card__main mx-auto" style="margin-bottom: 15px;">
                                <div class="card-body">
                                    <img src="{{ asset($item->icon) }}" class="card-img-top" alt="..." />
                                    <h5 class="card-title card-title__main mt-2">
                                        {{ $item->name }}
                                    </h5>
                                    <p class="card-text card-text__main" style="text-align: justify">
                                        {{ substr(strip_tags($item->description),0, 235) }}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <a href="{{ route('services') }}" class="btn card-button float-end">MORE</a>
            </div>
        </section>
        @if ($who_we_are != null)
            <section id="about-us" class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-11 order-1 about-us__left"
                        style='background: url("{{ asset($who_we_are->photo) }}") center center;'></div>
                    <div class="col order-2 about-us__right">
                        <div class="about-us__right__content w-75 mx-auto mt-5 mb-5 flex-row justify-content-center ">
                            <h1>{{ $who_we_are->name }}</h1>
                            <div class="" style="text-align: justify">
                                {!! $who_we_are->text !!}
                            </div>
                            <button class="px-2"><a style="color:white; text-decoration: none;" href="{{route('about')}}">More</a></button>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section id="clients" class="container-fluid" style="padding-right: 0px">
            <div class="row clients__head mx-auto my-auto w-50 text-center pt-5 pb-5">

                <h3 class="text-center" style="color: #0998c7"> SOME OF OUR </h3>
                <h2 class="text-center" style="color: #0998c7"> VALUABLE CLIENTS </h2>
                <p class="text-center">
                    WITH OUR ALWAYS ON COMMUNICATIONS WE HELP CLIENT SOLVE BUSINESS <br />
                    PROBLEMS BY FUSING CREATIVITY, INNOVATION, STRATEGY AND CRAFT.
                </p>
            </div>
            
            <div class="container-fluid" style="padding: 0px" style="height=340px; width=340px;">
                <div class="row marquee w-100">
                  <ul class="marquee-content">
                       @foreach ($firstThirteenClients as $item)
                    <li>
                      <i>
                        <div class="marquee-img-div">
                          <img src="{{ asset($item->logo) }}" alt="" />
                        </div>
                      </i>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="row marquee w-100 mt-1">
                  <ul class="marquee-content2">
                       @foreach ($secondThirteenClients as $item)
                    <li>
                      <i>
                        <div class="marquee-img-div">
                          <img src="{{ asset($item->logo) }}" alt="" />
                        </div>
                      </i>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="row marquee w-100 mt-1">
                  <ul class="marquee-content3">
                      @foreach ($thirdThirteenClients as $item)
                    <li>
                      <i>
                        <div class="marquee-img-div">
                          <img src="{{ asset($item->logo) }}" alt="" />
                        </div>
                      </i>
                    </li>
                    @endforeach
                  </ul>
                </div>
             </div>

            <!--<div class="row marquee w-100">-->
            <!--    <ul class="marquee-content">-->
            <!--        @foreach ($firstThirteenClients as $item)-->

            <!--            <li>-->
            <!--                <i> <img src="{{ asset($item->logo) }}" alt="" /></i>-->
            <!--            </li>-->

            <!--        @endforeach-->
            <!--    </ul>-->
            <!--</div>-->
            <!--<div class="container-fluid" style="padding: 0px">-->
            <!--    <div class="row marquee w-100">-->
            <!--        <ul class="marquee-content2">-->
            <!--            @foreach ($secondThirteenClients as $item)-->

            <!--                <li>-->
            <!--                    <i> <img src="{{ asset($item->logo) }}" alt="" /></i>-->
            <!--                </li>-->

            <!--            @endforeach-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--    <div class="row marquee w-100">-->
            <!--        <ul class="marquee-content3">-->
            <!--            @foreach ($thirdThirteenClients as $item)-->

            <!--                <li>-->
            <!--                    <i> <img src="{{ asset($item->logo) }}" alt="" /></i>-->
            <!--                </li>-->

            <!--            @endforeach-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
        </section>
        <section id="awards" class="mb-5">
            <div class="container p-5">
                <h1 class="awards-head">AWARDS AND ACHIEVEMENTS</h1>
                <div class="row float-left g-3">
                    @foreach ($awards as $item)
                        <div class="col-lg-3 col-sm-4">
                            <div class="thumbnail gallery-img-holder content" style="height: 300px;">
                                <!--<div class="content-overlay"></div>-->
                                <img src="{{ asset($item->photo) }}" class="img-fluid content-image" />
                                <!--<div class="content-details fadeIn-bottom fadeIn-right">-->
                                <!--    <h6>{{ $item->name }}</h6>-->
                                <!--    <p>{{ $item->year }}</p>-->
                                <!--</div>-->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
