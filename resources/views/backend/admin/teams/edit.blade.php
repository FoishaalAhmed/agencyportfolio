

@extends('backend.layouts.app')
@section('title', 'Team Update')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('Team Update')}}</h3>
                <div class="card-tools">
					<a href="{{route('admin.teams.index')}}" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('Teams')}}</a>
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
                <form action="{{route('admin.teams.update', $team->id)}}" method="post" id="userForm" enctype="multipart/form-data">
					@csrf
					@method('PUT')
                    <div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Name')}}</label>
											<input type="text" name="name" class="form-control" placeholder="{{__('Name')}}" required="" autocomplete="off" value="{{$team->name}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Position')}}</label>
											<input type="text" name="position" class="form-control" placeholder="{{__('Position')}}" required="" autocomplete="off" value="{{$team->position}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Facebook')}}</label>
											<input type="text" name="facebook" class="form-control" placeholder="{{__('Facebook')}}" autocomplete="off" value="{{$team->facebook}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Linkedin')}}</label>
											<input type="text" name="linkedin" class="form-control" placeholder="{{__('Linkedin')}}" value="{{ $team->linkedin }}" autocomplete="off" id="Linkedin"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Twitter')}}</label>
											<input type="text" name="twitter" class="form-control" placeholder="{{__('Twitter')}}" value="{{ $team->twitter }}" autocomplete="off" id="twitter"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Priority')}}</label>
											<input type="number" name="priority" class="form-control" placeholder="{{__('Priority')}}" value="{{ $team->priority }}" autocomplete="off" id="priority" required=""/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-primary card-outline">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="{{ asset($team->photo) }}" alt="User profile picture" id="userPhoto">
										
									</div>
									<br>
									<input type="file" name="photo" onchange="readPicture(this)" style="width: 100%" >
								</div>
								<!-- /.card-body -->
							</div>
						</div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                <button type="submit" class="btn btn-sm bg-blue">{{__('Update')}}</button>
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
        
            reader.onload = function (e) {
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

