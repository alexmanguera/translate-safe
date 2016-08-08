@extends('layouts.master')

@section('title', 'Login')
	
	
@section('content')

<!-- ==== LOGIN ==== -->
<div id="login" name="login">
<div class="container">
	<h1>Login</h1>
	<div class="form-group bordered">
		<div class="row form-group">
			<div class="col-md-6">
				<!-- display a message -->
				@if(Session::has('message'))
				<p style="color: red;">{!! Session::get('message') !!}</p>
				@endif
			
				{!! Form::open(array('method' => 'post', 'action' => 'Login@authenticate')) !!}
				

				<!-- if there are login errors, show them here -->
				<p>
					{!! $errors->first('email') !!}
					{!! $errors->first('password') !!}
				</p>

				<p>
					{!! Form::label('email', 'Email Address') !!}
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'awesome@awesome.com', 'required' => true)) !!}
					</div>
				</p>

				<p>
					{!! Form::label('password', 'Password') !!}
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-barcode"></i></span>{!! Form::password('password', array('class' => 'form-control', 'required' => true)) !!}
					</div>
				</p>

				<p>{!! Form::submit('Login', array('class' => 'btn btn-lg btn-success pull-right')) !!}</p>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
</div>
@endsection
