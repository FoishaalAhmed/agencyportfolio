@extends('backend.layouts.app')
@section('title', 'Contact')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Contact') }}</h3>
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
                    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="post" id="contactForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('E-mail Address') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="{{ __('E-mail Address') }}" autocomplete="off"
                                            value="{{ $contact->email }}" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('OFFICE LINE') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ __('OFFICE LINE') }}" autocomplete="off"
                                            value="{{ $contact->phone }}" required="">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Fax') }}</label>
                                        <input type="text" name="fax" class="form-control"
                                            placeholder="{{ __('Fax') }}" autocomplete="off"
                                            value="{{ $contact->fax }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Facebook') }}</label>
                                        <input type="text" name="facebook" class="form-control"
                                            placeholder="{{ __('Facebook') }}" autocomplete="off"
                                            value="{{ $contact->facebook }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Youtube') }}</label>
                                        <input type="text" name="twitter" class="form-control"
                                            placeholder="{{ __('Youtube') }}" autocomplete="off"
                                            value="{{ $contact->twitter }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('LinkedIn') }}</label>
                                        <input type="text" name="instagram" class="form-control"
                                            placeholder="{{ __('LinkedIn') }}" autocomplete="off"
                                            value="{{ $contact->instagram }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Whatsapp') }}</label>
                                        <input type="text" name="pinterest" class="form-control"
                                            placeholder="{{ __('Whatsapp') }}" autocomplete="off"
                                            value="{{ $contact->pinterest }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4" style="visibility: hidden">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Whatsapp') }}</label>
                                        <input type="text" name="" class="form-control"
                                            placeholder="{{ __('Whatsapp') }}" autocomplete="off"
                                            value="{{ $contact->pinterest }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4" style="visibility: hidden">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Whatsapp') }}</label>
                                        <input type="text" name="" class="form-control"
                                            placeholder="{{ __('Whatsapp') }}" autocomplete="off"
                                            value="{{ $contact->pinterest }}">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Address') }}</label>
                                        <textarea name="address" class="form-control" placeholder="{{ __('Address') }}"
                                            autocomplete="off" rows="3" required=""> {{ $contact->address }} </textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Google Map') }}</label>
                                        <textarea name="map" class="form-control" placeholder="{{ __('Google Map') }}"
                                            autocomplete="off" rows="3" required=""> {{ $contact->map }} </textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
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
