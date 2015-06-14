@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Sign Up</h1>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							<label class="control-label">Name</label>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
							{!! $errors->first('name', '<span class="help-block error">:message</span>') !!}
						</div>

						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label class="control-label">E-Mail Address</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
							{!! $errors->first('email', '<span class="help-block error">:message</span>') !!}
						</div>

						<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
							<label class="control-label">Password</label>
							<input type="password" class="form-control" name="password" required>
							{!! $errors->first('password', '<span class="help-block error">:message</span>') !!}
						</div>

						<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
							<label class="control-label">Confirm Password</label>
							<input type="password" class="form-control" name="password_confirmation" required>
							{!! $errors->first('password_confirmation', '<span class="help-block error">:message</span>') !!}
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</form>
				</div>
			</div>
	</div>
</div>
@endsection
