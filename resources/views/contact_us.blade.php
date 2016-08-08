@extends('layouts.master')

@section('title', 'Contact Us')


@section('content')

<!-- ==== CONTACT US ==== -->

<!-- ==== HEADERWRAP ==== -->
<div id="contact_us" name="contact_us">
	<div class="fill_background">
	  <header class="clearfix">
		<h3>CONTACT US</h3>
		<p>
			We're very interested in your questions, comments, and concerns.<br> Reach out to us and we'll get back to you.
		</p>
	</div>
</div>
<!-- /headerwrap --> 

<div class="row" style="padding-top: 25px;border-bottom: 1px solid #e6eaea;background-color: #F4F6F6;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pull-left">
			<ol class="breadcrumb" style="background-color: transparent;">
				<li><a href="{!! URL::to('/') !!}">Home</a></li>
				<li><a href="{!! URL::to('/about-us') !!}">About Us</a></li>
				<li class="active">Contact Us</li>
			</ol>
			</div>
		</div>
	</div>
</div>

<div id="contact_us_form">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h3>GET IN TOUCH</h3>
				<p>
				We aim to get back to our customers within 1 business day. Our offices are closed Saturday & Sunday, so the responses on those days may be delayed.
				</p>
				<div class="bordered">
					{!! Form::open(array('method' => 'post', 'url' => '/checkout')) !!}
							<input name="source" value="passport-squeeze" type="hidden">
							<input name="service" value="certified_translation" type="hidden">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										{!! Form::label('name', 'Name*') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>{!! Form::text('contact_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Sam Smith','required' => true)) !!}
											</div>
										</div>
										{!! Form::label('email_address', 'E-mail Address*') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('contact_email', '', array('class' => 'form-control', 'placeholder' => 'e.g. mail@example.com','required' => true)) !!}
											</div>
										</div>
										{!! Form::label('company_name', 'Company Name') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-home"></i></span>{!! Form::text('company_name', '', array('class' => 'form-control', 'placeholder' => 'e.g. Microsoft')) !!}
											</div>
										</div>
										{!! Form::label('phone', 'Phone Number') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-phone"></i></span>{!! Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'e.g. +123 4567890')) !!}
											</div>
										</div>
										{!! Form::label('needs', 'Message*') !!}
										<div class="row form-group ">
											<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-pencil"></i></span>{!! Form::textarea('needs', null, ['class' => 'form-control','required' => true]) !!}
											</div>
										</div>
										<br>
										<button type="submit" class="btn btn-default" style="margin-top:-2px;font-weight:700;color:#000;">SUBMIT</button>
									</div>
								</div>
							</div>
							{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection