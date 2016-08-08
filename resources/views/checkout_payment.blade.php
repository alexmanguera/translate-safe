@extends('layouts.master')

	@section('title', 'Checkout')
	
	
	<!-- start the css section -->
	@section('cssstyle')
	<style type="text/css" media="screen">
	.has-error input {
	  border-width: 2px;
	}

	.validation.text-danger:after {
	  content: 'Validation failed';
	}

	.validation.text-success:after {
	  content: 'Validation passed';
	}
	</style>
	@endsection
	<!-- end the css section -->
	
	<!-- start the javascript section -->
	@section('jsscripts')
	<script>
    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');

      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };

      $('form').submit(function(e) {
        e.preventDefault();

        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);

        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
      });

    });
	</script>
	@endsection
	<!-- end the javascript section -->
	
	
	
	
	
	
	<!-- start the content section -->
	@section('content')
	<div id="about" name="about">
	<div class="container">
	
		<div class="pull-right">
			<img src="{!! asset('/assets/img/step4.png') !!}">
		</div>
		
		<h3>CHECKOUT</h3>

		

				<div class="row col-sm-7 form-group radio">
					<h4>BILLING INFORMATION</h4>
					<!-- {!! Form::open(array('id' => 'checkout', 'method' => 'post', 'url' => 'checkout/payment_process')) !!}
					<div class="row form-group">
						<div class="row-fluid">
							<div id="payment-form"></div>
								<input type="submit" class="btn btn-lg btn-success" value="Process Payment Now">
				{!! Form::close() !!}
								<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
								<script>
									braintree.setup("{!! $clientToken !!}", "dropin", {
									  container: "payment-form"
									});
								</script>
						</div>
					</div> -->
					
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#creditcard">Credit Card</a></li>
						<li><a data-toggle="tab" href="#paypal">Paypal</a></li>
					</ul>
					
					<div class="tab-content">
						<div id="creditcard" class="form-group tab-pane fade in active">
						{!! Form::open(array('id' => 'checkout', 'method' => 'post', 'url' => 'checkout/payment_process_credit_card')) !!}
							<div class="row">
								<div class="col-sm-6">
									<img src="{!! asset('/assets/img/cc_logos.png') !!}">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6">
									{!! Form::label('fname', 'First Name*') !!}
										{!! Form::text('cc_first_name', '', array('class' => 'form-control', 'required' => true)) !!}	
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6">
									{!! Form::label('lname', 'Last Name*') !!}
										{!! Form::text('cc_last_name', '', array('class' => 'form-control', 'required' => true)) !!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6">
									{!! Form::label('ccnumber', 'Card Number*') !!}
										{!! Form::text('cc_number', '', array('class' => 'form-control', 'required' => true, 'maxlength' => '16')) !!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									{!! Form::label('ccv', 'CCV*') !!}
										{!! Form::text('cc_ccv', '', array('class' => 'form-control', 'required' => true, 'maxlength' => '4')) !!}
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									{!! Form::label('exp_mo', 'Expiry Month*') !!}
										{!! Form::selectRange('cc_month', 01, 12, null, ['class' => 'form-control', 'required' => true]) !!}
									</div>
								<div class="col-sm-3">
									{!! Form::label('exp_yr', 'Expiry Year*') !!}
										{!! Form::selectRange('cc_year', 2015, 2025, null, ['class' => 'form-control', 'required' => true]) !!}
									</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success pull-right" style="margin-top:-2px;font-weight:700;">PROCESS PAYMENT <span style="font-weight: 300"></span></button>
								</div>
							</div>
						{!! Form::close() !!}
						</div>
						<div id="paypal" class="tab-pane fade">
						paypal payment
						</div>
					</div>
					
				</div>
					
				<div class="row col-sm-5 form-group text-center">
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<td>
									<label>ORDER TOTAL</label>
									<div><h1>$<span class="order_total_disp">{!! Session::get('checkout_order_total') !!}</span><h1></div>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{!! Session::get('checkout_language_from') !!} to {!! Session::get('checkout_language_to') !!}</td>
							</tr>
							<tr>
								<td>{!! Session::get('checkout_total_page_count') !!} Pages</td>
							</tr>
							<tr class="order_delivery_disp">
								<td><span></span>{!! Session::get('checkout_delivery') !!}</td>
							</tr>
							<tr class="order_certification_disp">
								<td><span></span>{!! Session::get('checkout_certification') !!}</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<p>
										<em>Delivery Estimate</em>
										<br>
										<span id="sidebar-delivery-estimate">{!! Session::get('checkout_delivery_estimate') !!}</span>
									</p>
								</td>
							</tr>
						</foot>
					</table>
				</div>
			</div>
		</div>
		
	</div>
	</div>
	@endsection
	<!-- end the content section -->