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
    <section class="header-main-career">
        <nav>
            <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light fixed-top">
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
        <div id="career" class="container-fluid">
            @foreach ($careers as $item)

                @if ($loop->odd)
                    <div class="container career__main">
                        <div class="row">
                            <div class="col-md-6 career__main-left"
                                style="background: url('{{ asset($item->photo) }}') center center;"></div>
                            <div
                                class="col-md-6 career__main-right d-flex flex-column justify-content-lg-around justify-content-md-evenly ">
                                <div class="career__main-right-text ms-3">
                                    <h3>{{ $item->position }}</h3>
                                    <p>
                                        {!! substr(strip_tags($item->description), 0, 200) !!}
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
                @else
                    <div class="container-fluid career__middle" style="padding: 0">
                        <div class="container">
                            <div class="row">
                                <div class="
                  col-md-6
                  career__middle-right
                  d-flex
                  flex-column
                  justify-content-lg-around justify-content-md-evenly
                ">
                                    <div class="career__middle-right-text ms-3">
                                        <h3>{{ $item->position }}</h3>
                                        <p>
                                            {!! substr(strip_tags($item->description), 0, 200) !!}
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
                                    style="background: url('{{ asset($item->photo) }}') center center;"></div>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach

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
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="cv"
                                    id="cv" />
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
    <script src="{{ asset('public/frontend/js/animation.js') }}"></script>
    <script src="{{ asset('public/frontend/js/index.js') }}"></script>
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
