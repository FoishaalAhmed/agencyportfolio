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
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />

    <title>Business Wall</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>

<body>
    <section class="header-main__business-wall">
        <nav>
            <nav id="nav-bar" class="navbar navbar-light navbar-expand-lg fixed-top">
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
        </nav>
    </section>
    <main>
        <section id="businesswall" class="container-fluid" style="margin-top: 200px">
            <h1 style="color: #068bb6;" class="text-center my-4 businesswall__head wow fadeInLeft"
                data-wow-duration="0.75s" data-wow-delay="0s">
                BUSINESS WALL</h1>
            <div class="container-fluid">
                <div class="mt-md-5 owl-carousel owl-theme">
                    @foreach ($walls as $item)
                        <div class="item">
                            <div class="thumbnail gallery-img-holder content">
                                <div class="content-overlay"></div>
                                <img src="{{ asset($item->photo) }}" class="img-fluid content-image" />
                                <div class="content-details fadeIn-bottom fadeIn-right">
                                    <h6>{{ $item->company }}</h6>
                                    <h6>{{ $item->name }}</h6>
                                    <h6>{{ $item->year }}</h6>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <section id="businesswall__event" class="container-fluid mt-md-5">
            
            
            <div class="container-fluid">
                <h1 class="py-lg-5 text-center wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0s">EVENT WALL
                </h1>
                @php
                    $limit = round($eventCount / 2);
                    $firstPhotos = array_slice($events, 0, $limit);
                    $restPhotos = array_slice($events, $limit);
                @endphp
                <div class="row owl-carousel owl-theme">
                    @foreach ($firstPhotos as $item)
                        <div class="item">
                            <div class="thumbnail gallery-img-holder content">
                                <div class="content-overlay"></div>
                                <img src="{{ asset($item['photo']) }}" class="img-fluid content-image" />
                                <div class="content-details fadeIn-bottom fadeIn-right">
                                    <h6>{{ $item['name'] }}</h6>
                                    <h6>{{ $item['service'] }}</h6>
                                    <h6>{{ $item['year'] }}</h6>
                                    <h6>{{ $item['description'] }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
<br><br>
                <div class="row mt-2 owl-carousel owl-theme">
                    @foreach ($restPhotos as $item)
                        <div class="item">
                            <div class="thumbnail gallery-img-holder content">
                                <div class="content-overlay"></div>
                                <img src="{{ asset($item['photo']) }}" class="img-fluid content-image" />
                                <div class="content-details fadeIn-bottom fadeIn-right">
                                    <h6>{{ $item['name'] }}</h6>
                                    <h6>{{ $item['service'] }}</h6>
                                    <h6>{{ $item['year'] }}</h6>
                                    <h6>{{ $item['description'] }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail gallery-img-holder content">
                            <div class="content-overlay"></div>
                            <img src="images/our-works/Concept 3-01-01-01.png" class="img-fluid content-image" />
                            <div class="content-details fadeIn-bottom fadeIn-right">
                                <h6>This is a title</h6>
                                <p>This is a short description</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
    
    
    <br/> <br/>
    <div class="footer" style="background-color: #002338;color: white;text-align: center;">
        <div style="padding-top: 30px;padding-bottom: 10px;">
            <p>LET’S TALK HERE OR EMAIL US</p>
            <h6 class="mb-2">CONTACT INFO</h6>
            <p style="margin-bottom: 0px;">{{ $contact->fax }} , {{ $contact->phone }}</p>
            <a style="color: white;text-decoration: none;"
                href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            <p>{{ $contact->address }}</p>
            <div class="justify-content-evenly align-items-center gx-2 mobile">
                <a style="text-decoration: none;font-size: 30px;padding: 15px;" href="{{ $contact->facebook }}"><i
                        class="fab fa-facebook"></i> </a>
                <a style="text-decoration: none;font-size: 30px;color: red;padding: 15px;"
                    href="{{ $contact->twitter }}"> <i class="fab fa-youtube"></i></a>
                <a style="text-decoration: none;font-size: 30px;padding: 15px;" href="{{ $contact->instagram }}"><i
                        class="fab fa-linkedin"></i></a>
                <a style="text-decoration: none; font-size:30px;padding: 15px;color:green "
                    href="{{ $contact->pinterest }}"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

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
            nav: true,

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
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="{{ asset('public/frontend/js/animation.js') }}"></script>
</body>

</html>
