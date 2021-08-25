@extends('backend.layouts.app')
@section('title', 'Query View')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Query View') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.queries.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Queries') }}</a>
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
                    <form method="post" id="userForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('Name') }}" required="" autocomplete="off"
                                            value="{{ $query->name }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('E-mail') }}</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="{{ __('E-mail') }}" required="" autocomplete="off"
                                            value="{{ $query->email }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ __('Phone') }}" required="" autocomplete="off"
                                            value="{{ $query->phone }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Subject') }}</label>
                                        <input type="text" name="subject" class="form-control"
                                            placeholder="{{ __('Subject') }}" required="" autocomplete="off"
                                            value="{{ $query->subject }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="control-label">{{ __('Message') }}</label>
                                        <textarea name="message" class="form-control" id="message" rows="3"
                                            placeholder="{{ __('Message') }}"
                                            autocomplete="off">{{ $query->message }}</textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
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
