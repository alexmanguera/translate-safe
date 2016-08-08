@extends('layouts.master')


	@section('title', 'Payment Details')


	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">

		<div class="form-group bordered">
			<div class="row">
				<div class="row col-sm-6">	
					<h4>PAYMENT DETAILS</h4>
					<div class="row bottom-dashed">	
						  <div class="col-sm-6"><strong>Name</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_name') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Email</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_email') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Translating From</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_language_from') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Translating To</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_language_to') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Total Page/s</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_total_page_count') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Delivery Estimate</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_delivery_estimate') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Urgency</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_urgency') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Delivery</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_delivery') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Certification</strong></div>
						  <div class="col-sm-6 text-right">{!! Session::get('checkout_certification') !!}</div>
					</div>
					<div class="row bottom-dashed">
						  <div class="col-sm-6"><strong>Order Total</strong></div>
						  <div class="col-sm-6 text-right">${!! Session::get('checkout_order_total') !!}</div>
					</div>
				</div>
				<div class="row col-sm-6">
					<div class="row">
						  <div class="col-sm-6-fluid">
							<strong>Order Processed</strong>
							<p>We've successfully received your order.</p>
						  </div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	</div>
	@endsection
	<!-- end the content section -->