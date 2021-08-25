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

    <link rel="stylesheet" href={{ asset('public/frontend/css/about-us.css') }} />
    <link rel="stylesheet" href={{ asset('public/frontend/css/shared/shared.css') }} />
    <link rel="stylesheet" href={{ asset('public/frontend/css/style.css') }} />
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>

<body>
    <main>
        <section class="header-main__about">
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
            </nav>
        </section>
        <section id="about-us " class="mt-5">
            @if ($weAre != null)
                <div class="container about-us__top text-center mb-5" style="margin-top: 100px">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 ">
                            <div class="about-us__top-header wow fadeInRight">
                                <h1 style="padding-bottom: 30px; padding-top: 15px;color: #068bb6; ">
                                    WHAT PRIONTY DOES
                                </h1>
                            </div>
                            <div class="w-100 mx-auto about-us__top-content wow fadeInLeft" style="text-align: justify">
                                <p>
                                    {!! $weAre->text !!}
                                </p>
                            </div>
                        </div>
                        <div style="text-align: center; margin: auto; " class="col-md-4 col-sm-10 wow rotateIn">
                            <img class="" style="height: 370px; width: 355px; text-align: center;"
                                src="{{ asset($weAre->photo) }}" alt="" />
                        </div>
                    </div>
                </div>
            @endif
            @if ($message != null)
                <div class="container">
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div style="text-align: center; margin: auto;"
                                class="about-us__bottom-header text-center pt-5 wow fadeIn" data-wow-duration="1s"
                                data-wow-delay="0.5s">
                                <h1 style="text-align: center; margin: auto;padding-left: 50px;color: #068bb6;">MESSAGE
                                    FROM
                                    CEO</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col col-sm-12 gy-3 wow fadeInLeft">
                                <img class="w-100" src="{{ asset($message->photo) }}" alt="" />
                                <div style="padding-bottom: 50px;padding-top: 30px;" class="img-info text-center">
                                    <p style="margin: 0"><b>MONOAR HOSSAIN PATHAN</b></p>
                                    <small>CEO & PROPRIETOR</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col ms-5 gy-3 wow fadeInRight">
                                <p class="w-70" style="text-align: justify; margin-left: -48px;padding-left: 50px;">
                                    {!! $message->text !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
    <script src="{{ asset('public/frontend/js/animation.js') }}"></script>
</body>

</html>
