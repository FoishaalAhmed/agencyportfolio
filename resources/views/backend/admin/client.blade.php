@extends('backend.layouts.app')
@section('title', 'Clients')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Clients') }}</h3>
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
                    @if (isset($client))
                        <form action="{{ route('admin.clients.update', $client->id) }}" method="post" id="postForm"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="control-label">{{ __('Name') }}</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{ __('Name') }}" autocomplete="off"
                                                value="{{ $client->name }}" id="name"/>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset($client->logo) }}" alt="User profile picture"
                                                    id="galleryPhoto">
                                            </div>
                                            <br>
                                            <input type="file" name="logo" onchange="readPicture(this)"
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
                        <form action="{{ route('admin.clients.store') }}" method="post" id="postForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="control-label">{{ __('Name') }}</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{ __('Name') }}" autocomplete="off"
                                                value="{{ old('video') }}" id="name"/>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
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
                                            <input type="file" name="logo" onchange="readPicture(this)"
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
                                        <th>{{ __('Sl') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Logo') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <img src="{{ asset($item->logo) }}" alt=""
                                                    style="width: 50px; height:50px;">
                                            </td>
                                            <td>
                                                <a class="btn btn-sm bg-teal"
                                                    href="{{ route('admin.clients.edit', [$item->id]) }}"><span
                                                        class="fas fa-edit"></span></a>
                                                <form action="{{ route('admin.clients.destroy', [$item->id]) }}"
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
