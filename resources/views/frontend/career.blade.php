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
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/shared/shared.css') }}" />
    <title>Career</title>
</head>

<body>
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
            <div style="height: 50vh" class="
            hero-text
            d-flex
            flex-column
            align-items-center
            justify-content-center
          ">
                <h1 class="fw-bolder">IF YOU READ 100 MIND PER SECOND</h1>
                <h2 class="fw-bold">WE WANT YOU</h2>
            </div>
        </nav>
    </section>
    <main>
        <div id="career" class="container-fluid">
            <div class="container career__main">
                <div class="row">
                    <div class="col-md-6 career__main-left"
                        style="background: url('{{ asset('public/frontend/images/career/Background.png') }}') center center;">
                    </div>
                    <div
                        class="col-md-6 career__main-right d-flex flex-column justify-content-lg-around justify-content-md-evenly ">
                        <div class="career__main-right-text ms-3">
                            <h3>SERVICING <br />ACCOUNT EXECUTIVE</h3>
                            <p>
                                Ideal candidate should have experience in developing and
                                executing marketing campaigns while managing and inspiring a
                                team.
                            </p>
                        </div>
                        <div class="career__main-right-btn ms-3">
                            <button type="button" class="btn btn-dark my-2">
                                FULL DESCRIPTION
                            </button>
                            <br />
                            <button type="button" class="btn btn-dark" type="submit">
                                APPLY HERE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid career__middle" style="padding: 0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6
                  career__middle-right
                  d-flex
                  flex-column
                  justify-content-lg-around justify-content-md-evenly
                ">
                            <div class="career__middle-right-text ms-3">
                                <h3>CREATIVE VISUALIZER</h3>
                                <p>
                                    Our ideal candidate will have expert knowledge of current
                                    design software and skilled with every step of the design
                                    process from concept to the final deliverable
                                </p>
                            </div>
                            <div class="career__middle-right-btn ms-3">
                                <button type="button" class="btn btn-dark my-2">
                                    FULL DESCRIPTION
                                </button>
                                <br />
                                <button type="button" class="btn btn-dark" type="submit">
                                    APPLY HERE
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 career__middle-left"
                            style="background: url('{{ asset('public/frontend/images/career/Background-2.png') }}') center center;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container career__end">
                <div class="row">
                    <div class="col-md-6 career__end-left"
                        style="background: url('{{ asset('public/frontend/images/career/Background-3.png') }}') center center;">
                    </div>
                    <div class="
                col-md-6
                career__main-right
                d-flex
                flex-column
                justify-content-lg-around justify-content-md-evenly
              ">
                        <div class="career__end-right-text ms-3">
                            <h3>CREATIVE <br />STRATEGIC PLANNER</h3>
                            <p>
                                Strategic planners at WebAble are the foundation of any
                                creative project, and provide the team with information
                                gleaned from studying markets for relevant data
                            </p>
                        </div>
                        <div class="career__end-right-btn ms-3">
                            <button type="button" class="btn btn-dark my-2">
                                FULL DESCRIPTION
                            </button>
                            <br />
                            <button type="button" class="btn btn-dark" type="submit">
                                APPLY HERE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-form mt-5 container">
            <div class="row">
                <div class="col-md-6 mt-3 gy-3">
                    <div class="form__header-right">
                        <h4 class="text-left">Interested ?</h4>
                        <p>Fill in the form or just send us an email</p>
                    </div>
                </div>
                <div class="col">
                    <div class="form-head">
                        <h4>HELLO!</h4>
                        <p>
                            We’ve been expecting you. Fill in the form or just send us an
                            email
                        </p>
                    </div>
                    <span id="form_output"></span>
                    <form method="post" data-form-title="CONTACT US" id="cv-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group p-1 mb-2">
                            <input type="text" class="form-control" name="name" required="" placeholder="Name*"
                                data-form-field="Name" />
                        </div>
                        <div class="form-group p-1 mb-2">
                            <input type="email" class="form-control" name="email" required="" placeholder="Email*"
                                data-form-field="Email" />
                        </div>

                        <div class="form-group p-1 mb-2">
                            <input type="subject" class="form-control" name="subject" placeholder="subject" />
                        </div>
                        <div class="form-group p-1 mb-2">
                            <textarea class="form-control" name="message" placeholder="Message" rows="3"
                                data-form-field="Message"></textarea>
                        </div>
                        <div class="d-flex justify-content-lg-between align-items-end mb-4">
                            <div class="form-group p-1">
                                <small>Attach your Resume/ CV</small>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="cv" id="cv"/>
                            </div>
                            <div class="form__footer-button">
                                <button type="submit" class="btn btn-dark mb-3 btn-sm"
                                    style="margin-bottom: 4px !important">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <section id="footer" class="container-fluid">
        <div class="container pt-5">
            <div class="row footer__main">
                <div class="col footer__left">
                    <img src="{{ asset('public/frontend/images/logo.png') }}" alt="logo" />
                    <p style="text-align: justify">
                        @if ($about != null)
                            {!! substr($about->text, 0, 292) !!}
                        @endif
                    </p>
                </div>
                <div class="col-lg-6 px-3 text-center footer__middle">
                    <div class="mt-5 footer__middle-text">
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
                <div class="col ms-5 footer__right pt-5">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }
            });

            $('#cv-form').submit(function(event) {
                event.preventDefault();
                $.ajax({

                    url: "{{ route('career.application') }}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'json',
                    processData: false,
                    contentType: false,

                    success: function(data) {
                        if (data.error.length > 0) {
                            var error_html = '';
                            for (var count = 0; count < data.error.length; count++) {
                                error_html += '<div class="alert alert-danger">' + data.error[
                                    count] + '</div>';
                            }
                            $('#form_output').html(error_html);
                        } else {
                            $('#form_output').html(data.success);
                            $('#cv-form')[0].reset();
                        }
                    },

                    error: function(error) {
                        console.log(error);
                    }
                });

            });

        });

    </script>
</body>

</html>
