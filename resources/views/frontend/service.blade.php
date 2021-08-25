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
    <link rel="stylesheet" href={{ asset('public/frontend/css/shared/shared.css') }} />
    <link rel="stylesheet" href={{ asset('public/frontend/css/style.css') }} />
    <title>Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

</head>

<body>
    <section class="header-main1" style="display: block">
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
        <section id="service">
            <div class="container-fluid service-main">
                <div class="container service-main__head"></div>
            </div>
            <div class="container-fluid service-content">
                <div class="container pt-5">
                    <div class="row service-content__main py-4" style="margin-top: 400px">
                        @foreach ($services as $item)
                            <div class="col-md-4">
                                <div class="service__card h-100">
                                    <img src="{{ asset($item->icon) }}" class="wow flip" alt="..." />
                                    <div class="card-body wow fadeInLeft">
                                        <h5 class="service-content__card-title">
                                            {{ $item->name }}
                                        </h5>
                                        <div class="service-content__card-text">
                                            <p class="card-text">
                                                {!! $item->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="footer" style="background-color: #002338;color: white;text-align: center;">
        <div style="padding-top: 30px;padding-bottom: 10px;">
            <p>LET’S TALK HERE OR EMAIL US AT</p>
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="{{ asset('public/frontend/js/animation.js') }}"></script>
</body>

</html>
