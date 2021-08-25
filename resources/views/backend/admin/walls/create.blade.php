@extends('backend.layouts.app')
@section('title', 'New Business Wall')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('New Business Wall') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.walls.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Business Walls') }}</a>
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
                    <form action="{{ route('admin.walls.store') }}" method="post" id="userForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Company') }}</label>
                                                <input type="text" name="company" class="form-control"
                                                    placeholder="{{ __('Company') }}" required="" autocomplete="off"
                                                    value="{{ old('company') }}" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{ __('Service') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="service_id"
                                                required="">

                                                @foreach ($services as $item)
                                                    <option value="{{ $item->id }}" @if (old('service_id') == $item->id) {{ 'selected' }} @endif>
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">{{ __('Year') }}</label>
                                                <select name="year" id="year" class="form-control select2"
                                                    style="width: 100%;">
                                                    @php
                                                        $year = date('Y');
                                                    @endphp
                                                    <option value="">{{ __('Select Year') }}</option>
                                                    @for ($i = $year; $i >= 1971; $i--)
                                                        <option value="{{ $i }}" @if (old('year') == $i) {{ 'selected' }} @endif>
                                                            {{ $i }}</option>
                                                    @endfor

                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Description') }}
                                                    <small>{{ __('(Under 100 Letters)') }}</small> </label>
                                                <textarea class="form-control" placeholder="{{ __('Description') }}"
                                                    autocomplete="off"
                                                    name="description"> {{ old('description') }} </textarea>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200"
                                                alt="User profile picture" id="userPhoto">

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
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Save') }}</button>
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
        function readPicture(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#userPhoto')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
