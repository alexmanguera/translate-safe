@extends('layouts.master')

	@section('title', 'Checkout')
	
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
		<div class="pull-right">
			<img src="{!! asset('/assets/img/step1.png') !!}">
		</div>

		<h3>CHECKOUT</h3>
		
		<div class="form-group bordered">
			<div class="row">
				<div class="row col-md-7 form-group">
					<h4>CONTACT INFORMATION</h4>
					<p>If we have questions about your order, we'll contact you here.</p>
					{!! Form::open(array('method' => 'post', 'url' => 'checkout/details', 'id' => 'checkout_form', 'files'=>true)) !!}
					<div class="row form-group ">
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>{!! Form::text('name', '', array('class' => 'form-control input-lg class1 class2', 'placeholder' => 'Name', 'value' => Session::get('name'), 'required' => true)) !!}
						</div>
					</div>
					<div class="row form-group ">
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>{!! Form::text('email', '', array('class' => 'form-control input-lg class1 class2', 'placeholder' => 'E-mail', 'required' => true)) !!}
						</div>
					</div>
					<h4>DOCUMENTS</h4>
					<div class="row form-group ">
						Upload the document(s) you need translated.
						<!-- display a message -->
						@if(Session::has('message'))
						<p style="color: red;">{!! Session::get('message') !!}</p>
						@endif
					</div>
					<div class="row form-group ">
						<input type="hidden" role="uploadcare-uploader" name="qs-file" data-upload-url-base="" data-multiple="true"/>
						<p>
						 <span class="glyphicon glyphicon-camera"></span><strong>Don't have a scanned copy?</strong><br>We can accept images from a smart phone or camera.
						</p>
					</div>
					<div class="row form-group ">
						{!! Form::button('Continue >', array('type' => 'submit', 'class'=> 'btn btn-lg btn-success pull-right', 'data-loading-text' => 'Loading...', 'id' => 'submit-button')) !!}
					</div>
					{!! Form::close() !!}
				</div>
				<div class="col-md-5 form-group">
					<div class="row" style="padding: 0px 0px 50px 50px;border-bottom: 1px solid #e6eaea;">
						<h4>What's Included</h4>
						<div class="row">
							<div class="col-md-1">
								<img src="{!! asset('/assets/img/check.png') !!}">
							</div>
							<div class="col-md-11">
								100% Guaranteed Acceptance
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1">
								<img src="{!! asset('/assets/img/check.png') !!}">
							</div>
							<div class="col-md-11">
								USCIS-Compliant Certification Page
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1">
								<img src="{!! asset('/assets/img/check.png') !!}">
							</div>
							<div class="col-md-11">
								Free Delivery Via Email
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1">
								<img src="{!! asset('/assets/img/check.png') !!}">
							</div>
							<div class="col-md-11">
								Other Delivery Options Available
								<br>
							</div>
						</div>
					</div>
					<div class="row" style="padding: 30px 20px">
						<p><span class="glyphicon glyphicon-paperclip"></span>We accept all common document and image types, including: <strong>PDF</strong>, <strong>DOCX</strong>, and <strong>JPG</strong></p>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->
	
	<!-- start the javascript section -->
	@section('jsscripts')

	@endsection
	<!-- end the javascript section -->