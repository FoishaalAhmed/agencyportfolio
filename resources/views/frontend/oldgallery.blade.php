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
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />

    <title>Business Wall</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="header-main1" style="display: block">
        <nav>
            <nav id="nav-bar" class="navbar navbar-expand-lg fixed-top">
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
    </section>
    <main>
        <section id="businesswall" class="container-fluid">
            <br> <br>
            <h1 class="text-center my-4 businesswall__head">BUSINESS AWARD WALL</h1>
            <div class="container-fluid">
                <div class="mt-md-5 owl-carousel owl-theme">
                    @foreach ($awards as $item)

                        <div class="item">
                            <img src="{{ asset($item->photo) }}" alt="Quokka, Perth" class="card-img-top" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @php
            $limit = round($photoCount / 2);
            $firstPhotos = array_slice($photos, 0, $limit);
            $restPhotos = array_slice($photos, $limit);
        @endphp
        <section id="businesswall__event" class="container-fluid mt-md-5">
            <div class="container-fluid">
                <h1 class="py-lg-5 text-center">EVENT WALL</h1>
                <div class="row owl-carousel owl-theme">
                    @foreach ($firstPhotos as $item)

                        <div class="item">
                            <img src="{{ asset($item['photo']) }}" alt="Quokka, Perth" class="card-img-top"
                                style="width: 375px; height:235px;" />
                        </div>
                    @endforeach
                </div>
                <div class="row mt-2 owl-carousel owl-theme">
                    @foreach ($restPhotos as $item)

                        <div class="item">
                            <img src="{{ asset($item['photo']) }}" alt="Quokka, Perth" class="card-img-top"
                                style="width: 375px; height:235px;" />
                        </div>
                    @endforeach
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
                        <br /> <br />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 120,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: false,

            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
