@extends('backend.layouts.app')
@section('title', 'Career Update')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Career Update') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.careers.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Careers') }}</a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('includes.error')
                    <form action="{{ route('admin.careers.update', $career->id) }}" method="post" id="CareerForm"
                        enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Date') }}</label>
                                                <input type="text" name="date" class="form-control"
                                                    placeholder="{{ __('Date') }}" required="" autocomplete="off"
                                                    value="{{ $career->date }}" id="date" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Last Date Of Apply') }}</label>
                                                <input type="text" name="last_date" class="form-control"
                                                    placeholder="{{ __('Last Date Of Apply') }}" required=""
                                                    autocomplete="off" value="{{ $career->last_date }}" id="last_date" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Position') }}</label>
                                                <input type="text" name="position" class="form-control"
                                                    placeholder="{{ __('Position') }}" required="" autocomplete="off"
                                                    value="{{ $career->position }}" id="position" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Slug') }}</label>
                                                <input type="text" name="slug" class="form-control"
                                                    placeholder="{{ __('Slug') }}" required="" autocomplete="off"
                                                    value="{{ $career->slug }}" id="slug" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Description') }}</label>
                                                <textarea id="summernote" name="description"
                                                    required=""> {{ $career->description }} </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($career->photo) }}"
                                                alt="Career picture" id="careerPhoto">

                                        </div>
                                        <br>
                                        <input type="file" name="photo" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Update') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('footer')

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote();
        })

        function readPicture(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#careerPhoto')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {

            $('#date, #last_date').datepicker({
                autoclose: true,
                changeYear: true,
                changeMonth: true,
                dateFormat: "dd-mm-yy",
                yearRange: "-0:+1"
            });
        });

        $("#position").keyup(function() {

            var position = $("#position").val();

            var slug = (position.replace(/[^a-zA-Z0-9]+/g, '-')).toLowerCase();
            $("#slug").val(slug);

        });
    </script>
@endsection
