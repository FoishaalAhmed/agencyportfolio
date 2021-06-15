@extends('backend.layouts.app')
@section('title', 'Testimonials')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Testimonials') }}</h3>
                    <div class="card-tools">
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
                    @if (isset($testimonial))
                        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="post" id="postForm"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Name') }}</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="{{ __('Name') }}" autocomplete="off"
                                                        value="{{ $testimonial->name }}" id="name"/>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Position') }}</label>
                                                    <input type="text" name="position" class="form-control"
                                                        placeholder="{{ __('Position') }}" autocomplete="off"
                                                        value="{{ $testimonial->position }}" id="position"/>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Content') }}</label>
                                                    <textarea name="content" class="form-control" id="content" rows="3" placeholder="{{ __('Content') }}" autocomplete="off">{{ $testimonial->content }}</textarea>
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
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset($testimonial->photo) }}" alt="User profile picture"
                                                    id="galleryPhoto">
                                            </div>
                                            <br>
                                            <input type="file" name="photo" onchange="readPicture(this)"
                                                style="width: 100%">
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <center>
                                        <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                        <button type="submit" class="btn btn-sm bg-teal">{{ __('Update') }}</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="{{ route('admin.testimonials.store') }}" method="post" id="postForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Name') }}</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="{{ __('Name') }}" autocomplete="off"
                                                        value="{{ old('name') }}" id="name"/>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Position') }}</label>
                                                    <input type="text" name="position" class="form-control"
                                                        placeholder="{{ __('Position') }}" autocomplete="off"
                                                        value="{{ old('position') }}" id="position"/>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label">{{ __('Content') }}</label>
                                                    <textarea name="content" class="form-control" id="content" rows="3" placeholder="{{ __('Content') }}" autocomplete="off">{{ old('content') }}</textarea>
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
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="//placehold.it/200x200" alt="User profile picture"
                                                    id="galleryPhoto">
                                            </div>
                                            <br>
                                            <input type="file" name="photo" onchange="readPicture(this)"
                                                style="width: 100%" required ="">
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <center>
                                        <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                        <button type="submit" class="btn btn-sm bg-teal">{{ __('Save') }}</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    @endif
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">{{ __('Sl') }}</th>
                                        <th style="width: 15%">{{ __('Name') }}</th>
                                        <th style="width: 15%">{{ __('Position') }}</th>
                                        <th style="width: 45%">{{ __('Content') }}</th>
                                        <th style="width: 10%">{{ __('Photo') }}</th>
                                        <th style="width: 10%">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->position }}</td>
                                            <td>{!! $item->content !!}</td>
                                            <td>
                                                <img src="{{ asset($item->photo) }}" alt=""
                                                    style="width: 50px; height:50px;">
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-teal"
                                                    href="{{ route('admin.testimonials.edit', [$item->id]) }}"><span
                                                        class="fas fa-edit"></span></a>
                                                <form action="{{ route('admin.testimonials.destroy', [$item->id]) }}"
                                                    method="post" style="display: none;"
                                                    id="delete-form-{{ $item->id }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $item->id }}').submit();
                                                    }else{
                                                    event.preventDefault();
                                                    }"><span class="fas fa-trash"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

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
                    $('#galleryPhoto')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection
